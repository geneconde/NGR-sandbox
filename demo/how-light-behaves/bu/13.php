<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'human-impact';
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

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #8e569b; }

		.wrap { border-color: #B8FFFF; }
		.bg { background-image: url(assets/13/bg.jpg); }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Summarizing core ideas... about human impact"); ?></h1>

					<p class="grid_12"><?php echo _("The earth's environment is very important because it can provide healthy air, water, food, and land for all the living things on earth to survive. But because there are so many people on earth, and because all of these people use the environment to survive and try to live comfortably, humans can have a great impact on the environment that might be harmful. This impact can destroy parts of the environment so that many people don't have the healthy air, water, food, and land they need to survive. Clearing land for farms and housing developments can destroy fields and woods and add pollutants to the water; driving cars and generating electricity adds pollutants to the air; factories that make the things we use every day can add pollutants to the water. But the good news is that humans are smart and can understand how they negatively impact the environment and how that negatively impacts them in return. There are lots of scientists that investigate the environment to understand what people are doing to hurt it and what we can do to help. These understandings can cause humans to change their behavior so they lessen their negative impact on the environment. If we didn't understand our impact, and how to change it, it's possible that we might totally ruin some, or all, of the earth's environment so we couldn't survive."); ?></p>
				
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
