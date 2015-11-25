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
.bg { background-image: url(images/21/bg.jpg); }

#nl-form { float: left; width: 200px; margin: 0 0 0 60px; font-size: 24px; }
#nl-form a { border-bottom: 0; background: #8EE0DD; color: #000; padding: 0 10px; text-align: center; border-radius: 5px; }
.nl-field ul { background: #8EE0DD; }
.nl-field li { font-size: 24px; color: #000 !important; }
.nl-dd ul li.nl-dd-checked { background: #41ACAC !important; color: #8EE0DD !important; }

#question .clear img { float: right; margin-right: 80px; }

#answer { display: none; text-align: center; }
#answer > img { float: left; width: 300px; margin-bottom: 15px;}
.answer { width: 200px; float: left; margin-left: 140px; }
#answer .answer p { text-align: left; }
#answer p { text-align: center; margin-bottom: 20px; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }
/*#buttons .next { display: none; }*/
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }

html[dir="rtl"] #answer .answer p {text-align: right;}
html[dir="rtl"] #nl-form {float: right;width: 350px;margin:0;}
html[dir="rtl"] #question .clear img {margin-right: 0;}
html[dir="rtl"] .answer {margin-right: 15px;width: 300px;margin-left: 105px;}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="rtl"] #question .clear img {
		margin-right: 0;
		width: 50%;
		}
	#question .clear img {
		float: right;
		margin-right: 80px;
			width: 50%;
	}

	html[dir="rtl"] .nl-field ul { left: -11em; }	

}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("Look at the image on the right and select the correct term for the object it is illustrating."); ?></h2>

				<div class="clear">
					<form id="nl-form" class="nl-form">
						<p class="a">A.
						<select>
							<option value="" selected><?php echo _("Select"); ?></option>
							<option value="Cell"><?php echo _("Cell"); ?></option>
							<option value="Chromosome"><?php echo _("Chromosome"); ?></option>
							<option value="DNA"><?php echo _("DNA"); ?></option>
							<option value="Gene"><?php echo _("Gene"); ?></option>
							<option value="Nucleus"><?php echo _("Nucleus"); ?></option>
						</select>
						</p>

						<p class="b">B.
						<select>
							<option value="" selected><?php echo _("Select"); ?></option>
							<option value="Cell"><?php echo _("Cell"); ?></option>
							<option value="Chromosome"><?php echo _("Chromosome"); ?></option>
							<option value="DNA"><?php echo _("DNA"); ?></option>
							<option value="Gene"><?php echo _("Gene"); ?></option>
							<option value="Nucleus"><?php echo _("Nucleus"); ?></option>
						</select>
						</p>

						<p class="c">C.
						<select>
							<option value="" selected><?php echo _("Select"); ?></option>
							<option value="Cell"><?php echo _("Cell"); ?></option>
							<option value="Chromosome"><?php echo _("Chromosome"); ?></option>
							<option value="DNA"><?php echo _("DNA"); ?></option>
							<option value="Gene"><?php echo _("Gene"); ?></option>
							<option value="Nucleus"><?php echo _("Nucleus"); ?></option>
						</select>
						</p>

						<p class="d">D.
						<select>
							<option value="" selected><?php echo _("Select"); ?></option>
							<option value="Cell"><?php echo _("Cell"); ?></option>
							<option value="Chromosome"><?php echo _("Chromosome"); ?></option>
							<option value="DNA"><?php echo _("DNA"); ?></option>
							<option value="Gene"><?php echo _("Gene"); ?></option>
							<option value="Nucleus"><?php echo _("Nucleus"); ?></option>
						</select>
						</p>

						<p class="e">E.
						<select>
							<option value="" selected><?php echo _("Select"); ?></option>
							<option value="Cell"><?php echo _("Cell"); ?></option>
							<option value="Chromosome"><?php echo _("Chromosome"); ?></option>
							<option value="DNA"><?php echo _("DNA"); ?></option>
							<option value="Gene"><?php echo _("Gene"); ?></option>
							<option value="Nucleus"><?php echo _("Nucleus"); ?></option>
						</select>
						</p>

						<div class="nl-overlay"></div>
					</form>

					<img src="images/21/21.jpg">
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer">
					<p class="a"></p>
					<p class="b"></p>
					<p class="c"></p>
					<p class="d"></p>
					<p class="e"></p>
				</div>				<img src="images/21/21.jpg">				<div class="clear"></div>
				<div class="feedback center"></div>				
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Cell, chromosome and DNA..."); ?></strong></section></section>

	<script>
	var nlform = new NLForm( document.getElementById( 'nl-form' ) );

	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	function save() {
		if (answered == 0) {
			saveAnswer('genetic-codes-qq4-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "20.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		if ($('#question .a').find('select').val() == "" ||
			$('#question .b').find('select').val() == "" ||
			$('#question .c').find('select').val() == "" ||
			$('#question .d').find('select').val() == "" ||
			$('#question .e').find('select').val() == "") {
			checkAnswer = 1;
		} else {
			checkAnswer = 0;
		}
		
		if (checkAnswer == 1) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('#answer').find('.answer .a').html('A. ' + $('#question .a').find('select option:selected').text());
			$('#answer').find('.answer .b').html('B. ' + $('#question .b').find('select option:selected').text());
			$('#answer').find('.answer .c').html('C. ' + $('#question .c').find('select option:selected').text());
			$('#answer').find('.answer .d').html('D. ' + $('#question .d').find('select option:selected').text());
			$('#answer').find('.answer .e').html('E. ' + $('#question .e').find('select option:selected').text());

			if ($('#question .a').find('select').val() == "Cell" &&
				$('#question .b').find('select').val() == "Nucleus" &&
				$('#question .c').find('select').val() == "Chromosome" &&
				$('#question .d').find('select').val() == "DNA" &&
				$('#question .e').find('select').val() == "Gene") {
				$('#answer').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Great! The whole organism shown is called a cell, the central section is the nucleus, inside of which are chromosomes."); ?></p>');
			} else {
				$('#answer').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. The whole organism shown is called a cell, the central section is the nucleus, inside of which are chromosomes. DNA is the molecule found in the nucleus and a gene is a section of DNA."); ?></p>');
			}

			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){
				answer.fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>

	<?php include_once "setlocale.php"; ?>
</body>
</html>
