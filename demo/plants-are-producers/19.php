<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
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
h1 { color: #AC965D; }
.wrap { border-color: #f1e392; }
.bg { background-image: url(images/19/bg.jpg); }

#question ul { margin: 20px auto 0; padding-left: 0; list-style: none; width: 536px; }
#question li { font-size: 24px; text-align: center; float: left; margin: 0 80px 40px 0; }
#question li:nth-child(2) { margin-right: 0; }
#question li:nth-child(4) { margin-right: 0; }
#question img { display: block; width: 220px; }
#question span { text-align: center; padding-top: 5px; width: 220px; display: block; }
#question label { cursor: pointer; }
#question input[type=radio] { display: none; }
#buttons .next { display: none; }
span.checked { color: #866222; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { border: 4px solid #E7D1A8; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #866222; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; }

.answer span { display: block; }
.answer img { border-radius: 5px; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("The source for the carbon needed to make simple sugars in photosynthesis is..."); ?></h2>

				<ul class="clear">
					<li><label for="a"><img class="grayscale" src="images/19/a.jpg"></label><input type="radio" id="a" name="q"><span><?php echo _("Air"); ?></span></li>
					<li><label for="b"><img class="grayscale" src="images/19/b.jpg"></label><input type="radio" id="b" name="q"><span><?php echo _("Water"); ?></span></li>
					<li><label for="c"><img class="grayscale" src="images/19/c.jpg"></label><input type="radio" id="c" name="q"><span><?php echo _("Soil"); ?></span></li>
					<li><label for="d"><img class="grayscale" src="images/19/d.jpg"></label><input type="radio" id="d" name="q"><span><?php echo _("Animals"); ?></span></li>
				</ul>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Gathering energy..."); ?></strong></section></section>

	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1,
	a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	a.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/19/a.jpg"><span><?php echo _("Air"); ?></span>');
		answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Right! Photosynthesis combines carbon dioxide molecules to make sugar."); ?></p>');
		ans = 'A';
	});

	b.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/19/b.jpg"><span><?php echo _("Water"); ?></span>');
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. Water doesn't contain carbon."); ?></p>");
		ans = 'B';
	});

	c.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/19/c.jpg"><span><?php echo _("Soil"); ?></span>');
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. Plants don't absorb much carbon from soil."); ?></p>");
		ans = 'C';
	});

	d.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/19/d.jpg"><span><?php echo _("Animals"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Animals are consumers. Try again."); ?></p>');
		ans = 'D';
	});

	function save() {
		if (answered == 0) {
			//saveAnswer('plants-are-producers-qq4-a', ans);
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
		checkAnswer = $('.grayscale-off').length;

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

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
