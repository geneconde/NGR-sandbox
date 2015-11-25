<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
	h1 { font-size: 27px; height:50px; color: #4F602A; }
	.wrap { border-left: 1px dashed #7de2fc; border-right: 1px dashed #7de2fc; }
	p.heading { text-align: center; color: #9868e8; }
	.bg { background: url('images/12/bg.jpg') no-repeat; background-size: 100% 100%; width: 100% !important; height:100%; position: relative; }
	#question { text-align: center; }
	#question img { display: inline-block; width: 300px; height: 300px; }
	#answer { display: none; padding-top: 10px; text-align: center; }
	textarea { width: 60%; margin-top: 20px; display: inline-block; border: 0; border-radius: 10px; border: 4px solid #97e5f9; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
	#buttons .next { display: none; }
	#cycle { text-align:center; margin: 20px auto 0;  width:450px;}
	#cycle img { display: inline-block; border:6px solid rgba(255,255,255,.4);box-shadow: 0px 35px 45px -25px rgba(0, 0, 0, .5); width:450px;}

	html[dir="rtl"] .heading { text-align: center; }
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		#answer { padding-top: 35px; }
	}	

	@media only screen and (max-width: 1250px){
		div#question, div#answer{  padding-top: 33px; }
		p {
		    line-height: 25px;
		}
	}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Using what you know... about ecosystems interactions... to solve a problem"); ?></h1>
				<p class="heading"><?php echo _("The Problem"); ?></p>
				<p><?php echo _("When people move into an area, they can't help but immediately begin to make changes.  They need food and a place to live.  They like to live in communities with other people.  They each have their own sense of what is useful and attractive.  The pictures below show examples of how different landscapes looked before and since people arrived."); ?></p>
				
				<div id="cycle">
					<img src="images/12/1.jpg">
					<img src="images/12/2.jpg">
					<img src="images/12/3.jpg">
					<img src="images/12/4.jpg">
					<img src="images/12/5.jpg">
					<img src="images/12/6.jpg">
				</div>
			</div>
			
			<div id="answer">
				<p class="heading"><?php echo _("The Task"); ?></p>
				<p><?php echo _("The historical society in your town has hired you to prepare a report on what the town area may have looked like before people settled there. Take a walk around your neighborhood and make some notes in the space below about how you think your own community looks now and how it may have looked before people settled there."); ?></p>				
				<textarea cols="80" rows="9" placeholder="<?php echo _("Please type your answer here..."); ?>"></textarea>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the old pictures..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	
	<script src="scripts/cycle.js"></script>
	<script>$('#cycle').cycle();</script>
	
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer');

	next.on('click', function() {
		if ($('textarea').val() == '') {
			alert('<?php echo _("Please type your answer."); ?>');
			return false;
		}

		document.location.href = "13.php";
	});

	check.on('click', function() {
		question.fadeOut(function() { answer.fadeIn(); });
		check.fadeOut(function() { next.fadeIn(); });
		removeHash();
		addHash('#answer');
	});

	back.on('click', function() {
		if (question.is(':visible')) {
			document.location.href = "11.php";
		} else {
			answer.fadeOut(function() { question.fadeIn(); });
			next.fadeOut(function() { check.fadeIn(); });
			removeHash();
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
