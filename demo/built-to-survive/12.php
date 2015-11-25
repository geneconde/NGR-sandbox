<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
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
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/12/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#task { display: none; }
h1 { color: #c79490; font-size: 28px; }
h2 { text-align: center; padding: 10px 0px; margin: 0; color: #938EFF; }
p { color: #fff; text-align: left; }
#task h2 { padding-top: 35px !important; }
#buttons .next, img.back-toggle-answer { display: none; }

.col { background: #F7D4BD; margin: 10px auto; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius:10px; padding:10px; width: 600px; max-width: 100%; padding: 20px; height: 300px; }

textarea { height: 93%; width: 96%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; font-size: 20px; outline: none; padding: 10px; resize: none; font-family: 'PlaytimeRegular'; }
<?php if($language == "es_ES") { ?>
		h1 { font-size:28px; }
	<?php } ?>

html[dir="rtl"] h2 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about being built to survive... to solve a problem"); ?></h1>
				<h2><?php echo _("The Problem"); ?></h2>
				<p><?php echo _("Even though astronauts first landed on the moon in 1969, humans are not built to survive there. So they had to wear space suits to step out on the moon's surface and they could stay out there in their space suits for only a short period of time. What if they wanted to stay out there much longer?"); ?></p>
				
			</div>
			<div id="task">
				<h2><?php echo _("Your Task"); ?></h2>
				<p><?php echo _("Describe what additional features would have to be added to their space suits to allow the astronauts to live on the moon for 3-4 days without being able to get back into the landing module."); ?></p>
				<article class="col"><textarea id="probanswer" name="probanswer" row="20" col="40" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea></article>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Wearing spacesuits..."); ?></strong></section></section>
	<script>
		var answered = 1,
		    answer = "",
			nullAnswer = false;
			
		$(document).ready(function() {
			/* screen transition */	
			$('a.readmore-toggle').click(function(){
				$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#problem').fadeOut( function(){ 
					$('#task').delay(500).fadeIn();
					/*$('h1').fadeOut();*/
					window.location.hash = '#task';
				});
			});
			
			$('a.back-toggle').click(function(){
				/*$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
				$('#task').fadeOut();
				$('#problem').delay(500).fadeIn();
				$('h1').delay(500).fadeIn();*/
				if($('#problem').is(':visible')) {
					document.location.href= "11.php";
				} else if ($('#task').is(':visible')) {
					$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
					$('#task').fadeOut(function(){
						$('#problem').fadeIn();
					});
				}
			});
			
			
			$('a.next-toggle').click( function(e) {
				checkNull();
				if(nullAnswer == true) {
					e.preventDefault();
					alert("<?php echo _("Please type your answer."); ?>");
					nullAnswer = false;
				} else {
					answer = $('#probanswer').val();
					if (answered == 0) {
						saveMeta('built-to-survive', answer);
						answered = 1;
					}
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
	<?php include("setlocale.php"); ?>
</body>
</html>
