<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title> <!-- Change module title here -->
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
h1 { color: #688A10; }
.bg { background: url('images/13/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #7de2fc; border-right: 1px dashed #7de2fc; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 28px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about ecosystems interactions"); ?></h1>
				<p><?php echo _("An <span class=\"key\">ecosystem</span> is made up of living and non-living things that interact with each other. Animals and plants survive and live in their ecosystem by <span class=\"key\">adapting</span> to its conditions. In a <span class=\"key\">healthy ecosystem</span> many species are able to meet their needs (food, water, and other resources) for life over a long period of time.   People can change ecosystems in many different ways. The changes affect species that depend on the natural resources (air, soil, and water) in the ecosystem. Some animals need to adapt to their habitat over time, and some <span class=\"key\">invasive species</span> do not. Plants or animals living in wild spaces outside their native ranges are known as <span class=\"key\">invasive species</span>.  Ecosystems come in different sizes. An ecosystem is made up of a habitat, where things live; and a community, the animals and plants who live there. A habitat is the natural home or environment of an animal, plant, or other organism. In a habitat, plants and animals interact and rely on each other."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
