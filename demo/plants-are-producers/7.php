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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
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
h1 { color: #AC965D; }
.wrap { border-color: #f1e392; }
.bg { background-image: url(images/7/bg.jpg); }

#question1 ol { list-style: none; padding: 0; margin: 15px 0 0 20px; }
#question1 li { padding: 6px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] {}
#question1 .ac-custom input[type="radio"]:checked + label { color: #866222; }
#question1 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question1 .ac-custom svg path { stroke: #866222; }
#question1 .ac-custom label::before { background: #866222; height: 20px; width: 20px; margin-top: -12px;}

#question2 ul { list-style: none; float: left; padding: 20px 0 0 40px; }
#question2 li { font-size: 24px; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 24px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question2 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; border-radius: 0px !important; width: 180px; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }
#question2 input[type="radio"]:checked + label {}
#buttons .next { display: none; }
#box { float: right; margin-right: 50px; }
#box .info { padding-bottom: 20px; font-size: 20px; text-align: center; color: #909438; }
#box .info:nth-child(1) { padding-bottom: 0; }
#hexaflip { margin: 0 auto; }
.hexaflip-cube .hexaflip-side { width: 101%; }

#answers { display: none; }
#answers p { text-align: center; }

#answer2 .image { float: left; margin: 0 20px 0 0; }
#answer2 .image img { width: 140px; height: 140px; margin-top: 0px; border-radius: 0 !important; }
#answer2 .placeholder { float: left; margin-top: 0; width: 680px; }
#answer2 p { text-align: left; }
#answer2 .clear { width: 100%; margin: 0 auto; }
#answer2 .feedback { margin: 0; }

#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }
#buttons .next { display: none; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question1 .ac-circle input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question1 .ac-circle label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question1 .ac-circle svg { right: 27px; margin-top: -27px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question1 li label { text-align: right; }
html[dir="rtl"] #question2 ul { float: right; }
html[dir="rtl"] #answer2 .image { float: right; }
html[dir="rtl"] #answer1 p { text-align: center; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#answer2 .placeholder {
		float: left;
		margin-top: 0;
		width: 555px !important;
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
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1">
					<h2><?php echo _("Question A. Which of the following is <span class='blink'>not</span> a common use of cellulose?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a" name="q" type="radio"><label for="a"><span>A. <?php echo _("Human dietary energy."); ?></span></label></li>
								<li><input id="b" name="q" type="radio"><label for="b"><span>B. <?php echo _("Wood for houses."); ?></span></label></li>
								<li><input id="c" name="q" type="radio"><label for="c"><span>C. <?php echo _("Source material for paper."); ?></span></label></li>
								<li><input id="d" name="q" type="radio"><label for="d"><span>D. <?php echo _("Food for grazing animals."); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>

				<div id="question2" class="clear">
					<h2><?php echo _("Question B. The majority of a large tree's mass and volume is..."); ?></h2>	

					<ul>
						<li>A. <?php echo _("Cellulose"); ?></li>
						<li>B. <?php echo _("Simple sugars"); ?></li>
						<li>C. <?php echo _("Protein"); ?></li>
						<li>D. <?php echo _("Fats"); ?></li>
					</ul>

					<div id="box">
						<p class="info"><?php echo _("Select the answer by rotating the 3D box below."); ?></p>
						<p class="info"><?php echo _("Click, hold and drag up or down"); ?></p>
						<div id="hexaflip"></div>
					</div>
				</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following is <span class='blink'>not</span> a common use of cellulose?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>

				<div id="answer2">
					<h2><?php echo _("Question B. The majority of a large tree's mass and volume is..."); ?></h2>	
					<div class="clear">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>					
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Combining glucose molecules..."); ?></strong></section></section>

	<script src="scripts/hexaflip.js"></script>

	<script>
	var hexa,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });

	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#question1').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a') {
			$('#answer1').find('.answer').html('<p>A. <?php echo _("Human dietary energy."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's correct! Humans are unable to digest cellulose."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b') {
			$('#answer1').find('.answer').html('<p>B. <?php echo _("Wood for houses."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry, that's a major use. Most of our homes are built of plant material."); ?></p>");
			ans1 = 'B';
		}

		if (me == 'c') {
			$('#answer1').find('.answer').html('<p>C. <?php echo _("Source material for paper."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope, that's a common use. When you're writing on paper, you're writing on wood."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd') {
			$('#answer1').find('.answer').html('<p>D. <?php echo _("Food for grazing animals."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry, that's an important use. Grazers are able to digest cellulose for food."); ?></p>");
			ans1 = 'D';
		}
	});

	$('a.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
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
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			$('#answer2').find('.image').html('<img src="images/others/a.png">');
			$('#answer2').find('.answer').html('<p>A. <?php echo _("Cellulose"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right! Wood is made of cellulose."); ?></p>");
			ans2 = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			$('#answer2').find('.image').html('<img src="images/others/b.png">');
			$('#answer2').find('.answer').html('<p>B. <?php echo _("Simple sugars"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No... Simple sugars are part of the story, but not the main component of wood."); ?></p>');
			ans2 = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			$('#answer2').find('.image').html('<img src="images/others/c.png">');
			$('#answer2').find('.answer').html('<p>C. <?php echo _("Protein"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("There's actually very little protein in a tree."); ?></p>");
			ans2 = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			$('#answer2').find('.image').html('<img src="images/others/d.png">');
			$('#answer2').find('.answer').html('<p>D. <?php echo _("Fats"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. Not much fat in a tree."); ?></p>');
			ans2 = 'D';
		}

		if (answered == 0) {
			//saveAnswer('plants-are-producers-qc2-a', ans1);
			//saveAnswer('plants-are-producers-qc2-b', ans2);
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
