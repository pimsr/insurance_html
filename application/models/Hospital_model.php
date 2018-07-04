<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectHospital()
	{
		$query = $this->db->select('*')
				->from('tb_hospital')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectHospitalByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_hospital')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function selectProvince()
	{
		$query = $this->db->select('tb_province.*')
				->from('tb_hospital')
				->join('tb_province', 'tb_province.id = tb_hospital.province_id')
				->where('tb_hospital.status', 1)
				->group_by('tb_hospital.province_id')
				->get();
		$data = $query->result_array();
		return $data;	
	}
}//class
?>