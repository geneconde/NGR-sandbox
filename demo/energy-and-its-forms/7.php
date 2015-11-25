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
	h1 { margin-left: 1%; color: #d7a42e; }
	h2 { color: #2f60a8; text-align: left; padding: 0 10px 0 10px; }
	#questions, #answers {
	    background: rgba(255,255,255,.7);
	    padding: 10px;
	    border-radius: 10px;
	    position: absolute;
	    margin: 10px;
	    width: 95.5%;
	}
	.wrap { border-left: 1px dashed #90ab2a; border-right: 1px dashed #90ab2a; overflow: hidden; }
	.bg { background-image: url(images/7/bg.jpg); background-size: 105% 105%; width: 100%; height: 100%;}
	#buttons .next { display: none; }

	#questions, #answers { overflow: hidden; }
	#answers { display: none; }
	#question1 section { overflow: hidden; }
	#sortable li:hover { cursor: pointer; }
	#sortable li.ui-sortable-helper { cursor: move; }

	#question1 { width: 63%; float: left; }

	#energy-sources {
	    width: 37%;
	    text-align: center;
	    float: left;
	}
	ul#sortable {
	    padding: 0;
	    margin: 0;
	}
	#energy-sources h2 {
	    text-align: center;
	    margin-right: 5px;
	    margin-left: 10px;
	}
	#examples {
	    width: 63%;
	    float: left;
	}
	#examples ul {
	    padding-left: 0px;
	    margin: 0;
	}
	#question2 {
	    float: right;
	    width: 35%;
	}
	#question2 ul { padding-left: 5px; }
	#energy-sources h2, #examples h2 {
	    background-color: #f49e9c;
	    border-radius: 8px;
	    padding: 5px;
	    color: #000;
	}
	#question2 input[type=radio] { display: none; }
	#sortable li {
	    background: #c8e19d;
	    margin-left: 10px;
	    border-radius: 8px;
	    margin-top: 3px;
	    margin-right: 5px;
	    padding: 5px;
	}
	#examples li {
	    background: #c8e19d;
	    border-radius: 8px;
	    margin-top: 3px;
	    padding: 5px;
	    padding-left: 10px;
	}
	#examples h2 { padding-left: 10px; }
	#question2 label { cursor: pointer;	}

	@media only screen and (max-width: 1125px) {
		.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		h1 { padding-top: 20px; margin-bottom: -10px; }

		#answers p {
		    font-size: 18px;
		    line-height: 20px;
		}
		#question2 li { line-height: 25px; }
		#question2 label { font-size: 20px; }
	}

	img.grayscale { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
	img.grayscale-off { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .6s ease; /* Fade to color for Chrome and Safari */ }

	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
		#question1 li { font-size: 18px; }
		section h2 { font-size: 23px; }
	}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Match the energy sources on the left to their examples on the right by dragging the items at the left up or down."); ?></h2>

					<section>
						<div id="energy-sources">
							<h2><?php echo _("Energy Sources"); ?></h2>

							<ul id="sortable">
								<li id="5"><?php echo _("radiant"); ?></li>
								<li id="2"><?php echo _("nuclear"); ?></li>
								<li id="6"><?php echo _("mechanical"); ?></li>
								<li id="3"><?php echo _("heat"); ?></li>
								<li id="4"><?php echo _("sound"); ?></li>
								<li id="1"><?php echo _("chemical"); ?></li>
							</ul>
						</div>

						<div id="examples">
							<h2><?php echo _("Examples"); ?></h2>

							<ul>
								<li><?php echo _("flashlight battery"); ?></li>
								<li><?php echo _("atomic energy"); ?></li>
								<li><?php echo _("warmth surrounding a car's engine"); ?></li>
								<li><?php echo _("music heard from headphones"); ?></li>
								<li><?php echo _("sunlight"); ?></li>
								<li><?php echo _("movement of a car's wheels"); ?></li>
							</ul>
						</div>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Which of the following explains nuclear energy?"); ?></h2>

					<ul>						
						<li id="a"><input id="a2" name="q2" type="radio"><label for="a2"><img src="images/7/a.png" class="grayscale"><?php echo _("It involves atoms splitting apart or atoms combining together to become a new element."); ?></label></li>
						<li id="b"><input id="b2" name="q2" type="radio"><label for="b2"><img src="images/7/b.png" class="grayscale"><?php echo _("Nuclear energy has been used as one of the energies to make electricity."); ?></label></li>
						<li id="c"><input id="c2" name="q2" type="radio"><label for="c2"><img src="images/7/c.png" class="grayscale"><?php echo _("Energy is released when two atoms travel at the speed of light."); ?></label></li>
						<li id="d"><input id="d2" name="q2" type="radio"><label for="d2"><img src="images/7/d.png" class="grayscale"><?php echo _("A and B are both correct."); ?></label></li>
					</ul>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2 - How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Match the energy sources on the left to their examples on the right by dragging the items at the left up or down."); ?></h2>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. Which of the following explains nuclear energy?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking for energy sources..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jquery-ui.js"></script>
	<script src="scripts/answer.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/jquery.ui.touch-punch.min.js"></script>
	<script>$(function() { $( "#sortable" ).sortable({ scroll: false, containment: $("#sortable") }); });</script>

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

		answered = 1,

		a = question2.find('#a'),
		b = question2.find('#b'),
		c = question2.find('#c'),
		d = question2.find('#d');

		a.on('click', function() {
			a.find('img').removeClass().addClass('grayscale-off');
			b.find('img').removeClass().addClass('grayscale');
			c.find('img').removeClass().addClass('grayscale');
			d.find('img').removeClass().addClass('grayscale');
		});

		b.on('click', function() {
			a.find('img').removeClass().addClass('grayscale');
			b.find('img').removeClass().addClass('grayscale-off');
			c.find('img').removeClass().addClass('grayscale');
			d.find('img').removeClass().addClass('grayscale');
		});

		c.on('click', function() {
			a.find('img').removeClass().addClass('grayscale');
			b.find('img').removeClass().addClass('grayscale');
			c.find('img').removeClass().addClass('grayscale-off');
			d.find('img').removeClass().addClass('grayscale');
		});

		d.on('click', function() {
			a.find('img').removeClass().addClass('grayscale');
			b.find('img').removeClass().addClass('grayscale');
			c.find('img').removeClass().addClass('grayscale');
			d.find('img').removeClass().addClass('grayscale-off');
		});

		question2.find('input[type=radio]').on('click', function() {
			var radio = $(this);

			if (radio.is(':checked') && radio.attr('id') == 'a2') {
				answer2.find('.answer').html('<p><img src="images/7/a.png"><span><?php echo _("It involves atoms splitting apart or atoms combining together to become a new element."); ?></span></p>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><span><?php echo _("No, nuclear energy involves atoms splitting apart or combining together to become a new element. It has also been used as one of the energies to make electricity."); ?></span></p>');
				ans2 = 'A';
			}

			if (radio.attr('id') == 'b2') {
				answer2.find('.answer').html('<p><img src="images/7/b.png"><span><?php echo _("Nuclear energy has been used as one of the energies to make electricity."); ?></span></p>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><span><?php echo _("No, nuclear energy involves atoms splitting apart or combining together to become a new element. It has also been used as one of the energies to make electricity."); ?></span></p>');
				ans2 = 'B';
			}

			if (radio.attr('id') == 'c2') {
				answer2.find('.answer').html('<p><img src="images/7/c.png"><span><?php echo _("Energy is released when two atoms travel at the speed of light."); ?></span></p>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><span><?php echo _("No, nuclear energy involves atoms splitting apart or combining together to become a new element. It has also been used as one of the energies to make electricity."); ?></span></p>');
				ans2 = 'C';
			}

			if (radio.attr('id') == 'd2') {
				answer2.find('.answer').html('<p><img src="images/7/d.png"><span><?php echo _("A and B are both correct."); ?></span></p>');
				answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><span><?php echo _("Correct, nuclear energy involves atoms splitting apart or combining together to become a new element. It has also been used as one of the energies to make electricity."); ?></span></p>');
				ans2 = 'D';
			}
		});

		function save() {
			ans1 = $('#1').index() + '-' + $('#2').index() + '-' + $('#3').index() + '-' + $('#4').index() + '-' + $('#5').index() + '-' + $('#6').index();

			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qc2-a', ans1);
				saveAnswer('energy-and-its-forms-qc2-b', ans2);
				answered = 1;
			}
		}

		check.on('click', function() {
			var checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				questions.fadeOut(function() {
					if ($('#1').index() == 0 && 
						$('#2').index() == 1 &&
						$('#3').index() == 2 &&
						$('#4').index() == 3 &&
						$('#5').index() == 4 &&
						$('#6').index() == 5) {

							answer1.find('.answer').html("<p class='green'><img src='images/others/correct.png'> <?php echo _('Good job! An example of chemical energy is a flashlight battery. This energy is due to the kind and  arrangement of small particles. An example of nuclear energy is atomic energy. This energy is due to the structure of the atom\'s nucleus. An example of heat energy is the warmth surrounding a car\'s engine. This energy is due to the random motion of small particles. An example of sound energy is the sound from a headphone. This energy is due to the ordered periodic motion of small particles. An example of radiant energy is sunlight. This energy is due to bundles of photons. An example of mechanical energy is the movement of a car\'s wheels. This energy is due to the motion of large pieces of matter.'); ?></p>");
						}

						else {
							answer1.find('.answer').html("<p class='red'><img src='images/others/wrong.png'> <?php echo _('Not quite. An example of chemical energy is a flashlight battery. This energy is due to the kind and arrangement of small particles. An example of nuclear energy is atomic energy. This energy is due to the structure of the atom\'s nucleus. An example of heat energy is the warmth surrounding a car\'s engine. This energy is due to the random motion of small particles. An example of sound energy is the sound from a headphone. This energy is due to the ordered periodic motion of small particles. An example of radiant energy is sunlight. This energy is due to bundles of photons. An example of mechanical energy is the movement of a car\'s wheels. This energy is due to the motion of large pieces of matter.'); ?></p>");
						}

						save();
						answers.fadeIn();
				});

				check.fadeOut(function() {
					next.fadeIn();
					window.location.hash = '#answer';
				});
			}

		});
		
		back.on('click', function() {
			if (questions.is(':visible')) {
				document.location.href = "6.php#screen2";
			} else {
				answers.fadeOut(function() {
					questions.fadeIn();
				});
				next.fadeOut(function() { check.fadeIn(); });
			}
		});
	</script>
</body>
</html>