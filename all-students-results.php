<?php 
	require_once 'session.php';
	require_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/functions.php';
	
	$moduleid = $_GET['m'];
	$userid = $user->getUserid();
	$students = $uf->loadUserType(2, $userid);
	$qc = $uf->loadExercisesByType($moduleid,0);
	$qq = $uf->loadExercisesByType($moduleid,1);
	
	$dtf 		= new DiagnosticTestFactory();
	$dt_pre 	= $dtf->getDiagnosticTest($moduleid, $userid, 1);
	$dt_post 	= $dtf->getDiagnosticTest($moduleid, $userid, 2);
	
	if($dt_pre) {
		$pretestid 	= $dt_pre->getDTID();
		$qidpre 	= explode(',',$dt_pre->getQid());
	}
	
	if($dt_post) {
		$posttestid = $dt_post->getDTID();
		$qidpost 	= explode(',',$dt_post->getQid());
	}
	
	$sdt		= new StudentDtFactory();
	
	$exercisetotal = count($qc) + count($qq);
	$coltotal = array();
	$totalrowtotal = 0;
	$ctr = 0;
	$modnotanswered = 0;
	$prenotanswered = 0;
	$postnotanswered = 0;
?>
<a class="link" href="student-results.php?module_id=<?php echo $moduleid; ?>">&laquo; <?php echo _("Go Back to Students Results Summary"); ?></a>
<h1><?php echo _("Students Comparative Results"); ?></h1>

<span class="red upper bold"><?php echo _("Notes:"); ?></span><br/>
<ul class="list_notes">
<li><?php echo _("Click the column header of each Question Item to view the statistics for that question or exercise."); ?></li>
</ul>
<br/>
<h3><?php echo _("Results from Module Review"); ?></h3>
<br/>
<div class="results">
	<table id="table_id">
		<thead>
			<tr>		
				<th class="bold"><?php echo _("Student Name"); ?></th>
				<?php 
					foreach($qc as $exercise) {
						$coltotal[$ctr] = 0; 
				?>
						<th class="bold">
							<li>
								<a href="statistics.php?e=<?php echo $exercise['exercise_ID']; ?>&m=<?php echo $moduleid; ?>">
									<?php echo $exercise['shortcode'];?>
									<img src="images/appbar.link.png">
								</a>
							</li>
						</th>
				<?php 
						$ctr++;
					} 
				?>
				<?php 
					foreach ($qq as $exercise) { 
						$coltotal[$ctr] = 0; 
				?>
						<th class="bold">
							<li>
								<a href="statistics.php?e=<?php echo $exercise['exercise_ID']; ?>&m=<?php echo $moduleid; ?>">
									<?php echo $exercise['shortcode']; ?>
									<img src="images/appbar.link.png">
								</a>
							</li>
						</th>
				<?php 
						$ctr++;
					}
				?>
				<th class="bold"><?php echo _("Total %"); ?></th>
			</tr>
		</thead>
		<tbody>
		   <?php foreach($students as $student) {
				$rowtotal = 0;
				$ctr = 0;
				$sm = $uf->loadStudentModuleByUser($student['user_ID'],$moduleid);
				if (!empty($sm)) {
					$smid =  $sm[0]['student_module_ID'];			
				}
				
				$u = $uf->loadUserByID($student['user_ID']);
			?>
			<tr>
				<td class="bold"><?php echo $u->getLastname() . ', ' . $u->getFirstname(); ?></td>
				<?php foreach ($qc as $exercise) {
					$score 		= 1;
					$answered 	= 0;
					if ($sm) {
						$eq = $uf->loadQuestions($exercise['exercise_ID']);

						foreach ($eq as $question) {
							$answer = $uf->getStudentAnswer($smid,$question['question_ID']);

							if($answer){
								$answered = 1;
								if ($answer != $question['correct_answer']){
									$score = 0;
									break;
								}
							}
						}
					} else $score = 0;
					
					if ($score == 1) {
						$rowtotal++;
						$coltotal[$ctr] += $score;
					}
				?>
				<td><?php if($answered){ echo $score; } else{ echo "—"; $modnotanswered++; } ?></td>
				<?php $ctr++; } ?>

				<?php foreach ($qq as $exercise) {
					$score 		= 1;
					$answered 	= 0;
					if ($sm) {
						$eq = $uf->loadQuestions($exercise['exercise_ID']);

						foreach ($eq as $question) {
							$answer = $uf->getStudentAnswer($smid,$question['question_ID']);

							if($answer){
								$answered = 1;
								if ($answer != $question['correct_answer']){
									$score = 0;
									break;
								}
							} else{
								$score = 0;
								break;
							}
						}
					} else $score = 0;
					
					if ($score == 1) {
						$rowtotal++;
						$coltotal[$ctr] ++;
					}
				?>
				<td><?php if($answered){ echo $score; }else{ echo "—"; $modnotanswered++; } ?></td>
				<?php $ctr++; } ?>
				<td class="bold" style="text-align:center"><?php $totalrowtotal += number_format($rowtotal/$exercisetotal*100); echo number_format($rowtotal/$exercisetotal*100).'%'; ?></td>
			</tr>
			<?php } ?>
			<?php
				$countusers = count($students);
				$modanswerees = ceil($countusers-$modnotanswered/$ctr); ?><?php //echo $ctr; echo $notanswered; echo $countusers;
			?>
			<tr>
				<td class="bold"><?php echo _("Total"); ?>: <?php echo $modanswerees; ?></td>
				<?php foreach ($coltotal as $total) { ?>
				<td class="bold"><?php echo number_format($total/$modanswerees*100).'%'; ?></td>
				<?php } ?>
				<td class="bold"><?php echo number_format($totalrowtotal/$modanswerees).'%'; ?></td>
			</tr>
		</tbody>
	</table>
</div>

<?php 
	if(!isset($dt_pre)) {
		echo "<h3>"._("You have not set a pre-test for this module.")."</h3>";
	} else {
		$coltotal = array();
		$totalrow = 0;
		$ctr = 0;
?>
<h3><?php echo _("Results from Diagnostic Test: Pre-Test"); ?></h3><br>
<div class="results">
	
	<table id="table_id2">
		<thead>
			<tr>
				<th class="bold"><?php echo _("Student Name"); ?></th>
				<?php 
					foreach($qidpre as $qpre) { 
						$coltotal[$ctr] = 0;
						$ctr++;
				?>
					<th><li><a href="dt-stat.php?dtid=<?php echo $pretestid; ?>&qid=<?php echo $qpre; ?>&page=comparative">Q#<?php echo $ctr; ?><img src="images/appbar.link.png"></a></li></th>
				<?php } ?>
				<th class="bold"><?php echo _("Total %"); ?></th>
			</tr>
		</thead>	
		<tbody>
			<?php
				foreach($students as $student) {
					$stest = $sdt->getSDTbyStudent($student['user_ID'],$pretestid);
					if($stest) {
						$sdtid = $stest->getStudentDtID();
						$pretest = $sdt->getStudentAnswer($sdtid);
					}
					
					$totalpt = 0;
					$cpt = 0;
			?>
			<tr>
				<td class="bold">
					<?php echo $student['last_name'] . ', ' . $student['first_name']; ?>
				</td>
				<?php
					$ctr = 0;
					foreach($qidpre as $qpre) {
						if(isset($pretest)) {
							foreach($pretest as $pt) {
								if($pt['qid'] == $qpre) {
									if($pt['mark'] == 1) { 
										$cpt++;
										$coltotal[$ctr]++;
									}
									$totalpt++;
				?>
									<td><?php echo $pt['mark']; ?></td>
				<?php
								}
							}
						} else {
				?>
							<td>—</td>
				<?php
							$prenotanswered++;
						}
						$ctr++;
					}
				?>
				<td>
				<?php 
					if(isset($pretest)){
						$totalrow += round(($cpt/$totalpt)*100);
						echo round(($cpt/$totalpt)*100, 0)."%"; 
					} else echo "0";
					
					$pretest = null;
				?>
				</td>							
			</tr>
			<?php } ?>
			<?php
				$countusers = count($students);
				$preanswerees = ceil($countusers-$prenotanswered/$ctr);
			?>
			<tr>
				<td class="bold"><?php echo _("Total"); ?>: <?php echo $preanswerees; ?></td>
				<?php foreach ($coltotal as $total): ?>
				<td class="bold"><?php echo number_format($total/$preanswerees*100).'%'; ?></td>
				<?php endforeach; ?>
				<td class="bold"><?php echo number_format($totalrow/$preanswerees).'%'; ?></td>
			</tr>
		</tbody>
	</table>
</div>
<?php } ?>

<?php 
	if(!isset($dt_post)) {
		echo "<h3>"._("You have not set a post-test for this module.")."</h3>";
	} else {
		$coltotal = array();
		$totalrow = 0;
		$ctr = 0;
?>
<h3><?php echo _("Results from Diagnostic Test: Post-Test"); ?></h3><br>
<div class="results">
	<table id="table_id3">
		<thead>
			<tr>
				<th class="bold"><?php echo _("Student Name"); ?></th>
				<?php 
					foreach($qidpost as $qpost) { 
						$coltotal[$ctr] = 0;
						$ctr++;
				?>
					<th><li><a href="dt-stat.php?dtid=<?php echo $posttestid; ?>&qid=<?php echo $qpost; ?>&page=comparative">Q#<?php echo $ctr; ?><img src="images/appbar.link.png"></a></li></th>
				<?php } ?>
				<th class="bold"><?php echo _("Total %"); ?></th>
			</tr>
		</thead>	
		<tbody>
			<?php
				foreach($students as $student) {
					$stest = $sdt->getSDTbyStudent($student['user_ID'],$posttestid);
					if($stest) {
						$sdtid = $stest->getStudentDtID();
						$posttest = $sdt->getStudentAnswer($sdtid);
					}
					
					$totalpt = 0;
					$cpt = 0;
			?>
			<tr>
				<td class="bold">
					<?php echo $student['last_name'] . ', ' . $student['first_name']; ?>
				</td>
				<?php
					$ctr = 0;
					foreach($qidpost as $qpost) {
						if(isset($posttest)) {
							foreach($posttest as $pt) {
								if($pt['qid'] == $qpost) {
									if($pt['mark'] == 1) { 
										$cpt++;
										$coltotal[$ctr]++;
									}
									$totalpt++;
				?>
									<td><?php echo $pt['mark']; ?></td>
				<?php
								}
							}
						} else {
				?>
							<td>—</td>
				<?php						
						$postnotanswered++;
						}
						$ctr++;
					}
				?>
				<td>
				<?php 
					if(isset($posttest)){
						$totalrow += round(($cpt/$totalpt)*100);
						echo round(($cpt/$totalpt)*100, 0)."%"; 
					} else echo "0";
					
					$posttest = null;
				?>
				</td>							
			</tr>
			<?php } ?>
			<?php
				$countusers = count($students);
				$postanswerees = ceil($countusers-$postnotanswered/$ctr);
			?>
			<tr>
				<td class="bold"><?php echo _("Total"); ?>: <?php echo $postanswerees; ?></td>
				<?php foreach ($coltotal as $total) { ?>
				<td class="bold"><?php echo number_format($total/$postanswerees*100).'%'; ?></td>
				<?php } ?>
				<td class="bold"><?php echo number_format($totalrow/$postanswerees).'%'; ?></td>
			</tr>
		</tbody>
	</table>
</div>
<?php } ?>
<script>
window.onresize = function() {
	$('#table_id').dataTable().fnAdjustColumnSizing();
    $('#table_id2').dataTable().fnAdjustColumnSizing();
	$('#table_id3').dataTable().fnAdjustColumnSizing();
}

$(document).ready( function () {
	var oTable = $('#table_id').dataTable( {
 		"sScrollX": "100%", 
		"sScrollXInner": "120%", 
		"sScrollY": "250px",
		"responsive" : true,
		"bSort": false,
		"bPaginate": false,	
 		"bScrollCollapse": true
 	} );
 	new FixedColumns( oTable, {
 		"iLeftColumns": 1,
		"iLeftWidth": 150,
		"iRightColumns": 1,
		"iRightWidth": 90
 	} );
	
 	var oTable = $('#table_id2').dataTable( {
 		"sScrollX": "100%", 
		"sScrollY": "250px",
		"sScrollXInner": "120%",
		"responsive" : true,		
		"bSort": false,
		"bPaginate": false,	
 		"bScrollCollapse": true
 	} );
 	new FixedColumns( oTable, {
 		"iLeftColumns": 1,
		"iLeftWidth": 150,
		"iRightColumns": 1,
		"iRightWidth": 90
 	} );
	
	var oTable = $('#table_id3').dataTable( {
 		"sScrollX": "100%", 
		"sScrollY": "250px",
		"sScrollXInner": "120%",
		"responsive" : true,		
		"bSort": false,
		 "bPaginate": false,
 		"bScrollCollapse": true
 	} );
 	new FixedColumns( oTable, {
 		"iLeftColumns": 1,
		"iLeftWidth": 150,
		"iRightColumns": 1,
		"iRightWidth": 90
 	} );
 } );
</script>
<?php require_once "footer.php"; ?>