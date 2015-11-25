<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #f04871; }
.wrap { border-left: 1px dashed #bababc; border-right: 1px dashed #bababc; }
.bg { background: url('images/8/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#screen1 .placeholder p { float: left; width: 480px; }
#screen1 .placeholder img { float: right; margin-top: 10px; }
#screen2 { display: none; }
#screen2 .placeholder p { float: left; width: 410px; font-size: 22px; }
#screen2 .placeholder p:first-child { padding-top: 15px; }
#screen2 .placeholder img { float: right; margin-top: 24px; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 31px; }
	p, #screen2 .placeholder p { font-size: 21px; }
	#screen1 .placeholder img { margin-top: 0; }
	#screen2 .placeholder img { margin-top: 30px; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .placeholder p, #screen2 .placeholder p, #screen2 .placeholder img {width: 50%;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about biodiversity"); ?></h1>
				<div class="placeholder clearfix">
					<p><?php echo _("When humans interact with nature, we assume the responsibilities for managing resources, plants, and animals.  Managing nature is a complex task, especially as we continue to learn more about how natural systems work. Sometimes our plans work well. Sometimes, they don't work as well. Hopefully, we learn from mistakes and improve our management techniques."); ?></p>
					<img src="images/8/s1.jpg">
				</div>					
				<p><?php echo _("An interesting example has been the way forest fires have been managed in the United States. At one time, all fires were fought immediately. It turns out that fire is an important part of the life of forests. Fires set by lightning burn through forests every few years and clear away shrubs and dry, dead brush. The ash fertilizes the soil. Removal of shrubs allows young trees to have the sunlight they need for growth. Some types of trees even need the high temperatures of a fire to open their cones and allow the seeds to drop. So now, some fires are allowed to burn, and some are even set on purpose."); ?></p>
			</div>
			<div id="screen2" class="screens">
				<div class="placeholder clearfix">
					<p><?php echo _('Another way scientists are learning about the earth and all the interactions that take place in it is by conducting experiments in <span class="key">Biosphere 2</span>. A large man-made environment called Biosphere 2 is sealed off from the outside world. It is intended to help us understand the needs of people if they were to travel to other planets. Biosphere 2 takes in solar energy and uses it to grow plants and animals; recycle water, oxygen, and waste; and provide the power needed to operate the facility.'); ?></p>
					<img src="images/8/s2.jpg">
				</div>					
				<p><?php echo _("Biosphere 2 supports six different biomes: the desert, marsh, ocean, rainforest, savannah, and thorn scrub. The desert biome illustrates life in the world's dry, arid regions. The marsh biome includes both grassy and forest wetlands. The ocean biome duplicates the environment of a Caribbean Sea coral reef. The rainforest biome is divided into segments, each simulating a different kind of plant community commonly found in wet forests around the world. Scientists study the interactions between people and their surrounding environments in these biomes."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Removing shrub stumps..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 2; // set number of screens here

	if(hash != "") {
		$('.screens').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	/* Back Transition - change to the corresponding number of screens */
	$('.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href = "7.php";
		} else if($('#screen2').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	/* Read More Screen Transition */
	$('.readmore-toggle').click(function(){
		if($('#screen1').is(':visible')) {
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
