<?php
/**
 * UserFactory class
 * Created by: Raina Gamboa
 */
 
require_once 'Error.class.php';
require_once 'Utils.class.php';
require_once 'TeacherModule.class.php';
require_once 'db.inc.php';
ini_set('track_errors', true);
 
class TeacherModuleFactory {
	
	public function __construct() {}
	
	public function addTeacherModule($userid, $mid) {
		$data = array();
		$data['user_id'] = $userid;
		$data['module_id'] = $mid;
				
		$db = new DB();
		$db->connect();
		$db->insert("teacher_module", $data);
		$db->disconnect();
	}

	public function getTeacherModule($userid) {
		$where = array();
		$where['user_id'] = $userid;
	
		$db = new DB();
		$db->connect();
		$result = $db->select("teacher_module", $where);
		$db->disconnect();		
		return $result;
	}
	
	public function getTargetModule($userid, $mid) {
		$where = array();
		$where['user_id'] = $userid;
		$where['module_id'] = $mid;
	
		$db = new DB();
		$db->connect();
		$result = $db->select("teacher_module", $where);
		$db->disconnect();		
		
		return $result[0]['isactive'];
	}

	public function updateTeacherModule($userid, $mid, $isactive) {
		$where = array();
		$where['user_id'] = $userid;
		$where['module_id'] = $mid;
		
		$data = array();
		$data['isactive'] = $isactive;
		
		$db = new DB();
		$db->connect();
		$result = $db->update("teacher_module", $where, $data);
		
		$db->disconnect();
	}
}