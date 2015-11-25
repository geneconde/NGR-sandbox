<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
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
h1 { color: #735999; }
.wrap { border-color: #a5a3e3; }
.bg { background-image: url(images/8/bg.jpg); }

.slider { width: 310px; margin: 10px auto 0; }
.slider img { margin-bottom: 25px; }
.slider .caption { color: #7E4679; font-size: 20px; text-align: center; }

#screen1 .slider { margin-top: 50px; }
#screen1 .clear { text-align: center; }
#screen1 .clear ul { display: inline-block; margin-right: 40px; }
#screen1 .clear ul:last-child { margin-right: 0;; }

#screen2 p:first-child { padding-top: 15px; }
#screen2 p:last-child { text-align: center; margin-top: 20px; }
#screen2 p:last-child img { display: inline-block; }
#screen2 .slider img { margin-bottom: 3px !important; }
#screen2 p:last-child span { display: block; text-align: center; color: #E69EA1; font-size: 20px; }
#screen2 .caption { color: #E69EA1; width: 260px; margin-left: 26px; }

#screen2 { display: none; }
#buttons .next { display: none; }

html[dir="es"] #screen1 p { padding: 0; font-size: 23px; }
html[dir="es"] #screen2 > p { font-size: 22px; }

<?php if ($language == 'zh_CN'): ?>
	#screen1 { padding-top: 10px; }
	#screen1 .slider { margin-top: 125px; }
	#screen2 .slider { margin-top: 110px; }
<?php endif; ?>

html[dir="rtl"] #screen2 p:first-child {font-size: 23px;}
html[dir="rtl"] #screen2 .caption {width: auto; margin: 0;}
html[dir="rtl"] #screen2 .slider {margin: 5px auto 0;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about the role of water"); ?></h1>
				<p><?php echo _("While a lot of fresh water can be found in the frozen sea ice cap of the North Pole and the glaciers of the South Pole, that water is pretty far away from most people so it's not a good source for drinking water. Lakes and rivers are closer to most populated areas, and they are often used to get water for cities and towns, but they hold a very small amount of fresh water compared to other sources and they are sometimes pretty <span class='key'>polluted</span> – which means there's bad stuff in the water that can harm you. So where is the best source for fresh water for most populated areas? What is a source that holds a lot of water and isn't very polluted?"); ?></p>

				<ul class="rslides slider">
					<li><img src="images/8/s1a.jpg"></li>
					<li><img src="images/8/s1b.jpg"></li>
					<!-- <li><img src="images/8/s1c.jpg"></li> -->
				</ul>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("<span class='key'>Groundwater</span> is the best source for drinking water in most areas of the earth – even though there's only about half as much groundwater as there is water in polar ice caps. Groundwater is found underground when rain seeps into the ground and fills the little spaces between rock particles and the cracks and fractures in the rock – probably right under your house! As the rainwater seeps through the ground and into the rock, it is naturally filtered so in many places groundwater is pretty clean, although it can be polluted in some places as well. The main way we get groundwater out of the ground is to drill or dig a hole in the ground – called <span class='key'>water well</span> - and pump the water up. Sometimes the water is just a few feet down underground but sometimes the best clean water is hundreds of feet down and takes a very big drill to extract it."); ?></p>

				<ul class="rslides slider">
					<li><img src="images/8/s2a.jpg"><p class="caption"><?php echo _("Modern rotary drill rigs bore water well"); ?></p></li>
					<li><img src="images/8/s2b.jpg"><p class="caption"><?php echo _("Modern rotary drill rigs bore water well"); ?></p></li>
					<li><img src="images/8/s2c.jpg"><p class="caption"><?php echo _("Modern rotary drill rigs bore water well"); ?></p></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Collecting water samples..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
		} else if ($('#screen2').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>

	
	<?php include("setlocale.php"); ?>
</body>
</html>
