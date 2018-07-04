<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('convertStatus')){
	function convertStatus($text=""){
		switch($text){
			case 'ACTIVE': return "success"; break;
			case 'INACTIVE': return "inverse"; break;		
			case 'SUSPENDED': return "danger"; break;
			default: return false; break;
		}
	}
}
if(!function_exists('mapData')){
	//A=active, I=inactive, S=suspended, D=deleted
	function mapData($text=""){
		switch($text){
			case '0': return array('style'=>'inverse','text'=>'INACTIVE'); break;
			case '1': return array('style'=>'success','text'=>'ACTIVE'); break;
			case 'A': return array('style'=>'success','text'=>'ACTIVE'); break;
			case 'I': return array('style'=>'inverse','text'=>'INACTIVE'); break;
			case 'S': return array('style'=>'danger','text'=>'SUSPENDED'); break;
		}
	}
}

function label($label)
{
	$ci =& get_instance();
	$rs = $ci->lang->line($label);
	if($rs)
	{
		return $rs;
	}
	else
	{
		return $label;
	}
}

function getLang(){
	$ci =& get_instance();
	$rs = ($ci->session->userdata('lang')=='') ? 'th' : $ci->session->userdata('lang');
	return $rs;
}
?>