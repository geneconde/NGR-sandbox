<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
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
h1 { color: #3F96A7; }
.wrap { border-color: #aafefe; }
.bg { background-image: url(images/11/bg.jpg); }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about the role of water"); ?></h1>
				<p><?php echo _("Nearly all the water on earth - 97.5% - is salt water in the ocean. Only 2.5% of the water on earth is fresh water. And most of that fresh water is found in <span class='key'>glaciers</span>, <span class='key'>polar ice caps</span> and <span class='key'>groundwater</span>. Only a tiny percentage of fresh water can be found in the Earth's lakes and rivers. Water has the unusual property of being able to be found in all three <span class='key'>states of matter</span> - solid, liquid, and gas - at normal temperatures that humans experience. Large amounts of solid water, called ice (or snow), are found in nature: in glaciers and polar ice caps. Liquid water is the regular water you drink. And water in the gaseous state is invisible in the air but you can feel it as humidity when the air has a lot of water vapor mixed in with it."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>


	
	<?php include("setlocale.php"); ?>
</body>
</html>