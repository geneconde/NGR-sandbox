<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
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
h1 { color: #000; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/11/bg.jpg); }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about history of earth"); ?></h1>
				<p><?php echo _("The earth has a very, very – almost unimaginably – long history that stretches back 4.5 billion years. During that time, the <span class='key'>environments</span> of the earth have continually changed and left a record of that change in the rocks. Life forms also changed dramatically over geological time - from very simple life forms early in the earth's history to more complex life forms today. <span class='key'>Geologists</span> and <span class='key'>paleontologists</span> study the earth's rocks, and the <span class='key'>fossils</span> in those rocks, to tell how old the rocks are and in what environments each rock was formed. By doing this, earth scientists can figure out the story of the history of the earth."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
