<?php
	session_start();
	
	if(!((isset($_SESSION['username'])) || (isset($_SESSION['admin'])))){
		header("Location: index.php");
	}
	
	include_once('../../libraries/UserFactory.class.php'); 
	
	$user = null;
	
	$uf = new UserFactory();
	if(isset($_SESSION['username'])){
		$user = $uf->loadUser($_SESSION['username']);
	}
	
	$name = $user->getFirstname();
	$gender = strtolower($user->getGender());
?>