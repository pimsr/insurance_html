<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/main_model');
		$this->load->model('backend/contact_model');
	}
	public function uploadFile($folder, $name){
		if(isset($_FILES[$name])){
			$upload_state = $this->imageManipulation($folder, $name);
			if($upload_state['status'] == 'success'){
				return $upload_state['files_name'];
			}
			else{
				echo json_encode(array('msg'=>$upload_state['msg'], 'status'=>'error'));
				exit();
			}
		}else{
			return null;
		}
	}
	public function index()
	{
		$data['page'] = 'contact';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/thumb/cover/');
		$data['link_contact'] = base_url('upload/thumb/contact/');
		$data['cover'] = $this->main_model->selectCover('contact');
		$data['data'] = $this->contact_model->selectContact();
		$this->twig->display('@b/contact', $data);
	}
	public function editContact()
	{
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$c_img = $this->uploadFile('cover', 'c_img');
			$cover = array(
				'img' => $c_img,
				'title_th' => $_POST['c_title_th'],
				'title_en' => $_POST['c_title_en'],
				'position' => 'contact'
			);
			$res = $this->main_model->updateCover($cover);
			if($res > 0) {
				$res2 = $this->contact_model->updateContact($_POST);
				if($res2 > 0){
					$data['status'] = 1;
					$data['msg'] = 'บันทึกข้อมูลสำเร็จ';
				}
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
	}
}
