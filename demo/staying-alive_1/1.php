<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?><?php if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
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
h1 { color: #3887CA; padding: 20px 0 0; text-align: center; }
.wrap { border-color: #73E8E2; }
.bg { background-image: url('images/1/bg.jpg'); overflow: hidden; }

#start { position: absolute;
top: 520px;
left: 520px;
width: 105px;
height: 121px;
display: block;
padding: 0 10px 10px 28px;
font-size: 35px;
color: #DA5383;
background: url('images/1/start.png') top left no-repeat;
background-size: 100%; }

@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

html[dir="es"] #start { padding: 12px 10px 10px 23px; top: 520px; font-size: 25px; }
html[dir="rtl"] .bg h1 { font-size: 33px; }
html[dir="rtl"] #start { padding: 0 33px 10px 1px; width: 80px; top: 550px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px; }
	#start { top: 620px; left: 390px; }
	html[dir="es"] #start { top: 620px; }
	html[dir="rtl"] #start { top: 620px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#start {top: 110px;left: 275px;}
}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Welcome to the Staying Alive module"); ?>, <?php echo $user->getFirstName() . "!" ?> </h1>
				<a href="2.php" id="start" class="pulse"><?php echo _("Start"); ?></a>
			</div>				
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
