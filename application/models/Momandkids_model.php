<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Momandkids_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectCategory()
	{
		$query = $this->db->select('*')
				->from('tb_news_category')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectCategoryByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_news_category')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function selectNews($cate)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('status', 1)
				->where('category_id', $cate)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectNewsByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
}//class
?>