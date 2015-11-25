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
<link rel="stylesheet" type="text/css" href="styles/nlform.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/nlform.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #AC965D; }
.wrap { border-color: #f1e392; }
.bg { background-image: url(images/11/bg.jpg); }

#question1 .clear p { float: left; width: 150px; text-align: center; }
#question1 .clear p:nth-child(2) { width: 35px; margin: 36px 0 0 15px; }
#question1 .clear p:nth-child(4) { width: 35px; margin: 36px 15px 0; }

#nl-form { float: left; width: 400px; margin: 25px 0 0 13px; font-size: 24px; }
#nl-form a { border-bottom: 0; background: #D4D2A0; color: #000; padding: 10px; text-align: center; width: 400px; border-radius: 5px; }
.nl-field ul { background: #D4D2A0; }
.nl-field li { font-size: 24px; color: #000 !important; }
.nl-dd ul li.nl-dd-checked { background: #796042 !important; color: #D4D2A0 !important; }

#question2 ol { margin: 0 0 0 40px; padding: 0; z-index: 5; }
#question2 li { padding: 8px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #866222; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #866222; }
#question2 .ac-custom svg path { stroke: #866222; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; font-size: 20px; }

#answer1 .clear { margin-top: 10px; }
#answer1 .clear p { float: left; width: 150px; }
#answer1 .clear p.answer { background: #D4D2A0; margin: 32px 0 0 13px; width: 400px; padding: 10px; border-radius: 5px; }
#answer1 .clear p:nth-child(2) { width: 35px; margin: 36px 0 0 15px; }
#answer1 .clear p:nth-child(4) { width: 35px; margin: 36px 15px 0; }
#answer1 .feedback { margin-top: 10px; }
#buttons .next { display: none; }
#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] #question2 .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question2 .ac-swirl input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question2 .ac-swirl label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question2 .ac-swirl svg { right: 37px; margin-top: -8px; }
html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question2 li label { text-align: right; }
html[dir="rtl"] #answer1 p { text-align: center; }
html[dir="rtl"] #answer2 p { text-align: center; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question1 .clear p, #answer .clear p {
		float: left;
		width: 145px;
		text-align: center;
	}
	#nl-form a, #answer1 .clear p.answer {
		border-bottom: 0;
		background: #D4D2A0;
		color: #000;
		padding: 10px;
		text-align: center;
		width: 300px;
		border-radius: 5px;
	}
	#question1 .clear p:nth-child(4), #answer .clear p:nth-child(4) {
		width: 35px;
		/*margin: 36px -51px 0;*/
	}
	#question1 .clear p:nth-child(2) {
	width: 35px;
	
	}
	#nl-form {
		float: left;
		width: 301px;
		/*margin: 25px 0 0 13px;*/
		font-size: 24px;
	}
	#answer1 .clear p {
		float: left;
		width: 144px;
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
				<h1><?php echo _("Quick Check #4"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. The flowchart below represents the process of photosynthesis. Click on the activity that occurs after the first activity."); ?></h2>	

					<div class="clear">
						<p><img src="images/11/light.jpg"><?php echo _("Light Energy is absorbed by plants."); ?></p>
						<p><img src="images/11/arrow.png"></p>

						<form id="nl-form" class="nl-form">
							<select name="select">
								<option value="" selected>&lt;<?php echo _("select"); ?>&gt;</option>
								<option value="A"><?php echo _("Plants are eaten by animals for food."); ?></option>
								<option value="B"><?php echo _("Carbon dioxide and water are used to make sugar."); ?></option>
								<option value="C"><?php echo _("Plants release water into the soil."); ?></option>
								<option value="D"><?php echo _("Animals breathe out carbon dioxide."); ?></option>
							</select>
							<div class="nl-overlay"></div>
						</form>

						<p><img src="images/11/arrow.png"></p>
						<p><img src="images/11/oxygen.jpg"><?php echo _("Oxygen is released."); ?></p>
					</div>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Butterflies get food from the flowers of a plant. They also lay their eggs on the leaves of the plant. As the caterpillars develop, they eat the leaves of the plant. How does the plant benefit from the butterflies?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q2" type="radio"><label for="a"><span>A. <?php echo _("Butterflies help the plant grow larger flowers."); ?></span></label></li>
								<li><input id="b" name="q2" type="radio"><label for="b"><span>B. <?php echo _("Butterflies' eggs help the leaves to fall off the plant."); ?></span></label></li>
								<li><input id="c" name="q2" type="radio"><label for="c"><span>C. <?php echo _("Butterflies help pollinate flowers so that seeds can form."); ?></span></label></li>
								<li><input id="d" name="q2" type="radio"><label for="d"><span>D. <?php echo _("Butterflies help add nutrients to the nectar of the flowers."); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. The flowchart below represents the process of photosynthesis. Click on the activity that occurs after the first activity."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>

					<div class="clear">
						<p><img src="images/11/light.jpg"><?php echo _("Light Energy is absorbed by plants."); ?></p>
						<p><img src="images/11/arrow.png"></p>
						<p class="answer"></p>
						<p><img src="images/11/arrow.png"></p>
						<p><img src="images/11/oxygen.jpg"><?php echo _("Oxygen is released."); ?></p>
					</div>

					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Butterflies get food from the flowers of a plant. They also lay their eggs on the leaves of the plant. As the caterpillars develop, they eat the leaves of the plant. How does the plant benefit from the butterflies?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

		<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script>
	var nlform = new NLForm( document.getElementById( 'nl-form' ) );

	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a') {
			$('#answer2').find('.answer').html('<p><?php echo _("Butterflies help the plant grow larger flowers."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Butterflies actually eat food made by flowers."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b') {
			$('#answer2').find('.answer').html("<p><?php echo _("Butterflies' eggs help the leaves to fall off the plant."); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. The eggs don't weigh much at all."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c') {
			$('#answer2').find('.answer').html('<p><?php echo _("Butterflies help pollinate flowers so that seeds can form."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Nice! As butterflies move from flower to flower, they carry pollen along."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd') {
			$('#answer2').find('.answer').html('<p><?php echo _("Butterflies help add nutrients to the nectar of the flowers."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. The butterflies take the nectar away from the flowers."); ?></p>');
			ans2 = 'D';
		}
	});

	$('a.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 1 || $('select').val() == "") {
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
		var select = $('#question1').find('select').val();
			
		if (select == 'A') {
			$('#answer1').find('.answer').html('A. <?php echo _("Plants are eaten by animals for food."); ?>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. Plant eating isn't a part of photosynthesis."); ?></p>");
		}

		if (select == 'B') {
			$('#answer1').find('.answer').html('B. <?php echo _("Carbon dioxide and water are used to make sugar."); ?>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's it! The light energy is used to make sugar from carbon dioxide and water."); ?></p>");
		}

		if (select == 'C') {
			$('#answer1').find('.answer').html('C. <?php echo _("Plants release water into the soil."); ?>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Um, no... Plants absorb water from soil."); ?></p>");
		}

		if (select == 'D') {
			$('#answer1').find('.answer').html('D. <?php echo _("Animals breathe out carbon dioxide."); ?>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope. OK, it's true... but not part of photosynthesis."); ?></p>");
		}

		if (answered == 0) {
			//saveAnswer('plants-are-producers-qc4-a', ans1);
			//saveAnswer('plants-are-producers-qc4-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "10.php#screen2";
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
