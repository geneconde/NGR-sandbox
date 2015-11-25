<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>

<style>
h1 { color: #7F7FFF; }
.wrap { border-color: #4BC767; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 p { float: left; }
#screen1 p:nth-of-type(1) { width: 45%; font-size: 22px; margin-bottom: 0; }

#sphere { float: right; position: relative; background: url(images/6/sphere.jpg) no-repeat; border-radius: 5px; height: 340px; width: 450px; }
#sphere p { position: absolute; font-size: 16px !important; text-transform: uppercase; }
#sphere p:nth-child(1) { left: 180px; top: 0; }
#sphere p:nth-child(2) { right: -25px; top: 130px; -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -ms-transform: rotate(-90deg); -o-transform: rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); } 
#sphere p:nth-child(3) { right: 114px; bottom: 113px; }
#sphere p:nth-child(4) { left: 60px; bottom: 100px; }
#sphere p:nth-child(5) { left: 120px; bottom: 50px; }
#sphere p:nth-child(6) { left: 180px; bottom: 5px; }

#screen2 #video { margin: 0 auto; width: 480px; margin-top: 2%; }
#screen2 { display: none; }
#screen2 p:first-child{ padding-top: 15px; }

video { width: 480px !important; }
#buttons .next { display: none; }
.credit { width: 480px; margin: 0 auto; }
.credit p { color: black; }

<?php if ($language == 'es_ES') : ?>
	h1 {font-size: 33px;}
	#sphere p:nth-child(2) { right: -20px; }
	#sphere p:nth-child(3) { right: 122px; }
<?php endif; ?>
html[dir="rtl"] #sphere p:nth-child(1) {left: 60px;}
html[dir="rtl"] .credit p {text-align: center;}
<?php if ($language == 'zh_CN') : ?>
	#sphere p:nth-child(2) {right: -9px;}
<?php endif; ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p:nth-of-type(1) {width: 37%;}
}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about earth materials and systems"); ?></h1>
				<p><?php echo _("The different earth <span class='key'>systems</span> – hydrosphere, atmosphere, biosphere, and geosphere are different components (parts) of the earth that are made out of different materials with different properties (a trait – like if something is hard or soft). But these systems are not isolated or independent of each other. Each system interacts with every other system to make the whole earth look and behave the way it does. These <span class='key'>interactions</span> are the <span class='key'>processes</span> that go on to shape the landscape and make the earth the way it is."); ?></p>
				
				<div id="sphere">
					<p><?php echo _("Atmosphere"); ?></p>
					<p><?php echo _("Biosphere"); ?></p>
					<p><?php echo _("Hydrosphere"); ?></p>
					<p><?php echo _("Lithosphere"); ?></p>
					<p><?php echo _("Crust"); ?></p>
					<p><?php echo _("Mantle"); ?></p>
				</div>

				<p><?php echo _("Actually, you can think of the Earth as one big system and each of the systems discussed above is a part (subsystem) of the big Earth system. Each subsystem interacts with every other subsystem. For instance, the water from the hydrosphere rains on the soil of the geosphere to provide moisture for plants from the biosphere to grow and take carbon dioxide gas from the atmosphere to make food for humans in the anthrosphere."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Volcanoes have many effects on the geosphere, hydrosphere, atmosphere, and biosphere. Here is an example of how this event in the geosphere changes plant growth in the biosphere: Rainfall often increases after a volcanic eruption, causing plant growth. Very small matter in the air falls out, first smothering plants, but eventually it enriches the soil, and causes more plant growth down the road."); ?></p>
				<div id="video">
					<div id="jquery_jplayer_1"></div>
				</div>				
					<div class="credit">	
						<p><?php echo _("Forest Recovering From Mt St Helens Eruption"); ?></p>
						<p><?php echo _("Video: NASA/Goddard Space Flight Center"); ?></p>
					</div>
			</div>
			
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Enumerating hydrospheres..."); ?></strong></section></section>

	<script>

	$("#jquery_jplayer_1").jPlayer({
	   ready: function () { $(this).jPlayer("setMedia", { webmv: "videos/6/Mt_St_Helens_timelapse.webm", m4v: "videos/6/Mt_St_Helens_timelapse.m4v" }) },
	   ended: function(){ $(this).jPlayer("play"); },
	   swfPath: "scripts",
	   supplied: "webmv, m4v",
	   solutions: "flash, html",
		nativeVideoControls: { all: /./ }
	  });
	  
	var hash = window.location.hash.slice(1);
	
	var native_width = 0;
	var native_height = 0;

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "5.php";
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
	<?php require "setlocale.php"; ?>
</body>
</html>
