<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

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
		h1 { text-align: center; color: #F16D2D; margin-top: 35px; }
		
		.wrap { border-color: #FBC30A; }
		.bg { background-image: url(assets/1/bg.jpg); }

		#buttons .next { display: none; }
		
		#start { 
			position: absolute;
			width: 159px;
			height: 98px;
			font-size: 35px;
			color: white;
			background: url('assets/1/start.png') top left no-repeat;
			background-size: 100%;
			text-align: center;
			padding-top: 30px;
		}
		.start-cont{
			position: absolute;
			bottom: 50%;
			left: 50%;
			margin-bottom: -14%;
			margin-left: -8.7%;
		}
		
		@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
		@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

		.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }

		.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

		.pulsehover { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }
		<?php if ($language == 'ar_EG') { ?>
			.start-cont { left: 68%; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Welcome to the Structure and Properties of Matter module"); ?>, <?php echo $user->getFirstName() . "!" ?></h1>
					</div>

				</div>
			</div>
			<div class="grid_12 start-cont">
				<a href="2.php" id="start"><?php echo _("Start"); ?></a>
			</div>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<script src="js/jquery.jplayer.min.js"></script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
