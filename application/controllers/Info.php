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
		$this->twig->display('@f/insurance', $data);
	}
	public function detail($id = 0)
	{
		if($id == 0){
			redirect('info', 'refresh');
		}
		$data['page'] = 'info';
		$data['link_img'] = base_url('assets/frontend/images/');
		$this->twig->display('@f/insurance-'.$id, $data);
	}
}
