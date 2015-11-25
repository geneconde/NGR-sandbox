<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		img.next { display: block; }
		.bg { background-image: url(images/15/bg.jpg); }
		p { color: #000; }
		
		#question { height: 320px; width: 470px; margin:0 auto; display: block; }

		#question img{
		  display:none;
		  position:absolute;
		}
		#question img.active{
		  display:block;
		  margin:0 auto;
		}
		<?php if($language == "es_ES") { ?>
			h1 { font-size:28px; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Checking what you now know... about how animals respond"); ?></h1>
				<br><br>
				<p><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></p>
				<br>
				<p><?php echo _("Click the NEXT button when you are ready."); ?></p>
				<br>
				<div id="question">
					<img src="images/15/0.png" class="active"/>
					<img src="images/15/1.png"/>
					<img src="images/15/2.png" />
					<img src="images/15/3.png" />
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="14.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's check what you now know"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

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
