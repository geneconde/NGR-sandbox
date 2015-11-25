<?php 
	require_once 'session.php';
	require_once 'locale.php';
	include_once 'header.php';
	
	$userid = $user->getUserid();
	$moduleid = $_GET['m'];
	$e = $_GET['e'];
	
	$students = $uf->loadUserType(2, $userid);
	$smid = [];
	
	foreach($students as $student) {
		$student_module = [];
		$student_module = $uf->loadStudentModuleByUser($student['user_ID'], $moduleid);
		if($student_module) array_push($smid, $student_module[0]['student_module_ID']);
	}
	
	$exercise = $uf->getExercise($e);
	$eq = $uf->loadQuestions($e);
?>
<div id="container">
<a class="link" href="all-students-results.php?m=<?php echo $moduleid; ?>">&laquo <?php echo _("Go Back"); ?></a>
<h1><?php echo _("Exercise Statistics"); ?> <a href="http://www.printfriendly.com" style="float: right; color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-grnw20.png" alt="Print Friendly and PDF"/></a></h1>
<h3><?php echo _($exercise['title']); ?> <?php echo _("Screenshot"); ?></h3>
<?php echo _("The image below is an actual screenshot of the exercise in the review. It shows the question items and the correct answers."); ?><br/><br/>
<center><img src="<?php echo $exercise['screenshot'];?>" width="80%"></center>
<br/>
<?php foreach ($eq as $question) { ?>
<h3><?php echo _($exercise['title']); ?> - <?php echo _($question['title']); ?></h3>
<?php echo _("Correct Answer"); ?>: <span class="green bold upper"><?php echo _($question['correct_answer']); ?> </span><br/>
<div id="<?php echo 'q1_'.$question['title']; ?>" class="pchart"></div>
<div id="<?php echo 'q2_'.$question['title']; ?>" class="pchart"></div>
<div class="clear"></div>
<?php } ?>
</div>
<script>
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawPie);	  
	function drawPie(){
		var data, options,chart;
		<?php foreach ($eq as $question) {
			if($question['correct_answer']) {
				$correct = _($question['correct_answer']);
			} else {
				$correct = "None";
			}
			
			$values = [];
			
			foreach($smid as $sm) {
				$answers = $uf->getQuestionAnswersByStudent($question['question_ID'], $sm);
				array_push($values, _($answers[0]['answer']));
			}
			
			$c = 0;
			$w = 0;
			
			foreach ($values as $v) {
				if ($v == $correct) $c++;
				else $w++;
			}
			
			$arr = array(array('Tst','t'),array(_('Correct'), $c),array(_('Wrong'), $w));
			$cwpie = json_encode($arr);
		?>
		data = google.visualization.arrayToDataTable(<?php echo $cwpie; ?>);
		options = { is3D: true, colors: ['green', 'red'], title: '<?php echo _("Correct and Wrong Statistics"); ?>' }
		chart = new google.visualization.PieChart(document.getElementById('<?php echo 'q1_'.$question['title']; ?>'));
		chart.draw(data, options);	
		<?php 
			$uniques = array_count_values($values);
			$arr = array(array('',''));
			foreach ($uniques as $key => $value) {
				$temparr = array("$key",$value);
				array_push($arr,$temparr);
			}
			$cwpie = json_encode($arr);
		
		?>
		data = google.visualization.arrayToDataTable(<?php echo $cwpie; ?>);
		options = { is3D: true, title: '<?php echo _("Student Answers Statistics"); ?>' }
		chart = new google.visualization.PieChart(document.getElementById('<?php echo 'q2_'.$question['title']; ?>'));
		chart.draw(data, options);	
		<?php } ?>
  }
</script>
<?php require_once "footer.php"; ?>