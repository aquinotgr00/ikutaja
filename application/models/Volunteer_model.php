<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_model extends CI_Model {
  public function all()
  {
    $query = $this->db
      ->select('first_name, last_name, location_id, description')
      ->get('volunteers');
    if ($query->num_rows() >= 1) {
      return $query->result();
    }
    return false;
  }

  public function get($id)
  {
    $user = $this->db
      ->select('first_name, last_name, location_id, description')
      ->get_where('volunteers', ['id' => $id])
      ->row();
    if ($user) {
      return $user;
    } 
    return false;
  }

  public function create($post, $token)
  {
    $data = [
      'first_name' => $post['first_name'],
      'last_name' => $post['last_name'],
      'description' => $post['description'],
      'location_id' => $post['location_id'],
    ];
    if (isset($post['id']) && $post['id'] != null) {
      $this->db->where(['id' => $post['id']]);
      $this->db->update('volunteers', $data);
      return $post['id'];
    }
    return $this->db->insert_id();
  }

  public function delete($id)
  {
    if($this->db->delete('volunteers', ['id' => $id])) {
      return true;
    }
    return false;
  }

}