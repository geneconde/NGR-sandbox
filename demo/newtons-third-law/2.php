<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
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

	<title><?php echo _("Newton's Third Law"); ?></title>

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
		h1 { color: #9E61BB; }
		#ph1 {font-size: 24px;}
		.wrap { border-color: #ded4f6; }
		.bg { background: url(assets/2/bg.jpg); }

		#animation { position: absolute; bottom: 30px; width: 419px; height: 246px; left: 60px; }
		#animation img { position: absolute; }
			
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix" >
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Thinking about... Newton's Third Law"); ?></h1>

					<p class="grid_12" id = "ph1"><?php echo _("Objects all around you are interacting with one another. These interactions can cause objects to stay still, or they can affect the object in ways that can be identified by looking for patterns in the object's motion. Often, objects are experiencing interactions with several other things at the same time. These interactions can be described based on different types of forces. Forces can be really small, like the weight of a butterfly resting on your shoulder, or they can be huge like the thrust from a rocket carrying astronauts into space."); ?></p>
				</div>
			</div>

			<div id="animation">
				<img id="yellow" src="assets/2/yellow.png" />
				<img id="blue" src="assets/2/blue.png" />
				<img id="hands" src="assets/2/hands.png" />
			</div>
			
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
