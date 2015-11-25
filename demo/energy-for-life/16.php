<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title>
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
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #5b4d4f; }
.wrap { border-left: 1px dashed #c0f84a; border-right: 1px dashed #c0f84a; }
.bg { background: url('images/16/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question { overflow: hidden; }
#question ul { width: 800px; margin: 0 0 0 27px; background: url(images/16/arrows.png) no-repeat center 36px; position: relative; height: 550px; padding-left: 0; list-style: none; }
#question img { display: inline-block; border-radius: 80px; width: 160px; height: 160px; }
#question label { cursor: pointer; }
#question li { position: absolute; font-size: 20px; width: 165px; height: 146px; text-align: center; }
#question li:nth-child(1) { left: 110px; }
#question li:nth-child(2) { right: 121px; }
#question li:nth-child(3) { top: 234px; left: 110px; }
#question li:nth-child(4) { right: 115px; top: 234px; }
#question li:nth-child(5) { bottom: 50px; left: 318px; }
#question span { display: block; text-align: center; }
#question span.blink { display: inline !important; }
#question input[type=radio] { display: none; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer span { display: block; text-align: center; }
#answer .answer img { margin-top: 10px; display: inline-block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
span.checked { color: #780046; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { border: 4px solid transparent; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #780046; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
#buttons .next { display: none; }
html[dir="rtl"] #question li:nth-child(1), html[dir="rtl"] #question li:nth-child(3) {left: 127px;}
html[dir="rtl"] #question li:nth-child(2), html[dir="rtl"] #question li:nth-child(4) {right: 133px;}
html[dir="rtl"] #question li:nth-child(5) {left: 341px;}


</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _('Based on the food web, which of these is <span class="blink">not</span> a consumer?'); ?></h2>
				<ul>
					<li><label for="a"><img class="grayscale" src="images/16/a.jpg"></label><input type="radio" id="a" name="q"><span><?php echo _("Eagle"); ?></li>
					<li><label for="b"><img class="grayscale" src="images/16/b.jpg"></label><input type="radio" id="b" name="q"><span><?php echo _("Sparrow"); ?></li>
					<li><label for="c"><img class="grayscale" src="images/16/c.jpg"></label><input type="radio" id="c" name="q"><span><?php echo _("Rabbit"); ?></li>
					<li><label for="d"><img class="grayscale" src="images/16/d.jpg"></label><input type="radio" id="d" name="q"><span><?php echo _("Grasshopper"); ?></li>
					<li><label for="x"><img class="grayscale" src="images/16/e.jpg"></label><input type="radio" id="x" name="q"><span><?php echo _("Grass"); ?></li>
				</ul>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Network of food relationship..."); ?></strong></section></section>
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
	d = $('#d'),
	x = $('#x');

	a.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		x.parent().find('img').removeClass().addClass('grayscale');
		x.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/16/a.jpg"><span><?php echo _("Eagle"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. The eagle is the top consumer in this web."); ?></p>');
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

		x.parent().find('img').removeClass().addClass('grayscale');
		x.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/16/b.jpg"><span><?php echo _("Sparrow"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Sparrows eat grasshoppers."); ?></p>');
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

		x.parent().find('img').removeClass().addClass('grayscale');
		x.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/16/c.jpg"><span><?php echo _("Rabbit"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Rabbits eat grass."); ?></p>');
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

		x.parent().find('img').removeClass().addClass('grayscale');
		x.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/16/d.jpg"><span><?php echo _("Grasshopper"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Grasshopper eat grass."); ?></p>');
		ans = 'D';
	});

	x.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');

		answer.find('.answer').html('<img src="images/16/e.jpg"><span><?php echo _("Grass"); ?></span>');
		answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right. The grass is the foundation of this web."); ?></p>");
		ans = 'E';
	});

	function save() {
		if (answered == 0) {
			saveAnswer('energy-for-life-qq3-a', ans);
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
		checkAnswer = $('.grayscale-off').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			question.fadeOut(function(){ save(); answer.fadeIn(); }); 
			check.fadeOut(function() { next.fadeIn(); });
		}
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
