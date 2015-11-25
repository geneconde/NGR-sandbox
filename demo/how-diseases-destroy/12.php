<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/12/old-house.gif');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
h1 { color: #da526d; font-size:28px;}
h2 {font-size:26px; padding: 0; margin: 0;}
.wrap {border-left: 1px dashed #DA526D; border-right: 1px dashed #DA526D;}
.bg section{width:92%; margin:0 auto; position:relative; top:35px;}
.title-color {color: #3c539b;}
#container { width:80%; height:350px; max-height:95%; margin:0 auto;}
figure img { width:100%; height:350px; max-height:95%; }
figure {margin:0;}
#buttons .next, img.back-toggle-screen { display:none; }
textarea{ -webkit-border-radius: 10px; -moz-border-radius: 10px;  border-radius: 10px;	width: 600px; height: 300px; }

.white {color:white;}
.article_container {background-color:rgba(255, 255, 255, 0.8); -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin: 0 auto; padding-top: 30px; }
textarea{ resize: none; font-size:24px; font-family:'PlaytimeRegular'; margin-top: 20px; border: 1px; padding: 10px}

html[dir="rtl"] h1 { padding: 10px 10px 0 0; }
html[dir="rtl"] h2 { text-align: center; }
html[dir="rtl"] p { padding: 10px; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<h1><?php echo _("Using what you know... about how diseases destroy... to solve a problem"); ?></h1>				
			<div id="screen1" class="screens">
				<section>

					<article class="article_container">
						<h2 class="centered"> <span class="title-color"><?php echo _("The Scenario"); ?></span> </h2> 
						<p >
							<?php echo _("A couple decides to move out of their apartment and buy an old house to fix up. The house is almost 100 years old and hasn't had much work done on it for at least 50 years. Since money and time are limited, they decide they will focus on attending to repairs related to their health."); ?> 
						</p>
					</article>
				</section>
			</div>
			
			<div id="screen2" class="screens">
				<section>
					<article class="article_container">					
						<h2><span class="title-color"><?php echo _("Your Task"); ?></span></h2>						
						<p>
							<?php echo _("Using what you know about environmental factors that can cause disease, develop a plan for them that lists the things they should do and why they should do them for the sake of their health."); ?>
						</p>										
					</article>	
									
						<textarea id="probanswer" rows="20" cols="40" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>								
							
				</section>					
			</div>				
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Cleaning repair tools..."); ?></strong></section></section>	

<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
var answer = '';
var answered = 1;
var nullAnswer = false;

$(document).ready(function() {
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	$('h1').fadeOut();

		var screen = hash[hash.length -1];			
			if(screen < screenCount) {
			$('a.back-toggle').delay(300).fadeIn();
			$('a.readmore-toggle').parent().attr('href','#screen' + screen);
		
		} else {
			$('a.back-toggle').delay(300).fadeIn();
			$('a.readmore-toggle').fadeOut(function(){
				$('a.next-toggle').fadeIn();
				$('.bg').css('background-image','url(images/12/bg2.png)');
				});
			}
		});
	}
	
	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "11.php";		
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){								
					$('a.next-toggle').fadeOut(function(){
						
						$('a.readmore-toggle').fadeIn();
					});
					$('h1').fadeIn();
					$('a.back-toggle').attr('src','images/buttons/back2.png');
					$('.bg').css('background-image','url(images/12/old-house.gif)');
					$('#screen1').fadeIn();
			});
		}
	});

	/* Read More Screen Transition */
	$('a.readmore-toggle').click(function(){
		if($('#screen1').is(':visible')) { 		
			$('h1').fadeOut();
			$('#screen1').fadeOut( function(){					
				$('a.readmore-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('a.back-toggle').attr('src','images/buttons/back2.png');
				$('.bg').css('background-image','url(images/12/bg2.png)');			
				$('#screen2').fadeIn();
				}); 
			});
		}
	});
	
	$('a.next-toggle').click(function(e){ 
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			alert('<?php echo _("Please type your answer."); ?>');
			nullAnswer = false;					
		} else {		
			if (answered == 0) {
				saveMeta('diseases', answer);
			}
		}
	});
});

function checkNull() {
	answer = $('#probanswer').val();
	if(answer == '') {
		nullAnswer = true;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
