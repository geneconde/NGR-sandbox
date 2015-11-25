<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(14, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Human Environmental Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #8e569b; margin-left: 3%; margin-right: 3%; font-size: 1.27em; }
		p { color: #fff; }

		.wrap { border-color: #B8FFFF; }

		.bg { background-image: url(assets/14/bg.jpg); }
		.bg > div { -moz-perspective: 600px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #00A7D4; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #00A7D4; 
			color: #fff;
			font-size: 16px;
			letter-spacing: 1px;
			text-transform: uppercase;
			cursor: pointer;
			display: inline-block;
			margin: 1% 0;
			border-radius: 5px;
			outline: 0;
		}

		button:hover { background-color: #149063; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... human environmental impact"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Environment"); ?></h3>

						<div>
							<img src="assets/14/environment.jpg"/>

							<p><?php echo _("The area and conditions where an organism or several organisms live. Any place where something lives is that thing's environment."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Pollutant"); ?></h3>

						<div>
							<img src="assets/14/pollutant.jpg"/>

							<p><?php echo _("A substance, often man-made, not naturally present in an environment, which has been introduced. Usually pollutants have a negative impact on some or all of the organisms living in the area."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Impact"); ?></h3>

						<div>
							<img src="assets/14/impact.jpg"/>

							<p><?php echo _("The effect of something (like a pollutant) on something else (like an environment). An impact can be positive, such as conservation, preserving the biodiversity of an ecosystem; or negative, such as pollution, making an environment unable to support life."); ?></p>
						
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Carbon dioxide"); ?></h3>

						<div>
							<img src="assets/14/carbon.jpg"/>

							<p><?php echo _("A molecule made up of one carbon atom and two oxygen atoms, often called CO<sub>2</sub>. Carbon Dioxide is released as a gas into the atmosphere in many ways, such as when animals exhale and when many compounds are burned. Carbon Dioxide has been shown to be a \"greenhouse gas\" in that it contributes to global climate change."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Global climate change"); ?></h3>

						<div>
							<img src="assets/14/global.jpg"/>

							<p><?php echo _("The worldwide average change in temperature, weather patterns and many other factors combined together make what we call \"climate\". Climate change is a long-term process that results from a drastic change in the earth's equilibrium. Some sources of this change can include large scale volcanic eruptions or extensive burning of fossil fuels."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Hybrid"); ?></h3>

						<div>
							<img src="assets/14/hybrid.jpg"/>

							<p><?php echo _("Something that is the product of combining two different things. Hybrid crops contain DNA from multiple organisms. Hybrid cars contain two types of engine, usually one gasoline and one electric."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Habitat"); ?></h3>

						<div>
							<img src="assets/14/habitat.jpg"/>

							<p><?php echo _("The area and resources where an organism lives. A creature's habitat should contain the food, water and shelter that a creature needs to survive."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Fossil fuels"); ?></h3>

						<div>
							<img src="assets/14/fossil.jpg"/>

							<p><?php echo _("Natural gas, petroleum and coal. These are the remains of organisms that died eons ago that have been heated and compressed underground. Humans burn them for energy; however, this releases greenhouse gases, such as carbon dioxide, which have been shown to contribute to global climate change."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Environment"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Pollutant"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Impact"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Carbon dioxide"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Global climate change"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Hybrid"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Habitat"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Fossil fuels"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
		</div>
	</div>

	<div id="buttons">
		<a href="13.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = 'js/';</script>
	<script src="js/cssParser.js"></script>
	<script src="js/css-filters-polyfill.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
