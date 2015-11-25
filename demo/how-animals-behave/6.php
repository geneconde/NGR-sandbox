<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'how-animals-behave';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("How Animals Behave"); ?></title>

<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" /><link rel="stylesheet" type="text/css" href="styles/global.css" />

<script src="scripts/jquery.min.js"></script>
<script src="scripts/button.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<style>
	html { background-color: #FFFFFF; }
	body { display: none; }
	h1 { color: #DF5E54 }	
	p { width: 100%; text-align: left; font-size: 22px; }
	.wrap {	border-left: 1px dashed #C2E0D6; border-right: 1px dashed #C2E0D6; }
	.bg { 
		background: url(images/6/bg.jpg) 0 0 no-repeat;  
		background-size: 100% 100%; 
		width:100%; 
		height:100%; 
		position:relative; 
	}	
	.container img {
		width: 32%; 
		border: solid white;
		display: inline-block;
		margin: 2% auto;
		}
	#screen1 video{	
		display: block;		
		width: 300px;	
		height: 230px;	
		margin-left: 3%
		}
	#buttons .next { display: none; }
	#parentDiv1 { width: 100%; overflow: hidden; }
	#parentDiv1 p { width: 100%; }
	#parentDiv1 div { float: left; }	
	#div1 { width: 63% }	
	#parentDiv2 { overflow: hidden; width: 100%; }
	#parentDiv2 div { float: left; margin-top: 1%;}
	/* #parentDiv2 p { width: 100%; font-size: 22px; } --> */
	#div2 { width: 20%; }
	#div3 { width: 56%; }
	#div4 { width: 20%; }	
	#div2 img { width: 100%; padding-top: 20px; }
	#div4 img { width: 100%; padding-top: 20px; }	
	#screen2 { display: none; padding-top: 1%; }
	#screen2 .container { margin-left: 7%; height: 200px; }
	.container div { float: left; margin-left: 2%; }
	.container div video { }	
	#sealVideo, #duckVideo { height: 200px;  }
	
	#container { margin-left: 25% }
	#container img { height: 120px; margin: 0 10px; }

	html[dir="rtl"] p { text-align: right;margin-right:5px; }
	html[dir="rtl"] #screen2 #container { margin-right: 210px; }

	<?php if($language == "es_ES") { ?>
		h1 { font-size:30px; }
		p { font-size:20px; }
	<?php } ?>

	@media only screen and (max-width: 1250px) {
		p {font-size: 20px;}
		#screen2 {padding-top: 30px;}

		<?php if($language == "es_ES") { ?>
			p { line-height: 24px; }
		<?php } ?>
	}
	
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		#screen2 { padding-top: 35px; }
	}	
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
		#screen2 p { font-size: 22px; }
	}	
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		#parentDiv1 div { float: none; }
		#div1 { width: 100%; }
		#screen1 video { margin: 0 auto; }
		#screen2 .container { margin: 0; }
		#container { margin-left: 0; text-align: center; }
		html[dir="rtl"] #screen2 #container { margin: 0; }
	}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">			<h1><?php echo _("More big ideas... about how organisms behave"); ?></h1>
			<div id="screen1">
				<div id="parentDiv1" >					
				<div id="div1">
						<p><?php echo _("Let's look at behaviors of different organisms."); ?></p>
						<p><?php echo _("Hungry? Microorganisms and plants that use light to make food will automatically move toward light to get more for their food making process (photosynthesis)."); ?>	
						<br />						
						<?php echo _("The Venus fly trap is a plant and makes its own food. However, it lives in poor soil and is healthier if it gets nutrients from insects."); ?></p>	
						</div>
					<div class="container">
						<!-- <video controls>
							<source src="videos/6/venus-fly-trap.webm" type="video/webm">
						</video> -->
						<div class="video-container">
							<div id="jquery_jplayer_1"></div>
							<div id="jp_container_1"></div>
						</div>
					</div>				
				</div>	
				
				<div id="parentDiv2" >		
						<div id="div2">		
						<img src="images/6/a.png" />	
						</div>	
					<div id="div3">				
						<p><?php echo _("Scared? If a skunk is threatened it will warn the predator to stand down. If all the stomping and high tailing does not work, the skunk sprays an odor that will cause even bears to leave them alone."); ?></p>
						<p><?php echo _("When a person is scared, their heart rate increases, and the body releases stress hormones in response to something it sees is dangerous. People show different behavior in response to fear. Some people scream to scare off the one harming the person and to call for help at the same time. What do you do?"); ?></p>	
					</div>	
					
					<div id="div4">
						<img src="images/6/b.png" />
					</div>	
				</div>
			</div>
			<div id="screen2">	
				<p><?php echo _("Animals develop complex behaviors to help them survive in the wild. Those who have the most useful behaviors are more likely to survive and reproduce than those who don't. Those same useful behaviors are passed on to later generations. Eventually, an <span class='key'>inherited behavior</span> becomes common in a population of animals.  Not all behavior is inherited, although some is. The ability to learn is inherited.<span class='key'> Instinctual behavior </span> is any behavior that is inherited and not learned during life."); ?></p>				
				<div class="container">				
				
					<div> 
						<!-- <video controls id="sealVideo">
							<source src="videos/6/seal_converted.webm" type="video/webm">
						</video>	 -->	
						<div id="sealVideo" class="video-container">
							<div id="jquery_jplayer_2"></div>
							<div id="jp_container_2"></div>
						</div>
					</div>	
					
					<div>	
						<!-- <video controls id="duckVideo">	
							<source src="videos/6/duck.webm" type="video/webm">	
						</video> -->
						<div id="duckVideo" class="video-container">
							<div id="jquery_jplayer_3"></div>
							<div id="jp_container_3"></div>
						</div>
					</div>
				</div>		
				<p><?php echo _("Over many generations, dogs have gained abilities that make them desirable to people. They kill pests, help us hunt other animals, and even use their natural hunting abilities to herd our animals. Dogs are even able to learn new behaviors and associate them with words or actions."); ?></p>
				
				<div id="container">
					<img src="images/6/wolf.jpg" alt="Wolf">		
					<img src="images/6/sheep.jpg" alt="Sheep">		
				</div>				
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	
	<script>	
		var hash = window.location.hash.slice(1);	
		$(document).ready(function() {		
			if(hash == 'screen2') {		
				$('#screen1').hide();		
				$('h1').hide();			
				$('#screen2').show(function () {		
					$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();				
					});			
				});	
			}	
			
			/* screen transition */		
			$('a.back-toggle').click(function(){	
				if( $('#screen1').is(':visible') ) {
					document.location.href= "5.php";		
				} else {	
					$('#screen2').fadeOut(function(){
						$('#screen1').fadeIn(); 
						$('h1').fadeIn();
						});					
						$('a.next-toggle').fadeOut(function(){ 
							$('a.readmore-toggle').fadeIn(); 
							});				
							addHash('');	
					}		
			});			
			$('a.readmore-toggle').click(function(){	
				$('h1').fadeOut();		
					$('#screen1').fadeOut(function(){
					$('#screen2').fadeIn(); 
					$('a.back-toggle').fadeIn(); 	
					});								
					$('a.readmore-toggle').fadeOut(function(){	
						$('a.next-toggle').fadeIn();
					});						
					removeHash();	
					addHash('#screen2');	
				});		

				$("#jquery_jplayer_1").jPlayer({
					ready: function () {
						$(this).jPlayer("setMedia", {
							webmv: "videos/6/venus-fly-trap.webm",
							m4v: "videos/6/venus-fly-trap.m4v"		 
						}).jPlayer();
					},
				
					ended: function() { // The $.jPlayer.event.ended event
						$(this).jPlayer("play"); // Repeat the media
					},

					swfPath: "scripts",
					supplied: "webmv, m4v",
					size: {
						 width: "300px",
						 height: "230px"
					},
					solutions: "flash, html",
					nativeVideoControls: {
						all: /./
					}
				});	
				$("#jquery_jplayer_2").jPlayer({
					ready: function () {
						$(this).jPlayer("setMedia", {
							webmv: "videos/6/seal_converted.webm",
							m4v: "videos/6/seal_converted.m4v"		 
						}).jPlayer();
					},
				
					ended: function() { // The $.jPlayer.event.ended event
						$(this).jPlayer("play"); // Repeat the media
					},

					swfPath: "scripts",
					supplied: "webmv, m4v",
					size: {
						 width: "300px",
						 height: "200px"
					},
					solutions: "flash, html",
					nativeVideoControls: {
						all: /./
					}
				});
				$("#jquery_jplayer_3").jPlayer({
					ready: function () {
						$(this).jPlayer("setMedia", {
							webmv: "videos/6/duck.webm",
							m4v: "videos/6/duck.m4v"		 
						}).jPlayer();
					},
				
					ended: function() { // The $.jPlayer.event.ended event
						$(this).jPlayer("play"); // Repeat the media
					},

					swfPath: "scripts",
					supplied: "webmv, m4v",
					size: {
						 width: "300px",
						 height: "200px"
					},
					solutions: "flash, html",
					nativeVideoControls: {
						all: /./
					}
				});
});
</script>

	<section id="preloader">
		<section class="selected">
			<strong><?php echo _("Trapping insects..."); ?></strong>
		</section>
	</section>

	<?php require("setlocale.php"); ?>

</body>
</html>
