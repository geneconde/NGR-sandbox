<?php
require_once("session.php");

$userid		= $user->getUserid();
$moduleid 	= $_GET['m'];
$sm 		= $uf->loadStudentModuleByUser($userid, $moduleid);

if($sm) $smid = $sm[0]['student_module_ID'];
else $smid = $uf->addStudentModule($userid, $moduleid);

$_SESSION['smid']= $smid;

$location = "modules/".$moduleid."/1.php";

header("Location: ".$location);
?>