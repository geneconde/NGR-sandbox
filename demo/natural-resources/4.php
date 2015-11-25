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
<script src="scripts/global.js"></script>
<style>
h1 { color: #2F80AD; }
.wrap { border-color: #98defc; }
.bg { background-image: url(images/4/bg.jpg); }

.slider { width: 345px; }

#screen1 section.fl { float: left; width: 480px; }
#screen1 section.fr { float: right; }
#screen1 .rslides1 { padding-bottom: 20px; }

#screen2 { padding-top: 15px; }
.sc2-container { padding:10px; width: 90%; margin: 5px auto; }
.sc2-container ul { display: inline-block; width: 370px; }
.sc2-container ul:first-child { margin-right: 25px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 section.fl {
		float: left;
		width: 356px;
	}
	.sc2-container {
		padding: 10px;
		width: 90%;
		margin: 5px auto;
		text-align: center;
	}
	.sc2-container ul:first-child {
	 margin-right: 0px; 
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
				<h1><?php echo _("Reviewing big ideas... about natural resources"); ?></h1>
					<section class="fl">
						<p><?php echo _("Natural resources are important to the survival of living things. Some are so important that living things die without them. Living things need air to breathe, water to drink, food to eat, and shelter for protection. These natural resources are essential for survival."); ?></p>
						<p><?php echo _("Animals need food for their energy source. They are different based on what they eat. Herbivores mainly eat plants; carnivores mainly eat other animals, while omnivores eat both plants and animals."); ?></p>
						<p><?php echo _("Most living things directly obtain from nature what they need for survival. A deer eats grass in a field, drinks water from a stream, and sleeps under a tree."); ?></p>
					</section>
					<section class="fr">
						<ul class="rslides slider">
							<li><img src="images/4/s1a.jpg"></li>
							<li><img src="images/4/s1b.jpg"></li>
							<li><img src="images/4/s1c.jpg"></li>
						</ul>
						<ul class="rslides slider">
							<li><img src="images/4/s1d.jpg"></li>
							<li><img src="images/4/s1e.jpg"></li>
							<li><img src="images/4/s1f.jpg"></li>
							<!--<li><img src="images/4/s1g.jpg"></li>-->
							<li><img src="images/4/s1h.jpg"></li>
							<li><img src="images/4/s1i.jpg"></li>
						</ul>
					</section>
				</div>

			<div id="screen2" class="screen">
				<p><?php echo _("But humans go beyond simply taking resources from nature to satisfy their needs. They use resources to make all kinds of things that they don't need for survival. Humans also use natural resources to create things that make life easy, comfortable and happy – like cars, and cell phones, and fancy clothes, basketballs and all the other stuff for everything they do. And all of this stuff is made from natural resources provided by the earth."); ?></p>

				<section class='sc2-container'>
					<ul class="rslides slider">
						<li><img src="images/4/s2a.jpg"></li>
						<li><img src="images/4/s2b.jpg"></li>
					</ul>	
					<ul class="rslides slider">
						<li><img src="images/4/s2c.jpg"></li>
						<li><img src="images/4/s2d.jpg"></li>
					</ul>
				</section>

				<p><?php echo _("<span class='key'>Natural resources</span> are anything found in nature that was not created by man."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Enumerating natural resources..."); ?></strong></section></section>

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
	<?php include("setlocale.php"); ?>
</body>
</html>
