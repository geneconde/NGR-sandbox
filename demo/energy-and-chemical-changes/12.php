<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'energy-and-chemical-changes';
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

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #F16D2D; margin-left: 3%; margin-right: 3%; font-size: 29px; }
		p { color: #000; }

		.wrap { border-color: #FFD8FA; }

		.bg { background-image: url(assets/12/bg.jpg); }
		.bg > div { -moz-perspective: 600px; height: 100% }
		.md-overlay { height: 100%; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #6CBEF8; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #6CBEF8; 
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

		button:hover { background-color: #428BBF; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... energy and chemical changes"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Chemical energy"); ?></h3>

						<div>
							<img src="assets/12/chemical.jpg"/>

							<p><?php echo _("The potential energy stored in chemical compounds. It can be converted by chemical reactions to other forms of energy, such as light energy or heat energy."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Potential energy"); ?></h3>

						<div>
							<img src="assets/12/potential.jpg"/>

							<p><?php echo _("Any kind of stored energy that can be converted to other kinds of energy."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Kinetic energy"); ?></h3>

						<div>
							<img src="assets/12/kinetic.jpg"/>

							<p><?php echo _("The energy of an object in motion. It is the opposite of potential energy. Examples would include releasing a coiled spring or dropping a ball."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Photosynthesis"); ?></h3>

						<div>
							<img src="assets/12/photosynthesis.jpg"/>

							<p><?php echo _("The process by which plants convert carbon dioxide, water, and light energy into glucose and molecular oxygen. The plant can then use the glucose later for energy."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Conservation of energy"); ?></h3>

						<div>
							<img src="assets/12/conservation.jpg"/>

							<p><?php echo _("The concept that energy can be neither created nor destroyed, it can only change form. The total amount of energy at the start of any process must be equal the amount of energy at the end of the process."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Work"); ?></h3>

						<div>
							<img src="assets/12/work.jpg"/>

							<p><?php echo _("The application of a force over a distance. Pushing a weight down the road is doing work."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Energy"); ?></h3>

						<div>
							<img src="assets/12/energy.jpg"/>

							<p><?php echo _("The property of objects that can be transferred or changed in form, but not created nor destroy. Energy is the ability of objects to do things."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Converting energy"); ?></h3>

						<div>
							<img src="assets/12/converting.jpg"/>

							<p><?php echo _("The transfer of energy from one form to another. Potential energy is converted into kinetic energy when a ball that has been lifted into the air is dropped and allowed to fall."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>


				<div class="container">
					<div class="main">
						<div class="column">
														
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Chemical energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Potential energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Kinetic energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Photosynthesis"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Conservation of energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Work"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Converting energy"); ?></button>
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
