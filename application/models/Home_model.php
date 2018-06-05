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
	public function selectProjects(){
		$this->db->select('project.*');
		$this->db->from('home_project');
		$this->db->join('project', 'project.id = home_project.project_id');
		$this->db->order_by('home_project.seq', 'asc');
		$query = $this->db->get();
		$data = $query->result();
		return $data;
	}
	// public function selectProjects($limit){
	// 	$query = $this->db->select('*')
	// 			->where('status', 1)
	// 			->limit($limit)
	// 			->order_by('seq', 'ASC')
	// 			->get('project');
	// 	$data = $query->result();
	// 	return $data;
	// }
	public function selectProjectsCate(){
		$query = $this->db->select('*')
				->where('status', 1)
				->get('project_cate');
		$data = $query->result();
		return $data;
	}
}//class
?>