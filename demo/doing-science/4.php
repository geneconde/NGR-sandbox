<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
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
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<style>
.bg { background-image: url('images/4/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
.wrap {border-left: 1px dashed #B9B7B8; border-right: 1px dashed #B9B7B8;}
h1 { color: #01A0E1;}
.key { color: rgb(42, 111, 165);}
.h-light {color: #f44e14;}
.h-light2 {color:#00a1e1;}
article { width:97.5%; margin-bottom:10px; }
article h2 {color: black;}
#ins {margin-top:110px; width:98%;}
figure{ margin:0;}
#buttons a.next-toggle, #buttons a.back-toggle-screen { display:none; }

.non-pad{padding:0px !important; padding-top:5px !important;}
.allign-left{text-align:left !important; padding-top:0px;}
.mtop {margin-top:-30px !important;}
.no-mtop {margin:0 !important;}
#col {width:61%; float:left;}

#screen2, #screen3, #screen4 { font-size: 22px; }

#scrn2_img {width:35%; max-height:95%; height:280px; max-height:95%; float:left; margin:20px 0 0 150px;}
#scrn2_img2 {width:35%; max-height:95%; height:280px; max-height:95%; float:left; margin:20px 0 0 0;}

#scrn2_img2 img, #scrn2_img img{width:100%;}

#scrn3_img {width:65%; max-height:95%; height:280px; max-height:95%; margin:0 auto; }

#screen2_img {width:95%; margin:0 auto; margin-top:-13px; }
#screen2_img img{ margin-right:20px; width: 30%;}

#img_container {width:100%;}

#scrn1_image_container img{
  display:none;
  position:absolute;
  top:0;
  left:0;
  width:90%;
  height:210px;
  margin:105px 0 0 15px;

}
#scrn1_image_container img.active{
  display:block;
}

#scrn1_image_container{
  position:relative;
 background-image: url('images/4/image-container.png'); width:38%; height:330px; background-repeat: no-repeat; background-size: 100% 100%; margin-bottom:10px; 
}
#scrn1_image_container img{
  display:none;
  position:absolute;
  top:0;
  left:0;
}
#scrn1_image_container img.active{
  display:block;
}
#screen3 img {width: 75%;}

#scrn3 h2 {margin:3px 0 0 3px;}
#screen3 p { text-align: left; } 
#left_col {width:60%; float:left;}
#right_col { width:38%;  float:left; }
#right_col img { width: 80%;}

html[dir="rtl"] h1 { padding-right: 30px; }
html[dir="rtl"] p { text-align: right !important; padding-right: 30px; }
html[dir="rtl"] #screen3 h2 { text-align: center; padding-right:0; }
html[dir="rtl"] #col { float: right; }
html[dir="rtl"] #scrn1 p:nth-child(4) { width: 50%; float:right; margin-top: -150px; }

<?php if ($language == 'es_ES'): ?>
	#screen2 p { font-size: 22px; }
<?php endif; ?>

<?php if ($language == 'zh_CN'): ?>
	.mtop { margin-top: 0 !important; }
<?php endif; ?>

@media all and (max-width : 1250px){
	#screen2, #screen3, #screen4 { font-size: 20px; }
	#screen3 img {width: 60%;}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	#screen2 p { font-size: 20px; }
	#screen3 p, #screen4 p { font-size: 22px; }
	#screen3 p { font-size: 21px; }
	#screen3 img { width: 65%; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.bg > div { width: 95% !important; }
	html[dir="rtl"] #scrn1 p:nth-child(4) { margin-top: -85px; }
}	
</style>
 
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">		
				<h1><?php echo _("Reviewing big ideas... about doing science");?></h1>		
				<section id= "scrn1">					
					<p class="allign-left">
					<?php echo _("You may have heard or read about something called \"the scientific method\". The <span class='bold h-light'>scientific method</span> is often thought to be a set of steps that are followed in a specific order. But scientists do not always follow one specific series of steps. So it is better to think of the scientific method as how scientists plan and think when they are trying to learn things and solve problems—what it means to be scientific.");?> 
					</p>
					<div id="col">
						<p class="allign-left">
							
						<?php echo _("Being scientific is more about being <span class='bold h-light'>systematic</span> - making careful plans about how to investigate a question about nature– rather than simply following directions. Being scientific usually starts by asking one or more questions about something that is observed and then trying to come up with answers or explanation for the <span class='bold h-light'>observation</span>.");?>
						</p>
					</div>
					<div id="scrn1_image_container" class="fr mtop">
						<img src="images/4/scrn1_animate1.jpg" class="active"/>
						<img src="images/4/scrn1_animate2.png"/>
					</div>
					<!-- <div class="clear"></div> -->
						<p class="allign-left">
							<?php echo _("\"Hey look! I wonder what that is.\" Or maybe, \"I wonder what is happening there.\"");?> 
						</p>						
								
				</section>
			</div>			
			
			<div id="screen2" class="screens">
				<section id= "scrn2">
						<p class="allign-left">
							<?php echo _("After making an observation and coming up with a good question there are many ways to investigate and figure out what's going on to try and answer your question. Depending on the kind of question you ask, and the kind of object or event in nature you're interested in, there are many different ways to design an investigation.");?>
						</p>
						<p><?php echo _("One way is to simply observe what's going on in nature and not to control or manipulate the situation. This is sometimes called observational science.");?></p>
						<p><?php echo _("A lot of really good science happens this way - especially in biology and earth science.");?></p>
						<p><?php echo _("Here's an example of observational science.");?></p>				
						<p><?php echo _("Suppose you observe that this winter seems to be harsher than the last few winters you remember. So you might frame your thinking as a question like: Are the average high temperatures and low temperatures this winter lower than in previous winters?");?></p>
						<div id="img_container">
							<figure id="screen2_img">
								<img src="images/4/boil.png"/>
							    <img src="images/4/microwave.png"/>
							</figure>
							<div class="clear"></div>
						</div>
						
						<div class="clear"></div>
				</section>				
			</div>			
			
			<div id="screen3" class="screens">
				<section id="scrn3">																	
						<p>
						<?php echo _("A good way to investigate whether or not this is true is to use a thermometer to observe the temperature at your house or school every day. You can even observe the wind direction and speed too.  Then you can write down the temperatures and wind speeds – that's called collecting <span class=\"key\">data</span> - and then compare them to previous winters to see if you were right or not about this winter being harsher.");?> 
						</p>
						<img src="images/4/4c.png" />
						<h2><?php echo _("Experimental Science"); ?></h2>
						<p>
							<?php echo _("Another way of doing a scientific investigation – and it's the way everybody thinks about when they think about doing science – is to do an <span class=\"key\">experiment</span>.");?></p>
						<p>
							<?php echo _("This is a way of doing science where the investigator – the scientist – designs a controlled test to collect evidence to support or reject what she thought was going to happen based on her preliminary explanation or idea of what was going on.");?></p>
						<p>
							<?php echo _("This preliminary explanation is usually called a <span class=\"key\">hypothesis</span>.");?>
						</p>
				</section>								
			</div>	
			
			<div id="screen4" class="screens">
				<div id="scrn4">				
					<p><?php echo _("A \"controlled\" test (which is also sometimes called a <span class=\"key\">\"fair\" test</span>) means that the investigator keeps everything the same except for one thing they want to test for.");?>
					<?php echo _("Anything that can be different or change in an experiment is called a variable – because it can vary or change. In order to really figure out what's going on, scientists want only one thing to change at a time.");?>
					</p>
					
					<p><?php echo _("Because the winter has been so cold your mom has been making you hot chocolate after you come in from playing outside.	As you watch impatiently as your mom heats up water for the hot chocolate you wonder: \"does it matter which pot my mom uses for how fast the water boils?\" You think the biggest pot will boil the water fastest. That's your <span class=\"key\">prediction</span> – what you think is going to happen.");?>					
					</p>
					
					<div id="left_col">
						<p><?php echo _("So, to test your prediction, you design an experiment to find out. You test each pot by putting the exact same amount of water in each of the different pots your mom has. Then you ask your mom to give each pot a turn on the same stove burner at the same heat setting.");?>						
						</p>
						<p>
						<?php echo _("Then you time how long it takes for the water to boil in each pot and you record that temperature as your data. Then you decide: Do those data support your hypothesis?");?>
					</p>
					</div>
					
					<div id="right_col">
						<img src="images/4/oven.jpg" />
					</div>					
					<div class="clear"></div>
					
					
				</div>
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Looking through the telescope...");?></strong></section></section>	
<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 4;
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('h1').fadeOut();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				$('.bg').css('background-image','url(images/4/bg.jpg)');
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
					$('a.back-toggle').parent().attr('href','4.html#');
					window.location.hash = '';
				});
				$('a.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '4.html#screen2';
				});		
				
			}  else if($('#screen4').is(':visible')) {
				$('#screen4').fadeOut( function(){
					$('#screen3').fadeIn();
					window.location.hash = '4.html#screen3';
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
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen4');
				});
			} else if ( $('#screen3').is(':visible') ) {
				$('#screen3').fadeOut(function(){ 
					$('#screen4').fadeIn();
					
				});
				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});
	setInterval('swapImages()', 600);
	setInterval('swapImages2()', 4000);   
});
function swapImages(){
  var $active = $('#scrn2_img .active');
  var $next = ($('#scrn2_img .active').next().length > 0) ? $('#scrn2_img .active').next() : $('#scrn2_img img:first');  
  var $active2 = $('#scrn2_img2 .active');
  var $next2 = ($('#scrn2_img2 .active').next().length > 0) ? $('#scrn2_img2 .active').next() : $('#scrn2_img2 img:first'); 

    $active.removeClass('active');
    $next.addClass('active');
    $active2.removeClass('active');
    $next2.addClass('active');

}	
function swapImages2(){
 
  var $active = $('#scrn1_image_container .active');
  var $next = ($('#scrn1_image_container .active').next().length > 0) ? $('#scrn1_image_container .active').next() : $('#scrn1_image_container img:first');  

	$active.fadeOut(500,function(){
    $active.removeClass('active');
    $next.fadeIn(2000).addClass('active');
    });
}	

</script>
<?php include("setlocale.php"); ?>
</body>
</html>
