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
		.bg { background-image: url(images/7/bg.jpg); }

		#questions { overflow: hidden;}
		#questions h2, #answers h2 { margin-top: 0; }
		#questions img { margin-top: 10px; }
		#questions ul { margin: 10px 0; padding: 0 10px; }
		#questions li { position: relative; margin-bottom: 10px; }
		#questions label { font-size: 24px; padding-left: 35px; cursor: pointer; display: inline-block; vertical-align: top; position: relative; }
		#questions input[type=radio], #questions label::before{ width: 26px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }	
		#questions input[type=radio] { z-index: 100; display: none !important; opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; }
		#questions label::before { content: ''; background: url(images/7/radio.png) left top no-repeat; width: 26px; height: 35px; margin-top: -20px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
		#questions input[type=radio]:checked + label::before { background-position: -25px top; width: 29px; }
		
		#question1, #question2, #answer1, #answer2 { margin-bottom: 30px; border-radius: 12px; }

		#answers { display: none; }
		#answers p { margin-bottom: 10px; }

		#answer2 { margin-top: 20px; }
	
		html[dir="rtl"] #questions label { position: static; margin-right: 50px; }
		html[dir="rtl"] #questions input[type=radio], #questions label::before { right:0; }
		html[dir="rtl"] .feedback img { float:right; margin-left:5px; }
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Why do different types of food have different flavors?"); ?></h2>

					<ul>
						<li><input id="a1" name="q1" type="radio" value="A"><label for="a1">A. <?php echo _("All kinds of food are made of molecules with the same shape."); ?></label></li>
						<li><input id="b1" name="q1" type="radio" value="B"><label for="b1">B. <?php echo _("Food molecules come in many different shapes."); ?></label></li>
						<li><input id="c1" name="q1" type="radio" value="C"><label for="c1">C. <?php echo _("Spicy food often has a strong aroma."); ?></label></li>
						<li><input id="d1" name="q1" type="radio" value="D"><label for="d1">D. <?php echo _("The electromagnetic spectrum contains all known colors."); ?></label></li>
					</ul>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Why are dogs able to distinguish many more smells than people?"); ?></h2>

					<ul>
						<li><input id="a2" name="q2" type="radio" value="A"><label for="a2">A. <?php echo _("Dogs have many fewer smell receptors than people."); ?></label></li>
						<li><input id="b2" name="q2" type="radio" value="B"><label for="b2">B. <?php echo _("People have many more smell receptors than dogs."); ?></label></li>
						<li><input id="c2" name="q2" type="radio" value="C"><label for="c2">C. <?php echo _("Dogs have many more smell receptors than people."); ?></label></li>
						<li><input id="d2" name="q2" type="radio" value="D"><label for="d2">D. <?php echo _("Dogs and people have about the same number of smell receptors."); ?></label></li>
					</ul>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Why do different types of food have different flavors?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. Why are dogs able to distinguish many more smells than people?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Slurps and sniffs"); ?></strong></section></section>

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
		checkAnswer = 0,

		answered = 1;

		question1.find('input[type=radio]').on('click', function() {
			var me = $(this);	

			if (me.val() == 'A') {
				answer1.find('.answer').html('A. <?php echo _("All kinds of food are made of molecules with the same shape."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. If all food molecules were the same shape, they would all taste the same."); ?></p>');
			}

			if (me.val() == 'B') {
				answer1.find('.answer').html('B. <?php echo _("Food molecules come in many different shapes."); ?>');
				answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("That’s right! Each molecule shape stimulates receptors differently."); ?></p>');
			}

			if (me.val() == 'C') {
				answer1.find('.answer').html('C. <?php echo _("Spicy food often has a strong aroma."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("While this is often true, it doesn’t directly cause taste differences."); ?></p>');
			}

			if (me.val() == 'D') {
				answer1.find('.answer').html('D. <?php echo _("The electromagnetic spectrum contains all known colors."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Um... No... We don’t taste colors."); ?></p>');
			}

			ans1 = me.val();
		});

		question2.find('input[type=radio]').on('click', function() {
			var me = $(this);	

			if (me.val() == 'A') {
				answer2.find('.answer').html('A. <?php echo _("Dogs have many fewer smell receptors than people."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. This would make dogs less sensitive than people."); ?></p>');
			}

			if (me.val() == 'B') {
				answer2.find('.answer').html('B. <?php echo _("People have many more smell receptors than dogs."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. This would make people more sensitive than dogs."); ?></p>');
			}

			if (me.val() == 'C') {
				answer2.find('.answer').html('C. <?php echo _("Dogs have many more smell receptors than people."); ?>')
				answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Right! Dogs have many more smell receptors."); ?></p>');
			}

			if (me.val() == 'D') {
				answer2.find('.answer').html('D. <?php echo _("Dogs and people have about the same number of smell receptors."); ?>');
				answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Incorrect. We would be about equally sensitive."); ?></p>');
			}

			ans2 = me.val();
		});

		function save() {
			if (answered == 0) {
				saveAnswer('how-animals-respond-qc2-a', ans1);
				saveAnswer('how-animals-respond-qc2-b', ans2);
				answered = 1;
			}
		}

		check.on('click', function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer != 2) {
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
				document.location.href = "6.php#screen4";
			} else {
				answers.fadeOut(function() { questions.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>
