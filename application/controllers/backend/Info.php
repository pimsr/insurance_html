<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['page'] = 'info';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@b/info', $data);
	}
	public function detail()
	{
		$data['page'] = 'info';
		$data['subpage'] = 'detail';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@b/info-detail', $data);
	}
}
