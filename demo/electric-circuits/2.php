<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'forces-of-all-kinds';
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

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #F90074; }

		.wrap { border-color: #FF00FF; }
		.bg { background-image:  url(assets/2/thinking.png); overflow: hidden; z-index: 1;}
		
		#animation { width: 380px; height: 260px; position: absolute; bottom: -400px; left: -10px; }
		#animation p { position: absolute; }
		#rotate { background: url(assets/2/rotate.png) no-repeat; bottom: 120px; left: 255px; width: 95px; height: 105px; z-index: 2; }
		@media screen and (max-width: 1250px) { #animation { bottom: -165%; left: -2%; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					
				
					<h1 class="grid_12"><?php echo _("Thinking about... electric circuits"); ?></h1>
					<p class="grid_12"><?php echo _("In our homes, we perform a variety of tasks each day that are made easier by electric circuits.  From tasks that used to involve a lot of time and physical effort, like washing clothes or dishes, to diversions like television or video games, we are constantly making use of electric circuits.  These electric circuits can easily complete a wide variety of tasks using just a few basic physics principles.  An awareness of these principles can help you live your life more efficiently and safely!"); ?></p>

			<div id="animation">

				<p id="rotate"></p>

			</div>
					
			
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?><?php echo $user->getFirstName(); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
