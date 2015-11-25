<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/9/bg.jpg); }

#question1 ol { list-style: none; padding: 0; margin-left: 20px; }
#question1 li { padding: 10px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] {}
#question1 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question1 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question1 .ac-custom svg path { stroke: #780046; }
#question1 .ac-custom label::before { background: #780046; height: 20px; width: 20px; margin-top: -12px;}

#question2 ol { margin: 0 0 0 20px; padding: 0; }
#question2 li { padding: 10px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #780046; }
#question2 .ac-custom svg path { stroke: #780046; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#questions img { float: right; width: 290px; margin-right: 5%; }
#questions section { float: left; }

#answer1 > img, #answer2 > img { float: left; width: 160px; }
#answer1 > div, #answer2 > div { width: 660px; float: right; }
#answer1 > div p, #answer2 > div p { text-align: left; }

#answers { display: none; }
#answers > div { height: 200px; }
#answers img { margin-left: 10px; }
#answers .feedback img { margin-left: 0; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 25px; }
#buttons .next { display: none; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 37px; margin-top: -10px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 45px; margin-top: -12px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #questions img {float: left;margin-right: 0;margin-left: 5%;}
html[dir="rtl"] #questions section {float: right;}

html[dir="rtl"] #answer1 > img, html[dir="rtl"] #answer2 > img {float:right; margin: 10px 0 0 20px;}
html[dir="rtl"] #answer1 p, html[dir="rtl"] #answer2 p {text-align: right;}
html[dir="rtl"] .feedback p { font-size: 20px; }

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Look at the picture at the right. This is an example of:"); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Slow erosion by wind"); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Rapid erosion by water"); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Slow erosion by water"); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Rapid erosion by wind"); ?></span></label></li>
							<ol>
						</form>
					</section>
					
					<img src="images/9/imageA.jpg" />
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Look at the picture at the right. This is an example of:"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Slow erosion by wind"); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Rapid erosion by water"); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Slow erosion by water"); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Rapid erosion by wind"); ?></span></label></li>
							<ol>
						</form>
					</section>
					
					<img src="images/9/imageB.jpg" />
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Look at the picture at the right. This is an example of:"); ?></h2>	
					<img src="images/9/imageA.jpg" />
					<div>
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
						<div class="feedback"></div>
					</div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Look at the picture at the right. This is an example of:"); ?></h2>	
					<img src="images/9/imageB.jpg" />
					<div>
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
						<div class="feedback"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Collecting data about erosion..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html("<p>" + "<?php echo _("Slow erosion by wind"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. The Grand Canyon was formed mainly by slow water erosion."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html("<p>" + "<?php echo _("Rapid erosion by water"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. The Grand Canyon was formed mainly by slow water erosion."); ?></p>");
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html("<p>" + "<?php echo _("Slow erosion by water"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. The Grand Canyon was formed mainly by slow water erosion."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html("<p>" + "<?php echo _("Rapid erosion by wind"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. The Grand Canyon was formed mainly by slow water erosion."); ?></p>");
			ans1 = 'D';
		}
		if (me == 'a2') {
			$('#answer2').find('.answer').html("<p>" + "<?php echo _("Slow erosion by wind"); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. The picture shows a rapid erosion by wind."); ?></p>");
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html("<p>" + "<?php echo _("Rapid erosion by water"); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. The picture shows a rapid erosion by wind."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html("<p>" + "<?php echo _("Slow erosion by water"); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. The picture shows a rapid erosion by wind."); ?></p>");
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html("<p>" + "<?php echo _("Rapid erosion by wind"); ?></p>");
			$('#answer2').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. The picture shows a rapid erosion by wind."); ?></p>");
			ans2 = 'D';
		}
	});

	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert("<?php echo _("Please select your answers."); ?>");
		} else {
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('earth-materials-and-systems-qc3-a', ans1);
			saveAnswer('earth-materials-and-systems-qc3-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "8.php#screen3";
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
