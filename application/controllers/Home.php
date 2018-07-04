<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('home_model');
	}
	public function index()
	{
		$lang = $this->currentLang();
		$data['lang'] = $lang;
        $data['page'] = "home";
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_banner'] = base_url('upload/fullsize/banner/');
		$data['link_home'] = base_url('upload/fullsize/home/');
		$data['link_review'] = base_url('upload/fullsize/review/');
		$data['banner'] = $this->home_model->selectBanner();
		$data['dotcom_headline'] = $this->main_model->selectHeadline('dotcom');
		$data['dotcom'] = $this->home_model->selectHome();
		$data['review'] = $this->home_model->selectReview();
		$this->twig->display('@f/home', $data);
	}
}
