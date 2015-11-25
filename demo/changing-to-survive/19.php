<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!-- Template for pages 3, 5, 7 and 9 and possibly quiz questions -->
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-default.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-component.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/19/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #b77f4e !important; }
h2 { margin-bottom: 20px; }
.wrap { border-left: 1px dashed #ffec90; border-right: 1px dashed #ffec90; }

#answer { display: none; }
.back-toggle-answer, #buttons .next { display: none; }

#question1 .ac-custom label { color: #000; padding-left: 6% !important; }
#question1 .ac-custom input[type="radio"]:checked + label {color: #0A5F5F; }
#question1 .ac-custom svg path { stroke: #0A5F5F; stroke-width: 3px; }
#question1 .ac-circle svg { width: 40px; height: 40px; margin-top: -20px; }
#question1 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question1 .ac-circle label::before { background-color: #0A5F5F; width: 20px; height: 20px; margin-top: -9px;  left: 0; }
#question1 ul { padding: 10px; }
#question1 li { padding: 5px 0; }
#question1 li label { text-align: left; font-size: 24px !important; }
.nl-dd ul li.nl-dd-checked:before { right: 0; }
.nl-field ul {
	background: #B77F4E;
}
.nl-dd ul li.nl-dd-checked {
	color: #FFC840;
}
.nl-field-toggle, .nl-form input, .nl-form select {
line-height: inherit;
display: inline-block;
color: #FFC840 !important;
cursor: pointer;
border-bottom: none !important;
background: #b77f4e;
padding: 4px 10px;
border-radius: 10px;
font-size: 32px;
}

#answer p { margin: 5px 0; text-align: center; }
#selected_img1 { margin: 0 auto; display: block; width: 250px; }
#answer2 { margin-top: 2%; }

#nl-form { margin: 0 auto; width: 400px; text-align: center; }
.arrow { width: 30px; height: 30px; text-align: center; margin: 0 auto 30px; }
.arrow img { width: 100%; }
#answer .arrow { margin: 20px auto }
#answered { margin-bottom: 20px; }
#answered span {
	color: #AC5000;
	border-bottom: none;
	font-size: 45px;
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<div id="question1">
					<h2><?php echo _("The following is a simplified diagram of the evolution of species. Fill in the blanks by selecting the correct phrases from the drop down boxes."); ?></h2>
					<form id="nl-form" class="nl-form">			
						<select id="opt1">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("Genetic variation"); ?></option>
							<option value="B"><?php echo _("Helpful mutation"); ?></option>
							<option value="C"><?php echo _("Natural selection"); ?></option>
							<option value="D"><?php echo _("Neutral mutation"); ?></option>
							<option value="E"><?php echo _("Artificial selection"); ?></option>
							<option value="F"><?php echo _("Inherited mutation"); ?></option>
						</select>
						<div class="arrow"><img src="images/19/arrow.png"></div>
						<select id="opt2">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("Genetic variation"); ?></option>
							<option value="B"><?php echo _("Helpful mutation"); ?></option>
							<option value="C"><?php echo _("Natural selection"); ?></option>
							<option value="D"><?php echo _("Neutral mutation"); ?></option>
							<option value="E"><?php echo _("Artificial selection"); ?></option>
							<option value="F"><?php echo _("Inherited mutation"); ?></option>
						</select>
						<div class="arrow"><img src="images/19/arrow.png"></div>
						<select id="opt3">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="A"><?php echo _("Genetic variation"); ?></option>
							<option value="B"><?php echo _("Helpful mutation"); ?></option>
							<option value="C"><?php echo _("Natural selection"); ?></option>
							<option value="D"><?php echo _("Neutral mutation"); ?></option>
							<option value="E"><?php echo _("Artificial selection"); ?></option>
							<option value="F"><?php echo _("Inherited mutation"); ?></option>
						</select>
					<div class="nl-overlay"></div>
					</form>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<div id="answered">
						<p><span id="ans1"></span></p>
						<div class="arrow"><img src="images/19/arrow.png"></div>
						<p><span id="ans2"></span></p>
						<div class="arrow"><img src="images/19/arrow.png"></div>
						<p><span id="ans3"></span></p>
					</div>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id="feedback1"></span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var nullAnswer = false;
	
	$(document).ready(function() {
		$('.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _('Please select your answer.'); ?>");
				nullAnswer = false;
			} else {
				checkAnswer();
				$('#question').fadeOut(function(){
					$('#answer').fadeIn();
					$('.check-toggle').fadeOut( function(){
						$('.next-toggle').fadeIn();
					});
				});
			}
		});

		$('.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('.back-toggle').fadeIn();
					$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
					
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
				});
			}else{
				$('.back-toggle').attr('href','18.php');
			}
		});//end of $('.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		answer1 = $('#opt1').val();
		answer2 = $('#opt2').val();
		answer3 = $('#opt3').val();

		$('#ans1').text($('#opt1 option:selected').text());
		$('#ans2').text($('#opt2 option:selected').text());
		$('#ans3').text($('#opt3 option:selected').text());
		 
		if(answer1 == "F" && answer2 == "A" && answer3 == "C") {
			feedback1 = "<?php echo _('Correct! Inherited mutation creates genetic variation, which acted on by natural selection leads to evolution of species.'); ?>";
			$('#feedback1').addClass('green');
			$('#answer-icon1').attr("src", "images/others/correct.png");
		} else {
			feedback1 = "<?php echo _('Not quite! Inherited mutation creates genetic variation, which acted on by natural selection leads to evolution of species.'); ?>";
			$('#feedback1').addClass('red');
			$('#answer-icon1').attr("src", "images/others/wrong.png");
		}
	
		$('#feedback1').text(feedback1); 
	}// end check answer
	
	function checkNull() {
		if($('#opt1').val() == 1 || $('#opt2').val() == 1 || $('#opt3').val() == 1) {
			nullAnswer = true;
		}
	}
	</script>
	<script src="scripts/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
