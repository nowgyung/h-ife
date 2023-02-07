<?php
class Goodwriting_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function gets(){
      return $this->db->query('SELECT * FROM goodwriting')->result();
    }

    function get($goodwriting_id){
      $this->db->select('id');
      $this->db->select('title');
      $this->db->select('description');
      return $this->db->get_where('goodwriting', array('id'=>$goodwriting_id))->row();
    }

    function add($title, $description){
      $this->db->insert('goodwriting', array(
        'title'=>$title,
        'description'=>$description
      ));
      return $this->db->insert_id();
    }

    function delete($goodwriting_id){
      return $this->db->delete('goodwriting', array('id'=>$goodwriting_id));
    }
}