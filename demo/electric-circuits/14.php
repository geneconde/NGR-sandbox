<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #867964; margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 28px; } }

		.wrap { border-color: #867964; }

		.bg { background-image: url(assets/14/14.jpg); overflow: hidden;}
		.bg > div { -moz-perspective: 600px; height: 100%; }


		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 260px; height: 200px; margin-left:5px;}
		.md-content h3 { background-color: #98605D; color: #fff; }

/*
		#md_force {height: 250px; width:180px;}
		#md_equi {margin-left:;}
		#md_unbalanced {width: auto; height: 250px;}
*/
		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #C29F7B; 
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

		button:hover { background-color: #98605D; }
		@media screen and (max-width: 1250px) { .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... electric circuits"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Electricity"); ?></h3>
						<div>
							<img src="assets/14/electricity.jpg"/>
							<p><?php echo _("The flow of electrons through a system.  Also known as an electric current."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Electric Current"); ?></h3>
						<div>
							<img src="assets/14/electriccurrent.jpg"/>
							<p><?php echo _("The flow of electrons through a system.  Also known as electricity."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Circuit"); ?></h3>
						<div>
							<img src="assets/14/circuit.jpg"/>
							<p><?php echo _("A flow of electricity from a place of high energy to a place of low energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Energy"); ?></h3>
						<div>
							<img src="assets/14/energy.jpg"/>
							<p><?php echo _("The property of objects that can be transferred or changed in form, but not created nor destroyed. The transfer of energy can cause change to a system."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Atom"); ?></h3>
						<div>
							<img src="assets/14/atom.jpg"/>
							<p><?php echo _("The basic unit of matter.  An atom consists of a central nucleus surrounded by electrons."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Electron"); ?></h3>
						<div>
							<img src="assets/14/electrons.jpg"/>
							<p><?php echo _("Tiny, negatively charged particles that orbit the nucleus of atoms."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Resistance"); ?></h3>
						<div>
							<img src="assets/14/resistance.jpg"/>
							<p><?php echo _("A measure of how an object or material reduces the flow of electric current through it.  Resistance is measured in Ohms."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Ohm"); ?></h3>
						<div>
							<img src="assets/14/stock-photo-ohm-electrical-formula-text-on-ohm-symbol-graphic-and-arrangement-concept-94687633.jpg"/>
							<p><?php echo _("The unit that measures how much an object or material reduces the flow of electric current."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Volt"); ?></h3>
						<div>
							<img src="assets/14/volt.jpg"/>
							<p><?php echo _("The unit that measures electric potential. This is the amount of energy that could be transferred by a certain amount of electric charge if electric current was allowed to flow."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Ampere (amps)"); ?></h3>
						<div>
							<img src="assets/14/ampere.jpg"/>
							<p><?php echo _("The unit that measures electric current, or how much electric charge flows through a circuit every second."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Series circuit"); ?></h3>
						<div>
							<img src="assets/14/stock-vector-electrical-diagram-series-connection-68245732.jpg"/>
							<p><?php echo _("When a circuit contains only one path for current to flow.  If that path is broken at any point in the circuit, no current will flow in any part of the circuit."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Parallel circuit"); ?></h3>
						<div>
							<img src="assets/14/stock-vector-electrical-diagram-series-and-parallel-connection-68245747.jpg"/>
							<p><?php echo _("When a circuit contains more than one path for current to flow. Not every charge passes through each resistor every time it goes through the circuit."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Incandescent Bulb"); ?></h3>
						<div>
							<img src="assets/14/bulb.jpg"/>
							<p><?php echo _("A light bulb that works by running current through a thin wire or filament, causing it to heat up and release energy in the form of light and heat. Incandescent bulbs are an inefficient way of lighting up a room."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Fluorescent Light"); ?></h3>
						<div>
							<img src="assets/14/light.jpg"/>
							<p><?php echo _("A light bulb that works by running a current through a gas.  This gas gives off ultraviolet light, which in turn causes a coating on the inside of the bulb to glow.  Fluorescent bulbs are much more energy efficient than incandescent bulbs."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Light Emitting Diode"); ?></h3>
						<div>
							<img src="assets/14/diode.jpg"/>
							<p><?php echo _("Light Emitting Diodes (LEDs) give off light when electrons jump across a semiconductor.  This process is called electroluminescence."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Electricity"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Electric Current"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Circuit"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Atom"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Electron"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Resistance"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Ohm"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Volt"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Ampere (amps)"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Series circuit"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Parallel circuit"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Incandescent Bulb"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Fluorescent Light"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Light Emitting Diode"); ?></button>
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
