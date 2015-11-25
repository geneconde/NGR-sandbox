<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(11, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #ff9703; }

		.wrap { border-color: #EEC441; }
		.bg { background-image: url(assets/13/bg.jpg); }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... electric charge"); ?></h1>

					<p class="grid_12"><?php echo _("All of the objects that you see around you are made up of <span class=key>electrons</span>, <span class=key>neutrons</span> and <span class=key>protons</span>. Electrons and protons are the particles that carry electric charge. In most objects, the number of protons and the number of electrons is exactly the same, so those objects are said to be <span class=key>electrically neutral </span>.  Charge can be separated by touching different materials, like silk and vinyl, together and peeling them apart.  Only electrons are exchanged in this way, exchanging protons requires a much greater amount of energy.  Charged particles exert forces on one another with like charge particles pushing away from each other with a repulsive force, and opposite charges attracting.  These forces due to electric charge are responsible for holding together all of the objects that make up the world around you. Several of the most dramatic light shows in nature are based on charged particles. Lightning strikes occur when a large buildup of electrons at the base of a cloud jump to another cloud or to the Earth's surface. The Aurora Borealis (Northern Lights) and Aurora Australis (Southern Lights) are the result of charged particles interacting with the Earth's magnetic field and energizing gases in the atmosphere, causing beautiful displays of color in the night sky."); ?></p>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
