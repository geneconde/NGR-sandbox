<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
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

	<title><?php echo _("The Air Around Us"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #8e569b; margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		.wrap { border-color: #FEDEA9; }
		.wrap > .bg { overflow: hidden !important; }
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
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... air around us"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Density"); ?></h3>

						<div>
							<img src="assets/14/density.jpg"/>

							<p><?php echo _("The amount of matter, or material in a space. Usually measured in a unit of mass per unit of volume. A denser material will have more mass in the same volume than a less dense material."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Air Pressure"); ?></h3>

						<div>
							<img src="assets/14/air.jpg"/>

							<p><?php echo _("The force that gas molecules exert on their container. If there are more molecules in a given space, they will exert more force. We label that force pressure."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Atmosphere"); ?></h3>

						<div>
							<img src="assets/14/atmosphere.jpg"/>

							<p><?php echo _("The collection of gas molecules in a space. Earth's atmosphere contains many types of molecules such as Nitrogen, Oxygen, Carbon Dioxide and Water."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Smog"); ?></h3>

						<div>
							<img src="assets/14/smog.jpg"/>

							<p><?php echo _("A term used to generalize air pollution. Usually when people use the term they are referring to air that appears thick, dark and cloudy."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
								
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Pollutant"); ?></h3>

						<div>
							<img src="assets/14/pollutant.jpg"/>

							<p><?php echo _("A substance, often man-made, which has been introduced in an environment and is not naturally present in it. Usually pollutants have a negative impact on some or all of the organisms living in the area."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
								
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Water Vapor"); ?></h3>

						<div>
							<img src="assets/14/water.jpg"/>

							<p><?php echo _("Water in its gaseous form, also called steam. Earth's atmosphere contains lots of water vapor, along with other molecules."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Density"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Air Pressure"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Atmosphere"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Smog"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Pollutant"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Water Vapor"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
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
