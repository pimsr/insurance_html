<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectContent()
	{
		$query = $this->db->select('*')
				->from('tb_plan')
				->order_by('seq', 'ASC')
				->limit(2)
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectPackage()
	{
		$query = $this->db->select('*')
				->from('tb_plan_package')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->get();
		$data = $query->result_array();
		return $data;
	}
}//class
?>