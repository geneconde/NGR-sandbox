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
.bg { background-image: url(images/5/bg.jpg); }

#question1 ul { margin: 20px auto 0; width: 800px; list-style: none; padding: 0; }
#question1 li { float: left; width: 180px; margin-right: 26px; }
#question1 li:last-child { margin-right: 0; }
#question1 input[type=radio] { display: none; }
#question1 label { font-size: 24px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question1 input[type="radio"] + label img { border: 4px solid #E7D1A8; -webkit-transition: all .3s ease; width: 180px; }
#question1 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #44310F; -webkit-backface-visibility: hidden; }
#question1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question1 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #44310F; -webkit-backface-visibility: hidden;  ;}

#question2 ul { margin: 20px auto 0; width: 800px; list-style: none; padding: 0; }
#question2 li { float: left; width: 180px; margin-right: 26px; }
#question2 li:last-child { margin-right: 0; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 24px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question2 input[type="radio"] + label img { border: 4px solid #E7D1A8; -webkit-transition: all .3s ease; width: 180px; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #44310F; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #44310F; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"]:checked + label {}

#answers { display: none; }
#answers .image { float: left; margin: 0 20px 0 0; }
#answers .image img { width: 160px; height: 140px; }
#answers .placeholder { float: left; margin-top: 0; width: 585px; }
#answers p { text-align: left; }
#answers .clear { width: 100%; margin: 0 auto; }
#answers .feedback { margin: 0; }
#buttons .next { display: none;  }
#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] #answers .image { float: right; }

@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question1 ul {
		margin: auto 0;
		width: 97%;
		list-style: none;
		padding-left: 0px;

	}
	#question1 li {
		float: left;
		width: 21%;
		margin: 0px 13px;
	}
	#question1 input[type="radio"] + label img {
	border: 4px solid #E7D1A8;
	-webkit-transition: all .3s ease;
	width: 88% !important;
	}
	#question2 ul {
		margin: auto 0;
		width: 97%;
		list-style: none;
		padding-left: 0px;

	}
	#question2 li {
		float: left;
		width: 21%;
		margin: 0px 13px;
	}
	#question2 input[type="radio"] + label img {
	border: 4px solid #E7D1A8;
	-webkit-transition: all .3s ease;
	width: 88% !important;
	}
	.placeholder {
	float: left;
	margin-top: 0;
	width: 60% !important;
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
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Which of the following is a \"waste product\" of photosynthesis?"); ?></h2>	

					<ul class="clear">
						<li>
							<input type="radio" id="a1" name="q1">
							<label for="a1"><img src="images/5/water.jpg"><span><?php echo _("Water"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="q1">
							<label for="b1"><img src="images/5/oxygen.jpg"><span><?php echo _("Oxygen"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="q1">
							<label for="c1"><img src="images/5/sugar.jpg"><span><?php echo _("Sugar"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="q1">
							<label for="d1"><img src="images/5/sunlight.jpg"><span><?php echo _("Sunlight"); ?></span></label>
						</li>
					</ul>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. What is the source of energy for photosynthesis?"); ?></h2>	
 
					<ul class="clear">
						<li>
							<input type="radio" id="a2" name="q2">
							<label for="a2"><img src="images/5/soil.jpg"><span><?php echo _("Soil"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b2" name="q2">
							<label for="b2"><img src="images/5/water.jpg"><span><?php echo _("Water"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c2" name="q2">
							<label for="c2"><img src="images/5/sun.jpg"><span><?php echo _("Sun"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d2" name="q2">
							<label for="d2"><img src="images/5/plants.jpg"><span><?php echo _("Plants"); ?></span></label>
						</li>
					</ul>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following is a \"waste product\" of photosynthesis?"); ?></h2>	
					<div class="clear">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. What is the source of energy for photosynthesis?"); ?></h2>	
					<div class="clear">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.image').html('<img src="images/5/water.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Water"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Water is used up in photosynthesis."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.image').html('<img src="images/5/oxygen.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Oxygen"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yeah! Seems weird, but oxygen is actually a photosynthesis \"waste product.\""); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.image').html('<img src="images/5/sugar.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Sugar"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Sugar is the main product of photosynthesis."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.image').html('<img src="images/5/sunlight.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Sunlight"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Naaaah. Sunlight is required to make photosynthesis work."); ?></p>');
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.image').html('<img src="images/5/soil.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Soil"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. The soil doesn't produce energy."); ?></p>");
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.image').html('<img src="images/5/water.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Water"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope. Water isn't an energy source for plants."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.image').html('<img src="images/5/sun.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Sun"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yeah! Plants use solar energy to power photosynthesis."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.image').html('<img src="images/5/plants.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Plants"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Are you sure? Plants need energy for photosynthesis. Think again."); ?></p>');
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
			saveAnswer('plants-are-producers-qc2-a', ans1);
			saveAnswer('plants-are-producers-qc2-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "4.php#screen2";
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
