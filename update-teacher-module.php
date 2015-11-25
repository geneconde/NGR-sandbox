<?php
	require_once 'session.php';
	include_once 'libraries/TeacherModuleFactory.class.php';
	
	$userid 	= $user->getUserid();
	$mid		= $_POST['mid'];
	$checked 	= $_POST['ck'];
	
	$tmf = new TeacherModuleFactory();
	$tmf->updateTeacherModule($userid, $mid, $checked);
?>