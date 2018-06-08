<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/main_model');
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

	// banner
	public function tableBanner(){
		$data['link_banner'] = base_url('upload/thumb/banner/');
		$data['banner'] = $this->home_model->selectBanner();
		$this->twig->display('@b/banner-table', $data);
	}
	public function addBanner(){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('banner', 'img');
			$res = $this->home_model->insertBanner($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'add';
		$data['link_banner'] = base_url('upload/thumb/banner/');
		$this->twig->display('@b/banner-form', $data);
	}
	public function editBanner($id = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('banner', 'img');
			$res = $this->home_model->updateBanner($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'edit';
		$data['link_banner'] = base_url('upload/thumb/banner/');
		$data['data'] = $this->home_model->selectBannerByID($id);
		$data['id'] = $id;
		$this->twig->display('@b/banner-form', $data);
	}
	public function deleteBanner($id)
	{
		$res = $this->home_model->deleteBanner($id);
		echo $res;
	}
	public function setBanner()
	{
		if($this->input->post()){
			$data = array();
			$res = $this->home_model->updateBannerActions($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
		}
	}

	// home
	public function tableHome(){
		$data['link_home'] = base_url('upload/thumb/home/');
		$data['home'] = $this->home_model->selectHome();
		$this->twig->display('@b/home-table', $data);
	}
	public function addHome(){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('home', 'img');
			$_POST['icon'] = $this->uploadFile('home', 'icon');
			$res = $this->home_model->insertHome($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'add';
		$data['link_home'] = base_url('upload/thumb/home/');
		$this->twig->display('@b/home-form', $data);
	}
	public function editHome($id = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('home', 'img');
			$_POST['icon'] = $this->uploadFile('home', 'icon');
			$res = $this->home_model->updateHome($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'edit';
		$data['link_home'] = base_url('upload/thumb/home/');
		$data['data'] = $this->home_model->selectHomeByID($id);
		$data['id'] = $id;
		$this->twig->display('@b/home-form', $data);
	}
	public function deleteHome($id)
	{
		$res = $this->home_model->deleteHome($id);
		echo $res;
	}
	public function setHome()
	{
		if($this->input->post()){
			$data = array();
			$res = $this->home_model->updateHomeActions($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
		}
	}

	// review
	public function tableReview(){
		$data['link_review'] = base_url('upload/thumb/review/');
		$data['review'] = $this->home_model->selectReview();
		$this->twig->display('@b/review-table', $data);
	}
	public function addReview(){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('review', 'img');
			$res = $this->home_model->insertReview($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'add';
		$data['link_review'] = base_url('upload/thumb/review/');
		$this->twig->display('@b/review-form', $data);
	}
	public function editReview($id = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('review', 'img');
			$res = $this->home_model->updateReview($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'edit';
		$data['link_review'] = base_url('upload/thumb/review/');
		$data['data'] = $this->home_model->selectReviewByID($id);
		$data['id'] = $id;
		$this->twig->display('@b/review-form', $data);
	}
	public function deleteReview($id)
	{
		$res = $this->home_model->deleteReview($id);
		echo $res;
	}
	public function setReview()
	{
		if($this->input->post()){
			$data = array();
			$res = $this->home_model->updateReviewActions($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
		}
	}
}
