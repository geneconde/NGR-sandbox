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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/5/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #b77f4e !important; }
.wrap { border-left: 1px dashed #ffec90; border-right: 1px dashed #ffec90; }

#answer { display: none; }
.back-toggle-answer, #buttons .next { display: none; }
 
#question1 .ac-custom label { color: #000; padding-left: 6% !important; }
#question1 .ac-custom input[type="radio"]:checked + label {color: #AC5000; }
#question1 .ac-custom svg path { stroke: #AC5000; stroke-width: 3px; }
#question1 .ac-circle svg { width: 40px; height: 40px; margin-top: -20px; }
#question1 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question1 .ac-circle label::before { background-color: #AC5000; width: 20px; height: 20px; margin-top: -9px;  left: 0; }
#question1 ul { padding: 10px 10px 0 10px; }
#question1 li { padding: 5px 0; }
#question1 li label { text-align: left; font-size: 24px !important; }

#question2 .ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
#question2 .ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="checkbox"]:checked + label { color: #AC5000; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -12px; }
#question2 .ac-custom label::before { border-color: #AC5000; }
#question2 .ac-custom svg path { stroke: #AC5000; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question2 ol { margin: 0; padding: 10px 0; list-style: none; }
#question2 li { margin: 0; padding: 5px 0; }
#question2 li span { text-align: left; font-size: 24px !important; }
#question2 .ac-custom li { padding: 6px 0; }

#answer p { margin: 5px 0; text-align: center; }
#question2, #answer2 { margin-top: 20px !Important; }


html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Fossils <span class='blink'>do not</span> offer clues about which of the following?"); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ul id="choices1">
								<li><input type="radio" id="a1" name="question1" value="A">
									<label for="a1">A. <?php echo _("The way climate for some locations has changed over time."); ?></label>
								</li>
								<li><input type="radio" id="b1" name="question1" value="B">
									<label for="b1">B. <?php echo _("How climate will change in the near-future."); ?></label>
								</li>
								<li><input type="radio" id="c1" name="question1" value="C">
									<label for="c1">C. <?php echo _("Eating habits of extinct animals."); ?></label>
								</li>
								<li><input type="radio" id="d1" name="question1" value="D">
									<label for="d1">D. <?php echo _("Chemical characteristics of ancient oceans."); ?></label>
								</li>
							</ul>
						</form>
					</section>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. Consider the following observation: \"The types of fossils found in limestone thousands of miles from any ocean are very similar to the corals and shellfish living in oceans today.\" Click on <span class='blink'>all</span> the statements that help explain the observation."); ?></h2>
					<section>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ol id="choices2">
								<li><input id="a2" name="question2" type="checkbox"><label for="a2">A. <?php echo _("That a flood moved living things all around."); ?></span></label></li>
								<li><input id="b2" name="question2" type="checkbox"><label for="b2">B. <?php echo _("That fossils move around."); ?></span></label></li>
								<li><input id="c2" name="question2" type="checkbox"><label for="c2">C. <?php echo _("That the earth is changing."); ?></span></label></li>
								<li><input id="d2" name="question2" type="checkbox"><label for="d2">D. <?php echo _("That fossils help explain earth's history."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Fossils <span class='blink'>do not</span> offer clues about which of the following?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. Consider the following observation: \"The types of fossils found in limestone thousands of miles from any ocean are very similar to the corals and shellfish living in oceans today.\" Click on <span class='blink'>all</span> the statements that help explain the observation."); ?></h2>
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
	var answer2 = "";
	var nullAnswer = false,
		answericon1 = $('#answer-icon1'),
		answericon2 = $('#answer-icon2');
	
	$(document).ready(function() {

		$('.check-toggle').click(function(e){
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
					$('.check-toggle').fadeOut( function(){
						$('.next-toggle').fadeIn();
					});
					
				});//end of $('.check-toggle').click(function()
			}
		});

		$('.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('.back-toggle').fadeIn();
					$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
					answer2 = '';
					$('#selected_answer2').text('');
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}else{
				$('.back-toggle').attr('href','4.php#screen3');
			}
		});//end of $('.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		studentAnswer2 = $("input[name='question2']:checked").val();
		var text1 = "";
		var text2 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('Nope. Fossils offer pretty good clues about past climate change.'); ?>";
				text1 = "A. <?php echo _('The way climate for some locations has changed over time.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _("Correct. Fossils can't tell us much about near-term climate change."); ?>";
				text1 = "B. <?php echo _('How climate will change in the near-future.'); ?>";
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('Sorry. Tooth structure tells a lot about eating habits.'); ?>";
				text1 = "C. <?php echo _('Eating habits of extinct animals.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('Nope. The chemical composition of fossils tells a lot about the chemistry of ancient oceans.'); ?>";
				text1 = "D. <?php echo _('Chemical characteristics of ancient oceans.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		if($('#a2').is(":checked")) {
			answer2 = "A";
			$('#selected_answer2').append('A. <?php echo _("That a flood moved living things all around."); ?> ');
		}
		if($('#b2').is(":checked")) { 
			answer2 += "B";
			$('#selected_answer2').append('B. <?php echo _("That fossils move around."); ?> ');
		}
		if($('#c2').is(":checked")) {
			answer2 += "C";
			$('#selected_answer2').append('C. <?php echo _("That the earth is changing."); ?> ');
		}
		if($('#d2').is(":checked")) {
			answer2 += "D";
			$('#selected_answer2').append("D. <?php echo _("That fossils help explain earth's history."); ?> ");
		}
		
		if(answer2=='CD'){
			textstr2 = '<?php echo _("Correct. The earth is changing and the changes that happened before are documented by fossils."); ?>';
			answericon2.attr("src", "images/others/correct.png");
			$('#feedback2').addClass('green');
			$('#feedback2').text(textstr2);
		} else {
			textstr2 = '<?php echo _("Fossils do not move around themselves. The earth we see today is not the same way it was millions and billions of years ago. It changed and is changing; fossils help us see this."); ?>';
			answericon2.attr("src", "images/others/wrong.png");
			$('#feedback2').addClass('red');
			$('#feedback2').text(textstr2);
		}
		 
	}//enc check answer()
	
	function checkNull() {
		if(!$('#choices1 input:radio').is(':checked')) {
			nullAnswer = true;
		}
		
		if(!$('#choices2 input:checkbox').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
