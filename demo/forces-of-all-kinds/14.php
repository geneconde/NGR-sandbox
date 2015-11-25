<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(14, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Forces of all Kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<style>
		h1 { color: #2C3832; margin-left: 2%; margin-right: 2%; }
		p { color: #fff; }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 28px; } }

		.wrap { border-color: #1683b1; }

		.bg { background-image: url(assets/14/bg.jpg); }
		.bg > div { -moz-perspective: 600px; height: 100%; }


		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 260px; height: 200px; margin-left:5px;}
		.md-content h3 { background-color: #98605D; color: #fff; }

/*
		#md_force {height: 250px; width:180px;}
		#md_equi {margin-left:;}
		#md_unbalanced {width: auto; height: 250px;}
*/
		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #C29F7B; 
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

		button:hover { background-color: #98605D; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... forces"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Force"); ?></h3>

						<div>
							<img src= "assets/14/force.jpg" id = "md_force"/>

							<p><?php echo _("The mass of an object multiplied by the rate at which the object is accelerated. A push or a pull on an object."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Mass"); ?></h3>

						<div>
							<img src= "assets/14/mass.jpg"/>

							<p><?php echo _("A basic property of matter relating to its inertia and the effect of gravity upon it.  With respect to gravity, things with more mass will weigh more."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Acceleration"); ?></h3>

						<div>
							<img src= "assets/14/acceleration.jpg"/>

							<p><?php echo _("The change in an object's speed over a given amount of time.  How much something speeds up or slows down."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Newton's First Law"); ?></h3>

						<div>
							<img src= "assets/14/newtons.jpg"/>

							<p><?php echo _("An object at rest will stay at rest unless acted upon by some outside force.  Similarly, an object in motion will stay in motion unless acted upon by some outside force. Also known as inertia."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Newton's Second Law"); ?></h3>

						<div>
							<img src= "assets/14/newtons2.jpg"/>

							<p><?php echo _("The acceleration of an object is directly proportional and in the same direction as the force applied to it. An object is accelerated in the direction of the force applied and in an amount proportional to the force applied."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Balanced Forces"); ?></h3>

						<div>
							<img src= "assets/14/newtons3.jpg"/>

							<p><?php echo _("When multiple forces are applied to an object in such a way that they balance out and equal to zero. For example, if a weight was pushed equally hard from both sides, the forces would be balanced and the weight would not move."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Equilibrium"); ?></h3>

						<div>
							<img src= "assets/14/equi.jpg" id = "md_equi"/>

							<p><?php echo _("When opposing forces or actions are balanced so that one is not stronger or greater than the other."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Unbalanced Forces"); ?></h3>

						<div>
							<img src= "assets/14/unbalanced.jpg" id = "md_unbalanced"/>

							<p><?php echo _("When multiple forces are applied to an object in such a way that one or more of the forces are greater than the others. For example, if a weight was pushed from opposite sides, but one side was pushed with more force, the forces would be unbalanced."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Gravitational Force"); ?></h3>

						<div>
							<img src= "assets/14/gravity.jpg"/>

							<p><?php echo _("The force applied to an object due to the attraction of gravity."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Electro-magnetic force"); ?></h3>

						<div>
							<img src= "assets/14/electro.jpg"/>

							<p><?php echo _("The force applied to an object due to magnetism. For example, when a magnet is placed near a piece of iron, the iron is attracted to the magnet."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Inverse Relationship"); ?></h3>

						<div>
							<img src= "assets/14/inverse.jpg"/>

							<p><?php echo _("As one thing increases, another decreases. For example, as the distance between two magnets increases, the attractive force they apply upon each other decreases."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Force"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Mass"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Acceleration"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Newton's First Law"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Newton's Second Law"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Balanced Forces"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Equilibrium"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Unbalanced Forces"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Gravitational Force"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Electro-magnetic force"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Inverse Relationship"); ?></button>
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
