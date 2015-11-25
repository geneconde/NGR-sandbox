<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?> >
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
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.wrap { border-left: 1px dashed #ffdf70; border-right: 1px dashed #ffdf70; }
.bg { background: url('images/9/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#questions, #answers {}
#questions { overflow: hidden; }
#questions p { text-align: left; }
/* #questions ul { list-style: none; padding: 0; margin-top: 0; }
#questions li { margin: 0 auto; padding: 6px 0; position: relative; }
#questions li:first-child { padding-top: 0; }
#questions label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 40px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#questions input[type="radio"], #questions label::before{ width: 30px; height: 30px; top: 50%; left: 0; margin-top: -15px; position: absolute; cursor: pointer; }
#questions input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; } 
#questions label::before { content: ''; background: url(images/7/buttons.png) left top no-repeat; width: 30px; height: 30px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#questions input[type="radio"]:checked + label { color: #000; } 
#questions input[type="radio"]:checked + label::before { background-position: left bottom; } */
#question2 { margin-top: 30px; }

#sortable { list-style-type: none; margin: 0; padding: 0; }
#sortable li { font-size: 22px; background: #66391c; color: #fff; margin: 10px 0; border-radius: 5px; padding: 10px 10px !important; }
#sortable li:hover { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
#sortable li.ui-sortable-helper { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

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
.ac-custom svg { height: 30px; width: 30px; left: 2px; margin-top: -15px; }
.ac-custom label::before { border: 2px solid #566204; }
.ac-custom svg path { stroke: #566204; }
.ac-custom label::before { height: 15px; width: 15px; margin-top: -7px;background: #566204;}
.ac-custom li {padding:10px 0;}
#buttons .next { display: none; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question1 .ac-circle input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question1 .ac-circle label::before { right: 35px; margin-top: -8px; }
html[dir="rtl"] #question1 .ac-circle svg { right: 27px; margin-top: -15px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question1 li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Click on the <span class='red blink'>BEST</span> statement about the nervous system."); ?></h2>
					<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1">A. <?php echo _("The nervous system consists of the brain and the spinal cord."); ?></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1">B. <?php echo _("Sensory nerves along with the brain make up the nervous system."); ?></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1">C. <?php echo _("The nervous system consists of the brain, spinal cord, and a complex network of nerves."); ?></label></li>
							<ol>
					</form>
					<!-- <ul>
										<li><input id="a1" name="q1" type="radio"><label for="a1">The nervous system consists of the brain and the spinal cord.</label></li>
										<li><input id="b1" name="q1" type="radio"><label for="b1">Sensory nerves along with the brain make up the nervous system.</label></li>
										<li><input id="c1" name="q1" type="radio"><label for="c1">The nervous system consists of the brain, spinal cord, and a complex network of nerves.</label></li>
									</ul>
									 -->				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Put the following steps of how our nervous system basically works in the correct order by dragging the items  up or down."); ?></h2>
					<ul id="sortable">
						<li id="A"><?php echo _("Sensory nerve cells take information from the eyes, ears, nose, tongue, and skin to the brain."); ?></li>
						<li id="B"><?php echo _("Motor nerve cells carry messages away from the brain and back to the rest of the body."); ?></li>
						<li id="C"><?php echo _("In the brain, the nerve cells relay information to each other through a complex process."); ?></li>
					</ul>
				</div>
			</div>				

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Click on the <span class='red blink'>BEST</span> statement about the nervous system."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Put the following steps of how our nervous system basically works in the correct order by dragging the items  up or down."); ?></h2>
					<div class="feedback center"></div>
				</div>					
			</div>
		</div>
	</div>
		<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Recording information..."); ?></strong></section></section>
	<script>
	$( "#sortable" ).sortable({ scroll: false, containment: "#sortable" });

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
	b1,
	b2,
	b3,
	checkAnswer = 0,
	answered = 1;

	question1.find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			answer1.find('.answer').html('<?php echo _("The nervous system consists of the brain and the spinal cord."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite, the complex network of nerves is also part of the nervous system."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			answer1.find('.answer').html('<?php echo _("Sensory nerves along with the brain make up the nervous system."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite, the spinal cord is also part of the nervous system."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			answer1.find('.answer').html('<?php echo _("The nervous system consists of the brain, spinal cord, and a complex network of nerves."); ?>');
			answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The brain, spinal cord, and complex network of nerves make up the nervous system."); ?></p>');
			ans1 = 'C';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('healthy-body-qc3-a', ans1);
			saveAnswer('healthy-body-qc3-b', b1);
			saveAnswer('healthy-body-qc3-c', b2);
			saveAnswer('healthy-body-qc3-d', b3);
			answered = 1;
		}
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "8.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answers.fadeOut(function(){ questions.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });

			var index = 1;
			$('#sortable li').each(function(){
				var id = $(this).attr('id');
				window["b" + index] = id;
				index++;
			});

			questions.fadeOut(function(){
				if (b1 == 'A' && 
					b2 == 'C' &&
					b3 == 'B') {
						answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Good job! Our nerve cells take information to the brain, where it gives a command there, then the message is carried to the body."); ?></p>');
				} else {
						answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Our nerve cells take information to the brain, where it gives a command there, then the message is carried to the body."); ?></p>');
				}

				save();
				answers.fadeIn(); 
			}); 
		}
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
