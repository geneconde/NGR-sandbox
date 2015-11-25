<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
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

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<style>
		h1 { margin-left: 3%; margin-right: 3%; color:#ff8b14; }
		p { color: #fff; }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 28px; } }

		.wrap { border-color: #226F38; }

		.bg { background-image: url(assets/bg-13-15.jpg); }
		.bg > div { -moz-perspective: 600px; height: 100%;}

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; margin-left:10px;}
		.md-content h3 { background-color: #e49b2a; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #e49b2a; 
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

		button:hover { background-color: #e45f2a; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... electric circuits"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Circuit"); ?></h3>

						<div>
							<img src="assets/14/circuit.jpg"/>

							<p><?php echo _("A circuit allows electrons, which are tiny invisible negatively charged particles, to flow through a wire or another conductor."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Electrons"); ?></h3>

						<div>
							<img src="assets/14/electrons.jpg"/>

							<p><?php echo _("Electrons are invisible negative charges that move around the circuit and make an electric current in the circuit."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Battery"); ?></h3>

						<div>
							<img src="assets/14/batteries.jpg"/>

							<p><?php echo _("Batteries are the source of electrical energy in a flashlight circuit."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Incandescent bulb"); ?></h3>

						<div>
							<img src="assets/14/bulb.jpg"/>

							<p><?php echo _("The usual light bulb most people have in their houses is called an incandescent bulb – incandescent means it lights up from getting hot."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Electric current"); ?></h3>

						<div>
							<img src="assets/14/current.jpg"/>

							<p><?php echo _("The movement of electrons through a wire or other electrical conductor."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Conductor"); ?></h3>

						<div>
							<img src="assets/14/copperWires.jpg"/>

							<p><?php echo _("Any material that allows electric current to flow through it. Electrical conductors are usually metals but water can also conduct electricity."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Chemical potential energy"); ?></h3>

						<div>
							<img src="assets/14/chemical.jpg"/>

							<p><?php echo _("The energy in the chemicals inside a battery that’s changed by a chemical reaction to create electrical current in a circuit."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Filament"); ?></h3>

						<div>
							<img src="assets/14/filament.jpg"/>

							<p><?php echo _(" When we say “through the bulb”, we mean that the electric current flows through the thin, curly little wire in the bulb, called the filament."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Insulator"); ?></h3>

						<div>
							<img src="assets/14/insulator.jpg"/>

							<p><?php echo _("Electrical insulators are materials, like rubber, plastic, or air, that can't conduct electricity. They are used to cover and shield wires and other conductors so you don't get a shock."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Battery terminal"); ?></h3>

						<div>
							<img src="assets/14/batteryTerminal.jpg"/>

							<p><?php echo _("Battery terminals are little posts that stick out of the top of the battery that the circuit wires are connected to."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Electrical energy"); ?></h3>

						<div>
							<img src="assets/14/electricalEnergy.jpg"/>

							<p><?php echo _("The energy of electrons moving through a wire in a circuit."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Simple circuit"); ?></h3>

						<div>
							<img src="assets/14/simpleElectric.jpg"/>

							<p><?php echo _("In a simple circuit like a flashlight, an electric circuit connects these three components in a pattern that begins and ends with the power source."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Circuit"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Electrons"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Battery"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Incandescent bulb"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Electric current"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Conductor"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Chemical potential energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Filament"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Insulator"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Battery terminal"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Electrical energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Simple circuit"); ?></button>
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
