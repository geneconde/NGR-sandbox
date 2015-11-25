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
		.wrap { border-left: 1px dashed #90ab2a; border-right: 1px dashed #90ab2a; overflow: hidden;}
		#questions, #answers {
		    background: rgba(255,255,255,.7);
		    padding: 10px;
		    border-radius: 10px;
		    position: absolute;
		    margin: 10px;
		    width: 95.5%;
		}
		.ac-custom { padding: 0 3em; max-width: 900px; margin: 24px auto 0; }
		.ac-custom h2 { font-size: 3em; font-weight: 300; padding: 0 0 0.5em; margin: 0 0 30px; }
		.ac-custom ul, .ac-custom ol { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
		.ac-custom li { margin: 0 auto; padding: 10px 0; position: relative; }
		.ac-custom label { display: inline-block; position: relative; padding: 0 0 0 60px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
		.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 35px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }
		.ac-custom input[type="checkbox"], .ac-custom input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
		.ac-custom label::before { content: ''; border: 4px solid #314396; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
		.ac-radio label::before { border-radius: 50%; } 
		.ac-custom input[type="checkbox"]:checked + label, .ac-custom input[type="radio"]:checked + label { color: #000; } 
		.ac-custom input[type="checkbox"]:checked + label::before, .ac-custom input[type="radio"]:checked + label::before { opacity: 0.8; }
		.ac-custom svg { position: absolute; width: 35px; height: 35px; top: 47%; margin-top: -20px; left: 3px; pointer-events: none; }
		.ac-custom svg path { stroke: #963131; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }

		h1 { color: #d7a42e; } 
		h2 { color: #2f60a8; text-align: left; padding: 0 0 0 10px; }

		.coal { color: #ae30f0; } 
		.gas { color: #1e9b85; }
		.sun { color: #f48c12; }
		.petroleum { color: #a62659; }
		.bg { background-image: url(images/9/bg.jpg); }

		#buttons .next { display: none; }
		.feedback img { position: relative; top: 7px; }

		#question1 ul li { width: 21%; margin-left: 1%; text-align: center; }
		#question1 ul li img { width: 100%; }
		#question1 label { cursor: pointer; }
		#question1 input[type=checkbox] { display: none; }
		#question1 ul { list-style: none; padding-bottom: 40px; padding-left: 15px; }
		#question1 li { float: left; margin-right: 10px; height: 172px; position: relative; }
		#question1 li:last-child { margin-right: 0; }
		#question li img { position: relative; z-index: 2; }

		#answers { display: none; }

		#answer1 { text-align: center; }
		#answer1 .answer { display: inline-block; }

		#question2 { margin-top: 40px; }

		#answer1 .answer img { margin-right: 10px; border: 1px solid #eee; float:left}
		#answer1 .answer img:last-child { margin-right: 0; }

		#answer2 { margin-top: 30px; }
		
		.choice1 {float:left;margin-top: 105px;margin-left: -105px;}
		.choice1 span {font-size:20px; padding-left:18px;color: #ae30f0;}
		
		.choice2 {float:left;margin-top: 105px;margin-left: -105px;}
		.choice2 span {font-size:20px;padding-left:0px;color: #1e9b85; }
		
		.choice3 {float:left;margin-top: 105px;margin-left: -105px;}
		.choice3 span {font-size:20px;padding-left:25px;color: #f48c12;}
		
		.choice4 {float:left;margin-top: 105px;margin-left: -105px;}
		.choice4 span {font-size:20px; padding-left:5px;color: #a62659;}

		img.border { border: 4px solid transparent; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
		img.border-off { border: 4px solid #e3007b; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
	
		html[dir="rtl"] #question1 ul { padding-right:15px;padding-left:0; }
		html[dir="rtl"] .ac-custom label { padding:0 60px 0 0; }
		html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right:0; }
		html[dir="rtl"] .ac-custom svg { right:4px; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#question1 li { height: 140px; }
			#question1 li img { width: 150px; }
			#question1 label { padding-top: 145px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			h1 { padding-top: 15px; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#question1 label { padding-top: 175px; }
			#question2 { margin-top: 0; }
			#answers p { line-height: 20px; font-size: 20px; }
			#questions, #answers { margin-top: 45px; }
		}
		h1 { margin-top: -10px; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Click on <span class='blink'>all</span> the energy sources that are renewable."); ?></h2>
					<ul>
						<li id="coal"><input id="a1" name="q1" type="checkbox"><label for="a1" class="coal"><img src="images/9/coal.png" class="border"><?php echo _("Coal"); ?></label></li>
						<li id="gas"><input id="b1" name="q1" type="checkbox"><label for="b1" class="gas"><img src="images/9/gas.png" class="border"><?php echo _("Natural Gas"); ?></label></li>
						<li id="sun"><input id="c1" name="q1" type="checkbox"><label for="c1" class="sun"><img src="images/9/sun.png" class="border"><?php echo _("Sun"); ?></label></li>
						<li id="petroleum"><input id="d1" name="q1" type="checkbox"><label for="d1" class="petroleum"><img src="images/9/petroleum.png" class="border"><?php echo _("Petroleum"); ?></label></li>
						<div class="clear"></div>
					</ul>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Click <span class='blink'>all</span> the statements that correctly explain what the expression \"produce energy\" means."); ?></h2>

					<section>
						<form class="ac-custom ac-checkbox ac-boxfill" autocomplete="off">
							<ul>
								<li><input id="a2" name="q2" type="checkbox"><label for="a2"><?php echo _("It means to create energy that was not there before."); ?></label></li>
								<li><input id="b2" name="q2" type="checkbox"><label for="b2"><?php echo _("It means to transform energy into the form you need."); ?></label></li>
							</ul>
						</form>
					</section>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3 - How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Click on <span class='blink'>all</span> the energy sources that are renewable."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback center"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. Click <span class='blink'>all</span> the statements that correctly explain what the expression \"produce energy\" means."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Transforming and renewing"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/answer.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/global.js"></script>

	<script>
		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),

		questions = $('#questions'),
		answers = $('#answers'),

		question1 = $('#question1'),
		question2 = $('#question2'),

		answer1 = $('#answer1'),
		answer2 = $('#answer2'),

		answered = 1,

		a1 = $('#a1'),
		b1 = $('#b1'),
		c1 = $('#c1'),
		d1 = $('#d1'),

		a2 = $('#a2'),
		b2 = $('#b2'),

		coal = $('#coal'),
		gas = $('#gas'),
		sun = $('#sun'),
		petroleum = $('#petroleum');

		question1.find('input[type=checkbox]').on('click', function() {
			var checkbox = $(this);

			if (checkbox.is(':checked') && checkbox.attr('id') == 'a1') {
				coal.find('img').removeClass().addClass('border-off');
				answer1.find('.answer').append('<img src="images/9/coal.png" width="100" alt="<?php echo _('Coal'); ?>" />');
				answer1.find('.answer').append('<div class="choice1"><span><?php echo _("Coal"); ?></span></div>');
			} else if ( ! checkbox.is(':checked') && checkbox.attr('id') == 'a1') {
				coal.find('img').removeClass().addClass('border');
				answer1.find('.answer').find('img[alt="<?php echo _('Coal'); ?>"]').remove();
				answer1.find('.answer').find('div[class="choice1"]').remove();
			}

			if (checkbox.is(':checked') && checkbox.attr('id') == 'b1') {
				gas.find('img').removeClass().addClass('border-off');
				answer1.find('.answer').append('<img src="images/9/gas.png" width="100" alt="<?php echo _('Natural Gas'); ?>" />');
				answer1.find('.answer').append('<div class="choice2"><span><?php echo _("Natural Gas"); ?></span></div>');
			} else if ( ! checkbox.is(':checked') && checkbox.attr('id') == 'b1') {
				gas.find('img').removeClass().addClass('border');
				answer1.find('.answer').find('img[alt="<?php echo _('Natural Gas'); ?>"]').remove();
				answer1.find('.answer').find('div[class="choice2"]').remove();
			}

			if (checkbox.is(':checked') && checkbox.attr('id') == 'c1') {
				sun.find('img').removeClass().addClass('border-off');
				answer1.find('.answer').append('<img src="images/9/sun.png" width="100" alt="<?php echo _('Sun'); ?>" />');
				answer1.find('.answer').append('<div class="choice3"><span><?php echo _("Sun"); ?></span></div>');
			} else if ( ! checkbox.is(':checked') && checkbox.attr('id') == 'c1') {
				sun.find('img').removeClass().addClass('border');
				answer1.find('.answer').find('img[alt="<?php echo _('Sun'); ?>"]').remove();
				answer1.find('.answer').find('div[class="choice3"]').remove();
			}

			if (checkbox.is(':checked') && checkbox.attr('id') == 'd1') {
				petroleum.find('img').removeClass().addClass('border-off');
				answer1.find('.answer').append('<img src="images/9/petroleum.png" width="100" alt="<?php echo _('Petroleum'); ?>" />');
				answer1.find('.answer').append('<div class="choice4"><span><?php echo _("Petroleum"); ?></span></div>');
			} else if ( ! checkbox.is(':checked') && checkbox.attr('id') == 'd1') {
				petroleum.find('img').removeClass().addClass('border');
				answer1.find('.answer').find('img[alt="<?php echo _('Petroleum'); ?>"]').remove();
				answer1.find('.answer').find('div[class="choice4"]').remove();
			}

			if (a1.is(':checked') == false && 
				b1.is(':checked') == false && 
				c1.is(':checked') == true &&
				d1.is(':checked') == false) {
				answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"> <?php echo _("Correct! Solar energy is a renewable source. Coal, natural gas, and petroleum are non-renewable energy sources as they will finish eventually."); ?></p>');
			} else {
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("Not quite. Solar energy is a renewable source. Coal, natural gas, and petroleum are non-renewable energy sources as they will finish eventually."); ?></p>');
			}
		});

		question2.find('input[type=checkbox]').on('click', function() {
			var checkbox = $(this);

			if (checkbox.is(':checked') && checkbox.attr('id') == 'a2') {
				answer2.find('.answer').append('<p class="center a"><?php echo _("It means to create energy that was not there before."); ?></p>');
			} else if ( ! checkbox.is(':checked') && checkbox.attr('id') == 'a2') {
				answer2.find('.answer').find('p.a').remove(); 
			}

			if (checkbox.is(':checked') && checkbox.attr('id') == 'b2') {
				answer2.find('.answer').append('<p class="center b"><?php echo _("It means to transform energy into the form you need."); ?></p>');
			} else if ( ! checkbox.is(':checked') && checkbox.attr('id') == 'b2') {
				answer2.find('.answer').find('p.b').remove(); 
			}

			if (a2.is(':checked') == false && b2.is(':checked') == true) {
				answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"> <?php echo _("Correct! Based on the law of conservation of energy, energy is only transformed into different forms - no energy is actually created."); ?></p>');
			} else {
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("No, based on the law of conservation of energy, energy is only transformed into different forms - no energy is actually created."); ?></p>');
			}
		});

		function save() {
			var ans1, ans2;

			if (a1.is(':checked')) ans1 = 'coal';
			else if (b1.is(':checked')) ans1 = 'natural gas';
			else if (c1.is(':checked')) ans1 = 'sun';
			else if (d1.is(':checked')) ans1 = 'petroleum';

			else if (a1.is(':checked') && b1.is(':checked')) ans1 = 'coal,natural gas';
			else if (a1.is(':checked') && c1.is(':checked')) ans1 = 'coal,sun';
			else if (a1.is(':checked') && d1.is(':checked')) ans1 = 'coal,petroleum';

			else if (b1.is(':checked') && c1.is(':checked')) ans1 = 'natural gas,sun';
			else if (b1.is(':checked') && d1.is(':checked')) ans1 = 'natural gas,petroleum';

			else if (c1.is(':checked') && d1.is(':checked')) ans1 = 'sun,petroleum';
			else if (a1.is(':checked') && b1.is(':checked') && c1.is(':checked')) ans1 = 'coal,natural gas,sun';
			else if (a1.is(':checked') && b1.is(':checked') && c1.is(':checked') && d1.is(':checked')) ans1 = 'coal,natural gas,sun,petroleum';

			if (a2.is(':checked')) ans2 = 'A';
			else if (b2.is(':checked')) ans2 = 'B';
			else if (a2.is(':checked') && b2.is(':checked')) ans2 = 'A,B';

			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qc3-a', ans1);
				saveAnswer('energy-and-its-forms-qc3-b', ans2);
				answered = 1;
			}
		}

		check.on('click', function() {
			var noAnswer = false,
			q1numberNotChecked = question1.find('input:checkbox:not(":checked")').length,
			q2numberNotChecked = question2.find('input:checkbox:not(":checked")').length;

			if (q1numberNotChecked == 4 || q2numberNotChecked == 2) noAnswer = true;

			if (noAnswer) {
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				questions.fadeOut(function() {
					save();
					window.location.hash = '#answer';
					answers.fadeIn();
				});
				check.fadeOut(function() { next.fadeIn(); });
				removeHash();
				addHash('#answers');
			}
		});

		back.on('click', function() {
			if (questions.is(':visible')) { document.location.href = "8.php#screen2"; } 
			else {
				answers.fadeOut(function() { questions.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>
