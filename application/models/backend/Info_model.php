<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function setDetail($value){
		// default
		$date = date("Y-m-d H:i:s");
		$in = array(
			'img' => sizeof($value['banner'] > 0) ? $value['banner'][0] : null,
			'updated_date' => $date
		);
		if(trim($in['img']) == '') unset($in['img']);
		$this->db->where('id', $value['type_id']);
		$this->db->update('tb_insurance', $in);

		// content
		foreach($value['c_id'] as $key => $c_id){
			$content = array(
				'title_th' => $value['c_title_th'][$key],
				'title_en' => $value['c_title_en'][$key],
				'desc_th' => $value['c_desc_th'][$key],
				'desc_en' => $value['c_desc_en'][$key],
				'img' => sizeof($value['img'] > 0) ? $value['img'][$key] : null,
				'updated_date' => $date
			);
			if(trim($content['img']) == '') unset($content['img']);
			$this->db->where('id', $c_id);
			$this->db->update('tb_insurance_content', $content);
		}
		
		// package
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
					'insurance_id' => $value['type_id']
				);
				$this->db->insert('tb_insurance_package',$values);
			}else{
				$values = array(
					'title_th' => $value['title_th'][$key],
					'title_en' => $value['title_en'][$key],
					'desc_th' => $value['desc_th'][$key],
					'desc_en' => $value['desc_en'][$key],
					'status' => $value['status'][$key],
					'seq' => $value['seq'][$key],
					'updated_date' => $date,
					'insurance_id' => $value['type_id']
				);
				$this->db->where('id', $id);
				$this->db->update('tb_insurance_package', $values);
			}
		}

		return 1;
	}
	// insurance
	public function selectInsurance()
	{
		$query = $this->db->select('*')
				->from('tb_insurance')
				->where('status != -1')
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectInsuranceByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_insurance')
				->where('id', $id)
				->where('status != -1')
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
				->where('status != -1')
				->where('insurance_id', $id)
				->order_by('seq', 'ASC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function insertInsurance($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'caption_th' => $value['caption_th'],
			'caption_en' => $value['caption_en'],
			'note_th' => $value['note_th'],
			'note_en' => $value['note_en'],
			'icon' => sizeof($value['icon'] > 0) ? $value['icon'][0] : null,
			'status' => 0,
			'created_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['icon']) == '') unset($values['icon']);

		$this->db->insert('tb_insurance',$values);
		return $this->db->insert_id();
	}
	public function updateInsurance($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'caption_th' => $value['caption_th'],
			'caption_en' => $value['caption_en'],
			'note_th' => $value['note_th'],
			'note_en' => $value['note_en'],
			'icon' => sizeof($value['icon'] > 0) ? $value['icon'][0] : null,
			'updated_date' => date("Y-m-d H:i:s"),
		);

		if(trim($values['icon']) == '') unset($values['icon']);

		$this->db->where('id', $value['id']);
		$this->db->update('tb_insurance', $values);
		return $this->db->affected_rows();
	}
	public function updateInsuranceActions($data){
		foreach($data['id'] as $key => $id){
			$values = array(
				'seq' => $data['seq'][$key],
				'status' => empty($data['status'][$key]) ? 0 : 1
			);
			$this->db->where('id', $id);
			$this->db->update('tb_insurance', $values);
		}
		return 1;
	}
	public function deleteInsurance($id){
		$this->db->where('id', $id);
		$this->db->update('tb_insurance', array('status' => -1));
		return $this->db->affected_rows();
	}
	public function insertInsuranceContent($parent_id){
		for($i=1 ; $i<=2 ; $i++){
			$values = array(
				'seq' => $i,
				'insurance_id' => $parent_id,
				'created_date' => date("Y-m-d H:i:s"),
			);
			$this->db->insert('tb_insurance_content',$values);
		}
		return 1;
	}

	// how
	public function selectInsuranceHow($type)
	{
		$query = $this->db->select('*')
				->from('tb_insurance_how')
				->where('type', $type)
				->order_by('id', 'ASC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function updateInsuranceHow($data){
		$date = date("Y-m-d H:i:s");

		$this->db->where('type', 'head');
		$this->db->update('tb_insurance_how', array(
			'desc_th' => $data['head_th'],
			'desc_en' => $data['head_en'],
			'updated_date' => $date
		));

		foreach($data['id'] as $key => $id){
			$values = array(
				'title_th' => $data['title_th'][$key],
				'title_en' => $data['title_en'][$key],
				'desc_th' => $data['desc_th'][$key],
				'desc_en' => $data['desc_en'][$key],
				'icon' => $data['icon'][$key],
				'updated_date' => $date
			);
			if(trim($values['icon']) == '') unset($values['icon']);
			$this->db->where('id', $id);
			$this->db->update('tb_insurance_how', $values);
		}
		return 1;
	}
}//class
?>