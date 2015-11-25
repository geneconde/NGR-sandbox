<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(1, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Basic Cells"); ?></title>

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
		h1 { 
			text-align: center;
			color: #ea6b48;
			margin-top: 3%; }
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/1/bg.jpg); overflow: hidden;}
		#buttons .next { display: none; }		
		#start { 
			position: absolute;
			top: 373px;
			left: 42%;
			width: 105px;
			height: 75px;
			display: block;
			padding: 43px 10px 10px 28px;
			font-size: 35px;
			color: #ea6b48;
			background: url('assets/1/start.png') top left no-repeat;
			background-size: 100%;
		}
		
		@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
		@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

		.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
		.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			
		}

	<?php if ($language == 'ar_EG') { ?>
		#start { 
			text-align: center;
			padding: 43px 19px 10px 19px;
		}
	<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Welcome to the Basic Cells module"); ?>, <?php echo $user->getFirstName() . "!" ?><?php //echo $user->getFirstName() . "!" ?></h1>
						<a href="2.php" id="start" class="pulse"><?php echo _("Start"); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
