<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/login_model');
	}
	public function index()
	{
		$data['page'] = 'login';
		$data['link_img'] = base_url('assets/frontend/img/');
		$this->load->view('backend/login', $data);
	}

	public function check()
	{
		if($this->input->post()){
			$res = $this->login_model->selectAdmin($_POST);
			if(sizeOf($res) > 0) {
				$update = $this->login_model->updateAdmin(array(
					'last_login' => date("Y-m-d H:i:s")
				));
				if($update > 0) {
					$this->session->set_userdata('admin', $res[0]->user);
					redirect("backend/home", "refresh");
				}
			}else{
				redirect("backend/login", "refresh");
			}
		}
	}
}
