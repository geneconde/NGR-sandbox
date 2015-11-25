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
h1 { color: #AC9747; }
.wrap { border-color: #f5da88; }
.bg { background-image: url(images/4/bg.jpg); }

#screen1 .slider { width: 340px; margin: 20px auto; }
#screen1 .slider img { margin-bottom: 10px; }
#screen1 .slider .caption { color: #7E4679; font-size: 20px; text-align: center; }

#screen1 .clear { text-align: center; margin-top: 105px; }
#screen1 .clear ul { display: inline-block; margin-right: 40px; }
#screen1 .clear ul:last-child { margin-right: 0;; }

#screen2 p:first-child { padding-top: 15px; font-size: 22px; }
#screen2 p:last-child { text-align: center; margin-top: 60px; }
#screen2 p:last-child img { display: inline-block; width: 400px; }
#screen2 p:last-child span { display: block; color: #7E4679; font-size: 20px; }

#screen2 { display: none; }
#buttons .next { display: none; }
<?php if ($language == 'zh_CN'): ?>
	#screen1 .clear { margin-top: 150px; }
	#screen2 p:last-child { margin-top: 90px; }
<?php endif; ?>
html[dir="rtl"] #screen2 p:last-child { margin-top: 90px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .clear ul { margin: 0; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about the role of water"); ?></h1>
				<p><?php echo _("Did you know that your body is made up of about 70% water? That means you are almost three quarters water! But nearly all the water on earth – 97.5% – is salt water in the ocean. Only 2.5% of the water on earth is the fresh water that we need to survive. That's why protecting our freshwater resources is so important for human survival, especially because what little we have is being threatened by pollution and overuse!"); ?></p>

				<div class="clear">
					<ul class="rslides slider">
						<li><img src="images/4/1.jpg"><p class="caption"><?php echo _("Salt water"); ?></p></li>
						<li><img src="images/4/2.jpg"><p class="caption"><?php echo _("Salt water"); ?></p></li>
						<li><img src="images/4/3.jpg"><p class="caption"><?php echo _("Salt water"); ?></p></li>
					</ul>

					<ul class="rslides slider">
						<li><img src="images/4/4.jpg"><p class="caption"><?php echo _("Fresh water"); ?></p></li>
						<li><img src="images/4/5.jpg"><p class="caption"><?php echo _("Fresh water"); ?></p></li>
						<li><img src="images/4/6.jpg"><p class="caption"><?php echo _("Fresh water"); ?></p></li>
					</ul>
				</div>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("So where is all this fresh water anyway? You probably thought first of lakes and rivers – that makes sense because that's the fresh water you usually see. But it turns out that only a tiny part of all the Earth's fresh water is in lakes and rivers. Most of the earth's fresh water is tied up in the polar ice caps and the huge glaciers in Greenland. That water isn't easy to get to for you to drink, is it? And a lot more water is underground where you can't see it. This underground water is called <span class='key'>groundwater</span>. It's not in underground rivers or lakes or pools of water. It's millions and billions, and trillions of little water droplets in between sand grains in the rocks that are under the earth's surface. But this turns out to be an important water supply because it is underneath almost all the land on earth and we can drill down and pump it out to use it."); ?></p>

				<p><img src="images/4/s2.jpg"><span><?php echo _("Blue glacier in Greenland"); ?></span></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Digging for groundwater..."); ?></strong></section></section>

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
			document.location.href = "3.php#answer";
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
