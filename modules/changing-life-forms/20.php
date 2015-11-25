<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(20, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'changing-life-forms-qq5-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
/* h1 { color: #000; } */
.bg { z-index: 1 !important; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/20/bg.jpg); }

#question ul { list-style: none; margin-left: 150px; padding: 0; }
#question li { display: block; position: relative; font-size: 24px; padding: 0 0 10px 0; vertical-align: top; color: rgba(0,0,0,.9); }
#question li:last-child { padding-bottom: 0; }
#box { text-align: center; margin-top: 0; }
#box .info { padding: 20px 0; color: #971714; text-align: center; width: 530px; margin: 0 auto; }
#hexaflip { margin: 0 0 15px 330px; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border-radius: 0; margin-bottom: 10px; }
#buttons .next { display: none; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }
#question h2:nth-child(4) { margin:0; }
/* .red, .green { width:700px; } */
<?php if($language == "es_ES") { ?>
	#question li { font-size: 22px; }
<?php } ?>

html[dir='rtl'] #hexaflip { margin: 0 auto; }
html[dir='rtl'] #question ul {margin-right: 90px;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("A certain bird species preys upon insects that live on tree trunks. Over a period of time, the insects burrow deeper and deeper into the bark to avoid being eaten. Which of the following changes is likely to occur in the bird population?"); ?></h2>
				<ul>						
					<li>A. <?php echo _("The birds would lay eggs earlier each spring."); ?></li>
					<li>B. <?php echo _("The birds would migrate later each fall."); ?></li>
					<li>C. <?php echo _("Beaks would become longer and thinner over time."); ?></li>
					<li>D. <?php echo _("Spot patterns on eggs would change to darker colors."); ?></li>
				</ul>
				<!-- <h2>Rotate or flip the 3D box below either up or down to set your answer.</h2> -->
				<div id="box">
					<p class="info"><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>
					<div id="hexaflip"></div>
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="21.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing to survive..."); ?></strong></section></section>
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
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	function save() {
		var ans = null;
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("The birds would lay eggs earlier each spring."); ?></span>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not likely. We can't predict a relationship between insect depth and mating time."); ?>.</p>");
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("The birds would migrate later each fall."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. We have no reason to predict any change in migration."); ?></p>');
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("Beaks would become longer and thinner over time."); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Selection will favor longer, thinner beaks to catch food."); ?></p>');
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("Spot patterns on eggs would change to darker colors."); ?></span>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. There's no reason to link food location to spot patterns."); ?></p>");
			ans = 'D';
		}

		if (answered == 0) {
			saveAnswer('changing-life-forms-qq5-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "19.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		check.fadeOut(function() { next.fadeIn(); });
		question.fadeOut(function(){
			answer.fadeIn();
			save();
			window.location.hash = '#answer';
		}); 
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
