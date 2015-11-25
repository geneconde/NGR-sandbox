<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
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
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #fff221; margin-left: 0; }
		p { font-size: 24px; color: white; }
		.wrap { border-color: #444ADF; }
		.bg { background-image: url(assets/12/bg.jpg); overflow: hidden;}

		#screen1 img { width: auto; height:115px;}
		#screen1 .images { text-align: center; }
		#screen1 { text-align: center; }
		#screen1 h1, #screen1 p { text-align: left; }
		<?php if ($language == 'es_ES') : ?>
			div#screen1 p {
			    line-height: 25px;
			    font-size: 20px;
			}
		<?php endif; ?>

	@media only screen and (max-width: 960px){
		div#screen1 p {
		    line-height: 20px;
		    font-size: 20px;
		}
	}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("More big ideas about... our solar system"); ?></h1>
						<p><?php echo _("Just as Earth orbits around the Sun, the Moon Orbits around Earth. While it takes 365 days for the Earth to orbit the Sun, it takes 27.5 days for the moon to orbit the Earth. And, just like Earth, one side (one half) of the Moon's surface is constantly lighted by the Sun's light. But over the course of roughly one month, the angle between the Sun, Earth and Moon changes. Consequently, the amount of the lighted side of the moon we can see changes. This varying amount explains why we see the phenomena known as the Phases of the Moon. When we can see the entire side of the moon that is being lit, we call that phase a Full Moon. When we see only a partial side of the lighted side of the moon, we call that phase crescent moon. When the moon is on the same side of earth as the Sun, we call that phase the new moon. Some people think that there is a straight line between the Earth, Moon and Sun. But this is not correct. Because of the differences in the planes of orbit (Moon around Earth and Earth around the Sun), only occasionally do all three line up. When that happens, we have either a solar eclipse (when the Moon's shadow crosses the Earth) or a lunar eclipse (when the Earth's Shadow crosses the moon)."); ?></p>
							<img src="assets/12/12a.jpg" />
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="11.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Tracking the phases of the Moon..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
