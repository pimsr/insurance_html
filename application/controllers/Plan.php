<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('plan_model');
	}
	public function index()
	{
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'plan');
		$data['lang'] = $lang;
		$data['page'] = 'plan';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/fullsize/cover/');
		$data['link_plan'] = base_url('upload/fullsize/plan/');
		$data['cover'] = $this->main_model->selectCover('plan');
		$data['nav'] = $this->main_model->selectNavbar();
		$data['data'] = array(
			'content' => $this->plan_model->selectContent(),
			'package' => $this->plan_model->selectPackage()
		);
		// echo '<pre>';
		// var_dump($data['data']);
		// exit();
		$this->twig->display('@f/plan', $data);
	}
}
