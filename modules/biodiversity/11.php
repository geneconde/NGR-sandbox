<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(11, $_SESSION['smid']);
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
h1 { color: #800a9d; }
.wrap { border-left: 1px dashed #7bf8f4; border-right: 1px dashed #7bf8f4; }
.bg { background: url('images/11/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
<?php if($language == "es_ES") { ?>
	p { font-size: 22px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about biodiversity"); ?></h1>
				<p><?php echo _('<span class="key">Biomes</span> are the unique plant/animal communities determined by local climate conditions.  The patterns of temperature and rainfall averages over the course of each year determine which plants and animals can live in a place. The <span class="key">tundra</span> biome most often occurs in the very far north, where temperatures are very cold, and most water shows up as snow. A biome that features many large needled trees goes by two names: <span class="key">taiga</span> and <span class="key">boreal forest</span>. Some animals are able to create their own habitats. Ants, bees, and termites are examples of insects that build complex hives and hills. Some animals not only construct homes for themselves, they build homes for others. <span class="key">Coral</span> make hard shells for themselves. Over a period of many years, large colonies of coral grow enough to form <span class="key">reefs</span>. When humans interact with nature, we assume the responsibilities for managing resources, plants, and animals. To learn even more about the interactions between people and their surrounding environments, scientists have built a large man-made environment called <span class="key">Biosphere 2</span>. Biosphere 2 supports six different biomes: the desert, marsh, ocean, rainforest, savannah, and the thorn scrub biome.'); ?></p>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="10.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons" title="<?php echo _('Next'); ?>">
		<a href="12.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
