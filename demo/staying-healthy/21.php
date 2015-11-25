<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background: url('images/21/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#answer { display: none; }
#buttons .next { display: none; }
#radio { min-height: 150px; margin:10px 0 0 20px; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; }
label {font-size:23px; margin:5px 0px !important;}
input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"] + label span{ background: url('images/20/sprite.png')left top no-repeat; position: relative; margin-right:10px; padding:0 0 0 36px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 40px; display:inline-block; z-index:0; font-size:20px; overflow: hidden; vertical-align:middle; margin-top:3px;}
input[type="radio"]:checked + label span { background-position: -37px 0; }
#question img { float: right; margin-right: 20px; width: 250px; border-radius: 10px; border: solid #D69999; }
#circulatory { width: 250px; border-radius: 10px; border: solid #D69999; }
#answer p { margin: 10px 0; }

html[dir="rtl"] #radio ul { text-align: right; }

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("What is the main function of the circulatory system?"); ?></h2>
				
				<img src="images/21/circulatory.jpg" />
					
				<div id="radio">
						<ul>
							<li>
								<input type="radio" id="r1" name="question1" value="A">
								<label for="r1" id="q1a"><span></span>A. <?php echo _("To help us breathe"); ?>.</label>
							</li>
							<li>
								<input type="radio" id="r2" name="question1" value="B">
								<label for="r2" id="q1b"><span></span>B. <?php echo _("To provide support for the body"); ?>.</label>
							</li>
							<li>
								<input type="radio" id="r3" name="question1" value="C">
								<label for="r3" id="q1c"><span></span>C. <?php echo _("To control the digestive and reproductive systems"); ?>.</label>
							</li>
							<li>
								<input type="radio" id="r4" name="question1" value="D">
								<label for="r4" id="q1d"><span></span>D. <?php echo _("To control the blood flow around the body"); ?>.</label>
							</li>							
						</ul>
					</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				
				<img id="circulatory" src="images/21/circulatory.jpg" />
				
				<p id="selected_answer1"></p>
				<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Picture of a healthy heart"); ?></strong></section></section>
	<script>
	var feedback ='';
	var studentAnswer1='';
	var selected_answer='';
	var nullAnswer= false;
	var answered = 0;
	$(document).ready(function() {
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "20.php";
			} else if ($('#answer').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('#feedback').removeClass('green');
					$('#feedback').removeClass('red');
				});
			}
		});
		
		$('.check-toggle').click(function(e){ 
		checkAnswer();
		checkNull();		
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _('Please select your answers.'); ?>");
			nullAnswer = false;
		
		} else {
		  $('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					window.location.hash = "#answer";
					$('#answer').fadeIn();
				});
			}
		});
	});
	function checkAnswer(){
	studentAnswer1 = $("input[name='question1']:checked").val();
	
		switch(studentAnswer1){
			
			case 'A':
				feedback="<?php echo _('Nope! The circulatory system circulates blood to all the far out places of the body.'); ?>";
				selected_answer1=$('#q1a').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback="<?php echo _('Not quite! The circulatory system circulates blood to all the far out places of the body.'); ?>";
				selected_answer1=$('#q1b').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");			
			break;
			
			case 'C':
			feedback="<?php echo _('Try again! The circulatory system circulates blood to all the far out places of the body.'); ?>";
			selected_answer1=$('#q1c').text();
			$('#feedback').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");			
			break;
			
			case 'D':
			feedback="<?php echo _('You got it! The circulatory system circulates blood to all the far out places of the body.'); ?>";
			selected_answer1=$('#q1d').text();
			$('#feedback').addClass('green');
			$('#answer-icon').attr("src", "images/others/correct.png");			
			break;
			default:break;
		}
		$('#feedback').text(feedback);
		$('#selected_answer1').text(selected_answer1);	
		save();
	}
	
	function save(){
		//saveAnswer('staying-healthy-qq4', studentAnswer1);
		//answered = 1;		
	}
	
	function checkNull(){
		if(studentAnswer1 ==null){
			nullAnswer = true;
		}
		
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
