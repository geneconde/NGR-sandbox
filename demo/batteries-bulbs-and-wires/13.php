<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
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

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #ff8b14; font-size: 33px;}

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 33px; } }

		.wrap { border-color: #226F38; }
		.bg { background-image: url(assets/bg-13-15.jpg); }
		p { font-size: 21px; }

		@media only screen and (max-width: 1250px) {
			p { line-height: 25px; margin: 5px auto; }
		}
		@media only screen and (max-width: 900px) {
			p { line-height: 22px; font-size: 20px; }
		}
		@media only screen and (max-width: 725px) {
			p { line-height: 20px; font-size: 18px; }
		}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... electric circuits"); ?></h1>

					<p class="grid_12"><?php echo _("Your computer, your cell phone, your family's TV and even the lighting at your local grocery store are all made to work by incredibly complex electrical circuits. But at the heart of all of these sophisticated electrical systems are simple circuits. Simple circuits consist of three basic components:"); ?></p>

					<div class="grid_11 prefix_1">
						<ul>
							<li><p><?php echo _("A <span class='key'>power source</span>, like a battery in a flashlight or a generator, that powers your house electricity.");?></p></li>
							<li><p><?php echo _("An <span class='key'>electrical device</span> that needs to be powered, like the bulb in a flashlight, the motor on a vacuum cleaner, or the computer chip in your laptop or phone.");?></p></li>
							<li><p><?php echo _("A <span class='key'>conductor</span>, like a wire, to connect the electric current from the power source to the device.");?></p></li>
						</ul>
					</div>

					<p class="grid_12"><?php echo _("Electrical <span class='key'>conductors</span> are usually metal but water can also conduct electricity. Electrical <span class='key'>insulators</span> are materials, like rubber, plastic, or air, that can't conduct electricity. They are used to cover and shield wires and other conductors so you don’t get a shock."); ?></p>

					<p class="grid_12"><?php echo _("In a <span class='key'>simple circuit</span>, like a flashlight, an electric circuit connects these three components in a pattern that begins and ends with the power source. <span class='key'>Electrons</span> are invisible negative charges that move around the circuit and make an <span class='key'>electric current</span> in the circuit. Chemical reactions in the battery provide the energy to make the electrons move. And the wire conductors provide a path for the electrons to move from the battery to the bulb. The friction of the electrons rubbing in the bulb’s <span class='key'>filament</span> causes the filament to heat up and glow brightly."); ?></p>
					
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
