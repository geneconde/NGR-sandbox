<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(16, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">

	<style>
		h1 { margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		.bg { background-image: url(assets/14/bg.jpg); }
		.bg > div { -moz-perspective: 600px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #FFCCD9; color: #9451d3; }
		div.md-overlay {
			width: 100%;
		}
		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #FFCCD9; 
			color: #9451d3;
			font-size: 16px;
			letter-spacing: 1px;
			text-transform: uppercase;
			cursor: pointer;
			display: inline-block;
			margin: 1% 0;
			border-radius: 5px;
			outline: 0;
		}

		button:hover { background-color: #E495A9; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... making sound"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Sound"); ?></h3>

						<div>
							<img src="assets/14/sound.jpg"/>

							<p><?php echo _("A wave carrying energy through a solid, liquid or gas."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Vibration"); ?></h3>

						<div>
							<img src="assets/14/vibration.jpg"/>

							<p><?php echo _("When something moves back and forth in a regular pattern, it is said to vibrate.  Vibrations can disturb gas, liquid, or solid phase molecules to produce sound waves."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Loudness"); ?></h3>

						<div>
							<img src="assets/14/loudness.jpg"/>

							<p><?php echo _("Also called amplitude or volume. Sounds are said to be louder when the molecules vibrating are moving farther with each vibration."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Pitch"); ?></h3>

						<div>
							<img src="assets/14/pitch.jpg"/>

							<p><?php echo _("Also called frequency. The number of times an object vibrates per second affects how we perceive the sound. Higher pitches vibrate more quickly, while lower pitches vibrate more slowly."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Medium"); ?></h3>

						<div>
							<img src="assets/14/medium.jpg"/>

							<p><?php echo _("The material through which a sound wave travels. A medium can be a solid, liquid or gas."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Molecules"); ?></h3>

						<div>
							<img src="assets/14/molecules.jpg"/>

							<p><?php echo _("Atoms chemically bonded together. Molecules make up all matter in the universe."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Frequency"); ?></h3>

						<div>
							<img src="assets/14/frequency.jpg"/>

							<p><?php echo _("Also called pitch in the context of sound. Frequency is the number of times something happens per second."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Sound Wave"); ?></h3>

						<div>
							<img src="assets/14/sound-wave.jpg"/>

							<p><?php echo _("Vibrations moving through a medium. Many organisms and devices can detect and interpret these vibrations as sounds."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Longitudinal Wave"); ?></h3>

						<div>
							<img src="assets/14/longitudibal-wave.jpg"/>

							<p><?php echo _("A wave where the displacement of molecules is in the same direction that the wave moves."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Energy"); ?></h3>

						<div>
							<img src="assets/14/energy.jpg"/>

							<p><?php echo _("The property of objects that can be transferred or changed in form, but not created nor destroyed."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Sound"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Vibration"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Loudness"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Pitch"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Medium"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Molecules"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Frequency"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Sound Wave"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Longitudinal Wave"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Energy"); ?></button>							
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
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
