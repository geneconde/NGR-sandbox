<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(11, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Newton's Third Law"); ?></title>

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
		h1 { color: #e7b300; }

		.wrap { border-color: #AF331C; }
		.bg { background-image: url(assets/13/bg.jpg); }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing big ideas about... Newton's Third Law"); ?></h1>

					<p class="grid_12"><?php echo _("For any interaction between objects, the <span class='key'>forces</span> the objects put on each other will be of the same size and in opposite directions. Often stated as 'For every action, there is an equal and opposite reaction,' this is known as <span class='key'>Newton's Third Law</span> of motion. To put it another way, there are no isolated forces in nature; forces always come in pairs. When you push on the ground to walk, there is a corresponding force that the ground puts on you. When you use a hammer to pound a nail into a board, the nail also puts a force back on the hammer. When a rocket pushes burning fuel backwards, there is a force in the forward direction to move the rocket. However, paired forces don't guarantee that the changes in motion for the two objects will be paired. The <span class='key'>acceleration</span> of an object is also based on how massive the object is. For an object that is ten times as massive, the acceleration will be ten times smaller even though the forces the two objects experience are the same. If the two objects involved in the interaction are similar in <span class='key'>mass</span>, then it is likely that you will see similar changes in motion."); ?></p>

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
