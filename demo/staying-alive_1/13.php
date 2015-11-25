<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #000; }
.wrap { border-color: #90EBFE; }
.bg { background-image: url(images/13/bg.jpg); }

html[dir="rtl"] h1 { text-align: right; font-size: 34px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about staying alive"); ?></h1>
				<p><?php echo _("In many kinds of animals, parents and the offspring themselves engage in behaviors that help the offspring to survive. Many animals are born with <span class='key'>instinctual behaviors</span>. Other animals rely only on what they learn to survive. The survival and reproduction of the group as a whole is important. <span class='key'>Ecosystems</span> are dynamic in nature and their characteristics can vary over time. Disruptions to any physical or biological component of an ecosystem can lead to shifts in all its populations. The more we understand the ecosystems, the more it will help us to manage plants and animals as they interact with human populations around the world. <span class='key'>Biodiversity</span> describes the variety of species found in Earth's terrestrial and oceanic ecosystems. The completeness or integrity of an ecosystem's biodiversity is often used as a measure of its health. All organisms must be able to obtain and use resources, grow, reproduce, and maintain stable internal conditions while living in a constantly changing external environment."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
