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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #46A5AD; }
.wrap { border-color: #a1dbfd; }
.bg { background-image: url(images/11/bg.jpg); }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about natural resources"); ?></h1>
				<p><?php echo _("All living things need the earth's natural resources to survive. Human beings use more of these resources than most animals not only to survive but also to be comfortable. People use <span class='key'>natural resources</span> for almost everything on a daily basis. Some of these resources are used to produce things - like wood from trees to make houses. Others natural resources are used for <span class='key'>energy</span> needed to make appliances and machines work - like oil and coal to power cars and heat our homes. Some of the natural resources humans need are renewable – which means they may form naturally again after being used. Examples of <span class='key'>renewable resources</span> are trees and water. <span class='key'>Non-renewable resources</span> on the other hand, are those that are gone forever after they are used up. Examples of these are minerals and metals, coal, natural gas, and petroleum. People need to <span class='key'>conserve</span> these resources so they do not run out. Conservation means using resources wisely and carefully so we don't run out of them."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
