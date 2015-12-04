<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Electric Circuits"); ?></title>

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
		h1 { text-align: center; color: #F90074; margin-top: 3%; font-size: 1.4em;}
		.wrap { border-color: #F34345; }
		.bg { background-image: url(assets/1/1.jpg); overflow: hidden;}
		#buttons .next { display: none; }

		#start {
		    position: fixed;
		    bottom: 16%;
		    left: 44.5%;
		    width: 105px;
		    height: 95px;
		    display: block;
		    padding: 5px 0px 10px 40px;
		    font-size: 28px;
		    color: #F90074;
		    background: url('assets/1/Start.png') top left no-repeat;
		    background-size: 100%;
		}
		
		@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
		@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

		.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
		.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 32px)!important; background-position: 0 34px; }
			#start { bottom: 14%; left: 41%; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#start { bottom: 19%; }
		}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#start {
				left: 42%;
			    width: 127px;
			    text-align: center;
			    padding: 20px;
			    line-height: 20px;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Welcome to the Electric Circuits module"); ?>, <?php echo $user->getFirstName() . "!" ?></h1>
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
