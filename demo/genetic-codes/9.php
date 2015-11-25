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
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #42A0A0; }
.wrap { border-color: #c1fdff; }
.bg { background-image: url(images/9/bg.jpg); }

#question1 ol { list-style: none; padding: 0; margin: 15px 0 0 20px; }
#question1 li { padding: 6px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] {}
#question1 .ac-custom input[type="radio"]:checked + label { color: #C55A98; }
#question1 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question1 .ac-custom svg path { stroke: #C55A98; }
#question1 .ac-custom label::before { background: #C55A98; height: 20px; width: 20px; margin-top: -12px;}

#sortable { list-style: none; margin: 20px auto; padding-left: 0; width: 200px; padding-top:40px; }
#sortable li { background: #C55A98; padding: 5px; font-size: 24px; margin-bottom: 5px; text-align: center; border-radius: 5px; cursor: move; }
#sortable li:last-child { margin-bottom: 0; }
#sortable_holder { height: 210px; width: 230px; margin: 0 auto; }


#answer2 ul { list-style: none; padding-left: 0; width: 200px; margin: 20px auto; }
#answer2 li { background: #C55A98; padding: 5px; font-size: 24px; margin-bottom: 5px; text-align: center; border-radius: 5px; }
#answer2 li:last-child { margin-bottom: 0; }
#buttons .next { display: none; }
#answers { display: none; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -13px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #sortable, html[dir="rtl"] #sortable_holder, html[dir="rtl"] #answer2 ul {width: 380px;}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Each gene is responsible for the production of..."); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("A single protein."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Many different proteins."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("A single chromosome."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Half of all chromosomes."); ?></span></label></li>
							</ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Place the following in order from smallest to largest. Sort the items by dragging them upwards or downwards."); ?></h2>	
					<div id="sortable_holder">
						<ul id="sortable">
							<li id="1"><?php echo _("Base pair"); ?></li>
							<li id="2"><?php echo _("Chromosome"); ?></li>
							<li id="3"><?php echo _("DNA molecule"); ?></li>
						</ul>
					</div>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Each gene is responsible for the production of..."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2" class="clear">
					<h2><?php echo _("Question B. Place the following in order from smallest to largest. Sort the items by dragging them upwards or downwards."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<ul class="answer"></ul>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying gene..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$( "#sortable" ).sortable({ scroll: false, containment: "#sortable_holder" });

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p><?php echo _("A single protein."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right! Remember: one gene, one protein."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p><?php echo _("Many different proteins."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Too complicated. Many proteins need many genes."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p><?php echo _("A single chromosome."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Chromosomes are combinations of many genes."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p><?php echo _("Half of all chromosomes."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Way too much! Scale it back."); ?></p>');
			ans1 = 'D';
		}
	});

	$('a.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			if ($('#1').index() == 2 && 
				$('#2').index() == 1 &&
				$('#3').index() == 0) {
					
					$('#answer2').find('.answer').html('<li><?php echo _("DNA molecule"); ?></li><li><?php echo _("Chromosome"); ?></li><li><?php echo _("Base pair"); ?></li>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the smallest of the three is a base pair which makes up the DNA helix, and DNA molecules make up chromosomes."); ?></p>');
			} else if ($('#1').index() == 0 && 
				$('#2').index() == 2 &&
				$('#3').index() == 1) {
					
					$('#answer2').find('.answer').html('<li><?php echo _("Base pair"); ?></li><li><?php echo _("DNA molecule"); ?></li><li><?php echo _("Chromosome"); ?></li>');
					$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Base pairs are part of DNA, and DNA molecules make up chromosomes."); ?></p>');
			} else if ($('#1').index() == 2 && 
				$('#2').index() == 0 &&
				$('#3').index() == 1) {

					$('#answer2').find('.answer').html('<li><?php echo _("Chromosome"); ?></li><li><?php echo _("DNA molecule"); ?></li><li><?php echo _("Base pair"); ?></li>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the smallest of the three is a base pair which makes up the DNA helix, and DNA molecules make up chromosomes."); ?></p>');
			} else if ($('#1').index() == 1 && 
				$('#2').index() == 0 &&
				$('#3').index() == 2) {

					$('#answer2').find('.answer').html('<li><?php echo _("Chromosome"); ?></li><li><?php echo _("Base pair"); ?></li><li><?php echo _("DNA molecule"); ?></li>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the smallest of the three is a base pair which makes up the DNA helix, and DNA molecules make up chromosomes."); ?></p>');
			} else if ($('#1').index() == 0 && 
				$('#2').index() == 1 &&
				$('#3').index() == 2) {

					$('#answer2').find('.answer').html('<li><?php echo _("Base pair"); ?></li><li><?php echo _("Chromosome"); ?></li><li><?php echo _("DNA molecule"); ?></li>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the smallest of the three is a base pair which makes up the DNA helix, and DNA molecules make up chromosomes."); ?></p>');
			} else if ($('#1').index() == 1 && 
				$('#2').index() == 2 &&
				$('#3').index() == 0) {

					$('#answer2').find('.answer').html('<li><?php echo _("DNA molecule"); ?></li><li><?php echo _("Base pair"); ?></li><li><?php echo _("Chromosome"); ?></li>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the smallest of the three is a base pair which makes up the DNA helix, and DNA molecules make up chromosomes."); ?></p>');
			} 

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
			saveAnswer('genetic-codes-qc3-a', ans1);
			saveAnswer('genetic-codes-qc3-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "8.php#screen2";
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
