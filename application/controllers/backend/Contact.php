<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checkAdmin();
		$this->load->model('backend/contact_model');
	}
	public function index()
	{
		if($this->input->post())
		{
			$img = null;
			$img = $this->imageManipulation('contact', $_FILES, 'img');
			if($img != null){
				$res = $this->contact_model->updateContact($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/contact', 'refresh');
				}
			}
			
		}
		$data['page'] = 'contact';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_contact'] = base_url('upload/contact/');
		$data['data'] = $this->contact_model->selectContact();
		$data['list'] = $this->contact_model->selectContactList();
		$this->load->view('backend/contact', $data);
	}
	public function add()
	{
		if($this->input->post()){
			$img = null;
			$img = $this->imageManipulation('contact', $_FILES, 'img');
			if($img != null){
				$res = $this->contact_model->insertContactList($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/contact', 'refresh');
				}
			}
		}
		$data['page'] = 'contact';
		$data['mode'] = 'add';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_contact'] = base_url('upload/contact/');
		$data['data'] = (object) array(
			'title'=>'',
			'since'=>'',
			'caption'=>'',
			'img'=>'',
			'desc'=>'',
			'text_overlay'=>''
		);
		$this->load->view('backend/contact-detail', $data);
	}
	public function edit($id = 0)
	{
		if($this->input->post()){
			$img = null;
			$img = $this->imageManipulation('contact', $_FILES, 'img');
			if($img != null){
				$res = $this->contact_model->updateContactList($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/contact', 'refresh');
				}
			}
		}

		if($id == 0) {
			redirect('backend/contact', 'refresh');
		}else{
			$data['page'] = 'contact';
			$data['mode'] = 'edit';
			$data['link_img'] = base_url('assets/frontend/img/');
			$data['link_contact'] = base_url('upload/contact/');
			$info =  $this->contact_model->selectContactListByID($id);
			if($info != null) {
				$data['data'] = $info;
			}else{
				$data['data'] = array(
					'title'=>'',
					'since'=>'',
					'caption'=>'',
					'img'=>'',
					'desc'=>'',
					'text_overlay'=>''
				);
			}
			$this->load->view('backend/contact-detail', $data);
		}
	}
	public function delete($id = 0)
	{
		if($id != 0) {
			$res = $this->contact_model->deleteContactList($id);
			if($res > 0) {
				redirect('backend/contact', 'refresh');
			}
		}
	}
	public function save()
	{
		if($this->input->post()){
			$res = $this->contact_model->updateContactListSeq($_POST);
			if($res > 0) {
				unset($_POST);
				redirect('backend/contact', 'refresh');
			}
		}
	}
}
