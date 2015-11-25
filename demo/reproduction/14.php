<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/14/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #A8B570; border-right: 1px dashed #A8B570; }
h1 { color: #83692E; font-size: 30px; }
h2 { color: #D85C03; text-align: center; padding-top: 1%; }
#scenario div { width: 90%; margin: 10px auto; }
#scenario div img { width: 47%; margin: 0 1%; } 
	
img.next-toggle, img.back-toggle-screen { display:none; }

#problem p { padding-top: 10px; }
#problem { display: none; }
#text { z-index: 99; position: relative; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; background-color: rgba(255, 255, 255, 0.50); padding: 5px; }
.col { background: #E6C39E; margin: 10px auto; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius:10px; padding:10px; width: 600px; max-width: 100%; padding: 5px; height: 300px; }
textarea { height: 100%; width: 100%; -webkit-border-radius: 10px; border: 1px solid transparent; -moz-border-radius: 10px; border-radius: 10px; font-size: 20px; outline: none; padding: 10px; resize: none; font-family: 'PlaytimeRegular'; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 30px; }
<?php } ?> 
#buttons .next { display: none;}
html[dir="rtl"] h2 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="scenario">
				<h1><?php echo _("Using what you know... about reproduction... to solve a problem"); ?></h1>
				<h2><?php echo _("The Scenario"); ?></h2>
				<p><?php echo _("A certain bird, called a manakin shows his display to attract the female to mate. The male is brightly colored. The female is about the same size, but has colors that will allow her to remain unnoticed when she cares for her eggs in her nest. There is a lot of competition and only the alpha male will have the opportunity to mate."); ?></p>
				<div>
					<img src="images/14/img1.jpg">
					<img src="images/14/img2.jpg">
				</div>
			</div>
			
			<div class="screens" id="problem">
				<h2><?php echo _("The Problem"); ?></h2>
				<p><?php echo _("You are a zoologist in the <span class='key'>ornithology</span> department (a branch of zoology that concerns the study of birds). You are preparing an enclosed habitat for this manakin species to live at your zoo."); ?></p>
				<p><?php echo _("Based on what you now know about the animal and reproduction, what ideas do you have for the bird's area you are building? What behavior in the birds might cause problems related to mating? What could you do to solve such a problem with manakins in breeding season in your zoo?"); ?></p>
				<article class="col">
					<textarea id="probanswer" name="probanswer" row="20" col="40" placeholder="<?php echo _('Click here to start typing your answer...'); ?>"></textarea>
				</article>
			</div>
			
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Flying birds"); ?></strong></section></section>
	<script>
		var hash = window.location.hash.slice(1);
	
		$(document).ready(function() {
			/* screen refresh */
			if(hash != "") {
				//alert(hash)
				$('.screens').hide();
				$('#'+hash).show(function () {
					if(hash = 'problem') { //refresh on screen2
						$('#screen2').fadeIn();
						
						setInterval('swapImages()', 1000);
						setInterval('swapImages2()', 1000);
						$('a.readmore-toggle').fadeOut( function(){
							$('a.next-toggle').fadeIn();
						});
					} else {
						$('h1').fadeIn();
						$('#screen1').fadeIn();
						$('a.back-toggle').fadeIn();
						$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
					}
				});
			}
			
			/* screen transition */	
			$('a.back-toggle').click(function(){
				if($('#scenario').is(':visible')) {
					document.location.href= "13.php";
				} else if ($('#problem').is(':visible')) {
					$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
					$('#problem').fadeOut(function(){
						$('#scenario').fadeIn();
					});
				}
			});
			
			$('a.readmore-toggle').click(function(){
				$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#scenario').fadeOut( function(){
					$('#problem').fadeIn();
					window.location.hash = '#problem';
				});
			});
			
			$('a.next-toggle').click( function(e) {
				if ($('#probanswer').val().length < 1)  {
					e.preventDefault();
					alert('<?php echo _("Please type your answer."); ?>');
				} else {
					$('a.next-toggle').parent().attr('href','15.php');
				}

				answer = $('#probanswer').val();
			});

			$(".num").keydown(function(event) {
				// Allow: backspace, delete, tab, escape, and enter
				if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
					(event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
						 return;
				} else {
					if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
						event.preventDefault(); 
					}   
				}
			});
		});
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
