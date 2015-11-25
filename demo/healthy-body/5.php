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
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
body { overflow: hidden; }
.wrap { border-left: 1px dashed #ffdf70; border-right: 1px dashed #ffdf70; }
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#questions p { text-align: left; }
#questions ul { float: left; width: 400px; padding: 0; list-style: none; }
#questions li { font-size: 24px; }
#answers { display: none; }
.box { float: right; width: 420px; text-align: center; margin-top: 10px; }
.box .info { font-size: 24px; color: #776337; }
#hexaflip1 { display: inline-block; margin-top: 20px; }
#hexaflip2 { display: inline-block; margin-top: 20px; }
#answers p { text-align: center; margin-bottom: 10px; }
#answers { margin-top: 0; }
#answers .answer img { border-radius: 0 !important; }
.answer { margin-top: 20px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
img.next-toggle { display: none; }
#buttons .next { display: none; }
html[dir="rtl"] #questions ul { float: right;}
html[dir="rtl"] #questions p {text-align:right; }
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
.box  {  width: 100%; }
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question2" class="clearfix">
					<h2><?php echo _("Question A. Choose the <span class='blink'>correct</span> statement."); ?></h2>
					<ul>
						<li>A. <?php echo _("Cells are made up of tissues."); ?></li>
						<li>B. <?php echo _("Tissues are made up of cells."); ?></li>
						<li>C. <?php echo _("Cells are made up of organs."); ?></li>
						<li>D. <?php echo _("All living things are made up of two or more cells."); ?></li>
					</ul>
					<div class="box">
						<p class="info"><?php echo _("Rotate or flip the box below either up or down to set your answer. Click, hold and slide mouse up or down."); ?></p>
						<div id="hexaflip2"></div>
					</div>
				</div>
			</div>				

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer2" class="clearfix">
					<h2><?php echo _("Question A. Choose the <span class='blink'>correct</span> statement."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>					
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>
	<script src="scripts/hexaflip.js"></script>

	<script>
	var hexa1,
		hexa2,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa1 = new HexaFlip(document.getElementById('hexaflip1'), { set: images }, { size: 140 });
	hexa2 = new HexaFlip(document.getElementById('hexaflip2'), { set: images }, { size: 180 });
	</script>

	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	questions = $('#questions'),
	question1 = $('#question1'),
	question2 = $('#question2'),
	answers = $('#answers'),
	answer1 = $('#answer1'),
	answer2 = $('#answer2'),
	ans1 = '',
	ans2 = '',
	checkAnswer = 0,
	answered = 0;

	function save() {
		var hexaValue2 = hexa2.getValue();

		if (hexaValue2 == './images/others/a.png') {
			answer2.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("Cells are made up of tissues."); ?></span>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, tissues are made up of cells."); ?></p>');
			ans2 = 'A';
		}

		if (hexaValue2 == './images/others/b.png') {
			answer2.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("Tissues are made up of cells."); ?></span>');
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct, tissues are made up of cells."); ?></p>');
			ans2 = 'B';
		}

		if (hexaValue2 == './images/others/c.png') {
			answer2.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("Cells are made up of organs."); ?></span>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, organs are made up of tissues (which are made up of cells)."); ?></p>');
			ans2 = 'C';
		}

		if (hexaValue2 == './images/others/d.png') {
			answer2.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("All living things are made up of two or more cells."); ?></span>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, there are single cell organisms."); ?></p>');
			ans2 = 'D';
		}

		if (answered == 0) {
			//saveAnswer('healthy-body-qq1-a', ans2);
			answered = 1;
		}
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "4.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answers.fadeOut(function(){ questions.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		check.fadeOut(function() { next.fadeIn(); });
		questions.fadeOut(function(){ answers.fadeIn(); }); 
		save();
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
