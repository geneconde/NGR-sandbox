<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
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

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { text-align: center; margin-top: 4%; }
		.bg { background-image: url(assets/1/bg.jpg); }
		#buttons .next { display: none; }		
		#start { 
			position: absolute;
			bottom: 17%;
			left: 39%;
			width: 104px;
			height: 129px;
			display: block;
			padding: 16px 0px 0px 69px;
			font-size: 35px;
			color: #fa04cf;
			background: url('assets/1/start.png') top left no-repeat;
			background-size: 100%;
		}
		@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
		@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

		.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
		.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 32px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Welcome to the Making Sound module"); ?>, <?php echo $user->getFirstName() . "!" ?><?php //echo $user->getFirstName() . "!" ?></h1>
						
					</div>
				</div>
			</div>
			<a href="2.php" id="start" class="pulse"><?php echo _("Start"); ?></a>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
