<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'energy-and-chemical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

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
		h1 { color: #F16D2D; font-size: 31px; }
		p { color: #000; font-size: 22px; margin: 0px auto;}

		.wrap { border-color: #FFD8FA; }
		.bg { background-image: url(assets/11/bg.jpg); }

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... energy and chemical changes"); ?></h1>

					<p id = "p_adjust11" class="grid_12"><?php echo _("Energy is everywhere around you. Energy makes things happen! Anything that moves or changes requires energy. But it's not as simple as just one kind of energy. There are many forms of energy and they keep changing forms as they cause things to happen. For instance, <span class='key'>light energy</span> from the sun is one form of energy.");?>
					<?php echo _("It travels through space until it hits the earth and then some of it is <span class='key'>converted</span> into <span class='key'>heat energy</span> that changes the temperature of the earth making it warmer. Also, some of the light from the sun is absorbed by the leaves of green plant, and by special chemical reactions called <span class='key'>photosynthesis</span>, the <span class='key'>light energy</span> is converted into <span class='key'>chemical energy</span> stored in the plant as food."); ?> 
					<?php echo _("We eat some of the foods plants produce and it becomes our source of energy. When energy is stored, like food in plants, we call it <span class='key'>potential energy</span> because it isn't doing anything right now but it has the \"potential\" to make something happen when it's released. When something is in motion, like a ball rolling down a hill it contains energy of motion that scientists call <span class='key'>kinetic energy</span>."); ?>
					
					<p id = "p_adjust11" class="grid_12"><?php echo _("Energy can take many forms such as; sound energy, electrical energy, light energy, heat energy, chemical energy, kinetic energy, potential energy, nuclear energy and biological energy. But it's important to know that the universe doesn't create any new energy or destroy any existing energy. It just constantly keeps converting one kind of energy to another to keep the universe working. The universe is a very good at recycling energy. Scientists call that the <span class='key'>Law of Conservation of Energy</span>."); ?>
								
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
