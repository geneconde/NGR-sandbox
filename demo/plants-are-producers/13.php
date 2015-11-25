<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
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
h1 { color: #A59063; }
.wrap { border-color: #dbea92; }
.bg { background-image: url(images/13/bg.jpg); }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about plants are producers"); ?></h1>
				<p><?php echo _("Plants absorb energy directly from the sun. They use that energy to power <span class='key'>photosynthesis</span>, the process that combines carbon dioxide and water to form sugar. Green plants capable of photosynthesis are said to be <span class='key'>producers</span>. They are the base of the <span class='key'>food web</span>, the system of interactions between plants and <span class='key'>consumers</span>, the animals who consume the plants for food.  <span class='key'>First-order consumers</span> are animals who consume only plant material for food. Second-order consumers get their food by eating first-order consumers. Food webs are such complex sets of interactions that the loss of any part of the web can cause it to collapse. When this happens, some species may become extinct."); ?></p>

				<p><?php echo _("Photosynthesis combines water and carbon dioxide to form <span class='key'>simple sugars</span>. Simple sugars may then be combined to form complex <span class='key'>carbohydrates</span> like starch and <span class='key'>cellulose</span>. <span class='key'>Humans</span> are unable to digest cellulose as food, but make use of its fibers in such products as paper, cloth and wood."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
