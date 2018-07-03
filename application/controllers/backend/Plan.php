<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/main_model');
		$this->load->model('backend/plan_model');
		$this->checkAdmin();
	}
	public function index()
	{
		$data['page'] = 'plan';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/thumb/cover/');
		$data['link_plan'] = base_url('upload/thumb/plan/');
		$data['cover'] = $this->main_model->selectCover('plan');
		$data['content'] = $this->plan_model->selectContent();
		$this->twig->display('@b/plan', $data);
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
	public function setCover()
	{
		if($this->input->post()){
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('cover', 'img');
			$res = $this->main_model->updateCover($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
	}
	public function setContent()
	{
		if($this->input->post()){
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('plan', 'img');
			$res = $this->plan_model->updateContent($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
	}
	public function setPackage(){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$res = $this->plan_model->updatePackage($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['package'] = $this->plan_model->selectPackage();
		$this->twig->display('@b/plan-package', $data);
	}
}
