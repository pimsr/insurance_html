<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('hospital_model');
	}
	public function index()
	{
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'hospital');
		$data['lang'] = $lang;
		$data['page'] = 'hospital';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/fullsize/cover/');
		$data['cover'] = $this->main_model->selectCover('hospital');
		$data['headline'] = $this->main_model->selectHeadline('hospital');
		$data['nav'] = $this->main_model->selectNavbar();
		$data['data'] = $this->hospital_model->selectHospital();
		$data['province'] = $this->hospital_model->selectProvince();
		$this->twig->display('@f/hospital', $data);
	}
}
