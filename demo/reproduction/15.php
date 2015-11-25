<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
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
.bg { background-image: url('images/15/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #C5DD85; border-right: 1px dashed #C5DD85; }
h1 { color: #544B3F; }
p { padding-top:2%; }

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about reproduction"); ?></h1>
				<p><?php echo _("All living things are capable of <span class='key'>reproduction</span>. Each new generation of <span class='key'>offspring</span> is the result of either asexual or sexual reproduction. Organisms that reproduce asexually do so by dividing or budding off new individuals. <span class='key'>Asexual</span> organisms are all alike. <span class='key'>Sexual reproduction</span> involves differences between males and females. This allows recombination of genetic material, and variation among different organisms of the same type. All plants and animals progress through life cycles. In the early stages of development, an organism grows from an embryo through various stages until it is mature enough for reproduction. In the reproductive phase, females produce egg cells and males produce sperm. Sperm is carried in pollen. <span class='key'>Pollination</span> is when pollen is carried from one flower to another, sometimes by the wind, but often by insects or other animals. Animals often have special behaviors to help them attract mates. These <span class='key'>courtship</span> behaviors send messages to opposite sex members of the same species that individuals are ready for reproduction."); ?></p>
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="14.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
	<script>
	$(document).ready(function() {

	});
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>