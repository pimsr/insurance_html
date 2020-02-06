<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectAds()
	{
		$query = $this->db->select('*')
				->from('tb_adv')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}

}//class
?>