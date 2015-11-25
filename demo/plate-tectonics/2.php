<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'plate-tectonics';
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

	<title><?php echo _("Plate Tectonics"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">


	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #FF5E8B; }
		p { font-size: 20px; }

		.wrap { border-color: #f4e6c1; }
		.bg { background: url(assets/2/bg.jpg); }
		
		.bg p { z-index: 9; }

		#kid { position: relative; height: 200px; width: 200px; margin: 100px auto 0; overflow: hidden;}
		#kid div { position: absolute; }

		#bike { background: url(assets/2/kid.png) no-repeat; width: 107px; height: 161px; left: 47px; top: 15px; z-index: 5; }
		#frontwheel { background: url(assets/2/wheel.png) no-repeat; bottom: 0; right: 20px; width: 58px; height: 57px; z-index: 4; }
		#backwheel { background: url(assets/2/wheel.png) no-repeat; bottom: 6px; left: 21px; width: 58px; height: 57px; z-index: 3; }
		#bg { background: url(assets/2/bg.png) repeat-x; width: 2464px; height: 272px; position: absolute; right: -3000px; top: 0; z-index: 2; }

		#animation {
			position: absolute;
			bottom: 28px;
		}
		.fa, .lang-menu a { color: #1AA257; }


		@media only screen and (max-width: 1250px) {
			.bg { overflow: hidden; }
			
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... plate tectonics"); ?></h1>

					<p class="grid_12"><?php echo _("Maps are fun to look at. They can help you find out where you are, where you're going, and what you're going to find when you get there. See if you can find your state on the map below."); ?></p>

					<p class="grid_12"><?php echo _("Lots of people plan their summer vacations using maps. Some people like to go to the mountains and go backpacking or mountain biking. Other people like to go to the beach and go surfing or play beach volleyball. Where would you like to go for a vacation this coming summer? And what would you like to do? Can you find on the map the beach or mountain closest to your state? Did you know that the reason there are mountains and beaches is because plate tectonics have slowly but surely ripped continents apart and crashed them back together to create some of the best places in the world to go on summer vacations? Thank you, plate tectonics!!"); ?></p>

				</div>
			</div>

			<div id="animation">
				<div id="kid">
					<div id="bike"></div>
					<div id="frontwheel"></div>
					<div id="backwheel"></div>
				</div>

				<div id="bg"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready") . ", " . $user->getFirstName() . "?"; ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
