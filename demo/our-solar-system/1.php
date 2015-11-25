<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(1, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #E5E630; padding-top: 36px; text-align: center; }
		
		.wrap { border-color: #1e3351; max-height: 100%; }
		.bg { background-image: url(assets/1/bg.png); }

		.bg a { 
			font-size: 28px; 
			text-transform: uppercase;
			text-align: center;
			margin: 515px auto 0;
			display: block;
			background: url(assets/1/start.png) no-repeat;
			width: 150px;
			height: 69px;
			padding: 23px 0 0 0;
			color: #004276;
		}
		
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			.bg a { margin: 630px auto 0; }
		}

		.bg a {
		    font-size: 28px;
		    text-transform: uppercase;
		    text-align: center;
		    display: block;
		    background: url(assets/1/start.png) no-repeat;
		    width: 150px;
		    height: 69px;
		    padding: 23px 0 0 0;
		    color: #004276;
		    margin: 5% auto !important;
		    left: 0 !important;
		    right: 0 !important;
		    position: fixed !important;
		    bottom: 0% !important;
		}

		.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
		.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

		@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
		@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Welcome to Our Solar System module") . ', ' . $user->getFirstName() . '!'; ?></h1>

					<a href="2.php" class="pulse"><?php echo _("Start"); ?></a>

				</div>
			</div>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
