<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'earth-materials-and-systems-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
//h1 { color: #000; }
h2 { margin-bottom: 0; }
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/18/bg.jpg); }

#question li { padding: 8px 0; z-index: 5; }

.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #780046; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #780046; }
.ac-custom svg path { stroke: #780046; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#diagram { background-image: url("images/18/diagram.jpg"); position: relative; width: 470px; height: 320px; margin: 0 auto; }
#diagram p { position: absolute; }
#geo { left: 120px; top: 14px; }
#hydro { left: 26px; top: 120px; }
#atmo { right: 26px; top: 120px; }
#bio { left: 75px; bottom: 11px; }
#anthro { right: 57px; bottom: 14px; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }
html[dir="rtl"] #diagram p {font-size: 20px;}
html[dir="rtl"] #geo {left: 142px;top: 7px;width: 150px;}

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 37px; margin-top: -10px; }
html[dir="rtl"] li label { text-align: right; }


</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("In the diagram below, what would be an interaction between the anthrosphere and the atmosphere?"); ?></h2>
			
				<div id="diagram">
					<p id="geo"><?php echo _("Geosphere/Lithosphere"); ?></p>
					<p id="hydro"><?php echo _("Hydrosphere"); ?></p>
					<p id="atmo"><?php echo _("Atmosphere"); ?></p>
					<p id="bio"><?php echo _("Biosphere"); ?></p>
					<p id="anthro"><?php echo _("Anthrosphere"); ?></p>
				</div>
			
				<form class="ac-custom ac-radio ac-fill" autocomplete="off">
					<ul>
						<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("Pollution of lakes, streams, and oceans"); ?></label></li>
						<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("Logging mountain forests"); ?></label></li>
						<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("Mining coal and minerals from the ground"); ?></label></li>
						<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Pollution the air with CO<sub>2</sub>"); ?></label></li>
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
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying anthrosphere and atmosphere..."); ?></strong></section></section>

	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<?php echo _("Pollution of lakes, streams, and oceans"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, that would be a good example of interaction between the anthrosphere and the hydrosphere."); ?></p>");
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<?php echo _("Logging mountain forests"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, that would be a good example of interaction between the anthrosphere and the biosphere."); ?></p>");
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<?php echo _("Mining coal and minerals from the ground"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, that would be a good example of interaction between the anthrosphere and the hydrosphere."); ?></p>");
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<?php echo _("Pollution the air with CO<sub>2</sub>"); ?>');
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. This is a great example of interaction between the anthrosphere and the atmosphere."); ?></p>");
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('earth-materials-and-systems-qq3-a', ans);
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
			alert("<?php echo _("Please select your answer."); ?>");
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
	<?php require "setlocale.php"; ?>
</body>
</html>
