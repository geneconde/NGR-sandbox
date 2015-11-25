<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
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
.bg { background-image: url('images/13/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; text-align: center; }
h1 { color: rgb(243, 207, 131); margin-left: 20px; font-size: 33px; }
h2 { color: #fff; font-weight: normal; }
#question { height: 320px; width: 470px; margin:0 auto; display: block; }

#question img{
  display:none;
  position:absolute;
}
#question img.active{
  display:block;
  margin:0 auto;
}
html[dir="rtl"] h1 { padding:10px 10px 0; }
<?php if($language == 'es_ES') { ?>
	h1 { font-size:32px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="rtl"] h1 { padding: 40px 0 10px 0; }
}
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Checking what you now know... about the properties of matter"); ?></h1><br><br>
			<div>
				<h2><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></h2>
				<br>
				<h2><?php echo _("Click the NEXT button when you are ready."); ?></h2>
				
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
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
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
