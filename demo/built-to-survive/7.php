<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES"){ ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
body { overflow: hidden; }
.bg { background-image: url('images/7/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #4F8AD3; }
#buttons .next { display: none; }
.q-container { margin: 5px 0px 10px 0px !important; margin: 0 auto: width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;}
#choices1 { margin: 10px 0 0 20px; }
#choices2 { width: 50%; float: left; margin-bottom: 10px; }
#choices1 p, #choices2 p { text-align: left; padding: 5px 0px; color: #000; margin-left: 22px; }
#choices1 h2 { padding-left: 0 !important; }
div.q-container:first-child .choices { padding-left: 20px; }
.pic { height: 140px; float: right; text-align: center; margin: 15px 15px 0 0; }
.pic img { height: 100%; margin-right: 20px; margin: 0 auto; }
.answer-item { margin: 5px 0px !important; margin: 0 auto; padding: 0px 5px; width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
.answer-item > div { width: 95%; margin: 0 auto; }
.answer-item p { color: #000; padding-bottom: 5px; }
.answer-item div:last-child { margin-bottom: 10px; }
#answer-icon1, #answer-icon2 { display: inline-block; height: 30px; margin-right: 10px; }

#hexaflip-container { float: right; margin-right: 15px; width: 45%; padding: 0; }
#hexaflip-container p { color: #055D79; padding: 0 0 10px 0; }
#hexaflip { margin: 0 auto; }

input[type=radio].css-checkbox { display:none; }

input[type=radio].css-checkbox + label.css-label {
	background-image: url('images/7/unchecked.png');
	padding: 0 0 5px 32px;
	display:inline-block;
	line-height:27px;
	background-repeat:no-repeat;
	background-position: 0 0;
	font-size:24px;
	vertical-align:middle;
	cursor:pointer;
	color: #000;
	position: relative;
}

input[type=radio].css-checkbox:checked + label.css-label { background-image: url('images/7/checked.png');}
label.css-label {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

html[dir="rtl"] input[type=radio].css-checkbox + label.css-label { padding: 0 32px 5px 0; background-position: right; }
html[dir="rtl"] #choices2 { float: right; width: 20%; }
html[dir="rtl"] #choices2 p { text-align: right }
html[dir="rtl"] #answer p { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="es"] .answer-item div:last-child { margin-bottom: 0; }
	html[dir="es"] .answer-item { margin: 0; }
	html[dir="es"] h2 { padding: 0; }
	html[dir="es"] #answer p { font-size: 22px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<div class="q-container">
					<h2><?php echo _("Question A. Why is having hollow bones an advantage for flying birds?"); ?></h2>
					<div id="choices1">
						<input type="radio" name="choices1" id="a1" class="css-checkbox">
						<label for="a1" class="css-label">A. <?php echo _("Hollow bones carry extra air and food."); ?></label><br><br>
						<input type="radio" name="choices1" id="b1" class="css-checkbox">
						<label for="b1" class="css-label">B. <?php echo _("Hollow bones are usually stronger."); ?></label><br><br>
						<input type="radio" name="choices1" id="c1" class="css-checkbox">
						<label for="c1" class="css-label">C. <?php echo _("Hollow bones reduce the bird's weight."); ?></label>
					</div>
				</div>
				<div class="q-container">
					<h2><?php echo _("Question B. Based on the mentioned strength of a rhinoceros beetle and how it can lift or carry over 100 times its own body weight, how many grams could a 100 gram, 6 inch long rhinoceros beetle carry?"); ?></h2>
					<div id="choices2">
						<p><?php echo _("A. 600 grams"); ?></p>
						<p><?php echo _("B. 6,000 grams"); ?></p>
						<p><?php echo _("C. 10,000 grams"); ?></p>
					</div>
					<div id="hexaflip-container">
						<p><?php echo _("Rotate or flip the 3D box below either up or down to set your answer."); ?></p>
						<div id="hexaflip"></div>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. Why is having hollow bones an advantage for flying birds?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div><p><span id="textanswer1"></span></p></div>
					<div><p><img id="answer-icon1"><span id="answer1"></span></p></div>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. Based on the mentioned strength of a rhinoceros beetle and how it can lift or carry over 100 times its own body weight, how many grams could a 100 gram, 6 inch long rhinoceros beetle carry?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div><p><span id="textanswer2"></span></p></div>
					<div><p><img id="answer-icon2"><span id="answer2"></span></p></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Another quick check on the way!"); ?></strong></section></section>
	<script>
	var answer1, answer2;
	var answered = 1;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "6.php#screen2";
			} else if($('#answer').is(':visible')){
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer2').removeClass('red');				
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
				});
			}			
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answers."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
					window.location.hash = "#answer";

					/* For checking of question A */
					if($('#c1').is(':checked')) {
						textstr = "<?php echo _("Correct. Having hollow bones means the bird weighs less so it can fly easier."); ?>";
						$('#textanswer1').text("C. <?php echo _("Hollow bones reduce the bird's weight."); ?>");
						$('#answer-icon1').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
						answer1 = "C";
					} else {
						if ($('#a1').is(':checked')) {
							textstr = "<?php echo _("No, having hollow bones means birds weigh less. With less weight, flying is easier for the birds."); ?>";
							$('#textanswer1').text('A. <?php echo _("Hollow bones carry extra air and food."); ?>');
							answer1 = "A";
						} else if ($('#b1').is(':checked')) {
							textstr = "<?php echo _("No, hollow bones are not stronger, they are actually more brittle because they are hollow. But hollow bones weigh less which make flying easier for birds."); ?>";
							$('#textanswer1').text('B. <?php echo _("Hollow bones are usually stronger."); ?>');
							answer1 = "B";
						}
						$('#answer-icon1').attr("src", "images/others/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					/* End checking of question A */
					
					/* For checking of question B*/
					var hexavalue = hexa.getValue();
					answer2 = null;
					if (hexavalue == './images/others/a.png') answer2 = "A";
					if (hexavalue == './images/others/b.png') answer2 = "B";
					if (hexavalue == './images/others/c.png') answer2 = "C";
					
					if(answer2 == "C") {
						textstr = "<?php echo _("Correct, the beetle can lift 100 times their body weight (100 grams), which would be 100 x 100 = 10,000 grams."); ?>";
						$('#textanswer2').text('C. <?php echo _("C. 10,000 grams"); ?>');
						$('#answer-icon2').attr("src", "images/others/correct.png");
						$('#answer2').addClass('green');
					} else {
						if(answer2 == "A") {
							textstr = "<?php echo _("No, the beetle can lift 100 times their body weight (100 grams), which would be 100 x 100 = 10,000 grams. (The length of the beetle- 6 inches does not help us solve the problem.)"); ?>";
							$('#textanswer2').text('A. <?php echo _("A. 600 grams"); ?>');
						} else if (answer2 == "B") {
							textstr = "<?php echo _("No, the beetle can lift 100 times their body weight (100 grams), which would be 100 x 100 = 10,000 grams. (The length of the beetle- 6 inches does not help us solve the problem.)"); ?>";
							$('#textanswer2').text('B. <?php echo _("B. 6,000 grams"); ?>');
						}
						$('#answer-icon2').attr("src", "images/others/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}
					$('#answer2').text(textstr);
					
					if(answered == 0) {
						saveAnswer('built-to-survive-qc2-a', answer1);
						saveAnswer('built-to-survive-qc2-b', answer2);
						answered = 1;
					} // end save to db
					/* End checking of question B */
				}); // end question fade
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function checkNull() {
		if(!$('#a1').is(':checked') && !$('#b1').is(':checked') && !$('#c1').is(':checked')) nullAnswer = true;
	}
	</script>
	<script src="scripts/hexaflip.js"></script>
    <script>
		var set1 = ['./images/others/a.png','./images/others/b.png','./images/others/c.png'];
		var hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set1 }, { size: 150 });
    </script>
	<?php include("setlocale.php"); ?>
</body>
</html>
