<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
/* h1 { color: #000; } */
.bg { z-index: 1 !important; }
.wrap { border-color: #5cb800; }
.bg { background-image: url(images/13/bg.jpg); }
html[dir="rtl_es"] .bg h1 { font-size: 32px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about changing life forms"); ?></h1>
				<p><?php echo _("There are many different kinds of living things in any area, and they exist in different places on land and in water. Changes in an organism's habitat are sometimes beneficial to it and sometimes harmful. For any particular environment, some kinds of organisms survive well, some survive less well, and some cannot survive at all. <span class='key'>Adaptation</span> by <span class='key'>natural selection</span> acting over generations is one important process by which species change over time in response to changes in environmental conditions. The environment is dynamic in nature; its characteristics can vary over time. Disruptions to any part of the environment can lead to shifts in all its populations. Traits that support successful survival and reproduction in the new environment become more common; those that do not become less common. Thus, the distribution of traits in a population changes."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _('Putting it all together...'); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
