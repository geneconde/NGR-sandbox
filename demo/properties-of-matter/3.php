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
<script src="scripts/jquery.qtip.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/3/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
h2 { color: #fff; padding-bottom: 5px; }
p { color: #fff; }
#buttons .next, img.back-toggle-answer { display: none; }
table { border: 0; margin: 0 auto; padding: 0; font-weight: normal; position: relative; z-index: 5; }
th { height: 30px; width: 130px; color: #fff; }
th:not(:first-child) { border: 3px solid #fff99d; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; }
td { height: 62px; width: 130px; border: 3px solid #f49e9c; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; padding: 3px; margin: 0 auto; text-align: center; top: 0; left: 0; }
td img { height: 55px; vertical-align: middle; }
#img-container1 { width: 90%; margin: 0 auto; }
#img-container2 { width: 65%; margin: 0 auto; }
#img-container1 img, #img-container2 img { height: 100px; width: 156px; margin: 5px 10px !important; text-align: center !important; border: 3px solid #fff; }
.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }
<?php if($language == 'es_ES') { ?>
	h1 { font-size:31px; }
<?php } ?>
html[dir="rtl"] p { text-align: right; }
html[dir="rtl"] #answer p:nth-child(4), #answer p:nth-child(7) { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 35px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#img-container1 { width: 100%; }
	#img-container2 { width: 75%; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question" class="screens">
				<h1><?php echo _("Checking what you know... about the properties of matter"); ?></h1>
				<h2><?php echo _("Look at the pictures below and decide if they are made by humans or can be found in nature by dragging them to the right column."); ?></h2>
				<table>
					<tr>
						<th></th>
						<th><?php echo _("Made by Humans"); ?></th>
						<th><?php echo _("Found in Nature"); ?></th>
					</tr>
					<tr>
						<td><img src="images/3/logs.jpg" class="grab" id="wood"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><img src="images/3/paper.jpg" class="grab" id="paper"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><img src="images/3/baby.jpg" class="grab" id="baby"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><img src="images/3/rock.jpg" class="grab" id="stone"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><img src="images/3/pots.jpg" class="grab" id="pottery"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><img src="images/3/sand.jpg" class="grab" id="sand"></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><img src="images/3/plastic.jpg" class="grab" id="plastic"></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<div id="answer" class="screens">
				<br>
				<p><?php echo _("Wood, human offspring, stones, and sand are made in nature. Paper, pottery, and plastic are made by humans. People are sometimes inspired by nature to make things. Sometimes they use objects found in nature and change them to meet their needs, like making paper from wood."); ?></p>
				<br>
				<p><?php echo _("Found in Nature"); ?></p>
				<div id="img-container1">
					<img src="images/3/logs.jpg">
					<img src="images/3/baby.jpg">
					<img src="images/3/rock.jpg">
					<img src="images/3/sand.jpg">
				</div>
				<br>
				<p><?php echo _("Made by Humans"); ?></p>
				<div id="img-container2">
					<img src="images/3/paper.jpg">
					<img src="images/3/pots.jpg">
					<img src="images/3/plastic.jpg">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Natural or man-made?"); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash == 'answer') {
			$('.screens').hide();
			$('#answer').show(function () {
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			});
		}
	
		$('#wood').qtip({ content: "<?php echo _("wood"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#paper').qtip({ content: "<?php echo _("paper"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#baby').qtip({ content: "<?php echo _("baby"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#stone').qtip({ content: "<?php echo _("stone"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#pottery').qtip({ content: "<?php echo _("pottery"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#sand').qtip({ content: "<?php echo _("sand"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		$('#plastic').qtip({ content: "<?php echo _("plastic"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
		position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
	
		$('#question img').draggable({ revert: 'invalid', containment: "tbody", scroll: false, stop: function() {
				var image = $(this);
				var p = $(this).parent().parent().children(':not(:first-child)');
        		p.css('background', 'none'); 
        		image.removeClass('grabbing');
        		image.addClass('grab');
        		image.css('opacity', '1');
      	}});
		
		$('#question img').each(function() {
			var image = $(this);
			var p = $(this).parent().parent().children(':not(:first-child)');
			var drop1 = $(this).parent().parent().children(':nth-child(2)');
			var drop2 = $(this).parent().parent().children(':nth-child(3)');
			
			image.mousedown(function() { p.css('background', '#f49e9c'); image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
			//image.mouseup(function() { p.css('background', 'none'); image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
			
			drop1.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop1); }
			});
			
			drop2.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop2); }
			});
		});
		
		$('a.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "2.php";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() { 
					$('#question').fadeIn();
					window.location.hash = "";
				});
			}
		});
		
		$('a.check-toggle').click(function(){ 
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#question').fadeOut(function(){ 
				$('#answer').fadeIn();
				window.location.hash = "#answer";
			}); 
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
