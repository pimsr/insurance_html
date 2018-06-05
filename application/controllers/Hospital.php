<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['page'] = 'hospital';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@f/hospital', $data);
	}
}
