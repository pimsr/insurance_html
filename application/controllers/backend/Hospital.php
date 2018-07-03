<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/main_model');
		$this->load->model('backend/hospital_model');
		$this->checkAdmin();
	}
	public function index()
	{
		$data['page'] = 'hospital';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/thumb/cover/');
		$data['cover'] = $this->main_model->selectCover('hospital');
		$data['headline'] = $this->main_model->selectHeadline('hospital');
		$this->twig->display('@b/hospital', $data);
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
	public function setHeadline(){
		if($this->input->post()){
			$data = array();
			$res = $this->main_model->updateHeadline($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
		}
	}

	// hospital
	public function tableHospital(){
		$data['hospital'] = $this->hospital_model->selectHospital();
		$this->twig->display('@b/hospital-table', $data);
	}
	public function addHospital(){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['icon'] = $this->uploadFile('hospital', 'icon');
			$res = $this->hospital_model->insertHospital($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'add';
		$this->twig->display('@b/hospital-form', $data);
	}
	public function editHospital($id = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['icon'] = $this->uploadFile('hospital', 'icon');
			$res = $this->hospital_model->updateHospital($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'edit';
		$data['data'] = $this->hospital_model->selectHospitalByID($id);
		$data['id'] = $id;
		$this->twig->display('@b/hospital-form', $data);
	}
	public function deleteHospital($id)
	{
		$res = $this->hospital_model->deleteHospital($id);
		echo $res;
	}
	public function setHospital()
	{
		if($this->input->post()){
			$data = array();
			$res = $this->hospital_model->updateHospitalActions($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
		}
	}
}
