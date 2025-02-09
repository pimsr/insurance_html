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
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'contact');
		$data['lang'] = $lang;
		$data['page'] = 'contact';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/fullsize/cover/');
		$data['link_company'] = base_url('upload/fullsize/company/');
		$data['cover'] = $this->main_model->selectCover('contact');
		$data['headline'] = $this->main_model->selectHeadline('contact');
		$data['nav'] = $this->main_model->selectNavbar();
		$data['data'] = $data['nav']['contact'];
		$this->twig->display('@f/contact', $data);
	}
	public function agent($id = 0)
	{
		if($id === 0) {
			$lang = $this->currentLang();
			$this->session->set_userdata('page', 'contact/agent');
			$data['lang'] = $lang;
			$data['page'] = 'contact';
			$data['link_img'] = base_url('assets/frontend/images/');
			$data['link_cover'] = base_url('upload/fullsize/cover/');
			$data['link_company'] = base_url('upload/fullsize/company/');
			$data['cover'] = $this->main_model->selectCover('company');
			$data['headline'] = $this->main_model->selectHeadline('company');
			$data['nav'] = $this->main_model->selectNavbar();
			$data['data'] = $this->contact_model->selectCompany();
			$this->twig->display('@f/agent', $data);
		}else{
			$lang = $this->currentLang();
			$this->session->set_userdata('page', 'contact/agent/'.$id);
			$data['lang'] = $lang;
			$data['page'] = 'contact';
			$data['link_img'] = base_url('assets/frontend/images/');
			$data['link_cover'] = base_url('upload/fullsize/cover/');
			$data['link_company'] = base_url('upload/fullsize/company/');
			$data['cover'] = $this->main_model->selectCover('company');
			$data['nav'] = $this->main_model->selectNavbar();
			$data['data'] = $this->contact_model->selectCompanyByID($id);
			$this->twig->display('@f/agent-detail', $data);
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

	public function sendMsg()
	{
		if($this->input->post()){
			$res = $this->contact_model->insertContact($_POST);
			if($res > 0){
				$page = $this->session->userdata('page');
				$link = base_url($page);
				echo "<script>alert('ส่งข้อมูลสำเร็จ'); window.location.href = '".$link."'</script>";
			}
		}
	}
}
