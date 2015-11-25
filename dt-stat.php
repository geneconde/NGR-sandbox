<?php 
	require_once 'session.php';	
	require_once 'locale.php';	
	include_once 'header.php';
	include_once 'libraries/DtQuestionFactory.class.php';
	include_once 'libraries/DiagnosticTestFactory.class.php';
	include_once 'libraries/StudentDtFactory.class.php';
	
	$dtid 		= $_GET['dtid'];
	$qid		= $_GET['qid'];
	
	$dqf		= new DtQuestionFactory();
	$question	= $dqf->getTargetQuestion($qid);
	$answer		= $question[0]['answer'];
	
	$dtf		= new DiagnosticTestFactory();
	$dt_set		= $dtf->getDiagnosticTestByID($dtid);
	
	$sdt		= new StudentDtFactory();
	$test_set	= $sdt->getTestByDTID($dtid);

	$a = 0;
	$b = 0;
	$c = 0;
	$d = 0;
	
	$correct = 0;
	$wrong = 0;
	
	foreach($test_set as $ts) {
		$sanswer = $sdt->getStudentAnswerByQuestion($ts['student_dt_id'], $qid);
		if		($sanswer[0]['answer'] == "A") $a++;
		else if	($sanswer[0]['answer'] == "B") $b++;
		else if	($sanswer[0]['answer'] == "C") $c++;
		else if	($sanswer[0]['answer'] == "D") $d++;
		
		if($sanswer[0]['answer'] == $answer) $correct++;
		else $wrong++;
	}
	
	$mode		= $dt_set->getMode();
	$mid		= $dt_set->getModuleid();
	$letters = range('A','Z');
	$letters2 = range('a','z');
?>
<div id="container">
<?php if($_GET['page']=="comparative") { ?>
<a class="link" href="all-students-results.php?m=<?php echo $mid; ?>">&laquo; <?php echo _("Go Back to Students Comparative Results"); ?></a>
<?php } else if($_GET['page']=="all") { ?>
<a class="link" href="all-students-ct-results.php">&laquo; <?php echo _("Go Back to Students Cumulative Results"); ?></a>
<?php } ?>
<h1><?php echo _("Diagnostic Question Item Statistics"); ?>
<a href="http://www.printfriendly.com" style="float: right; color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF">
<img style="border:none;-webkit-box-shadow:none;box-shadow:none;" src="http://cdn.printfriendly.com/button-print-grnw20.png" alt="Print Friendly and PDF"/></a></h1>
<h3><?php echo _("Question Item Information"); ?></h3>
<br/>
<table border="0" class="result morepad">
	<tr>
		<td class="bold"><?php echo _("Diagnost Test Title"); ?></td>
		<td>
			<?php
				if($mode == 1) echo _("Pre-Diagnostic Test");
				else if($mode == 2) echo _("Post-Diagnostic Test");
				else if($mode == 3) echo _("Cumulative Test");
			?>
		</td>
	</tr>
	<tr>
		<td class="bold"><?php echo _("Question"); ?></td>
		<td>
			<?php 
				echo _($question[0]['question']);
				$choices = explode(":", $question[0]['choices']);
			?>
		</td>
	</tr>
	<tr>
		<td class="bold vtop"><?php echo _("Choices"); ?></td>
		<td>
			<?php
				for($i = 0; $i < count($choices); $i++) {
					echo $letters[$i].". "._($choices[$i])."<br/>";
				} 
			?>
		</td>
	</tr>
	<tr>
		<td class="bold"><?php echo _("Answer"); ?></td>
		<td><?php echo $answer; ?></td>
	</tr>
</table>
<!--
<h3>Correct and Wrong Answer Statistics</h3>
<br/>
<p>The following pie chart shows how many students got this question correct and how many students got it wrong.</p>
<div id="piechart2" style="width: 100%; height: 350px;"></div>
-->
<h3><?php echo _("Student Answer Statistics"); ?></h3>
<br/>
<p><?php echo _("The following pie chart shows the students' answers for this question and how many answered each question item's choices."); ?></p>
<div id="piechart1" style="width: 100%; height: 350px;"></div>
<br>
<div id="piechart2" style="width: 100%; height: 350px;"></div>
<br/>
</div>
<?php
$arr = array(
			array('','')
	   );
	   
for($i = 0; $i < count($choices); $i++) {
	$ch = array($letters[$i].". "._($choices[$i]), ${$letters2[$i]});
	array_push($arr, $ch);
}


// $arr = array(
			// array('',''),
			// array('A. '._($choices[0]), $a),
			// array('B. '._($choices[1]), $b),
			// array('C. '._($choices[2]), $c),
			// array('D. '._($choices[3]), $d)
	   // );
	   
$piedata1 = json_encode($arr);

$arr = array(
		array('',''),
		array(_('Correct'), $correct),
		array(_('Wrong'), $wrong)
		);
$piedata2 = json_encode($arr);
?>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data1 = google.visualization.arrayToDataTable(<?php echo $piedata1; ?>);
		var data2 = google.visualization.arrayToDataTable(<?php echo $piedata2; ?>);
        var options1 = { is3D: true };
		var options2 = { is3D: true, colors: ['green', 'firebrick'] }
        var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
		var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
		
        chart1.draw(data1, options1);
		chart2.draw(data2, options2);
      }
</script>
<?php require_once "footer.php"; ?>