<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(1, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?><?php if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			if (Modernizr.touch) {
				$('#start').bind('touchstart touchend', function(e) {
					$(this).toggleClass('pulsehover');
				});
			} else {
				$('#start').addClass('pulse');
			}
		});
	</script>

	<style>
		h1 { color: #3887CA; padding: 20px 0 0; text-align: center; }
		.wrap { border-color: #73E8E2; }
		.bg { background-image: url('assets/1/bg.jpg'); overflow: hidden; }

		#start { position: absolute;
		top: 520px;
		left: 520px;
		width: 105px;
		height: 121px;
		display: block;
		padding: 0 10px 10px 28px;
		font-size: 35px;
		color: #DA5383;
		background: url('assets/1/start.png') top left no-repeat;
		background-size: 100%; }

		@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
		@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

		.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
		.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

		html[dir="es"] #start { padding: 12px 10px 10px 23px; top: 520px; font-size: 25px; }
		html[dir="rtl"] .bg h1 { font-size: 33px; }
		html[dir="rtl"] #start { padding: 0 33px 10px 1px; width: 80px; top: 550px; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			h1.grid_12 { margin-top: 5%; }
			#start { top: 620px; left: 390px; }
			html[dir="es"] #start { top: 620px; }
			html[dir="rtl"] #start { top: 620px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#start {top: 850px; left: 275px;}
			h1.grid_12 { margin-top: 5%; }
		}
		@media only screen and (max-width: 1250px) {
			h1.grid_12 { margin-top: 5%; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Welcome to the Staying Alive module") . ', ' . $user->getFirstName() . '!'; ?></h1>

					<a href="2.php" id="start"><?php echo _("Start"); ?></a>

				</div>
			</div>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?>!</strong></section></section>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
