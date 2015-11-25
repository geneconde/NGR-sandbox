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
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
var sliderun = 0;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
	/*
	$('img.watch-toggle').hover(function () { this.src = 'images/buttons/watchvideo-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/watchvideo-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
	
	/* food web animation */
	sliderun = setInterval( "slideSwitch()", 800 );
});

/* food web animation function */
function slideSwitch() {
    var $active = $('#foodweb IMG.active');
    var $next = $active.next();    
    
	var $active = $('#foodweb IMG.active');

    if ( $active.length == 0 ) $active = $('#foodweb IMG:last');
	
	if ($active.next().length) {
		$next = $active.next();
		$active.addClass('last-active');
		$next.addClass('active');
		$active.removeClass('active');
	} else {
		clearInterval(sliderun);
		$next = $('#foodweb IMG:last');
		$next.addClass('active');
	}
}
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #5FBAEB; border-right: 1px dashed #5FBAEB; padding: 0 2px; }
.bg { background-color:#D6ECFA;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: indianred; }
h2 { margin:0; padding: 0 13px; font-weight:normal; font-size:23px;}

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }

#foodweb,#box { float:left; width: 50%;text-align: left; margin: 0; }
#foodweb img { z-index:8; display: none; margin: 0 auto; max-width:100%;eight: auto;}
#foodweb img.active { z-index:10; display: block; }
#foodweb img.last-active { z-index:9; }
#foodweb h2 { text-align: center; }

.orange { color: orange; }
.purple { color: purple; }
.red { color: red; }
.green { color: green; }
.pink { color: #F14970;}
.bold { font-weight: bold; }
.hidden { display: none; }

@media screen and (max-width:900px) {
 h1 { font-size: 30px; }
 #foodchain p { font-size: 23px;} 
 .buttons { position: relative; float: right; top:5px;}
 .buttons-back { position: relative; float: left; top:5px;}
}

@media screen and (max-width:768px) {

 h1 { font-size: 24px; }
 h2 { font-size: 18px; }
 #foodchain p { font-size: 20px;} 
 #video { width: 100%;}
}

@media screen and (max-width:577px) {

 h1 { font-size: 20px; }
 h2 { font-size: 15px; padding: 10px; }
 #foodchain p { font-size: 18px;}
}

@media screen and (max-width:480px) {
 h1 { font-size: 20px; } 
 #chain-items ul { width: 70%; }
 #chain-items ul li { float:none; display: list-item;width:70%; margin: 0 auto;}
 #chain-items ul li img { max-width: 30%; vertical-align:middle;}
 #chain-items ul.horizontal {display:none;}
 #chain-items ul.vertical {display:inline;}
}

@media screen and (max-width:400px) {
 h1 { width: 250px; }
}

@media screen and (max-height:627px) {
 .wrap { height:auto; }
}

@media screen and (orientation:portrait) {
 #foodweb,#box { width: 94%} 
}

html[dir=rtl] #box { text-align: right; }

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("More big ideas... about food chains"); ?></span></h1>
			<div id="box">
				<h2><?php echo _("Many times this chain does not fit into a neat line."); ?></h2><br/>
				<h2><?php echo _("<span class='pink'><em>For example:</em></span> a snake is not the only thing that eats a mouse, and grass gives energy to many insects and small animals on earth."); ?></h2><br/>
				<h2><?php echo _("When someone wants to show all of these connections among consumers and producers, they use a <span class='red bold'>food web</span>. A food web shows how energy moves through the living things in a <span class='green bold'>habitat</span> - the environment in which the living things live."); ?></h2>
			</div>
			<div id="foodweb">
				<h2><span class="bold purple"><?php echo _("Example of a Food Web"); ?></span></h2>
				<img src="images/8/1.png" class="active" />
				<img src="images/8/2.png" />
				<img src="images/8/3.png" />
				<img src="images/8/4.png" />
				<img src="images/8/5.png" />
				<img src="images/8/6.png" />
				<img src="images/8/7.png" />
				<img src="images/8/8.png" />
				<img src="images/8/9.png" />
				<img src="images/8/10.png" />
				<img src="images/8/11.png" />
				<img src="images/8/12.png" />
				<img src="images/8/13.png" />
				<img src="images/8/14.png" />
				<img src="images/8/15.png" />
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="7.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="9.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Spiders are weaving the webs!"); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
