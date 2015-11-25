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
<script src="scripts/jquery.min.js" ></script>
<script src="scripts/jquery-easing.min.js"></script>
<script src="scripts/jpreloader.js" ></script>
<script src="scripts/jquery.blink.min.js" ></script>
<script src="scripts/jquery.wiggle.min.js" ></script>
<script src="scripts/global.js" ></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
p { text-align: left; }
.bg { background-image: url('images/8/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
h1 { color: #32560e; }
.h-light {color: #e230b1;}
.wrap {border-left: 1px dashed #51A6AA; border-right: 1px dashed #51A6AA;}
#col1_page1{ width:43%; margin-left:39px;}
#col2_page1{width:42%; margin:-66px 0 0 55px;}

#col1_page2{width:43%; margin: 52px 0 0 48px;}
#col2_page2{width:42%; margin:86px 0 0 46px;}

#col1_page3{width:43%; margin:0 0 0 48px;}
#col2_page3{width:42%; margin:0 0 0 37px;}

article {margin-top:30px; width:99.5%; margin-bottom:15px;}
article h2 {color: black;}
#ins {margin-top:110px; width:98%;}
figure{width:80%; height:170px;  max-height:95%; margin:0;}
figure img { width:100%; height:100%;}
#buttons .next, img.back-toggle-screen { display:none; }
.mtop{margin-top:80px;}
#scrn2_img{width:85%; height:200px; max-height:95%; margin:0 auto; }
#scrn2_img img {width:88%}

#scrn3_img{ width:97%;
 height:350px;
 max-height:95%; 
 margin:0; 
 margin:150px 0 0 5px; 
 background:url('images/8/businessman.jpg'); 
 background-size:100% 100%;
 overflow: hidden;
 position: relative;
 }
 
#scrn3_img .smoke {
position: absolute;
width: 250px;
height: 250px;
background:url('images/8/smoke.png') no-repeat;
bottom: 50px;
margin-left:0px;
background-position-x:-10px;
}

#scrn1a_img{width:85%; height:220px; max-height:95%; margin:0 auto; }
#scrn1a_img img {width:99%;}

#scrn1b_img{width:38%; height:120px; max-height:95%; margin:20px 0 0 35px;}
#scrn1b_img img {width:99%;}
#scrn1b_img{
  position:relative;
 
}
#scrn1b_img img{
  display:none;
  position:absolute;
  top:0;
  left:0;
}
#scrn1b_img img.active{
  display:block;
}

#scrn1b_img2{width:38%; height:120px; max-height:95%; margin:20px 0 0 20px;}
#scrn1b_img2 img {width:99%;}
#scrn1b_img2{
  position:relative;
 
}
#scrn1b_img2 img{
  display:none;
  position:absolute;
  top:0;
  left:0;
}
#scrn1b_img2 img.active{
  display:block;
}

.allign-left{text-align:left !important; padding-left:10px;}
.mtop {margin-top:10px !important;}
.no-mtop {margin:0 !important;}
.l-height {line-height:27px;}
#title {padding:72px 0 0 0; width:42%; margin-left:35px;}
.mleft{ margin-left:30px !important;}
.mleft2{ margin-left:38px !important;}
.mleft3{ margin-left:38px !important;}
.mtop2 {margin-top:65px !important;} 
.mtop3 {margin-top:100px !important;} 
#screen1{height:630px; width:100%!important; max-width:100%!important; background:url('images/8/container1.png') no-repeat; background-size:100% 100%;}
#screen2{height:630px; width:100%!important; max-width:100%!important; background:url('images/8/container2.png') no-repeat; background-size:100% 100%;}
#screen3{height:630px; width:100%!important; max-width:100%!important; background:url('images/8/container2.png') no-repeat; background-size:100% 100%;}

<?php if ($language == 'es_ES') : ?>
	h1 { font-size: 25px; }
	#screen2 p { font-size: 20px; }
<?php endif; ?>

html[dir="rtl"] #title {margin-right: 488px;}
html[dir="rtl"] h1 {font-size: 26px;}
html[dir="rtl"] #col2_page1 {margin: -66px 0 0 46px;}
html[dir="rtl"] .allign-left {text-align: right!important;}
html[dir="rtl"] #col2_page2 p {margin-right: 10px;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#title { padding: 45px 0 0; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#col2_page1 { margin: -66px 0 0 35px; }
	#col1_page2 { width: 45%; margin: 20px 0 0 25px; }
	#col1_page2 p:first-child { font-size: 22px; }
	#col2_page2 { margin: 85px 0 0 35px; }
	#col2_page3 { margin: 0 0 0 45px; }
	html[dir="rtl"] #title { margin-right: 405px; }
	html[dir="rtl"] #col2_page1 { margin: -66px 0 0 25px; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">		
			<div id="screen1" class="screens">
				<div id="title">
					<h1><?php echo _("More big ideas... about how diseases destroy"); ?></h1>
				</div>
				<section id="col1_page1" class="fl">						
						<p class="l-height"><br/>
							<?php echo _("Microbes are not the only things that can cause disease; toxic chemicals can cause harmful effects to organisms too. The chemicals can harm specific types of cells, tissues, organs or organ systems. Toxic chemicals have been linked by scientists to many diseases. In the next section are some common health conditions along with information about the chemicals that may be linked to them."); ?>
							<br/>
							<?php //echo _("The following section shows some common health conditions along with information about chemicals that may be linked to them."); ?>							
						</p>
				</section>
					
				<section id="col2_page1" class="fl">
					<figure id="scrn1a_img">							
						<img src="images/8/asthma_boy.jpg" />
					</figure>
					
					<article class="non-pad no-mtop">
						<p><?php echo _("Asthma is a condition with symptoms of recurrent wheezing, coughing, and difficulty breathing. Allergens and air pollution are often linked to the increased cases of asthma."); ?>
						</p>
					</article>		
				</section>	
				<div class="clear"></div>
			</div>
			
			<div id="screen2" class="screens">
				<section id="col1_page2" class="fl">
					<p class="allign-left l-height"><br/>
						<?php echo _("<span class='key'>Birth defects</span> can be potentially very serious. Pregnant women should avoid:"); ?> <br/>
						<?php echo _("*tobacco use"); ?><br/>
						<?php echo _("*excessive caffeine consumption, and"); ?><br/>
						<?php echo _("*drinking alcohol."); ?>						
					</p>
					<figure id="scrn2_img">							
						<img src="images/8/preg_female.jpg" />
					</figure>
	
					<p class="allign-left l-height">
						<?php echo _("<span class='key'>Learning and behavioral disorders</span> can be linked to toxic chemical exposure, such as to pesticides and heavy metals such as lead. Lead can be found in old plumbing and paint."); ?> 
					</p>
						
				</section>
				
				<section id="col2_page2" class="fl">
					
					<p class="allign-left">
						<?php echo _("Cancers can be linked to tobacco use, radiation, and environmental pollutants."); ?><br/><br/> 
						  <?php echo _("Heart disease may be caused by:"); ?> 
						  <?php echo _("*tobacco use"); ?><br/> 
						  <?php echo _("*excessive alcohol consumption"); ?><br/>
						  <?php echo _("*air pollution"); ?>
					</p>
					<figure id="scrn1b_img" class="fl">							
							<img src="images/8/smoking1.jpg" class="active"/>	
							<img src="images/8/smoking2.jpg" />
					</figure>					
					<figure id="scrn1b_img2" class="fl">							
							<img src="images/8/drinking1.jpg" class="active"/>
							<img src="images/8/drinking2.jpg" />
					</figure>
					<div class="clear"></div>
				</section>	
			</div>
			
			<div id="screen3" class="screens">
				<section id="col1_page3" class="fl">					
						<p class="allign-left"><br/><br/><br/><?php echo _("A chemical's level of harm depends on:"); ?> <br/><br/>
						<?php echo _("*How strong the chemical is."); ?><br/>
						<?php echo _("*How often a person encounters a chemical."); ?> <br/>
						<?php echo _("*The amount of a chemical that a person is exposed to."); ?><br/>
						<?php echo _("*The size of the person encountering the chemicals."); ?><br/><br/> 
						
						<?php echo _("The best way to keep from getting sick from toxic chemicals is simple:"); ?><br/><br/>						
						<?php echo _("Avoid them whenever possible."); ?>					
						</p>
				</section>
				
				<section id="col2_page3" class="fl">					
					<div id="scrn3_img"></div>
					<div class="smoke"></div>
				</section>
				<div class="clear"></div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Clearing out smokes..."); ?></strong></section></section>

<script>
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
				document.location.href= "7.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn(); 
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					$('a.back-toggle').parent().attr('href','7.php');
					window.location.hash = '';
				});
				$('a.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
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
					$('a.back-toggle').attr('src','images/buttons/nextb.png');
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					$('a.back-toggle').parent().attr('href','#screen3');					
					$('a.back-toggle').attr('src','images/buttons/back2.png');
				});
				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});
	setInterval('swapImages()', 600);




	});
function swapImages(){
  var $active = $('#scrn1b_img .active');
  var $next = ($('#scrn1b_img .active').next().length > 0) ? $('#scrn1b_img .active').next() : $('#scrn1b_img img:first');  
  var $active2 = $('#scrn1b_img2 .active');
  var $next2 = ($('#scrn1b_img2 .active').next().length > 0) ? $('#scrn1b_img2 .active').next() : $('#scrn1b_img2 img:first'); 

    $active.removeClass('active');
    $next.addClass('active');
    $active2.removeClass('active');
    $next2.addClass('active');

}	
</script>
<script>
//====
$(function(){
	if(!$.browser.msie){
		var a=0;for(;a<15;a+=1){setTimeout(function b(){var a=Math.random()*1e3+5e3,c=$("<div />",{"class":"smoke",css:{opacity:0,left:Math.random()*200+80}});$(c).appendTo("#scrn3_img");$.when($(c).animate({opacity:1},{duration:a/4,easing:"linear",queue:false,complete:function(){$(c).animate({opacity:0},{duration:a/3,easing:"linear",queue:false})}}),$(c).animate({bottom:$("#scrn3_img").height()},{duration:a,easing:"linear",queue:false})).then(function(){$(c).remove();b()})},Math.random()*3e3)}
	}else{		
	"use strict";var a=0;for(;a<15;a+=1){setTimeout(function b(){var a=Math.random()*1e3+5e3,c=$("<div />",{"class":"smoke",css:{left:Math.random()*200+80}});$(c).appendTo("#scrn3_img");$.when($(c).animate({},{duration:a/4,easing:"linear",queue:false,complete:function(){$(c).animate({},{duration:a/3,easing:"linear",queue:false})}}),$(c).animate({bottom:$("#scrn3_img").height()},{duration:a,easing:"linear",queue:false})).then(function(){$(c).remove();b()})},Math.random()*3e3)}}}())</script>
<?php require("setlocale.php"); ?>
</body>
</html>
