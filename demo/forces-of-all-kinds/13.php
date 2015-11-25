<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Forces of all Kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #2C3832; }
		p { color: #000; }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 33px; } }

		.wrap { border-color: #1683b1; }
		.bg { background-image: url(assets/13/bg.jpg); }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... forces"); ?></h1>

					<p class="grid_12"><?php echo _("<span class = 'key'>Force </span> is a term used to describe the interaction between two objects. There are different types of force depending upon the circumstances of the interaction. The forces that we see in everyday life are either <span class = 'key'>gravitational </span> or <span class = 'key'>electro-magnetic</span>. Forces have both an amount and direction. <span class = 'key'> Newton's First Law of Motion </span> explains that objects experiencing balanced forces either remain at rest, or move in a straight line at a constant speed. If the force on an object is greater in one direction than it is in the opposite direction, the forces are said to be <span class = 'key'> unbalanced</span>, and the object will accelerate. The amount of acceleration an object experiences will depend on how big the difference in forces is, and how massive the object is. The bigger the unbalanced force, the bigger the acceleration will be. The bigger the <span class = 'key'>mass</span> of the object, the smaller the acceleration will be."); ?></p>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
