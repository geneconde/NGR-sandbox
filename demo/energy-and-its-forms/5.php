<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES"){ ?> dir="es" <?php } ?>>
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
		#questions, #answers {
		    background: rgba(255,255,255,.7);
		    padding: 10px;
		    border-radius: 10px;
		    position: absolute;
		    margin: 10px;
		    width: 95.5%;
		}
		#question1 h2 {margin-top:0px;}
		.wrap { overflow: hidden; }
		.ac-custom { padding: 0 24px; max-width: 900px; margin: 24px auto 0; }
		.ac-custom h2 { font-size: 3em; font-weight: 300; padding: 0 0 0.5em; margin: 0 0 30px; }
		.ac-custom ul, .ac-custom ol, #question1 ul { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
		.ac-custom li, #question1 li { margin: 0 auto; padding: 10px 0; position: relative; }
		.ac-custom label, #question1 label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 60px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
		.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before, #question1 input[type="radio"], #question1 label::before{ width: 35px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }
		.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], #question1 input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
		.ac-custom label::before { content: ''; border: 4px solid #314396; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
		.ac-radio label::before { border-radius: 50%; } 
		.ac-custom input[type="checkbox"]:checked + label,
		.ac-custom input[type="radio"]:checked + label { color: #000; } 
		.ac-custom input[type="checkbox"]:checked + label::before, .ac-custom input[type="radio"]:checked + label::before { opacity: 0.8; }
		.ac-custom svg { position: absolute; width: 30px; height: 30px; top: 51%; margin-top: -20px; left: 6px; pointer-events: none; }
		.ac-custom svg path { stroke: #963131; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }
		#question1 label::before { content: ''; background: url(images/5/cart.png) left top no-repeat; width: 39px; height: 45px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
		#question1 input[type="radio"]:checked + label { color: #000; } 
		#question1 input[type="radio"]:checked + label::before { background-position: right top; }
		#question2 { margin-top: 20px; }
		#question2 form { margin-top: 20px; }
		#question2 ul { overflow: hidden; }
		#question2 .left { float: left; margin-right: 40px; }
		#question2 .right { float: left; }
		h1 { color: #d7a42e; }
		h2 { color: #2f60a8; text-align: left; padding: 0 0 0 10px; }
		.wrap { border-left: 1px dashed #90ab2a; border-right: 1px dashed #90ab2a; }
		.bg { background-image: url(images/5/bg.jpg); }
		#buttons .next { display: none; }
		.feedback img { position: relative; top: 7px; }
		#answers { display: none; }
		#answer2 { margin-top: 30px; }

		<?php if ($language == 'es_ES') : ?>
			#questions label { font-size: 21px !important; }
			#questions li { padding: 14px 0 !important; }
			.ac-custom label, #question1 label { padding:0 0 0 60px; }
		<?php endif; ?>

		html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before, #question1 input[type="radio"], #question1 label::before { right:0; }
		html[dir="rtl"] .ac-custom label { padding:0 60px 0 0; }
		html[dir="rtl"] #question1 label { padding:0 60px 0 0; }
		html[dir="rtl"] .ac-custom svg { right:6px; }
		html[dir="rtl"] .red { width:94%; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			h1 { padding-top: 15px; }
			html[dir="es"] #question1 ul { max-width: 100%; }
			html[dir="es"] #question1 ul li { padding: 5px 0 !important; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#questions, #answers { margin-top: 45px; }
		}
		@media only screen and (max-width: 900px) {
			li { line-height: 20px; }
			li label { font-size: 20px !important; }
			#question2 .ac-custom input[type="radio"], #question2 .ac-custom label::before { margin-top: -20px; }
			#question2 .ac-custom input[type="radio"], #question2 .ac-custom label::before { width: 31px; height: 31px; }
			#question2 .ac-custom svg { width: 25px; height: 25px; margin-top: -15px; }
			#answers p { line-height: 25px; }
		}
		@media only screen and (max-width: 740px) {
			li label { font-size: 15px !important; }
			h1 { font-size: 25px; }
			h2 { font-size: 20px; }
		}
		h1 { margin-top: -10px; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
			<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Which of the following would involve doing more work-require more energy to do?"); ?></h2>

					<ul>
						<li><input id="a1" name="q1" type="radio"><label for="a1">A. <?php echo _("Pull your baby brother or baby sister across the street in a wagon."); ?></label></li>
						<li><input id="b1" name="q1" type="radio"><label for="b1">B. <?php echo _("Pull your big brother or equally big sister across the street in a wagon."); ?></label></li>
						<li><input id="c1" name="q1" type="radio"><label for="c1">C. <?php echo _("Pull your baby brother or baby sister across the lawn in a wagon."); ?></label></li>
						<li><input id="d1" name="q1" type="radio"><label for="d1">D. <?php echo _("Pull your big brother or equally big sister across the lawn in a wagon."); ?></label></li>
					</ul>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. A fifth grade student has a container for making frozen juice bars. He pours juice into the container and then puts the container into the freezer for 12 hours. What happens to the juice molecules in the container during these 12 hours?"); ?></h2>
					
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ul>
								<div class="left">
									<li><input id="a2" name="q2" type="radio"><label for="a2">A. <?php echo _("They lose kinetic energy."); ?></label></li>
									<li><input id="b2" name="q2" type="radio"><label for="b2">B. <?php echo _("They lose chemical energy."); ?></label></li>
								</div>
								<div class="right">
									<li><input id="c2" name="q2" type="radio"><label for="c2">C. <?php echo _("They gain electrical energy."); ?></label></li>
									<li><input id="d2" name="q2" type="radio"><label for="d2">D. <?php echo _("They gain gravitational energy."); ?></label></li>
								</div>
							</ul>
						</form>
					</section>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1 - How did I do?"); ?></h1>

				<div id="answer1">
					<h2 id="q1"><?php echo _("Question A. Which of the following would involve doing more work-require more energy to do?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. A fifth grade student has a container for making frozen juice bars. He pours juice into the container and then puts the container into the freezer for 12 hours. What happens to the juice molecules in the container during these 12 hours?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
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

		answered = 1;

		question1.find('input[type=radio]').on('click', function() {
			var radio = $(this);

			if (radio.attr('id') == 'a1') {
				answer1.find('.answer').html('A. <?php echo _("Pull your baby brother or baby sister across the street in a wagon."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("Probably not because of the weight and distances involved."); ?></p>');
				ans1 = 'A';
			}

			if (radio.attr('id') == 'b1') {
				answer1.find('.answer').html('B. <?php echo _("Pull your big brother or equally big sister across the street in a wagon."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("A better choice than (a), but not as good as (d) because it would take more energy to move across rough grass than across a smooth street."); ?></p>');
				ans1 = 'B';
			}

			if (radio.attr('id') == 'c1') {
				answer1.find('.answer').html('C. <?php echo _("Pull your baby brother or baby sister across the lawn in a wagon."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("A possibility, but not as good as (d) because your baby brother or baby sister would not weigh as much as your big brother."); ?></p>');
				ans1 = 'C';
			}

			if (radio.attr('id') == 'd1') {
				answer1.find('.answer').html('D. <?php echo _("Pull your big brother or equally big sister across the lawn in a wagon."); ?>');
				answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"> <?php echo _("The best choice because the brother weighs the most and it is harder to push something across the rough grass than across the smoother street."); ?></p>');
				ans1 = 'D';
			}
		});

		question2.find('input[type=radio]').on('click', function() {
			var radio = $(this);

			if (radio.attr('id') == 'a2') {
				answer2.find('.answer').html('A. <?php echo _("They lose kinetic energy."); ?>');
				answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"> <?php echo _("Correct! The frozen molecules have less movement, losing kinetic energy."); ?></p>');
				ans2 = 'A';
			}

			if (radio.attr('id') == 'b2') {
				answer2.find('.answer').html('B. <?php echo _("They lose chemical energy."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("No, the lack of movement does not change the chemical energy of the molecules, it changes their kinetic energy."); ?></p>');
				ans2 = 'B';
			}

			if (radio.attr('id') == 'c2') {
				answer2.find('.answer').html('C. <?php echo _("They gain electrical energy."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("No, the lack of movement does not change the electrical energy of the molecules, it changes their kinetic energy."); ?></p>');
				ans2 = 'C';
			}

			if (radio.attr('id') == 'd2') {
				answer2.find('.answer').html('D. <?php echo _("They gain gravitational energy."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("No, the lack of movement does not change the gravitational energy of the molecules, it changes their kinetic energy."); ?></p>');
				ans2 = 'D';
			}
		});

		function save() {
			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qc1-a', ans1);
				saveAnswer('energy-and-its-forms-qc1-b', ans2);
				answered = 1;
			}
		}

		check.on('click', function() {
			var checkAnswer = $('input:radio:checked').length;
			
			if (checkAnswer < 2) {
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				questions.fadeOut(function() {
					answers.fadeIn();
					window.location.hash = '#answer';
				});
				check.fadeOut(function() { next.fadeIn(); });
				save();
			}	
		});

		back.on('click', function() {
			if (questions.is(':visible')) {
				document.location.href = "4.php#screen3";
			} else {
				answers.fadeOut(function() { questions.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
			}
		});
	</script>
</body>
</html>
