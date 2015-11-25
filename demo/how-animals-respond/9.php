<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?><?php if($language == "es_ES") { ?> dir="es" <?php } ?> >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/svgcheckbx.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		.bg { background-image: url(images/9/bg.jpg); }

		#questions { }
		#questions label { font-size: 24px; padding-left: 10px; }
		
		#question1, #question2, #answer1, #answer2 { margin-bottom: 20px; border-radius: 12px; }

		#question1 ul { padding-left: 0; padding-bottom: 5px; } 
		#question1 li { padding: 10px 0 0 0; }

		#question2 { text-align: center; }

		.nl-form { width: 100%; margin: 0 auto 10px; font-size: 24px; line-height: 1.5; }
		.nl-form ul { list-style: none; margin: 0; padding: 0; }
		.nl-form input, .nl-form select, .nl-form button { border: none; background: transparent; font-family: inherit; font-size: inherit; color: inherit; font-weight: inherit; line-height: inherit; display: inline-block; padding: 0; margin: 0; -webkit-appearance: none; -moz-appearance: none; }
		.nl-form input:focus { outline: none; }
		.nl-field { display: inline-block; position: relative; }
		.nl-field.nl-field-open { z-index: 10000; }
		.nl-field-toggle, .nl-form input, .nl-form select  { padding: 0 10px; border-radius: 6px; border-bottom: 3px solid #119ab8; line-height: inherit; display: inline-block; color: #fff; cursor: pointer; background-color: #12a5c5; /* border-bottom: 1px dashed #b14943; */ }
		.nl-field ul { border-radius: 6px; border-bottom: 3px solid #119ab8; position: absolute; visibility: hidden; background: #12a5c5; left: -0.5em; top: 50%; font-size: 24px; padding: 10px 0; opacity: 0; -webkit-transform: translateY(-40%) scale(0.9); -moz-transform: translateY(-40%) scale(0.9); transform: translateY(-40%) scale(0.9); -webkit-transition: visibility 0s 0.3s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0.3s, opacity 0.3s, transform 0.3s; }
		.nl-field.nl-field-open ul { visibility: visible; opacity: 1; -webkit-transform: translateY(-50%) scale(1); -moz-transform: translateY(-50%) scale(1); transform: translateY(-50%) scale(1); -webkit-transition: visibility 0s 0s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0s, opacity 0.3s, transform 0.3s; }
		.nl-field ul li { color: #fff; position: relative; font-size: 24px; }
		.nl-dd ul li { padding: 0 60px; cursor: pointer; white-space: nowrap; }
		.nl-dd ul li.nl-dd-checked:before, .nl-submit:before, .nl-field-go:before { font-family: 'nlicons'; speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; -webkit-font-smoothing: antialiased; }
		.nl-dd ul li.nl-dd-checked { color: #1188a2; }
		.nl-dd ul li.nl-dd-checked:before { content: "\e000"; position: absolute; right: 1em; font-size: 50%; line-height: 3; }
		.nl-dd ul li:hover { background-color: #5fbdd1 !important; }
		.nl-dd ul li:hover:active { color: #064a59; }
		.nl-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); opacity: 0; z-index: 9999; visibility: hidden; -webkit-transition: visibility 0s 0.3s, opacity 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s; transition: visibility 0s 0.3s, opacity 0.3s; }
		.nl-field.nl-field-open ~ .nl-overlay { opacity: 1; visibility: visible; -webkit-transition-delay: 0s; -moz-transition-delay: 0s; transition-delay: 0s; }
		.nl-form option { text-align: center; }
		
		#question2 ul { margin-left: 0; position: relative; }
		#question2 h2 { margin-bottom: 25px; }
		#question2 select { text-align: center; display: inline-block; border: 0; padding: 10px; font-size: 24px !important; font-family: PlaytimeRegular; }

		#answers { display: none; }
		#answers p { margin-bottom: 10px; }
		#answers .feedback p { margin-bottom: 0; }

		#answer2 { margin-top: 20px; }
		
		html[dir="es"] .nl-dd ul li { padding: 0 25px; font-size: 22px; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			.nl-dd ul li { padding: 0 30px; }
			html[dir="rtl"] .nl-dd ul li { padding: 0 10px; }
			html[dir="es"] .nl-dd ul li { padding: 0; font-size: 20px; }
		}	
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Which of the following statements is <span class='blink'>NOT</span> correct about how our eyes sense our surroundings."); ?></h2>

					<form class="ac-custom ac-radio ac-list" autocomplete="off">
						<ul>
							<li><input id="a1" type="radio" name="q1" value="A"><label for="a1">A. <?php echo _("Visible light is part of the electromagnetic spectrum."); ?></label></li>
							<li><input id="b1" type="radio" name="q1" value="B"><label for="b1">B. <?php echo _("Light enters the eye through the pupil."); ?></label></li>
							<li><input id="c1" type="radio" name="q1" value="C"><label for="c1">C. <?php echo _("Our eyes have rods to sense color and cones to sense intensity."); ?></label></li>
							<li><input id="d1" type="radio" name="q1" value="D"><label for="d1">D. <?php echo _("Our eyes have cones to sense color and rods to sense intensity."); ?></label></li>
						</ul>
					</form>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Among people who wear glasses, people who are farsighted have very different lens shapes than people who are nearsighted. Which statement best accounts for this difference?"); ?></h2>
						<p><?php echo _("Select the statement below to choose answer."); ?></p>
					<form id="nl-form" class="nl-form">
						<select>
							<option value="A"><?php echo _("Farsighted people have eye diameters shorter than nearsighted people."); ?></option>
							<option value="B"><?php echo _("Farsighted people have eye diameters longer than nearsighted people."); ?></option>
							<option value="C"><?php echo _("Farsighted people have fewer rods than nearsighted people."); ?></option>
							<option value="D"><?php echo _("Farsighted people have more rods than nearsighted people."); ?></option>
						</select>

						<div class="nl-overlay"></div>   
					</form>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following statements is <span class='blink'>NOT</span> correct about how our eyes sense our surroundings."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. Among people who wear glasses, people who are farsighted have very different lens shapes than people who are nearsighted. Which statement best accounts for this difference?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Glasses are for eyes"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/nlform.js"></script>
	<script src="scripts/answer.js"></script>
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

		ans1 = '',
		ans2 = '',
		checkAnswer = 0,

		answered = 1;

		var nlform = new NLForm(document.getElementById('nl-form'));

		question1.find('input[type=radio]').on('click', function() {
			var me = $(this);

			if (me.val() == 'A') {
				answer1.find('.answer').html('A. <?php echo _("Visible light is part of the electromagnetic spectrum."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("This one is correct. Light is part of the electromagnetic spectrum."); ?></p>');
			}

			if (me.val() == 'B') {
				answer1.find('.answer').html('B. <?php echo _("Light enters the eye through the pupil."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Try again. Light does enter the eye through the pupil."); ?></p>');
			}

			if (me.val() == 'C') {
				answer1.find('.answer').html('C. <?php echo _("Our eyes have rods to sense color and cones to sense intensity."); ?>');
				answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Rods sense intensity and cones sense color."); ?></p>');
			}

			if (me.val() == 'D') {
				answer1.find('.answer').html('D. <?php echo _("Our eyes have cones to sense color and rods to sense intensity."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No... This is correct. Cones sense color and rods sense intensity."); ?></p>');
			}

			ans1 = me.val();
		});

		function save() {
			var select = question2.find('select').val();
			
			if (select == 'A') {
				answer2.find('.answer').html('<?php echo _("Farsighted people have eye diameters shorter than nearsighted people."); ?>');
				answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("You got it! This causes the image to be not properly focused on the retina."); ?></p>');
			}

			if (select == 'B') {
				answer2.find('.answer').html('<?php echo _("Farsighted people have eye diameters longer than nearsighted people."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. People with longer eye diameters are nearsighted."); ?></p>');
			}

			if (select == 'C') {
				answer2.find('.answer').html('<?php echo _("Farsighted people have fewer rods than nearsighted people."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Both nearsighted and farsighted people have about the same numbers of rods."); ?></p>');
			}

			if (select == 'D') {
				answer2.find('.answer').html('<?php echo _("Farsighted people have fewer rods than nearsighted people."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Incorrect. Both nearsighted and farsighted people have about the same numbers of rods."); ?></p>');
			}
			
			if (answered == 0) {
				saveAnswer('how-animals-respond-qc3-a', ans1);
				saveAnswer('how-animals-respond-qc3-b', select);
				answered = 1;
			}
		}

		check.on('click', function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				questions.fadeOut(function() { answers.fadeIn(); });
				check.fadeOut(function() { next.fadeIn(); });
				removeHash();
				addHash('#answer');
				save();
			}	
		});

		back.on('click', function() {
			if (questions.is(':visible')) {
				document.location.href = "8.php#screen4";
			} else {
				answers.fadeOut(function() { questions.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>
