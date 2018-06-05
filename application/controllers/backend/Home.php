<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checkAdmin();
		$this->load->model('backend/home_model');
	}
	public function index()
	{
		$data['page'] = 'home';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_home'] = base_url('upload/home/');
		$data['data'] = $this->home_model->selectHome();
		$data['cate'] = $this->home_model->selectCategory();
		$data['project'] = $this->home_model->selectProject();
		$data['home_project'] = $this->home_model->selectHomeProject();
		$this->load->view('backend/home', $data);
	}
	public function save()
	{
		if($this->input->post())
		{
			$img = null;
			$img = $this->imageManipulation('home', $_FILES, 'img');
			if($img != null){
				$res = $this->home_model->updateHome($_POST, $img);
				if($res > 0){
					redirect('backend/home', 'refresh');
				}
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('backend/login', 'refresh');
	}
}
