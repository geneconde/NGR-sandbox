<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #000; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/8/bg.jpg); }

#screen1 img { margin: 5px auto 10px; display:block; width: 300px; height: 300px; }
#screen1 p { font-size: 22px; }

#screen2 { display: none; }
#screen2 p:first-child { padding: 15px 0; }
#trex { float: left; width: 400px; }
#tri { float: right; width: 400px; }
#trex p, #tri p { text-align: center; }

#buttons .next { display: none; }

#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
#graphDiv img { width: 500px; height: 500px; margin: 40px auto 0; }
.pet:hover {cursor: pointer;}
.pet {width: 45%;padding: 0;display: block;margin: 20px auto 0;}
#close { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
p.click { font-size: 22px; text-align: center; }
#close:hover { cursor: pointer; }

.magnify { position: relative; margin: 0 auto; width: 600px; }
.large {
	width: 175px; height: 175px;
	position: absolute;
	border-radius: 100%;
	
	/*Multiple box shadows to achieve the glass effect*/
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	/*Lets load up the large image first*/
	background: url('images/8/timeline.jpg') no-repeat;
	
	/*hide the glass by default*/
	display: none;
}
/*To solve overlap bug at the edges during magnification*/
.small { display: block; }

<?php if ($language == 'es_ES'): ?>
	#screen1 p { font-size: 20px; }
<?php endif; ?>

html[dir="rtl"] #screen1 p { font-size:21px; }


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 > div { width: 48%; }
	#screen2 > div img { width: 100%; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
				
			<div id="graphDiv" >
				<img class="small" src="images/8/timeline.jpg" width="200"/>
				<span id="close"><?php echo _("Close!"); ?></span>
			</div>
		
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about history of earth"); ?></h1>
				<p><?php echo _("The life forms that fossils represent changed over geological time. So different kinds of fossils found in rocks can help geologists tell about how old the rock might be. That's right! It works both ways. Scientists get clues from rock layers to figure out how old fossils are, and they get clues from how evolved the plant or animal is in the fossil to figure out how old the rock might be."); ?></p>
				<!--<img src="images/8/timeline.jpg" />-->
				<div class="right">
						<p class="click"><?php echo _("Click the image to enlarge."); ?></p>
						<img id="usa" class="small pet" src="images/8/timeline.jpg"/>
					</div>
					<!--<div class="magnify">
						<div class="large"></div>
						<img id="usa" class="small pet" src="images/8/timeline.jpg" width="600"/>						
					</div>-->
				<p><?php echo _("Fossils of simple life forms, like brachiopods and trilobites, are usually found early in the history of life on earth - like in the Cambrian geological time period around 500 million years ago. Fish are mostly found starting in the Devonian geological time period about 400 million years ago. Dinosaurs came later, starting at around 230 million years ago, then mammals, then humans and all the other animals in between."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("So if a geologist finds a rock with a dinosaur fossil in it, she knows that it can't be 400 or 500 million years old because dinosaurs didn't exist back then. Other clues like which specific dinosaur fossil they find – is it a T.Rex? or is it a triceratops? – help geologists be sure about a specific time range for the rock. If a rock has a dinosaur fossil bone in it, that tells geologists the rock can't be older than 230 million years old or younger than 65 million years old."); ?></p>
				<div id="trex">
					<img src="images/8/trex.jpg" />
					<p><?php echo _("Tyrannosaurus Rex fossil"); ?></p>
				</div>
				<div id="tri">
					<img src="images/8/triceratops.jpg" />
					<p><?php echo _("Triceratops fossil"); ?></p>
				</div>
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Geologist working on research..."); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
		} else if ($('#screen2').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});

	$(document).ready(function(){
		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});
	});

	var native_width = 0;
	var native_height = 0;

	//Now the mousemove function
	$(".magnify").mousemove(function(e){
		//When the user hovers on the image, the script will first calculate
		//the native dimensions if they don't exist. Only after the native dimensions
		//are available, the script will show the zoomed version.
		if(!native_width && !native_height)
		{
			//This will create a new image object with the same image as that in .small
			//We cannot directly get the dimensions from .small because of the 
			//width specified to 200px in the html. To get the actual dimensions we have
			//created this image object.
			var image_object = new Image();
			image_object.src = $(".small").attr("src");
			
			//This code is wrapped in the .load function which is important.
			//width and height of the object would return 0 if accessed before 
			//the image gets loaded.
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			//x/y coordinates of the mouse
			//This is the position of .magnify with respect to the document.
			var magnify_offset = $(this).offset();
			//We will deduct the positions of .magnify from the mouse positions with
			//respect to the document to get the mouse positions with respect to the 
			//container(.magnify)
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			
			//Finally the code to fade out the glass if the mouse is outside the container
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large").fadeIn(100);
			}
			else
			{
				$(".large").fadeOut(100);
			}
			if($(".large").is(":visible"))
			{
				//The background position of .large will be changed according to the position
				//of the mouse over the .small image. So we will get the ratio of the pixel
				//under the mouse pointer with respect to the image and use that to position the 
				//large image inside the magnifying glass
				var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
				var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				
				//Time to move the magnifying glass with the mouse
				var px = mx - $(".large").width()/2;
				var py = my - $(".large").height()/2;
				//Now the glass moves with the mouse
				//The logic is to deduct half of the glass's width and height from the 
				//mouse coordinates to place it with its center at the mouse coordinates
				
				//If you hover on the image now, you should see the magnifying glass in action
				$(".large").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
	</script>
	<?php include("setlocale.php"); ?>	
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
