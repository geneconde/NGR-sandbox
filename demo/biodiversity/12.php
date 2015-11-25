<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
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
html { overflow: hidden; }
h1 { color: #800a9d; margin: 0 3%; }
.wrap { border-left: 1px dashed #7bf8f4; border-right: 1px dashed #7bf8f4; }
.bg { background: url('images/12/bg.png') no-repeat; background-size: 100% 100%; width: 100% !important; height:100%; position: relative; }
.bg > div { -moz-perspective: 600px; width: 95%; overflow: hidden; }
.column { width: 95%; text-align: center; margin: 10% auto;}
.md-content { background: #fff; }
.md-content p { font-size: 16px; }
/*.md-content img { width: 90%; }*/
#modal-2 img { width: 50%; }
.md-content h3 { background: #850199; color: #7bf8f4; }
button:hover { background: #a334b4; }
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
	background: #850199;
	color: #7bf8f4;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
div.md-overlay {
	width: 100%;
}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 33px; }
<?php } ?>
html[dir="rtl"] h1 { font-size: 30px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... biodiversity"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Biodiversity"); ?></h3>
						<div>
							<img src="images/12/biodiversity.jpg"/>
							<p><?php echo _("Biodiversity describes the variety of species found in Earth's terrestrial and oceanic ecosystems."); ?></p>
							<p><?php echo _("The completeness or integrity of an ecosystem's biodiversity is often used as a measure of its health."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Biome"); ?></h3>
						<div>
							<img src="images/12/biome.jpg"/>
							<p><?php echo _("A biome is a particular ecosystem that is defined by the climate and geography of its location and by the plants, animals, and organisms living there. There are many different types of biomes. Terrestrial biomes are ecosystems that are on land. The tundra is an example of a terrestrial biome. In the tundra, you will find very cold temperatures and the plant life consists of vegetation such as shrubs and grasses that are low to the ground. There are very few trees, if any at all. An aquatic biome is an ecosystem that exists under the water. A coral reef is an example of an aquatic biome that exists in shallow, tropical waters near the equator. Coral reefs are characterized by a great diversity of marine life. The picture above shows a desert. A desert is another type of biome."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Climate"); ?></h3>
						<div>
							<img src="images/12/climate.png"/>
							<p><?php echo _("Climate refers to the weather in specific places over a long period of time."); ?></p>
							<p><?php echo _("When thinking about the climate of a place, scientists look at different things, such as the amount of rain and snow, temperature, the number of sunny and cloudy days, and wind activity. The scientists look at weather information that has been collected over a long period of time to learn about the climate of an area."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Ecosystem"); ?></h3>
						<div>
							<img src="images/12/ecosystem.jpg"/>
							<p><?php echo _("An ecosystem is all the living and non-living things in a given place. An ecosystem can be as large as a forest or as small as a rotting log. There are both land and water ecosystems."); ?></p>
							<p><?php echo _("Ponds, rivers, lakes, and oceans are all examples of water ecosystems. A pond ecosystem contains not only water, but living organisms such as fish, plants, insects, frogs, and turtles. Common land ecosystems include forests, deserts, and grassy meadows."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Habitat"); ?></h3>
						<div>
							<img src="images/12/habitat.jpg"/>
							<p><?php echo _("A habitat is a place where a plant or animal lives. A forest is one type of habitat that covers a large part of Earth. A rainforest is a specific type of habitat that has many trees. It is a good habitat for animals such as birds, bats, and monkeys."); ?></p>
							<p><?php echo _("Because there is much water in the rainforest, it is a good habitat for many plants. Plants living in this type of habitat grow to be very large and have very big leaves."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Species"); ?></h3>
						<div>
							<img src="images/12/species.jpg"/>
							<p><?php echo _("A species is a very specific kind of living thing. Plants and animals of the same species are able to breed together to produce more plants and animals of the same species. The species that a living thing belongs to is identified based on all of its characteristics. The species of a living thing can tell you what other living things it is related to."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Tundra"); ?></h3>
						<div>
							<img src="images/12/tundra.jpg"/>
							<p><?php echo _("The tundra biome most often occurs in the very far north, where temperatures are very cold, and most water shows up as snow."); ?></p>
							<p><?php echo _("Tundra shows up near the tops of tall mountains where the living conditions are so harsh large plants can't survive."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Taiga"); ?></h3>
						<div>
							<img src="images/12/taiga.jpg"/>
							<p><?php echo _("A biome that features many large needled trees goes by two names: taiga and boreal forest."); ?></p>
							<p><?php echo _("This community also supports very large mammals like moose, elk, and bears. Some of the oldest, largest trees in the world are found in the taiga biome."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Boreal forest"); ?></h3>
						<div>
							<img src="images/12/borealforest.jpg"/>
							<p><?php echo _("A biome that features many large needled trees goes by two names: taiga and boreal forest."); ?></p>
							<p><?php echo _("This community also supports very large mammals like moose, elk, and bears.  Some of the oldest, largest trees in the world are found in the boreal forest biome."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Temperate"); ?></h3>
						<div>
							<img src="images/12/temperate.png"/>
							<p><?php echo _("Regions that have warm summers and cold winters, located between the tropics and polar regions, are said to be temperate."); ?></p>
							<p><?php echo _("Grasslands may be tropical or temperate, but always have less rain than rainforests and more rain than deserts."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Grassland"); ?></h3>
						<div>
							<img src="images/12/grassland.jpg"/>
							<p><?php echo _("Grasslands are a biome that may be tropical or temperate, but always have less rain than rainforests and more rain than deserts."); ?></p>
							<p><?php echo _("Rainforests, deserts, and grasslands are all examples of biomes."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Rainforest"); ?></h3>
						<div>
							<img src="images/12/rainforest.jpg"/>
							<p><?php echo _("A tropical rainforest is a place where it is always warm and rain falls nearly every day."); ?></p>
							<p><?php echo _("Rainforests, grasslands, and deserts are all examples of biomes."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Desert"); ?></h3>
						<div>
							<img src="images/12/desert.jpg"/>
							<p><?php echo _("A desert is a place that may be warm or cold, but has very little rainfall."); ?></p>
							<p><?php echo _("Deserts may be tropical or temperate, but they always receive very little rainfall."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Biosphere"); ?></h3>
						<div>
							<img src="images/12/biosphere.jpg"/>
							<p><?php echo _("The biosphere is the collection of all of Earth's ecosystems."); ?></p>
							<p><?php echo _("All life on Earth, in all of the unique biomes, is contained within the biosphere."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Biosphere 2"); ?></h3>
						<div>
							<img src="images/12/biosphere2.jpg"/>
							<p><?php echo _("In an effort to learn even more about the interactions between people and their surrounding environments, scientists have built a large man-made environment called Biosphere 2. It is intended to help us understand the needs of people if they were to travel to other planets."); ?></p>
							<p><?php echo _("Sealed off from the outside world, Biosphere 2 takes in solar energy and uses it to grow plants and animals; recycle water, oxygen, and waste; and provide the power needed to operate the facility. Biosphere 2 supports six different biomes."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Biodiversity"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Biome"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Climate"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Ecosystem"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Habitat"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Species"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Tundra"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Taiga"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Boreal forest"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Temperate"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Grassland"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Rainforest"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Desert"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Biosphere"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Biosphere 2"); ?></button>
						</div>
					</div>
				</div><!-- /container -->
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
		<!-- </div> -->
	</div></div>
	
	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
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
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
