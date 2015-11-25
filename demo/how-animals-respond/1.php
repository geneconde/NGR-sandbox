<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
	h1 { padding-top: 20px; }
	.wrap { border-left: 1px dashed gray; border-right: 1px dashed gray; }
	.bg { background-image: url(images/1/bg.jpg); position: relative; }
	.blink { text-transform: none; color: #222 !important; }
	#start { position: absolute; bottom: 10px; right: 28px; font-size: 24px; }
	
	html[dir="rtl"] h1 { text-align: center; }
	html[dir="rtl"] #start { bottom:11px;right:36px; }
	<?php if($language == "es_ES") { ?>
		#start { right:15px; }
	<?php } ?>
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		h1 { padding-top: 35px; }
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		#start { bottom: 24px; right: 20px; }
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
		#start { bottom: 17px; }
	}		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<h1 class="center"><?php echo _("Welcome to How Animals Respond module"); ?>, <?php echo $user->getFirstName(); ?>!</h1>
			<a href="2.php" id="start"><span class="blink"><?php echo _("Start"); ?></span></a>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/global.js"></script>
	<script>$('.blink').blink({ speed: 500, blinks: 1000 });</script>
</body>
</html>
