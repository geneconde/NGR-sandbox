<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
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

	<title><?php echo _("Our Solar System"); ?></title>

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
		h1 { color: #E5E630; }
		p { color: white; font-size: 21px; }

		@media only screen and (max-width: 1250px) { p { font-size: 18px; } }

		.wrap { border-color: #1e3351; }
		.bg { background: url(assets/2/bg.jpg); overflow: hidden;}

		#content { z-index: 2; }

		#silhouette { background: url(assets/2/silhouette.png) no-repeat; width: 100%; height: 190px; z-index: 3; position: absolute; bottom: 0; }

		#animation { width: 100%; height: 100%; position: absolute; top: 0; z-index: 1; }

		#animation div { position: absolute; }
		#silhouette {
		    z-index: 1 !important;
		}
		@media only screen and (max-width: 960px){
			p.grid_12 {
			    line-height: 22px !important;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12" id="content">

					<h1 class="grid_12"><?php echo _("Thinking about... our solar system"); ?></h1>

					<p class="grid_12"><?php echo _("For thousands of years, people have looked at the sun, moon, stars and planets. Tales were told and myths were created to explain the movement of those objects across the nighttime and daytime sky. And the patterns they found were used to create calendars and make predictions of all sorts. Today, much has been learned about the structure of the solar system and how it works. We also know that the movement of the Sun, Earth and Moon can explain phenomena on Earth such as changing tides and seasons as well as solar and lunar eclipses."); ?></p>

					<p class="grid_12"><?php echo _("Our solar system consists of a single star, which we call the Sun and eight planets including Mercury, Venus, Earth (the one we live on), Mars, Jupiter, Saturn, Uranus and Neptune. Of all the objects in our solar system, mankind has only been able to directly explore two (except for those objects such as meteorites that have fallen to Earth). The first is our planet, Earth. The second is Earth's moon. However, scientists have developed a number of tools and technologies that help them understand many details about the composition and structure of the planets that cannot yet be visited by humans. These tools and technologies include robots (sent to Mars) and unmanned spacecraft (probes) that can take pictures and atmospheric samplings and send them back to Earth."); ?></p>

				</div>
			</div>

			<div id="animation">
				<div id="star"></div>
				<div id="twinkle"></div>
			</div>

			<div id="silhouette"></div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"). $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
