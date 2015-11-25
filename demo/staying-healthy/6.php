<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/flexslider.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/cycle.js"></script>
<style>
.bg { background: url('images/6/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

#buttons .next { display: none; }

.flex-container { background: url('images/6/holder1.png'); width: 60%; height: 100%; background-size: 100% 100%; margin-right: 20px; margin: 0 auto; }
.wrap {border-left: 1px dashed #795183; border-right: 1px dashed #795183}
p { color: white; }
#slideshow, #slideshow2 { 
    margin: 50px auto; 
    position: relative; 
	background-image: url('images/6/container.png'); width:55%; min-height:315px; background-repeat: no-repeat; background-size: 100% 100%;margin:0 auto; 
	margin-top:20px;
	width: 470px !important;
	height: 315px !important; 
	}

#slideshow2 > div { 
    position: absolute; 
    top: 35px; 
    left: 0; 
    right: 0; 
    bottom: 10px; 
	margin:0 auto;
	text-align: center;
	
}
#screen2 img { width: 55%; margin: 20px auto; display: block; }
#screen2 div {
	float: left; margin: 20px 35px;
	width: 25%;
	background-image: url('images/6/container.png'); 
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

#screen2 > div:nth-last-of-type(-n+2) {
    margin-left: 285px;
}
#screen2 > div:nth-child(6) { margin-left: 70px; }
#slideshow img { margin:30px 0 0 20px; width:430px; height:270px;}
#col1 {
	background-image: url('images/6/container.png');
	width:30%; 
	min-height:250px;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	margin:0 auto; 
	float:left;
	margin-left:95px;
	padding-top: 25px;
	padding-bottom:5px;
 }
#col2 {
	background-image: url('images/6/container2.png');
	width:40%; 
	min-height:260px;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	margin: 13px auto; 
	float:left;
	margin-left:50px;
	padding-top: 13px;
	padding-bottom:5px;
 }
 #screen2 p, #screen3 p {padding-top:5px; text-align:left;}
 #screen1 p {text-align:left;}
 #col1 img { height: 260px; width: 90%; }
 #col2 img { height: 260px; width: 88%; margin-left: -18px; }

 html[dir="rtl"] #screen1 p, html[dir="rtl"] #screen2 p, html[dir="rtl"] #screen3 p { text-align: right; }
 
 
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
#screen2 div {margin: 20px 30px;}
#screen2 > div:nth-last-of-type(-n+2) {margin-left: 120px;}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
#screen2 > div:nth-last-of-type(-n+2) {margin-left: 120px;}

}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">	
				<h1><?php echo _("More big ideas... about staying healthy"); ?></h1>
				<p><?php echo _("The human body is made up of trillions of independent cells.  Each <span class='key'>cell</span> is alive, requires resources, and produces waste. When many copies of the same cell type are gathered together, they are known as <span class='key'>tissue</span>. We have hundreds of different types of tissues, each specialized for its own functions. Some examples of cell and tissue types include muscle, nervous, bone, and skin."); ?></p>
	
				<div id="slideshow">				  
					<img src="images/6/s1a.jpg">			
					<img src="images/6/s1b.jpg">				  			  
					<img src="images/6/s1c.jpg">			   			   
					<img src="images/6/s1d.jpg">			  
				</div>
			</div>
			<div id="screen2" class="screens">
				<p>
					<?php echo _("<span class='key'>Organs</span> are groups of tissues combined together to perform the body's major functions. When we talk about such systems as the circulatory or digestive system, we are actually talking about groups of organs working together. While cells and tissues are difficult to see and tell apart, organs are mostly quite large and easy to identify.<br/>Some examples of organs are the heart, lungs, brain, kidneys, and stomach. Some organs are so small they require magnification to be seen. Others are much larger. The largest is our skin which covers our entire bodies."); ?>
				
				</p>
						<div><img src="images/6/heart.jpg"></div>
						<div><img src="images/6/lungs.jpg"></div>
						<div><img src="images/6/brain.jpg"></div>
						<div><img src="images/6/kidney.jpg"></div>
						<div><img src="images/6/stomach.jpg"></div>
				
			</div>
			
			<div id="screen3" class="screens">
				<p>
					<?php echo _("Major body systems are groups of organs working as a unit to fulfill major body functions. The <span class='key'>digestive system</span> has many parts, each performing a specific task, all aimed towards allowing our body to absorb the nutrients and water we need to survive.<br/>The other systems are organized in a similar way, each unique in its own pattern. Because each organ is made of many different tissues, any organ may be a part of more than one system at a time. The pancreas, for example, makes chemicals that help digest food, while, at the same time, making other substances that help regulate the activities of other organs. It belongs to both the digestive and endocrine systems."); ?>				
				</p>
				
				<div id="col1">
					<img src="images/6/pancreas.jpg" alt="placeholder">
				</div>
				
				<div id="col2">
					<img src="images/6/digestive.jpg" alt="placeholder">
				</div>
				
				<div class="clear"></div>
				
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Organs are working together..."); ?></strong></section></section>
	<script src="scripts/jquery.flexslider-min.js"></script>
	<script>
	/* This template is set to 2 screens */
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	$(document).ready(function() {
	if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];				
				if(screen == screenCount) {
					$('.readmore-toggle').fadeOut(function(){
						$('.next-toggle').fadeIn();
					});
					
				} 
			});
		}

		/* Back Transition */
		$('.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "5.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('.back-toggle').fadeIn();
					$('.readmore-toggle').parent().attr('href','#screen2');
					window.location.hash = '';
				});
				$('.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
				});		
				$('.next-toggle').fadeOut( function(){ 
					$('.readmore-toggle').fadeIn();
				});
			}
		});
		
		/* Read More Screen Transition */
		$('.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {				
				$('h1').fadeOut();
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					$('.readmore-toggle').parent().attr('href','#screen3');
					$('.back-toggle').parent().attr('href','#screen1');
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					$('.back-toggle').parent().attr('href','#screen2');
				});
				
				$('.readmore-toggle').fadeOut(function(){
					$('.next-toggle').fadeIn();
				});
			} 
		});

$('#slideshow').cycle({
    fx:    'curtainX', 
    sync:  false, 
    delay: -1500 
 });

});

</script>
<?php include("setlocale.php"); ?>
</body>
</html>
