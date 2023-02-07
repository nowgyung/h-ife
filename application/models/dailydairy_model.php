<?php
class Dailydairy_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function gets(){
      return $this->db->query('SELECT * FROM dailydairy')->result();
    }

    function get($dailydairy_id){
      $this->db->select('id');
      $this->db->select('title');
      $this->db->select('description');
      return $this->db->get_where('dailydairy', array('id'=>$dailydairy_id))->row();
    }

    function add($title, $description){
      $this->db->insert('dailydairy', array(
        'title'=>$title,
        'description'=>$description
      ));
      return $this->db->insert_id();
    }

    function delete($dailydairy_id){
      return $this->db->delete('dailydairy', array('id'=>$dailydairy_id));
    }
}