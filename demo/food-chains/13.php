<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'food-chains';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Food Chains"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	/*
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	*/
});

</script>
<style> 
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #c4a1f8; border-right: 1px dashed #c4a1f8; padding: 0 2px; }
.bg { background-color:#E9DCFC;   background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; text-align: center;}

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: hotpink; text-align: left;}
h2 { margin:0; padding: 0 10px; font-weight:normal; font-size: 24px; margin: 40px 0px;}
html[dir="rtl"] h1 { text-align: right !important; }

img { margin: 10px 0; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}

#question { height: 320px; width: 470px; margin:0 auto; display: block; }

#question img{
  display:none;
  position:absolute;
}
#question img.active{
  display:block;
  margin:0 auto;
}

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }

@media screen and (max-width:900px) {
	h1 { font-size: 26px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 20px; }
	h2 { font-size: 18px; }	
}

@media screen and (max-width:577px) {
	h2 { font-size: 15px; padding: 10px; }
}

@media screen and (max-width:480px) {
	h1 { font-size: 16px; }	
	.buttons { position: relative; top:5px; text-align: center;}
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
}

@media screen and (max-height:627px) { 
	.buttons { position: relative; top:5px; text-align: center;}
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) { 
	.buttons { position: relative; top:5px; text-align: center;}
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Checking what you now know... about food chains"); ?></h1>
			<h2><?php echo _("Answering the following six (6) quiz questions will give you an idea of what you now know and what you still need to study."); ?></h2>
			<h2><?php echo _("Click the NEXT button when you are ready."); ?></h2>
			<div id="question">
				<img src="images/13/0.png" class="active"/>
				<img src="images/13/1.png"/>
				<img src="images/13/2.png" />
				<img src="images/13/3.png" />
			</div>	
			<div class="clear"></div>
		</div>
	</div>
	<div class="buttons-back" ><a href="12.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
	<div class="buttons"><a href="14.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
	<div class="clear"></div>
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
