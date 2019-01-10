<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller
{
  public function __construct() 
  {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function index_get($id = null)
  {
    $headers = $this->input->request_headers();
    
    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        $response = [
          'message' => 'Berhasil menampilkan user(s).',
          'success' => 1,
          'http_status' => 200,
          'result' => ($id != null)
              ? $this->User_model->get($id)
              : [ 'user' => $this->User_model->all() ]
        ];
        ($response['result']['user'] == false)
          ? $response = [
              'message' => 'Tidak ada user dengan id ini.',
              'success' => 0,
            ]
          : '';
        $this->set_response($response, 404);
        return;
      }
    }
    $response = [
      'message' => 'Gagal menampilkan user(s). Dilarang.',
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
            'message' => 'User berhasil di hapus.',
            'status' => 1,
          ];
          $this->User_model->delete($id);
          $this->set_response($response);
          return;
        }
      }
      $response = [
        'message' => 'Gagal menghapus user. Dilarang.',
        'status' => 0,
      ];
      $this->set_response($response, 503);
      return;
    }
    $response = [
      'message' => 'Dilarang.',
      'status' => 0,
    ];
    $this->set_response($response, 503);
  }

  public function index_post()
  {
    $headers = $this->input->request_headers();

    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        $dataPost = $this->input->post();
        $id = $this->User_model->create($dataPost, $token);
        if ($id != false) {
          $user = $this->User_model->get($id);
          if ($user) {
            $response = [
              'message' => 'Berhasil menambahkan user.',
              'success' => 1,
              'result' => $user
            ];
          } else {
            $response = [
              'message' => 'Gagal menambahkan user.',
              'success' => 0,
            ];
          }
          $this->set_response($response);
          return;
        }
      }
      $response = [
        'message' => 'Gagal! Terjadi masalah.',
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

  public function getOrgById_get($id)
  {
    $organization = $this->User_model->getOrgById($id);
    $this->set_response($organization);
    return;
  }
}