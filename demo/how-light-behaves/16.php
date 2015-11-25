<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'how-light-behaves';
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

	<title><?php echo _("How Light Behaves"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<style>
		h1 { color: #00A7D4; margin-left: 3%; margin-right: 3%; font-size: 31px;}
		p { color: #fff; }

		.wrap { border-color: #8C5C52; }

		.bg { background-image: url(assets/16/bg.jpg); }
		.bg > div { -moz-perspective: 600px; height: 100%;}

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #fff; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #FF9E92; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #FF9E92; 
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

		button:hover { background-color: #EB6966; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... how light behaves"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Reflection"); ?></h3>

						<div>
							<img src="assets/16/reflection.jpg"/>

							<p><?php echo _("When a light wave changes direction when it hits a different type of media and stays in the media it was in before. Visible light reflects off mirrors to stay in the air."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Refraction"); ?></h3>

						<div>
							<img src="assets/16/refraction.jpg"/>

							<p><?php echo _("When a light wave changes direction when it hits a different type of media and moves into the new media. Visible light is often refracted when it hits water from the air, or moves from water into the air."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Absorption"); ?></h3>

						<div>
							<img src="assets/16/absorption.jpg"/>

							<p><?php echo _("A wavelength of light hits the electron of an atom and transfers its energy to it. This will generally excite the electron to a higher energy state."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Lens"); ?></h3>

						<div>
							<img src="assets/16/lens.jpg"/>

							<p><?php echo _("Something that refracts light converging or diverging it. Examples include lenses in glasses and lenses in a microscope."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Transmission"); ?></h3>

						<div>
							<img src="assets/16/transmission.jpg"/>

							<p><?php echo _("Light energy that is absorbed by an electron and then released. A given electron can only absorb and transmit certain wavelengths of light."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<!-- <div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("chemical"); ?></h3>

						<div>
							<img src="assets/16/properties.jpg"/>

							<p><?php echo _(""); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div> -->
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Transparent"); ?></h3>

						<div>
							<img src="assets/16/transparent.jpg"/>

							<p><?php echo _("When light travels through something without being absorbed or reflected. May also be called \"see-through\".  Examples can include water and glass."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Translucent"); ?></h3>

						<div>
							<img src="assets/16/translucent.jpg"/>

							<p><?php echo _("When some, but not all, light travels through an object without being absorbed or reflected. Translucent things can be seen through but are not completely clear."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Opaque"); ?></h3>

						<div>
							<img src="assets/16/opaque.jpg"/>

							<p><?php echo _("Something that cannot be seen through. It either absorbs or reflects light."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Shadow"); ?></h3>

						<div>
							<img src="assets/16/shadow.jpg"/>

							<p><?php echo _("An absence of light in an area due to it being blocked by an object. People cast shadows when in a room with visible light."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Reflection"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Refraction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Absorption"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Lens"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Transmission"); ?></button>
							<!-- <button class="md-trigger md-setperspective" data-modal="modal-6"><?php //echo _("Chemical"); ?></button> -->
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Transparent"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Translucent"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Opaque"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Shadow"); ?></button>
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
