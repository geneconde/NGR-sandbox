<?php
	require_once 'session.php';
	include_once 'libraries/functions.php';
	
	$studentdtid	= $_POST['sdtid'];
	$qid			= $_POST['qid'];
	$answer			= $_POST['answer'];
	
	$sdtf 			= new StudentDtFactory();
	$sanswer		= $sdtf->getTargetAnswer($studentdtid, $qid);
	
	$dtf			= new DtQuestionFactory();
	$question		= $dtf->getTargetQuestion($qid);
	
	$mark 			= ($question[0]['answer'] == $answer ? 1 : 0 );
	
	if($sanswer) {
		$sdtf->updateAnswer($studentdtid, $qid, $answer, $mark);
	} else {
		$sdtavalues = array(
			"sdtid" 	=> $studentdtid,
			"qid"		=> $qid,
			"answer"	=> $answer,
			"mark"		=> $mark,
		);
		$sdtf->addStudentAnswer($sdtavalues);
	}
?>