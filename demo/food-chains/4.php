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
<!--<script src="scripts/rightclick.js"></script>-->
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
		if( $('#screen1').is(':visible') ) {
			document.location.href= "3.php";
		} else if( $('#screen2').is(':visible') ) {
			$('#screen2').fadeOut(function(){ $('img.readmore-toggle').fadeIn(); $('#screen1').fadeIn(); $('img.back-toggle').fadeIn(); $('h1').fadeIn(); 
				$('img.readmore-toggle').parent().attr('href','#screen2'); 
				$('img.back-toggle').parent().attr('href','');
			});
			$('img.back-toggle').fadeOut();
			removeHash();
		} else {
			$('#screen3').fadeOut(function(){ $('#screen2').fadeIn(); });		
			$('img.next-toggle').fadeOut(function(){ $('img.readmore-toggle').fadeIn();  });
			removeHash();
			addHash('#screen2');
			return false;
		}
	});
	
	$('img.readmore-toggle').click(function(){
		if( $('#screen1').is(':visible') ) { 	
			$('h1').fadeOut();
			$('#screen1').fadeOut(function(){ $('#screen2').fadeIn();  $('img.back-toggle').fadeIn(); $('img.readmore-toggle').parent().attr('href','#screen3'); });
			removeHash();
			addHash('#screen2');
		} else if ( $('#screen2').is(':visible') ) {
			$('h1').fadeOut();
			$('#screen2').fadeOut(function(){ $('#screen3').fadeIn(); $('img.back-toggle').fadeIn();
				$('img.back-toggle').parent().attr('href','#screen2');
			});
			$('img.readmore-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); });
			removeHash();
			addHash('#screen3');
		} 
	});
	
	//back action to go to previous section of previous screen
	var curURL = window.location.toString();
	var oldURL = document.referrer;
	
	var hash = "";
	if (curURL.indexOf("#screen3") != -1 || oldURL.indexOf("5.php") != -1) {
		$('h1').fadeOut();
		$('#screen1').fadeOut();
		$('#screen3').fadeIn(); $('img.back-toggle').fadeIn();
		$('img.readmore-toggle').fadeOut();
		$('img.next-toggle').fadeIn();
		removeHash();
		addHash('#screen3');
	} else if (curURL.indexOf("#screen2") != -1) {
		$('#screen1').fadeOut(function(){ $('#screen2').fadeIn();  $('img.back-toggle').fadeIn(); $('img.readmore-toggle').parent().attr('href','#screen3'); });
		removeHash();
		addHash('#screen2');
	}
	
	setInterval('swapImages()', 4200);
	setInterval('swapImages2()', 3000);
});

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
	function swapImages2(){
	   if($('#third').is(':visible')) {
			$('#third').fadeOut(500, function(){
			$('#first').fadeIn(1000);
		}); 
		
	  } else if ($('#second').is(':visible')){
		$('#second').fadeOut(500, function(){
			$('#third').fadeIn(1000);
		}); 
	  } else if ($('#first').is(':visible')){
		$('#first').fadeOut(500, function(){
			$('#second').fadeIn(1000);
		}); 
	  }
	  
	}
</script>
<style>
html { background-color: #E9F5FC; overflow: hidden; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #c4a1f8; border-right: 1px dashed #c4a1f8; padding: 0 2px; }
.bg { background-color:#EBDFFC;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: hotpink; }
h2 { margin:0; padding: 0 10px; font-weight:normal; }

#screen1 { text-align: left; background: url('images/4/green.png') no-repeat center top; max-width: 100%; margin: 0 auto;}
#screen2 { padding-top: 2%; display: none; text-align: left;background: url('images/4/blue.png') no-repeat center top; max-width: 100%; margin: 0 auto;}
#screen3 { display: none; text-align: left; max-width: 100%; margin: 0 auto;}
#screen1 div,#screen2 div,#screen3 div { max-width: 95%; margin: 0 auto;}
#screen2 div { padding: 10px 0; }
#screen3 div.vores { max-width:85%;}
#screen1 p,#screen2 p, #screen3 p { font-size: 28px;}
#screen3 p { display: inline; }
#foodies-wrapper {margin-right: 20px !important; }
.foodies { padding: 10px; }
#screen2 img, #screen3 img { -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; }
#screen1 img.foodies,#screen2 img.producers { float: left; vertical-align:top; }
#screen1 img.animals,#screen2 img.consumers { float: right; vertical-align:top;  }
html[dir="rtl"] p { text-align: right !important; }
html[dir="rtl"] .pic img { margin-left: 15px !important; }

#screen2 img.consumers { margin-left: 2%; }
.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle {  display:none; }
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.bold { font-weight: bold; }

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	#screen1 p,#screen2 p,#screen3 p { font-size: 23px;}
	#screen1 div,#screen2 div,#screen3 div { max-width: 70%;}
	#screen3 div.vores ul li img { max-width: 90%; }
	
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}
	#screen1 img {float:center !important;}
	div.pic {width:55% !important;}		
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
	#screen1 div,#screen2 div ,#screen3 div { margin: 0 auto;	}
	#screen1 p,#screen2 p,#screen3 p { font-size: 20px;}
	#screen1 img {float:center !important;}
	div.pic {width:55% !important;}		
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	#screen1 p,#screen2 p,#screen3 p { font-size: 18px;}
	#screen1 img.foodies,#screen2 img.producers { width: 120px;}
	#screen1 img.animals,#screen2 img.consumers { width: 180px;}
}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }	
	.buttons { position: relative; text-align: center; top:5px;}	
	#screen3 div { margin: 0 auto; max-width: 100%;}
	#screen1 p,#screen2 p,#screen3 p { font-size: 15px; width:100%;}
}

@media screen and (max-width:400px) { 
	h1 { width: 250px; }
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) {
	#screen1 img.foodies,#screen1 img.animals,#screen2 img.consumers,#screen2 img.producers { float: center !important; vertical-align:top;  }

	#screen2 img.producers,  #screen2 img.consumers{ display: block; margin: 0 auto; }
	
}

.vores { text-align: center; padding-top:10px !important;}
.vores ul { width: 100%; margin:0;padding:0;}
.vores ul li { float:left; display:inline; list-style-type: none; width:20%;}
.vores ul li img { max-width:100%; height:auto;}
.producers { margin-right: 2%; }
#first, #third { float: left; }
#second { float: right; }
#second, #third { display: none; }
#second-pic, #third-pic { display: none; }
.pic img { border-radius: 10px; padding: 0px; }

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Reviewing big ideas... about food chains"); ?></h1>
			<div id="screen1"> 
				<div>
					<div id="foodies-wrapper">
						<img class="foodies" id="first" src="images/4/a.png">
						<img class="foodies" id="second" src="images/4/b.png">
						<img class="foodies" id="third" src="images/4/c.png">
					</div>	
					<p><?php echo _("All living things are connected by energy. As we eat our hamburger, chicken and fish, it is important to know we would not be able to eat these food if plants were not around."); ?></p>
					<div class="pic">
						<img class="animals" id="first-pic" src="images/4/1.jpg">
						<img class="animals" id="second-pic" src="images/4/2.jpg">
						<img class="animals" id="third-pic" src="images/4/3.jpg">
					</div>
					<p><?php echo _("Plants get <span class='red bold'>energy</span> from the <span class='orange bold'>sun</span> and they pass that energy through the food that many <span class='green bold'>animals</span> including cows, chicken, and fish eat. <span class='purple bold'>Humans</span> get some of their energy from eating plants and animals."); ?></p>
					<p><?php echo _("Biologists study how different living things are connected. Living things like plants, horses, lions, and humans must have energy to carry out the functions of life.");?></p>
				</div>
			</div>
			<div id="screen2">
				<div>
					<img class="producers" src="images/4/producers.jpg">
					<p><?php echo _("Plants get their energy directly from the sun to make their own food.");?></p>
					<p><?php echo _("They are called <span class='orange bold'>PRODUCERS</span>.");?></p>
					<div class="clear"></div>
					<img class="consumers" src="images/4/consumers.jpg">
					<p><?php echo _("Other living things such as animals cannot use energy directly from the sun.");?></p>
					<p><?php echo _("They must get their energy from other living things.");?></p>
					<p><?php echo _("They are called <span class='green bold'>CONSUMERS</span>.");?></p>
				</div>
			</div>
			<div id="screen3">
				<div>
					<div class="vores">
						<ul>
							<li><img src="images/4/turtle.jpg"><br/><span class="green bold"><?php echo _("turtle");?></span></li>
							<li><img src="images/4/panda.jpg"><br/><span class="orange bold"><?php echo _("panda");?></span></li>
							<li><img src="images/4/goat.jpg"><br/><span class="purple bold"><?php echo _("goat");?></span></li>
							<li><img src="images/4/squirrel.jpg"><br/><span class="brown bold"><?php echo _("squirrel");?></span></li>
							<li><img src="images/4/koala.jpg"><br/><span class="brown bold"><?php echo _("koala");?></span></li>
						</ul>
						<div class="clear"></div>
					</div>
					<p><?php echo _("The consumers that live only by eating producers are called <span class='orange bold'>HERBIVORES</span>. A turtle and a panda are examples of a herbivore.");?></p>
					<div class="clear"></div>
					<div class="vores">
						<ul>
							<li><img src="images/4/snake.jpg"><br/><span class="green bold"><?php echo _("snake");?></span></li>
							<li><img src="images/4/heron.jpg"><br/><span class="brown bold"><?php echo _("heron");?></span></li>
							<li><img src="images/4/lion.jpg"><br/><span class="orange bold"><?php echo _("lion");?></span></li>
							<li><img src="images/4/bird.jpg"><br/><span class="purple bold"><?php echo _("bird");?></span></li>
							<li><img src="images/4/crocodile.jpg"><br/><span class="brown bold"><?php echo _("crocodile");?></span></li>
						</ul>
						<div class="clear"></div>
					</div>
					<p><?php echo _("Animals that only eat other animals are called <span class='green bold'>CARNIVORES</span>. A tiger and a shark are examples of a carnivore."); ?></p>
					<div class="clear"></div>
					<div class="vores">
						<ul>
							<li><img src="images/4/whale.jpg"><br/><span class="green bold"><?php echo _("whale");?></span></li>
							<li><img src="images/4/human.jpg"><br/><span class="brown bold"><?php echo _("human");?></span></li>
							<li><img src="images/4/bear.jpg"><br/><span class="orange bold"><?php echo _("bear");?></span></li>
							<li><img src="images/4/raccoon.jpg"><br/><span class="orange bold"><?php echo _("raccoon");?></span></li>
							<li><img src="images/4/dog.jpg"><br/><span class="orange bold"><?php echo _("dog");?></span></li>
						</ul>
						<div class="clear"></div>
					</div>
					<p><?php echo _("If something can eat both plants and animals, they are called <span class='brown bold'>OMNIVORES</span>. Humans are one example of an omnivore."); ?></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
	<div class="buttons" ><a href="#screen2" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _("Read more"); ?>"></a></div>
	<div class="buttons" ><a href="5.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Wait for it... wait for it..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
