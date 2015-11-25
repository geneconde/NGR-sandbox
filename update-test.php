<?php
	include('libraries/db.inc.php');
	include('libraries/DiagnosticTestFactory.class.php');
	
	$action		= $_POST['act'];
	$mid 		= $_POST['mid'];
	$userid 	= $_POST['userid'];
	$mode		= $_POST['mode'];
	$qid 		= $_POST['qid'];
	$isactive 	= $_POST['isactive'];
	$timelimit	= $_POST['tlimit'];
	
	$dtf = new DiagnosticTestFactory();
	
	if($action == "new") {
		$values = array(
			"module_id" => $mid,
			"user_id"	=> $userid,
			"mode"		=> $mode,
			"qid"		=> $qid,
			"isactive"	=> $isactive,
			"timelimit"	=> $timelimit
		);
		$dtf->addDiagnosticTest($values);
	} else {
		$dtf->updateDiagnosticTest($mid, $userid, $mode, $qid, $isactive, $timelimit);
	}
	
?>