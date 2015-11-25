<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(4, $_SESSION['smid']);
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
	<link rel="stylesheet" href="css/responsiveslides.css" />

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/jquery.blink.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/global.js"></script>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg h1 { color: #E25C8E; }
		.wrap { border-color: #73E8E2; }
		.bg { background-image: url(assets/4/bg.jpg); overflow: hidden; }
		.key { color: #F75B68; }

		#screen1 p { float: left; width: 65%; }
		#screen1 .img1 img { width: 34%; float: right; }
		#screen1 .slider { width: 27%; float: left; margin-right: 15px; }
		#screen2 { display: none; }

		<?php if($language == "es_ES") { ?>
			p { font-size: 22px; }
			#screen1 span { font-size: 22px; }
		<?php } ?> 
		html[dir="rtl"] .bg h1 { font-size: 34px; }

		#screen1 > img:first-of-type{ width: 33%; float: right; margin-top: 20px; margin-left: 10px; }
		#screen1 p { float: left; }
		#screen1 p:first-of-type { width: 65%; float: left; }
		#screen1 span { font-size: 24px; }
		#screen2 div { float: right; margin: 15px 22px; }
		#screen1 .rslides { margin-top: 0; height: auto; }

		.slider { width: 280px; height: 212px; border-radius: 5px; margin-top: 20px; }
		.slider img { width: 100%; height: 100%; -moz-border-radius: 5px; border-radius: 5px; }

		#screen2 { display: none; }
		#screen2 .slider { margin-top: -10px; }
		#buttons .next { display: none; }
		<?php if($language == "es_ES") { ?>
			p { font-size: 22px; }
			#screen1 span { font-size: 22px; }
		<?php } ?> 
		html[dir="rtl"] .bg h1 { font-size: 34px; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#screen1 .clear:nth-of-type(1) p { width: 395px; }
		}
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			.slidecont span { font-size: 20px !important; line-height: 30px !important }
			.img1 img { width: 30% !important; }
			#screen2 .slider { float: right; margin-left: 10px; height: auto !important; }
		}
		@media screen and (max-width: 864px) {
			#screen1 p, #screen1 span { font-size: 18px !important }
			#screen2 div { float: none; }
			#screen2 ul { width: 40%; margin-left: 10px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("Reviewing big ideas... about staying alive"); ?></h1>
				
						<div class="img1">
							<p><?php echo _("Many animals are born with behaviors we call <span class='key'>instinctual</span>. They perform these behaviors because they have inherited characteristics that make them unable to do anything else. Most fish never see their parents. When they hatch, they immediately begin to swim, moving water across their gills to take in oxygen. Many other animals spend a long time with their parents. Parents feed and protect them, but also teach them how to survive in their environments."); ?></p>
							<img src="assets/4/fish.jpg" />
						</div>
						<div class="clear"></div>
						<div class="slidecont">
							<div>
								<ul class="rslides slider">
									<li> <img src="assets/4/s1a.jpg"> </li>
									<li> <img src="assets/4/s1b.jpg"> </li>
									<li> <img src="assets/4/s1c.jpg"> </li>
								</ul>
							</div>
							<span><?php echo _("Some animals even form complex family groups to help them survive. In some cases, these groups have complicated sets of relationships which determine which animals eat first and which will be allowed to reproduce. Wolves form complex family groups that stay together for life. A single male and female lead the group and are usually the only animals who have cubs. The other members of the pack all assist in hunting and caring for young. Within the pack, different wolves seem to have authority over certain members, but not the others. The wolves take turns eating animals they kill, based on their position within the pack."); ?></span>

						</div>
					</div>

					<div id="screen2" class="screen">
						<div>
							<ul class="rslides slider">
								<li> <img src="assets/4/s2a.jpg"> </li>
								<li> <img src="assets/4/s2b.jpg"> </li>
							</ul>
						</div>
						<p><?php echo _("Sometimes, it takes a long time for the offspring to learn from their parents. Young crows live with their parents for as many as five years, helping to forage and care for younger siblings, all the while continuing to learn the complexities of life from their parents. Crow life is so complicated that each bird must understand what types of food are safe and which are dangerous, how to handle different kinds of food, and even how it fits into the crow flock as a whole."); ?></p>
						<div></div>

						<p><?php echo _("The important point is that instinctual and learned behaviors make survival and reproduction more likely for the members of the population. In many kinds of animals, parents and the offspring themselves engage in behaviors that help the offspring to survive. The big picture is that the survival of any one individual isn't really very important in nature.  What matters is the survival and reproduction of the group as a whole. It is important that the members who do reproduce are well-prepared to survive and reproduce as well."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Protecting offsprings..."); ?></strong></section></section>

	<script>
		$(".slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 1000
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
