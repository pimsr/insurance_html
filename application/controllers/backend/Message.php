<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/message_model');
	}
	public function index()
	{
		$data['page'] = 'message';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['kids'] = $this->message_model->selectContactKids();
		$data['data'] = $this->message_model->selectContactData();
		$this->twig->display('@b/message', $data);
	}
}
