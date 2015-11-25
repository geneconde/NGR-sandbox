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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.wrap { border-left: 1px dashed #E6C0DE; border-right: 1px dashed #E6C0DE; }
.bg { background: url('images/17/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

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
.ac-custom svg { position: absolute; width: 20px; height: 20px; top: 41%; margin-top: -7px; left: 7px; pointer-events: none; } 
.ac-custom svg path { stroke: #C26298; stroke-width: 13px; stroke-linecap: round; stroke-linejoin: round; fill: none; }

#question ul { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
#question li { margin: 0 auto; padding: 10px 0; position: relative; }
#question label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 45px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#question section { overflow: hidden; }
#question section ul { float: left; width: 320px; margin-left: 30px; margin-top: 40px; }
#question section .image { float: right; margin: 10px 20px 0 0; width: 450px; height: 266px; background: url(images/17/brass.jpg) no-repeat; position: relative; border-radius: 10px; border: 4px solid #e6def3; }
#question section .image h3, #question section .image p { position: absolute; font-size: 18px; }
#question section .image h3 { font-weight: normal; top: -5px; left: 160px; font-size: 20px; }
#question section .image p:nth-child(2) { left: -6px; top: 105px; font-size: 12px; text-transform: uppercase; -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -o-transform: rotate(-90deg); }
#question section .image p:nth-child(3) { left: 77px; top: 212px; }
#question section .image p:nth-child(4) { left: 187px; top: 212px; }
#question section .image p:nth-child(5) { left: 292px; top: 212px; }
#question section .image p:nth-child(6) { left: 393px; top: 212px; }
#question section .image p:nth-child(7) { left: 220px; bottom: 2px; font-size: 12px; text-transform: uppercase; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .image { margin-top: 10px; width: 476px; height: 266px; display: inline-block; background: url(images/17/brass.jpg) no-repeat; position: relative; border-radius: 10px; border: 4px solid #e6def3; }
#answer .image h3, #answer .image p { position: absolute; font-size: 18px; }
#answer .image h3 { font-weight: normal; top: -5px; left: 160px; font-size: 20px; }
#answer .image p:nth-child(2) { left: -6px; top: 105px; font-size: 12px; text-transform: uppercase; -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -o-transform: rotate(-90deg); }
#answer .image p:nth-child(3) { left: 77px; top: 212px; }
#answer .image p:nth-child(4) { left: 187px; top: 212px; }
#answer .image p:nth-child(5) { left: 292px; top: 212px; }
#answer .image p:nth-child(6) { left: 393px; top: 212px; }
#answer .image p:nth-child(7) { left: 220px; bottom: 2px; font-size: 12px; text-transform: uppercase; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }
#question .placeholder, #answer .placeholder { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
html[dir="rtl"] #question label { padding: 0 45px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom svg { right: 7px; }
html[dir="rtl"] #question section ul { float: right; }
html[dir="rtl"] #question li { text-align: right; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question section ul { margin-left: 0; }
	#question section .image { margin: 0; width: 370px; background-position-x: -60px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Quiz Question #4'); ?></h1>
				<div class='placeholder'>
					<h2><?php echo _('Below is a composition chart of brass. What term describes this blending of metals?'); ?></h2>

					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ul>
								<li><input id="a" type="radio" name="q"><label for="a"><?php echo _('Suspension'); ?></label></li>
								<li><input id="b" type="radio" name="q"><label for="b"><?php echo _('Heterogeneous mixture'); ?></label></li>
								<li><input id="c" type="radio" name="q"><label for="c"><?php echo _('Molecule'); ?></label></li>
								<li><input id="d" type="radio" name="q"><label for="d"><?php echo _('None of the above'); ?></label></li>
							</ul>
						</form>

						<div class="image">
							<!--<h3>Composition of brass</h3>
							<p>Percent</p>
							<p>Copper</p>
							<p>Lead</p>
							<p>Iron</p>
							<p>Zinc</p>
							<p>Component</p>-->
						</div>
					</section>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _('Quiz Question #4'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div class='placeholder'>
					<p><?php echo _('You answered...'); ?></p>

					<div class="image">
						<!--<h3>Composition of brass</h3>
						<p>Percent</p>
						<p>Copper</p>
						<p>Lead</p>
						<p>Iron</p>
						<p>Zinc</p>
						<p>Component</p>-->
					</div>

					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Popping water balloon...'); ?></strong></section></section>

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
			answer.find('.answer').html('<p><?php echo _("Suspension"); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A suspension is a mixture containing large particles that eventually settle."); ?></p>');
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<p><?php echo _("Heterogeneous mixture"); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A heterogeneous mixture is one that has easily distinguishable particles."); ?></p>');
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<p><?php echo _("Molecule"); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A molecule is the particle of a compound of two or more atoms."); ?></p>');
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<p><?php echo _("None of the above"); ?></p>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Brass is a mixture of copper and tin. It is an \"alloy\", not a compound."); ?></p>');
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('composition-of-matter-qq4-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "16.php"; // change to the previous page's last screen e.g. 4.html#screen2
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
