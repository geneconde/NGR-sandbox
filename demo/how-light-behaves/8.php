<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
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
		h1 { color: #EB6966; font-size: 33px; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #D7F45E; }
		.bg { background-image: url(assets/8/bg.jpg); }

		.slider-container { position: relative; margin: 0 auto; width: 300px; height: 280px; background: url(assets/8/bg.png); background-image: 100% 100%; background-repeat: no-repeat; margin: 0 8.333%; height: 490px; }
		.caption { color: #8D4E81; }
		.center_slide { margin-right: auto; margin-left: auto; width: 340px; height: 210px; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... how light behaves"); ?></h1>
						
						<div class="grid_8">
							<p><?php echo _("Light absorption plays an important role in the colors of the objects you see all around you. For you to see a red apple, the apple must reflect red light while absorbing the other colors of light. Ripe bananas look yellow because they reflect yellow light and absorb the other colors.");?></p>				
							<p><?php echo _("The colors of light an object absorbs and reflects can explain why things can look different when different colored lights shine on them.");?></p>
						</div>
						<div class="grid_4">
							<img src="assets/8/banana.jpg" />
						</div>
						<div class="container_12 center_slide">
							<br>
							<ul class="rslides">
							    <li><img src="assets/8/1.jpg"><span class="caption"><?php echo _("Blue, red, yellow cubes under a yellow lamp"); ?></span></li>
							    <li><img src="assets/8/3.jpg"><span class="caption"><?php echo _("Blue, red, yellow cubes under a blue lamp"); ?></span></li>
							    <li><img src="assets/8/4.jpg"><span class="caption"><?php echo _("Blue, red, yellow cubes under a standard desk lamp source"); ?></span></li>
							    <li><img src="assets/8/2.jpg"><span class="caption"><?php echo _("Blue, red, yellow cubes under a red lamp"); ?></span></li>
							</ul>
						</div>

					</div>
					
					<div id="screen2" class="screen">
						
						<p class="grid_7"><?php echo _("Black or dark objects absorb more light than white or light colored objects. A material heats up when it absorbs light. The more light that something absorbs, the hotter it gets. This explains why it is not a good idea to walk barefooted on a blacktop or asphalt covered road on a sunny summer day and why buildings in warmer climates have windows that act like mirrors to reflect the sunlight and keep the rooms inside cooler.");?></p>
						
						<div class="grid_5">
							<ul class="rslides">
							    <li><img src="assets/8/a1.jpg"></li>
							    <li><img src="assets/8/a2.jpg"></li>
							</ul>
						</div>
						<div class="clear"></div>
						
						<div class="grid_5"><img src="assets/8/solar.jpg" /></div>
						<p class="grid_7"><?php echo _("You may have seen solar panels on a home or business. These panels change the energy from light to generate electricity for the appliances in a home, or to reduce the amount of money a business has to pay the utility company each month.");?></p>
					
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Blue, red or yellow?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
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
			$('.back').fadeOut();
			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
			
			$('#screen1').fadeOut(function() {
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
			});
		});
	</script>
		
	<script src="js/responsiveslides.js"></script>
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 1000,
			timeout: 5000
		});
	</script>
</body>
</html>
