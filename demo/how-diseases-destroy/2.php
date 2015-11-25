<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("How Diseases Destroy"); ?></title>
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<style>
	html { background-color: #FFFFFF; }
	body { display: none; }	
	.buttons, .buttons-back { display: none; }
	p { padding: 0 10px; color:black; text-align:left !important;}
	.wrap { padding: 0; position: relative; border-left: 1px dashed #913B18; border-right: 1px dashed #913B18;}
    .inner { 
	  background-color: #913B18; 
	  margin: 0 auto;
  	max-width: 892px;
	  height: 100%;
  }
		.bg { position: relative; z-index: 2; }
		.bg h1 { color: #ff4700; font-size:35px;}
		.bg div { background-color: rgba(255, 255, 255, .7); padding: 10px 0;
      border-radius: 10px; }
    #canvas { position: absolute; z-index: 1; overflow: hidden; width: 892px !important; }

	<?php if ($language == 'es_ES'): ?>
		.bg p { font-size: 20px; }
	<?php endif; ?>
	
	html[dir="rtl"] p { text-align: right !important; }
	html[dir="rtl"] h1 { padding: 10px 10px 0 0; }
	
</style>
<script>
	var canvas, stage, exportRoot;

	function init() {
		canvas = document.getElementById("canvas");
		images = images||{};

		var manifest = [
			{src:"images/2/Bitmap1.jpg", id:"Bitmap1"},
			{src:"images/2/Bitmap10.jpg", id:"Bitmap10"},
			{src:"images/2/Bitmap11.jpg", id:"Bitmap11"},
			{src:"images/2/Bitmap2.jpg", id:"Bitmap2"},
			{src:"images/2/Bitmap3.jpg", id:"Bitmap3"},
			{src:"images/2/Bitmap4.jpg", id:"Bitmap4"},
			{src:"images/2/Bitmap5.jpg", id:"Bitmap5"},
			{src:"images/2/Bitmap6.jpg", id:"Bitmap6"},
			{src:"images/2/Bitmap7.jpg", id:"Bitmap7"},
			{src:"images/2/Bitmap8.jpg", id:"Bitmap8"},
			{src:"images/2/Bitmap9.jpg", id:"Bitmap9"}
		];

		fitToContainer(canvas);

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
		<div class="inner">
			<canvas id="canvas" width="900" height="200"></canvas>

			<div class="bg">
				<h1><?php echo _("Thinking about... how diseases destroy"); ?></h1>

				<p><?php echo _("Why do you have the flu? You were feeling just fine right before getting sick. What happened? An infectious disease entered your body and upset its normal healthy state. Most diseases are caused by bacteria or viruses.  Both are too small to be seen with the naked eye. The human body has a number of mechanisms that it uses to protect itself against infectious diseases. The first of these mechanisms is skin. So if the skin gets a cut or scrape, there is a chance for disease to develop. Can diseases enter our bodies? How does our body fight them or not let them enter? You will find this out and more in this review."); ?></p>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/nextb.png"></a>
	</div>
	<div class="buttons" title="<?php echo _("Next"); ?>">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next-screen.png"></a>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName() . "?" ?></strong></section></section>
	<?php require("setlocale.php"); ?>
</body>
<script src="scripts/easeljs.js"></script>
<script src="scripts/tweenjs.js"></script>
<script src="scripts/preloadjs.js"></script>
<script src="scripts/movieclip.js"></script>
<script src="scripts/2.js"></script>
</html>
