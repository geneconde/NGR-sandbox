<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 13) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";

	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(0, $_SESSION['smid']);
		$uf->finishModule($_SESSION['smid']);
	}*/
?>
<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Making Sound"); ?></title>

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
		h1 { 
			color: #fff;
			font-size: 48px;
			text-transform: none !important;
			text-align: center;
			padding-top: 40px;
			margin-top: -18px;
			-webkit-animation: blink .5s linear 0 infinite alternate;
			-moz-animation: blink .5s linear 0 infinite alternate;
			animation: blink .5s linear 0 infinite alternate;

			animation-name: blink;
			animation-duration: .5s;
			animation-timing-function: linear;
			animation-delay: 0s;
			animation-iteration-count: infinite;
			animation-direction: alternate;
		}

		p { text-align: center; margin: 2% 0; padding: 5px 10px; color: #000; border-radius: 5px; }
		.bg { background-image: url(assets/4/bg.jpg); background-size: 100% 100% !important; }

		#results { display: block; background-color: #57A9B6; margin-top: 10%; color: #fff; padding: 9px 24px; text-align: center; border-radius: 5px; border: 2px solid #B0E2AC;} 
		#results:hover { background: #417A83; } 

		
		@-webkit-keyframes blink {
			from { color: transparent; }
			to { color: #fff; }
		}

		@-moz-keyframes blink {
			from { color: transparent; }
			to { color: #fff; }
		}

		@keyframes blink {
			from { color: transparent; }
			to { color: #fff; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<h1 class="grid_12"><?php echo _("Congratulations") . ', ' . $user->getFirstName(); ?>!</h1>

					<div class="grid_12">
						<p><?php echo _("You've completed the Making Sound module."); ?></p>
					</div>

					<div class="grid_12">
						<p><?php echo _("You can check how you did on the 'Quick Checks' and 'Quiz Questions' for this module by clicking the button below."); ?></p>
					</div>

					<div class="grid_4 prefix_4 suffix_4">
						<a id="results" href="../../teacher.php"><?php echo _("Go to dashboard"); ?></a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="23.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("You're done!"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
