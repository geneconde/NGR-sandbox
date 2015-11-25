<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { text-align: center; color: #D8199B; padding-top: 76px; }
.wrap { border-left: 1px dashed #82750f; border-right: 1px dashed #82750f; }
.bg { background: url('images/1/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#start { position: absolute; bottom: 20px; right: 20px; width: 96px; height: 72px; display: block; padding: 60px 0 0 14px; font-size: 34px; color: #3c0000; background: url('images/1/start.png') top left no-repeat; 
} 

@-webkit-keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }
@keyframes pulse { 25% { -webkit-transform: scale(1.1); transform: scale(1.1); } 75% { -webkit-transform: scale(0.9); transform: scale(0.9); } }

.pulse { display: inline-block; -webkit-transform: translateZ(0); transform: translateZ(0); box-shadow: 0 0 1px rgba(0, 0, 0, 0); }
.pulse:hover, .pulse:focus, .pulse:active { -webkit-animation-name: pulse; animation-name: pulse; -webkit-animation-duration: 1s; animation-duration: 1s; -webkit-animation-timing-function: linear; animation-timing-function: linear; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; }

<?php if ($language == 'es_ES') : ?>
	#start { font-size: 26px; padding: 67px 0 0 11px; }
<?php endif; ?>

html[dir="rtl"] #start { padding: 60px 30px 0 0; font-size: 61px; }
html[dir="rtl"] h1 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Welcome to the Biodiversity module").", "; echo $user->getFirstName() . '!'; ?></h1> <!-- Change to student name soon -->
			<a href="2.php" id="start" class="pulse"><?php echo _("Start"); ?></a>
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
