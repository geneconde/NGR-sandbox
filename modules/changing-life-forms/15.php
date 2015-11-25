<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(15, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { z-index: 1 !important; }
/* h1 { color: #000; } */
p { text-align: center; }
.wrap { border-color: #5cb800; }
.bg { background-image: url(images/13/bg.jpg); }

#question { height: 320px; width: 470px; margin:0 auto; display: block; }
#question img { display: none; position: absolute; }
#question img.active { display: block; margin: 0 auto; }
html[dir="rtl_es"] .bg h1 { font-size: 29px; }
html[dir="rtl"] p { text-align: center; }

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
				<div>
					<h1><?php echo _("Checking what you now know... about changing life forms"); ?></h1><br>
					<p><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></p>
					<p><?php echo _("Click the NEXT button when you are ready."); ?></p><br>

					<div id="question">
						<img src="images/13/0.png" class="active">
						<img src="images/13/1.png">
						<img src="images/13/2.png">
						<img src="images/13/3.png">
					</div>
				</div>
		</div>
	</div>

	<div id="buttons">
		<a href="14.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Let's check what you now know"); ?></strong></section></section>

	<script>
	$(document).ready(function() { setInterval('swapImages()', 1000); });
	
	function swapImages(){
		var active = $('#question .active');
		var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
