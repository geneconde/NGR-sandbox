<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #904f00; }
.wrap { border-left: 1px dashed #ffe777; border-right: 1px dashed #dfcf8f; }
.bg { background: url('images/4/bg.jpg') no-repeat; background-size: 100% 100% !important; width: 100%; height: 100%; position: relative; }
.caption { text-align: center; color: #885001; font-size: 20px; }
#screen2, #screen3, #screen4 { display: none; }
#screen1 .placeholder { float: left; width: 381px; }
#screen1 .labels { float: right; background: url(images/4/plant.png) 50px 46px no-repeat; width: 400px; height: 610px; position: relative; }
#screen1 .labels p { position: absolute; font-size: 20px; }
#screen1 .labels p:nth-child(1) { left: 31px; top: 10px; }
#screen1 .labels p:nth-child(2) { right: 61px; top: 126px; }
#screen1 .labels p:nth-child(3) { right: 7px; top: 213px; }
#screen1 .labels p:nth-child(4) { left: -65px; top: 238px; } 
#screen1 .labels p:nth-child(5) { left: 83px; bottom: 249px; }
#screen1 .labels p:nth-child(6) { left: 68px; bottom: 91px; }
#screen1 .labels p:nth-child(7) { right: 76px; bottom: 50px; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }
#screen2 .placeholder p:first-child { float: left; width: 445px; }
#screen2 .slider { float: right; width: 390px; margin-top: 20px; }
#screen2 .slider img { margin-bottom: 10px; width: 390px; }
#screen3 .slider { width: 400px; margin: 20px auto; }
#screen3 .slider img { width: 400px; }
#buttons .next { display: none; }
#screen4 img { display: block; margin:0 auto; padding-top: 10px; }
#screen4 span.caption { margin:0 auto; display: block; font-size: 30px; }

#s4 { background: url(images/4/s4.jpg) no-repeat; border-radius: 5px; margin: 0 auto; width: 494px; height: 317px; position: relative; }
#s4 p { position: absolute; font-size: 18px; }
#s4 p:nth-child(1) { position: absolute; right: 94px; top: 0; }
#s4 p:nth-child(2) { position: absolute; left: 221px; top: 10px; }
#s4 p:nth-child(3) { position: absolute; left: 167px; top: 37px; }
#s4 p:nth-child(4) { position: absolute; right: 40px; top: 45px; }
#s4 p:nth-child(5) { position: absolute; left: 20px; top: 72px; }
#s4 p:nth-child(6) { position: absolute; left: 10px; top: 128px; }
#s4 p:nth-child(7) { position: absolute; left: 6px; bottom: 109px; }
#s4 p:nth-child(8) { position: absolute; left: 10px; bottom: 43px; }
#s4 p:nth-child(9) { position: absolute; left: 70px; bottom: 0; }

<?php if($language == "es_ES") { ?>
	p { font-size: 22px; }
<?php } ?> 

html[dir="rtl"] #screen1 .labels p:nth-child(4) {left: -41px;width: 100px;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .placeholder {width: 260px;}
	#screen2 .placeholder p:first-child {width: 322px;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens clearfix">
				<h1><?php echo _("Reviewing big ideas... about energy for life"); ?></h1>
				<div class="placeholder">
					<p><?php echo _('We get the energy we need for everything we do in life from the sun. Much of that energy is reflected into space, but some is trapped in the leaves of green plants.  In those leaves, a process called <span class="key">photosynthesis</span> converts the active, kinetic energy of light into the stored potential energy of chemical bonds.'); ?></p>
					<p><?php echo _('Photosynthesis converts air and water into sugar and oxygen in the part of a plant cell that is actually green. The green structure is called a <span class="key">chloroplast</span>, and is found mostly in leaves and stems.  It contains a green chemical called <span class="key">chlorophyll</span> which is able to absorb energy from the sun.  Oxygen is also made as a waste product of photosynthesis.'); ?></p>
				</div>
				<div class="labels">
					<p><?php echo _("Sunlight Light Energy"); ?></p>
					<p><?php echo _("Oxygen"); ?></p>
					<p><?php echo _("Glucose"); ?></p>
					<p><?php echo _("Carbon Dioxide"); ?></p>
					<p><?php echo _("Root"); ?></p>
					<p><?php echo _("Water"); ?></p>
					<p><?php echo _("Minerals"); ?></p>
				</div>
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("The key thing to remember is that energy from the sun is used to combine atoms into a sugar molecule. That energy is stored in the chemical bonds holding the atoms together.  As long as the sugar molecules are together in some form, the energy will remain stored.  The oxygen released as well is a waste product of photosynthesis, but is vital for other life processes in all plants and animals."); ?></p>
				<div class="placeholder clearfix">
					<p><?php echo _("What about living things who can't capture the sun's energy through photosynthesis, like people? Other living things eat. Most of our energy comes from the sugars and starches in our diets. <span class='key'>Starches</span> are actually long chains of simple sugar molecules, bonded together.  When they are broken down into simple sugars, they can enter cells, where the chemical bonds holding their atoms together, are broken apart. The energy that was once holding atoms to one another is then released and used to power the cell's life processes."); ?></p>
					<ul class="rslides slider">
						<li>
							<img src="images/4/s2a.jpg">
							<p class="caption"><?php echo _("Starchy foods: bread, potatoes, pasta, rice"); ?></p>
						</li>
						<li>
							<img src="images/4/s2b.jpg">
							<p class="caption"><?php echo _("Starchy foods: bread, potatoes, pasta, rice"); ?></p>
						</li>
						<li>
							<img src="images/4/s2c.jpg">
							<p class="caption"><?php echo _("Starchy foods: bread, potatoes, pasta, rice"); ?></p>
						</li>
						<li>
							<img src="images/4/s2d.jpg">
							<p class="caption"><?php echo _("Starchy foods: bread, potatoes, pasta, rice"); ?></p>
						</li>
					</ul>
				</div>
			</div>
			<div id="screen3" class="screens">
				<p><?php echo _("So when we run out of energy, we feel hungry and eat.  After we eat, we feel better - thanks to the energy we've taken in. This is because our food is broken apart and digested, and absorbed by our digestive systems."); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/4/s3a.jpg">
						<p class="caption"></p>
					</li>
					<li>
						<img src="images/4/s3b.jpg">
						<p class="caption"></p>
					</li>
					<li>
						<img src="images/4/s3c.jpg">
						<p class="caption"></p>
					</li>
				</ul>
				<p><?php echo _('The small building blocks of our food molecules are then transported to cells all over our bodies by the circulatory system. This process of energy release is called <span class="key">cellular respiration</span>, and requires oxygen to occur. Like photosynthesis, cellular respiration is a complex, many-stepped process which can be summarized fairly simply.  Sugar is broken down, using oxygen, to release energy and form carbon dioxide and water.'); ?></p>
			</div>
			<div id="screen4" class="screens">
				<p><?php echo _('The first stage of respiration happens as soon as sugar enters the cell. It only releases a little energy, but it provides the raw materials for the two other stages. They both occur in a cellular structure called a mitochondrion. Both animals and plants have mitochondria in all of their cells. Through another complex set of reactions, the bonds holding the carbon, hydrogen, and oxygen atoms of sugar are broken and rearranged to produce carbon dioxide and water. The energy that remains is used by the cell.'); ?></p>
				<p><?php echo _('While the process is simple on the surface, many factors combine to determine just how our body processes work together to give us the energy we need when we need it.'); ?></p>
				<span class='caption'><?php echo _("Mitochondria"); ?></span>

				<div id="s4">
					<p><?php echo _("ATP synthase"); ?></p>
					<p><?php echo _("Matrix"); ?></p>
					<p><?php echo _("Granules"); ?></p>
					<p><?php echo _("Porins"); ?></p>
					<p><?php echo _("Intermembrane space"); ?></p>
					<p><?php echo _("Mitochondrial DNA"); ?></p>
					<p><?php echo _("Ribosomes"); ?></p>
					<p><?php echo _("Inner membrane"); ?></p>
					<p><?php echo _("Outer membrane"); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Releasing energy..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				if(screen < screenCount) {
					$('.bg').css('background-image', 'url(images/4/bg.png)');
					$('.readmore-toggle').parent().attr('href','#screen' + screen);
				} else if (screen == 1) {
					$('.bg').css('background-image', 'url(images/4/bg.jpg)');
				} else {
					$('.bg').css('background-image', 'url(images/4/bg.png)');
					$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){
					$('#screen1').fadeIn();
					$('.bg').css('background-image', 'url(images/4/bg.jpg)');
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				//$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut(function (){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen4').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
				$('#screen4').fadeOut(function(){
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			}
		});

		/* Read More Screen Transition */
		$('.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					$('.bg').css('background', 'url(images/4/bg.png)');
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {
				//$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
				$('#screen2').fadeOut( function(){
					$('#screen3').fadeIn();
					$('.bg').css('background-image', 'url(images/4/bg.png)');
					window.location.hash = '#screen3';
				});
			} else if ($('#screen3').is(':visible')) {
				$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
				$('#screen3').fadeOut(function(){
					$('#screen4').fadeIn();
					$('.bg').css('background-image', 'url(images/4/bg.png)');
					window.location.hash = '#screen4';
				});
			}
		});
	});
	</script>
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
