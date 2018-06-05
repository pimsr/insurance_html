<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Office extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checkAdmin();
		$this->load->model('backend/office_model');
	}
	public function index()
	{
		if($this->input->post()){
			$img = null;
			$img = $this->imageManipulation('office', $_FILES, 'img');
			if($img != null){
				$res = $this->office_model->updateCover($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/office', 'refresh');
				}
			}
		}
		$data['page'] = 'office';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_office'] = base_url('upload/office/');
		$data['data'] = $this->office_model->selectCover();
		$this->load->view('backend/office', $data);
	}
	public function about()
	{
		if($this->input->post()){
			$res = $this->office_model->updateAboutSeq($_POST);
			if($res > 0) {
				unset($_POST);
				redirect('backend/office/about', 'refresh');
			}
		}
		$data['page'] = 'office';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_office'] = base_url('upload/office/');
		$data['data'] = $this->office_model->selectAbout();
		$this->load->view('backend/office-about', $data);
	}
	public function add()
	{
		if($this->input->post()){
			$img = null;
			$img = $this->imageManipulation('office', $_FILES, 'img');
			if($img != null){
				$res = $this->office_model->insertAbout($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/office/about', 'refresh');
				}
			}
		}
		$data['page'] = 'office';
		$data['mode'] = 'add';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_office'] = base_url('upload/office/');
		$data['data'] = (object) array(
			'title'=>'',
			'since'=>'',
			'caption'=>'',
			'img'=>'',
			'desc'=>'',
			'text_overlay'=>''
		);
		$this->load->view('backend/office-about-detail', $data);
	}
	public function edit($id = 0)
	{
		if($this->input->post()){
			$img = null;
			$img = $this->imageManipulation('office', $_FILES, 'img');
			if($img != null){
				$res = $this->office_model->updateAbout($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/office/about', 'refresh');
				}
			}
		}

		if($id == 0) {
			redirect('backend/office/about', 'refresh');
		}else{
			$data['page'] = 'office';
			$data['mode'] = 'edit';
			$data['link_img'] = base_url('assets/frontend/img/');
			$data['link_office'] = base_url('upload/office/');
			$info =  $this->office_model->selectAboutByID($id);
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
			$this->load->view('backend/office-about-detail', $data);
		}
	}
	public function delete($id = 0)
	{
		if($id != 0) {
			$res = $this->office_model->deleteAbout($id);
			if($res > 0) {
				redirect('backend/office/about', 'refresh');
			}
		}
	}
	public function operate()
	{
		if(sizeOf($_FILES) > 0){
			$img = null;
			$img = $this->imageManipulation('office', $_FILES, 'img');
			if($img != null){
				$res = $this->office_model->updateOperate($_POST, $img);
				if($res > 0){
					unset($_FILES);
					redirect('backend/office/operate', 'refresh');
				}
			}
		}
		$data['page'] = 'office';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_office'] = base_url('upload/office/');
		$data['data'] = $this->office_model->selectOperate();
		$this->load->view('backend/office-operate', $data);
	}
}
