<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	// plan
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
	public function updateContent($value){
		$updated_date = date("Y-m-d H:i:s");
		foreach($value['id'] as $key => $id){
			$values = array(
				'title_th' => $value['title_th'][$key],
				'title_en' => $value['title_en'][$key],
				'desc_th' => $value['desc_th'][$key],
				'desc_en' => $value['desc_en'][$key],
				'img' => sizeof($value['img'] > 0) ? $value['img'][$key] : null,
				'updated_date' => $updated_date,
			);
	
			if(trim($values['img']) == '') unset($values['img']);
	
			$this->db->where('id', $id);
			$this->db->update('tb_plan', $values);
		}
		return 1;
	}

	// package
	public function selectPackage()
	{
		$query = $this->db->select('*')
				->from('tb_plan_package')
				->where('status != -1')
				->order_by('seq', 'ASC')
				->get();
		$data = $query->result_array();
		return $data;
	}
	public function updatePackage($value){
		$date = date("Y-m-d H:i:s");
		foreach($value['id'] as $key => $id){
			if($id == 0){
				$values = array(
					'title_th' => $value['title_th'][$key],
					'title_en' => $value['title_en'][$key],
					'desc_th' => $value['desc_th'][$key],
					'desc_en' => $value['desc_en'][$key],
					'status' => $value['status'][$key],
					'seq' => $value['seq'][$key],
					'created_date' => $date,
				);
				$this->db->insert('tb_plan_package',$values);
			}else{
				$values = array(
					'title_th' => $value['title_th'][$key],
					'title_en' => $value['title_en'][$key],
					'desc_th' => $value['desc_th'][$key],
					'desc_en' => $value['desc_en'][$key],
					'status' => $value['status'][$key],
					'seq' => $value['seq'][$key],
					'updated_date' => $date,
				);
				$this->db->where('id', $id);
				$this->db->update('tb_plan_package', $values);
			}
		}
		return 1;
	}
}//class
?>