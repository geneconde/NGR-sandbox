<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/layerslider.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<!--[if lt IE 9]>
	<script src="../assets/js/html5.js"></script>
<![endif]-->
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<style>
.bg { background: url('images/4/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap {border-left: 1px dashed #5C9F80;border-right: 1px dashed #5C9F80}
#screen > p { padding: 5px 0 0 0; }
#layerslider-container { color: white;background: url('images/4/holder.png') no-repeat; background-size: 100% 100%; width: 770px !important; height: 430px; margin: 0; margin: 0 auto; }
#layerslider { background-color: darkslategray; height: 410px !important; width: 750px !important; margin: 0 auto; margin-top: 10px !important; }
.ls-layer { padding: 10px 20px; height: 390px; width: 710px; }
.pic { height: 200px; padding: 0px 1px; }
#slide1 img { float: left; height: 230px; width: 230px; border: 2px solid #ed8a29; margin-right: 3px; }
#slide5 img { float: left; width; 150px; height: 300px; }
#slide5-div { float: left; width: 500px; height: 300px; }
#slide3-div { float: left; width: 400px; height: 300px; }
#slide3 img { float: left; width: 100%; }
#slide4-div { float: left; width: 400px; height: 300px; }
#slide4 img { float: left; width: 100%; }
#slide4 .magnify img { float: left; width: 100%; }

/* Layer Slider */

div#slide1.ls-layer.ls-active { width: 710px !important; }

/* Magnification */
.magnify {width: 300px; margin: 50px auto; position: relative; }
.magnify1 {width: 300px; margin: 50px auto; position: relative; }
#mag1 { background: url('images/4/s3a.jpg') no-repeat; }
#mag2 { background: url('images/4/s4b.jpg') no-repeat; }
.large {
	width: 175px; height: 175px;
	position: absolute;
	border-radius: 100%;
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	display: none;
}
.large1 {
	width: 175px; height: 175px;
	position: absolute;
	border-radius: 100%;
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	display: none;
}

.small { display: block; }
.small1 { display: block; }

html[dir="es"] #slide4-div { top: 0 !important; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.ls-layer.ls-active {	width: 660px !important; }
	div#slide1.ls-layer.ls-active { width: 650px !important; }
	#layerslider { width: 700px !important; margin: 0; }
	#slide1 img { width: 180px; height: auto; }
	#slide2 p { left: 375px !important; }
	.magnify { left: 395px !important; }
	#slide3-div { width: 360px !important; }
	#slide4 img { width: 85%; }
	#slide5-div { left: 48px !important; }
}	

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen"> 
				<h1><?php echo _("Reviewing big ideas... about staying healthy"); ?></h1>
				<p><?php echo _("Our bodies are composed of many systems that work together to keep us healthy. Each system is made up of a set of organs that function both independently and as a unit."); ?></p>
				
				<p><?php echo _("Browse through the slides below by clicking the left and right arrows"); ?>.</p>
				<div id="layerslider-container">
					<div id="layerslider">
						<div id="slide1" class="ls-layer" style="slidedirection: top; position: relative;">
							<img src="images/4/s1a.jpg" class="ls-s2" style="top: 0px; left: 20px; slidedirection: left; slideoutdirection: top; easingin: easeOutBack; easingout: easeInOutCirc; delayin: 700; delayout: 500; durationout: 500;">
							<img src="images/4/s1b.jpg" class="ls-s3" style="top: 0px; left: 260px; slidedirection: top; slideoutdirection: right; easingin: easeOutBack; easingout: easeInOutCubic; delayin: 1200; delayout: 300; durationout: 500;">
							<img src="images/4/s1c.jpg" class="ls-s2" style="top: 0px; left: 500px; slidedirection: right; slideoutdirection: bottom; easingin: easeOutBack; easingout: linear; delayin: 1400; delayout: 300; durationout: 500;">
							
							<p class="ls-s1" style="top: 235px; left: 0px; slidedirection: fade; easingin: easeInOutBack;"><?php echo _("The <span class='key'>circulatory system's</span> primary function is to move blood through the body, but it doesn't work alone. The <span class='key'>respiratory system</span> works with it to take in oxygen from the air to send through the blood to body tissues."); ?></p>
							
						</div>
						<div id="slide2" class="ls-layer" style="slidedirection: top; position: relative;">
							<img src="images/4/excretory.jpg" class="ls-s2" style="top: 30px; left: 50px; slidedirection: left; slideoutdirection: top; easingin: easeOutBack; easingout: easeInOutCirc; delayin: 700; delayout: 500; durationout: 500;width:40%;">
							
							<p class="ls-s1" style="top: 30px; left: 400px; slidedirection: fade; easingin: easeInOutBack;width:315px;"><?php echo _("Blood also brings carbon dioxide from body tissues to the lungs to be breathed out. In addition, blood carries nutrients from the digestive system to tissues all over the body. Chemical waste from the entire body is carried by blood and removed by the kidneys and other parts of the <span class='key'>excretory system</span>."); ?></p>
						</div>
						
						<div id="slide3" class="ls-layer" style="slidedirection: top; position: relative;">
							<div id="slide3-div" class="ls-s2" style="position: absolute; top: 50px; left: 20px; slidedirection: left; slideoutdirection: bottom; easingin: easeInOutBack; easingout: linear; delayin: 700; durationout: 500;">
								<p><?php echo _("The <span class='key'>endocrine system</span> produces chemicals that cause changes in other parts of the body. The endocrine system controls many of the functions of the digestive and reproductive systems. It also influences the nervous system and circulatory system by producing the substances that cause changes in heart rate, blood pressure, and breathing when we are excited or afraid."); ?></p>
							</div>
							<div class="ls-s3 magnify" style="position: absolute; top: 50px; left: 430px; slidedirection: right; slideoutdirection: right; easingin: easeInOutBack; easingout: linear; delayin: 200; durationout: 500;">
								<div class="large" id="mag1"></div>
								<img src="images/4/s3a.jpg" class="small" >
							</div>
						</div>
						<div id="slide4" class="ls-layer" style="slidedirection: bottom; position: relative;">
							<div id="slide4-div" class="ls-s2" style="position: absolute; top: 50px; left: 20px; slidedirection: bottom; slideoutdirection: right; easingin: easeInOutBack; easingout: linear; delayin: 500; durationout: 500;">
								<p><?php echo _("The <span class='key'>nervous system</span> consists of the brain, spinal cord, and a complex network of nerves that transmit information around the body. Sensory nerves are the tools that provide information about the world around us. Sight, sound, taste, touch, and smell are detected and information is sent to the brain. Motor nerves send messages from the brain to muscles around the body. When muscles contract, bones move."); ?></p>
							</div>
							<div class="ls-s3 magnify1" style="position: absolute; top: 50px; left: 430px; slidedirection: top; slideoutdirection: right; easingin: easeInOutBack; easingout: linear; delayin: 1000; durationout: 500;">
								<div class="large1" id="mag2"></div>
								<img src="images/4/s4b.jpg" class="small1" >
							</div>
						</div>
						<div id="slide5" class="ls-layer" style="slidedirection: top; position: relative;">
							<img src="images/4/s2a.png" class="ls-s5" style="position: relative; top: 50px; left: 30px; slidedirection: left; slideoutdirection: top; easingin: easeInOutBack; easingout: linear; delayin: 200; durationout: 500;">
							<div id="slide5-div" class="ls-s5" style="position: relative; top: 95px; left: 55px; slidedirection: right; slideoutdirection: bottom; easingin: easeInOutBack; easingout: linear; delayin: 1000; durationout: 500;">
								<p><?php echo _("The <span class='key'>skeletal system</span> is responsible for providing support for the rest of the body. It also provides attachment points for muscles, which contract to allow movement. This movement is made possible by energy delivered by blood, and is controlled by the nervous system. The skeletal system is also where new blood cells are made."); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div id="buttons">
		<a href="3.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Warming up for exercise..."); ?></strong></section></section>
	<script src="scripts/jquery-easing-1.3.js"></script>
	<script src="scripts/layerslider.kreaturamedia.jquery.js"></script>
	<script>
	var native_width = 0;
	var native_height = 0;
	var bgp = 0;
	$(document).ready(function() {
		$('#layerslider').layerSlider({
			skinsPath : 'layerslider/skins/',
			skin : 'glass',
			animateFirstLayer : true,
			autoStart : false,
			navStartStop : false,
			navButtons : false,
			responsive : false,
			slideDelay : 0
		});
		
		$(".magnify").mousemove(function(e) {
			if(!native_width && !native_height) {
				var image_object = new Image();
				image_object.src = $(".small").attr("src");
				native_width = image_object.width;
				native_height = image_object.height;
			} else {
				var magnify_offset = $(this).offset();
				var mx = e.pageX - magnify_offset.left;
				var my = e.pageY - magnify_offset.top;

				if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
					$(".large").fadeIn(100);
				} else {
					$(".large").fadeOut(100);
				}
				if($(".large").is(":visible")){
					var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
					var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
					bgp = rx + "px " + ry + "px";
					var px = mx - $(".large").width()/2;
					var py = my - $(".large").height()/2;
					$(".large").css({left: px, top: py, backgroundPosition: bgp});
					
				}
			}
		});
		
		$(".magnify1").mousemove(function(e) {
			if(!native_width && !native_height) {
				var image_object = new Image();
				image_object.src = $(".small1").attr("src");
				native_width = image_object.width;
				native_height = image_object.height;
			} else {
				var magnify_offset = $(this).offset();
				var mx = e.pageX - magnify_offset.left;
				var my = e.pageY - magnify_offset.top;

				if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0) {
					$(".large1").fadeIn(100);
				} else {
					$(".large1").fadeOut(100);
				}
				if($(".large1").is(":visible")){
					var rx = Math.round(mx/$(".small1").width()*native_width - $(".large1").width()/2)*-1;
					var ry = Math.round(my/$(".small1").height()*native_height - $(".large1").height()/2)*-1;
					bgp = rx + "px " + ry + "px";
					var px = mx - $(".large1").width()/2;
					var py = my - $(".large1").height()/2;
					$(".large1").css({left: px, top: py, backgroundPosition: bgp});
					
				}
			}
		});
		
		$(".ls-nav-next").click(function() { 
			if($("#slide3").is(":visible")) {
				native_width = 0;
				native_height = 0;
				bgp = 0;
			}
		});

	
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
