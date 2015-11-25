<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(6, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/responsiveslides.css" />
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<script src="js/jquery.blink.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.bg h1 { color: #4BA4DF; margin-left: 0 !important; }
		.wrap { border-color: #FFDC38; }
		.bg { background-image: url(assets/6/bg.jpg); overflow: hidden; }
		#right { float: right; }
		#left { float: left; margin-right: 20px; }
		#buttons .next { display: none; }
		#screen2, #screen3 { display: none; }
		#jquery_jplayer_1 { width: 350px !important; }
		#video { padding-top: 100px; margin: 0 auto 30px; width: 380px; }
		video { width: 400px !important; }

		<?php if($language == "es_ES") { ?>
			p, #screen2 .clear span { font-size: 22px; }
			#foodweb p:nth-child(6) { left: -14px; }
			#foodweb p:nth-child(13) { top: 281px; left: 269px; }
			#foodweb p:nth-child(16) { left: 164px; }
			#foodweb p:nth-child(18) { top: 476px; left: 363px; }
		<?php } ?> 
		html[dir="rtl"] #foodweb p { font-size: 15px; }
		html[dir="rtl"] #foodweb p:nth-child(17) { width: 95px; }
		html[dir="rtl"] #foodweb p:nth-child(18) { left: 390px; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#foodweb { background-size: 100% 100%; width: 740px; }
			#foodweb p:nth-child(11),#foodweb p:nth-child(10),#foodweb p:nth-child(5) { margin-left: -24px; }
		}
		/*#foodweb { width: 769px; height: 490px; background: url(assets/6/foodweb.png) center 20px no-repeat; padding-top: 20px; margin: 0 auto; position: relative; }*/
		#screen3 img { width: 750px; margin: 0 50px; }
		#foodweb p { position: absolute; top: 0; font-size: 18px; }
		#foodweb p:nth-child(1) { top: 55px; left: 110px; }
		#foodweb p:nth-child(2) { top: 70px; left: 250px; }
		#foodweb p:nth-child(3) { top: 70px; left: 390px; }
		#foodweb p:nth-child(4) { top: 70px; left: 530px; }
		#foodweb p:nth-child(5) { top: 70px; left: 610px; }
		#foodweb p:nth-child(6) { top: 200px; left: 80px; }
		#foodweb p:nth-child(7) { top: 200px; left: 200px; }
		#foodweb p:nth-child(8) { top: 200px; left: 290px; }
		#foodweb p:nth-child(9) { top: 200px; left: 470px; }
		#foodweb p:nth-child(10) { top: 200px; left: 570px; }
		#foodweb p:nth-child(11) { top: 200px; left: 720px; }
		#foodweb p:nth-child(12) { top: 300px; left: 230px; }
		#foodweb p:nth-child(13) { top: 300px; left: 345px; }
		#foodweb p:nth-child(14) { top: 300px; left: 490px; }
		#foodweb p:nth-child(15) { top: 430px; left: 100px; }
		#foodweb p:nth-child(16) { top: 430px; left: 210px; }
		#foodweb p:nth-child(17) { top: 430px; left: 300px; }
		#foodweb p:nth-child(18) { top: 430px; left: 420px; }
		#foodweb p:nth-child(19) { top: 430px; left: 540px; }
		#foodweb p:nth-child(20) { top: 430px; left: 640px; }
		#xp { padding-top: 20px; line-height: 25px; }

		#screen1 p { float: left; width: 60%; }
		#screen1 div ul.slider { float: right; width: 40% }
		#screen2 .slider { float: right; width: 40%; margin-left: 10px; }

		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#screen3 img { width: 600px !important; margin: 0 115px !important; }
			#foodweb p { position: absolute; top: 0; font-size: 15px; }
			#foodweb p:nth-child(1) { top: 90px !important; left: 171px !important; }
			#foodweb p:nth-child(2) { top: 98px !important; left: 286px !important; }
			#foodweb p:nth-child(3) { top: 97px !important; left: 387px !important; }
			#foodweb p:nth-child(4) { top: 97px !important; left: 499px !important; }
			#foodweb p:nth-child(5) { top: 104px !important; left: 578px !important; }
			#foodweb p:nth-child(6) { top: 205px !important; left: 136px !important; }
			#foodweb p:nth-child(7) { top: 202px !important; left: 239px !important; }
			#foodweb p:nth-child(8) { top: 204px !important; left: 321px !important; }
			#foodweb p:nth-child(9) { top: 200px !important; left: 447px !important; }
			#foodweb p:nth-child(10) { top: 212px !important; left: 561px !important; }
			#foodweb p:nth-child(11) { top: 223px !important; left: 683px !important; }
			#foodweb p:nth-child(12) { top: 280px !important; left: 275px !important; }
			#foodweb p:nth-child(13) {
			    top: 279px !important;
			    left: 374px !important;
			    width: 60px;
			    line-height: 15px;
			    text-align: center;
			}
			#foodweb p:nth-child(14) { top: 284px !important; left: 469px !important; }
			#foodweb p:nth-child(15) { top: 380px !important; left: 165px !important; }
			#foodweb p:nth-child(16) { top: 380px !important; left: 255px !important; }
			#foodweb p:nth-child(17) {
			    top: 369px !important;
			    left: 332px !important;
			    width: 60px;
			    text-align: center;
			    line-height: 18px;
			}
			#foodweb p:nth-child(18) { top: 389px !important; left: 405px !important; }
			#foodweb p:nth-child(19) {
			    top: 384px !important;
			    left: 510px !important;
			    width: 50px;
			    line-height: 15px;
			    text-align: center;
			}
			#foodweb p:nth-child(20) { top: 380px !important; left: 584px !important; }
			#xp { padding-top: 20px; line-height: 25px; }
			#screen1 p { float: left; width: 65%; }
			#screen1 div ul.slider { float: right; width: 33%; margin-left: 1%; }
		}
		
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#foodweb, #foodweb p { margin-left: 45px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#foodweb, #foodweb p { margin-left: -45px; }
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
						<p><?php echo _("There are limited resources for most animals, so finding something to eat is an important survival skill. Animals are part of an <span class='key'>ecosystem</span>; a community of organisms and their physical environment interacting. Let's look at an example of how animals, ecosystems, and humans interact. Humans once feared bears and wolves and thought the world would be a better place without them. They were hunted until they were very rare. <span class='key'>Predators</span> are animals that use other animals for food, and <span class='key'>prey</span> are the animals used for food by predators. Without bears and wolves as predators, populations of prey species increase very rapidly. In Yellowstone National Park, the elk became so numerous that they began to starve when their food supplies ran out in winter. When large animals begin to die rapidly, their decaying bodies create health risks and cause disruptions."); ?></p>

						<div>
							<ul class="rslides slider">
								<li> <img src="assets/6/s1a.jpg"> </li>
								<li> <img src="assets/6/s1b.jpg"> </li>
								<li> <img src="assets/6/s1c.jpg"> </li>
							</ul>
						
							<ul class="rslides slider">
								<li> <img src="assets/6/s1d.jpg"> </li>
								<li> <img src="assets/6/s1e.jpg"> </li>
							</ul>
						</div>
					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("A few years ago, a new approach to managing predators and prey was adopted. Many people suggested that natural ecosystems actually need both predators and prey to remain stable over long periods of time.  In Yellowstone and elsewhere, bear hunting was stopped and wolves were reintroduced into areas they once inhabited."); ?></p>
						<ul class="rslides slider">
							<li><img src="assets/6/s3a.jpg"></li>
							<li><img src="assets/6/s3b.jpg"></li>
							<li><img src="assets/6/s3c.jpg"></li>
						</ul>
						<p><?php echo _("The impacts were dramatic. After only a few years, elk populations returned to more manageable levels. Bison were generally healthier when the weaker animals fell prey to wolves. Even trees were impacted. Scientists had noticed that aspen tree growth was suffering at the same time as elk populations were growing. Careful observation showed that elk were eating aspen bark to the point where the trees were having difficulty recovering each year. As wolf populations reduced elk populations, fewer elk meant less damage to trees and other types of plants. Wolves also help to improve the health of the elk and bison herds they prey upon for food. The weakest animals are also the easiest to catch and kill. By removing these animals from the herd, wolves eliminate them from competing for food and from reproducing."); ?></p>
					</div>
					<div id="screen3" class="screen">
						<div id="foodweb">
							<p><?php echo _("Bald Eagle"); ?></p>
							<p><?php echo _("Gray Wolf"); ?></p>
							<p><?php echo _("Grizzly Bear"); ?></p>
							<p><?php echo _("Coyote"); ?></p>
							<p><?php echo _("Red-Tailed Hawk"); ?></p>
							<p><?php echo _("Pronghorn"); ?></p>
							<p><?php echo _("Ospray"); ?></p>
							<p><?php echo _("Big Horn Sheep"); ?></p>
							<p><?php echo _("Beaver"); ?></p>
							<p><?php echo _("Bison"); ?></p>
							<p><?php echo _("Elk"); ?></p>
							<p><?php echo _("Mayfly"); ?></p>
							<p><?php echo _("Cutthroat Trout"); ?></p>
							<p><?php echo _("Deer Mouse"); ?></p>
							<p><?php echo _("Wheatgrass"); ?></p>
							<p><?php echo _("Pond Lily"); ?></p>
							<p><?php echo _("Lodgepole Pine"); ?></p>
							<p><?php echo _("Quaking Aspren"); ?></p>
							<p><?php echo _("Green Algae"); ?></p>
							<p><?php echo _("Gray Willow"); ?></p>
							<img src="assets/6/foodweb.png">
						</div>				

						<p id="xp"><?php echo _("All plants and animals depend on a complex series of interactions with their environment and with all other members of their local ecosystem. The deeper people look into those interactions, the better we can understand them. These deeper understandings can help us to manage plants and animals as they interact with human populations around the world."); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Finding something to eat..."); ?></strong></section></section>

	<script>
		$("#jquery_jplayer_1").jPlayer({
		   ready: function () {
			$(this).jPlayer("setMedia", {
			 m4v: "videos/6/wolves.ogv"		 
			})
		   },
		   ended: function(){
		   	$(this).jPlayer("play");
		   },
		   swfPath: "jPlayer/",
		   supplied: "m4v",
		   solutions: "flash, html",
			nativeVideoControls: {
				all: /./
			}
		  });
		
		$(".slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 1300,
			timeout: 3000
		});
		
		var hash = window.location.hash.slice(1);
		var screenCount = 3;

		if (hash != "") {
			$('.screen').hide();
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];
				if (screen < screenCount) {
					$('.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
				}
			});
		}
		
		$('.back-toggle').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut(function (){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore-toggle').click(function(){
			if ($('#screen1').is(':visible')) {
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {
				$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
				$('#screen2').fadeOut( function(){
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
