<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
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
<script src="scripts/jpreloader.min.js"></script>
<style>
.bg { background-image: url('images/16/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #C5DD85; border-right: 1px dashed #C5DD85; }
h1 { color: #544B3F; }
.bg > div { -moz-perspective: 600px; }
.column { width: 100%; text-align: center; margin: 10% auto;}
.md-content  { background: white; }
.md-content h3 { background: #C4E282; font-size: 24px !important; }
p { font-size: 16px; }
button:hover { background: rgba(228, 196, 68, 0.75); }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #C4E282;
	color: black;
	font-size: 15px;
	outline: none;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
.md-content div img { width: 60%; margin: 0 auto; display: block; }
.md-content > div p { text-align: left; }
<?php if($language == "es_ES") { ?>
	
<?php } ?> 

html[dir="rtl"] h1 { font-size: 30px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary... related to... reproduction"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Reproduction"); ?></h3>
						<div>
							<img src="images/16/reproduction.jpg"/>
							<p><?php echo _("Reproduction is the act of making the same thing again. Living things must reproduce themselves to continue as a form of life. All plants and animals have a system of reproduction. Some plants do it by dropping seeds. Some animals lay eggs. Other animals have babies. Insects reproduce many, many times more offspring than larger animals do."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Offspring"); ?></h3>
						<div>
							<img src="images/16/offspring.jpg"/>
							<p><?php echo _("Offspring are new living things that come from one or more parents. When a female dog has a litter of puppies, she has given birth to offspring."); ?></p>
							<p><?php echo _("It is very important that living things make offspring. If they did not, over time they would eventually no longer exist on Earth. Every type of living thing makes offspring. Even plants have offspring. Many types of flowers, plants, and trees drop seeds from which their offspring will grow."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Asexual Reproduction"); ?></h3>
						<div>
							<img src="images/16/asexual.jpg"/>
							<p><?php echo _("Asexual reproduction is a way of producing offspring that involves only one parent. There is no combining of a female sex cell with a male sex cell."); ?></p>
							<p><?php echo _("Asexual reproduction is the primary means of reproduction for many single-celled living things such as bacteria. Many plants and fungi also reproduce asexually, but asexual reproduction is not common among multicellular living things."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Sexual Reproduction"); ?></h3>
						<div>
							<img src="images/16/sexual.jpg"/>
							<p><?php echo _("In sexual reproduction, sperm from the male is united with an egg from the female creating a fertilized egg. Once its place is secure, it develops into a fetus and then into an infant, ready for birth."); ?></p>
							<p><?php echo _("Like animals, plants also reproduce sexually—the egg and sperm are produced in the flowers of flowering plants."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Flower"); ?></h3>
						<div>
							<img src="images/16/flower.jpg"/>
							<p><?php echo _("Plant reproductive structures are found in flowers. Colored petals on a flower and colored feathers on a bird are both structures they have to help reproduction take place."); ?></p>
							<p><?php echo _("Many plants have both male and female parts in the same flower. The male part is called a stamen. Sperm are packaged into particles called pollen grains. The female part of the flower is called the pistil."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Pollination/ Pollen"); ?></h3>
						<div>
							<img src="images/16/pollination.jpg"/>
							<p><?php echo _("Pollen is a yellowish powder found inside a flowering plant. Pollen helps the plant to make more plants, through the process of pollination."); ?></p>
							<p><?php echo _("Insects such as bees and butterflies go to flowers to eat. While they eat, some of the flower's pollen sticks to them. When one insect goes to another flower, it takes the pollen with it. Some of the first flower's pollen rubs off onto the second flower. That helps the second flower grow seeds."); ?></p>
							<p><?php echo _("Look at the bee in this photograph. Can you see the pollen?"); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Courtship Display"); ?></h3>
						<div>
							<img src="images/16/courtship.jpg"/>
							<p><?php echo _("Many mammal, bird, fish, and reptile males engage in courtship display behaviors to attract females."); ?></p>
							<p><?php echo _("Some examples of courtship behavior are peacocks showing off their tail feathers; stallions or bulls pawing at the ground; or cuttlefish changing colors almost instantly."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Ornithology"); ?></h3>
						<div>
							<img src="images/16/ornithology.jpg"/>
							<p><?php echo _("Ornithology is the study of birds."); ?></p>
							<p><?php echo _("An ornithologist may work for a zoo to prepare a proper habitat for a bird to live in."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Reproduction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Offspring"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Asexual Reproduction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Sexual Reproduction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Flower"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Pollination/ Pollen"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Courtship Display"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Ornithology"); ?></button>
						</div>
					</div>
				</div><!-- /container -->
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="15.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<div class="clear"></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
