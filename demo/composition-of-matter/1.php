<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
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
h1 { text-align: center; padding-top: 20px; color: #ee6420; }
.bg { background: url('images/1/bg.png') no-repeat; position: relative; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #e5be36; border-right: 1px dashed #e5be36; }
#start { 
	position: absolute; top: 360px; right: 22px; display: block; padding: 6px 0 6px 26px; font-size: 34px; color: #fff; background: url('images/1/start.png') top left no-repeat; width: 148px; height: 49px;
	-webkit-animation-name: spaceboots;
	-webkit-animation-duration: 0.8s;
	-webkit-transform-origin:50% 50%;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
	-moz-animation-name: spaceboots;
	-moz-animation-duration: 0.8s;
	-moz-transform-origin:50% 50%;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: linear;
} 
#start:hover { background-position: bottom left; }
@-webkit-keyframes spaceboots {
	0% { -webkit-transform: translate(2px, 1px) rotate(0deg); }
	10% { -webkit-transform: translate(-1px, -2px) rotate(-1deg); }
	20% { -webkit-transform: translate(-3px, 0px) rotate(1deg); }
	30% { -webkit-transform: translate(0px, 2px) rotate(0deg); }
	40% { -webkit-transform: translate(1px, -1px) rotate(1deg); }
	50% { -webkit-transform: translate(-1px, 2px) rotate(-1deg); }
	60% { -webkit-transform: translate(-3px, 1px) rotate(0deg); }
	70% { -webkit-transform: translate(2px, 1px) rotate(-1deg); }
	80% { -webkit-transform: translate(-1px, -1px) rotate(1deg); }
	90% { -webkit-transform: translate(2px, 2px) rotate(0deg); }
	100% { -webkit-transform: translate(1px, -2px) rotate(-1deg); }
}
@-moz-keyframes spaceboots {
	0% { -moz-transform: translate(2px, 1px) rotate(0deg); }
	10% { -moz-transform: translate(-1px, -2px) rotate(-1deg); }
	20% { -moz-transform: translate(-3px, 0px) rotate(1deg); }
	30% { -moz-transform: translate(0px, 2px) rotate(0deg); }
	40% { -moz-transform: translate(1px, -1px) rotate(1deg); }
	50% { -moz-transform: translate(-1px, 2px) rotate(-1deg); }
	60% { -moz-transform: translate(-3px, 1px) rotate(0deg); }
	70% { -moz-transform: translate(2px, 1px) rotate(-1deg); }
	80% { -moz-transform: translate(-1px, -1px) rotate(1deg); }
	90% { -moz-transform: translate(2px, 2px) rotate(0deg); }
	100% { -moz-transform: translate(1px, -2px) rotate(-1deg); }
}

html[dir="rtl"] #start { right: -50px; padding: 6px 90px 6px 0; text-align: center; font-size: 38px; }
html[dir="rtl"] h1 { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#start { top: 550px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _('Welcome to the Composition of Matter module,'). ' '; echo $user->getFirstName(); ?></h1>
			<a href="2.php" id="start"><?php echo _('Start');?></a>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Let\'s begin.');?></strong></section></section>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
