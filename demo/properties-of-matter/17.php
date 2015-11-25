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
.bg { background-image: url('images/17/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
p { color: #fff; }
img.back-toggle-answer, #buttons .next { display: none; }
.ac-custom label { font-size: 24px; font-weight: normal; color: #fff; padding: 0 0 0 50px; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 40px; height: 40px; margin-top: -20px; }
.ac-custom li { padding: 10px 0px; }
#img-holder { background: url(images/17/holder.png) no-repeat; width: 320px; height: 300px; background-size: 100%;  margin: 0 auto; }
#img-holder img { height: 65%; left: 53px; top: 60px; position: relative; }
#answer-icon { display: inline-block; height: 30px; margin-right: 10px; margin-left: 10px; }
.ac-custom svg { width: 35px; height: 35px; top: 56%; left: 4px; }
html[dir="rtl"] .ac-custom label { padding: 0 50px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom svg { right:2px; }
html[dir="rtl"] #img-holder img { left:-37px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("A metal spoon was left in a pot of boiling soup. The cook burned a finger by touching the spoon. Why did his finger get burned?"); ?></h2>
				<form class="ac-custom ac-radio ac-fill" autocomplete="off">
					<ul>
						<li>
							<input id="r1" name="r1" type="radio">
							<label for="r1">A. <?php echo _("The metal spoon chemically reacted with the cook's hand."); ?></label>
						</li>
						<li>
							<input id="r2" name="r1" type="radio">
							<label for="r2">B. <?php echo _("The metal spoon conducted electricity to the cook's hand."); ?></label>
						</li>
						<li>
							<input id="r3" name="r1" type="radio">
							<label for="r3">C. <?php echo _("The metal spoon conducted heat to the cook's hand."); ?></label>
						</li>
						<li>
							<input id="r4" name="r1" type="radio">
							<label for="r4">D. <?php echo _("The metal spoon insulated the cook's hand."); ?></label>
						</li>
					</ul>
				</form>
				<div id="img-holder">
					<img src="images/17/pot.jpg">
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<div id="img-holder">
						<img src="images/17/pot.jpg">
					</div>
					<p><?php echo _("You answered..."); ?></p>
					<p><span id="textanswer"></span></p>
					<p><img src="" id="answer-icon"><span id="answer1"></span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer = '';
	var textstr = '';
	//var answered = 0;
	var nullAnswer = false;
	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "16.php";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer-icon').removeClass('img-align');
					window.location.hash = '';
				});
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert('<?php echo _("Please select your answer."); ?>');
				nullAnswer = false;
			} else {
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					window.location.hash = '#answer';

					/* For Checking */
					if($('#r3').is(':checked')) {
						textstr = "<?php echo _("Correct, the spoon conducted heat from the boiling soup to the person's hand."); ?>";
						$('#textanswer').text("C. <?php echo _("The metal spoon conducted heat to the cook's hand."); ?>");
						$('#answer-icon').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
						answer = "C";
					} else {
						textstr = '';
						if($('#r1').is(':checked')) {
							textstr = "<?php echo _("No, the spoon did not chemically react with the cook's hand. It conducted heat from the boiling soup to the hand."); ?>";
							$('#textanswer').text("A. <?php echo _("The metal spoon chemically reacted with the cook's hand."); ?>");
							answer = "A";
						} else if ($('#r2').is(':checked')) {
							textstr = "<?php echo _("Not quite, the spoon did not conduct electricity, it conducted heat from the boiling soup to the person's hand."); ?>";
							$('#textanswer').text("B. <?php echo _("The metal spoon conducted electricity to the cook's hand."); ?>");
							answer = "B";
						} else if ($('#r4').is(':checked')) {
							textstr = "<?php echo _("No, the metal spoon conducted heat to the cook's hand. An oven mitt might have insulated the cook's hand."); ?>";
							$('#textanswer').text("D. <?php echo _("The metal spoon insulated the cook's hand."); ?>");
							answer = "D";
						}
						$('#answer-icon').attr("src", "images/others/wrong2.png");
						$('#answer-icon').addClass('img-align');
						$('#answer1').addClass('red');
					}

					$('#answer1').text(textstr);
					/* End Checking */
					
					/*
					if(answered == 0) {
						saveAnswer('properties-of-matter-qq4-a',answer);
					} // end save to db
					*/
				}); // end question fade
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function checkNull() {
		if(!$('#r1').is(':checked') && !$('#r2').is(':checked') && !$('#r3').is(':checked') && !$('#r4').is(':checked')) {
			nullAnswer = true;
		}
	}
    </script>
	<script src="scripts/svgcheckbx.js"></script>
	<section id="preloader"><section class="selected"><strong><?php echo _("The hot spoon"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
