<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/5/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
p { color: #fff; font-weight: normal; }
img.back-toggle-answer, #buttons .next { display: none; }
#choices1 { height: 220px; margin: 0 auto; width: 100%; margin-left: 15px; }
#choices2 { height: 140px; margin: 0 auto: width: 100%; }
.choice { min-width: 24%; float: left; text-align: center; }
.choice img { height: 150px; }
#identifier { position: relative; top: 155px; right: 10px; }
#identifier p { line-height: 24px; padding: 4px 0px; text-align: right !important;  }
.q-container { margin-bottom: 10px !important; height: 290px; margin: 0 auto: width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px;}
.styled-select select { background: transparent; width: 170px; padding-left: 30px; font-size: 16px; border: 0; height: 25px; -webkit-appearance: none; -moz-appearance: none; font-family: 'PlaytimeRegular'; }
.styled-select { font-family: 'PlaytimeRegular'; width: 170px; height: 25px; overflow: hidden; background: url('images/5/arrow.png') no-repeat left #ddd; border: 1px solid #ccc; margin: 0 auto; margin-top: 5px;  text-align: center;  }
.pic { height: 100%; float: left; width: 25%; text-align: center; }
.pic img { height: 100%; width: 175px; margin-right: 20px; cursor: pointer; margin: 0 auto; }
.pic p { font-size: 20x; text-align: center; }
#answer-icon1, #answer-icon2 { display:inline-block; height: 25px; margin-right: 5px; }
.answer-item { margin: 5px 0px !important; margin: 0 auto: width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#answer #choices1 { width: 90%; margin:0 auto; }
#answer .choice { min-width: 33%; }
#answer .styled-select { overflow: visible; }
#mark1 img, #mark2 img, #mark3 img, #mark4 img, #mark5 img, #mark6 img { display: inline-block; height: 30px; float: left; }

img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}
html[dir="rtl"] .choice { float:right; }
html[dir="rtl"] #identifier { right:65px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.choice:first-child { width: 200px; }
	#identifier p { font-size: 22px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div class="q-container">
					<h2 id="q1"><?php echo _("Question A. Match each scientific instrument to its name and the properties that we use to measure them by selecting an item in the drop down lists."); ?></h2>
					<div id="choices1">
						<div class="choice">
							<div id="identifier">
								<p><?php echo _("Scientific Instruments:"); ?></p>
								<p><?php echo _("Properties:"); ?></p>
							</div>
						</div>
						<div class="choice">
							<img src="images/5/thermometer.jpg">
							<div id="mark1"></div>
							<div class="styled-select">
								<select id="select1a">
									<option><?php echo _("Scale"); ?></option>
									<option><?php echo _("Thermometer"); ?></option>
									<option><?php echo _("Graduated Cylinder"); ?></option>
								</select>
							</div>
							<div id="mark2"></div>
							<div class="styled-select">
								<select id="select1b">
									<option><?php echo _("Temperature"); ?></option>
									<option><?php echo _("Weight"); ?></option>
									<option><?php echo _("Volume"); ?></option>
								</select>
							</div>
						</div>
						<div class="choice">
							<img src="images/5/scale.jpg">
							<div id="mark3"></div>	
							<div class="styled-select">
								<select id="select2a">	
									<option><?php echo _("Scale"); ?></option>
									<option><?php echo _("Thermometer"); ?></option>
									<option><?php echo _("Graduated Cylinder"); ?></option>
								</select>
							</div>
							<div id="mark4"></div>
							<div class="styled-select">
								<select id="select2b">
									<option><?php echo _("Temperature"); ?></option>
									<option><?php echo _("Weight"); ?></option>
									<option><?php echo _("Volume"); ?></option>
								</select>
							</div>
						
						</div>
						<div class="choice">
							<img src="images/5/cylinder.jpg">
							<div id="mark5"></div>
							<div class="styled-select">
								<select id="select3a">
									<option><?php echo _("Scale"); ?></option>
									<option><?php echo _("Thermometer"); ?></option>
									<option><?php echo _("Graduated Cylinder"); ?></option>
								</select>
							</div>
							<div id="mark6"></div>
							<div class="styled-select">
								<select id="select3b">
									<option><?php echo _("Temperature"); ?></option>
									<option><?php echo _("Weight"); ?></option>
									<option><?php echo _("Volume"); ?></option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="q-container">
					<h2><?php echo _("Question B. Click on <span class='red blink bold'>ALL</span> the properties of matter that are usually best determined through the use of tools or scientific instruments."); ?></h2>
					<div id="choices2">
							<div class="pic">
								<img src="images/5/density.jpg" id="a1" data-name="A" class="border">
								<p><?php echo _("Density"); ?></p>
							</div>
							<div class="pic">
								<img src="images/5/smell.jpg" id="b1" data-name="B" class="border">
								<p><?php echo _("Odor"); ?></p>
							</div>
							<div class="pic">
								<img src="images/5/melting.jpg" id="c1" data-name="C" class="border">
								<p><?php echo _("Melting Point"); ?></p>
							</div>
							<div class="pic">
								<img src="images/5/freezing.jpg" id="d1" data-name="D" class="border">
								<p><?php echo _("Freezing Point"); ?></p>
							</div>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. Match each scientific instrument to its name and the properties that we use to measure them by selecting an item in the drop down lists."); ?></h2>
					<div id="a-container"></div>
					<!--<p><img src="" id="answer-icon1"><span id="answer1"></span></p>-->
				</div>
				<br>
				<div class="answer-item">
					<h2><?php echo _("Question B. Click on <span class='red blink bold'>ALL</span> the properties of matter that are usually best determined through the use of tools or scientific instruments."); ?></h2>
					<p><img src="" id="answer-icon2"><span id="answer2"></span></p>
				</div>

			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer1 = true;
	var sAnswer1 = '', sAnswer2 = '';
	var textstr = "";
	var nullAnswer = false;
	//var answered = 0;
	$(document).ready(function() {
		$('select').prop("selectedIndex", -1);
	
		$(".pic img").each(function() {
			var image = $(this);
			image.click(function() {
				if(image.hasClass('border-off')) {
					image.removeClass('border-off');
				} else {
					image.addClass('border-off');
				}
			});
		});
		
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = "4.php#screen2";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#identifier').fadeIn();
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer2').removeClass('red');				
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
					$('#choices1').appendTo($('#q1'));
					$('#choices1 select').removeAttr("disabled");
					for (var i = 1; i < 7; i++) {
						$('#mark' + i).empty();
					}
					sAnswer1 = '';
					answer1 = true;
				});	
			}
		});
		
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert('<?php echo _("Please select your answers."); ?>');
				nullAnswer = false;
			} else {
				$('#identifier').fadeOut();
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();

					/* For checking of question A */
					var instruments = ["<?php echo _("Thermometer"); ?>", "<?php echo _("Scale"); ?>", "<?php echo _("Graduated Cylinder"); ?>"];
					var properties = ["<?php echo _("Temperature"); ?>", "<?php echo _("Weight"); ?>", "<?php echo _("Volume"); ?>"];
					
					for(var i = 0, index = 1; i < 3; i++, index+=2) {
						checkAnswer(index, instruments[i], $('#select' + (i + 1) + 'a option:selected').text(), properties[i], $('#select' + (i + 1) + 'b option:selected').text());
					}
					/*
					if(answer1) {
						textstr = "Great job! The thermometer is used for measuring temperature, the scale for weight, and the graduated cylinder for volume. These are a few scientific instruments that we use to measure objects with.";
						$('#answer-icon1').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
					} else {
						textstr = "Not quite. The thermometer is used for measuring temperature, the scale for weight, and the graduated cylinder for volume. These are a few scientific instruments that we use to measure objects with.";
						$('#answer-icon1').attr("src", "images/others/wrong2.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					
					$('#answer1').text(textstr); */
					$('#choices1').appendTo($('#a-container'));
					$('#choices1 select').prop('disabled','disabled');
					/* End checking of question A */
					
					/* For checking of question B */
					if($('#a1').hasClass('border-off')) sAnswer2 += "A";
					if($('#b1').hasClass('border-off')) sAnswer2 += "B";
					if($('#c1').hasClass('border-off')) sAnswer2 += "C";
					if($('#d1').hasClass('border-off')) sAnswer2 += "D";
					
					if($('#a1').hasClass('border-off') && !$('#b1').hasClass('border-off') && $('#c1').hasClass('border-off') && $('#d1').hasClass('border-off')) {
						textstr = "<?php echo _("Good job. The density, freezing point, and melting point of a matter are best determined when tools and scientific instruments are used. Odor is usually measured with human sensation and detection as the base of the measurement."); ?>";
						$('#answer-icon2').attr("src", "images/others/correct.png");
						$('#answer2').addClass('green');
					} else {
						textstr = "<?php echo _("Not quite. The density, freezing point, and melting point of a matter are best determined when tools and scientific instruments are used. Odor is usually measured with human sensation and detection as the base of the measurement."); ?>";
						$('#answer-icon2').attr("src", "images/others/wrong2.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}
					
					$('#answer2').text(textstr);
					/* End checking of question B */
					
					/*
					if(answered == 0) {
						saveAnswer('properties-of-matter-qc1-a', sAnswer1);
						saveAnswer('properties-of-matter-qc1-b', sAnswer2);
						answered = 1;
					} // end save to db
					*/
				}); //end question fadeout function
			} //end else
		}); //end check
	});

	function checkAnswer(index, ans1, studentAns1, ans2, studentAns2) {
		var check = $('<img src="images/others/correct.png">');
		var wrong = $('<img src="images/others/wrong2.png">');
		var check2 = $('<img src="images/others/correct.png">');
		var wrong2 = $('<img src="images/others/wrong2.png">');
		var first = $('#mark' + index);
		var second = $('#mark' + (index + 1));
		
		if(index == 1) {
			sAnswer1 = studentAns1 + '-' + studentAns2;
		} else {
			sAnswer1 = sAnswer1 + '-' + studentAns1 + '-' + studentAns2;
		}
		
		console.log(index + " : " + sAnswer1);
		
		if(ans1 == studentAns1) {
			check.appendTo(first);
		} else {
			wrong.appendTo(first);
			answer1 = false;
		}
		
		if(ans2 == studentAns2) {
			check2.appendTo(second);
		} else {
			wrong2.appendTo(second);
			answer1 = false;
		}
	}
	
	function checkNull() {
		$('select').each(function () {
			if($(this).val() == null) { nullAnswer = true; }
		});
		if(!$('#a1').hasClass('border-off') && !$('#b1').hasClass('border-off') && 
		   !$('#c1').hasClass('border-off') && !$('#d1').hasClass('border-off')) {
			nullAnswer = true; 
		}
	}
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
