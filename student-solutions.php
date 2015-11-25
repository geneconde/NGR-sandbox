<?php require_once('session.php'); ?>
<?php require_once('libraries/fpdf.php'); ?>
<?php require_once('libraries/pdfmc.class.php'); ?>
<?php

	$mid = $_GET['m'];
	$m = $uf->loadModule($mid);
	$students = $uf->loadUserType(2);
	$problem = $uf->getModuleProblem($mid);

	$pdf = new FPDF();
	$pdf->SetAutoPageBreak(true);
	$pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
	$pdf->MultiCell(0,5,'REVIEW: '.$m->getModule_name());
	$pdf->Ln();
	$pdf->MultiCell(0,5,'PROBLEM: '.$problem['meta_desc']);
	$pdf->Ln();
	$pdf->MultiCell(0,5,'STUDENT ANSWERS');
	$pdf->Ln();
		
	foreach ($students as $student) {
		$ctr = 0;
		$studentmodules = $uf->loadAllStudentModule($student['user_ID'],$mid);
		
		$pdf->SetFont('Arial','B',12);
		$pdf->MultiCell(0,5,$student['first_name'] . ' ' .$student['last_name'].': ');
		if ($studentmodules) {
			$sm = $studentmodules[0];
			$lastscreen = $sm['last_screen'];
			if ($lastscreen == 0) {
				$pdf->SetFont('Arial','',12);
				$answer = $uf->getProblemAnswer($sm['student_module_ID'],$problem['meta_ID']);
				$pdf->MultiCell(0,5,$answer);
				$pdf->Ln();
			}
		}
	}
	$pdf->Output($m->getModule_name().'- Student Solutions.pdf','I');
?>