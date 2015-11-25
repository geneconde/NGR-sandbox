<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'food-chains';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Food Chains"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
	/*
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	*/
});

</script>
<style> 
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }

html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; }
.bg { background-color:#F7F2E1;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: palevioletred; }
h2 { margin:0; padding: 0 10px; font-size:25px;}

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }

.bold { font-weight: bold; }
.float-left { float: left; }

.md-content { text-align: center;}
.md-content img { width: 60%;  -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; }

.column { width: 90%; text-align: center; margin: 10% auto;}

button:hover { background: rgb(165, 40, 27); }

button {
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: rgb(192, 57, 43);
	color: rgb(255, 255, 255);
	font-family: 'PlaytimeRegular';
	font-size: 1em;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 2% 0;
	border-radius: 10px;
}


@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }	
	.item { width: 33%; }
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	
}

@media screen and (max-width:480px) {
	h1 { font-size: 16px; }	
	.item { width: 50%; }
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
	.column { width: 100%; }
}

@media screen and (max-height:627px) {
}

@media screen and (orientation:portrait) {
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... food chains"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Food Chain"); ?></h3>
						<div>
							<img src="images/12/food-chain.jpg"/>
							<p><?php echo _("A food chain is similar to a food web in that it shows the interactions between prey and predators in an ecosystem. However, unlike a food web which shows multiple interactions between prey and predators, a food chain shows just one linear \"ladder\" of interactions, and not all that are in an ecosystem."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Food Web"); ?></h3>
						<div>
							<img src="images/12/foodweb.jpg"/>
							<p><?php echo _("A food web shows you which living things eat which other living things. Food webs are very helpful for learning about the feeding relationships between living things that share space. For example, you would look at a jungle food web to see what living things eat other living things in a jungle."); ?></p>
							<p><?php echo _("A food web shows the names of different living things and has arrows that point from each living thing being eaten to the living thing that is eating it."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Producer"); ?></h3>
						<div>
							<img src="images/12/producers.jpg"/>
							<p><?php echo _("Producers are organisms that use the sun's energy through photosynthesis."); ?></p>
							<p><?php echo _("Plants get their energy directly from the sun to make their own food. So they are called producers."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Consumer"); ?></h3>
						<div>
							<img src="images/12/consumer.jpg"/>
							<p><?php echo _("Consumers are organisms that cannot produce their own energy from the sun for food; they must consume other organisms."); ?></p>
							<p><?php echo _("Living things such as animals cannot use energy from the sun for food. They must get their energy from other living things. So they are called consumers."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Herbivore"); ?></h3>
						<div>
							<img src="images/12/herbivore.jpg"/>
							<p><?php echo _("Herbivores are creatures that eat only producers, such as plants and algae, for food."); ?></p>
							<p><?php echo _("Because it only eats plants, an elephant is an example of an herbivore."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Carnivore"); ?></h3>
						<div>
							<img src="images/12/carnivore.jpg"/>
							<p><?php echo _("A carnivore is an organism that feeds only on meat."); ?></p>
							<p><?php echo _("A polar bear is the largest land carnivore. It eats mainly fish and seals. Even your pet cat or dog is a carnivore. Birds such as eagles, hawks, and falcons are also carnivores. There are even some carnivorous plants, such as the Venus flytrap, which eats insects."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Decomposer"); ?></h3>
						<div>
							<img src="images/12/decomposer.jpg"/>
							<p><?php echo _("Decomposers, such as fungi, are consumers that feed off of living things that die."); ?></p>
							<p><?php echo _("Living things such as mushrooms or molds are known as decomposers, because they feed off of dead organisms."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Predation"); ?></h3>
						<div>
							<img src="images/12/predation.jpg"/>
							<p><?php echo _("When animals hunt other animals, this is known as predation."); ?></p>
							<p><?php echo _("In predation, the creature being hunted is the prey and the hunter is the predator."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Predator"); ?></h3>
						<div>
							<img src="images/12/predator.jpg"/>
							<p><?php echo _("Animals that hunt, attack, and eat other animals are called predators."); ?></p>
							<p><?php echo _("Predators include lions, tigers, and sharks. Dogs and cats are also predators, but people give them food so they don't have to hunt. Predators that live in the wild have to be good hunters, or they will not have food to eat."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Prey"); ?></h3>
						<div>
							<img src="images/12/prey.jpg"/>
							<p><?php echo _("Animals that are hunted and eaten by other animals are called prey."); ?></p>
							<p><?php echo _("Prey animals often have special markings that help them blend in with their surroundings so that they are more difficult to find. Animals make easier prey for the animals that hunt them."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Food Chain"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Food Web"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Producer"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Consumer"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Herbivore"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Carnivore"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Decomposer"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Predation"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Predator"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Prey"); ?></button>

						</div>
					</div>
				</div><!-- /container -->
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
			</div>
		</div>
	</div>
			<div class="buttons-back" ><a href="11.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="13.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
			<div class="clear"></div>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>