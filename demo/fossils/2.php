<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'fossils';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Fossils'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">

<style>
	h1 { color: #a89f70; }
	.wrap { position: relative; border-color: #ddd7aa; }
	.bg { position: relative; background-image: url(images/2/bg.png); background-size: cover; }
	p { font-size: 22px; }

	#animation { position: relative; width: 100%; }
	#animation img { position: absolute; display: block; }

	#animation .man { left: 230px; top: 130px; }

	#animation .arm { 
		left: 273px;
		top: 82px;
		-webkit-animation: sweep 0.5s linear 0s infinite alternate;
		-moz-animation: sweep 0.5s linear 0s infinite alternate;
		animation: sweep 0.5s linear 0s infinite alternate;
	}
	#animation .smoke {
		left: 250px;
		top: 40px; 
		-webkit-animation: dust 2s linear 0s infinite;
		-moz-animation: dust 2s linear 0s infinite;
		animation: dust 2s linear 0s infinite;
	}
	@-webkit-keyframes sweep {
		from { -webkit-transform: rotate(-10deg); }
		to { -webkit-transform: rotate(10deg); }
	}
	@-moz-keyframes sweep {
		from { -moz-transform: rotate(-10deg); }
		to { -moz-transform: rotate(10deg); }
	}
	@keyframes sweep {
		from { transform: rotate(-10deg); }
		to { transform: rotate(10deg); }
	}
	@-webkit-keyframes dust {
		from { opacity: .5; left: 275px; top: 45px; }
		to { opacity: .1; left: 290px; top: 60px; }
	}
	@-moz-keyframes dust {
		from { opacity: .5; left: 275px; top: 45px; }
		to { opacity: .1; left: 290px; top: 60px; }
	}
	@keyframes dust {
		from { opacity: .5; left: 275px; top: 45px; }
		to { opacity: .1; left: 290px; top: 60px; }
	}
	.buttons, .buttons-back { display: none; }

	@media only screen and (max-width: 1250px) {
		@-webkit-keyframes dust {
			from { opacity: .5; left: 275px; top: 0px; }
			to { opacity: .1; left: 290px; top: 20px; }
		}
		@-moz-keyframes dust {
			from { opacity: .5; left: 275px; top: 0px; }
			to { opacity: .1; left: 290px; top: 20px; }
		}
		@keyframes dust {
			from { opacity: .5; left: 275px; top: 0px; }
			to { opacity: .1; left: 290px; top: 20px; }
		}
		.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		h1 { padding-top: 40px; }
		#animation .man { top: 78px; }
		#animation .arm { top: 35px; }
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		#animation .man { top: 190px; }
		#animation .arm { top: 147px; }
		#animation .smoke {
			-webkit-animation: dustb 2s linear 0s infinite;
			-moz-animation: dustb 2s linear 0s infinite;
			animation: dustb 2s linear 0s infinite;
		}
		@-webkit-keyframes dustb {
			from { opacity: .5; left: 275px; top: 90px; }
			to { opacity: .1; left: 290px; top: 130px; }
		}
		@-moz-keyframes dustb {
			from { opacity: .5; left: 275px; top: 90px; }
			to { opacity: .1; left: 290px; top: 130px; }
		}
		@keyframes dustb {
			from { opacity: .5; left: 275px; top: 90px; }
			to { opacity: .1; left: 290px; top: 130px; }
		}
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
		#animation .man { top: 255px; left: 150px; }
		#animation .arm { top: 211px; left: 195px; }
		#animation .smoke {
			-webkit-animation: dustb 2s linear 0s infinite;
			-moz-animation: dustb 2s linear 0s infinite;
			animation: dustb 2s linear 0s infinite;
		}
		@-webkit-keyframes dustb {
			from { opacity: .5; left: 210px; top: 160px; }
			to { opacity: .1; left: 230px; top: 180px; }
		}
		@-moz-keyframes dustb {
			from { opacity: .5; left: 210px; top: 160px; }
			to { opacity: .1; left: 230px; top: 180px; }
		}
		@keyframes dustb {
			from { opacity: .5; left: 210px; top: 160px; }
			to { opacity: .1; left: 230px; top: 180px; }
		}
	}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... fossils"); ?></h1>
				<p><?php echo _("You have probably heard lots of different things about what the Earth was like millions of years ago. You may have read there were animals, like dinosaurs, that lived then that were much different than animals living today. And that there were seas and beaches where today there are deserts. And mountains where today there are plains. But I don't know of anyone who was alive that long ago! Do you? So how do we know ANYTHING at all about what the Earth was like in the far distant past and what living things existed thousands and millions of years ago? Fossils help scientists figure all of this out! Plus – fossils are just cool to collect and look at."); ?></p>

				<div id="animation">
					<img src="images/2/smoke.png" class="smoke">
					<img src="images/2/arm.png" class="arm">
					<img src="images/2/man.png" class="man">
				</div>
			</div>				
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _('Next'); ?>">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName() ?>?</strong></section></section> <!-- Change to student name soon -->

	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/modernizr.min.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
