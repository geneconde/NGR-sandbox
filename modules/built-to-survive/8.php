<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/demo.css" />
<link rel="stylesheet" type="text/css" href="styles/style1.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/coin-slider-styles.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/coin-slider.min.js"></script>
<script src="scripts/modernizr.custom.86080.js"></script>
<style>
.bg { background-image: url('images/8/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
h1 { color: #FCD683; }
.wrap { border-left: 1px dashed #CE7577; border-right: 1px dashed #CE7577; }
p { color: #000; text-align: left; }
.key { color: #007C4A; }
#buttons .next, img.back-toggle-screen { display:none; }
#screen2, #screen3 { display: none; height: 100%; width: 100%; }
#screen1 .pic { width: 815px; margin: 5px auto; height: 160px; }
#screen1 .pic img { float: left; height: 100%; margin-right: 5px; }
#screen1 .pic img:last-child { margin-right: 0px !important; }
#screen2 .pic { height: 250px; width: 375px; margin: 0 auto; }
#screen2 .pic img { height: 100%; }
#screen2 p { padding: 15px; }
#screen3 .pic { width: 450px; height: 300px; margin: 0 auto; }
#screen3 .pic img { height: 100%; }
#coin-slider { margin: 0 auto; }
.cs-buttons a { border: 1px solid #fff; }
.cs-active { background-color: #50AD50; color: #FFFFFF; }
#text { z-index: 2000; width: 100%; margin: 0 auto; position: absolute; top: 0; left: 0; color: #473C00; }
.text-item { width: 95%; margin: 0 auto; margin-top: 400px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; background: rgba(255, 255, 255, 0.7); }
#text2 { width: 95%; margin: 0 auto; }
<?php if($language == "es_ES") { ?>
	h1 { font-size:32px; }
	.text-item { margin-top: 370px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2, #screen3 { height: 95%; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .pic { height: auto; width: 100%; }
	#screen1 .pic img { width: 175px; height: auto; }
}	
</style>
</head>
<body id="page">
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about being built to survive"); ?></h1>
				<p><?php echo _("The next kind of living thing we will examine is the reptile. <span class='key'>Reptiles</span> have scaly skin, as pictured below. This special skin helps the reptiles regulate their body moisture and temperature. Reptiles also are <span class='key'>cold-blooded</span>. That means their body temperature varies with the temperature around them. Thus, reptiles are adapted to live in warmer climates."); ?></p>
				<div class="pic">
					<img src="images/8/crocodile.jpg">
					<img src="images/8/frog.jpg">
					<img src="images/8/iguana.jpg">
					<img src="images/8/turtle.jpg">
				</div>
				<div class="clear"></div>
				<p><?php echo _("Reptiles also lay eggs on land, their young are hatched in adult form, and they obtain their oxygen using lungs through the process of <span class='key'>respiration</span>, or breathing. Reptiles are <span class='key'>vertebrates</span>, meaning they possess a backbone in their skeletal structure. Commonly, known types of reptiles are snakes, crocodiles, frogs, and iguanas."); ?></p>
			
			</div>
			<div id="screen2" class="screens">
				<ul class="cb-slideshow">
					<li><span></span><div></div></li>
					<li><span></span><div></div></li>
					<li><span></span><div></div></li>
					<li><span></span><div></div></li>
					<li><span></span><div></div></li>
					<li><span></span><div></div></li>
				</ul>
				<div id="text">
					<div class="text-item"> 
						<p><?php echo _("Another type of living thing of great diversity is <span class='key'>plants</span>. Plants live in many different environments, and if you think about it, you will find only certain kinds of plants living in deserts, in the mountains, in lakes, or in a rainforest, to name just a few environments. A plant living in the desert has to be able to live in conditions that range from very hot days to very cold  nights. Very little water is available in the desert, so plants there have adaptations that conserve water. The cactus plant is a well-known example of a plant well suited to survival in the desert."); ?></p>
					</div>
				</div>
			
			</div>
			<div id="screen3" class="screens">
				<div id="text2">
					<p><?php echo _("Among plants, there are many physical adaptations used to survive. Some plants, such as the cactus plant, have <span class='key'>thorns</span> that serve as protection and help reduce a loss of water in the hot sun. Many plants have flowers with <span class='key'>stamens</span>, the part of the flower that produces <span class='key'>pollen</span>, which are used for flower reproduction. The bright colors of a flower are an adaptation that attracts the bees and other insects that spread the pollen."); ?></p><br>
				</div>
				<div id="coin-slider">
					<img src="images/8/cactus.jpg">
					<img src="images/8/cactus2.jpg">
					<img src="images/8/cactus3.jpg">
					<img src="images/8/cactus4.jpg">
					<img src="images/8/cactus5.jpg">
					<img src="images/8/cactus6.jpg">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Closing the cages..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 3;
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];
				if(screen == screenCount) {
					$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();
					});
				}
			});
		}

		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn(); 
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('a.next-toggle').fadeOut( function(){ $('a.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});		
			}
		});
		
		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) { 	
				$('h1').fadeOut();
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			}
		});
		
		$('#coin-slider').coinslider({
			width: 400
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
