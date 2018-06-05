<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checkAdmin();
		$this->load->model('backend/projects_model');
	}
	public function index()
	{
		if(!isset($_GET['id'])){
			redirect('backend/projects/category', 'refresh');
		}
		if($this->input->post()){
			$res = $this->projects_model->updateProjectsSeq($_POST);
			if($res > 0) {
				unset($_POST);
				redirect('backend/projects?id='.$_GET['id'], 'refresh');
			}
		}
		$data['page'] = 'projects';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_project'] = base_url('upload/project/');
		$data['cate'] = $this->projects_model->selectCateByID($_GET['id']);
		if($data['cate'] == null) redirect('backend/projects/category', 'refresh');
		$data['data'] = $this->projects_model->selectProjects($_GET['id']);
		$this->load->view('backend/projects', $data);
	}
	public function add($id = 0)
	{
		if($id == 0) {
			redirect('backend/projects/category', 'refresh');
		}

		if($this->input->post()){
			$banner = null;
			$gallery = null;
			$banner = $this->imageManipulation('project', $_FILES, 'banner');
			if($banner != null){
				$gallery = $this->imageManipulation('project', $_FILES, 'gallery');
				if($gallery != null){
					$g = array();
					foreach ($_POST['gallery_url'] as $key => $value) {
						array_push($g, array(
							'img' => $gallery['arr_file'][$key],
							'url' => $value
						));
					}
					$res = $this->projects_model->insertProject($_POST, $banner, $g);
					if($res > 0) {
						unset($_POST);
						redirect('backend/projects?id='.$id, 'refresh');
					}
				}
			}
		}
		$data['page'] = 'projects';
		$data['mode'] = 'add';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_project'] = base_url('upload/project/');
		$data['cate'] = $this->projects_model->selectCateByID($id);
		$this->load->view('backend/projects-add', $data);
	}
	public function edit($id = 0)
	{
		if($this->input->post()){
			$banner = null;
			$gallery = null;
			$banner = $this->imageManipulation('project', $_FILES, 'banner');
			if($banner != null){
				$gallery = $this->imageManipulation('project', $_FILES, 'gallery');
				if($gallery != null){
					$g = array();
					foreach ($_POST['gallery_url'] as $key => $value) {
						array_push($g, array(
							'img' => trim($gallery['arr_file'][$key]) == "" ? $_POST['gallery_old'][$key] : $gallery['arr_file'][$key],
							'url' => $value
						));
					}
					$res = $this->projects_model->updateProject($_POST, $banner, $g);
					if($res > 0) {
						$x = $_POST['pc_id'];
						unset($_POST);
						redirect('backend/projects?id='.$x, 'refresh');
					}
				}
			}
		}

		if($id == 0) {
			redirect('backend/projects/category', 'refresh');
		}
		$data['page'] = 'projects';
		$data['mode'] = 'edit';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_project'] = base_url('upload/project/');
		$data['data'] = $this->projects_model->selectProjectByID($id);
		if($data['data'] == null){
			redirect('backend/projects?id='.$id, 'refresh');
		}else{
			$data['cate'] = $this->projects_model->selectCateByID($data['data']->pc_id);
		}
		$this->load->view('backend/projects-edit', $data);
	}
	public function delete($cate = 0 , $id = 0)
	{
		if($id != 0 && $cate != 0){
			$res = $this->projects_model->deleteProject($id);
			if($res > 0) {
				redirect('backend/projects?id='.$cate, 'refresh');
			}
		}
	}
	public function category()
	{
		if($this->input->post()){
			$res = $this->projects_model->saveCategory($_POST);
			if($res > 0) {
				unset($_POST);
				redirect('backend/projects/category', 'refresh');
			}
		}
		$data['page'] = 'projects';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['data']= $this->projects_model->selectCate();
		$this->load->view('backend/projects-category', $data);
	}
	public function deleteCategory($id = 0)
	{
		if($id != 0) {
			$res = $this->projects_model->deleteCategory($id);
			if($res > 0) {
				unset($_POST);
				redirect('backend/projects/category', 'refresh');
			}
		}
	}
}
