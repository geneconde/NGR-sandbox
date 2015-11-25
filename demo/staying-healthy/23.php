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
.bg { background: url('images/22/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#answer { display: none; }
#buttons .next { display: none; }

#q1 {margin-top:-10px;}
#q1 ul { width: 100%; margin: 0 auto; padding: 0; list-style-type: none; }
#q1 li { float: left; width: 50%; }
#q1 input[type=radio] { display: none; }
#choices1 label { display: block; text-align: center; cursor: pointer; }
#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #ee6143; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label span { color: #ee6143; -webkit-transition: all .3s ease; }
#q1 img { width: 65%; height:200px; 
label img {margin: 0 auto; display: block;}}
#q1 label { font-size: 24px; }
figure {margin-bottom:0;margin-top:0;}
#answer h2 {text-align:left; margin-bottom:0;}
#answer figure img{width: 40%; height: 230px;}
body #answer p { margin: 10px 0; }

#question ul > li:nth-last-of-type(-n+2) {
    margin-top: 35px;
}

#answer p { margin: 10px 0; }

html[dir="rtl"] label span { font-size: 22px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("How are exercise and heart rate related?"); ?></h2>
				<div id="q1">
					<ul id="choices1">
						<li>
							<input type="radio" id="a1" name="q1" value="A">
							<label for="a1"><img src="images/23/1.jpg"></br><span id="ans1"><?php echo _("Heavy exercise increases heart rate"); ?>.</span></label>
						</li>
						<li>
							<input type="radio" id="a2" name="q1" value="B">
							<label for="a2"><img src="images/23/2.jpg"></br><span id="ans2"><?php echo _("Heavy exercise decreases heart rate"); ?>.</span></label>
						</li>
					
						<li>
							<input type="radio" id="a3" name="q1" value="C">
							<label for="a3"><img src="images/23/3.jpg"></br><span id="ans3"><?php echo _("Sitting still increases heart rate"); ?>.</span></label>
						</li>
						<li>
							<input type="radio" id="a4" name="q1" value="D">
							<label for="a4"><img src="images/23/4.jpg"></br><span id="ans4"><?php echo _("Light exercise decreases heart rate"); ?>.</span></label>
						</li>
					</ul>
				</div>				
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>	
				<img id="ansImg" src="images/23/1.jpg">
				<p id="selected_answer"></p>
				<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="24.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Take the last quiz question!"); ?></strong></section></section>
	<script>
	var feedback ='';
	var studentAnswer='';
	var selected_answer='';
	var nullAnswer= false;
	var answered = 0;
	$(document).ready(function() {
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "22.php";
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
	studentAnswer = $("input[name='q1']:checked").val();
	
		switch(studentAnswer){
			
			case 'A':
				feedback="<?php echo _('You got it! Heavy exercise does increase heart rate.'); ?>";
				selected_answer=$('#ans1').text();
				$('#feedback').addClass('green');
				$('#answer-icon').attr("src", "images/others/correct.png");
				$('#ansImg').attr("src", "images/23/1.jpg");
			break;
			
			case 'B':
				feedback="<?php echo _('The exact opposite! Go over the choices again.'); ?>";
				selected_answer=$('#ans2').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
				$('#ansImg').attr("src", "images/23/2.jpg");
			break;
			
			case 'C':
			feedback="<?php echo _('Nope! Sitting still does little to heart rate.'); ?>";
			selected_answer=$('#ans3').text();
			$('#feedback').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
				$('#ansImg').attr("src", "images/23/3.jpg");
			break;
			
			case 'D':
			feedback="<?php echo _('Tricky... Actually any exercise elevates heart rate, at least a little bit.'); ?>";
			selected_answer=$('#ans4').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
				$('#ansImg').attr("src", "images/23/4.jpg");
			break;
			default:break;
		}
		$('#feedback').text(feedback);
		$('#selected_answer').text(selected_answer);
		save();
	}
	
	function save(){
		//saveAnswer('staying-healthy-qq6', studentAnswer);
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
