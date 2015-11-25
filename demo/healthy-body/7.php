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
.bg { background: url('images/7/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#questions, #answers {}
#questions { overflow: hidden; }
#questions p { text-align: left; }
#question2 { margin-top: 20px; }

#answers { display: none; }
#answers p { text-align: center; margin-bottom: 10px; }
#answers { margin-top: 0; }
#answer1, #answer2 { overflow: hidden; }
#answer2 { margin-top: 20px; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
img.next-toggle { display: none; }
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #566204; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #566204; }
.ac-custom svg path { stroke: #566204; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
.ac-custom li {padding:10px 0;}
#buttons .next { display: none; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-swrirl input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-swrirl label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -10px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 25px; top: 15px; }
html[dir="rtl"] #question1 li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Click on the statement that is <span class='blink'>not correct</span>."); ?></h2>
					<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1">A. <?php echo _("The human body is made up of complicated, interrelated systems."); ?></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1">B. <?php echo _("For every job the body has, there is a structure that will do the job."); ?></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1">C. <?php echo _("If one body system stops working, the body just keeps going and working fine."); ?></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1">D. <?php echo _("Organs are made up of tissues."); ?></label></li>
							<ol>
					</form>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. The systems in the human body are interrelated and interconnected. Which of the following statements are <span class='blink'>true</span>?"); ?></h2>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2">A. <?php echo _("The systems work separately from one another."); ?></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2">B. <?php echo _("The systems depend on one another."); ?></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2">C. <?php echo _("The systems are connected, but too complex to understand."); ?></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2">D. <?php echo _("When one system works, the other does not."); ?></label></li>
							<ol>
					</form>
				</div>
			</div>				

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Click on the statement that is <span class='blink'>not correct</span>."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. The systems in the human body are interrelated and interconnected. Which of the following statements are <span class='blink'>true</span>?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>					
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Interconnecting body systems..."); ?></strong></section></section>
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

	question1.find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			answer1.find('.answer').html('A. <?php echo _("The human body is made up of complicated, interrelated systems."); ?>');
			answer1.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. This statement is correct. If one of the systems stop working, the body can't run smoothly."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			answer1.find('.answer').html('B. <?php echo _("For every job the body has, there is a structure that will do the job."); ?>');
			answer1.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. This statement is correct. If one of the systems stop working, the body can't run smoothly."); ?></p>");
			ans1 = 'B';
		}

		if (me == 'c1') {
			answer1.find('.answer').html('C. <?php echo _("If one body system stops working, the body just keeps going and working fine."); ?>');
			answer1.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Yes. This statement is false. If one of the systems stop working, the body can't run smoothly."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			answer1.find('.answer').html('D. <?php echo _("Organs are made up of tissues."); ?>');
			answer1.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry, that statement is true. Organs are made of tissues."); ?></p>");
			ans1 = 'D';
		}
	});

	question2.find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			answer2.find('.answer').html('A. <?php echo _("The systems work separately from one another."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the body systems are connected in many ways and depend on one another."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			answer2.find('.answer').html('B. <?php echo _("The systems depend on one another."); ?>');
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes, the body systems are connected in many ways and depend on one another."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			answer2.find('.answer').html('C. <?php echo _("The systems are connected, but too complex to understand."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the body systems are connected in many ways and depend on one another."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			answer2.find('.answer').html('D. <?php echo _("When one system works, the other does not."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the body systems are connected in many ways and depend on one another."); ?></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			//saveAnswer('healthy-body-qq2-a', ans1);
			//saveAnswer('healthy-body-qq2-b', ans2);
			answered = 1;
		}
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "6.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answers.fadeOut(function(){ questions.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			questions.fadeOut(function(){ answers.fadeIn(); }); 
			save();
		}
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
