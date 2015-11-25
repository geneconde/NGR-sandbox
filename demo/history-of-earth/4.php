<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
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
h1 { color: #000; }
.wrap { border-color: #845833; }
.bg { background-image: url(images/4/bg.jpg); }

/* #screen1 > p:first-of-type { width: 52%; float: left; } */
#screen1 > p:last-of-type { width: 52%; float: left; }
#screen1 div.clear:after { clear:none; }
#lake { float: right; width: 407px; }

.slider { width: 320px; height: 212px; border-radius: 5px; margin-top: 20px; float: left; margin-left: 45px; }
.slider img { width: 320px; height: 258px; -moz-border-radius: 0; border-radius: 0;}

@media screen and (-webkit-min-device-pixel-ratio:0) { .slider img { width: 320px; height: 212px; -webkit-border-radius: 5px; } }

#screen2 p:first-child { padding-top: 15px; }
#usa { width: 465px; height: 295px; background-image: url(images/4/usa.png); margin: 0 auto; }
#screen2 #usa p { width: 50px; font-size: 18px; padding: 100px 165px; }

#screen2 { display: none; }
#buttons .next { display:none; }
<?php if($language == "es_ES") { ?>
	#screen2 p:last-child { font-size: 22px; }
<?php } ?> 
html[dir="rtl"] #screen2 #usa p {padding: 101px 243px;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 > p:last-of-type {width: 43%;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about the history of earth"); ?></h1>
				<p><?php echo _("The earth is very old and it is always changing. Lots of changes have happened to the <span class='key'>environment</span> – everything surrounding living organisms – over time: oceans have formed, continents have moved, mountains have risen, animals have changed and even gone extinct. Some of these changes happen quickly, and other changes – like the changes in sea level that affect the whole country – happen so slowly that we humans hardly notice the changes in our lifetimes. Many forces, such as earthquakes and volcanoes, change the earth's shape and its features. Over millions and millions of years of geological time, events and forces have changed the kind of environments and the kind of life forms that exist in those environments as well as the earth itself."); ?></p>
				<div id="lake">
					<iframe width="407" height="222" src="https://earthengine.google.org/timelapse/player?c=https%3A%2F%2Fearthengine.google.org%2Ftimelapse%2Fdata&v=37.61174,45.54071,7&r=1&p=true" frameborder="0"></iframe>
					<p><?php echo _("Drying of Lake Urmia, Iran (1984-2012)"); ?></p>
				</div>
				<div class="clear"></div>
				<ul class="rslides slider">
					<li><img src="images/4/s1a.jpg"></li>
					<li><img src="images/4/s1b.jpg"></li>
					<li><img src="images/4/s1c.jpg"></li>
				</ul>
				<!-- <p>Many forces, such as earthquakes and volcanoes, change the earth's shape and its features. Over millions and millions of years of geological time, events and forces have changed the kind of environments and the kind of life forms that exist in those environments as well as the earth itself.</p> -->
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("There are no eye-witnesses to what went on 65 million years ago, so how do scientists know about the earth and its creatures in the past? Rocks and fossils and the patterns they form give scientists clues about the conditions of the earth millions of years ago."); ?></p>
				<div id="usa"><p><?php echo _("Western Interior Seaway"); ?></p></div>
				<p><?php echo _("If you look at the map above, where the blue color is water and the green color is land, you can see that the United States looked much different in the age of the dinosaurs – about 100 million years ago - than it does now. A lot of what is now land was once covered with water. The top black dot on the map is approximately the location of Dinosaur National Monument, right on the border of Utah and Colorado. What do you think the environment looked like at this location back when the dinosaurs were roaming around? Can you find approximately where you live on the map? Was your state on land or under the water?"); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing environment..."); ?></strong></section></section>

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
	<?php include("setlocale.php"); ?>	
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
