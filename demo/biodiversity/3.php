<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
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
<style>
h1 { color: #f36d90; }
.wrap { border-left: 1px dashed #9ce76a; border-right: 1px dashed #9ce76a; }
.bg { background: url('images/3/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #3d9200; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -12px; }
.ac-custom label::before { border: 2px solid #3d9200; }
.ac-custom svg path { stroke: #3d9200; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question ol { width: 760px; margin: 0 0 0 40px !important; }
#question li { padding: 10px 0; }
#answer { display: none; padding-top: 5px; }
#answer p { color: #000; }
#buttons .next { display: none; }

html[dir="rtl"] .ac-custom label { padding-right: 90px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 45px; }
html[dir="rtl"] .ac-custom svg { right: 48px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about biodiversity"); ?></h1>
				<h2><?php echo _('Click on <span class="blink">ALL</span> the correct statements below.'); ?></h2>
				<section>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li><input id="a1" name="q1a" type="checkbox"><label for="a1"><span><?php echo _("Changes in biodiversity can influence humans' resources."); ?></span></label></li>
							<li><input id="b1" name="q1b" type="checkbox"><label for="b1"><span><?php echo _("Plants and animals can only live in certain habitats."); ?></span></label></li>
							<li><input id="c1" name="q1c" type="checkbox"><label for="c1"><span><?php echo _("Temperature is the only factor that determines where plants and animals survive the best."); ?></span></label></li>
							<li><input id="d1" name="q1d" type="checkbox"><label for="d1"><span><?php echo _("Different animal and plant species are found in Earth's many ecosystems."); ?></span></label></li>
						<ol>
					</form>
				</section>
			</div>
			<div id="answer">
				<p><?php echo _("Plants and animals survive best in the habitat that suits them. However, some of them will adapt over generations, and some them will not survive in a new habitat. Temperature is an important factor, as well as the amount of rainfall an area gets. The different combinations of the two factors create unique circumstances for living things. Continue with this module to learn about biomes and biodiversity."); ?></p>	
			</div>
		</div>
	</div> 
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Conducting ecological sampling..."); ?></strong></section></section>
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
					$('.wrap').css('border-left', '1px dashed #c48433');
					$('.wrap').css('border-right', '1px dashed #c48433');
					$('#question').fadeOut();
					$('#answer').fadeIn();
					$('.check-toggle').fadeOut( function(){
						$('.next-toggle').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(images/3/bg.png)');
					$('.wrap').css('border-left', '1px dashed #9ce76a');
					$('.wrap').css('border-right', '1px dashed #9ce76a');
					$('#question').fadeIn();
					$('.back-toggle').fadeIn();
					$('.next-toggle').fadeOut(function(){$('img.check-toggle').fadeIn();});
				}
			});
		}

		$('.check-toggle').click(function(){
			var checkAnswer = $('input:checkbox:checked').length;

			if(checkAnswer == '')
			{
				alert('<?php echo _("Please select your answers."); ?>');
			} else {
				$('#question').fadeOut(function(){
					$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
					$('.wrap').css('border-left', '1px dashed #c48433');
					$('.wrap').css('border-right', '1px dashed #c48433');
					$('#answer').fadeIn();
					$('.check-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
					
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
				});
			}else{
				document.location.href = "2.php";
			}
		});

	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
