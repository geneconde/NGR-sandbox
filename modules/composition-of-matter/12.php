<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(12, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title> <!-- Change module title here -->
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
h1 { /*color: #fff;*/ font-size: 31px; height:60px }
.bg { background: url('images/12/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #47b3cf; border-right: 1px dashed #47b3cf; }
.bg > div { -moz-perspective: 600px; }
.column { width: 95%; text-align: center; margin: 2% auto;}
.md-content  { background: #8fd3ea; }
.md-content img { height: 200px; }
.md-content p { font-size: 16px; }
.md-content h3 { background: #42bae4; color: #fff; }
button:hover { background: #5EBCDD; }
button {
	font-family: 'PlaytimeRegular';
	border: 1px solid #fff;
	outline: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #42bae4;
	color: rgb(255, 255, 255);
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 24px; }
<?php } ?> 
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _('Reviewing key vocabulary related to... the composition of matter'); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _('Matter'); ?></h3>
						<div>
							<img src="images/12/matter.jpg"/>
							<p><?php echo _('Anything that has mass and takes up space is called matter. All matter is made up of particles that are too small to see, called atoms.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _('Atom'); ?></h3>
						<div>
							<img src="images/12/atoms.jpg"/>
							<p><?php echo _('All things—both living and nonliving—are made up of atoms. An atom is the smallest possible part of a type of material. For example, you could have an atom of copper or an atom of oxygen.'); ?></p>
							<p><?php echo _('Different things are made of different atoms. Things that are big enough to see are made from a very large number of atoms. You would need a special microscope, called an electron microscope, to see one atom.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _('Substance'); ?></h3>
						<div>
							<img src="images/12/substances.jpg"/>
							<p><?php echo _('A substance is a basic form of matter that has mass and certain characteristics. For example, water is one type of substance and salt is another type.'); ?></p>
							<p><?php echo _('A substance can be a solid, liquid, or a gas. A substance can also change its form. For example, water is a substance that can change into ice or steam.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _('Composition'); ?></h3>
						<div>
							<img src="images/12/compositions.jpg"/>
							<p><?php echo _('In science, the word composition means something very different than it does in writing class. In science, a composition is what you get when you put things together to make something new or different.'); ?></p>
							<p><?php echo _('There are different ways to make new compositions or new things. For example, a milk shake is a composition of milk and ice cream. Music is a composition of sounds. A composition always has two or more pieces or parts.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _('Element'); ?></h3>
						<div>
							<img src="images/12/elements.jpg"/>
							<p><?php echo _('An element is a pure substance. This means that it cannot be separated into other substances. As of 2008, scientists know of a total of 117 elements. Of these 117 elements, 94 of them occur naturally on Earth. Some elements that you might be familiar with are: gold, oxygen, and aluminum.'); ?></p>
							<p><?php echo _('Many of the substances found on Earth are made up of more than one element. For example, water is made up of two elements—hydrogen and oxygen.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _('Compound'); ?></h3>
						<div>
							<img src="images/12/compounds.jpg"/>
							<p><?php echo _('A compound is made up of two or more different materials called elements. Most of the things you eat, use, and see everyday are compounds.'); ?></p>
							<p><?php echo _('The food you eat is made from different compounds. The compounds in food contain things that help keep your body healthy and strong.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _('Molecules'); ?></h3>
						<div>
							<img src="images/12/molecule.jpg"/>
							<p><?php echo _('Molecules are the smallest parts of living and nonliving things that can be recognized. Many molecules make up a tiny drop of water.'); ?></p>
							<p><?php echo _('Things that are solid, such as ice, have molecules that are close together and not moving. Things that are liquid, such as water, have molecules that move freely. Tiny molecules of gases also float around in the air. Molecules make up everything.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _('Solid'); ?></h3>
						<div>
							<img src="images/12/solid.jpg"/>
							<p><?php echo _('A solid is one of the three states of matter. The elements or compounds in the solid state are bound tightly together in a fixed, rigid arrangement. So solids have a definite shape and volume.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _('Liquid'); ?></h3>
						<div>
							<img src="images/12/liquid.jpg"/>
							<p><?php echo _('A liquid is one of the three states of matter. The elements or compounds in the liquid state are not fixed as in a solid. The elements and compounds of a liquid can slide around each other. So liquids have a fixed volume but do not maintain a fixed shape.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _('Gas'); ?></h3>
						<div>
							<img src="images/12/gas.jpg"/>
							<p><?php echo _('A gas is one of the three states of matter. There are three different forms that matter can take: solid, liquid, and gas. Unlike solids and liquids, gases float in the air and are difficult or impossible to see.'); ?></p>
							<p><?php echo _('Oxygen is a kind of gas. So is water vapor. So is a kind of fuel called natural gas, which many people use to heat their homes and cook their food.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _('States of matter'); ?></h3>
						<div>
							<img src="images/12/state-of-matter.jpg"/>
							<p><?php echo _('When we talk about the states of matter, we are talking about the different forms that matter can take. There are three states of matter: solid, liquid, and gas.'); ?></p>
							<p><?php echo _('Everything around us takes one of these three states. For example, a chair is a solid. Milk is a liquid. And air is a gas.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _('Melting point'); ?></h3>
						<div>
							<img src="images/12/melting.jpg"/>
							<p><?php echo _('The melting point is the temperature at which a solid turns to a liquid. Different substances have different melting points.'); ?></p>
							<p><?php echo _('For example, the melting point of an ice cube is 32°F (0°C). But a material called tungsten, which is used in light bulbs, has a melting point of 6170°F (3410°C). The high melting point of tungsten makes it possible to use in a light bulb without melting when the light is turned on.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _('Boiling point'); ?></h3>
						<div>
							<img src="images/12/boiling.jpg"/>
							<p><?php echo _('The boiling point is the temperature at which a liquid begins to turn into a gas. When a liquid starts bubbling, it has reached its boiling point.'); ?></p>
							<p><?php echo _('Different liquids have different boiling points. For example, the boiling point of water is 212°F (100°C). But the boiling point of olive oil is 572°F (300°C). Also, changes in air pressure can affect the boiling point of liquids. If you are up in the mountains where there is less air pressure, liquids will boil at lower temperatures than if you were at sea level.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _('Chemical reaction'); ?></h3>
						<div>
							<img src="images/12/chemical-reaction.jpg"/>
							<p><?php echo _('When certain elements are joined together during a chemical reaction into compounds, their states of matter and properties can change radically. For example, the gases oxygen and hydrogen, when they join chemically in a chemical reaction, form liquid water.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _('Mixture'); ?></h3>
						<div>
							<img src="images/12/mixture.jpg"/>
							<p><?php echo _('You make a mixture by combining two or more things. For example, to make cookies, you must make a mixture of flour, sugar, butter, and eggs. If you leave an ingredient out, the mixture will be wrong, and the cookies may not taste the way they are supposed to.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3><?php echo _('Heterogeneous mixtures'); ?></h3>
						<div>
							<img src="images/12/heterogeneous.jpg"/>
							<p><?php echo _('Mixtures whose substances are easily distinguishable, not being completely blended together, are called heterogeneous mixtures. Gravel, trail mix, and pond water are examples of heterogeneous mixtures.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-17">
					<div class="md-content">
						<h3><?php echo _('Homogeneous mixtures'); ?></h3>
						<div>
							<img src="images/12/homogeneous.jpg"/>
							<p><?php echo _('Homogeneous mixtures, on the other hand, are mixtures whose substances are blended together well, such that they are not visibly distinguishable from each other. Examples of homogeneous mixtures are brass (a mixture of copper and zinc), blood plasma (a mixture of water and various proteins contained in the blood), and air (a mixture of oxygen, nitrogen, and other gases).'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-18">
					<div class="md-content">
						<h3><?php echo _('Solution'); ?></h3>
						<div>
							<img src="images/12/solution.jpg"/>
							<p><?php echo _('A solution is a mixture of two or more things in which one of the things seems to disappear in the other.'); ?></p>
							<p><?php echo _('To make hot chocolate, you make a solution of chocolate powder and hot water. When you stir the powder and water together, the powder separates into tiny particles and spreads out in the water. If you stir it well enough, every part of the mixture will have the same amount of chocolate in it. This mixture is called a solution.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-19">
					<div class="md-content">
						<h3><?php echo _('Colloid'); ?></h3>
						<div>
							<img src="images/12/colloid.jpg"/>
							<p><?php echo _('A colloid is a type of mixture in which the particles making up the colloid are larger than those of a solution, but small enough to not settle or separate.'); ?></p>
							<p><?php echo _('Milk, fog, and smoke are examples of colloids.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-20">
					<div class="md-content">
						<h3><?php echo _('Suspension'); ?></h3>
						<div>
							<img src="images/12/suspension.jpg"/>
							<p><?php echo _('A suspension is a heterogeneous mixture containing particles that are large enough to settle out and separate from each other. For example, sand in water is a suspension.'); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-21">
					<div class="md-content">
						<h3><?php echo _('Freezing Point'); ?></h3>
						<div>
							<img src="images/12/freezing.jpg"/>
							<p><?php echo _("The temperature and pressure at which a particular liquid undergoes a phase change into a solid. This temperature and pressure also corresponds with a compound's melting point. An example would be that under one atmosphere of pressure, liquid water freezes into ice at 0°C or 32°F."); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-22">
					<div class="md-content">
						<h3><?php echo _('Condensing Point'); ?></h3>
						<div>
							<img src="images/12/condensing.jpg"/>
							<p><?php echo _("The temperature and pressure at which a particular gas undergoes a phase change into a liquid. This temperature and pressure also corresponds with a compound's boiling point. An example would be that under one atmosphere of pressure, water vapor condenses into liquid water at 100°C or 212°F."); ?></p>
							<button class="md-close"><?php echo _('Close me!'); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main clearfix">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _('Matter'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _('Atom'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _('Substance'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _('Composition'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _('Element'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _('Compound'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _('Molecules'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _('Solid'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _('Liquid'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _('Gas'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _('States of matter'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _('Melting point'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _('Boiling point'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-21"><?php echo _('Freezing Point'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-22"><?php echo _('Condensing Point'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _('Chemical reaction'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _('Mixture'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _('Heterogeneous mixtures'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _('Homogeneous mixtures'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-18"><?php echo _('Solution'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-19"><?php echo _('Colloid'); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-20"><?php echo _('Suspension'); ?></button>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="md-overlay"></div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<div class="clear"></div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Words and explanations'); ?></strong></section></section>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
