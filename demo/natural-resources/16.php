<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
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
h1 { color: #558653; }
h2 { margin-bottom: 0; }
.wrap { border-color: #b8d767; }
.bg { background-image: url(images/16/bg.jpg); }

#question ul { margin: 5px auto 0; padding-left: 0; list-style: none; width: 620px; }
#question li { font-size: 20px; text-align: center; float: left; margin: 0 100px 10px 0; }
#question li:nth-child(2) { margin-right: 0; }
#question li:nth-child(4) { margin-right: 0; }
#question li:nth-child(3) { font-size: 17px; }
#question img { display: block; width: 220px; margin-left: 20px; border-radius: 5px !important; }
#question span { text-align: center; padding-top: 5px; width: 260px; display: block; }
#question label { cursor: pointer; }
#question input[type=radio] { display: none; }

span.checked { color: #4f5906; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { border: 4px solid #b7d666; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #4f5906; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 4px solid #b7d666; }
#buttons .next { display: none; }
.answer span { display: block; width: 90%; margin:0 auto; }
.answer img { border-radius: 5px; }
.feedback { font-size: 24px; text-align: center; width: 90%; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }
<?php if($language == "es_ES") { ?>
	#question li { font-size: 18px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Recycling is a way to conserve natural resources. Which is the best example of how recycling contributes to the wise and effective use of natural resources?"); ?></h2>

				<ul class="clear">
					<li><label for="a"><img class="grayscale" src="images/16/a.jpg"></label><input type="radio" id="a" name="q"><span><?php echo _("Recycling prevents garbage from being burned."); ?></span></li>
					<li><label for="b"><img class="grayscale" src="images/16/b.jpg"></label><input type="radio" id="b" name="q"><span><?php echo _("It saves fuel used for garbage trucks."); ?></span></li>
					<li><label for="c"><img class="grayscale" src="images/16/c.jpg"></label><input type="radio" id="c" name="q"><span><?php echo _("By reusing natural resource materials instead of using new sources of natural resources."); ?></span></li>
					<li><label for="d"><img class="grayscale" src="images/16/d.jpg"></label><input type="radio" id="d" name="q"><span><?php echo _("By reducing the amount of money spent on making plastic bags."); ?></span></li>
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
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Installing solar panel..."); ?></strong></section></section>

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

		answer.find('.answer').html("<img src='images/16/a.jpg'><span><?php echo _("Recycling prevents garbage from being burned."); ?></span>");
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite! Recycling does prevent some garbage from being burned but that doesn't conserve natural resources."); ?></p>");
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

		answer.find('.answer').html("<img src='images/16/b.jpg'><span><?php echo _("It saves fuel used for garbage trucks."); ?></span>");
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Recycling does save a little bit of gas used in garbage trucks but many areas have a separate truck that picks up the recycling or your family has to drive to the recycling center to drop it off."); ?></p>');
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

		answer.find('.answer').html("<img src='images/16/c.jpg'><span><?php echo _("By reusing natural resource materials instead of using new sources of natural resources."); ?></span>");
		answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Yes! By reusing natural resource materials like glass, or cans, or newspapers, new sources of natural resources like cutting trees or mining metals or sand don't have to be done."); ?></p>");
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

		answer.find('.answer').html("<img src='images/16/d.jpg'><span><?php echo _("By reducing the amount of money spent on making plastic bags."); ?></span>");
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not Really. Saving money on reusing plastic bags doesn't conserve many natural resources but it's a good thing to do anyway since those bags take thousands of years to rot away in the garbage dump and often blow all over the place."); ?></p>");
		ans = 'D';
	});

	function save() {
		if (answered == 0) {
			saveAnswer('natural-resources-qq3-a', ans);
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
			alert('<?php echo _("Please select your answers."); ?>');
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
