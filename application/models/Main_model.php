<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	function selectCover($pos){
		$query = $this->db->select('*')
				->from('tb_cover')
				->where('position', $pos)
				->limit(1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}

	function selectHeadline($pos){
		$query = $this->db->select('*')
				->from('tb_headline')
				->where('position', $pos)
				->limit(1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}

	function selectNavbar(){
		$query = $this->db->select('*')
				->from('tb_contact')
				->where('id', 1)
				->limit(1)
				->get();
		$contact = $query->result_array();

		$query = $this->db->select('id, title_th, title_en')
				->from('tb_insurance')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$insurance = $query->result_array();

		$query = $this->db->select('id, title_th, title_en')
				->from('tb_company')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$company = $query->result_array();

		$data = array(
			'contact' => $contact[0],
			'insurance' => $insurance,
			'company' => $company,
		);

		return $data;
	}
}//class
?>