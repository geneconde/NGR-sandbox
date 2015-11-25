<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
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
.wrap { border-left: 1px dashed #E6C0DE; border-right: 1px dashed #E6C0DE; }
.bg { background: url('images/15/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; overflow: hidden; }
#question, #answer { }
#question { overflow: hidden; }
#question ul { width: 607px; margin: 0 auto; overflow: hidden; padding-left: 0; list-style: none; }
#question li { font-size: 24px; text-align: center; float: left; margin: 10px 0 0 0; }
#question img { display: inline-block; border-radius: 5px; }
#question label { cursor: pointer; }
#question li:nth-child(2), #question li:nth-child(4) { margin-right: 0; }
#question li:nth-child(3), #question li:nth-child(3) { margin-bottom: 0; }
#question span { display: block; text-align: center; width: 300px; }
#question span.blink { display: inline !important; }
#question input[type=radio] { display: none; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer span { display: block; text-align: center; }
#answer .answer img { margin-top: 10px; display: inline-block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
span.checked { color: #C26298; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { border: 4px solid transparent; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #C26298; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
#buttons .next { display: none; }
#question .placeholder, #answer .placeholder { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Quiz Question #2'); ?></h1>
				<div class='placeholder'>
					<h2><?php echo _('Which of these substances is an element?'); ?></h2>
					<ul>
						<li><label for="a"><img class="grayscale" src="images/15/steel.jpg" alt="Steel"></label><input type="radio" id="a" name="q"><span><?php echo _('Steel'); ?></span></li>
						<li><label for="b"><img class="grayscale" src="images/15/copper.jpg" alt="Copper pernny"></label><input type="radio" id="b" name="q"><span><?php echo _('Copper'); ?></span></li>
						<li><label for="c"><img class="grayscale" src="images/15/plastic.jpg" alt="Plastic"></label><input type="radio" id="c" name="q"><span><?php echo _('Plastic'); ?></span></li>
						<li><label for="d"><img class="grayscale" src="images/15/sugar.jpg" alt="Sugar"></label><input type="radio" id="d" name="q"><span><?php echo _('Sugar'); ?></span></li>
					</ul>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _('Quiz Question #2'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div class='placeholder'>
					<p><?php echo _('You answered...'); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Molecules around us...'); ?></strong></section></section>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 0,
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

		answer.find('.answer').html('<img src="images/15/steel.jpg"><span><?php echo _("Steel"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Steel is a special mixture called an \"alloy\". Steel is made mostly of iron with a small amount of carbon added."); ?></p>');
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

		answer.find('.answer').html('<img src="images/15/copper.jpg"><span><?php echo _("Copper"); ?></span>');
		answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! An element is made up of the same type of atom. Copper is an element."); ?></p>');
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

		answer.find('.answer').html('<img src="images/15/plastic.jpg"><span><?php echo _("Plastic"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Plastic is a compound blend of many elements including chains of carbon."); ?></p>');
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

		answer.find('.answer').html('<img src="images/15/sugar.jpg"><span><?php echo _("Sugar"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Sugar is a compound made up of carbon, hydrogen, and oxygen."); ?></p>');
		ans = 'D';
	});

	function save() {
		var ans;

		if (answered == 0) {
			saveAnswer('composition-of-matter-qq2-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "14.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('.grayscale-off').length;

		if (checkAnswer == 0) {
			alert("<?php echo _('Please select your answer.'); ?>");
		} else {
			question.fadeOut(function(){ save(); answer.fadeIn(); }); 
			check.fadeOut(function() { next.fadeIn(); });
		}
	});
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
