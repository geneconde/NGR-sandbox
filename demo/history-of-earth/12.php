<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
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
h1 { color: #000; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/12/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #eee; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
.md-content h3 { background: #F59060; color: #fff; }
button:hover { background: #DB7647; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #F59060;
	color: #fff;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}

html[dir='rtl'] h1 { font-size: 34px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... history of earth"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Geologist"); ?></h3>
						<div>
							<img src="images/12/geologist.jpg"/>
							<p><?php echo _("A scientist who studies rocks and minerals. Geologists study the change of environments on the Earth over large time scales."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Fossil"); ?></h3>
						<div>
							<img src="images/12/fossil.jpg"/>
							<p><?php echo _("The preserved remains or traces of organisms that lived in the past. Fossilized remains were covered and preserved in sediment. Fossilized material has had its original materials replaced with minerals gradually over time."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Paleontologist"); ?></h3>
						<div>
							<img src="images/12/paleontologist.jpg"/>
							<p><?php echo _("A scientist who studies ancient organisms. Paleontologists use aspects of biology and geology to investigate long extinct plants and animals. They use fossils to help construct their hypothesis about how life existed in the distant past."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Environment"); ?></h3>
						<div>
							<img src="images/12/environment.jpg"/>
							<p><?php echo _("The immediate area in which an organism or group of organisms live. All of the physical, chemical, and biological materials surrounding an organism make up its environment."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Geologist"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Fossil"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Paleontologist"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Environment"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = '/scripts/';</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
