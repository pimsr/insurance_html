<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['page'] = 'contact';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@f/contact', $data);
	}
	public function agent($id = 0)
	{
		if($id === 0) {
			$data['page'] = 'contact';
			$data['link_img'] = base_url('assets/frontend/images/');
			$this->twig->display('@f/agent', $data);
		}else{
			$data['page'] = 'contact';
			$data['link_img'] = base_url('assets/frontend/images/');
			$this->twig->display('@f/agent-'.$id, $data);
		}
	}
}
