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
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/svgmodernizr.custom.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
h1 { color: #27a78f; }
h2 { color: #8e4535; }
#buttons .next { display: none; }

#q1 {margin-top:-10px;}
#q1 ul { width: 100%; margin: 0 auto; padding: 0; list-style-type: none; }
#q1 li { float: left; width: 276px; margin: 0 70px; }
#q1 input[type=radio] { display: none; }
#choices1 label { display: block; text-align: center; cursor: pointer; }
#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #ee6143; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label span { color: #ee6143; -webkit-transition: all .3s ease; }
#q1 img { width: 230px; height:220px; }
label img {margin: 0 auto; display: block;}
#q1 label { font-size: 24px; }
figure {margin-bottom:0;margin-top:0;}
#answer h2 {text-align:left; margin-bottom:0;}
#answer figure img{ width: 230px; height:220px; }
body #answer p { margin: 10px 0; }

#question ul > li:nth-last-of-type(-n+2) {
    margin-top: 35px;
}
body #answer p { margin: 10px 0; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
#q1 li { margin: 0 42px; }	
}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<h2><?php echo _("The spinal cord is part of which of the following body systems?"); ?></h2>
				<div id="q1">		
					<ul id="choices1">
							<li>
								<input type="radio" id="a1" name="question1" value="A">
								<label for="a1"><img src="images/18/digestive_system.jpg"><span id="digestive_system"><?php echo _("Digestive System"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="b1" name="question1" value="B">
								<label for="b1"><img src="images/18/nervous.jpg"><span id="nervous_system"><?php echo _("Nervous System"); ?></span></label>
							</li>
							 <li>
								<input type="radio" id="c1" name="question1" value="C">
								<label for="c1"><img src="images/18/muscular.jpg"><span id="muscular_system"><?php echo _("Muscular System"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="d1" name="question1" value="D">
								<label for="d1"><img src="images/18/integumentary_system.jpg"><span id="integumentary_system"><?php echo _("Integumentary System"); ?></span></label>
							</li> 
					</ul>
						<div class="clear"></div>
				</div>		
			</div>
				
			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>				
				<figure>
					<img src="" id="selected_img" />
				</figure>
					<p id="selected_answer"></p>
					<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>					
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is"); ?></strong></section></section>
<script>
	var feedback = "";	
	var feedback2 = "";	
	var studentAnswer1 = "";
	var studentAnswer2 = "";
	var nullAnswer = false;
	var answered = 0;
	$(document).ready(function() {
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "17.php"; // change to the previous page's last screen e.g. 4.php#screen3
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
			studentAnswer = '';
		} else {		
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#question').fadeOut(function(){ 
				$('#answer').fadeIn();
				window.location.hash = "#answer";
			}); 
		}
	});
});

function checkAnswer(){	
	studentAnswer1 = $("input[name='question1']:checked").val();
	var q2_ans = "";
	var radio_val = "";
	 switch (studentAnswer1){
			case 'A':
				feedback = "<?php echo _('Not quite! The spinal cord is about information; the digestive system is about food.'); ?>";
				radio_val = $('#digestive_system').text();
				$('#selected_img').attr("src","images/18/digestive_system.jpg");
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback = "<?php echo _('You got it! The spinal cord carries information to and from the brain.'); ?>";
				radio_val = $('#nervous_system').text();
				$('#feedback').addClass('green');
				$('#selected_img').attr("src","images/18/nervous.jpg");
				$('#answer-icon').attr("src", "images/others/correct.png");
			break;
			
			case 'C': 
				feedback = "<?php echo _('Try again! The spinal cord is about information; the muscular system is about movement.'); ?>";
				radio_val = $('#muscular_system').text();
				$('#feedback').addClass('red');
				$('#selected_img').attr("src","images/18/muscular.jpg");
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback = "<?php echo _('Nope! The spinal cord is about information; the integumentary system is about protection.'); ?>";
				radio_val = $('#integumentary_system').text();
				$('#feedback').addClass('red');
				$('#selected_img').attr("src","images/18/integumentary_system.jpg");
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 $('#selected_answer').text(radio_val);
		 $('#feedback').text(feedback);
		 
		 //save();
}
function checkNull() {
	if(studentAnswer1== null ) {
		nullAnswer = true;
	}
}
function save(){
	//saveAnswer('staying-healthy-qq1', studentAnswer1);
	//answered = 1;		
}
</script>
	<script src="scripts/svgcheckbx.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
