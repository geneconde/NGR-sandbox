<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
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
h1 { color: #000; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/9/bg.jpg); }

#questions { position: relative; z-index: 5; }
#question1 ol { list-style: none; padding: 0; margin: 15px 0 0 20px; }
#question1 li { padding: 6px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] {}
#question1 .ac-custom input[type="radio"]:checked + label { color: #588B38; }
#question1 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question1 .ac-custom svg path { stroke: #588B38; }
#question1 .ac-custom label::before { background: #588B38; height: 20px; width: 20px; margin-top: -12px;}

#question2 ol { margin: 0 0 0 20px; padding: 0; }
#question2 li { padding: 10px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #588B38; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #588B38; }
#question2 .ac-custom svg path { stroke: #588B38; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 25px; }
#buttons .next { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Fossils can help geologists tell about how old a rock is because..."); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Certain fossils are related to certain time periods in the geological history of earth."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Life on earth has always been the same throughout geological time."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Fossils are radioactive so they can be dated by radioactivity."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Paleontologists just know when each fossil was formed."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. If a geologist finds a rock with a Tyrannosaurus Rex bone in it, a good estimate of when the rock was formed would be..."); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Within the last 10 thousand years"); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Within the last 10 million years"); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Within the last 50 million years"); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Older than 65 million years"); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Fossils can help geologists tell about how old a rock is because..."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. If a geologist finds a rock with a Tyrannosaurus Rex bone in it, a good estimate of when the rock was formed would be..."); ?></h2>	
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Certain fossils are related to certain time periods in the geological history of earth."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. Because the earth and all that's in it changes, fossils can be identified with a specific time period to figure out how old it is."); ?></p>"); //'
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Life on earth has always been the same throughout geological time."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Quite the opposite, life on earth has always been changing throughout geological time."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Fossils are radioactive so they can be dated by radioactivity."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, fossils are not radioactive but they are usually collected along with rock from the same layer and sometimes, the rock can be dated based on radioactivity."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Paleontologists just know when each fossil was formed."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, In Science, everything is proven even if paleontologists have a hypothesis. Certain fossils are indicative of certain time periods in the geological history of the earth."); ?></p>');
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Within the last 10 thousand years"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, because no dinosaurs lived on earth within the last 10 thousand years. Dinosaurs lived between 65 and 230 million years ago."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Within the last 10 million years"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, because no dinosaurs lived on earth within the last 10 million years. Dinosaurs lived between 65 and 230 million years ago."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Within the last 50 million years"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, dinosaurs are a little bit older than that. Dinosaur fossils are dated to be between 65 and 230 million years old."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Older than 65 million years"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct, dinosaur fossils are dated to be between 65 and 230 million years old. Dinosaurs became extinct 65 million years ago so there are no dinosaur fossils younger than 65 million years."); ?></p>');
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
			saveAnswer('history of earth-qc3-a', ans1);
			saveAnswer('history of earth-qc3-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "8.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
