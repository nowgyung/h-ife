<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends MY_Controller {
  function __construct(){
    parent::__construct();

    $this->load->database();
    $this->load->model('goodwriting_model');
    $this->load->model('dailydairy_model');
    $this->load->model('wisesaying_model');

  }

	function index(){
    $this->_header();
    $this->load->view('main');
    $this->_footer();
	}

  function goodwriting($id){
    $this->_header();
    
    $goodwritings = $this->goodwriting_model->gets(); 
    $this->load->view('goodwriting_list', array('goodwritings' => $goodwritings));

    $goodwriting = $this->goodwriting_model->get($id);
    $this->load->helper(array('url', 'HTML'));
    $this->load->view('goodwriting', array('goodwriting'=>$goodwriting));

    $this->_footer();
  }

  function dailydairy($id){
    $this->_header();
    
    $dailydairys = $this->dailydairy_model->gets(); 
    $this->load->view('dailydairy_list', array('dailydairys' => $dailydairys));

    $dailydairy = $this->dailydairy_model->get($id);
    $this->load->helper(array('url', 'HTML'));
    $this->load->view('dailydairy', array('dailydairy'=>$dailydairy));

    $this->_footer();
  }

  function wisesaying($id){
    $this->_header();
    
    $wisesayings = $this->wisesaying_model->gets(); 
    $this->load->view('wisesaying_list', array('wisesayings' => $wisesayings));

    $wisesaying = $this->wisesaying_model->get($id);
    $this->load->helper(array('url', 'HTML'));
    $this->load->view('wisesaying', array('wisesaying'=>$wisesaying));

    $this->_footer();
  }

  function good_add(){
    $this->_header();

    $goodwritings = $this->goodwriting_model->gets(); 
    $this->load->view('goodwriting_list', array('goodwritings' => $goodwritings));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', '제목', 'required');
    $this->form_validation->set_rules('description', '본문', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('good_add');
    }
    else
    {
      $goodwriting_id = $this->goodwriting_model->add($this->input->post('title'),$this->input->post('description'));
    
      $this->load->helper('url');
      redirect('/topic/goodwriting/'.$goodwriting_id);
    }
    $this->_footer();
  }

  function daily_add(){
    $this->_header();

    $dailydairys = $this->dailydairy_model->gets(); 
    $this->load->view('dailydairy_list', array('dailydairys' => $dailydairys));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', '제목', 'required');
    $this->form_validation->set_rules('description', '본문', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('daily_add');
    }
    else
    {
      $dailydairy_id = $this->dailydairy_model->add($this->input->post('title'),$this->input->post('description'));
    
      $this->load->helper('url');
      redirect('/topic/dailydairy/'.$dailydairy_id);
    }
    $this->_footer();
  }

  function wisesaying_add(){
    $this->_header();

    $wisesayings = $this->wisesaying_model->gets(); 
    $this->load->view('wisesaying_list', array('wisesayings' => $wisesayings));

    $this->load->library('form_validation');

    $this->form_validation->set_rules('title', '제목', 'required');
    $this->form_validation->set_rules('description', '본문', 'required');

    if ($this->form_validation->run() == FALSE)
    {
      $this->load->view('wisesaying_add');
    }
    else
    {
      $wisesaying_id = $this->wisesaying_model->add($this->input->post('title'),$this->input->post('description'));
    
      $this->load->helper('url');
      redirect('/topic/wisesaying/'.$wisesaying_id);
    }
    $this->_footer();
  }

  function good_delete(){
    $goodwriting_id = $this->input->post('goodwriting_id');
    $this->_require_login(site_url('/topic/goodwriting/'.$goodwriting_id));
    $this->load->model('goodwriting_model');
    $this->goodwriting_model->delete($goodwriting_id);
    redirect('/topic/goodwriting/1');
  }

  function daily_delete(){
    $dailydairy_id = $this->input->post('dailydairy_id');
    $this->_require_login(site_url('/topic/dailydairy/'.$dailydairy_id));
    $this->load->model('dailydairy_model');
    $this->dailydairy_model->delete($dailydairy_id);
    redirect('/topic/dailydairy/1');
  }

  function wisesaying_delete(){
    $wisesaying_id = $this->input->post('wisesaying_id');
    $this->_require_login(site_url('/topic/wisesaying/'.$wisesaying_id));
    $this->load->model('wisesaying_model');
    $this->wisesaying_model->delete($wisesaying_id);
    redirect('/topic/wisesaying/1');
  }

  function upload_receive_from_ck(){
    // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
    $config['upload_path'] = './static/user';
    // git,jpg,png 파일만 업로드를 허용한다.
    $config['allowed_types'] = 'gif|jpg|png';
    // 허용되는 파일의 최대 사이즈
    $config['max_size'] = '100';
    // 이미지인 경우 허용되는 최대 폭
    $config['max_width']  = '1024';
    // 이미지인 경우 허용되는 최대 높이
    $config['max_height']  = '768';
    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload("upload"))
    {
        // echo $this->upload->display_errors(); //실패이유
        echo "<script>alert('업로드에 실패했습니다.".$this->upload->display_errors('','')."')</script>";
    }   
    else
    {
        $CKEditorFuncNum = $this->input->get('CKEditorFuncNum');

        $data = $this->upload->data(); //url데이터 정보
        $filename = $data['file_name']; //데이터 안에 들어있는 파일이름알아낼수

        $url = '/static/user/'.$filename;

        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."', '".$url."', '전송 성공')</script>";
    }
  }

  function upload_receive(){
    // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
    $config['upload_path'] = './static/user';
    // git,jpg,png 파일만 업로드를 허용한다.
    $config['allowed_types'] = 'gif|jpg|png';
    // 허용되는 파일의 최대 사이즈
    $config['max_size'] = '100';
    // 이미지인 경우 허용되는 최대 폭
    $config['max_width']  = '1024';
    // 이미지인 경우 허용되는 최대 높이
    $config['max_height']  = '768';
    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('user_upload_file'))
    {
        echo $this->upload->display_errors(); //실패이유
    }   
    else
    {
        $data = array('upload_data' => $this->upload->data());
        echo 'ok';
        var_dump($data);
    }
  }

  // function upload_form(){
  //   $this->_header();
  //   // $this->_sidebar();
  //   $this->load->view('upload_form');
  //   $this->_footer();
  // }

  
}
?>
  