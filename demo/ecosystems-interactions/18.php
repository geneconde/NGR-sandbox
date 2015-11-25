<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
body{ overflow:hidden; }
h2 { margin: 0; }
.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
.bg { background: url('images/18/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { padding: 10px; margin-top: 10px; background: rgba(255, 255, 255, .5); border-radius: 5px; }
#question, #answer {-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
#question p { text-align: left; }
#question ul { list-style: none; padding-left: 84px; margin-top: 10px; }
#question li { font-size: 24px; }
#answer { display: none; }
#box { text-align: center; }
#box .info { color: #8B6E22; }
#hexaflip { margin: 20px 0 10px 310px; }
#answer p { text-align: center; margin-bottom: 10px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }

html[dir="rtl"] #question p { text-align: right; }
html[dir="rtl"] #hexaflip { margin: 0 auto; }
	@media only screen and (max-width: 1250px){

		#question li {
		    font-size: 21px;
		}
		h1 {
		    padding-top: 33px;
		}
	}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<div class="placeholder">
					<h2><?php echo _("Predators are important to their prey because:"); ?></h2>
					<ul>
						<li><?php echo _("A. Predators serve as food for their prey."); ?></li>
						<li><?php echo _("B. Predators seldom consume prey for food."); ?></li>
						<li><?php echo _("C. Predators hide from their prey to avoid being eaten."); ?></li>
						<li><?php echo _("D. Predators kill and eat prey, helping to control the prey population."); ?></li>
					</ul>
					<div id="box">
						<p class="info"><?php echo _("Rotate or flip the box below either up or down to set your answer. Click, hold and slide mouse up or down."); ?></p>
						<div id="hexaflip"></div>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #3")." - "._("How did I do?"); ?></h1>
				<div class="placeholder">
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Hunting for food..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/hexaflip.js"></script>
	<script>
	var hexa,
	images = ['./images/others/a.png','./images/others/b.png','./images/others/c.png','./images/others/d.png'];
	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 220 });
	</script>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	function save() {
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("A. Predators serve as food for their prey."); ?></span>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("It's the other way around... prey are the food."); ?></p>");
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("B. Predators seldom consume prey for food."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Predators always consume prey for food."); ?></p>');
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("C. Predators hide from their prey to avoid being eaten."); ?></span>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("It's the other way around... prey usually hide from predators."); ?></p>");
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("D. Predators kill and eat prey, helping to control the prey population."); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("You got it! Without predators, prey population skyrocket."); ?></p>');
			ans = 'D';
		}
		
		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qq3-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "17.php"; // change to the previous page's last screen e.g. 4.html#screen2
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
</body>
</html>
