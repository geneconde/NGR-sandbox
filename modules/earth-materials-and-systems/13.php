<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #46A6C7; font-size: 33px; }
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/13/bg.jpg); }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about earth materials and systems"); ?></h1>
				<p><?php echo _("There are four major systems that make up the earth: the <span class='key'>geosphere/lithosphere</span>, the <span class='key'>hydrosphere</span>, the <span class='key'>atmosphere</span>, and the <span class='key'>biosphere</span>. These four <span class='key'>systems</span> interact with each other to control the kinds of <span class='key'>landscapes</span> and environments that make up the earth. One example of an <span class='key'>interaction</span> of the earth systems is to affect the amount of rain an area of the earth gets, which then affects what kinds of plants and animals can live there. Different environments are suitable for different living things. Rain and wind can also shape and reshape the landforms in the environment, like how the beaches on the coast change after a hurricane."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
