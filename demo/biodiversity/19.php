<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
body { overflow:hidden; }
h1 { color: #576306; }
.wrap { border-left: 1px dashed #d3e547; border-right: 1px dashed #d3e547; }
.bg { background: url('images/19/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question ul { list-style: none; padding: 0; }
#question li { display: block; position: relative; font-size: 24px; padding: 0 0 10px 0; vertical-align: top; color: rgba(0,0,0,.9); }
#question li:last-child { padding-bottom: 0; }
#box { text-align: center; margin-top: 0; }
#box .info { padding: 20px 0; color: #971714; text-align: center; }
#hexaflip { margin: 0 0 15px 330px; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer img { margin: 15px 0; border-radius: 0; }
.answer span { display: block; }
.feedback { font-size: 24px; margin-top: 10px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }

html[dir="rtl"] #question ul { width: 90%; margin-right: 60px; }
html[dir="rtl"] #hexaflip { margin:0 auto; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("Warming seawater is making coral survival less and less likely. Why is this a problem for ocean biomes? Rotate or flip the 3D box below either up or down to set your answer."); ?></h2>
				<ul>						
					<li>A. <?php echo _("Coral is the food supply of many species of fish."); ?></li>
					<li>B. <?php echo _("Many species make coral reefs their homes."); ?></li>
					<li>C. <?php echo _("Coral is used by artists and home decorators."); ?></li>
					<li>D. <?php echo _("Coral reefs can sometimes be seen from space."); ?></li>
				</ul>
				<div id="box">
					<p class="info"><?php echo _("Click, hold and drag up or down"); ?></p>

					<div id="hexaflip"></div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script src="scripts/hexaflip.js"></script>
	<script>
	var hexa,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>
	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	function save() {
		var ans = null;
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("Coral is the food supply of many species of fish."); ?></span>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. Many species live in the coral reefs but don't eat them."); ?></p>");
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("Many species make coral reefs their homes."); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Coral reefs support many ocean animal species."); ?></p>');
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("Coral is used by artists and home decorators."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! It is illegal to collect or even disturb coral reefs."); ?></p>');
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("Coral reefs can sometimes be seen from space."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. The fact that some coral reefs can be seen from space shows just how important they are."); ?></p>');
			ans = 'D';
		}

		if (answered == 0) {
			saveAnswer('biodiversity-qq6-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "18.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		check.fadeOut(function() { next.fadeIn(); });
		question.fadeOut(function(){ answer.fadeIn(); }); 
		save();
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>

