<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
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
h1 { color: #547b04; }
.wrap { border-left: 1px dashed #ffc71c; border-right: 1px dashed #ffc71c; }
.bg { background: url('images/11/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about energy for life"); ?></h1>
				<p><?php echo _("In green plants, a process called <span class='key'>photosynthesis</span> captures light energy and stores it in the chemical bonds of sugars.  These sugars may be used directly by the plant or by other living things, or they may be converted into a variety of energy storage molecules. These molecules may be used later. Organisms that capture solar energy are called <span class='key'>producers</span>. Organisms which use the energy stored by plants are called <span class='key'>consumers</span>. Each set of relationships between producers, consumers, and their physical environments is called a <span class='key'>food web</span>. When plants and animals die, their bodies decompose, releasing the stored energy. Sometimes, the bodies do not completely decompose and the stored energy may be converted into substances which may remain underground for millions of years. <span class='key'>Coal</span> is the product of the incomplete decomposition of plant material. Oil and natural gas are the products of a similar process in ocean organisms. The fact that these products are the remains of living things millions of years old is why they are called <span class='key'>fossil fuels</span>."); ?></p>
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
