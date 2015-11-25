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
.bg { background: url('images/9/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #ffa663; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #ffa663; }
.ac-custom svg path { stroke: #ffa663; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#questions li { padding: 6px 0; }
#questions ul { margin: 0px 0 0 45px; list-style: none; padding: 0; }
#questions li { float: left; width: 180px; margin-right: 13px; }
#questions li:last-child { margin-right: 0; }
#questions input[type=radio] { display: none; }
#questions label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 180px; }
#questions input[type="radio"] + label img { border: 4px solid #8AA355; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 180px; }
#questions input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
#questions input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#questions input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden;  ;}
#questions input[type="radio"] + label { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; height: 195px;}
#question1 ul { margin: 0 auto !important; width: 759px; padding: 0; }
#question2 { margin-top: 40px !important; }
#question2 label { width: 120px; }
#question2 img { width: 120px !important; }
#question2 li { width: 120px; margin-right: 13px; }
#answers { display: none; }
#answers p { text-align: center; font-size: 22px; }
#answers .image { float: left; margin: 0 20px 0 0; }
#answers .image img { border: 4px solid #8AA355; }
#answers .placeholder { float: left; margin-top: 10px; width: 620px; }
#answers p { text-align: left; }
#answers .clearfix { width: 100%; margin: 0 auto; }
#question2, #answer2 { margin-top: 25px; }
#buttons .next { display: none; }html[dir="rtl"] #answers .image {float: right;margin: 5px 0 0 40px;}
html[dir="rtl"] #answers .placeholder {float:right;}
html[dir="rtl"] #answers p {text-align: right;}

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
				<h1><?php echo _("Quick Check #3"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Coal is a fossil fuel made up mostly of..."); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="radio" id="a1" name="q1">
							<label for="a1"><img src="images/9/a1.jpg"><span><?php echo _("Dinosaur remains"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="q1">
							<label for="b1"><img src="images/9/b1.jpg"><span><?php echo _("Marine fossils"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="q1">
							<label for="c1"><img src="images/9/c1.jpg"><span><?php echo _("Plant material"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="q1">
							<label for="d1"><img src="images/9/d1.jpg"><span><?php echo _("Preserved insects"); ?></span></label>
						</li>
					</ul>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. The energy stored in fossil fuels came originally from..."); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="radio" id="a2" name="q2">
							<label for="a2"><img src="images/9/a2.jpg"><span><?php echo _("The sun"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b2" name="q2">
							<label for="b2"><img src="images/9/b2.jpg"><span><?php echo _("Waterfalls"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c2" name="q2">
							<label for="c2"><img src="images/9/c2.jpg"><span><?php echo _("Volcanoes"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d2" name="q2">
							<label for="d2"><img src="images/9/d2.jpg"><span><?php echo _("Dinosaurs"); ?></span></label>
						</li>
					</ul>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Coal is a fossil fuel made up mostly of..."); ?></h2>	
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
					<h2><?php echo _("Question B. The energy stored in fossil fuels came originally from..."); ?></h2>	
					<div class="clearfix">
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
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>
	<script>

	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.image').html('<img src="images/9/a1.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Dinosaur remains"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not dinosaurs... Even though some oil companies use them in advertising."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.image').html('<img src="images/9/b1.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Marine fossils"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Close... Marine fossils are the source for petroleum."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.image').html('<img src="images/9/c1.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Plant material"); ?></p>');
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right! Slabs of coal often include impressions of leaves."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.image').html('<img src="images/9/d1.jpg">');
			$('#answer1').find('.answer').html('<p><?php echo _("Preserved insects"); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. Coal isn't from insects."); ?></p>");
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.image').html('<img src="images/9/a2.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("The sun"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's right! Coal and petroleum are the remains of living things."); ?></p>");
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.image').html('<img src="images/9/b2.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Waterfalls"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry... Waterfalls don't make fossil fuels."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.image').html('<img src="images/9/c2.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Volcanoes"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Um... no. Volcanoes would actually burn fuels away."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.image').html('<img src="images/9/d2.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Dinosaurs"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not dinosaurs, even though they may have left fossils."); ?></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('energy-for-life-qc3-a', ans1);
			saveAnswer('energy-for-life-qc3-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if($('#questions').is(':visible')) {
			document.location.href = "8.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
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
