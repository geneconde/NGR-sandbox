<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #46A5AD; }
.wrap { border-color: #a1dbfd; }
.bg { background-image: url(images/12/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #eee; }
.md-content p { font-size: 16px; }
.md-content img { height: auto; }
//#modal-4 .md-content img { height: 260px; }
.md-content h3 { background: #4FA5C0; color: #fff; }
button:hover { background: #4893AA; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #4FA5C0;
	color: #fff;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	.bg > div {
		width: 95%;
		margin: 0 auto;
		-moz-perspective: 600px;
		padding-top: 20px;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... natural resources"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Natural resources"); ?></h3>
						<div>
							<img src="images/12/natural.jpg">
							<p><?php echo _("Natural resources are anything found in nature which are not created by humans. Trees, coal, and water are examples of natural resources."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Renewable resources"); ?></h3>
						<div>
							<img src="images/12/renewable.jpg">
							<p><?php echo _("Renewable resources are plentiful and are quickly replenished in nature, such that they do not run out when used by humans. Examples of renewable resources are wind, water, and trees."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Non-renewable resources"); ?></h3>
						<div>
							<img src="images/12/nonrenewable.jpg">
							<p><?php echo _("Some natural resources, called fossil fuels, are replenished slowly or not at all, making them non-renewable. Non-renewable resources cannot be quickly or easily replaced once they are used up."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Energy"); ?></h3>
						<div>
							<img src="images/12/energy.jpg">
							<p><?php echo _("Energy is the ability to do work. All living things require energy to survive. Energy is obtained by producers, such as plants - through photosynthesis, by using the sun's light energy. Energy is obtained by consumers, such as people, through consuming producers or other consumers."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Fuel"); ?></h3>
						<div>
							<img src="images/12/fuel.jpg">
							<p><?php echo _("Fuel is a material, such as gas, that is used for energy. Fuel is needed for appliances and machines to work; thus, fuel is very important!"); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Conserve"); ?></h3>
						<div>
							<img src="images/12/conserve.jpg">
							<p><?php echo _("To conserve resources means to use them wisely so they do not run out. An example of energy conservation is the use of renewable energy, such as wind energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Natural resources"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Renewable resources"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Non-renewable resources"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Fuel"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Conserve"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
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
