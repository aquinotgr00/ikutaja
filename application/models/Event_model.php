<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model {
  public function all()
  {
    $query = $this->db
      ->select('*')
      // ->get_where('events', [ 'organization_id' => $org_id ]);
      ->get('events');
    if ($query->num_rows() >= 1) {
      return $query->result();
    }
    return false;
  }

  public function allById($org_id)
  {
    $query = $this->db
      ->select('*')
      ->get_where('events', [ 'organization_id' => $org_id ]);
    if ($query->num_rows() >= 1) {
      return $query->result();
    }
    return false;
  }

  public function get($id, $org_id)
  {
    $event = $this->db
      ->select('*')
      ->get_where('events', ['id' => $id, 'organization_id' => $org_id])
      ->row();
    if ($event) {
      return $event;
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
      $this->db->update('events', $data);
      return $post['id'];
    }
    if($this->db->insert('events', $data)) {
      return $this->db->insert_id();
    }
  }

  public function delete($id)
  {
    if($this->db->delete('events', ['id' => $id])) {
      return true;
    }
    return $id;
  }

}