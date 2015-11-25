<?php
	session_start();
	include_once('libraries/UserFactory.class.php'); 
	$uf = new UserFactory();

	if (isset($_POST['username'])) {
		$password = $_POST['password'];
		$salt = sha1(md5($password));
		$password = md5($password.$salt);
		$retObj = $uf->loginUser($_POST['username'],$password);
		if ((is_object($retObj)) && ($retObj instanceof User)) {		
			if($retObj->getType() == '0' || $retObj->getType() == '4') {
				$_SESSION['username'] = $_POST['username'];
				header("Location: teacher.php"); exit;	
			} elseif($retObj->getType() == '1'){
				$_SESSION['username'] = $_POST['username'];	  
				header("Location:parent/parent.php");exit;
			} else {
				$_SESSION['username'] = $_POST['username'];	  
				header("Location:student.php");exit;
			}
		} 
		else{
			header("Location: index.php?err=$retObj");exit;
		}
	}
?>