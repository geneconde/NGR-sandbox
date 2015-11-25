<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Built to Survive"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" href="styles/locale.css" />
	<!--<link rel="stylesheet" href="styles/normalize.css" />-->
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<style>
		body { font-size: 24px; overflow: hidden; }
		h1 { color: #4F8AD3; }
		.bg { background-image: url(images/16/bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
		img.back-toggle-answer, #buttons .next { display: none; }
		#question { text-align: center; }
		#question ul { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
		#question li { margin: 0 auto; padding: 5px 0; position: relative; text-align: left; }
		#question label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 28px; vertical-align: top; color: rgba(0,0,0,.9);
		cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
		#question input[type="radio"], #question label::before{ width: 20px; height: 20px; top: 50%; left: 0; margin-top: -12px; position: absolute; cursor: pointer; }
		#question input[type="radio"] {
			opacity: 0;
			-webkit-appearance: none;
			display: inline-block;
			vertical-align: middle;
			z-index: 100;
		}
		#question label::before {
			content: '';
			background: url(images/16/16.png) left top no-repeat;
			width: 20px;
			height: 20px;
			-webkit-transition: opacity 0.3s;
			transition: opacity 0.3s;
		}
		#question input[type="radio"]:checked + label { color: #000; }
		#question input[type="radio"]:checked + label::before { background-position: left bottom; }
		#question img { display: inline-block; margin-top: 30px; }
		#answer { display: none; text-align: center; }
		#answer .feedback { overflow: hidden; }
		#answer-icon { vertical-align: middle; margin-right: 10px; height: 30px;  }
		
		.video-container{
			width:45%;
			height:240px;
			margin:0 auto;
				border: 6px solid #5BC236 ;
				-moz-border-radius: 15px;
				border-radius: 15px;
			margin-top:20px;
			margin-bottom:20px;
			overflow:hidden;
			background-color: black;
		}
		
		.video-container iframe { width: 100%; height: 100%; border: 0; }
		html[dir="rtl"] #question li { text-align: right; }
		html[dir="rtl"] #question label { padding: 0 28px 0 0; }
		#question input[type="radio"], #question label::before { right: 0; }
		html[dir="rtl"] #answer p { text-align: center; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<h2><?php echo _("Why does the Venus flytrap absorb insects?"); ?></h2>
				<ul>						
					<li>
						<input id="a" name="q" type="radio">
						<label for="a">A. <?php echo _("Because it is defending itself against attack from insects."); ?></label>
					</li>
					<li>
						<input id="b" name="q" type="radio">
						<label for="b">B. <?php echo _("To supplement the energy it lacks from using photosynthesis alone."); ?></label>
					</li>
					<li>
						<input id="c" name="q" type="radio">
						<label for="c">C. <?php echo _("Because it does not use photosynthesis to obtain energy."); ?></label>
					</li>
					<li>
						<input id="d" name="q" type="radio">
						<label for="d">D. <?php echo _("Because its roots are unable to gather any nutrients from the soil."); ?></label>
					</li>
				</ul>
				<div class="video-container">
					<iframe src="images/16/flytrap.mp4"></iframe>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer"></div>
				<div class="video-container">
					<iframe src="images/16/flytrap.mp4"></iframe>
				</div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is..."); ?></strong></section></section>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/modernizr.custom.63321.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/save-answer.js"></script>
	<script>
		var back = $('a.back-toggle'),
			next = $('a.next-toggle'),
			check = $('a.check-toggle'),
			question = $('#question'),
			answer = $('#answer'),
			answered = 1,
			nullAnswer = false;
			
		question.find('input[type=radio]').on('click', function() {
			var radio = $(this);
			if (radio.attr('id') == 'a') {
				answer.find('.answer').html('<p>A. <?php echo _("Because it is defending itself against attack from insects."); ?></p>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png" id="answer-icon" alt="Wrong" /><?php echo _("No, the insects are not harming the Venus flytrap- they are actually lunch. The plant absorbs insects to supplement the energy it lacks from using photosynthesis."); ?></p>');
			}
			if (radio.attr('id') == 'b') {
				answer.find('.answer').html('<p>B. <?php echo _("To supplement the energy it lacks from using photosynthesis alone."); ?></p>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png" id="answer-icon" alt="Correct" /><?php echo _("Correct. This plant produces energy by photosynthesis like all other plants, but consumes insects to get more energy."); ?></p>');
			}
			if (radio.attr('id') == 'c') {
				answer.find('.answer').html('<p>C. <?php echo _("Because it does not use photosynthesis to obtain energy."); ?></p>');
				answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png' id='answer-icon' alt='Wrong' /><?php echo _("No, the Venus flytrap is a plant and it does produce energy through photosynthesis. However, it is not enough for the plant's needs and consumes insects as well."); ?></p>");
			}
			if (radio.attr('id') == 'd') {
				answer.find('.answer').html('<p>D. <?php echo _("Because its roots are unable to gather any nutrients from the soil."); ?></p>');
				answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png' id='answer-icon' alt='Wrong' /><?php echo _("No, the Venus flytrap's roots work properly, and the plant produces energy through photosynthesis. However, at times, the energy obtained by photosynthesis is not enough for the plant, and so it will supplement its diet by consuming insects."); ?></p>");
			}
		});
		
		function save() {
			var answer,
				a = $('#a'),
				b = $('#b'),
				c = $('#c'),
				d = $('#d');
			if (a.is(':checked')) answer = 'A';
			if (b.is(':checked')) answer = 'B';
			if (c.is(':checked')) answer = 'C';
			if (d.is(':checked')) answer = 'D';
			if (answered == 0) {
				saveAnswer('built-to-survive-qq1-a', answer);
				answered = 1;
			}
		}
		
		check.on('click', function(e) {
			checkNull();
			if (nullAnswer == true){
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answer."); ?>");
				nullAnswer = false;
			} else {
				check.fadeOut(function() { next.fadeIn(); });
				question.fadeOut(function() {
					save();
					answer.fadeIn();
				});
			}
		});
		
		back.on('click', function() {
			if(question.is(':visible')) {
				document.location.href = '15.php';
			} else if (answer.is(':visible')) {
				next.fadeOut(function() { check.fadeIn(); });
				answer.fadeOut(function() {
					question.fadeIn();
				});
			}
		});
		
		function checkNull() {
			if(!$('#a').is(':checked') && !$('#b').is(':checked') && !$('#c').is(':checked') && !$('#d').is(':checked')) nullAnswer = true;
		}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
