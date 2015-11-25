<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/easeljs-0.6.0.min.js"></script>
<script src="scripts/tweenjs-0.4.0.min.js"></script>
<script src="scripts/movieclip-0.6.0.min.js"></script>
<script src="scripts/preloadjs-0.3.0.min.js"></script>
<script src="scripts/2.js"></script>
<script>
var canvas, stage, exportRoot;

function init() {
	canvas = document.getElementById("canvas");
	fitToContainer(canvas);
	images = images||{};

	var manifest = [
		{src:"images/2/flattonImage.png", id:"flattonImage"},
		{src:"images/2/flattoneImage.png", id:"flattoneImage"},
		{src:"images/2/flattoneImage_1.png", id:"flattoneImage_1"},
		{src:"images/2/flattoneImage_2.png", id:"flattoneImage_2"},
		{src:"images/2/flattoneImage_3.png", id:"flattoneImage_3"},
		{src:"images/2/tonguetoneImage.png", id:"tonguetoneImage"}
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
h1 { font-size: 35px; color: #FCFFBD; }
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #e6a123; }
.wrap { position: relative; border-left: 1px dashed #ffb840; border-right: 1px dashed #ffb840;  }
.bg { position: relative; z-index: 10; }
.bg p { margin-bottom: 10px; }

<?php if($language == "es_ES") { ?>
		p { font-size:22px; }
<?php } ?>
.buttons, .buttons-back { display: none; }
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>
		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... changing to survive"); ?></h1>
				<p><?php echo _("Have you ever heard an older person tell you about days gone by? \"All of this area used to be a farm; there were no skyscrapers when I was growing up.\" The location has changed so much over the years that a person can barely tell it is the same place."); ?></p>
				<p><?php echo _("Think about the earth, do you think it has changed over billions of years? What could have caused some of those changes? What about the life forms on earth? Could they have changed as well?"); ?></p>
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
		<a href="1.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); echo $user->getFirstName() . '?'; ?></strong></section></section> <!-- Change to student name soon -->
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
