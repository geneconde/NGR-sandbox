<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!-- Template for pages 3, 5, 7 and 9 and possibly quiz questions -->
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _('Reproduction'); ?></title> <!-- Change title here -->
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
.bg { background-image: url('images/9/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; overflow: hidden; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }

#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question1 { margin-bottom: 10px; }
.nl-field-toggle, .nl-form input, .nl-form select { color: #2262C2; border-bottom: 1px dashed #2262C2; }
.nl-field-toggle:hover { color: #2A7FFF}
.nl-field ul { background-color: #2A7FFF; }
.nl-dd ul li.nl-dd-checked { background-color: #283B80; color: #AAD4FF; }
#ans1, #ans2, #ans3, #ans4 { color: #2262C2; }

#question2 ul { width: 780px; margin: 0 auto; padding: 0; list-style-type: none; }
#question2 li { float: left; width: 180px; margin-right: 20px; margin-top: 20px; }
#question2 li:nth-child(5) { margin-left: 200px; }
#question2 li:nth-child(4), #question2 li:nth-child(7) { margin-right: 0; }
#question2 li img { width: 98%; }
//#question2 li:nth-child(-n+4) { margin: 10px 15px; }
//#question2 li:nth-last-child(-n+3) { margin: 10px 50px; }
#question2 input[type=checkbox] { display: none; }
#choices2 label { display: block; text-align: center; cursor: pointer; }
#choices2 input[type="checkbox"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices2 input[type="checkbox"]:checked + label img { border: 4px solid #0A5F5F; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices2 input[type="checkbox"] + label span { color: #000; -webkit-transition: all .3s ease; font-size: 20px; display: block; margin-top: -8px; }
#choices2 input[type="checkbox"]:checked + label span { color: #0A5F5F; -webkit-transition: all .3s ease; }

.nl-form { font-size: 22px; }
#question1 h2, #answer1 h2 { width: 85%; }
#buttons .next { display: none; }
#answer p { margin: 5px 0; }
#selected_img1 { margin: 0 auto; display: block; }
#answer2 {  }
#selected_answer1 { font-size: 22px; }
#selected_answer2 p { font-size: 22px; margin: 0 auto; }
<?php if($language == "es_ES") { ?>
	h1 { padding: 0 !important; }
	#question1 h2, #answer1 h2 { width: 93%; }
<?php } ?> 
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#question2 li {
		width: 21% !important;
		}
}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question2 ul {
	width: 700px;
	margin: 0 auto;
	padding: 0;
	list-style-type: none;
	}
}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Quick Check #3'); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Fill in the blanks to complete the paragraph below. Click on the select button to choose the <span class=\"blink\">correct</span> answer."); ?></h2>
					<form id="nl-form" class="nl-form">
						<?php echo _('In all species, females produce'); ?> 
						<select id="opt1">
							<option value="" selected>&#60;<?php echo _('select'); ?>&#62;</option>
							<option value="sperm"><?php echo _('sperm'); ?></option>
							<option value="flowers"><?php echo _('flowers'); ?></option>
							<option value="productive"><?php echo _('productive'); ?></option>
							<option value="pollen"><?php echo _('pollen'); ?></option>
							<option value="eggs"><?php echo _('eggs'); ?></option>
							<option value="reproductive"><?php echo _('reproductive'); ?></option>
						</select>
						<?php echo _('and males produce'); ?>
						<select id="opt2">
							<option value="" selected>&#60;<?php echo _('select'); ?>&#62;</option>
							<option value="sperm"><?php echo _('sperm'); ?></option>
							<option value="flowers"><?php echo _('flowers'); ?></option>
							<option value="productive"><?php echo _('productive'); ?></option>
							<option value="pollen"><?php echo _('pollen'); ?></option>
							<option value="eggs"><?php echo _('eggs'); ?></option>
							<option value="reproductive"><?php echo _('reproductive'); ?></option>
						</select>
						<?php echo _('. But they do so with very different physical structures. Plant reproductive structures are found in '); ?>
						<select id="opt3">
							<option value="" selected>&#60;<?php echo _('select'); ?>&#62;</option>
							<option value="sperm"><?php echo _('sperm'); ?></option>
							<option value="flowers"><?php echo _('flowers'); ?></option>
							<option value="productive"><?php echo _('productive'); ?></option>
							<option value="pollen"><?php echo _('pollen'); ?></option>
							<option value="eggs"><?php echo _('eggs'); ?></option>
							<option value="reproductive"><?php echo _('reproductive'); ?></option>
						</select>
						<?php echo _('. In animals, individuals are either male or female, each having very different '); ?>
						<select id="opt4">
							<option value="" selected>&#60;<?php echo _('select'); ?>&#62;</option>
							<option value="sperm"><?php echo _('sperm'); ?></option>
							<option value="flowers"><?php echo _('flowers'); ?></option>
							<option value="productive"><?php echo _('productive'); ?></option>
							<option value="pollen"><?php echo _('pollen'); ?></option>
							<option value="eggs"><?php echo _('eggs'); ?></option>
							<option value="reproductive"><?php echo _('reproductive'); ?></option>
						</select>
						<?php echo _('systems.'); ?>
						
					<div class="nl-overlay"></div>
					</form>
				</div>
				<div id="question2">
					
					<h2><?php echo _("Question B. Click on <span class=\"blink\">all</span> the following processes that all living things do."); ?></h2>
					<ul id="choices2">
						<!-- <li>
							<input type="checkbox" id="a1" name="question2" value="A">
							<label for="a1"><img src="images/9/a.jpg"><span><?php echo _('Movement'); ?></span></label>
						</li> -->
						<li>
							<input type="checkbox" id="a1" name="question2" value="A">
							<label for="a1"><img src="images/9/b.jpg"><span><?php echo _('Respiration'); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="b1" name="question2" value="B">
							<label for="b1"><img src="images/9/c.jpg"><span><?php echo _('Growing'); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="c1" name="question2" value="C">
							<label for="c1"><img src="images/9/d.jpg"><span><?php echo _('Shrinking'); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="d1" name="question2" value="D">
							<label for="d1"><img src="images/9/e.jpg"><span><?php echo _('Reproduction'); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="e1" name="question2" value="E">
							<label for="e1"><img src="images/9/f.jpg"><span><?php echo _('Asexual reproduction'); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="f1" name="question2" value="F">
							<label for="f1"><img src="images/9/g.jpg"><span><?php echo _('Responding to the environment'); ?></span></label>
						</li>
						
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _('Quick Check #3'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Fill in the blanks to complete the paragraph below. Click on the select button to choose the <span class=\"blink\">correct</span> answer."); ?></h2>
					<p><?php echo _('You answered...'); ?></p>
					<p id='selected_answer1'><?php echo _('In all species, females produce'); ?> <span id="ans1"></span> <?php echo _('and males produce'); ?> <span id="ans2"></span><?php echo _('. But they do so with very different physical structures. Plant reproductive structures are found in '); ?><span id="ans3"></span><?php echo _('. In animals, individuals are either male or female, each having very different '); ?><span id="ans4"></span> <?php echo _('systems.'); ?></p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. Click on <span class=\"blink\">all</span> the following processes that all living things do."); ?></h2>
					<p><?php echo _('You answered...'); ?></p>
					<div id="selected_answer2"> </div>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Studying the life cycle...'); ?></strong></section></section>
	<script>
	var answered = 1;
	var feedback1 = "";
	var feedback2 = "",
		answericon1 = $('#answer-icon1'),
		answericon2 = $('#answer-icon2'),
		textstr1 = ""
		answer2 = ""
		nullAnswer = false;
	
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
					answer2 = "";
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
				$('a.back-toggle').attr('href','8.php#screen3');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $('#opt1').val() + '-' + $('#opt2').val() + '-' + $('#opt3').val() + '-' + $('#opt4').val();
		$('#ans1').text($('#opt1 option:selected').text());
		$('#ans2').text($('#opt2 option:selected').text());
		$('#ans3').text($('#opt3 option:selected').text());
		$('#ans4').text($('#opt4 option:selected').text());

		if(studentAnswer1 == 'eggs-sperm-flowers-reproductive') {
			textstr1 =  '<?php echo _("Great job! Plants and animals have different parts for reproduction. Sometimes plants have female and male structures all on one plant, but most animals have two separate female and male parents."); ?>';
			answericon1.attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
			$('#feedback1').text(textstr1);
		} else {
			textstr1 = '<?php echo _("Not quite. Plants and animals have different parts for reproduction. Sometimes plants have female and male structures all on one plant, but most animals have two separate female and male parents."); ?>';
			answericon1.attr("src", "images/others/wrong.png");
			$('#feedback1').addClass('red');
			$('#feedback1').text(textstr1);
		}
		//check question B
		/*if($('#a1').is(":checked")) {
			answer2 = "A";
			$('#selected_answer2').append('<p><?php echo _("Movement"); ?></p>');
		}*/
		if($('#a1').is(":checked")) { 
			answer2 += "A";
			$('#selected_answer2').append('<p><?php echo _("Respiration"); ?></p>');
		}
		if($('#b1').is(":checked")) {
			answer2 += "B";
			$('#selected_answer2').append('<p><?php echo _("Growing"); ?></p>');
		}
		if($('#c1').is(":checked")) {
			answer2 += "C";
			$('#selected_answer2').append('<p><?php echo _("Shrinking"); ?></p>');
		}
		if($('#d1').is(":checked")) {
			answer2 += "D";
			$('#selected_answer2').append('<p><?php echo _("Reproduction"); ?></p>');
		}
		if($('#e1').is(":checked")) {
			answer2 += "E";
			$('#selected_answer2').append('<p><?php echo _("Asexual reproduction"); ?></p>');
		}
		if($('#f1').is(":checked")) {
			answer2 += "F";
			$('#selected_answer2').append('<p><?php echo _("Responding to the environment"); ?></p>');
		}
		
		if(answer2=='ABDF'){
			textstr2 = '<?php echo _("Great job! All living things breathe somehow, grow, reproduce, and respond to their environment."); ?>';
			answericon2.attr("src", "images/others/correct.png");
			$('#feedback2').addClass('green');
			$('#feedback2').text(textstr2);
		} else {
			textstr2 = '<?php echo _("Not quite. All living things breathe somehow, grow, reproduce, and respond to their environment."); ?>';
			answericon2.attr("src", "images/others/wrong.png");
			$('#feedback2').addClass('red');
			$('#feedback2').text(textstr2);
		}
		 //end check question B

		if(answered == 0){
			saveAnswer('reproduction-qc3-a', $('#opt1').val());
			saveAnswer('reproduction-qc3-b', $('#opt2').val());
			saveAnswer('reproduction-qc3-c', $('#opt3').val());
			saveAnswer('reproduction-qc3-d', $('#opt4').val());
			saveAnswer('reproduction-qc3-e', answer2);
		}
	}
	
	function checkNull() {
		nullAnswer = false;
		if($('#opt1').val() == 1 || $('#opt2').val() == 1 || $('#opt3').val() == 1 || $('#opt4').val() == 1 ) nullAnswer = true;
		if(!$('#choices2 input:checkbox').is(':checked')) {
			nullAnswer = true;
		}
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
