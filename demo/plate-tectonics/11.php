<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
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
		h1 { color: #FFE8AB; }
		p { color: #fff; }
		.key { color: #6FECF0; }
		.wrap { border-color: #75573D; }
		.bg { background-image: url(assets/11/bg.jpg); overflow: hidden; }
		.fa, .lang-menu a { color: #1AA257; }

	<?php if ($language == 'es_ES') : ?>
		p {font-size: 22px;}
	<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... plate tectonics"); ?></h1>

					<p class="grid_12"><?php echo _("<span class='key'>Maps</span> are really important. They can show valuable information like weather or where volcanoes are located. They can cover geographic areas as big as the United States or the world, or as local as your neighborhood. The information on maps can be extremely helpful in planning what to wear to school today or where to live when you grow up. One kind of information that can be found on maps is the location of <span class='key'>earthquakes</span> and <span class='key'>volcanoes</span> in the United States. The <span class='key'>pattern</span> of the locations of these natural phenomena show that they are mostly found along the western boundary of the country in a line roughly parallel to the West Coast. This information might be useful in planning projects that require protection from natural disasters."); ?></p>
					<p class="grid_12"><?php echo _("One of the most important ideas ever to come out of geology and maps is the theory of <span class='key'>plate tectonics</span>. Scientists came up with this idea based on geological and geographical data they plotted on maps. These data show patterns of earthquakes, mountains and volcanoes, which led them to believe that the crust under the oceans and continents of the earth are divided up into many pieces like a huge jigsaw puzzle. They called these pieces <span class='key'>tectonic plates</span>. And, incredibly, these plates could move around on the surface of the earth and pull apart from each other or crash into each other. These movements cause earthquakes to happen, volcanoes to erupt, and mountains to be formed."); ?></p>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="10.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
