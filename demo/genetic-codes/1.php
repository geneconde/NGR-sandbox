<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'genetic-codes';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Genetic Codes"); ?></title>
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
h1 { color: #3088AA; padding: 20px 0 0; text-align: center; }
.wrap { border-color: #58d1f3; }
.bg { background-image: url('images/1/bg.jpg'); }

#start { position: absolute; top: 480px; left: 380px; width: 102px; height: 83px; display: block; padding: 44px 0 0 25px; font-size: 34px; color: #a3e4f9; background: url('images/1/start.png') top left no-repeat; } 

@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

html[dir="rtl"] #start {padding: 44px 0 0 40px;text-align: left;}
html[dir="rtl"] h1 {text-align: center;}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#start {
		position: absolute;
		top: 475px;
		left: 317px;
		width: 102px;
		height: 83px;
		display: block;
		padding: 44px 0 0 25px;
		font-size: 34px;
		color: #a3e4f9;
		background: url('images/1/start.png') top left no-repeat;
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
			<h1><?php echo _("Welcome to the Genetic Codes module"); ?>, <?php echo $user->getFirstName(); ?>!</h1>
				<a href="2.php" id="start" class="pulse"><?php echo _("Start"); ?></a>
			</div>				
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>

	<?php include_once "setlocale.php"; ?>
</body>
</html>
