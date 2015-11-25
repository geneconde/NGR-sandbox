<?php
	session_start();
	include_once('libraries/UserFactory.class.php');
	$uf = new UserFactory();	
	$uf->logoutUser();
	header("Location: index.php");	
?>
