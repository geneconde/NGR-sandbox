<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'chemical-and-physical-changes';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

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
		h1 { color: #FC906B; }

		.wrap { border-color: #D3F0D4; }
		.bg { background: #d4d0c5 url(assets/2/bg.jpg); background-size: 100% 100% !important; }
		p { font-size: 22px; z-index: 100; }
		
		#animation { width: 551px; height: 330px; position: absolute; bottom: 3px; left: 140px; background: url(assets/2/people.png) no-repeat; }
		#animation p { position: absolute; }
		#mouth { top: 218px; right: 140px; background: url(assets/2/mouth.png) no-repeat; background-size: 100%; width: 40px; z-index: 1; height: 30px; }
		#arm { width: 350px; height: 350px; left: -80px; top: 35px; background: url(assets/2/arm.png) no-repeat; z-index: 2; }
		#flame { width: 24px; height: 92px; left: 290px; top: 192px; background: url(assets/2/flame.png) no-repeat; z-index: 1; }
		#eyes { width: 89px; height: 35px; right: 110px; top: 160px; background: url(assets/2/eyes.png) no-repeat; z-index: 2; }
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... chemical and physical changes"); ?></h1>

					<p class="grid_12"><?php echo _("Remember your last birthday when you were blowing the candles out on your birthday cake? That whole experience was made possible by chemical and physical changes in matter!"); ?></p>
					<p class="grid_12"><?php echo _("There's a lot to be learned at your birthday party about how different kinds of matter interact to cause chemical and physical changes in matter. The baking of your birthday cake involves chemical reactions that are good examples of chemical changes in the ingredients that make the cake. The burning of the candles involves both physical changes and chemical changes in the matter that makes up the candles. But the making of the lemonade you drink and making the ice that keeps the lemonade cold are not chemical changes – they are physical changes that happen in the sugar, the water and the lemonade mix that make your lemonade. Let's see what all of this means."); ?></p>

				</div>
			</div>

			<div id="animation">
				<p id="eyes"></p>
				<p id="mouth"></p>
				<p id="others"></p>
				<p id="flame"></p>
				<p id="arm"></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
