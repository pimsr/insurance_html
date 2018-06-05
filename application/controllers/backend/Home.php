<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/home_model');
	}
	public function index()
	{
		$data['page'] = 'home';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_banner'] = base_url('upload/thumb/banner/');
		$data['banner'] = $this->home_model->selectBanner();
		$this->twig->display('@b/home', $data);
	}
	public function setBanner()
	{
		if($this->input->post()){
			$_POST['img'] = null;
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			if(isset($_FILES['img'])){
				$upload_state = $this->imageManipulation('banner', 'img');
				if($upload_state['status'] == 'success'){
					$_POST['img'] = $upload_state['files_name'];
				}
				else{
					echo json_encode(array('msg'=>$upload_state['msg'], 'status'=>'error'));
					exit();
				}
			}
			if($_POST['cmd'] == 'add'){
				$res = $this->home_model->insertBanner($_POST);
				
			}else if($_POST['cmd'] == 'edit'){
				$res = $this->home_model->updateBanner($_POST);
			}
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
		}
	}
}
