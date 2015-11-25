<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/easeljs.js"></script>
<script src="scripts/tweenjs.js"></script>
<script src="scripts/preloadjs.js"></script>
<script src="scripts/movieclip.js"></script>
<script src="scripts/2.js"></script>
<style>
	h1 { color: #4FC0EE; padding: 10px; }
	p { padding: 0 10px; color: #111; }
	.wrap { padding: 0; }
	.inner { 
		background-color: #cfd89a; 
		margin: 0 auto;
		max-width: 894px;
		height: 100%;
	}
	.bg { position: relative; z-index: 4; }
	#canvas { position: absolute; z-index: 1; overflow: hidden; width: 894px !important; }

	html[dir=rtl] h1 { text-align: right; }
	html[dir=rtl] .bg p { text-align: right; }

	<?php if($language == 'es_ES'){ ?>
		p { text-align:left; }
	<?php } ?>
	.buttons, .buttons-back { display: none; }
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		h1 { padding-top: 35px; }
	}	
</style>
<script>
	var canvas, stage, exportRoot;

	function init() {
		canvas = document.getElementById("canvas");
		exportRoot = new lib._2();

		fitToContainer(canvas);

		stage = new createjs.Stage(canvas);
		stage.addChild(exportRoot);
		stage.update();

		createjs.Ticker.setFPS(24);
		createjs.Ticker.addEventListener("tick", stage);
	}

	function fitToContainer(canvas) {
		canvas.style.width ='100%';
		canvas.style.height='100%';
		
		canvas.width  = canvas.offsetWidth;
		canvas.height = canvas.offsetHeight;
	}
</script>
</head>

<body onload="init();">
	<div class="wrap">
		<div class="inner">
			<canvas id="canvas" width="894" height="670"></canvas>
			<div class="bg">
				<h1><?php echo _("Thinking about... being built to survive"); ?></h1>
				<p><?php echo _("Living things come in many shapes and forms. Among them are plants, microorganisms, fish, insects, birds, apes, reptiles, and humans. Within each kind is even more diversity. Think about it… there are hundreds of breeds of dogs, thousands of species of spiders, and around ten thousand types of birds. One thing common to the many kinds of living things in nature is that they are all uniquely built to survive. Yes, even you are built to survive! Think about different traits that help living things survive. What traits help humans survive?"); ?></p>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _("Next"); ?>">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo (ucfirst($user->getFirstName())."?"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
