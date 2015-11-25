<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { z-index: 1 !important; }
 h1 { margin: 0 3%; } 
.wrap { border-color: #5cb800; }
.bg { background-image: url(images/14/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #eee; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
.md-content h3 { background: #cc6633; color: #fff; }
button:hover { background: #cc6633; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #5cb800;
	color: #fff;
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
    <?php if ($language == 'es_ES') : ?>
    <?php endif; ?>        
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, #answer, div#assignment  {
		    padding-top: 50px;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4, #answer {
		    padding-top: 60px !important;
		}
   	}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... changing life forms"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Adaptation"); ?></h3>
						<div>
							<img src="images/14/adaptation.jpg"/>
							<p><?php echo _("An inherited characteristic that may give a life form a better chance of survival. Animals that are better adapted are more likely to reproduce and pass on their adaptations."); ?></p>
							<p><?php echo _("An example would be the giraffe. Giraffes' long necks allow them to obtain food that other animals cannot reach."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>	
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Natural selection"); ?></h3>
						<div>
							<img src="images/14/natural-selection.jpg"/>
							<p><?php echo _("Animals that are best adapted to survive will be the ones most likely to reproduce and pass on their genes. This results in a decrease in the total diversity of a population over time."); ?></p>
							<p><?php echo _("An example would be the shift in the peppered moth populations. Lighter colored moths survive more frequently around light colored trees, while dark colored moths survive more frequently around dark colored trees."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">	
					<div class="md-content">
						<h3><?php echo _("Environmental change"); ?></h3>
						<div>
							<img src="images/14/environment-change.jpg"/>
							<p><?php echo _("A change in the surroundings that affects the organisms living there. Environmental change may favor a species or members of a species and drive natural selection."); ?></p>
							<p><?php echo _("Examples may include natural disasters, the introduction of an invasive species, climate change, or human interference."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Genetic mutation"); ?></h3>
						<div>
							<img src="images/14/genetic.jpg"/>
							<p><?php echo _("DNA that is incorrectly copied can result in differences in an organism. These differences may be beneficial, resulting in the organism being better adapted. They may also be harmful, resulting in the organism being less well adapted. Many mutations, however, cause changes that have no significant effect on the organism as a whole."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Extinction"); ?></h3>
						<div>
							<img src="images/14/extinct.jpg"/>
							<p><?php echo _("If no members of a species are able to reproduce, the species will cease to exist and become extinct. The vast majority of species that have existed in earth's history are now extinct."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Ecosystem"); ?></h3>
						<div>
							<img src="images/14/ecosystem.jpg"/>
							<p><?php echo _("An ecosystem is living and non-living components of an area that co-exist in a balance. If the balance is disrupted by something such as an environmental change, some or all species may experience natural selection, or possibly go extinct."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Adaptation"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Natural selection"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Environmental change"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Genetic mutation"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Extinction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Ecosystem"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
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
	<?php include("setlocale.php"); ?>
</body>
</html>
