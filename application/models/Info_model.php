<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectInsurance()
	{
		$query = $this->db->select('*')
				->from('tb_insurance')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectInsuranceImg()
	{
		$query = $this->db->select('*')
				->from('tb_insurance')
				->join('tb_insurance_content','tb_insurance.id = tb_insurance_content.insurance_id')
				->where('tb_insurance.status', 1)
				->where('tb_insurance_content.seq', 1)
				->order_by('tb_insurance.seq', 'ASC')
				->order_by('tb_insurance.id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}

	public function selectInsuranceByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_insurance')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function selectInsuranceContent($id)
	{
		$query = $this->db->select('*')
				->from('tb_insurance_content')
				->where('insurance_id', $id)
				->order_by('seq', 'ASC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectInsurancePackage($id)
	{
		$query = $this->db->select('*')
				->from('tb_insurance_package')
				->where('status', 1)
				->where('insurance_id', $id)
				->order_by('seq', 'ASC')
				->get();
		$data = $query->result_array();
		return $data;	
	}

	public function selectInsuranceHow($type)
	{
		$query = $this->db->select('*')
				->from('tb_insurance_how')
				->where('type', $type)
				->order_by('id', 'ASC')
				->get();
			//	echo	$this->db->last_query();exit();
		$data = $query->result_array();
		return $data;	
	}
	public function selectInsuranceHead($type)
	{
		$query = $this->db->select('*')
				->from('tb_insurance_how')
				->where('type', $type)
				->order_by('id', 'ASC')
				->get();
			//	echo	$this->db->last_query();exit();
		$data = $query->row();
		return $data;	
	}

	public function selectPackage()
	{
		$query = $this->db->select('*')
				->from('tb_filter_package')
				->where('status', 1)
				->order_by('id', 'ASC')
				->get();
			//	echo	$this->db->last_query();exit();
		$data = $query->result_array();
		return $data;	
	}

	public function selectInsuranceFillter($id_cate,$id_fillter)
	{
		$query = $this->db->select('*')
				->from('tb_insurance_package')
				->where('status', 1)
				->where('insurance_id', $id_cate)
				->where('filter_id', $id_fillter)
				->order_by('seq', 'ASC')
				->get();
			//	echo	$this->db->last_query();exit();
		$data = $query->result_array();
		return $data;	
	}
	public function selectInsuranceFillterCate($id_cate)
	{
		$query = $this->db->select('*')
				->from('tb_insurance_package')
				->where('status', 1)
				->where('insurance_id', $id_cate)
				->order_by('seq', 'ASC')
				->get();
			//	echo	$this->db->last_query();exit();
		$data = $query->result_array();
		return $data;	
	}
}//class
?>