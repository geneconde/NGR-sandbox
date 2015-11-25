<?php 
	require_once("../tempsession.php");
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behavior'); ?></title>
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
h1 { color: #1F7FB1; }
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/11/bg.jpg); }
/* .key { color:#FFDC30; } */
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about behaviors"); ?></h1>
				<p><?php echo _("All living things respond to the <span class='key'>stimuli</span> in their environment. These responses, called <span class='key'>behaviors</span>, can be separated into those that are innate (present at birth) and those that are learned. <span class='key'>Innate behaviors</span> include reflexes and instincts. <span class='key'>Reflexes</span> are automatic responses to a stimulus such as immediately pulling your hand back from touching a hot stove. <span class='key'>Instincts</span> are more complex behavior patterns than reflexes, but they too are <span class='key'>inherited</span> and not learned. <span class='key'>Learned behaviors</span> are behaviors which are developed through the experience of living and interacting with the environment. These behaviors are difficult to forget once they are learned, but they are not passed to the next generation by inheritance. They must be relearned by the next generation."); ?> </p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
