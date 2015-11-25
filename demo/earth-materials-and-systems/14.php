<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #46A6C7; font-size: 30px; }
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/14/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #eee; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
.md-content h3 { background: #FFAA55; color: black; }
button:hover { background: #FF7F2A; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #FFAA55;
	color: black;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... earth materials and systems"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Geosphere/Lithosphere"); ?></h3>
						<div>
							<img src="images/14/geosphere.jpg"/>
							<p><?php echo _("The geosphere, or lithosphere, is all of the solid earth materials like rocks and soil that make up the land we live on."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Atmosphere"); ?></h3>
						<div>
							<img src="images/14/atmosphere.jpg"/>
							<p><?php echo _("The atmosphere is composed of the gaseous earth materials that make up the earth's surface. The white color you can see is the clouds in the atmosphere, which are made from water, but the rest of the atmosphere is mostly invisible and is made from mostly nitrogen, oxygen, carbon dioxide, water vapor, and a lot of other gasses in very small quantities. It's also known as the air you breathe."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Biosphere"); ?></h3>
						<div>
							<img src="images/14/biosphere.jpg"/>
							<p><?php echo _("The biosphere is all of the living things on earth. From space, the biosphere looks mostly green because of all the trees and plants. But the biosphere includes all living things from bacteria to elephants to giant sequoia trees and us!"); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Hydrosphere"); ?></h3>
						<div>
							<img src="images/14/hydrosphere.jpg"/>
							<p><?php echo _("The hydrosphere is the liquid water and solid ice (some of the white on the earth that can be viewed from space) that make up the oceans, rivers, lakes, and glaciers on the earth."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Anthrosphere"); ?></h3>
						<div>
							<img src="images/14/anthrosphere.jpg"/>
							<p><?php echo _("Some scientists call the part of the environment that includes humans and their impact the anthrosphere."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Earth materials"); ?></h3>
						<div>
							<img src="images/14/earth.jpg"/>
							<p><?php echo _("Earth materials are the matter or \"stuff\" that make up the earth."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Erosion"); ?></h3>
						<div>
							<img src="images/14/erosion.jpg"/>
							<p><?php echo _("The process of the gradual wearing away and breaking down of rocks is called erosion. Erosion can even wear down a mountain range from high peaks to create a flat plain."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("System"); ?></h3>
						<div>
							<img src="images/14/system.jpg"/>
							<p><?php echo _("A system is something with interrelated components that work together. You can think of the earth as one big system with many subsystems, such as the hydrosphere, atmosphere, biosphere, and geosphere. Each subsystem interacts with every other subsystem."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Landscape"); ?></h3>
						<div>
							<img src="images/14/landscape.jpg"/>
							<p><?php echo _("The landscape is the features of the land of a certain area. The Earth's surface is filled with many diverse and unique landscapes."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Property"); ?></h3>
						<div>
							<img src="images/14/property.jpg"/>
							<p><?php echo _("A property is a certain trait or quality that is shared by all the members of a set or group of things. The properties of different things can be used to tell things apart and arrange them into groups."); ?></p>
							<p><?php echo _("For example, rocks are often grouped based on their properties. One group might include rocks that are smooth, shiny, and difficult to break apart. Another group might include rocks that are bumpy, dull, and easy to break apart. Each of the ways that you can compare the rocks is an example of a property."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Interaction"); ?></h3>
						<div>
							<img src="images/14/interaction.jpg"/>
							<p><?php echo _("An interaction is the relationship or exchange between different living things or systems. For example, the interaction between people and dogs is usually very friendly, as dogs serve as wonderful pets for many people. The interaction between dogs and cats, however, is often not as friendly!"); ?></p>
							<p><?php echo _("Another example is the interaction with the biosphere and the atmosphere. It can be natural with the animals and trees exchanging oxygen and carbon dioxide with the atmosphere in a normal healthy way or the interaction can be destructive when humans pollute the atmosphere with too much carbon dioxide causing unnatural global warming."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
							
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Process"); ?></h3>
						<div>
							<img src="images/14/process.jpg"/>
							<p><?php echo _("A process is a series of steps that lead to a specific result or product. In nature, there are many processes at work. For example, when you eat, you turn food into energy for your body through a process called digestion. You breathe air in and out of your lungs through a process called respiration."); ?></p>
							<p><?php echo _("Here is an image of a tree that uses the energy of the sun to take in carbon dioxide from the atmosphere and produce oxygen and food through the process of photosynthesis."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Geosphere/Lithosphere"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Atmosphere"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Biosphere"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Hydrosphere"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Anthrosphere"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Earth materials"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Erosion"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("System"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Landscape"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Property"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Interaction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Process"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="13.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = '/scripts/';</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
