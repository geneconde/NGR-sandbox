<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'earth-materials-and-systems-qq2-a');
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
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/17/bg.jpg); }

 #question ul { width: 850px; list-style: none; padding: 0; margin: 0; }
 #question ul li:nth-last-of-type(-n+2) { margin-top: 5%; }
 #question li { float: left; width: 300px; margin: 0 60px; }
 #question li:last-child { margin-right: 0; }
 input[type=radio] { display: none; }
 label { font-size: 24px; display: block; text-align: center; cursor: pointer; width: 300px; }
 input[type="radio"] + label img { border: 4px solid #fee27e; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 300px; }
 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden; }
 input[type="radio"] + label { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 15px; }
 input[type="radio"]:checked + label {}

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .image img { margin-top: 10px; border: 4px solid #fee27e; }

.image img { width: 300px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }
<?php if ($language == 'es_ES'): ?>
	label { font-size: 22px; }
<?php endif; ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question li {margin: 0 27px;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("The best place to build a house so it won't get destroyed by the hydrosphere is..."); ?></h2>

				<ul class="clear">
					<li>
						<input type="radio" id="a1" name="q1">
						<label for="a1"><img src="images/17/a.jpg"><span><?php echo _("Right on an ocean beach"); ?></span></label>
					</li>
					<li>
						<input type="radio" id="b1" name="q1">
						<label for="b1"><img src="images/17/b.jpg"><span><?php echo _("In a forest meadow"); ?></span></label>
					</li>
					<li>
						<input type="radio" id="c1" name="q1">
						<label for="c1"><img src="images/17/c.jpg"><span><?php echo _("On a cliff overlooking the ocean"); ?></span></label>
					</li>
					<li>
						<input type="radio" id="d1" name="q1">
						<label for="d1"><img src="images/17/d.jpg"><span><?php echo _("On the bank of a river"); ?></span></label>
					</li>
					
				</ul>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="image"></div>
				<div class="placeholder">
					<div><p class="answer"></p></div>
					<div class="feedback"></div>
				</div>						
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Building a house..."); ?></strong></section></section>

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

		if (radio.attr('id') == 'a1') {
			answer.find('.image').html('<img src="images/17/a.jpg">');
			answer.find('.answer').html('<?php echo _("Right on an ocean beach"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _('No. There is a lot of possible water damage on the beach.'); ?></p>");
			ans = 'A';
		}

		if (radio.attr('id') == 'b1') {
			answer.find('.image').html('<img src="images/17/b.jpg">');
			answer.find('.answer').html('<?php echo _("In a forest meadow"); ?>');
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _('Correct. In a forest meadow there is the least amount of possible wind and water damage.'); ?></p>");
			ans = 'B';
		}

		if (radio.attr('id') == 'c1') {
			answer.find('.image').html('<img src="images/17/c.jpg">');
			answer.find('.answer').html('<?php echo _("On a cliff overlooking the ocean"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _('No. There is a lot of possible wind and water damage on a cliff.'); ?></p>");
			ans = 'C';
		}

		if (radio.attr('id') == 'd1') {
			answer.find('.image').html('<img src="images/17/d.jpg">');
			answer.find('.answer').html('<?php echo _("On the bank of a river"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _('No. There is a lot of possible water damage on the bank of a river.'); ?></p>");
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('earth-materials-and-systems-qq2-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "16.php";
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

	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
