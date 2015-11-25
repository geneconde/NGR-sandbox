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
<link rel="stylesheet" type="text/css" href="styles/nlform.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/nlform.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #42A0A0; }
.wrap { border-color: #c1fdff; }
.bg { background-image: url(images/11/bg.jpg); }

#nl-form { }
#nl-form a { border-bottom: 0; background: #006996; color: #9AE7FE; padding: 0px 15px; text-align: center; margin: 0 5px; border-radius: 5px; }
.nl-field ul { background: #006996; }
.nl-field li { font-size: 24px; color: #9AE7FE !important; }
.nl-dd ul li.nl-dd-checked { background: #015579 !important; color: #fff!important; }

#question1 ol { margin: 0 0 0 20px; padding: 0; }
#question1 li { padding: 10px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="radio"]:checked + label { color: #A53983; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before { border: 2px solid #A53983; }
#question1 .ac-custom svg path { stroke: #A53983; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#buttons .next { display: none;}
#answers { display: none; }
#answers p { text-align: center; }

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
				<h1><?php echo _("Quick Check #4"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Which of the following is <span class='blink'>not true</span> about meiosis?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a" name="q2" type="radio"><label for="a"><span>A. <?php echo _("Sex cells contain half the normal number of chromosomes."); ?></span></label></li>
								<li><input id="b" name="q2" type="radio"><label for="b"><span>B. <?php echo _("Sex cells contain the normal number of chromosomes."); ?></span></label></li>
								<li><input id="c" name="q2" type="radio"><label for="c"><span>C. <?php echo _("Sex cells contain twice the normal number of chromosomes."); ?></span></label></li>
								<li><input id="d" name="q2" type="radio"><label for="d"><span>D. <?php echo _("Sex cells contain three times the normal number of chromosomes."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Complete the sentence by selecting the <span class='blink'>correct</span> answer."); ?></h2>	

					<form id="nl-form" class="nl-form">
						<p><?php echo _("Genes are located on chromosomes, and"); ?>

						<select name="select">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("meiosis"); ?></option>
							<option value="B"><?php echo _("mitosis"); ?></option>
							<option value="C"><?php echo _("fertilization"); ?></option>
							<option value="D"><?php echo _("meiosis and mitosis"); ?></option>
						</select>

						<?php echo _("is the process that sorts the chromosomes.  It is the mechanism in cells that allows segregation to work."); ?></p>

						<div class="nl-overlay"></div>
					</form>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following is <span class='blink'>not true</span> about meiosis?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Complete the sentence by selecting the <span class='blink'>correct</span> answer."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Separating cells..."); ?></strong></section></section>

	<script>
	var nlform = new NLForm( document.getElementById( 'nl-form' ) );

	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#question1').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Sex cells contain half the normal number of chromosomes."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right! Fertilization produces one normal cell."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Sex cells contain the normal number of chromosomes."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Sex cells with the normal number would produce a new individual with twice the number."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("Sex cells contain twice the normal number of chromosomes."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. That's way too many chromosomes."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Sex cells contain three times the normal number of chromosomes."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Think again...  Meiosis is a process which reduces chromosome number."); ?></p>');
			ans1 = 'D';
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
		var select = $('#question2').find('select').val();
			
		if (select == 'A') {
			$('#answer2').find('.answer').html('<?php echo _("meiosis"); ?>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Meiosis is cell division that results in cells with half the chromosome number of the parent cell."); ?></p>');
		}

		if (select == 'B') {
			$('#answer2').find('.answer').html('<?php echo _("mitosis"); ?>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, mitosis is cell division that results in cells with the same as the parent."); ?></p>');
		}

		if (select == 'C') {
			$('#answer2').find('.answer').html('<?php echo _("fertilization"); ?>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, fertilization is the union of sperm and egg cells."); ?></p>');
		}

		if (select == 'D') {
			$('#answer2').find('.answer').html('<?php echo _("meiosis and mitosis"); ?>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, sorting of chromosomes is done through meiosis. Meiosis is cell division that results in cells with half the chromosome number of the parent cell."); ?></p>');
		}

		if (answered == 0) {
			saveAnswer('genetic-codes-qc4-a', ans1);
			saveAnswer('genetic-codes-qc4-b', ans2);
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

	<?php include_once "setlocale.php"; ?>
</body>
</html>
