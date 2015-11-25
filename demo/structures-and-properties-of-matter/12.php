<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'structures-and-properties-of-matter';
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

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #F16D2D; margin-left: 3%; margin-right: 3%; font-size: 25px; }
		p { color: #000; }

		.wrap { border-color: #FFD8FA; }

		.bg { background-image: url(assets/12/bg.jpg); overflow: hidden !important; }
		.bg > div { -moz-perspective: 600px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #6F57E9; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #787AFA; 
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
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
		button:hover { background-color: #6F57E9; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... the structure and properties of matter"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Atom"); ?></h3>

						<div>
							<img src="assets/12/atom.jpg"/>

							<p><?php echo _("The basic unit of matter. An atom consists of a central nucleus surrounded by electrons."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Matter"); ?></h3>

						<div>
							<img src="assets/12/matter.jpg"/>

							<p><?php echo _("Anything that has mass and takes up space. Atoms combine to comprise matter.  That is, matter is everything that is made up of atoms. Examples would include people, planets, air, water and stars."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Compound"); ?></h3>

						<div>
							<img src="assets/12/compound.jpg"/>

							<p><?php echo _("A substance made up of two or more different kinds of atoms. Compounds can be formed or broken up in chemical reactions. Examples include water, carbon dioxide and salt."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Element"); ?></h3>

						<div>
							<img src="assets/12/element.jpg"/>

							<p><?php echo _("An element is a pure sample of one type of atom. Examples could include gases like hydrogen, oxygen, and helium, or a solid piece of iron or copper."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Properties of Matter"); ?></h3>

						<div>
							<img src="assets/12/properties.jpg"/>

							<p><?php echo _("Descriptors about a piece of matter that describe it. For example, an iron wrench is hard, heavy and gray."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Evaporate"); ?></h3>

						<div>
							<img src="assets/12/evaporate.jpg"/>

							<p><?php echo _("When matter goes from the liquid phase to the gaseous phase. Evaporation is commonly observed with water."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("State of Matter"); ?></h3>

						<div>
							<img src="assets/12/state.jpg"/>

							<p><?php echo _("Whether something is currently a solid, a liquid, or a gas. This can change as heat and or pressure are applied to the matter."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Solid"); ?></h3>

						<div>
							<img src="assets/12/solid.jpg"/>

							<p><?php echo _("One of the states of matter that keep their shape unless pushed or pulled by an outside force. Solids have molecules closely packed together with little room for motion. Examples include ice and metals."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Liquid"); ?></h3>

						<div>
							<img src="assets/12/liquid.jpg"/>

							<p><?php echo _("One of the states of matter that take the shape of the container that holds them. Liquids have molecules that are somewhat less closely packed, allowing them some room to move and interact. Examples include water and mercury."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Gas"); ?></h3>

						<div>
							<img src="assets/12/gas.jpg"/>

							<p><?php echo _("One of the states of matter that will expand into the atmosphere unless constrained by a closed container. Gas phase molecules are very spread apart and can essentially move freely. Examples include water vapor (steam), carbon dioxide and helium."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>


				<div class="container">
					<div class="main">
						<div class="column">
														
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Atom"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Matter"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Compound"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Element"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Properties of Matter"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Evaporate"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("State of Matter"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Solid"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Liquid"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Gas"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
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
