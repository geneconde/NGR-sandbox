<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #A59063; font-size: 34px; }
.wrap { border-color: #dbea92; }
.bg { background-image: url(images/14/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #dbea92; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
.md-content h3 { background: #be8737; color: #fff; }
button:hover { background: #d19845; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #be8737;
	color: #fff;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... plants are producers"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Producers"); ?></h3>
						<div>
							<img src="images/14/producers.jpg"/>
							<p><?php echo _("Producers are organisms, such as plants, that obtain their food through the process of photosynthesis. Producers use the energy of sunlight to produce sugar, which is used as energy for survival and reproduction. Because they do not consume other organisms but instead are consumed by others, producers are at the bottom of the food chain."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Photosynthesis"); ?></h3>
						<div>
							<img src="images/14/photosynthesis.jpg"/>
							<p><?php echo _("Photosynthesis, the process by which producers such as plants obtain their energy, uses light energy to convert carbon dioxide and water into sugar and oxygen."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Glucose"); ?></h3>
						<div>
							<img src="images/14/glucose.jpg"/>
							<p><?php echo _("In photosynthesis, the carbon dioxide molecules are combined to form a six-carbon compound called glucose. Glucose is a simple sugar used to store energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Carbohydrates"); ?></h3>
						<div>
							<img src="images/14/carbohydrates.jpg"/>
							<p><?php echo _("Glucose may be used for energy directly, or connected to other glucose molecules to form chains called carbohydrates.  Carbohydrates are used for energy by nearly all living things.  The oxygen released by photosynthesis is also used by plants and animals to help unlock the energy stored in carbohydrates.  Grains are examples of foods that are high in carbohydrates."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Cellulose"); ?></h3>
						<div>
							<img src="images/14/cellulose.jpg"/>
							<p><?php echo _("Cellulose is a plant carbohydrate which provides the plant with both stored energy and acts as a strong substance to help provide it with support. Cellulose is the chief component of the walls surrounding every plant cell. The purest natural form of cellulose is cotton."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Fiber"); ?></h3>
						<div>
							<img src="images/14/fiber.jpg"/>
							<p><?php echo _("Cellulose is also the fiber, or tough thread-like substance, found in other types of plants. It is the fiber in the boll of the cotton flower."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Producers"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Photosynthesis"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Glucose"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Carbohydrates"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Cellulose"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Fiber"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="13.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = '/scripts/';</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
