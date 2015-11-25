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
		#question, #answer {
		    background: rgba(255,255,255,.7);
		    padding: 10px;
		    border-radius: 10px;
		    position: absolute;
		    margin: 10px;
		    width: 95.5%;
		}
		.nl-form { width: 100%; margin: 0.3em auto 0 auto; font-size: 24px; line-height: 1.5; }
		.nl-form ul { list-style: none;  margin: 0; padding: 0; }
		.nl-form input, .nl-form select, .nl-form button { border: none; background: transparent; font-family: inherit; font-size: inherit; color: inherit; font-weight: inherit; line-height: inherit; display: inline-block; padding: 0; margin: 0; -webkit-appearance: none; -moz-appearance: none; }
		.nl-form input:focus { outline: none; }
		.nl-field { display: inline-block; position: relative; }
		.nl-field.nl-field-open { z-index: 10000; }
		.nl-field-toggle, .nl-form input, .nl-form select  { line-height: inherit; display: inline-block; color: #b14943; cursor: pointer; border-bottom: 1px dashed #b14943; }
		.nl-field ul {
			position: absolute; visibility: hidden; background: #76C3BD; left: -0.5em; top: 50%; font-size: 24px; padding: 10px 0; opacity: 0; -webkit-transform: translateY(-40%) scale(0.9); -moz-transform: translateY(-40%) scale(0.9); transform: translateY(-40%) scale(0.9); -webkit-transition: visibility 0s 0.3s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0.3s, opacity 0.3s, transform 0.3s; }
		.nl-field.nl-field-open ul { visibility: visible; opacity: 1; -webkit-transform: translateY(-50%) scale(1); -moz-transform: translateY(-50%) scale(1); transform: translateY(-50%) scale(1); -webkit-transition: visibility 0s 0s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0s, opacity 0.3s, transform 0.3s; }
		.nl-field ul li { color: #fff; position: relative; }
		.nl-dd ul li { padding: 0 20px; cursor: pointer; white-space: nowrap; }
		.nl-dd ul li.nl-dd-checked { color: #478982; }
		.no-touch .nl-dd ul li:hover { background: rgba(0,0,0,0.05); }
		.no-touch .nl-dd ul li:hover:active { color: #478982; }
		.nl-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); opacity: 0; z-index: 9999; visibility: hidden; -webkit-transition: visibility 0s 0.3s, opacity 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s; transition: visibility 0s 0.3s, opacity 0.3s; }
		.nl-field.nl-field-open ~ .nl-overlay { opacity: 1; visibility: visible; -webkit-transition-delay: 0s; -moz-transition-delay: 0s; transition-delay: 0s; }

		h1 { color: #d7a42e;  }
		h2 { color: #2f60a8; text-align: left; margin-bottom: 20px; }

		.wrap { border-left: 1px dashed #90ab2a; border-right: 1px dashed #90ab2a;overflow: hidden; }
		.bg { background-image: url(images/16/bg.jpg); }

		#buttons .next { display: none; }

		#answer { display: none; text-align: center; }
		#answer p img { position: relative; top: 5px; }
		#answer p span { color: #832474; }
		#answer img { display: inline-block; }

		#feedback { margin-top: 20px; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			h1 { padding-top: 15px; }
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
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Complete the following examples of changing forms of energy by selecting the correct term from the dropdown menu."); ?></h2>

				<form id="nl-form" class="nl-form">
					<p id="a">
						<?php echo _("An automobile engine changes"); ?>
						
						<select class="a">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>
						
						<?php echo _("energy of carbon fuels to"); ?>	

						<select class="b">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("and"); ?> 

						<select class="c">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("energy"); ?>.
					</p>

					<p id="b">
						<?php echo _("A tree changes"); ?>
						
						<select class="a">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>
						
						<?php echo _("energy to"); ?>

						<select class="b">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("energy"); ?>.
					</p>

					<p id="c">
						<?php echo _("Hammering a nail changes"); ?>
						
						<select class="a">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>
						
						<?php echo _("energy to"); ?>

						<select class="b">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("energy"); ?>.
					</p>

					<!-- <p id="d">
						<?php echo _("A thermonuclear reaction changes"); ?>
						
						<select class="a">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="chemical"><?php echo _("chemical"); ?></option>
							<option value="mechanical"><?php echo _("mechanical"); ?></option>
							<option value="electrical"><?php echo _("electrical"); ?></option>
							<option value="heat"><?php echo _("heat"); ?></option>
							<option value="radiant"><?php echo _("radiant"); ?></option>
							<option value="nuclear"><?php echo _("nuclear"); ?></option>
						</select>
						
						<?php echo _("energy into"); ?>
					
						<select class="b">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="chemical"><?php echo _("chemical"); ?></option>
							<option value="mechanical"><?php echo _("mechanical"); ?></option>
							<option value="electrical"><?php echo _("electrical"); ?></option>
							<option value="heat"><?php echo _("heat"); ?></option>
							<option value="radiant"><?php echo _("radiant"); ?></option>
							<option value="nuclear"><?php echo _("nuclear"); ?></option>
						</select>
					
						<?php echo _("energy"); ?>.
					</p> -->

					<p id="e">
						<?php echo _("An electric mixer changes"); ?>
						
						<select class="a">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>
						
						<?php echo _("energy to"); ?>

						<select class="b">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("and"); ?>

						<select class="c">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("energy"); ?>.
					</p>

					<p id="f">
						<?php echo _("A lamp changes"); ?>
						
						<select class="a">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>
						
						<?php echo _("energy to"); ?>

						<select class="b">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("and"); ?>
	
						<select class="c">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("chemical"); ?></option>
							<option value="B"><?php echo _("mechanical"); ?></option>
							<option value="C"><?php echo _("electrical"); ?></option>
							<option value="D"><?php echo _("heat"); ?></option>
							<option value="E"><?php echo _("radiant"); ?></option>
							<option value="F"><?php echo _("nuclear"); ?></option>
						</select>

						<?php echo _("energy"); ?>.
					</p>
					
					<div class="nl-overlay"></div>
				</form>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #3 - How did I do?"); ?></h1>
				<p class="center"><?php echo _("You answered..."); ?></p>
				
				<p id="a">
					<span class="feedback"></span>
					<?php echo _("An automobile engine changes"); ?>
					<span class="a"></span>
					<?php echo _("energy of carbon fuels to"); ?>
					<span class="b"></span>
					<?php echo _("and"); ?>
					<span class="c"></span>
					<?php echo _("energy"); ?>.
				</p>

				<p id="b">
					<span class="feedback"></span>
					<?php echo _("A tree changes"); ?>
					<span class="a"></span>
					<?php echo _("energy to"); ?>
					<span class="b"></span>
					<?php echo _("energy"); ?>.
				</p>

				<p id="c">
					<span class="feedback"></span>
					<?php echo _("Hammering a nail changes"); ?>
					<span class="a"></span>
					<?php echo _("energy to"); ?>
					<span class="b"></span>
					<?php echo _("energy"); ?>.
				</p>

				<!-- <p id="d">
					<span class="feedback"></span>
					<?php echo _("A thermonuclear reaction changes"); ?>
					<span class="a"></span>
					<?php echo _("energy into"); ?>
					<span class="b"></span>
					<?php echo _("energy"); ?>.
				</p> -->

				<p id="e">
					<span class="feedback"></span>
					<?php echo _("An electric mixer changes"); ?>
					<span class="a"></span>
					<?php echo _("energy to"); ?>
					<span class="b"></span>
					<?php echo _("and"); ?>
					<span class="c"></span>
					<?php echo _("energy"); ?>.
				</p>

				<p id="f">
					<span class="feedback"></span>
					<?php echo _("A lamp changes"); ?>
					<span class="a"></span>
					<?php echo _("energy to"); ?>
					<span class="b"></span>
					<?php echo _("and"); ?>
					<span class="c"></span>
					<?php echo _("energy"); ?>.
				</p>

				<div id="feedback"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Fill in the blanks..."); ?></strong></section></section>

	<?php include_once "setlocale.php"; ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/answer.js"></script>
	<script src="scripts/nlform.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var nlform = new NLForm(document.getElementById('nl-form'));

		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),

		question = $('#question'),
		answer = $('#answer'),

		qa = $('#question').find('#a'),
		qb = $('#question').find('#b'),
		qc = $('#question').find('#c'),
		qd = $('#question').find('#d'),
		qe = $('#question').find('#e'),
		qf = $('#question').find('#f'),

		aa = $('#answer').find('#a'),
		ab = $('#answer').find('#b'),
		ac = $('#answer').find('#c'),
		ad = $('#answer').find('#d'),
		ae = $('#answer').find('#e'),
		af = $('#answer').find('#f'),

		answered = 1;

		function save() {
			var a1, a2, a3, a4, a5, a6;

			aa.find('.a').text(qa.find('.a option:selected').text());
			aa.find('.b').text(qa.find('.b option:selected').text());
			aa.find('.c').text(qa.find('.c option:selected').text());

			ab.find('.a').text(qb.find('.a option:selected').text());
			ab.find('.b').text(qb.find('.b option:selected').text());

			ac.find('.a').text(qc.find('.a option:selected').text());
			ac.find('.b').text(qc.find('.b option:selected').text());

			ad.find('.a').text(qd.find('.a option:selected').text());
			ad.find('.b').text(qd.find('.b option:selected').text());
			ad.find('.c').text(qd.find('.c option:selected').text());

			ae.find('.a').text(qe.find('.a option:selected').text());
			ae.find('.b').text(qe.find('.b option:selected').text());
			ae.find('.c').text(qe.find('.c option:selected').text());

			af.find('.a').text(qf.find('.a option:selected').text());
			af.find('.b').text(qf.find('.b option:selected').text());
			af.find('.c').text(qf.find('.c option:selected').text());

			a1 = qa.find('.a').val() + ',' + qa.find('.b').val() + ',' + qa.find('.c').val();
			a2 = qb.find('.a').val() + ',' + qb.find('.b').val();
			a3 = qc.find('.a').val() + ',' + qc.find('.b').val();
			//a4 = qd.find('.a').val() + ',' + qd.find('.b').val() + ',' + qd.find('.c').val();
			a4 = qe.find('.a').val() + ',' + qe.find('.b').val() + ',' + qe.find('.c').val();
			a5 = qf.find('.a').val() + ',' + qf.find('.b').val() + ',' + qf.find('.c').val();

			//A
			
			if (qa.find('.a').val() == 'A' &&
				qa.find('.b').val() == 'B' &&
				qa.find('.c').val() == 'D') {
				aa.find('.feedback').html('<img src="images/others/correct.png">');
			} else if (qa.find('.a').val() == 'A' &&
				qa.find('.b').val() == 'D' &&
				qa.find('.c').val() == 'B') {
				aa.find('.feedback').html('<img src="images/others/correct.png">');
			}else {
				aa.find('.feedback').html('<img src="images/others/wrong.png">');
			}

			//B

			if (qb.find('.a').val() == 'E' &&
				qb.find('.b').val() == 'A') {
				ab.find('.feedback').html('<img src="images/others/correct.png">');
			} else {
				ab.find('.feedback').html('<img src="images/others/wrong.png">');
			}

			//C

			if (qc.find('.a').val() == 'B' &&
				qc.find('.b').val() == 'D') {
				ac.find('.feedback').html('<img src="images/others/correct.png">');
			} else {
				ac.find('.feedback').html('<img src="images/others/wrong.png">');
			}

			//D

			/*if (qd.find('.a').val() == 'heat' &&
				qd.find('.b').val() == 'mechanical') {
				ad.find('.feedback').html('<img src="images/others/correct.png">');
			} else if (qd.find('.a').val() == 'heat' &&
				qd.find('.b').val() == 'mechanical') {
				ad.find('.feedback').html('<img src="images/others/correct.png">');
			} else {
				ad.find('.feedback').html('<img src="images/others/wrong.png">');
			}*/

			//E

			if (qe.find('.a').val() == 'C' &&
				qe.find('.b').val() == 'B' &&
				qe.find('.c').val() == 'D') {
				ae.find('.feedback').html('<img src="images/others/correct.png">');
			} else if (qe.find('.a').val() == 'C' &&
				qe.find('.b').val() == 'D' &&
				qe.find('.c').val() == 'B') {
				ae.find('.feedback').html('<img src="images/others/correct.png">');
			} else {
				ae.find('.feedback').html('<img src="images/others/wrong.png">');
			}

			//F

			if (qf.find('.a').val() == 'C' &&
				qf.find('.b').val() == 'E' &&
				qf.find('.c').val() == 'D') {
				af.find('.feedback').html('<img src="images/others/correct.png">');
			} else if (qf.find('.a').val() == 'C' &&
						qf.find('.b').val() == 'D' &&
						qf.find('.c').val() == 'E') {
				af.find('.feedback').html('<img src="images/others/correct.png">');
			} else {
				af.find('.feedback').html('<img src="images/others/wrong.png">');
			}

			//Feedback

			if ((qa.find('.a').val() == 'A' && qa.find('.b').val() == 'B' && qa.find('.c').val() == 'D') || 
				(qa.find('.a').val() == 'A' && qa.find('.b').val() == 'D' && qa.find('.c').val() == 'B') &&
				(qb.find('.a').val() == 'E' && qb.find('.b').val() == 'A') &&
				(qc.find('.a').val() == 'B' && qc.find('.b').val() == 'D') &&
				//(qd.find('.a').val() == 'heat' && qd.find('.b').val() == 'mechanical') && 
				(qe.find('.a').val() == 'C' && qe.find('.b').val() == 'B' && qe.find('.c').val() == 'D') ||
				(qe.find('.a').val() == 'C' && qe.find('.b').val() == 'D' && qe.find('.c').val() == 'B') &&
				(qf.find('.a').val() == 'C' && qf.find('.b').val() == 'E' && qf.find('.c').val() == 'D') &&
				(qf.find('.a').val() == 'C' && qf.find('.b').val() == 'D' && qf.find('.c').val() == 'E')) {
					$('#feedback').html('<p class="center green"><?php echo _("Good job! Energy can be changed from one form to another. These changes are happening all the time. Most machines convert one form of energy to a different one somehow. Even without machines, energy changes form. A person opening a door uses chemical energy stored in muscle tissues. When you go down a slide, your potential energy is changed into kinetic energy."); ?></p>');
				} else {
					$('#feedback').html('<p class="center red"><?php echo _("Not quite. Energy can be changed from one form to another. These changes are happening all the time. Most machines convert one form of energy to a different one somehow. Even without machines, energy changes form. A person opening a door uses chemical energy stored in muscle tissues. When you go down a slide, your potential energy is changed into kinetic energy."); ?></p>');
				}

			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qq3-a', a1);
				saveAnswer('energy-and-its-forms-qq3-b', a2);
				saveAnswer('energy-and-its-forms-qq3-c', a3);
				saveAnswer('energy-and-its-forms-qq3-d', a4);
				saveAnswer('energy-and-its-forms-qq3-e', a5);
				saveAnswer('energy-and-its-forms-qq3-f', a6);
				answered = 1;
			}
		}

		check.on('click', function() {
			var noAnswer = false;

			$('#nl-form').find('select').each(function() {
				if ($(this).val() == '') noAnswer = true;
			});

			if (noAnswer) {
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				question.fadeOut(function() {
					window.location.hash = '#answer';
					answer.fadeIn();
				});
				check.fadeOut(function() { next.fadeIn(); });
				save();
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "15.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
			}
		});
	</script>
</body>
</html>
