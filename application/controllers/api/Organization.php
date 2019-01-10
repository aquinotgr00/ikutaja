<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Organization extends REST_Controller
{
  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Organization_model');
    $this->load->model('User_model');
    $this->load->model('Event_model');
    // $headers = $this->input->request_headers();
    // if (!Authorization::tokenIsExist($headers)) {
    //   showRestrict();      
    // } else {
    //   $token = Authorization::validateToken($headers['Authorization']);
    //   if ($token == false) {
    //     $response = [
    //       'message' => 'Gagal! Terjadi masalah.',
    //       'status' =>  0,
    //     ];
    //     $this->set_response($response, 503);
    //     return;
    //   }
    // }
  }

  public function index_get($id = null)
  {
    $headers = $this->input->request_headers();
    
    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        $response = [
          'message' => 'Berhasil menampilkan organization(s).',
          'success' => 1,
          'http_status' => 200,
          'result' => [
            'organizations' => ($id != null)
              ? $this->Organization_model->get($id)
              : $this->Organization_model->all()
            ]
        ];
        ($response['result']['organizations'] == false)
          ? $response = [
              'message' => 'Tidak ada organization.',
              'success' => 0,
            ]
          : '';
        $this->set_response($response, 404);
        return;
      }
    }
    $response = [
      'message' => 'Gagal menampilkan organization(s). Dilarang.',
      'success' => 0,
    ];
    $this->set_response($response, 503);
  }

  public function delete_post($id)
  {
    $headers = $this->input->request_headers();

    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        if ($id != false) {
          $response = [
            'message' => 'organization berhasil di hapus.',
            'status' => 1,
          ];
          $this->Organization_model->delete($id);
          $this->set_response($response);
          return;
        }
      }
      $response = [
        'message' => 'Gagal menghapus organization. Dilarang.',
        'status' => 0,
      ];
      $this->set_response($response, 503);
      return;
    }
    $response = [
      'message' => 'Dilarang.',
      'status' => 0,
    ];
    $this->set_response($response);
  }

  public function index_post()
  {
    $headers = $this->input->request_headers();

    foreach ($this->post() as $key => $value) {                           // get the post data
      if (strpos($key, 'user') !== FALSE) {                               // separate between user data
        $dataPostUser[substr($key, 5)] = $value;
      } else {                                                            // and organization data
        $dataPostOrg[substr($key, 4)] = $value;
      }
    }
    $userId = $this->User_model->create($dataPostUser);           // create user and save the id
    $dataPostOrg['user_id'] = $userId;                                    // add user id to organization data
    $id = $this->Organization_model->create($dataPostOrg);        // create organization and get the organization id
    if ($id != false) {                                                   // is it successfull?
      $response = [
        'message' => 'Berhasil menambahkan organization.',
        'success' => 1,
        'http_status' => 200,
        'result' => $this->Organization_model->get($id)
      ];
    } else {                                                              // or not ?
      $response = [
        'message' => 'Gagal menambahkan organization.',
        'success' => 0,
      ];
    }
    $this->set_response($response, 404);                                  // give back the response
    return;
  }

  public function createEvent_post()
  {
    $data = $this->post();
    $id = $this->Event_model->create($data);        // create organization and get the organization id
    $this->set_response($id); return;
    // if ($id != false) {                                                   // is it successfull?
    //   $response = [
    //     'message' => 'Berhasil menambahkan event.',
    //     'success' => 1,
    //     'http_status' => 200,
    //     'result' => $this->Event_model->get($id, $data->organization_id)
    //   ];
    // } 
    // else {                                                              // or not ?
    //   $response = [
    //     'message' => 'Gagal menambahkan event.',
    //     'success' => 0,
    //   ];
    // }
    // $this->set_response($response, 404);                                  // give back the response
    // return;
  }

  public function getAllEventsById_get()
  {
    $headers = $this->input->request_headers();

    $token = Authorization::validateToken($headers['Authorization']);
    $user = $this->User_model->get($token->id);
    $events = $this->Event_model->allById($user['organization']->id);
    $this->set_response($events); return;
  }

  public function getAllEvents_get()
  {
    $headers = $this->input->request_headers();

    $token = Authorization::validateToken($headers['Authorization']);
    $user = $this->User_model->get($token->id);
    $events = $this->Event_model->all();
    $this->set_response($events); return;
  }
}