<?php
	include 'controller/DiagnosticTest.Controller.php';
	
	$userid 	= $_POST['userid'];
	$qid		= $_POST['qid'];
	$active		= $_POST['isactive'];
	$timelimit 	= $_POST['tlimit'];
	$found		= $_POST['fd'];
	
	$dtc = new DiagnosticTestController();
	
	if($found == 1) {
		$dtc->updateDiagnosticTest("cumulative", $userid, 3, $qid, $isactive, $timelimit);
	} else {
		$values = array(
			"user_id" 	=> $userid,
			"qid"		=> $qid,
			"isactive"	=> $_POST['isactive'],
			"timelimit"	=> $_POST['tlimit']
		);

		$dtc->addCumulativeTest($values);
	}
?>