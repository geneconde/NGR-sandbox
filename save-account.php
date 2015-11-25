<?php
	require_once 'session.php';
	include_once 'libraries/UserFactory.class.php';
	
	$userid		= $_GET['user_id'];
	$type		= $_GET['type'];
	
	$uname 		= $_POST['username'];
	$fname		= $_POST['fname'];
	$lname		= $_POST['lname'];
	$gender		= $_POST['gender'];
	
	$uf			= new UserFactory();
	$uf->updateUser($userid, $uname, $fname, $lname, $gender);
	
	if($type == 0) $_SESSION['username'] = $uname;
	
	header("Location: edit-account.php?user_id={$userid}&f=1");
?>