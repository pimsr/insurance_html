<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Momandkids extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['page'] = 'momandkids';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@b/momandkids', $data);
	}
	public function detail()
	{
		$data['page'] = 'momandkids';
		$data['subpage'] = 'detail';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@b/momandkids-detail', $data);
	}
}
