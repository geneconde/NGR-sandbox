<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
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
h1 { color: #A183BD; }
.wrap { border-color: #9b98ec; }
.bg { background-image: url(images/15/bg.jpg); }

#question ol { list-style: none; padding: 0; margin: 15px 0 0 20px; }
#question li { padding: 6px 0; }
#question .ac-custom { max-width: 320px; margin: 0 0 0 20px; float: left; }
#question .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question .ac-custom input[type="radio"] {}
#question .ac-custom input[type="radio"]:checked + label { color: #9C3672; }
#question .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question .ac-custom svg path { stroke: #9C3672; }
#question .ac-custom label::before { background: #9C3672; height: 20px; width: 20px; margin-top: -12px;}

#map { width: 490px; margin-right: 20px; margin-top: 30px; float: right; height: 489px; background: url(images/15/map.png) no-repeat; position: relative; }
#map div { position: absolute; display: none; }

#africa { width: 110px; height: 159px; background: url(images/15/africa.png) no-repeat; top: 195px; left: 227px; z-index: 10; }
#poles { width: 322px; height: 489px; background: url(images/15/poles.png) no-repeat; top: 0; left: 91px; }
#pacific { width: 490px; height: 298px; background: url(images/15/pacific.png) no-repeat; top: 138px; left: 0; z-index: 8; }
#atlantic { width: 181px; height: 327px; background: url(images/15/atlantic.png) no-repeat; top: 103px; left: 100px; z-index: 7; }
#others { width: 469px; height: 305px; background: url(images/15/others.png) no-repeat; top: 84px; left: 17px; display: block !important; z-index: 9; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }

html[dir="rtl"] #question .ac-custom {float:right;}
html[dir="rtl"] #map {float: left; margin-right: 0;}
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom [type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { margin-top: -15px; right: 35px;}
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -27px; }
html[dir="rtl"] li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Where on a world map would you go to find the greatest supply of fresh water?"); ?></h2>

				<div class="clear">
					<form class="ac-custom ac-radio ac-circle" autocomplete="off">
						<ul>
							<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("The Pacific Ocean"); ?></label></li>
							<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("The North and South Poles"); ?></label></li>
							<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("The Atlantic Ocean"); ?></label></li>
							<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Africa"); ?></label></li>
						</ul>
					</form>

					<div id="map">
						<div id="africa"></div>
						<div id="others"></div>
						<div id="poles"></div>
						<div id="pacific"></div>
						<div id="atlantic"></div>
					</div>
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Looking for freshwater?"); ?></strong></section></section>

	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	africa = $('#africa'),
	poles = $('#poles'),
	pacific = $('#pacific'),
	atlantic = $('#atlantic'),
	checkAnswer = 0,
	answered = 1;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<?php echo _("The Pacific Ocean"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite... the Pacific ocean is salt water not fresh water."); ?></p>");

			pacific.fadeIn(100);
			africa.fadeOut(100);
			poles.fadeOut(100);
			atlantic.fadeOut(100);

			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<?php echo _("The North and South Poles"); ?>');
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct! The north and south poles are made from ice - which is frozen solid fresh water."); ?></p>");

			africa.fadeOut(100);
			pacific.fadeOut(100);
			poles.fadeIn(100);
			atlantic.fadeOut(100);

			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<?php echo _("The Atlantic Ocean"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. The Atlantic ocean is salt water not fresh water."); ?></p>");

			atlantic.fadeIn(100);
			africa.fadeOut(100);
			pacific.fadeOut(100);
			poles.fadeOut(100);

			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<?php echo _("Africa"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope! Africa has some big lakes but they don't compare with the polar ice caps of the north and south poles."); ?></p>");

			africa.fadeIn(100);
			pacific.fadeOut(100);
			poles.fadeOut(100);
			atlantic.fadeOut(100);

			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('role-of-water-qq2-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "14.php";
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
			alert('<?php echo _("Please select your answer.");?>');
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
