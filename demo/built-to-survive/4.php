<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES"){ ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/coin-slider-styles.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/coin-slider.min.js"></script>
<style>
.bg { background-image: url('images/4/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
p { text-align: left; }
h1 { color: #916235; }
#buttons .next, img.back-toggle-screen { display:none; }
#screen2, #screen3 { display: none; }
#screen2 .pic { height: 300px; width: 300px; float: left; }
#screen2 .pic img { height: 100%; }
#screen3 .pic { height: 240px; margin: 0 auto; width: 700px; }
#screen3 .pic img { height: 100%; float: left; margin-right: 10px; }
#coin-slider { margin: 0 auto; }
.cs-buttons a { border: 1px solid #fff; }
.cs-active { background-color: #50AD50; color: #FFFFFF; }
#images { height: 250px; margin: 0 auto; width: 96%; }
#images .pic { height: 100%; float: left; width: 49%;  }
#images .pic:first-child { margin-right: 10px; }
#images .pic img { height: 100%; width: 400px; margin: 0 auto; }
#fpic2, #fpic3, #fpic4, #spic2, #spic3, #spic4 { display: none; }

.magnify {width: 200px; margin: 50px auto; position: relative; padding-right: 15px; }
/*Lets create the magnifying glass*/
.large {
	width: 175px; height: 175px;
	position: absolute;
	border-radius: 100%;
	
	/*Multiple box shadows to achieve the glass effect*/
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	/*Lets load up the large image first*/
	background: url('images/4/bacteria.jpg') no-repeat;
	
	/*hide the glass by default*/
	display: none;
}
/*To solve overlap bug at the edges during magnification*/
.small { display: block; }
<?php if($language == "es_ES") { ?>
		h1 { font-size:29px; }
	<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#images { width: 100%; }
	#images .pic img { width: 360px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="es"] h1 { font-size: 27px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("Reviewing big ideas... about being built to survive"); ?></h1>
				<p><?php echo _("Living things can be classified into broad categories that share similar physical characteristics called adaptations. <span class='key'>Adaptations</span> are physical characteristics in a living thing's <span class='key'>anatomy</span> that help it survive. The following sections describe some of the major categories of living things and some of the adaptations, or special things of the category that help creatures survive, shared by species."); ?></p>
				<div id="coin-slider">
					<img src="images/4/cactus.jpg">
					<img src="images/4/turtle.jpg">
					<img src="images/4/blowfish.jpg">
					<img src="images/4/venusflytrap.jpg">
					<img src="images/4/camel.jpg">
					<img src="images/4/fish.jpg">
				</div>
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("We will begin our review with microorganisms. Microorganisms are too small to be seen with the naked eye, but they exist throughout nature. One such microorganism is called <span class='key'>bacteria</span>, which is pictured at the bottom. Some microorganisms are only one <span class='key'>cell</span> in size. Its <span class='key'>DNA</span>, the chemical codes that define the organism, is contained in a centrally located region called the <span class='key'>nucleoid</span>."); ?></p>
				<div class="pic magnify">
					<div class="large"></div>
					<img class="small" src="images/4/bacteria.jpg">
				</div>
				<br/><br/>
				<p><?php echo _("On the outside of the bacteria, small hair-looking structures called <span class='key'>pili</span> enable the cell to attach to other cells. The long tail-looking structures at the end of the bacteria are the <span class='key'>flagella</span>. The flagella are a special adaptation that help the bacteria get from place to place."); ?></p>
				<p><?php echo _("Hover your mouse over the image of the bacteria to see it up close."); ?></p>
			</div>
			<div id="screen3" class="screens">
				<p><?php echo _("The next kind of living thing we will review is <span class='key'>fish</span>. There are over 20,000 known species of fish, but some similar and general adaptations can be seen in how most fish are built. For example, most fish obtain the <span class='key'>oxygen</span> they need to survive through water taken in through an adaptation called <span class='key'>gills</span>."); ?></p>
				<div id="images">
					<div class="pic">
						<img id="fpic1" src="images/4/fish.jpg">
						<img id="fpic2" src="images/4/fish2.jpg">
						<img id="fpic3" src="images/4/fish3.jpg">
						<img id="fpic4" src="images/4/fish4.jpg">
					</div>
					<div class="pic">
						<img id="spic1" src="images/4/whale.jpg">
						<img id="spic2" src="images/4/whale2.jpg">
						<img id="spic3" src="images/4/dolphin.jpg">
						<img id="spic4" src="images/4/porpoise.jpg">
					</div>
				</div>
				<p><?php echo _("Other sea creatures, such as whales, porpoises, manatees, and dolphins, are classified as <span class='key'>mammals</span> because they do not possess gills; they breathe in air to get their oxygen through a special adaptation called a <span class='key'>blowhole</span>."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Adapting to surroundings..."); ?></strong></section></section>
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
					$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();
					});
				}
			});
		}

		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('#screen1').fadeIn();
					$('h1').fadeIn(); 
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('a.next-toggle').fadeOut( function(){ $('a.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut( function(){
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
					window.location.hash = '#screen3';
				});
			}
		});

        $('#coin-slider').coinslider({
			width: 400
		});
		
		setInterval('swapImages1()', 4000);
		setTimeout(function() {
			setInterval('swapImages2()', 4000);
		}, 2000);
		
		var native_width = 0;
		var native_height = 0;

		$(".magnify").mousemove(function(e){
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
				
				if($(".large").is(":visible")) {
					var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
					var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
					var bgp = rx + "px " + ry + "px";
					var px = mx - $(".large").width()/2;
					var py = my - $(".large").height()/2;
					$(".large").css({left: px, top: py, backgroundPosition: bgp});
				}
			}
		});
	});
	
		
	function swapImages1(){
	  if($('#fpic1').is(':visible')) {
		$('#fpic1').fadeOut(1000);
		$('#fpic2').delay(1300).fadeIn(1000);
	  } else if ($('#fpic2').is(':visible')) {
		$('#fpic2').fadeOut(1000);
		$('#fpic3').delay(1300).fadeIn(1000);
	  } else if ($('#fpic3').is(':visible')) {
		$('#fpic3').fadeOut(1000);
		$('#fpic4').delay(1300).fadeIn(1000);
	  } else {
		$('#fpic4').fadeOut(1000);
		$('#fpic1').delay(1300).fadeIn(1000);
	  }
	}
	
	function swapImages2(){
	  if($('#spic1').is(':visible')) {
		$('#spic1').fadeOut(1000);
		$('#spic2').delay(1300).fadeIn(1000);
	  } else if ($('#spic2').is(':visible')) {
		$('#spic2').fadeOut(1000);
		$('#spic3').delay(1300).fadeIn(1000);
	  } else if ($('#spic3').is(':visible')) {
		$('#spic3').fadeOut(1000);
		$('#spic4').delay(1300).fadeIn(1000);
	  } else {
		$('#spic4').fadeOut(1000);
		$('#spic1').delay(1300).fadeIn(1000);
	  }
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
