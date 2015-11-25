<?php
	require_once 'session.php';
	include_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/UserFactory.class.php';
	
	$uf 		= new UserFactory();
	$modules 	= $uf->getAllModules();
?>
<div id="container">
<a class="link" href="teacher.php">&laquo; <?php echo _("Go Back"); ?></a>
<br><br>
<form method="post" id="add-update" action="add-update.php">
	<center>
		<table>
			<?php if(isset($_GET['s']) && $_GET['s'] == 1) { ?>
					<tr>
						<td colspan="2">
							<center><span class='green'><?php echo _("You have successfully added an update."); ?></span></center>
						</td>
					</tr>
			<?php } ?>	
			<tr>
				<td colspan="2"><center><strong><?php echo _("Add Update"); ?></strong></center></td>
			</tr>
			<tr>
				<td>
					<?php echo _("Module:"); ?>
				</td>
				<td>
					<select id="module" name="module">
					<?php foreach($modules as $module): ?>
						<option value="<?php echo $module['module_ID']; ?>"><?php echo $module['module_name']; ?></option>
					<?php endforeach; ?>
						<option>Not in Modules</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo _("Desription:"); ?>
				</td>
				<td>
					<textarea id="description" name="description" row="20" col="40"></textarea>
				</td>
			</tr>
		</table>
		<input type="submit" class="button1" value="Submit Update">
	</center>
</form>
</div>
<script>
// $.validate({
//   form : '#add-update'
// });
</script>
<?php require_once "footer.php"; ?>