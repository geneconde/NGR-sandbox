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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #558653; }
.wrap { border-color: #b8d767; }
.bg { background-image: url(images/15/bg.jpg); }

#question ul { list-style: none; padding: 0; width: 800px; margin: 0 auto; }
#question li { font-size: 24px; }

#box { text-align: center; margin-top: 0; }
#box .info { padding: 20px 0; color: #809649; text-align: center; }
#hexaflip { margin: 0 0 15px 330px; }
.hexaflip-cube .hexaflip-side { width: 101%; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border-radius: 0; }
#answer .feedback { width: 700px; margin: 0 auto; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }
#buttons .next { display: none; }
img.next-toggle { display: none; }
html[dir="rtl"] #hexaflip { margin: 0 auto; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Choose the correct statement about natural resources. Rotate or flip the 3D box below either up or down to set your answer."); ?></h2>

				<ul>						
					<li>A. <?php echo _("Wind and solar energy are the most important energy developed so far."); ?></li>
					<li>B. <?php echo _("Everybody should drive electric cars with rechargeable batteries."); ?></li>
					<li>C. <?php echo _("In the future we will run out of fossils fuels."); ?></li>
					<li>D. <?php echo _("Fossil fuels are the only natural resource that do not cause pollution."); ?></li>
				</ul>

				<div id="box">
					<p class="info"><?php echo _("Click, hold and drag up or down"); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Conserving resources..."); ?></strong></section></section>

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
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("Wind and solar energy are the most important energy developed so far."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not Quite. While wind and solar energy are important because they are clean and non-polluting energy sources – petroleum and coal-based energy is more important because it is so widely used for automobiles, heating and electricity generation."); ?></p>');
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("Everybody should drive electric cars with rechargeable batteries."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! It would be good if more people would drive electric cars but it is not currently practical. And electric battery powered cars still use coal and petroleum to generate the electricity necessary to recharge them."); ?></p>');
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("In the future we will run out of fossils fuels."); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! Fossil fuels like coal and petroleum are non-renewable natural resources so they will eventually all get used up and we will run out of our supply of them."); ?></p>');
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("Fossil fuels are the only natural resource that do not cause pollution."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. The use of fossil fuels for gas in automobiles and coal in power plants cause a great deal of pollution."); ?></p>');
			ans = 'D';
		}

		if (answered == 0) {
			saveAnswer('natural-resources-qq2-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "14.php";
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

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
