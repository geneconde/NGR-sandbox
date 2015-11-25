<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'how-light-behaves';
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
	<title><?php echo _("How Light Behaves"); ?></title>

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
		h1 { color: #EB6966; }

		.wrap { border-color: #D8D8D6; }
		.bg { background-image: url(assets/15/bg.jpg); }
		p { margin: 0; font-size: 24px; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... how light behaves"); ?></h1>

					<p class="grid_12">
					<?php echo _("Light is one kind of <span class='key'>energy</span>. When light shines on an object, it can be <span class='key'>reflected</span> (bounced off), <span class='key'>transmitted</span> (passed through) or <span class='key'>absorbed</span> (not reflected or transmitted). <span class='key'>Transparent</span> materials transmit most light and reflect and absorb some. <span class='key'>Translucent</span> materials transmit some light and reflect and absorb some. <span class='key'>Opaque</span> materials absorb and reflect light but transmit none. When you see a solid object, the color you see is the color of the light being reflected by the object. A blue car is blue because blue light is reflecting off the car while the other colors of light are being absorbed. If light can pass from one material to another material, it can be <span class='key'>refracted</span>. When light is refracted, it changes its direction. This can happen when light passes at an angle from air into water or from water into air. <span class='key'>Lenses</span> use refraction to help people see more clearly. Solar panels can be used to change light energy into heat and electrical energy."); ?>
					</p>
				
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
