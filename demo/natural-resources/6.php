<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #f36d90; }
.wrap { border-color: #ffddff; }
.bg { background-image: url(images/6/bg.jpg); }

.slider { width: 360px; }

.top .slider { float: right; margin: 20px 0 0 20px; }
.top p { float: left; width: 475px; padding-top: 10px; font-size: 22px; }

.bottom .slider { float: left; margin: 20px 20px 0 0; }
.bottom p { float: right; width: 475px; padding-top: 20px; font-size: 22px; }

#screen2 { text-align: center; }
#screen2 video { border-radius: 5px; }
#screen2 p:first-child { padding-top: 15px; }
#screen2 .placeholder { margin-top: 20px; display: inline-block; }
#screen2 .placeholder img { border-radius: 5px; height: 240px; width: 320px; }
#screen2 .placeholder ul { float: left; margin-right: 40px; width: 320px; }

#jplayer { float: left; border-radius: 5px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	.top p {
		float: left;
		width: 337px;
		padding-top: 10px;
		font-size: 22px;
	}
	.bottom p {
		float: right;
		width: 342px;
		padding-top: 20px;
		font-size: 22px;
	}

}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about natural resources"); ?></h1>
				<div class="top clear">
					<p><?php echo _("Animals adapt to their climate and living conditions. When cold, some birds migrate to warmer areas. Other animals have thick fur to keep them warm. In warm areas, some animals stay out of the heat by hunting for food at night and resting during the day. Humans adapt differently however. They simply turn the air conditioner on when hot and increase the heat when cold. These make them need <span class='key'>fuel</span> for <span class='key'>energy</span>, in order for their appliances and machines (e.g. light bulbs, heater, cars) to work."); ?></p>

					<ul class="rslides slider">
						<li><img src="images/6/s1a.jpg"></li>
						<li><img src="images/6/s1b.jpg"></li>
						<li><img src="images/6/s1c.jpg"></li>
					</ul>
				</div>

				<div class="bottom clear">
					<p><?php echo _("And where does the energy come from? You're right! Natural resources are derived from the earth - petroleum from underground to make gasoline, sunlight as solar energy to produce electricity, wind for turbine, river water as hydroelectricity for generators, and coal for power plants. These natural resources provide the energy needed to produce and run everything in our modern human world."); ?></p>

					<ul class="rslides slider">
						<li><img src="images/6/s1d.jpg"></li>
						<li><img src="images/6/s1e.jpg"></li>
						<li><img src="images/6/s1f.jpg"></li>
					</ul>
				</div>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("It is important to know that using the earth's natural resources for our needs has an impact on the environment. This impact is often harmful to both nature and humans. When coal or gasoline is burned to make electricity or run our cars, the burning process pollutes the air making climate change possible. This climate change may cause severe weather conditions such as droughts, floods, wildfires, hurricanes as well as sea level changes in different parts of the world. So we need to be careful how we use natural resources so we don't cause any negative effect on the environment."); ?></p>

				<div class="placeholder clear">
					<ul class="rslides slider">
						<li><img src="images/6/s2a.jpg"></li>
						<li><img src="images/6/s2b.jpg"></li>
						<li><img src="images/6/s2c.jpg"></li>
					</ul>

					<div id="jplayer"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>



	<section id="preloader"><section class="selected"><strong><?php echo _("Burning gasoline..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	$("#jplayer").jPlayer({
		ready: function () { $(this).jPlayer("setMedia", { webmv: "videos/6/pollution.webm", m4v: "videos/6/pollution.m4v" }).jPlayer("play"); },
		ended: function() { $(this).jPlayer("play"); },
		swfPath: "scripts",
		supplied: "webmv, m4v",
		size: { width: "320px", height: "240px" },
		solutions: "flash, html",
		nativeVideoControls: { all: /./ }
	});

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "5.php";
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
	<?php include("setlocale.php"); ?>
</body>
</html>
