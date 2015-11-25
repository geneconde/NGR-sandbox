<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'behaviors-qq6-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
 <!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behavior'); ?></title>
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
h1 { color: #1F7FB1; }
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/19/bg.jpg); }

#question li { padding: 8px 0; }

.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #0C68B1; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #0C68B1; }
.ac-custom svg path { stroke: #0C68B1; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }
#question img, .ansImg img { display: block;margin:10px auto;width:300px; }

html[dir="rtl"] .ac-custom { float: right; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; width: 100%; }
html[dir="rtl"] #question .ac-swirl input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question .ac-swirl label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question .ac-swirl svg { right: 36px; margin-top: -6px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question li label { text-align: right; }
html[dir="rtl"] #question ul { float: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<div>
					<h2><?php echo _("On the first attempt, a mouse takes 20 minutes to complete a maze. By the fourth time, the same mouse takes only 12 minutes to finish the maze. What does this show?"); ?></h2>
	
					<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
						<ul>
							<li><input id="a" type="radio" name="q">
								<label for="a"><?php echo _("The mouse did not have sharp instincts the first time completing the maze."); ?></label>
							</li>
							<li><input id="b" type="radio" name="q">
								<label for="b"><?php echo _("The mouse wanted to complete the maze to make the scientist happy."); ?></label>
							</li>
							<li><input id="c" type="radio" name="q">
								<label for="c"><?php echo _("The mouse had excellent reflexes the third time the maze was completed."); ?></label>
							</li>
							<li><input id="d" type="radio" name="q">
								<label for="d"><?php echo _("The mouse experienced the maze and had the ability to learn new behaviors."); ?></label>
							</li>
						</ul>
					</form>
					<img src="images/19/mouse-maze.jpg" />
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div>
					<h2><?php echo _("On the first attempt, a mouse takes 20 minutes to complete a maze. By the fourth time, the same mouse takes only 12 minutes to finish the maze. What does this show?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="ansImg"></div>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _("Check Answer"); ?>"></a>
		<a href="20.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script>
	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<?php echo _("The mouse did not have sharp instincts the first time completing the maze."); ?>');
			answer.find('.ansImg').html('<img src="images/19/mouse-maze.jpg" />');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, the mouse traveled through the maze based on its instinct, but needed more experience to learn how to get to the end."); ?></p>");
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<?php echo _("The mouse wanted to complete the maze to make the scientist happy."); ?>');
			answer.find('.ansImg').html('<img src="images/19/mouse-maze.jpg" />');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, the statements show no sign of this behavior. It shows the animal's ability to learn new behaviors."); ?></p>");
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<?php echo _("The mouse had excellent reflexes the third time the maze was completed."); ?>');
			answer.find('.ansImg').html('<img src="images/19/mouse-maze.jpg" />');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, reflexes are automatic responses to a stimulus. Going from 20 to 12 minutes in four tries shows the animal's ability to learn new behaviors."); ?></p>");
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<?php echo _("The mouse experienced the maze and had the ability to learn new behaviors."); ?>');
			answer.find('.ansImg').html('<img src="images/19/mouse-maze.jpg" />');
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. Through trial and error the animal learned how to get to the maze in a faster way, that is why the time reduced from 20 to 12 minutes."); ?></p>");
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('behaviors-qq6-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "18.php";
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

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
