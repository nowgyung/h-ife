<?php
class Errors extends CI_Controller{
    public function notfound(){
      $this->load->view('header');
      $this->load->view('error/404');
      $this->load->view('footer');
    }
}
?>