<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	//if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

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
		h1 { color: #E5E630; }
		p { color: white; }

		.wrap { border-color: #3636DA; }
		.bg { background-image: url(assets/15/bg.jpg); }
		.key {color: #EFFF00 !important;}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... our solar system"); ?></h1>

					<p class="grid_12"><?php echo _("Our Solar System was created approximately 4.6 billion years ago as swirling masses of gas and dust were pulled together through gravitational forces. The Solar Systems consists of the <span class='key'>Sun</span>, 8 <span class='key'>planets</span>, many moons and many smaller objects including meteors and <span class='key'>asteroids</span>. Being by far the largest object in the system, the Sun exerts a tremendous gravitational force on all the objects. Through a balance of gravitational forces, the planets and all other objects are pulled into orbit around the Sun. The composition of the objects in the Solar System has been discovered using space probes (including satellites), robots and a few manned space visits (only to the <span class='key'>Moon</span>). On Earth, scientists use telescopes and <span class='key'>spectrometers</span> to understand the composition of planets. The movement of celestial bodies produces cyclic patterns of many phenomena including phases of the moons, tides, seasons, eclipses of the Sun and Moon, and apparent arrangement of stars in the nighttime sky."); ?></p>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="14.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="16.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
