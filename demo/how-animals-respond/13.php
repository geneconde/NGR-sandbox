<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		img.next { display: block; }
		p { font-size: 24px; line-height: 23px; text-align: left; }
		.bg { background-image: url(images/13/bg.jpg); }
		.key { color: #2971e8; }
	
		html[dir="rtl"] p { text-align: right; }
		<?php if($language == "es_ES") { ?>
			h1 { font-size:26px; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Summarizing big ideas... about how animals respond"); ?></h1>
				<p><?php echo _("<span class='key'>Neurons</span> (<span class='key'>nervous system cells</span>) are organized into networks known as the <span class='key'>central</span> and <span class='key'>peripheral</span> nervous systems. The central nervous system is the brain and spinal cord. The peripheral nervous system is all of the many nerve cells throughout the body that connect to the spinal cord. The cells of the peripheral nervous system are divided into <span class='key'>sensory</span> and <span class='key'>motor</span> neurons. The nervous system is sensitive to three different types of <span class='key'>stimuli</span>: <span class='key'>mechanical</span>, <span class='key'>chemical</span>, and <span class='key'>electromagnetic</span> stimuli. A <span class='key'>receptor</span> is a nerve cell that is sensitive to chemical stimuli based on shape. Special touch receptors in the ear transmit the pattern of vibration to the brain as an electrical signal. The brain interprets the pattern as sound. Smell and taste are both the result of chemical stimulation. Humans perceive taste thanks to structures on our tongues called <span class='key'>taste buds</span>. Smell receptors work much like taste receptors, but are concentrated in the nose, and work for molecules suspended in the air. Our eyes contain four types of light-sensitive sensory neurons. Located in the <span class='key'>retina</span>, they respond to different types of light. <span class='key'>Rods</span> are neurons that sense brightness. The ability to see a clear image depends on having the proper distance between the lens and retina called the focal length. <span class='key'>Memory</span> patterns form when cells communicate with one another. One nerve cell sends a message to another by releasing chemicals into the space between called the <span class='key'>synapse</span>. When this communication happens a few times, a temporary pattern known as <span class='key'>short-term memory</span> is formed. <span class='key'>Chunking</span>, <span class='key'>imagery</span>, and <span class='key'>practice</span> is how one's memory can be improved. These tools work by strengthening the connections between cells in the brain."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/global.js"></script>
</body>
</html>
