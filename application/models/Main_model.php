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
}//class
?>