<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #A8E0DC; }
		.wrap { border-color: #931BD6; }
		.bg { background-image: url(assets/4/bg.jpg); overflow: hidden;}

		#screen2 { display: none; }

		#buttons .next { display: none; }

		.rslides, #screen1 img { width: 350px; height: 280px; display: block; margin: 0 auto; }
		.rslides img {height: 270px !important;}
		@media only screen and (max-width: 960px){
			.grid_12 p {
			    font-size: 18px;
			    line-height: 20px;
			}
			.rslides, #screen1 img {
			    width: 40%;
			    display: block;
			    margin: 0 auto;
			}
		}
	<?php if ($language == 'es_ES') : ?>
	@media only screen and (max-width: 960px){
		.rslides img {
		    height: 220px !important;
		    width: 95%;
		}
		.rslides, #screen1 img {
		    width: 45% !important;
		    height: 240px !important;
		}
	}
	<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("Reviewing big ideas about... our solar system"); ?></h1>
						<p><?php echo _("We can see many objects in the nighttime (and daytime) sky. Some of those objects are part of our solar system while others are not (such as distant stars). And yet others are only occasionally found in our <span class='key'>solar system</span>. Objects that are permanent residents of our solar system include the <span class='key'>Sun</span>, <span class='key'>planets</span>, <span class='key'>moons</span>, <span class='key'>asteroids</span> and <span class='key'>dwarf planets</span>. Pluto is a well-known example of a dwarf planet. All the objects in our solar system are bound together by the strong gravitational pull of the sun. Even the furthest planets in our solar system are held in their orbital paths by the sun's gravity."); ?></p>
						<!-- <ul class="rslides">
							<li> --><img src="assets/4/4a.jpg" ><!-- </li>
							<li><img src="assets/4/4a.jpg" ></li> -->
						</ul>

					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("Most of the objects we see with our naked eyes in the nighttime sky that are outside our solar system are stars. <span class='key'>Comets</span> are frozen bodies of ice and dust that spend most of their time outside our solar system. However, some comets follow orbits around our Sun. The Sun's <span class='key'>gravity</span> is the force that pulls them inside our solar system. As comets approach the Sun, a bright tail forms making them visible in the nighttime sky. Sometimes, the comets are so big and bright that they can be seen during the daytime. Scientists argue comets of all sizes (large and small) that have crashed into Earth are the source of water found on our planet. Collectively, most of the objects we see in the day and nighttime sky are all found in the Orion Arm of the Milky Way Galaxy. There is some variation in the way scientists define <span class='key'>galaxy</span>, but most agree that it is a massive collection of stars (many billions) held together by the force of gravity."); ?></p>
						<ul class="rslides">
							<li><img src="assets/4/42a.jpg"></li>
							<li><img src="assets/4/42b.jpg"></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying solar systems..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

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
				document.location.href = "3.php#answer";
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

		$(".rslides").responsiveSlides({
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
