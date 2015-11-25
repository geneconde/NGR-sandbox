<?php 
	require_once 'session.php';
	require_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/DiagnosticTestFactory.class.php';
	include_once 'libraries/StudentDtFactory.class.php';
	
	$userid		= $user->getUserid();
	$mid 		= $_GET['module_id'];
	$students 	= $uf->loadUserType(2, $userid);
	
	$dtf 		= new DiagnosticTestFactory();
	$sdf		= new StudentDtFactory();
?>
	<div id="container">
	<a class="link" href="teacher.php">&laquo <?php echo _("Go Back to Dashboard"); ?></a>
	<h1><?php echo _("Students Results Summary"); ?></h1>	
	<center>
	<table border="1" class="result morepad">
		<tr>
			<td class="bold"><?php echo _("Student Name"); ?></td>
			<td class="bold"><?php echo _("Results"); ?></td>
			<td class="bold"><?php echo _("Diagnostic Test"); ?></td>
		</tr>
		<?php foreach ($students as $student) {
			$finished = 1;
			$continueid = null;
			$studentmodules = $uf->loadAllStudentModule($student['user_ID'],$mid);
		?>
		<tr>
			<td><?php echo $student['last_name'] . ', ' .$student['first_name'] ; ?></td>
			<td>
				<?php if ($studentmodules) {
					foreach($studentmodules as $sm){
						if ($sm['date_finished'] == '0000-00-00 00:00:00' && $sm['module_ID'] == $mid) {
							$finished = 0;
							$continueid = $sm['student_module_ID'];
						}
						
						if ($finished == 1 && $sm['module_ID'] == $mid) {
				?>
						<a class="button1" href="results.php?smid=<?php echo $sm['student_module_ID']; ?>"><?php echo _("Review Results"); ?></a>
				<?php 	
					} else if ($finished == 0 && $sm['module_ID'] == $mid) { 
				?>
						<span class="button2"><?php echo _("In Progress"); ?></span>
				<?php 		} 
						}
					} 
				?>
			</td>
			<td>
				<!-- check pre -->
				<?php 
					$pre = $dtf->getActiveDiagnosticTest($mid, $userid, 1);
					if($pre) $sdt = $sdf->getSDTbyStudent($student['user_ID'], $pre->getDTID());
					
					if(isset($sdt)) {
				?>
					<a class="button1" href="dt-results.php?module_id=<?php echo $mid; ?>&mode=pre&user_id=<?php echo $student['user_ID']; ?>"><?php echo _("Pre-Test"); ?></a>
				<?php } else { ?>
					<a class="button1 disabled" href="#"><?php echo _("Pre-Test"); ?></a>
				<?php } ?>
				<!-- end check pre -->
				<!-- check post -->
				<?php 
					$post = $dtf->getActiveDiagnosticTest($mid, $userid, 2);
					if($post) $sdt2 = $sdf->getSDTbyStudent($student['user_ID'], $post->getDTID());
					
					if(isset($sdt2)) {
				?>
					<a class="button1" href="dt-results.php?module_id=<?php echo $mid; ?>&mode=post&user_id=<?php echo $student['user_ID']; ?>"><?php echo _("Post-Test"); ?></a>
				<?php } else { ?>
					<a class="button1 disabled" href="#"><?php echo _("Post-Test"); ?></a>
				<?php } ?>
			</td>
		</tr>
		<?php } ?>
	</table>
	</center>
	<div class="clear"></div>
	<br/>
	<div class="center"><a class="take-box" href="all-students-results.php?m=<?php echo $mid; ?>"><?php echo _("See how all your students did"); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="take-box" href="student-solutions.php?m=<?php echo $mid; ?>"><?php echo _("Print Student Solutions"); ?></a></div>
	</div>
	<script>
	$(document).ready(function() {
		$('.disabled').click(function(e) {
			e.preventDefault();
		});
	});
	</script>
	<?php require_once "footer.php"; ?>