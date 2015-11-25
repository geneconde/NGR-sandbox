<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'genetic-codes';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Genetic Codes"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #AC9157; }
.wrap { border-color: #fff16a; }
.bg { background-image: url(images/16/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #fdffd7; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
#modal-3 .md-content img { height: 300px; }
#modal-5 .md-content img { height: 300px; }
#modal-15 .md-content img { height: 260px; }
#modal-16 .md-content img { height: 300px; }
#modal-17 .md-content img { height: 260px; }
.md-content h3 { background: #B6AE53; color: #fff; }
button:hover { background: #C2B55A; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #B6AE53;
	color: #fff;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 28px; }
<?php endif; ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... genetic codes"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Asexual reproduction"); ?></h3>
						<div>
							<img src="images/16/asexual.jpg">
							<p><?php echo _("Asexual reproduction is a way of producing offspring that involves only one parent. There is no combining of a female sex cell with a male sex cell."); ?></p>
							<p><?php echo _("Asexual reproduction is the primary means of reproduction for many single-celled living things such as bacteria. Many plants and fungi also reproduce asexually, but asexual reproduction is not common among multicellular living things."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Sexual reproduction"); ?></h3>
						<div>
							<img src="images/16/sexual.jpg">
							<p><?php echo _("In sexual reproduction, sperm from the male is united with an egg from the female creating a fertilized egg. Once its place is secure, it develops into a fetus and then into an infant, ready for birth."); ?></p>
							<p><?php echo _("Like animals, plants also reproduce sexually—the egg and sperm are produced in the flowers of flowering plants."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Mitosis"); ?></h3>
						<div>
							<img src="images/16/mitosis.jpg">
							<p><?php echo _("Mitosis is the cell division process by which cells reproduce asexually. One \"parent\" cell will duplicate its DNA and divide into two identical \"daughter\" cells, each possessing half of their parent's DNA; this is mitosis."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Heredity"); ?></h3>
						<div>
							<img src="images/16/heredity.jpg">
							<p><?php echo _("Heredity is the passing on of physical traits from parents to offspring through DNA in the process of sexual reproduction. Heredity is how traits are passed from one generation to the next."); ?></p>
							<p><?php echo _("Heredity can be tracked using a chart called a pedigree."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Segregation"); ?></h3>
						<div>
							<img src="images/16/segregation.jpg">
							<p><?php echo _("In heredity, segregation is the rule that each individual receives half of its genetic information from each parent, or two genes for each trait."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Independent Assortment"); ?></h3>
						<div>
							<img src="images/16/independent-assortment.jpg">
							<p><?php echo _("In heredity, independent assortment is the rule that the gene someone inherits from their mother for a trait, such as nose shape, doesn't do anything to influence which gene she inherits for her hair color.  Independent assortment allows us to make predictions about the combinations of traits in generations not yet born."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Recessive Trait"); ?></h3>
						<div>
							<img src="images/16/recessive.png">
							<p><?php echo _("In heredity, a recessive trait is a physical characteristic that can be \"hidden\"; that is, a person can carry a gene for a trait, but it can be masked by another (dominant) trait. Recessive traits can be passed on and show up in future generations."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Dominant Trait"); ?></h3>
						<div>
							<img src="images/16/dominant.png">
							<p><?php echo _("In heredity, a dominant trait is a physical characteristic that is expressed even when only one gene allele coding for the trait is present. Dominant traits can \"mask\" recessive traits, which are gene alleles for a trait that are not expressed when covered by the dominant trait for that physical characteristic."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Chromosome"); ?></h3>
						<div>
							<img src="images/16/chromosome.jpg">
							<p><?php echo _("DNA is found in structures called chromosomes, which are tightly-packed strands of DNA held together by proteins. Each chromosome's DNA contains volumes of specific information that codes for the structures and functions of the body."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("DNA"); ?></h3>
						<div>
							<img src="images/16/dna.jpg">
							<p><?php echo _("DNA, short for deoxyribonucleic acid, is the molecule of living organisms, found in the nucleus of their cells, which contains volumes and volumes of information. DNA functions as a blueprint, with a 4-letter alphabet acting as a code system for making proteins, which are essential for an organism's structures and functions."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Gene"); ?></h3>
						<div>
							<img src="images/16/gene.jpg">
							<p><?php echo _("A gene is a section of DNA that has information that specifically codes for the making of a certain physical trait. Chromosomes have many genes on them."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Amino Acids"); ?></h3>
						<div>
							<img src="images/16/amino.jpg">
							<p><?php echo _("Amino acids are the building blocks of proteins, which are the \"workers\" of the body, essential for the body's structures and functions. There are about 20 different amino acids."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Gametes"); ?></h3>
						<div>
							<img src="images/16/gametes.jpg">
							<p><?php echo _("Gametes are the reproductive cells of the body. Male gametes are sperm cells; female gametes are egg cells.  All gametes have only one copy of each different type of chromosome."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Sperm cells"); ?></h3>
						<div>
							<img src="images/16/sperms.jpg">
							<p><?php echo _("Sperm cells are male reproductive cells. Sperm cells have only one copy of each different type of chromosome."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Egg cells"); ?></h3>
						<div>
							<img src="images/16/egg.jpg">
							<p><?php echo _("Egg cells are female reproductive cells. Egg cells have only one copy of each different type of chromosome."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3><?php echo _("Meiosis"); ?></h3>
						<div>
							<img src="images/16/meiosis.png">
							<p><?php echo _("Meiosis is the process in which gametes, or reproductive cells, have their chromosome number cut in half as the cell divides twice.  In the first division of meiosis, chromosomes are sorted to produce cells containing only one of each type.  In the second division of meiosis, chromosomes that have already copied themselves break apart, producing sex cells with one of each chromosome type."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-17">
					<div class="md-content">
						<h3><?php echo _("Mutation"); ?></h3>
						<div>
							<img src="images/16/mutation.jpg">
							<p><?php echo _("Mutations are small changes that occur in the DNA that carries the information that makes living things what they are.  Mutations are rare, but if inherited, over time can have an effect on a population."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Asexual reproduction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Sexual reproduction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Mitosis"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Heredity"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Segregation"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Independent Assortment"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Recessive Trait"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Dominant Trait"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Chromosome"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("DNA"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Gene"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Amino Acids"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Gametes"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Sperm cells"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Egg cells"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("Meiosis"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("Mutation"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="15.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = '/scripts/';</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include_once "setlocale.php"; ?>
</body>
</html>
