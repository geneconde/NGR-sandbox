<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(10, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg h1 { color: #7E325A; margin-left: 0px; }
		.wrap { border-color: #898993; }
		.bg { background-image: url(assets/10/bg.jpg); overflow: hidden; }

		#screen1 ul { width: 55%; margin: 0; float: right; }
		#screen1 p:last-of-type { width: 40%; float: left; }

		#screen2 ul { width: 55%; margin: 0; float: right; }
		#screen2 p:last-of-type { width: 65%; float: left; }
		#screen2 .slider { width: 300px; margin: 15px 0; float: right }
		#screen2 .slider img { margin-bottom: 10px; }
		#screen2 .slider p { font-size: 20px; width: 100%; float: none; text-align: center; color: #285381; }

		#screen2 { display: none; }
		#buttons .next { display: none; }

		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
		@media screen and (max-width: 1354px) {
			#screen1 img { width: 90% !important; }
			#screen1 p { line-height: 30px; }
		}
		@media screen and (max-width: 860px) {
			#screen1 img { width: 75% !important; margin-left: 50px; }
			#screen1 p:last-of-type { width: 45%; line-height: 25px; }
		}
		@media screen and (max-width: 1250px) {
			#screen2 p.wraper { width: 60%; line-height: 25px; }
			#screen2 img { margin-top: 0; }
		}
		@media screen and (max-width: 795px) {
			#screen2 .slider { width: 200px; }
			p { font-size: 15px; line-height: 25px !important }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas... about staying alive"); ?></h1>
						<p><?php echo _("<span class='key'>Biodiversity</span> matters. It is a measure of the stability of any ecosystem. It preserves millions of years of evolution of plants, animals, and the unseen biochemistry of cells. Biodiversity is the sum of all the living things in all ecosystems on the planet. It's everything alive that has managed to survive through all of the millions of years of earth's history. A more useful way to think of biodiversity is to consider every living thing you have ever seen; and every living thing you haven't seen yet."); ?></p>
						<p><?php echo _("Many people might ask, “Just how important can any one species or ecosystem be to everyone else?” The difficult answer is that we don't know. Until we fully understand a particular ecosystem, we can't make any judgments about the importance of its parts. And, since evolution never stops or even slows down, it's unlikely that we will ever completely understand any system."); ?></p>
						<ul class="rslides slider">
							<li> <img src="assets/10/s1a.png"> </li>
							<li> <img src="assets/10/s1b.png"> </li>
							<li> <img src="assets/10/s1c.png"> </li>
						</ul>
					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("Biodiversity matters because we are completely connected to nature. Everyone needs food and water. Everyone is at risk for illness. The solutions for these needs come from the world around us. The aspirin we use is a product of willow tree bark. The antibiotics we use were discovered on the surface of moldy fruit. Many compounds used to cure different human conditions are products of plants, molds, and bacteria. All of our modern foods have deep roots in wild plants. The latest efforts in breeding new varieties of food crops depend a great deal on research into wild varieties of these same plants."); ?></p>
						<p class="wraper"><?php echo _("It's difficult to know just how important any one type of plant or animal is to its ecosystem. All species interact with many others, sometimes in ways that are not obvious. Every time a plant or animal goes extinct, the world loses not only that species, but its entire body chemistry and its evolutionary history. As humans, the important lesson is to remember that we don't know what we don't know. Decisions must be made carefully, considering all available information, and must be reconsidered when more information becomes available."); ?></p>
						<ul class="rslides slider col2">
							<li> <img src="assets/10/s2a.jpg"> <p><?php echo _("White willow bark herb used in Chinese herbal medicine"); ?></p></li>
							<li> <img src="assets/10/s2b.jpg"> <p><?php echo _("Green Penicillium mold on an orange tangelo"); ?></p></li>
						</ul>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Measuring stability of ecosystem..."); ?></strong></section></section>

	<script>
		$("#jplayer").jPlayer({
			ready: function () { $(this).jPlayer("setMedia", { 
					webmv: "videos/8/Mt_St_Helens_timelapse.webm",
					m4v: "videos/8/Mt_St_Helens_timelapse.m4v"
				}) 
			},
			ended: function() { $(this).jPlayer("play"); },
			swfPath: "scripts",
			supplied: "webmv, m4v",
			solutions: "flash, html",
			nativeVideoControls: { all: /./ }
		});


		$(".slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 1000,
			timeout: 2000
		});
		
		$("#screen3 .slider").responsiveSlides({
			timeout: 5000
		});

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

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
