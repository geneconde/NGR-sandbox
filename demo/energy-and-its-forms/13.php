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
		.wrap { border-left: 1px dashed #848894; border-right: 1px dashed #848894; }
		.bg { background-image: url(images/13/bg.jpg); }
		/*.bg img { width: 95px; display: block; margin: auto; }*/
		h1 { font-size: 35px; color: #feda44; margin-bottom: 20px; }
		p { color: #000;}
		#question { height: 320px; width: 470px; margin:10px auto 0; display: block; }
		#question img{
		  display:none;
		  position:absolute;
		}
		#question img.active{
		  display:block;
		  margin:0 auto;
		}

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 34px !important; }
		<?php endif; ?>
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 40px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Checking what you now know... about energy and its forms"); ?></h1>
				<p><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></p>
				<br>
				<p><?php echo _("Click the NEXT button when you are ready."); ?></p>
					<div id="question">
						<img src="images/13/0.png" class="active"/>
						<img src="images/13/1.png"/>
						<img src="images/13/2.png" />
						<img src="images/13/3.png" />
					</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's check what you now know"); ?></strong></section></section>

	<?php include_once "setlocale.php"; ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/global.js"></script>
	<script>
	$(document).ready(function() {
		setInterval('swapImages()', 1000);
	});
	
	function swapImages(){
		var active = $('#question .active');
		var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	</script>
</body>
</html>
