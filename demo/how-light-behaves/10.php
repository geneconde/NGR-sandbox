<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'how-light-behaves';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("How Light Behaves"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #EB6966; }
		
		.wrap { border-color: #FFC540; }
		.bg { background-image: url(assets/10/bg.jpg); }

		.slider-container { float: right; }
		
		#screen1 > div:first-of-type div { float:right; }
		#screen1 img { margin-top: 40px; }

		.grid_12 p {
		    line-height: 30px;
		    margin-bottom: 0px;
		}
		<?php if ($language == 'ar_EG') { ?>
			#screen1 img.img-ar { float: right; }
			#screen1 p.p-ar { float: left; }
		<?php } ?>
		@media (max-width: 1250px) {
			.grid_12 .grid_4 { width: 25%; }
			#screen1 p { line-height: 25px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... how light behaves"); ?></h1>
						<div class="grid_12">
							<div class="grid_4"><img src="assets/10/a.jpg" /></div>
							<p><?php echo _("Some materials not only absorb and reflect light but they also <span class='key'>transmit</span> or let some or most light pass through. Materials that let most light pass straight through are called <span class='key'>transparent</span>. The glass windows on most cars are transparent, allowing the driver a clear view of any objects near the car. Other transparent materials absorb most colors of light while allowing only one color of light to pass through. A red material lets only red light pass through; a blue material lets only blue light pass through, and so on."); ?></p>
						<p class="grid_8 p-ar"><?php echo _("Materials that let just some of the light pass through are called <span class='key'>translucent</span>. These materials change the path that light takes on the way through them, making it tough to clearly see objects on the other side of the material. That's why it can be difficult for airplanes to take off and land in foggy weather, or for the driver of a car to see through a frost covered windshield on a cold day. Remember though that opaque things don't transmit any light!"); ?></p>
						<div class="grid_4"><img class="img-ar" src="assets/10/b.jpg" /></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="9.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Absorbing light..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
			
		$(".rslides1").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false,
		    speed: 400
		});
		
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
