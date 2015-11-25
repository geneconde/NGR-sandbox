<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #A0824D; }
.wrap { border-color: #edd9a6; }
.bg { background-image: url(images/4/bg.jpg); }

#screen1 .slider { width: 340px; float: right; margin-top: 15px; }
#screen1 .clear p { float: left; width: 490px; }

#screen2 ul { list-style: none; padding-left: 0; margin-right: 20px; float: left; }
#screen2 ul:last-child { margin-right: 0; }
#screen2 ul span { display: inline-block; width: 20px; height: 29px; padding-top: 1px; margin-right: 10px; border-radius: 15px; padding-left: 10px; background: #ffed1d; }
#screen2 ul li:nth-child(2) span { background: #fff; }
#screen2 ul li:nth-child(3) span { background: #3eb714; }
#screen2 ul li:nth-child(4) span { background: #9d9d9d; }
#screen2 ul:last-child li:nth-child(1) span { background: #fc986e; }
#screen2 ul:last-child li:nth-child(2) span { background: #16c3ff; }
#screen2 ul:last-child li:nth-child(3) span { background: #ff5c7f; }
#screen2 li { font-size: 24px; padding: 4px 0; }
#screen2 section:first-child { float: left; margin-top: 20px; width: 378px; }
#screen2 section:first-child img { clear: both; }
#screen2 section:last-child { float: right; margin-top: 15px; width: 450px; }
#buttons .next { display: none; }

#screen2 { display: none; }
img.next-toggle { display:none; }

html[dir="rtl"] #screen2 ul { padding-right: 0; }
html[dir="rtl"] #screen2 ul span { padding-right: 10px; padding-left: 0; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .clear p {
		float: left;
		width: 50%;
	}
	#screen2 section:last-child {
		float: right;
		margin-top: 15px;
		width: 46%;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .clear p {
		float: left;
		width: 57%;
	}
}	

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about plants are producers"); ?></h1>

				<div class="clear">
					<p><?php echo _("Plants are <span class='key'>producers</span>, they make all the food and energy in an ecosystem. They are the solid foundation of all food chains and webs.  The energy that powers nearly all life on earth is generated on the surface of our sun, some 93 million miles away.  That energy streams at us constantly.  Even though very little of it actually strikes our small planet, it provides more than enough energy to keep all of the many billions of plants and animals around us alive."); ?></p>

					<ul class="rslides slider">
						<li><img src="images/4/s1a.jpg"></li>
						<li><img src="images/4/s1b.jpg"></li>
						<li><img src="images/4/s1c.jpg"></li>
					</ul>
				</div>

				<p><?php echo _("The solar energy is captured in the leaves and needles of green plants in a process called <span class='key'>photosynthesis</span>.  In this process, a substance called chlorophyll absorbs light energy, temporarily storing it by changing its own shape.  When the chlorophyll molecule springs back to its original shape, the energy is released to power a series of chemical reactions.  These reactions convert water and carbon dioxide into sugar and oxygen."); ?></p>
			</div>

			<div id="screen2" class="screen clear">
				<section class="clear">
					<img src="images/4/photosynthesis.jpg">

					<ul>
						<li><span>1</span><?php echo _("Sunlight"); ?></li>
						<li><span>2</span><?php echo _("Oxygen"); ?></li>
						<li><span>3</span><?php echo _("Glucose"); ?></li>
						<li><span>4</span><?php echo _("Carbon Dioxide"); ?></li>
					</ul>

					<ul>
						<li><span>5</span><?php echo _("Root"); ?></li>
						<li><span>6</span><?php echo _("Water"); ?></li>
						<li><span>7</span><?php echo _("Minerals"); ?></li>
					</ul>
				</section>

				<section>
					<p><?php echo _("The carbon dioxide is absorbed by the leaves directly from the air. The water is usually absorbed through roots and transported through the plant stem to the leaves. In photosynthesis, the carbon dioxide molecules are combined to form a six-carbon compound called <span class='key'>glucose</span>. The hydrogen atoms from water are attached to the chain to complete its structure. The leftover oxygen atoms are combined as molecules and then released."); ?></p>
					<p><?php echo _("Glucose may be used for energy directly or connected to other glucose molecules to form chains called carbohydrates. <span class='key'>Carbohydrates</span> are used for energy by nearly all living things.  The oxygen released by photosynthesis is also used by plants and animals to help unlock the energy stored in carbohydrates."); ?></p>
				</section>					
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Collecting solar energy..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	</script>

	<script>
	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "3.php#answer";
		} else if ($('#screen2').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
