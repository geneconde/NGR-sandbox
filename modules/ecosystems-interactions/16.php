<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(16, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'ecosystems-interactions-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h2 { margin: 0; }
.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
.bg { background: url('images/16/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { padding: 10px; margin-top: 10px; background: rgba(255, 255, 255, .5); border-radius: 5px; }
.ac-custom { padding: 0 3em; max-width: 900px; margin: 24px auto 0; } 
.ac-custom h2 { font-size: 24px; font-weight: 300; padding: 0 0 0.5em; margin: 0 0 30px; }
.ac-custom ul, .ac-custom ol { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
.ac-custom li { margin: 0 auto; padding: 15px 0; position: relative; } 
.ac-custom label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 60px; vertical-align: top; color: rgba(0,0,0,0.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 35px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
.ac-custom label::before { content: ''; border: 4px solid #d06c77; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; } 
.ac-radio label::before { border-radius: 50%; } 
.ac-custom input[type="checkbox"]:checked + label, .ac-custom input[type="radio"]:checked + label { color: #000; } 
.ac-custom input[type="checkbox"]:checked + label::before, .ac-custom input[type="radio"]:checked + label::before { opacity: 0.8; }
.ac-custom svg { position: absolute; width: 30px; height: 30px; top: 51%; margin-top: -20px; left: 6px; pointer-events: none; } 
.ac-custom svg path { stroke: #d06c77; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }
#question, #answer {-webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#question { overflow: hidden; }
#question p { text-align: left; }
#question ul { width: 60%; margin: 0 auto; list-style: none; }
#question li { font-size: 24px; }
#answer { display: none; }
#answer p { text-align: center; margin-bottom: 10px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }

html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom label { padding: 0 60px 0 0; }
html[dir="rtl"] .ac-custom svg { right: 6px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<div class="placeholder">
					<h2><?php echo _("Do ecosystems have a certain size?"); ?></h2>
					<section>
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ul>
								<li><input id="a" name="q" type="radio"><label for="a"><?php echo _("Yes, 10 square miles"); ?></label></li>
								<li><input id="b" name="q" type="radio"><label for="b"><?php echo _("Yes, 100 square miles"); ?></label></li>
								<li><input id="c" name="q" type="radio"><label for="c"><?php echo _("No, ecosystems do not have a certain size"); ?></label></li>
							<ul>
						</form>
					</section>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #1")." - "._("How did I do?"); ?></h1>
				<div class="placeholder">
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>					
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/svgcheckbx.js"></script>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;
	a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	function save() {
		if (a.is(':checked')) {
			ans = 'A';
			answer.find('.answer').html('<?php echo _("Yes, 10 square miles"); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! There is no specific size for an ecosystem. The entire earth can be an ecosystem, and the pond near your school is also an ecosystem. It depends on what you are focusing on."); ?></p>');
		}

		if (b.is(':checked')) {
			ans = 'B';
			answer.find('.answer').html('<?php echo _("Yes, 100 square miles"); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! There is no specific size for an ecosystem. The entire earth can be an ecosystem, and the pond near your school is also an ecosystem. It depends on what you are focusing on."); ?></p>');
		}

		if (c.is(':checked')) {
			ans = 'C';
			answer.find('.answer').html('<?php echo _("No, ecosystems do not have a certain size"); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! There is no specific size for an ecosystem. Depending on which interactions you are studying, the entire earth can be an ecosystem, and so can a small pond."); ?></p>');
		}

		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qq1-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "15.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){ answer.fadeIn(); }); 
			save();
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
