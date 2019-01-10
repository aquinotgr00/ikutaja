<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
  public function all()
  {
    $query = $this->db
      ->select('username, email, type, phone')
      ->get('users');
    if ($query->num_rows() >= 1) {
      return $query->result();
    }
    return false;
  }

  public function get($id)
  {
    $user = $this->db
      ->select('id, username, email, type, phone')
      ->get_where('users', ['id' => $id])
      ->row();
    if ($user) {
      $data = [
        'user' => $user
      ];
      if($user->type == 1) {
        $user_vol = $this->db
          ->select('*')
          ->get_where('volunteers', ['user_id' => $user->id])
          ->row();
        $data['volunteers'] = $user_vol;
      } else if($user->type == 2) {
        $user_org = $this->db
          ->select('*')
          ->get_where('organizations', ['user_id' => $user->id])
          ->row();
        $data['organization'] = $user_org;
      }
      return $data;
    } 
    return false;
  }

  public function create($post)
  {
    $data = [
      'username' => $post['username'],
      'email' => $post['email'],
      'phone' => $post['phone'],
      'type' => $post['type'],
    ];
    if (isset($post['id']) && $post['id'] != null) {
      $this->db->where(['id' => $post['id']]);
      $this->db->update('users', $data);
      return $post['id'];
    }
    $data['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
    $this->db->insert('users', $data);
    return $this->db->insert_id();
  }

  public function delete($id)
  {
    if($this->db->delete('users', ['id' => $id])) {
      return true;
    }
    return false;
  }

  public function getOrgById($id)
  {
    $organization = $this->db
      ->get_where('organizations', ['user_id' => $id])
      ->row();
    return $organization;
  }

  public function login($email, $password)
  {
    // fetch by email first
    $user = $this->db
      ->get_where('users', [ 'email' => $email ])
      ->row();

    if (!empty($user) && password_verify($password, $user->password)) {
      // if this email exists, and the input password is verified using password_verify
      return $user;
    } 
    return false;
  }
}