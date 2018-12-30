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
      ->select('username, email, type, phone')
      ->get_where('users', ['id' => $id])
      ->row();
    if ($user) {
      return $user;
    } 
    return false;
  }

  public function create($post, $token)
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

  public function login($username, $password)
  {
    $condition = [
      'username' => $username,
      'password' => $password,
    ];

    $user = $this->db
      ->get_where('users', $condition)
      ->row();
    if ($user != null) {
      return $user;
    }
    return false;
  }
}