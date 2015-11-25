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
h1 { color: #A0894D; }
.wrap { border-color: #f4e9ad; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 .slider { float: right; width: 481px; height: 361px; margin-top: 10px; }
#screen1 .clear p { float: left; width: 331px; }

#screen2 .clear:nth-of-type(1) { margin-top: 0; }
#screen2 .clear:nth-of-type(1) > div { float: right; width: 520px; height: 295px; border-radius: 5px; margin-top: 70px; position: relative; background: url(images/6/s1.png) no-repeat; }
#screen2 .clear:nth-of-type(1) > div p { font-size: 24px; position: absolute; margin: 0; }
#screen2 .clear:nth-of-type(1) > div p:nth-child(1) { width: 360px; left: 78px; text-align: center; }
#screen2 .clear:nth-of-type(1) > div p:nth-child(2) { left: 133px; top: 56px; }
#screen2 .clear:nth-of-type(1) > div p:nth-child(3) { left: 15px; top: 195px; }
#screen2 .clear:nth-of-type(1) > div p:nth-child(4) { left: 190px; bottom: 99px; }
#screen2 .clear:nth-of-type(1) > p { float: left; padding-top: 15px; width: 313px !important; margin-top: 0; }
#screen2 .clear div { margin-top: 20px; }
#buttons .next { display: none; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }

#screen3 .slider { margin: 20px auto; width: 530px; height: 395px; }
#screen3 .slider img { width: 100%; height: 100%; }
#screen3 .clear p { width: 100%; margin-top: 0px; padding-top: 15px; }

#screen2, #screen3 { display: none; }
img.next-toggle { display:none; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .slider {
			float: right;
			width: 385px !important;
			height: 361px;
			margin-top: 10px;
		}
		#screen2 .clear:nth-of-type(1) > div {
		float: right;
			width: 396px !important;
			height: 295px;
			border-radius: 5px;
			margin-top: 70px;
			position: relative;
			background: url(images/6/s1.png) no-repeat;
		}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}	
<?php if($language == "es_ES") { ?>
	h1 { font-size: 32px; }
	#screen2 p { font-size: 22px; }
<?php } ?>	



</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about plants are producers"); ?></h1>

				<div class="clear">
					<p><?php echo _("As a plant grows, it increases in size and mass. It draws very small amounts of minerals into its structure through its roots, but the vast majority of the material that makes up its structure consists of carbon dioxide and water.  The carbon dioxide is absorbed through openings in leaves or needles. Most plants absorb water through their roots from the surrounding soil."); ?></p>

					<ul class="rslides slider">
						<li><img src="images/6/s1a.jpg"></li>
						<li><img src="images/6/s1b.jpg"></li>
						<li><img src="images/6/s1c.jpg"></li>
						<li><img src="images/6/s1d.jpg"></li>
						<li><img src="images/6/s1e.jpg"></li>
					</ul>
				</div>

				<p><?php echo _("Photosynthesis captures solar energy and stores it in chemical bonds holding atoms to one another.  The end product of the process is glucose. Other chemical processes in the plant are able to combine glucose molecules into complex chemical structures called cellulose. <span class='key'>Cellulose</span> is a plant carbohydrate which provides the plant with both stored energy and a strong substance to help provide it with support."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<div class="clear">
					<p><?php echo _("Cellulose is the chief component of the walls surrounding every plant cell. As the plant grows, it increases its total number of cells. This, in turn, increases the overall mass of cellulose. Even when plant cells die, the cellulose that surrounded them remains intact. In trees, this remaining cellulose makes up what we know as wood. Every year of a tree's life, a new layer of wood is laid down, increasing the mass and strength of the tree as a whole."); ?></p>

					<div>
						<p><?php echo _("Cellulose in Plant Cell Walls"); ?></p>
						<p><?php echo _("Cell wall"); ?></p>
						<p><?php echo _("Plant cell"); ?></p>
						<p><?php echo _("Cellulose"); ?></p>
					</div>
				</div>

				<p><?php echo _("Cellulose is also the <span class='key'>fiber</span> found in other types of plants. It is the fiber in the boll of the cotton flower. It is the stringy material in celery.  It makes up most of the structure of lettuce leaves. Cellulose is used for many purposes.  Trees are cut down and lumber is sawn for homes and furniture.  Wood can also be crushed and mixed with water to make paper and cardboard. Cellulose fibers from many plants are woven together to make cloth."); ?></p>
			</div>

			<div id="screen3" class="screen">
				<div class="clear">
					<p><?php echo _("Many animals graze on grasses and other plant material for food. These animals are able to digest cellulose as a direct energy source. <span class='key'>Humans</span> lack the ability to do so, but still require large amounts of cellulose in our diets.  For us, cellulose provides the rough fiber material required for the efficient digestion of the materials we do use for energy."); ?></p>	

					<ul class="rslides slider">
						<li><img src="images/6/s2a.jpg"></li>
						<li><img src="images/6/s2b.jpg"></li>
						<li><img src="images/6/s2c.jpg"></li>
						<li><img src="images/6/s2d.jpg"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Absorbing carbon dioxide..."); ?></strong></section></section>

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
	var screenCount = 3;

	if (hash != "") {
		$('.screen').hide();
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen < screenCount) {
				$('a.readmore-toggle').parent().attr('href','#screen' + screen);
			} else {
				$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			}
		});
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "5.php";
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} else if($('#screen3').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#screen3').fadeOut(function (){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		} else if ($('#screen2').is(':visible')) {
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen2').fadeOut( function(){
				$('#screen3').fadeIn();
				window.location.hash = '#screen3';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
