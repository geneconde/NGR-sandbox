<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/flexslider.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<style>
.bg { background-image: url('images/8/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; overflow: hidden; }
.wrap {border-left: 1px dashed #B9B7B8; border-right: 1px dashed #B9B7B8;}
h1 { color: #01A0E1; padding: 5px 0 0 10px; }
.key { color: #f44e14;}
.bg > div{ width:100% !important; max-width:100% !important; padding: 10px 0 0 10px;}

article { width:97.5%; margin-bottom:10px;}
article h2 {color: black;}
#ins {margin-top:110px; width:98%;}
figure{width:65%; max-height:95%; margin:0 auto; height:250px; max-height:95%; margin-top:-20px;}
figure img { width:100%; height:100%;}
#buttons .next, img.back-toggle-screen { display:none; }
.mtop{margin-top:80px;}

.non-pad{padding:0px !important; padding-top:5px !important;}
.allign-left{text-align:left !important; padding-top:0px;}
.mtop {margin-top:10px !important;}
.no-mtop {margin:0 !important;}

#col {width: 43.5%;%; float:left; }
#scrn2_img {max-height:95%; margin:0 auto; height:450px;}

#slider { 
	width:80%; 
	max-height:95%;
	margin:0 auto; 
	background: url(images/8/slider_bg.png); 
	background-repeat: no-repeat; background-size: 100% 100%; 
	padding-top:15px;
	margin-top: -21px;
	-webkit-transition: all .3s ease;
	}

ol, ul { list-style: none; }

a img{	border: none; }

a { text-decoration: none; }

.clearfix {	display: block;}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
.flexslider { width: 77%; }
.flex-control-nav {display:none !important;}
#wrapper {  width: 90%; max-width:800px; margin: 0 auto; margin-top:20px;}
#slide1, #slide2, #slide3, #slide4, #slide5, #slide6, #slide7, {display:none;}
#scrn2 {width:95%;} 
#scrn1 {width:95%;} 
.flex-direction-nav li a { width: 71px; }
#screen2 p { text-align: left; }
#first_slide {bottom: -126px;}
#second_slide {bottom: -99px;}
#third_slide {bottom: -206px;}
#fourth_slide {bottom: -180px;}
#fifth_slide {bottom: -126px;}
.text_content { min-height:50px; width:100%; margin-bottom: 10px; }
.text_content p {text-align:center; font-size:20px;}
#jquery_jplayer_1 { margin-bottom: 10px; }
#jquery_jplayer_1:hover {cursor:pointer;}
.flexslider .slides img { max-width: 60%; height: auto; }

html[dir="rtl"] p { padding-right: 35px; }
html[dir="rtl"] h1 { padding-right: 35px; }
html[dir="rtl"] #screen2 p { text-align: right;padding-right: 20px; }
html[dir="rtl"] #scrn2 { width: 98%; }
html[dir="rtl"] #col { width: 42.5%; margin-top: 20px;}
html[dir="rtl"] #scrn2_img { margin-right: 30px; }
html[dir="rtl"] .allign-left { text-align: right !important; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#jp_video_0 { width: 410px !important; height: auto !important; }
	#scrn2_img img { width: 400px; }
	html[dir="rtl"] #scrn2_img { margin-right: 0; float: left; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">
		<h1><?php echo _("More big ideas... about doing science");?></h1>
			<div id="screen1" class="screens">
				<section id="scrn1">				
					<p class="allign-left">
						<?php echo _("<span class=\"key\">Scientific practices</span> that are useful in everyday life include making observations, coming up with good questions, designing investigations, collecting data, and making a claim.");?>
					</p>
					<p class="allign-left">
						<?php echo _("Here is an example using these practices:");?>
					</p>						
									
					<p><?php echo _("Browse through the slides below by clicking the left and right arrows"); ?></p>
					<article id="wrapper">					
						<div id="slider">
							 <div class="flexslider">
								<ul class="slides">
									<li>
										<img src="images/8/observation.jpg" class="centered" height="220" width="100%"/>	
										 <div class="text_content"><p><?php echo _("<span class='key'>Observation</span>: As Jenna watched (or observed) both the boys' and the girls' teams play, she seemed to think that the boys were bigger and stronger but the girls were quicker with better reflexes. But Eric disagreed.");?></p></div>										
									</li>										
									<li>
										<img src="images/8/ball.jpg" class="centered" height="220" width="100%"/>
										<div class="text_content"><p><?php echo _("<span class='key'>Ask a good Question</span>: So Eric asked Jenna: \"If girls are quicker with better reflexes, can they react faster than boys to catch something?\" \"Let's find out.\" said Jenna.");?></p></div>
									</li>									
									<li>
										<img src="images/8/slide3.png" class="centered" height="220" width="100%"/>
										 <div class="text_content"><p><?php echo _("<span class='key'>Design an Investigation</span>: For the investigation, Jenna and Eric created a reaction time test. Jenna and Eric each picked five of their teammates from their basketball teams to be the test subjects. Eric dropped a ruler between the thumb and pointer finger of each of the test subjects and Jenna recorded where subjects caught ruler as a measure of how fast their reaction time was.");?></p></div>
									</li>
									<li>
									
										<div id="jquery_jplayer_1"></div>
										<div id="jp_container_1"> </div>
										<!-- 
											<a href="#" class="jp-play">Play</a>
											<a href="#" class="jp-pause">Pause</a>		
										-->										 
									</li>
									<li>
										<img src="images/8/slide4.png" class="centered" height="220" width="100%"/>
										 <div class="text_content"><p><?php echo _("<span class='key'>Make More Observations and Collect Data</span>: Eric and Jenna dropped the ruler between the fingers of each test subject five times – also called doing five trials - and measured how far down the ruler they stopped. Each time they recorded the distance. So at the end of the investigation they had five trials for each of five boys and five girls as their data. Then they took the average of all the boys and all the girls and compared them. The reaction measures were very close but the girls' times were very slightly faster.");?></p></div>
									</li>
									<li>
										<img src="images/8/slide5.png" class="centered" height="220" width="100%"/>
										 <div class="text_content"><p><?php echo _("<span class='key'>Making a Claim</span>: Based on the tests they conducted with the test groups, Jenna said the girls had faster reaction times and Eric said there was no real difference between the boys and girls reaction times since they were so close.");?></p></div>
									</li>
									<li>
										<img src="images/8/slide6.png" class="centered" height="220" width="40%"/>
										 <div class="text_content"><p><?php echo _("<span class='key'>Supporting a Claim with Evidence</span>: Jenna argued \"See, the average distance the girls caught the ruler was 10.3 centimeters and the average distance for the boys was 10.5 centimeters. That means the girls caught it sooner which means they are faster.\" \"But\", Eric said, \"most of the boys were faster than the girls. Just one of the boys was very slow and that threw off our average.\"");?></p></div>
									</li>
									
									
								</ul>
							 </div>
						</div>
					</article>
				</section>						
			</div>
			
			<div id="screen2" class="screens">
				<section id="scrn2">							
					<div id="col">
						<p><?php echo _("All of the above science practices are important, but scientists don't always do the practices in the same order when they do science. That's because they are usually asking different questions and solving different problems.");?></p>
						<p><?php echo _("The important thing in doing science is to be systematic. That means designing investigations for observing, gathering data from observations or experiments, and then making claims about what you learned and supporting those claims with evidence.");?></p>
					</div>
						<div id="scrn2_img" class="fr">
							<img src="images/8/chem.png" />							
						</div>
						<div class="clear"></div>					
				</section>					
			</div>				
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Steps, steps, steps");?></strong></section></section>			

<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
var ctr = 0;
$(document).ready(function() {
	$("#jquery_jplayer_1").jPlayer({
	   ready: function () {
		$(this).jPlayer("setMedia", {
		 webmv: "images/8/video.webm",
		 m4v: "images/8/video.m4v"		 
		});
	   },
	   swfPath: "scripts",
	   supplied: "webmv, m4v",
	   solutions: "flash, html",
	    nativeVideoControls: {
            all: /./
        }
	  });	

		$(window).load(function() {
			$('.flexslider').flexslider( {
		pauseOnHover: true,
        slideshow: false,
        controlsContainer: ".flex-container"		
			} );
			
			$(".flex-direction-nav li .next").click(function(){
				setContainerHeight();
			});
			$(".flex-direction-nav li .prev").click(function(){
				setContainerHeight();
			});
		
		});
		

	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	$('h1').fadeOut();

		var screen = hash[hash.length -1];
			if(screen < screenCount) {
			$('a.back-toggle-screen').delay(300).fadeIn();
			$('a.readmore-toggle').parent().attr('href','#screen' + screen);
		
		} else {
			$('a.back-toggle-screen').delay(300).fadeIn();
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
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function(){
					$('a.readmore-toggle').fadeIn();
				});
				
				$('h1').fadeIn();
		});
	}
});

/* Read More Screen Transition */
	$('a.readmore-toggle').click(function(){
		if($('#screen1').is(':visible')) { 
		$('h1').fadeOut();
		
		$('#screen1').fadeOut( function(){					
			$('a.readmore-toggle').fadeOut(function (){
			$('a.next-toggle').fadeIn();
			$('#screen2').fadeIn();
			}); 
		});
		}
	});
})
function setContainerHeight() {
	$("#slider").css({height:'auto'});
/*
	var heightnow=$("#slider").height();
    var heightfull=$("#slider").css({height:'auto'}).height();

    $("#slider").css({height:heightnow}).animate({
        height: heightfull
    }, 500); */
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
