<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
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
.bg { z-index: 1 !important; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/7/bg.jpg); }

#question2 ol, #question1 ol { margin: 0 0 0 20px; padding: 0; }
#question1 li, #question2 li { padding: 8px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label, #question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"], #question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="radio"]:checked + label, #question2 .ac-custom input[type="radio"]:checked + label { color: #e17523; }
#question1 .ac-custom svg, #question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before, #question2 .ac-custom label::before { border: 2px solid #e17523; }
#question1 .ac-custom svg path, #question2 .ac-custom svg path { stroke: #e17523; }
#question1 .ac-custom label::before, #question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#buttons .next { display: none; }
#answers { display: none; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] .ac-swirl label::before { right: 0; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 36px; margin-top: -8px; }
html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -17px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] .ac-custom label { padding: 0 85px 0 0; }
    <?php if ($language == 'es_ES') : ?>
    <?php endif; ?>        
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, #answer  {
		    padding-top: 50px;
		}
		section {
		    line-height: 25px;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4 {
		    padding-top: 60px !important;
		}
   	}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Click on the phrase that best describes a favorable mutation for a fox."); ?></h2>	
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio">
									<label for="a1"><span>A. <?php echo _("A mutation that changes the fur of a fox to bright yellow."); ?></span></label>
								</li>
								<li><input id="b1" name="q1" type="radio">
									<label for="b1"><span>B. <?php echo _("A mutation that makes a fox run faster."); ?></span></label>
								</li>
								<li><input id="c1" name="q1" type="radio">
									<label for="c1"><span>C. <?php echo _("A mutation that changes the eye color of a fox."); ?></span></label>
								</li>
								<li><input id="d1" name="q1" type="radio">
									<label for="d1"><span>D. <?php echo _("A mutation that gives a fox a third ear."); ?></span></label>
								</li>
							<ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. When will a change most likely be passed on to the next generation?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-fill" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio">
									<label for="a2"><span>A. <?php echo _("When it changes the physical characteristics of the living thing."); ?></span></label>
								</li>
								<li><input id="b2" name="q2" type="radio">
									<label for="b2"><span>B. <?php echo _("When it prevents the living thing from finding a mate."); ?></span></label>
								</li>
								<li><input id="c2" name="q2" type="radio">
									<label for="c2"><span>C. <?php echo _("When it is completely random, without a specific purpose."); ?></span></label>
								</li>
								<li><input id="d2" name="q2" type="radio">
									<label for="d2"><span>D. <?php echo _("When it becomes an advantage to the survival of the living thing."); ?></span></label>
								</li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Click on the phrase that best describes a favorable mutation for a fox."); ?></h2>	
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
					<h2><?php echo _("Question B. When will a change most likely be passed on to the next generation?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _('Passing on to next generation...'); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#question1').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("A mutation that changes the fur of a fox to bright yellow."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not good. Bright yellow foxes would have a hard time sneaking up on prey."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("A mutation that makes a fox run faster."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! For a predator, faster is better."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("A mutation that changes the eye color of a fox."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Eye color? Probably not a big deal to a fox."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("A mutation that gives a fox a third ear."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. A mutation big enough to cause a third ear will most likely cause other deformities."); ?></p>');
			ans2 = 'D';
		}
	});

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("When it changes the physical characteristics of the living thing."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. It depends upon how a characteristic changes."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("When it prevents the living thing from finding a mate."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Mating is necessary to pass traits along."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("When it is completely random, without a specific purpose."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. This is tricky. Changes are random, without purpose, but sometimes they work out to be advantages."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("When it becomes an advantage to the survival of the living thing."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("There you go. Survival is the key. In order to reproduce, an organism must first survive."); ?></p>');
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
			saveAnswer('changing-life-forms-qc2-a', ans1);
			saveAnswer('changing-life-forms-qc2-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "6.php#screen2";
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
	<?php include("setlocale.php"); ?>
</body>
</html>
