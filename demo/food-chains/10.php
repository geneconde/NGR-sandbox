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
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
var answered = 1;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	/*
	$('img.readmore-toggle').hover(function () { this.src = 'images/buttons/readmore-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/readmore-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.playgame-toggle').hover(function () { this.src = 'images/buttons/playgame-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/playgame-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
	
	/* screen transition */	
	$('img.readmore-toggle').click(function(){
		$('#background').fadeOut(function(){ $('#problem').fadeIn(); $('.buttons-back').fadeIn(); $('.buttons-mid').fadeIn(); });
		$('h1').fadeOut();
		$('img.readmore-toggle').fadeOut(function(){  $('img.next-toggle').fadeIn(); });
		removeHash();
		addHash('#problem');
	});
	
	$('img.next-toggle').click(function(){
		if (!$('#probanswer').val().length) {
			alert("<?php echo _("Please type your answer."); ?>");
		} else {
			document.location.href= "11.php";
			if (answered == 0) {
				save();
				answered = 1;
			}
		}
	});
	$('img.back-toggle').click(function(){
		if( $('#background').is(':visible') ) {
			document.location.href= "9.php";
		} else {
			$('#problem').hide(); 
			$('#background').fadeIn();
			$('.buttons-back').fadeIn(); $('.buttons-mid').fadeOut(); 
			$('img.readmore-toggle').fadeIn(function(){  $('img.next-toggle').fadeOut(); });
			$('h1').fadeIn();
			removeHash();
		}
	});
	
	/* input numbers only */
	$(".num").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
            (event.keyCode == 65 && event.ctrlKey === true) || 
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 return;
        }
        else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
	
	//back action to go to previous section of previous screen
	var curURL = window.location.toString();
	var oldURL = document.referrer;

	var hash = "";
	if (curURL.indexOf("#problem") != -1 || oldURL.indexOf("11.php") != -1) {
		$('#background').fadeOut(function(){ $('#problem').fadeIn(); $('.buttons-back').fadeIn(); $('.buttons-mid').fadeIn(); });
		$('h1').fadeOut();
		$('img.readmore-toggle').fadeOut(function(){  $('img.next-toggle').fadeIn(); });
		addHash('#problem');
	}
	
	setInterval('swapImages()', 4000);
});

function save() {
	var answer = $('textarea#probanswer').val();
	saveMeta('food-chain',answer);
}

	function swapImages(){
	  if($('#third-pic').is(':visible')) {
		$('#third-pic').fadeOut(1500, function(){
			$('#first-pic').fadeIn(1500);
		}); 
		
	  } else if ($('#second-pic').is(':visible')){
		$('#second-pic').fadeOut(1500, function(){
			$('#third-pic').fadeIn(1500);
		}); 
	  } else if ($('#first-pic').is(':visible')){
		$('#first-pic').fadeOut(1500, function(){
			$('#second-pic').fadeIn(1500);
		}); 
	  }
	}
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #B3B4C8; border-right: 1px dashed #B3B4C8; padding: 0 2px; }
.bg { background-color:#DBDBFF;   background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 32px; padding: 10px; font-weight:bold; color: coral; }
h2,span.equals { margin:0; padding: 0 10px; font-weight:normal; font-size:23px;}
h2 img { max-width: 100%;}
html[dir="rtl"] h1 { font-size: 30px !important; }
html[dir="rtl"] p { text-align: right !important; }

.play { width: 95px; margin: 0 auto;}
.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
img.next-toggle, img.play-toggle, .buttons-mid  {  display:none; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }

#background, #problem { text-align: center; }
#picture{ text-align: center; width: 100%; }
#picture img { z-index:8; display: none; margin: 0 auto; max-width:100%;eight: auto;}
#picture img.active { z-index:10; display: block; }
#picture img.last-active { z-index:9; }

#problem { background: url('images/10/pink.png') no-repeat center top; max-width: 100%; margin: 0 auto;}

.col { background: #FFF2D2; margin: 10px auto; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; padding:10px; width: 600px; max-width: 100%; padding: 20px; height: 300px;}
.col img { vertical-align:middle;}

textarea { height: 100%; width: 100%;  -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; padding: 10px; font-size: 23px; font-family:'PlaytimeRegular'}
.orange { color: orange; }
.green  { color: darkgreen; }
.darkpink {color:#FF0000; }
.bold { font-weight: bold; }
.hidden { display: none; }
.clear { clear: float; }

@media screen and (max-width:900px) {
	h1 { font-size: 26px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
	.pic img { width: 98%; }
}

@media screen and (max-width:768px) {
	h1 { font-size: 20px; }
	h2,span.equals { font-size: 18px; }
	.buttons { position: relative; top:5px; text-align: center;}
	
}

@media screen and (max-width:577px) {
	h1 { font-size: 16px; }
	h2,span.equals { font-size: 15px; padding: 10px; }
}

@media screen and (max-width:480px) {
	
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) {
	.buttons { position: relative; top:5px; text-align: center;}
}
#second-pic, #third-pic { display: none; }
.pic img { border-radius: 10px; }

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Using what you know... about food chains... to solve a problem"); ?></h1>
			<div id="background">
				<h2><span class="orange bold"><?php echo _("The Background"); ?></span><br/><?php echo _("Nature maintains a balance among the plants and animals that make up the food chains in an ecosystem."); ?></h2><br/>
				<div class="pic">
					<img class="animals" id="first-pic" src="images/10/1.jpg">
					<img class="animals" id="second-pic" src="images/10/2.jpg">
					<img class="animals" id="third-pic" src="images/10/3.jpg">
				</div>
				
				<h2><span class="pink"><em><?php echo _("For example:"); ?></em></span><br/><?php echo _("If the population of a predator gets too large, there will soon not be enough of its prey left to feed all the predators. So some of the predators will either die or must move to another location to maintain a balance."); ?></h2><br/>
				<br/>
			</div>
			<div id="problem" class="hidden">
				<br/>
				<h2><span class="darkpink bold"><?php echo _("Your Assignment"); ?></span><br/><?php echo _("You are the park ecologist in your town's new park. As the park ecologist, you are in charge of keeping the population of rabbits and fox in balance. You will need to decide how many rabbits and fox to put in the park to start."); ?><h2></br>
				<h2><?php echo _("How would you decide how many rabbits and fox you would place in the park. In the text box provided, describe the things you would have to consider so that there are enough rabbits to maintain both a stable rabbit and fox population."); ?></h2>
				<article class="col">
					<textarea id="probanswer" name="probanswer" row="20" col="40" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
				</article>
				
				<!--  <div class="buttons-mid" >
				<ul id="rb-grid" class="rb-grid clearfix">
					<li>
						<div><a href="#" class="watch-video"><img class="playgame-toggle" src="images/buttons/playgame-<?php echo $user->getGender(); ?>.png"></a></div>
						<div class="rb-overlay">
							<span class="rb-close"><button class="md-close"><?php echo _("Close me!"); ?></button></span>
							<div class="rb-week" style="background: url(images/others/overlay.png);">
								<div id="watch-me" class="d-none" style="width:100%;height:100%">
									<iframe id="video" width="50%" height="63%" src="http://puzzling.caret.cam.ac.uk/flash/foodchain.swf" frameborder="0" allowfullscreen></iframe>
									<br/>This game is taken from CARET's Brainteasers & Puzzles!</a>
								</div>								
							</div>
						</div>
					</li>
				</ul>
				</div> -->
				
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="#" class="wiggle" ><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
			<div class="buttons" ><a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _("Read more"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Hunting to survive..."); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
