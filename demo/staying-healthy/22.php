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
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/flexslider.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/svgmodernizr.custom.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/cycle.js"></script>
<style>
.bg { background: url('images/22/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#answer { display: none; }
#buttons .next { display: none; }
.ac-custom label { font-size: 24px; font-weight: normal; color: black; padding: 0 0 0 50px; }
.ac-custom li { padding: 15px 0px; }
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
	margin-left: 0;
}
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before {
	width: 40px;
	height: 40px;
	margin-top: -20px;
}
.ac-custom { margin:20px 0 0 20px; padding: 0 !important; }

.slideshow img { margin: 25px 10px; width:360px; height:220px;}
.slideshow { 
	height: 260px;
    margin: 0 auto; 
    position: relative; 
	background-image: url('images/6/container.png'); 
	width:45%;
	background-repeat: no-repeat; 
	background-size: 100% 100%;margin:0 auto; 
	}

#answer p { margin: 10px 0; }

html[dir="rtl"] li label { font-size: 22px; }
html[dir="rtl"] ul { text-align: right; }
html[dir="rtl"] h2 { margin-bottom: 0; font-size: 22px; }
html[dir="rtl"] .ac-custom { margin-top: 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom label { padding: 0 50px 0 0; }
html[dir="rtl"] .ac-custom svg { right:0 !important; }
html[dir="rtl"] .ac-custom ul, .ac-custom ol { text-align: right; }


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
.slideshow {width: 53%;}
}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("How should a person plan diet and exercise if they want to lose weight?"); ?></h2>
				<form class="ac-custom ac-radio ac-fill" autocomplete="off">
					
					<ul>
						<li><input id="r1" name="question1" type="radio" value="A"><label for="r1" class="css-label" id="q1a">A. <?php echo _("Exercise should use fewer calories than diet takes in."); ?></label></li>
						<li><input id="r2" name="question1" type="radio" value="B"><label for="r2" class="css-label" id="q1b">B. <?php echo _("Diet and exercise are not related to one another."); ?></label></li>
						<li><input id="r3" name="question1" type="radio" value="C"><label for="r3" class="css-label" id="q1c">C. <?php echo _("At least one major food group should be eliminated from the diet."); ?></label></li>
						<li><input id="r4" name="question1" type="radio" value="D"><label for="r4" class="css-label" id="q1d">D. <?php echo _("Exercise should use more calories than diet takes in."); ?></label></li>
					</ul>
				</form>
				
				<div class="slideshow">				  
					<img src="images/22/s1a.jpg">			
					<img src="images/22/s1b.jpg">				  			  
					<img src="images/22/s1c.jpg">			   			   
					<img src="images/22/s1d.jpg">			  
				</div>
				
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>		
				
				<div class="slideshow">				  
					<img src="images/22/s1a.jpg">			
					<img src="images/22/s1b.jpg">				  			  
					<img src="images/22/s1c.jpg">			   			   
					<img src="images/22/s1d.jpg">			  
				</div>
				
				<p id="selected_answer"></p>
				<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="23.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Go, Grow, Glow"); ?></strong></section></section>
	<script src="scripts/jquery.flexslider-min.js"></script>
	<script>
	
	var feedback ='';
	var studentAnswer='';
	var selected_answer='';
	var nullAnswer= false;
	var answered = 0;
	$(document).ready(function() {
		
		$('.slideshow').cycle({
		    fx:    'curtainX', 
		    sync:  false, 
		    delay: -1500 
		 });
		 
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "21.php";
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
	studentAnswer = $("input[name='question1']:checked").val();
	
		switch(studentAnswer){
			
			case 'A':
				feedback="<?php echo _('Nope! This plan will add weight.'); ?>";
				selected_answer=$('#q1a').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback="<?php echo _('Try again! Diet and exercise certainly ARE related to one another.'); ?>";
				selected_answer=$('#q1b').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'C':
			feedback="<?php echo _("Not a good idea. Eliminating food groups isn't generally healthy approach."); ?>";
			selected_answer=$('#q1c').text();
			$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'D':
			feedback="<?php echo _('Super! This plan will lead to weight loss.'); ?>";
			selected_answer=$('#q1d').text();
			$('#feedback').addClass('green');
			$('#answer-icon').attr("src", "images/others/correct.png");
			break;
			default:break;
		}
		$('#feedback').text(feedback);
		$('#selected_answer').text(selected_answer);
		save();
	}
	
	function save(){
		//saveAnswer('staying-healthy-qq5', studentAnswer);
		//answered = 1;		
	}
	
	function checkNull(){
		if(studentAnswer ==null){
			nullAnswer = true;
		}		
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
