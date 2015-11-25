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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
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
.bg { background: url('images/15/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; overflow: hidden; }
#question ul { list-style: none; margin: 0 0 0 27px; padding: 0; width: 800px; } 
#question li { display: block; position: relative; font-size: 24px; padding: 0 0 10px 0; vertical-align: top; color: rgba(0,0,0,.9); }
#question li:last-child { padding-bottom: 0; }
#box { text-align: center; margin-top: 20px; }
#box h2 { padding: 0 0 10px; color: #5F8F23; text-align: center; }
#hexaflip { margin: 0 0 0 337px; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer img { margin: 15px 0; }
.answer span { display: block; }
.feedback { font-size: 24px; margin-top: 10px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }
html[dir="rtl"] #hexaflip {margin: 0 auto;}
html[dir="rtl"] #question ul {margin: 0 27px 0 0;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Which of the following statement about coal and petroleum is <span class='blink'>incorrect</span>?"); ?></h2>
				<ul>						
					<li>A. <?php echo _("Coal and petroleum are important fuel resources."); ?></li>
					<li>B. <?php echo _("There is an unlimited supply of them for years to come."); ?></li>
					<li>C. <?php echo _("Burning them has negative side effects for the environment."); ?></li>
					<li>D. <?php echo _("They are extracted through deep wells and mines."); ?></li>
				</ul>
				<div id="box">
					<h2><?php echo _("Rotate or flip the box below either up or down to set your answer. Click, hold and slide mouse up or down."); ?></h2>
					<div id="hexaflip"></div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Digging coal..."); ?></strong></section></section>

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
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("Coal and petroleum are important fuel resources."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, a great deal of coal and petroleum are used for energy."); ?></p>');
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("There is an unlimited supply of them for years to come."); ?></span>');
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right. Both coal and petroleum have limited supplies."); ?></p>");
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("Burning them has negative side effects for the environment."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry, there are many negative side effects from burning coal and petroleum."); ?></p>');
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("They are extracted through deep wells and mines."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Many wells and mines are very deep indeed."); ?></p>');
			ans = 'D';
		}

		if (answered == 0) {
			saveAnswer('energy-for-life-qq2-a', ans);
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
		check.fadeOut(function() { next.fadeIn(); });
		question.fadeOut(function(){ answer.fadeIn(); }); 
		save();
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
