<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") {?> dir="es"  <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.min.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<script src="scripts/cycle.js" /></script>

<style>
.bg { background-image: url('images/12/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; overflow: hidden; }
.wrap {border-left: 1px dashed #DA526D; border-right: 1px dashed #DA526D;}
.next-toggle, .back-toggle-screen { display:none; }
#buttons .next { display: none; }
h1{color:#d84e0d;}
#col1{ float:left;	width:46%; margin-top: 15px; padding-left: 20px; }
#col2{ float:left;	width:50%; margin-top: 15px;}
#scrn2_col1{ float:left; margin-top: 14px;}
#scrn2_col2{ float:left; width: 462px; margin-top: 10px; }
p { line-height:25px; text-align:left;}

#slideshow2 {  
	overflow: hidden;
    position: relative; 
	background-image: url('images/12/container.png'); 
	width:385px;
	min-height:326px;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	}
#slideshow{
    background-image: url('images/12/container.png'); 
	width:100% !important;
	min-height:326px;
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

#slideshow2 > div { 
    position: absolute; 
    top: 35px; 
    left: 0; 
    right: 0; 
    bottom: 10px; 
	text-align: center;
}
#slideshow img { width: 385px; height:260px; }
#slideshow2 img { width:346px; height:260px; }
#screen2 { width: 855px; }
#screen2 p { padding-left: 25px; font-size: 24px; line-height:23px; padding-top:30px;}
#slideshow img { margin:32px 0 0 20px;}
#scrn2_col1 {width:385px;}

html[dir="es"] #screen2 p { padding-top: 0; font-size: 22px; }
html[dir="rtl"] p { text-align: right; }
html[dir="rtl"] #col1 {float: right;}


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
#slideshow img { width: 315px; height: 270px; }
#slideshow {min-height: 340px;}
#scrn2_col1 {margin: 0 22%;}

#slideshow2 { width: : 277px;}
#scrn2_col2 { width: 100%; }


}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">								
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about staying healthy"); ?></h1>
				<p><?php echo _("Many substances that are common in our society are harmful to the body. Around the house, products used for cleaning and household chores are often quite poisonous. Even the medications prescribed for family members can be very dangerous if not used properly. Using any type of medicine without supervision by a doctor and pharmacist is a very dangerous situation. The effects of many of these powerful drugs can lead to illness and even death."); ?></p>
				
				<div id="col2">
					<div id="slideshow">					 
							<img src="images/12/cleaning_liquid.jpg" />				   
							<img src="images/12/bug_spray.jpg" />					  
							<img src="images/12/cleaning_liquid.jpg" />				
							<img src="images/12/drugs.jpg" />
							<img src="images/12/drinking_alcohol.jpg" />				  					
							<img src="images/12/smoker.jpg" />					  
					</div>
				</div>

				<div id="col1">
					<p><?php echo _("Another commonly misused substance is alcohol. Alcohol changes our perceptions of the world around us, and makes us drowsy and less able to react to stimuli. Like many other drugs, alcohol is addictive,that is to say it becomes a substance people depend upon to help them make it through each day. Smoking is still a problem too; not just for those who smoke. Smoking is related to many health problems including lung cancer,heart disease, and high blood pressure. Even second-hand, or smoke from someone else who is smoking near you, can increase the risk of heart disease and cancer."); ?></p>
				</div>
			</div>
			
			<div id="screen2" class="screens">
				<div id="scrn2_col1">
					<div id="slideshow2">
					   <div>
							<img src="images/12/swimming.jpg" />
					   </div>
					   <div>
							<img src="images/12/biking.jpg" />
					   </div>
					   <div>
							<img src="images/12/walking.jpg" />
					   </div>
						<div>
							<img src="images/12/running.jpg" />
					   </div>				  				  
					</div>
				</div>
				
				<div id="scrn2_col2">
					<p><?php echo _("Having a healthy body means thinking about health. It means being aware of what's in our diets, and it means making sure that we exercise regularly. Half of fitness means eating a healthy diet. The other half is engaging in enough strenuous exercise to attain and maintain a healthy weight. Vigorous exercise also makes our heart and muscles stronger, and enhances the way we feel about ourselves.<br/><br/>Exercises that strengthen the heart and increase endurance are designed with three factors in mind: frequency, intensity, and duration.  Frequency is just how often exercise is performed. Intensity is related to how fast or how hard the exercise is performed. The intensity needs to be enough to put stress on the heart, but not so much that a person tires before the exercise can do its good. That's duration, or how long an exercise is performed. Generally, adults should engage in at least 30 minutes of intense exercise each day. While we often think of intense exercises being such activities as swimming or running, simply walking can raise heart rates enough to make big differences in fitness."); ?></p>
				</div>
				<div class="clear"></div>
			</div>				
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Blocking harmful substances..."); ?></strong></section></section>	
<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
$(document).ready(function() {
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	$('h1').fadeOut();

		var screen = hash[hash.length -1];			
			if(screen < screenCount) {
			$('.back-toggle-screen').delay(300).fadeIn();
			$('.readmore-toggle').parent().attr('href','#screen' + screen);
		
		} else {
			$('.back-toggle-screen').delay(300).fadeIn();
			$('.readmore-toggle').fadeOut(function(){
				$('.next-toggle').fadeIn();
				$('.bg').css('background-image','url(images/12/bg2.jpg)');
				});
			}
		});
	}
	
	 /* Back Transition */
$('.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "11.php";		
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){								
				$('.next-toggle').fadeOut(function(){
					$('.readmore-toggle').fadeIn();
				});
				
				$('h1').fadeIn();
				
				$('.wrap').css({
					'border-left':'1px dashed #DA526D',
					'border-right':'1px dashed #DA526D'
				});
			
				$('.bg').css('background-image','url(images/12/bg.jpg)');
				$('#screen1').fadeIn();
		});
	}
});

/* Read More Screen Transition */
	$('.readmore-toggle').click(function(){
		if($('#screen1').is(':visible')) { 		
		$('h1').fadeOut();
		$('#screen1').fadeOut( function(){
			$('.readmore-toggle').fadeOut(function (){
			$('.next-toggle').fadeIn();
			$('.bg').css('background-image','url(images/12/bg2.jpg)');

			$('.wrap').css({
				'border-left':'1px dashed #5A9F80',
				'border-right':'1px dashed #5A9F80'
			});
			
			$('#screen2').fadeIn();
			}); 
		});
		}
	});
$('#slideshow').cycle({ 
    fx:    'curtainX', 
    sync:  false, 
    delay: -1500 
 });

$("#slideshow2 > div:gt(0)").hide();

setInterval(function() { 
 
	$('#slideshow2 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow2');
},  3000);
});

</script>
<?php include("setlocale.php"); ?>
</body>
</html>
