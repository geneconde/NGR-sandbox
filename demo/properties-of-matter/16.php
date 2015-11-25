<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.qtip.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/16/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
img.back-toggle-answer, #buttons .next { display: none; }

table { border: 0; margin: 0 auto; padding: 0; font-weight: normal; }
th { height: 30px; width: 130px; color: #fff; }
th { border: 3px solid #fff99d; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; }
td { height: 90px; width: 130px; border: 3px solid #f49e9c; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; padding: 5px; margin: 0 auto; text-align: center; top: 0; left: 0; }
td img { height: 75px; vertical-align: middle; }
.answer-icon { height: 35px; }

#answer table { margin-top: 10px; }
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
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Click and drag the image in the \"ITEM\" column to the column that best describes the item's properties."); ?></h2>
				<table>
					<tr id="first">
						<th><?php echo _("ITEM"); ?></th>
						<th><?php echo _("SOLID"); ?></th>
						<th><?php echo _("LIQUID"); ?></th>
						<th><?php echo _("GAS"); ?></th>
						<th><?php echo _("PLASMA"); ?></th>
					</tr>
					<tr>
						<td data-name="none"><img src="images/16/1.jpg" class="grab" id="pic1"></td>
						<td data-name="solid"></td>
						<td data-name="liquid"></td>
						<td data-name="gas"></td>
						<td data-name="plasma"></td>
					</tr>
					<tr>
						<td data-name="none"><img src="images/16/2.jpg" class="grab" id="pic2"></td>
						<td data-name="solid"></td>
						<td data-name="liquid"></td>
						<td data-name="gas"></td>
						<td data-name="plasma"></td>
					</tr>
					<tr>
						<td data-name="none"><img src="images/16/3.jpg" class="grab" id="pic3"></td>
						<td data-name="solid"></td>
						<td data-name="liquid"></td>
						<td data-name="gas"></td>
						<td data-name="plasma"></td>
					</tr>
					<tr>
						<td data-name="none"><img src="images/16/4.jpg" class="grab" id="pic4"></td>
						<td data-name="solid"></td>
						<td data-name="liquid"></td>
						<td data-name="gas"></td>
						<td data-name="plasma"></td>
					</tr>
					<tr>
						<td data-name="none"><img src="images/16/5.jpg" class="grab" id="pic5"></td>
						<td data-name="solid"></td>
						<td data-name="liquid"></td>
						<td data-name="gas"></td>
						<td data-name="plasma"></td>
					</tr>
				</table>

			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer1, answer2, answer3, answer4, answer5;
	//var answered = 0;
	var nullAnswer = false;
	$(document).ready(function() {
		$('#pic1').qtip({ content: "<?php echo _("water in glass"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#pic2').qtip({ content: "<?php echo _("vapor from a cup of hot tea"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#pic3').qtip({ content: "<?php echo _("stick of butter"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#pic4').qtip({ content: "<?php echo _("the sun"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#pic5').qtip({ content: "<?php echo _("a diamond"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	}); // end doc ready
		$('#question img').draggable({ revert: 'invalid', containment: "tbody", scroll: false });
		
		$('#question img').each(function() {
			var image = $(this);
			image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
			image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
			
			var p = $(this).parent().parent().children(':not(:first-child)');
			var drop1, drop2, drop3, drop4;
			
			for(var i = 1; i < 5; i++) {
				window['drop' + i] = image.parent().parent().children(':nth-child(' + (i + 1) +')');
				window['drop' + i].droppable ({
					accept: image,
					drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo($(this)); }
				});
			}
		});
	
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "15.php";
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('table').appendTo('#question');
					$('tr:first-child th:first-child').remove();
					$('td:first-child').each(function() { $(this).remove(); });
					$('#question img').draggable('enable');
				});
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert('<?php echo _("Please select your answers."); ?>');
				nullAnswer = false;
			} else {
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					$('#question img').draggable('disable');
					
					/* For Checking */
					$("table tr:nth-child(1) th:first").before("<th><?php echo _("Answer"); ?></th>");
					var answers = ['liquid','gas','solid','plasma','solid'];
					for(var i = 1; i < 6; i++) {
						window["answer" + i] = $('#pic' + i).parent().data('name');
						if(answers[i - 1] == window["answer" + i]) {
							$('table tr:nth-child(' + (i + 1) + ') td:first').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						} else {
							$('table tr:nth-child(' + (i + 1) + ') td:first').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						}
					}
					$('table').appendTo('#answer');
					/* End Checking */
					
					/*
					if(answered == 0) {
						saveAnswer('properties-of-matter-qq3-a',answer1);
						saveAnswer('properties-of-matter-qq3-b',answer2);
						saveAnswer('properties-of-matter-qq3-c',answer3);
						saveAnswer('properties-of-matter-qq3-d',answer4);
						saveAnswer('properties-of-matter-qq3-e',answer5);
					} // end save to db
					*/
				}); // end question fade
			} // end else
		}); // end check
	
	
	function checkNull() {
		$('#question img').each(function() {
			if($(this).parent().data('name') == "none") {
				nullAnswer = true;
			}
		});
	}
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Solid, liquid, gas or plasma?"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
