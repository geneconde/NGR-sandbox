<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'genetic-codes';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Genetic Codes"); ?></title>
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
h1 { color: #9E8D69; }
.wrap { border-color: #ffe865; }
.bg { background-image: url(images/4/bg.jpg); }

#screen1 .clear { margin-top: 0px; }
#screen1 .clear div { float: left; width: 360px; }
#screen1 .clear img { float: left; margin-left: 20px; margin-top: 10px; }

#screen2 p:first-child { padding-top: 35px; }
#screen2 .slider { float: right; width: 360px; margin-top: 50px; }
#screen2 .slider img { margin-bottom: 10px; }
#screen2 .slider .caption { color: #CD9449; font-size: 20px; text-align: center; }
#screen2 .clear > p { float: left; width: 470px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }
<?php if($language == "zh_CN") { ?>
	#screen1 p { font-size: 22px; }
<?php } ?>
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .clear > p {
		float: left;
		width: 349px;
	}
	#screen1 .clear div {
		float: left;
		width: 273px;
	}
	#screen1 .clear img {
	float: left;
	margin-left: 20px;
	margin-top: 10px;
	width: 58%;
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
				<h1><?php echo _("Reviewing big ideas... about genetic codes"); ?></h1>
				<p><?php echo _("Living things reproduce in two ways.  One, called <span class='key'>asexual reproduction</span>, involves only a single parent. The other way, called <span class='key'>sexual reproduction</span>, requires both a male and a female parent."); ?></p>

				<div class="clear">
					<div>
						<p><?php echo _("Asexual reproduction occurs in all types of living things because it is the process plants and animals use to grow.  Each new individual begins life as a single cell.  This cell then divides over and over until the new organism reaches its full size.  As life goes on, some of the cells continue to reproduce as needed to repair damage and cope with environmental changes."); ?></p>

						<p><?php echo _("Asexual reproduction of individual cells is called <span class='key'>mitosis</span>.  It is summarized in the picture to the right."); ?></p>
					</div>

					<img src="images/4/s1.jpg">
				</div>
			</div>

			<div id="screen2" class="screen">
				<div class="clear">
					<p><?php echo _("Sometimes whole organisms reproduce asexually.  In the produce aisle, you will notice that all the Gala apples look the same, and so do all the Jonathan and Golden Delicious. These are fruits of plants that can only be reproduced by asexual reproduction. Asexual reproduction allows for exact duplication of a parent: perfect copies - no changes.  This is great for agriculture, but not always great in nature.  Sometimes conditions change and species need to change along with them."); ?></p>

					<ul class="rslides slider">
						<li>
							<img src="images/4/s2a.jpg">
							<p class="caption"><?php echo _("Gala apples"); ?></p>
						</li>
						<li>
							<img src="images/4/s2b.jpg">
							<p class="caption"><?php echo _("Golden delicious apples"); ?></p>
						</li>
						<li>
							<img src="images/4/s2c.jpg">
							<p class="caption"><?php echo _("Jonathan apples"); ?></p>
						</li>
						<li>
							<img src="images/4/s2d.jpg">
							<p class="caption"><?php echo _("Royal gala apples"); ?></p>
						</li>
					</ul>
				</div>

				<p><?php echo _("Sexual reproduction allows offspring to receive information from two different parents.  That information may be the same or it may be different.  In this way, each generation contains new combinations of genes, some of which may allow individuals to survive and reproduce more often than others. In some cases, sexual reproduction allows a species to survive in difficult times."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Receiving information..."); ?></strong></section></section>

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

	<?php include_once "setlocale.php"; ?>
</body>
</html>
