<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Reproduction'); ?></title>
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
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/easeljs-0.6.0.min.js"></script>
<script src="scripts/tweenjs-0.4.0.min.js"></script>
<script src="scripts/movieclip-0.6.0.min.js"></script>
<script src="scripts/preloadjs-0.3.0.min.js"></script>
<script src="scripts/2.js"></script>

<script>
var canvas, stage, exportRoot;

function init() {
	canvas = document.getElementById("canvas");
	fitToContainer(canvas);
	images = images||{};

	var manifest = [
		{src:"images/2/copy.png", id:"copy"},
		{src:"images/2/copy_1.png", id:"copy_1"},
		{src:"images/2/copy_2.png", id:"copy_2"},
		{src:"images/2/copy_3.png", id:"copy_3"},
		{src:"images/2/copy_4.png", id:"copy_4"},
		{src:"images/2/copy_5.png", id:"copy_5"},
		{src:"images/2/copy_6.png", id:"copy_6"},
		{src:"images/2/copy_7.png", id:"copy_7"},
		{src:"images/2/copy_8.png", id:"copy_8"},
		{src:"images/2/BackgroundImage.png", id:"BackgroundImage"},
		{src:"images/2/BackgroundImage_1.png", id:"BackgroundImage_1"},
		{src:"images/2/BackgroundImage_2.png", id:"BackgroundImage_2"},
		{src:"images/2/flattoneImage.png", id:"flattoneImage"},
		{src:"images/2/flattoneImage_1.png", id:"flattoneImage_1"},
		{src:"images/2/flattoneImage_2.png", id:"flattoneImage_2"},
		{src:"images/2/flattoneImage_3.png", id:"flattoneImage_3"},
		{src:"images/2/flattoneImage_4.png", id:"flattoneImage_4"},
		{src:"images/2/flattoneImage_5.png", id:"flattoneImage_5"}
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
h1 { font-size: 35px; color: #fff; }
p { color: #fff; }
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #75abca; }
.wrap { position: relative; border-left: 1px dashed #99621f; border-right: 1px dashed #99621f;  }
.bg { position: relative; z-index: 10; }
.buttons, .buttons-back { display: none; }
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>
		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... reproduction"); ?></h1>
				<p><?php echo _("You have a family, what about plants and animals? Do they have families too? Think about plants and animals having parents and then having children of their own. The ability to reproduce ensures that families continue into the future. This is true for all of nature. The varieties of ways in which reproduction occurs is nothing short of amazing."); ?></p>
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
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Are you ready, '); echo $user->getFirstName();?>?</strong></section></section> <!-- Change to student name soon -->
	<?php include("setlocale.php"); ?>
</body>
</html>

