<?php 
	require_once 'session.php';
	require_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/functions.php';
	
	$userid 	= $user->getUserid();
	$students 	= $uf->loadUserType(2, $userid);
	$moduleid 	= "cumulative";
	
	$dtf 		= new DiagnosticTestFactory();
	$ct_set 	= $dtf->getDiagnosticTest($moduleid, $userid, 3);
	
	if($ct_set) {
		$ctid 		= $ct_set->getDTID();
		$ctqid 		= explode(',',$ct_set->getQid());
	}
	
	$sdt		= new StudentDtFactory();
?>
<a class="link" href="teacher.php">&laquo; <?php echo _("Go Back to Dashboard"); ?></a>
<h1><?php echo _("Students Cumulative Test Results"); ?></h1>

<span class="red upper bold"><?php echo _("Notes:"); ?></span><br/>
<ul class="list_notes">
<li><?php echo _("Click the column header of each Question Item to view the statistics for that question or exercise."); ?></li>
</ul>
<br/>
<?php 
	if(!isset($ct_set)) {
		echo "<h3>"._("You have not set a cumulative test for this module.")."</h3>";
	} else {
		$coltotal = array();
		$totalrow = 0;
		$ctr = 0;
?>
<div class="results ct_results">
	<table id="table_id2">
		<thead>	
			<tr>
				<th class="bold"><?php echo _("Student Name"); ?></th>
				<?php 
					foreach($ctqid as $question) { 
						$coltotal[$ctr] = 0;
						$ctr++;
				?>
					<th><li><a href="dt-stat.php?dtid=<?php echo $ctid; ?>&qid=<?php echo $question; ?>&page=all">Q#<?php echo $ctr; ?><img src="images/appbar.link.png"></a></li></th>
				<?php } ?>
				<th class="bold"><?php echo _("Total %"); ?></th>
			</tr>
		</thead>	
		<tbody>
			<?php
				foreach($students as $student) {
					$stest = $sdt->getSDTbyStudent($student['user_ID'],$ctid);
					if($stest) {
						$sdtid = $stest->getStudentDtID();
						$cttest = $sdt->getStudentAnswer($sdtid);
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
					foreach($ctqid as $question) {
						if(isset($cttest)) {
							foreach($cttest as $ct) {
								if($ct['qid'] == $question) {
									if($ct['mark'] == 1) { 
										$cpt++;
										$coltotal[$ctr]++;
									}
									$totalpt++;
				?>
									<td><?php echo $ct['mark']; ?></td>
				<?php
								}
							}
						} else {
				?>
								<td>0</td>
				<?php
						}
						$ctr++;
					}
				?>
				<td>
				<?php 
					if(isset($cttest)) {
						$totalrow += round(($cpt/$totalpt)*100);
						echo round(($cpt/$totalpt)*100, 0)."%";
					} else echo "0";

					$cttest = null;
				?>
				</td>							
			</tr>
			<?php } ?>
			<tr>
				<td class="bold"><?php echo _("Total"); ?> (<?php echo count($students); ?>)</td>
				<?php foreach ($coltotal as $total) { ?>
				<td class="bold"><?php echo number_format($total/count($students)*100).'%'; ?></td>
				<?php } ?>
				<td class="bold"><?php echo number_format($totalrow/count($students)).'%'; ?></td>
			</tr>
		</tbody>
	</table>
</div>
<?php } ?>

<script>
$(document).ready( function () {
 	var oTable = $('#table_id2').dataTable({
 		"sScrollX": "100%", 		
 		"bScrollCollapse": true,
		"bSort": false,
		 "bPaginate": false,
 	});
	
 	new FixedColumns(oTable,{
 		"iLeftColumns": 1,
		"iLeftWidth": 150,
		"iRightColumns": 1,
		"iRightWidth": 90
 	});
});
</script>
<?php require_once "footer.php"; ?>