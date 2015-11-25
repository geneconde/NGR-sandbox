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
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
h1 { color: #000; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 p { float: left; padding: 0; }
#screen1 span { font-size: 23px; }
#screen1 > p:first-of-type { width: 500px; margin-bottom: 10px; }
#screen1 > img { width: 300px; float: right; margin: 0 10px; }
#screen1 .slider { float: right; width: 300px; margin: 30px 10px; }
#screen1 p:last-of-type { float: left; width: 530px;}

#screen2 p { float: left; }
#screen2 p:first-of-type {  width: 500px; margin-top: 30px; }
#screen2 > img { width: 285px; float: left; margin: 30px 20px; }
#screen2 .slider { float: right; width: 300px; margin: 30px 5px; }
#screen2 p:last-of-type { float: right; width: 530px; margin-top: 30px; padding: 0; }
#screen2 { display: none; }
#screen2 p:first-child { padding-top: 15px; }
#buttons .next { display: none; }

<?php if ($language == 'es_ES') : ?>
	#screen1 p { font-size: 24px; }
<?php endif; ?>


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p:last-of-type {width: 395px;}
	#screen2 p:first-of-type {width: 410px;}
	#screen2 p:last-of-type {width: 395px;}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .slider {margin: 63px 24px;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about history of earth"); ?></h1>
				<p><?php echo _("Have you ever seen a rock or fossil collection? Some people collect them as a hobby, and others study them to learn about the earth's geological past. Scientists who study rocks and what they mean are called <span class='key'>geologists</span>. Certain geologists who mostly just study fossils are called <span class='key'>paleontologists</span>."); ?></p>
				<img src="images/6/collection.jpg" />	
				
				<div class="clear"></div>
							
				<ul class="rslides slider">
					<li><img src="images/6/s1a.jpg"></li>
					<li><img src="images/6/s1b.jpg"></li>
					<li><img src="images/6/s1c.jpg"></li>
				</ul>
				<span><?php echo _("So what is a fossil anyway? <span class='key'>Fossils</span> are the remains of living organisms – either animals or plants - that have been preserved in rock. Animal's soft parts, like the skin or eyeballs for instance, usually get eaten or rot away over time so they don't get preserved. Most animal fossils are copies of just the hard parts – like the shells of clams or bones of dinosaurs. But even the hard parts of animals that become fossilized are usually not the original bones or shells. The fossils we find in rock are actually replacement copies. The original hard parts were replaced very slowly over a long period of time. The original shell or bone material is changed to rock. This process amazingly produces almost an exact replica or copy of the original animal's hard parts. And for plants, sometimes the leaves and stems leave an imprint in the rock or the tree trunks are replaced by minerals to leave a \"petrified\" fossil forest."); ?></span>

				<!-- <p>Most fossils are copies of the hard parts of animals – like the shells of clams or bones of dinosaurs. But even the hard parts of animals that become fossilized are not really the original bones or shells. The fossils we find in rock are actually replacement copies. The original hard parts were replaced very slowly over a long period of time. The original shell or bone material are changed to rock. This process amazingly produces almost an exact replica or copy of the original animal's hard parts.</p> -->
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Geologists study rock layers in addition to the fossils contained inside them. A very important principle of geology is that a sedimentary rock layer is probably older than the layers above, and younger than the layers below it. So by studying the different layers, scientists can get a good idea about how animals evolved and how the rock structure of an area has changed over time. In this way, the rocks help determine how old the fossils are."); ?></p>
				<ul class="rslides slider">
					<li><img src="images/6/s2a.jpg"></li>
					<li><img src="images/6/s2b.jpg"></li>
					<li><img src="images/6/s2c.jpg"></li>
				</ul>
				<div class="clear"></div>
				<img src="images/6/rocks.jpg" />
				<p><?php echo _("Rocks and fossils are evidence that help geologists figure out how old one layer of rock was compared to another, and how the environment where the rock was found changed over time. Not all the rocks and fossils scientists find are in perfect shape, so they compare rock layers from different areas of the earth to get a more complete picture of the conditions on our planet."); ?></p>
				
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Collecting different rocks..."); ?></strong></section></section>

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
	<?php include("setlocale.php"); ?>	
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
