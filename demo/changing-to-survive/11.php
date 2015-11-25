<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/11/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #bf8a30; border-right: 1px dashed #bf8a30; }
h1 { color: #ffe9b7; }
p { padding-top:2%; font-size: 22px; }

<?php if($language == "es_ES") { ?>
		h1 { font-size:34px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about changing to survive"); ?></h1>
				<div>
					<p><?php echo _("During the past 500 million years, life on earth has emerged and evolved into the variety of plants and animals we see today. <span class='key'>Fossils</span> tell us things about how life has changed from the simple organisms that inhabited our planet a long time ago, to the complex array of life we see today. When we combine evidence from many fossils from various locations, we can even come up with explanations for some of the dramatic events of Earth history. <span class='key'>Evolution</span> happens because of genetic mutations. <span class='key'>Mutations</span> are random errors that occur in the DNA that carries the information that makes living things what they are. There are different forms of change: <span class='key'>natural selection</span>, <span class='key'>artificial selection</span>, <span class='key'>sexual selection</span>, and <span class='key'>punctuated equilibrium</span>. Mutations are rare. An inherited mutation can have one of three outcomes. It can have no effect on the living thing; it can have a harmful effect; or it may give it a competitive advantage. Through natural selection, the living thing may either reproduce and pass its mutation to the next generation, or it may die and the mutation disappears. Sometimes, what seems like a disadvantage in normal times turns out to be an advantage in difficult situations."); ?></p>
					 
				</div>
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
