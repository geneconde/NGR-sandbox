<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'plate-tectonics';
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

	<title><?php echo _("Plate Tectonics"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		h1 { color: #FFE8AB; margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		.wrap { border-color: #75573D; }

		.bg { background-image: url(assets/12/bg.jpg);overflow: hidden; }
		.bg > div { -moz-perspective: 600px; }
		.fa, .lang-menu a { color: #1AA257; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #754C24; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #754C24; 
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

		button:hover { background-color: #473200; }

		<?php if ($language == 'es_ES'){
			echo _("h1 {  font-size: 32px;}");
			}
		?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... plate tectonics"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Subduction"); ?></h3>

						<div>
							<img src="assets/12/subduction.jpg"/>

							<p><?php echo _("When two tectonic plates meet and if one plate is more dense than the other, it may be pulled down into the mantle. The process is called subduction. This can push the other plate up, as well as melt the material of the plate that is being subducted."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Map"); ?></h3>

						<div>
							<img src="assets/12/map.jpg"/>

							<p><?php echo _("An image showing the physical characteristics of a location. Maps are generally two-dimensional, but the images may be displayed in a way that shows a third dimension as well, such as in a topographical map."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Pattern"); ?></h3>

						<div>
							<img src="assets/12/pattern.jpg"/>

							<p><?php echo _("Any system that repeats in a predictable way. A pattern can be as simple as counting numbers, or as complex as weather, so long as there are repeating, predictable phenomena present."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Tectonic Plate"); ?></h3>

						<div>
							<img src="assets/12/tectonic.jpg"/>

							<p><?php echo _("A solid piece of the earth's crust floating on top of the mantle. The earth is covered in these plates, and they fit together like pieces of a puzzle. Geologic activity such as volcanism and earthquakes are common where the plates meet."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Volcano"); ?></h3>

						<div>
							<img src="assets/12/volcano.jpg"/>

							<p><?php echo _("A tear or hole in the earth's crust that allows lava, ash, and gases to escape from a magma chamber located below the surface. Volcanoes are common at tectonic plate boundaries, such as Mount St. Helens in Washington, U.S.A. but can also occur in the middle of plates, such as the islands of Hawai'i in the Pacific Ocean."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Earthquake"); ?></h3>

						<div>
							<img src="assets/12/earthquake.jpg"/>

							<p><?php echo _("The release of tensional strain caused by two tectonic plates meeting. This release of energy causes the ground to shake and move around the area of the release."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Plate Tectonics"); ?></h3>

						<div>
							<img src="assets/12/plate.jpg"/>
							<p><?php echo _("The theory that the earth is covered with fragmented pieces of crust floating on top of a plastic mantle. (Note that the mantle isn't the same kind of plastic like a plastic toy - but rather, hot rock that very slowly flows like \"plastic\") These fragments can move slowly over time, explaining the change in the position of Earth's continents over the span of its history."); ?></p>
							
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Oceanic Crust Plate"); ?></h3>

						<div>
							<img src="assets/12/oceanic.jpg"/>

							<p><?php echo _("The part of a tectonic plate made out of  \"oceanic crust\". Oceanic crust is generally much thinner and more dense than continental crust, allowing for oceans to form on top of it."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Continental Crust Plate"); ?></h3>

						<div>
							<img src="assets/12/continental.jpg"/>

							<p><?php echo _("The part of a tectonic plate made out of  \"continental crust\". Continental crust is generally much thicker and less dense than oceanic crust."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Subduction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Map"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Pattern"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Tectonic Plate"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Volcano"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Earthquake"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Plate Tectonics"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Oceanic Crust Plate"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Continental Crust Plate"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="11.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
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
