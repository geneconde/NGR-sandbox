<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(1, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
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
h1 { text-align: center; padding-top: 10px; color: #4B7057; }
.bg { background: url('images/1/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#start { position: absolute; top: 560px; right: 30px; width: 105px; height: 66px; display: block; padding: 27px 0 0 25px; font-size: 34px; color: #fff; background: url('images/1/start.png') top left no-repeat; 
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

html[dir="rtl"] h1 { text-align: center; }
html[dir="rtl"] #start { padding: 27px 25px 0 0; }
html[dir="rtl"] #start span { padding-right: 45px; }
<?php if($language == "es_ES") { ?>
	#start { font-size: 27px; width: 119px; padding: 27px 0 0 14px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
		<h1><?php echo _("Welcome to the Ecosystems Interactions module") . ', ' . $user->getFirstName(); ?>!</h1>
		<a href="2.php" id="start"><span><?php echo _("Start"); ?></span></a>
		</div>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin"); ?>!</strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
