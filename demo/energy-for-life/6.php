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
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/toucheffects.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/modernizr.custom.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.wrap { border-left: 1px dashed #cf919c; border-right: 1px dashed #cf919c; }
.bg { background: url('images/6/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.caption { text-align: center; color: #05799d; }
#screen1 .grid { width: 100%; padding: 0; }
#screen1 .grid li { float: left; width: 240px; }
#screen1 .grid figcaption { background: #c5e0c4; color: #000; width: 219px; height: auto; padding: 10px; }
#screen1 .grid figcaption p { padding: 0; margin: 0; font-size: 18px; }
#screen1 .grid figcaption span { display: inline; }
.grid figcaption { z-index: 999; }
.grid figcaption span:before { content: ''; }
#screen2 .placeholder, #screen3 p:first-child { padding-top: 15px; }
#screen2 .placeholder p { float: left; width: 430px; }
#screen2 .placeholder .slider { float: right; margin-top: 10px; width: 400px; }
#screen3 .slider { width: 520px; margin: 20px 0 0 167px; }
#screen3 .slider img { margin-bottom: 10px; width: 520px; }
#screen2, #screen3 { display: none; }
#buttons .next { display: none; }
<?php if ($language == 'zh_CN') : ?>
	#screen2 .placeholder .slider { margin-top: 6px; width: 335px; margin-right: 49px; }
<?php endif; ?>
html[dir="rtl"] #screen3 .slider { margin: 0 auto;}
html[dir="rtl"] .caption {text-align: center;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .placeholder .slider,#screen2 .placeholder p {width: 50%;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about energy for life"); ?></h1>
				<p><?php echo _("All living things need food and all living things are food. The relationships between producers and consumers in a complex plant/animal community are extremely complicated and not at all obvious. Hover your mouse over each image to view more information."); ?></p>				
				<ul class="grid cs-style-1 clearfix">
					<li>
						<figure>
							<img src="images/6/s1a.jpg">
							<figcaption>
							<p><?php echo _('We think of green plants as <span class="key">producers</span>. They use some of the sugar produced during photosynthesis to power their own cells, and the rest is stored in the form of carbohydrates, proteins, and fat.'); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/6/s1b.jpg">
							<figcaption>
							<p><?php echo _('<span class="key">Consumers</span> eat producers, digesting the plant compounds and using them for energy and for building their own carbohydrates, proteins, and fats.'); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/6/s1c.jpg">
							<figcaption>
							<p><?php echo _('First-order consumers, also called <span class="key">herbivores</span>, eat only plant material.  Second-order consumers eat other consumers.'); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/6/s1d.jpg">
							<figcaption>
							<p><?php echo _('Animals that eat only other animals are called <span class="key">carnivores</span>.'); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/6/s1e.jpg">
							<figcaption>
							<p><?php echo _('Animals that eat both plants and animals are called <span class="key">omnivores</span>.'); ?></p>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/6/s1f.jpg">
							<figcaption>
							<p><?php echo _('A direct sequence of producer being eaten by first order consumer which is then eaten by a second-order consumer is called a <span class="key">food chain</span>.'); ?></p>
							</figcaption>
						</figure>
					</li>
				</ul>
			</div>
			<div id="screen2" class="screens">
				<div class="placeholder clearfix">
					<p><?php echo _('When a living thing dies and is not consumed by an animal, it is consumed instead by bacteria and fungi. This diverse group of organisms, called <span class="key">decomposers</span>, also go to work on the waste matter dropped by animals.  They use the nonliving material for food, releasing some carbon dioxide back into the air and breaking it down into its simplest parts.  This process turns the dead plant or animal back into soil which can then be used for new plant growth.  The released carbon dioxide is also reused for photosynthesis.'); ?></p>
					<ul class="rslides slider">
						<li><img src="images/6/s2a.jpg"></li>
						<li><img src="images/6/s2b.jpg"></li>
						<li><img src="images/6/s2c.jpg"></li>
					</ul>
				</div>	
				<p><?php echo _("Over a span of years, the same atoms and molecules may cycle back and forth between different types of plants and animals over and over.  Every time they are combined to make a bigger molecule, energy is stored in the chemical bonds that hold them together.  Every time they are broken apart, that same energy is released to provide energy for life processes."); ?></p>
			</div>
			<div id="screen3" class="screens">
				<p><?php echo _('Under certain circumstances, decomposers may not be available to fully break dead matter apart.  If the circumstances are just right, that matter may be preserved, keeping its complex carbon-based molecules mostly intact. When plant materials are preserved in this way, and then compressed beneath many layers of rock, <span class="key">coal</span> is produced. When ocean microorganisms face similar conditions, the resulting product is crude oil, or <span class="key">petroleum</span>.'); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/6/s3a.jpg">
						<p class="caption"><?php echo _("Large offshore oil rig drilling for petroleum"); ?></p>
					</li>
					<li>
						<img src="images/6/s3b.jpg">
						<p class="caption"><?php echo _("Fossil leaves"); ?></p>
					</li>
					<li>
						<img src="images/6/s3c.jpg">
						<p class="caption"><?php echo _("Coal mining site"); ?></p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Searching for food..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				if(screen < screenCount) {
					$('.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if($('#screen2').is(':visible')) {
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

		/* Read More Screen Transition */
		$('.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {
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
	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
