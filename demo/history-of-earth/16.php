<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #000; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/16/bg.jpg); }

#question li { padding: 8px 0; }

.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #588B38; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #588B38; }
.ac-custom svg path { stroke: #588B38; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -18px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -10px; }
html[dir="rtl"] li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Geologists studying the history of the earth believe that the environments on the earth's surface have..."); ?></h2>

				<form class="ac-custom ac-radio ac-fill" autocomplete="off">
					<ul>
						<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("Remained the same over geological time."); ?></label></li>
						<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("Changed in the distant past but are not changing now."); ?></label></li>
						<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("Not changed in the past but are changing now."); ?></label></li>
						<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Have changed in the past and are still changing today."); ?></label></li>
					</ul>
				</form>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Reading history of earth..."); ?></strong></section></section>

	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<?php echo _("Remained the same over geological time."); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, environments on the earth's surface have changed in the past and are still changing today."); ?></p>"); //'
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<?php echo _("Changed in the distant past but are not changing now."); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, environments on the earth's surface are changing now as well."); ?></p>"); //'
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<?php echo _("Not changed in the past but are changing now."); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, the environments on the earth's surface have changed in the past as well."); ?></p>"); //'
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<?php echo _("Have changed in the past and are still changing today."); ?>');
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct, environments on the earth's surface have been continuously changing over geological time and are still changing."); ?></p>"); //'
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('history of earth-qq3-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "15.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){
				answer.fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});
	</script>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
