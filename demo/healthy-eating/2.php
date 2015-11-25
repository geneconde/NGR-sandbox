<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #1f98ff; z-index: 7; }
		p { z-index: 7; }
		
		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
			ul.lang-menu { text-align: right; right: 8px; }
		<?php endif; ?>
		
		.wrap { border-color: #FFE142; }
		.bg { background: url(assets/2/bg.jpg); }

		.container_12 { height: 100%; }
		div img { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; margin: 0; }
		#table { position: absolute; width: 100%; z-index: 5; left: 0; bottom: 0; }
		#rad { width: 363px; height: 383px; position: absolute; z-index: 4; bottom: 10px; right: 120px; }

		@media only screen and (max-width: 1250px) {
			.bg { overflow: hidden;}
		}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Thinking about... healthy eating"); ?></h1>

					<p class="grid_12"><?php echo _("What is food to you? Something you eat during a movie or something to keep you busy when you hang out with friends? Or is food like fuel to give you energy and keep you going? How you think about food will affect what and how much you eat. Think about healthy eating and the decisions you make every day that change your body and your health."); ?></p>
					<p class="grid_12"><?php echo _("You are what you eat. Why not eat the best? Is the best food the same for everyone? Is food that is cheap or ready to eat always the best food for our bodies?"); ?></p>
					
				</div>

				<img id="table" src="assets/2/table.png" />
				<img id="rad" src="assets/2/rad.png" />
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
