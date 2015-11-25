<?php
	require_once 'session.php';
	include_once 'libraries/functions.php';
	
	$userid 	= $user->getUserid();
	$moduleid	= $_GET['moduleid'];
	$mode		= $_GET['mode'];
	$md			= ($mode == 1 ? "pre" : "post" );
	
	$sdtf		= new StudentDtFactory();
	$sdtf->updateDiagnosticTest($userid, $moduleid, $mode);
	
	header("Location: dt-results.php?module_id=".$moduleid."&mode=".$md."&user_id=".$userid);
?>