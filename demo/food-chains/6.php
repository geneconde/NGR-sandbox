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
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
	/*
	$('img.readmore-toggle').hover(function () { this.src = 'images/buttons/readmore-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/readmore-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
	
	/* screen transition */	
	$('img.back-toggle').click(function(){
		if( $('#predation').is(':visible') ) {
			document.location.href= "5.php";
		} else if( $('#decomposer').is(':visible') ) {
			$('#decomposer').fadeOut(function(){ $('img.readmore-toggle').fadeIn(); $('#predation').fadeTo("slow", 1); $('h1').fadeIn(); });
			window.location.hash="";
		} else {
			$('#foodchain').fadeOut(function(){ $('#decomposer').fadeIn(); });		
			$('img.next-toggle').fadeOut(function(){ $('img.readmore-toggle').fadeIn();  });		
			window.location.hash="screen2";
			return false;
		}
	});
	
	$('img.readmore-toggle').click(function(){
		if($('#predation').is(':visible')) {
			$('h1').fadeOut();
			$('#predation').fadeOut(function(){
				$('#decomposer').fadeIn();  
				window.location.hash="#screen2";
			});
		} else if ( $('#decomposer').is(':visible') ) {
			$('#decomposer').fadeOut(function(){ $('#foodchain').fadeIn(); });
			$('img.readmore-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn();});
			window.location.hash="#screen3";
			return false;
		}
	});
	
	
	var screen = window.location.hash.slice(1);
	
	if(screen != "") {
		$('.screens').hide();
			if(screen == 'screen2') {
				$('h1').fadeOut();
				$('#decomposer').fadeIn();
			} else if(screen == 'screen3') {
				$('h1').fadeOut();
				$('#foodchain').fadeIn();
				$('img.readmore-toggle').fadeOut(function(){ 
					$('img.next-toggle').fadeIn();
				});
			} else {
				document.location.href= "5.php";
			}
	}
});
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #3FB147; border-right: 1px dashed #3FB147; padding: 0 2px; }
.bg { background-color:#D7FAD9; background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: indianred; }
h2 { margin:0; padding: 0 10px; font-weight:normal; }

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle {  display:none; }
p { text-align: left; padding-left: 2%; }
#predation,#decomposer,#foodchain { text-align:left;}
#foodchain, #decomposer { padding-top: 15px }
#predation p,#decomposer p { font-size: 28px; margin: 10px 0;}
#foodchain p { font-size: 28px; margin: 3px 0; }
.predation-images, .decomposer-images { margin: 0 auto;}
#predation img { margin-left: 2%; }
#predation-slide { }
#predation-slide IMG { z-index:8; display: none; margin: 0 auto; max-width:100%;}
#predation-slide IMG.active { z-index:10; display: block; }
#predation-slide IMG.last-active { z-index:9; }
.predation-images img { max-width:80%; }

#decomposer { text-align:center;}
#decomposer p{ font-size: 28px; margin: 15px 0; width: 100%;}
.decomposer-images ul { width: 100%; margin:0;padding:0;}
.decomposer-images ul li { float:left; display:inline; list-style-type: none; width:45%; margin: 1.5%;}
.decomposer-images ul li img { max-width:100%; height:auto; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
.decomposer-images span { text-transform: uppercase;}
html[dir="rtl"] p { text-align: right !important; }
html[dir="rtl"] .bg { padding-right: 10px; }

#chain-items { text-align: center; }
#chain-items ul { width: 100%; margin:0;padding:0;}
#chain-items ul li { float:left; display:inline; list-style-type: none; width:11%;}
#chain-items ul li img { max-width:100%; height:auto; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.gray { color:gray; }
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }
#predation img { border-radius: 10px; height: 300px; }
<?php if($language == "es_ES") { ?>
	#foodchain p { font-size:27px; }
<?php } ?>

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}
	#predation p,#decomposer p,#foodchain p { font-size: 23px;}	
	#predation div,#decomposer div,#foodchain div { margin: 0 auto; }
	#predation img { display:block; margin: 5px auto; }
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
	#predation p,#decomposer p,#foodchain p { font-size: 20px;}
	#video { width: 100%;}
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	#predation p,#decomposer p,#foodchain p { font-size: 18px;}
}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }	
	#chain-items ul { width: 70%; }
	#chain-items ul li { float:none; display: list-item;width:70%; margin: 0 auto; text-align:right;}
	#chain-items ul li img { max-width: 30%; vertical-align:middle;}
	#chain-items ul.horizontal {display:none;}
	#chain-items ul.vertical {display:inline;}
	#predation p,#decomposer p,#foodchain p { font-size: 15px; width:100%;}
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
	img.fly,img.fly2 { width:100px; }
	img.slug,img.worm { width: 100px; }
	
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) { }
#chain-items ul { padding-left: 10px; }

.gray { padding: 5px; margin: 5px; }
#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("More big ideas... about food chains"); ?></h1>
			<div id="decomposer" class="hidden">
				<div class="decomposer-images">
					<p><?php echo _("Living things such as mushrooms or molds are known as <span class='green bold'>DECOMPOSERS</span>.");?></p>
					<p><?php echo _("Decomposers are consumers because they feed off the living things that die."); ?></p>
					<ul>
						<li><img class="float fly" src="images/6/mushroom.jpg" alt=""/><br/><span class="purple bold"><?php echo _("mushroom"); ?></span></li>
						<li><img class="float fly2" src="images/6/slug.jpg" alt=""/><br/><span class="red bold"><?php echo _("slug"); ?></span></li>
						<li><img class="float slug" src="images/6/earthworm.jpg" alt=""/><br/><span class="orange bold"><?php echo _("earthworm"); ?></span></li>
						<li><img class="float worm" src="images/6/bacteria.jpg" alt=""/><br/><span class="green bold"><?php echo _("bacteria"); ?></span></li>
					</ul>
				</div>
			</div>
			<div id="predation" class="screens">
				<div class="predation-images" >
					<img src="images/6/predator1.gif" alt="" />
					<img src="images/6/predator2.gif" alt="" />
				</div>
				<p><?php echo _("When animals hunt other animals, this is known as <span class='orange bold'>PREDATION</span>.");?></p>
				<p><?php echo _("The animal being hunted is the <span class='green bold'>PREY</span> and the hunter is the <span class='red bold'>PREDATOR</span>.");?></p>
			</div>
			<div id="foodchain" class="hidden screens">
				<p><?php echo _("The connection between different living things is called a <span class='green bold'>FOOD CHAIN</span>.");?></p>
				<div id="chain-items">
					<ul class="horizontal">
						<li><img src="images/6/plant.jpg"><br/><span class="green bold"><?php echo _("FLOWER");?></span></li>
						<li><img class="horizontal" src="images/6/arrows.gif"><img class="vertical hidden" src="images/6/arrows-up.gif"></li>
						<li><img src="images/6/caterpillar.jpg"><br/><span class="orange bold"><?php echo _("CATERPILLAR");?></span></li>
						<li><img class="horizontal" src="images/6/arrows.gif"><img class="vertical hidden" src="images/6/arrows-up.gif"></li>
						<li><img src="images/6/frog.jpg"><br/><span class="purple bold"><?php echo _("FROG");?></span></li>
						<li><img class="horizontal" src="images/6/arrows.gif"><img class="vertical hidden" src="images/6/arrows-up.gif"></li>
						<li><img src="images/6/rattlesnake.jpg"><br/><span class="red bold"><?php echo _("RATTLESNAKE");?></span></li>
						<li><img class="horizontal" src="images/6/arrows.gif"><img class="vertical hidden" src="images/6/arrows-up.gif"></li>
						<li><img src="images/6/hawk.jpg"><br/><span class="brown bold"><?php echo _("HAWK");?></span></li>
					</ul>
					<ul class="vertical hidden">
						<li><span class="green bold"><?php echo _("FLOWER");?></span> <img src="images/6/plant.jpg"></li>
						<li><img src="images/6/arrows-up.gif"></li>
						<li><span class="orange bold"><?php echo _("CATERPILLAR");?></span> <img src="images/6/caterpillar.jpg"></li>
						<li><img src="images/6/arrows-up.gif"></li>
						<li><span class="purple bold"><?php echo _("FROG");?></span> <img src="images/6/frog.jpg"></li>
						<li><img src="images/6/arrows-up.gif"></li>
						<li><span class="red bold"><?php echo _("RATTLESNAKE");?></span> <img src="images/6/rattlesnake.jpg"></li>
						<li><img src="images/6/arrows-up.gif"></li>
						<li><span class="brown bold"><?php echo _("HAWK");?></span> <img src="images/6/hawk.jpg"></li>
					</ul>
					<div class="clear"></div>
				</div>
				<!-- <img src="images/6/flowers.png"><img src="images/3/arrow.gif"><img src="images/6/caterpillar.png"><img src="images/3/arrow.gif"><img src="images/6/frog.png"><img src="images/3/arrow.gif"><img src="images/6/rattlesnake.png"><img src="images/3/arrow.gif"><img src="images/6/hawk.png">-->
				<p><?php echo _("In this food chain, the flower is the producer. The others are consumers.");?></p>
				<p><?php echo _("We can label each consumer based on its place in the food chain. For example...");?></p>
				<p><?php echo _("the caterpillar is the <span class='orange bold'>primary consumer</span>"); ?> </p>
					<p><?php echo _("<span class='gray small'>(primary means 'first')</span>");?></p>
				<p><?php echo _("the frog is the <span class='purple bold'>secondary consumer</span>");?></p>
					<p><?php echo _("<span class='gray small'>(secondary means 'second')</span>");?></p>
				<p><?php echo _("the snake is the <span class='red bold'>tertiary consumer</span>");?></p>
					<p><?php echo _("<span class='gray small'>(tertiary means 'third')</span>");?></p>
				<p><?php echo _("and the hawk is the <span class='brown bold'>quaternary consumer</span>");?></p>
					<p><?php echo _("<span class='gray small'>(quaternary means 'fourth')</span>");?></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
	<div class="buttons"><a href="7.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
	<div class="buttons" ><a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _("Read more"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Guess what's next?"); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>