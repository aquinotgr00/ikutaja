<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Organization_model extends CI_Model {
  public function all()
  {
    $query = $this->db
      ->select('id, user_id, name, location_id, description, rating, website, type, photo, establishment_date, address, postal_code, office_phone')
      ->get('organizations');
    if ($query->num_rows() >= 1) {
      return $query->result();
    }
    return false;
  }

  public function get($id)
  {
    $organization = $this->db
      ->select('id, user_id, name, location_id, description, rating, website, type, photo, establishment_date, address, postal_code, office_phone')
      ->get_where('organizations', ['id' => $id])
      ->row();
    if ($organization) {
      return $organization;
    } 
    return false;
  }

  public function create($post)
  {
    foreach ($post as $key => $value) {
      $data[$key] = $value;
    }
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
    $this->db->delete('organization_fields', ['organization_id' => $id]);
    $this->db->delete('events', ['organization_id' => $id]);
    if($this->db->delete('organizations', ['id' => $id])) {
      return true;
    }
    return false;
  }

}