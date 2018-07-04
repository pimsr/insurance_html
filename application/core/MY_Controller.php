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

	protected function currentLang(){
		$lang = $this->session->userdata('lang')==null ? "en" : $this->session->userdata('lang');
		$this->lang->load($lang, $lang);
		return $lang;
	}

	protected function imageManipulation($folder_name, $file_ele)
	{
		$this->load->library('upload');
		$this->load->library('image_lib');
	    $this->configs['allowed_types'] = 'gif|jpg|png|jpeg';
	    $this->configs['encrypt_name'] = TRUE;
	    $this->configs['max_size'] = 1024 * 10;
	    $this->configs['max_width']= 1024 * 10;
	    $this->configs['max_height']= 768 * 10;
	  	$this->configs['upload_path'] = './upload/temp/';

	  	if(count($_FILES) < 1)
	  	{
			return false;
	  	}

	  	$files_name = array();
        $full_path = array();
	  	$files = $_FILES;
        unset($files['files']);

        $number_of_file = count($files[$file_ele]['name']);

        for($i=0; $i<$number_of_file; $i++)
        {
			if(trim($files[$file_ele]['name'][$i]) == ''){
				array_push($files_name, null);
			}else{
				$_FILES[$file_ele]['name'] = $files[$file_ele]['name'][$i];
				$_FILES[$file_ele]['type'] = $files[$file_ele]['type'][$i];
				$_FILES[$file_ele]['tmp_name'] = $files[$file_ele]['tmp_name'][$i];
				$_FILES[$file_ele]['error'] = $files[$file_ele]['error'][$i];
				$_FILES[$file_ele]['size'] = $files[$file_ele]['size'][$i];

				$this->upload->initialize($this->configs);

				if( !$this->upload->do_upload($file_ele) )
				{
					$status = "error";
					$msg = $this->upload->display_errors('', '');
					$file['file_name'] = "";
					
					return array(
						'status' => $status,
						'msg' => $msg,
						'files_name' => $files_name
					);
				}
				else
				{
					$status = "success";
					$msg = "successfully";
					$file = $this->upload->data();

					array_push($full_path, $file['full_path']);
				}

				array_push($files_name, $file['file_name']);
			}
        }//for

    	$resize_text = $this->imageResize($folder_name, $full_path);
    	$status = $resize_text['status'];
    	$msg    = $resize_text['msg'];

		return array(
			'status' => $status,
		 	'msg' => $msg,
		 	'files_name' => $files_name
	 	);
	}

	private function imageResize($folder_name, $full_path)
	{
		$status = "success";
		$msg = "successfully";
		$fullsize_dir = './upload/fullsize/'.$folder_name.'/';
		$thumb_dir = './upload/thumb/'.$folder_name.'/';

		if(!is_dir($fullsize_dir) || !is_dir($thumb_dir))
		{
			return array(
        			'status'=> 'error',
    				'msg' => 'The upload path does not appear to be valid. ('.$folder_name.')'
				);
		}

		foreach($full_path as $path)
		{
	        $config1 = array(
	            'source_image' => $path,
	            'new_image' => './upload/fullsize/'.$folder_name.'/',
	            'maintain_ration' => true,
	            'overwrite' => true,
	            'width' => 1500,
	            'height' => 1500
            );

	        $this->image_lib->initialize($config1);

			if( !$this->image_lib->resize() )
			{
				$status = "error";
	        	$msg = $this->image_lib->display_errors('', '');
	        	
	        	return array(
        			'status'=>$status,
    				'msg' => $msg
				);
	        }
	        $this->image_lib->clear();

	        $config2 = array(
	            'source_image' => $path,
	            'new_image' => './upload/thumb/'.$folder_name.'/',
	            'maintain_ration' => true,
	            'overwrite' => true,
	            'width' => 500,
	            'height' => 500
            );

	        $this->image_lib->initialize($config2);

	        if( !$this->image_lib->resize() )
	        {
	        	$status = "error";
	        	$msg = $this->image_lib->display_errors('', '');

	        	return array(
        			'status' => $status,
        			'msg' => $msg
    			);
	        }
	        $this->image_lib->clear();

	        @unlink($path);
	    }//for

	    return array(
	    	'status' => $status,
	    	'msg' => $msg
    	);
	}

}//class

?>