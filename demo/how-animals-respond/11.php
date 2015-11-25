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
		.bg { background-image: url(images/11/bg.jpg); }

		#questions { overflow: hidden; }
		#questions h2, #answers h2 { margin-top: 0; }
		#questions label { font-size: 24px; cursor: pointer; }
		
		#question1, #question2, #answer1, #answer2 { margin-bottom: 20px; border-radius: 12px; padding: 10px; background: rgba(18, 165, 197, .1); border: 2px solid #12a5c5; }

		#question1 ul { margin-left: 0; }

		#question2 { }
		#question2 ul { overflow: hidden; margin: 0; padding-left: 0; }
		#question2 li { float: left; margin-right: 24px; }
		#question2 li:last-child { margin-right: 0; }
		#question2 input[type=radio] { display: none; }
		#question2 li span { display: block; text-align: center; }
	 
		#answers { display: none; }
		#answers .feedback p { margin-bottom: 0; }
		#answers .feedback img { border: 0; }
		#answers p span { display: block; text-align: center; }
		#answers p { margin-bottom: 10px; }

		#answer2 { margin-top: 20px; margin-bottom: 0; }
		#answer2 p span { display: block; color: #000; }

		span.checked { color: #d4336e; -webkit-transition: all .3s ease; }
		span.unchecked { color: #000; -webkit-transition: all .3s ease; }

		img.border { border: 4px solid #d4336e; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
		img.border-off { border: 4px solid transparent; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
	
		html[dir="rtl"] #question2 ul { padding-right:0; }
		<?php if($language == "es_ES") { ?>
			#question2 li:last-child span { font-size:18px; }
		<?php } ?>
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#question2 ul li label img { width: 155px; }
		}	
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #4"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. A memory may best be thought of as..."); ?></h2>

					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="a1" name="q1" type="radio" value="A"><label for="a1">A. <?php echo _("An isolated random event."); ?></label></li>
							<li><input id="b1" name="q1" type="radio" value="B"><label for="b1">B. <?php echo _("A pattern of connections between brain cells."); ?></label></li>
							<li><input id="c1" name="q1" type="radio" value="C"><label for="c1">C. <?php echo _("A list of unrelated facts."); ?></label></li>
							<li><input id="d1" name="q1" type="radio" value="D"><label for="d1">D. <?php echo _("The result of a frightening experience."); ?></label></li>
						</ul>
					</form>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Which of the following is <span class='blink'>not</span> a good study technique to memorize a set of facts."); ?></h2>
					
					<ul>
					<li><input type="radio" id="a2" name="q2" value="A"><label for="a2"><img src="images/11/chunking.jpg" class="border-off"><span><?php echo _("Chunking"); ?></span></label></li>
					<li><input type="radio" id="b2" name="q2" value="B"><label for="b2"><img src="images/11/imagery.jpg" class="border-off"><span><?php echo _("Imagery"); ?></span></label></li>
					<li><input type="radio" id="c2" name="q2" value="C"><label for="c2"><img src="images/11/practice.jpg" class="border-off"><span><?php echo _("Practice"); ?></span></label></li>
					<li><input type="radio" id="d2" name="q2" value="D"><label for="d2"><img src="images/11/cramming.jpg" class="border-off"><span><?php echo _("Cramming"); ?></span></label></li>
					</ul>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. A memory may best be thought of as..."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. Which of the following is <span class='blink'>not</span> a good study technique to memorize a set of facts."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Did you remember?"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/hexaflip.js"></script>
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
		checkAnswer1 = 0,
		checkAnswer2 = 0,
		checkAnswer = 0,

		a2 = $('#a2'),
		b2 = $('#b2'),
		c2 = $('#c2'),
		d2 = $('#d2'),

		answered = 1;

		question1.find('input[type=radio]').on('click', function() {
			var me = $(this);	

			if (me.val() == 'A') {
				answer1.find('.answer').html('A. <?php echo _("An isolated random event."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("We hope not. Isolated events are hard to remember."); ?></p>');
			}

			if (me.val() == 'B') {
				answer1.find('.answer').html('B. <?php echo _("A pattern of connections between brain cells."); ?>');
				answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. A memory is a pattern of cellular connections."); ?></p>');
			}

			if (me.val() == 'C') {
				answer1.find('.answer').html('C. <?php echo _("A list of unrelated facts."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No... Lists of unrelated facts aren’t very useful."); ?></p>');
			}

			if (me.val() == 'D') {
				answer1.find('.answer').html('D. <?php echo _("The result of a frightening experience."); ?>');
				answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("That may result in one type of memory, but not always a useful one."); ?></p>');
			}

			ans1 = me.val();
		});

		a2.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			b2.parent().find('img').removeClass().addClass('border-off');
			b2.parent().find('span').removeClass().addClass('unchecked');
			c2.parent().find('img').removeClass().addClass('border-off');
			c2.parent().find('span').removeClass().addClass('unchecked');
			d2.parent().find('img').removeClass().addClass('border-off');
			d2.parent().find('span').removeClass().addClass('unchecked');

			answer2.find('.answer').html('<img src="images/11/chunking.jpg"><span><?php echo _("Chunking"); ?></span>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Breaking the material into chunks is a good idea."); ?></p>');

			ans2 = $(this).val();
		});

		b2.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			a2.parent().find('img').removeClass().addClass('border-off');
			a2.parent().find('span').removeClass().addClass('unchecked');
			c2.parent().find('img').removeClass().addClass('border-off');
			c2.parent().find('span').removeClass().addClass('unchecked');
			d2.parent().find('img').removeClass().addClass('border-off');
			d2.parent().find('span').removeClass().addClass('unchecked');

			answer2.find('.answer').html('<img src="images/11/imagery.jpg"><span><?php echo _("Imagery"); ?></span>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Creating a complex mental image is an excellent plan."); ?></p>');

			ans2 = $(this).val();
		});

		c2.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			b2.parent().find('img').removeClass().addClass('border-off');
			b2.parent().find('span').removeClass().addClass('unchecked');
			a2.parent().find('img').removeClass().addClass('border-off');
			a2.parent().find('span').removeClass().addClass('unchecked');
			d2.parent().find('img').removeClass().addClass('border-off');
			d2.parent().find('span').removeClass().addClass('unchecked');

			answer2.find('.answer').html('<img src="images/11/practice.jpg"><span><?php echo _("Practice"); ?></span>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Practice, practice, practice."); ?></p>');

			ans2 = $(this).val();
		});

		d2.on('click', function() {
			$(this).parent().find('img').removeClass().addClass('border');
			$(this).parent().find('span').removeClass().addClass('checked');
			b2.parent().find('img').removeClass().addClass('border-off');
			b2.parent().find('span').removeClass().addClass('unchecked');
			c2.parent().find('img').removeClass().addClass('border-off');
			c2.parent().find('span').removeClass().addClass('unchecked');
			a2.parent().find('img').removeClass().addClass('border-off');
			a2.parent().find('span').removeClass().addClass('unchecked');

			answer2.find('.answer').html('<img src="images/11/cramming.jpg"><span><?php echo _("Cramming"); ?></span>');
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("There you go. Cramming doesn’t work."); ?></p>');

			ans2 = $(this).val();
		});

		function save() {
			if (answered == 0) {
				saveAnswer('how-animals-respond-qc4-a', ans1);
				saveAnswer('how-animals-respond-qc4-b', ans2);
				answered = 1;
			}
		}

		check.on('click', function() {
			checkAnswer1 = $('input:radio:checked').length;
			checkAnswer2 = $('.border').length;
			checkAnswer = checkAnswer1 + checkAnswer2;

			if (checkAnswer < 3) {
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
				document.location.href = "10.php#screen3";
			} else {
				answers.fadeOut(function() { questions.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>
