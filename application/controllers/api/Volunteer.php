<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Volunteer extends REST_Controller
{
  public function __construct() 
  {
    parent::__construct();
    $this->load->model('Volunteer_model');
    $this->load->model('User_model');
  }

  public function index_get($id = null)
  {
    $headers = $this->input->request_headers();
    
    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        $response = [
          'message' => 'Berhasil menampilkan volunteer(s).',
          'success' => 1,
          'http_status' => 200,
          'result' => [
            'volunteers' => ($id != null)
              ? $this->Volunteer_model->get($id)
              : $this->Volunteer_model->all()
            ]
        ];
        ($response['result']['volunteers'] == false)
          ? $response = [
              'message' => 'Tidak ada volunteer.',
              'success' => 0,
            ]
          : '';
        $this->set_response($response, 404);
        return;
      }
    }
    $response = [
      'message' => 'Gagal menampilkan volunteer(s). Dilarang.',
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
            'message' => 'volunteer berhasil di hapus.',
            'status' => 1,
          ];
          $this->Volunteer_model->delete($id);
          $this->set_response($response);
          return;
        }
      }
      $response = [
        'message' => 'Gagal menghapus volunteer. Dilarang.',
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

    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        foreach ($this->post() as $key => $value) {                           // get the post data
          if (strpos($key, 'user') !== FALSE) {                               // separate between user data
            $dataPostUser[substr($key, 5)] = $value;
          } else if (strpos($key, 'volunteer') !== FALSE) {                   // and volunteer data
            $dataPostVol[substr($key, 10)] = $value;
          } else {
            $dataPostField[$key] = $value;
          }
        }
        $userId = $this->User_model->create($dataPostUser, $token);           // create user and save the id
        $dataPostVol['user_id'] = $userId;                                    // add user id to volunteer data
        $id = $this->Volunteer_model->create($dataPostVol, $token);
        $dataPostField['volunteer_id'] = $id;
        $response = $this->Volunteer_model->addVolunteerField($dataPostField);
        if ($id != false) {
          $response = [
            'message' => 'Berhasil menambahkan volunteer.',
            'success' => 1,
            'http_status' => 200,
            'result' => $this->Volunteer_model->get($id)
          ];
        } else {
          $response = [
            'message' => 'Gagal menambahkan volunteer.',
            'success' => 0,
          ];
        }
        $this->set_response($response, 404);
        return;
      }
      $response = [
        'message' => 'Gagal! Terjadi masalah. Token is expired',
        'status' =>  0,
      ];
      $this->set_response($response, 503);
      return;
    }
    $response = [
      'message' => 'Gagal! Dilarang.',
      'status' => 0,
    ];
    $this->set_response($response, 503);
  }
}