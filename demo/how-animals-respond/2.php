<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>

		p { padding: 0 10px; text-align: left; }
		img.next { display: block; }
		.wrap { border-left: 1px dashed #D4336E; border-right: 1px dashed #D4336E; padding: 0; position: relative; }
		.inner { position: relative; background-color: #aec24e; margin: 0 auto; max-width: 896px; height: 100%; }
		.inner h1 { color: #d4336e; text-align: left; }
		.inner p { margin-bottom: 10px; padding: 0; }
		.inner div { left: 2%; right: 2%; width: 95%; margin: 0 auto; position: absolute; z-index: 4; }
		#canvas { position: absolute; z-index: 1; overflow: hidden; width: 896px !important; }
		.none { display: none !important; }
		html[dir="rtl"] .inner h1, html[dir="rtl"] p { text-align: right; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#canvas { width: 100% !important; }
			.inner div { z-index: 4; }
		}	
	</style>
</head>

<body onload="init();">
	<div class="wrap">
		<div class="inner">
			<div>
				<h1><?php echo _("Thinking about... how animals respond"); ?></h1>
				<p><?php echo _("Did you ever wonder how we scream when we are scared and eat when we are hungry? Did you learn that in school? What about how to solve a math problem? How did you learn to do that?"); ?></p>
				<p><?php echo _("People and animals are able to respond to their environments in some manner.  When we sense external danger or internal hunger we respond. Animals have brains or structures that allow them to sense the world around them, and sometimes even remember and learn as well."); ?></p>
				<p><?php echo _("Nerve cells and tissues are similar in all animals, having many structures in common.  Information is transmitted from place to place using a system of electricity and chemistry. This information may be used to form complex networks of neural cells, or even to stimulate muscles to move the organism in useful ways."); ?></p>
			</div>
			<canvas id="canvas" width="896" height="670"></canvas>
		</div>
	</div>

	<div class="none buttons-back"><a href="1.php" class="wiggle-right" title="<?php echo _("Back"); ?>"><img class="back" src="images/buttons/back.png"></a></div>
	<div class="none buttons"><a href="3.php" class="wiggle" title="<?php echo _("Next"); ?>"><img class="next" src="images/buttons/next.png"></a></div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>	

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready, ") . $user->getFirstName(); ?>!</strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/easeljs.js"></script>
	<script src="scripts/tweenjs.js"></script>
	<script src="scripts/preloadjs.js"></script>
	<script src="scripts/movieclip.js"></script>
	<script src="scripts/2.js"></script>
	<script src="scripts/global.js"></script>

	<script>
		var canvas, stage, exportRoot;

		function init() {
			canvas = document.getElementById("canvas");
			images = images||{};

			fitToContainer(canvas);

			var manifest = [
				{src:"images/2/bg.png", id:"bg"},
				{src:"images/2/off.png", id:"off"},
				{src:"images/2/on.png", id:"on"}
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
			start();
			stage.enableMouseOver(10);
			stage.update();

			createjs.Ticker.setFPS(24);
			createjs.Ticker.addEventListener("tick", stage);
		}

		function start() {
			exportRoot.dog.stop();
			exportRoot.man.stop();

			exportRoot.man.onClick = function(e) {
				exportRoot.dog.gotoAndPlay(21);
				exportRoot.man.gotoAndPlay(21);
			}

			exportRoot.man.onMouseOver = function(e) {
				 e.target.cursor = 'pointer';
			}
		}	

		function fitToContainer(canvas) {
			canvas.style.width ='100%';
			canvas.style.height='100%';
			canvas.width  = canvas.offsetWidth;
			canvas.height = canvas.offsetHeight;
		}
	</script>
</body>
</html>
