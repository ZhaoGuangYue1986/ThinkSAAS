<?php
defined('IN_TS') or die('Access Denied.');
 
class message extends tsApp{

	public $db;

	public function __construct($dbhandle){
		$this->db = $dbhandle;
	}
	
	//发送消息
	function sendmsg($useridd,$touseridd,$contentt){
	
		$userid = intval($useridd);
		
		$touserid = intval($touseridd);
		
		$content = addslashes(trim($contentt));
		
		if($touserid||$contect){
		
			$arrData = array(
				'userid'		=> $userid,
				'touserid'		=> $touserid,
				'content'		=> $content,
				'addtime'			=> time(),
			);
			
			$messageid = $this->db->insertArr($arrData,dbprefix.'message');
			
		}
	}
	
}