<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectContact()
	{
		$query = $this->db->select('*')
				->from('tb_contact')
				->where('id', 1)
				->limit(1)
				->get();
		$data = $query->result_array();
		return $data[0];	
	}
	public function updateContact($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'subtitle_th' => $value['subtitle_th'],
			'subtitle_en' => $value['subtitle_en'],
			'address_th' => $value['address_th'],
			'address_en' => $value['address_en'],
			'time_th' => $value['time_th'],
			'time_en' => $value['time_en'],
			'claim_tel' => $value['claim_tel'],
			'claim_link' => $value['claim_link'],
			'facebook' => $value['facebook'],
			'line' => $value['line'],
			'tel' => $value['tel'],
			'email' => $value['email'],
			'instagram' => $value['instagram'],
			'twitter' => $value['twitter'],
			'updated_date' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id', 1);
		$this->db->update('tb_contact', $values);
		return $this->db->affected_rows();
	}
	// company
	public function selectCompany()
	{
		$query = $this->db->select('*')
				->from('tb_company')
				->where('status != -1')
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectCompanyByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_company')
				->where('id', $id)
				->where('status != -1')
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function insertCompany($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'caption_th' => $value['caption_th'],
			'caption_en' => $value['caption_en'],
			'name_th' => $value['name_th'],
			'name_en' => $value['name_en'],
			'position_th' => $value['position_th'],
			'position_en' => $value['position_en'],
			'desc_th' => $value['desc_th'],
			'desc_en' => $value['desc_en'],
			'address_th' => $value['address_th'],
			'address_en' => $value['address_en'],
			'tel' => $value['tel'],
			'email' => $value['email'],
			'link' => $value['link'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'status' => 0,
			'created_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->insert('tb_company',$values);
		return $this->db->insert_id();
	}
	public function updateCompany($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'caption_th' => $value['caption_th'],
			'caption_en' => $value['caption_en'],
			'name_th' => $value['name_th'],
			'name_en' => $value['name_en'],
			'position_th' => $value['position_th'],
			'position_en' => $value['position_en'],
			'desc_th' => $value['desc_th'],
			'desc_en' => $value['desc_en'],
			'address_th' => $value['address_th'],
			'address_en' => $value['address_en'],
			'tel' => $value['tel'],
			'email' => $value['email'],
			'link' => $value['link'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'updated_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->where('id', $value['id']);
		$this->db->update('tb_company', $values);
		return $this->db->affected_rows();
	}
	public function updateCompanyActions($data){
		foreach($data['id'] as $key => $id){
			$values = array(
				'seq' => $data['seq'][$key],
				'status' => empty($data['status'][$key]) ? 0 : 1
			);
			$this->db->where('id', $id);
			$this->db->update('tb_company', $values);
		}
		return 1;
	}
	public function deleteCompany($id){
		$this->db->where('id', $id);
		$this->db->update('tb_company', array('status' => -1));
		return $this->db->affected_rows();
	}
}//class
?>