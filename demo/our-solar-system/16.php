<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(12, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #026e89; margin-left: 3%; margin-right: 3%; }

		.wrap { border-color: #1AC450; }
		.bg { background-image: url(assets/16/bg.jpg); }
		.bg > div { -moz-perspective: 600px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #406618; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #406618;
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

		button:hover { background-color: #129762; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... our solar system"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Rotation"); ?></h3>
						<div>
							<img src="assets/16/rotation.jpg"/>
							<p><?php echo _("When an object spins around an axis, or imaginary line that goes through the object. Many objects in space rotate, such as the Earth and Earth's Moon."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Revolution"); ?></h3>
						<div>
							<img src="assets/16/revolution.jpg"/>
							<p><?php echo _("When an object orbits around another object. If the revolving is a result of gravity, generally the less massive object will revolve around the more massive one. Examples include Earth's moon revolving around the Earth, and the Earth revolving around the Sun."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Gravity"); ?></h3>
						<div>
							<img src="assets/16/gravity.jpg"/>
							<p><?php echo _("The attractive force all things with mass enact upon one another. This force is proportional to the masses being attracted, as well as their distance apart."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Dwarf Planet"); ?></h3>
						<div>
							<img src="assets/16/dwarf-planet.jpg"/>
							<p><?php echo _("An object the size of a planet that has not cleared its orbit of other objects. Pluto was recently reclassified from a planet to a dwarf planet."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div><div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Planet"); ?></h3>
						<div>
							<img src="assets/16/planet.jpg"/>
							<p><?php echo _("A celestial body orbiting a star that is large enough to be rounded by its own gravity, but not so large that its gravity can cause nuclear fusion. Planets must have also cleared their orbit of other objects by means of their gravity. Planets can be solid, like Earth and Mars, or gaseous, like Jupiter and Saturn."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Sun"); ?></h3>
						<div>
							<img src="assets/16/sun.jpg"/>
							<p><?php echo _("The star at the center of our solar system. It gives off light and heat as a result of constant nuclear fusion and fission inside of it. All of the other objects in the solar system revolve around the Sun."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Moon"); ?></h3>
						<div>
							<img src="assets/16/moon.jpg"/>
							<p><?php echo _("An object that orbits around a planet, also called a natural satellite. A planet can have any number of moons, or none at all. Earth has one moon, while Jupiter has at least 67."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Earth's Axis"); ?></h3>
						<div>
							<img src="assets/16/earth-axis.jpg"/>
							<p><?php echo _("The imaginary line around which the Earth rotates. This line runs from the North Pole through the center of the planet to the South Pole. Earth's axis is tilted in relation to its orbit around the sun, causing us to have seasons."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Galaxy"); ?></h3>
						<div>
							<img src="assets/16/galaxy.jpg"/>
							<p><?php echo _("A large collection of stars, gas, dust, stellar remnants and dark matter all gravitationally bound together. All of the objects contained within a galaxy orbit around a supermassive black hole at the center. The Earth and its solar system are in the Milky Way Galaxy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Spectrometer"); ?></h3>
						<div>
							<img src="assets/16/spectrometer.jpg"/>
							<p><?php echo _("A device used to measure part of the electromagnetic spectrum or light spectrum. A spectrometer can be used to measure visible light that humans can see, but can also measure wavelengths that are invisible to people, such as ultraviolet and infrared."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div><div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Asteroid"); ?></h3>
						<div>
							<img src="assets/16/asteroid.jpg"/>
							<p><?php echo _("A body orbiting the Sun that is neither a major planet, nor a comet. There are millions of asteroids in our solar system. A large band of asteroids exists between Mars and Jupiter, appropriately named, \"The Asteroid Belt.\""); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Comet"); ?></h3>
						<div>
							<img src="assets/16/comet.jpg"/>
							<p><?php echo _("An icy, small solar system body. When a comet passes near the Sun, it heats up and begins to outgas. This process gives it an atmosphere, sometimes called a tail."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Rotation"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Revolution"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Gravity"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Dwarf Planet"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Planet"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Sun"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Moon"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Earth's Axis"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Galaxy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Spectrometer"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Asteroid"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Comet"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="15.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
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
