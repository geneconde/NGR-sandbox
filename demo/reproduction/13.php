<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
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
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/13/bg.jpg'); overflow: hidden; background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }
h2 { padding-bottom: 10px; width: 90%; }
#question1 { height: 400px; width: 850px; }
#question1 ul { width: 75%; margin: 0 auto; padding: 0; list-style-type: none; }
#question1 li { float: left; width: 255px; margin: 0 31px; }
#question1 li img { width: 240px; }
#question1 input[type=radio] { display: none; }
#choices1 label { display: block; text-align: center; cursor: pointer; }
#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #0A5F5F; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size: 20px; display: block; margin-top: -8px; }
#choices1 input[type="radio"]:checked + label span { color: #0A5F5F; -webkit-transition: all .3s ease; }

#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question2 { margin-top: 50px; }
.nl-field-toggle, .nl-form input, .nl-form select { color: #2262C2; border-bottom: 1px dashed #2262C2; }
.nl-field-toggle:hover { color: #2A7FFF}
.nl-field ul { background-color: #2A7FFF; }
.nl-dd ul li.nl-dd-checked { background-color: #283B80; color: #AAD4FF; }
#ans1, #ans2, #ans3, #ans4, #ans5 { color: #2262C2; }
.nl-form { font-size: 24px; }
.nl-field ul { top: -20px; }
#buttons .next { display: none; }
#answer p { margin: 5px 0; }
#selected_img1 { margin: 0 auto; display: block; }
#answer2 { margin-top: 2%; }
<?php if($language == "es_ES") { ?>
	#question h1 { padding: 0; }
	.nl-field ul { top: -50px; }
<?php } ?> 
html[dir="rtl"] .nl-field ul { top: -35px; left: -155px; }
html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] #question1 h2 { padding-right: 12%; width: 100%; }
@media only screen and (min-device-width : 768px) {
	#question1 li {
		margin: 0px !important;
	}
	 #question1 ul {
	width: 75%;
	 margin: 0 !important; 
	padding: 0;
	list-style-type: none;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 li {
		margin: 0px 27px !important;
	}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #5"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Which of the follow pictures shows an animal making a courtship display?"); ?></h2>
					
					<ul id="choices1">
						<li>
							<input type="radio" id="a1" name="question1" value="A">
							<label for="a1"><img src="images/13/a.jpg"></label>
						</li>
						<li>
							<input type="radio" id="b1" name="question1" value="B">
							<label for="b1"><img src="images/13/b.jpg"></label>
						</li>
						<li>
							<input type="radio" id="c1" name="question1" value="C">
							<label for="c1"><img src="images/13/c.jpg"></label>
						</li>
						<li>
							<input type="radio" id="d1" name="question1" value="D">
							<label for="d1"><img src="images/13/d.jpg"></label>
						</li>
					</ul>
				</div>
				<div id="question2">
					
					<h2><?php echo _("Question B. Select the <span class='blink'>correct</span> words and complete the paragraph below."); ?></h2>
					<form id="nl-form" class="nl-form">
						<?php echo _("In"); ?> 
						<select id="opt1">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="male"><?php echo _("male"); ?></option>
							<option value="egg"><?php echo _("egg"); ?></option>
							<option value="asexual"><?php echo _("asexual"); ?></option>
							<option value="female"><?php echo _("female"); ?></option>
							<option value="sexual"><?php echo _("sexual"); ?></option>
							<option value="sperm"><?php echo _("sperm"); ?></option>
						</select>
						<?php echo _("reproduction, "); ?>
						<select id="opt2">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="male"><?php echo _("male"); ?></option>
							<option value="egg"><?php echo _("egg"); ?></option>
							<option value="asexual"><?php echo _("asexual"); ?></option>
							<option value="female"><?php echo _("female"); ?></option>
							<option value="sexual"><?php echo _("sexual"); ?></option>
							<option value="sperm"><?php echo _("sperm"); ?></option>
						</select>
						<?php echo _("from the "); ?>
						<select id="opt3">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="male"><?php echo _("male"); ?></option>
							<option value="egg"><?php echo _("egg"); ?></option>
							<option value="asexual"><?php echo _("asexual"); ?></option>
							<option value="female"><?php echo _("female"); ?></option>
							<option value="sexual"><?php echo _("sexual"); ?></option>
							<option value="sperm"><?php echo _("sperm"); ?></option>
						</select>
						<?php echo _("is united with an/a"); ?>
						<select id="opt4">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="male"><?php echo _("male"); ?></option>
							<option value="egg"><?php echo _("egg"); ?></option>
							<option value="asexual"><?php echo _("asexual"); ?></option>
							<option value="female"><?php echo _("female"); ?></option>
							<option value="sexual"><?php echo _("sexual"); ?></option>
							<option value="sperm"><?php echo _("sperm"); ?></option>
						</select>
						<?php echo _("from the "); ?>
						<select id="opt5">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="male"><?php echo _("male"); ?></option>
							<option value="egg"><?php echo _("egg"); ?></option>
							<option value="asexual"><?php echo _("asexual"); ?></option>
							<option value="female"><?php echo _("female"); ?></option>
							<option value="sexual"><?php echo _("sexual"); ?></option>
							<option value="sperm"><?php echo _("sperm"); ?></option>
						</select>
						<?php echo _("creating a fertilized egg."); ?>
					<div class="nl-overlay"></div>
					</form>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quick Check #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Which of the follow pictures shows an animal making a courtship display?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<img id="selected_img1" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. Select the <span class='blink'>correct</span> words and complete the paragraph below."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p><?php echo _('In'); ?> <span id="ans1"></span> <?php echo _('reproduction, '); ?> <span id="ans2"></span> <?php echo _('from the '); ?><span id="ans3"></span> <?php echo _('is united with an/a'); ?><span id="ans4"></span> <?php echo _('from the '); ?><span id="ans5"></span> <?php echo _('creating a fertilized egg.'); ?></p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>
	<script>
	var answered = 1;
	var feedback1 = "";
	var feedback2 = "",
		answericon1 = $('#answer-icon1'),
		answericon2 = $('#answer-icon2'),
		textstr2 = ""
		answer2 = "";
	
	$(document).ready(function() {

		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _('Please select your answers.'); ?>");
				nullAnswer = false;
			} else {
				checkAnswer();
				$('#question').fadeOut(function(){
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut( function(){
						$('a.next-toggle').fadeIn();
					});
					
				});//end of $('a.check-toggle').click(function()
			}
		});

		$('a.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
					$('#selected_answer2').text('');
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}else{
				$('a.back-toggle').attr('href','12.php#screen2');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		//question A
		studentAnswer1 = $("input[name='question1']:checked").val();
		studentAnswer2= "";
		var text1 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('Correct! This bird is making a display.'); ?>";
				$('#selected_img1').attr("src","images/13/a.jpg");
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _("Not this one... it's just a bird."); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/13/b.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('Nah... this is just a bird.'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/13/c.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('Not this one... these are just parrots.'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/13/d.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		 //end check question A
		 
		studentAnswer2 = $('#opt1').val() + '-' + $('#opt2').val() + '-' + $('#opt3').val() + '-' + $('#opt4').val() + '-' + $('#opt5').val();
		$('#ans1').text($('#opt1 option:selected').text());
		$('#ans2').text($('#opt2 option:selected').text());
		$('#ans3').text($('#opt3 option:selected').text());
		$('#ans4').text($('#opt4 option:selected').text());
		$('#ans5').text($('#opt5 option:selected').text());

		if(studentAnswer2 == 'sexual-sperm-male-egg-female' || studentAnswer2 == 'sexual-egg-female-sperm-male') {
			textstr2 =  '<?php echo _("Great job! Animals create offspring by sexual reproduction in which sperm from the male and an egg from the female unite."); ?>';
			answericon2.attr("src", "images/others/correct.png");
			$('#feedback2').addClass('green');
			$('#feedback2').text(textstr2);
			studentAnswer2 = 'sexual-sperm-male-egg-female';
		}else {
			textstr2 =  '<?php echo _("Not quite. Animals create offspring by sexual reproduction in which sperm from the male and an egg from the female unite."); ?>';
			answericon2.attr("src", "images/others/wrong.png");
			$('#feedback2').addClass('red');
			$('#feedback2').text(textstr2);
		}

		var sa2 = studentAnswer2.split('-');

		if(answered == 0) {
			saveAnswer('reproduction-qc5-a', studentAnswer1);
			saveAnswer('reproduction-qc5-b', sa2[0]);
			saveAnswer('reproduction-qc5-c', sa2[1]);
			saveAnswer('reproduction-qc5-d', sa2[2]);
			saveAnswer('reproduction-qc5-e', sa2[3]);
			saveAnswer('reproduction-qc5-f', sa2[4]);
		}	
	}// end checkAnswer()
	
	function checkNull() {
		nullAnswer = false;
		if(!$('#choices1 input:radio').is(':checked')) {
		nullAnswer = true;
		}
		if($('#opt1').val() == 1 || $('#opt2').val() == 1 || $('#opt3').val() == 1 || $('#opt4').val() == 1 || $('#opt5').val() == 1 ) nullAnswer = true;
	}
	</script>
	<script src="scripts/jpreloader.js"></script>
	
	<script src="scripts/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
