<?php
/**
 * UserFactory class
 * Created by: Raina Gamboa
 */
 
require_once 'Error.class.php';
require_once 'Utils.class.php';
require_once 'StudentDt.class.php';
require_once 'StudentDtAnswer.class.php';
require_once 'db.inc.php';
ini_set('track_errors', true);
 
class StudentDtFactory {
	public function __construct() {}
	
	public function getStudentDt($userid, $mid, $mode) {
		$where = array();
		$where['user_id'] 	= $userid;
		$where['module_id'] = $mid;
		$where['mode']		= $mode;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_dt", $where);
		$db->disconnect();

		foreach($result as $row) {
			$sdt = $this->setStudentDt($row);
			return $sdt;
		}
	}
	
	public function getSDTbyStudent($userid, $dtid) {
		$where = array();
		$where['user_id'] 	= $userid;
		$where['dt_id'] 	= $dtid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_dt", $where);
		$db->disconnect();

		foreach($result as $row) {
			$sdt = $this->setStudentDt($row);
			return $sdt;
		}
	}
	
	public function getTestByDTID($dtid) {
		$where = array();
		$where['dt_id'] = $dtid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_dt", $where);
		$db->disconnect();

		return $result;
	}
	
	public function getAllStudentTests($userid) {
		$where = array();
		$where['user_id'] = $userid;
	
		$db = new DB();
		$db->connect();
		$result = $db->select("student_dt", $where);
		$db->disconnect();
		return $result;
	}
	
	public function updateDiagnosticTest($userid, $moduleid, $mode) {
		$where = array();
		$where['user_id'] 		= $userid;
		$where['module_id'] 		= $moduleid;
		$where['mode']			= $mode;
	
		$data					= array();
		$data['date_ended'] 	= date('Y-m-d G:i:s');
					
		$db = new DB();
		$db->connect();
		$result = $db->update("student_dt", $where, $data);
		$db->disconnect();
	}
	
	public function updateDiagnosticTestByID($studentdtid, $startdate) {
		$where = array();
		$where['student_dt_id'] = $studentdtid;
	
		$data					= array();
		$data['date_ended'] 	= date('Y-m-d G:i:s');
		$data['date_started'] 	= $startdate;
					
		$db = new DB();
		$db->connect();
		$result = $db->update("student_dt", $where, $data);
		$db->disconnect();
	}
	
	public function getStudentAnswer($studentdtid) {
		$where = array();
		$where['student_dt_id'] = $studentdtid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_dt_answers", $where, "*", "qid ASC");
		$db->disconnect();
		return $result;
	}
	
	public function getStudentAnswerByQuestion($studentdtid, $qid) {
		$where = array();
		$where['student_dt_id'] = $studentdtid;
		$where['qid'] = $qid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_dt_answers", $where);
		$db->disconnect();
		return $result;
	}
	
	public function getTargetAnswer($studentdtid, $qid) {
		$where = array();
		$where['student_dt_id'] = $studentdtid;
		$where['qid']			= $qid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_dt_answers", $where);
		$db->disconnect();
		return $result;
	}
	
	public function updateAnswer($studentdtid, $qid, $answer, $mark) {
		$where = array();
		$where['student_dt_id'] = $studentdtid;
		$where['qid'] 			= $qid;
	
		$data					= array();
		$data['answer'] 		= $answer;
		$data['mark']			= $mark;
					
		$db = new DB();
		$db->connect();
		$result = $db->update("student_dt_answers", $where, $data);
		$db->disconnect();
	}
	
	public function addStudentDT($values){
		$data = array();
		$data = $this->setDtValues($values);
				
		$db = new DB();
		$db->connect();
		$db->insert("student_dt", $data);
		$db->disconnect();
	}	
	
	public function addStudentAnswer($values) {
		$data = array();
		$data = $this->setDtAnswers($values);
				
		$db = new DB();
		$db->connect();
		$db->insert("student_dt_answers", $data);
		$db->disconnect();
	}
	
	private function setDtValues($values) {
		$data = array();
		$data['user_id']			= $values['userid'];
		$data['module_id']			= $values['moduleid'];
		$data['mode']				= $values['mode'];
		$data['dt_id'] 				= $values['dtid'];
		$data['date_started'] 		= $values['datestarted'];
		return $data;
	}
	
	private function setDtAnswers($values) {
		$data = array();
		$data['student_dt_id']		= $values['sdtid'];
		$data['qid']				= $values['qid'];
		$data['answer'] 			= $values['answer'];
		$data['mark'] 				= $values['mark'];
		return $data;
	}
	
	private function setStudentDt($row) {
		$st = new StudentDt();
		$st->setStudentDtID	($row['student_dt_id']);
		$st->setUserID		($row['user_id']);
		$st->setModuleID	($row['module_id']);
		$st->setMode		($row['mode']);
		$st->setDTID		($row['dt_id']);
		$st->setStartDate	($row['date_started']);
		$st->setEndDate		($row['date_ended']);
		return $st;
	}
	
	private function setStudentAnswer($row) {
		$sda = new StudentDtAnswer();
		$sda->setStudentAnswerID	($row['student_answer_id']);
		$sda->setStudentDtID		($row['student_dt_id']);
		$sda->setQid				($row['qid']);
		$sda->setAnswer				($row['answer']);
		$sda->setMark				($row['mark']);
		return $sda;
	}
}
?>