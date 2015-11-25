<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #547b04; }
.wrap { border-left: 1px dashed #ffc71c; border-right: 1px dashed #ffc71c; }
.bg { background: url('images/12/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.bg > div { -moz-perspective: 600px; }
.bg > div.md-overlay{width:100%;}
.column { width: 95%; text-align: center; margin: 10% auto;}
.md-content { background: #ffeb66; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
.md-content h3 { background: #5f860a; color: #fff; }
div.title{width: 95%;}
button:hover { background: #7aa125; }
button {
	outline: none;
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #5f860a;
	color: #fff;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 30px; }
<?php } ?> 
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="title">
				<h1><?php echo _("Reviewing key vocabulary related to... the energy for life"); ?></h1>
			</div>
			<div class="md-modal md-effect" id="modal-1">
				<div class="md-content">
					<h3><?php echo _("Photosynthesis"); ?></h3>
					<div>
						<img src="images/12/photosynthesis.jpg"/>
						<p><?php echo _("Photosynthesis, the process by which producers such as plants obtain their energy, uses light energy to convert carbon dioxide and water into sugar and oxygen."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-2">
				<div class="md-content">
					<h3><?php echo _("Chloroplast"); ?></h3>
					<div>
						<img src="images/12/chloroplast.jpg"/>
						<p><?php echo _("Photosynthesis occurs in the part of a plant cell that is actually green, a structure called a chloroplast. Chloroplast organelles are found mostly in leaves and stems, and contain a green pigment chemical called chlorophyll which is able to absorb energy from the sun."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-3">
				<div class="md-content">
					<h3><?php echo _("Chlorophyll"); ?></h3>
					<div>
						<img src="images/12/chlorophyll.jpg"/>
						<p><?php echo _("Within the chloroplast organelle of plant leaves and stems is a green pigment called chlorophyll, which is able to absorb energy from the sun. Thus, chlorophyll is essential in photosynthesis."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-4">
				<div class="md-content">
					<h3><?php echo _("Starch"); ?></h3>
					<div>
						<img src="images/12/starch.jpg"/>
						<p><?php echo _("Most of our energy comes from the sugars and starches in our diets. Starches are actually long chains of simple sugar molecules, bonded together."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-5">
				<div class="md-content">
					<h3><?php echo _("Cellular respiration"); ?></h3>
					<div>
						<img src="images/12/cellular-respiration.jpg"/>
						<p><?php echo _("Cellular respiration is a complex, many-stepped process in which energy is released through the breaking down of sugar and use of oxygen. Cellular respiration releases energy and forms carbon dioxide and water."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-6">
				<div class="md-content">
					<h3><?php echo _("Producer"); ?></h3>
					<div>
						<img src="images/12/producer.jpg"/>
						<p><?php echo _("Green plants, and some other organisms in nature, are producers. Instead of consuming other organisms, producers use the process of photosynthesis to produce the energy they need to power their own cells."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-7">
				<div class="md-content">
					<h3><?php echo _("Consumer"); ?></h3>
					<div>
						<img src="images/12/consumer.jpg"/>
						<p><?php echo _("Consumers are organisms that cannot produce their own energy through photosynthesis and, thus, eat producers. They digest the plant compounds and use them for energy and for building their own carbohydrates, proteins, and fats. A bison, tiger, and people are examples of consumers."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-8">
				<div class="md-content">
					<h3><?php echo _("Herbivore"); ?></h3>
					<div>
						<img src="images/12/herbivore.jpg"/>
						<p><?php echo _("An herbivore is a type of consumer; herbivores eat only plants. Elephants, giraffes, and deer are examples of herbivores."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-9">
				<div class="md-content">
					<h3><?php echo _("Carnivore"); ?></h3>
					<div>
						<img src="images/12/carnivore.jpg"/>
						<p><?php echo _("A carnivore is a type of consumer; carnivores eat only meat. Cats, dogs, and crocodiles are examples of carnivores."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-10">
				<div class="md-content">
					<h3><?php echo _("Omnivore"); ?></h3>
					<div>
						<img src="images/12/omnivore.jpg"/>
						<p><?php echo _("An omnivore is a type of consumer; omnivores eat both plants and meat. Bears, birds, and people are examples of omnivores."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-11">
				<div class="md-content">
					<h3><?php echo _("Food chain"); ?></h3>
					<div>
						<img src="images/12/food-chain.jpg"/>
						<p><?php echo _("A direct sequence of producer organisms being eaten by consumer organisms such as herbivores, which are then eaten by second-order consumers such as omnivores and carnivores, is called a food chain."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-12">
				<div class="md-content">
					<h3><?php echo _("Decomposer"); ?></h3>
					<div>
						<img src="images/12/decomposer.jpg"/>
						<p><?php echo _("When a living thing dies and is not consumed by an animal, it is consumed instead by a group of organisms called decomposers. Bacteria and fungi are two main types of decomposers, which also go to work on the waste matter dropped by animals."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-13">
				<div class="md-content">
					<h3><?php echo _("Coal"); ?></h3>
					<div>
						<img src="images/12/coal.jpg"/>
						<p><?php echo _("When plant materials are preserved in such a way that their complex carbon-based molecules are kept mostly intact, and then compressed beneath many layers of rock, coal is produced. Coal is an example of a fossil fuel."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-14">
				<div class="md-content">
					<h3><?php echo _("Petroleum"); ?></h3>
					<div>
						<img src="images/12/petroleum.jpg"/>
						<p><?php echo _("When ocean microorganisms are preserved in such a way that their complex carbon-based molecules are kept mostly intact, and then compressed beneath many layers of rock, crude oil, or petroleum, is produced. Petroleum is an example of a fossil fuel."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			<div class="md-modal md-effect" id="modal-15">
				<div class="md-content">
					<h3><?php echo _("Fossil Fuels"); ?></h3>
					<div>
						<img src="images/12/fossil.jpg"/>
						<p><?php echo _("Coal and petroleum are considered to be fossil fuels because they are the remains of living organisms, which are called fossils. Fossil fuels are considered to be a nonrenewable resource."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="container">
				<!-- Top Navigation -->
				<div class="main clearfix">
					<div class="column">
						<!-- special modal that will add a perspective class to the html element -->
						<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Photosynthesis"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Chloroplast"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Chlorophyll"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Starch"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Cellular respiration"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Producer"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Consumer"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Herbivore"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Carnivore"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Omnivore"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Food chain"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Decomposer"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Coal"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Petroleum"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Fossil Fuels"); ?></button>
					</div>
				</div>
			</div><!-- /container -->
			<div class="clear"></div>
			<div class="md-overlay"></div><!-- the overlay element -->
		</div>
	
	</div>
</div>
	<div class="clear"></div>
	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
