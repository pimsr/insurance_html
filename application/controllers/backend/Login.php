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
		$data['alert'] = 0;
		if($this->session->userdata('alert')) {
			$data['alert'] = $this->session->userdata('alert');
			$this->session->unset_userdata('alert');
		}
		$this->twig->display('@b/login', $data);
	}

	public function check()
	{
		if($this->input->post()){
			$res = $this->main_model->selectAdmin($_POST);
			if($res != null){
				$log = $this->main_model->insertLog($res['id']);
				if($log > 0){
					$this->session->set_userdata('admin', array(
						'admin' => $res['user']
					));
				}
			}else{
				$this->session->set_userdata('alert', 1);
			}
			redirect('backend/home', 'refresh');
		}
	}
}

