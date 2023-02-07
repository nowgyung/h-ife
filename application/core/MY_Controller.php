<?php 
class MY_Controller extends CI_Controller {
  function __construct(){
    parent::__construct(); 
  }
  function _footer(){
    $this->load->view('footer');
  }
  function _header(){
    $this->load->view('header');
    
  }
  function _require_login($return_url){
    if(!$this->session->userdata('is_login')){
      $this->load->helper('url');
      redirect('/auth/login?returnURL='.rawurlencode($return_url));
    }
  }
}
?>