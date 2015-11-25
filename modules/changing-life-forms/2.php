<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
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
		{src:"images/2/beebodyImage.png", id:"beebodyImage"},
		{src:"images/2/flatflattonetonetoneImage.png", id:"flatflattonetonetoneImage"},
		{src:"images/2/flatflatImage.png", id:"flatflatImage"},
		{src:"images/2/flattonetonetonetonetonetonetoneImage.png", id:"flattonetonetonetonetonetonetoneImage"},
		{src:"images/2/flattonetonetonetonetoneImage.png", id:"flattonetonetonetonetoneImage"},
		{src:"images/2/flattonetonetonetonetoneImage_1.png", id:"flattonetonetonetonetoneImage_1"},
		{src:"images/2/flattonetonetoneImage.png", id:"flattonetonetoneImage"}
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

h1 { color: #CA8EAE; padding-top: 20px; }
.bg p { font-size: 20px; }
.wrap { position: relative; border-color: #df7eb2; }
.bg { position: relative; z-index: 10; }
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #fffcf0; }
.buttons, .buttons-back { display: none; }
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>

		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... changing life forms"); ?></h1>
				<p><?php echo _("Look at the flowers below. Don't they look similar to each other? They are all actually Mediterranean bee orchids. But they each belong to a separate species. Each flower is pollinated by a different kind of insect. They are so similar, yet they are not the same species of flower; they cannot interbreed."); ?></p>
				<p><?php echo _("There are many examples of living things similar to each other, but they have certain differences that set them apart. All the variety along with similar features led scientists to come up with different explanations about how living things change over time."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName(); ?>?</strong></section></section> <!-- Change to student name soon -->

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
