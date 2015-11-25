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
.bg { background: url('images/7/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; z-index:99; }
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #780046; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #780046; }
.ac-custom svg path { stroke: #780046; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question2 { margin-top: 40px !important; }
#question2 ol { margin: 0 auto; padding: 0; }
#question2 li { padding: 6px 0; }
#question1 ul { margin: 20px auto 0; width: 800px; list-style: none; padding: 0; }
#question1 li { float: left; width: 180px; margin-right: 26px; }
#question1 li:last-child { margin-right: 0; }
#question1 input[type=radio] { display: none; }
#question1 label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question1 input[type="radio"] + label img { border: 4px solid #8AA355; -webkit-transition: all .3s ease; border-radius: 5px !important; }
#question1 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
#question1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question1 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden;  ;}
#question1 input[type="radio"] + label { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; height: 195px;}
#question1 input[type="radio"]:checked + label {}
#answers { display: none; }
#answers p { text-align: center; font-size: 22px; }
#answer2 .feedback { width: 660px; margin: 0 auto; }
#answer1 .image { float: left; margin: 20px 20px 0 0; }
#answer1 .image img { border: 4px solid #8AA355; }
#answer1 .placeholder { float: left; margin-top: 20px; width: 640px; }
#answer1 p { text-align: left; }
#answer1 .clearfix { width: 100%; margin: 0 auto; }
#answer1 .feedback { margin: 0; }
#question2, #answer2 { margin-top: 25px; }
#buttons .next { display: none; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -17px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -10px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #answer1 .image {float: right;margin: 0 0 20px 20px;}
html[dir="rtl"] #answer1 p { text-align: right; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 li {margin-right: 3px;}
	#answer1 .placeholder {width: 523px;}

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Plants are generally understood to play which role in the ecosystem?"); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="radio" id="a1" name="q1">
							<label for="a1"><img src="images/7/a.jpg"><span><?php echo _("Producers"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="q1">
							<label for="b1"><img src="images/7/b.jpg"><span><?php echo _("First-order consumers"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="q1">
							<label for="c1"><img src="images/7/c.jpg"><span><?php echo _("Herbivores"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="q1">
							<label for="d1"><img src="images/7/d.jpg"><span><?php echo _("Decomposers"); ?></span></label>
						</li>
					</ul>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. Which of the following illustrates the complex set of relationships in a plant/animal community?"); ?></h2>	
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Food pyramid"); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Temperature graph"); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Food web"); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Periodic table"); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Plants are generally understood to play which role in the ecosystem?"); ?></h2>	
					<div class="clearfix">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>					
				<div id="answer2">
					<h2><?php echo _("Question B. Which of the following illustrates the complex set of relationships in a plant/animal community?"); ?></h2>	
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Roles and relationships"); ?></strong></section></section>
	<script>

	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#question1').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.image').html('<img src="images/7/a.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Producers"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Producers gather solar energy in photosynthesis."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.image').html('<img src="images/7/b.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("First-order consumers"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Consumers eat plants."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.image').html('<img src="images/7/c.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Herbivores"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Herbivores eat plants."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.image').html('<img src="images/7/d.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Decomposers"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Decomposers break down dead material."); ?></p>');
			ans1 = 'D';
		}
	});

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Food pyramid"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. The pyramid may be useful in meal planning, though."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Temperature graph"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Ummm... Not related to plant/animal relationships."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Food web"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! Food webs illustrate complex plant/animal relationships."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Periodic table"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. The periodic table is a tool for chemistry."); ?></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('energy-for-life-qc2-a', ans1);
			saveAnswer('energy-for-life-qc2-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if($('#questions').is(':visible')) {
			document.location.href = "6.php#screen3"; // change to the previous page's last screen e.g. 4.html#screen2
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
