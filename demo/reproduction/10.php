<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<style>
.bg { background-image: url('images/10/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #F4CBDB; border-right: 1px dashed #F4CBDB; }
h1 { color: #6F1437; }
img.next-toggle, img.back-toggle-screen { display:none; }
p { padding-top: 3%; }
#screen1 .col1 { width: 55%; float: left; }
#screen1 .col2 { width: 43%; float: right; margin-top: 2%; }
#screen1 .col2 img:nth-child(2) { width: 100%; margin: 0 auto; display: block; margin-top: 4%; }
#buttons .next { display: none; }
#screen2 { display: none; }
#screen2 .col1 { width: 53%; float: left; margin-top: 2%; }
#screen2 .col2 { width: 45%; float: right; }
#jp_container_1 { margin-bottom: 2%; }
<?php if($language == "es_ES") { ?>
	p { padding:5px 0; }
<?php } ?> 
<?php if($language == "zh_CN") { ?>
	#screen1 p { font-size: 22px; }
<?php } ?> 
html[dir="rtl"] h1 { font-size: 33px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	
}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	.jp_video_0 {
		width: 84% !important;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	.jp_video_0 {
		width: 84% !important;
	}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("More big ideas... about reproduction"); ?></h1>
				<div class="col1">
					<p><?php echo _("When you first look at flowers, the process of getting <span class='key'>pollen</span> to egg cells seems simple. The pollen probably just falls from the anther to the stigma, and everything takes care of itself. The real process is better. Future generations are healthier when characteristics from different parents are mixed in offspring. This is why most flowers don't have their male and female parts ready to reproduce at the same time. The pollen that is made by a particular plant won't be used to pollinate that plant, but will send its message to another plant."); ?></p>
					<p><?php echo _('The problem is getting the pollen from one location to another. Sometimes pollen that is shed from a flower is carried by the wind to another flower. In more interesting cases, the pollen has a carrier - an animal. Birds, bees, and bats can be carriers of pollen.'); ?></p>
				</div>
				<div class="col2">
					<div class="placeholder">
						<ul class="rslides">
						  <li><img src="images/10/a.jpg" /></li>
						  <li><img src="images/10/b.jpg"></li>
						  <li><img src="images/10/c.jpg"></li>
						</ul>
					</div>
					
					<img src="images/10/Dandelion.gif" />
				</div>
			</div>
			
			<div class="screens" id="screen2">
				
				<div class="col1">
					
					<div id="jquery_jplayer_1"></div>
					<div id="jp_container_1"></div>
					
					<div class="placeholder">
						<ul class="rslides">
						  <li><img src="images/10/1.jpg" /></li>
						  <li><img src="images/10/2.jpg"></li>
						  <li><img src="images/10/3.jpg"></li>
						</ul>
					</div>
				</div>
				<div class="col2">
					<p><?php echo _("Bees pollinate more than 100 types of agricultural crops in the United States, including apples, oranges, lemons, watermelons, and cantaloupe. Bees are attracted to flowers because they can smell sweet, sugary nectar, usually located near the base of the flower, inside the petals. As a bee climbs into a flower, its hairy body rubs past anthers, thick with pollen. Much of that pollen is stuck to the bee hairs. At the next flower, the bee climbs in again, searching for nectar. As it climbs in, it brushes past the sticky stigma, losing a few of the pollen grains. This pollen then fertilizes the flower and fruit development begins."); ?></p>
				</div>
			</div>
			
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Bees carrying pollen"); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on screen2
					$('#screen2').fadeIn();
					
					$('a.readmore-toggle').fadeOut( function(){
						$('a.next-toggle').fadeIn();
					});
				} else {
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
				}
			});
		}

		$('a.readmore-toggle').click(function(){
			$('#screen1').fadeOut(function(){
				$('#screen2').fadeIn();
				$('a.readmore-toggle').fadeOut( function(){
					$('a.next-toggle').fadeIn();
				});
				
			});
		});
		$('a.back-toggle').click(function(){
			if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
				});
			}else{
				$('a.back-toggle').attr('href','9.php');
			}
		});
		//slides
		$(".rslides").responsiveSlides();
	});
	
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				webmv: "videos/10/video1.webm",
				m4v: "videos/10/video1.m4v",
			}).jPlayer("play");
		},
		
		ended: function() { // The $.jPlayer.event.ended event
			$(this).jPlayer("play"); // Repeat the media
		},
	
		swfPath: "scripts",
		supplied: "webmv, m4v",
		size: {
			 width: "100%",
			 height: "260px"
		},
		solutions: "flash, html",
		nativeVideoControls: {
			all: /./
		}
	});
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
