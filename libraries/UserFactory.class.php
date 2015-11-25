<?php
/**
 * UserFactory class
 * Created by: Raina Gamboa
 */
require_once 'Error.class.php';
require_once 'Utils.class.php';
require_once 'User.class.php';
require_once 'Module.class.php';
require_once 'Exercise.class.php';
require_once 'Question.class.php';
require_once 'StudentAnswer.class.php';
require_once 'db.inc.php';
ini_set('track_errors', true);

class UserFactory {

	public function __construct() {}
	// get all users in the database
	public function getAllUsers() {
		$users = array();
		
		$db = new DB();
		$db->connect();
		$result = $db->select("users");
		$db->disconnect();
		
		foreach($result as $row) {
			$user = $this->setUser($row);
			array_push($users, $user);
		}
		
		return empty($users) ? null : $users;
	}
	
	public function getAllModules() {
		$modules = array();
		
		$db = new DB();
		$db->connect();
		$result = $db->select("module","","*","module_name ASC");
		$db->disconnect();
		return $result;
	}
	
	public function loadModule($modid) {
		$where = array();
		$where['module_ID'] = $modid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("module", $where);
		$db->disconnect();
		
		foreach($result as $row) {
			$module = $this->setModule($row);
			return $module;
		}
	}
	
	//load student module by student module id
	public function loadStudentModule($smid) {
		$where = array();
		$where['student_module_ID'] = $smid;
		$db = new DB();
		$db->connect();
		$result = $db->select("student_module", $where,'*');
		$db->disconnect();		
		return $result[0];	
	}
	
	//load all student module by user id and module id
	// public function loadAllStudentModule($userid, $modid) {
		// $where = array();
		// $where['user_ID'] = $userid;
		// $where['module_ID'] = $modid;
		
		// $db = new DB();
		// $db->connect();
		// $result = $db->select("student_module", $where,'*','student_module_ID ASC');
		// $db->disconnect();		
		// return $result;	
	// }
	
	//load all student module by user
	public function loadAllStudentModule($userid) {
		$where = array();
		$where['user_ID'] = $userid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_module", $where,'*','student_module_ID ASC');
		$db->disconnect();		
		return $result;	
	}
	
	public function loadStudentModuleByUser($userid, $modid) {
		$where = array();
		$where['user_ID'] = $userid;
		$where['module_ID'] = $modid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_module", $where,'*','student_module_ID ASC');
		$db->disconnect();		
		return $result;	
	}
	
	//set finish date
	public function finishModule($smid) {
		$where = array();
		$where['student_module_ID'] = $smid;
		
		$data = array();
		$data['date_finished'] = date("Y-m-d H:i:s");
		
		$db = new DB();
		$db->connect();
		$result = $db->update("student_module", $where, $data);
		
		$db->disconnect();
	}
	
	//count takes
	public function countModules($userid, $modid) {
		$where = array();
		$where['user_ID'] = $userid;
		$where['module_ID'] = $modid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_module", $where,'*','student_module_ID ASC');
		$count = $db->dbgetrowcount();
		$db->disconnect();		
		return $count;
	}
	
	public function loadExercises($modid) {
		$where = array();
		$where['module_ID'] = $modid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("exercise", $where);
		$db->disconnect();
		
		foreach($result as $row) {
			$exercise = $this->setExercise($row);
			return $exercise;
		}
		
	}
	
	//load all exercise by module id and return results - not an object type
	public function loadExercisesByType($modid, $type) {
		$where = array();
		$where['module_ID'] = $modid;
		$where['type'] = $type;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("exercise", $where,'*','exercise_ID ASC');
		$db->disconnect();		
		return $result;	
	}
	
	//load all questions by exercise id and return results - not an object type
	
	public function loadQuestions($exid) {
		$where = array();
		$where['exercise_ID'] = $exid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("questions", $where);
		$db->disconnect();		
		return $result;	
	}
	
	//load user by type - used in loading all the user by specific type
	//parameter(0 - teacher/admin, 1 - parent, 2 - students/users)
	
	public function loadUserType($type, $teacherid) {
		$where = array();
		$where['type'] = $type;
		$where['teacher_id'] = $teacherid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("users", $where,'*','last_name ASC');
		$db->disconnect();	
		return $result;
		
	}
	
	//load all user information for a specific username
	//load user by username - also used in login for getting the actual data(username and password)
	public function loadUser($username) {
		$where = array();
		$where['username'] = $username;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("users", $where);
		$db->disconnect();
		
		foreach($result as $row) {
			$user = $this->setUser($row);
			return $user;
		}
	}
	//load user by user ID
	public function loadUserByID($userid) {
		$where = array();
		$where['user_ID'] = $userid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("users", $where);
		$db->disconnect();
		
		foreach($result as $row) {
			$user = $this->setUser($row);
			return $user;
		}
		
	}
	//updating the student last screen!
	public function updateStudentLastscreen($page, $stud_mod_id) {
		$where = array();
		$where['student_module_ID'] = $stud_mod_id;
		
		$data = array();
		$data['last_screen'] = $page;
					
		$db = new DB();
		$db->connect();
		$result = $db->update("student_module", $where, $data);
		$db->disconnect();
	}
	
	//admin updating user informations
	public function updateUser($userid, $uname, $fname, $lname, $gender) {
		$where = array();
		$where['user_ID'] = $userid;
		
		$data = array();
		$data['first_name'] = $fname;
		$data['last_name'] 	= $lname;
		$data['username']	= $uname;
		$data['gender']		= $gender;
					
		$db = new DB();
		$db->connect();
		$result = $db->update("users", $where, $data);
		$db->disconnect();
	}
	
	//update admin and client password using username
	public function updatePassword($userid, $newpassword){
		$where = array();
		$where['user_ID'] = $userid;
		
		$data = array();
		$data['password'] = $newpassword;
		
		$db = new DB();
		$db->connect();
		$result = $db->update("users", $where, $data);
		$db->disconnect();
	}
	
	//update client password in admin page using user id
	public function updateUserPassword($userid, $password){
		$where = array();
		$where['user_ID'] = $userid;
		
		$salt = sha1(md5($password));
		$password = md5($password.$salt);
	
		$data = array();
		$data['password']           = $password;
		
		$db = new DB();
		$db->connect();
		$result = $db->update("users", $where, $data);
		$db->disconnect();
	}

	//delete specific user in  the admin page
	public function deleteUser($userid) {
		$where = array();
		$where['user_ID'] = $userid;
				
		$db = new DB();
		$db->connect();
		$result = $db->delete("users", $where);
		$db->disconnect();
	}
	
	//delete specific module in  the admin page
	public function deleteModule($moduleid) {
		$where = array();
		$where['moduleid'] = $moduleid;
				
		$db = new DB();
		$db->connect();
		$result = $db->delete("module", $where);
		$db->disconnect();
	}
	
	//delete specific exercise in  the admin page
	public function deleteExercise($exid) {
		$where = array();
		$where['exid'] = $exid;
				
		$db = new DB();
		$db->connect();
		$result = $db->delete("exercise", $where);
		$db->disconnect();
	}

	// - user registration and adding default user roles for the new user. send mail for verification
	public function registerUser($user) {
		$data = array();
		$data = $this->setData($user);
		
		$data['username'] = $user->getUsername();	
		$data['status'] = 'Active';	
		$data['role'] = 'Student';
				
		$db = new DB();
		$db->connect();
		$db->insert("users", $data);
		$db->disconnect();
	}
	
	
	public function getStudentAnswer($smid, $qid) {
		$where = array();
		$where['student_module_ID'] = $smid;
		$where['question_ID'] = $qid;
		
		$db = new DB();
		$db->connect();
		$answer = $db->select("student_answers",$where,'answer');
		$db->disconnect();
		
		if (isset($answer[0])) return $answer[0]['answer'];
		else return 0;
	}
	
	//adding student answer from the student_answers database
	
	public function addStudentAnswer($student_module_id, $question_id, $student_answer) {
		$data = array();
		$data['student_module_ID'] = $student_module_id;
		$data['question_ID'] = $question_id;
		$data['answer'] = $student_answer;
		//$data = $this->setStudentAnswerData($student_answer)		
		
		$where = array();
		$where['student_module_ID'] = $student_module_id;
		$where['question_ID'] = $question_id;
		$db = new DB();
		$db->connect();
		
		//check if student answer already exists
		$result = $db->select("student_answers",$where);
		$found = false;
		foreach ($result as $row) { $found = true; }
		
		if (!$found) $db->insert("student_answers", $data);
			
		$db->disconnect();
	}
	
	public function addStudentModule($userid, $modid) {
		$data = array();
		$data['user_ID'] = $userid;
		$data['module_ID'] = $modid;
		$data['date_started'] = date('Y-m-d H:i:s');
		$data['last_screen'] = '1';
				
		$db = new DB();
		$db->connect();
		$db->insert("student_module", $data);
		
		$id = $db->dblastinsertid();
		
		$db->disconnect();
		
		return $id;
	}
	
	public function addModule($module) {
		$data = array();
		$data = $this->setModuleData($module);
				
		$db = new DB();
		$db->connect();
		$db->insert("module", $data);
		$db->disconnect();
	}
	
	public function addTestQuestions() {
		$data = array();
		$data = $this->setModuleData($module);
		
		$db = new DB();
		$db->connect();
		$db->insert("module", $data);
		$db->disconnect();
		
	}
	
	public function addExercise($exercise) {
		$data = array();
		$data = $this->setExerciseData($exercise);
		
		$data['moduleid'] = $_POST['moduleid'];
				
		$db = new DB();
		$db->connect();
		$db->insert("exercise", $data);
		$db->disconnect();
	}
	
	// login script for both admin and client 
	public function loginUser($username, $password) {
		if ($user = $this->loadUser($username)) {
			$hashedpass = $password;
			
			if ($user->getPassword() == $hashedpass) {
				return $user;
			}
			else{ return Error::ERROR_WRONG_PASSWORD;
				header("Location: login.php?err=2");
			}
		} else {
			return Error::ERROR_WRONG_USERNAME;		
			header("Location: login.php?err=3");
		}
	}
	
	//check password
	public function checkUser($userid, $password) {
		if ($user = $this->loadUserByID($userid)) {
			$hashedpass = $password;
			
			if ($user->getPassword() == $hashedpass) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	
	// login out and destroying any session made
	public function logoutUser() {
		$_SESSION = array();
		session_unset();
		session_destroy();
	}
	
	// ----------------- new functions added --------------------
	//check username if already in DB when adding
	public function checkUserExists($username) {
		$where = array();
		$where['username'] = $username;
		$db = new DB();
		$db->connect();
		$result = $db->select("users", $where);

		if ($db->dbgetrowcount() > 0)
			return true;		
		$db->disconnect();		
		return false;
	}
	//check mail if already in DB when adding
	public function checkEmailExists($email) {
		$where = array();
		$where['email'] = $email;
		$db = new DB();
		$db->connect();
		$result = $db->select("users", $where);
		
		if ($db->dbgetrowcount() > 0)
			return true;		
		$db->disconnect();		
		return false;
	}
	public function getUser($userid) {
		$where = array();
		$where['user_ID'] = $userid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("users", $where);
		$db->disconnect();
		
		foreach($result as $row) {
			$user = $this->setUser($row);
			return $user;
		}	
	}

	public function getModule($moduleid) {
		$where = array();
		$where['moduleid'] = $moduleid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("module", $where);
		$db->disconnect();
		
		foreach($result as $row) {
			$module = $this->setModule($row);
			return $module;
		}	
	}
	
	public function getModuleProblem($modid) {
		$where = array();
		$where['module_ID'] = $modid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("module_meta", $where);
		$db->disconnect();	
		return $result[0];
		
	}
	
	public function getProblemAnswer($smid, $metaid) {
		$where = array();
		$where['student_module_ID'] = $smid;
		$where['meta_ID'] = $metaid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("meta_answers", $where, 'answer');
		$db->disconnect();	
		return $result[0]['answer'];
		
	}
	
	public function getProblemAnswer2($smid, $metaid) {
		$where = array();
		$where['student_module_ID'] = $smid;
		$where['meta_ID'] = $metaid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("meta_answers", $where, 'answer');
		$db->disconnect();	
		return $result;
	}
	
	public function addMetaAnswer($smid,$metaid,$answer) {
		$data = array();
		$data['answer'] = $answer;
		$data['student_module_ID'] = $smid;
		$data['meta_ID'] = $metaid;
		
		$db = new DB();
		$db->connect();
		$result = $db->insert("meta_answers", $data);
		$db->disconnect();			
	}
	
	private function setData($user) {
		$data = array();
		$data['password']			= Utils::toHash($user->getPassword());
		$data['username']			= $user->getUsername();
		$data['first_name'] 		= $user->getFirstname();
		$data['last_name'] 			= $user->getLastname();
		$data['user_ID'] 			= $user->getUserid();
		$data['gender']				= $user->getGender();
		$data['type']				= $user->getType();
		return $data;
	}
	
	private function setUser($row) {
		$user = new User();
		$user->setUsername($row['username']);
		$user->setPassword($row['password']);
		$user->setFirstname($row['first_name']);
		$user->setLastname($row['last_name']);
		$user->setUserid($row['user_ID']);
		$user->setGender(strtolower($row['gender']));
		$user->setType($row['type']);
		$user->setTeacher($row['teacher_id']);
		return $user;
	}
	
	private function setStudentAnswerData($student_answer) {
		$data = array();
		$data['student_module_ID']	= $student_answer->getStudentModule_id();
		$data['question_ID']		= $student_answer->getQuestion_id();
		$data['answer'] 		= $student_answer->getStudentAnswer();
		return $data;
	}
	
	private function setStudentAnswer($row) {
		$student_answer = new Module();
		$student_answer->setStudentModule_id($row['student_module_ID']);
		$student_answer->setQuestion_id($row['question_ID']);
		$student_answer->setStudentAnswer($row['answer']);
		return $student_answer;
	}

	private function setModuleData($module) {
		$data = array();
		$data['module_ID']			= $module->getModuleid();
		$data['module_name']		= $module->getModule_name();
		$data['module_desc'] 		= $module->getModule_desc();
		return $data;
	}
	
	private function setModule($row) {
		$module = new Module();
		$module->setModuleid($row['module_ID']);
		$module->setModule_name($row['module_name']);
		$module->setModule_desc($row['module_desc']);
		return $module;
	}
	
	private function setExerciseData($exercise) {
		$data = array();
		$data['exercise_ID']	= $exercise->getExid();
		$data['module_ID']		= $exercise->getModuleid();
		$data['title']			= $exercise->getTitle();
		$data['type'] 			= $exercise->getExtype();
		$data['shortcode']		= $exercise->getShortcode();
		$data['screenshot'] 	= $exercise->getScreenshot();
		return $data;
	}
	
	private function setExercise($row) {
		$exercise = new Exercise();
		$exercise->setExid($row['exercise_ID']);
		$exercise->setModuleid($row['module_ID']);
		$exercise->setTitle($row['title']);
		$exercise->setExtype($row['type']);
		$exercise->setShortcode($row['shortcode']);
		$exercise->setScreenshot($row['screenshot']);
		return $exercise;
	}
	
	private function setQuestionData($question) {
		$data = array();
		$data['question_ID']	= $question->getQid();
		$data['exercise_ID']	= $question->getQexid();
		$data['correct_answer']	= $question->getQanswer();
		$data['title'] 			= $question->getQtitle();
		return $question;
	}
	
	private function setQuestion($row) {
		$question = new Question();
		$question->setQid($row['question_ID']);
		$question->setQexid($row['exercise_ID']);
		$question->setQanswer($row['correct_answer']);
		$question->setQtitle($row['title']);
		return $question;
	}

	public function getQuestionAnswers($qid) {
		$where = array();
		$where['question_ID'] = $qid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_answers", $where);
		$db->disconnect();		
		return $result;	
	}
	
	public function getQuestionAnswersByStudent($qid, $smid) {
		$where = array();
		$where['question_ID'] = $qid;
		$where['student_module_ID'] = $smid;
		
		$db = new DB();
		$db->connect();
		$result = $db->select("student_answers", $where);
		$db->disconnect();		
		return $result;	
	}
	
	public function getExercise($e) {
		$where = array();
		$where['exercise_ID'] = $e;		
		$db = new DB();
		$db->connect();
		$result = $db->select("exercise", $where,'*');
		$db->disconnect();		
		return $result[0];	
	}
	/* For generating accounts */
	public function addUser($user) {
		$data = array();
		$data2 = array();
		$data = $this->setUserValues($user);
		$data2 = $this->setUserValues2($user);
				
		$db = new DB();
		$db->connect();
		$db->insert("users", $data);
		$db->insert("users2", $data2);
		$db->disconnect();
	}
	
	private function setUserValues($values) {
		$salt = sha1(md5($values['password']));
		$password = md5($values['password'].$salt);
	
		$data = array();
		$data['username']		= $values['username'];
		$data['password']		= $password;
		$data['type'] 			= $values['type'];
		$data['first_name'] 	= $values['first_name'];
		$data['gender'] 		= $values['gender'];
		$data['teacher_id'] 	= $values['teacher_id'];
		return $data;
	}
	
	private function setUserValues2($values) {
		$data = array();
		$data['username']		= $values['username'];
		$data['password']		= $values['password'];
		$data['type'] 			= $values['type'];
		$data['first_name'] 	= $values['first_name'];
		$data['gender'] 		= $values['gender'];
		$data['teacher_id'] 	= $values['teacher_id'];
		return $data;
	}
	
}
?>