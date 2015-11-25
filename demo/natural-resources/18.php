<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #558653; }
.wrap { border-color: #b8d767; }
.bg { background-image: url(images/18/bg.jpg); }

.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 22px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #294D11; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #294D11; }
.ac-custom svg path { stroke: #294D11; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
.ac-custom input[type="checkbox"]:checked + label, .ac-custom input[type="radio"]:checked + label { color: #4f5906; }
#question ul { padding-left: 40px; }
#question li { padding: 10px 0; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; width: 700px; margin: 0 auto; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }
#buttons .next { display: none; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] #question .ac-custom svg { right: 3px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question" class="clear">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("What is the best way to describe how humans and animals need and use natural resources?"); ?></h2>

				<section>
					<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
						<ol>
							<li><input id="a" name="q" type="radio"><label for="a"><span>A. <?php echo _("Humans and animals both use natural resources to make themselves comfortable and happy."); ?></span></label></li>
							<li><input id="b" name="q" type="radio"><label for="b"><span>B. <?php echo _("Humans and animals both take only the natural resources they need to survive."); ?></span></label></li>
							<li><input id="c" name="q" type="radio"><label for="c"><span>C. <?php echo _("Animals use just the natural resources they need to survive but humans take more natural resources than are needed just to survive."); ?></span></label></li>
							<li><input id="d" name="q" type="radio"><label for="d"><span>D. <?php echo _("Humans and animals both take more natural resources than are needed just for survival."); ?></span></label></li>
						<ol>
					</form>
				</section>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Gathering coal..."); ?></strong></section></section>

	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('A. <?php echo _("Humans and animals both use natural resources to make themselves comfortable and happy."); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite. Humans use natural resources to make themselves comfortable and happy but animals just use what they need to survive."); ?></p>");
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('B. <?php echo _("Humans and animals both take only the natural resources they need to survive."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Animals just use what they need to survive but humans use natural resources to make themselves comfortable and happy."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('C. <?php echo _("Animals use just the natural resources they need to survive but humans take more natural resources than are needed just to survive."); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes - Animals use just the natural resources they need to just survive but humans take more natural resources than are needed just to survive."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('D. <?php echo _("Humans and animals both take more natural resources than are needed just for survival."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite - Animals use just the natural resources they need to just survive but humans take more natural resources than are needed just to survive."); ?></p>');
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('natural-resources-qq5-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "17.php";
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
			alert('<?php echo _("Please select your answers."); ?>');
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

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
