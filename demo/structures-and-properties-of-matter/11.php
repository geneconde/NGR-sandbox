<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'structures-and-properties-of-matter';
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

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

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
		h1 { color: #F16D2D; font-size: 31px; }
		p { color: #000; }

		.wrap { border-color: #FFD8FA; }
		.bg { background-image: url(assets/11/bg.jpg); }
		.text{position:absolute; top:0; font-family: arial;}
		.text span{display: block;}
		.salt{margin-top: 15px;margin-left: 75px;font-weight: bolder;}
		.na{margin-top: 50px;margin-left: 7px;font-size: 15px;}
		.cl{margin-left: 46px;margin-top: -27px;}
		.nacl{margin-top: 33px;margin-left: 70px;font-weight: bolder;}
		.water{margin-left: 12px;font-weight: bolder;margin-top: 15px;}
		.h2o-1{margin-left: 36px;margin-top: 67px;float: left;}
		.h2o-2{float: left; margin-left: 36px; margin-top: 29px;}
		.h2o-3{float: left;margin-top: 67px;margin-left: 32px;}
		.h2o{margin-top: 10px;margin-left: 75px;font-weight: bolder;}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
		<?php if ($language == 'ar_EG') { ?>
			.text { left: 0px !important; }
			.na, .cl, .h2o { text-align: left !important; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... the structure and properties of matter"); ?></h1>

					<p class="grid_12"><?php echo _("Everything that makes up the earth and the universe is made up of <span class='key'>matter</span> - whether you can see it or not. There are lots of different kinds of matter with lots of different <span class='key'>properties</span>. Some of those properties make the matter useful for us. All matter is made up of tiny invisible particles called <span class='key'>atoms</span> and molecules. If the matter is made up of just one kind of atom, it's called an <span class='key'>element</span>. If the matter is made up of two or more different kinds of atoms, the matter is called a <span class='key'>compound</span>. Even the tiniest bit of matter you can see – like a grain of sand or sugar, or even a speck of dust – is still made up of millions of atoms or molecules."); ?></p>
					<div class="grid_3 prefix_3">
						<img src="assets/11/salt.jpg" />
						<div class="text">
							<span class="salt"><?php echo _("Salt"); ?></span>
							<span class="na">Na +</span>
							<span class="cl">Cl -</span>
							<span class="nacl">NaCl</span>
						</div>
					</div>
					<div class="grid_3">
						<img src="assets/11/water.jpg" />
						<div class="text">
							<span class="water"><?php echo _("Water Molecule"); ?></span>
							<span class="h2o-1">H</span>
							<span class="h2o-2">O</span>
							<span class="h2o-3">H</span>
							<span class="clear"></span>
							<span class="h2o">H<sub>2</sub>O</span>
						</div>
					</div>					
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
