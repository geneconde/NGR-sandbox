<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		h1 { padding-left: 20px; }
		p { padding: 0 10px; text-align:left; }
		.wrap { padding: 0; position: relative; }
		.inner { background-color: #e6ac00; margin: 0 auto; max-width: 896px; height: 100%; }
		.bg { position: relative; z-index: 2; }
		.bg h1 { color: #ff4700; }
		.bg div { background-color: rgba(255, 255, 255, .7); padding: 10px 0; border-radius: 10px; }
		#canvas { position: absolute; z-index: 1; overflow: hidden; }
		
		html[dir="rtl"] p { text-align:right; }
		html[dir="rtl"] h1 { padding-right:30px; }
		.buttons, .buttons-back { display: none; }
		@media screen and (max-width: 1250px) {
			h1 { padding-top: 40px !important; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			.inner, #canvas { max-width: 1024px !important; }
			#canvas { width: 1024px !important; }
		}
	</style>
</head>

<body onload="init();">
	<div class="wrap">
		<div class="inner">
			<canvas id="canvas"></canvas>

			<div class="bg">
			<h1><?php echo _("Thinking about... energy and its forms"); ?></h1>
				<div><p><?php echo _("Have you ever heard someone say, \"I'm getting tired, I'm running out of energy\"? Does that mean they just need a rest? Maybe. But it probably means that they need something to eat and drink too. When your mom or dad&#39;s car runs low on fuel, the car does not need a rest, but it does need a kind of drink&#8211;called fuel. Both the food you eat and the fuel a car uses are forms of energy. There are many different forms of energy. And they are all related in some way."); ?></p></div>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="Back">
		<a href="1.php" class="wiggle-right" title="<?php echo _("Back"); ?>"><img class="back" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons" title="Next">
		<a href="3.php" class="wiggle" title="<?php echo _("Next"); ?>"><img class="next" src="images/buttons/next.png"></a>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,") . ' ' . $user->getFirstName(); ?></strong></section></section>

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
			exportRoot = new lib._2();

			fitToContainer(canvas);

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
</body>
</html>
