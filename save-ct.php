<?php
	require_once 'session.php';
	include_once 'libraries/functions.php';
	
	$sdtid 		= $_GET['sdtid'];
	$startdate 	= $_GET['sd'];
	
	$sdtf		= new StudentDtFactory();
	$sdtf->updateDiagnosticTestByID($sdtid, $startdate);
	
	header("Location: ct-results.php");
?>