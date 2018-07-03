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

	// news
	public function selectNews($cate)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('status != -1')
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
				->where('status != -1')
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function insertNews($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'caption_th' => $value['caption_th'],
			'caption_en' => $value['caption_en'],
			'desc_th' => $value['desc_th'],
			'desc_en' => $value['desc_en'],
			'tags_th' => $value['tags_th'],
			'tags_en' => $value['tags_en'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'date' => $value['date'],
			'status' => 0,
			'created_date' => date("Y-m-d H:i:s"),
			'category_id' => $value['category_id']
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->insert('tb_news',$values);
		return $this->db->insert_id();
	}
	public function updateNews($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'caption_th' => $value['caption_th'],
			'caption_en' => $value['caption_en'],
			'desc_th' => $value['desc_th'],
			'desc_en' => $value['desc_en'],
			'tags_th' => $value['tags_th'],
			'tags_en' => $value['tags_en'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'date' => $value['date'],
			'updated_date' => date("Y-m-d H:i:s")
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->where('id', $value['id']);
		$this->db->update('tb_news', $values);
		return $this->db->affected_rows();
	}
	public function updateNewsActions($data){
		foreach($data['id'] as $key => $id){
			$values = array(
				'seq' => $data['seq'][$key],
				'status' => empty($data['status'][$key]) ? 0 : 1
			);
			$this->db->where('id', $id);
			$this->db->update('tb_news', $values);
		}
		return 1;
	}
	public function deleteNews($id){
		$this->db->where('id', $id);
		$this->db->update('tb_news', array('status' => -1));
		return $this->db->affected_rows();
	}
}//class
?>