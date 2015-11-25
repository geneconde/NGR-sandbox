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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
.bg { background-image: url('images/4/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; overflow: hidden; }
h1 { margin:0; font-size: 35px; padding: 10px 0px; font-weight:bold; color: #0bb1d6; font-family: 'PlaytimeRegular';}
p { margin: 5px 0px; padding: 0; font-size: 24px; font-family: 'PlaytimeRegular'; }
#buttons .next { display: none; }

#screen2, #screen3 { display: none; }
#screen2 p:first-child, #screen3 p:first-child { margin: 0; padding-top: 10px; }
.s1pic { height: 135px; text-align: center; margin: 0 auto; width: 75%; }
.s1pic2 { height: 135px; text-align: center; margin: 0 auto; width: 50%; }
.s1pic img, .s1pic2 img { float: left; height: 100%; margin-right: 5px !important; }
.pic2 { height: 200px; width: 300px; margin: 0 auto; padding: 5px 0; }
.pic2 img { height: 100%; -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; }
.gif-pic { height: 200px; width: 267px; margin: 0 auto; padding: 5px 0px; }
.gif-pic img { height: 100%; }
#screen3 .pic2 { height: 170px !important; width: 255px; }
.group2 { height: 240px; }

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 29px; }
<?php endif; ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	#screen2, #screen3 { padding-top: 35px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	#screen3 p:nth-child(3) { width: 570px; float: left; margin-right: 10px; }
	#screen3 .pic2 { float: left; margin-top: 10px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.s1pic { width: 625px; }
	.s1pic2 { width: 420px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens"> 
				<h1><?php echo _("Reviewing big ideas... about natural hazards"); ?></h1>
				<p><?php echo _("Natural hazards are dangers that come from nature; threatening life, health, property, and the environment."); ?></p>
				<p><?php echo _("There are many different kinds of natural hazards. Some natural hazards are related to the weather, like <span class='key'>lightning</span>, <span class='key'>hurricanes</span>, and <span class='key'>tornadoes</span>."); ?></p>
				<div class="s1pic">
					<img src="images/4/lightning.jpg">
					<img src="images/4/hurricane.jpg">
					<img src="images/4/tornado.jpg">
				</div>
				<div class="clear"></div>
				<p><?php echo _("Some are related to just geology; like <span class='key'>earthquakes</span> and <span class='key'>volcanoes</span>."); ?></p>
				<div class="s1pic2">
					<img src="images/4/earthquake.jpg">
					<img src="images/4/volcano.jpg">
				</div>
				<p><?php echo _("Many <span class='key'>natural hazards</span> and <span class='key'>disasters</span> are the result of combinations of weather and landscapes in certain areas. A landscape is the shape and features of the land."); ?><p>
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("For instance, California gets a lot of <span class='key'>wildfires</span> because of a combination of hot dry windy weather with lots of trees and bushes and rolling hills."); ?></p>
				<div class="pic2">
					<img src="images/4/forest-fire.jpg">
				</div>
				<p><?php echo _("North Dakota gets <span class='blue'>flooding</span> almost every spring because of lots of rain and snow melting into a narrow river in a low flat river valley."); ?></p>
				<div class="pic2">
					<img src="images/4/flood.jpg">
				</div>
			</div>
			<div id="screen3" class="screens">
				<p><?php echo _("The good news is that <span class='key'>meteorologists</span>, who are weather scientists, do their best to tell us ahead of time about weather related natural hazards. This is called <span class='key'>forecasting</span>; it is another name for predicting the weather. They use all kinds of tools, their knowledge about weather, and past events that happened in the region to help people prepare for natural hazards."); ?></p>
				<div class="gif-pic">
					<img src="images/4/hurricane.gif">
				</div>
				
				<p><?php echo _("Meteorologists might forecast heavy rains and snowmelt. This will warn people to prepare for a natural flood hazard. Then the community fills sand bags to help build temporary dams to help protect houses and businesses in cities along rivers where flooding is predicted."); ?></p>
				<div class="pic2">
					<img src="images/4/sandbags.jpg">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Planning for emergencies..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen < 3) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();
					});
				}
			});
		}
		
		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "3.php#answer";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn(); 
					$('#screen1').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					window.location.hash = '';
				});
				$('a.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});		
				$('a.next-toggle').fadeOut( function(){ 
					$('a.readmore-toggle').fadeIn();
				});
			}
		});
		
		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) { 	
				$('h1').fadeOut();
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen3');
					window.location.hash = '#screen2';
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					$('a.back-toggle').parent().attr('href','#screen2');
					window.location.hash = '#screen3';
				});
				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
