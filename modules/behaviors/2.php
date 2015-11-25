<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behaviors'); ?></title>
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
<script src="scripts/easeljs-0.6.0.min.js"></script>
<script src="scripts/tweenjs-0.4.0.min.js"></script>
<script src="scripts/movieclip-0.6.0.min.js"></script>
<script src="scripts/preloadjs-0.3.0.min.js"></script>
<script src="scripts/2.js"></script>
<script src="scripts/global.js"></script>
<script>
var canvas, stage, exportRoot;

function init() {
	canvas = document.getElementById("canvas");
	fitToContainer(canvas);
	images = images||{};

	var manifest = [
		{src:"images/2/flatflatflatflattoneImage.png", id:"flatflatflatflattoneImage"},
		{src:"images/2/flattonImage.png", id:"flattonImage"},
		{src:"images/2/flattonelightImage.png", id:"flattonelightImage"},
		{src:"images/2/flattoneImage.png", id:"flattoneImage"},
		{src:"images/2/flattoneImage_1.png", id:"flattoneImage_1"},
		{src:"images/2/flattoneImage_0.png", id:"flattoneImage_0"},
		{src:"images/2/flattoneImage_0_1.png", id:"flattoneImage_0_1"},
		{src:"images/2/flattoneImage_1_1.png", id:"flattoneImage_1_1"},
		{src:"images/2/flattoneImage_1_2.png", id:"flattoneImage_1_2"},
		{src:"images/2/flattoneImage_2.png", id:"flattoneImage_2"},
		{src:"images/2/flattoneImage_2_1.png", id:"flattoneImage_2_1"},
		{src:"images/2/flattoneImage_3.png", id:"flattoneImage_3"},
		{src:"images/2/flattoneImage_4.png", id:"flattoneImage_4"},
		{src:"images/2/flattoneImage_5.png", id:"flattoneImage_5"},
		{src:"images/2/flattoneImage_6.png", id:"flattoneImage_6"}
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
h1 { color: #F3A55C; }
.wrap { position: relative; border-color: #a5ba50; }
.bg { position: relative; z-index: 10; }
.bg p { background: rgba(190, 199, 145, .5); border-radius: 5px; padding: 10px; }
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #a5ba50; }
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>
  
		<div class="bg">
			<div>
				<h1><?php echo _('Thinking about... behaviors'); ?></h1>
				<p><?php echo _("Have you ever thought about the 'why' behind your behavior? Like, why do you have to learn some things, while other things seem to come naturally or without thinking? Have you ever wondered just how much of your behavior is due to what you have learned and how much of it you did not have to learn because it was already part of you from birth? What about the behaviors of other living things? Can animals learn too?"); ?></p>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _("Next"); ?>">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo ($user->getFirstName()); ?>?</strong></section></section> <!-- Change to student name soon -->

	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
