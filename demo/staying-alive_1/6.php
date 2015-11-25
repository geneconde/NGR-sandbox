<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<style>
.bg h1 { color: #4BA4DF; }
.wrap { border-color: #FFDC38; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 p { float: left; width: 460px; }
#screen1 div { float: right; margin-right: 10px; }
#screen1 div ul { margin-top: 15px; }
#screen1 div ul:nth-child(2) { margin-top: 30px; }

#screen1 .slider { width: 372px; height: 246px;  border-radius: 5px; overflow:hidden;}
#screen1 .slider li { width: 372px;  -moz-border-radius: 0; }
#screen1 .slider img { width: auto; ; -moz-border-radius: 0; border-radius: 0; }

@media screen and (-webkit-min-device-pixel-ratio:0) { #screen1 .slider img { width: 362px; -webkit-border-radius: 5px; border-radius: 5px; } }
@media screen and (-webkit-min-device-pixel-ratio:0) { #screen2 .slider img { width: 370px; -webkit-border-radius: 5px; border-radius: 5px;} }

#screen2 p { font-size: 23px; }
#screen2 p:last-child { padding-top: 0 !important; }
#screen2 .clear span { padding-top: 5px !important; padding-bottom: 0 !important; font-size: 24px; }
#screen2 .slider { width: 360px; float: right; margin: 15px; border-radius: 5px; overflow:hidden;}
#screen2 .slider li { width: 358px; -moz-border-radius: 5px; }
#screen2 .slider img { width: auto; -moz-border-radius: 5px;  border-radius: 5px; }

//#screen2 > p:nth-child(3) { margin-top: 25px; width: 420px; float: right; }
#right { float: right; }
#left { float: left; margin-right: 20px; }
//#bottom p { float: left; width: 453px; margin-top: 20px; }

#screen2, #screen3 { display: none; }
#screen2 p:first-child, #screen3 p:first-child{ padding-top: 15px; }

#jquery_jplayer_1 { width: 350px !important; }
#video { padding-top: 100px; margin: 0 auto 30px; width: 380px; }
video { width: 400px !important; }

#foodweb { width: 769px; height: 490px; background: url(images/6/foodweb.png) center 20px no-repeat; padding-top: 20px; margin: 0 auto; position: relative; }
#foodweb p { position: absolute; top: 0; font-size: 18px; }
#foodweb p:nth-child(1) { top: 80px; left: 74px; }
#foodweb p:nth-child(2) { top: 96px; left: 218px; }
#foodweb p:nth-child(3) { top: 99px; left: 348px; }
#foodweb p:nth-child(4) { top: 95px; left: 488px; }
#foodweb p:nth-child(5) { top: 107px; left: 594px; }
#foodweb p:nth-child(6) { top: 230px; left: 44px; }
#foodweb p:nth-child(7) { top: 232px; left: 160px; }
#foodweb p:nth-child(8) { top: 235px; left: 264px; }
#foodweb p:nth-child(9) { top: 226px; left: 424px; }
#foodweb p:nth-child(10) { top: 246px; left: 580px; }
#foodweb p:nth-child(11) { top: 257px; left: 724px; }
#foodweb p:nth-child(12) { top: 329px; left: 204px; }
#foodweb p:nth-child(13) { top: 325px; left: 299px; }
#foodweb p:nth-child(14) { top: 336px; left: 455px; }
#foodweb p:nth-child(15) { top: 455px; left: 69px; }
#foodweb p:nth-child(16) { top: 450px; left: 182px; }
#foodweb p:nth-child(17) { top: 448px; left: 267px; }
#foodweb p:nth-child(18) { top: 470px; left: 373px; }
#foodweb p:nth-child(19) { top: 461px; left: 494px; }
#foodweb p:nth-child(20) { top: 455px; left: 601px; }

#buttons .next { display: none; }
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

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p {width: 50%;}
	#screen1 div {width: 48%;}
	#foodweb { background-size: 100%; 100%; width: 740px; }
	#foodweb p:nth-child(11),#foodweb p:nth-child(10),#foodweb p:nth-child(5) { margin-left: -24px; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="clear screen">
				<h1><?php echo _("More big ideas... about staying alive"); ?></h1>
				<p><?php echo _("There are limited resources for most animals, so finding something to eat is an important survival skill. Animals are part of an <span class='key'>ecosystem</span>; a community of organisms and their physical environment interacting. Let's look at an example of how animals, ecosystems, and humans interact. Humans once feared bears and wolves and thought the world would be a better place without them. They were hunted until they were very rare. <span class='key'>Predators</span> are animals that use other animals for food, and <span class='key'>prey</span> are the animals used for food by predators. Without bears and wolves as predators, populations of prey species increase very rapidly. In Yellowstone National Park, the elk became so numerous that they began to starve when their food supplies ran out in winter. When large animals begin to die rapidly, their decaying bodies create health risks and cause disruptions."); ?></p>

				<div>
					<ul class="rslides slider">
						<li> <img src="images/6/s1a.jpg"> </li>
						<li> <img src="images/6/s1b.jpg"> </li>
						<li> <img src="images/6/s1c.jpg"> </li>
					</ul>
				
					<ul class="rslides slider">
						<li> <img src="images/6/s1d.jpg"> </li>
						<li> <img src="images/6/s1e.jpg"> </li>
					</ul>
				</div>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("A few years ago, a new approach to managing predators and prey was adopted. Many people suggested that natural ecosystems actually need both predators and prey to remain stable over long periods of time.  In Yellowstone and elsewhere, bear hunting was stopped and wolves were reintroduced into areas they once inhabited."); ?></p>

				<!--<ul class="rslides slider" id="left">
					<li> <img src="images/6/s2a.jpg"> </li>
				</ul>-->

				<div class="clear">

					<ul class="rslides slider">
						<li><img src="images/6/s3a.jpg"></li>
						<li><img src="images/6/s3b.jpg"></li>
						<li><img src="images/6/s3c.jpg"></li>
					</ul>
					
					<span><?php echo _("The impacts were dramatic. After only a few years, elk populations returned to more manageable levels. Bison were generally healthier when the weaker animals fell prey to wolves. Even trees were impacted. Scientists had noticed that aspen tree growth was suffering at the same time as elk populations were growing. Careful observation showed that elk were eating aspen bark to the point where the trees were having difficulty recovering each year. As wolf populations reduced elk populations, fewer elk meant less damage to trees and other types of plants. Wolves also help to improve the health of the elk and bison herds they prey upon for food. The weakest animals are also the easiest to catch and kill. By removing these animals from the herd, wolves eliminate them from competing for food and from reproducing."); ?></span>
			
				</div>

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
				</div>				

				<p><?php echo _("All plants and animals depend on a complex series of interactions with their environment and with all other members of their local ecosystem. The deeper people look into those interactions, the better we can understand them. These deeper understandings can help us to manage plants and animals as they interact with human populations around the world."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
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

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
