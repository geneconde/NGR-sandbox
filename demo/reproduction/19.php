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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
#question > div > h2 { width: 750px; }
.bg { background-image: url('images/19/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }

.ac-custom { margin: 0; padding: 10px 0px 0px 30px; }
.ac-custom label { font-size: 24px; font-weight: normal; color: #000; padding: 0 0 0 50px; }
.ac-custom input[type="checkbox"], .ac-custom label::before { width: 40px; height: 40px; border: 4px solid #FFA300; }
.ac-custom svg { width: 30px; height: 30px; }
.ac-custom svg path { stroke: #FFA300; }
.ac-custom input[type="checkbox"]:checked + label { color: #0A5F5F; }
.ac-custom li { padding: 10px 0px; margin: 0; }
.ac-custom label::before { border-color: #0A5F5F; }
.ac-custom svg path { stroke: #0A5F5F; }
#question1 { margin-top: 2%; }
#question1, #question2 { height: 250px; }
#question1 img, #question2 img { float: left; width: 30%;}
#question1 form, #question2 form { float: right; width: 70%; }
#buttons .next { display: none; }
.ansImg { width: 20%; float: left; margin-top: 2%; }
#answer form { float: right; width: 80%; }
#answer section { height: 220px; }
#answer1, #answer2 { height: 170px; }
#answer2 { margin-top: 2%; }
#answer { display: none; }
#a2, #a1 { float: left; width: 100%; }

#imganswer1 { margin: 0 auto; display: block; }
img.back-toggle-answer, img.next-toggle { display: none; }

html[dir="rtl"] #question1 img, html[dir="rtl"] #question2 img { float: right; padding-left: 15px; }
html[dir="rtl"] .ac-custom label { padding: 0 50px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom svg { right: 5px; }
html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] h2 { padding-right: 12%; width: 100%; }
html[dir="rtl"] img.ansImg { width: 18%; float: right; margin-top: 3%; margin-left: 15px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<div>
					<h2><?php echo _("Click <span class='blink'>all</span> the changes on the right column you think the events on the left column are causing."); ?></h2>
					<div id="question1">
						<img src="images/19/1.jpg" />
						<form id="q_answer1"class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ul id="choices1">
								<li>
									<input id="a1" name="r1" type="checkbox">
									<label for="a1" class="css-label"><?php echo _("Rapid accumulation of identical organisms"); ?></label>
								</li>
								<li>
									<input id="a2" name="r1" type="checkbox">
									<label for="a2" class="css-label"><?php echo _("Great variety in human appearance"); ?></label>
								</li>
								<li>
									<input id="a3" name="r1" type="checkbox">
									<label for="a3" class="css-label"><?php echo _("New varieties of apple"); ?></label>
								</li>
							</ul>
						</form>
					</div>
					<div id="question2">
						<img src="images/19/2.jpg" />
						<form id="q_answer2"class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ul id="choices2">
								<li>
									<input id="b1" name="r2" type="checkbox">
									<label for="b1" class="css-label"><?php echo _("Some traits are passed onto offspring more often than others."); ?></label>
								</li>
								<li>
									<input id="b2" name="r2" type="checkbox">
									<label for="b2" class="css-label"><?php echo _("Some traits may be lost to populations of organisms."); ?></label>
								</li>
								<li>
									<input id="b3" name="r2" type="checkbox">
									<label for="b3" class="css-label"><?php echo _("All individuals have equal chances of reproducing."); ?></label>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<section>
					<img src="images/19/1.jpg" class="ansImg" />
					<div id="answer1"></div>
					<div id="a1">
						<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
					</div>
				</section>
				<section>
					<img src="images/19/2.jpg" class="ansImg" />
					<div id="answer2"></div>
					<div id="a2">
						<p class="feedback"><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'> </span></p>
					</div>
				</section>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Stallions competing for dominance"); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answer1, asnwer2,
		textanswer1 = $('#textanswer1'),
		feedback1 = $('#feedback1'),
		answericon1 = $('#answer-icon1'),
		textanswer2 = $('#textanswer2'),
		feedback2 = $('#feedback2'),
		answericon2 = $('#answer-icon2');;
	
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
					$('#question1').append($('#q_answer1')).find('input[type="checkbox"]').prop("disabled", false);
					$('#question2').append($('#q_answer2')).find('input[type="checkbox"]').prop("disabled", false);
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
				$('a.back-toggle').attr('href','18.php');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		$('#answer1').prepend($('#q_answer1')).find('input[type="checkbox"]').prop("disabled", true);
		$('#answer2').prepend($('#q_answer2')).find('input[type="checkbox"]').prop("disabled", true);
		//$('#a2').append($('#q_answer1')).find('input[type="checkbox"]').prop("disabled", true);
		/* For checking question1*/
		var answer1 = "";
		var answer2 = "";
		
		if($('#a1').is(":checked")) {answer1 = "A";}
		if($('#a2').is(":checked")) {answer1 += "B";}
		if($('#a3').is(":checked")) {answer1 += "C";}
		
		if($('#b1').is(":checked")) {answer2 = "A";}
		if($('#b2').is(":checked")) {answer2 += "B";}
		if($('#b3').is(":checked")) {answer2 += "C";}
		
		if(answer1=='A') {
			textstr1 = "<?php echo _('Correct. The bacteria dividing leads to producing identical organisms.'); ?>";
			answericon1.attr("src", "images/others/correct.png");
			feedback1.addClass('green');
		} else if(answer1=='AB'){
			textstr1 = "<?php echo _("You're right about identical organisms, but can they be identical and have variety at the same time? Check again."); ?>";
			answericon1.attr("src", "images/others/wrong.png");
			feedback1.addClass('red');
		} 
		else { //if answer = B, C, AC, BC, ABC
			textstr1 = "<?php echo _('No. Asexual reproduction does not cause any type of variety.'); ?>";
			answericon1.attr("src", "images/others/wrong.png");
			feedback1.addClass('red');
		}
		feedback1.text(textstr1);
		
		if(answer2=='AB') {
			textstr2 = "<?php echo _("Correct. Not all traits are passed down to one's offspring."); ?>";
			answericon2.attr("src", "images/others/correct.png");
			feedback2.addClass('green');
		} else if(answer2=='A' || answer2=='B'){
			textstr2 = "<?php echo _("Partly correct... Not all traits are passed down to one's offspring."); ?>";
			answericon2.attr("src", "images/others/wrong.png");
			feedback2.addClass('red');
		}else { //if answer = C, BC, AC
			textstr2 = "<?php echo _('No, for example in some animal groups only the dominant males mate.'); ?>";
			answericon2.attr("src", "images/others/wrong.png");
			feedback2.addClass('red');
			
		}
		feedback2.text(textstr2);
		
	}
	
	function checkNull() {
		nullAnswer = false;
		if(!$('#choices1 input:checkbox').is(':checked') || !$('#choices2 input:checkbox').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
