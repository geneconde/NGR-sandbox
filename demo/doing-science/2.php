<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/easeljs.js"></script>
<script src="scripts/tweenjs.js"></script>
<script src="scripts/preloadjs.js"></script>
<script src="scripts/movieclip.js"></script>
<script src="scripts/2.js"></script>
<style>
	h1 { padding: 10px; color: #7E9AAA; }
	p { padding: 0 10px 20px; color:black;}

	h1,p { background-color: rgba(255, 255, 255, .9); }
	.wrap { border-left: 1px dashed #E0E8F5; border-right: 1px dashed #E0E8F5; }
	.bg { position: relative; z-index: 4; padding-top: 60px; }
	#canvas { background-color: #E0E8F5; position: absolute; z-index: 1; overflow: hidden; width: 894px !important; }
	.buttons, .buttons-back { display: none; }
</style>
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
</head>

<body onload="init();">
	<div class="wrap">
		<canvas id="canvas" width="894" height="670"></canvas>
		
		<div class="bg">
			<h1><?php echo _("Thinking about... doing science");?></h1>
			<p><?php echo _("You probably get to do some science investigations at school. But did you know that you are probably doing / using scientific skills and practices at other times as well? When you have to make a decision or solve a problem in your everyday life, whether you know it or not, you are probably using many of the same skills and practices that scientists use when they do science. What do you think some of these scientific practices are?");?></p>
		</div>
	</div>
	
	<div class="buttons" title="<?php echo _("Next"); ?>">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>
	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div id="buttons">
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready").", ".$user->getFirstName();?>?</strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
