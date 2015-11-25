<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		h1 { color: #121f4d; padding-top: 20px; }
		.wrap { position: relative; border-left: 1px dashed #84bff5; border-right: 1px dashed #84bff5; }
		.bg { background-image: url(images/1/bg.jpg); }
		#wire { background: url(images/1/wire.png) no-repeat; position: absolute; width: 100%; height: 150px; bottom: 0; }
		#start { display: block; width: 107px; height: 52px; color: #fff; font-size: 22px; position: absolute; bottom: 32px; right: 45px; }
		.blink { color: #fff !important; }
		#start:hover { background-position: left bottom; }

		<?php if ($language == 'es_ES') : ?>
			#start { font-size: 14px; }
		<?php endif; ?>

		<?php if ($language == 'zh_CN') : ?>
			#start { right: 37px; }
		<?php endif; ?>

		html[dir="rtl"] #start { right:113px; }
		html[dir="rtl"] h1 { text-align:center; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
			h1 { padding-top: 35px; }
			#start { right: 60px !important; bottom: 25px !important; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			h1 { padding-top: 35px; }
			#start { bottom: 45px; right: 25px; }
			html[dir="rtl"] #start { right: 82px; font-size: 40px; bottom: 50px; }
		}
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% 97%; background-position-y: 32px; }
			h1 { padding-top: 50px !important; }
		}
		@media screen and (max-width: 905px) {
			#wire { background-size: 122% 100%; }
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg"><h1 class="center"><?php echo _("Welcome to the Energy and its Forms module") . ', ' . $user->getFirstName() . '!'; ?></h1></div>
		<div id="wire"><a href="2.php" id="start"><span class="blink"><?php echo _("Start"); ?></span></a></div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/blink.js"></script>
	<script>$('.blink').blink({ speed: 500, blinks: 1000 });</script>
</body>
</html>
