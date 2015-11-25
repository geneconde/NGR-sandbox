<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	//require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(15, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg { background-image: url(assets/15/bg.jpg); }

		#question { height: 320px; width: 60%; position: relative; margin: 10px auto 0; display: block; }
		#question img { display: none; width: 100%; position: absolute; }
		#question img.active { display: block; margin: 0 auto; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... making sound"); ?></h1>
					<div class="clear"></div>
					<p class="grid_12"><?php echo _("There are a great many sources of <span class='key'>sound</span>. Familiar kinds include the vibration of a person's vocal cords, vibrating strings (piano, violin), a vibrating column of air (trumpet, flute), and vibrating solids (a door when someone knocks). Changing how fast something vibrates changes the <span class='key'>pitch</span> of the sound. Increasing how much energy is put into make the sound increases the sound's <span class='key'>loudness</span>. <span class='key'>Vibrations</span> in materials set up wave-like motions in the materials. <span class='key'>Medium</span> is the matter that sound travels through. Sound cannot travel in a vacuum. The medium does not need to be air; sound can travel through metal, wood, stone, glass, water and many other substances - sound travels through many of those materials faster than it travels through air. The more <span class='key'>molecules</span> packed together in a medium, the louder the sound it will make when disturbed. The thickness and length of things make different sounds. The thicker a guitar string, the deeper the sound; the skinnier the string, the higher the sound."); ?></p>						
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		$(document).ready(function() { setInterval('swapImages()', 1000); });
		
		function swapImages(){
			var active = $('#question .active');
			var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');

			active.removeClass('active');
			next.addClass('active');
		}
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
