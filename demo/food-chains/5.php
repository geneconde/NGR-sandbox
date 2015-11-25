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
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.qtip.min.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/rightclick.js"></script>
<script>
var correct = 0;
var answered = 1;
var nullAnswer = false;
var answer1, answer2, answer3, answer4, answer5, answer6;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
	/*
	$('img.checkanswer-toggle').hover(function () {
		this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>-on.png'; 
	}, function () { 
		this.src = 'images/buttons/checkanswer-<?php echo $user->getGender(); ?>.png'; 
	});
	
	$('img.next-toggle').hover(function () { 
		this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>-on.png'; 
	}, function () { 
		this.src = 'images/buttons/next-<?php echo $user->getGender(); ?>.png'; 
	});
	
	$('img.back-toggle').hover(function () { 
		this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>-on.png'; 
	}, function () { 
		this.src = 'images/buttons/back-<?php echo $user->getGender(); ?>.png'; 
	});
	*/
	
	$('#table1 img').draggable({ revert: 'invalid', containment: $('#table1'), scroll: false });
		
	$('#table1 img').each(function() {
		var image = $(this);
		image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
		image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
		
		var p = $(this).parent().parent().children(':not(:first-child)');
		var drop1, drop2, drop3, drop4, drop5;
		
		for(var i = 1; i < 6; i++) {
			window['drop' + i] = image.parent().parent().children(':nth-child(' + (i + 1) +')');
			window['drop' + i].droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo($(this)); }
			});
		}
	});
	
	$('img.back-toggle').click(function(){
		if( $('#question').is(':visible') ) {
			document.location.href= "4.php";
		} else {
			$('#answer').fadeOut(function(){ 
				$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
				$('#question').fadeIn();
				$('#table1').appendTo('#question');
				$('td:first-child').each(function() { $(this).empty(); });
				$('#table1 img').draggable('enable');
			});		
		}
	});
	
	$('img.check-toggle').click(function(e){
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash = '';
			alert('<?php echo _("Please select your answers."); ?>');
			nullAnswer = false;
		} else {
			$('img.check-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
			$('#question').fadeOut(function(){ 
				$('#answer').fadeIn();
				$('#table1 img').draggable('disable');
				var correct = 0;
				
				/* For Checking */
				var answers = ['herbivore','omnivore','herbivore','producer','herbivore','carnivore'];
				for(var i = 1; i < 7; i++) {
					window["answer" + i] = $('#pic' + i).parent().data('name');
					if(answers[i - 1] == window["answer" + i]) {
						$('<img src="images/others/correct.png" class="answer-icon">').appendTo($('table tr:nth-child(' + (i + 2) + ') td:first'));
						correct++;
					} else {
						$('<img src="images/others/wrong.png" class="answer-icon">').appendTo($('table tr:nth-child(' + (i + 2) + ') td:first'));
					}
				}
				
				$('#correcttotal').text(correct);
				$('#table1').appendTo('#answer');
				/* End Checking */
				
				if(answered == 0) {
					saveAnswer('food-chains-qc1-a',answer1);
					saveAnswer('food-chains-qc1-b',answer2);
					saveAnswer('food-chains-qc1-c',answer3);
					saveAnswer('food-chains-qc1-d',answer4);
					saveAnswer('food-chains-qc1-e',answer5);
					saveAnswer('food-chains-qc1-f',answer6);
				} // end save to db
			}); // end question fade
		} // end else
	}); // end check

	$('#pic1').qtip({ content: "<?php echo _("horse"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic2').qtip({ content: "<?php echo _("dog"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic3').qtip({ content: "<?php echo _("mouse"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic4').qtip({ content: "<?php echo _("tree"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic5').qtip({ content: "<?php echo _("squirrel"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	$('#pic6').qtip({ content: "<?php echo _("bear"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
	position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
});

function checkNull() {
	$('#table1 img').each(function() {
		if($(this).parent().data('name') == "none") {
			nullAnswer = true;
		}
	});
}
</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #fff; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #C9A64D; border-right: 1px dashed #C9A64D; padding: 0 2px; }
.bg { background-color: #F7F3E1;  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }

h1 { margin:0; font-size: 35px; padding: 10px; font-weight:bold; color: palevioletred; }
h2 { margin:0; padding: 0 10px; font-weight:normal; }
#answer { display: none; }

.clear { clear:both;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; }
img.next-toggle {  display:none; }

table { margin: 0 auto; table-layout:fixed; word-break: break-all; text-transform: uppercase; font-size: 11px}
table img { /*height: 70%;*/ height:42px; }
th { background-color: pink; }
td { background-color: lightblue; }
th,td { -moz-border-radius: 10px; border-radius: 10px; min-width:32px; width: 80px; max-width: 80px; word-wrap: break-word; text-align: center;}

.draggable { width: 100%; height: 100%; text-align: center; }
#droppable { min-width: 1px; min-height: 39px; text-align: center;}
[draggable]{ cursor: url(https://mail.google.com/mail/images/2/openhand.cur), default !important; }
[draggable]:active{ cursor: url(https://mail.google.com/mail/images/2/closedhand.cur), default !important; }

.wrong { background-color: gray; width: 80px;  border-radius: 10px; z-index: 1; opacity: .5; position: relative; }
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.bold { font-weight: bold; }
.hidden { display: none; }

@media screen and (max-width:900px) {
	h1 { font-size: 30px; }
	.buttons { position: relative; float: right; top:5px;}	
	.buttons-back { position: relative; float: left; top:5px;}	
}

@media screen and (max-width:768px) {
	h1 { font-size: 24px; }
	h2 { font-size: 18px; }
}

@media screen and (max-width:577px) {
	h1 { font-size: 20px; }
	h2 { font-size: 15px; padding: 10px; }
	table { font-size: 9px;}
}

@media screen and (max-width:480px) {
	h1 { font-size: 20px; }	
	table th { width: 30px;}
	table img { height: 34px;}
}

@media screen and (max-width:400px) {
	h1 { width: 250px; }
}

@media screen and (max-height:627px) {
	.wrap { height:auto; }
}

@media screen and (orientation:portrait) {
	
}

.grab {
    cursor: move;
    cursor: -moz-grab;
    cursor: -webkit-grab;
}

.grabbing {
	cursor: move;
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
}

#dp_swf_engine { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #1");?> <span class='hidden'>- <?php echo _("How did I do?");?></span></h1>
				<h2 class="firsth2"><?php echo _("Let's start your first exercise! Drag and drop the items at the left to the box that fits its proper characteristics at the right. Hover your mouse on each picture to know what they are."); ?></h2>
				<br/>
				<table id="table1" cellpadding="5px">
					<tr>
						<th rowspan="2">&nbsp;</th>
						<th rowspan="2"><?php echo _("producer");?></th>
						<th colspan="3"><?php echo _("consumer");?></th>
						<th rowspan="2"><?php echo _("decomposer");?></th>
					</tr>
					<tr>
						<th><?php echo _("herbivore");?></th>
						<th><?php echo _("carnivore");?></th>
						<th><?php echo _("omnivore");?></th>
					</tr>
					<tr class="dragrow">
						<td data-name="none"><img src="images/5/horse.png" id="pic1" class="grab"></td>
						<td data-name="producer"></td>
						<td data-name="herbivore"></td>
						<td data-name="carnivore"></td>
						<td data-name="omnivore"></td>
						<td data-name="decomposer"></td>
					</tr>
					<tr class="dragrow">
						<td data-name="none"><img src="images/5/dog.png" id="pic2" class="grab"></td>
						<td data-name="producer"></td>
						<td data-name="herbivore"></td>
						<td data-name="carnivore"></td>
						<td data-name="omnivore"></td>
						<td data-name="decomposer"></td>
					</tr>
					<tr class="dragrow">
						<td data-name="none"><img src="images/5/mouse.png" id="pic3" class="grab"></td>
						<td data-name="producer"></td>
						<td data-name="herbivore"></td>
						<td data-name="carnivore"></td>
						<td data-name="omnivore"></td>
						<td data-name="decomposer"></td>
					</tr>
					<tr class="dragrow">
						<td data-name="none"><img src="images/5/tree.png" id="pic4" class="grab"></td>
						<td data-name="producer"></td>
						<td data-name="herbivore"></td>
						<td data-name="carnivore"></td>
						<td data-name="omnivore"></td>
						<td data-name="decomposer"></td>
					</tr>
					<tr class="dragrow">
						<td data-name="none"><img src="images/5/squirrel.png" id="pic5" class="grab"></td>
						<td data-name="producer"></td>
						<td data-name="herbivore"></td>
						<td data-name="carnivore"></td>
						<td data-name="omnivore"></td>
						<td data-name="decomposer"></td>
					</tr>
					<tr class="dragrow">
						<td data-name="none"><img src="images/5/bear.png" id="pic6" class="grab"></td>
						<td data-name="producer"></td>
						<td data-name="herbivore"></td>
						<td data-name="carnivore"></td>
						<td data-name="omnivore"></td>
						<td data-name="decomposer"></td>
					</tr>
				</table>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<h2 class="secondh2"><?php echo _("You got"); ?> <span class="green bold" id="correcttotal">0</span> <?php echo _("out of 6 correct answers! Review your answers below."); ?></h2><br>
			</div>
		</div>
	</div>
	<div class="buttons-back" >
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a>
	</div>
	<div class="buttons">
		<a href="6.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _("Check answer"); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
