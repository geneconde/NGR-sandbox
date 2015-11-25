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
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/save-answer.js"></script>
<!-- <script src="scripts/rightclick.js"></script> -->
<script>
var answered = 1;
var correct = 0;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('a.corn-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/corn-b.png' ? 'images/16/corn-a.png' : 'images/16/corn-b.png'; }); return false; });
	$('a.rabbit-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/rabbit-b.png' ? 'images/16/rabbit-a.png' : 'images/16/rabbit-b.png'; }); return false; });
	$('a.snake-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/snake-b.png' ? 'images/16/snake-a.png' : 'images/16/snake-b.png'; }); return false; });
	$('a.owl-toggle').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/16/owl-b.png' ? 'images/16/owl-a.png' : 'images/16/owl-b.png'; }); return false; });
	
	// $('img.check-toggle').hover(function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; });
	// $('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	// $('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	
	$('img.back-toggle').click(function(){
		if( $('h2.ins').is(':visible') ) {
			document.location.href= "15.php";
		} else {
			$('h2.ans').hide();
			$('h1 span').fadeOut(); 
			$('h2.ins').fadeIn();
			$('.mark').fadeOut();
			$('img.check-toggle').fadeIn(function(){  $('img.next-toggle').fadeOut(); });
		}
	});
	
	/* screen transition */	
	$('img.check-toggle').click(function(){
		var blank = "0,0,0,0";
		if ( item1.toString() == blank || item2.toString() == blank || item3.toString() == blank || item4.toString() == blank ){
			alert('<?php echo _("Please select your answers."); ?>');
		} else{
			$('h2.ins').hide();
			$('h2.ans').fadeIn();
			$('h1 span').fadeIn(); 
			$('.mark').fadeIn();
			$('img.check-toggle').fadeOut(function(){  $('img.next-toggle').fadeIn(); $('img.back-toggle').fadeIn(); });
			checkAnswer();
			answered = 1;
		}
	});
});

var item1 = new Array(0,0,0,0);
var item2 = new Array(0,0,0,0);
var item3 = new Array(0,0,0,0);
var item4 = new Array(0,0,0,0);

function setAnswer(item,index) {
	if (item == 1) {
		item1[index] = item1[index] == 0 ? 1 : 0; }
	else if (item == 2) {
		item2[index] = item2[index] == 0 ? 1 : 0; }
	else if (item == 3) {
		item3[index] = item3[index] == 0 ? 1 : 0; }
	else if (item == 4) {
		item4[index] = item4[index] == 0 ? 1 : 0; }
}	

function clearmark() {
	$('#item1mark').attr('src','images/15/wrong.png');
	$('#item2mark').attr('src','images/15/wrong.png');
	$('#item3mark').attr('src','images/15/wrong.png');
	$('#item4mark').attr('src','images/15/wrong.png');
}

function checkAnswer() {	
	correct = 0;
	clearmark();
	/////A
	var answers = new Array();
	if (item1[0] == 0 && item1[1] == 0 && item1[2] == 1  && item1[3] == 1) {
		$('#item1mark').attr('src','images/16/correct.png');
		correct++;
		answers.push('3,4');
	} else {
		if (item1[0] == 1) { answers.push('1');}
		if (item1[1] == 1) { answers.push('2');}
		if (item1[2] == 1) { answers.push('3');}
		if (item1[3] == 1) { answers.push('4');}
	}
	if (answered == 0) { saveAnswer('food-chains-qq3-a', answers.join(',')); }
	
	/////B
	answers = new Array();
	if (item2[0] == 0 && item2[1] == 1 && item2[2] == 0  && item2[3] == 0) {
		$('#item2mark').attr('src','images/16/correct.png');
		correct++;
		answers.push('2');
	} else {
		if (item2[0] == 1) { answers.push('1');}
		if (item2[1] == 1) { answers.push('2'); }		
		if (item2[2] == 1) { answers.push('3');}
		if (item2[3] == 1) { answers.push('4');}
	}
	if (answered == 0) { saveAnswer('food-chains-qq3-b', answers.join(',')); }
	
	/////C
	answers = new Array();
	if (item3[0] == 1 && item3[1] == 0 && item3[2] == 0  && item3[3] == 0) {
		$('#item3mark').attr('src','images/16/correct.png');
		correct++;
		answers.push('1');
	} else {
		if (item3[0] == 1) { answers.push('1'); }
		if (item3[1] == 1) { answers.push('2');}
		if (item3[2] == 1) { answers.push('3');}
		if (item3[3] == 1) { answers.push('4');}
	}
	if (answered == 0) { saveAnswer('food-chains-qq3-c', answers.join(',')); }
	
	/////D
	answers = new Array();
	if (item4[0] == 0 && item4[1] == 1 && item4[2] == 1  && item4[3] == 1) {
		$('#item4mark').attr('src','images/16/correct.png');
		correct++;
		answers.push('2,3,4');
	} else {
		if (item4[0] == 1) { answers.push('1');}
		if (item4[1] == 1) { answers.push('2'); }
		if (item4[2] == 1) { answers.push('3'); }
		if (item4[3] == 1) { answers.push('4'); }
	}
	if (answered == 0) { saveAnswer('food-chains-qq3-d', answers.join(',')); }
	
	$('#correcttotal').text(correct);
}
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #B3B4C8; border-right: 1px dashed #B3B4C8; padding: 0 2px; }
.bg { background-color:#DADAFF;   background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: coral; }
h2 { margin:0; padding: 0 10px; font-weight:normal; font-size:23px; text-align: left;}
h3 { font-weight:normal; margin: 5px;}
html[dir="rtl"] h2 { text-align: right !important; }

.clear { clear:both;}
.buttons { position: absolute; float:right; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle {  display:none; }

.grayscale {  filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */ }

.col { background: #FFF2D2; float: left; margin-left: 3.2%; margin-bottom: 20px; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; padding:10px; width: 45%;}
.col ul li { float:left !important;display:inline !important;list-style-type:none !important; width:25% !important;}
.col ul li img { width: 100%;}
.col ul li a { width: 100%; height:100%;}

#foodchain { text-align:center;}

#chain-items { text-align: center; }
#chain-items ul { width: 100%; margin:0;padding:0;}
#chain-items ul li { float:left; display:inline; list-style-type: none; width: 12%; margin: 1%; }
#chain-items ul li img { max-width:100%; height:auto; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}

.grayscale {  filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */ }
.mark { vertical-align:middle;}

.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.gray { color:gray; }
.pink { color: #F14970;}
.violet { color: #4222BA;}
.darkorange { color: #FF6600;}
.darkgreen { color: #3B770E;}
.darkyellow { color: #928832;}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }

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
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2,h3 { font-size: 15px; padding: 10px; }
	#foodchain p { font-size: 18px;}
}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }	
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
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
			<h1><?php echo _("Quiz Question #3"); ?> <span class="hidden">- <?php echo _("How did I do?"); ?></span></h1>
			<div id="foodchain">
				<h2 class="ins"><?php echo _("Look at the food chain below and tap <span class='red bold blink'>ALL</span> appropriate answers for each question. Tap the images again to deselect."); ?></h2>
				<h2 class="ans hidden"><?php echo _("You got"); ?> <span class='green bold' id='correcttotal'>0</span> <?php echo _("out of 4 correct answers! Review your answers below."); ?></h2>
				<div id="chain-items">
					<ul class="horizontal">
						<li><img src="images/16/corn.jpg"><br/><span class="green bold"><?php echo _("CORN"); ?></span></li>
						<li><img class="horizontal" src="images/16/arrows.gif"></li>
						<li><img src="images/16/rabbit.jpg"><br/><span class="orange bold"><?php echo _("RABBIT"); ?></span></li>
						<li><img class="horizontal" src="images/16/arrows.gif"></li>
						<li><img src="images/16/snake.jpg"><br/><span class="purple bold"><?php echo _("SNAKE"); ?></span></li>
						<li><img class="horizontal" src="images/16/arrows.gif"></li>
						<li><img src="images/16/owl.jpg"><br/><span class="red bold"><?php echo _("OWL"); ?></span></li>
					</ul>
					<div class="clear"></div>
				</div>
				<br/>
				<article class="col">
					<h3><img src="images/16/wrong.png" class="mark hidden" id="item1mark"/> <?php echo _("Identify the <span class='darkorange'>secondary</span> consumers."); ?></h3>
					<ul>
						<li><a href="#" class="corn-toggle" onclick="setAnswer(1,0);"><img src="images/16/corn-b.png"></a></li>
						<li><a href="#" class="rabbit-toggle" onclick="setAnswer(1,1);"><img src="images/16/rabbit-b.png"></a></li>
						<li><a href="#" class="snake-toggle" onclick="setAnswer(1,2);"><img src="images/16/snake-b.png"></a></li>
						<li><a href="#" class="owl-toggle" onclick="setAnswer(1,3);"><img src="images/16/owl-b.png"></a></li>
					</ul>
					<div class="clear"></div>
				</article>
				<article class="col">
					<h3><img src="images/16/wrong.png" class="mark hidden" id="item2mark"/> <?php echo _("Identify the <span class='darkgreen'>herbivores</span>."); ?></h3>
					<ul>
						<li><a href="#" class="corn-toggle" onclick="setAnswer(2,0);"><img src="images/16/corn-b.png"></a></li>
						<li><a href="#" class="rabbit-toggle" onclick="setAnswer(2,1);"><img src="images/16/rabbit-b.png"></a></li>
						<li><a href="#" class="snake-toggle" onclick="setAnswer(2,2);"><img src="images/16/snake-b.png"></a></li>
						<li><a href="#" class="owl-toggle" onclick="setAnswer(2,3);"><img src="images/16/owl-b.png"></a></li>
					</ul>
					<div class="clear"></div>
				</article>
				<article class="col">
					<h3><img src="images/16/wrong.png" class="mark hidden" id="item3mark"/> <?php echo _("Identify the <span class='darkyellow'>producers</span>."); ?></h3>
					<ul>
						<li><a href="#" class="corn-toggle" onclick="setAnswer(3,0);"><img src="images/16/corn-b.png"></a></li>
						<li><a href="#" class="rabbit-toggle" onclick="setAnswer(3,1);"><img src="images/16/rabbit-b.png"></a></li>
						<li><a href="#" class="snake-toggle" onclick="setAnswer(3,2);"><img src="images/16/snake-b.png"></a></li>
						<li><a href="#" class="owl-toggle" onclick="setAnswer(3,3);"><img src="images/16/owl-b.png"></a></li>
					</ul>
					<div class="clear"></div>
				</article>
				<article class="col">
					<h3><img src="images/16/wrong.png" class="mark hidden" id="item4mark"/> <?php echo _("Identify the <span class='pink'>consumers</span>."); ?></h3>
					<ul>
						<li><a href="#" class="corn-toggle" onclick="setAnswer(4,0);"><img src="images/16/corn-b.png"></a></li>
						<li><a href="#" class="rabbit-toggle" onclick="setAnswer(4,1);"><img src="images/16/rabbit-b.png"></a></li>
						<li><a href="#" class="snake-toggle" onclick="setAnswer(4,2);"><img src="images/16/snake-b.png"></a></li>
						<li><a href="#" class="owl-toggle" onclick="setAnswer(4,3);"><img src="images/16/owl-b.png"></a></li>
					</ul>
					<div class="clear"></div>
				</article>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="17.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
			<div class="buttons"><a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's do another one!"); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
