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
		h1 { color: #d7a42e;  }
		h2 { color: #2f60a8; text-align: left; margin-bottom: 20px; }

		#question, #answer {
		    background: rgba(255,255,255,.7);
		    padding: 10px;
		    border-radius: 10px;
		    position: absolute;
		    margin: 10px;
		    width: 95.5%;
		}

		.wrap { border-left: 1px dashed #90ab2a; border-right: 1px dashed #90ab2a;overflow: hidden; }
		.bg { background-image: url(images/19/bg.jpg); }
		#buttons .next { display: none; }

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
		.ac-custom svg { position: absolute; width: 35px; height: 35px; top: 47%; margin-top: -17px; left: 4px; pointer-events: none; } 
		.ac-custom svg path { stroke: #963131; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }

		#answer { display: none; }
		#answer .feedback { margin-top: 20px; }
		#answer .feedback img { position: relative; top: 5px; }
		#answer p { margin-bottom: 20px }
		#answer .answer { text-align: center; }
		#answer .answer p img { margin-bottom: 20px; }
		#answer span { display: block; }
		#answer .answer img { display: inline-block; }
	
		html[dir="rtl"] .ac-custom label { padding:0 60px 0 0; }
		html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
		html[dir="rtl"] .ac-custom svg {right:4px;}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			h1 { padding-top: 15px; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#question, #answer { margin-top: 45px; }
		}
		h1 { margin-top: -10px; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("Which of the following best describes the energy transformations involved in walking to the cafeteria for lunch, eating lunch, and walking back to class?"); ?></h2>

				<section>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="a" name="q" type="radio"><label for="a">A. <?php echo _("mechanical"); ?> &#8594; <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?></label></li>
							<li><input id="b" name="q" type="radio"><label for="b">B. <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?> &#8594; <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?></label></li>
							<li><input id="c" name="q" type="radio"><label for="c">C. <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?> &amp; <?php echo _("heat"); ?> &#8594; <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?> &amp; <?php echo _("heat"); ?></label></li>
						<ul>
					</form>
				</section>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #6 - How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer"></div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Riding the school bus..."); ?></strong></section></section>

	<?php include_once "setlocale.php"; ?>	

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/hexaflip.js"></script>
	<script src="scripts/answer.js"></script>
	<script src="scripts/global.js"></script>

	<script>
		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),

		question = $('#question'),
		answer = $('#answer'),

		a = $('#a'),
		b = $('#b'),
		c = $('#c'),
		d = $('#d'),

		answered = 1;

		function save() {
			var ans = '';

			if (a.is(':checked')) {
				ans = 'A';
				answer.find('.answer').html('<p><span>A. <?php echo _("mechanical"); ?> &#8594; <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?></span></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("Nope! What is the source of energy of the mechanical energy?"); ?></p>');
			}

			if (b.is(':checked')) {
				ans = 'B';
				answer.find('.answer').html('<p><span>B. <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?> &#8594; <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?></span></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("Not quite. Food provides the chemical energy to enable you to walk to the cafeteria and the energy to walk back to class, but what energy is produced in all energy changes?"); ?></p>');
			}

			if (c.is(':checked')) {
				ans = 'C';
				answer.find('.answer').html('<p><span>C. <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?> &amp; <?php echo _("heat"); ?> &#8594; <?php echo _("chemical"); ?> &#8594; <?php echo _("mechanical"); ?> &amp; <?php echo _("heat"); ?></span></p>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"> <?php echo _("Correct! Food provides the chemical energy to enable you to walk to the cafeteria and the energy to walk back to class and with every change of energy heat is also produced."); ?></p>');
			}

			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qq6-a', ans);
				answered = 1;
			}
		}

		check.on('click', function() {
			var checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert('<?php echo _("Please select your answer."); ?>');
			} else {
				question.fadeOut(function() {
					save();
					answer.fadeIn();
					window.location.hash = '#answer';
				});
				check.fadeOut(function() { next.fadeIn(); });
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "18.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); }); 
				next.fadeOut(function() { check.fadeIn(); });
			}
		});
	</script>
</body>
</html>
