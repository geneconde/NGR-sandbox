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
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/clouds.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jqfloat.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	//float items
	$('.allblue').jqFloat({ speed: 2000, width:10, height:10 });
	$('.shark img').jqFloat({ speed: 2000, width:50, height:50 });
	$('.f1 img').jqFloat({ speed: 2000, width:20, height:20 });
	$('.f2 img').jqFloat({ speed: 2000, width:0, height:50 });
	$('.f3 img').jqFloat({ speed: 2000, width:50, height:50 });
	$('.f4 img').jqFloat({ speed: 2000, width:50, height:50 });
	
	//buttons
	/*
	$('img.watch-toggle').hover(function () { this.src = 'images/buttons/watchvideo-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/watchvideo-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
});
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; }

h1 {padding:10px;margin:0;font-weight: bold;font-size: 50px;color: #001D3A;text-transform: uppercase;position: relative; z-index:2; }
h2 { font-weight: normal; font-size: 18px; font-style: italic; margin-left:30px; margin-top: 40px; text-align: left; color:#5F623D; }
a { text-decoration: none; }

.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #009FE8; border-right: 1px dashed #009FE8; padding: 0 2px; overflow:hidden;}
.bg { background-image: url('images/2/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

#clouds { position:absolute; z-index:1; width:100%; height:240px; left:0; top:0; background:url('images/2/cloud.png') repeat-x scroll left top;height:82px; 
-webkit-animation: moveclouds 20s linear infinite; -moz-animation: moveclouds 20s linear infinite; -o-animation: moveclouds 20s linear infinite;
}

.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }

html[dir="rtl"] #thinking { left: 0 !important; right: auto; }
html[dir="rtl"] .shark > div[style] { left: 10px !important; }

#thinking { position:absolute; z-index:3;width:320px;height:330px;top:0;right:0;background-image:url('images/2/thinking-bubble.png'); background-size: 100% 100%; text-align:center;}
#thinking p { width: 90%; margin: 0 auto;color: #001D3A; font-size:16px;}

#fishes { background-size: 70% 70%; width:400px;height:340px;position:absolute;bottom:20px; }
#fishes .allblue { display: none;  width:100%; }
#fishes2 { border: 1px solid pink; position: absolute; bottom:60%;left:5%;z-index:11;}
#fishes2 img { position:absolute;}
#fishes2 .arrow1 img { left: 100px; top: 100px;}
#fishes2 .f1 img { left: 250px; top: 150px;}
#fishes2 .f2 img { left: 230px; top: 120px;}
#fishes2 .arrow2 img { left: 400px; top: 150px;}
#fishes2 .f3 img { left: 530px; top: 130px;}
#fishes2 .arrow3 img { left: 600px; top: 80px;}
#fishes2 .f4 img { left: 700px; top: 50px;}

.bl { position: absolute;left:5%; bottom:50%;}
.br { position: absolute;right:12%; bottom:51%;}
.bm { position: absolute; bottom: 60%; left:48%;}
.square { font-size:14px;color: #C5E8FA;text-align: center; padding: 10px; position: absolute; top:50%;right:2%;width:200px; z-index:10;-moz-border-radius: 15px;  border-radius: 15px;background: -moz-linear-gradient(top,  rgba(0,93,172,0.78) 0%, rgba(0,114,191,0.51) 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,93,172,0.78)), color-stop(100%,rgba(0,114,191,0.51))); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* IE10+ */ background: linear-gradient(to bottom,  rgba(0,93,172,0.78) 0%,rgba(0,114,191,0.51) 100%); /* W3C */ filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c7005dac', endColorstr='#820072bf',GradientType=0 ); /* IE6-9 */ }
.square img { margin-top: 10px;}

.buttons { position: absolute; bottom: 2%; right: 2%; }
.hidden { display: none; }
#rb-grid { height: 79px; }

@media screen and (max-width:900px) {
	.wrap { border: 0; padding: 0; }
	#fishes2 .arrow2 img { left: 350px; }
	#fishes2 .f3 img { left: 480px; top: 130px;}
	#fishes2 .arrow3 img { left: 560px; top: 80px;}
	#fishes2 .f4 img { left: 650px; top: 50px;}
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	html,body { height:100%; width:100%; padding:0; margin:0;}
	h1 { font-size: 40px;}
	h2 { font-size: 14px;}
	.wrap { border: 0; padding: 0; }
	.bg {  background-image: url('images/2/bg.png'); width:100%; height:100%; background-size: cover; -moz-background-size: cover; background-position: center; }
	#thinking { width: 280px; height: 297px; background-size: 100% 100%; top:0; }
	#thinking p { font-size: 14px;}	
	#fishes2 .arrow1 img { left: 40px; top: 100px;}
	#fishes2 .f1 img { left: 100px; top: 170px;}
	#fishes2 .f2 img { left: 80px; top: 140px;}
	#fishes2 .arrow2 img { left: 250px; top: 150px;}
	#fishes2 .f3 img { left: 370px; top: 130px;}
	#fishes2 .arrow3 img { left: 430px; top: 80px;}
	#fishes2 .f4 img { left: 480px; top: 50px;}
	.square { margin-top: -6%;}
	#video { width: 100%;}
}

@media screen and (max-width:577px) {	
	h1 { font-size: 30px;}
	h2 { margin-top:30px; width:80%;}
	#thinking p { margin-top: -5px;}
	#fishes { background: none; }
	#fishes .allblue { display: block; margin-top: 0px;}
	#fishes2 { display:none;}
	.square { font-size:12px;top: 38%;width: 140px; margin-top: 0;}
}

@media screen and (max-width:480px) {	
	h1 { font-size: 25px;}
	h2 { font-size: 13px; margin-top:10px; width:70%;}
	#thinking { width: 220px; height: 218px; background-size: 100% 100%; top:0; }
	#thinking p { font-size: 11px; margin-top: -5px;}
	.bl { display:none;}
	.square {  top:180px; font-size:11px;width: 130px;}
	.watch-toggle { width: 50%;}
	#rb-grid { height: 50px;}
	#fishes { width: 100%; bottom:3%	; }
}

@media screen and (max-width:400px) {
	h2 { width: 100%; margin: 0 10px;}
	#thinking { background-image:none; float:left; position:relative;z-index:4; width:90%;height:auto;text-align:left;}
	#thinking p { width: 100%; margin: 0 10px;}
	.square {  top:140px;}
	.bm { display:none;}
}

@media screen and (orientation:portrait) { 
	.wrap {height:90%;}
	.bg {height: 100%;}
	h1 {text-align: center;}
	.arrow1 img {left:65px;top:100px;}
	.f1 div {top:170px !important; left:170px !important;}
	.f2 div {top:140px !important; left:130px !important;}
	#fishes2 .arrow2 img {left:275px; top:190px;}
	.f3 div:first-child {top:161px !important; left:406px !important;}
	.f3 div:last-child {top:170px !important; left:390px !important;}
	#fishes2 .arrow3 img {left:480px;top:80px;}
	.f4 div {top:55px !important; left:570px !important;}
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<h1><?php echo _("Food Chains"); ?></h1>
			<div id="clouds"></div>
			<div id="thinking">
				<h2><?php echo _("Thinking..."); ?><br/><?php echo _("About Where Things Get Their Food"); ?></h2>
				<p><?php echo _("People all over the world eat several times a day. Food gives us energy! If people did not eat, they would not be able to walk, dance, play or even stay alive. Every animal needs energy from food. Where does food come from?"); ?></p>
			</div>
			<div id="fishes2">
				<div class="shark"><img src="images/2/shark.png"></div>
				<div class="arrow1"><img src="images/2/arrow1.png"></div>
				<div class="f1"><img src="images/2/fishes1.png"></div>
				<div class="f2"><img src="images/2/fishes2.png"></div>
				<div class="arrow2"><img src="images/2/arrow2.png"></div>
				<div class="f3"><img src="images/2/fishes-left.png"><img src="images/2/fishes-right.png"></div>
				<div class="arrow3"><img src="images/2/arrow3.png"></div>
				<div class="f4" style=""><img src="images/2/fishes3.png"></div>
			</div>
			<div id="fishes">
				<img class="allblue" src="images/2/fishesb.png">
				<div id="bubbles">
					<img class="bl" src="images/2/bubble2.gif">
					<img class="bm" src="images/2/bubble1.gif">
					<img class="br" src="images/2/bubble3.gif">
				</div>
			</div>
			<!--
			<div class="square">
				Large animals like sharks get their food from small fish, but where do the smallest fish get their energy? Where do living things much smaller than fish get their food?
				<div style="position: relative; z-index: 999999;">
					<ul id="rb-grid" class="rb-grid clearfix">
					<li>
						<div><a href="#" class="button watch-video"><img class="watch-toggle" src="images/buttons/watchvideo-<?php echo $gender; ?>.png"></a>
						</div>
						<div class="rb-overlay">
							<span class="rb-close"><span class="close-btn">close</span></span>
							<div class="rb-week" style="background: url(images/others/overlay.png);">
								<div id="watch-me" class="d-none" style="width:80%;height:80%">
									<iframe id="video" width="80%" height="80%" style="height:100% !important" src="http://www.youtube.com/embed/4fYLEhqYGIU?wmode=transparent" frameborder="0" allowfullscreen></iframe>
								</div>								
							</div>
						</div>
					</li>
					</ul>
				</div>
			</div>
			-->
		</div>
	</div>
	<div class="buttons-back">
		<a href="1.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a>
	</div>
	<div class="buttons">
		<a href="3.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>