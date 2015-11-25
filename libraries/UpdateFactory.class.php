<?php
/**
 * UserFactory class
 * Created by: Raina Gamboa
 */
 
require_once 'Error.class.php';
require_once 'Utils.class.php';
require_once 'Update.class.php';
require_once 'db.inc.php';
ini_set('track_errors', true);
 
class UpdateFactory {

	public function __construct() {}

	public function addUpdate($values) {
		$data = array();
		$data = $this->setUpdate($values);
				
		$db = new DB();
		$db->connect();
		$db->insert("update_log", $data);
		$db->disconnect();
	}
	
	private function setUpdate($values) {
		$data = array();
		$data['module_id']			= $values['module_id'];
		$data['description'] 		= $values['description'];
		$data['date_updated'] 		= date('Y-m-d G:i:s');
		return $data;
	}

	public function getAllUpdates($limit) {		
		$db = new DB();
		$db->connect();
		$result = $db->select("update_log","","*","date_updated DESC LIMIT ".$limit);
		$db->disconnect();
		return $result;
	}

	public function getModuleUpdates($limit, $mid) {
		$where = array();
		$where['module_id'] = $mid;

		$db = new DB();
		$db->connect();
		$result = $db->select("update_log",$where,"*","date_updated DESC LIMIT ".$limit);
		$db->disconnect();
		return $result;
	}

}

