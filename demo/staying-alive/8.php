<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
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
		.bg h1 { color: #966BA8; margin-left: 0px; }
		.wrap { border-color: #E25C8E; }
		.bg { background-image: url(assets/8/bg.jpg); overflow: hidden; }

		#screen1 .slider { width: 400px; margin: 0 auto; position: relative; }
		#screen1 .slider img { margin-bottom: 10px; }
		#screen1 .slider p { text-align: center; color: #5ca028; line-height: 30px; }
		#screen1 > p:last-of-type { color: #0096fd; text-align: center; font-size: 15px; }

		#screen2 img { width: 385px; margin: 10px auto; display: block; }
		#before, #after { width: 400px; }
		#before { float: left; } #after { float: right; }
		#before p, #after p { font-size: 17px; color: #5ca028; padding: 0 8px; }
		#before p:last-of-type, #after p:last-of-type { font-size: 15px; color: #0096fd; margin: -14px 0 0 0 !important; }

		#screen3 ul { margin-top: 5%; }
		#video { width: 480px; margin: 1% auto; }
		#vid-desc {  color: #5ca028; font-size: 18px; text-align: center; }
		#vid-desc > span { font-size: 18px; color: #0096fd; }

		#screen2, #screen3{ display: none; }
		#screen2 p { line-height: 27px; }
		#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }

		#buttons .next { display: none; }
		<?php if($language == "es_ES") { ?>
			p { font-size: 22px; }
			#screen3 p { font-size: 21px; }
		<?php } ?> 

		.pixcredit {
			bottom: -21px;
			position: absolute;
			margin: 0 auto;
			width: 100%;
		}
		#screen3 p { line-height: 30px; margin-top: 0 !important;}
		#jplayer, video {
			width: 90% !important;
		    height: 220px !important;
		    margin: 0 auto;
		}

		@media only screen and (max-width: 1250px){
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 33px; }
			#screen1 .slider p { margin: 3px 0; }
			#screen2 #before, #screen2 #after { width: 45%; }
			#screen2 img { width: 100%; }
			#screen2 .desc { line-height: 20px; }
			#screen3 p {
			    padding-top: 0px !important;
			    margin-top: 0;
			    line-height: 25px;
			}
			#vid-desc { font-size: 15px; }
			#video { width: 400px !important; height: 240px !important; }
			#jplayer, video { width: 100% !important; height: 220px !important; }
		}
		@media only screen and (max-width: 885px) {
			#screen1 p, #screen2 .desc, #screen3 p, #screen3 span {
				font-size: 15px;
				line-height: 25px;
			}
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
						<p><?php echo _("Over time, different environments change as well as all the living things in their ecosystem. The disruption of a local environment can lead to many changes, some difficult to predict. These changes can be manmade, as in Yellowstone; or they may be due to natural factors, or even disasters."); ?></p>
						<p><?php echo _("In the picture below, you can see how human demands for water in addition to a drought has changed this area over 14 years. You can probably imagine what happened to the plants and animals that depended on the water in this ecosystem—they probably disappeared."); ?></p>
						<p class="pixcredit"><?php echo _("Photo credit: NASA's Earth Observatory, NASA"); ?></p>
						<ul class="rslides slider">
							<li> <img src="assets/8/s1a.jpg"> <p><?php echo _("March"); ?> 25, 1999</p></li>
							<li> <img src="assets/8/s1b.jpg"> <p><?php echo _("April"); ?> 20, 2000</p></li>
							<li> <img src="assets/8/s1c.jpg"> <p><?php echo _("April"); ?> 23, 2001</p></li>
							<li> <img src="assets/8/s1d.jpg"> <p><?php echo _("May"); ?> 12, 2002</p></li>
							<li> <img src="assets/8/s1e.jpg"> <p><?php echo _("April"); ?> 13, 2003</p></li>
							<li> <img src="assets/8/s1f.jpg"> <p><?php echo _("May"); ?> 1, 2004</p></li>
							<li> <img src="assets/8/s1g.jpg"> <p><?php echo _("April"); ?> 2, 2005</p></li>
							<li> <img src="assets/8/s1h.jpg"> <p><?php echo _("April"); ?> 26, 2006</p></li>
							<li> <img src="assets/8/s1i.jpg"> <p><?php echo _("May"); ?> 17, 2007</p></li>
							<li> <img src="assets/8/s1j.jpg"> <p><?php echo _("April"); ?> 26, 2008</p></li>
							<li> <img src="assets/8/s1k.jpg"> <p><?php echo _("April"); ?> 13, 2009</p></li>
							<li> <img src="assets/8/s1l.jpg"> <p><?php echo _("April"); ?> 7, 2010</p></li>
							<li> <img src="assets/8/s1m.jpg"> <p><?php echo _("May"); ?> 5, 2011</p></li>
							<li> <img src="assets/8/s1n.jpg"> <p><?php echo _("April"); ?> 20, 2012</p></li>
							<li> <img src="assets/8/s1o.jpg"> <p><?php echo _("April"); ?> 26, 2013</p></li>
						</ul>
					</div>

					<div id="screen2" class="screen">
						<div id="before">
							<img src="assets/8/before.jpg" />
							<p><?php echo _("Mount St. Helens before the May 18, 1980 eruption. View from the northeast of Spirit Lake."); ?></p>
							<p><?php echo _("Photograph courtesy USGS"); ?></p>
						</div>
						<div id="after">
							<img src="assets/8/after.jpg" />
							<p><?php echo _("Plume rises from Mount St. Helens' dome, Spirit Lake in foreground; view from the north. May 19, 1982."); ?></p>
							<p><?php echo _("Photograph courtesy Topinka, Lyn, USGS"); ?></p>
						</div>
						<div class="clear"></div>
						<p class="desc"><?php echo _("In the pictures above, you can see a big change in a mountain. In the spring of 1980, one of the Pacific Northwest's most majestic mountains began to show signs of change. Mt. St. Helens began to rumble, and its many earthquakes each day attracted scientists, journalists, and the simply curious. On May 18, at 8:32 AM, the whole world around the mountain changed. One entire part of the mountain slid away, and the top of Mt. St. Helens exploded, releasing gases, heat, ash, and energy powerful enough to turn the surrounding forests, lakes, and meadows into a lifeless expanse, resembling the surface of the moon. Little survived in what was once a forest teeming with birds, squirrels, elk, bear, and life of all kinds. Manmade structures were obliterated and trees blown flat for many miles in all directions. It was a disaster the likes of which had been seldom seen."); ?></p>
					</div>

					<div id="screen3" class="screen">
						<p><?php echo _("But nature moves on. Within a few years, a few plants began to colonize the blast area. Animals followed, and a new ecosystem began to form. More than thirty years later, the Mt. St. Helens region is home to a healthy, diverse ecosystem once again."); ?></p>
						<div id="video">
							<div id="jplayer"></div>
						</div>	
						<p id="vid-desc"><?php echo _("This time series of data shows the explosion and subsequent recovery of life on the volcano. Landsat, a satellite program operated by NASA and the U.S. Geological Survey acquired the images between 1979 and 2011. In them, scientists have an unprecedented opportunity to witness how life recovers from devastation. <span>(Video credit: NASA's Goddard Space Flight Center)</span>"); ?></p>
						<div class="clear"></div>
						<p class="s3p3"><?php echo _("Disasters occur in nature. Some are caused by humans; others happen for reasons related to weather, climate, or even changes in the earth. These changes can lead to drastic changes in the living populations of any given area. Over time, the local ecosystem will return to a stable balance between all types of plants and animals. The system may be the same as it was before the disaster, or it may be different. But stability will return."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at old pictures..."); ?></strong></section></section>

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
	    	size: { width: "460px", height: "240px" },
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
		var screenCount = 3;

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
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {

				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function() {
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
