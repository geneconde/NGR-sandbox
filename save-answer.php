<?php
require_once("session.php");

$smid = $_SESSION['smid'];
$question = $_POST['question'];
$answer = $_POST['answer'];

$exists = $uf->getStudentAnswer($smid,$question);
if ($exists == 0)
	$uf->addStudentAnswer($smid, $question, $answer);

?>