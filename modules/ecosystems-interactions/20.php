<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(20, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'ecosystems-interactions-qc5-a');
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
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
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
.bg {background: url('images/19/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { padding: 10px; margin-top: 10px; background: rgba(255, 255, 255, .5); border-radius: 5px; }
#question, #answer {-webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#question { text-align: center; }
#question img { display: inline-block; margin-top: 20px; }
#question ul { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
/*#question li { text-align: left; margin: 0 auto; padding: 5px 0; position: relative; }
#question input[type=radio] { display: none; }
#question label { text-align: left; display: inline-block; position: relative; font-size: 22px; padding: 0; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#question .ac-custom svg path { stroke: #d06c77; stroke-width: 3px; }
#question .ac-custom input[type=radio]:checked + label { color: #d06c77; }
#question .ac-list svg { width: 100%; height: 80px; left: 0; top: 11px; margin-top: 0px; }*/
.ac-custom { padding: 0 3em; max-width: 900px; margin: 16px auto 0; } 
.ac-custom h2 { font-size: 24px; font-weight: 300; padding: 0 0 0.5em; margin: 0 0 30px; }
.ac-custom ul, .ac-custom ol { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
.ac-custom li { margin: 0 auto; padding: 10px 0; position: relative; text-align: left; } 
.ac-custom label { display: inline-block; position: relative; font-size: 20px; padding: 0 0 0 50px; vertical-align: top; color: rgba(0,0,0,0.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 35px; height: 35px; top: 54%; left: 0; margin-top: -20px; position: absolute; cursor: pointer; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
.ac-custom label::before { content: ''; border: 4px solid #d06c77; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; } 
.ac-radio label::before { border-radius: 50%; } 
.ac-custom input[type="checkbox"]:checked + label, .ac-custom input[type="radio"]:checked + label { color: #d06c77; } 
.ac-custom input[type="checkbox"]:checked + label::before, .ac-custom input[type="radio"]:checked + label::before { opacity: 0.8; }
.ac-custom svg { position: absolute; width: 20px; height: 20px; top: 42%; margin-top: -7px; left: 7px; pointer-events: none; } 
.ac-custom svg path { stroke: #d06c77; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }
#answer { display: none; }
#answer p { text-align: center; }
.answer img {width:300px;}
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }

html[dir="rtl"] .ac-custom li { text-align: right; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom label { padding: 0 45px 0 0; }
html[dir="rtl"] .ac-custom svg { right: 6px; }
<?php if($language == "es_ES") { ?>
	.ac-custom label { font-size: 19px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<div class="placeholder">
					<h2><?php echo _("When humans interact with natural systems, it's common for unexpected consequences to occur. Which of the following is the best explanation?"); ?></h2>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="a" type="radio" name="q"><label for="a">A. <?php echo _("Humans seldom consider all possible outcomes before making decisions."); ?></label></li>
							<li><input id="b" type="radio" name="q"><label for="b">B. <?php echo _("Humans always completely understand an ecosystem before we begin to change it."); ?></label></li>
							<li><input id="c" type="radio" name="q"><label for="c">C. <?php echo _("Humans always consider all possible outcomes before making decisions."); ?></label></li>
							<li><input id="d" type="radio" name="q"><label for="d">D. <?php echo _("Nature is a simple system with few hard-to-understand relationships."); ?></label></li>
						</ul>
					</form>
					<img src="images/20/humans.jpg">
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #5")." - "._("How did I do?"); ?></h1>
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
		<a href="21.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Interacting with nature..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/svgcheckbx2.js"></script>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<img src="images/20/humans.jpg"><p>' + 'A. '  + '<?php echo _("Humans seldom consider all possible outcomes before making decisions."); ?></p>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Humans accidentally cause problems when we consider only positive outcomes of our decisions."); ?></p>');
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<img src="images/20/humans.jpg"><p>' + 'B. '  + '<?php echo _("Humans always completely understand an ecosystem before we begin to change it."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Very few ecosystems are completely understood."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<img src="images/20/humans.jpg"><p>' + 'C. '  + '<?php echo _("Humans always consider all possible outcomes before making decisions."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! It’s hard to consider all possible outcomes."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<img src="images/20/humans.jpg"><p>' + 'D. '  + '<?php echo _("Nature is a simple system with few hard-to-understand relationships."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Think again! Nature is more complex than people understand."); ?></p>');
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qq5-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "19.php"; // change to the previous page's last screen e.g. 4.html#screen2
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
