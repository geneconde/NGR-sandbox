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

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #9BBF21; z-index: 10; }
		p {  z-index: 10; }
		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		
		.wrap { border-color: #D4F5EC; }
		.bg { background: url(assets/2/bg.jpg);}

		.container_12, .container_12 > .grid_12 { height: 100%; }
		
		.gal-body { position: absolute; bottom: 307px; left: 100px; }
		.gal-body > img { position: absolute; width: 250px; }
		#arm { height: 18px; margin-left: -14px; margin-top: 60px; }
		#hand { width: 82px; height: 91px; margin-left: 185px; margin-top: -12px; }


	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("Thinking about... energy and chemical changes"); ?></h1>
					
					<p class="grid_12"><?php echo _("Have you ever heard people say: \"Wow, she really has a lot of energy. I wonder where she gets it from?\" Usually people are talking about their friends or relatives that are always \"on-the-go.\" They go to work or go to school, they do athletics or work out, join clubs, they do volunteer work and they never seem to get tired. Where DO they get all that energy? Think about all the things YOU do everyday. Where does your energy come from?"); ?></p>
					<p class="grid_12"><?php echo _("And then think about all of the other things that you see happening and changing all around you – like cars moving, the lights going on in your house, flowers blooming in the garden, rain falling from the sky. What makes all of those things happen?"); ?></p>
										
					<div class='gal-body'>
						<img id="arm" src="assets/2/arm.png" />
						<img id="hand" src="assets/2/hand.png" />
						<img id="bod" src="assets/2/gal.png" />
					</div>
					
				</div>

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
	<script>
		$(document).on('mousemove', function(e){
		    $('#blob').css({
		       left:  e.pageX-320,
		       top:   e.pageY-50
		    });
		});
	</script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
