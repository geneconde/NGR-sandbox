<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/svgcheckbx.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
	<style>
		.bg { background-image: url(images/17/bg.jpg); }

		#question { overflow: hidden; }
		#question p { text-align: left; }
		#question ul { width: 60%; margin: 0 auto 20px; }
	 
		#box { text-align: center; }
		#box .info {}

		#hexaflip { display: inline-block; margin-top: 20px; }

		#answer { display: none; }
		#answer p { margin-bottom: 10px; }
		#answer p span { display: block; }

		.feedback img { float: none; padding-right: 10px; vertical-align: middle; }
	
		html[dir="rtl"] #question p { text-align: right; }
		html[dir="rtl"] #question ul { margin:0; }
		html[dir="rtl"] #box .info { text-align: center; }
		<?php if($language == "es_ES") { ?>
			#question ul { width:80%; }
		<?php } ?>
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Which of the following statements correctly explains the relationship between rod and cone cells?"); ?></h2>
				
				<ul>
					<li>A. <?php echo _("Rods sense black/white; cones sense color."); ?></li>
					<li>B. <?php echo _("Rods sense heat; cones sense sound."); ?></li>
					<li>C. <?php echo _("Rods sense color; cones sense smell."); ?></li>
					<li>D. <?php echo _("Rods sense taste; cones sense color."); ?></li>
				</ul>

				<div id="box">
					<p class="info"><?php echo _("Rotate or flip the box below either up or down to set your answer. Click, hold and slide mouse up or down."); ?></p>
					<div id="hexaflip"></div>
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("The rod and the cone"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/hexaflip.js"></script>
	<script src="scripts/answer.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),

		question = $('#question'),
		answer = $('#answer'),

		ans = '',
		checkAnswer = 0,
		answered = 1;

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './images/others/a.png') {
				answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("Rods sense black/white; cones sense color."); ?></span>');
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! Rods and cones are sensitive to different parts of the visible light spectrum."); ?></p>');
				ans = 'A';
			}

			if (hexaValue == './images/others/b.png') {
				answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("Rods sense heat; cones sense sound."); ?></span>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Noooo... Rods and cones have to do with vision."); ?></p>');
				ans = 'B';
			}

			if (hexaValue == './images/others/c.png') {
				answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("Rods sense color; cones sense smell."); ?></span>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Both rods and cones are related to color vision."); ?></p>');
				ans = 'C';
			}

			if (hexaValue == './images/others/d.png') {
				answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("Rods sense taste; cones sense color."); ?></span>');
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Taste is chemical. Rods and cones are electromagnetic."); ?></p>');
				ans = 'D';
			}

			if (answered == 0) {
				saveAnswer('how-animals-respond-qq2-a', ans);
				answered = 1;
			}
		}

		check.on('click', function() {
			question.fadeOut(function() { answer.fadeIn(); });
			check.fadeOut(function() { next.fadeIn(); });
			removeHash();
			addHash('#answer');
			save();
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "16.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});

		$(window).resize(function() { makeHexa(); });
	</script>
	<script>
		var hexa;
		set = ['./images/others/a.png', './images/others/b.png', './images/others/c.png', './images/others/d.png'];
        hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set }, { size: 200 });
	</script>
</body>
</html>
