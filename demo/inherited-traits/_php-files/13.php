<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(13, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Module"); ?></title>

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
		h1 { color: #000; }
		p { text-align: center; }

		.wrap { border-color: #000; }
		.bg { background-image: url(assets/13/bg.jpg); }

		#question { height: 320px; width: 60%; position: relative; margin: 10px auto 0; display: block; }
		#question img { display: none; width: 100%; position: absolute; }
		#question img.active { display: block; margin: 0 auto; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Checking what you now know... about module"); ?></h1>

					<p class="grid_12"><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></p>
					<p class="grid_12"><?php echo _("Click the NEXT button when you are ready."); ?></p>

					<div class="grid_8 prefix_2 suffix_2">
						<div id="question">
							<img src="assets/13/0.png" class="active">
							<img src="assets/13/1.png">
							<img src="assets/13/2.png">
							<img src="assets/13/3.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		$(document).ready(function() { setInterval('swapImages()', 1000); });
		
		function swapImages(){
			var active = $('#question .active');
			var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');  

			active.removeClass('active');
			next.addClass('active');
		}
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
