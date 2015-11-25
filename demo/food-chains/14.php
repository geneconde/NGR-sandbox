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
<script src="scripts/jquery.qtip.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
var correct = 0;
var answered = 1;
$(document).ready(function() {
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	/*
	$('img.viewimage-toggle').hover(function () { this.src = 'images/buttons/viewimage-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/viewimage-<?php echo $user->getGender(); ?>.png'; });
	$('img.checkanswer-toggle').hover(function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; });
	$('img.next-toggle').hover(function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; });
	$('img.back-toggle').hover(function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; }, function () { this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; });
	*/
	
	$('img.back-toggle').click(function(){
	if( $('img.checkanswer-toggle').is(':visible') ) {
			document.location.href= "13.php";
		} else {
			$('.answertd').fadeOut();
			$('img.next-toggle').fadeOut(function(){ $('img.checkanswer-toggle').fadeIn(); $('h1 span').fadeOut(); });		
			$('h2.secondh2').fadeOut(function(){  $('h2.firsth2').fadeIn();  });
		}
	});
	
	/* screen transition */	
	$('img.checkanswer-toggle').click(function(){
		var blank = "0,0,0,0,0";
		
		if ( item1.toString() == blank || item1.toString() == blank || item3.toString() == blank || item4.toString() == blank || item5.toString() == blank || item6.toString() == blank || item7.toString() == blank ){ 
			alert('<?php echo _("Please select your answers."); ?>');
		} else{
			$('.answertd').fadeIn();
			$('img.checkanswer-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn();  $('h1 span').fadeIn();   });		
			$('h2.firsth2').fadeOut(function(){  $('h2.secondh2').fadeIn();  });
			clear();
			checkAnswer();
			
			if (answered == 0) {}
			answered = 1;
		}
	});
	
	$('#pic1').qtip({ content: "<?php echo _("hawk"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic2').qtip({ content: "<?php echo _("rabbit"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic3').qtip({ content: "<?php echo _("ants"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic4').qtip({ content: "<?php echo _("mice"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic5').qtip({ content: "<?php echo _("cactus"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic6').qtip({ content: "<?php echo _("bushes"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic7').qtip({ content: "<?php echo _("cougar"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
});

var item1 = new Array(0,0,0,0,0);
var item2 = new Array(0,0,0,0,0);
var item3 = new Array(0,0,0,0,0);
var item4 = new Array(0,0,0,0,0);
var item5 = new Array(0,0,0,0,0);
var item6 = new Array(0,0,0,0,0);
var item7 = new Array(0,0,0,0,0);

function setAnswer(item,index) {
	if (item == 1)		item1[index] = item1[index] == 0 ? 1 : 0;
	else if (item == 2)	item2[index] = item2[index] == 0 ? 1 : 0;
	else if (item == 3)	item3[index] = item3[index] == 0 ? 1 : 0;
	else if (item == 4)	item4[index] = item4[index] == 0 ? 1 : 0;
	else if (item == 5)	item5[index] = item5[index] == 0 ? 1 : 0;
	else if (item == 6)	item6[index] = item6[index] == 0 ? 1 : 0;
	else if (item == 7)	item7[index] = item7[index] == 0 ? 1 : 0;
}

function clear() {
	$('#10 input').prop('checked', false); $('#11 input').prop('checked', false); $('#12 input').prop('checked', false); $('#13 input').prop('checked', false); $('#14 input').prop('checked', false);
	$('#20 input').prop('checked', false); $('#21 input').prop('checked', false); $('#22 input').prop('checked', false); $('#23 input').prop('checked', false); $('#24 input').prop('checked', false);
	$('#30 input').prop('checked', false); $('#31 input').prop('checked', false); $('#32 input').prop('checked', false); $('#33 input').prop('checked', false); $('#34 input').prop('checked', false);
	$('#40 input').prop('checked', false); $('#41 input').prop('checked', false); $('#42 input').prop('checked', false); $('#43 input').prop('checked', false); $('#44 input').prop('checked', false);
	$('#50 input').prop('checked', false); $('#51 input').prop('checked', false); $('#52 input').prop('checked', false); $('#53 input').prop('checked', false); $('#54 input').prop('checked', false);
	$('#60 input').prop('checked', false); $('#61 input').prop('checked', false); $('#62 input').prop('checked', false); $('#63 input').prop('checked', false); $('#64 input').prop('checked', false);
	$('#70 input').prop('checked', false); $('#71 input').prop('checked', false); $('#72 input').prop('checked', false); $('#73 input').prop('checked', false); $('#74 input').prop('checked', false);
	$('img#hawk').attr('src','images/14/wrong.png');
	$('img#rabbit').attr('src','images/14/wrong.png');
	$('img#ants').attr('src','images/14/wrong.png');
	$('img#mice').attr('src','images/14/wrong.png');
	$('img#cactus').attr('src','images/14/wrong.png');
	$('img#bushes').attr('src','images/14/wrong.png');
	$('img#cougar').attr('src','images/14/wrong.png');
}

function checkAnswer() {
	correct = 0;
	/////A
	var answers = new Array();
	if (item1[0] == 0 && item1[1] == 0 && item1[2] == 0  && item1[3] == 1  && item1[4] == 0) {
		$('img#hawk').attr('src','images/14/correct.png');
		correct++;
		answers.push('4');
	} else {
		if (item1[0] == 1) { answers.push('1'); }
		if (item1[1] == 1) { answers.push('2'); }
		if (item1[2] == 1) { answers.push('3'); }
		if (item1[3] == 1) { answers.push('4'); }
		if (item1[4] == 1) { answers.push('5'); }
		$('img#hawk').attr('src','images/14/wrong.png');
	}
	if (answered == 0) { saveAnswer('food-chains-qq1-a', answers.join(',')); }
	
	/////B
	answers = new Array();
	if (item2[0] == 0 && item2[1] == 1 && item2[2] == 1  && item2[3] == 0 && item2[4] == 0) {
		$('img#rabbit').attr('src','images/14/correct.png');
		correct++;
		answers.push('2,3');
	} else {
		if (item2[0] == 1) { answers.push('1'); }
		if (item2[1] == 1) { answers.push('2'); }
		if (item2[2] == 1) { answers.push('3'); }
		if (item2[3] == 1) { answers.push('4'); }
		if (item2[4] == 1) { answers.push('5'); }
		$('img#rabbit').attr('src','images/14/wrong.png');
	}
	if (answered == 0) { saveAnswer('food-chains-qq1-b', answers.join(',')); }
	
	/////C
	answers = new Array();	
	if (item3[0] == 0 && item3[1] == 1 && item3[2] == 0  && item3[3] == 0  && item3[4] == 1) {
		$('img#ants').attr('src','images/14/correct.png');
		correct++;
		answers.push('2,5');
	} else {
		if (item3[0] == 1) { answers.push('1'); }
		if (item3[1] == 1) { answers.push('2'); }
		if (item3[2] == 1) { answers.push('3'); }
		if (item3[3] == 1) { answers.push('4'); }
		if (item3[4] == 1) { answers.push('5'); }
		$('img#ants').attr('src','images/14/wrong.png');
	}
	if (answered == 0) { saveAnswer('food-chains-qq1-c', answers.join(',')); }
	
	/////D
	answers = new Array();
	if (item4[0] == 0 && item4[1] == 1 && item4[2] == 1  && item4[3] == 0   && item4[4] == 0) {
		$('img#mice').attr('src','images/14/correct.png');
		correct++;
		answers.push('2,3');
	} else {
		if (item4[0] == 1) { answers.push('1'); }
		if (item4[1] == 1) { answers.push('2'); }
		if (item4[2] == 1) { answers.push('3'); }
		if (item4[3] == 1) { answers.push('4'); }
		if (item4[4] == 1) { answers.push('5'); }
		$('img#mice').attr('src','images/14/wrong.png');
	}
	if (answered == 0) { saveAnswer('food-chains-qq1-d', answers.join(',')); }
	
	/////E
	answers = new Array();
	if (item5[0] == 1 && item5[1] == 0 && item5[2] == 0  && item5[3] == 0   && item5[4] == 0) {
		$('img#cactus').attr('src','images/14/correct.png');
		correct++;
		answers.push('1');
	} else {
		if (item5[0] == 1) { answers.push('1'); }
		if (item5[1] == 1) { answers.push('2'); }
		if (item5[2] == 1) { answers.push('3'); }
		if (item5[3] == 1) { answers.push('4'); }
		if (item5[4] == 1) { answers.push('5'); }
		$('img#cactus').attr('src','images/14/wrong.png');
	}
	if (answered == 0) { saveAnswer('food-chains-qq1-e', answers.join(',')); }
	
	/////F
	answers = new Array();
	if (item6[0] == 1 && item6[1] == 0 && item6[2] == 0  && item6[3] == 0   && item6[4] == 0) {
		$('img#bushes').attr('src','images/14/correct.png');
		correct++;
		answers.push('1');
	} else {
		if (item6[0] == 1) { answers.push('1'); }
		if (item6[1] == 1) { answers.push('2'); }
		if (item6[2] == 1) { answers.push('3'); }
		if (item6[3] == 1) { answers.push('4'); }
		if (item6[4] == 1) { answers.push('5'); }
		$('img#bushes').attr('src','images/14/wrong.png');
	}
	if (answered == 0) { saveAnswer('food-chains-qq1-f', answers.join(',')); }
	
	/////G
	answers = new Array();
	if (item7[0] == 0 && item7[1] == 0 && item7[2] == 0  && item7[3] == 1  && item7[4] == 0) {
		$('img#cougar').attr('src','images/14/correct.png');
		correct++;
		answers.push('4');
	} else {
		if (item7[0] == 1) { answers.push('1'); }
		if (item7[1] == 1) { answers.push('2'); }
		if (item7[2] == 1) { answers.push('3'); }
		if (item7[3] == 1) { answers.push('4'); }
		if (item7[4] == 1) { answers.push('5'); }
		$('img#cougar').attr('src','images/14/wrong.png');
	}
	if (answered == 0) { saveAnswer('food-chains-qq1-g', answers.join(',')); }
	
	$('#correcttotal').text(correct);
}

//drag and drop
function allowDrop(ev) { ev.preventDefault(); }
function drag(ev) { ev.dataTransfer.setData("Text",ev.target.id); }
function drop(ev) {
	var eleid = ev.dataTransfer.getData("Text");
	var el = ev.target;
	if ($(el).hasClass(eleid)) {
		el.appendChild(document.getElementById(eleid));
	}
	ev.preventDefault();
}
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; }
.bg { background-color:#F8F3E1;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: palevioletred; }
h2 { margin:0; padding: 0 10px; font-weight:normal; color:black;}

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle {  display:none; }
.secondh2 { display: none; }
table { margin: 0 auto; table-layout:fixed; word-break: break-all; text-transform: uppercase; font-size: 11px}
table td { overflow:hidden; }
table img { max-width: 100%; height:42px;}
th { background-color: pink; }
td { background-color: lightblue; }
th,td { -moz-border-radius: 10px; border-radius: 10px; min-width:32px; width: 81px; max-width: 81px; word-wrap: break-word; text-align: center;}

.green { color: green; }
.red { color: red; }
.bold { font-weight: bold; }
.answertd,.hidden { display: none; }

@media screen and (max-width:900px) {
	/* html,body {border:1px solid green; }*/
	h1 { font-size: 30px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	/*html,body {border:1px solid red; }*/
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
}

@media screen and (max-width:577px) {
	/*html,body {border:1px solid orange; }*/
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	table { font-size: 9px;}
}

@media screen and (max-width:480px) {
	/*html,body {border:1px solid pink; }*/
	h1 { font-size: 20px; }	
	table th { width: 30px;}
	table img { height: 34px;}
}

@media screen and (max-width:400px) {
	/*html,body {border:1px solid yellow; }*/
	h1 { width: 250px; }
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) {
	
}

.switch {
  margin: 0 auto;
  position: relative;
}

.switch label {
  width: 100%;
  height: 100%;
  position: relative;
  display: block;
}

.switch input {
  top: 0; 
  right: 0; 
  bottom: 0; 
  left: 0;
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  opacity: 0;
  z-index: 100;
  position: absolute;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.switch.demo1 { width: 25px; height: 25px; }

.switch.demo1 label {
  border-radius: 50%;
  background: #eaeaea;
  box-shadow: 
      0 3px 5px rgba(0,0,0,0.25),
      inset 0 1px 0 rgba(255,255,255,0.3),
      inset 0 -5px 5px rgba(100,100,100,0.1),
      inset 0 5px 5px rgba(255,255,255,0.3);
}

.switch.demo1 label:after {
  content: "";
  position: absolute;
  top: -8%; right: -8%; bottom: -8%; left: -8%;
  z-index: -1;
  border-radius: inherit;
  background: #ddd;
  background: -moz-linear-gradient(#ccc, #fff);
  background: -ms-linear-gradient(#ccc, #fff);
  background: -o-linear-gradient(#ccc, #fff);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#ccc), to(#fff));
  background: -webkit-linear-gradient(#ccc, #fff);
  background: linear-gradient(#ccc, #fff);
  box-shadow: 
    inset 0 2px 1px rgba(0,0,0,0.15),
    0 2px 5px rgba(200,200,200,0.1);
}

.switch.demo1 label:before {
  content: "";
  position: absolute;
  width: 40%;
  height: 40%;
  border-radius: inherit;
  left: 31%;
  top: 28%;
  background: #969696;
  background: radial-gradient(40% 35%, #ccc, #969696 60%);
  box-shadow:
      inset 0 2px 4px 1px rgba(0,0,0,0.3),
      0 1px 0 rgba(255,255,255,1),
      inset 0 1px 0 white;
}

.switch.demo1 input:checked ~ label {
  background: #dedede;
  background: -moz-linear-gradient(#dedede, #fdfdfd);
  background: -ms-linear-gradient(#dedede, #fdfdfd);
  background: -o-linear-gradient(#dedede, #fdfdfd);
  background: -webkit-gradient(linear, 0 0, 0 100%, from(#dedede), to(#fdfdfd));
  background: -webkit-linear-gradient(#dedede, #fdfdfd);
  background: linear-gradient(#dedede, #fdfdfd);
}

.switch.demo1 input:checked ~ label:before {
  background: #25d025;
  background: radial-gradient(40% 35%, #5aef5a, #25d025 60%);
  box-shadow:
      inset 0 3px 5px 1px rgba(0,0,0,0.1),
      0 1px 0 rgba(255,255,255,0.4),
      0 0 10px 2px rgba(0, 210, 0, 0.5);
}

.switch.demo1 input:checked ~ label.wrong:before {
  background: #CF0909;
  background: radial-gradient(40% 35%, #D4787F, #CF0909 60%);
  box-shadow:
      inset 0 3px 5px 1px rgba(0,0,0,0.1),
      0 1px 0 rgba(255,255,255,0.4),
      0 0 10px 2px rgba(207, 9, 9, 0.5);
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<h1><?php echo _("Quiz Question #1"); ?> <span class="hidden">- <?php echo _("How did I do?"); ?></span></h1>
			<h2 class="firsth2"><?php echo _("Activate <span class='red bold blink'>ALL</span> the buttons that describe each living thing in the first column."); ?></h2>
			<h2 class="secondh2"><?php echo _("You got"); ?> <span class='green bold' id='correcttotal'>0</span> <?php echo _("out of 7 correct answers! Review your answers below."); ?></h2>
			<br/>
			<table id="table1" cellpadding="5px">
				<tr>
					<th>&nbsp;</th>
					<th><?php echo _("makes own<br/>food"); ?></th>
					<th><?php echo _("gets food<br/>from<br/>producers"); ?></th>
					<th><?php echo _("is a<br/>herbivore"); ?></th>
					<th><?php echo _("is a<br/>carnivore"); ?></th>
					<th><?php echo _("is an<br/>omnivore"); ?></th>
					<th class="answertd">&nbsp;</th>
				</tr>
				<tr>
					<th><img src="images/14/hawk.png" id="pic1"></th>
					<td><div class="switch demo1"><input name="hawk-1" type="checkbox" onclick="setAnswer(1,0);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="hawk-2" type="checkbox" onclick="setAnswer(1,1);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="hawk-3" type="checkbox" onclick="setAnswer(1,2);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="hawk-4" type="checkbox" onclick="setAnswer(1,3);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="hawk-5" type="checkbox" onclick="setAnswer(1,4);"><label></label></div> </td>
					<td class="answertd"><img id="hawk"></td>
				</tr>
				<tr>
					<th><img src="images/14/rabbit.png" id="pic2"></th>
					<td><div class="switch demo1"><input name="rabbit-1" type="checkbox" onclick="setAnswer(2,0);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="rabbit-2" type="checkbox" onclick="setAnswer(2,1);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="rabbit-3" type="checkbox" onclick="setAnswer(2,2);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="rabbit-4" type="checkbox" onclick="setAnswer(2,3);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="rabbit-5" type="checkbox" onclick="setAnswer(2,4);"><label></label></div> </td>
					<td class="answertd"><img id="rabbit"></td>
				</tr>
				<tr>
					<th><img src="images/14/ants.png" id="pic3"></th>
					<td><div class="switch demo1"><input name="ants-1" type="checkbox" onclick="setAnswer(3,0);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="ants-2" type="checkbox" onclick="setAnswer(3,1);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="ants-3" type="checkbox" onclick="setAnswer(3,2);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="ants-4" type="checkbox" onclick="setAnswer(3,3);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="ants-5" type="checkbox" onclick="setAnswer(3,4);"><label></label></div> </td>
					<td class="answertd"><img id="ants"></td>
				</tr>
				<tr>
					<th><img src="images/14/mice.png" id="pic4"></th>
					<td><div class="switch demo1"><input name="mice-1" type="checkbox" onclick="setAnswer(4,0);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="mice-2" type="checkbox" onclick="setAnswer(4,1);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="mice-3" type="checkbox" onclick="setAnswer(4,2);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="mice-4" type="checkbox" onclick="setAnswer(4,3);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="mice-5" type="checkbox" onclick="setAnswer(4,4);"><label></label></div> </td>
					<td class="answertd"><img id="mice"></td>
				</tr>
				<tr>
					<th><img src="images/14/cactus.png" id="pic5"></th>
					<td><div class="switch demo1"><input name="cactus-1" type="checkbox" onclick="setAnswer(5,0);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cactus-2" type="checkbox" onclick="setAnswer(5,1);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cactus-3" type="checkbox" onclick="setAnswer(5,2);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cactus-4" type="checkbox" onclick="setAnswer(5,3);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cactus-5" type="checkbox" onclick="setAnswer(5,4);"><label></label></div> </td>
					<td class="answertd"><img id="cactus"></td>
				</tr>
				<tr>
					<th><img src="images/14/bushes.png" id="pic6"></th>
					<td><div class="switch demo1"><input name="bushes-1" type="checkbox" onclick="setAnswer(6,0);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="bushes-2" type="checkbox" onclick="setAnswer(6,1);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="bushes-3" type="checkbox" onclick="setAnswer(6,2);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="bushes-4" type="checkbox" onclick="setAnswer(6,3);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="bushes-5" type="checkbox" onclick="setAnswer(6,4);"><label></label></div> </td>
					<td class="answertd"><img id="bushes"></td>
				</tr>
				<tr>
					<th><img src="images/14/cougar.png" id="pic7"></th>
					<td><div class="switch demo1"><input name="cougar-1" type="checkbox" onclick="setAnswer(7,0);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cougar-2" type="checkbox" onclick="setAnswer(7,1);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cougar-3" type="checkbox" onclick="setAnswer(7,2);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cougar-4" type="checkbox" onclick="setAnswer(7,3);"><label></label></div> </td>
					<td><div class="switch demo1"><input name="cougar-5" type="checkbox" onclick="setAnswer(7,4);"><label></label></div> </td>
					<td class="answertd"><img id="cougar"></td>
				</tr>
			</table>
			<br/>				
			<ul id="rb-grid" class="rb-grid clearfix">
			<li>
				
				<!-- 
				<div><a href="#" class="button watch-video"><img class="viewimage-toggle" src="images/buttons/viewimage-<?php echo $user->getGender(); ?>.png"></a></div>
				<div class="rb-overlay">
					<span class="rb-close"><button class="md-close"><?php echo _("Close me!"); ?></button></span>
					<div class="rb-week" style="background: url(images/others/overlay.png);">
						<div id="watch-me" class="d-none" style="width:100%;height:100%">
							<img src="images/14/ecosystem.jpg" style="max-width:100%;"/>
						</div>								
					</div>
				</div>
				 -->
				
			</li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
			<div class="buttons-back" ><a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a></div>
			<div class="buttons"><a href="15.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a></div>
			<div class="buttons" ><a href="#" class="wiggle"><img class="checkanswer-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is..."); ?></strong></section></section>
	<script src="scripts/video.min.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
