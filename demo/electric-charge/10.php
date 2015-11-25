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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #7a6ebf; }
		
		.wrap { border-color: #C862CC; }
		.bg { background-image: url(assets/10/bg.jpg); }

		.rslides { width: 40%; float: right; margin: 0 1%; }
		#screen2 { display: none; }

		#img-vid { text-align: center; }
		#img-vid img { width: auto; }
		#img-vid img:last-child { width: 395px; height: 256px; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			.wrap > .bg { overflow: hidden !important; }
		}
		p { line-height: 30px; }
		#screen1 p { margin: 0; }
		@media (max-width: 1250px) {
			#screen2 p { line-height: 25px; }
			#screen1 p {
			    font-size: 22px;
			    line-height: 24px;
			}
			#screen2 #img-vid img { width: 45%; height: 251px; }
		}
		@media (max-width: 890px) {
			#screen2 #img-vid img { width: 40% !important; height: 183px; }
		}
		@media (max-width: 870px) {
			#screen1 p {
				font-size: 16px;
	    		line-height: 23px;
	    	}
		}
		<?php if ($language == 'es_ES') { ?>
			@media (max-width: 1250px) {
				#screen2 p { line-height: 25px; }
				#screen1 p {
				    line-height: 22px !important;
    				font-size: 22px;
				}
			}
			@media (max-width: 875px) {
				#screen1 p {
					line-height: 23px;
    				font-size: 16px;
		    	}
			}
			#screen1 p { line-height: 26px; }
			.rslides { width: 38%; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... electric charge"); ?></h1>
						<div class="grid_12">
							<ul class="rslides">
								<li><img src="assets/10/10a.jpg"></li>
								<li><img src="assets/10/10b.jpg"></li>
								<li><img src="assets/10/10c.jpg"></li>
							</ul>
						<p><?php echo _("Lightning storms are one of nature’s most dramatic spectacles.  These storms can be both fascinating displays of natural beauty, as well as frightening and dangerous.  A lightning strike can cause severe damage to large objects like forests or homes, and can cause severe injury or death for animals.  Scientists disagree as to the exact method by which the clouds become charged, but it seems that it is likely related to the vertical movement of water droplets within the clouds.  This tends to leave the bottom of the cloud negatively charged, and the upper part of the cloud positively charged.  When the electric charge becomes great enough, a cloud can get rid of the excess charge by sending a stream of electrons to another cloud, or to the ground.  This stream of particles causes the air to give off light, and causes the air to heat up so rapidly that it produces a shockwave that we hear as thunder.  Lightning is a very common occurrence.  At any given moment, there are on average just under 50 lightning strikes per second occurring on Earth.  There’s an old yarn that lightning never strikes the same spot twice, but according to records, the Empire State building was once struck eight times in less than half an hour.  Lightning strikes are so dangerous because they contain a large amount of energy.  Even a small lightning carries enough energy to light up a 100-Watt light bulb for three days."); ?></p>
						</div>

					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("Another awe-inspiring light show can come, courtesy of the Aurora Borealis (Northern Lights) and the Aurora Australis (Southern Lights). These beautiful displays of color in the night sky are most easily seen in regions near the North or South Pole. The colors are the result of charged particles interacting with the gases in the upper atmosphere. The particles come from the Sun, and as they approach the Earth, they get trapped by the Earth's magnetic field. The magnetic field causes them to circle the Earth in several regions known as the Van Allen Belts. The Earth's magnetic field bends towards the poles, and the particles can spiral down into the upper atmosphere, energizing the atmospheric gases, and producing the brilliant light show."); ?></p>
						<div id="img-vid">
							<img src="assets/10/10b.png" alt="">
							<img src="assets/10/aurora.gif" alt="">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Observing lightning..."); ?></strong></section></section>

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
				document.location.href = "9.php";
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
	<script>
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
