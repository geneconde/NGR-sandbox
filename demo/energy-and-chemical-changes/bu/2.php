<?php
	require_once '../tempsession.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; }

		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		
		.wrap { border-color: #000; }
		.bg { background-color: #fff; }

		.container_12 { height: 100%; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Thinking about... structures and properties of matter"); ?></h1>

					<p class="grid_12"><?php echo _("You know what's really fun? Slime – that's what!! Slime is some cool stuff you can make so you can play tricks on your friends and gross out your family."); ?></p>
					<p class="grid_12"><?php echo _("Slime is easy to make out of easy to find ingredients you can get at the supermarket. There are a bunch of different recipes for how to make slime. Search on Google for \"slime images\" and \"slime on youtube\" and you'll get all kinds of great ideas on how to make slime and play pranks on your friends."); ?></p>
					<p class="grid_12"><?php echo _("The reason why slime is so much fun to play tricks with is because it's stuff with certain properties. It's runny, icky, gooey and green, and of course, slimy. But it's also safe and easily washable – just the kind of properties that make it fun to \"slime\" your friends without hurting them or ruining their clothes. \"Stuff\" is called matter by scientists. So let's look at more kinds of matter and their properties."); ?></p>
					
				</div>

				<div id="animation">
					<img id="pig-leg-left-front" src="assets/2/pig-leg-left.png">
					<img id="pig-leg-left-back" src="assets/2/pig-leg-left.png">
					<img id="pig-tail" src="assets/2/pig-tail.png">
					<img id="pig-body" src="assets/2/pig-body.png">
					<img id="pig-ear" src="assets/2/pig-ear.png">
					<img id="pig-leg-right-front" src="assets/2/pig-leg-right.png">
					<img id="pig-leg-right-back" src="assets/2/pig-leg-right.png">
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
