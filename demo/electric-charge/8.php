<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
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
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
		h1 { color: #7a6ebf; }
		
		.wrap { border-color: #D4C365; }
		.bg { background-image: url(assets/8/bg.jpg); }

		#screen2 { display: none; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... electric charge"); ?></h1>
						<p class='grid_9'><?php echo _("Charged objects exert forces on each other. The amount of force depends upon the amount of charge, as well as how close the objects are to each other. The direction of the force depends upon the types of charge involved. When a positively charged object is held near a negatively charged object, the two objects will experience an attractive force that attempts to bring the objects closer together. However, if a positively charged object is held near another positively charged object, both objects will experience a repulsive force that attempts to push the objects farther away from each other. You'll get the same outcome if you attempt to hold two negatively charged objects near each other. This principle is often stated as \"opposites attract, likes repel\". Take a look at the picture of the person touching the Van de Graaff generator. The person, and all of the hairs on her head have become positively charged. Since all of the hairs have the same charge, they are repelling each other, causing them to stand on end."); ?></p>
						<div class="grid_3">
							<img src="assets/8/8a.png" alt="Elder">
							<img src="assets/8/8b.png" alt="Baby">
						</div>
					</div>

					<div id="screen2" class="screen">
					<p class="grid_8"><?php echo _("The force due to electric charge is responsible for holding together all of the objects around you. Charge-based interactions are responsible for the bonds that hold together solid objects like the tables and chairs in your classroom. Without this force, you would simply pass right through your chair and end up on the floor. An easy way to see this force at work is to slowly fill a glass with water. The interactions between the water molecules allow you to actually overfill the glass slightly. The surface tension will hold the molecules together and prevent them from flowing down the sides of the glass."); ?></p>
					<img src="assets/8/8c.png" alt="Glass of Water" class="grid_4">
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Opposites attract"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1);

		if (hash != "") {
			$('.screen').hide();
			$('#screen2').show();

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
		}
		
		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				}); 
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() {
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
