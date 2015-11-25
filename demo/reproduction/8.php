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
<link rel="stylesheet" type="text/css" href="styles/captionHoverEffects.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
.bg { background-image: url('images/8/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #DED7C7; border-right: 1px dashed #DED7C7; }
h1 { color: #9D5F0A; }

img.next-toggle, img.back-toggle-screen { display:none; }
#screen2, #screen3 { display: none; }

#screen1 .col1 { width: 490px; float: left; }
#screen1 .col2 { width: 340px; float: right; }
#screen1 p:last-of-type { float: left; margin-top: 2%; }
.bottom img { float: left; width: 280px; margin: 10px 10px 0 0; }
#screen1 .placeholder { margin-top: 10%; }

#screen2 div { width: 50%; float:left; }
#structures { margin-top: 2%; }
#structures, #fish { height: 270px; width: 50%; margin:0 auto; display: block; }
#structures img, #fish img { display:none; position:absolute; }
#structures img { right: 51%; }
#fish img { left: 51%; }
#structures img.active, #fish img.active { display:block; margin:0 auto; }
#screen2 p { padding: 2% 0; }
#screen2 p:last-of-type { float: left; width: 70%; }

figure img { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; width: 385px; }
figcaption p { position: absolute; top: 42%; color: white; font-size: 22px; }
.grid { padding: 5px;}
.grid li { padding: 5px; width: 365px; }

.no-touch .cs-style-6 figure:hover img, .cs-style-6 figure.cs-hover img { 
	-webkit-transform: translateY(-80px) scale(0.4); 
	-moz-transform: translateY(-80px) scale(0.4);
	-ms-transform: translateY(-80px) scale(0.4);
	transform: translateY(-80px) scale(0.4);}
	
.rslides img {
	width: 97%;
}
#screen3 > ul > li:nth-child(2) > figure > figcaption > p { font-size: 19px; padding-right: 20px; }
#screen3 > ul > li:nth-child(3) > figure > figcaption > p { font-size: 20px; padding-right: 20px; }
#screen3 > ul > li:nth-child(4) > figure > figcaption > p { padding-right: 20px; }
#screen3 p:first-child { padding: 15px 0; }
#buttons .next   { display: none; }
<?php if($language == "es_ES") { ?>
	p { font-size: 21px; }
<?php } ?>
<?php if($language == "zh_CN") { ?>
	#screen3 p { font-size: 16px; }
<?php } ?>  

html[dir="rtl"] h1 { font-size: 33px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	.col1 { width: 57% !important; }
	.col2 { width: 40% !important; }
	#screen2 .text-fix { width: 100% !important; }
	.grid li { width: 46% !important; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("More big ideas... about reproduction"); ?></h1>
				<div class="col1">
					<p><?php echo _("Living things grow, breathe, eat (take in the substances they need to grow), get rid of waste, and reproduce in different ways. They all move and respond to their environment somehow. When a dog pants and a human sweats, they are both trying to cool down. Thorns on a rose bush are very similar to the stink of a skunk in that they both are trying to protect themselves. A plant grows toward light and animals move to find water and food."); ?></p>
				</div>
				<div class="col2">
					<div class="placeholder">
						<ul class="rslides">
						  <li><img src="images/8/s1a.jpg" /></li>
						  <li><img src="images/8/s1b.jpg"></li>
						  <li><img src="images/8/s1c.jpg"></li>
						  <li><img src="images/8/s1d.jpg"></li>
						  <li><img src="images/8/s1e.jpg"></li>
						</ul>
					</div>
				</div>
				<div class="bottom">
					<p><?php echo _("What do a monkey and a microbe have in common? A lot actually. All organisms grow, reproduce, get old and die. They each carry out different parts of their life cycle in different ways. To do this, plants and animals have different structures, or parts."); ?></p>
					<img src="images/8/a1.jpg" />
					<img src="images/8/a2.jpg" />
				</div>
			</div>
			<div class="screens" id="screen2">
				<p><?php echo _("Plants and animals have both internal and external structures that help them live based on their needs. Dogs have lungs and fish have gills. Both of these structures help the animals breathe. Colored petals on a flower and colored feathers on a bird are both structures they have to help reproduction take place."); ?></p>
				<div id="structures">
					<img id="s2a" class="active" src="images/8/1.jpg"/>
					<img id="s2b" src="images/8/2.jpg" />
				</div>
				<div id="fish">
					<img id="s3a" class="active" src="images/8/3.jpg"/>
					<img id="s3b" src="images/8/4.jpg" />
				</div>
				<p class="text-fix"><?php echo _("There are similarities and differences among all the species that reproduce sexually. In all species, females produce eggs and males produce sperm. But they do so with very different physical structures. Plant reproductive structures are found in flowers. In animals, individuals are either male or female, each having very different reproductive systems."); ?></p>
			</div>
			<div class="screens" id="screen3">
				<p><?php echo _("Many plants have both male and female parts in the same flower. Hover your mouse over each image to know more information."); ?></p>
				
				<ul class="grid cs-style-6">
					<li>
						<figure>
							<img src="images/8/a.jpg" alt="img01">
							<figcaption>
								<p><?php echo _("The male part is called a stamen. Sperm are packaged into particles called <span class=\"key\">pollen</span> grains."); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/8/b.jpg" alt="img01">
							<figcaption>
								<p><?php echo _("The female part of the flower is called the pistil. When the pollen grain breaks open, a tube grows into the pistil and penetrates the ovary. A sperm cell then travels down the pollen tube to fertilize an egg cell."); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/8/c.jpg" alt="img01">
							<figcaption>
								<p><?php echo _("Egg cells are located inside the ovary. After the sperm and egg cells unite, a seed begins to develop inside the ovary."); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/8/d.jpg" alt="img01">
							<figcaption>
								<p><?php echo _("The rest of the ovary develops into a fruit."); ?></p>
							</figcaption>
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Survival instincts of organisms..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 3; // Set number of screens for this page
	
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				if(screen == screenCount) {
					$('.bg').css('background-image', 'none');
					$('.bg').css('background-color', '#ded7c7');
					$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				} else {
					$('.bg').css('background-image', 'url(images/8/bg.jpg)');
					$('.bg').css('background-color', 'none');
				}
			});
		}

		/* Back Transition - change to the corresponding number of screens */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){
					$('.bg').css('background-image', 'url(images/8/bg.jpg)');
					$('.bg').css('background-color', 'none');
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut(function (){
					$('.bg').css('background-image', 'url(images/8/bg.jpg)');
					$('.bg').css('background-color', 'none');
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			}
		});

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {
				$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#screen2').fadeOut(function(){
					$('.bg').css('background-image', 'none');
					$('.bg').css('background-color', '#ded7c7');
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			}
		});
		
		$(".rslides").responsiveSlides();
		setInterval('swapImages1()', 4000);
		//setInterval('swapImages2()', 4500);
	});
	

	function swapImages1(){
	  if($('#s2a').is(':visible')) {
		$('#s2a').fadeOut(1000);
		$('#s3a').delay(300).fadeOut(1000);
		$('#s2b').delay(1000).fadeIn(1000);
		$('#s3b').delay(1500).fadeIn(1000);
	  } else {
		$('#s2b').fadeOut(1000);
		$('#s3b').delay(300).fadeOut(1000);
		$('#s2a').delay(1000).fadeIn(1000);
		$('#s3a').delay(1500).fadeIn(1000);
	  }
	}
	
	function swapImages2(){
		var active = $('#fish .active');
		var next = ($('#fish .active').next().length > 0) ? $('#fish .active').next() : $('#fish img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	</script>
	
	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
