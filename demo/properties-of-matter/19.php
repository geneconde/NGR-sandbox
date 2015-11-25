<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/svgnormalize.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/svgmodernizr.custom.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/19/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
p { color: #fff; }
img.back-toggle-answer, #buttons .next { display: none; }
.q-container { margin: 5px 0px !important; height: 280px; margin: 0 auto; width: 100%; padding: 0; }
.answer-item { width: 57%; margin: 5px 0px !important; height: 280px; margin: 0 auto; padding: 0; float: left; }
#answer-icon1, #answer-icon2 { display:inline-block; height: 25px; margin-right: 5px; }
.pic { float: left; height: 200px; margin: 0px 30px; }
.pic img { height: 100%; }
.ac-custom label { font-size: 30px; font-weight: normal; color: #fff; padding: 0 0 0 50px; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 40px; height: 40px; margin-top: -20px; }
.ac-custom li { padding: 10px 0px; }
.ac-custom ul { margin: 35px 0 0 310px !important; }
#first .ac-custom svg { width: 35px !important; height: 35px !important; top: 57% !important; left: 38px !important; }
#second .ac-custom svg { width: 35px !important; height: 35px !important; top: 57% !important; left: 33px !important; }
#answer .pic { margin: 0px 15px; }
html[dir="rtl"] .ac-custom label { padding: 0 50px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom svg { right:2px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.answer-item { width: 48%; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<div class="q-container" id="first">
					<h2><?php echo _("In the process of baking bread, a few ingredients (flour, water, and yeast) are mixed in together. Is this initial mixing a physical or chemical change?"); ?></h2>
					<div class="pic">
						<img src="images/19/img1.png">
					</div>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="a1" name="r1" type="radio"><label for="a1"><?php echo _("Physical Change"); ?></label></li>
							<li><input id="b1" name="r1" type="radio"><label for="b1"><?php echo _("Chemical Change"); ?></label></li>
						</ul>
					</form>
				</div>
				<div class="clear"></div>
				<div class="q-container" id="second">
					<h2><?php echo _("After mixing the ingredients, the yeast starts to feed on the sugars in the flour and begins to make the bread dough \"rise\". Is bread \"rising\" a physical or chemical change?"); ?></h2>
					<div class="pic">
						<img src="images/19/img2.png">
					</div>
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="a2" name="r2" type="radio"><label for="a2"><?php echo _("Physical Change"); ?></label></li>
							<li><input id="b2" name="r2" type="radio"><label for="b2"><?php echo _("Chemical Change"); ?></label></li>
						</ul>
					</form>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<p><?php echo _("You answered..."); ?></p>
					<p><span id="textanswer1"></span></p>
					<p><img src="" id="answer-icon1"><span id="answer1"></span></p>
				</div>
				<div class="pic">
					<img src="images/19/img1.png">
				</div>
				<div class="clear"></div>
				<div class="answer-item">
					<p><?php echo _("You answered..."); ?></p>
					<p><span id="textanswer2"></span></p>
					<p><img src="" id="answer-icon2"><span id="answer2"></span></p>
				</div>
				<div class="pic">
					<img src="images/19/img2.png">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer1, answer2;
	//var answered = 0;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "18.php";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer2').removeClass('red');				
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
					window.location.hash = '';
				});
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true){
				e.preventDefault();
				window.location.hash = '';
				alert('<?php echo _("Please select your answers."); ?>');
				nullAnswer = false;				
			} else {
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					window.location.hash = '#answer';
					
					/* For checking of question A */
					if($('#a1').is(':checked')) {
						textstr = '<?php echo _("Correct, the initial mixing of the ingredients does not form a new substance, or cause a chemical reaction."); ?>';
						$('#textanswer1').text('<?php echo _("Physical Change"); ?>');
						$('#answer-icon1').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
						answer1 = "physical";
					} else {
						textstr = '<?php echo _("No, the initial mixing of the ingredients does not form a new substance, or cause a chemical reaction. It is a physical change."); ?>';
						$('#textanswer1').text('<?php echo _("Chemical Change"); ?>');
						$('#answer-icon1').attr("src", "images/others/wrong2.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
						answer1 = "chemical";
					}
					$('#answer1').text(textstr);
					/* End checking of question A */
					
					/* For checking of question B */
					if($('#b2').is(':checked')) {
						textstr = '<?php echo _("Correct, new substances such as carbon dioxide are formed and the process is not easily reversed. It is a chemical change."); ?>';
						$('#textanswer2').text('<?php echo _("Chemical Change"); ?>');
						$('#answer-icon2').attr("src", "images/others/correct.png");
						$('#answer2').addClass('green');
						answer2 = "chemical";
					} else {
						textstr = '<?php echo _("No, new substances such as carbon dioxide are formed and the process is not easily reversed. It is a chemical change."); ?>';
						$('#textanswer2').text('<?php echo _("Physical Change"); ?>');
						$('#answer-icon2').attr("src", "images/others/wrong2.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
						answer2 = "physical";
					}
					$('#answer2').text(textstr);
					/* End checking of question B */
					
					/*
					if(answered == 0) {
						saveAnswer('properties-of-matter-qq6-a',answer1);
						saveAnswer('properties-of-matter-qq6-b',answer2);
					} // end save to db
					*/
				}); // end question fade
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function checkNull() {
		if(!$('#a1').is(':checked') && !$('#b1').is(':checked')) { nullAnswer = true; }
		if(!$('#a2').is(':checked') && !$('#b2').is(':checked')) { nullAnswer = true; }
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<section id="preloader"><section class="selected"><strong><?php echo _("It's rising!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
