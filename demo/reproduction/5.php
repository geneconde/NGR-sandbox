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
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/5/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }

#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question1 { height: 250px; }
#question1 ul { width: 100%; margin: 0 auto; padding: 0; list-style-type: none; }
#question1 li { float: left; width: 212px; }
#question1 input[type=radio] { display: none; }
#choices1 label { display: block; text-align: center; cursor: pointer; }
#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #0A5F5F; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label span { color: #0A5F5F; -webkit-transition: all .3s ease; }

#question2 .ac-custom label { color: #000; padding-left: 6% !important; }
#question2 .ac-custom input[type="radio"]:checked + label {color: #0A5F5F; }
#question2 .ac-custom svg path { stroke: #0A5F5F; stroke-width: 3px; }
#question2 .ac-circle svg { width: 40px; height: 40px; margin-top: -20px; }
#question2 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question2 .ac-circle label::before { background-color: #0A5F5F; }
#question2 ul { padding: 10px; }
#question2 li { padding: 8px 0; }
#question2 li label { text-align: left; font-size: 24px !important; }
#buttons .next { display: none; }
#answer p { margin: 5px 0; }
#selected_img1 { margin: 0 auto; display: block; }
#answer2 { margin-top: 2%; }


html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] #question1 h2 { padding-right: 12%; }
html[dir="rtl"] #question1 li { float: right; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question2 .ac-circle input[type="radio"], #question2 .ac-circle label::before { right: 0; }
html[dir="rtl"] .ac-circle svg { right: -10px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Which of the following stages is <span class=\"blink\">not</span> a part of all animal life cycles?"); ?></h2>
					<ul id="choices1">
						<li>
							<input type="radio" id="a1" name="question1" value="A">
							<label for="a1"><img src="images/5/a.jpg"><span><?php echo _("Birth or hatching"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="question1" value="B">
							<label for="b1"><img src="images/5/b.jpg"><span><?php echo _("Reproducing"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="question1" value="C">
							<label for="c1"><img src="images/5/c.jpg"><span><?php echo _("Caring for young"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="question1" value="D">
							<label for="d1"><img src="images/5/d.jpg"><span><?php echo _("Death"); ?></span></label>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
				<div id="question2">
					<h2><?php echo _("Question B. Which living things have this life cycle: birth, growth, reproduction, and death?"); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ul id="choices2">
								<li><input type="radio" id="a2" name="question2" value="A">
									<label for="a2"><?php echo _("Plants and animals"); ?></label>
								</li>
								<li><input type="radio" id="b2" name="question2" value="B">
									<label for="b2"><?php echo _("Animals and humans"); ?></label>
								</li>
								<li><input type="radio" id="c2" name="question2" value="C">
									<label for="c2"><?php echo _("All living organisms"); ?></label>
								</li>
								<li><input type="radio" id="d2" name="question2" value="D">
									<label for="d2"><?php echo _("Plants, animals, and humans"); ?></label>
								</li>
							</ul>
						</form>
					</section>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following stages is <span class=\"blink\">not</span> a part of all animal life cycles?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<img src="" id="selected_img1" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. Which living things have this life cycle: birth, growth, reproduction, and death?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p id="selected_answer2"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var nullAnswer;
	
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
					
				});//end of $('img.check-toggle').click(function()
			}
		});

		$('a.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
					
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}else{
				$('a.back-toggle').attr('href','4.php#screen2');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		studentAnswer2 = $("input[name='question2']:checked").val();
		var text1 = "";
		var text2 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('No... All animals hatch or are born.'); ?>";
				text1 = "<?php echo _('Birth or hatching'); ?>";
				$('#selected_img1').attr("src","images/5/a.jpg");
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _('No... All types of animals reproduce.'); ?>";
				text1 = "<?php echo _('Reproducing'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/5/b.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _("That's correct. Some types of animals live on their own their entire lives."); ?>";
				text1 = "<?php echo _('Caring for young'); ?>";
				$('#feedback1').addClass('green');
				$('#selected_img1').attr("src","images/5/c.jpg");
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('No... All animals eventually die.'); ?>";
				text1 = "<?php echo _('Death'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/5/d.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		 
		 switch(studentAnswer2){
			case 'A':
				feedback2 = "<?php echo _('Not quite. Plants and animals do have life cycles like that, but so do humans and all other living organisms.'); ?>";
				text2 = "<?php echo _('Plants and animals'); ?>";
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback2 = "<?php echo _('Not quite. Humans and animals do have life cycles like that, but so do plants and all other living organisms.'); ?>";
				text2 = "<?php echo _('Animals and humans'); ?>";
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'C':
				feedback2 = "<?php echo _('Correct! Plants, animals, humans, and other living organisms have the life cycle of birth, growth, reproduction, and death.'); ?>";
				text2 = "<?php echo _('All living organisms'); ?>";
				$('#feedback2').addClass('green');
				$('#answer-icon2').attr("src", "images/others/correct.png");
			break;
			
			case 'D':
				feedback2 = "<?php echo _('Almost. There are tiny organisms you left out that also have this type of life cycle.'); ?>";
				text2 = "<?php echo _('Plants, animals, and humans'); ?>";
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer2').text(text2);
		 $('#feedback2').text(feedback2);
	}
	
	function checkNull() {
		if(!$('#choices1 input:radio').is(':checked')) {
			nullAnswer = true;
		}
		
		if(!$('#choices2 input:radio').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
