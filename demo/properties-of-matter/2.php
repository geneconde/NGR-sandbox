<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/easeljs.js"></script>
<script src="scripts/tweenjs.js"></script>
<script src="scripts/preloadjs.js"></script>
<script src="scripts/movieclip.js"></script>
<script src="scripts/2.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
	h1 { color: #22436D; }
	.wrap { background-color: #fff; }
	.bg { padding-top: 420px; position: relative; z-index: 99; width: 100%; }
	.bg > div { width: 95%; }
	.bg p { font-size: 22px; color: #000; }
	#canvas { position: absolute; z-index: 1; overflow: hidden; width: 894px !important; margin: 0 auto; background: url('images/2/bg_back.png') no-repeat; background-size: 100% 100%; }
</style>
<script>
	var canvas, stage, exportRoot;
	function init() {
		canvas = document.getElementById("canvas");
		fitToContainer(canvas);
		images = images||{};

		var manifest = [
			{src:"images/2/bg.png", id:"bg"},
			{src:"images/2/glass.png", id:"glass"},
			{src:"images/2/panels.png", id:"panels"},
			{src:"images/2/sides.png", id:"sides"},
			{src:"images/2/smoke.png", id:"smoke"}
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
		canvas.style.width ='100%';
		canvas.style.height='100%';
		
		canvas.width  = canvas.offsetWidth;
		canvas.height = canvas.offsetHeight;
	}
</script>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas" width="898" height="670"></canvas>
				<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... the properties of matter"); ?></h1>
				<p><?php echo _("Can you make diamonds in the oven? Do pencils grow on trees? Some substances are naturally made, and others are manufactured (or made by humans). The substances that come from nature are changed to make them have different properties. Glass is made from natural sand; sand and glass each have very different characteristics or properties. Most naturally made material can be recycled in nature by itself. But <span class='key'>manufactured materials</span> need our help to be recycled. We can recycle glass, plastic, paper, and cans by taking them to a recycling center."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName() . "?" ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
