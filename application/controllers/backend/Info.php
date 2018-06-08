<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/main_model');
		$this->load->model('backend/info_model');
	}
	public function index()
	{
		$data['page'] = 'info';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/thumb/cover/');
		$data['link_insurance'] = base_url('upload/thumb/insurance/');
		$data['cover'] = $this->main_model->selectCover('insurance');
		$data['how_head'] = $this->info_model->selectInsuranceHow('head');
		$data['how_content'] = $this->info_model->selectInsuranceHow('content');
		$this->twig->display('@b/info', $data);
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

	// insurance
	public function detail($id = 0)
	{
		if($id == 0){
			redirect('backend/info', 'refresh');
		}

		$data['page'] = 'info';
		$data['subpage'] = 'detail';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_insurance'] = base_url('upload/thumb/insurance/');
		$data['data'] = $this->info_model->selectInsuranceByID($id);
		if($data['data'] == null) redirect('backend/info', 'refresh');

		$this->twig->display('@b/insurance-detail', $data);
	}
	public function tableInsurance(){
		$data['link_insurance'] = base_url('upload/thumb/insurance/');
		$data['insurance'] = $this->info_model->selectInsurance();
		$this->twig->display('@b/insurance-table', $data);
	}
	public function addInsurance(){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['icon'] = $this->uploadFile('insurance', 'icon');
			$res = $this->info_model->insertInsurance($_POST);
			if($res > 0) {
				$res_in = $this->info_model->insertInsuranceContent($res);
				if($res_in > 0){
					$data['status'] = 1;
					$data['msg'] = 'บันทึกข้อมูลสำเร็จ';
				}
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'add';
		$data['link_insurance'] = base_url('upload/thumb/insurance/');
		$this->twig->display('@b/insurance-form', $data);
	}
	public function editInsurance($id = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['icon'] = $this->uploadFile('insurance', 'icon');
			$res = $this->info_model->updateInsurance($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'edit';
		$data['link_insurance'] = base_url('upload/thumb/insurance/');
		$data['data'] = $this->info_model->selectInsuranceByID($id);
		$data['id'] = $id;
		$this->twig->display('@b/insurance-form', $data);
	}
	public function deleteInsurance($id)
	{
		$res = $this->info_model->deleteInsurance($id);
		echo $res;
	}
	public function setInsurance()
	{
		if($this->input->post()){
			$data = array();
			$res = $this->info_model->updateInsuranceActions($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
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
	public function setHow()
	{
		if($this->input->post()){
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['icon'] = $this->uploadFile('insurance', 'icon');
			$res = $this->info_model->updateInsuranceHow($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
	}
}
