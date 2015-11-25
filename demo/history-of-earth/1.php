<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
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
.bg h1 { color: #F9FF6E; padding: 90px 0 0 0; text-align: center; font-size: 30px; }
.wrap { border-color: #815530; }
.bg { background-image: url('images/1/bg.jpg'); }

#start-wrapper { width: 200px; height: 143px; position: absolute; top: 400px; right: 70px; } 
#start { background-size:100%; float: right; width: 110px; height:128px; display: block; font-size: 34px; color: #000; background: url('images/1/start.png') top left no-repeat; }
#start-wrapper span { bottom: 0;position: absolute;font-size: 45px; color: #CDB08D; } 

.animate { -webkit-animation-name: spaceboots; -webkit-animation-duration: 0.8s; -webkit-transform-origin:50% 50%; -webkit-animation-iteration-count: infinite; -webkit-animation-timing-function: linear; -moz-animation-name: spaceboots; -moz-animation-duration: 0.8s; -moz-transform-origin:50% 50%; -moz-animation-iteration-count: infinite; -moz-animation-timing-function: linear; }	

@-webkit-keyframes spaceboots { 0% { -webkit-transform: translate(2px, 1px) rotate(0deg); } 10% { -webkit-transform: translate(-1px, -2px) rotate(-1deg); } 20% { -webkit-transform: translate(-3px, 0px) rotate(1deg); } 30% { -webkit-transform: translate(0px, 2px) rotate(0deg); } 40% { -webkit-transform: translate(1px, -1px) rotate(1deg); } 50% { -webkit-transform: translate(-1px, 2px) rotate(-1deg); } 60% { -webkit-transform: translate(-3px, 1px) rotate(0deg); } 70% { -webkit-transform: translate(2px, 1px) rotate(-1deg); } 80% { -webkit-transform: translate(-1px, -1px) rotate(1deg); } 90% { -webkit-transform: translate(2px, 2px) rotate(0deg); } 100% { -webkit-transform: translate(1px, -2px) rotate(-1deg); } }

@-moz-keyframes spaceboots { 0% { -moz-transform: translate(2px, 1px) rotate(0deg); } 10% { -moz-transform: translate(-1px, -2px) rotate(-1deg); } 20% { -moz-transform: translate(-3px, 0px) rotate(1deg); } 30% { -moz-transform: translate(0px, 2px) rotate(0deg); } 40% { -moz-transform: translate(1px, -1px) rotate(1deg); } 50% { -moz-transform: translate(-1px, 2px) rotate(-1deg); } 60% { -moz-transform: translate(-3px, 1px) rotate(0deg); } 70% { -moz-transform: translate(2px, 1px) rotate(-1deg); } 80% { -moz-transform: translate(-1px, -1px) rotate(1deg); } 90% { -moz-transform: translate(2px, 2px) rotate(0deg); } 100% { -moz-transform: translate(1px, -2px) rotate(-1deg); } }

html[dir="rtl"] h1, html[dir="rtl"] #start { text-align: center; }
html[dir="rtl"] #start-wrapper span {right: 105px;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.bg h1 { padding-top: 127px; }
	#start-wrapper {top: 507px;}
}	

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Welcome to the History of Earth module,"); ?> <?php echo $user->getFirstName(); ?>!</h1>
				
				<div id="start-wrapper">
					<a href="2.php"><span><?php echo _("Start"); ?></span></a>
					<div id="start" class="animate"> </div>
				</div>
				
			</div>				
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
