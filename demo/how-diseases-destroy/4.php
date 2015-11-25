<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/lightbox.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/lightbox.js"></script>
<script src="scripts/prefixfree.js"></script>
<style>
html { background-color: #FFFFFF; overflow: hidden; }
body { display: none; overflow: hidden; }	
p { text-align: left; }
.bg { background-image: url('images/4/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
h1 { color: #4d99a6; }
.wrap {border-left: 1px dashed #5BBFC1; border-right: 1px dashed #5BBFC1;}
#col1_page1{ width:43%; margin-left:49px;}
#col2_page1{width:42%; margin-left: 48px;}

#col1_page2{width:41%; margin: 65px 0 0 68px;}
#col2_page2{width:42%; margin:60px 0 0 56px;}

#col1_page3{width:41%; margin: 65px 0 0 72px;}
#col2_page3{width:44%; margin:60px 0 0 0;}

article {margin-top:30px; width:99.5%; margin-bottom:15px; padding-left:10px;}
article h2 {color: black;}
#ins {margin-top:10px; width:98%;}
figure{width:80%; height:170px;  max-height:95%;}
#buttons .next, img.back-toggle-screen { display:none; }
.mtop{margin-top:50px;}
#scrn2_img{width:92%; height:425px; max-height:95%; margin:0; margin-top:75px;}

#scrn2_img img {width:100%;}

#scrn3_img{position: relative;width:94%; height:220px; max-height:95%; }
#scrn3_img img {width:80%;}
.magnify {width: 200px; margin: 50px auto; position: relative;}

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
	background: url('images/4/4a_zoom.jpg') no-repeat;
	
	/*hide the glass by default*/
	display: none;
}
/*To solve overlap bug at the edges during magnification*/
.small { display: block; }

#bacteria {
	/* background: url(images/4/4c.png) no-repeat; */
	position: relative;
	height: 340px;
	top: -60px;
	left: -5px;
}
#bacteria p {  }
#bacteria p { position: absolute; font-size: 18px; cursor: pointer; }
#bacteria p:nth-child(5):hover, #bacteria p:nth-child(6):hover, #bacteria p:nth-child(7):hover { cursor: pointer; }

#ribosomes { color: #598527; left: 15px; top: 104px; }
#cytoplasm { color: #a67c52; left: 170px; top: 245px; }
#cellmem { color: #7b2e00; left: 220px; top: 220px; }
#cellwall { color: #f26d7d; left: 0px; top: 145px; }
#capsule { color: #0076a3; left: 13px; top: 121px; }
#nucleoid { color: #32004b; left: 245px; top: 193px; }
#flagellum { color: #077579; left: 282px; top: 128px; width: 110px; text-align: center; }
#pilus { color: #45a86f; left: 80px; top: 64px; }
#dna { color: #9d3e47; left: -30px; top: 184px; width: 120px; text-align: center; }
		
#desc { margin:-30px 0 0 60px; width:85.5%;}
#desc p {text-align:center}
.description {padding:0; margin:0; font-size:22px; !important}
.title {margin:0;}
#title {padding:72px 0 0 0; width:42%; margin-left:35px;}
p {font-size:24px; padding:0;}
.allignment{text-align:left; padding: 10px 10px 0 10px; line-height:25px;}
.align-top{ position:relative; top:-10px;}
#screen1{height:630px; width:100%!important; max-width:100%!important; background:url('images/4/container1.png') no-repeat; background-size:100% 100%;}
#screen2{height:630px; width:100%!important; max-width:100%!important; background:url('images/4/container2.png') no-repeat; background-size:100% 100%;}
#screen3{height:630px; width:100%!important; max-width:100%!important; background:url('images/4/container2.png') no-repeat; background-size:100% 100%;}
#col2_page3 h2 { padding-top: 10px; margin-left: 75px; }
#desc h2.title { margin-left: 0; }
span.magni-label { font-size: 19px; margin-left: 54px; }
.click {display: inline-block !important; padding-top: 20px; vertical-align: middle !important;color:#9E4D84 !important; text-align: center;}
.pet:hover { cursor: pointer; }
#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;padding:10px;}
#graphDiv img { margin: 0 auto; width: 90%; display: block; }
#close { background: white; color: #406468; display: block; margin: 0 auto; width: 80px; padding:10px; border-radius: 5px;margin-top:20px; text-align: center; }
#close:hover { cursor: pointer; }
#graphDiv span.labels { position: absolute; font-size: 28px; }
span.label1 { top: 186px; left: 88px; color: #598527; }
span.label2 { top: 525px; left: 450px; color: #a67c52; }
span.label3 { top: 460px; left: 535px; color: #7b2e00; }
span.label4 { top: 302px; left: 65px; color: #f26d7d; }
span.label5 { top: 233px; left: 85px; color: #0076a3; }
span.label6 { top: 410px; right: 150px; color: #32004b; }
span.label7 { top: 261px; right: 61px; font-size: 20px !important; color: #077579; }
span.label8 { top: 73px; left: 250px; color: #45a86f; }

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 25px; }
	#desc p { font-size: 18px; }
	#screen2 p { font-size: 22px; }
	#bacteria p:nth-child(5) {width: 90px;margin-left: 15px;}
<?php endif; ?>

html[dir="rtl"] #title {margin-right: 488px;}
html[dir="rtl"] h1 {font-size: 29px;}
html[dir="rtl"] #col2_page1 p {margin-right: 45px;}
html[dir="rtl"] #col1_page2 {margin: 65px 0 0 55px;}
html[dir="rtl"] #col2_page2 {margin: 60px 0 0 40px;}
html[dir="rtl"] #bacteria {right: -57px;}
html[dir="rtl"] #nucleoid {top: 175px;}
html[dir="rtl"] #cellwall {width: 50px;}
html[dir="rtl"] #ribosomes {left: -1px;}
html[dir="rtl"] span.label6 {top: 388px;right: 115px;width: 182px;}
html[dir="rtl"] span.label1 {left: 59px;}
html[dir="rtl"] span.label4 {left: 109px;width: 50px;}
html[dir="rtl"] #close {margin-top: 5px;}
html[dir="rtl"] #col2_page3 h2 {text-align: center;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 10px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#col1_page1 p, #screen2 #col1_page2 p { font-size: 20.8px; }
	#col2_page2 { margin: 60px 0 0 35px; }
	#screen3 p { font-size: 23px; }
	#ribosomes { left: -15px; top: 78px; }
	#cytoplasm { left: 100px; top: 205px; }
	#cellmem { left: 210px; top: 185px; }
	#cellwall { left: -17px; top: 118px; }
	#capsule { left: -10px; top: 96px; }
	#nucleoid { left: 225px; top: 135px; }
	#flagellum { left: 250px; top: 103px; color: #0014FF; width: auto; }
	#pilus { left: 60px; top: 47px; }
	html[dir="rtl"] #nucleoid { top: 141px; width: 150px; left: 165px; font-size: 17px; }
	html[dir="rtl"] #cellmem { left: 180px; }
	span.label1 { top: 158px; left: 59px; }
	span.label2 { top: 455px; left: 385px; }
	span.label3 { top: 390px; left: 440px; }
	span.label4 { top: 255px; left: 50px; }
	span.label5 { top: 198px; left: 65px; }
	span.label6 { top: 340px; right: 125px; }
	span.label7 { top: 222px; right: 50px; }
	span.label8 { top: 73px; left: 250px; }
	html[dir="rtl"] span.label6 { top: 315px; right: 80px; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="graphDiv" >
					<span class='label1 labels'><?php echo _("Ribosomes"); ?></span>
					<span class='label2 labels'><?php echo _("Cytoplasm"); ?></span>
					<span class='label3 labels'><?php echo _("Cell membrane"); ?></span>
					<span class='label4 labels'><?php echo _("Cell wall"); ?></span>
					<span class='label5 labels'><?php echo _("Capsule"); ?></span>
					<span class='label6 labels'><?php echo _("nucleoid (DNA)"); ?></span>
					<span class='label7 labels'><?php echo _("Flagellum"); ?></span>
					<span class='label8 labels'><?php echo _("Pilus"); ?></span>
					<img src="images/4/large4c.jpg" />
					<span id="close"><?php echo _('Close me!'); ?></span>
				</div>						
			<div id="screen1" class="screens">
				<div id="title">
					<h1><?php echo _("Reviewing big ideas... about how diseases destroy"); ?></h1>
				</div>
				
				<section id="col1_page1" class="fl">					
					<p><br/><?php echo _("A <span class='key'>disease</span> is a change in the processes inside an organism that does not let the organism do its job. An organism can just break down by itself, such as when an organ stops working because of traits passed on from ancestors, or an organism can be damaged by toxins (poison), radiation, or invading <span class='key'>bacteria</span> and <span class='key'>viruses</span>."); ?> </p>
					  <p><?php echo _("First we will discuss diseases that are caused by invading bacteria and viruses, and then we will look at chemical substances causing disease."); ?> </p>
				</section>
				
				<section id="col2_page1" class="fl">					
						<p><?php echo _("Hover your magnifying glass to view bacterial colonies..."); ?></p>								
				
						<div class="magnify">
							<div class="large"></div>
							<img class="small" src="images/4/4a_zoom.jpg" width="200"/>							
						</div>
				</section>
				<div class="clear"></div>
			</div>			
			
			<div id="screen2" class="screens">
				<section id="col1_page2" class="fl">
					<p><?php echo _("When bacteria or poisons invade our bodies, usually the body will fight off the invasion. Our bodies have a system called the <span class='key'>immune system</span>, which is the body's defense against infectious organisms and other invaders."); ?></p>
					<p> <?php echo _("Sometimes, however, the invasion is more than what our body can resist, and the immune system cannot overcome the invader. A disease may then develop and symptoms of disease will appear. <span class='key'>Symptoms</span> are a series of changes in the body that are signs of an invading organism. Symptoms brought on by a virus might be a fever, nausea (the feeling you need to vomit), headache, and a lot of sweating."); ?></p>
				</section>
				<section id="col2_page2" class="fl">					
					<div id="scrn2_img">
						<img src="images/4/defend.jpg"/>	
						<!--<img src="images/4/animate1.png" class="active"/>
							<img src="images/4/animate2.png"/>
							<img src="images/4/animate3.png"/>	
						-->	
							
					</div>					
				</section>
				<div class="clear"></div>
			</div>			
			
			<div id="screen3" class="screens">
				<section id="col1_page3" class="fl">
					<p><br/><?php echo _("Many diseases are caused by invading <span class='key'>microbes</span> (a life form not seen with the naked eye). Let's take a closer look at bacteria and viruses."); ?><br/><br/>
					   
					   <?php echo _("<span class='key'>Bacteria</span> are single-celled organisms. They can be shaped like rods, spheres, or even spirals, but they are very tiny."); ?><br/><br/>
					   
					   <?php echo _("Now look at the diagram of a bacterial cell at the right."); ?><br/><br/>
					   <?php echo _("Click on the different parts of the cell and discover what they do."); ?>
					
					</p>
				</section>
				<section id="col2_page3" class="fl">
					<h2><?php echo _('Bacteria Cell Anatomy'); ?></h2>
					<span class='magni-label click'><?php echo _("Click image to view the labels clearly."); ?></span>					
					 <figure id="scrn3_img">		
											
						<div id="bacteria">
							<img src="images/4/4c.png" class="pet" >
							<p id="ribosomes"><?php echo _("Ribosomes"); ?></p>
							<p id="cytoplasm"><?php echo _("Cytoplasm"); ?></p>
							<p id="cellmem"><?php echo _("Cell membrane"); ?></p>
							<p id="cellwall"><?php echo _("Cell wall"); ?></p>
							<p id="capsule"><?php echo _("Capsule"); ?></p>
							<p id="nucleoid"><?php echo _("nucleoid (DNA)"); ?></p>
							<p id="flagellum"><?php echo _("Flagellum"); ?></p>
							<p id="pilus"><?php echo _("Pilus"); ?></p>
						</div>							

					</figure> 
					<div id="desc">
						<h2 class="title key"></h2>
						<p class="description"></p>
					</div>
				</section>
				<div class="clear"></div>
			</div>			
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Adjusting microscope lenses..."); ?></strong></section></section>
<script>
$(document).ready(function() {
		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});
	});	
/*$("#ribosomes").click(function(){	
   $('.title').text("<?php echo _('Riobosomes'); ?>");
    $('.description').html("<?php echo _(''); ?>");

});*/
$("#cytoplasm").click(function(){	
   $('.title').text("<?php echo _('Cytoplasm'); ?>");
    $('.description').html("<?php echo _('Inside the cell wall and cell membrane are the cytoplasm (which contains ribosomes) and the nucleoid.'); ?>");

});
/*$("#cellmem").click(function(){	
   $('.title').text("<?php echo _('Cell Membrane'); ?>");
    $('.description').html("<?php echo _(''); ?>");

});*/
$("#cellwall").click(function(){	
   $('.title').text("<?php echo _('Cell Wall'); ?>");
    $('.description').html('<?php echo _("All bacteria have a <span class=\"key\">cell membrane</span> and a <span class=\"key\">cell wall</span>. The cell membrane controls the passing of materials in and out of the bacterium while the cell wall maintains the shape of the bacterium."); ?>');

});
$("#capsule").click(function(){	
   $('.title').text("<?php echo _('Capsule'); ?>");
    $('.description').html("<?php echo _('Some bacteria have an extra layer consisting of a capsule which helps protect the cell and also allows it to stick to surfaces.'); ?>");

});
$("#nucleoid").click(function(){	
   $('.title').text("<?php echo _('Nucleoid'); ?>");
    $('.description').html("<?php echo _("When the <span class='key'>nucleoid</span> is a group of fibers containing a bacterium's DNA."); ?>");

});
$("#flagellum").click(function(){	
   $('.title').text("<?php echo _('Flagellum'); ?>");
    $('.description').html('<?php echo _("Some bacteria have <span class=\"key\">flagella</span> (tentacle-like features that help the bacteria to move)."); ?>');

});
$("#pilus").click(function(){	
   $('.title').text("<?php echo _('Pilus/Pili'); ?>");
    $('.description').html('<?php echo _("There are some bacteria that actually have a third layer that consist of a <span class=\"key\">capsule</span> and <span class=\"key\">pili</span> which help the bacteria stick to each other and to surfaces."); ?>');

});
// '
	var hash = window.location.hash.slice(1);
	var screenCount = 3;
	$(document).ready(function() {
		var native_width = 0;
		var native_height = 0;
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];				
				if(screen < screenCount) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();
					});
				}
			});
		}
		
		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "3.php#screen2";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();					
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					$('a.back-toggle').parent().attr('href','4.php#');
					window.location.hash = '';
				});
				$('a.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});		
				$('a.next-toggle').fadeOut( function(){ 
					$('a.readmore-toggle').fadeIn();
				});
			}
		});
		
		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {				
				$('h1').fadeOut();
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen3');
					$('a.back-toggle').parent().attr('href','#screen1');
					
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();					
					$('a.back-toggle').parent().attr('href','#screen2');
					$('a.back-toggle').attr('src','images/buttons/back2.png');
				});
				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
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
})
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
