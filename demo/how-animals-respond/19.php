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
		.bg { background-image: url(images/19/bg.jpg); }

		#question { overflow: hidden; }
		#question ul { width: 95%; margin: 0 auto 20px; }
		#question label { font-size: 30px; padding-left: 50px; }

		#answer { display: none; }
		#answer p { margin-bottom: 10px; }
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("Which of the following is <span class='blink'>true</span> about sensory neurons."); ?></h2>

				<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
					<ul>
						<li><input id="a" name="q" type="radio" value="A"><label for="a">A. <?php echo _("Sensory neurons are part of the central nervous system."); ?></label></li>
						<li><input id="b" name="q" type="radio" value="B"><label for="b">B. <?php echo _("Sensory neurons contain memories."); ?></label></li>
						<li><input id="c" name="q" type="radio" value="C"><label for="c">C. <?php echo _("Sensory neurons stimulate muscle contraction."); ?></label></li>
						<li><input id="d" name="q" type="radio" value="D"><label for="d">D. <?php echo _("Sensory neurons are part of the peripheral nervous system."); ?></label></li>
					</ul>
				</form>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Sensory neurons..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
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
		answered = 1;

		question.find('input[type=radio]').on('click', function() {
			var me = $(this);	

			if (me.val() == 'A') {
				answer.find('.answer').html('A. <?php echo _("Sensory neurons are part of the central nervous system."); ?>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. The central nervous system includes the brain and spinal cord only."); ?></p>');
			}

			if (me.val() == 'B') {
				answer.find('.answer').html('B. <?php echo _("Sensory neurons contain memories."); ?>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Memories reside in the brain."); ?></p>');
			}

			if (me.val() == 'C') {
				answer.find('.answer').html('C. <?php echo _("Sensory neurons stimulate muscle contraction."); ?>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not that one. Motor neurons stimulate muscles."); ?></p>');
			}

			if (me.val() == 'D') {
				answer.find('.answer').html('D. <?php echo _("Sensory neurons are part of the peripheral nervous system."); ?>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("There you go. Sensory neurons belong to the peripheral nervous system."); ?></p>');
			}

			ans = me.val();
		});

		function save() {
			if (answered == 0) {
				saveAnswer('how-animals-respond-qq4-a', ans);
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
				document.location.href = "18.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>
