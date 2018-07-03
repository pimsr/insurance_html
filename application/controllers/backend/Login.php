<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/main_model');
	}
	public function index()
	{
		$data['page'] = 'login';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@b/login', $data);
	}

	public function check()
	{
		if($this->input->post()){
			$res = $this->main_model->selectAdmin($_POST);
			if($res != null){
				$this->session->set_userdata('admin', array(
					'admin' => $res['user']
				));
				redirect('backend/home', 'refresh');
			}else{
				echo "<script>$.Notification.notify('error','top right', 'ข้อมูลผิดพลาด', 'ไม่สามารถเข้าสู่ระบบได้')</script>";
			}
		}
	}
}

