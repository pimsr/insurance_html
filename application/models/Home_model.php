<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectBanner()
	{
		$query = $this->db->select('*')
				->from('tb_banner')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectBannerByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_banner')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function selectHome()
	{
		$query = $this->db->select('*')
				->from('tb_home')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectHomeByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_home')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function selectReview()
	{
		$query = $this->db->select('*')
				->from('tb_review')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
				//echo	$this->db->last_query();exit();
		$data = $query->result_array();
		return $data;	
	}
	public function selectReviewByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_review')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->result_array();
		
		return sizeof($data) > 0 ? $data[0] : null;	
	}
}//class
?>