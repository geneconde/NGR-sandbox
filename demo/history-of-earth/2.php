<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of the Earth"); ?></title>
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
		{src:"images/2/bonesImage.png", id:"bonesImage"},
		{src:"images/2/bonesImage_0.png", id:"bonesImage_0"},
		{src:"images/2/flattonetoneImage.png", id:"flattonetoneImage"},
		{src:"images/2/flattonetoneImage_1.png", id:"flattonetoneImage_1"},
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
h1 { color: #3a2902; }
.wrap { position: relative; border-color: #E7DE97; }
.bg { position: relative; z-index: 10; }
.bg p { font-size: 22px; }
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #897452; }
.buttons, .buttons-back { display: none; }
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>

		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... history of the earth"); ?></h1>
				<p><?php echo _("Everybody likes dinosaurs. They're very interesting and sometimes scary. If you've ever seen the movie Jurassic Park you know what I mean. Geologists are scientists that study the earth. Paleontologists are a kind of geologists that study fossils - like dinosaurs. Geologists and paleontologists love to go on great outdoor adventures to study the earth and its rocks and fossils. Kids and geologists go to the Dinosaur National Monument in Colorado to have fun and learn about dinosaurs too. Don't worry, dinosaurs aren't alive anymore - they're all fossils. That means, all that's left of them are their preserved \"fossilized\" bones and tracks."); ?></p>
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
	<?php include("setlocale.php"); ?>	
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
