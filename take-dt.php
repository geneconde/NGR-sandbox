<?php 
	require_once 'session.php';	
	require_once 'locale.php';	
	include_once 'header.php';
	include_once 'libraries/UserFactory.class.php';
	include_once 'libraries/DiagnosticTestFactory.class.php';
	
	$teacherid 		= $user->getTeacher();
	$mid 		= $_GET['module_id'];
	$uf			= new UserFactory();
	
	$module_set	= $uf->loadModule($mid);
	$mode 		= ($_GET['mode'] == 'pre' ? 1 : 2 );
	
	$dtf		= new DiagnosticTestFactory();
	$tests		= $dtf->getAllModuleTestsByTeacher($mid, $teacherid);
	
	foreach($tests as $test) {
		if($test['mode'] == $mode) {
			$qid 		= explode(',', $test['qid']);
			$count 		= count($qid);
			$tlimit		= $test['timelimit'];
			$tl			= explode(':', $tlimit);
			$hour		= ltrim($tl[0], '0');
			$min		= ltrim($tl[1], '0');
			$timelimit 	= $hour * 60 + $min;
		}
	}
?>
<div id="container">
<a class="link" href="student.php">&laquo Go Back</a>
<?php if ($_GET['mode'] == 'pre') { ?>
<h1><?php echo $module_set->getModule_name(); ?> - <?php echo _("Pre-Diagnostic Test"); ?></h1>
<?php echo _("This pre-diagnostic test consists of"); ?> <strong><?php echo $count; ?> <?php echo _("questions"); ?></strong> <?php echo _("from the"); ?> <strong><?php echo $module_set->getModule_name(); ?></strong> <?php echo _("review that you must answer within"); ?> <strong><?php echo $timelimit; ?> <?php echo _("minutes"); ?></strong>. <?php echo _("Whatever you finish within"); ?> <?php echo $timelimit; ?> <?php echo _("minutes will be recorded. Click the button below to start the test."); ?>
<?php } else { ?>
<h1><?php echo $module_set->getModule_name(); ?> - <?php echo _("Post-Diagnostic Test"); ?></h1>
<?php echo _("This post-diagnostic test consists of"); ?> <strong><?php echo $count; ?> <?php echo _("questions"); ?></strong> <?php echo _("from the"); ?> <strong><?php echo $module_set->getModule_name(); ?></strong> <?php echo _("review you must answer within"); ?> <strong><?php echo $timelimit; ?> <?php echo _("minutes"); ?></strong>. <?php echo _("Whatever you finish within"); ?> <?php echo $timelimit; ?> <?php echo _("minutes will be recorded. Click the button below to start the test."); ?>
<?php } ?>
<br/><br/><br/><br/>
<div class="center">
	<a class="take-box" href="dt.php?mode=<?php echo $_GET['mode']; ?>&module_ID=<?php echo $mid; ?>&date=<?php echo urlencode(date('Y-m-d G:i:s')); ?>&tl=<?php echo urlencode($tlimit); ?>"><?php echo _("START TEST"); ?></a>
</div>
</div>
<?php require_once "footer.php"; ?>