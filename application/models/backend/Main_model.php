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
	
}//class
?>