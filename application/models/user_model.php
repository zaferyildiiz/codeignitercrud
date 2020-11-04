<?php
/**
 *
 */
class User_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function get_user()
  {
    return $this->db->get('Users')->result();
  }

  public function select_user($id)
  {
    $query = $this->db->where('id',$id)->get('Users')->row();
    return $query;
  }

  public function insert_user($data)
  {
    return $this->db->insert('Users',$data);
  }

  public function update_user($id,$data)
  {
    $this->db->where('id', $id);
    $query=$this->db->update('Users', $data);
    return $query;
  }

  public function delete_user($id)
  {
   return $this->db->where('id',$id)->delete('Users');
  }
}


?>
