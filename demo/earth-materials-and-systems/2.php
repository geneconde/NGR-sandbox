<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/space.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<!--<script src="scripts/easeljs-0.6.0.min.js"></script>
<script src="scripts/tweenjs-0.4.0.min.js"></script>
<script src="scripts/movieclip-0.6.0.min.js"></script>
<script src="scripts/preloadjs-0.3.0.min.js"></script>
<script src="scripts/2.js"></script>-->
<script src="scripts/global.js"></script>
<script>
var canvas, stage, exportRoot;

function init() {
	canvas = document.getElementById("canvas");
	fitToContainer(canvas);
	images = images||{};

	var manifest = [
		{src:"images/2/Bitmap10.jpg", id:"Bitmap10"},
		{src:"images/2/boy.png", id:"boy"},
		{src:"images/2/flattoneImage.png", id:"flattoneImage"}
	];

	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", handleFileLoad);
	loader.addEventListener("complete", handleComplete);
	loader.loadManifest(manifest);
}

function handleFileLoad(evt) {
	if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
}

function handleComplete() {
	exportRoot = new lib._2();

	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	stage.update();

	createjs.Ticker.setFPS(24);
	createjs.Ticker.addEventListener("tick", stage);
}

function fitToContainer(canvas) {
	canvas.style.width='99.6%';
	canvas.style.height='100%';
	
	canvas.width  = canvas.offsetWidth;
	canvas.height = canvas.offsetHeight;
}
</script>
<style>
h1 { color: #ADE8FF; }
.wrap { position: relative; border-color: #47a7c7; }
.bg { position: relative; z-index: 10; background: #000 url(images/2/bg.jpg) 120px bottom no-repeat; }
.bg p { font-size: 22px; color: #fff; }
.bg > div h1, .bg > div p { position: relative; z-index: 2; }

#animation { background: transparent; position: absolute; width: 900px; z-index: 1; height: 670px; margin-left: -23px; overflow:hidden;}
#animation span { text-indent: -9999px; }
//#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #fff; } 
.buttons, .buttons-back { display: none; }
</style>
</head>
<!--<body onload="init();">-->
<body>
	<div class="wrap">
		<!--<canvas id="canvas"></canvas>-->

		<div class="bg">
			<div>
				<div id="animation">
					<span id="stars">galaxy</span>
					<span id="stars-2">far</span>
					<span id="small-stars">far</span>
					<span id="small-stars-2">away&hellip;</span>
				</div>

				<h1><?php echo _("Thinking about... earth materials and systems"); ?></h1>

				<p><?php echo _("Pretend you're an astronaut looking at the earth from outer space. What is the first thing you notice about the earth? It looks like a beautiful marble in space, and it's mostly blue. That's why some scientists call Earth the \"Blue Planet\", but you can also see three other colors that make up the earth too. What colors are they? And what earth materials do you think make up those colors?"); ?></p>

				<p><?php echo _("The earth is one huge system that is made up of four subsystems that all interact to make our planet the beautiful, livable place we call home."); ?></p>
			</div>				
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _('Next'); ?>">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> Raina?</strong></section></section>

	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
