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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.wrap { border-left: 1px dashed #ffdf70; border-right: 1px dashed #ffdf70; }
.bg { background: url('images/15/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
h2 { width: 660px; }
#answer .images { overflow: hidden; width: 465px; float: right; margin-top: 5px; }
#answer .images img { margin-right: 20px; display: block; background: rgba(0, 0, 0, .1); padding: 6px; width: 200px; float: left; }
#question .images img:last-child, #answer .images img:last-child { margin-right: 0; }
#answer .images { float: none; margin: 20px 0 0; width: auto; text-align: center; }
#answer .images img { float: none; display: inline-block; background: none; padding: 0; }
#answer { display: none; }
#answer p { text-align: center; }
#answer .answer span { display: block; text-align: center; }
#answer .answer img { margin-top: 10px; display: inline-block; }
.feedback { font-size: 24px; margin-top: 10px; text-align: center; }
.feedback img { vertical-align: middle; }
img.next-toggle { display: none; }
.ac-custom { width: 100%; margin-bottom: 20px; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #566204; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #566204; }
.ac-custom svg path { stroke: #566204; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
.ac-custom li {padding:10px 0;}
.ac-custom ul, .ac-custom ol {width:40%;}
.images {display:block;margin:0 auto;width:50%;}
.images img { margin-right: 20px; }
.images img:last-child { margin-right: 0; }
.placeholder {padding: 10px;margin-top: 10px;background: rgba(255, 255, 255, .5);border-radius: 5px;height: 450px;}

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-fill input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-fill label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -7px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 25px; top: 15px; }
html[dir="rtl"] #question1 li label { text-align: right; }
#buttons .next { display: none;}
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
.images {  width: 64% !important; }
#answer .images { width: 100% !important;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<div>
				<h2><?php echo _("Take a look at the two pictures below and determine what they have in common."); ?></h2>
				<section>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ol>
							<li><input id="a" name="q" type="radio"><label for="a">A. <?php echo _("They are both cells."); ?></label></li>
							<li><input id="b" name="q" type="radio"><label for="b">B. <?php echo _("They are both tissues."); ?></label></li>
							<li><input id="c" name="q" type="radio"><label for="c">C. <?php echo _("They are both organs."); ?></label></li>
							<li><input id="d" name="q" type="radio"><label for="d">D. <?php echo _("They are both body systems."); ?></label></li>
						</ol>
					</form>
					
				</section>
				<div class="images ">
						<img src="images/15/a.png">
						<img src="images/15/b.png">
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="images">
					<img src="images/15/a.png">
					<img src="images/15/b.png">
				</div>
				<p class="answer"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Recognizing similarities..."); ?></strong></section></section>
	
	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1,
	a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('A. <?php echo _("They are both cells."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the eye and liver are both organs."); ?></p>');
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('B. <?php echo _("They are both tissues."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the eye and liver are both organs."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('C. <?php echo _("They are both organs."); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes, the eye and liver are both organs."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('D. <?php echo _("They are both body systems."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the eye and liver are both organs."); ?></p>');
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('healthy-body-qq2-a', ans);
			answered = 1;
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
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			question.fadeOut(function(){ save(); answer.fadeIn(); }); 
			check.fadeOut(function() { next.fadeIn(); });
		}
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
