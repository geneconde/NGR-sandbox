<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
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
		{src:"images/2/flattoneImage.png", id:"flattoneImage"},
		{src:"images/2/flattoneImage_1.png", id:"flattoneImage_1"},
		{src:"images/2/flattoneImage_2.png", id:"flattoneImage_2"},
		{src:"images/2/flattoneImage_3.png", id:"flattoneImage_3"}
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
p { font-size:22px; }
/* p { background: rgba(255, 255, 255, .5); margin-bottom: 20px; border-radius: 5px; padding: 10px; } */
#canvas { margin: 0 auto; position: absolute; z-index: 2; background: #e6ab6a; }
.wrap { position: relative; border-left: 1px dashed #f4b97f; border-right: 1px dashed #f4b97f;  }
.bg { position: relative; z-index: 10; }
<?php if($language == "es_ES") { ?>
	p { font-size: 20px; }
<?php } ?>
</style>
</head>
<body onload="init();">
	<div class="wrap">
		<canvas id="canvas"></canvas>
		<div class="bg">
			<div>
				<h1><?php echo _("Thinking about... biodiversity"); ?></h1>
				<p><?php echo _("Biodiversity describes the variety of species found in different places around the earth. But have you ever thought about why there are so many kinds of the same plants and animals? Are they all really necessary? Around 170 years ago in Ireland, farmers grew only one kind of potato - the lumper potato. It was a good source of nutrition and it fed many people at low cost. Things were great until a fungus came and entire fields of potatoes were gone within days. Since there was only one kind of potato, and all the crops were identical, Ireland experienced a horrible famine. One out of every eight people died in three years. Relying on a single food crop is very risky.  If many different crops were grown, then it is unlikely that any single disease or event could cause such a tragedy. Biodiversity is how the earth is prepared for different changes, and how plants and animals survive over generations."); ?></p>
				<p><?php echo _("Different animal and plant species are found in Earth's many ecosystems. You will learn about Earth's biomes and what we are doing to maintain biodiversity in this review."); ?></p>
			</div>				
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _('Next'); ?>">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready, ");echo $user->getFirstName() . '?'; ?></strong></section></section> <!-- Change to student name soon -->
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
