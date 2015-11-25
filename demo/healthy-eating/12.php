<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
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

	<title><?php echo _("Healthy Eating"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">

	<style>
		h1 { color: #7894c9; margin-left: 3%; margin-right: 3%; }
		p { color: #fff; }

		.wrap { border-color: #FFFBEF; 
				border-left: 1px dashed #F1CE00;
				border-right: 1px dashed #F1CE00; 
		}

		.bg { background-image: url(assets/12/bg.jpg); }
		.bg > div { -moz-perspective: 600px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #00A7D4; color: #fff; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #00A7D4; 
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

		button:hover { background-color: #149063; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... healthy eating"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Diet"); ?></h3>

						<div>
							<img src="assets/12/diet.jpg"/>

							<p><?php echo _("The food one eats. Some people try to restrict their diet in order to be healthier."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Food Guidance System"); ?></h3>

						<div>
							<img src="assets/12/food-guidance-system.jpg"/>

							<p><?php echo _("The Food Guidance System (MyPyramid) is an educational tool to help individuals implement the Dietary Guidelines for Americans published jointly by the Department of Health and Human Services and the U.S. Department of Agriculture."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Food Pyramid (MyPyramid)"); ?></h3>

						<div>
							<img src="assets/12/food-pyramid.jpg"/>

							<p><?php echo _("The recommended servings of various food groups one should eat daily according to the Department of Health and Human Services and the USDA."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Whole grains"); ?></h3>

						<div>
							<img src="assets/12/whole-grains.jpg"/>

							<p><?php echo _("A cereal grain that has not been processed or refined.  That is, it contains the germ, endosperm, and bran.  An example would be whole wheat bread."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
														
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Refined grains"); ?></h3>

						<div>
							<img src="assets/12/refined-grains.jpg"/>

							<p><?php echo _("A cereal grain that has been processed so that it only contains the endosperm.  An example would be white bread."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Calorie"); ?></h3>

						<div>
							<img src="assets/12/calorie.jpg"/>

							<p><?php echo _("A unit of measurement for energy.  Food calories, also called kilocalories, are expressed as kcal or with a capital letter C."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Nutritionist"); ?></h3>

						<div>
							<img src="assets/12/nutritionist.jpg"/>

							<p><?php echo _("Someone who is an expert in human nutrition and studies the effects of food on the body."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Healthy eating"); ?></h3>

						<div>
							<img src="assets/12/healthy-eating.jpg"/>

							<p><?php echo _("Consuming a balance of different types of food so that one gets the various vitamins, nutrients, and calorie sources needed. There is some dispute as to what diet is healthiest."); ?></p>

							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Diet"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Food Guidance System"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Food Pyramid (MyPyramid)"); ?></button>
							<!-- <button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("MyPlate"); ?></button> -->
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Whole grains"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Refined grains"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Calorie"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Nutritionist"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Healthy eating"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="11.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
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
