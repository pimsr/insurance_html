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

	function updateCover($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'updated_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->where('position', $value['position']);
		$this->db->update('tb_cover', $values);
		return $this->db->affected_rows();
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

	function updateHeadline($value){
		$values = array(
			'title_th' => $value['h_title_th'],
			'title_en' => $value['h_title_en'],
			'subtitle_th' => $value['h_subtitle_th'],
			'subtitle_en' => $value['h_subtitle_en'],
			'updated_date' => date("Y-m-d H:i:s")
		);

		$this->db->where('position', $value['h_position']);
		$this->db->update('tb_headline', $values);
		return $this->db->affected_rows();
	}

	function selectAdmin($value){
		$query = $this->db->select('*')
				->from('tb_admin')
				->where('user', $value['user'])
				->where('pass', hash('sha512', $value['pass']))
				->limit(1)
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}

	function insertLog($id){
		$this->load->library('user_agent');
		$values = array(
			'device' => $this->agent->browser().' '.$this->agent->version(),
			'admin_id' => $id,
			'created_date' => date("Y-m-d H:i:s"),
		);

		$this->db->insert('tb_log',$values);
		return $this->db->insert_id();
	}
	
}//class
?>