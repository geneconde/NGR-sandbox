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
		.bg { background-image: url(images/5/bg.jpg); }
		#questions { overflow: hidden; }
		#question1, #question2 { width: 100%; margin-bottom: 20px; }
		
		#question1 ul { width: 100%; margin: 0; padding: 0; }
		#question1 li { float: left; width: 25%; }
		#question1 input[type=radio] { display: none; }
		#choices1 label { display: block; text-align: center; cursor: pointer; }

		#box { text-align: center; margin: 20px 0 0; }
		#box .info { color: #25b48a; }

		#question2 { 100% margin-left: 20px; }
		#question2 form	 { padding: 0 10px; }
		#question2 ul {  margin: 0; }
		#question2 label { font-size: 24px; }

		#answers { display: none; }
		#answers p { margin-bottom: 10px; }

		#answer1 { text-align: center; }
		#answer1 .answer img { display: inline-block; margin-top: 10px; }
		#answer1 .answer span { display: block; font-size: 24px; margin-bottom: 10px; }

		#answer2 { margin-top: 30px; }
		
		#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
		#choices1 input[type="radio"]:checked + label img { border: 4px solid #d4336e; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
		#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
		#choices1 input[type="radio"]:checked + label span { color: #d4336e; -webkit-transition: all .3s ease; }
		
		html[dir="rtl"] #question1 li { float:right; }
		html[dir="rtl"] #question2 ul { margin-right: 100px; }
		#buttons .next { display: none; }
	</style>

</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. A muscle is stimulated to contract by which of the following?"); ?></h2>
					<ul id="choices1">
						<li>
							<input type="radio" id="a1" name="q1" value="A">
							<label for="a1"><img src="images/5/sensory.jpg"><span><?php echo _("Sensory neuron"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="q1" value="B">
							<label for="b1"><img src="images/5/motor.jpg"><span><?php echo _("Motor neuron"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="q1" value="C">
							<label for="c1"><img src="images/5/digestive.jpg"><span><?php echo _("Digestive system"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="q1" value="D">
							<label for="d1"><img src="images/5/dermal.jpg"><span><?php echo _("Dermal layer"); ?></span></label>
						</li>
					</ul>
					<div class="clear"></div>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Cells in the eye are considered to be part of which nervous system?"); ?></h2>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul id="choices2">
						<li><input id="a2" name="q2" type="radio" value="A"><label for="a2">A. <?php echo _("The peripheral system because it includes sensory functions."); ?></label></li>
						<li><input id="b2" name="q2" type="radio" value="B"><label for="b2">B. <?php echo _("The central system because it includes sensory functions."); ?></label></li>
						<li><input id="c2" name="q2" type="radio" value="C"><label for="c2">C. <?php echo _("The mechanical nervous system because it includes muscles."); ?></label></li>
						<li><input id="d2" name="q2" type="radio" value="D"><label for="d2">D. <?php echo _("The skeletal nervous system because eyes contain no bones."); ?></label></li>
						</ul>
					</form>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. A muscle is stimulated to contract by which of the following?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. Cells in the eye are considered to be part of which nervous system?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/hexaflip.js"></script>
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
		choices1 = $('#choices1 input'),

		answer1 = $('#answer1'),
		answer2 = $('#answer2'),

		ans1 = '',
		ans2 = '',

		checkAnswer = 0,
		answered = 1;
		
		question1.find('input[type=radio]').on('click', function() {
			var me = $(this).val();

			if (me == "A") {
				answer1.find('.answer').html('<img src="images/5/sensory.jpg"><span><?php echo _("Sensory neuron"); ?></span>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Close! But sensory neurons aren’t connected to muscles."); ?></p>');
			} else if (me == "B") {
				answer1.find('.answer').html('<img src="images/5/motor.jpg"><span><?php echo _("Motor neuron"); ?></span>');
				answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Motor neurons send the signal for muscles to contract."); ?></p>');
			} else if (me == "C") {
				answer1.find('.answer').html('<img src="images/5/digestive.jpg"><span><?php echo _("Digestive system"); ?></span>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. The digestive system has muscles, but doesn’t stimulate them."); ?></p>');
			} else if (me == "D") {
				answer1.find('.answer').html('<img src="images/5/dermal.jpg"><span><?php echo _("Dermal layer"); ?></span>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. The dermal layer is part of the skin."); ?></p>');
			}

			ans1 = me;
		});

		question2.find('input[type=radio]').on('click', function() {
			var me = $(this);	

			if (me.val() == 'A') {
				answer2.find('.answer').html('A. <?php echo _("The peripheral system because it includes sensory functions."); ?>');
				answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Right! Sensory organs belong to the peripheral nervous system."); ?></p>');
			}

			if (me.val() == 'B') {
				answer2.find('.answer').html('B. <?php echo _("The central system because it includes sensory functions."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. The central nervous system has no sensory cells."); ?></p>');
			}

			if (me.val() == 'C') {
				answer2.find('.answer').html('C. <?php echo _("The mechanical nervous system because it includes muscles."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. There is no mechanical nervous system."); ?></p>');
			}

			if (me.val() == 'D') {
				answer2.find('.answer').html('D. <?php echo _("The skeletal nervous system because eyes contain no bones."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Incorrect. We don’t have a skeletal nervous system."); ?></p>');
			}

			ans2 = me.val();
		});

		function save() {
			if (answered == 0) {
				saveAnswer('how-animals-respond-qc1-a', ans1);
				saveAnswer('how-animals-respond-qc1-b', ans2);
				answered = 1;
			}
		}

		check.on('click', function() {
			checkAnswer1 = $('#choices1 input:radio:checked').length;
			checkAnswer2 = $('#choices2 input:radio:checked').length;

			if (checkAnswer1 != 1 || checkAnswer2 != 1) {
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
				document.location.href = "4.php#screen3";
			} else {
				answers.fadeOut(function() { questions.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>

