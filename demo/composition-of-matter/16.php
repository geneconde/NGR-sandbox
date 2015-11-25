<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
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
.wrap { border-left: 1px dashed #E6C0DE; border-right: 1px dashed #E6C0DE; }
.bg { background: url('images/16/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question ul { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
#question li { display: block; position: relative; font-size: 24px; padding: 0 0 10px 20px; vertical-align: top; color: rgba(0,0,0,.9); }
#question section { overflow: hidden; }
#question section ul { float: left; width: 350px; margin-left: 70px; margin-top: 40px; }
#question section img { float: right; width: 320px; margin: 10px 80px 0 0; }
#box { text-align: center; margin: 20px auto 0; position: relative; z-index: 6; }
#box .info { padding: 20px 0; color: #114E22; }
#hexaflip { display: inline-block; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }
#hexaflip {width:100% !important;}
#question .placeholder, #answer .placeholder { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
html[dir="rtl"] #question section ul { float: right; }
html[dir="rtl"] #question section img { margin: 10px 0 0 0; }
html[dir="rtl"] #question section ul { margin: 0; padding-right: 5px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question section ul { margin-left: 0; }
	#question section img { width: 270px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Quiz Question #3'); ?></h1>
				<div class='placeholder'>
					<h2><?php echo _('What term best describes water?'); ?></h2>
					<section>
						<ul>						
							<li><?php echo _('A'); ?>. <?php echo _('Heterogeneous mixture'); ?></li>
							<li><?php echo _('B'); ?>. <?php echo _('Homogeneous mixture'); ?></li>
							<li><?php echo _('C'); ?>. <?php echo _('Element'); ?></li>
							<li><?php echo _('D'); ?>. <?php echo _('Molecule'); ?></li>
						</ul>

						<img src="images/16/water.jpg">
					</section>
					<div id="box">
						<p class="info"><?php echo _('Rotate or flip the box below either up or down to set your answer. Click, hold and slide mouse up or down.'); ?></p>

						<div id="hexaflip"></div>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _('Quiz Question #3'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div class='placeholder'>
					<p><?php echo _('You answered...'); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Identifying elements...'); ?></strong></section></section>

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
			answer.find('.answer').html('<img src="images/others/a.png"><span><?php echo _("Heterogeneous mixture"); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Water by itself is not a mixture unless it is mixed with something else."); ?></p>');
			ans = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer.find('.answer').html('<img src="images/others/b.png"><span><?php echo _("Homogeneous mixture"); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Water by itself is not a mixture unless it is mixed with something else."); ?></p>');
			ans = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer.find('.answer').html('<img src="images/others/c.png"><span><?php echo _("Element"); ?></span>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Water is a compound, including two elements hydrogen and oxygen."); ?></p>');
			ans = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer.find('.answer').html('<img src="images/others/d.png"><span><?php echo _("Molecule"); ?></span>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Water is a compound, a particle of water is a molecule."); ?></p>');
			ans = 'D';
		}

		if (answered == 0) {
			//saveAnswer('composition-of-matter-qq3-a', ans);
			answered = 1;
		}
	}

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
	<script src="scripts/hexaflip.js"></script>
	<script>
	var hexa,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 160 });
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
