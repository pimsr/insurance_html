<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	// hospital
	public function selectProvince()
	{
		$query = $this->db->select('*')
				->from('tb_province')
				->order_by('id', 'ASC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectHospital()
	{
		$query = $this->db->select('*')
				->from('tb_hospital')
				->where('status != -1')
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
				->where('status != -1')
				->get();
		$data = $query->result_array();
		return sizeof($data) > 0 ? $data[0] : null;	
	}
	public function insertHospital($value){
		$values = array(
			'name_th' => $value['name_th'],
			'name_en' => $value['name_en'],
			'room_th' => json_encode($value['room_th']),
			'room_en' => json_encode($value['room_en']),
			'province_id' => $value['province_id'],
			'price' => json_encode($value['price']),
			'tel' => $value['tel'],
			'link' => $value['link'],
			'status' => 0,
			'created_date' => date("Y-m-d H:i:s"),
		);

		$this->db->insert('tb_hospital',$values);
		return $this->db->insert_id();
	}
	public function updateHospital($value){
		$values = array(
			'name_th' => $value['name_th'],
			'name_en' => $value['name_en'],
			'room_th' => json_encode($value['room_th']),
			'room_en' => json_encode($value['room_en']),
			'province_id' => $value['province_id'],
			'price' => json_encode($value['price']),
			'tel' => $value['tel'],
			'link' => $value['link'],
			'updated_date' => date("Y-m-d H:i:s"),
		);

		$this->db->where('id', $value['id']);
		$this->db->update('tb_hospital', $values);
		return $this->db->affected_rows();
	}
	public function updateHospitalActions($data){
		foreach($data['id'] as $key => $id){
			$values = array(
				'seq' => $data['seq'][$key],
				'status' => empty($data['status'][$key]) ? 0 : 1
			);
			$this->db->where('id', $id);
			$this->db->update('tb_hospital', $values);
		}
		return 1;
	}
	public function deleteHospital($id){
		$this->db->where('id', $id);
		$this->db->update('tb_hospital', array('status' => -1));
		return $this->db->affected_rows();
	}
}//class
?>