<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/15/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; text-align: center; }
h1 { color: #951f25; font-size: 34px; }
.wrap { border-left: 1px dashed #E0956B; border-right: 1px dashed #E0956B; }
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
	h1 { font-size:26px; }
<?php } ?>
html[dir="rtl"] p { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Checking what you now know... about being built to survive"); ?></h1><br><br>
				<p><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></p>
				<br>
				<p><?php echo _("Click the NEXT button when you are ready."); ?></p>
					
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
	<?php include("setlocale.php"); ?>
</body>
</html>
