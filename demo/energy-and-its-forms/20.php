<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		p { font-size: 24px; margin-top: 30px; }
		h1 { font-size: 50px; color: Chocolate; margin-top: 0; padding-top: 30px; text-align: center; margin-bottom: 100px; }
		h1.blink { text-transform: none; }
		.wrap { border-left: 1px dashed #c32430; border-right: 1px dashed #c32430; }
		.bg { background-image: url(images/20/bg.jpg); }
		.bg a { text-decoration: none; background-color: #c32b31; color: #fff; padding: 10px; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; }
		.bg a:hover { background-color: #e05056; }
		html[dir="rtl"] h1 { text-align: center; }
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 40px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<h1 class="blink"><?php echo _("Congratulations"); ?>, <?php echo $user->getFirstName(); ?>!</h1>

			<p><?php echo _("You've completed the Energy and its Forms module."); ?></p>
			<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>		
			<br>
			<p>
				<a id="dashboard"
					<?php if ($user->getType() == 0): ?>
						href="../../teacher.php">
						<span id="link"><?php echo _("Go to dashboard"); ?></span>
					<?php else: ?>
						href="../../student.php ?>">
						<?php echo _("Go to dashboard"); ?>
					<?php endif; ?>
				</a>
			</p>
		</div>
	</div>

	<div id="buttons">
		<a href="19.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>

	<?php include_once "setlocale.php"; ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/global.js"></script>
	<script>$('.blink').blink({ speed: 500, blinks: 1000 });</script>
</body>
</html>
