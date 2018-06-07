<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	// banner
	public function selectBanner()
	{
		$query = $this->db->select('*')
				->from('tb_banner')
				->where('status != -1')
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
				->where('status != -1')
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function insertBanner($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'subtitle_th' => $value['subtitle_th'],
			'subtitle_en' => $value['subtitle_en'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'status' => 0,
			'created_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->insert('tb_banner',$values);
		return $this->db->affected_rows();
	}
	public function updateBanner($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'subtitle_th' => $value['subtitle_th'],
			'subtitle_en' => $value['subtitle_en'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'updated_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->where('id', $value['id']);
		$this->db->update('tb_banner', $values);
		return $this->db->affected_rows();
	}
	public function updateBannerActions($data){
		foreach($data['id'] as $key => $id){
			$values = array(
				'seq' => $data['seq'][$key],
				'status' => empty($data['status'][$key]) ? 0 : 1
			);
			$this->db->where('id', $id);
			$this->db->update('tb_banner', $values);
		}
		return 1;
	}
	public function deleteBanner($id){
		$this->db->where('id', $id);
		$this->db->update('tb_banner', array('status' => -1));
		return $this->db->affected_rows();
	}

	// home
	public function selectHome()
	{
		$query = $this->db->select('*')
				->from('tb_home')
				->where('status != -1')
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
				->where('status != -1')
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function insertHome($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'desc_th' => $value['desc_th'],
			'desc_en' => $value['desc_en'],
			'icon' => sizeof($value['icon'] > 0) ? $value['icon'][0] : null,
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'status' => 0,
			'created_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['icon']) == '') unset($values['icon']);
		if(trim($values['img']) == '') unset($values['img']);

		$this->db->insert('tb_home',$values);
		return $this->db->affected_rows();
	}
	public function updateHome($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'desc_th' => $value['desc_th'],
			'desc_en' => $value['desc_en'],
			'icon' => sizeof($value['icon'] > 0) ? $value['icon'][0] : null,
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'updated_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['icon']) == '') unset($values['icon']);
		if(trim($values['img']) == '') unset($values['img']);

		$this->db->where('id', $value['id']);
		$this->db->update('tb_home', $values);
		return $this->db->affected_rows();
	}
	public function updateHomeActions($data){
		foreach($data['id'] as $key => $id){
			$values = array(
				'seq' => $data['seq'][$key],
				'status' => empty($data['status'][$key]) ? 0 : 1
			);
			$this->db->where('id', $id);
			$this->db->update('tb_home', $values);
		}
		return 1;
	}
	public function deleteHome($id){
		$this->db->where('id', $id);
		$this->db->update('tb_home', array('status' => -1));
		return $this->db->affected_rows();
	}
	
}//class
?>