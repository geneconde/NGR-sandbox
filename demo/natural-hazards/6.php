<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/stackslider.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />

<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.custom.3.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<style>
html { background-color: #E9F5FC; overflow: hidden; }
body { display: none; background-color: #fff; }
html, body { height:100%; padding:0; margin:0; font-family: 'PlaytimeRegular'; min-height: 450px;  }
.wrap { margin: 0 auto; max-width:900px; height:100%; border-left: 1px dashed #FAC050; border-right: 1px dashed #FAC050; padding: 0 2px; }
.bg > div { width: 95%; margin: 0 auto; }
img { -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; }
h1 { font-size: 35px; padding: 10px 0; margin: 0; font-weight: bold;padding-top: 0 !important; } /* TITLE */
h2 { font-size: 24px; font-weight: normal; padding: 5px 0px; color: rgb(206, 0, 198); margin: 0; } /* QUESTION */
p { font-size: 24px; padding: 5px 0px; margin: 0; color: #000; }
.key { color:  #1143C2; }
.red { color: red; }
.green { color: green; }
.hidden { display: none; }
.bold { font-weight: bold; }
.centered { text-align: center; margin: 0 auto; }
.clear { clear: both; }
.fl { float: left; }
.fr { float: right; }
.img-align { vertical-align: sub; }
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
.no-padding { padding: 0; margin: 0; }
.ins { text-align: center; }

.wrap { border-left: 1px dashed #98A8FF; border-right: 1px dashed #98A8FF; }
.bg { background-image: url('images/6/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #d89c27; }
#buttons .next { display: none; }
#screen2, #screen3, #screen4 { display: none; }
.left-pics { float: left; margin: 80px 0 0 70px; width: 18%; }
.left-pics img { margin: 8px 0 0 0; width: 100%; border: 3px solid #ccc; }
.left-text { float: left; margin: 40px 0 0 10px; width: 70%; }

.pic { height: 240px; width: 81%; padding-top: 10px; margin: 0 auto; }
.pic img { height: 90%; }
.s2pics { float: left; margin: 40px 0 0 30px; width: 25%; height: 320px; }
.s2pics img { width: 100%; margin: 0 0 15px 0; }
.bottom-text { margin: 0 auto; }
#screen3 .pic > img, #screen4 .pic > img { margin-right: 15px; }

.video-container{ margin:0 auto; width: 400px; }

<!--Stack Slider-->
.main { width: 90%; position: relative; padding: 0 30px 50px 30px; }
.main p { text-align: center; padding-top: 60px; color: #a07419; text-shadow: 0 1px 1px rgba(255,255,255,0.6); }
.st-wrapper { z-index: 5; }
.st-wrapper .st-item img { height: 230px; border: 10px solid #fff;
	-webkit-box-shadow: 1px 1px 1px rgba(50, 50, 50, 0.62);
	-moz-box-shadow:    1px 1px 1px rgba(50, 50, 50, 0.62);
	box-shadow:         1px 1px 1px rgba(50, 50, 50, 0.62); }
.st-wrapper .st-title h2 { color: #475BC4; text-align: center; }
.st-wrapper { height: 400px !important; text-align: center; }
.st-stack { padding: 0 !important; margin: 0 !important; bottom: 5px !important; }
.st-title, nav { bottom: 30px !important; }

.st-stack { width:313px !important; }
.st-item.st-left,.st-item.st-right,.st-item.st-center{
-webkit-transform-origin: 50% 363.75px !important;
left: 245px !important;
}
<!-- End Stack Slider -->
div.screens { position: relative; z-index: 5; }
html[dir="rtl"] h1, html[dir="rtl"]  h2, html[dir="rtl"] p { text-align: right; } 
html[dir="rtl"] .st-wrapper nav span:last-child:before { content: "<"; }
html[dir="rtl"] .st-wrapper nav span:first-child:before { content: ">"; }
html[dir="rtl"] .s2pics { float: right;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1, #screen3, #screen4 { padding-top: 35px; }
	.pic { width: 665px; }
	.st-item.st-left, .st-item.st-right, .st-item.st-center { left: 284px !important; }
	.video-container { width: 340px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.left-text { width: 65%; margin: 10px 0 0 10px; }
	.st-item.st-left, .st-item.st-right, .st-item.st-center { left: 235px !important; }
}	

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about natural hazards"); ?></h1>
				<p id="first"><?php echo _("Natural hazards have been happening throughout history and they will continue to happen in the future. Here are some examples of natural phenomena that can be hazards if they affect people."); ?></p>
				<p class="ins"><?php echo _("Browse through the slides below by clicking the left and right arrows"); ?>.</p>
				<section class="main">
					<ul id="st-stack" class="st-stack-raw">
					<li><div class="st-item"><img src="images/6/1.jpg"/></div><div class="st-title"><h2><?php echo _("Earthquake"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/2.jpg"/></div><div class="st-title"><h2><?php echo _("Volcano"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/3.jpg"/></div><div class="st-title"><h2><?php echo _("Landslide"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/4.jpg"/></div><div class="st-title"><h2><?php echo _("Avalanche"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/5.jpg"/></div><div class="st-title"><h2><?php echo _("Flood"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/6.jpg"/></div><div class="st-title"><h2><?php echo _("Hurricane"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/7.jpg"/></div><div class="st-title"><h2><?php echo _("Tornado"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/8.jpg"/></div><div class="st-title"><h2><?php echo _("Wildfire"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/9.jpg"/></div><div class="st-title"><h2><?php echo _("Drought"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/10.jpg"/></div><div class="st-title"><h2><?php echo _("Blizzard"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/11.jpg"/></div><div class="st-title"><h2><?php echo _("Tsunami"); ?></h2></div></li>
					<li><div class="st-item"><img src="images/6/12.jpg"/></div><div class="st-title"><h2><?php echo _("Heat Wave"); ?></h2></div></li>
					</ul>
				</section>
			</div>
			<div id="screen2" class="screens">
				<br><br>
				<p><?php echo _("To keep us safe, it is important to study the science of the natural phenomena that cause these hazards so we can understand them and predict when and where they might happen and cause trouble for people."); ?></p>
				<p><?php echo _("A big difference between now and the past is that scientists have made great progress in studying and learning about the natural hazards and their causes and this knowledge can help communities prepare for them to save lives and decrease property damage."); ?></p>
				<div class="pic">
					<img src="images/6/warning.jpg">
					<img src="images/6/monitor.jpg">
				</div>
			</div>
			<div id="screen3" class="screens">
				<div class="s2pics">
					<img src="images/6/geologist.jpg">
					<img src="images/6/climatologist.jpg">
				</div>
				<div class="left-text">
					<br>
					<p><?php echo _("<span class='key'>Geologists</span> are scientists that study the science of the solid parts of the earth made out of rocks and soil but also study the water in rivers and lakes too."); ?><p>
					<br>
					<p><?php echo _("<span class='key'>Climatologists</span> and <span class='key'>Meteorologists</span> are scientists that study the atmosphere to understand climate and weather."); ?></p>
				</div>
				<div class="clear"></div>
				<div class="bottom-text">
					<p><?php echo _("Scientists are limited as to which natural hazards they can forecast. However, the more science advances, the more tools and technology are created to help monitor and forecast what is going on in nature."); ?></p>
					
					<p><?php echo _("But all of these scientists have to understand the whole earth together as one big system – the rocks, the water, the atmosphere, the ice, and all the living things on earth – in order to really know how it all works."); ?></p>
				</div>
			</div>
			<div id="screen4" class="screens">
				<p><?php echo _("Let’s look at one particular natural hazard and how the earth is one big system."); ?> </p>
				<p><?php echo _("A <span class='key'>tsunami</span> is a huge wave. The word tsunami actually means \"harbor wave\" in Japanese. When an earthquake occurs or volcano erupts under water, it can trigger a tsunami. These massive waves travel very fast. When they hit land, they slow down but increase in height."); ?></p>
				<!--<div class="video-container">
					<video controls>
					  <source src="images/6/tsunami.mp4" type="video/mp4">
					</video>
				</div>-->
				<div class="video-container">
					<div id="jquery_jplayer_1"></div>
					<div id="jp_container_1"></div>
				</div>
           
				<div class="bottom-text">
				<p><?php echo _("The waves hit and flood everything, destroying homes and other buildings. After a tsunami, it’s hard to keep things dry and clean, and it’s often hard to access clean water."); ?></p>
				</div>
				<div class="clear"></div>
				<p><?php echo _("That’s why in addition to all the casualties, many diseases usually spread and cause even more problems after a tsunami."); ?></p>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Studying rock and soil samples..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen < 4) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$("#jquery_jplayer_1").jPlayer("play");
					$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();
					});
				}
			});
		}

		$( '#st-stack' ).stackslider();
		
		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "5.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('#screen1').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('#screen3').fadeOut( function(){ 
					$('#screen2').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen3'); 
					window.location.hash = '#screen2';
				});
			} else if($('#screen4').is(':visible')) {
				$('#screen4').fadeOut( function(){
					$("#jquery_jplayer_1").jPlayer("stop");
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});		
				$('a.next-toggle').fadeOut( function(){ 
					$('a.readmore-toggle').fadeIn();
				});
			}
		});
		
		/* Read More Transition */
		$('a.readmore-toggle').click(function(){
			if( $('#screen1').is(':visible') ) { 	
				$('#screen1').fadeOut( function(){ 
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut( function(){
					$('#screen3').fadeIn(); 
					window.location.hash = '#screen3';
				});
			} else if ( $('#screen3').is(':visible') ) {
				$('#screen3').fadeOut( function(){
					$("#jquery_jplayer_1").jPlayer("play");
					$('#screen4').fadeIn();
					window.location.hash = '#screen4';
				});
				$('a.readmore-toggle').fadeOut( function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});
		
		$("#jquery_jplayer_1").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", {
					webmv: "images/6/tsunami.webm",
					m4v: "images/6/tsunami.m4v"		 
				}).jPlayer();
			},
			
			ended: function() { // The $.jPlayer.event.ended event
				$(this).jPlayer("play"); // Repeat the media
			},

			swfPath: "scripts",
			supplied: "webmv, m4v",
			size: {
				 width: "340px",
				 height: "250px"
			},
			solutions: "flash, html",
			nativeVideoControls: {
				all: /./
			}
		});
	});
	</script>
	<script type="text/javascript" src="scripts/stackslider.js"></script>
	<script type="text/javascript">	
		// $( function() {
			// $( '#st-stack' ).stackslider();
		// });
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>

