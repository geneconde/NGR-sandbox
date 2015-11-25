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

	<title><?php echo _("Specialized Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #d62b00; margin-left: 3%; margin-right: 3%; font-size: 31px;}
		p { color: #fff; text-align: left; }

		.wrap { border-color: #8C5C52; }

		.bg { background-image: url(assets/16/bg.jpg); }
		.bg > div { -moz-perspective: 600px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #e2e2e2; }
		.md-content p { font-size: 16px;text-align: center; color:; }
		.md-content img { width: 260px; height: 200px; margin-left:9px;}
		.md-content h3 { background-color: #50D9AD; color: #fff; }



		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #50D9AD; 
			color: #fff;
			font-size: 16px;
			letter-spacing: 1px;
			text-transform: uppercase;
			cursor: pointer;
			display: inline-block;
			margin: 1% 0;
			outline: 0;
			border-radius:5px;
		}

		button:hover { background-color: #D68886; color: #fff; }
		@media screen and (max-width: 1250px ){
			.bg{ 	background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; 
					overflow: hidden;
			}
		}
		@media (max-width: 960px){ #buttons { background-color: #468853; } }
		@media only screen and (orientation: landscape) and (min-device-width : 768px) and (max-device-width : 1024px){
			#buttons { background-color: #468853 !important; }
		}
		@media only screen and (orientation: portrait) and (min-device-width : 768px) and (max-device-width : 1024px){
			#buttons { background-color: #468853 !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... specialized cells"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Cell"); ?></h3>

						<div>
							<img src="assets/16/cell.jpg"/>

							<p><?php echo _("A unit making up organisms. An organism can be made of one cell, or many cells, but all living things are made of cells."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Egg Cells"); ?></h3>

						<div>
							<img src="assets/16/eggcell.jpg"/>

							<p><?php echo _("A cell used in reproduction. Egg cells only contain half as many chromosomes as normal cells, and require genetic material from another cell to grow into a new organism."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Embryo"); ?></h3>

						<div>
							<img src="assets/16/embrayo.jpg"/>

							<p><?php echo _("A fertilized egg cell grows into an embryo. Embryos can then continue to grow into a new organism as cells divide and specialize."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Lymphocyte"); ?></h3>

						<div>
							<img src="assets/16/lymphocyte.jpg"/>

							<p><?php echo _('The cells that fight off infections in an organism. It is also known as "White blood cells".'); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Mitochondrion"); ?></h3>

						<div>
							<img src="assets/16/mitochondrion.jpg"/>

							<p><?php echo _('The part of a cell where molecules are converted so that the cell might use their energy. Sometimes called the "power plant" of the cell.'); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Nucleus"); ?></h3>

						<div>
							<img src="assets/16/nucleus.jpg"/>

							<p><?php echo _("The center of a cell that contains its DNA, or genetic material."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Neuron"); ?></h3>

						<div>
							<img src="assets/16/neuron.jpg"/>

							<p><?php echo _("The cells of the brain and nervous system that transfer electrical signals throughout an organism's body. Also known as brain and nerve cells."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Organ"); ?></h3>

						<div>
							<img src="assets/16/organ.jpg"/>

							<p><?php echo _("A collection of cells within an organism that work together to do a specific function. Examples include the heart, lungs, stomach and liver."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("System"); ?></h3>

						<div id = "md_img">
							<img src="assets/16/system.jpg"/>

							<p><?php echo _("A collection of organs and tissues that work together to do a collection of related tasks and functions. Examples include the cardiovascular system, the nervous system and the digestive system."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Tissue"); ?></h3>

						<div id = "md_img">
							<img src="assets/16/tissue.jpg"/>

							<p><?php echo _("A type of cell that is specialized for a specific task. Examples include skin cells, muscle and cartilage."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Cell"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Egg Cells"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Embryo"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Lymphocyte"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Mitochondrion"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Nucleus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Neuron"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Organ"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("System"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Tissue"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="15.php#screen2" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
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
