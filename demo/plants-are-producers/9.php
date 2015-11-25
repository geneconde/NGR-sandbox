<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #AC965D; }
.wrap { border-color: #f1e392; }
.bg { background-image: url(images/9/bg.jpg); }

#question1 ol { margin: 0 0 0 20px; padding: 0; }
#question1 li { padding: 6px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="radio"]:checked + label { color: #866222; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before { border: 2px solid #866222; }
#question1 .ac-custom svg path { stroke: #866222; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question1 section ol { float: left; width: 440px; }
#question1 h2 { clear: both; }
#question1 img { float: right; margin-right: 100px; }

#question2 ol { list-style: none; padding: 0; margin: 15px 0 0 20px; }
#question2 li { padding: 4px 0; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] {}
#question2 .ac-custom input[type="radio"]:checked + label { color: #866222; }
#question2 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question2 .ac-custom svg path { stroke: #866222; }
#question2 .ac-custom label::before { background: #866222; height: 20px; width: 20px; margin-top: -12px;}
#buttons .next { display: none; }
#answers { display: none; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] #question1 .ac-custom label { padding: 0 80px 0 0; width: 590px; }
html[dir="rtl"] #question2 .ac-custom label { padding: 0 45px 0 0; }
html[dir="rtl"] #question1 .ac-swirl input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question1 .ac-swirl label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question1 .ac-swirl svg { right: 37px; margin-top: -8px; }
html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question1 li label { text-align: right; }
html[dir="rtl"] #question2 ul { float: right; }
html[dir="rtl"] #answer2 .image { float: right; }
html[dir="rtl"] #question2 .ac-custom svg { right: -8px; }
html[dir="rtl"] #question1 img { float: left; } 
html[dir="rtl"] #question1 section ol { float: right; } 
html[dir="rtl"] #question2 section ol { margin: 15px 40px 0 0; }
html[dir="rtl"] #answers p { text-align: center; } 
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question1 section ol {
		float: left;
		width: 50%;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. What are the producers in redwood forests?"); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span>A. <?php echo _("Redwood trees only"); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span>B. <?php echo _("Redwood trees and all other green plants"); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span>C. <?php echo _("Mosses and squirrels"); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span>D. <?php echo _("Ground-dwelling ferns and salamanders"); ?></span></label></li>
							<ol>
						</form>
					</section>

					<img src="images/9/redwood.jpg">
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. In redwood forests, the process responsible for energy production is..."); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span>A. <?php echo _("Cellular respiration"); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span>B. <?php echo _("Photosynthesis"); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span>C. <?php echo _("Metabolism"); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span>D. <?php echo _("Primary growth"); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. What are the producers in redwood forests?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. In redwood forests, the process responsible for energy production is..."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

		<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Producing energy..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Redwood trees only"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Think about it...  Are there any other green plants?"); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Redwood trees and all other green plants"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! All green plants are producers."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("Mosses and squirrels"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Hmmmm...  Are squirrels green plants?"); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Ground-dwelling ferns and salamanders"); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Salamanders? Really? Let's think about green plants."); ?></p>");
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("Cellular respiration"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry.  That's how energy is released."); ?></p>");
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("Photosynthesis"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! Photosynthesis is the process in all producers."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("Metabolism"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Metabolism refers to all cellular processes."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("Primary growth"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Photosynthesis provides energy to power primary growth."); ?></p>');
			ans2 = 'D';
		}
	});

	$('a.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			//saveAnswer('plants-are-producers-qc3-a', ans1);
			//saveAnswer('plants-are-producers-qc3-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "8.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
