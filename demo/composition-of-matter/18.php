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
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/lightbox.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/lightbox.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html, body { overflow: hidden; }
.wrap { border-left: 1px dashed #E6C0DE; border-right: 1px dashed #E6C0DE; }
.bg { background: url('images/18/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question { text-align: center; overflow: hidden; }
#question .image { display: inline-block; margin: 10px 30px 0 0; float: right; width: 280px; }
#question .image p { text-align: center; color: #4482F0; }
#question .image img { width: 280px; border: 4px solid #e6def3; }
#question ul { list-style: none; padding: 0; margin: 0 0 0 10px; float: left; }
.lb-data .lb-caption { font-size: 24px; padding-top: 4px; display: block; }
.ac-custom { padding: 0; max-width: 900px; margin: 16px auto 0; } 
.ac-custom h2 { font-size: 24px; font-weight: 300; padding: 0 0 0.5em; margin: 0 0 30px; }
.ac-custom ul, .ac-custom ol { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
.ac-custom li { margin: 0 auto; padding: 10px 0; position: relative; text-align: left; } 
.ac-custom label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 50px; vertical-align: top; color: rgba(0,0,0,0.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 35px; height: 35px; top: 54%; left: 0; margin-top: -20px; position: absolute; cursor: pointer; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
.ac-custom label::before { content: ''; border: 4px solid #C26298; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; } 
.ac-radio label::before { border-radius: 50%; } 
.ac-custom input[type="checkbox"]:checked + label, .ac-custom input[type="radio"]:checked + label { color: #C26298; } 
.ac-custom input[type="checkbox"]:checked + label::before, .ac-custom input[type="radio"]:checked + label::before { opacity: 0.8; }
.ac-custom svg { position: absolute; width: 20px; height: 20px; top: 42%; margin-top: -7px; left: 7px; pointer-events: none; } 
.ac-custom svg path { stroke: #C26298; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer img { border: 4px solid #e6def3; width: 55%; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }
#question .placeholder { height:350px; }
#question .placeholder, #answer .placeholder { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
<?php if($language == "es_ES") { ?>
	.ac-custom label { font-size: 19px; }
	#question .placeholder { height: 385px; }
	#answer .answer img { width: 60%; }
	.lb-data .lb-caption { text-align: center; }
<?php } ?> 
html[dir="rtl"] .lb-data .lb-caption { text-align: center; }
html[dir="rtl"] #question .placeholder { height: 385px; }
html[dir="rtl"] #answer .answer img { width: 50%; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question ul { margin: 0; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Quiz Question #5'); ?></h1>
				<div class='placeholder'>
					<h2><?php echo _('Select the <span class="blink">true</span> statement regarding elements.'); ?></h2>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="a" type="radio" name="q"><label for="a"><?php echo _('All 117 elements are man-made.'); ?></label></li>
							<li><input id="b" type="radio" name="q"><label for="b"><?php echo _('All 117 elements are naturally found.'); ?></label></li>
							<li><input id="c" type="radio" name="q"><label for="c"><?php echo _('The majority of elements are man-made.'); ?></label></li>
							<li><input id="d" type="radio" name="q"><label for="d"><?php echo _('The majority of elements are naturally found.'); ?></label></li>
						</ul>
					</form>

					<div class="image">
						<a href="images/18/elements.png" data-lightbox="image-1" title="<?php echo _('Periodic Table of Elements'); ?>"><img src="images/18/elements.png"></a>
						<p><?php echo _('Click the image to enlarge.'); ?></p>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _('Quiz Question #5'); ?> - <?php echo _('How did I do?'); ?></h1>
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
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Blending metals...'); ?></strong></section></section>
	<script src="scripts/svgcheckbx2.js"></script>
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 0;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<img src="images/18/elements.png"><p><?php echo _("All 117 elements are man-made."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! There are 117 elements, but only 23 of them are man-made."); ?></p>');
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<img src="images/18/elements.png"><p><?php echo _("All 117 elements are naturally found."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! There are 117 elements, but only 94 of them are found in nature."); ?></p>');
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<img src="images/18/elements.png"><p><?php echo _("The majority of elements are man-made."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! The majority of the elements (94 out of 117) are found in nature, only 23 are man-made."); ?></p>');
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<img src="images/18/elements.png"><p><?php echo _("The majority of elements are naturally found."); ?></p>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The majority of the elements (94 out of 117) are found in nature."); ?></p>');
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('composition-of-matter-qq5-a', ans);
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
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert("<?php echo _('Please select your answer.'); ?>");
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){ answer.fadeIn(); }); 
			save();
		}
	});
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
