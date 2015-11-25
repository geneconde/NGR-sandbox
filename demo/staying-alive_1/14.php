<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
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
<style>
h1 { color: #000; }
.wrap { border-color: #90EBFE; }
.bg { background-image: url(images/14/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #eee; }
.md-content p { font-size: 16px; }
.md-content img { height: 200px; }
.md-content h3 { background: #A2CB79; color: #006171; }
button:hover { background: #87A965; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #A2CB79;
	color: #006171;
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 29px; }
<?php } ?> 

html[dir="rtl"] h1 { text-align: right; font-size: 27px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... staying alive"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Ecosystem"); ?></h3>
						<div>
							<img src="images/14/ecosystem.jpg"/>
							<p><?php echo _("An ecosystem is a community of organisms living in close proximity, and their interactions in their shared physical environment. An example of an ecosystem is a tropical rainforest, which has many different kinds of organisms living and interacting together."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Instinctual Behavior"); ?></h3>
						<div>
							<img src="images/14/behavior.jpg"/>
							<p><?php echo _("An instinctual behavior is one that a creature is born with, and thus is unlearned, that helps it to survive. The communication of wolves through howling is an example of an instinctual behavior."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Predator"); ?></h3>
						<div>
							<img src="images/14/predator.jpg"/>
							<p><?php echo _("Organisms that hunt and eat other organisms are called predators. For example, tigers are predators to antelope."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
		
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Prey"); ?></h3>
						<div>
							<img src="images/14/prey.jpg"/>
							<p><?php echo _("Organisms that are hunted and eaten by other organisms are called prey. For example, gazelles are prey to cheetahs."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Biodiversity"); ?></h3>
						<div>
							<img src="images/14/biodiversity.jpg"/>
							<p><?php echo _("An ecosystem is said to have great biodiversity when many different types of creatures live together in it. One ecosystem with much biodiversity is the coral reef."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Ecosystem"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Instinctual Behavior"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Predator"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Prey"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Biodiversity"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="13.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = '/scripts/';</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
