<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(12, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
		h1 { color: #00cad1; margin-left: 3%; margin-right: 3%; }

		.wrap { border-color: #EEC441; }
		.bg { background-image: url(assets/14/bg.jpg); }
		.bg > div { -moz-perspective: 600px; height: 100%; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #29967B; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #29967B;
			color: #fff;
			font-size: 16px;
			letter-spacing: 1px;
			text-transform: uppercase;
			cursor: pointer;
			display: inline-block;
			margin: 1% 0;
			border-radius: 5px;
			outline: 0;
		}

		button:hover { background-color: #2173DB; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... electric charge"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Electron"); ?></h3>

						<div>
							<img src="assets/14/electron.jpg"/>

							<p><?php echo _("One of the components that make up atoms. Tiny, negatively charged particles that orbit the atom's nucleus."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Proton"); ?></h3>

						<div>
							<img src="assets/14/proton.jpg"/>

							<p><?php echo _("One of the components that make up atoms. Very small, but much larger than an electron. Protons exist inside the nucleus of atoms and possess a positive charge."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Neutron"); ?></h3>

						<div>
							<img src="assets/14/neutron.jpg"/>

							<p><?php echo _("One of the components that make up atoms. Neutrons are similar in size to protons and also exist inside the nucleus of atoms, but they possess no charge."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Positive Charge"); ?></h3>

						<div>
							<img src="assets/14/positive.jpg"/>

							<p><?php echo _("One of two possible charges. Things that are positively charged are attracted to things that are negatively charged and repel other positively charged things. Protons have a positive charge."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Negative Charge"); ?></h3>

						<div>
							<img src="assets/14/negative.jpg"/>

							<p><?php echo _("One of two possible charges. Things that are negatively charged are attracted to things that are positively charged and repel other negatively charged things. Electrons have a negative charge."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Conduction"); ?></h3>

						<div>
							<img src="assets/14/conduction.jpg"/>

							<p><?php echo _("The movement of electric charge through a material. The ease with which electricity moves through a material is called its conductivity."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Triboelectric Series"); ?></h3>

						<div>
							<img src="assets/14/triboelectric.jpg"/>

							<p><?php echo _("A ranking of various materials based upon the charge they acquire when touched by another material on the series."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Electron"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Proton"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Neutron"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Positive Charge"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Negative Charge"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Conduction"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Triboelectric Series"); ?></button>
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
