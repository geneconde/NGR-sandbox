<?php
	require_once 'session.php';
	require_once 'locale.php';
	include_once 'header.php';
	
	$userid		= $user->getUserid();
	$students 	= $uf->loadUserType(2, $userid);
	$ctr 		= 1;
?>
<div id="container">
	<a class="link" href="teacher.php">&laquo; <?php echo _("Go Back"); ?></a>
	<br><br>
	<table id="students">
		<tr>
			<th class="bold">#</th>
			<th class="bold"><?php echo _("Student Name"); ?></th>
			<th class="bold"><?php echo _("Gender"); ?></th>
			<th class="bold"><?php echo _("Action"); ?></th>
		</tr>
		<?php foreach($students as $student) { ?>
		<tr>
			<td><?php echo $ctr; ?></td>
			<td><?php echo $student['last_name'].", ".$student['first_name']; ?></td>
			<td><?php echo $student['gender']; ?></td>
			<td><a href="edit-account.php?user_id=<?php echo $student['user_ID']; ?>&f=0"><?php echo _("Edit"); ?></td>
		</tr>
		<?php $ctr++; } ?>
	</table>
</div>
<script>
$(document).ready( function () {
	$('#students').dataTable();
 });
</script>