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

	<title><?php echo _("Electric Charge"); ?></title>

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
		h1 { color: #3ca4be; }
		.wrap { border-color: #96E585; }
		.bg { background: url(assets/2/bg.jpg); }
		p { position: relative; z-index: 2; }
		#animation { position: absolute; height: 460px; width: 100%; top: 180px; z-index: 1; }
		#animation img { width: auto; position: absolute; }
		#elec1 { top: 40px; left: 160px; }
		#elec2 { bottom: -30px; right: 190px; }
		#pink { top: 160px; left: 200px; }
		#balloon { right: -15px; top: 5px; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }	
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... electric charge"); ?></h1>
					
					<p class="grid_12"><?php echo _("For more than one reason, going down the slide at the playground can be a hair-raising experience. From bolts of lightning to static cling, many things that we see and experience in everyday life are controlled by electric charge. That's because all the objects that you interact with are made up of charged particles. We don't normally notice all of that electric charge because most objects have equal amounts of positive and negative charge. When the charge of an object gets altered, even just a little bit, the effect can be very noticeable."); ?></p>

					<div id="animation">
						<img src="assets/2/elec1.png" alt="Electricity" id="elec1">
						<img src="assets/2/elec2.png" alt="Electricity" id="elec2">
						<img src="assets/2/pink.png" alt="Images" id="pink">
						<img src="assets/2/balloon.png" alt="Images" id="balloon">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready, ") . $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
