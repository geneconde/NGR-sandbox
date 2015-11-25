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

	<title><?php echo _("Basic Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #7894c9; margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		.wrap { border-color: #A23763; }

		.bg { background-image: url(assets/16/bg.jpg);overflow: hidden; }
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
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... basic cells"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Cell"); ?></h3>

						<div>
							<img src="assets/15/cell.jpg"/>

							<p><?php echo _("Basic unit of life enclosed by a membrane."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Cell Membrane"); ?></h3>

						<div>
							<img src="assets/15/cell_membrane.jpg"/>

							<p><?php echo _("Double layer of fats and proteins enclosing a cell."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Diffusion"); ?></h3>

						<div>
							<img src="assets/15/diffusion.jpg"/>

							<p><?php echo _("Movement of any material from areas of high concentration to areas of low concentration."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Cell Wall"); ?></h3>

						<div>
							<img src="assets/15/cell_wall.jpg"/>

							<p><?php echo _("Rigid cellulose structure located outside plant cell membranes."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Chloroplast"); ?></h3>

						<div>
							<img src="assets/15/chloroplast.jpg"/>

							<p><?php echo _("Organelle containing chlorophyll; site of photosynthesis."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
														
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Eukaryote"); ?></h3>

						<div>
							<img src="assets/15/eukaryote.PNG"/>

							<p><?php echo _("Complex cell with a nucleus."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Nucleus"); ?></h3>

						<div>
							<img src="assets/15/nucleus.jpg"/>

							<p><?php echo _("Organelle containing chromosomes."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Organ"); ?></h3>

						<div>
							<img src="assets/15/organ.jpg"/>

							<p><?php echo _("Collection of tissues performing a specialized function."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Mitochondrion"); ?></h3>

						<div>
							<img src="assets/15/mitochondrion.jpg"/>

							<p><?php echo _("Organelle in which cellular respiration occurs."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Osmosis"); ?></h3>

						<div>
							<img src="assets/15/osmosis.jpg"/>

							<p><?php echo _("Diffusion of water across a selectively permeable membrane."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("System"); ?></h3>

						<div>
							<img src="assets/15/system.jpg"/>

							<p><?php echo _("Collection of organs performing similar functions."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Prokaryote"); ?></h3>

						<div>
							<img src="assets/15/prokaryotes.jpg"/>

							<p><?php echo _("Smallest type of living cell."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Tissue"); ?></h3>

						<div>
							<img src="assets/15/tissue.jpg"/>

							<p><?php echo _("Collection of cells performing similar functions."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Cell"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Cell Membrane"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Diffusion"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Cell Wall"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Chloroplast"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Eukaryote"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Nucleus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Organ"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Mitochondrion"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Osmosis"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("System"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Prokaryote"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Tissue"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
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
