<?php 
require_once "../../session.php";
$_SESSION['cmodule'] = 'how-animals-behave';
require_once '../../verify.php';
require_once "locale.php";

if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo _("How Animals Behave"); ?></title>
	<link rel="stylesheet" type="text/css" href="styles/locale.css" />
	<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
	<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
	<link href="styles/js-image-slider.css" rel="stylesheet" type="text/css" />
	<script src="scripts/js-image-slider.js" type="text/javascript"></script>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/button.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<style>
		html { background-color: #FFFFFF; }
		body { display: none; }
		h1 { color: #950868 }
		p { width: 100%; text-align: left; }
		.wrap {	border-left: 1px dashed #AFDBDC; border-right: 1px dashed #AFDBDC; }	
		.bg { 
			background: url(images/8/bg.jpg) 0 0 no-repeat;  
			background-size: 100% 100%; 
			width:100%; 
			height:100%; 
			position:relative; 
		}
		.container {
			margin-top: 2%;
		}
		.container img {		
			margin: 2% auto;
			-webkit-border-radius: 12px; /* Android ≤ 1.6, iOS 1-3.2, Safari 3-4 */
			border-radius: 10px; /* Android 2.1+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 5+ */
			/* useful if you don't want a bg color from leaking outside the border: */
			background-clip: padding-box; /* Android 2.2+, Chrome, Firefox 4+, IE 9+, iOS 4+, Opera 10.50+, Safari 4+ */
		}
		.buttons { position: absolute; bottom: 2%; right: 2%; }
		.buttons-back { position: absolute; bottom: 2%; left: 2%; }
		#buttons .next { display: none; }	
		#sliderFrame { padding-top: 25px !important;}	
		#slider { width: 450px; margin: 0 auto; height: 300px !important;}	
		.navBulletsWrapper { display: none }
		#screen1 .container { background: no-repeat  center; background-image: url(images/8/divbg.png) ;  width: 100%; height: 350px; margin: 0 auto;  }	
		#screen2 { display: none; padding-top: 2% }
		#screen2 img { width: 40% }		#parentDiv1 div { float: left; width: 64%; height: 240px; }
		#parentDiv1 div p{ padding-top: 0px }
		#parentDiv1 .container { width: 35%; margin: 0 }
		#parentDiv1 .container img { width: 95% }	#taste { width: 100%; margin: 2% 0px; height: 135px }
		#taste img { width: 20%; float: left; }
		#screen3 { display: none; }
		#screen3 .container img{ display: inline; width: 19.5% }

		html[dir="rtl"] p { text-align: right; }
		<?php if($language == "es_ES") { ?>
			h1 { font-size:30px; }
			#screen2 p { font-size:22px; }
			#screen2 p:nth-child(4) { width: 85% }
			<?php } ?>

			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
				#screen2 { padding-top: 35px; }
			}	
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
				#parentDiv1 .container img { padding-top: 35px; }
				#parentDiv1 div {height: auto;  }
			}	

		</style>
	</head>

	<body>

		<div class="wrap">

			<div class="bg">
				<h1><?php echo _("More big ideas... about how organisms behave"); ?></h1>
				<div id="screen1">
					<p><?php echo _("Organisms respond to different stimuli in different ways. All organisms have the ability to sense change in their environment, and to respond to that change accordingly."); ?>
					</p>
					<p><?php echo _("Humans have a well-developed nervous system, and respond to light, mechanical, and chemical stimuli in different ways. <span class='key'>Mechanical stimuli</span> include anything that cause sensations of touch, pain, sound, or temperature. <span class='key'>Chemical stimuli</span> are molecules in our environment that make us sense taste or smell."); ?>
					</p>					
					<div class="container">
						<div id="sliderFrame">
							<div id="slider">
								<img src="images/8/pain.jpg" alt="<?php echo _("Pain"); ?>" />
								<img src="images/8/hear.jpg" alt="<?php echo _("Sound"); ?>" />	
								<img src="images/8/temperature.jpg" alt="<?php echo _("Temperature"); ?>" />
								<img src="images/8/taste.jpg" alt="<?php echo _("Taste"); ?>"/>
								<img src="images/8/smell.jpg" alt="<?php echo _("Smell"); ?>"/>
							</div>				        
							<div id="htmlcaption" style="display: none;"></div>							
						</div>
					</div>				
				</div>

				<div id="screen2">		
					<div id="parentDiv1"> 	
						<div class="container">	
							<img src="images/8/ear.png" alt="Ear">	
						</div>				
						<div>
							<p><?php echo _("Our ears are sensitive to disturbances in the air, water, or solid surfaces around us. Sound is the result of vibrations set up in a substance that are transmitted from one point to another. These vibrations are picked up by our eardrums and then transmitted through three very small bones and into fluids in the ear. The pattern of vibration to the brain is transmitted as an electrical signal.  The brain receives this and interprets the pattern as sound."); ?>
							</p>
						</div>
					</div>								
					<p><?php echo _("Smell and taste are both the result of chemical stimulation. People can taste thanks to structures on our tongues called taste buds."); ?> 
					</p>								
					<div id="taste">
						<div >		
							<img src="images/8/a.png" alt="">		
							<img src="images/8/b.png" alt="">
							<img src="images/8/c.png" alt="">
							<img src="images/8/d.png" alt="">
							<img src="images/8/e.png" alt="">
						</div>
					</div>				
					<p><?php echo _("Between 2000 and 5000 taste buds are located on a typical person's tongue. There are five different sorts of taste: <span class='key'>sweet</span>, <span class='key'>sour</span>, <span class='key'>bitter</span>, <span class='key'>salty</span>, and <span class='key'>umami</span>. Umami is a flavor associated with various meats and Asian foods. Much of what we understand as flavor is actually a combination of taste and smell combined and interpreted by the brain together."); ?>
					</p>			
				</div>
			</div>
		</div>

		<div id="buttons">
			<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
			<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
			<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		</div>
		<script>	
			var hash = window.location.hash.slice(1);	
			$(document).ready(function() {	
				if(hash == 'screen2') {	
					$('#screen1').hide();	
					$('h1').hide();			
					$('#screen2').show(function () {
						$('a.readmore-toggle').fadeOut(function(){	
							$('a.next-toggle').fadeIn();		
						});		
					});		
				}		/* screen transition */		
				$('a.back-toggle').click(function(){	
					if( $('#screen1').is(':visible') ) {	
						document.location.href= "7.php";		
					} else {$('#screen2').fadeOut(function(){ 
						$('#screen1').fadeIn();  $('h1').fadeIn(); 
					});
					$('a.next-toggle').fadeOut(function(){ $('a.readmore-toggle').fadeIn(); 
				}); addHash('');	
				}		
			});	
				$('a.readmore-toggle').click(function(){		
					$('h1').fadeOut();		
					$('#screen1').fadeOut(function(){		
						$('#screen2').fadeIn(); 
						$('a.back-toggle').fadeIn(); 	
					});	$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();		
					});					
					removeHash();			
					addHash('#screen2');	
				});	
			});
		</script>
		<section id="preloader">
			<section class="selected">
				<strong><?php echo _("The five senses"); ?></strong>
			</section>
		</section>
		<?php require("setlocale.php"); ?>
	</body>
	</html>
