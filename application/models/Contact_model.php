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
	public function selectCompany()
	{
		$query = $this->db->select('*')
				->from('tb_company')
				->where('status', 1)
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
				->where('status', 1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function insertContactKids($value)
	{
		$values = array(
			'name' => $value['name'],
			'date' => $value['date'],
			'email' => $value['email'],
			'tel' => $value['tel'],
			'insurance_id' => $value['insurance_id'],
			'status' => 1,
			'created_date' => date("Y-m-d H:i:s")
		);
		$this->db->insert('tb_contact_kid',$values);
		return $this->db->insert_id();
	}

	public function insertContact($value)
	{
		$values = array(
			'name' => $value['name'],
			'subject' => $value['subject'],
			'email' => $value['email'],
			'tel' => $value['tel'],
			'card_id' => $value['card_id'],
			'policy_number' => $value['policy_number'],
			'message' => $value['message'],
			'status' => 1,
			'created_date' => date("Y-m-d H:i:s")
		);
		$this->db->insert('tb_contact_data',$values);
		return $this->db->insert_id();
	}
}//class
?>