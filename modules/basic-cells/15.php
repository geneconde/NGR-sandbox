<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(15, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Basic Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #61009e; }
		h2 { color: #008fff; }
		p { text-align: left; color: #000; margin-bottom: 0;margin-top: 5px; font-size: 23px;}

		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/15/bg.jpg); overflow: hidden;}

		#question { height: 320px; width: 60%; position: relative; margin: 10px auto 0; display: block; }
		#question img { display: none; width: 100%; position: absolute; }
		#question img.active { display: block; margin: 0 auto; }
		@media screen and (max-width: 1250px ){
		.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
			.bg p{font-size: 20px;}
		}
		html[dir=rtl] p { text-align: right; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas... about basic cells"); ?></h1>
					<div class="clear"></div>
					<p class="grid_12"><?php echo _("<span class='key'>Prokaryotes</span>, like bacteria, are very small <span class='key'>cells</span> with little in the way of complex inner structures. <span class='key'>Eukaryotes</span> are usually larger and contain structures called organelles which perform specific functions. Plants, animals, protists and fungi are all made from eukaryotic cells."); ?></p>	
					<p class="grid_12"><?php echo _("All cells have a layered membrane which regulates what can enter or leave the cell. Some molecules are small enough to pass through membranes by <span class='key'>diffusion</span>. The diffusion of water through a membrane is called <span class='key'>osmosis</span>. Other larger molecules must be moved through membranes using proteins embedded in the fatty layers. This process requires energy and is called active transport. Plant cells' membranes are surrounded by a rigid <span class='key'>cell wall</span> which also provides protection and support."); ?></p>	
					<p class="grid_12"><?php echo _("The <span class='key'>nucleus</span> is an organelle which protects a cell's DNA information. That information is used by ribosomes to make protein. <span class='key'>Chloroplasts</span> absorb solar energy and use it to make simple sugars. <span class='key'>Mitochondria</span> release energy from sugar and convert it into forms cells can use in their life processes."); ?></p>	
					<p class="grid_12"><?php echo _("In complex organisms, cells joined together to perform a single task are called <span class='key'>tissues</span>. Tissues working together are called <span class='key'>organs</span>, and groups of organs cooperating on the same job are called <span class='key'>systems</span>."); ?></p>						
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="14.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="16.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		$(document).ready(function() { setInterval('swapImages()', 1000); });
		
		function swapImages(){
			var active = $('#question .active');
			var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');

			active.removeClass('active');
			next.addClass('active');
		}
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
