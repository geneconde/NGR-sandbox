<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title>
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
<style>
.bg { background: url('images/3/bg.jpg') no-repeat; background-size: 100% 100% !important; width: 100%; height: 100%; position: relative; overflow: hidden; }
#answer { display: none; }
#buttons .next { display: none; }
img.next-toggle { display: none; }
.choices h2 { color: black !important; margin:0; }
.wrap {border-left: 1px dashed #5C9F80;border-right: 1px dashed #5C9F80}
.q-container { height: 175px; padding: 0 0 0 15px; margin-bottom: 3px; }
.img-holder1 { background: url('images/3/holder1.png'); width: 30%; float: left; height: 100%; background-size: 100% 100%; margin-right: 20px; }
.img-holder2 { background: url('images/3/holder2.png'); width: 30%; float: left; height: 100%; background-size: 100% 100%; margin-right: 20px; }
.img-holder1 img, .img-holder2 img { height: 90%; width: 90%; margin: 10px; }
.choices { width: 65%; float: left; }
.choices h2 { padding: 0 0 5px 0; }
#answer p { padding-top: 40px; }
h1 {color:#fed501 !important;}

/* For Animated Checkboxes */
.ac-custom { padding: 5px 0 5px 20px; }
.ac-custom li { padding: 10px 0px; }
.ac-custom li:nth-of-type(3) { padding: 10px 0 0 0; }
.ac-custom li:nth-of-type(3) svg { top: 65%; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { height: 35px; width: 35px; }
.ac-custom svg { height: 25px; width: 25px }
.ac-custom label { font-size: 22px; color: #000; padding: 0 0 0 45px; cursor:pointer }
.ac-custom label::before { border: 4px solid #FCFFAE; }
.ac-custom label > div { margin-top: -10px; }

#adjust .image-holder2 { float: right; width: 200px; }
#adjust .choices { float: left; width: 400px;  }/*margin-left: 158px;*/

html[dir="es"] #question h2 { margin: 5px 0; }

html[dir="rtl"] .img-holder1 { float:left; }
html[dir="rtl"] .img-holder2 { float:right; }
html[dir="rtl"] .choices { width:47%; }
html[dir="rtl"] #question > div:last-of-type .choices { width:40%; }
html[dir="rtl"] #adjust .choices { margin-left: 0; width: 555px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom label { padding:0 45px 0 0; }
html[dir="rtl"] .ac-custom svg { right:5px;top:44%; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
html[dir="rtl"] #adjust .choices {width: 460px;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">				
			<div id="question">	
				<h1><?php echo _("Checking what you know... about staying healthy"); ?></h1>
				<h2><?php echo _("Click the statements the activities shown are likely to cause."); ?></h2>
				<div class="q-container">
					<div class="img-holder1">
						<img src="images/3/3a.jpg">
					</div>
					<div class="choices">
						<h2><?php echo _("Diet heavy in fats and carbohydrates."); ?></h2>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ul>
								<li><input id="cb1" type="checkbox"><label for="cb1"><div><?php echo _("Increase in obesity."); ?></div></label></li>
								<li><input id="cb2" type="checkbox"><label for="cb2"><div><?php echo _("Increase in heart disease."); ?></div></label></li>
								<li><input id="cb3" type="checkbox"><label for="cb3"><div><?php echo _("Increase in overall fitness."); ?></div></label></li>
							<ul>
						</form>				
					</div>
				</div>
				<div class="clear"></div>
				<div class="q-container" id="adjust">
					<div class="img-holder2">
						<img src="images/3/3b.jpg">
					</div>
					<div class="choices">
						<h2><?php echo _("Daily exercises at least 30 minutes long."); ?></h2>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ul>
								<li><input id="cb4" type="checkbox"><label for="cb4"><div><?php echo _("Decrease in body weight."); ?></div></label></li>
								<li><input id="cb5" type="checkbox"><label for="cb5"><div><?php echo _("Increase in energy."); ?></div></label></li>
								<li><input id="cb6" type="checkbox"><label for="cb6"><div><?php echo _("Increase in heart disease risk."); ?></div></label></li>
							<ul>
						</form>				
					</div>
				</div>
				<div class="clear"></div>
				<div class="q-container">
					<div class="img-holder1">
						<img src="images/3/3c.jpg">
					</div>
					<div class="choices">
						<h2><?php echo _("Childhood health checkups including vaccinations at appropriate ages."); ?></h2>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ul>
								<li><input id="cb7" type="checkbox"><label for="cb7"><div><?php echo _("Increase in childhood diseases."); ?></div></label></li>
								<li><input id="cb8" type="checkbox"><label for="cb8"><div><?php echo _("Decrease in overall health."); ?></div></label></li>
								<li><input id="cb9" type="checkbox"><label for="cb9"><div><?php echo _("Fewer childhood diseases."); ?></div></label></li>
							<ul>
						</form>				
					</div>
				</div>
			</div>
			<div id="answer">
				<p><?php echo _("A diet heavy in fats and carbohydrates can lead to obesity and heart problems. Daily exercise is needed to control body weight and give an energy boost. Checkups and vaccinations are also necessary to prevent major diseases."); ?></p>
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Breathing fresh air..."); ?></strong></section></section>
	<script>
	$(document).ready(function() {
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "2.php";
			} else if ($('#answer').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('.bg').css('background','url("images/3/bg.jpg") no-repeat');
					window.location.hash = "";
				});
			}
		});
		
		$('.check-toggle').click(function(){ 
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#question').fadeOut(function(){
				$('#answer').fadeIn();
				$('.bg').css('background','url("images/3/bg2.jpg") no-repeat');
				$('.wrap').css('border-left','1px dashed #1567C8');
				$('.wrap').css('border-right','1px dashed #1567C8');
				window.location.hash = "#answer";
			}); 
		});
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<?php 
	require_once 'setlocale.php';
	?>
	<?php include("setlocale.php"); ?>
</body>
</html>
