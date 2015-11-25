<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
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
<style>
h1 { color: #5b4d4f; }
.wrap { border-left: 1px dashed #c0f84a; border-right: 1px dashed #c0f84a; }
.bg { background: url('images/3/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #780046; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #780046; }
.ac-custom svg path { stroke: #780046; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question .images { margin-top: 40px; }
#question .images img { width: 260px; height: 201px; margin-right: 20px; }
#question .images img:last-child { margin-right: 0; }
#question ol { width: 760px; margin: 0 0 0 40px !important; }
#question li { padding: 10px 0; }
#answer { display: none; }
#answer p { color: #fff; padding-top: 15px; }
#buttons .next { display: none; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 35px; }
	#question ol {width: 700px;}
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about energy for life"); ?></h1>
				<h2><?php echo _("Click on the statement that is <span class='blink'>correct</span>."); ?></h2>
				<section>
					<form class="ac-custom ac-checkbox ac-cross" autocomplete="off">
						<ol>
							<li><input id="a1" name="q1a" type="checkbox"><label for="a1"><span>A. <?php echo _("The earth gets heat from the sun."); ?></span></label></li>
							<li><input id="b1" name="q1b" type="checkbox"><label for="b1"><span>B. <?php echo _("Light from the sun is absorbed by objects on earth."); ?></span></label></li>
							<li><input id="c1" name="q1c" type="checkbox"><label for="c1"><span>C. <?php echo _("Absorbed light usually increases the energy in an object."); ?></span></label></li>
							<li><input id="d1" name="q1d" type="checkbox"><label for="d1"><span>D. <?php echo _("All of the above."); ?></span></label></li>
						<ol>
					</form>
				</section>			
				<!--<div class="images">
					<img src="images/3/a.jpg">
					<img src="images/3/b.jpg">
					<img src="images/3/c.jpg">
				</div>-->
			</div>
			<div id="answer">
				<p><?php echo _("The light from the sun is reflected or absorbed by objects on earth. If an object absorbs sunlight, its energy increases. Continue with the lesson and module how the sun supplies plants with energy and how all living things depend on that for energy."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Bathing under the sun..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on #answer
					$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
					$('.wrap').css('border-left', '1px dashed #4291d3');
					$('.wrap').css('border-right', '1px dashed #4291d3');
					$('#question').fadeOut(function() { $('#answer').fadeIn(); });
					//$('#answer').fadeIn();
					$('.check-toggle').fadeOut( function(){
						$('.next-toggle').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(images/3/bg.png)');
					$('.wrap').css('border-left', '1px dashed #9ce76a');
					$('.wrap').css('border-right', '1px dashed #9ce76a');
					$('#question').fadeIn();
					$('.back-toggle').attr('href','2.php');
					$('.back-toggle').fadeIn();
					$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
				}
			});
		}

		$('.check-toggle').click(function(){
			checkAnswer = $('input:checkbox:checked').length;

			if (checkAnswer == '') {
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				$('#question').fadeOut(function(){
					$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
					$('.wrap').css('border-left', '1px dashed #4291d3');
					$('.wrap').css('border-right', '1px dashed #4291d3');
					$('#answer').fadeIn();
					$('.check-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
					window.location.hash = '#answer';
				});
			}
		});

		$('.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('.bg').css('background-image', 'url(images/3/bg.png)');
					$('.wrap').css('border-left', '1px dashed #9ce76a');
					$('.wrap').css('border-right', '1px dashed #9ce76a');
					$('#question').fadeIn();
					$('.back-toggle').fadeIn();
					$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
					window.location.hash = '';
				});
			}else{
				$('.back-toggle').attr('href','2.php');
			}
		});

	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
