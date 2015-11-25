<?php
	require_once 'session.php';
	include_once 'libraries/TeacherModuleFactory.class.php';
	include_once 'libraries/DiagnosticTestFactory.class.php';
	
	$userid 	= $user->getUserid();
	$mid		= $_POST['mid'];
	$set		= $_POST['set'];
	$value		= $_POST['val'];
	
	$dtf 		= new DiagnosticTestFactory();
	$tmf		= new TeacherModuleFactory();

	if($set == 'pre') $dtf->updateDTActivation($userid, $mid, 1, $value);
	else if($set == 'post') $dtf->updateDTActivation($userid, $mid, 2, $value);
	else if($set == 'module') $tmf->updateTeacherModule($userid, $mid, $value);
?>