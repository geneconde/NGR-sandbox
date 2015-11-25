<?php
require_once("session.php");

$smid = $_SESSION['smid'];
$moduleid = $_POST['moduleid'];
$answer = $_POST['answer'];

$problem = $uf->getModuleProblem($moduleid);

$uf->addMetaAnswer($smid,$problem['meta_ID'],$answer);
?>