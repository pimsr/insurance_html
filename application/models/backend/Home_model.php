<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectBanner()
	{
		$query = $this->db->select('*')
				->from('tb_banner')
				->where('status != -1')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function insertBanner($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'subtitle_th' => $value['subtitle_th'],
			'subtitle_en' => $value['subtitle_en'],
			'img' => sizeof($value['img'] > 0) ? $value['img'][0] : null,
			'status' => 1,
			'created_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['img']) == '') unset($values['img']);

		$this->db->insert('tb_banner',$values);
		return $this->db->affected_rows();
	}
	
}//class
?>