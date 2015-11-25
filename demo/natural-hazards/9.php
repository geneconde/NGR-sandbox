<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/5/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; overflow: hidden; }
h1 { color: darkslateblue; }
label { margin:0; font-size: 24px; padding: 10px; color: #000; font-family: 'PlaytimeRegular'; }
#buttons .next { display: none; }

.q-container { padding: 0; margin: 0; }
#question div.q-container:nth-child(1) { height: 310px; }
#question div.q-container:nth-child(2) { height: 280px; }
#choices { height: 140px; margin: 0 auto; width: 95%; }
#checkboxes { margin-left: 80px; }
input[type="checkbox"] { opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="checkbox"] + label span { background: url('images/9/checkbox.png') left top no-repeat; position: relative; margin: 0 10px 0 20px; padding:0 0 0 30px; cursor: pointer; line-height: 37px; min-height: 50px; display: inline-block; z-index:0; font-size: 24px; float: left; background-position: -31px 0; }
input[type="checkbox"]:checked + label span { background-position: 0 0; }
label { line-height: 22px; cursor: pointer; padding: 0; }
.text-label { padding-top: 26px; }

.pic { height: 100%; float: left; width: 25%; text-align: center; }
.pic img { height: 138px; width: 184px; cursor: pointer; }
.pic p { font-size: 18px; text-align: center; padding: 5px; }

#answer { display: none; }
#answer p { text-align: center !important; }
.answer-item { padding: 0; margin: 0; }
.img-div { height: 140px; width: 186px; margin: 0 auto; padding: 5px 0px; }
.img-div img { height: 100%; width: 100%; }
#answer-icon1, #answer-icon2 { display:inline-block; height: 30px; margin-right: 10px; }

.lightred { color: #B9482B; }
.lightblue { color: #4B5BD1; }
.darkyellow { color: #A29B00; }
.lightgreen { color: #55AC5F; }
.clear { margin: 0; padding: 0; }

img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}
#question { position: relative; z-index: 5; }
html[dir="rtl"] input[type="checkbox"] + label span { float: right; }
html[dir="rtl_es"] h2 { font-size: 22px; padding: 3px 0;}
html[dir="rtl_es"] h1 { padding-bottom: 0; }
html[dir="rtl_es"] #choices { height: 218px; }
html[dir="rtl_es"] #answer h2 { padding: 0; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	.text-label { padding-top: 15px; }
	input[type="checkbox"] + label span { margin: -10px 10px 0 20px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
	#choices { width: 100%; }
	.pic { height: auto; }
	.pic img { height: 120px; width: 170px; }
	.img-div { height: 120px; width: 160px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #3"); ?> </h1>
				<div class="q-container">
					<h2><?php echo _("Question A. Which of the following would be a good strategy to protect your family if an <span class='red bold blink'>immediate</span> wildfire threat was coming near your home within several hours?"); ?></h2>
					<div id="choices">
						<div class="pic">
							<img src="images/9/shelter.jpg" id="a1" data-name="A" class="border">
							<p><span class="lightred"><?php echo _("Take shelter in your basement"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/9/hose.jpg" id="b1" data-name="B" class="border">
							<p><span class="lightblue"><?php echo _("Stand on the roof of your house with a garden hose and spray the fire"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/9/evac.jpg" id="c1" data-name="C" class="border">
							<p><span class="darkyellow"><?php echo _("Evacuate as soon as possible"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/9/chop.jpg" id="d1" data-name="D" class="border">
							<p><span class="lightgreen"><?php echo _("Start chopping down the trees near your house"); ?></span></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="q-container">
					<h2><?php echo _("Question B. Click on <span class='red bold blink'>ALL</span> the things you could do to protect your home from an <span class='red bold blink'>eventual</span> wildfire threat if you lived in an area where wildfires were fairly common."); ?></h2>
					<div id="checkboxes">
						<input type="checkbox" name="choices" id="a2" value="A">
						<label for="a2"><span></span>
							<div class="text-label">A. <?php echo _("Clear-cut the trees and brush near your house."); ?></div>
						</label><div class="clear"></div>
						<input type="checkbox" name="choices" id="b2" value="B">
						<label for="b2"><span></span>
							<div class="text-label">B. <?php echo _("Put a steel roof on your house."); ?></div>
						</label><div class="clear"></div>
						<input type="checkbox" name="choices" id="c2" value="C">
						<label for="c2"><span></span>
							<div class="text-label">C. <?php echo _("Get a new fire extinguisher."); ?></div>
						</label><div class="clear"></div>
						<input type="checkbox" name="choices" id="d2" value="D">
						<label for="d2"><span></span>
							<div class="text-label">D. <?php echo _("Build the walls of your house out of brick or stone."); ?></div>
						</label><div class="clear"></div>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. Which of the following would be a good strategy to protect your family if an <span class='red bold blink'>immediate</span> wildfire threat was coming near your home within several hours?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="img-div"><img id="imganswer1" src="images/9/evac.jpg"></div>
					<p><span id="textanswer1"></span></p>
					<p><img src="" id="answer-icon1"><span id="answer1"></span></p>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. Click on <span class='red bold blink'>ALL</span> the things you could do to protect your home from an <span class='red bold blink'>eventual</span> wildfire threat if you lived in an area where wildfires were fairly common."); ?></h2>
					<p><img src="" id="answer-icon2"><span id="answer2"></span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Stocking food in basement..."); ?></strong></section></section>
	<script>
	var answered = 1;
	var answer1, answer2;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {	
		$(".pic img").each(function() {
			$(this).click(function() {
				clearEverything();
				//if(answer1 != $(this).data('name')) {
					$(this).addClass('border-off');
					answer1 = $(this).data('name');
				//}
			});
		});
	
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = "8.php#screen3"
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');			
					$('#answer2').removeClass('red');
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
				});	
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answers."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut(function(){  $('a.next-toggle').fadeIn(); });
					
					if (answer1 == "C") {
						textstr = "<?php echo _("Correct. With enough notice, you can get far away from your home and the wildfire."); ?>";
						$('#textanswer1').text('<?php echo _("Evacuate as soon as possible"); ?>');
						$('#imganswer1').attr("src","images/9/evac.jpg");
						$('#answer-icon1').attr("src", "images/9/correct.png");
						$('#answer1').addClass('green');
					} else {
						if (answer1 == "A") {
							textstr = "<?php echo _("No."); ?>";
							$('#textanswer1').text("<?php echo _("Take shelter in your basement"); ?>");
							$('#imganswer1').attr("src","images/9/shelter.jpg");
						} else if (answer1 == "B") {
							textstr = "<?php echo _("Not quite."); ?>";
							$('#textanswer1').text("<?php echo _("Stand on the roof of your house with a garden hose and spray the fire"); ?>");
							$('#imganswer1').attr("src","images/9/hose.jpg");
						} else if (answer1 == "D") {
							textstr = "<?php echo _("Not really, this is a good long term solution, but not when there is an immediate threat."); ?>";
							$('#textanswer1').text("<?php echo _("Start chopping down the trees near your house"); ?>");
							$('#imganswer1').attr("src","images/9/chop.jpg");
						}
						$('#answer-icon1').attr("src", "images/9/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					
					answer2 = "";
					if($('#a2').is(":checked")) { answer2  = "A"; }
					if($('#b2').is(":checked")) { answer2 += "B"; }
					if($('#c2').is(":checked")) { answer2 += "C"; }
					if($('#d2').is(":checked")) { answer2 += "D"; }
					
					if($('#b2').is(':checked') && $('#c2').is(':checked') && $('#a2').is(':checked') && $('#d2').is(':checked')) {
						textstr = "<?php echo _("Correct. If moving out the area that usually has wildfires is not an option, all of these statements are good choices to protect your home from a potential wildfire. If there is an immediate wildfire threat coming near your home, evacuation would be the best choice."); ?>";
						$('#answer-icon2').attr("src", "images/9/correct.png");
						$('#answer2').addClass('green');
					} else {
						textstr = "<?php echo _("Not quite. If moving out the area that usually has wildfires is not an option, all of these statements are good choices to protect your home from a potential wildfire. You can probably think of more things to do to protect yourself and your home from a potential wildfire as well."); ?>";
						$('#answer-icon2').attr("src", "images/9/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}
					$('#answer2').text(textstr);
					
					if(answered == 0) {
						saveAnswer('natural-hazards-qc3-a',answer1);
						saveAnswer('natural-hazards-qc3-b',answer2);
						answered = 1;
					}
				}); // end question fade
			} // end else
		}); // end check answer
	}); // end doc ready

	function clearEverything() {
		$('#choices .pic img').each(function() {
			$(this).removeClass('border-off');
		});
	}

	function checkNull() {
		if(answer1 == null) nullAnswer = true;
		if(!$('#a2').is(":checked") && !$('#b2').is(":checked") && !$('#c2').is(":checked") && !$('#d2').is(":checked")) nullAnswer = true;
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
