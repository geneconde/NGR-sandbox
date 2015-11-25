<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Plate Tectonics"); ?></title>

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
		h1 { color: #792E35; }
		
		.wrap { border-color: #FFB260; }
		.bg { background-image: url(assets/6/bg.jpg); overflow: hidden;}
		
		.slider-container { position: relative; margin: 0 auto; width: 300px; height: auto; }
		.rslides { width: 100%; height: 100%; }
		.rslides_nav { position: absolute; }
		.slider-container .prev { left: 15px; top: 100px; content: url('assets/6/prev.png');}
		.slider-container .next { right: 15px; top: 100px; content: url('assets/6/next.png');}
		.rslides { background: #9DD362;-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
		
		.rslides img { float: right; }
		.rslides li > p { margin: 10px 15px; }
		.fa, .lang-menu a { color: #1AA257; }
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div>
						<h1 class="grid_12"><?php echo _("More big ideas about... plate tectonics"); ?></h1>
						<p class="grid_12"><?php echo _("The earth's major landform features, such as volcanoes, mountains, rivers, and coasts can be shown on <span class='key'>maps</span> so we can try and make sense out of the <span class='key'>patterns</span> they form."); ?></p>
						
						<div class="slider-container grid_10 prefix_1 suffix_1">
							<ul class="rslides grid_12">
								<li><p><img class="grid_6" src="assets/6/map1.jpg"><?php echo _("This map shows the locations of most of the major volcanoes (red dots) in the United States. When these locations are shown on a map like this, it is easy to see a pattern of where the <span class='key'>volcanoes</span> are in the United States. First of all, they are all located in the western US and they are all located in a general north-south trend that roughly runs along the west coast."); ?></p></li>
								<li><p><img class="grid_6" src="assets/6/map2.jpg"><?php echo _("This map shows occurrences of major <span class='key'>earthquakes</span> (black dots) in the United States. How does the pattern of earthquakes shown on this map compare to the locations of volcanoes on the previous map? You're right. Most of the volcanoes and many of the earthquakes generally run north and south band and which is roughly parallel to the Pacific coast in the western part of the North American continent. But unlike volcanoes, a number of earthquakes are found in the central and eastern parts of the United States."); ?></p></li>
							</ul>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="5.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Analyzing seismic waves..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	
	<script>
		$(".rslides").responsiveSlides({
			auto: false,
			pager: false,
			nav: true,
			speed: 400
		});
	</script>
</body>
</html>
