<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Organization_model extends CI_Model {
  public function all()
  {
    $query = $this->db
      ->select('user_id, name, location_id, description, rating, website, type, photo, establishment_date, address, postal_code, office_phone')
      ->get('organizations');
    if ($query->num_rows() >= 1) {
      return $query->result();
    }
    return false;
  }

  public function get($id)
  {
    $organization = $this->db
      ->select('user_id, name, location_id, description, rating, website, type, photo, establishment_date, address, postal_code, office_phone')
      ->get_where('organizations', ['id' => $id])
      ->row();
    if ($organization) {
      return $organization;
    } 
    return false;
  }

  public function create($post)
  {
    $data = [
      'user_id' => $post['user_id'],
      'name' => $post['name'],
      'description' => $post['description'],
      'location_id' => $post['location_id'],
      'address' => $post['address'],
      'establishment_date' => $post['establishment_date'],
      'office_phone' => $post['office_phone'],
      'postal_code' => $post['postal_code'],
      'website' => $post['website'],
      'type' => $post['type'],
    ];
    if (isset($post['id']) && $post['id'] != null) {
      $this->db->where(['id' => $post['id']]);
      $this->db->update('organizations', $data);
      return $post['id'];
    }
    $this->db->insert('organizations', $data);
    return $this->db->insert_id();
  }

  public function delete($id)
  {
    if($this->db->delete('organizations', ['id' => $id])) {
      return true;
    }
    return false;
  }

}