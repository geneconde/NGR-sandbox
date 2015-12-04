<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'fossils';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Fossils'); ?></title>
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
	html, body { overflow: hidden; }
	h1 { color: #8B8350; padding: 20px 0 0; text-align: center; }
	.wrap { border-color: #beb482; }
	.bg { background-image: url('images/1/bg.jpg'); }
	#start {
	    position: absolute;
	    bottom: 1%;
	    left: 37%;
	    width: 20%;
	    height: 16%;
	    display: block;
	    padding: 9% 0 1% 34px;
	    font-size: 34px;
	    color: #8B8350;
	    background: url('images/1/start.png') top left no-repeat;
	    background-size: 100% 100%;
	}
	@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
	@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

	.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
	.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

	html[dir="rtl"] h1 { text-align: center; }
	html[dir="rtl"] #start { text-align: left; }
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation: portrait) {
		#start {
		    bottom: 5%;
		    width: 25%;
		    height: 12%;
		    padding: 11% 0 0% 34px;
		}
	}
	@media only screen and (max-width: 1250px) {
		.bg { background-size: 100% calc(100% - 32px)!important; background-position: 0 34px; }
		h1 { padding-top: 40px; }
	}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _('Welcome to the Fossils module'); ?>, <?php echo $user->getFirstName() ?>!</h1>
				<a href="2.php" id="start" class="pulse"><?php echo _('Start'); ?></a>
			</div>				
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
