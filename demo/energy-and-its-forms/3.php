<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		#question, #answers { background: rgba(255,255,255,.7); padding: 10px; border-radius: 10px; margin-top: 10px; position: absolute; margin-left: 13px;}
		.ac-custom { padding: 0 3em; max-width: 900px; margin: 24px auto 0; } 
		.ac-custom h2 { font-size: 24px; font-weight: 300; padding: 0 0 0.5em; margin: 0 0 30px; }
		.ac-custom ul, .ac-custom ol { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
		.ac-custom li { margin: 0 auto; padding: 15px 0; position: relative; } 
		.ac-custom label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 60px; vertical-align: top; color: rgba(0,0,0,0.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
		.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 35px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }
		.ac-custom input[type="checkbox"], .ac-custom input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
		.ac-custom label::before { content: ''; border: 4px solid #314396; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
		.ac-radio label::before { border-radius: 50%; }
		.ac-custom input[type="checkbox"]:checked + label, .ac-custom input[type="radio"]:checked + label { color: #000; } 
		.ac-custom input[type="checkbox"]:checked + label::before, .ac-custom input[type="radio"]:checked + label::before { opacity: 0.8; }
		.ac-custom svg { position: absolute; width: 35px; height: 35px; top: 47%; margin-top: -20px; left: 3px; pointer-events: none; }
		.ac-custom svg path { stroke: #963131; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }
		h1 { color: #d7a42e; }
		h2 { color: #2f60a8; text-align: left; padding: 30px 0 0 10px; }
		.wrap { border-left: 1px dashed #aa9f8d; border-right: 1px dashed #aa9f8d; }
		.bg { background-image: url(images/3/bg.jpg); }
		#buttons .next { display: none; }
		#answer { display: none; }
		#answer p { color: #e7f8f5; text-align: left; padding-top: 20px; }

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 29px !important; }
		<?php endif; ?>
		html[dir="rtl"] #answer p { text-align:right; padding-right: 55px; }
		html[dir="rtl"] .ac-custom label { padding:0 60px 0 0; }
		html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right:0; }
		html[dir="rtl"] .ac-custom svg { top:49%;right:4px; }
		html[dir="rtl"] #question, #answers { margin-right: 13px; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			#answer { padding-top: 35px; }
		}
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 20px !important; }
			#answer p { padding-top: 45px !important; }
		}
		@media screen and (max-width: 900px) {
			form li { line-height: 30px; padding: 5px !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about energy and its forms"); ?></h1>
				<h2><?php echo _("Check <span class='blink'>all</span> the ways that the food you eat and the gasoline a car uses are alike."); ?></h2>

				<section>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ul>
							<li><input id="a" name="q" type="checkbox"><label for="a">A. <?php echo _("Without food, a person couldn't live and without fuel, a car couldn't run."); ?></label></li>
							<li><input id="b" name="q" type="checkbox"><label for="b">B. <?php echo _("Both people and cars produce heat when food is eaten or gasoline is burned."); ?></label></li>
							<li><input id="c" name="q" type="checkbox"><label for="c">C. <?php echo _("After food is eaten or gasoline is burned there is no energy remaining."); ?></label></li>
							<li><input id="d" name="q" type="checkbox"><label for="d">D. <?php echo _("The energy in food and gasoline can be traced to the energy from the sun."); ?></label></li>
						<ul>
					</form>
				</section>
			</div>

			<div id="answer">
				<p><?php echo _("Food and gasoline fuel people and transportation vehicles. Without them, people or cars could not run. Food provides the energy that you need to live and gasoline is one form of energy that a car needs to move. Both can be traced back to the energy from the sun."); ?></p>				
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Food and gasoline"); ?></strong></section></section>

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
		question = $('#question'),
		answer = $('#answer');

		check.on('click', function() {
			var checkAnswer = $('input:checkbox:checked').length;

			if(checkAnswer == '')
			{
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				question.fadeOut(function() {
					window.location.hash = '#answer';
					answer.fadeIn();
					$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				});

				check.fadeOut(function() { next.fadeIn(); });
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "2.php";
			} else {
				answer.fadeOut(function() {
					$('.bg').css('background-image', 'url(images/3/bg.jpg)');
					question.fadeIn();
				});

				next.fadeOut(function() { check.fadeIn(); });
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
			question.fadeOut(function() { 
				answer.fadeIn(); 
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			});

			check.fadeOut(function() { next.fadeIn(); });
			window.location.hash = '#answer';
		}
	</script>
</body>
</html>
