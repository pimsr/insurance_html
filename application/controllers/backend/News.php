<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->checkAdmin();
		$this->load->model('backend/news_model');
	}
	public function index()
	{
		if($this->input->post()){
			$res = $this->news_model->updateNewsSeq($_POST);
			if($res > 0) {
				unset($_POST);
				redirect('backend/news', 'refresh');
			}
		}
		$data['page'] = 'news';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_news'] = base_url('upload/news/');
		$data['data'] = $this->news_model->selectNews();
		$this->load->view('backend/news', $data);
	}
	public function add()
	{
		if($this->input->post()){
			$img = null;
			$img = $this->imageManipulation('news', $_FILES, 'img');
			if($img != null){
				$res = $this->news_model->insertNews($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/news', 'refresh');
				}
			}
		}
		$data['page'] = 'news';
		$data['mode'] = 'add';
		$data['link_img'] = base_url('assets/frontend/img/');
		$data['link_news'] = base_url('upload/news/');
		$data['data'] = (object) array(
			'title'=>'',
			'date'=>'',
			'desc'=>'',
			'img'=>'',
			'link'=>'',
		);
		$this->load->view('backend/news-detail', $data);
	}
	public function edit($id = 0)
	{
		if($this->input->post()){
			$img = null;
			$img = $this->imageManipulation('news', $_FILES, 'img');
			if($img != null){
				$res = $this->news_model->updateNews($_POST, $img);
				if($res > 0){
					unset($_POST);
					redirect('backend/news', 'refresh');
				}
			}
		}
		if($id == 0) {
			redirect('backend/news', 'refresh');
		}else{
			$data['page'] = 'news';
			$data['mode'] = 'edit';
			$data['link_img'] = base_url('assets/frontend/img/');
			$data['link_news'] = base_url('upload/news/');
			$info =  $this->news_model->selectNewsByID($id);
			if($info != null) {
				$data['data'] = $info;
			}else{
				$data['data'] = array(
					'title'=>'',
					'date'=>'',
					'desc'=>'',
					'img'=>'',
					'link'=>'',
				);
			}
			$this->load->view('backend/news-detail', $data);
		}
	}
	public function delete($id = 0)
	{
		if($id != 0) {
			$res = $this->news_model->deleteNews($id);
			if($res > 0) {
				redirect('backend/news', 'refresh');
			}
		}
	}
}
