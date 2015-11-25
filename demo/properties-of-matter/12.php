<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
.wrap { border-left: 1px dashed #B1834C !important; border-right: 1px dashed #B1834C !important; }
.bg { background-image: url('images/12/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
.bg > div { width: 100%; }
h1 { color: darkgreen; padding: 25px 0 0 30px; font-size: 30px; }
h3 { margin:0; padding: 0 10px; font-size:24px !important; }
.bold { font-weight: bold; }

.column { width: 100%; text-align: center; margin: 10% auto;}
p { font-size: 16px; }
button:hover { background: rgb(116, 148, 69); }

button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: darkgreen;
	color: rgb(255, 255, 255);
	font-size: 15px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
.md-content  { background: #EEC181; }
.md-content h3 { background: #CB9555; }
html[dir="rtl"] .column { width:94%; }
html[dir="rtl"] h1 { padding-right: 40px; }
<?php if($language == 'es_ES') { ?>
	.column { width:97%; }
	h1 { font-size:26px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding: 35px 0 0 30px; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... the properties of matter"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Manufactured Material"); ?></h3>
						<div>
							<img src="images/12/manufactured.jpg"/>
							<p><?php echo _("Manufactured materials are man-made materials. Most naturally-made material can be recycled in nature by itself. But manufactured materials need our help to be recycled. We can recycle glass, plastic, paper, and cans by taking them to a recycling center."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Matter"); ?></h3>
						<div>
							<img src="images/12/matter.jpg"/>
							<p><?php echo _("Anything that has mass and takes up space is called matter. All matter is made up of particles that are too small to see, called atoms."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Melting Point"); ?></h3>
						<div>
							<img src="images/12/melting.jpg"/>
							<p><?php echo _("The melting point is the temperature at which a solid turns to a liquid. Different solids have different melting points. For example, the melting point of an ice cube is 32°F (0°C). But a material called tungsten, which is used in light bulbs, has a melting point of 6170°F (3410°C). The high melting point of tungsten makes it possible to use in a light bulb without melting when the light is turned on."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Freezing Point"); ?></h3>
						<div>
							<img src="images/12/freezing.jpg"/>
							<p><?php echo _("The freezing point is the temperature at which a liquid turns into a solid. The freezing point is the same temperature as the melting point, when a solid changes to a liquid. For example, the freezing point and melting point of mercury (the liquid found in thermometers) is -37.89 °F."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Thermometer"); ?></h3>
						<div>
							<img src="images/12/thermometer.jpg"/>
							<p><?php echo _("A thermometer is a scientific instrument used to measure temperature. Melting point, boiling point, and freezing point can be measured using a thermometer."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Boiling point"); ?></h3>
						<div>
							<img src="images/12/boiling.jpg"/>
							<p><?php echo _("The boiling point is the temperature at which a liquid begins to turn into a gas. When a liquid starts bubbling, it has reached its boiling point. Different liquids have different boiling points. For example, the boiling point of water is 212°F (100°C). But the boiling point of olive oil is 572°F (300°C). Also, changes in air pressure can affect the boiling point of liquids. If you are up in the mountains where there is less air pressure, liquids will boil at lower temperatures than if you were at sea level."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Density"); ?></h3>
						<div>
							<img src="images/12/density.jpg"/>
							<p><?php echo _("The density of a substance is its amount of mass in a given amount of space. The more compact a substance is, the greater its density."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Volume"); ?></h3>
						<div>
							<img src="images/12/volume.jpg"/>
							<p><?php echo _("Volume is a measure of how much space something takes up. The volume of a four-sided box can be found by multiplying its length times its width times its height. The volume of any solid can be found by placing it completely beneath the water and seeing how much the water rises. The amount that the water rises tells you how much space the solid takes up."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Solid"); ?></h3>
						<div>
							<img src="images/12/solid.jpg"/>
							<p><?php echo _("A solid is one of the three states of matter. The elements or compounds in the solid state are bound tightly together in a fixed, rigid arrangement. So solids have a definite shape and volume."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Liquid"); ?></h3>
						<div>
							<img src="images/12/liquid.jpg"/>
							<p><?php echo _("A liquid is one of the three states of matter. The elements or compounds in the liquid state are not fixed as in a solid. The elements and compounds of a liquid can slide around each other. So liquids have a fixed volume, but they do not have a fixed shape."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Gas"); ?></h3>
						<div>
							<img src="images/12/gas.jpg"/>
							<p><?php echo _("A gas is one of the three states of matter. There are three different forms that matter can take: solid, liquid, and gas. Unlike solids and liquids, gases float in the air and are difficult or impossible to see. Oxygen is a kind of gas. So is water vapor. So is a kind of fuel called natural gas, which many people use to heat their homes and cook their food."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Atom"); ?></h3>
						<div>
							<img src="images/12/atom.jpg"/>
							<p><?php echo _("Atoms are the tiny building blocks of all matter, both living and non-living. An atom is the smallest possible part of a type of material. For example, you could have an atom of copper or an atom of oxygen. Different things are made of different atoms. Things that are big enough to see are made from a very large number of atoms. You would need a special microscope, called an electron microscope, to see one atom."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Molecule"); ?></h3>
						<div>
							<img src="images/12/molecule.jpg"/>
							<p><?php echo _("Molecules are atoms bonded together. Molecules are the smallest parts of living and non-living things that can be recognized. Many molecules make up a tiny drop of water. Things that are solid, such as ice, have molecules that are close together and not moving. Things that are liquid, such as water, have molecules that move freely. Tiny molecules of gases also float around in the air. Molecules make up everything."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Physical property"); ?></h3>
						<div>
							<img src="images/12/physical-prop.jpg"/>
							<p><?php echo _("The term physical properties refers to things about an object that can be seen or measured. Every object has its own special physical properties. The mass of an object is a physical property. Mass can be measured with a balance scale. Size is also a physical property. Size can be measured with a ruler."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Chemical property"); ?></h3>
						<div>
							<img src="images/12/chem-prop.jpg"/>
							<p><?php echo _("Chemical properties of matter are properties that can be seen during a chemical reaction—when one kind of substance is changed into another kind of substance. For example, whether or not a substance will burn is a chemical property, because when something burns, the kind of substance is changed into new kinds of matter."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3><?php echo _("physical change"); ?></h3>
						<div>
							<img src="images/12/physical-change.jpg"/>
							<p><?php echo _("When a substance goes through a physical change, only its form or appearance changes. Even though it may look different, it is still the same substance. For example, when water freezes, it turns to ice. The ice and the water are the same substance. Only their forms are different. Another example is sawdust. If someone takes an axe and chops into wood, some of the wood breaks into tiny pieces and becomes sawdust. The sawdust is still wood. It is just wood in a different form. It has gone through a physical change."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-17">
					<div class="md-content">
						<h3><?php echo _("Chemical change"); ?></h3>
						<div>
							<img src="images/12/chem-change.jpg"/>
							<p><?php echo _("A chemical change is a type of change that makes an object change into a different substance. The properties before and after a chemical change of a substance are different. When wood burns and metal rusts, they form new substances. A chemical change causes matter to become a new kind of matter."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-18">
					<div class="md-content">
						<h3><?php echo _("Heat conductivity"); ?></h3>
						<div>
							<img src="images/12/heat-conductivity.jpg"/>
							<p><?php echo _("The heat conductivity of a substance is the ability of the substance to allow heat to flow through it. Different types of materials have different heat conductivities. For example, exhaust systems use ceramic coatings that have low heat conductivities, in order to protect the specialized parts they are attached to by keeping their temperatures lower."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Manufactured Material"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Matter"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Melting Point"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Freezing Point"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Thermometer"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Boiling point"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Density"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Volume"); ?></button><br>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Solid"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Liquid"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Gas"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Atom"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Molecule"); ?></button><br>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Physical property"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Chemical property"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("physical change"); ?></button><br>
							<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("chemical change"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-18"><?php echo _("Heat conductivity"); ?></button>
						</div>
					</div>
				</div><!-- /container -->
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
