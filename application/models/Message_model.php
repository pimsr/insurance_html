<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function selectContactKids(){
		$query = $this->db->select('tb_insurance.title_th as type, tb_contact_kid.*')
				->from('tb_contact_kid')
				->join('tb_insurance', 'tb_insurance.id = tb_contact_kid.insurance_id')
				->order_by('tb_contact_kid.created_date', 'DESC')
				->order_by('tb_contact_kid.id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}

	function selectContactData(){
		$query = $this->db->select('*')
				->from('tb_contact_data')
				->order_by('created_date', 'DESC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
}//class
?>