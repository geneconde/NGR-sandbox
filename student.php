<?php
	require_once 'session.php';	
	include_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/functions.php';
	
	$teacherid 			= $user->getTeacher();
	$userid				= $user->getUserid();
	
	$dtf = new DiagnosticTestFactory();
	$ct  = $dtf->getCumulativeTest($teacherid);
	
	$modules 			= $uf->getAllModules();
	$tests				= $dtf->getAllTeacherTests($teacherid);
	
	$tmf				= new TeacherModuleFactory();
	$tm_set				= $tmf->getTeacherModule($teacherid);

	$sdf				= new StudentDtFactory();
	$student_tests		= $sdf->getAllStudentTests($userid);
	$student_modules	= $uf->loadAllStudentModule($userid);
	
	$cttaken 			= false;

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
<div class="clear"></div>
<h1><?php echo _("Welcome"); ?>, <span class="upper bold"><?php echo $user->getFirstname(); ?></span>!</h1>
<p><?php echo _("This is your Dashboard. In this page, you can select a module to work on and view the results of the modules you have taken."); ?></p></br>
<div id="dash"></div>
<br/>

<?php 
	if($ct) { ?>
		<div id="ct">
<?php
		foreach($student_tests as $st) { 
			if($st['mode'] == 3) $cttaken = true;
		}
		
		if($cttaken) {
?>
			<center><a href="ct-results.php" class="take-box"><?php echo _("View Cumulative Test Result"); ?></a></center>
<?php   } else { ?>
			<center><a href="take-ct.php" class="take-box"><?php echo _("Take Cumulative Test"); ?></a></center>
<?php	} ?>
		
		<br/>
		</div>
		<div id="dash"></div>
		<br/>
<?php
	}
	if($tm_set) {
		foreach($modules as $module) {
			$moduleid = $module['module_ID'];
			foreach($tm_set as $sm) {
				if($moduleid == $sm['module_id']) {
?>
					<div class="module-box">
						<h2><?php echo _($module['module_name']); ?></h2>
						<div class="left-box fleft">
							<br/>
							<p>
		<?php
					$ctr = 0;
					
					if($tests) {
						foreach($tests as $test) {
							if($moduleid == $test['module_id']) {
								// check if there is an active test for current module
								
								if($test['mode'] == 1 && $test['isactive'] == 1) {
									if($student_tests) { // check first if the tests array is empty
										$found = false;
										$finished = true;
										
										foreach($student_tests as $stest) { // if it's not empty, check if there is a test taken by student
											if($stest['dt_id'] == $test['dt_id']) {
												$found = true;
												if($stest['date_ended'] == "0000-00-00 00:00:00" || $stest['date_ended'] == "null") {
													$finished = false;
												}
											}
										}
										
										// if there is a test, display a link for the result
										if($found && $finished) { ?>
											<a class="button1" href="dt-results.php?module_id=<?php echo $module['module_ID']; ?>&mode=pre&user_id=<?php echo $userid; ?>"><?php echo _("Pre-Test"); ?></a>
		<?php								
											if($sm['isactive']) {
												checkModule($userid, $moduleid, $student_modules, $student_tests, $tests);
												array_push($teachermodules, $moduleid);
											} else echo "<br><br>This module has not been activated yet.</div>";
											
										} else if($found && !$finished) { ?>
											<br><br>
											<p><?php echo _("You have started the pre diagnostic test but did not finish it. You must finish the test first."); ?></p>
											</div>
											<a class="take-box fright m-top30" href="take-dt.php?mode=pre&module_id=<?php echo $moduleid; ?>">
												<p class="dbl"><?php echo _("Continue"); ?></p>
												<p class="dbl"><?php echo _("Diagnostic"); ?></p>
												<p class="dbl"><?php echo _("Test"); ?></p>
											</a>
		<?php					
										} else {
											showPreTest($moduleid); // this function shows a pretest is available, and shows a link
										}
									} else { // if student tests are empty
										showPreTest($moduleid); 
									}
								} else {
									if($sm['isactive']) {
										checkModule($userid, $moduleid, $student_modules, $student_tests, $tests);
										array_push($teachermodules, $moduleid);
									} else {
										echo "<br><br>This module has not been activated yet.</div>";
									}
								}
								$bool = true;
								break;	
							} else {
								$ctr++;
							}

							if($ctr >= count($tests)) {
								if($sm['isactive']) { 
									checkModule($userid, $moduleid, $student_modules, $student_tests, $tests);
									array_push($teachermodules, $moduleid);
								} else echo "<br><br>This module has not been activated yet.</div>";
								break;
							}
						}
	?>
				
		<?php 
					} else {
						if($sm['isactive']) {
							checkModule($userid, $moduleid, $student_modules, $student_tests, $tests);
							array_push($teachermodules, $moduleid);
						} else echo "<br><br>This module has not been activated yet.</div>";
					} 
		?>
					</div>
	<?php		}
			}
		}

		$_SESSION['modules'] = $teachermodules;
	} else {
?>	
	<div id="dash"></div>
	<br>
	<center><h2><?php echo _("Your teacher has not activated any modules for you yet."); ?></h2></center>
	<br>
	<div id="dash"></div>
<?php } ?>
<script>
$(document).ready(function() {
	language = "<?php echo $language; ?>";
	
	if(language == "ar_EG" || language == "es_ES") {
		$('.module-box .take-box').css('padding','15px 5px');
		$('.module-box .take-box').css('fontSize','14px');
		$('.module-box .button1').css('fontSize','11px');
	}
});
</script>
<?php require_once "footer.php"; ?>