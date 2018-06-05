<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	private $configs;
	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
	}
	protected function checkAdmin(){
		if(!$this->session->has_userdata('admin')){
			redirect("backend/login", "refresh");
		}
	}

	protected function imageManipulation($folder_name,$files,$file_ele){
		$this->load->library('upload');
		$this->load->library('image_lib');
	    $this->configs['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
	    $this->configs['encrypt_name']=TRUE;
	    $this->configs['max_size'] = 0;
	    $this->configs['max_width']= 0;
	    $this->configs['max_height']=0;
	  	$this->configs['upload_path'] = './upload/'.$folder_name;

  	 	$arr_file=array();
        $full_path=array();
		$number_of_file=count($files[$file_ele]['name']);
		$status = "error";
		$msg = "not upload";
		for($i=0; $i<$number_of_file; $i++){
			if(trim($files[$file_ele]['name'][$i]) != '') {
				$_FILES[$file_ele]['name']=$files[$file_ele]['name'][$i];
				$_FILES[$file_ele]['type']=$files[$file_ele]['type'][$i];
				$_FILES[$file_ele]['tmp_name']=$files[$file_ele]['tmp_name'][$i];
				$_FILES[$file_ele]['error']=$files[$file_ele]['error'][$i];
				$_FILES[$file_ele]['size']=$files[$file_ele]['size'][$i];
				$this->upload->initialize($this->configs);
	
				if(!$this->upload->do_upload($file_ele)){
					$status = "error";
					$msg = $this->upload->display_errors('','');
					$file['file_name']="";
					// return array('status'=>$status,'msg'=>$msg);
				}else{
					$status = "success";
					$msg = "successfully";
					$file=$this->upload->data();
					// array_push($full_path,$file['full_path']);
				}
				array_push($arr_file,$file['file_name']);
			}else{
				array_push($arr_file,'');
			}
		}

    	// $resize_text = $this->imageResize($folder_name,$full_path);
    	// $status = $resize_text['status'];
    	// $msg    = $resize_text['msg'];
		return array('status'=>$status,'msg'=>$msg,'arr_file'=>$arr_file);
	}
	private function imageResize($folder_name,$full_path){
		$status="success";
		$msg="successfully";
		foreach($full_path as $path){
	        $config1=array(
	            'source_image'=>$path,
	            'new_image'=>'./upload/fullsize/'.$folder_name.'/',
	            'maintain_ration'=>true,
	            'overwrite'=>true,
	            'width'=>1500,
	            'height'=>1500
	            );
	        $this->image_lib->initialize($config1);
			if(!$this->image_lib->resize()){
				$status="error";
	        	$msg=$this->image_lib->display_errors('','');
	        	return array('status'=>$status,'msg'=>$msg);
	        }
	        $this->image_lib->clear();

	        $config2=array(
	            'source_image'=>$path,
	            'new_image'=>'./upload/thumb/'.$folder_name.'/',
	            'maintain_ration'=>true,
	            'overwrite'=>true,
	            'width'=>500,
	            'height'=>500
	            );
	        $this->image_lib->initialize($config2);
	        if(!$this->image_lib->resize()){
	        	$status="error";
	        	$msg=$this->image_lib->display_errors('','');
	        	return array('status'=>$status,'msg'=>$msg);
	        }
	        $this->image_lib->clear();

	        @unlink($path);
	    }//for
	    return array('status'=>$status,'msg'=>$msg);
	}

}//class

?>