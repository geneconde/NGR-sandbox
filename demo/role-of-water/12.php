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
h1 { color: #3F96A7; }
.wrap { border-color: #aafefe; }
.bg { background-image: url(images/12/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #fff; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
#modal-7 .md-content img { height: 260px; }
.md-content h3 { background: #3F96A7; color: #fff; }
button:hover { background: #50a0b0; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #3F96A7;
	color: #fff;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}

#groundwater-diagram span { position: absolute; }
#groundwater-diagram span:first-of-type { margin-top: 36px; right: 106px; width: 53px; }
#groundwater-diagram span:nth-of-type(2) { margin-top: 77px; margin-left: 10px; }
#groundwater-diagram span:nth-of-type(3) { margin-top: 96px; margin-left: 3px; }
#groundwater-diagram span:nth-of-type(4) { margin-top: 108px; margin-left: 28px; }
#groundwater-diagram span:nth-of-type(5) { margin-top: 121px; margin-left: 54px; }
#groundwater-diagram span:nth-of-type(6) { margin-top: 136px; margin-left: 136px; }
#groundwater-diagram span:nth-of-type(7) { margin-top: 144px; margin-left: 3px; }
#groundwater-diagram span:nth-of-type(8) { margin-top: 158px; margin-left: 3px; }
#groundwater-diagram span:nth-of-type(9) { margin-top: 174px; margin-left: 3px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... the role of water"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Glacier"); ?></h3>
						<div>
							<img src="images/12/glacier.jpg"/>
							<p><?php echo _("A body of dense snow and ice that does not completely melt all year round. Glaciers are constantly moving under their own weight. They form when accumulation of snow exceeds the loss due to melting and sublimation."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Groundwater"); ?></h3>
						<div>
							<div id="groundwater-diagram">
								<span><?php echo _("Artesian Well"); ?></span>
								<span><?php echo _("Soil"); ?></span>
								<span><?php echo _("Water"); ?></span>
								<span><?php echo _("Loam"); ?></span>
								<span><?php echo _("Sand and Gravel"); ?></span>
								<span><?php echo _("Water"); ?></span>
								<span><?php echo _("Loam"); ?></span>
								<span><?php echo _("Clay"); ?></span>
								<span><?php echo _("Impermeable Rock(limestone)"); ?></span>
								<img src="images/12/groundwater.jpg"/>
							</div>
							<p><?php echo _("Water located below ground level.  This water is stored in the pore spaces of soil or in cracks between rocks.  The depth at which the pore spaces are completely filled with water is called the water table."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("States of matter"); ?></h3>
						<div>
							<img src="images/12/states.jpg"/>
							<p><?php echo _("Solid, liquid, and gas states - the common forms of matter on earth.  For water, the solid state is ice.  The liquid state is liquid water.  And the gas state is water vapor or steam."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Salt Water"); ?></h3>
						<div>
							<img src="images/12/saltwater.jpg"/>
							<p><?php echo _("Often called saline, it is water with salts dissolved into it (most commonly NaCl).  This type of water constitutes the various oceans and seas of the Earth.  Salt water is not drinkable by humans."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Polluted"); ?></h3>
						<div>
							<img src="images/12/polluted.jpg"/>
							<p><?php echo _("Something is deemed to be polluted when a foreign contaminant (often man made) has been introduced.  Water is one of the most commonly polluted substances.  Once an area has been polluted, it may no longer be able to support life, or if it can, the pollution may have adverse effects on the things living in or around it."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Fresh Water"); ?></h3>
						<div>
							<img src="images/12/freshwater.jpg"/>
							<p><?php echo _("Water not containing significant amounts of salt dissolved into it.  This type of water constitutes most of the various lakes, rivers, and streams of the Earth.  Fresh water is drinkable by humans."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>


				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Polar Ice Cap"); ?></h3>
						<div>
							<img src="images/12/ice.jpg"/>
							<p><?php echo _("An area of ice at the extreme northern and southern parts of the globe which is present year round.  The amount of ice fluctuates during the year, but some ice is always present in an ice cap."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Glacier"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Groundwater"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("States of matter"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Salt Water"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Polluted"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Fresh Water"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Polar Ice Cap"); ?></button>
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

	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = '/scripts/';</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>

	
	<?php include("setlocale.php"); ?>
</body>
</html>
