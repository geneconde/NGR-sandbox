<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #000; }
h2 { margin: 10px 0; }
.wrap { border-color: #89633e; }
.bg { background-image: url(images/3/bg.jpg); }

.ac-custom { padding: 0; margin-bottom: 20px; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #588B38; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #588B38; }
.ac-custom svg path { stroke: #588B38; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question ol { width: 760px; margin: 0 0 0 40px !important; }
#question li { padding: 8px 0; }

#answer { display: none; }
#answer p:first-child { padding-top: 15px; }

#buttons .next { display: none; }
.bg img { margin: 0 auto; display: block; }
#answer p { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#answer { padding-top: 15px; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 40px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#start {top: 110px;left: 275px;}
}	


</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about the history of earth"); ?></h1>
				<h2><?php echo _("In the picture below you can see the fossil dinosaur bones. Which of these statements <span class='blink'>best</span> describe it?"); ?></h2>

				<section>
					<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
						<ol>
							<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("The actual original bones of the dinosaur that got buried in sediments that became rocks."); ?> </span></label></li>
							<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("The imprints of dinosaur bones in the rocks like a handprint you might make in wet sand or mud."); ?></span></label></li>
							<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("The remains of the bones after they've been changed into rock."); ?></span></label></li>
						<ol>
					</form>
				</section>
				<!-- <img src="images/3/bones.jpg" /> -->
			</div>

			<div id="answer">
				<p><?php echo _("These bones and teeth are the remains of the original dinosaur bones after they've been replaced by rock material. They are not the original bones and teeth themselves. And, they are not an imprint of the original bones and teeth."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Observing rainfall patterns..."); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2;

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				//$('.wrap').css('border-color', '#4291d3');
				$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });
				$('.check-toggle').fadeOut( function(){ $('.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
				$('#question').fadeIn();
				$('.back-toggle').fadeIn();
				$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
			}
		});
	}

	$('.check-toggle').click(function(){
		$('#question').fadeOut(function(){
			$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			//$('.wrap').css('border-color', '#4291d3');
			$('#answer').fadeIn();
			$('.check-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
			window.location.hash = '#answer';
		});
	});

	$('.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
				$('#question').fadeIn();
				$('.back-toggle').fadeIn();
				$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
				window.location.hash = '';
			});
		} else {
			$('.back-toggle').parent().attr('href','2.php');
		}
	});
	</script>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
