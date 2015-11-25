<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> ><head>
<title><?php echo _("Role of Water"); ?></title>
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
h1 { color: #A183BD; }
h2 span { display: inline !important; }
.wrap { border-color: #9b98ec; }
.bg { background-image: url(images/16/bg.jpg); }

#question ul { margin: 20px auto 0; padding-left: 0; list-style: none; width: 536px; }
#question li { font-size: 22px; text-align: center; float: left; margin: 0 80px 30px 0; }
#question li:nth-child(2) { margin-right: 0; }
#question li:nth-child(3) { margin-bottom: 0; }
#question li:nth-child(4) { margin-right: 0; margin-bottom: 0; }
#question img { display: block; width: 220px; border-radius: 5px !important; }
#question span { text-align: center; padding-top: 10px; width: 220px; display: block; }
#question label { cursor: pointer; }
#question input[type=radio] { display: none; }

span.checked { color: #9C3672; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { border: 4px solid #9a98ed; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #9C3672; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 4px solid #9a98ed; }

.answer span { display: block; }
.answer img { border-radius: 5px; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }

html[dir="es"] #question li { font-size: 20px; }
html[dir="rtl"] #question li { font-size: 19px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("The <span class='blink'>best</span> kind of rock to find groundwater in would be..."); ?></h2>

				<ul class="clear">
					<li><label for="a"><img class="grayscale" src="images/16/a.jpg"></label><input type="radio" id="a" name="q"><span><?php echo _("Solid granite rock"); ?></span></li>
					<li><label for="b"><img class="grayscale" src="images/16/b.jpg"></label><input type="radio" id="b" name="q"><span><?php echo _("Rocks underground"); ?></span></li>
					<li><label for="c"><img class="grayscale" src="images/16/c.jpg"></label><input type="radio" id="c" name="q"><span><?php echo _("Rock with lots of spaces and fractures in it"); ?></span></li>
					<li><label for="d"><img class="grayscale" src="images/16/d.jpg"></label><input type="radio" id="d" name="q"><span><?php echo _("Liquid rock"); ?></span></li>
				</ul>
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Switching water filters on..."); ?></strong></section></section>

	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
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

		answer.find('.answer').html("<img src='images/16/a.jpg'><span><?php echo _("Solid granite rock"); ?></span>");
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite... solid rock has no spaces for water to occupy."); ?></p>");
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

		answer.find('.answer').html("<img src='images/16/b.jpg'><span><?php echo _("Rocks underground"); ?></span>");
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Try again... rocks with giant caves and passageways are very rare in nature so it would be hard to find a good source of groundwater in them."); ?></p>");
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

		answer.find('.answer').html("<img src='images/16/c.jpg'><span><?php echo _("Rock with lots of spaces and fractures in it"); ?></span>");
		answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct! Rocks with lots of tiny spaces and fractures in them are common and are a good place to find water. The water occupies those tiny spaces and is a common source of groundwater."); ?></p>");
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

		answer.find('.answer').html("<img src='images/16/d.jpg'><span><?php echo _("Liquid rock"); ?></span>");
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope! there is no such thing as liquid rock."); ?></p>");
		ans = 'D';
	});

	function save() {
		if (answered == 0) {
			saveAnswer('role-of-water-qq1-a', ans);
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
		checkAnswer = $('.grayscale-off').length;

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

	<script src="scripts/jpreloader.js"></script>

	
	<?php include("setlocale.php"); ?>
</body>
</html>
