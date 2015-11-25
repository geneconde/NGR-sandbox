<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
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
.bg { background-image: url('images/7/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
h1 { color: darkslateblue; }
label { margin:0; font-size: 24px; color: #000; cursor: pointer; }
#buttons .next { display: none; }
#answer { display: none; }

.q-container { height: 100%; padding-bottom: 10px; }
.choices { float: left; width: 46%; }
#radio-pics { float: right; width: 50%; height: 220px; text-align: center; }
#radio-pics img { height: 100%; }

.img-div { height: 220px; width: 293px; margin-left:20px; float: left; }
#imganswer { height: 100%; }
#answer-icon1, #answer-icon2 { display:inline-block; height: 30px; margin-right: 10px; }

.answer-item { clear:both; }
.answer-item:last-child p, div.q-container:last-child { width: 80%; }
input[type="radio"] { display:none; }
input[type="radio"]:checked + label span { background:url('images/7/checked3.png') no-repeat; }
input[type="radio"] + label span {
    display:inline-block;
    width:30px;
    height:30px;
    background:url('images/7/unchecked3.png') no-repeat;
    cursor:pointer;
	margin-right: 15px;
	padding: 5px;
	vertical-align: middle;
	height: 35px;
	margin: 5px 5px 5px 15px;
}

input[type="checkbox"] { opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="checkbox"] + label span { background: url('images/7/checkbox.png') left top no-repeat; position: relative; margin: 0 10px 0 20px; padding:0 0 0 30px; cursor: pointer; line-height: 37px; min-height: 50px; display: inline-block; z-index:0; font-size: 24px; float: left; background-position: -31px 0; }
input[type="checkbox"]:checked + label span { background-position: 0 0; }

#answer p { text-align: center; }

.text-label { padding-top: 19px; }
html[dir="rtl"] input[type="checkbox"] + label span { float: right; }
html[dir="rtl"] .answer-item:last-child p, div.q-container:last-child { float: left; }

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<div class="q-container">
					<div class="choices">
						<h2><?php echo _("Question A. What causes tsunamis?"); ?></h2>
						<input type="radio" name="choices" id="a1">
						<label for="a1"><span></span>A. <?php echo _("Volcanic activity"); ?></label><br>
						<input type="radio" name="choices" id="b1">
						<label for="b1"><span></span>B. <?php echo _("Explosions on land"); ?></label><br>
						<input type="radio" name="choices" id="c1">
						<label for="c1"><span></span>C. <?php echo _("Underwater earthquakes"); ?></label><br>
						<input type="radio" name="choices" id="d1">
						<label for="d1"><span></span>D. <?php echo _("Sudden change in temperature"); ?></label><br>
					</div>
					<div id="radio-pics">
						<img src="images/7/volcano.jpg" id="radio-img">
					</div>
					<div class="clear"></div>
				</div>
				<div class="q-container">
					<h2><?php echo _("Question B. Click on <span class='red bold blink'>ALL</span> the correct statements below."); ?></h2>
					<input type="checkbox" name="choices" id="a2" data-name="A">
					<label for="a2"><span></span>
						<div class="text-label">A. <?php echo _("Scientists can predict all natural hazards."); ?></div>
					</label>
					<div class="clear"></div>
					<input type="checkbox" name="choices" id="b2" data-name="B">
					<label for="b2"><span></span>
						<div class="text-label">B. <?php echo _("Scientists study natural events to understand them and predict when and where they might happen."); ?></div>
					</label>
					<div class="clear"></div>
					<input type="checkbox" name="choices" id="c2" data-name="C">
					<label for="c2"><span></span>
						<div class="text-label">C. <?php echo _("Climatologists and meteorologists study climate and weather."); ?></div>
					</label>
					<div class="clear"></div>
					<input type="checkbox" name="choices" id="d2" data-name="D">
					<label for="d2"><span></span>
						<div class="text-label">D. <?php echo _("Geologists make sure natural hazards are avoided."); ?></div>
					</label>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. What causes tsunamis?"); ?></h2>
					<div class="img-div"><img id="imganswer" src="images/7/underwater.jpg"></div>
					<p><?php echo _("You answered..."); ?></p>
					<p><span id="textanswer1"></span></p>
					<p><img src="" id="answer-icon1"><span id="answer1"></span></p>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. Click on <span class='red bold blink'>ALL</span> the correct statements below."); ?></h2>
					<p><img src="" id="answer-icon2"><span id="answer2"></span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Checking weather conditions..."); ?></strong></section></section>
	<script>
	var answered = 1;
	var answer1, answer2;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = "6.php#screen4";
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn();} );
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
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					if($('#c1').is(':checked')) {
						textstr = "<?php echo _("You got it right! Scientists know that earthquakes and volcanic activity underwater trigger tsunamis."); ?>";
						$('#textanswer1').text("C. <?php echo _("Underwater earthquakes"); ?>");
						$('#imganswer').attr("src","images/7/underwater.jpg");
						$('#answer-icon1').attr("src", "images/7/correct.png");
						$('#answer1').addClass('green');
						answer1 = "C";
					} else {
						textstr = '';
						if($('#a1').is(':checked')) {
							textstr = "<?php echo _("Not quite. Only volcanic activity that is underwater can cause tsunami. Volcanoes on land don’t cause tsunamis."); ?>";
							$('#textanswer1').text("A. <?php echo _("Volcanic activity"); ?>");
							$('#imganswer').attr("src","images/7/volcano.jpg");
							answer1 = "A";
						} else if ($('#b1').is(':checked')) {
							textstr = "<?php echo _("No. Earthquakes or volcanoes that erupt under water can cause a tsunami."); ?>";
							$('#textanswer1').text("B. <?php echo _("Explosions on land"); ?>");
							$('#imganswer').attr("src","images/7/explosion.jpg");
							answer1 = "B";
						} else if ($('#d1').is(':checked')) {
							textstr = "<?php echo _("No. Underwater earthquakes or volcanoes can cause a tsunami."); ?>";
							$('#textanswer1').text("D. <?php echo _("Sudden change in temperature"); ?>");
							$('#imganswer').attr("src","images/7/temp.jpg");
							answer1 = "D";
						}
						$('#answer-icon1').attr("src", "images/7/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					
					var answer2 = "";
					if($('#a2').is(":checked")) { answer2 = "A"; }
					if($('#b2').is(":checked")) { answer2 += "B"; }
					if($('#c2').is(":checked")) { answer2 += "C"; }
					if($('#d2').is(":checked")) { answer2 += "D"; }
					
					if(!$('#a2').is(':checked') && $('#b2').is(':checked') && $('#c2').is(':checked') && !$('#d2').is(':checked')) {
						textstr = "<?php echo _("Correct! Climatologists study the climate, and meterologists study the weather. Many scientists study natural events to better understand why, how, and when they occur. They hope to be able to predict them."); ?>";
						$('#answer-icon2').attr("src", "images/7/correct.png");
						$('#answer2').addClass('green');
					} else {
						textstr = "<?php echo _("Not quite! Scientists cannot predict all natural hazards. Although they study natural disasters and work hard to be able to predict them (not avoid them) someday."); ?>";
						$('#answer-icon2').attr("src", "images/7/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}
					$('#answer2').text(textstr);
					
					if(answered == 0) {
						saveAnswer('natural-hazards-qc2-a',answer1);
						saveAnswer('natural-hazards-qc2-b',answer2);
						answered = 1;
					}
				}); // end question fade
			}// end else
		}); // end check answer

		
		$('#a1').click(function(){
			$('#radio-img').attr("src","images/7/volcano.jpg");
		});
		
		$('#b1').click(function(){
			$('#radio-img').attr("src","images/7/explosion.jpg"); });
		$('#c1').click(function(){ $('#radio-img').attr("src","images/7/underwater.jpg"); });
		$('#d1').click(function(){ $('#radio-img').attr("src","images/7/temp.jpg"); });
	});

	function checkNull() {
		if(!$('#a1').is(':checked') && !$('#b1').is(':checked') && !$('#c1').is(':checked') && !$('#d1').is(':checked')) {
			nullAnswer = true;
		}
		
		if(!$('#a2').is(':checked') && !$('#b2').is(':checked') && !$('#c2').is(':checked') && !$('#d2').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
