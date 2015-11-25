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

	<title><?php echo _("Inherited Traits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #7894c9; margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		.wrap { border-color: #A23763; }

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
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		button:hover { background-color: #E495A9; }
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... inherited traits"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Chromosome"); ?></h3>

						<div>
							<img src="assets/14/chromosomes.jpg"/>

							<p><?php echo _("A threadlike structure found in cells that contains their DNA.  Each is made of tightly bound strands of DNA coiled together."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Dominant"); ?></h3>

						<div>
							<img src="assets/14/dominant.jpg"/>

							<p><?php echo _("An allele, or trait, that when present in an organism’s DNA, it will appear in the organism’s phenotype.  For example, if brown hair is dominant over red hair, a person with the gene for brown hair will have brown hair, even if they also have the gene for red hair."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Gene"); ?></h3>

						<div>
							<img src="assets/14/gene.jpg"/>

							<p><?php echo _("A portion of a strand of DNA that codes for a specific protein.  There are often multiple versions of the same gene.  Genes can be dominant or recessive, depending on which variant is present in an organism.  An organism will possess two versions of each gene, which may be the same or different."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Genotype"); ?></h3>

						<div>
							<img src="assets/14/genotype.jpg"/>

							<p><?php echo _("The combination of genes present in an organism.  When both versions of a gene are the same and they are the dominant version, the genotype is said to be “homozygous dominant.”  When both versions of a gene are the same and they are the recessive version, the genotype is said to be “homozygous recessive.”  When an organism possesses one dominant gene and one recessive gene, it is said to be “heterozygous\"."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Pedigree"); ?></h3>

						<div>
							<img src="assets/14/pedigree.jpg"/>

							<p><?php echo _("An organism’s parents, grandparents, etc.  A family tree."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
														
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Phenotype"); ?></h3>

						<div>
							<img src="assets/14/phenotype.jpg"/>

							<p><?php echo _("The trait an organism displays as result of its genotype.  If an organism possesses at least one dominant gene, it will present the dominant trait.  If an organism only possesses recessive genes, it will present the recessive trait."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Punnett square"); ?></h3>

						<div>
							<img src="assets/14/punnett.jpg"/>

							<p><?php echo _("A graphical representation of an organism’s parent’s genotypes that shows the potential genotypes the organism itself could possess.  The square also shows the probability of each genotype the organism could possess."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Recessive"); ?></h3>

						<div>
							<img src="assets/14/recessive.jpg"/>

							<p><?php echo _("An allele, or trait, that when present in an organism’s DNA, it will appear in the organism’s phenotype so long as the organism does not also possess a dominant version of the gene.  For example, if red hair is recessive to brown hair, a person with the gene for red hair will have red hair as long as they do not also have the gene for brown hair."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Trait"); ?></h3>

						<div>
							<img src="assets/14/trait.jpg"/>

							<p><?php echo _("A physical characteristic of an organism.  Generally there are different varieties of traits possible for an organism.  Examples would be things like eye and hair color."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>				
				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Chromosome"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Dominant"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Gene"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Genotype"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Pedigree"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Phenotype"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Punnett square"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Recessive"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Trait"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
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
