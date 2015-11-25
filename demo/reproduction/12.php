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
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<style>
.bg { background-image: url('images/12/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #FACA06; border-right: 1px dashed #FACA06; }
h1 { color: #E49204; }
img.next-toggle, img.back-toggle-screen { display:none; }
#screen1 p:last-of-type { width: 80%; }
#screen1 div { margin: 2% auto; width: 85%; height: 240px; }
#screen1 div img { width: 46%; float: left; margin: 0 1%; }

#screen2 { display: none; }
#screen2 div { margin: 2% auto; }
#screen2 p { padding-top:2%; }
#jp_container_1 { margin-bottom: 2%; }
<?php if($language == "es_ES") { ?>
	p { font-size: 22px; }
<?php } ?> 
#buttons .next { display: none; }
html[dir="rtl"] h1 { font-size: 33px; }
html[dir="rtl"] #screen1 p:last-of-type { float: left; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("More big ideas... about reproduction"); ?></h1>
				<p><?php echo _("In animals, individuals are either male or female; each having very different reproductive systems. In sexual reproduction, sperm from the male is united with an egg from the female creating a fertilized egg. Once its place is secure, it develops into a fetus and then into an infant, ready for birth. While different species take different amounts of time for development, the process is similar in all species."); ?></p>
				<div>
					<img src="images/12/img1.jpg" />
					<img src="images/12/img2.jpg" />
				</div>
				<p><?php echo _("In reality, for this to happen in animals, females usually choose their reproductive partners. Animal females in nature have one key interest: survival of their own offspring. Sometimes that means choosing a strong male to mate with. Sometimes other male characteristics matter more."); ?></p>
			</div>
			
			<div class="screens" id="screen2">
				<p><?php echo _("Many mammal, bird, fish, and reptile males make displays to attract females. These displays are examples of <span class=\"key\">courtship</span> behavior. Some examples you may have seen include peacocks showing off their tail feathers; stallions or bulls pawing at the ground; or cuttlefish changing colors almost instantly. The purpose of courtship behavior is to allow for the selection of healthy mates. This system, while not foolproof, works well enough that it is common throughout the animal kingdom."); ?></p>
				<div>
					<div id="jquery_jplayer_1"></div>
					<div id="jp_container_1"></div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Courting peacocks"); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on screen2
					$('#screen2').fadeIn();
					playVid();
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

		$('a.readmore-toggle').click(function(){
			$('#screen1').fadeOut(function(){
				playVid();
				$('#screen2').fadeIn();
				$('a.readmore-toggle').fadeOut( function(){
					$('a.next-toggle').fadeIn();
				});
			});
		});

		$('a.back-toggle').click(function(){
			if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
				});
			}else{
				$('a.back-toggle').attr('href','11.php');
			}
		});
		//slides
		$(".rslides").responsiveSlides();
	});
	
	function playVid(){
		$("#jquery_jplayer_1").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", {
					webmv: "videos/12/peafowl.webm",
					m4v: "videos/12/peafowl.m4v"
				}).jPlayer("play");
			},
			
			ended: function() { // The $.jPlayer.event.ended event
				$(this).jPlayer("play"); // Repeat the media
			},
		
			swfPath: "scripts",
			supplied: "webmv, m4v",
			size: {
				 width: "550px",
				 height: "320px"
			},
			solutions: "flash, html",
			nativeVideoControls: {
				all: /./
			}
		});
	}
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
