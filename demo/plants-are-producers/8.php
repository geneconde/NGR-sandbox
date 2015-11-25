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
h1 { color: #9E8859; }
.wrap { border-color: #b8986e; }
.bg { background-image: url(images/8/bg.jpg); }

.slider { width: 340px; height: 245px; border-radius: 5px; }
.slider img { width: 344px; height: 248px; -moz-border-radius: 0; }

@media screen and (-webkit-min-device-pixel-ratio:0) { .slider img { width: 340px; height: 245px; } }

#screen1 .slider { float: left; margin-top: 20px; }
#screen1 .clear p { float: right; width: 490px; }

#screen2 p:first-child { padding-top: 15px; }
#screen2 img { float: left; display: block; margin-top: 0; }
#screen2 .clear { margin-top: 15px; }
#screen2 .clear p { float: right; width: 400px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }
<?php if($language == "es_ES") { ?>
	#screen1 p { font-size: 22px; }
<?php } ?>	
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .clear p {
		float: right;
		width: 386px !important;
	}
	.slider {
		width: 315px !important;
		height: 245px;
		border-radius: 5px;
	}
	#screen2 img {
		/* float: left; */
		float: none;
		display: block;
		margin: 0 auto !important;
	}
	#screen2 .clear p {
		float: right;
		width: 100% !important;
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
				<h1><?php echo _("More big ideas... about plants are producers"); ?></h1>
				<p><?php echo _("As an example, we will look at a plant producer and its effects on the environment."); ?></p>

				<div class="clear">
					<ul class="rslides slider">
						<li><img src="images/8/s1a.jpg"></li>
						<li><img src="images/8/s1b.jpg"></li>
						<li><img src="images/8/s1c.jpg"></li>
					</ul>

					<p><?php echo _("Redwoods can grow to be the tallest and largest trees in the world. They start as tiny seeds and, thanks to solar energy and photosynthesis, they work their way up.  It takes a lot of food to grow hundreds of feet tall.  Like all plants, redwoods grow in three directions at once.  The stem, or trunk, of the tree grows upward.  The roots grow downward.  As the tree ages, the trunk also grows outward, forming a new ring of wood for each year the tree is alive."); ?></p>
				</div>

				<p><?php echo _("Scientists measure every aspect they can of the redwood trees in the forest and reconstruct the tree in three dimensions on the computer to find out the information they cannot get from measuring the outside of the tree. Every year scientists remeasure the specific trees and examine how they have changed. They also have sensors installed to measure light, temperature, humidity, wind, and sap flow. Their goal is to learn how these ancient giants have historically responded to climatic shifts and to monitor how they are being impacted today by global warming."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Many things can impact the growth of redwoods, and anything that does must also cause changes in the unique food webs they support. Like all producers, redwood trees support a food web. Their food webs involve plants and animals who spend their entire lives living high above the ground. Researchers in California have discovered what they call \"aerial gardens.\" More than 200 feet above the forest floor in redwood country, huge limbs jut out from 1000-year old trees. These limbs are so large that needles, moss, and other debris that fall on them never fall to the ground. They pile up and decay, becoming a type of soil after only a few years."); ?></p>

				<div class="clear">
					<img src="images/8/s2.jpg">

					<p><?php echo _("When this happens, seeds from a variety of plants, lifted into the air by winds or dropped by birds and other animals, sprout and begin to grow. After a few years, shrubs and even small trees are able to grow hundreds of feet above the ground. These \"gardens\" attract animals like squirrels, salamanders, and many birds who may spend their entire lives high above the ground."); ?></p>	
				</div>
			</div>
		</div>
	</div>

		<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Counting large trees..."); ?></strong></section></section>

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
		$('img.readmore-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
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
