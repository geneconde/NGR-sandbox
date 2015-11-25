<?php
	require_once 'session.php';
	require_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/DiagnosticTestFactory.class.php';
	include_once 'libraries/TeacherModuleFactory.class.php';
	include_once 'libraries/UpdateFactory.class.php';
	
	if(isset($_GET['limit'])) $limit = $_GET['limit'];
	else $limit = 3;

	if(isset($_GET['mid'])) $mid_update = $_GET['mid'];

	$userid 			= $user->getUserid();
	$dtf 				= new DiagnosticTestFactory();
	$ct  				= $dtf->getCumulativeTest($userid);
	$diagnostic_test  	= $dtf->getAllTeacherTests($userid);
	
	$tmf = new TeacherModuleFactory();
	$tm_set = $tmf->getTeacherModule($userid);
	$setmodules = [];

	$udf 				= new UpdateFactory();

	if(isset($mid_update)) $updates = $udf->getModuleUpdates($limit, $mid_update);
	else $updates = $udf->getAllUpdates($limit);

	$modules = $uf->getAllModules();

	$teachermodules = array();
?>
<div class="fleft" id="language">
	<?php echo _("Language"); ?>:
	<select id="language-menu">
		<option value="en_US" <?php if($language == "en_US") { ?> selected <?php } ?>>English</option>
		<option value="ar_EG" <?php if($language == "ar_EG") { ?> selected <?php } ?>>Arabic</option>
		<option value="es_ES" <?php if($language == "es_ES") { ?> selected <?php } ?>>Spanish</option>
		<option value="zh_CN" <?php if($language == "zh_CN") { ?> selected <?php } ?>>Chinese</option>
	</select>
</div>
<div class="fright m-top10" id="accounts">
	<a class="link fright" href="edit-account.php?user_id=<?php echo $userid; ?>&f=0"><?php echo _("My Account"); ?></a><p class="fright margin-sides">|</p>
	<a class="link fright" href="student-accounts.php"><?php echo _("Manage Student Accounts"); ?></a><br><br>
	<?php if($user->getType() == 4): ?>
		<a class="link fright" href="update-log.php">Add Update</a>
	<?php endif; ?>
</div>
<div class="clear"></div>
<!-- <div id="dash"></div>
<br>
	<center>
	<div id="updates">
		<h2>Updates</h2>
		<table class="result morepad" border="1">
			<tr>
				<th>Module</th>
				<th>Date Updated</th>
				<th>Description</th>
			</tr>
			<?php /* foreach($updates as $update): ?>
			<tr>
				<td>
					<a href="teacher.php?mid=<?php echo $update['module_id']; ?>">
						<?php 
							foreach($modules as $module):
								if($module['module_ID'] == $update['module_id']):
									echo $module['module_name']; 
								endif;
							endforeach;
						?>
					</a>
				</td>
				<td><?php echo $update['date_updated']; ?></td>
				<td><?php echo $update['description']; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<a href="teacher.php?limit=<?php echo $limit+3; ?><?php if(isset($mid_update)) echo "&mid=".$mid_update; */ ?>">View More</a>
	</div>
	</center>
<br>
<div id="dash"></div> -->
<h1><?php echo _("Welcome"); ?>, <span class="upper bold"><?php echo $user->getFirstname(); ?></span>!</h1>
<p><?php echo _("This is your Dashboard. In this page, you can preview the modules available for your students and view the students' results."); ?></p></br>
<?php 
	foreach($modules as $module) {
		foreach($tm_set as $sm) {
			if($module['module_ID'] == $sm['module_id'] && $sm['isactive'] == 1) {
				array_push($teachermodules, $module['module_ID']);
?>

<div class="module-box active-module teacher-mb">
	<div class="fright m-active">
		<p><?php echo _("Active"); ?></p>
	</div>
	<h2><?php echo _($module['module_name']); ?></h2>
	<br/>
	<div class="module-menu">
		<a class="take-box" href="demo/<?php echo $module['module_ID']; ?>/1.php"><?php echo _("DEMO"); ?></a>
		<a class="take-box" href="settings.php?module_id=<?php echo $module['module_ID']; ?>"><?php echo _("SETTINGS"); ?></a>
		<a class="take-box" href="student-results.php?module_id=<?php echo $module['module_ID']; ?>"><?php echo _("RESULTS"); ?></a>
	</div>
	<br>
	<div class="dt-text">
<?php
				foreach($diagnostic_test as $dt) {
					if($module['module_ID'] == $dt['module_id']) {
						if($dt['mode'] == 1 && $dt['isactive'] == 1) {
?>
							<p class="pre-dt"><?php echo _("A pre-diagnostic test is active for this module."); ?></p>
<?php
						} else if($dt['mode'] == 2 && $dt['isactive'] == 1) {
?>
							<p class="post-dt"><?php echo _("A post-diagnostic test is active for this module."); ?></p>
<?php
						}
					}
				}
?>
	</div>
</div>
<?php 
			}
		}
	}
?>

<?php 
	foreach($modules as $module) {
		foreach($tm_set as $sm) {
			if($module['module_ID'] == $sm['module_id'] && $sm['isactive'] == 0) {
				array_push($teachermodules, $module['module_ID']);
?>

<div class="module-box teacher-mb">
	<h2><?php echo _($module['module_name']); ?></h2>
	<br/>
	<div class="module-menu">
		<a class="take-box" href="demo/<?php echo $module['module_ID']; ?>/1.php"><?php echo _("DEMO"); ?></a>
		<a class="take-box" href="settings.php?module_id=<?php echo $module['module_ID']; ?>"><?php echo _("SETTINGS"); ?></a>
		<a class="take-box" href="student-results.php?module_id=<?php echo $module['module_ID']; ?>"><?php echo _("RESULTS"); ?></a>
	</div>
	<br>
	<div class="dt-text">
<?php
				foreach($diagnostic_test as $dt) {
					if($module['module_ID'] == $dt['module_id']) {
						if($dt['mode'] == 1 && $dt['isactive'] == 1) {
?>
							<p class="pre-dt"><?php echo _("A pre-diagnostic test is active for this module."); ?></p>
<?php
						} else if($dt['mode'] == 2 && $dt['isactive'] == 1) {
?>
							<p class="post-dt"><?php echo _("A post-diagnostic test is active for this module."); ?></p>
<?php
						}
					}
				}
?>
	</div>
</div>
<?php 
			} 
		}
	}

	$_SESSION['modules'] = $teachermodules;
?>
<div class="clear"></div>
<br/>
<div id="dash"></div>
<br/>
<div id="ct">
<center>
	<a class="take-box" href="create-ct.php?found=<?php echo ($ct ? 1 : 0 ); ?>">
		<?php 
			if($ct) echo _("EDIT");
			else  echo _("CREATE");
		
			echo _(" CUMULATIVE TEST");
		?>
	</a>
	<a class="take-box" href="all-students-ct-results.php"><?php echo _("STUDENT RESULTS"); ?></a>
</center>
</div>
<br/>
<div id="dash"></div>
<?php require_once "footer.php"; ?>