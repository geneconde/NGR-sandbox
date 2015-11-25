<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #5b4d4f; }
.wrap { border-left: 1px dashed #c0f84a; border-right: 1px dashed #c0f84a; }
.bg { background: url('images/5/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; z-index:99;}
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #780046; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #780046; }
.ac-custom svg path { stroke: #780046; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question2 ol { margin: 0 0 0 20px; padding: 0; }
#question2 li { padding: 10px 0; }
#question1 ol { list-style: none; padding: 0; margin: 15px 0 0 20px; }
#question1 li { padding: 6px 0; }
#question1 section { float: left; width: 530px; }
#question1 img { float: right; width: 260px; margin: 10px 40px 0 0; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] {}
#question1 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question1 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question1 .ac-custom svg path { stroke: #780046; }
#question1 .ac-custom label::before { background: #780046; height: 20px; width: 20px; margin-top: -12px;}
#answers { display: none; }
#answers p { text-align: center; }
#question2, #answer2 { margin-top: 25px; }
#buttons .next { display: none; }<?php if($language == "es_ES") { ?>
	h2 { font-size: 23px; }
<?php } ?> 

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #question1 img {float: left;margin: 37px 0 0 40px;}
html[dir="rtl"] #question1 section {float:right;}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div id="question1" class="clearfix">
					<h2><?php echo _('Question A. Which of the following statements is <span class="blink">true</span> regarding photosynthesis?'); ?></h2>	
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span>A. <?php echo _("Photosynthesis occurs only in animal cells."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span>B. <?php echo _("Energy is stored in the chemical bonds of sugars."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span>C. <?php echo _("Carbon dioxide is released into the air."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span>D. <?php echo _("Sugars are consumed for energy release."); ?></span></label></li>
							<ol>
						</form>
					</section>
					<img src="images/5/flower.jpg">
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. Which of the following is the name of the process in which energy is released from sugar?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span>A. <?php echo _("Cellular respiration"); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span>B. <?php echo _("Photosynthesis"); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span>C. <?php echo _("Metabolism"); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span>D. <?php echo _("Light reactions"); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _('Question A. Which of the following statements is <span class="blink">true</span> regarding photosynthesis?'); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					
				<div id="answer2">
					<h2><?php echo _("Question B. Which of the following is the name of the process in which energy is released from sugar?"); ?></h2>	
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
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Photosynthesis occurs only in animal cells."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. Animal cells can't do photosynthesis."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Energy is stored in the chemical bonds of sugars."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! Energy is stored in the bonds holding carbon, hydrogen, and oxygen atoms in sugar molecules."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("Carbon dioxide is released into the air."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("It's the other way. Carbon dioxide is taken from the air."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Sugars are consumed for energy release."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. This is where energy is stored in sugar."); ?></p>');
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("Cellular respiration"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right! Respiration releases the stored power of the sun."); ?></p>");
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("Photosynthesis"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Umm... No.  It's the other one...."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("Metabolism"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not unrelated. But not the best answer."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("Light reactions"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Don't think this term showed up in this review..."); ?></p>");
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('energy-for-life-qc1-a', ans1);
			saveAnswer('energy-for-life-qc1-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if($('#questions').is(':visible')) {
			document.location.href = "4.php#screen4"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
			});
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
			}); 
		}
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
