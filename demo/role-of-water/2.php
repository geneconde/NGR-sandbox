<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
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
		{src:"images/2/flatflatImage.png", id:"flatflatImage"},
		{src:"images/2/flattoneImage.png", id:"flattoneImage"},
		{src:"images/2/flattoneImage_0.png", id:"flattoneImage_0"},
		{src:"images/2/flattoneImage_1.png", id:"flattoneImage_1"},
		{src:"images/2/flattoneImage_2.png", id:"flattoneImage_2"},
		{src:"images/2/flatImage.png", id:"flatImage"},
		{src:"images/2/flatImage_1.png", id:"flatImage_1"}
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
h1 { color: #447C92; }
.wrap { position: relative; border-color: #0fe3ff; }
.bg { position: relative; z-index: 10; }
.bg p { font-size: 22px; }
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #aeac58; }

.buttons, .buttons-back { display: none; }
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>

		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... the role of water"); ?></h1>

				<p><?php echo _("There's a famous old poem called The Rime of the Ancient Mariner, with a couple of lines that say: \"Water, water, everywhere, But not a drop to drink\"."); ?></p>

				<p><?php echo _("But how can that be? How can you have water everywhere but none to drink? You're right. The key to the puzzle is in the name of the poem... The Rime of the Ancient Mariner. A mariner is another name for a sailor on the ocean. 'Mariner' is a word related to the word 'marine' – like if you wanted to be a marine scientist you'd be studying the ocean. So if you were a sailor on a ship on the ocean and ran out of water on the ship, you would be surrounded by water but there would be none to drink!! And that's because the ocean is composed of <span class='key'>salt water</span> and we only drink <span class='key'>fresh water</span> – water with no salt in it!! As a matter of fact, drinking salt water can be harmful if you drink too much and don't drink any fresh water. If you ever swam in salt water and swallowed a mouthful, you would know how bad it tastes. But don't worry – a mouthful won't hurt you. But fresh water is absolutely critical to your survival."); ?></p>
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="scripts/jpreloader.js"></script>


	
	<?php include("setlocale.php"); ?>
</body>
</html>