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
<script src="scripts/save-answer.js"></script>
<!--<script src="scripts/rightclick.js"></script>-->
<script>
var herbitoggled = 0;
var carnitoggled = 0;
var omnitoggled = 0;
var dinotoggled = 0;
var answered = 1;
var answer = null;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('a.corn-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/corn-b.png' ? 'images/16/corn-a.png' : 'images/16/corn-b.png'; }); return false; });
	$('a.mouse-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/mouse-b.png' ? 'images/16/mouse-a.png' : 'images/16/mouse-b.png'; }); return false; });
	$('a.snake-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/snake-b.png' ? 'images/16/snake-a.png' : 'images/16/snake-b.png'; }); return false; });
	$('a.owl-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/owl-b.png' ? 'images/16/owl-a.png' : 'images/16/owl-b.png'; }); return false; });
	
	// $('img.check-toggle').hover(function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; });
	// $('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	// $('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	
	$('img.back-toggle').click(function(){
		if( $('#foodchain').is(':visible') ) {
			document.location.href= "16.php";
		} else {
			$('#answers').fadeOut(function(){ $('#foodchain').fadeIn();   $('h1 span').fadeOut(); });
			$('img.next-toggle').fadeOut(function(){  $('img.check-toggle').fadeIn(); });
		}		
	});
	
	/* screen transition */	
	$('img.check-toggle').click(function(){
		if ( omnitoggled == 0 && herbitoggled == 0 && dinotoggled == 0 && carnitoggled == 0 ){
			alert('<?php echo _("Please select your answer."); ?>'); 
		} else {
			$('#foodchain').fadeOut(function(){ $('#answers').fadeIn();   $('h1 span').fadeIn(); });
			$('img.back-toggle').fadeIn(); 
			$('img.check-toggle').fadeOut(function(){
				$('img.next-toggle').fadeIn(); 
				if (omnitoggled == 1) {
					answer = "omnivores";
					$('#rightorwrong').text('<?php echo _("You got it right!"); ?>');
					$('.imganswer').attr("src","images/17/omnivores.png");
					$('.textanswer').text('<?php echo _("OMNIVORES"); ?>');
					textstr = '<?php echo _("Animals that feed on plants and animals are known as Omnivores."); ?>';
				} else {
					var textstr = '';
					if (carnitoggled == 1) {
						answer = "carnivores";
						$('#rightorwrong').text('<?php echo _("Nope!"); ?>');
						textstr = '<?php echo _("A carnivore is an animal that only eats other animals, not plants."); ?>';
						$('.imganswer').attr("src","images/17/carnivores.png");
						$('.textanswer').text('<?php echo _("CARNIVORES"); ?>');
					} else if (herbitoggled == 1) {
						answer = "herbivores";
						$('#rightorwrong').text('<?php echo _("Sorry."); ?>');
						textstr = '<?php echo _("A herbivore is an animal that only eat plants, not other animals."); ?>';
						$('.imganswer').attr("src","images/17/herbivores.png");
						$('.textanswer').text('<?php echo _("HERBIVORES"); ?>');
					} else if (dinotoggled == 1) {
						answer = "dinosaurs";
						$('#rightorwrong').text('<?php echo _("Not quite."); ?>');
						textstr = '<?php echo _("Some dinosaurs used to eat only plants, some ate only animals."); ?>';
						$('.imganswer').attr("src","images/17/dinosaurs.png");
						$('.textanswer').text('<?php echo _("DINOSAURS"); ?>');
					}
				}
				
				if (answered == 0) {
					saveAnswer('food-chains-qq4-a', answer);
					answered = 1;
				}
				
				$('#wronganswer').text(textstr);
				$('#wronganswer').fadeIn();
			});
		}
	});
	
	$('div.herbivores-toggle').click(function(){
		clearEverything();
		if (!herbitoggled) {
			$('img#herbivores-main').addClass('disabled');
			herbitoggled = 1;
			carnitoggled = omnitoggled = dinotoggled = 0;
		} else herbitoggled = 0;
	});
	
	$('div.omnivores-toggle').click(function(){
		clearEverything();
		if (!omnitoggled) {
			$('img#omnivores-main').addClass('disabled');
			omnitoggled  = 1;
			carnitoggled = herbitoggled = dinotoggled = 0;
		} else omnitoggled = 0;
	});
	
	$('div.carnivores-toggle').click(function(){
		clearEverything();
		if (!carnitoggled) {
			$('img#carnivores-main').addClass('disabled');
			carnitoggled  = 1;
			omnitoggled = herbitoggled = dinotoggled = 0;
		} else carnitoggled = 0;
	});
	
	$('div.dinosaurs-toggle').click(function(){
		clearEverything();
		if (!dinotoggled) {
			$('img#dinosaurs-main').addClass('disabled');
			dinotoggled = 1;
			omnitoggled = herbitoggled = carnitoggled  = 0;
		} else dinotoggled = 0;
	});


	
	$('div.herbivores-toggle').hover(function () {
		if (!herbitoggled) { $('img#herbivores-main').addClass('disabled'); }
	}, function () { 
		if (!herbitoggled) { $('img#herbivores-main').removeClass('disabled'); }
	});
	
	$('div.omnivores-toggle').hover(function () {
		if (!omnitoggled) { $('img#omnivores-main').addClass('disabled'); }
	}, function () { 
		if (!omnitoggled) { $('img#omnivores-main').removeClass('disabled'); }
	});
	
	$('div.dinosaurs-toggle').hover(function () {
		if (!dinotoggled) { $('img#dinosaurs-main').addClass('disabled'); }
	}, function () { 
		if (!dinotoggled) { $('img#dinosaurs-main').removeClass('disabled'); }
	});
	
	$('div.carnivores-toggle').hover(function () {
		if (!carnitoggled) { $('img#carnivores-main').addClass('disabled'); }
	}, function () { 
		if (!carnitoggled) { $('img#carnivores-main').removeClass('disabled'); }
	});
});

function clearEverything() {
	$('img#dinosaurs-main').removeClass('disabled'); 
	$('img#carnivores-main').removeClass('disabled'); 
	$('img#omnivores-main').removeClass('disabled'); 
	$('img#herbivores-main').removeClass('disabled'); 
}

</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #B3B4C8; border-right: 1px dashed #B3B4C8; padding: 0 2px; }
.bg { background-color:#E8E8FF;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: coral; }
h2 { margin:0; padding: 0 10px; font-weight:normal; font-size:23px; text-align: left;}
h3 { font-weight:normal; margin: 5px;}
html[dir="rtl"] #foodchain h2 { text-align: right !important; }

.clear { clear:both;}
.buttons { position: absolute; float:right; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle{  display:none; }

.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.bold { font-weight: bold; }
.hidden { display: none; }
.centered { text-align:center;}
.big { font-size: 30px; }

#wronganswer { margin-bottom: 20px;}
.herbivores-toggle:hover, .omnivores-toggle:hover, .carnivores-toggle:hover, .dinosaurs-toggle:hover { cursor: pointer; }
.herbivores-toggle, .omnivores-toggle, .carnivores-toggle, .dinosaurs-toggle {
	width: 250px;
	height: 230px;
	max-width: 100%;
	max-height: auto;
	float: left;
	margin-left: 15%;
	margin-bottom: 40px;
}

.omnivores-toggle, .carnivores-toggle {
	margin-bottom: 0px !important;
}

#answers { background: url('images/17/green.png') no-repeat center top; }
#answers h2 { text-align: center; }
#answers div#answer img { text-align:center; margin: 0 auto;}
#herbivores img,#omnivores img,#carnivores img,#dinosaurs img,#answer img { z-index:8; display: none; }
#herbivores img.active,#omnivores img.active,#carnivores img.active,#dinosaurs img.active,#answer img.active { z-index:10; display: block; }
#herbivores img.last-active,#omnivores img.last-active,#carnivores img.last-active,#dinosaurs img.last-active, #answer img.last-active { z-index:9; }

img.grayscale {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */
}


img.grayscale.disabled {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
    -webkit-filter: grayscale(0%);
}

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	#foodchain p { font-size: 23px;}	
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2,h3 { font-size: 18px; }
	#foodchain p { font-size: 20px;}
	.col { width: 93% !important; clear: none !important; margin-bottom: 10px; }
	.herbivores-toggle, .omnivores-toggle, .carnivores-toggle, .dinosaurs-toggle { margin-left: 5%; }
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2,h3 { font-size: 15px; padding: 10px; }
	#foodchain p { font-size: 18px;}	
	.herbivores-toggle, .omnivores-toggle, .carnivores-toggle, .dinosaurs-toggle {  width: 180px;}
	.herbivores-toggle img, .omnivores-toggle img, .carnivores-toggle img, .dinosaurs-toggle  img { width: 180px; }
	
}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }	
	.herbivores-toggle, .omnivores-toggle, .carnivores-toggle, .dinosaurs-toggle { margin-left: 3%; }
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
	.herbivores-toggle, .omnivores-toggle, .carnivores-toggle, .dinosaurs-toggle { margin-left: 10%; }
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (orientation:portrait) {
	.col { width: 93% !important; clear: none !important; margin-bottom: 10px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Quiz Question #4"); ?> <span class="hidden">- <?php echo _("How did I do?"); ?></span></h1>
			<div id="foodchain">
				<h2><?php echo _("Click the image to select your answer to this question: Animals that feed on plants and animals are known as... ?"); ?></h2>
				<div class="herbivores-toggle">
					<img id="herbivores-main" class="grayscale" src="images/17/herbivores.png">
					<h2 class="green bold centered"><?php echo _("Herbivores"); ?></h2>
				</div>
				
				<div class="dinosaurs-toggle">
					<img id="dinosaurs-main" class="grayscale" src="images/17/dinosaurs.png">
					<h2 class="orange bold centered"><?php echo _("Dinosaurs"); ?></h2>
				</div>
				<div class="carnivores-toggle">
					<img id="carnivores-main" class="grayscale" src="images/17/carnivores.png">
					<h2 class="red bold centered"><?php echo _("Carnivores"); ?></h2>
				</div>
				<div class="omnivores-toggle">
					<img id="omnivores-main" class="grayscale" src="images/17/omnivores.png">
					<h2 class="purple bold centered"><?php echo _("Omnivores"); ?></h2>
				</div>
			</div>
			<div id="answers" class="hidden">
				<h2><?php echo _("You answered..."); ?></h2>
				<br/>
				<h2><img class="imganswer" src="images/17/omnivores.png"></h2>
				<br/>
				<h2><span class="textanswer big bold green"><?php echo _("OMNIVORES"); ?></span></h2>
				<br/>
				<h2 id="rightorwrong"><?php echo _("You got it wrong :("); ?></h2>
				<br/>
				<h2 id="wronganswer" class="hidden"></h2>
				<br/><br/><br/><br/><br/><br/><br/>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="18.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
			<div class="buttons" ><a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Isn't this exciting?"); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
