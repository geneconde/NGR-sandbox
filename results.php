<?php 
	require_once 'session.php';	
	require_once 'locale.php';	
	include_once 'header.php';
	
	$smid = $_GET['smid'];
	$sm = $uf->loadStudentModule($smid);
	$m = $uf->loadModule($sm['module_ID']);
	$u = $uf->loadUserByID($sm['user_ID']);
	$qc = $uf->loadExercisesByType($sm['module_ID'],0);
	$qq = $uf->loadExercisesByType($sm['module_ID'],1);
	$totalcorrect = 0;
	$total = 0;
	
	$link = $user->getType();
	if ($link == 0) $link = 'teacher';
	else if ($link == 1) $link = 'parent';
	else if ($link == 2) $link = 'student';
?>
	<div id="container">
	<?php if ($link == 'teacher') { ?>
	<a class="link" href="student-results.php?module_id=<?php echo $sm['module_ID']; ?>">&laquo; <?php echo _("Go Back to Students Results Summary"); ?></a>
	<?php } else { ?>
	<a class="link" href="<?php echo $link.'.php';?>">&laquo; <?php echo _("Go Back to Dashboard"); ?></a>
	<?php } ?>
	<h1><?php echo _("Score Summary"); ?> <a href="http://www.printfriendly.com" style="float: right; color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-grnw20.png" alt="<?php echo _("Print Friendly and PDF"); ?>"/></a></h1>
	<table border="0">
		<tr>
			<td class="bold alignright"><?php echo _("Name"); ?> :&nbsp;&nbsp;&nbsp;</td>
			<td><?php echo $u->getFirstname() . ' ' . $u->getLastname(); ?></td>
		</tr>
		<tr>
			<td class="bold alignright"><?php echo _("Module"); ?> :&nbsp;&nbsp;&nbsp;</td>
			<td><?php echo _($m->getModule_name()); ?></td>
		</tr>
		<tr>
			<td class="bold alignright"><?php echo _("Date Started"); ?> :&nbsp;&nbsp;&nbsp;</td>
			<td><?php echo date('F j, Y H:i:s',strtotime($sm['date_started'])); ?></td>
		</tr>
		<tr>
			<td class="bold alignright"><?php echo _("Date Finished"); ?> :&nbsp;&nbsp;&nbsp;</td>
			<td><?php echo date('F j, Y H:i:s',strtotime($sm['date_finished'])); ?></td>
		</tr>
		<tr>
			<td class="bold"><?php echo _("Score Percentage"); ?> :&nbsp;&nbsp;&nbsp;</td>
			<td><h2 id="score"></h2></td>
		</tr>
	</table>
	<br/>
	<h3><?php echo _("Quick Check Results"); ?></h3>
	<?php foreach ($qc as $exercise) {
		$eq = $uf->loadQuestions($exercise['exercise_ID']);
	?>
	<table border="1" class="result fleft">
		<tr>
			<th colspan="2"><?php echo _($exercise['title']); ?></th>
		</tr>
		<?php foreach ($eq as $question) {
			$total++;
			$answer = $uf->getStudentAnswer($smid,$question['question_ID']);
			$img = 'wrong';
			if ($answer && $answer == $question['correct_answer']) {
				$img = 'correct';
				$totalcorrect++;
			}
		?> 
		<tr>
			<td><?php echo $exercise['shortcode']; ?> - <?php echo $question['title']; ?></td>
			<td><img src="images/<?php echo $img; ?>.png" alt="<?php echo $img; ?>"/></td>
		</tr>
		<?php } ?>
	</table>
	<?php } ?>
	<div class="clear"></div>
	<h3><?php echo _("Quiz Question Results"); ?></h3>
	<?php foreach ($qq as $exercise) {
		$eq = $uf->loadQuestions($exercise['exercise_ID']);
	?>
	<table border="1" class="result fleft">
		<tr>
			<th colspan="2"><?php echo _($exercise['title']); ?></th>
		</tr>
		<?php foreach ($eq as $question) {
			$total++;
			$answer = $uf->getStudentAnswer($smid,$question['question_ID']);
			$img = 'wrong';
			if ($answer && $answer == $question['correct_answer']) {
				$img = 'correct';
				$totalcorrect++;
			}
		?> 
		<tr>
			<td><?php echo $exercise['shortcode']; ?> - <?php echo $question['title']; ?></td>
			<td><img src="images/<?php echo $img; ?>.png" alt="<?php echo $img; ?>"/></td>
		</tr>
		<?php } ?>
	</table>
	<?php } ?>
	<div class="clear"></div>
	<h3><?php echo _("Problem Solving"); ?></h3>
	<?php 
		$problem = $uf->getModuleProblem($sm['module_ID']);
		$answer = $uf->getProblemAnswer($smid,$problem['meta_ID']);
	?>
	<br/>
	<table border="0" class="valigntop">
		<tr>
			<td class="bold"><?php echo _("Problem:"); ?> &nbsp;&nbsp;</td>
			<td><?php echo _($problem['meta_desc']); ?></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td class="bold"><?php echo _("Solution:"); ?> &nbsp;&nbsp;</td>
			<td><?php echo $answer; ?></td>
		</tr>
	</table>
	</div>
	<?php $score = number_format($totalcorrect/$total*100); ?>
	<script>document.getElementById('score').innerHTML = '<?php echo $score;?>%';</script>
	<?php require_once "footer.php"; ?>