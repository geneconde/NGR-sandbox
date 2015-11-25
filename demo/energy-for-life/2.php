<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
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
		{src:"images/2/flattoneImage.png", id:"flattoneImage"},
		{src:"images/2/flattonetonetoneImage.png", id:"flattonetonetoneImage"},
		{src:"images/2/flattoneImage_1.png", id:"flattoneImage_1"},
		{src:"images/2/flattoneImage_2.png", id:"flattoneImage_2"},
		{src:"images/2/flattoneImage_3.png", id:"flattoneImage_3"},
		{src:"images/2/flattoneImage_4.png", id:"flattoneImage_4"},
		{src:"images/2/flattoneImage_5.png", id:"flattoneImage_5"},
		{src:"images/2/flattoneImage_6.png", id:"flattoneImage_6"},
		{src:"images/2/flattoneImage_7.png", id:"flattoneImage_7"},
		{src:"images/2/flattoneImage_0.png", id:"flattoneImage_0"},
		{src:"images/2/flattoneImage_0_1.png", id:"flattoneImage_0_1"},
		{src:"images/2/flattoneImage_0_2.png", id:"flattoneImage_0_2"},
		{src:"images/2/flattoneImage_0_3.png", id:"flattoneImage_0_3"},
		{src:"images/2/flattoneImage_1_1.png", id:"flattoneImage_1_1"}
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
h1 { font-size: 35px; color: #8F4D74; }
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #b84b6f; }
.wrap { position: relative; border-left: 1px dashed #fff598; border-right: 1px dashed #fff598; }
.bg { position: relative; z-index: 10; }
.buttons, .buttons-back { display: none; }
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>
		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... energy for life"); ?></h1>
				<p><?php echo _("Our cars need energy. Our homes need energy. We need energy for our phones and computers. When we run out of energy ourselves, we eat to get more energy. It takes energy to power the atmosphere and cause weather. Even plants need energy."); ?></p>
				<p><?php echo _("Where to get some? The answer is above us every day, even when we can't see it because of clouds. It's the sun. Think about how everything somehow gets energy from the sun. It's all linked together."); ?></p>
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); echo ' ' . $user->getFirstName() . '?'; ?></strong></section></section> <!-- Change to student name soon -->
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
