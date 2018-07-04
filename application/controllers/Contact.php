<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('contact_model');
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

	public function sendMsgKids()
	{
		if($this->input->post()){
			$res = $this->contact_model->insertContactKids($_POST);
			if($res > 0){
				$page = $this->session->userdata('page');
				$link = base_url($page);
				echo "<script>alert('ส่งข้อมูลสำเร็จ'); window.location.href = '".$link."'</script>";
			}
		}
	}
}
