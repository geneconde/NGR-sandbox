<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Healthy Body"); ?></title>
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
.wrap { border-left: 1px dashed #ffdf70; border-right: 1px dashed #ffdf70; }
.bg { background: url('images/14/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question { overflow: hidden; }
#question ul { overflow: hidden; margin: 0 auto; padding-left: 0; width: 600px; list-style: none; }
#question li { font-size: 20px; text-align: center; width: 300px; float: left; margin: 20px 0 0 0; }
#question li:first-child { margin-top: 0; }
#question li:nth-child(2) { margin-top: 0; }
#question img { display: inline-block; padding: 6px; }
#question label { cursor: pointer; }
#question li:nth-child(2), #question li:nth-child(4) { margin-right: 0; }
#question li:nth-child(3), #question li:nth-child(3) { margin-bottom: 0; }
#question span { display: inline-block; text-align: center; width: 250px; }
#question span.blink { display: inline !important; }
#question input[type=radio] { display: none; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer { margin-top: 10px; }
#answer .answer span { display: block; text-align: center; }
#answer .answer img { margin-top: 10px; border: 6px solid rgba(0, 0, 0, .1); display: inline-block; }
.feedback { margin-top: 10px; font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
span.checked { color: #66391c; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { background: rgba(0, 0, 0, .1); filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { background: #66391c; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
img.next-toggle { display: none; }

html[dir="rtl"] #question li:nth-child(2), html[dir="rtl"]  #question li:nth-child(4) { margin-left: 0; }
html[dir="rtl"] #question span {width: 190px; font-size: 18px;}
html[dir="rtl"] #question ul {width: 700px;padding: 0;}
html[dir="rtl"] #question li {width: 350px;}
#buttons .next { display: none;}
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
.list-q li {  width: 320px !important; }
#question ul {width: 640px;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<h2><?php echo _("Click on the correct description of the body systems below."); ?></h2>
				<ul class="list-q">
					<li><label for="a"><img class="grayscale" src="images/14/a.jpg" alt="A"></label><input type="radio" id="a" name="q"><span><?php echo _("Our respiratory system brings in the oxygen."); ?></span></li>
					<li><label for="b"><img class="grayscale" src="images/14/b.jpg" alt="B"></label><input type="radio" id="b" name="q"><span><?php echo _("Our reproductive system pumps blood."); ?></span></li>
					<li><label for="c"><img class="grayscale" src="images/14/c.jpg" alt="C"></label><input type="radio" id="c" name="q"><span><?php echo _("Our digestive system fights disease."); ?></span></li>
					<li><label for="d"><img class="grayscale" src="images/14/d.jpg" alt="D"></label><input type="radio" id="d" name="q"><span><?php echo _("Our circulatory system produces offspring."); ?></span></li>
				</ul>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>
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

		answer.find('.answer').html('<img src="images/14/a.jpg"><span><?php echo _("Our respiratory system brings in the oxygen."); ?></span>');
		answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes, our respiratory system brings in the oxygen."); ?></p>');
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

		answer.find('.answer').html('<img src="images/14/b.jpg"><span><?php echo _("Our reproductive system pumps blood."); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Our reproductive system produces offspring."); ?></p>');
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

		answer.find('.answer').html('<img src="images/14/c.jpg"><span><?php echo _("Our digestive system fights disease."); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Our digestive system takes nutrients from our food."); ?></p>');
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

		answer.find('.answer').html('<img src="images/14/d.jpg"><span><?php echo _("Our circulatory system produces offspring."); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Our circulatory system pumps blood."); ?></p>');
		ans = 'D';
	});

	function save() {
		if (answered == 0) {
			saveAnswer('composition-of-matter-qq2-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "13.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('.grayscale-off').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answers."); ?>');
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
