<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['page'] = 'home';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@f/home', $data);
	}
}
