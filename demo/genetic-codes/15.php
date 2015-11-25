<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'genetic-codes';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Genetic Codes"); ?></title>
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
h1 { color: #AC9157; }
.wrap { border-color: #fff16a; }
.bg { background-image: url(images/15/bg.jpg); }

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 31px; }
<?php endif; ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about genetic codes"); ?></h1>
				<p><?php echo _("All living things are what they are because of information carried in each cell. The information is stored in a simple code in one or more complex molecules called <span class='key'>DNA</span>."); ?></p>
				<p><?php echo _("Specific pieces of DNA which provide information for particular characteristics are called <span class='key'>genes</span>. Each gene provides information that allows a cell to make one special protein.  Each organism makes thousands of different proteins, and there is a gene responsible for providing the information to make each one.   It's possible for some plants and animals to reproduce by dividing and having each new part become a separate organism. That's called <span class='key'>asexual reproduction</span>, and each offspring is an exact duplicate of the parent.  When organisms have separate male and female parents, the reproduction is called <span class='key'>sexual</span>, and the offspring is similar, but not identical, to both parents. Sometimes, the information carried by DNA can be copied incorrectly or changed by some environmental problem.  This often leads to changes in the proteins for which a gene codes. These changes sometimes bring forth new characteristics in the organism, but may also lead to illness or death."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="14.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="scripts/jpreloader.js"></script>

	<?php include_once "setlocale.php"; ?>
</body>
</html>
