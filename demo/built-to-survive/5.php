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
.bg { background-image: url('images/5/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #4F8AD3; }
p { color: #e1d589; padding: 0; }
#buttons .next { display: none; }
.q-container { margin: 5px 0px 10px 0px !important; height: 270px; margin: 0 auto: width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;}
#choices1 { width: 50%; float: left; }
#choices1 p { text-align: left; padding: 5px 0px; color: #000; margin-left: 20px; }
#choices1 h2 { padding-left: 0 !important; }
#choices2 { margin-left: 20px; width: 67%; float: left; }
.pic { height: 140px; float: right; text-align: center; margin: 15px 15px 0 0; }
.pic img { height: 100%; margin-right: 20px; margin: 0 auto; }
.answer-item { margin: 5px 0px !important; margin: 0 auto; padding: 0px 5px; width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
.answer-item > div { width: 95%; margin: 0 auto; }
.answer-item p { color: #000; }
#answer-icon1, #answer-icon2 { display: inline-block; height: 30px; margin-right: 10px; }

#hexaflip-container { float: right; margin-right: 15px 0 0; width: 45%; }
#hexaflip-container p { color: #055D79; padding-bottom: 10px; }
#hexaflip { margin: 0 auto; }
input[type=radio].css-checkbox { display:none; }

input[type=radio].css-checkbox + label.css-label {
	background-image: url('images/5/unchecked.png');
	padding: 0 0 5px 32px;
	display:inline-block;
	line-height:27px;
	background-repeat:no-repeat;
	background-position: 0 0;
	font-size:24px;
	vertical-align:middle;
	cursor:pointer;
	color: #000;
}

input[type=radio].css-checkbox:checked + label.css-label { background-image: url('images/5/checked.png');}
label.css-label {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

html[dir="rtl"] #choices1 { float: right; }
html[dir="rtl"] input[type=radio].css-checkbox + label.css-label { background-position: right; padding: 0 32px 5px 0; }
html[dir="rtl"] #choices1 p { text-align: right }
html[dir="rtl"] #answer p { text-align: center; }
html[dir="rtl"] #choices2 { float: right; }
html[dir="rtl"] #choices2 p { text-align: right }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.q-container { clear: both; }
	#choices2 { width: 66%; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="es"] .q-container { margin: 0 !important; }
	html[dir="es"] h2, html[dir="es"] p { font-size: 22px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div class="q-container">
					<h2><?php echo _("Question A. Why do you think the DNA of bacteria is contained in the middle of the cell?"); ?></h2>
					<div id="choices1">
						<p><?php echo _("A. It is roomier inside."); ?></p>
						<p><?php echo _("B. It is safer inside."); ?></p>
						<p><?php echo _("C. It is darker inside."); ?></p>
						<p><?php echo _("D. It is the correct temperature inside."); ?></p>
					</div>
					<div id="hexaflip-container">
						<p><?php echo _("Rotate or flip the 3D box below either up or down to set your answer."); ?></p>
						<div id="hexaflip"></div>
					</div>
				</div>
				<div class="q-container">
					<h2><?php echo _("Question B. Shown on the right is the blowhole of a dolphin. Why is it advantageous for the blowhole to be located at the top of a dolphin, instead of at the bottom?"); ?></h2>
					<div id="choices2">
						<input type="radio" name="choices1" id="a1" class="css-checkbox">
						<label for="a1" class="css-label">A. <?php echo _("It is easier for the fish to see the surface of the water where the air is going to be found."); ?></label>
						<input type="radio" name="choices1" id="b1" class="css-checkbox">
						<label for="b1" class="css-label">B. <?php echo _("It takes less energy for a dolphin to expose the top of its head than any place on its bottom side."); ?></label>
						<input type="radio" name="choices1" id="c1" class="css-checkbox">
						<label for="c1" class="css-label">C. <?php echo _("A blowhole on the bottom side of the fish would let the air drain out."); ?></label>
					</div>
					<div class="pic">
						<img src="images/5/dolphin.jpg">
					</div>
				</div>
				
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. Why do you think the DNA of bacteria is contained in the middle of the cell?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<br/>
					<p><span id="textanswer1"></span></p><br>
					<div><p><img id="answer-icon1"><span id="answer1"></span></p></div>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. Shown on the right is the blowhole of a dolphin. Why is it advantageous for the blowhole to be located at the top of a dolphin, instead of at the bottom?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<br/>
					<div><p><span id="textanswer2"></span></p></div>
					<br/>
					<div><p><img id="answer-icon2"><span id="answer2"></span></p></div>
				</div>

			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>
	<script>
	var answer1, answer2;
	var answered = 1;
	var textstr = "";
	var nullAnswer = false;
	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "4.php#screen3";
			} else if($('#answer').is(':visible')){
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
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

					/* For checking of question A */
					var hexavalue = hexa.getValue();
					if (hexavalue == './images/others/a.png') answer1 = "A";
					if (hexavalue == './images/others/b.png') answer1 = "B";
					if (hexavalue == './images/others/c.png') answer1 = "C";
					if (hexavalue == './images/others/d.png') answer1 = "D";
					
					if(answer1 == "B") {
						textstr = "<?php echo _("Correct. The important chemical code must be kept safe, and the middle of the cell is the place least vulnerable to destruction."); ?>";
						$('#textanswer1').text('<?php echo _("B. It is safer inside."); ?>');
						$('#answer-icon1').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
					} else {
						if(answer1 == "A") {
							textstr = "<?php echo _("No, DNA is the genetic code that defines the organism, so being so important, it is in the safest place in a single-celled organism."); ?>";
							$('#textanswer1').text('<?php echo _("A. It is roomier inside."); ?>');
						} else if (answer1 == "C") {
							textstr = "<?php echo _("No, the DNA which defines the organism is kept safely in the middle of the cell. Having light, extra room, or a suitable temperature is not the reason for its location."); ?>";
							$('#textanswer1').text('<?php echo _("C. It is darker inside."); ?>');
						} else if (answer1 == "D") {
							textstr = "<?php echo _("No, The important chemical code must be kept safe. Having light, extra room, or a suitable temperature is not the reason for its location."); ?>";
							$('#textanswer1').text('<?php echo _("D. It is the correct temperature inside."); ?>');
						}
						$('#answer-icon1').attr("src", "images/others/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					/* End checking of question A */
					
					/* For checking of question B */
					if($('#b1').is(':checked')) {
						textstr = "<?php echo _("Correct. Dolphins rise to the surface to breathe about two to three times per minute. The quickest way to get air would be to have the blowhole on the top of the animal."); ?>";
						$('#answer-icon2').attr("src", "images/others/correct.png");
						$('#textanswer2').text('B. <?php echo _("It takes less energy for a dolphin to expose the top of its head than any place on its bottom side."); ?>');
						$('#answer2').addClass('green');
						answer2 = "B";
					} else {
						if ($('#a1').is(':checked')) {
							textstr = "<?php echo _("No, the marine mammal rises to the surface to breathe about two to three times per minute. The quickest way to get air would be to have the blowhole on the top of the animal."); ?>";
							$('#textanswer2').text('A. <?php echo _("It is easier for the fish to see the surface of the water where the air is going to be found."); ?>');
							answer2 = "A";
						} else if ($('#c1').is(':checked')) {
							textstr = "<?php echo _("No, a blowhole on the bottom side of the aquatic mammal would cause it to have to rise to the surface and turn over to get air to breathe. As they do this about two to three times per minute, it would take too long."); ?>";
							$('#textanswer2').text('C. <?php echo _("A blowhole on the bottom side of the fish would let the air drain out."); ?>');
							answer2 = "C";
						}
						$('#answer-icon2').attr("src", "images/others/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}
					$('#answer2').text(textstr);
					/* End checking of question B */
					
					if(answered == 0) {
						saveAnswer('built-to-survive-qc1-a', answer1);
						saveAnswer('built-to-survive-qc1-b', answer2);
						answered = 1;
					} // end save to db
				});	// question fade
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function checkNull() {
		if(!$('#a1').is(':checked') && !$('#b1').is(':checked') && !$('#c1').is(':checked')) nullAnswer = true;
	}
	</script>
	<script src="scripts/hexaflip.js"></script>
    <script>
		var set1 = ['./images/others/a.png','./images/others/b.png','./images/others/c.png','./images/others/d.png'];
		var hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set1 }, { size: 150 });
    </script>
	<?php include("setlocale.php"); ?>
</body>
</html>