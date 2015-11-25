<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") {?> dir="es"  <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
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
.bg { background: url('images/11/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#answer { display: none; }
#buttons .next { display: none; }
h2 { color: #8e4535; }
h1 { color: #27a78f; }
#youasnwered {padding-bottom:10px}
#selected_answer1 {padding-bottom:10px}
#selected_answer2 {padding-bottom:10px}
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
	margin-left: 0;
}
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before {
	width: 40px;
	height: 40px;
	margin-top: -20px;
}
.ac-custom { margin-top:20px; padding: 0 !important; }
#radio { min-height: 150px; margin:10px 0 0 0; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; }
label {font-size:23px; margin:5px 0px !important; cursor:pointer;}
input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"] + label span{ background: url('images/11/sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 36px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 40px; display:inline-block; z-index:0; font-size:20px; overflow: hidden; vertical-align:middle; margin-top:-8px;}
input[type="radio"]:checked + label span { background-position: -36px 0; }

div#answer p:last-child { width: 80%; margin: 0 auto; }

html[dir="es"] h2 { margin: 10px 0 0 0; }
html[dir="rtl"] h2 { margin: 10px 0 0 0; }
html[dir="rtl"] .ac-custom  { margin: 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom label { padding:0 45px 0 0; font-size: 20px; }
html[dir="rtl"] .ac-custom svg { right:0;top:54%; }
html[dir="rtl"] #radio { min-height: 185px; }
html[dir="rtl"] #radio li { float: right; }
html[dir="rtl"] #radio li label { font-size: 20px; text-align: right; float: right; }
html[dir="rtl"] #q2 li { float: right; margin-right: 70px; width: 700px; }
html[dir="rtl"] #q2 ul { text-align: right; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
html[dir="rtl"] .ac-custom li { margin-right: 0; }
}

	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">			
			<div id="question">				
				<h1><?php echo _("Quick Check #4"); ?></h1>
				<h2><?php echo _("Question A. Bobby's dad has been told by his doctor to lose 10 pounds in the next year. How should Bobby's dad change his daily routine?"); ?></h2>
					<div id="radio">
						<ul>
							<li>
								<input type="radio" id="r1" name="question1" value="A">
								<label for="r1" id="q1a"><span></span>A. <?php echo _("Cut calorie intake and increase exercise so that he uses more calories than he takes in."); ?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="question1" value="B">
								<label for="r2" id="q1b"><span></span>B. <?php echo _("Increase calorie intake while cutting out beans and meats."); ?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="question1" value="C">
								<label for="r3" id="q1c"><span></span>C. <?php echo _("Decrease exercise while increasing the amounts of starches he eats."); ?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="question1" value="D">
								<label for="r4" id="q1d"><span></span>D. <?php echo _("Cut calorie intake and decrease exercise to increase the amount of energy stored as fat."); ?></label>
							</li>							
						</ul>
					</div>
			
			
				<h2><?php echo _("Question B. What might happen if we did not eat enough meat, poultry, fish, or beans?"); ?></h2>
				<div id="q2">
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="a1" name="question2" type="radio" value="A"><label for="a1" class="css-label" id="q2a">A. <?php echo _("We would gain weight."); ?></label></li>
							<li><input id="a2" name="question2" type="radio" value="B"><label for="a2" class="css-label" id="q2b">B. <?php echo _("We would be thirsty."); ?></label></li>
							<li><input id="a3" name="question2" type="radio" value="C"><label for="a3" class="css-label" id="q2c">C. <?php echo _("We would not be able to build muscles."); ?></label></li>
							<li><input id="a4" name="question2" type="radio" value="D"><label for="a4" class="css-label" id="q2d">D. <?php echo _("We would not have any energy at all."); ?></label></li>
						</ul>
					</form>
				</div>
			</div>
		
			<div id="answer">			
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<h2><?php echo _("Question A. Bobby's dad has been told by his doctor to lose 10 pounds in the next year. How should Bobby's dad change his daily routine?"); ?></h2>
				<p id="youasnwered"><?php echo _("You answered..."); ?></p>				
			
				<p id="selected_answer1"></p>
				<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
				
				<h2><?php echo _("Question B. What might happen if we did not eat enough meat, poultry, fish, or beans?"); ?> </h2>
				<p id="youasnwered"><?php echo _("You answered..."); ?></p>
				
				<p id="selected_answer2"></p>
				<p><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'></span></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Burning calories..."); ?></strong></section></section>
	<script>
	var feedback ='';
	var feedback2 ='';
	var studentAnswer1='';
	var studentAnswer2='';
	var selected_answer1='';
	var selected_answer2='';
	var nullAnswer= false;
	var answered = 0;
	$(document).ready(function() {
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "10.php#screen3"; // change to the previous page's last screen e.g. 8.php#screen4
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
			alert('<?php echo _("Please select your answers."); ?> ');
			nullAnswer = false;
		
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
	
		switch(studentAnswer1){
			
			case 'A':
				feedback="<?php echo _("That's the one that works!"); ?>";
				selected_answer1=$('#q1a').text();
				$('#feedback').addClass('green');
				$('#answer-icon').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback="<?php echo _('Nope! Increasing calorie intake without exercise will actually make him gain weight.'); ?>";
				selected_answer1=$('#q1b').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");			
			break;
			
			case 'C':
			feedback="<?php echo _('Decrease exercise and increase starch? His weight is going up!'); ?>";
			selected_answer1=$('#q1c').text();
			$('#feedback').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'D':
			feedback="<?php echo _("Not quite! Increasing the amount of energy stored increases his weight. That won't work."); ?>";
			selected_answer1=$('#q1d').text();
			$('#feedback').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			default:break;
		}
		$('#feedback').text(feedback);
		$('#selected_answer1').text(selected_answer1);
		
		switch(studentAnswer2){
			
			case 'A':
				feedback2="<?php echo _('Nope! You probably would not gain weight by not eating some foods.'); ?>";
				selected_answer2=$('#q2a').text();
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback2="<?php echo _('Not quite! Meat, poultry, fish, and beans are all food high in protein.'); ?>";
				selected_answer2=$('#q2b').text();
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");			
			break;
			
			case 'C':
			feedback2="<?php echo _('Correct! meat, poultry, fish, and beans are all food high in protein which is needed to build muscle mass.'); ?>";
			selected_answer2=$('#q2c').text();
			$('#feedback2').addClass('green');
			$('#answer-icon2').attr("src", "images/others/correct.png");			
			break;
			
			case 'D':
			feedback2="<?php echo _('Think again! You would still have energy from other sources, such as carbohydrates.'); ?>";
			selected_answer2=$('#q2d').text();
			$('#feedback2').addClass('red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");			
			break;
			default:break;
		}
		$('#feedback2').text(feedback2);
		$('#selected_answer2').text(selected_answer2);
		save();
	}
	
	function save(){
		//saveAnswer('staying-healthy-qc4a', studentAnswer1);
		//saveAnswer('staying-healthy-q4b', studentAnswer2);
		//answered = 1;		
	}
	
	function checkNull(){
		if(studentAnswer2 ==null || studentAnswer1 ==null){
			nullAnswer = true;
		}

	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
<?php include("setlocale.php"); ?>
</body>
</html>
