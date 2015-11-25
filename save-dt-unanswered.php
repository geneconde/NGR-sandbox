<?php
	require_once 'session.php';
	include_once 'libraries/functions.php';
	
	$studentdtid	= $_POST['sdtid'];
	$startdate		= $_POST['startdate'];
	$ua				= rtrim($_POST['uqid'], "-");
	$unanswered		= explode('-', $ua);
	
	$sdtf 			= new StudentDtFactory();
	
	for($i = 0; $i < count($unanswered); $i++) {
		$sdtavalues = array(
			"sdtid" 	=> $studentdtid,
			"qid"		=> $unanswered[$i],
			"answer"	=> "None",
			"mark"		=> 0,
		);
		$sdtf->addStudentAnswer($sdtavalues);
	}
	
	$sdtf->updateDiagnosticTestByID($studentdtid, $startdate);
?>