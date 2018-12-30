<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Auth extends REST_Controller
{
  public function __construct() 
  {
    parent::__construct();
    $this->load->model('User_model');
  }

  public function login_post()
  {
    // Get all the post data from json.
    $dataPost = $this->post();

    // Get the user.
    $user = $this->User_model->login($dataPost['username'],$dataPost['password']);
    if($user) {
      // If user found then set the token.
      $tokenData['id'] = $user->id;
      $tokenData['username'] = $user->username;
      $date = new DateTime();
      $tokenData['iat'] = $date->getTimestamp();
      $tokenData['exp'] = $date->getTimestamp() + 60*60*5;
      $response = [
        'message' => 'Berhasil masuk.',
        'success' => 1,
        'result' => ['token' => Authorization::generateToken($tokenData)]
      ];
      // give back the token and set response to http 200.
      $this->set_response($response);
    }
    else {
      // Set invalid login and show response accordingly.
      $invalidLogin = [
        'message' => 'Wrong Credentials. Please try again',
        'success' => 0
      ];
      $this->set_response($invalidLogin, 404);
    }
  }
}