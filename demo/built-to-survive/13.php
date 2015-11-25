<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES"){ ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/13/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
h1 { color: #951f25; line-height: 40px; }
p { color: #000; padding: 5px 0px; line-height: 30px; font-size: 22px; text-align: left; }
.key { color: #007C4A; }
.wrap { border-left: 1px dashed #E0956B; border-right: 1px dashed #E0956B; }
<?php if($language == "es_ES") { ?>
	h1 { font-size:29px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	html[dir="es"] h1 { font-size: 25px; }
	html[dir="es"] p { font-size: 21px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="summary">
				<h1><?php echo _("Summarizing big ideas... about being built to survive"); ?></h1>
				<p><?php echo _("Earth contains a great <span class='key'>diversity</span> of living things. Each kind of living thing has unique adaptations, which are characteristics that can be seen in the anatomy of a creature and that contribute to the creature's survival. For example, most <span class='key'>birds</span> are able to fly due to their hollow bone structure, wings, and feathers. <span class='key'>Reptiles</span> are cold-blooded, so they are adapted to survive only in warmer climates, although with their tough, scaly skin they are well adapted to live in some rough areas. Most <span class='key'>fish</span> are adapted to breathe underwater using gills and to swim efficiently using their aerodynamic fins. <span class='key'>Plants</span> are capable of utilizing the energy of sunlight in the complex process of photosynthesis in which they take in carbon dioxide and release <span class='key'>oxygen</span>, an essential element for many other living things. Insects come in many varieties with many unique adaptations. The beetle, one of the most common insects, has a hard shell made from a pair of wings that gives the <span class='key'>beetle's</span> body durability and strength. Microorganisms possess tail-like <span class='key'>flagella</span> for motion and tiny, hair-like <span class='key'>pili</span> that enable them to attach onto other cells. Finally, <span class='key'>humans</span> have the largest brain size for their overall body size of all living things, and yet share many similarities with animals, such as having numerous internal organs working together under the direction of their very complex brains."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
