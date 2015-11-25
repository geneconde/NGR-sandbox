<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(10, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('composition-of-matter');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { font-size: 27px; height:50px; font-size: 26px; color: #90385e; }
.wrap { border-left: 1px dashed #76bb41; border-right: 1px dashed #76bb41; }
p.heading { text-align: center; color: #5C4342; }
.bg { background: url('images/10/bg.png') no-repeat; background-size: 100% 100%; width: 100% !important; height:100%; position: relative; }
#question { text-align: center; }
#question img { display: inline-block; margin-top: 20px; }
#answer { display: none; padding-top: 10px; text-align: center; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border: 0; border-radius: 10px; border: 4px solid #077435; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 22px; }
<?php } ?> 
html[dir="rtl"] .heading { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 35px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Using what you know... about the composition of matter... to solve a problem'); ?></h1>
				<p class="heading"><?php echo _('The Problem'); ?></p>
				
				<p><?php echo _('The fountain in the town\'s park that has always been clean and clear, has become murky (dark and not clear). Some people think the murkiness is just a temporary condition caused by particles being washed into the pond by recent heavy rains. Others are worried that something has gotten into the water that will not allow the water to clear up on its own.'); ?></p>
				
				<img src="images/10/statue.jpg">
			</div>
			
			<div id="answer">
				<p class="heading"><?php echo _('The Task'); ?></p>
				<p><?php echo _('You have been hired as a consultant to help the townsfolk figure out what has happened to the pond water. Using what you know about the composition and characteristics of different kinds of mixtures, prepare a report describing what kind of tests can be done to determine if the murky water condition will clean up by itself or if it is a more serious condition that will take some specific action. Type your report in the text box provided.'); ?></p>				
				<textarea id="probanswer" cols="80" rows="9" placeholder="<?php echo _('Please type your answer here...'); ?>"></textarea>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _('Looking at the old pictures...'); ?></strong></section></section>
	
	<script src="scripts/cycle.js"></script>
	<script>$('#cycle').cycle();</script>
	
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.readmore-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	answered = <?php echo $answered; ?>;

	next.on('click', function() {
		if ($('textarea').val() == '') {
			alert("<?php echo _('Please type your answer.'); ?>");
			return false;
		} else {
			answer = $('#probanswer').val();
			if (answered == 0) {
				saveMeta('composition-of-matter', answer);
				answered = 1;
			}
		}

		document.location.href = "11.php";
	});

	check.on('click', function() {
		question.fadeOut(function() { answer.fadeIn(); });
		check.fadeOut(function() { next.fadeIn(); });
		removeHash();
		addHash('#answer');
	});

	back.on('click', function() {
		if (question.is(':visible')) {
			document.location.href = "9.php";
		} else {
			answer.fadeOut(function() { question.fadeIn(); });
			next.fadeOut(function() { check.fadeIn(); });
			removeHash();
		}
	});
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
