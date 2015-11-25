<?php 
	require_once("../tempsession.php");
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behaviors'); ?></title>
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
h1 { color: #1F7FB1; }
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/5/bg.jpg); }

#question1 ul { margin: 20px 0 0; list-style: none; padding: 0; }
#question1 li { display:inline-block; width: 200px; margin-right: 10px; float:left; }
#question1 li:last-child { margin-right: 0; }
#question1 input[type=radio] { display: none; }
#question1 label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question1 input[type="radio"] + label img { border: 4px solid #ddd; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 200px; }
#question1 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #0C68B1; -webkit-backface-visibility: hidden; }
#question1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question1 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #0C68B1; -webkit-backface-visibility: hidden;  ;}
#question1 input[type="radio"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; height: 195px;}

#question2 ol { margin: -8px 0 0 20px; padding: 0; }
#question2 li { padding: 6px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #0C68B1; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #0C68B1; }
#question2 .ac-custom svg path { stroke: #0C68B1; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

.ansImg img { display: block;margin:0 auto; }
#answers { display: none; }
#answers p { text-align: center; }

#answer1 .ansImg { float: left; margin: 0 20px 0 0; }
#answer1 .ansImg img { border: 4px solid #ddd; }
#answer1 .placeholder { float: left; width: 615px; }
#answer1 p { text-align: left; }
#answer1 .clear { width: 849px; margin: 0 auto; }
#answer1 .feedback { margin: 0; }

#question2, #answer2 { margin-top: 25px; }
#buttons .next { display: none; }

<?php if ($language == 'es_ES'): ?>
	#question2 { margin-top: 50px; }
<?php endif; ?>

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question2 .ac-swirl input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question2 .ac-swirl label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question2 .ac-swirl svg { right: 36px; margin-top: -6px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question2 li label { text-align: right; }
html[dir="rtl"] #question2 ul { float: right; }
html[dir="rtl"] #answer1 .ansImg { float: right; margin: 0 0 0 20px; }
html[dir="rtl"] #answer2 p { text-align: center; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 li, #question1 input[type="radio"] + label img {width: 173px;}
	#answer1 .placeholder {width: 525px;}
	
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Which of the following is <span class='blink'>not</span> an example of a stimulus-response interaction?"); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="radio" id="a1" name="q1">
							<label for="a1"><img src="images/5/5a.jpg">
								<span><?php echo _("A dog barking at the mail carrier."); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="b1" name="q1">
							<label for="b1"><img src="images/5/5b.jpg">
								<span><?php echo _("Stubbing your toe and wincing in pain."); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="c1" name="q1">
							<label for="c1"><img src="images/5/5c.jpg">
								<span><?php echo _("A person jogging on a warm evening."); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="d1" name="q1">
							<label for="d1"><img src="images/5/5d.jpg">
								<span><?php echo _("A skunk spraying an approaching coyote."); ?></span>
							</label>
						</li>
					</ul>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Laws in areas near beaches do not allow bright lights when turtle eggs are hatching on the beaches. What do you think is the reason for this law?"); ?></h2>	
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li>
									<input id="a2" name="q2" type="radio">
									<label for="a2"><span>A. <?php echo _("The lights may cause the eggs not to open."); ?></span></label>
								</li>
								<li>
									<input id="b2" name="q2" type="radio">
									<label for="b2"><span>B. <?php echo _("The lights may attract the turtles away from the water."); ?></span></label>
								</li>
								<li>
									<input id="c2" name="q2" type="radio">
									<label for="c2"><span>C. <?php echo _("The lights may attract turtle predators."); ?></span></label>
								</li>
								<li>
									<input id="d2" name="q2" type="radio">
									<label for="d2"><span>D. <?php echo _("The lights may overheat the turtle eggs."); ?></span></label>
								</li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following is <span class='blink'>not</span> an example of a stimulus-response interaction?"); ?></h2>	
					<div class="clear">
						<div class="ansImg"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Laws in areas near beaches do not allow bright lights when turtle eggs are hatching on the beaches. What do you think is the reason for this law?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p><?php echo _("A dog barking at the mail carrier."); ?></p>');
			$('#answer1').find('.ansImg').html('<img src="images/5/5a.jpg" />');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the mail carrier approaching the house is the stimulus and the dog barking is the response."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p><?php echo _("Stubbing your toe and wincing in pain."); ?></p>');
			$('#answer1').find('.ansImg').html('<img src="images/5/5b.jpg" />');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, stubbing your toe and experiencing pain is the stimulus, and wincing is the response."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p><?php echo _("A person jogging on a warm evening."); ?></p>');
			$('#answer1').find('.ansImg').html('<img src="images/5/5c.jpg" />');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. This is not a stimulus-response example. A specific situation is a stimulus and how a living thing reacts a response."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p><?php echo _("A skunk spraying an approaching coyote."); ?></p>');
			$('#answer1').find('.ansImg').html('<img src="images/5/5d.jpg" />');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, the coyote approaching is the stimulus, and the skunk's response is to spray the coyote."); ?></p>");
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("The lights may cause the eggs not to open."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, once they hatch, the sea turtles respond to the brightness of the sea and move toward the safe water. Bright lights may attract and mislead turtles away from the water."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("The lights may attract the turtles away from the water."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Having bright lights on the beach could be dangerous and misleading for the newly-hatched sea turtles."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("The lights may attract turtle predators."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, once they hatch, they respond to brightness of the sea and move toward the safe water. Bright lights may attract and mislead turtles away from the water."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("The lights may overheat the turtle eggs."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, once they hatch, the sea turtles respond to brightness of the sea and move toward the safe water. Bright lights may attract and mislead turtles away from the water."); ?></p>');
			ans2 = 'D';
		}
	});

	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
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
			saveAnswer('behaviors-qc1-a', ans1);
			saveAnswer('behaviors-qc1-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "4.php#screen2";
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
	<?php require("setlocale.php"); ?>
</body>
</html>
