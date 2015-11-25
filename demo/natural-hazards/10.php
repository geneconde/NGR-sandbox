<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/save-answer.js"></script>
<script type="text/javascript" src="scripts/fadeSlideShow.js"></script>
<style>
.wrap { border-left: 1px dashed #98A8FF; border-right: 1px dashed #98A8FF; }
.bg { background-image: url('images/10/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
h1 { color: #d89c27; font-size: 30px; }
h2 { margin: 0; text-align: center; }
p { margin: 5px 0px; padding: 0; font-size: 24px; font-family: 'PlaytimeRegular';}
#problem { display: none; text-align: center; max-width: 100%; margin: 0 auto; }
#scenario, #problem { max-width: 95%; margin: 0 auto; text-align: center; }
#buttons .next { display: none; }
.pic { height: 300px; width: 450px; margin: 0 auto; }
.pic img { height: 90%; -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; }
#second-pic, #third-pic { display: none; }
.col { background: #F5F3C0; margin: 10px auto; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; padding:10px; width: 600px; max-width: 100%; padding: 20px; height: 300px;}
.col img { vertical-align:middle;}
textarea { height: 100%; width: 100%; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; font-size: 20px; font-family:'PlaytimeRegular'; outline: none; padding: 10px; resize: none; border: 1px solid black; }
.lightred { color: #CF4E2F; }


#slideshowWrapper{position:relative;width:646px;margin:auto;}
#fssPrev{position:absolute;top:169px;left:-67px;background:url(arrows.png) -67px 0px;width:67px;height:143px;text-indent:-999999px;}
#fssNext{position:absolute;top:169px;left:646px;background:url(arrows.png) no-repeat;width:67px;height:143px;text-indent:-999999px;}
#fssPlayPause{display:none;}

ul#slideshow{list-style:none;padding:2px;margin:auto;margin-top:5%;width:450px;overflow:hidden;}
p{text-align:center;}
#fssList{display:none; list-style:none;width:646px;margin:auto;padding:5px 0 0 45%;}
#fssList li{display:inline;padding-right:10px;}
#fssList li a{color:#999;text-decoration:none;}
#fssList li.fssActive a{font-weight:bold;color:#333;}

#top{background:#3b5998;width:100%;height:40px;margin-bottom:20px;}
#top h1{color:#fff;font-weight:normal;font-size:18px;padding:7px 0 0 15px}
#top h1 span{font-size:11px;}
#top h1 a{text-decoration:underline;color:#fff;}
#top h1 a:hover{text-decoration:none;}

html[dir="rtl"] h2, html[dir="rtl"] p { text-align: center; }

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 23px; }
<?php endif; ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#problem { padding-top: 35px; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="scenario">
				<h1><?php echo _("Using what you know... about natural hazards... to solve a problem"); ?></h1>
				<h2><span class="lightred"><?php echo _("The Scenario"); ?></span></h2>
				<p><?php echo _("When you grow up, where would the perfect place be for you to live and have your dream house? What natural hazards do you think might be in that place?"); ?></p>
				<br>
				<div id="slideshowWrapper">
				    <ul id="slideshow">
				        <li><img src="images/10/house.png" /></li> <!-- This is the last image in the slideshow -->
				        <li><img src="images/10/house2.png" /></li>
				        <li><img src="images/10/house3.png"  /></li>
				        <li><img src="images/10/house4.png"  /></li>
				        <li><img src="images/10/house5.png"  /></li>
				        <li><img src="images/10/house6.png"  /></li>
				    </ul><br clear="all" />
				</div>
			</div>
			<div id="problem" class="hidden">
				<br>
				<h2><span class="lightred"><?php echo _("Your Task"); ?></span></h2>
				<p><?php echo _("Now describe what features you would design into your a house to best protect yourself and your family from being harmed by those natural hazards."); ?></p>
				<article class="col"><textarea id="probanswer" name="probanswer" row="20" col="40" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea></article>
				<div class="buttons-mid" >
				
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Drawing blueprints..."); ?></strong></section></section>
	<script>
	var answered = 1;
	var answer;
	var nullAnswer = false;
	
	$(document).ready(function() {
		$('a.back-toggle').click( function() {
			if($('#scenario').is(':visible')) {
				document.location.href = "9.php";
			} else if ($('#problem').is(':visible')) {
				$('a.next-toggle').fadeOut( function(){ $('a.readmore-toggle').fadeIn(); });
				$('#problem').fadeOut(function() { $('#scenario').fadeIn(); }); 
			}
		});

		/* screen transition */	
		$('a.readmore-toggle').click(function(){
			$('#scenario').fadeOut( function(){ $('#problem').fadeIn(); });
			$('a.readmore-toggle').fadeOut( function(){ $('a.next-toggle').fadeIn(); });
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
					saveMeta('natural-hazards', answer);
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
		
		jQuery('#slideshow').fadeSlideShow();
		//setInterval('swapImages()', 5000);
	});

	/*function swapImages(){
	  if($('#third-pic').is(':visible')) {
		$('#third-pic').fadeOut(2000, function(){
			$('#first-pic').fadeIn(2000);
		}); 
		
	  } else if ($('#second-pic').is(':visible')){
		$('#second-pic').fadeOut(2000, function(){
			$('#third-pic').fadeIn(2000);
		}); 
	  } else if ($('#first-pic').is(':visible')){
		$('#first-pic').fadeOut(2000, function(){
			$('#second-pic').fadeIn(2000);
		}); 
	  }
	}*/

	function checkNull() {
		if($('#probanswer').val() == '') { 
			nullAnswer = true;
		}
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
