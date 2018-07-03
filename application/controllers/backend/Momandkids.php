<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Momandkids extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('backend/main_model');
		$this->load->model('backend/momandkids_model');
		$this->checkAdmin();
	}
	public function index()
	{
		$data['page'] = 'momandkids';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/thumb/cover/');
		$data['cover'] = $this->main_model->selectCover('momandkids');
		$this->twig->display('@b/momandkids', $data);
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
	public function category($id = 0)
	{
		if($id == 0) redirect('backend/momandkids');
		$data['page'] = 'momandkids';
		$data['subpage'] = 'detail';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_news'] = base_url('upload/thumb/news/');
		$data['category'] = $this->momandkids_model->selectCategoryByID($id);
		$this->twig->display('@b/momandkids-detail', $data);
	}

	// category
	public function tableCategory(){
		$data['link_category'] = base_url('upload/thumb/category/');
		$data['category'] = $this->momandkids_model->selectCategory();
		$this->twig->display('@b/category-table', $data);
	}
	public function addCategory(){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$res = $this->momandkids_model->insertCategory($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'add';
		$data['link_category'] = base_url('upload/thumb/category/');
		$this->twig->display('@b/category-form', $data);
	}
	public function editCategory($id = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$res = $this->momandkids_model->updateCategory($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'edit';
		$data['link_category'] = base_url('upload/thumb/category/');
		$data['data'] = $this->momandkids_model->selectCategoryByID($id);
		$data['id'] = $id;
		$this->twig->display('@b/category-form', $data);
	}
	public function deleteCategory($id)
	{
		$res = $this->momandkids_model->deleteCategory($id);
		echo $res;
	}
	public function setCategory()
	{
		if($this->input->post()){
			$data = array();
			$res = $this->momandkids_model->updateCategoryActions($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
		}
	}

	// news
	public function tableNews($cate){
		$data['link_news'] = base_url('upload/thumb/news/');
		$data['news'] = $this->momandkids_model->selectNews($cate);
		$this->twig->display('@b/news-table', $data);
	}
	public function addNews($cate = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('news', 'img');
			$res = $this->momandkids_model->insertNews($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'add';
		$data['link_news'] = base_url('upload/thumb/news/');
		$data['data'] = array(
			'category_id' => $cate
		);
		$this->twig->display('@b/news-form', $data);
	}
	public function editNews($id = 0){
		if($this->input->post()){
			$data = array();
			$data['status'] = 0;
			$data['msg'] = 'ไม่สามารถบันทึกข้อมูลได้';
			$_POST['img'] = $this->uploadFile('news', 'img');
			$res = $this->momandkids_model->updateNews($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			unset($_POST);
			echo json_encode($data);
			exit();
		}
		$data['mode'] = 'edit';
		$data['link_news'] = base_url('upload/thumb/news/');
		$data['data'] = $this->momandkids_model->selectNewsByID($id);
		$data['id'] = $id;
		$this->twig->display('@b/news-form', $data);
	}
	public function deleteNews($id)
	{
		$res = $this->momandkids_model->deleteNews($id);
		echo $res;
	}
	public function setNews()
	{
		if($this->input->post()){
			$data = array();
			$res = $this->momandkids_model->updateNewsActions($_POST);
			if($res > 0) {
				$data['status'] = 1;
				$data['msg'] = 'บันทึกข้อมูลสำเร็จ';	
			}
			echo json_encode($data);
			exit();
		}
	}
}
