<?php
class Wisesaying_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function gets(){
      return $this->db->query('SELECT * FROM wisesaying')->result();
    }

    function get($wisesaying_id){
      $this->db->select('id');
      $this->db->select('title');
      $this->db->select('description');
      return $this->db->get_where('wisesaying', array('id'=>$wisesaying_id))->row();
    }

    function add($title, $description){
      $this->db->insert('wisesaying', array(
        'title'=>$title,
        'description'=>$description
      ));
      return $this->db->insert_id();
    }

    function delete($wisesaying_id){
      return $this->db->delete('wisesaying', array('id'=>$wisesaying_id));
    }
}