<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'chemical-and-physical-changes';
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

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #00A7D4; margin-left: 3%; margin-right: 3%; font-size: 29px;}
		p { color: #fff; }

		.wrap { border-color: #AFF8FF; }

		.bg { background-image: url(assets/14/bg.jpg); overflow: hidden; background-size: 100% 100% !important;}
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
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... chemical and physical changes"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Properties of Matter"); ?></h3>

						<div>
							<img src="assets/14/properties.jpg"/>

							<p><?php echo _("Descriptors about a piece of matter that describe it. For example, an iron wrench is hard, heavy, and gray."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Change of State"); ?></h3>

						<div>
							<img src="assets/14/changes.jpg"/>

							<p><?php echo _("A \"state\" of matter is whether it’s a solid, liquid or gas. When matter is heated or cooled, it can \"change state\" from one of these states to another, like water melting changes from a solid state to a liquid state."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Mixture"); ?></h3>

						<div>
							<img src="assets/14/mixture.jpg"/>

							<p><?php echo _("A mixture is when two substances are mixed together but don’t react chemically to form new chemical compounds. The original substances are still in the mixture and can be changed back to their original form relatively easily. This is called a \"reversible\" change. Dissolving sugar in water is a good example of a mixture."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Physical Change"); ?></h3>

						<div>
							<img src="assets/14/physical.jpg"/>

							<p><?php echo _("A physical change is when a substance changes form and no new substances are created from chemical changes. Mixing and changes of state are good examples of physical changes."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Chemical Change"); ?></h3>

						<div>
							<img src="assets/14/chemical.jpg"/>

							<p><?php echo _("When substances mix together but then have a chemical reaction with each other to form new chemical compounds. Burning a candle is a good example of chemical change. Methane gas and oxygen gas react to form new chemical compounds carbon dioxide and water."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Chemical Reaction"); ?></h3>

						<div>
							<img src="assets/14/chem.jpg"/>

							<p><?php echo _("When chemical compounds, like methane gas and oxygen gas, react to form new chemical compounds like carbon dioxide and water."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Evaporate"); ?></h3>

						<div>
							<img src="assets/14/evaporate.jpg"/>

							<p><?php echo _("When matter goes from the liquid phase to the gaseous phase.  Evaporation is commonly observed with water."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Conservation of Matter"); ?></h3>

						<div>
							<img src="assets/14/conservation.jpg"/>

							<p><?php echo _("Matter can neither be created, nor destroyed.  The amount of mass at the start of a physical or chemical change is the same as the mass at the end."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Chemical Compound"); ?></h3>

						<div>
							<img src="assets/14/compound.jpg"/>

							<p><?php echo _("Atoms that share electrons in a definite manner and so are deemed as being \"bound\" together.  Some examples include water (H<sub>2</sub>O), carbon dioxide (CO<sub>2</sub>) and methane (CH<sub>4</sub>)"); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Reversible"); ?></h3>

						<div>
							<img src="assets/14/reversible.jpg"/>

							<p><?php echo _("A process is reversible if there is a way for everything at the end of the process to be changed back to the way it was beforehand.  For example, phase changes are reversible processes; liquid water that is frozen can be melted again to be liquid, and the same amount of liquid water will be present after melting as before freezing."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Properties of Matter"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Change of State"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Mixture"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Physical Change"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Chemical Change"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Chemical Reaction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Evaporate"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Conservation of Matter"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Chemical Compound"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Reversible"); ?></button>
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
