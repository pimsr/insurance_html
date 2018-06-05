<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectHome(){
		$query = $this->db->select('*')
				->where('id', 1)
				->limit(1)
				->get('home');
		$data = $query->result();
		return $data[0];
	}
	public function updateHomeProject($value){
		$date = date("Y-m-d H:i:s");
		foreach($value['p_id'] as $key => $val){
			$this->db->where('id', $val);
			$this->db->update('home_project', array(
				'cate_id' => $value['p_cate'][$key],
				'project_id' => $value['p_project'][$key],
				'updated_date' => $date
			));
		}
		return 1;
	}
	public function updateHome($value, $img){
		$values = array(
			'img' => $img['arr_file'][0],
			'img_mobile' => $img['arr_file'][1],
			'title' => $value['title'],
			'subtitle' => $value['subtitle'],
			'video' => $value['video'],
			'link' => $value['link'],
			'updated_date' => date("Y-m-d H:i:s")
		);

		if($values['img'] == '') unset($values['img']);
		if($values['img_mobile'] == '') unset($values['img_mobile']);

		$this->db->where('id', 1);
		$this->db->update('home',$values);

		return $this->updateHomeProject($value);
		
	}
	public function selectCategory(){
		$query = $this->db->select('*')
				->where('status', 1)
				->order_by('title', 'asc')
				->get('project_cate');
		$data = $query->result();
		return $data;
	}
	public function selectProject(){
		$query = $this->db->select('*')
				->where('status', 1)
				->order_by('title', 'asc')
				->get('project');
		$data = $query->result();
		return $data;
	}
	public function selectHomeProject(){
		$query = $this->db->select('*')
				->order_by('seq', 'asc')
				->get('home_project');
		$data = $query->result();
		return $data;
	}
}//class
?>