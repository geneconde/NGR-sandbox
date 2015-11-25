<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Healthy Body"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { height:50px; font-size: 31px; color: #ffea01; }
.wrap { border-left: 1px dashed #a89e85; border-right: 1px dashed #a89e85; }
p.heading { text-align: center; color: #297c62; }
.bg { background: url('images/10/bg.png') no-repeat; background-size: 100% 100%; width: 100% !important; height:100%; position: relative; }
#question { text-align: center; }
#question img { display: inline-block; margin-top: 20px; background: rgba(0, 0, 0, .1); padding: 6px }
#answer { display: none; padding-top: 10px; text-align: center; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border: 0; border-radius: 10px; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
img.next-toggle { display: none; }
#cycle { text-align:center; margin: 0 auto; margin-top:15px; width:450px;}
#cycle img { display: inline-block; border:6px solid rgba(255,255,255,.4);box-shadow: 0px 35px 45px -25px rgba(0, 0, 0, .5); width:450px;}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 27px; }
<?php } ?>
html[dir="rtl"] p.heading { text-align: center; }
.buttons, .buttons-back { display: none; }
#buttons .next { display: none;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Using what you know... about a healthy body... to solve a problem"); ?></h1>
				<p class="heading"><?php echo _("The Problem"); ?></p>
				<p><?php echo _("You are a physician giving a lecture to a sixth grade class that just finished a unit on health in their science class. The teacher has invited you to speak for these students."); ?></p>
				
				<img src="images/10/redhead.jpg">
			</div>
			
			<div id="answer">
				<p class="heading"><?php echo _("The Task"); ?></p>
				<p><?php echo _("Discuss three health issues students face at school. Offer solutions to a healthier lifestyle. Even though your presentation at school will be half an hour, outline the health problems and solutions you plan to present to the students in the text box provided below."); ?></p>				
				<textarea id="probanswer" cols="80" rows="9" placeholder="<?php echo _('Please type your answer here...'); ?>"></textarea>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
		<a href="#answer" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Presenting healthier lifestyle..."); ?></strong></section></section>
	
	<script src="scripts/cycle.js"></script>
	<script>$('#cycle').cycle();</script>
	
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.readmore-toggle'),
	question = $('#question'),
	answer = $('#answer');

	next.on('click', function() {
		if ($('textarea').val() == '') {
			alert('<?php echo _("Please type your answer."); ?>');
			return false;
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
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
