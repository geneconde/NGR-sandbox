<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #ff4261; }
body { overflow: hidden; }
.wrap { border-left: 1px dashed #34bcd5; border-right: 1px dashed #34bcd5; }
.bg { background: url('images/4/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#screen1 { overflow: hidden; }
#screen2 .bottom { min-height: 290px; width:91.5%;margin:0 auto; }
#screen2 .bottom div { position: relative; float: left; width: 390px; }
#screen2 .bottom div:nth-child(2) { margin-right: 0; }
#screen2 .bottom div img { border: 18px solid #ffc540; margin-left: 10px; }
#screen2 .bottom div p { background: url(images/4/ribbon.png) no-repeat; padding: 5px 60px 0 60px; line-height: 1.2; width: 234px; height: 74px; text-align: center; position: absolute; bottom: -56px;margin-left: 17px; }
#screen2, #screen3 { display: none; }
#screen2 div:nth-child(2) p {font-size:20px;}
#screen2 p { font-size:22px; }
#screen3 #slideHolder div { float: left; background: url(images/4/placeholder.png);background-size: 100% 100%; no-repeat; width: 400px; height: 300px;margin-bottom:10px; }
#screen3 #slideHolder div:first-child {margin-right:10px;}
/* #screen3 #slideHolder div:nth-child(2) { margin-right: 0; } */
#screen3 #slideHolder div img { margin: 0 0 0 33px; }
body #screen3 #slideHolder div p { text-align: center; padding-top: 15px; width: 100%; }
#buttons .next { display:none; }

#slideHolder { width: 95%;display:block;margin:0 auto;padding-top:30px;	 }
#natural, #man-made { width: 860px;}
#natural img, #man-made img {
	position: absolute;
    display: block;
    -webkit-transition: all 1s ease-in-out;
    opacity: 0; 
    overflow: hidden;
}
#natural img.active, #man-made img.active2{
    opacity: 1;
    height: auto;
    -webkit-transition: all 1s ease-in-out;
}
#magnifyHolder { float: right; width: 400px; }
.magnify {width:400px;  margin: 20px auto; position: relative;}

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
	background: url('images/4/periodicZoom.jpg') no-repeat;
	
	/*hide the glass by default*/
	display: none;
}
/*To solve overlap bug at the edges during magnification*/
.small { display: block; width:400px; }
#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
#graphDiv img { width:100%; margin-top: 40px; }
.pet:hover {cursor: pointer;}
.pet {width: 45%;padding: 0;display: block;margin: 20px auto 0;}
.click {text-align: center;font-size:22px;}
#close { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
#close:hover { cursor: pointer; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 30px; }
	#screen2 div:nth-child(2) p { font-size: 19px; }
	#screen2 p { font-size: 21px; }
	#screen3 p { clear:left; }
<?php } ?>
html[dir="rtl"] #screen3 #slideHolder div img { margin:0 36px 0 0; } 
html[dir="rtl"] .click { text-align: center; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .bottom div { width: 320px; }
	#screen2 .bottom div img { width: 270px; }
	#screen2 .bottom div p { margin-left: -11px; }
	html[dir="rtl"] #screen2 .bottom div p { left: 0; }
	#screen3 #slideHolder div { width: 335px; }
	#screen3 #slideHolder div img { margin: 0 0 0 10px; width: 315px; }
	#screen3 p { clear: both; }
	html[dir="rtl"] #screen3 #slideHolder div img { margin: 0 10px 0 0; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
		<div id="graphDiv" >
			<span id="close"><?php echo _('Close!'); ?></span>
			<img class="small" src="images/4/periodicZoom.jpg" width="200"/>
		</div>
			<div>
				<div id="screen1" class="screens">
					<h1><?php echo _('Reviewing big ideas... about the composition of matter'); ?></h1>
					<p><?php echo _('Anything that has mass and takes up space is called <span class="key">matter</span>. All matter is made up of particles that are too small to see, called <span class="key">atoms</span>. An atom is the smallest unit of matter that retains its special properties. Atoms can be measured by weighing them, or by measuring their effects upon other objects. Different substances have different <span class="key">compositions</span> or make-up of atoms. <span class="key">Substances</span> that are composed of one kind of atom are called <span class="key">elements</span>. For example, a bar of pure gold is composed of only many, many gold atoms. Silver, iron, oxygen, and helium are some other examples of elements. There are 94 such elements found in nature.'); ?></p>

					<div class="bottom">
						<img class="small pet" src="images/4/periodic.jpg"/>
						<p class="click"><?php echo _('Click the image to enlarge the graph.'); ?></p>
					</div>
				</div>

				<div id="screen2" class="screens">
					<p><?php echo _('Not all matter is composed of single atoms of the 94 elements. Two or more atoms of the same element or of different elements can join together to form what is called a <span class="key">molecule</span>.  For example, the oxygen that green plants produce and that you breathe consists of two atoms of oxygen joined together. Water on the other hand is composed of two atoms of hydrogen and one atom of oxygen.'); ?></p>
					<p><?php echo _('The 94 naturally occurring atoms make up the matter that we see and use everyday. Substances that are composed of the atoms of at least two different elements are called <span class="key">compounds</span>. Table salt is a compound of atoms of sodium and chlorine. Table sugar is composed of atoms of carbon, hydrogen and oxygen. Water is not usually thought of as a compound, but it really is. Can you see why?  Water, salt and sugar are just three of a seemingly endless list of compounds that are either found in nature or made by humans.'); ?></p>
					<div class="bottom">
						<div>
							<img src="images/4/water.png">
							<p><?php echo _('Water is a compound'); ?></p>
						</div>

						<div>
							<img src="images/4/salt.png">
							<p><?php echo _('Table salt is a compound of atoms of sodium and chlorine'); ?></p>
						</div>
					</div>
				</div>
				<div id="screen3" class="screens">
					<div id="slideHolder">
						<div id="natural">
							<p><?php echo _('Natural'); ?></p>
							<img src="images/4/coal.png" class="active"/>
							<img src="images/4/water.png"/>
							<img src="images/4/salt.png">
						</div>

						<div id="man-made">
							<p><?php echo _('Man-made'); ?></p>
							<img src="images/4/plastic.png" class="active2"/>
							<img src="images/4/gasoline.png"/>
							<img src="images/4/sugar.png"/>
							<img src="images/4/paint.png"/>
						</div>
					</div>

					<p><?php echo _('Water, salt and sugar are just a few of the many, many compounds found in nature. But people make many other compounds by combining two or more elements or changing the composition of substances. For example, the donuts or muffins you find in a bakery or grocery store are really compounds containing substance like flour, yeast and various ingredients that are changed into the donut or muffin when they are baked. Gasoline is made by changing the composition of naturally occurring oil.'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Panning gold in the river...'); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		
		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});

		setInterval('swapImages()', 3500);
		setInterval('swapImages2()', 3650);
		
		var screen1 = $('#screen1'),
			screen2 = $('#screen2'),
			screen3 = $('#screen3'),
			back = $('a.back-toggle'),
			more = $('a.readmore-toggle'),
			next = $('a.next-toggle');
		
		back.click(function() {
			if(screen1.is(':visible')) {
				document.location.href = "3.php#answer";
			} else if (screen2.is(':visible')) {
				//addHash('#screen2');
				screen2.fadeOut(function() {
					//$('.bg').css('background-image', 'url(images/4/bg.jpg)');
					screen1.fadeIn();
				});
			} else if (screen3.is(':visible')) {
				next.fadeOut(function() { more.fadeIn(); });
				screen3.fadeOut(function(){
					screen2.fadeIn(function(){
					});
				})
			}
		});
		
		more.click(function(){
			//more.fadeOut(function() { next.fadeIn(); });
			if(screen1.is(':visible')) {
					screen1.fadeOut(function(){
					//$('.bg').css('background-image', 'url(images/4/bg2.jpg)');
					screen2.fadeIn();
					window.location.hash = 'screen2';	
				});
			} else if (screen2.is(':visible')) {
					screen2.fadeOut(function(){
					//$('.bg').css('background-image', 'url(images/4/bg2.jpg)');
					screen3.fadeIn();
					more.fadeOut(function() { next.fadeIn(); });
					window.location.hash = 'screen3';	
				});
			}	 
		});

		/*var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#screen3") != -1 || oldURL.indexOf("5.php") != -1) {
			screen1.fadeOut(function() { 
				screen2.fadeIn(); 
				//$('.bg').css('background-image', 'url(images/4/bg2.jpg)');
			});

			more.fadeOut(function() { next.fadeIn(); });
			//addHash('#screen2');
		}*/
		
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
		});
	});// document ready end
	
	function swapImages(){
		var active = $('#natural .active');
		var next = ($('#natural .active').next().length > 0) ? $('#natural .active').next() : $('#natural img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	
	function swapImages2(){
		var active = $('#man-made .active2');
		var next = ($('#man-made .active2').next().length > 0) ? $('#man-made .active2').next() : $('#man-made img:first');  
		active.removeClass('active2');
		next.addClass('active2');
	}
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
