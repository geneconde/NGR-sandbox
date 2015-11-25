<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { overflow: hidden; }
.wrap { border-left: 1px dashed #98A8FF; border-right: 1px dashed #98A8FF; }
.bg { background-image: url('images/17/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
#buttons .next { display: none; }
h1 { color: #003399; }
h3 { font-size: 18px; text-align: center; font-weight: normal; }

#choices { float: left; width: 100%; text-align: left; margin-left: 15px; }
#choices h2 { margin-left: 20px; }
#answer { display: none; }
#answer-icon1, #answer-icon2, #answer-icon3, #answer-icon4 { display:inline-block; height: 30px; margin-right: 10px; }
.img-align { vertical-align: sub; }
.pic { height: 200px; width: 100%; text-align: center; margin-top: 25px; }
.pic img { height: 100%; margin: 0 auto;  }
#answer p { text-align: center; }

input[type="checkbox"] { display:none; }
input[type="checkbox"]:checked + label span { background:url('images/17/checked2.png') no-repeat; }
input[type="checkbox"] + label span {
    display:inline-block;
    width:30px;
    height:50px;
    background:url('images/17/unchecked2.png') no-repeat;
    cursor:pointer;
	margin: 0 15px;
	float: left;
}
label { margin: 0; font-size: 24px; color: #000; cursor: pointer; padding: 0; }
.text-label { padding-top: 19px; }

html[dir="rtl"] #choices { text-align: right; }
html[dir="rtl"] p { text-align: right !important; }
html[dir="rtl"] #answer p { text-align: center !important; }
html[dir="rtl"] input[type="checkbox"] + label span { float: right; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	#choices { margin-left: 0; }
	.text-label { padding-top: 10px; font-size: 22px; }
	input[type="checkbox"] + label span { margin: -12px 15px 0; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("The map below shows a possible scenario of an earthquake in a certain area. Which of the statements below <span class='blink red'>ARE NOT</span> correct?"); ?></h2>
				<div id="choices">
					<input type="checkbox" name="choices" id="a">
					<label for="a"><span></span>
						<div class="text-label"><?php echo _("A. The map shows us which areas are most likely going to feel the earthquake the most."); ?></div>
					</label><div class="clear"></div>
					<input type="checkbox" name="choices" id="b">
					<label for="b"><span></span>
						<div class="text-label"><?php echo _("B. The red area will probably have the most damage from the earthquake."); ?></div>
					</label><div class="clear"></div>
					<input type="checkbox" name="choices" id="c">
					<label for="c"><span></span>
						<div class="text-label"><?php echo _("C. The yellow area will probably feel the earthquake the least."); ?></div>
					</label><div class="clear"></div>
					<input type="checkbox" name="choices" id="d">
					<label for="d"><span></span>
						<div class="text-label"><?php echo _("D. This information can help people in the area prepare for the earthquake."); ?></div>
					</label><div class="clear"></div>
				</div>
				<div class="clear"></div>
				<div class="pic">
					<img src="images/17/pic.jpg">
					<h3><?php echo _("Image produced by the U.S. Geological Survey"); ?></h3>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p id="textanswer1" class="hidden"></p>
				<div id="answer1" class="hidden"></div>
				<p id="textanswer2" class="hidden"></p>
				<div id="answer2" class="hidden"></div>
				<p id="textanswer3" class="hidden"></p>
				<div id="answer3" class="hidden"></div>
				<p id="textanswer4" class="hidden"></p>
				<div id="answer4" class="hidden"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Looking for emergency exits..."); ?></strong></section></section>
	<script>
	var answer = '';
	var textstr = '';
	var answered = 1;
	var nullAnswer = false;
	$(document).ready(function() {
		/* Back Screen */
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = '16.php';
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').fadeOut();
					$('#answer2').fadeOut();
					$('#answer3').fadeOut();
					$('#answer4').fadeOut();
					$('#textanswer1').fadeOut();
					$('#textanswer2').fadeOut();
					$('#textanswer3').fadeOut();
					$('#textanswer4').fadeOut();
					answer = '';
				});
			}
		});
		
		/* Check Answer */
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answer."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){
					$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
					$('#answer').fadeIn();
					
					if($('#c').is(':checked') && !$('#a').is(':checked') && !$('#b').is(':checked') && !$('#d').is(':checked')) {
						$('#textanswer1').text('<?php echo _("C. The yellow area will probably feel the earthquake the least."); ?>');
						$('#answer1').html('<p class="green"><img src="images/19/correct.png" id="answer-icon1"><?php echo _("Correct. This is false because the amount of shaking is \"strong\" for the yellow region."); ?></p>');
						$('#textanswer1').fadeIn();
						$('#answer1').fadeIn();
						answer = "C";
					} else {
						textstr = '';
						if($('#a').is(':checked')) {
							$('#textanswer2').text('<?php echo _("A. The map shows us which areas are most likely going to feel the earthquake the most."); ?>');
							$('#textanswer2').fadeIn();
							$('#answer').find($('#answer2')).html('<p class="red"><img src="images/19/wrong.png" id="answer-icon2" class="img-align"><?php echo _("No, this statement is correct. The map shows us which areas are most likely going to feel the earthquake the most as well as the possible amount of damage each area will have."); ?></p>');
							$('#answer2').fadeIn();
							answer += "A";
						}
						if ($('#b').is(':checked')) {
							$('#textanswer3').text('<?php echo _("B. The red area will probably have the most damage from the earthquake."); ?>');
							$('#textanswer3').fadeIn();
							$('#answer').find($('#answer3')).html('<p class="red"><img src="images/19/wrong.png" id="answer-icon3" class="img-align"><?php echo _("No, this statement is correct. From the chart we see that the potential damage of the red region is &#34;very heavy&#34; which is the most probable damage."); ?></p>');
							$('#answer3').fadeIn();
							answer += "B";
						}
						if ($('#d').is(':checked')) {
							$('#textanswer4').text('<?php echo _("D. This information can help people in the area prepare for the earthquake."); ?>');
							$('#textanswer4').fadeIn();
							$('#answer').find($('#answer4')).html('<p class="red"><img src="images/19/wrong.png" id="answer-icon3" class="img-align"><?php echo _("No, this statement is correct. People can identify the area they live or work in and prepare for potential damages."); ?></p>');
							$('#answer4').fadeIn();
							answer += "D";
						}
						
						if ($('#c').is(':checked')) {
							answer += "C";
						}
					}
					
					if (answered == 0) {
						saveAnswer('natural-hazards-qq4-a', answer);
						answered = 1;
					}
				}); // end question fade
			} // end else
		}); // end check answer
	});

	function checkNull() {
		if(!$('#a').is(':checked') && !$('#b').is(':checked') && !$('#c').is(':checked') && !$('#d').is(':checked')) nullAnswer = true;
	}	
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
