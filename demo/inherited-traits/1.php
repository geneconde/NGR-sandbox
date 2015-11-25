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

	<title><?php echo _("Inherited Traits"); ?></title>

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
		.wrap > .bg { overflow: hidden !important; }
		h1 { 
			text-align: center;
			color: #654321;
			margin-top: 3%; }
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/1/bg.jpg); }
		#buttons .next { display: none; }		
		#start { 
			position: absolute;
			top: 408px;
			left: 41.5%;
			width: 137px;
			height: 113px;
			display: block;
			padding: 40px 5px 5px 5px;
			font-size: 35px;
			color: #654321;
			background: url('assets/1/start.png') top left no-repeat;
			/* background: #361830; */
			background-size: 100%;
			text-align: center;
		}
		
		@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
		@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

		.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
		.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }
		

		@media (orientation: portrait){
			#start {
			  position: absolute;
			  top: 634px;
			  left: 39.5%;
			  width: 149px;
			  height: 219px;
			  display: block;
			  padding: 40px 5px 5px 5px;
			  font-size: 67px;
			  color: #654321;
			  background: url('assets/1/start.png') top left no-repeat;
			  background-size: 155px 193px;
			  text-align: center;
			}
			h1 {
			  padding-top: 129px;
			  font-size: 35px;
			}
		}

		@media only screen and (max-width: 1250px){
			.lang-menu {
				background-color: #966F33 !important;
			}

			.lang-menu a {
  				background-color: #966F33;
			}
		}
		
		@media (max-width: 768px){
			#start {
			  position: absolute;
			  top: 447px;
			  left: 297px;
			}
		}
		@media only screen and (max-device-width: 1024px) and (min-device-width: 768px){
			#start {
			  position: absolute;
			  top: 509px;
			  left: 41.5%;
			  width: 161px;
			  height: 113px;
			  display: block;
			  padding: 40px 5px 5px 5px;
			  font-size: 50px;
			  color: #654321;
			  background: url('assets/1/start.png') top left no-repeat;
			  background-size: 100%;
			  text-align: center;
			}
		}
		
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1){
			#start {
				  position: absolute;
				  top: 669px;
				  left: 282px;
				  width: 161px;
				  height: 150px;
				  display: block;
				  padding: 40px 5px 5px 5px;
				  font-size: 65px;
				  color: #654321;
				  background: url('assets/1/start.png') top left no-repeat;
				  background-size: 170px 192px;
				  text-align: center;
				}
		}
		@media screen and (max-width: 1250px){ .bg { background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Welcome to the Inherited Traits module"); ?>, <?php echo $user->getFirstName() . "!" ?><?php //echo $user->getFirstName() . "!" ?></h1>
							<a href="2.php" id="start" class="pulse">
								<?php echo _("Start"); ?>							
							</a>
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
