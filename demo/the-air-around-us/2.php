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

	<title><?php echo _("The Air Around Us"); ?></title>

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
		h1 { color: #7ba207; }
		.bg { overflow: hidden;}
		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		.wrap { border-color: #000; }
		.container_12 { height: 100%; }
		.wrap > .bg { overflow: hidden !important; }
		
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="animation">	
				<div id="particle-1a" class="particle" ></div>	
				<div id="particle-1b" class="particle" ></div>	
				<div id="particle-2a" class="particle" ></div>	
				<div id="particle-2b" class="particle" ></div>	
				<img id="eyeballs" src="assets/2/eyeballs.png">
			</div>
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Thinking about... the air around us"); ?></h1>

					<p class="grid_12"><?php echo _("Have you ever woken up in the morning, stretched your arms and taken a deep breath? Did you ever wonder what was in that deep breath? Sure – you probably thought you were taking in “air”. But what is that air stuff anyway? You can’t see it. You can’t taste it or smell it or feel it. So is it nothing or is it something? And how do you know?<br>And what if you live in a city where there’s “air pollution”? What does that mean? What is it that “pollutes” the air? And, if there’s enough air pollution, maybe you actually can see the air, or taste it or smell it after all."); ?></p>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="1.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready,"); ?> <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
