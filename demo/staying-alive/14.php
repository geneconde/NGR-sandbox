<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(14, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		body { font: 23px/1.4 playtime, 'Comic Sans MS', sans-serif; }
		h1 { color: #3986C9; margin-left: 2%; margin-right: 2%; }

		.wrap { border-color: #90EBFE; }
		.bg { background-image: url(assets/14/bg.jpg); }
		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { height: 200px; }
		.md-content h3 { background: #A2CB79; color: #006171; }
		button:hover { background: #87A965; }
		.wrap { border-color: #000; }
		.bg > div { height: 100%; width: 100%; -moz-perspective: 600px; }
		button {
			font-family: 'PlaytimeRegular';
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #A2CB79;
			color: #006171;
			font-size: 16px;
			letter-spacing: 1px;
			text-transform: uppercase;
			cursor: pointer;
			display: inline-block;
			margin: 1% 0;
			border-radius: 5px;
		}

		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
			<h1><?php echo _("Reviewing key vocabulary related to... staying alive"); ?></h1>
			<div class="md-modal md-effect" id="modal-1">
				<div class="md-content">
					<h3><?php echo _("Ecosystem"); ?></h3>
					<div>
						<img src="assets/14/ecosystem.jpg"/>
						<p><?php echo _("An ecosystem is a community of organisms living in close proximity, and their interactions in their shared physical environment. An example of an ecosystem is a tropical rainforest, which has many different kinds of organisms living and interacting together."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-2">
				<div class="md-content">
					<h3><?php echo _("Instinctual Behavior"); ?></h3>
					<div>
						<img src="assets/14/behavior.jpg"/>
						<p><?php echo _("An instinctual behavior is one that a creature is born with, and thus is unlearned, that helps it to survive. The communication of wolves through howling is an example of an instinctual behavior."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>

			<div class="md-modal md-effect" id="modal-3">
				<div class="md-content">
					<h3><?php echo _("Predator"); ?></h3>
					<div>
						<img src="assets/14/predator.jpg"/>
						<p><?php echo _("Organisms that hunt and eat other organisms are called predators. For example, tigers are predators to antelope."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
	
			<div class="md-modal md-effect" id="modal-5">
				<div class="md-content">
					<h3><?php echo _("Prey"); ?></h3>
					<div>
						<img src="assets/14/prey.jpg"/>
						<p><?php echo _("Organisms that are hunted and eaten by other organisms are called prey. For example, gazelles are prey to cheetahs."); ?></p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-6">
				<div class="md-content">
					<h3><?php echo _("Biodiversity"); ?></h3>
					<div>
						<img src="assets/14/biodiversity.jpg"/>
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
		<a href="13.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = 'js/';</script>
	<script src="js/cssParser.js"></script>
	<script src="js/css-filters-polyfill.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
