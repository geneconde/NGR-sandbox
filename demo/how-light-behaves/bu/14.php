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

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">

	<style>
		h1 { color: #8e569b; margin-left: 3%; margin-right: 3%; }
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
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... human impact"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Environment"); ?></h3>

						<div>
							<img src="assets/14/environment.jpg"/>

							<p><?php echo _("An organism's environment is their physical surroundings. In general, the environment refers to the Earth's systems working together – the air, water, land, and all the living things."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Pollutant"); ?></h3>

						<div>
							<img src="assets/14/pollutant.jpg"/>

							<p><?php echo _("A pollutant is a substance that is harmful to the natural environment. Humans add pollutants as a by-product of industry, and thus must control the pollutants in order to be good stewards of the Earth. An example of a pollutant is smog."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Impact"); ?></h3>

						<div>
							<img src="assets/14/impact.jpg"/>

							<p><?php echo _("The impact of something is the measure of how it effects on something else. In the context of the environment, humans impact the environment negatively by adding pollutants to it. In order to be good stewards of the environment, humans must impact the environment in beneficial ways through conservation, sustainability, and efficiency."); ?></p>
							<p><?php echo _("For example, using windmills to harvest the clean, renewable energy source of wind is a positive impact humans can have on the environment."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Carbon dioxide"); ?></h3>

						<div>
							<img src="assets/14/carbon.jpg"/>

							<p><?php echo _("Carbon dioxide is an element consisting of one atom of carbon chemically bonded to two atoms of oxygen. In the context of caring for the environment, carbon dioxide, abbreviated CO<sub>2</sub>, is a harmful by-product pollutant of burning fossil fuels."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Global climate change"); ?></h3>

						<div>
							<img src="assets/14/global.jpg"/>

							<p><?php echo _("Global climate change is the term used for the gradual shifting of the Earth's climate towards a worse condition. Good stewardship of the Earth, such as by practicing recycling and conservation, is necessary to combat global climate change."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Hybrid"); ?></h3>

						<div>
							<img src="assets/14/hybrid.jpg"/>

							<p><?php echo _("In the context of the environment, a hybrid is a machine, such as a car, that is able to use multiple types of fuel, including \"clean\" fuel such as electricity. Instead of relying solely upon the use of fossil fuels, which cause the release of pollutants in the atmosphere and are non-renewable, non-sustainable resources, hybrid machines benefit the environment by using cleaner, more sustainable energy sources."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Habitat"); ?></h3>

						<div>
							<img src="assets/14/habitat.jpg"/>

							<p><?php echo _("An organism's habitat is the surrounding physical environment in which it lives. For example, many penguins' natural habitat is the frigid, snowy Antarctica."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Fossil fuels"); ?></h3>

						<div>
							<img src="assets/14/fossil.jpg"/>

							<p><?php echo _("Some natural resources, called fossil fuels, are replenished slowly or not at all, making them non-renewable. Fossil fuels are the remains of living organisms, which are called fossils. Coal and petroleum are considered to be fossil fuels."); ?></p>

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
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="13.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
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
