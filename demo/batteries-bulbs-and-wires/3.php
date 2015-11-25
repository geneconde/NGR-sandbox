<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #b85252; }
		h2 {font-size: 24px;}

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 27px; } }
		
		.bg { background-image: url(assets/bg-qq-qc.jpg); }
		
		.ac-custom li { padding: .2em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #c16202 }
		.ac-custom label { color: #000; padding-left: 49px; font-size: 23px; }
		.ac-custom label::before { border: 2px solid #c16202; height: 34px; width: 34px; margin-top: -18px;}
		.ac-custom svg path { stroke: #c16202; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #c16202; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		#answer img {width:50%; height:10%; margin-left: 220px; border:2px solid #777;}
		#question div img { width: 90%; margin: 0 5%; border: 2px solid #769a63;}
		h2.grid_12 {margin-bottom: 30px;}

		#flashlight { position: relative; background: url("assets/3/3b.jpg") top left/100% 100%; height:250px; width: 500px; margin: 0 auto;}
		#flashlight p { position: absolute; font-size: 18px; color: #000; width: auto; background-color: transparent;}
		#case {top: 4%; left: 16%;}
		#spring {top: 75%; left: 5%;}
		#bulb {top: 7%; left: 88%;}
		#switch {top: 1%; left: 41%;}
		#protective-glass {top: 71%; left: 85%;}
		#reflector {top: 75%; left: 65%;}
		#dry-cells {top: 78%; left: 36%;}

		.grid_12 { position: initial; }
		#answer { position: absolute; bottom: 10%; }
		#answer p { color: #000; text-align: left; width: 97%; }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1 class="grid_12"><?php echo _("Checking what you know about... electric circuits"); ?></h1>
						<h2 class="grid_12"><?php echo _("When you push the switch on a flashlight and it lights up, it is because the switch:"); ?></h2>						
						<div class="grid_6">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="option" type="radio"><label for="a"><span><?php echo _("pushes the battery up against the bulb."); ?></span></label></li>
									<li><input id="b" name="option" type="radio"><label for="b"><span><?php echo _("completes a simple circuit in the flashlight."); ?></span></label></li>
									<li><input id="c" name="option" type="radio"><label for="c"><span><?php echo _("turns the battery on."); ?></span></label></li>
									<li><input id="d" name="option" type="radio"><label for="d"><span><?php echo _("tells the bulb to light."); ?></span></label></li>
								<ol>
							</form>
						</div>
						<div class="grid_6">
							<img src="assets/3/boy-with-flashlight.png" />
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<p><?php echo _("There is a simple circuit in the flashlight that is completed when the switch is pushed to the \"on\" position. This allows electric current to run from the battery to the bulb, through the bulb, and back again causing the bulb to light."); ?></p>
						<div class="clear"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Switching on lights..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#0b0f2c');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-image', 'url(assets/bg-qq-qc.jpg)');
					$('.wrap').css('border-color', '#ff8484');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.checkanswer').click(function() {
			var checkAnswer = $('input:radio:checked').length;
			
			if (checkAnswer < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#0b0f2c');

					$('#answer').fadeIn();

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '#answer';
				});
			}
		});

		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/bg-qq-qc.jpg)');
					$('.wrap').css('border-color', '#ff8484');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '2.php'); }
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
