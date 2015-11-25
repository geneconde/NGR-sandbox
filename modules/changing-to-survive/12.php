<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(12, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
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
.bg { overflow: hidden; background-image: url('images/12/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.bg > div { -moz-perspective: 600px; }
.wrap { border-left: 1px dashed #bf8a30; border-right: 1px dashed #bf8a30; }
h1 { color: #ffe9b7; font-size: 34px; margin: 0 3%; }
div.md-overlay {
	width: 100%;
}
div.md-modal {
	width: 500px;
}
.column { width: 100%; text-align: center; margin: 10% auto;}
.md-content  { background: #ffe9b7; }
.md-content h3 { background: #C4E282; font-size: 24px !important; }
.md-content .placeholder { position: relative; border-radius: 10px; background: #fff; }
.md-content .placeholder p { position: absolute; font-size: 22px; }
/*#modal-4 .md-content > div > div { width: 400px; }
#modal-4 > div > div > div > p:nth-child(1) { left: 114px; top: 10px; }
#modal-4 > div > div > div > p:nth-child(2) { left: 160px; top: 186px; }
#modal-4 > div > div > div > p:nth-child(3) { bottom: 30px; left: 16px; }
#modal-4 > div > div > div > p:nth-child(4) { bottom: 20px; left: 120px; }*/
p { font-size: 16px; }
button:hover { background: rgba(228, 196, 68, 0.75); }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	outline: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #C4E282;
	color: black;
	font-size: 15px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
.md-content div img { width: 60%; margin: 0 auto; display: block; }
/*
#modal-4 .md-content div img { width: 100%; }
#modal-4 .md-content > div > div { width: auto; }*/

<?php if ($language == 'zh_CN') : ?>
	.md-content > div { padding: 15px 30px; }
	.md-content .placeholder p { font-size: 16px !important; }

	#modal-4 > div > div > div > p:nth-child(1) { left: 80px; }
	#modal-4 > div > div > div > p:nth-child(2) { left: 118px; top: 205px; }
	#modal-4 > div > div > div > p:nth-child(3) { bottom: 40px; left: 10px; }
	#modal-4 > div > div > div > p:nth-child(4) { bottom: 30px; left: 100px; }
<?php endif; ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary... related to... changing to survive"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Natural selection"); ?></h3>
						<div>
							<img src="images/12/natural-selection.jpg" height="200" />
							<p><?php echo _("Natural selection is the changing of inherited characteristics of a population of organisms to reflect the greater survival and reproduction of certain members of the population."); ?></p>
							<!-- <p> Natural selection is thus a changing (narrowing) of the diversity of a population over time, based on varying survival and reproduction rates of its diverse individuals. An example of natural selection is the shift that occurs in the peppered moth population. The moths decrease in diversity from being some dark-colored individuals and some light-colored individuals to all of one color, depending on the color of the trees the moths rest on. If the trees are light-colored, the dark-colored moths will stand out more to predators, and thus die out faster, and reproduce less, than the light-colored moths. Over time, the entire population of moths will be less diverse, with the dark-colored moths being lost from the population due to natural selection.</p> -->
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Artificial selection"); ?></h3>
						<div>
							<img src="images/12/artificial-selection.jpg"/>
							<p><?php echo _("Artificial selection occurs when humans get involved in the survival and reproduction of the individual members of a population."); ?></p>
							<!-- <p>Unlike natural selection in which a population of organisms will shift in accordance to the factors of nature playing out in the population, artificial selection occurs when humans get involved in the survival and reproduction of the individual members of a population. A well-known example of artificial selection is in the breeding of dogs. Certain dogs, based on desired physical characteristics, are carefully selected by people to breed with other dogs with similar characteristics, thus shifting the physical appearance of the population of the dogs to reflect this artificial selection.</p> -->
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Sexual selection"); ?></h3>
						<div>
							<img src="images/12/sexual-selection.jpg"/>
							<p><?php echo _("In sexual selection, one sex (usually females) chooses their mates for reasons unique to each species."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Punctuated equilibrium"); ?></h3>
						<div>
							<div class="placeholder">
								<p><?php echo _("Phyletic Gradualism"); ?></p>
								<p><?php echo _("Morphology"); ?></p>
								<p><?php echo _("Time"); ?></p>
								<p><?php echo _("Punctuated Equilibrium"); ?></p>
								<img src="images/12/equilibrium.png"/>
							</div>
							<p><?php echo _("Punctuated equilibrium states that organisms sometimes evolve quickly, in \"growth spurts\", after going unchanged for long periods of time. These growth spurts occur following major environmental changes."); ?></p>
							<!-- <p>Unlike traditional Darwinian evolution, which claims that evolution of organisms occurs slowly and gradually over long periods of time, the theory of punctuated equilibrium claims that organisms evolve quickly, in \"growth spurts\", after going unchanged for long periods of time. Developed by Stephen J. Gould, the theory of punctuated equilibrium accounts for the lack of transitional forms in the fossil record, which are needed in order to support traditional Darwinian evolution.</p> -->
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Mutation"); ?></h3>
						<div>
							<img src="images/12/mutation.jpg"/>
							<p><?php echo _("Mutations are small changes that occur in the DNA that carries the information that makes living things what they are.  Mutations are rare, but if inherited, over time can have an effect on a population."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Natural selection"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Artificial selection"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Sexual selection"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Punctuated equilibrium"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Mutation"); ?></button>
						</div>
					</div>
				</div><!-- /container -->
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
			<!-- </div> -->
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="11.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _('Next'); ?>">
		<a href="13.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
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
