<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('home_model');
		$this->load->model('momandkids_model');
		$this->load->model('info_model');
	}
	public function index()
	{
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'home');
		$data['lang'] = $lang;
        $data['page'] = "home";
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_banner'] = base_url('upload/fullsize/banner/');
		$data['link_home'] = base_url('upload/fullsize/home/');
		$data['link_review'] = base_url('upload/fullsize/review/');
		$data['nav'] = $this->main_model->selectNavbar();
		$data['banner'] = $this->home_model->selectBanner();
		$data['dotcom_headline'] = $this->main_model->selectHeadline('dotcom');
		$data['dotcom'] = $this->home_model->selectHome();
		$data['review'] = $this->home_model->selectReview();
		$data['news_lastest'] = $this->momandkids_model->selectNewsLastest(3);
		$data['info'] = $this->info_model->selectInsurance();
		$data['insur_img'] = $this->info_model->selectInsuranceImg();
		
		$this->twig->display('@f/home', $data);
	}
}
