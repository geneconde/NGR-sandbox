<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(16, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Motion"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		h1 { color: #7894c9; margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		.wrap { border-color: #858248; }

		.bg { background-image: url(assets/10/bg.jpg); }
		.bg > div { -moz-perspective: 600px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #FFCCD9; color: #9451d3; }
		div.md-overlay {
			width: 100%;
		}
		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #FFCCD9; 
			color: #9451d3;
			font-size: 16px;
			letter-spacing: 1px;
			text-transform: uppercase;
			cursor: pointer;
			display: inline-block;
			margin: 1% 0;
			border-radius: 5px;
			outline: 0;
		}

		button:hover { background-color: #E495A9; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... motion"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Frame of Reference"); ?></h3>

						<div>
							<img src="assets/14/a.jpg"/>
							<p><?php echo _("A system of physical reference points or landmarks that helps to identify the position of an object."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Position"); ?></h3>

						<div>
							<img src="assets/14/b.jpg"/>

							<p><?php echo _("Where an object is in relation to other objects.  The distance an object is from other objects."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Position versus Time Graph"); ?></h3>

						<div>
							<img src="assets/14/c.jpg"/>

							<p><?php echo _("A graph showing where an object is or was in relation to when it was there.  Position versus time graphs chart the motion of an object."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Motion Map"); ?></h3>

						<div>
							<img src="assets/14/d.jpg"/>
							<p><?php echo _("A diagram that shows the position of an object at specific times."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Velocity"); ?></h3>

						<div>
							<img src="assets/14/e.jpg"/>

							<p><?php echo _("How fast an object is moving, and in what direction it is moving.  The change in an object’s position per unit of time."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
														
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Acceleration"); ?></h3>

						<div>
							<img src="assets/14/f.jpg"/>

							<p><?php echo _("How much an object is speeding up or slowing down.  The change in an object’s velocity per unit of time."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Frame of Reference"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Position"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Position versus Time Graph"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Motion Map"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Velocity"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Acceleration"); ?></button>
							
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
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
