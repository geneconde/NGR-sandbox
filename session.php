<?php
	session_start();
	
	if(!((isset($_SESSION['username'])) || (isset($_SESSION['admin'])))){
		header("Location: index.php");
	}
	
	include_once('libraries/UserFactory.class.php'); 
	
	$user = null;
	
	$uf = new UserFactory();
	if(isset($_SESSION['username'])){
		$user = $uf->loadUser($_SESSION['username']);
	}
	
	$name = $user->getFirstname();
	
	/*
	if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
		// last request was more than 30 minutes ago
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
		header("Location: index.php");
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
	
	if (!isset($_SESSION['CREATED'])) {
		$_SESSION['CREATED'] = time();
	} else if (time() - $_SESSION['CREATED'] > 1800) {
		// session started more than 30 minutes ago
		session_regenerate_id(true);    // change session ID for the current session an invalidate old session ID
		$_SESSION['CREATED'] = time();  // update creation time
	}
	*/
?>