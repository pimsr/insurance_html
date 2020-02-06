<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Momandkids extends MY_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->library('pagination');
		$this->load->helper("url");
		$this->load->model('momandkids_model');
		$this->load->model('main_model');
		$this->load->model('ads_model');
	}
	public function index()
	{
		function DateThai($strDate)
		{
			$strYear = date("Y",strtotime($strDate))+543;
			$strMonth= date("n",strtotime($strDate));
			$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
			$strMonthThai=$strMonthCut[$strMonth];
			return "$strDay $strMonthThai $strYear";
		}

		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'momandkids');
		$data['lang'] = $lang;
		$data['page'] = 'momandkids';
		$data['nav'] = $this->main_model->selectNavbar();
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['cate'] = $this->momandkids_model->selectCategoryTotal();
		$data['ads'] = $this->ads_model->selectAds();
		$data['news_lastest'] = $this->momandkids_model->selectNewsLastest(3);

		$config = array();
        $config["base_url"] = base_url().'momandkids/index';
        $config["total_rows"] = $this->momandkids_model->selectNewsAll();
        $config["per_page"] = 6;
		$config["uri_segment"] = 3;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->momandkids_model->getNewsAll($config["per_page"], $page);

		
		$data['pagination'] = $this->pagination->create_links();

		$data["all"] = $config["total_rows"]/$config["per_page"];

		$data['link'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;

		$this->twig->display('@f/momandkids', $data);

	}
	public function category()
	{
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'momandkids');
		$data['lang'] = $lang;
		$data['page'] = 'momandkids';
		$data['nav'] = $this->main_model->selectNavbar();
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['cate'] = $this->momandkids_model->selectCategoryTotal();

		$data['news_lastest'] = $this->momandkids_model->selectNewsLastest(3);


		$config = array();
		$cate_id = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['title_cate'] =  $this->momandkids_model->selectCategoryID($cate_id);

        $config["base_url"] = base_url('momandkids/category/').$cate_id;
        $config["total_rows"] = $this->momandkids_model->selectCategoryRowByID($cate_id);
        $config["per_page"] = 4;
		$config["uri_segment"] = 4;

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->momandkids_model->getCateAll($config["per_page"], $page ,$cate_id);
		$data['pagination'] = $this->pagination->create_links();
		$data["all"] = $config["total_rows"]/$config["per_page"];

		$data['link'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
		$this->twig->display('@f/momandkids', $data);

	}

	public function search()
	{
		// $key = $this->input->get('val');
		$key = $this->input->post('keyword', true);
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'momandkids');
		$data['lang'] = $lang;
		$data['page'] = 'momandkids';
		$data['link_img'] = base_url('assets/frontend/images/');

	
		$results  = $this->momandkids_model->selectNewsFilter($key);
		if($results){
			$data["results"] = $this->momandkids_model->selectNewsFilter($key);
			$this->twig->display('@f/momandkids_search', $data);
		}else {
			echo "ไม่พบข้อมูล";
		}

		//$this->twig->display('@f/momandkids_search', $data);
	
	}

	public function detail()
	{	
		$id   = $this->uri->segment(3) OR $id = 1;	
		$lang = $this->currentLang();
		$this->session->set_userdata('page', 'momandkids');
		$data['lang'] = $lang;
		$data['page'] = 'momandkids';
		$data['nav'] = $this->main_model->selectNavbar();
		$data['link_img'] = base_url('assets/frontend/images/');
		$data['ads'] = $this->ads_model->selectAds();

		$detail = $this->momandkids_model->selectNewsByID($id);

		$data['relate_news'] = $this->momandkids_model->selectNewsRelate($detail->category_id);

		$data['detail'] = $detail;
		$data['cate'] = $this->momandkids_model->selectCategoryID($detail->category_id);

		$data['get_link'] = $this->momandkids_model->getLink($id);
		$data['current_url'] = base_url(uri_string());

		$this->twig->display('@f/momandkids-detail', $data);
	}
}
