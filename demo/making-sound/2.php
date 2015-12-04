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

	<title><?php echo _("Making Sound"); ?></title>

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
		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		.container_12 { height: 100%; }
		.bg { background-image: url(assets/2/bg.jpg); overflow: hidden; }
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="animation">
				<img id="bell" src="assets/2/bell.png" />
				<img id="sound" src="assets/2/sound.png" />
			</div>
			<div class="container_12">
				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Thinking about... making sound"); ?></h1>

						<p class="grid_12"><?php echo _("What do vocal cords, headphones playing music, and school bells have in common? They all make sound. All these objects vibrate or move to and fro.  Different kinds of vibrations make different kinds of sound."); ?> </p>						
					</div>					
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script>
		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "1.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '#';
				});
			} 

		});
	</script>
	
	<?php include 'setlocale.php'; ?>
</body>
</html>
