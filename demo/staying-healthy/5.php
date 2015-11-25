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
.no-mtop{margin-top:0px !important; padding-top:0px;}

.ac-custom label { font-size: 24px; font-weight: normal; color: black; padding: 0 0 0 50px; }
.ac-custom li { padding: 7px 0px; }
.ac-custom label::before {border:4px solid #27A78F;}
.ac-custom svg path {
			stroke: #ee6143;
			stroke-width: 13px;
			stroke-linecap: round;
			stroke-linejoin: round;
			fill: none;
		}
.ac-custom svg {
	left: 1px !important;
	width: 40px;
	height: 33px;
	margin-top: -17px;
}
.ac-custom input[type="radio"]:checked + label {
	color: #ee6143;
	stroke-width: 5px !important;
	
}
.ac-custom ul, .ac-custom ol {
	text-align: left;
}
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before {
	width: 40px;
	height: 40px;
	margin-top: -20px;
}
.ac-custom {margin-top:20px;}

#q1 ul { width: 850px; margin: 0 auto; padding: 0; list-style-type: none; }
#q1 li { float: left; width: 212px; }
#q1 input[type=radio] { display: none; }
#choices1 label { display: block; text-align: center; cursor: pointer; }
#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #ee6143; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label span { color: #ee6143; -webkit-transition: all .3s ease; }
#choices1 label span { font-size: 18px !important; }
#q1 img { width: 204px; height:200px;}
#q1 label { font-size: 24px; }
figure {margin-bottom:0;margin-top:0;}
#answer p { padding-bottom: 10px; }
#answer h2 {text-align:left; margin-bottom:0;}
#answer figure img{height:130px;}
#youanswered {padding-bottom:10px}
#selected_answer2 {padding-bottom:10px}
#answer p:last-child { width:68%; margin: 0 auto; }

html[dir="rtl"] .ac-custom li { margin-right: 70px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom label { padding: 0 50px 0 0; }
html[dir="rtl"] .ac-custom svg { right:0 !important; }
html[dir="rtl"] .ac-custom ul, .ac-custom ol { text-align: right; }


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
#q1 li {width: 180px;}
#q1 img {width: 175px;height: 175px;}
html[dir="rtl"] #q1 li { float: right; }
}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<h2><?php echo _("Question A. The nervous system does <span class='blink red'>NOT</span> depend upon which of the following?"); ?></h2>
				<div id="q1">		
					<ul id="choices1">
							<li>
								<input type="radio" id="a1" name="question1" value="A">
								<label for="a1"><img src="images/5/circulatory.jpg"><span id="circulatory"><?php echo _("Circulatory System"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="b1" name="question1" value="B">
								<label for="b1"><img src="images/5/skeletal.jpg"><span id="skeletal"><?php echo _("Skeletal System"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="c1" name="question1" value="C">
								<label for="c1"><img src="images/5/respiratory.jpg"><span id="respiratory"><?php echo _("Respiratory System"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="d1" name="question1" value="D">
								<label for="d1"><img src="images/5/all.jpg"><span id="all"><?php echo _("It DOES depend on all of the systems mentioned."); ?></span></label>
							</li>
					</ul>
						<div class="clear"></div>
				</div>		
				
				<h2><?php echo _("Question B. What would happen if your respiratory system stopped working?"); ?></h2>				
				<div id="q2">
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="r1" name="question2" type="radio" value="A"><label for="r1" class="css-label" id="q2a">A. <?php echo _("You would need an organ transplant."); ?></label></li>
							<li><input id="r2" name="question2" type="radio" value="B"><label for="r2" class="css-label" id="q2b">B. <?php echo _("Nothing, the body would recover somehow."); ?></label></li>
							<li><input id="r3" name="question2" type="radio" value="C"><label for="r3" class="css-label" id="q2c">C. <?php echo _("You would not be able to continue living and die."); ?></label></li>
						</ul>
					</form>
				</div>
			</div>
				
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<h2><?php echo _("Question A. The nervous system does <span class='blink red'>NOT</span> depend upon which of the following?"); ?></h2>
			
				<p><?php echo _("You answered..."); ?></p>	
				<figure>
					<img src="" id="selected_img" />
				</figure>
					<p id="selected_answer"></p>
					<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
			
				<h2><?php echo _("Question B. What would happen if your respiratory system stopped working?"); ?></h2>	
					
					<p id="youanswered"><?php echo _("You answered..."); ?></p>
					<p id="selected_answer2"></p>
					<p><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'></span></p>
			</div>
		</div>
	</div>
	

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your first quick check?"); ?></strong></section></section>
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
				document.location.href = "4.php"; // change to the previous page's last screen e.g. 4.php#screen3
			} else if ($('#answer').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('#feedback').removeClass('green');
					$('#feedback').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
					
				});
			}
		});
		
	$('.check-toggle').click(function(e){ 
		checkAnswer();
		checkNull();		
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answers."); ?>");
			nullAnswer = false;
			studentAnswer = '';
			studentAnswer2 = '';
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
	studentAnswer2 = $("input[name='question2']:checked").val();
	var q2_ans = "";
	var radio_val = "";
	 switch (studentAnswer1){
			case 'A':
				feedback = "<?php echo _('Not quite! The brain needs oxygen from blood.'); ?>";	
				radio_val = $('#circulatory').text();
				$('#selected_img').attr("src","images/5/circulatory.jpg");
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");								
			break;
			
			case 'B':
				feedback = "<?php echo _('Nope! The brain is protected by the skull.'); ?>";
				radio_val = $('#skeletal').text();
				$('#feedback').addClass('red');
				$('#selected_img').attr("src","images/5/skeletal.jpg");
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback = "<?php echo _('Think again! The brain needs the oxygen gathered by the lungs.'); ?>";
				radio_val = $('#respiratory').text();
				$('#feedback').addClass('red');
				$('#selected_img').attr("src","images/5/respiratory.jpg");
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback = "<?php echo _('You got it! That was a trick question... The nervous system needs all of these.'); ?>";
				radio_val = $('#all').text();
				$('#feedback').addClass('green');
				$('#selected_img').attr("src","images/5/all.jpg");
				$('#answer-icon').attr("src", "images/others/correct.png");
			break;				
			default:break;
		 }

		 $('#selected_answer').text(radio_val);
		 $('#feedback').text(feedback);
		 
		 switch(studentAnswer2){
			case 'A':
				feedback2 = "<?php echo _("Nope! The respiratory system is a whole set of organs working together. Transplanting one isn't likely to restore function."); ?>";
				q2_ans = $('#q2a').text();
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback2 = "<?php echo _('Not quite! Your body cannot recover; if you stop breathing, you stop living.'); ?>";
				q2_ans = $('#q2b').text();
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'C':
				feedback2 = "<?php echo _('Correct! Respiration is breathing; if you stop breathing, you stop living.'); ?>";
				q2_ans = $('#q2c').text();
				$('#feedback2').addClass('green');
				$('#answer-icon2').attr("src", "images/others/correct.png");
			break;
			default:break;
		 }
		 $('#selected_answer2').text(q2_ans);
		 $('#feedback2').text(feedback2);
		 
		 //save();
}
function checkNull() {
	if(studentAnswer1== null || studentAnswer2== null) {
		nullAnswer = true;
	}
}
function save(){
	//saveAnswer('staying-healthy-qc1a', studentAnswer1);
	//saveAnswer('staying-healthy-qcb', studentAnswer2);
	//answered = 1;		
}
</script>
	<script src="scripts/svgcheckbx.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
