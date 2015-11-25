<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(2, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<title><?php echo _("Staying Alive"); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/svgcomponent.css" />
	<link rel="stylesheet" href="css/responsiveslides.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.blink.min.js"></script>
	<script src="js/easeljs-0.6.0.min.js"></script>
	<script src="js/tweenjs-0.4.0.min.js"></script>
	<script src="js/movieclip-0.6.0.min.js"></script>
	<script src="js/preloadjs-0.3.0.min.js"></script>
	<script src="js/2.js"></script>
	<script>
		var canvas, stage, exportRoot;

		function init() {
			canvas = document.getElementById("canvas");
			fitToContainer(canvas);
			images = images||{};

			var manifest = [
				{src:"assets/2/flatflattoneflatImage.png", id:"flatflattoneflatImage"},
				{src:"assets/2/flattoneImage.png", id:"flattoneImage"}
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
		.bg h1 { color: #8D7861; }
		.wrap { position: relative; border-color: #ae8c76; }
		.bg { position: relative; z-index: 10; }
		#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #ba9885; }
		html[dir="rtl"] .bg h1 { text-align: right; }
		.buttons, .buttons-back { display: none; }

		@media screen and (min-height: 1366px) { h1 { padding-top: 30px; } }
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#canvas { margin-top: -34px !important; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			#canvas { background: #937361 }
		}
	</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>

		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... staying alive"); ?></h1>
				<p><?php echo _("Bears hibernate; they sleep through the harsh winter.  Their heartbeats and breathing slow almost to a stop. They don't eat or drink for months at a time, and they are even able to recycle urine and protein.  Hibernation is also when baby bears are born. By the time the new mother bear wakes up from hibernation, her cubs are around two months old, able to keep up with her, begin to learn, and explore their surroundings."); ?></p>
				<p><?php echo _("As the bear cubs spend the following months with their mother, they learn from her how to find food, how to keep safe from danger, and how to protect themselves when necessary. In essence, they learn how to survive in their environment. Their survival chances are influenced by the amount of food and space available, the population of other bears, and interactions with other species, including humans. How do humans impact the survival of animals in the wilderness?"); ?></p>
			</div>				
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName() . "?" ?></strong></section></section>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
