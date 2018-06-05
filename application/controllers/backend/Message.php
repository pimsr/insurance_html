<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['page'] = 'message';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@b/message', $data);
	}
}
