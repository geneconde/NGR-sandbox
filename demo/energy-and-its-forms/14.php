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
		.wrap { border-left: 1px dashed #90ab2a; border-right: 1px dashed #90ab2a; overflow: hidden;}
		.bg { background-image: url(images/14/bg.jpg); }

		#buttons .next { display: none; }

		#question ul { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; } 
		#question li { margin: 0 auto; padding: 5px 0; position: relative; }
		#question label { display: inline-block; position: relative; font-size: 45px; padding: 0 0 0 40px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; } 
		#question input[type="radio"], #question label::before{ width: 30px; height: 30px; top: 50%; left: 0; margin-top: -15px; position: absolute; cursor: pointer; }
		#question input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; } 
		#question label::before { content: ''; background: url(images/14/14.png) left top no-repeat; width: 30px; height: 30px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
		#question input[type="radio"]:checked + label { color: #000; }
		#question input[type="radio"]:checked + label::before { background-position: left bottom; }
		#question section { overflow: hidden; }
		#question section ul { float: left; width: 280px; margin-left: 100px; }
		#question section img { float: right; width: 340px; margin: 10px 120px 0 0; }

		#answer { display: none; text-align: center; }
		#answer p { margin-bottom: 20px; }
		#answer .feedback img { position: relative; top: 5px; }
		#answer img { display: inline-block; }

		<?php if ($language == 'es_ES') : ?>
			#question label { font-size: 34px !important; }
		<?php endif; ?>
		
		html[dir="rtl"] #question section ul { float:right;margin:0 100px 0 0; }
		html[dir="rtl"] #question section img { margin:10px 0 0 120px; }
		html[dir="rtl"] #question label { padding:0 40px 0 0; }
		html[dir="rtl"] #question input[type="radio"], #question label::before { right:0; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			h1 { padding-top: 15px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			html[dir="rtl"] #question section img { margin: 0; float: none; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#question, #answer { margin-top: 45px; }
			#question section img { width: 35%; }
			#question section ul { width: 35%; margin-left: 10%; }
		}
		h1 { margin-top: -10px; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<h2><?php echo _("What kind of energy does the bob have as the person is holding it (as shown in the drawing)?"); ?></h2>

				<section>
					<ul>						
						<li><input id="a" name="q" type="radio"><label for="a"><?php echo _("Kinetic"); ?></label></li>
						<li><input id="b" name="q" type="radio"><label for="b"><?php echo _("Radiant"); ?></label></li>
						<li><input id="c" name="q" type="radio"><label for="c"><?php echo _("Electrical"); ?></label></li>
						<li><input id="d" name="q" type="radio"><label for="d"><?php echo _("Potential"); ?></label></li>
					</ul>

					<img src="images/14/pendulum.png">
				</section>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #1 - How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer"></div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is..."); ?></strong></section></section>

	<?php include_once "setlocale.php"; ?>

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
		question = $('#question'),
		answer = $('#answer'),
		answered = 1;

		question.find('input[type=radio]').on('click', function() {
			var radio = $(this);

			if (radio.attr('id') == 'a') {
				answer.find('.answer').html('<img src="images/14/pendulum.png"><p><?php echo _("Kinetic"); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, kinetic energy is the energy of a moving object. Potential energy is stored energy of objects not moving."); ?></p>');
			}

			if (radio.attr('id') == 'b') {
				answer.find('.answer').html('<img src="images/14/pendulum.png"><p><?php echo _("Radiant"); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, radiant energy is another name for light energy."); ?></p>');
			}

			if (radio.attr('id') == 'c') {
				answer.find('.answer').html('<img src="images/14/pendulum.png"><p><?php echo _("Electrical"); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not the best answer. The position of the ball on the string gives the ball potential energy."); ?></p>');
			}

			if (radio.attr('id') == 'd') {
				answer.find('.answer').html('<img src="images/14/pendulum.png"><p><?php echo _("Potential"); ?></p>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Objects that are not moving can have stored energy called potential energy."); ?></p>');
			}
		});

		function save() {
			var answer,
			a = $('#a'),
			b = $('#b'),
			c = $('#c'),
			d = $('#d');

			if (a.is(':checked')) answer = 'A';
			if (b.is(':checked')) answer = 'B';
			if (c.is(':checked')) answer = 'C';
			if (d.is(':checked')) answer = 'D';

			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qq1-a', answer);
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
					// $('.bg').css('margin-top', '10px');
					window.location.hash = '#answer';
				});
				check.fadeOut(function() { next.fadeIn(); });
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "13.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
			}
		});
	</script>
</body>
</html>
