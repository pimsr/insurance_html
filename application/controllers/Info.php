<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('info_model');
	}
	public function index()
	{
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'info');
		$data['lang'] = $lang;
		$data['page'] = 'info';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/fullsize/cover/');
		$data['link_insurance'] = base_url('upload/fullsize/insurance/');
		$data['cover'] = $this->main_model->selectCover('insurance');
		$data['nav'] = $this->main_model->selectNavbar();
		$data['info'] = $this->info_model->selectInsurance();
		$data['how_head'] = $this->info_model->selectInsuranceHead('head');
		$data['how_content'] = $this->info_model->selectInsuranceHow('content');
		$this->twig->display('@f/insurance', $data);
	}
	public function detail($id = 0)
	{
		if($id == 0){
			redirect('info', 'refresh');
		}
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'info/detail/'.$id);
		$data['lang'] = $lang;
		$data['page'] = 'info';
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['link_cover'] = base_url('upload/fullsize/cover/');
		$data['link_insurance'] = base_url('upload/fullsize/insurance/');
		$data['cover'] = $this->main_model->selectCover('insurance');
		$data['nav'] = $this->main_model->selectNavbar();
		$data['id_cate'] = $id;
		$data['data'] = $this->info_model->selectInsuranceByID($id);
		$data['data']['content'] = $this->info_model->selectInsuranceContent($id);
		$data['data']['package'] = $this->info_model->selectInsurancePackage($id);
		$data['package'] = $this->info_model->selectPackage();

		
		$this->twig->display('@f/insurance-detail', $data);
	}

	public function fillter()
	{	
		$id_cate = $this->input->post('id_cate');
		$lang = $this->currentLang();
		$package = array();
		$id_fillter = $this->input->post('package');
		$data['lang'] = $lang;
		if($id_fillter == 0){
			$data['package'] = $this->info_model->selectInsuranceFillterCate($id_cate);
		}else{
			$data['package'] = $this->info_model->selectInsuranceFillter($id_cate,$id_fillter);
		}
		
		
		echo json_encode($data);
	}


}
