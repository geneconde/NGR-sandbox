<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		h1 { font-size: 33px; }
		p { text-align: left; }
		.bg { background-image:url(images/3/bg.jpg); }
		.wrap { border-left: 1px dashed #8dc45b; border-right: 1px dashed #8dc45b; }

		#questions { overflow: hidden;}
		#questions p.instruction { text-align: left; color: #000; }
		#questions div { overflow: hidden; margin-top: 5px; }
		#questions div p:first-child { text-align: left; clear: both; padding-bottom: 10px; } 
		#questions div p:nth-child(2) { float: left; } 
		#questions div ul { float: left; padding-left: 15px; margin-bottom: 0; } 
		#questions ul { padding-left: 0; }
		#questions li { position: relative; margin-bottom: 0; }
		#questions label { padding-left: 35px; cursor: pointer; display: inline-block; vertical-align: top; position: relative; }
		#questions input[type="radio"], #questions label::before{ width: 26px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }	
		#questions input[type=checkbox] { z-index: 100; display: none !important; opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; }
		#questions label::before { content: ''; background: url(images/3/checkbox.png) left top no-repeat; width: 26px; height: 35px; margin-top: -20px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
		#questions input[type="checkbox"]:checked + label::before { background-position: -25px top; width: 29px; }

		#question3 { margin-right: 0; }

		#answer { display: none; }
		#answer p { font-size: 24px; padding-top: 10px; }
		#answer .images { margin-top: 20px; }
		#answer img { margin-right: 10px; }
		#answer img:last-child { margin-right: 0; }
	
		html[dir="rtl"] p { text-align: right; }
		html[dir="rtl"] #answer img:last-child { margin-right: 10px; }
		html[dir="rtl"] #questions input[type="radio"], #questions label::before { right:-40px; }
		html[dir="rtl"] #questions div p:first-child {text-align: right;}
		html[dir="rtl"] #questions p.instruction { text-align: right; }
		html[dir="rtl"] #questions div p:nth-child(2) { margin-left: 10px;float:right; }
		html[dir="rtl"] #questions div ul { float:right; }
		html[dir="rtl"] #questions div { margin-right: 120px; }
		<?php if($language == "es_ES") { ?>
			p, label { font-size:22px; }
			h1 { font-size:28px; }
		<?php } ?>
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#questions p { font-size: 22px; }
			h1 { font-size: 28px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#question2 ul { width: 520px; }
			html[dir="rtl"] #questions div { margin-right: 0; }
			html[dir="rtl"] #question2 ul { width: 460px; }
			
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			#answer { padding-top: 35px; }
		}	
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Checking what you already know... about how animals respond"); ?></h1>
				<p class="instruction"><?php echo _("Click on <span class='blink'>all</span> the changes in the right column you think the events in the left column are causing."); ?></p>

				<div id="question1">
					<p><?php echo _("A child touches his finger to a hot pan, just off the stove."); ?></p>
					<p><img src="images/3/q3.jpg"></p>
					<ul>
						<li><input type="checkbox" id="a3"><label for="a3"><?php echo _("A nerve impulse is sent immediately to his brain."); ?></label></li>
						<li><input type="checkbox" id="b3"><label for="b3"><?php echo _("He drifts gently into peaceful slumber."); ?></label></li>
						<li><input type="checkbox" id="c3"><label for="c3"><?php echo _("He withdraws his hand, crying out in pain."); ?></label></li>
					</ul>
				</div>

				<div id="question2">
					<p><?php echo _("A nerve cell transmits a chemical message to a muscle."); ?></p>
					<p><img src="images/3/q2.jpg"></p>
					<ul>
						<li><input type="checkbox" id="a2"><label for="a2"><?php echo _("Muscle cells contract, causing a bone to move."); ?></label></li>
						<li><input type="checkbox" id="b2"><label for="b2"><?php echo _("The brain relates the smell to a previous experience."); ?></label></li>
						<li><input type="checkbox" id="c2"><label for="c2"><?php echo _("The image is interpreted by cells in the front of the brain."); ?></label></li>
					</ul>
				</div>

				<div id="question3">
					<p><?php echo _("An athlete receives a blow to the head, causing him to lose consciousness for a few minutes."); ?></p>
					<p><img src="images/3/q1.jpg"></p>
					<ul>
						<li><input type="checkbox" id="a1"><label for="a1"><?php echo _("Part of the brain is compressed."); ?></label></li>
						<li><input type="checkbox" id="b1"><label for="b1"><?php echo _("Some memories may be lost or confused."); ?></label></li>
						<li><input type="checkbox" id="c1"><label for="c1"><?php echo _("He is at higher risk for further brain injuries."); ?></label></li>
					</ul>
				</div>
			</div>

			<div id="answer">
				<p><?php echo _("When a nerve cell transmits a chemical message to a muscle, muscle cells contract, causing a bone to move. When someone receives a blow to their head, part of their brain is compressed, some memories might be lost or confused, and the person will be at higher risk for other brain injuries. When a child touches his finger to a hot pan, a nerve impulse is sent immediately to his brain, causing him to withdraw his hand. Read on to learn more about how animals respond."); ?></p>				
				<div class="images">
					<img src="images/3/q1.jpg">
					<img src="images/3/q2.jpg">
					<img src="images/3/q3.jpg">
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Wearing oven mitts..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),
		questions = $('#questions'),
		answer = $('#answer');

		check.on('click', function() {
			questions.fadeOut(function() { 
				answer.fadeIn();
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)'); 
			});
			check.fadeOut(function() { next.fadeIn(); });
			removeHash();
			addHash('#answer');
		});

		back.on('click', function() {
			if (questions.is(':visible')) {
				document.location.href = "2.php";
			} else {
				answer.fadeOut(function() { 
					$('.bg').css('background-image', 'url(images/3/bg.jpg)');
					questions.fadeIn(); 
				});
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
			questions.fadeOut(function() { 
				answer.fadeIn(); 
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			});
			check.fadeOut(function() { next.fadeIn(); });
			addHash('#answer');
		}
	</script>
</body>
</html>
