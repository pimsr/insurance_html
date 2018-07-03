<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Momandkids_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	// category
	public function selectCategory()
	{
		$query = $this->db->select('*')
				->from('tb_news_category')
				->where('status != -1')
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
				->where('status != -1')
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function insertCategory($value){
		$values = array(
			'name_th' => $value['name_th'],
			'name_en' => $value['name_en'],
			'status' => 0,
			'created_date' => date("Y-m-d H:i:s"),
		);

		$this->db->insert('tb_news_category',$values);
		return $this->db->insert_id();
	}
	public function updateCategory($value){
		$values = array(
			'name_th' => $value['name_th'],
			'name_en' => $value['name_en'],
			'updated_date' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id', $value['id']);
		$this->db->update('tb_news_category', $values);
		return $this->db->affected_rows();
	}
	public function updateCategoryActions($data){
		foreach($data['id'] as $key => $id){
			$values = array(
				'seq' => $data['seq'][$key],
				'status' => empty($data['status'][$key]) ? 0 : 1
			);
			$this->db->where('id', $id);
			$this->db->update('tb_news_category', $values);
		}
		return 1;
	}
	public function deleteCategory($id){
		$this->db->where('id', $id);
		$this->db->update('tb_news_category', array('status' => -1));
		return $this->db->affected_rows();
	}
}//class
?>