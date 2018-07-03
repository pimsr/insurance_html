<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectContact()
	{
		$query = $this->db->select('*')
				->from('tb_contact')
				->where('id', 1)
				->limit(1)
				->get();
		$data = $query->result_array();
		return $data[0];	
	}
	public function updateContact($value){
		$values = array(
			'title_th' => $value['title_th'],
			'title_en' => $value['title_en'],
			'subtitle_th' => $value['subtitle_th'],
			'subtitle_en' => $value['subtitle_en'],
			'address_th' => $value['address_th'],
			'address_en' => $value['address_en'],
			'time_th' => $value['time_th'],
			'time_en' => $value['time_en'],
			'claim_tel' => $value['claim_tel'],
			'claim_link' => $value['claim_link'],
			'facebook' => $value['facebook'],
			'line' => $value['line'],
			'tel' => $value['tel'],
			'email' => $value['email'],
			'instagram' => $value['instagram'],
			'twitter' => $value['twitter'],
			'updated_date' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id', 1);
		$this->db->update('tb_contact', $values);
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