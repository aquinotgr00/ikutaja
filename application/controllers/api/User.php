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
    // $this->set_response($headers, 200);
    // return;
    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        $user = ($id != null)
          ? $this->User_model->get($id)
          : $this->User_model->all();
        $this->set_response($user, REST_Controller::HTTP_OK);
        return;
      }
    }
    $response = [
      'status' => REST_Controller::HTTP_FORBIDDEN,
      'message' => 'Forbidden',
    ];
    $this->set_response($response, REST_Controller::HTTP_FORBIDDEN);
  }

  public function delete_post($id)
  {
    $headers = $this->input->request_headers();

    if (Authorization::tokenIsExist($headers)) {
      $token = Authorization::validateToken($headers['Authorization']);
      if ($token != false) {
        $dataPost = $this->input->post();
        $id = $this->User_model->create($dataPost, $token);
        if ($id != false) {
          $this->User_model->delete($id);
          $this->set_response('user deleted successfully', REST_Controller::HTTP_OK);
          return;
        }
      }
      $response = [
        'status' => REST_Controller::HTTP_UNAUTHORIZED,
        'message' => 'Unauthorized',
      ];
      $this->set_response($response, REST_Controller::HTTP_UNAUTHORIZED);
      return;
    }
    $response = [
      'status' => REST_Controller::HTTP_FORBIDDEN,
      'message' => 'Forbidden',
    ];
    $this->set_response($response, REST_Controller::HTTP_FORBIDDEN);
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
          $this->set_response($user, REST_Controller::HTTP_OK);
          return;
        }
      }
      $response = [
        'status' => REST_Controller::HTTP_UNAUTHORIZED,
        'message' => 'Unauthorized',
      ];
      $this->set_response($response, REST_Controller::HTTP_UNAUTHORIZED);
      return;
    }
    $response = [
      'status' => REST_Controller::HTTP_FORBIDDEN,
      'message' => 'Forbidden',
    ];
    $this->set_response($response, REST_Controller::HTTP_FORBIDDEN);
  }
}