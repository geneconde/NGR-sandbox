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
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.wrap { border-left: 1px dashed #6B78FF !important; border-right: 1px dashed #6B78FF !important; }
.bg { background-image: url('images/10/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#assignment { display: none; }
h1 { color: #5762D5; font-size: 27px; padding-left: 5px; }
h2 { text-align: center; padding: 10px 0px; margin: 0; }
#assignment h2 { padding-top: 35px !important; }
#buttons .next, img.back-toggle-answer { display: none; }

.col { background: #C0CBF5; margin: 10px auto; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius:10px; padding:10px; width: 600px; max-width: 100%; padding: 20px; height: 300px; }

textarea { height: 93%; width: 96%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; font-size: 20px; outline: none; padding: 10px; resize: none; font-family: 'PlaytimeRegular'; border: 1px solid #000; }
<?php if($language == 'es_ES') { ?>
	h1 { font-size:24px; }
<?php } ?>
html[dir="rtl"] h1 { padding:10px 10px 0; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="rtl"] h1 { padding: 35px 10px 0; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Using what you know... about the properties of matter... to solve a problem"); ?></h1>
			<div id="problem">
				<br><br><br><br>
				<h2><?php echo _("The Problem"); ?></h2>
				<br>
				<p><?php echo _("Suppose you were to design a house for a client who will build it. You are comparing using metal to wood for the foundation of the house.  Using what you know about properties of matter, what would you consider the benefit of each material? You need to compare the two for the client."); ?></p>
				
			</div>
			<div id="assignment">
				<h2><?php echo _("Your Assignment"); ?></h2>
				<p><?php echo _("Which material would you suggest be used for the design? In the winter, what problem might people in a house built in wood or metal face? What material would you then suggest to fix this problem?"); ?></p>
				<article class="col"><textarea id="probanswer" name="probanswer" row="20" col="40" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea></article>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<script>
		var answered = 0,
		    answer1 = "",
			answer2 = "";
			
		$(document).ready(function() {
			/* screen transition */	
			$('a.back-toggle').click(function(){
				if($('#problem').is(':visible')) {
					document.location.href= "9.php";
				} else if ($('#assignment').is(':visible')) {
					$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
					$('#assignment').fadeOut(function(){
						$('h1').fadeIn();
						$('#problem').fadeIn();
					});
				}
			});
			
			$('a.readmore-toggle').click(function(){
				$('h1').fadeOut();
				$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#problem').fadeOut( function(){
					$('#assignment').fadeIn();
					window.location.hash = '#assignment';
				});
			});
			
			
			$('a.next-toggle').click( function(e) {
				checkNull();
				if(nullAnswer == true) {
					e.preventDefault();
					alert('<?php echo _("Please type your answer."); ?>');
					nullAnswer = false;
				} else {
					answer = $('#probanswer').val();
					//save();
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
		});
		
		function checkNull() {
			if($('#probanswer').val()=='') {
				nullAnswer = true;
			}
		}
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Drawing blueprints..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>