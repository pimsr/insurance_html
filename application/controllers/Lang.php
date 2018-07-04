<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lang extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		
	}
	public function change($lang)
	{
		$this->session->set_userdata('lang', $lang);
		$page = $this->session->userdata('page');
		redirect( $page , 'refresh');
	}
}
