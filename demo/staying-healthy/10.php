<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") {?> dir="es"  <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/flexslider.css" />
<link rel="stylesheet" type="text/css" href="styles/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/jquery.flexslider2-min.js"></script>
<script src="scripts/prefixfree.js" /></script>
<script src="scripts/cycle.js" /></script>

<style>
.fancybox-lock .fancybox-overlay { overflow:hidden; }
.bg { background: url('images/10/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; overflow:hidden;}
#buttons .next { display: none; }
h1 {color:#d84e0d}
#screen1 p:nth-child(3) { margin: 10px 0; }
#slider {
	background: url(images/10/container.png);
	background-size: 100% 100%;
	width:95%; 
	height:416px;
	max-height:95%;
	margin:0 auto; 
	padding-top:30px;
	}
.wrap {border-left: 1px dashed #f8f38f !important; border-right: 1px dashed #f8f38f !important;}
ol, ul { list-style: none; }
a img{	border: none; }
a { text-decoration: none; }
.clearfix {	display: block;}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
.flex-control-nav {display:none !important;}
#wrapper {  width: 80%; max-width:800px; margin: 0 auto; margin-top:10px;}
#slide1, #slide2, #slide3, #slide4, #slide5, #slide6, #slide7, {display:none; }
.flex-direction-nav li a {width: 71px;}
.flex-caption {
	width: 121%;
	position: absolute;
	left: -47px;
	bottom: -54%;
	font-size:20px;
}

.flexslider .slides img {
	max-width: 70%;
	display: block;
	border: 3px solid #ec6b76;
}

#second { margin-bottom: 30px; }

.reposition { width: 120%;	bottom: -63% !important; }
.reposition2 { bottom: -50% !important; }
#clickable {
	background: url(images/10/container.png);
	background-size: 100% 100%;
	width:50%;
	max-height:95%;
	margin: 2% auto;
    text-align:center;
	height: 240px;
	padding-top:25px;
	}
#scope { 
	width:18%;
	text-align:center; 
	position:absolute;
	top: 31%;
	left: 40%;
	}
#scope img:hover{cursor:pointer;}
#clickable:hover{cursor:pointer;}
#scope p:hover{cursor:pointer;}
#scope p{ color: #018c6d;}

table { 
	-webkit-border-radius:10px; 
	-moz-border-radius:10px; 
	border-radius:10px; 
	border: 2px solid black;
	width: 95%;
	margin: 0 auto;
	opacity:0.2;
	}
.header {
	-webkit-border-radius:10px !important;
	-moz-border-radius:10px!important; 
	border-radius:10px!important;
	background:#f06001 !important; 
	font-weight:bold;
	height: 50px;
	}
.header td { border:none; color: #FFFFFF;}
.header td:nth-child(3) {
	-webkit-border-top-right-radius:10px;
	-moz-border-top-right-radius:10px;
	border-top-right-radius:10px;	
	}
.header td:first-child {
	-webkit-border-top-left-radius:10px;
	-moz-border-top-left-radius:10px;
	border-top-left-radius:10px;
	
	}
	
tr:nth-child(even) {background: #abbdca;}
tr:nth-child(odd) {background: #c9dded;}
table { border-spacing: 0; border-collapse: collapse; text-align:center;}
th { border-spacing: 0; border-collapse: collapse; }
td{border-right:2px solid black;}
.full-opacity {opacity:1; border:0;}
.full-opacity td{width:250px; padding: 10px;}
.full-opacity td:nth-child(3){border:0;}
.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
td {color:black;}
a:visited { text-decoration:none; }
#container { width:95%; text-align:center; margin:0 auto; }
.bottom_container {
	background: url(images/10/container.png);
	background-size: 100% 100%;
	width:30%;
	margin:0;
	min-height:159px;
	padding-top:15px;
	margin-left:140px;
}
.bottom_container img{width: 90%; height:145px;}
.no_border{border:0;}

.scrn3_holder {
	background: url(images/10/container.png);
	background-size: 100% 100%;
	width:40%;
	float:left;
	min-height:220px;
	padding-top:20px;
	margin-left:50px;
}
.scrn3_holder img { width: 90%; height: 200px; }
#screen3 p{padding:10px 0 0 10px; }
#screen2 p:first-child { padding:10px 0 0 10px; }
#col1 {width:45%; float:left;margin-left: 105px;}
#col2 {
	background: url(images/10/container.png);
	background-size: 100% 100%;
	width:32%;
	float:left;
	min-height: 272px;
	margin-left: 20px;
}
#col2 img {width: 100%; height: 235px;}
.magnify { position: relative; padding-top: 18px; width: 90%; margin-left: 14px;}
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
	background: url('images/10/nutrition_facts2.jpg') no-repeat;	
	margin-top:17px;
		
	
	/*hide the glass by default*/
	display: none;

}

/*To solve overlap bug at the edges during magnification*/
.small { display: block; }
.mleft {margin-left:50px;}
p {text-align:left;}

html[dir="es"] #screen1 p { font-size: 22px; }
html[dir="es"] #slider { height: 395px; }
html[dir="es"] .flex-caption { bottom: -100%; line-height: 22px; }
html[dir="es"] .flexslider .slides img { height: auto !important; max-width: 45%; }
html[dir="es"] .reposition { bottom: -92% !important; }
html[dir="es"] .reposition2 { bottom: -97% !important; }

html[dir="es"] #clickable { margin: 0 auto; height: 285px; }
html[dir="es"] #screen2 table { margin: -10px auto; }

html[dir="es"] #screen3 p { font-size: 23px; }
html[dir="es"] #screen3 #col1 { margin-left: 165px; }

html[dir="rtl"] .screens > p, html[dir="rtl"] #col1 p { text-align: right; }
html[dir="rtl"] .flex-caption { font-size: 18px; }
html[dir="rtl"] .header td:first-child { border-top-right-radius: 10px; -webkit-border-top-right-radius: 10px; -moz-border-top-right-radius: 10px; 
border-top-left-radius: 0; -webkit-border-top-left-radius: 0; -moz-border-top-left-radius: 0;}
html[dir="rtl"] .header td:nth-child(3) { border-top-left-radius: 10px; -webkit-border-top-left-radius: 10px; -moz-border-top-left-radius: 10px;
border-top-right-radius: 0; -webkit-border-top-right-radius: 0; -moz-border-top-right-radius: 0;  }
html[dir="rtl"] td { border-left:2px solid black; border-right: 0; }
html[dir="rtl"] .no_border, html[dir="rtl"] .header td{border:0;}
html[dir="rtl"] .full-opacity td:nth-child(3) {border:0;}
html[dir="rtl"] #scope { top:35%; }
html[dir="rtl"] .magnify { margin: 0 14px 0 0; }


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
.flexslider .slides img { max-width: 65%; height: auto; }
.flex-caption {bottom: -170px;}
.reposition {bottom: -75% !important;}
.reposition2 {bottom: -78% !important;}
#clickable { width: 70%; }
#scope { top:25%;width: 21%;}
.bottom_container {margin-left: 87px;}

html[dir="es"] .flex-caption {bottom: -148%;}
html[dir="es"] .reposition {bottom: -127% !important;}
html[dir="es"] .reposition2 {bottom: -139% !important;}
html[dir="es"] #screen3 #col1 {margin-left: 60px;}
}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about staying healthy"); ?></h1>
					<p>
						<?php echo _("One way to always try to keep your body healthy is make sure you are eating the right foods. Foods provide us with energy, and the materials needed for growth and general well-being. The digestive system takes in food and breaks it down into the simple molecules from which it is made. They fall into three main groups: carbohydrates, fats, and protein."); ?>
					</p>
					
				<p><?php echo _("Browse through the slides below by clicking the left and right arrows"); ?></p>
				<article id="wrapper">					
					<div id="slider">
						 <div class="flexslider">
							<ul class="slides">
								<li>
									<img src="images/10/slide1.png" class="centered" height="230" width="100%"/>	
										<p class="flex-caption">
											<?php echo _("<span class='key'>Carbohydrates</span> provide our bodies with the energy we need to function. Sugars are simple carbohydrates that provide energy almost immediately. Complex carbohydrates, also called starches, are long chains of simple sugar molecules that provide energy over a course of hours. Some foods rich in carbohydrates include potatoes, bread, rice, and pasta."); ?>
										</p>										
								</li>						
								
								<li>
									<img src="images/10/slide2.jpg" class="centered" id="second" height="200" width="100%"/>
										<p class="flex-caption reposition">
											<?php echo _("<span class='key'>Fats</span> store energy for longer term use. When a person takes in more carbohydrates than they can use in the short term, some of the sugar molecules are turned into fat. When energy is needed, fats can be converted back into sugars for immediate use. Fats in our diets are stored for later use. Fats, like cooking oils, that are liquid at room temperature are called lipids. Dietary sources of fats include cooking oils, butter, cheese, and meat."); ?>										
										</p>
								</li>									
								
								<li>
									<img src="images/10/slide3.jpg" class="centered" height="230" width="100%"/>
										<p class="flex-caption reposition2">
											<?php echo _("<span class='key'>Proteins</span> are long chains of simple amino acid molecules. Proteins are important for building muscles and organs. The amino acids in our diets are the same amino acids needed to build our own muscles and organs. Some important protein sources include meat, poultry, fish, and beans."); ?>
										</p>
								</li>																	
							</ul>
						  </div>
					</div>
				</article>			
			</div> <!--SCREEN1 END-->
			
			<div id="screen2" class="screens">
				<p>
					<?php echo _("<span class='key'>Vitamins</span> are nutrients needed in only very small amounts. They serve as helpers to make our body chemistry work as it should. Even though we need only small amounts of each, lacking vitamins in our diets causes a variety of disorders. Even though a balanced diet supplies all necessary vitamins, many people choose to take vitamin supplements each day."); ?>
				</p>
				<a id="inline" class="fancybox" href="#data">
					<div id="clickable">
						<table class="mtop">
							<tr class="header">
								<td><?php echo _("Vitamin"); ?></td>
								<td><?php echo _("Symptom of Deficiency"); ?></td>
								<td><?php echo _("Natural Source of Vitamin"); ?></td>
							</tr>
							<tr>
								<td><?php echo _("A"); ?></td>
								<td><?php echo _("DIARRHEA, LACK OF GROWTH"); ?></td>
								<td><?php echo _("CARROTS, DANDELIONS, GREEN VEGETABLES, HAY"); ?></td>
							</tr>
							<tr>
								<td><?php echo _("B"); ?></td>
								<td><?php echo _("DIARRHEA, LACK OF GROWTH"); ?></td>
								<td><?php echo _("WHEAT GERM, YEAST, MEAT, LIVER"); ?></td>	
							</tr>
							<tr>
								<td><?php echo _("C"); ?></td>
								<td><?php echo _("SWOLLEN JOINTS, SCURVY"); ?></td>
								<td><?php echo _("FRESH FRUITS AND VEGETABLES"); ?></td>
							</tr>
							<tr>
								<td><?php echo _("D"); ?></td>
								<td><?php echo _("RICKETS"); ?></td>
								<td><?php echo _("FRESH LIVER OILS, WHEAT GERM, GREEN VEGETABLES"); ?></td>
							</tr>
						
						</table>
						<div id="scope">
							<a id="inline" class="fancybox" href="#data"><img src="images/10/scope.png"/></a>							
							<p><?php echo _("CLICK TO VIEW"); ?></p>
						</div>
					</div>	
				</a>
				
				<div id="container">	
					<div class="bottom_container fl">
						<img src="images/10/diet.jpg"/>
					</div>
					
					<div class="bottom_container fl mleft">
						<img src="images/10/supplements.jpg"/>
					</div>				
					<div class="clear"></div>
				</div>
			
			</div><!--SCREEN2 END-->
			
			<div id="screen3" class="screens">				
				<p class="l-height">
					<?php echo _("Many people are interested in the calorie values of their foods. <span class='key'>Calories</span> measure the amount of energy a particular food holds in its molecules. When the molecules are broken down, the energy is released. We gain weight when we take in more calories than we burn. We lose weight when we burn more calories than we take in."); ?>
				</p>
				
				<div class="scrn3_holder">
					<img src="images/10/obese.jpg" />
				</div>
				
				<div class="scrn3_holder mleft">
					<img src="images/10/run.jpg" />
				</div>
				
				<div class="clear"></div>
				
				<div id="col1">
					<p>
						<?php echo _("Any healthy diet should include all types of food and enough calories to make it through each day without getting sick. The food labels on all packaged foods and available in many restaurants summarize the nutrition values of the foods we eat. One such label is shown on the right."); ?>
					</p>
				</div>
				<div id="col2">
					<div class="magnify">
						<div class="large"></div>
						<img class="small" src="images/10/nutrition_facts2.jpg" />							
					</div>
				</div>
				
			</div>
			
			<div style="display:none">
				<div id="data">
					<table class="full-opacity">
						<tr class="header">
								<td><?php echo _("Vitamin"); ?></td>
								<td><?php echo _("Symptom of Deficiency"); ?></td>
								<td><?php echo _("Natural Source of Vitamin"); ?></td>
							</tr>
							<tr>
								<td><?php echo _("A"); ?></td>
								<td><?php echo _("DIARRHEA, LACK OF GROWTH"); ?></td>
								<td><?php echo _("CARROTS, DANDELIONS, GREEN VEGETABLES, HAY"); ?></td>
							</tr>
							<tr>
								<td><?php echo _("B"); ?></td>
								<td><?php echo _("DIARRHEA, LACK OF GROWTH"); ?></td>
								<td><?php echo _("WHEAT GERM, YEAST, MEAT, LIVER"); ?></td>	
							</tr>
							<tr>
								<td><?php echo _("C"); ?></td>
								<td><?php echo _("SWOLLEN JOINTS, SCURVY"); ?></td>
								<td><?php echo _("FRESH FRUITS AND VEGETABLES"); ?></td>
							</tr>
							<tr>
								<td><?php echo _("D"); ?></td>
								<td><?php echo _("RICKETS"); ?></td>
								<td><?php echo _("FRESH LIVER OILS, WHEAT GERM, GREEN VEGETABLES"); ?></td>
							</tr>
							<tr>
								<td><?php echo _("E"); ?></td>
								<td><?php echo _("SKIN DISORDERS, POOR REPRODUCTION"); ?></td>
								<td><?php echo _("WHEAT GERM, GREEN VEGETABLES"); ?></td>
							</tr>
							<tr>
								<td colspan ="3" class="no_border"><?php echo _("NOTE: VITAMIN B AFFECTS THE NERVOUS SYSTEM AND A REGULAR SMALL AMOUNT IS EFFECTIVE IN TREATING STRESS, ONE OF THE PRIMARY CONTRIBUTORS IN MANY DISEASES ESPECIALLY WET TAIL."); ?>
								</td>														
							</tr>
					</table>								
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing a delicious diet..."); ?></strong></section></section>
	<script type="text/javascript" src="scripts/jquery.fancybox.pack.js"></script>
	<script>
	/* This template is set to 2 screens */
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	var native_width = 0;
	var native_height = 0;
	$(document).ready(function() {
		$(window).load(function() {
			$('.flexslider').flexslider( {
				pauseOnHover: true,
				slideshow: false,
				controlsContainer: ".flex-container"
			} );
		});
		$(".fancybox").fancybox();

		$('#clickable').click(function(){
			$('#clickable').addClass('.fancybox');
			 $('#clickable').href= $('#data');			
		});
	
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];				
				if(screen == screenCount) {
					$('.readmore-toggle').fadeOut(function(){
						$('.next-toggle').fadeIn();
					});
					$('.back-toggle').parent().attr('href','#screen2');
				} else if(screen == 2){
					$('.readmore-toggle').parent().attr('href','#screen3');
				} 			
			});
		}

		/* Back Transition */
		$('.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "9.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('.back-toggle').fadeIn();
					$('.readmore-toggle').parent().attr('href','#screen2');
					$('.back-toggle').parent().attr('href','10.php#');
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
});
	</script>
<?php include("setlocale.php"); ?>
</body>
</html>
