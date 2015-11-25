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
	<link rel="stylesheet" href="styles/svgcheckbx.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		.bg { background-image: url(images/16/bg.jpg); }

		#question { overflow: hidden; }
		#question ul { width: 81%; margin: 0 auto; overflow: hidden; padding-left: 0; }
		#question li { font-size: 30px; text-align: center; float: left; margin: 20px 80px 0 0; }
		#question img { display: inline-block; }
		#question label { cursor: pointer; }
		#question li:nth-child(2), #question li:nth-child(4) { margin-right: 0; }
		#question span { display: block; text-align: center; width: 300px; }
		#question span.blink { display: inline !important; }
		#question input[type=radio] { display: none; }

		#answer { display: none; }
		#answer .answer span { color: #000; } 
		#answer p { margin-bottom: 10px; }
		#answer p span { display: block; }

		span.checked { color: #d4336e; -webkit-transition: all .3s ease; }
		span.unchecked { color: #000; -webkit-transition: all .3s ease; }

		img.border { border: 4px solid #d4336e; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
		img.border-off { border: 4px solid #eee; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation : landscape) {
			#question li { margin: 0 80px 0 0; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#question ul { width: 95%; }
		}
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<h2><?php echo _("Choose the <span class='blink'>incorrect</span> statement from the following."); ?></h2>

				<ul>
					<li><input type="radio" id="a" name="q" value="A"><label for="a"><img src="images/16/cone.jpg" class="border-off"><span><?php echo _("Cone cells sense light."); ?></span></label></li>
					<li><input type="radio" id="b" name="q" value="B"><label for="b"><img src="images/16/dog.jpg" class="border-off"><span><?php echo _("Animals are not capable of learned behavior."); ?></span></label></li>
					<li><input type="radio" id="c" name="q" value="C"><label for="c"><img src="images/16/brain.jpg" class="border-off"><span><?php echo _("The brain is part of the central nervous system."); ?></span></label></li>
					<li><input type="radio" id="d" name="q" value="D"><label for="d"><img src="images/16/chunking.jpg" class="border-off"><span><?php echo _("Chunking is a memorization technique."); ?></span></label></li>
				</ul>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/hexaflip.js"></script>
	<script src="scripts/answer.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),

		question = $('#question'),
		answer = $('#answer'),

		ans = '',
		checkAnswer = 0,

		a = $('#a'),
		b = $('#b'),
		c = $('#c'),
		d = $('#d'),

		answered = 1;

		a.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			b.parent().find('img').removeClass().addClass('border-off');
			b.parent().find('span').removeClass().addClass('unchecked');
			c.parent().find('img').removeClass().addClass('border-off');
			c.parent().find('span').removeClass().addClass('unchecked');
			d.parent().find('img').removeClass().addClass('border-off');
			d.parent().find('span').removeClass().addClass('unchecked');

			answer.find('.answer').html('<img src="images/16/cone.jpg"><span><?php echo _("Cone cells sense light."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Cone cells are sensitive to light."); ?></p>');

			ans = $(this).val();
		});

		b.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			a.parent().find('img').removeClass().addClass('border-off');
			a.parent().find('span').removeClass().addClass('unchecked');
			c.parent().find('img').removeClass().addClass('border-off');
			c.parent().find('span').removeClass().addClass('unchecked');
			d.parent().find('img').removeClass().addClass('border-off');
			d.parent().find('span').removeClass().addClass('unchecked');

			answer.find('.answer').html('<img src="images/16/dog.jpg"><span><?php echo _("Animals are not capable of learned behavior."); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("That’s the one... Many animals certainly are able to learn."); ?></p>');

			ans = $(this).val();
		});

		c.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			a.parent().find('img').removeClass().addClass('border-off');
			a.parent().find('span').removeClass().addClass('unchecked');
			b.parent().find('img').removeClass().addClass('border-off');
			b.parent().find('span').removeClass().addClass('unchecked');
			d.parent().find('img').removeClass().addClass('border-off');
			d.parent().find('span').removeClass().addClass('unchecked');

			answer.find('.answer').html('<img src="images/16/brain.jpg"><span><?php echo _("The brain is part of the central nervous system."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("This one is true. The brain is part of the central nervous system."); ?></p>');

			ans = $(this).val();
		});

		d.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			a.parent().find('img').removeClass().addClass('border-off');
			a.parent().find('span').removeClass().addClass('unchecked');
			b.parent().find('img').removeClass().addClass('border-off');
			b.parent().find('span').removeClass().addClass('unchecked');
			c.parent().find('img').removeClass().addClass('border-off');
			c.parent().find('span').removeClass().addClass('unchecked');

			answer.find('.answer').html('<img src="images/16/chunking.jpg"><span><?php echo _("Chunking is a memorization technique."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. That’s true. Chunking is grouping similar ideas together."); ?></p>');

			ans = $(this).val();
		});

		function save() {
			if (answered == 0) {
				saveAnswer('how-animals-respond-qq1-a', ans);
				answered = 1;
			}
		}

		check.on('click', function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert('<?php echo _("Please select your answer."); ?>');
			} else {
				question.fadeOut(function() { answer.fadeIn(); });
				check.fadeOut(function() { next.fadeIn(); });
				removeHash();
				addHash('#answer');
				save();
			}	
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "15.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>
