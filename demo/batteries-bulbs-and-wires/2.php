<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(2, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1, p { color: #fff; }

		.wrap { border-color: #0A4780;}
		.bg { background-image: url(assets/2/bg.jpg); overflow: hidden; }
		#kid { background-image: url(assets/2/kid.png);}
		.bg > div > div.grid_12 { z-index: 300;}

		
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... electric circuits"); ?></h1>

					<p class="grid_12"><?php echo _("You know what's very cool? And sometimes scary? Going into a dark place, like a closet, or basement, or even under your covers, with a flashlight. Or how about out in the dark woods at night? That would be cool and scary too. No matter where you are in the dark – a flashlight makes you feel better and safer because you can see what's out there. But have you ever wondered about how they work? What makes them light up and what to do if they stop working? It all has to do with simple electric circuits so let's see if we can figure it out."); ?></p>
					
				</div>
				<div id="animation">

					<img id="tree1" src="assets/2/trees.png">

					<img id="tree2" src="assets/2/trees.png">

					<div id="jump" >

						<div id="kid" ></div>

						<img id="eyeballs" src="assets/2/eyeballs.png">

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName(); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
