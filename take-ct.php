<?php 	
	require_once 'session.php';	
	require_once 'locale.php';	
	include_once 'header.php';
	include_once 'libraries/UserFactory.class.php';
	include_once 'libraries/DiagnosticTestFactory.class.php';
	
	$teacherid 	= $user->getTeacher();
	
	$dtf		= new DiagnosticTestFactory();
	$tests		= $dtf->getCumulativeTest($teacherid);
	
	foreach($tests as $test) {
		$qid 		= explode(',', $test['qid']);
		$count 		= count($qid);
		$tl			= explode(':', $test['timelimit']);
		$hour		= ltrim($tl[0], '0');
		$min		= ltrim($tl[1], '0');
		$timelimit 	= $hour * 60 + $min;
	}
?>
<div id="container">
<a class="link" href="student.php">&laquo <?php echo _("Go Back"); ?></a>
<h1><?php echo _("Cumulative Test"); ?></h1>
<?php echo _("This cumulative test consists of"); ?> <strong><?php echo $count; ?> <?php echo _("questions"); ?></strong> <?php echo _("from different module reviews that you must answer within"); ?> <strong><?php echo $timelimit; ?> <?php echo _("minutes"); ?></strong>. <?php echo _("Whatever you finish within"); ?> <?php echo $timelimit; ?> <?php echo _("minutes will be recorded. Click the button below to start the test."); ?>
<br/><br/><br/><br/>
<div class="center"><a class="take-box" href="ct.php?date=<?php echo urlencode(date('Y-m-d G:i:s')); ?>&tl=<?php echo $timelimit; ?>"><?php echo _("START TEST"); ?></a></div>
</div>	
<?php require_once "footer.php"; ?>