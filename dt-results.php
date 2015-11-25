<?php 
	require_once 'session.php';
	require_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/functions.php';
   
	$teacherid 		= $user->getTeacher();
	$userid 		= $user->getUserid();
	$mid 			= $_GET['module_id'];
	$studentid 		= $_GET['user_id'];
	$mode 			= ($_GET['mode'] == 'pre' ? 1 : 2 );
	$m 				= $uf->loadModule($mid);
	$u 				= $uf->loadUserByID($studentid);
	
	if($teacherid == 0) {
		$qid			= getQuestionIDs($mid, $userid, $mode);
		$test_id		= getTestID($mid, $userid, $mode);
	} else {
		$qid			= getQuestionIDs($mid, $teacherid, $mode);
		$test_id		= getTestID($mid, $teacherid, $mode);
	}
	
	$dtq 			= new dtQuestionFactory();
	$question_set 	= $dtq->getDTPool($mid);

	$sdt			= new StudentDtFactory();
	$student_test 	= $sdt->getStudentDt($studentid, $mid, $mode);
	$sdtid 			= $student_test->getStudentDtID();
	$answers		= getStudentAnswers($sdtid);
	$letters 		= range('A','Z');
?>
<div id="container">
<?php if ($user->getType() == 0 ) { ?>
<a class="link" href="student-results.php?module_id=<?php echo $mid; ?>">&laquo; <?php echo _("Go Back to Students Results Summary"); ?></a>
<?php } else if ($user->getType() == 2 ) { ?>
<a class="link" href="student.php">&laquo; <?php echo _("Go Back to Dashboard"); ?></a>
<?php } ?>
<?php if ($mode == 1) { ?>
<h1><?php echo _("Student Pre-test"); ?> <a href="http://www.printfriendly.com" style="float: right; color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-grnw20.png" alt="Print Friendly and PDF"/></a></h1>
<?php } else { ?>
<h1><?php echo _("Student Post-test"); ?> <a href="http://www.printfriendly.com" style="float: right; color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-grnw20.png" alt="Print Friendly and PDF"/></a></h1>
<?php } ?>

<table border="0">
	<tr>
		<td class="bold alignright"><?php echo _("Name"); ?> :&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $u->getFirstname() . ' ' . $u->getLastname(); ?></td>
	</tr>
	<tr>
		<td class="bold alignright"><?php echo _("Module"); ?> :&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo $m->getModule_name(); ?></td>
	</tr>
	<tr>
		<td class="bold"><?php echo _("Score Percentage"); ?> :&nbsp;&nbsp;&nbsp;</td>
		<td><h2 id="score">75%</h2></td>
	</tr>
</table>
<table border="0" class="result morepad">
	<?php
		$ctr = 0;
		foreach($question_set as $row) { 
				if(in_array($row['qid'], $qid)) {
					$choices = explode(":", $row['choices']);
					$order = $row['answer_order'];
					
					for($x = 0; $x < count($choices); $x++) {
						if($answers[$ctr] == $letters[$x]) $i = $x;
					}
	?>
	<tr class="trline">
		<td><img class="img-answer" /><?php echo _($row['question']); ?><br/><br/>
		<?php echo _("Correct Answer"); ?>: <span class="c-answer"><?php echo $row['answer']; ?></span>. <?php echo _($choices[$order]); ?><br/>
		<?php echo _("Student Answer"); ?>: <span class="s-answer"><?php echo $answers[$ctr]; ?></span>. <?php echo _($choices[$i]); ?>
		</td>
	</tr>
	<?php
				$ctr++;
			}
		}
	?>
</table>
<div class="clear"></div>
</div>
<script>
var totalquestions = 0,
	correct = 0;
$(document).ready(function() {
	$('.trline').each(function(){
		totalquestions++;
	
		var cAnswer = $(this).find('.c-answer').html();
		var sAnswer = $(this).find('.s-answer').html();
		
		console.log(cAnswer + " : " + sAnswer);
		
		if(cAnswer == sAnswer) {
			$(this).find('img').attr('src','images/correct.png');
			correct++;
		} else {
			$(this).find('img').attr('src','images/wrong.png');
		}
	});
	
	$('#score').text(Math.round(((correct/totalquestions)*100)) + "%");
});
</script>
<?php require_once "footer.php"; ?>