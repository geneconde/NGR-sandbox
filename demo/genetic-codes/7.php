<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'genetic-codes';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Genetic Codes"); ?></title>
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
h1 { color: #42A0A0; }
.wrap { border-color: #c1fdff; }
.bg { background-image: url(images/7/bg.jpg); }

#questions ol { margin: 0 0 0 20px; padding: 0; }
#questions li { padding: 6px 0; }
#questions .ac-custom { width: 100%; }
#questions .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#questions .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#questions .ac-custom input[type="radio"]:checked + label { color: #C55A98; }
#questions .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#questions .ac-custom label::before { border: 2px solid #C55A98; }
#questions .ac-custom svg path { stroke: #C55A98; }
#questions .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; }
#buttons .next { display: none; }
#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -20px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -13px; }
html[dir="rtl"] li label { text-align: right; }

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Which of the following statements is <span class='blink'>correct</span>?"); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span>A. <?php echo _("Most offspring look like their mothers."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span>B. <?php echo _("Most offspring look like their fathers."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span>C. <?php echo _("The father determines more than half of an offspring's genes."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span>D. <?php echo _("Offspring inherit genes equally from each parent."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Click on the <span class='blink'>best</span> use for a Punnett Square."); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span>A. <?php echo _("Deciding how much water to give pea plants and similar vegetables."); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span>B. <?php echo _("Predicting what the offspring will look like when mating plants and animals."); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span>C. <?php echo _("Determining the size and shape of chromosomes in a cell."); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span>D. <?php echo _("Deciding what time of year is best to plant pea plants and similar vegetables."); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following statements is <span class='blink'>correct</span>?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Click on the <span class='blink'>best</span> use for a Punnett Square."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Using Punnett Square..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Most offspring look like their mothers."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Mothers only contribute about half of the genetic info."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Most offspring look like their fathers."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope. Fathers don't contribute any more than mothers."); ?></p>");
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html("<p>C. <?php echo _("The father determines more than half of an offspring's genes."); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope. Think about Mendel's segregation idea."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Offspring inherit genes equally from each parent."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right! Mendel called this segregation."); ?></p>");
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("Deciding how much water to give pea plants and similar vegetables."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the Punnett Square is based on genetic independent assortment which makes predictions about the combinations of traits in generations to come."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("Predicting what the offspring will look like when mating plants and animals."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct, the Punnett Square will help make predictions about the combinations of traits in generations of plants and animals."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("Determining the size and shape of chromosomes in a cell."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the Punnett Square is a visual summary of what could happen when genes combine for a certain trait."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("Deciding what time of year is best to plant pea plants and similar vegetables."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the Punnett Square will not predict the best time of year to plant something; it will help predict the possible genetic combination of the next generation."); ?></p>');
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
			saveAnswer('genetic-codes-qc2-a', ans1);
			saveAnswer('genetic-codes-qc2-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "6.php#screen3";
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

	<?php include_once "setlocale.php"; ?>
</body>
</html>
