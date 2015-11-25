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
.bg { background-image: url('images/5/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
#buttons .next { display: none; }
h1 { color: darkslateblue; }
h2 { min-height: 100px; }
.q-container { width: 49%; float: left; padding: 0px 10px; background: rgba(240, 100, 0, 0.2); -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; height: 525px; }
.q-container:nth-of-type(1) { margin-right: 10px; height: 545px; }

#choices1, #choices2 { width: 100%; margin: 0 auto; padding: 5px 0px; }
.pic { height: 100%; float: left; width: 50%; text-align: center; padding: 10px 0px; }
.pic img { height: 143px; width: 188px; margin: 0 auto; cursor: pointer; }

.pic p { font-size: 20px; text-align: center; }

#answer { display: none; }
#answer p { text-align: center; }
.answer-item { width: 49%; float: left; padding: 0px 10px; background: rgba(240, 100, 0, 0.2); -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
.answer-item:nth-of-type(1) { margin-right: 10px; }
.img-div { height: 140px; width: 100%; margin: 0 auto; text-align: center; }
#imganswer1, #imganswer2 { height: 100%; }
.text-div { width: 100%; text-align: left; margin: 10px 0px; }

#answer-icon1, #answer-icon2 { display:inline-block; height: 30px; margin-right: 10px; }
.borderSelect { border: 5px solid #ECC377; }
.orange { color: #E17729; }
.darkorange { color: #FF5905; }
.darkyellow { color: #887E09; }
.sky { color: #0054AC; }
.lightgreen { color: #10694D; }
.blue { color: #2C65BC; }
.brown { color: #7b3d32; }
.maroon { color: maroon; }
.navy { color: navy; }

img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}
html[dir="rtl"] #answer p, html[dir="rtl"] .pic p { text-align: center; }
html[dir="rtl_es"] .q-container { height: 570px; }
html[dir="rtl_es"] #choices2 div:nth-last-of-type(-n+2) { margin-top: 23px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	.pic { padding: 0; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.pic img { width: 160px; height: auto; }
	.q-container:nth-of-type(1) { height: 525px; }
}	

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div class="q-container">
					<h2><?php echo _("Question A. Lightning, hurricanes, and tornadoes are a result of..."); ?></h2>
					<div id="choices1">
						<div class="pic">
							<img src="images/5/geological.jpg" id="a1" data-name="A" class="border">
							<p><span class="orange"><?php echo _("Geological Features"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/5/weather.jpg" id="b1" data-name="B" class="border">
							<p><span class="darkyellow"><?php echo _("Weather"); ?></span></p>
						</div>
						<div class="clear"></div>
						<div class="pic">
							<img src="images/5/weather-landscape.jpg" id="c1" data-name="C" class="border">
							<p><span class="navy"><?php echo _("Weather and geological features combined"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/5/landscape.jpg" id="d1" data-name="D" class="border">
							<p><span class="lightgreen"><?php echo _("Landscape Features"); ?></span></p>
						</div>
					</div>
				</div>
				<div class="q-container">
					<h2><?php echo _("Question B. An example of a natural hazard that is a result of both weather and landscape is..."); ?></h2>
					<div id="choices2">
						<div class="pic">
							<img src="images/5/hurricane.jpg" id="a2" data-name="A" class="border">
							<p><span class="sky"><?php echo _("Hurricane"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/5/volcano.jpg" id="b2" data-name="B" class="border">
							<p><span class="darkorange"><?php echo _("Volcano"); ?></span></p>
						</div>
						<br>
						<div class="pic">
							<img src="images/5/earthquake.jpg" id="c2" data-name="C" class="border">
							<p><span class="orange"><?php echo _("Earthquake"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/5/flood.jpg" id="d2" data-name="D" class="border">
							<p><span class="maroon"><?php echo _("Flood"); ?></span></p>
						</div>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. Lightning, hurricanes, and tornadoes are a result of..."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="img-div"><img id="imganswer1" src=""></div>
					<p><span id="textanswer1"></span></p>
					<p><img src="" id="answer-icon1"><span id="answer1"></span></p>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. An example of a natural hazard that is a result of both weather and landscape is..."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div class="img-div"><img id="imganswer2" src="images/5/flood.jpg"></div>
					<p><span id="textanswer2"></span></p>
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>
	<script>
	var textstr = '';
	var answered = 1;
	var answer1, answer2, nullAnswer = false;
	$(document).ready(function() {	
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = '4.php#screen3';
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');		
					$('#answer2').removeClass('red');
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('a-align');
					$('#answer-icon2').removeClass('a-align');
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
					$('a.check-toggle').fadeOut(function() {
						$('a.next-toggle').fadeIn();
					});
					
					if (answer1 == "B") {
						textstr = "<?php echo _("Correct. These natural hazards are related to weather."); ?>";
						$('#textanswer1').text('<?php echo _("Weather"); ?>');
						$('#imganswer1').attr("src","images/5/weather.jpg");
						$('#answer-icon1').attr("src", "images/5/correct.png");
						$('#answer1').addClass('green');
					} else {
						if (answer1 == "A") {
							textstr = "<?php echo _("No. Earthquakes and volcanoes are related to geology."); ?>";
							$('#textanswer1').text("<?php echo _("Geological Features"); ?>");
							$('#imganswer1').attr("src","images/5/geological.jpg");
						} else if (answer1 == "C") {
							textstr = "<?php echo _("No. Wildfires and floods are related to a combination of weather and geology."); ?>";
							$('#textanswer1').text("<?php echo _("Weather and geological features combined"); ?>");
							$('#imganswer1').attr("src","images/5/weather-landscape.jpg");
						} else if (answer1 == "D") {
							textstr = "<?php echo _("Not quite. Lightning, hurricanes, and tornadoes are related to weather."); ?>";
							$('#textanswer1').text("<?php echo _("Landscape Features"); ?>");
							$('#imganswer1').attr("src","images/5/landscape.jpg");
						}
						$('#answer-icon1').attr("src", "images/5/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					
					if (answer2 == "D") {
						textstr = "<?php echo _("You got it right! A flood is a result of rain and snow (weather) and the features of the land that it is trying to go into (landscape)."); ?>";
						$('#textanswer2').text('<?php echo _("Flood"); ?>');
						$('#imganswer2').attr("src","images/5/flood.jpg");
						$('#answer-icon2').attr("src", "images/5/correct.png");
						$('#answer2').addClass('green');
					} else {
						if (answer2 == "A") {
							textstr = "<?php echo _("No. Hurricanes are related to weather, not geological factors."); ?>";
							$('#textanswer2').text("<?php echo _("Hurricane"); ?>");
							$('#imganswer2').attr("src","images/5/hurricane.jpg");
						} else if (answer2 == "B") {
							textstr = "<?php echo _("No. Volcanoes are related to geological factors, not weather."); ?>";
							$('#textanswer2').text("<?php echo _("Volcanoes"); ?>");
							$('#imganswer2').attr("src","images/5/volcano.jpg");
						} else if (answer2 == "C") {
							textstr = "<?php echo _("No. Earthquakes are related to geological factors, not weather."); ?>";
							$('#textanswer2').text("<?php echo _("Earthquake"); ?>");
							$('#imganswer2').attr("src","images/5/earthquake.jpg");
						}
						$('#answer-icon2').attr("src", "images/5/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}
					$('#answer2').text(textstr);
					
					if(answered == 0) {
						saveAnswer('natural-hazards-qc1-a',answer1);
						saveAnswer('natural-hazards-qc1-b',answer2);
						answered = 1;
					}
				}); // end question fade
			} // end else
		}); // end check answer
		
		$(".pic img").each(function() {
			$(this).click(function() {
				var parent_id = $(this).parent().parent().attr('id');
				var set = parent_id[parent_id.length - 1];
				clearEverything(set);
				//if(window["answer" + set] != $(this).data('name')) {
					$(this).addClass('border-off');
					window["answer" + set] = $(this).data('name');
				//}
			});
		});
	});

	function clearEverything(set) {
		$('#choices' + set + ' .pic img').each(function() {
			$(this).removeClass('border-off');
		});
	}
	
	function checkNull() {
		if(answer1 == null) nullAnswer = true;
		if(answer2 == null) nullAnswer = true;
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
