<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->session->unset_userdata('admin');
		redirect('backend/login', 'refresh');
	}
}
