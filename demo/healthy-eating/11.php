<?php

	require_once "../tempsession.php";
	//require_once '../tempsession.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Healthy Eating"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #91730a; }

		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		
		.wrap { border-color: #FFFBEF; }
		.bg { background-image: url(assets/11/bg.jpg); overflow: hidden; }

		.container_12 { height: 100%; }
		.key { color: #249ab8;}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... healthy eating"); ?></h1>

					<p class="grid_12"><?php echo _("A healthy <span class='key'>diet</span> contains different kinds of foods. <span class='key'>MyPyramid</span>, a <span class='key'>food pyramid</span> of the five food groups, shows the need to find a balance between our food intake and physical activity.  There are five food groups: Grains, Vegetables, Fruits, Milk, and Meat & Beans. Grains are divided into two subgroups: whole grains and refined grains. Food in the meat and beans group offers the body protein. While following the basic guidelines of MyPyramid, every person needs their own plan for what to eat every day. We can look at the energy in food using its unit (<span class='key'>calorie</span>) to see how much of which foods we should eat. We also need vitamins, minerals, and oils as part of our balanced diet. Being physically active is a key element in living a longer, healthier, happier life and goes hand in hand with <span class='key'>healthy eating</span>."); ?></p>
				</div>

			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php#screen2" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
