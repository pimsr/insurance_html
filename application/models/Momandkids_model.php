<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Momandkids_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function selectCategory()
	{
		$query = $this->db->select('*')
				->from('tb_news_category')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
		$data = $query->result_array();
		return $data;	
	}
	public function selectCategoryTotal()
	{
		$query = $this->db->select('cate.id,cate.name_th,cate.name_en, COUNT(news.category_id) AS total')
				->from('tb_news as news')
				->join('tb_news_category as cate','news.category_id = cate.id' )
				->where('cate.status', 1)
				->where('news.status', 1)
				->group_by('news.category_id')
				->get();
		$data = $query->result_array();
		return $data;	
	}

	public function selectCategoryByID($cate_id)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('category_id', $cate_id)
				->where('status', 1)
				->group_by('category_id')
				->get();
		return $data = $query->result_array();
		
	}
	public function selectCategoryID($cate_id)
	{
		$query = $this->db->select('*')
				->from('tb_news_category')
				->where('id', $cate_id)
				->where('status', 1)
				->get();
		return $data = $query->row();
		
	}
	
	public function selectCategoryRowByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('category_id', $id)
				->where('status', 1)
				->get();
		return $data = $query->num_rows();
	}

	public function selectNews($cate)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('status', 1)
				->where('category_id', $cate)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
				
		$data = $query->result_array();
		return $data;	
	}
	public function selectNewsAll()
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->get();
				//echo	$this->db->last_query();exit();
		$data = $query->num_rows();
		return $data;	
	}
	public function selectNewsFilter($key)
	{
		$query = $this->db->select('news.id as id,news.img  as img,news.title_th as title_th,news.title_en as title_en,news.caption_en as caption_en,,news.caption_th as caption_th')
				->from('tb_news as news')
				->join('tb_news_category as cate','news.category_id = cate.id' )
				->where('news.status', 1)
				->where('cate.status', 1)
				->like('news.title_th',$key )
				->or_like('news.title_en',$key )
				->order_by('news.seq', 'ASC')
				->order_by('news.id', 'DESC')
				->get();
			//	echo	$this->db->last_query();exit();
		$data = $query->result_array();
		return $data;	
	}
	public function selectNewsByID($id)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('id', $id)
				->where('status', 1)
				->get();
		$data = $query->row();
		return $data;	
	}

	public function selectNewsLastest($limit)
	{
		$query = $this->db->select('news.id as id,news.img  as img,news.title_th as title_th,news.title_en as title_en,news.date as date')
				->from('tb_news as news')
				->join('tb_news_category as cate','news.category_id = cate.id ')
				->where('news.status', 1)	
				->where('cate.status', 1)					
				->order_by('date', 'DESC')
				->limit($limit)
				->get();
		$data = $query->result_array();
		return $data;	
	}

	public function selectNewsRelate($cate_id)
	{
		$query = $this->db->select('news.id as id,news.img  as img,news.title_th as title_th,news.title_en as title_en ')
				->from('tb_news as news')
				->join('tb_news_category as cate','news.category_id = cate.id ')
				->where('news.status', 1)	
				->where('cate.status', 1)		
				->where('news.category_id', $cate_id)
				->order_by('id', 'RANDOM')
				->limit(3)
				->get();
				//echo	$this->db->last_query();exit();
		$data = $query->result_array();
		return $data;	
	}

	public function getLink($id = 0){

	 	$query = $this->db->query(
			 "SELECT
				(
				SELECT
					id
				FROM
					tb_news
				WHERE
					id > {$id} AND status = 1
				LIMIT 1
			) AS nextValue,(
				SELECT
					id
				FROM
					tb_news
				WHERE
					id < {$id} AND status = 1
				ORDER BY
					id
				DESC
			LIMIT 1
			) AS prevValue
			FROM
				tb_news
			LIMIT 1"
		 );

		return $query->row();
	 }

	 public function getNewsAll($limit, $start) {

		
		$query = $this->db->select('news.id as id,news.img  as img,news.title_th as title_th,news.title_en as title_en,news.caption_en as caption_en,,news.caption_th as caption_th')
				->from('tb_news as news')
				->join('tb_news_category as cate','news.category_id = cate.id' )
				->where('news.status', 1)
				->where('cate.status', 1)
				->order_by('news.seq', 'ASC')
				->order_by('news.id', 'DESC')
				->limit($limit, $start)
				->get();
			//echo	$this->db->last_query();exit();
				
        if ($query->num_rows() > 0) {
			
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
		}
		
		return false;
		
	   }
	   
	   public function getCateAll($limit, $start, $cate_id) {
		$where = array(
			'status' => 1, 
			'category_id' => $cate_id
		);
		
		$query = $this->db->select('*')
				->from('tb_news')
				->where($where)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->limit($limit, $start)
				->get();
			//echo	$this->db->last_query();exit();
				
        if ($query->num_rows() > 0) {
			
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
		}
		
		return false;
		
	   }

	   public function selectSearch($key)
	{
		$query = $this->db->select('*')
				->from('tb_news')
				->where('status', 1)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')
				->like('title_th', $key)
				//->like('title_en', $key)
				->get();
				//echo	$this->db->last_query();exit();
		$data = $query->row();
		return $data;	
	}

	public function getNewsAllSearch($limit, $start, $key) {
		$where = array(
			'status' => 1, 
		);
		
		$query = $this->db->select('*')
				->from('tb_news')
				->where($where)
				->like('title_th', $key)
				->order_by('seq', 'ASC')
				->order_by('id', 'DESC')	
				->limit($limit, $start)
				->get();
			//echo	$this->db->last_query();exit();
				
        if ($query->num_rows() > 0) {
			
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
		}
		
		return false;
		
	   }
	   

}//class
?>