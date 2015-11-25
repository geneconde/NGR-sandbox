<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jpreloader.js"></script>

<script>
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
});

</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #FFFFFF;}
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background-image: url('images/12/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; color: #614a2a; }
h2 { margin:0; padding: 0 10px; font-size:24px;}

.clear { clear:both;}

.bold { font-weight: bold; }
.float-left { float: left; }
.md-content { text-align: center;}
.md-content img { width: 75%; height:220px; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; }
.column { width: 95%; text-align: center; margin: 10% auto; margin-top:67px;}
button:hover { background: #FEFE9A; color:#7E4800;}
button {
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #614a2a;
	color: rgb(255, 255, 255);
	font-family: 'PlaytimeRegular';
	font-size: 1em;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	outline: none;
	border-radius: 10px;
}

.md-content{background-color: #8AD38A !important;}
.md-content p{color:black !important;}
.md-content h3{color: #FEFE9A; background:#614a2a; font-size:24px;}
.allignment{padding-top:23px; padding-left:16px; font-size:33px; }
.image-mtop{margin-top:-12px !important;}
.image-container { height:250px; width:100%;  }
.image-container img{ height:100%;width:100%; }

html[dir="rtl"] h1 { padding-right: 20px; }
html[dir="rtl"] .md-content p { text-align: right !important; }

<?php if($language == "es_ES") { ?>
	h1 { font-size: 28px !important; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	.allignment { padding-top: 40px; }
}	

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<h1 class="allignment"><?php echo _("Reviewing key vocabulary related to... the life cycle of plants");?></h1>	
		<div>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("life cycle");?></h3>
						<div>
						
							<img src="images/12/life-cycle.jpg" />
						
							<p><?php echo _("The life cycle of an organism is all of the changes it undergoes from birth to reproduction to death. This life cycle is repeated generation after generation.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
			
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("seed");?></h3>
						<div>
							
								<img src="images/12/seed.jpg"/>
							
							<p><?php echo _("Many plants start out as a small seed. When the seed is planted in the ground, it sprouts into a young seedling through the process of germination. Flowers are used by plants to produce more seeds to continue the life cycle.");?>
								
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("sprout");?></h3>
						<div>
							
								<img src="images/12/sprout.png"/>
							
							<p><?php echo _("A sprout is when the seed changes into a seedling through germination. Through sprouting, the seedling then grows into a fully grown plant that is capable of producing seeds.");?></p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("seedling");?></h3>
						<div>
							
								<img src="images/12/seedling.jpg"/>
							
							<p><?php echo _("Seedlings are seeds that have sprouted. Seedlings have a small root that is used to suck up water from the ground and a stem that is the body of the plant. Seedlings also have small leaves that are used to get energy from the sun. The seedling continues to grow until it becomes a mature plant.");?> </p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("germination");?></h3>
						<div>
							
								<img src="images/12/germination.jpg"/>
							
							<p><?php echo _("When the seed is planted in the ground, it sprouts into a young seedling through the process of germination.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("root");?></h3>
						<div>
							
								<img src="images/12/root.jpg"/>
							
							<p><?php echo _("A root is the part of a plant that helps it get water and food from the ground. Roots have no leaves or flowers on them. Roots are usually underground, but not always. You can see in the photograph that this mangrove tree's roots are visible above ground. Roots that are underground help hold a plant in the ground. Your teeth also have roots. They hold your teeth in your gums.");?></p>
							
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("stem");?></h3>
						<div>
							
								<img src="images/12/stem.jpg"/>
							
							<p><?php echo _("Seedlings have a small root that is used to suck up water from the ground and a stem that is the body of the plant. The main parts of the stem are the nodes, internodes, the petioles, and the leaves.");?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("leaves");?></h3>
						<div>
							
								<img src="images/12/leaves.jpg"/>
							
							<p><?php echo _("Leaves are the part of the plant that absorb sunlight as the fuel for the process of photosynthesis. Seedlings also have small leaves that are used to get energy from the sun.");?></p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("petal");?></h3>
						<div>
							
								<img src="images/12/petal.jpg"/>
							
							<p><?php echo _("Flowers have many parts needed to make more seeds. The outer parts of a flower are the petals. We notice the petals because they are usually colorful. Inside the petal are several things that look like little sticks with a yellow top, which are the stamen, containing pollen.");?></p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("stamen");?></h3>
						<div>
							
								<img src="images/12/stamen.jpg"/>
							
							<p><?php echo _("Inside the petal of a flower are several things that look like little sticks with a yellow top. These are called stamen and they contain pollen. The stamen is the male part of a flower.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("pollen");?></h3>
						<div>
							
								<img src="images/12/pollen.jpg"/>
							
							<p><?php echo _("Pollen is a yellowish powder found inside a flowering plant. Pollen helps the plant to make more plants. Insects such as bees and butterflies go to flowers to eat. While they eat, some of the flower's pollen sticks to them. When one insect goes to another flower, it takes the pollen with it. Some of the first flower's pollen rubs off onto the second flower. That helps the second flower grow seeds. Look at the bee in this photograph. Can you see the pollen?");?>						
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("pistil");?></h3>
						<div>
							
								<img src="images/12/pistil.jpg"/>
							
							<p><?php echo _("A pistil is the female part of a flower. It is located inside the flower and helps produce seeds. The pistil is very important because it helps plants to make more plants. Butterflies and bees can help plants by bringing pollen from one flower to another. If the pollen gets on the pistil of a flower, it can make seeds or even turn into a fruit. Some flowers have just one pistil, while others have many. Above is a photograph of a hibiscus pistil.");?>
							
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("pollinate");?></h3>
						<div>
							
								<img src="images/12/pollinate.jpg"/>
							
							<p><?php echo _("To pollinate is to transfer pollen between flowers in plant reproduction. Birds and bees pollinate many different plants.");?>
							
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("pollinator");?></h3>
						<div>
							
								<img src="images/12/pollinator.jpg"/>
							
							<p><?php echo _("A pollinator is a living thing that moves pollen from one plant to another plant. Pollen is needed by some plants to make seeds and fruits. Bees, butterflies, and bats can act as pollinators. They fly from one plant to another and transfer pollen as they do. Many pollinators are animals that transfer pollen on their hair or fur. If there were no pollinators, there would be a lot less seeds and fruit in the world.");?>
							
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("nectar");?></h3>
						<div>
							
								<img src="images/12/nectar.png"/>
							
							<p><?php echo _("Many flowers produce nectar, a food for some insects. Pollinators love to drink the sweet nectar at the base of the pistil and go from flower to flower to get more.");?>
							
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("self-pollination");?></h3>
						<div>
							
								<img src="images/12/self_pollination.jpg"/>
							
							<p><?php echo _("When pollen is transferred by a pollinator to the same plant in order to reproduce, this is called self-pollination. Hylocereus undatus is a hermaphrodite plant with both carpels and stamens for performing self-pollination.");?>
							
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-17">
					<div class="md-content">
						<h3 class="p-bottom"><?php echo _("cross-pollination");?></h3>
						<div>
							
								<img src="images/12/cross_pollination.jpg"/>
							
							<p><?php echo _("When pollen is transferred by a pollinator to a different plant in order to reproduce, this is called cross-pollination.");?>					
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
			
		
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("life cycle");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("seed");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("sprout");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("seedling");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("germination");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("root");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("stem");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("leaves");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("petal");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("stamen");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("pollen");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("pistil");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("pollinate");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("pollinator");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("nectar");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("self-pollination");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("cross-pollination");?></button>			
										
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations");?></strong></section></section>
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
