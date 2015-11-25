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
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
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
h2 { width: 630px; }
.wrap { border-left: 1px dashed #ffdf70; border-right: 1px dashed #ffdf70; }
.bg { background: url('images/16/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question { text-align: center; overflow: hidden; }
#question .image { display: inline-block; margin: 30px 0 0 0; }
#question .image p { text-align: center; color: #4482F0; }
#question ul {list-style: none;padding: 0;}
#question li {display: block;position: relative;font-size: 24px;padding: 0 0 10px 20px;vertical-align: top;color: rgba(0,0,0,.9);text-align: left;}
#question img, #answer img { display: inline-block; margin-top: 20px; background: rgba(0, 0, 0, .1); padding: 6px; }
#answer img { background: none; padding: 0; }
#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border-radius: 0 !important; }
.answer span { display: block; }
.feedback { font-size: 24px; margin-top: 10px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }
img.next-toggle { display: none; }
#box { text-align: center; margin-bottom: 30px; }
#box .info { padding: 0 0 20px; color: #70582E; }
#hexaflip { margin-left: 330px; margin-top: 20px; }
<?php if($language == "es_ES") { ?>
	#box { margin-top: 0; }
<?php } ?>

html[dir="rtl"] #question li {text-align: right;}
html[dir="rtl"] .info {text-align: center;}
html[dir="rtl"] #hexaflip {margin-right: 330px; margin-top: 20px;}
#buttons .next { display: none;}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
html[dir="rtl"] #hexaflip {  margin-right: 283px !important; }

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Choose the correct statement about the brain."); ?></h2>
					<ul>
						<li>A. <?php echo _("The brain controls everything the body does."); ?></li>
						<li>B. <?php echo _("Some activities, like breathing and heart rate, are not controlled by the brain."); ?></li>
						<li>C. <?php echo _("The nervous system controls all body functions."); ?></li>
						<li>D. <?php echo _("Some actions, like pulling your hand away from hot water, are not controlled by the brain."); ?></li>
					</ul>
				<div id="box">
					<p class="info"><?php echo _("Rotate or flip the box below either up or down to set your answer. Click, hold and slide mouse up or down."); ?></p>

					<div id="hexaflip"></div>
				</div>
				<!-- <img src="images/16/brain.png"> -->
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<!-- <img src="images/16/brain.png"> -->
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Brain interpreting information..."); ?></strong></section></section>
	<script src="scripts/svgcheckbx2.js"></script>
	<script src="scripts/hexaflip.js"></script>
	<script>
	var hexa,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 200 });
	</script>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 0;

	function save() {
		var ans = null;
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("The brain controls everything the body does."); ?></span>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, our brain controls almost everything we do. It does not control our reflexes to make sure we stay safe and out of harm's way."); ?></p>");
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("Some activities, like breathing and heart rate, are not controlled by the brain."); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the brain controls our breathing and heartbeat."); ?></p>');
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("The nervous system controls all body functions."); ?></span>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, our brain controls almost everything we do. It does not control our reflexes to make sure we stay safe and out of harm's way."); ?></p>");
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("Some actions, like pulling your hand away from hot water, are not controlled by the brain."); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The reflex actions are taken care of by the spinal cord. The nervous system controls these reflexes, but not the brain."); ?></p>');
			ans = 'D';
		}

		if (answered == 0) {
			//saveAnswer('healthy-body-qq3-a', ans);
			answered = 1;
		}
	}

	/*function save() {
		if (answered == 0) {
			//saveAnswer('healthy-body-qq3-a', ans);
			answered = 1;
		}
	}*/

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "15.php"; // change to the previous page's last screen e.g. 4.html#screen2
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
