<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(14, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'biodiversity-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title>
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
h1 { color: #576306; }
.wrap { border-left: 1px dashed #d3e547; border-right: 1px dashed #d3e547; }
.bg { background: url('images/14/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question, #answer { }
#question { overflow: hidden; }
#question ul { width: 607px; margin: 0 auto; overflow: hidden; padding-left: 0; list-style: none; }
#question li { font-size: 24px; text-align: center; float: left; margin: 10px 0 10px 0; }
#question li:nth-child(3), #question li:nth-child(4) { margin-bottom: 0; }
#question img { display: inline-block; width: 200px; border-radius: 5px; }
#question label { cursor: pointer; }
#question li:nth-child(2), #question li:nth-child(4) { margin-right: 0; }
#question li:nth-child(3), #question li:nth-child(3) { margin-bottom: 0; }
#question span { display: block; font-size: 20px; text-align: center; width: 300px; }
#question span.blink { display: inline !important; }
#question input[type=radio] { display: none; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer span { display: block; text-align: center; }
#answer .answer img { margin-top: 10px; border: 4px solid #9da84a; display: inline-block; }

#question h2, #answer h2 { display: inline; }

.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
span.checked { color: #4f5906; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { border: 4px solid #9da84a; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #4f5906; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
img.next-toggle { display: none; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<h2><?php echo _("Which of the following is <span class='blink'>least likely</span> to help determine the type of biome that will define a particular location?"); ?></h2>
				<ul>
					<li><label for="a"><img class="grayscale" src="images/14/a.jpg"></label><input type="radio" id="a" name="q"><span><?php echo _("Distance from the equator"); ?></span></li>
					<li><label for="b"><img class="grayscale" src="images/14/b.jpg"></label><input type="radio" id="b" name="q"><span><?php echo _("Waterfowl migration patterns"); ?></span></li>
					<li><label for="c"><img class="grayscale" src="images/14/c.jpg"></label><input type="radio" id="c" name="q"><span><?php echo _("Average annual rainfall"); ?></span></li>
					<li><label for="d"><img class="grayscale" src="images/14/d.jpg"></label><input type="radio" id="d" name="q"><span><?php echo _("Average annual temperature"); ?></span></li>
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
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="15.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>
	<script>
	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>,
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

		answer.find('.answer').html('<img src="images/14/a.jpg"><span><?php echo _("Distance from the equator"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No.... Distance from the equator is related to temperature patterns."); ?></p>');
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

		answer.find('.answer').html('<img src="images/14/b.jpg"><span><?php echo _("Waterfowl migration patterns"); ?></span>');
		answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. Migration patterns don't determine biomes; they are determined by biomes."); ?></p>");
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

		answer.find('.answer').html('<img src="images/14/c.jpg"><span><?php echo _("Average annual rainfall"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Rainfall patterns determine biomes."); ?></p>');
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

		answer.find('.answer').html('<img src="images/14/d.jpg"><span><?php echo _("Average annual temperature"); ?></span>');
		answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Temperature patterns determine biomes."); ?></p>');
		ans = 'D';
	});

	function save() {
		if (answered == 0) {
			saveAnswer('biodiversity-qq1-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "13.php"; // change to the previous page's last screen e.g. 4.html#screen2
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
	<?php include("setlocale.php"); ?>
</body>
</html>

