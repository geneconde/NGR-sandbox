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
		.bg { background-image: url(images/17/bg.jpg); }

		#buttons .next { display: none; }

		#question table { display: table; border-collapse: separate; border-spacing: 2px; margin: 40px auto 0; table-layout: fixed; word-break: break-all; text-align: center; }
		#question table tr { display: table-row; }
		#question table th, #question table td { -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
		#question table th { background-color: #a5bf3a; color: #fff; margin: 2px; }
		#question table td { background-color: #a5bf3a; margin: 4px; padding: 0 15px; }
		#question table td.first { padding: 0 5px; }
		#question table td img { display: block; margin: 5px 0 0 5px; cursor: pointer; }
		#question table tr { margin: 20px; }

		#answer { display: none; text-align: center; }
		#answer p { margin-bottom: 20px; }
		#answer p span { background-color: #a5bf3a; margin: 0; padding: 0 15px; -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
		#answer .feedback img { position: relative; top: 5px; }

		#answer img { display: inline-block; }
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
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("Which exchange of energy best describes what happens when you eat your school lunch and then play tag at recess after lunch?"); ?></h2>

				<table>
					<tr>
						<th style="background-color: transparent;">&nbsp;</th>
						<th><?php echo _("Food"); ?></th>
						<th><?php echo _("Body"); ?></th>
						<th><?php echo _("Tag"); ?></th>
					</tr>
					<tr>
						<td class="first"><img src="images/17/off.png" id="a"></td>
						<td><?php echo _("Chemical Energy"); ?></td>
						<td><?php echo _("Heat Energy"); ?></td>
						<td><?php echo _("Light Energy"); ?></td>
					</tr>
					<tr>
						<td class="first"><img src="images/17/off.png" id="b"></td>
						<td><?php echo _("Kinetic Energy"); ?></td>
						<td><?php echo _("Sound Energy"); ?></td>
						<td><?php echo _("Mechanical Energy"); ?></td>
					</tr>
					<tr>
						<td class="first"><img src="images/17/off.png" id="c"></td>
						<td><?php echo _("Chemical Energy"); ?></td>
						<td><?php echo _("Heat Energy"); ?></td>
						<td><?php echo _("Mechanical Energy"); ?></td>
					</tr>
					<tr>
						<td class="first"><img src="images/17/off.png" id="d"></td>
						<td><?php echo _("Chemical Energy"); ?></td>
						<td><?php echo _("Light Energy"); ?></td>
						<td><?php echo _("Sound Energy"); ?></td>
					</tr>
				</table>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #4 - How did I do?"); ?></h1>
				<h2><?php echo _("Which exchange of energy best describes what happens when you eat your school lunch and then play tag at recess after lunch?"); ?></h2>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer"></div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Recess time!"); ?></strong></section></section>

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

		a = $('#a'),
		b = $('#b'),
		c = $('#c'),
		d = $('#d'),

		answered = 1;

		question.find('table').find('img').on('click', function() {
			var img = $(this).attr('id');

			if (img == 'a') {
				a.attr('src', 'images/17/on.png');
				b.attr('src', 'images/17/off.png');
				c.attr('src', 'images/17/off.png');
				d.attr('src', 'images/17/off.png');
			} else if (img == 'b') {
				a.attr('src', 'images/17/off.png');
				b.attr('src', 'images/17/on.png');
				c.attr('src', 'images/17/off.png');
				d.attr('src', 'images/17/off.png');
			} else if (img == 'c') {
				a.attr('src', 'images/17/off.png');
				b.attr('src', 'images/17/off.png');
				c.attr('src', 'images/17/on.png');
				d.attr('src', 'images/17/off.png');
			} else if (img == 'd') {
				a.attr('src', 'images/17/off.png');
				b.attr('src', 'images/17/off.png');
				c.attr('src', 'images/17/off.png');
				d.attr('src', 'images/17/on.png');
			}
		});

		function save() {
			var ans;

			if (a.attr('src') == 'images/17/on.png') {
				ans = 'A';
				answer.find('.answer').html('<p><span><?php echo _("Chemical Energy"); ?></span> <span><?php echo _("Heat Energy"); ?></span> <span><?php echo _("Light Energy"); ?></span></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("No, the chemical energy of the food is released when we digest it and is transformed into heat energy in our bodies. Now we need energy to move around and mechanical energy (not light energy) is all the energy we have because of our motion and position."); ?></p>');
			} else if (b.attr('src') == 'images/17/on.png') {
				ans = 'B';
				answer.find('.answer').html('<p><span><?php echo _("Kinetic Energy"); ?></span> <span><?php echo _("Sound Energy"); ?></span> <span><?php echo _("Mechanical Energy"); ?></span></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("No, the chemical (not kinetic) energy of the food is released when we digest it and is transformed into heat (not sound) energy in our bodies. Now we need energy to move around and mechanical energy is all the energy we have because of our motion and position."); ?></p>');
			} else if (c.attr('src') == 'images/17/on.png') {
				ans = 'C';
				answer.find('.answer').html('<p><span><?php echo _("Chemical Energy"); ?></span> <span><?php echo _("Heat Energy"); ?></span> <span><?php echo _("Mechanical Energy"); ?></span></p>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"> <?php echo _("Correct! The chemical energy of the food is released when we digest it and is transformed into energy to heat and move our bodies. Now we need energy to move around and mechanical energy is all the energy we have because of our motion and position."); ?></p>');
			} else if (d.attr('src') == 'images/17/on.png') {
				ans = 'D';
				answer.find('.answer').html('<p><span><?php echo _("Chemical Energy"); ?></span> <span><?php echo _("Light Energy"); ?></span> <span><?php echo _("Sound Energy"); ?></span></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("No, the chemical energy of the food is released when we digest it and is transformed into heat (not light) energy in our bodies. Now we need energy to move around and mechanical energy (not sound) is all the energy we have because of our motion and position."); ?></p>');
			}

			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qq4-a', ans);
				answered = 1;
			}
		}

		check.on('click', function() {
			var checkAnswer = $('img[src="images/17/on.png"]').length;

			if (checkAnswer == 0) {
				alert('<?php echo _("Please select your answer."); ?>');
			} else {
				question.fadeOut(function() {
					save();
					answer.fadeIn();
					window.location.hash = '#answer';
				});
				check.fadeOut(function() { next.fadeIn(); });
				removeHash();
				addHash('#answer');
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "16.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); }); 
				removeHash();
			}
		});
	</script>
</body>
</html>
