<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/fire.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/8/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; z-index: -100;}
#screen2, #screen3 { display: none; }
h1 { color: #d4c08b; margin-left: 20px; }
p { color: #fff; text-align: left; }
.fire { background: url(images/8/fire.gif) no-repeat; height: 201px; margin: 0 auto; width: 295px; position: relative; top: 35px; left: 2px; background-size: 100% 99%; }
.text-left { width: 55%; float: left; margin-right: 30px; padding-top: 10px; }
.img-holder { background: url(images/8/holder.png) no-repeat; float: left; width: 40%; background-size: 100%; height: 275px; z-index: 10; }
.black { height: 225px; width: 340px; background-color: #000; position: relative; top: 30; z-index: -50; margin-top: -183px; }
#buttons .next, img.back-toggle-screen { display:none; }
#img-container { width: 600px; height: 270px; margin: 0 auto; }
#img-holder2 { width: 290px; height: 100%; background: url(images/8/paper1.png) no-repeat; background-size: 100%; float: left; }
#img-holder3 { width: 290px; height: 100%; background: url(images/8/paper2.png) no-repeat; background-size: 100%; float: left; }
#img-holder4 { background: url(images/8/paper3.png) no-repeat; width: 500px; background-size: 100%; height: 340px; margin: 0 auto; }
.img-holder img { position: relative; top: 33px; left: 24px; height: 201px; width: 295px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; z-index: -10;}
#img-holder2 img { width: 197px; height: 80%; position: relative; left: 60px; top: 25px; }
#img-holder3 img { width: 161px; height: 80%; position: relative; left: 80px; top: 25px; }
#img-holder4 img { height: 70%; width; 356px; left: 75px; top: 60px; position: relative; }

html[dir="rtl"] p { text-align: right; }
html[dir="rtl"] #screen1 .img-holder img { left: -23px; }
html[dir="rtl"] #img-holder2 img { left: -37px; }
html[dir="rtl"] #img-holder3 img { left: -50px; }
html[dir="rtl"] #img-holder4 img { left: -69px; }
html[dir="rtl"] h1 { padding-right:10px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.fire { height: 172px; width: 251px; top: 28px; }
	.black { background: transparent; }
	.img-holder img { top: 27px; left: 21px; height: 173px; width: 250px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("More big ideas... on the properties of matter"); ?></h1>
			<div id="screen1" class="screens">
				<div class="text-left">
					<p><?php echo _("Everything is made up of matter and has certain properties, physical and chemical. Sometimes we change these properties. When we cut or color a piece of paper we are changing its size and color, but it is still paper. When we freeze water, we are changing the state from liquid to solid. It is still the same substance. These are all <span class='key'>physical changes</span>, which usually can be undone or reversed."); ?></p>
				</div>
				<div class="img-holder">
					<div class="fire"></div>
					<div class="black"></div>
					
				</div>
				<div class="text-left">
					<p><?php echo _("There is another type of change -<span class='key'>chemical change</span>- that makes an object change into a different substance. The properties before and after a chemical change of a substance are different. When wood burns and metal rusts, they form new substances. A chemical change causes matter to become a new kind of matter."); ?></p>
				</div>
				<div class="img-holder">
					<img src="images/8/chem-change.jpg">
					<div class="black"></div>
				</div>
			
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("One reason the properties of matter are important is because we have different purposes for things. For example, how much heat passes through something is an important property when you are deciding a material's use. Sometimes the object has one purpose based on its specific property."); ?></p><br>
				<div id="img-container">
					<div id="img-holder2">
						<img src="images/8/coffee1.png">
					</div>
					<div id="img-holder3">
						<img src="images/8/coffee2.png">
					</div>
				</div><br>
				<p><?php echo _("Let's use a physical property to describe the differences between plastic and metal. If you put a plastic spoon and a metal spoon in a warm drink, the metal spoon becomes warm and the plastic one does not. How easy or difficult it is for heat to pass through a substance is called <span class='key'>heat conductivity</span>."); ?></p>
			</div>
			<div id="screen3" class="screens">
				<br>
				<p><?php echo _("Like most metals, substances that are good at carrying heat are called <span class='key'>heat conductors.</span> Metal pans conduct heat from the stove to cook the food inside it. Substances such as wood and plastic that are not good at carrying heat are called thermal <span class='key'>insulators.</span>"); ?></p>
				<div id="img-holder4">
					<img src="images/8/lady.jpg">
				</div>
				<p><?php echo _("Many pans have plastic handles that do not carry heat from the pan to the part we touch. Pans are good conductors, but they are too hot to touch. So we use insulators made of fabric and padding to fix this problem."); ?></p>
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
	var screenCount = 3;
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];
				if(screen == screenCount) {
					$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				}
			});
		}
		
		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if ($('#screen2').is(':visible')) {
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
			} else if ($('#screen2').is(':visible')) {
				$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			} 
		});

	});
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Chopping wood for the fireplace..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
