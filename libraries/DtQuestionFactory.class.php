<?php
/**
 * UserFactory class
 * Created by: Raina Gamboa
 */
 
require_once 'Error.class.php';
require_once 'Utils.class.php';
require_once 'DtQuestion.class.php';
require_once 'db.inc.php';
ini_set('track_errors', true);
 
class DtQuestionFactory {
	public function __construct() {}
	
	public function setDTQuestion($module) {
		$data = array();
		$data['qid']			= $module->getQid();
		$data['module_id']		= $module->getModuleid();
		$data['question']		= $module->getQuestion();
		$data['choices'] 		= $module->getChoices();
		$data['answer'] 		= $module->getAnswer();
		$data['answer_order'] 	= $module->getAnswerOrder();
		return $data;
	}
	
	public function getAllQuestions() {
		$db = new DB();
		$db->connect();
		$result = $db->select("dt_pool");
		$db->disconnect();		
		return $result;
	}
 
	public function getDTPool($mid) {
		$where = array();
		$where['module_id'] = $mid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("dt_pool", $where);
		$db->disconnect();		
		return $result;
	}
	
	public function getTargetQuestion($qid) {
		$where = array();
		$where['qid'] = $qid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("dt_pool", $where);
		$db->disconnect();		
		return $result;
	}
	
	public function addQuestion($question) {
		$data = array();
		$data = $this->setQuestionValues($question);
				
		$db = new DB();
		$db->connect();
		$db->insert("dt_pool", $data);
		$db->disconnect();
	}
	
	private function setQuestionValues($values) {
		$data = array();
		$data['module_id']		= $values['module_id'];
		$data['question']		= $values['question'];
		$data['choices'] 		= $values['choices'];
		$data['answer'] 		= $values['answer'];
		$data['answer_order'] 	= $values['answer_order'];
		return $data;
	}
}
?>