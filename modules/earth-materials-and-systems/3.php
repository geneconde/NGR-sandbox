<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { font-size: 32px; }
h2 { margin-bottom: 0; }
.wrap { border-color: #f8c104; }
.bg { background-image: url(images/3/bg.jpg); }

#question ul { margin: 0 auto 0; width: 800px; list-style: none; padding: 0; }
#question li { float: left; width: 250px; margin: 8px; }

#question li:nth-last-child(-n+3) { margin-top: 10px; }
#question input[type=checkbox] { display: none; }
#question label { font-size: 24px; display: block; text-align: center; cursor: pointer; width: 250px; }
#question input[type="checkbox"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; border-radius: 10px !important; width: 250px; }
#question input[type="checkbox"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #780046; -webkit-backface-visibility: hidden; }
#question input[type="checkbox"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question input[type="checkbox"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #780046; -webkit-backface-visibility: hidden;  ;}
#question input[type="checkbox"] + label { }
#question input[type="checkbox"]:checked + label {}

#answer img { width: 200px; margin: 10px; }
#answer img:nth-child(2n) { margin-left: 25%; }

#answer { display: none; }
#answer p:first-child { padding-top: 15px; color: white; }

#buttons .next { display: none; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 35px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question ul { width: 100%; }
	#answer ul { width: 400px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about earth materials and systems"); ?></h1>
				<h2><?php echo _("Which of the following do you think are earth materials? Click on <span class='blink'>all</span> of the pictures you think are earth materials."); ?></h2>
				<ul class="clear">
					<li>
						<input type="checkbox" id="a1" name="q1">
						<label for="a1"><img src="images/3/rock.jpg"><span><?php echo _("Rocks"); ?></span></label>
					</li>
					<li>
						<input type="checkbox" id="b1" name="q1">
						<label for="b1"><img src="images/3/soil.jpg"><span><?php echo _("Soil/Dirt"); ?></span></label>
					</li>
					<li>
						<input type="checkbox" id="c1" name="q1">
						<label for="c1"><img src="images/3/sunlight.jpg"><span><?php echo _("Sunlight"); ?></span></label>
					</li>
					<li>
						<input type="checkbox" id="d1" name="q1">
						<label for="d1"><img src="images/3/water.jpg"><span><?php echo _("Liquid water"); ?></span></label>
					</li>
					<li>
						<input type="checkbox" id="e1" name="q1">
						<label for="e1"><img src="images/3/air.jpg"><span><?php echo _("Air"); ?></span></label>
					</li>
					<li>
						<input type="checkbox" id="f1" name="q1">
						<label for="f1"><img src="images/3/snow.jpg"><span><?php echo _("Snow"); ?></span></label>
					</li>
				</ul>
			
			</div>

			<div id="answer">
				<p><?php echo _("Earth is made up of different kinds of material. Scientists have put all the different stuff on earth into categories called earth systems. Rock and soil are in one system, and water and snow are in another. Read on to find out more."); ?></p>
				<!--<img src="images/3/rock.jpg">
				<img src="images/3/soil.jpg">
				<img src="images/3/water.jpg">
				<img src="images/3/snow.jpg">-->
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Studying earth systems..."); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2;

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				$('.wrap').css('border-color', '#5f6982');
				$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });
				$('.check-toggle').fadeOut( function(){ $('.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#f8c104');
				$('#question').fadeIn();
				$('.back-toggle').fadeIn();
				$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
			}
		});
	}

	$('.check-toggle').click(function(){
		$('#question').fadeOut(function(){
			$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			$('.wrap').css('border-color', '#5f6982');
			$('#answer').fadeIn();
			$('.check-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
			window.location.hash = '#answer';
		});
	});

	$('.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#f8c104');
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

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
