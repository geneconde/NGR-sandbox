<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'earth-materials-and-systems-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<style>
//h1 { color: #000; }
h2 { margin: 0; font-size: 22px; }
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/5/bg.jpg); overflow: hidden; }

#questions { position: relative; z-index: 5; }
#question1 ul { width: 850px; list-style: none; padding: 0; margin: 0; }
#question1 li { float: left; width: 160px; margin: 5px; }
#question1 li:last-child { margin-right: 0; }
#question1 input[type=radio] { display: none; }
#question1 label { font-size: 22px; display: block; text-align: center; cursor: pointer; width: 160px; }
#question1 input[type="radio"] + label img { border: 4px solid #fee27e; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 160px; }
#question1 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
#question1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question1 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden;  ;}
#question1 input[type="radio"] + label { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }
#question1 input[type="radio"]:checked + label {}

#question2, #question3 { width: 415px; float: left; margin-top: 10px; }
#question3 { float: right; }
#question2 ul { width: 420px; list-style: none; padding: 0; margin: 0; }
#question2 li { float: left; width: 160px; margin: 5px; }
#question2 li:last-child { margin-right: 0; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 22px; display: block; text-align: center; cursor: pointer; width: 160px; }
#question2 input[type="radio"] + label img { border: 4px solid #fee27e; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 160px; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }
#question2 input[type="radio"]:checked + label {}

#question3 ol { margin: 0 0 0 20px; padding: 0; }
#question3 li { padding: 10px 0; }
#question3 .ac-custom { width: 100%; }
#question3 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question3 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question3 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question3 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question3 .ac-custom label::before { border: 2px solid #780046; }
#question3 .ac-custom svg path { stroke: #780046; }
#question3 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; }
#answer1 .image, #answer2 .image { float: left; margin: 10px 20px 0 0; }
#answer1 .image img, #answer2 .image img { width: 160px; border: 4px solid #fee27e; }
#answer1 .placeholder, #answer2 .placeholder { float: left; margin-top: 10px; width: 620px; }
#answer1 p, #answer2 p { text-align: left; padding: 0; }
#answer1 .clear, #answer2 .clear { width: 800px; margin: 0 auto; }
#answer1 .feedback, #answer2 .feedback { margin: 0; }

#answer2, #answer3 { margin-top: 25px; }
#buttons .next { display: none; }<?php if($language == "zh_CN") { ?>
	h2, #amswers p { font-size: 20px; }
<?php } ?>

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question3 .ac-custom svg { right: 37px; margin-top: -10px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #answer1 .image, html[dir="rtl"] #answer2 .image {float:right; margin: 10px 0 0 20px;}
html[dir="rtl"] #answer1 p, html[dir="rtl"] #answer2 p {text-align: right;}
html[dir="rtl"] .feedback p { font-size: 20px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 input[type="radio"] + label img,#question1 label { width: 100%; }
	#question1 li {width: 137px;}
	#question2, #question3 {width: 50%;}
}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. The biosphere, which is the earth's living system, includes all of the following <span class='blink'>except</span>:"); ?></h2>	

					<ul class="clear">
						<li>
							<input type="radio" id="a1" name="q1">
							<label for="a1"><img src="images/5/tigers.jpg"><span><?php echo _("Tigers"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="q1">
							<label for="b1"><img src="images/5/air.jpg"><span><?php echo _("Air"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="q1">
							<label for="c1"><img src="images/5/bacteria.jpg"><span><?php echo _("Bacteria"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="q1">
							<label for="d1"><img src="images/5/humans.jpg"><span><?php echo _("Humans"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="e1" name="q1">
							<label for="e1"><img src="images/5/trees.jpg"><span><?php echo _("Trees"); ?></span></label>
						</li>
					</ul>

				</div>
				
				<div id="question2" class="clear">
					<h2><?php echo _("Question B. When we see the earth from space, the blue color we see that gives earth the name the \"Blue Planet\" is from the:"); ?></h2>	

					<ul class="clear">
						<li>
							<input type="radio" id="a2" name="q2">
							<label for="a2"><img src="images/5/sky.jpg"><span><?php echo _("Sky"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b2" name="q2">
							<label for="b2"><img src="images/5/flowers.jpg"><span><?php echo _("Blue flowers"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c2" name="q2">
							<label for="c2"><img src="images/5/rocks.jpg"><span><?php echo _("Rocks"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d2" name="q2">
							<label for="d2"><img src="images/5/ocean.jpg"><span><?php echo _("Ocean"); ?></span></label>
						</li>
					</ul>

				</div>

				<div id="question3">
					<h2><?php echo _("Question C. The hydrosphere includes which of the following?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a3" name="q3" type="radio"><label for="a3"><span><?php echo _("The salt water in the oceans"); ?></span></label></li>
								<li><input id="b3" name="q3" type="radio"><label for="b3"><span><?php echo _("The fresh water in the rivers and lakes"); ?></span></label></li>
								<li><input id="c3" name="q3" type="radio"><label for="c3"><span><?php echo _("The water in snow and ice glaciers"); ?></span></label></li>
								<li><input id="d3" name="q3" type="radio"><label for="d3"><span><?php echo _("All of the above"); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. The biosphere, which is the earth's living system, includes all of the following <span class='blink'>except</span>:"); ?></h2>	
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
					<h2><?php echo _("Question B. When we see the earth from space, the blue color we see that gives earth the name the \"Blue Planet\" is from the:"); ?></h2>	
					<div class="clear">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>
				
				<div id="answer3">
					<h2><?php echo _("Question C. The hydrosphere includes which of the following?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>

	<script>
	var ans1, ans2, ans3, answered = <?php echo $answered; ?>, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.image').html('<img src="images/5/tigers.jpg">');
			$('#answer1').find('.answer').html("<p><?php echo _("Tigers"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, animals are part of the biosphere."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.image').html('<img src="images/5/air.jpg">');
			$('#answer1').find('.answer').html("<p><?php echo _("Air"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. Air is part of the atmosphere."); ?></p>");
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.image').html('<img src="images/5/bacteria.jpg">');
			$('#answer1').find('.answer').html("<p><?php echo _("Bacteria"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, bacteria are living organisms that are part of the biosphere."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.image').html('<img src="images/5/humans.jpg">');
			$('#answer1').find('.answer').html("<p><?php echo _("Humans"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, humans are part of the biosphere. Some scientists also call the part of the environment that includes humans and their impact the anthrosphere."); ?></p>");
			ans1 = 'D';
		}

		if (me == 'e1') {
			$('#answer1').find('.image').html('<img src="images/5/trees.jpg">');
			$('#answer1').find('.answer').html("<p><?php echo _("Trees"); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, trees are part of the biosphere."); ?></p>");
			ans1 = 'E';
		}
		
		if (me == 'a2') {
			$('#answer2').find('.image').html('<img src="images/5/sky.jpg">');
			$('#answer2').find('.answer').html("<p><?php echo _("Sky"); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. The sky might look blue looking up from earth but looking down from space, the sky is colorless except for the clouds, which appear as white."); ?></p>");
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.image').html('<img src="images/5/flowers.jpg">');
			$('#answer2').find('.answer').html("<p><?php echo _("Blue flowers"); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, blue flowers on earth are too small to be seen when looking at earth from space."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.image').html('<img src="images/5/rocks.jpg">');
			$('#answer2').find('.answer').html("<p><?php echo _("Rocks"); ?></p>");
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. Looking at earth from space, the oceans give earth the name the \"Blue Planet\"."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.image').html('<img src="images/5/ocean.jpg">');
			$('#answer2').find('.answer').html("<p><?php echo _("Ocean"); ?></p>");
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Looking at earth from space, the oceans give earth the name the \"Blue Planet\"."); ?></p>');
			ans2 = 'D';
		}
		
		if (me == 'a3') {
			$('#answer3').find('.answer').html("<p>"+ "<?php echo _("The salt water in the oceans"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, the oceans are part of the hydrosphere, but so are the fresh water in the rivers and lakes and the water in snow and ice glaciers."); ?></p>");
			ans3 = 'A';
		}

		if (me == 'b3') {
			$('#answer3').find('.answer').html("<p>" + "<?php echo _("The fresh water in the rivers and lakes"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, the rivers and lakes are part of the hydrosphere, but so are the salt water in the oceans and the water in snow and ice glaciers."); ?></p>");
			ans3 = 'B';
		}

		if (me == 'c3') {
			$('#answer3').find('.answer').html("<p>" + "<?php echo _("The water in snow and ice glaciers"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite, the water in snow and ice glaciers are part of the hydrosphere, but so are the salt water in the oceans and the freshwater in the rivers and lakes."); ?></p>");
			ans3 = 'C';
		}

		if (me == 'd3') {
			$('#answer3').find('.answer').html("<p>" + "<?php echo _("All of the above"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. The different forms of water in the oceans, rivers and lakes, and ice glaciers all make up the hydrosphere."); ?></p>");
			ans3 = 'D';
		}
	});

	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 3) {
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
			saveAnswer('earth-materials-and-systems-qc1-a', ans1);
			saveAnswer('earth-materials-and-systems-qc1-b', ans2);
			saveAnswer('earth-materials-and-systems-qc1-c', ans3);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "4.php";
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
	<?php require "setlocale.php"; ?>
</body>
</html>
