<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } if($language == "es_ES"){ ?> dir="es" <?php } ?>>
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
<script src="scripts/jquery.videoBG.js"></script>
<script src="scripts/global.js"></script>
<style>
.wrap { border-left: 1px dashed #B1834C !important; border-right: 1px dashed #B1834C !important; }
.bg { background-image: url('images/6/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#screen2, #screen3 { display: none; }
h1 { color: #F8EBB5; padding: 22px 0 0 30px; }
.bg > div { width: 93%; }
#buttons .next, img.back-toggle-screen { display:none; }

p { color: #000; text-align: left; padding:0px 0px !important}
.fire { background: url(images/6/steak.jpg) no-repeat; height: 335px; margin: 0 auto; width: 345px; background-size: 100%; position: relative; top: 49px; left: 0px; }
.fire img { height: 100%; }
#img-container { height: 200px; margin: 0 auto; }
#img-holder1 { width: 190px; height: 100%; background: url(images/6/paper1.png) no-repeat; background-size: 100%; float: left; margin-right: 20px; position: relative; }
#img-holder2 { width: 190px; height: 100%; background: url(images/6/paper2.png) no-repeat; background-size: 100%; float: left; margin-right: 20px; position: relative; }
#img-holder3 { width: 190px; height: 100%; background: url(images/6/paper3.png) no-repeat; background-size: 100%; float: left; margin-right: 20px; position: relative; }
#img-holder4 { background: url(images/6/holder2.png) no-repeat; width: 400px; height: 408px; margin: 0 auto; background-size: 100%; }
#img-holder5 { width: 190px; height: 100%; background: url(images/6/paper4.png) no-repeat; background-size: 100%; float: left; position: relative; }

#img-container2 { height: 250px; margin: 0 auto; width: 600px; }
#img-container2 p { padding-top: 53px; }
#screen2 > p:nth-of-type(1) { padding-top: 25px !important; }
#screen2 > p:nth-of-type(2) { padding-top: 15px; }
.img-holder { background: url(images/6/holder3.png) no-repeat; height: 240px; background-size: 100%; float: left; width: 49%; }
.img-holder:first-child { margin-right: 10px; }
.img-holder img { height: 188px; width: 86%; position: relative; top: 34px; left: 21px; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; }
#img-container p { color: #000; position: absolute; }
#img-container2 p { text-align: center; }
#t1 { left: 90px; top: 145px; }
#t2 { left: 85px; top: 150px; }
#t3 { left: 95px; top: 145px; }
#t4 { left: 75px; top: 145px; }
#fpic1, #fpic2 { width: 70%; position: absolute; left: 45px; top: 45px; }
#spic1, #spic2 { width: 75%; position: absolute; left: 33px; top: 45px; }
#tpic1, #tpic2 { width: 75%; position: absolute; left: 35px; top: 45px; }
#ppic1, #ppic2 { width: 75%; position: absolute; left: 35px; top: 45px; }
#fpic2, #spic2, #tpic2, #ppic2 { display: none; }

#bgvid { width: 900px; height: 100%; position: absolute; top: 0; left: 0; }
#bgvid > div { width: 95%; text-align: center; margin: 0 auto; height: 100% !important; }
.videoBG_wrapper { height: 100% !important; min-height: 100% !important; min-width: 900px !important; }
#bgvid > div.videoBG { background: #000 url(images/6/foo.jpg); }
div#img-container p { padding-top:7px !important; }
#screen3 p { padding-top: 20px !important; }

html[dir='rtl'] h1 { padding-right: 30px !important; }
html[dir='rtl'] .bg p { text-align: right !important; }
html[dir='rtl'] #screen3 p { padding-top: 20px !important; }
html[dir='rtl'] .img-holder img { left: -20px; }
html[dir="rtl"] div#img-container p { padding-top:7px !important; }
<?php if($language == 'es_ES') { ?>
	h1 { font-size:34px; }
	p { font-size:22px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px; }
	#screen2 > p:nth-of-type(1) { padding-top: 0 !important; }
	#screen3 p { padding-top: 35px !important; }
	html[dir='rtl'] #screen3 p { padding-top: 35px !important; }
	html[dir="es"] p { font-size: 24px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	div#img-container div { width: 150px; }
	div#img-container div img { left: 25px; }
	#bgvid { width: 768px; }
	.videoBG_wrapper, .videoBG { width: 768px !important; min-width: 768px !important; }

}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("More big ideas... about the properties of matter"); ?></h1>
			<div id="screen1" class="screens">
				<p><?php echo _("We can describe matter based on the state it is in. <span class='key'>Solid</span>, <span class='key'>liquid</span>, and <span class='key'>gas</span> are the three common states used to describe matter. The particles that make up matter are atoms and molecules. The physical characteristics of those <span class='key'>atoms</span> and <span class='key'>molecules</span> decide its state."); ?></p>
				<div id="img-container">
					<div id="img-holder1">
						<img id="fpic1" src="images/6/image1.jpg">
						<img id="fpic2" src="images/6/image4.jpg">
						<p id="t1"><?php echo _("solid"); ?></p>
					</div>
					<div id="img-holder2">
						<img id="spic1" src="images/6/image2.jpg">
						<img id="spic2" src="images/6/image5.jpg">
						<p id="t2"><?php echo _("liquid"); ?></p>
					</div>
					<div id="img-holder3">
						<img id="tpic1" src="images/6/image3.jpg">
						<img id="tpic2" src="images/6/image6.jpg">
						<p id="t3"><?php echo _("gas"); ?></p>
					</div>
					<div id="img-holder5">
						<img id="ppic1" src="images/6/image7.jpg">
						<img id="ppic2" src="images/6/image8.jpg">
						<p id="t4"><?php echo _("plasma"); ?></p>
					</div>
				</div>
				<p><?php echo _("Solids are defined as substances that have a definite mass, shape and <span class='key'>volume</span>. Liquids are substances that have a definite mass and volume, but a shape that can vary. Gases are substances that have a definite mass but a shape and volume that can vary. For example, air is a gas. The main molecules in air are nitrogen, oxygen, and carbon dioxide. You can feel air molecules moving when the wind blows. Air particles are too small to be seen, but they can be felt when being pushed by a force we call pressure."); ?></p>
				<p><?php echo _("Plasmas are a special state of matter that is formed under such intense heat that even atoms and molecules break up. The Sun is an example of a plasma."); ?></p>
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("Matter can combine and separate in different ways. It may seem that snow disappears when it melts, but it really just changes into the liquid state of water. When water in a kettle boils down to almost nothing, it has turned into the gas state, vapor. The amount of water does not change when it goes from ice to water, or from water to vapor. Under normal circumstances, matter is not created or destroyed."); ?></p>
				<div id="img-container2">
					<div class="img-holder">
						<img src="images/6/physical.gif">
						<!--<p><span class="key"><?php echo _("Physical Change"); ?></span></p>-->
					</div> 
					<div class="img-holder">
						<img src="images/6/chemical.gif">
						<!--<p><span class="key"><?php echo _("Chemical Change"); ?></span></p>-->
					</div>
				</div>
				<div class="clear"></div>
				<br>
				<p><?php echo _("Another way to describe the properties of matter is to use the terms physical property and chemical property. A <span class='key'>physical property</span> is one that can be determined without changing the kind or identity of the matter. For example, the freezing or boiling points of water are physical properties because determining these points does not change kind of matter."); ?></p>
			
			</div>
			<div id="screen3" class="screens">
				<div id="bgvid">
					<div>
						<p><?php echo _("<span class='key'>Chemical properties</span> of matter are properties that can be seen during a chemical reaction—when one kind of substance is changed into another kind of substance. For example, whether or not a substance will burn is a chemical property, because when something burns, the kind of substance is changed into new kinds of matter."); ?></p>
					</div>
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
	var screenCount = 3;
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];
				if(screen == screenCount) {
					$('.bg').css('background-image','none');
					$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				}
			});
		}

		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn(); 
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('a.next-toggle').fadeOut( function(){ $('a.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut( function(){
					$('.bg').css('background-image', 'url("images/6/bg.jpg")');
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});	
			}
		});
		
		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) { 	
				$('h1').fadeOut();
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					//$('.bg').css('background-image','none');
					window.location.hash = '#screen3';
				});
			} 
		});
		
		$('#bgvid').videoBG({
			m4v:'images/6/6c.m4v',
			ogv:'images/6/6c.m4v',
			webm:'images/6/6c.webm',
			poster:'images/6/6c.m4v',
			scale:false,
			loop: true,
			zIndex:0
		});
		
		setInterval('swapImages1()', 5000);
	});
	
	function swapImages1(){
	  if($('#fpic1').is(':visible')) {
		$('#fpic1').fadeOut(1000);
		$('#spic1').delay(300).fadeOut(1000);
		$('#tpic1').delay(600).fadeOut(1000);
		$('#ppic1').delay(900).fadeOut(1000);
		$('#fpic2').delay(1000).fadeIn(1000);
		$('#spic2').delay(1300).fadeIn(1000);
		$('#tpic2').delay(1600).fadeIn(1000);
		$('#ppic2').delay(1900).fadeIn(1000);
	  } else {
		$('#fpic2').fadeOut(1000);
		$('#spic2').delay(300).fadeOut(1000);
		$('#tpic2').delay(600).fadeOut(1000);
		$('#ppic2').delay(900).fadeOut(1000);
		$('#fpic1').delay(1000).fadeIn(1000);
		$('#spic1').delay(1300).fadeIn(1000);
		$('#tpic1').delay(1600).fadeIn(1000);
		$('#ppic1').delay(1900).fadeIn(1000);
	  }
	}
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Freezing water to ice cubes..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
