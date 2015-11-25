<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #492585; padding: 10px 0 0; text-align: center; }
.wrap { border-color: #5a94d3; }
.bg { background-image: url('images/1/bg.jpg'); }

#start { position: absolute; top: 360px; right: 210px; width: 175px; height: 100px; display: block; padding: 145px 0 0 46px; font-size: 34px; color: #fff; background: url('images/1/start.png') top left no-repeat; } 

@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

html[dir="rtl"] #start {padding: 145px 60px 0 0; width: 115px;}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#start {
		position: absolute;
		top: 439px;
		right: 100px;
		width: 175px;
		height: 100px;
		display: block;
		padding: 145px 0 0 46px;
		font-size: 34px;
		color: #fff;
		background: url('images/1/start.png') top left no-repeat;
		}
	.bg {
		background-image: url('images/1/bg.jpg');
		background-repeat: no-repeat;
		background-size: 118% 101%;
		width: 100%;
		height: 100%;
		position: relative;
		background-position: 21% 100%;
	}

}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Welcome to the Natural Resources module"); ?>, <?php echo $user->getFirstName(); ?>!</h1>
				<a href="2.php" id="start" class="pulse"><?php echo _("Start"); ?></a>
			</div>				
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin"); ?>, <?php echo $user->getFirstName(); ?>!</strong></section></section>

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
