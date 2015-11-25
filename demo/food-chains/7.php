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
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
var answered = 1;
$(document).ready(function() {
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('a.one').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/7/1-b.png' ? 'images/7/1-a.png' : 'images/7/1-b.png'; }); return false; });
	$('a.two').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/7/2-b.png' ? 'images/7/2-a.png' : 'images/7/2-b.png'; }); return false; });
	$('a.three').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/7/3-b.png' ? 'images/7/3-a.png' : 'images/7/3-b.png'; }); return false; });
	$('a.four').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/7/4-b.png' ? 'images/7/4-a.png' : 'images/7/4-b.png'; }); return false; });
	$('a.five').click(function() { $('img', this).attr('src', function(i, oldSrc) { return oldSrc == 'images/7/5-b.png' ? 'images/7/5-a.png' : 'images/7/5-b.png'; }); return false; });
	
	/*
	$('img.checkanswer-toggle').hover(function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
	
	$('img.back-toggle').click(function(){
		if( $('h2.firsth2').is(':visible') ) {
			document.location.href= "6.php#screen3";
		} else {
			$('h2.secondh2').fadeOut(function(){  $('h2.firsth2').fadeIn();  });
			$('span.mark').fadeOut();
			$('h1 span').fadeOut(); 
			$('img.next-toggle').fadeOut(function(){  $('img.checkanswer-toggle').fadeIn();  });
			/*$('img.back-toggle').fadeOut(function(){ $('img.play-toggle').fadeIn();  });*/
		}
	});
	
	/* screen transition */	
	$('img.checkanswer-toggle').click(function(){
		var blank = "0,0,0,0,0";
		
		if ( item1.toString() == blank || item1.toString() == blank || item3.toString() == blank || item4.toString() == blank || item5.toString() == blank ){ 
			alert('<?php echo _("Please select your answers."); ?>');
		} else{
			checkAnswer(); 
			$('span.mark').fadeIn();
			$('h1 span').fadeIn(); 
			$('h2.firsth2').fadeOut(function(){  $('h2.secondh2').fadeIn();  });
			$('img.checkanswer-toggle').fadeOut(function(){  $('img.next-toggle').fadeIn();  });
			$('img.play-toggle').fadeOut(function(){ $('img.back-toggle').fadeIn();  });
			if (answered == 0) {}
			answered = 1;
		}
	});
});

var item1 = new Array(0,0,0,0,0);
var item2 = new Array(0,0,0,0,0);
var item3 = new Array(0,0,0,0,0);
var item4 = new Array(0,0,0,0,0);
var item5 = new Array(0,0,0,0,0);


function setAnswer(item,index) {
	if (item == 1)		item1[index] = item1[index] == 0 ? 1 : 0;
	else if (item == 2)	item2[index] = item2[index] == 0 ? 1 : 0;
	else if (item == 3)	item3[index] = item3[index] == 0 ? 1 : 0;
	else if (item == 4)	item4[index] = item4[index] == 0 ? 1 : 0;
	else if (item == 5)	item5[index] = item5[index] == 0 ? 1 : 0;
}

var correct = 0;
function checkAnswer() {
	var correct = 0;
	/////A
	var answers = new Array();
	if (item1[0] == 0 && item1[1] == 0 && item1[2] == 0  && item1[3] == 0  && item1[4] == 1) {
		$('.item1mark').attr('src','images/7/correct.png');
		$('.item1mark_').attr('src','images/7/correct.png');
		correct++;
		answers.push('5');		
	} else {
		$('.item1mark').attr('src','images/7/wrong.png');
		$('.item1mark_').attr('src','images/7/wrong.png');
		if (item1[0] == 1) { answers.push('1');}
		if (item1[1] == 1) { answers.push('2');}
		if (item1[2] == 1) { answers.push('3');}
		if (item1[3] == 1) { answers.push('4');}
		if (item1[4] == 1) { answers.push('5');}
	}
	if (answered == 0) { saveAnswer('food-chains-qc2-a', answers.join(',')); }
	
	/////B
	answers = new Array();
	if (item2[0] == 1 && item2[1] == 0 && item2[2] == 0  && item2[3] == 0 && item2[4] == 0) {
		$('.item2mark').attr('src','images/7/correct.png');
		$('.item2mark_').attr('src','images/7/correct.png');
		correct++;
		answers.push('1');
	} else {
		$('.item2mark').attr('src','images/7/wrong.png');
		$('.item2mark_').attr('src','images/7/wrong.png');
		if (item2[0] == 1) { answers.push('1');}
		if (item2[1] == 1) { answers.push('2');}
		if (item2[2] == 1) { answers.push('3');}
		if (item2[3] == 1) { answers.push('4');}
		if (item2[4] == 1) { answers.push('5');}
	}
	if (answered == 0) { saveAnswer('food-chains-qc2-b', answers.join(',')); }
	
	/////C
	answers = new Array();
	if (item3[0] == 0 && item3[1] == 1 && item3[2] == 0  && item3[3] == 0  && item3[4] == 0) {
		$('.item3mark').attr('src','images/7/correct.png');
		$('.item3mark_').attr('src','images/7/correct.png');
		correct++;
		answers.push('2');
	} else {
		$('.item3mark').attr('src','images/7/wrong.png');
		$('.item3mark_').attr('src','images/7/wrong.png');
		if (item3[0] == 1) { answers.push('1');}
		if (item3[1] == 1) { answers.push('2');}
		if (item3[2] == 1) { answers.push('3');}
		if (item3[3] == 1) { answers.push('4');}
		if (item3[4] == 1) { answers.push('5');}
	}
	if (answered == 0) { saveAnswer('food-chains-qc2-c', answers.join(',')); }
	
	/////D
	answers = new Array();
	if (item4[0] == 0 && item4[1] == 0 && item4[2] == 1  && item4[3] == 0 && item4[4] == 0) {
		$('.item4mark').attr('src','images/7/correct.png');
		$('.item4mark_').attr('src','images/7/correct.png');
		correct++;
		answers.push('3');		
	} else {
		$('.item4mark').attr('src','images/7/wrong.png');
		$('.item4mark_').attr('src','images/7/wrong.png');
		if (item4[0] == 1) { answers.push('1');}
		if (item4[1] == 1) { answers.push('2');}
		if (item4[2] == 1) { answers.push('3');}
		if (item4[3] == 1) { answers.push('4');}
		if (item4[4] == 1) { answers.push('5');}
	}
	if (answered == 0) { saveAnswer('food-chains-qc2-d', answers.join(',')); }
	
	/////E
	answers = new Array();
	if (item5[0] == 0 && item5[1] == 0 && item5[2] == 0  && item5[3] == 1  && item5[4] == 0) {
		$('.item5mark').attr('src','images/7/correct.png');
		$('.item5mark_').attr('src','images/7/correct.png');
		correct++;
		answers.push('4');
	} else {
		$('.item5mark').attr('src','images/7/wrong.png');
		$('.item5mark_').attr('src','images/7/wrong.png');
		if (item5[0] == 1) { answers.push('1');}
		if (item5[1] == 1) { answers.push('2');}
		if (item5[2] == 1) { answers.push('3');}
		if (item5[3] == 1) { answers.push('4');}
		if (item5[4] == 1) { answers.push('5');}
	}
	if (answered == 0) { saveAnswer('food-chains-qc2-e', answers.join(',')); }
	
	$('#correcttotal').text(correct);
}
</script>
<style>
html { background-color: #E9F5FC; overflow: hidden; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #feae9d; border-right: 1px dashed #feae9d; padding: 0 2px; }
.bg { background-color:#FFE2DB;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: lightseagreen; }
h2 { margin:0; padding: 0 10px; font-weight:normal; font-size:23px; text-align: center;}

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle {  display:none; }


#watch-me { color: #FF9966; }

#foodchain { text-align:center;}

#chain-items { text-align: center; }
#chain-items ul { width: 100%; margin:0;padding:0;}
#chain-items ul li { float:left; display:inline; list-style-type: none; width:10%; text-align: center;}
#chain-items ul li img { max-width:100%; height:auto; margin-right: auto; margin-left: auto;}

.grayscale {  filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */ }

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
	.buttons-back { position: relative; float: left; top:5px;}
	.buttons-next { position: relative; float: right; top:5px;}
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
	#foodchain p { font-size: 20px;}	
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
	.one img,.two img,.three img,.four img,.five img{ max-width: 15% !important; }
	.buttons { text-align: center;}
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) { }

img.radiused { -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; }
#chain-items { padding-left: 8px;  }

#dp_swf_engine { display: none; }

<?php if($language == "es_ES") { ?>
	h1 { padding-bottom: 0; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Quick Check #2"); ?> <span class="hidden">- <?php echo _("How did I do?"); ?></span></h1>
			<div id="foodchain">
				<h2 class="firsth2"><?php echo _("Look at the food chain below. Tap <span class='red bold blink'>ALL</span> the numbers below each item that corresponds to its characteristics."); ?> <span class="small"><span class="pink"><?php echo _("1=primary consumer"); ?></span>, <span class="violet"><?php echo _("2=secondary"); ?></span>, <span class="darkorange"><?php echo _("3=tertiary"); ?></span>, <span class="darkgreen"><?php echo _("4=quarternary"); ?></span>, <span class="darkyellow"><?php echo _("5=producer"); ?></span></span></h2>
				<h2 class="secondh2 hidden"><?php echo _("You got"); ?> <span class='green bold' id='correcttotal'>0</span> <?php echo _("out of 5 correct answers! Review your answers below."); ?><span class="small"><span class="pink"><?php echo _("1=primary consumer"); ?></span>, <span class="violet"><?php echo _("2=secondary"); ?></span>, <span class="darkorange"><?php echo _("3=tertiary"); ?></span>, <span class="darkgreen"><?php echo _("4=quarternary"); ?></span>, <span class="darkyellow"><?php echo _("5=producer"); ?></span></span></h2>
				<div id="chain-items">
					<ul class="horizontal">
						<li><img class="radiused" src="images/7/grass.jpg"><br/><span class="green bold"><?php echo _("GRASS"); ?></span><br/>
							<span class="mark hidden"><img class="item1mark" src="images/7/wrong.png"><br></span>
							<br><a href="#" class="one" onclick="setAnswer(1,0);"><img src="images/7/1-a.png"></a>
							<br><a href="#" class="two" onclick="setAnswer(1,1);"><img src="images/7/2-a.png"></a>
							<br/><a href="#" class="three" onclick="setAnswer(1,2);"><img src="images/7/3-a.png"></a>
							<br><a href="#" class="four" onclick="setAnswer(1,3);"><img src="images/7/4-a.png"></a><a href="#" class="five" onclick="setAnswer(1,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img class="horizontal" src="images/7/arrows.gif"></li>
						<li><img class="radiused" src="images/7/grasshopper.jpg"><br/><span class="orange bold"><?php echo _("GRASSHOPPER"); ?></span><br/>
							<span class="mark hidden"><img class="item2mark" src="images/7/wrong.png"><br></span>
							<br><a href="#" class="one" onclick="setAnswer(2,0);"><img src="images/7/1-a.png"></a>
							<br><a href="#" class="two" onclick="setAnswer(2,1);"><img src="images/7/2-a.png"></a>
							<br/><a href="#" class="three" onclick="setAnswer(2,2);"><img src="images/7/3-a.png"></a>
							<br/><a href="#" class="four" onclick="setAnswer(2,3);"><img src="images/7/4-a.png"></a>
							<br><a href="#" class="five" onclick="setAnswer(2,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img class="horizontal" src="images/7/arrows.gif"></li>
						<li><img class="radiused" src="images/7/frog.jpg"><br/><span class="purple bold"><?php echo _("FROG"); ?></span><br/>
							<span class="mark hidden"><img class="item3mark" src="images/7/wrong.png"><br></span>
							<br><a href="#" class="one" onclick="setAnswer(3,0);"><img src="images/7/1-a.png"></a>
							<br><a href="#" class="two" onclick="setAnswer(3,1);"><img src="images/7/2-a.png"></a>
							<br/><a href="#" class="three" onclick="setAnswer(3,2);"><img src="images/7/3-a.png"></a>
							<br><a href="#" class="four" onclick="setAnswer(3,3);"><img src="images/7/4-a.png"></a><a href="#" class="five" onclick="setAnswer(3,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img class="horizontal" src="images/7/arrows.gif"></li>
						<li><img class="radiused" src="images/7/fish.jpg"><br/><span class="red bold"><?php echo _("FISH"); ?></span><br/>
							<span class="mark hidden"><img class="item4mark" src="images/7/wrong.png"><br></span>
							<br><a href="#" class="one" onclick="setAnswer(4,0);"><img src="images/7/1-a.png"></a>
							<br><a href="#" class="two" onclick="setAnswer(4,1);"><img src="images/7/2-a.png"></a>
							<br/><a href="#" class="three" onclick="setAnswer(4,2);"><img src="images/7/3-a.png"></a>
							<br/><a href="#" class="four" onclick="setAnswer(4,3);"><img src="images/7/4-a.png"></a>
							<br><a href="#" class="five" onclick="setAnswer(4,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img class="horizontal" src="images/7/arrows.gif"></li>
						<li><img class="radiused" src="images/7/eagle.jpg"><br/><span class="brown bold"><?php echo _("EAGLE"); ?></span><br/>
							<span class="mark hidden"><img class="item5mark" src="images/7/wrong.png"><br></span>
							<br><a href="#" class="one" onclick="setAnswer(5,0);"><img src="images/7/1-a.png"></a>
							<br><a href="#" class="two" onclick="setAnswer(5,1);"><img src="images/7/2-a.png"></a>
							<br/><a href="#" class="three" onclick="setAnswer(5,2);"><img src="images/7/3-a.png"></a>
							<br><a href="#" class="four" onclick="setAnswer(5,3);"><img src="images/7/4-a.png"></a><a href="#" class="five" onclick="setAnswer(5,4);"><img src="images/7/5-a.png"></a>
						</li>
					</ul>
					<ul class="vertical hidden">
						<li><span class="orange bold"><?php echo _("GRASS"); ?></span> <img class="radiused" src="images/7/grass.jpg"><br/>
							<span class="mark hidden"><img class="item1mark" src="images/7/wrong.png"><br></span>
							<a href="#" class="one" onclick="setAnswer(1,0);"><img src="images/7/1-a.png"></a>
							<a href="#" class="two" onclick="setAnswer(1,1);"><img src="images/7/2-a.png"></a>
							<a href="#" class="three" onclick="setAnswer(1,2);"><img src="images/7/3-a.png"></a>
							<a href="#" class="four" onclick="setAnswer(1,3);"><img src="images/7/4-a.png"></a>
							<a href="#" class="five" onclick="setAnswer(1,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img src="images/7/arrows-up.gif"></li>
						<li><span class="orange bold"><?php echo _("GRASSHOPPER"); ?></span> <img class="radiused" src="images/7/grasshopper.jpg"><br/>
							<span class="mark hidden"><img class="item2mark" src="images/7/wrong.png"><br></span>
							<a href="#" class="one" onclick="setAnswer(2,0);"><img src="images/7/1-a.png"></a>
							<a href="#" class="two" onclick="setAnswer(2,1);"><img src="images/7/2-a.png"></a>
							<a href="#" class="three" onclick="setAnswer(2,2);"><img src="images/7/3-a.png"></a>
							<a href="#" class="four" onclick="setAnswer(2,3);"><img src="images/7/4-a.png"></a>
							<a href="#" class="five" onclick="setAnswer(2,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img src="images/7/arrows-up.gif"></li>
						<li><span class="purple bold"><?php echo _("FROG"); ?></span> <img class="radiused" src="images/7/frog.jpg"><br/>
							<span class="mark hidden"><img class="item3mark" src="images/7/wrong.png"><br></span>
							<a href="#" class="one" onclick="setAnswer(3,0);"><img src="images/7/1-a.png"></a>
							<a href="#" class="two" onclick="setAnswer(3,1);"><img src="images/7/2-a.png"></a>
							<a href="#" class="three" onclick="setAnswer(3,2);"><img src="images/7/3-a.png"></a>
							<a href="#" class="four" onclick="setAnswer(3,3);"><img src="images/7/4-a.png"></a>
							<a href="#" class="five" onclick="setAnswer(3,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img src="images/7/arrows-up.gif"></li>
						<li><span class="red bold"><?php echo _("FISH"); ?></span> <img class="radiused" src="images/7/fish.jpg"><br/>
							<span class="mark hidden"><img class="item4mark" src="images/7/wrong.png"><br></span>
							<a href="#" class="one" onclick="setAnswer(4,0);"><img src="images/7/1-a.png"></a>
							<a href="#" class="two" onclick="setAnswer(4,1);"><img src="images/7/2-a.png"></a>
							<a href="#" class="three" onclick="setAnswer(4,2);"><img src="images/7/3-a.png"></a>
							<a href="#" class="four" onclick="setAnswer(4,3);"><img src="images/7/4-a.png"></a>
							<a href="#" class="five" onclick="setAnswer(4,4);"><img src="images/7/5-a.png"></a>
						</li>
						<li><img src="images/7/arrows-up.gif"></li>
						<li><span class="brown bold"><?php echo _("EAGLE"); ?></span> <img class="radiused" src="images/7/eagle.jpg"><br/>
							<span class="mark hidden"><img class="item5mark" src="images/7/wrong.png"><br></span>
							<a href="#" class="one" onclick="setAnswer(5,0);"><img src="images/7/1-a.png"></a>
							<a href="#" class="two" onclick="setAnswer(5,1);"><img src="images/7/2-a.png"></a>
							<a href="#" class="three" onclick="setAnswer(5,2);"><img src="images/7/3-a.png"></a>
							<a href="#" class="four" onclick="setAnswer(5,3);"><img src="images/7/4-a.png"></a>
							<a href="#" class="five" onclick="setAnswer(5,4);"><img src="images/7/5-a.png"></a>
						</li>
					</ul>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="8.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
			<div class="buttons" ><a href="#" class="wiggle"><img class="checkanswer-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Loading in 5,4,3,2...."); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>