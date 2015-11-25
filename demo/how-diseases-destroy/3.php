<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/3/blue.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #80BCDF; border-right: 1px dashed #80BCDF;}
h1 { color: #ab5297; font-size:35px;}
#screen1{width:100% !important; }
#screen2{width:100% !important;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
#img1 {float:left; margin-top:20px; margin-right:0;}
.alignment{text-align:left; padding: 10px 10px 0 10px;}
.question {float:left; margin:20px 0 0 30px; width:57%;}
.large_font {font-size:35px; color:#3f167c; padding-top:20px;}
#true1:hover,#false1:hover,#true2:hover,#false2:hover {cursor:pointer;}
.question ul {list-style:none;}
.question li {
	float:left; width: 157px; height: 80px;  
	-moz-border-radius: 100px / 50px;
	-webkit-border-radius: 100px / 50px;
	border-radius: 100px / 50px;
}
.question li:hover{ background-color:#fff99d;}
.question li:nth-child(even) {margin-left:70px;}
.t-align {text-align:left;}
#ans {width:95%; margin:0 auto;}
.question .selected {background-color:#fff99d;}

#animate{
  position:relative;
  left:18%;
}
#animate img{
  display:none;
  position:absolute;
  top:0;
  left:0;
}
#animate img.active{
  display:block;
}

html[dir="rtl"] #img1 {float: right;margin-top: 20px;margin-left: 0;margin-right: 35px;}
html[dir="rtl"] .question {float: right;margin: 20px 30px 0 0;}
html[dir="rtl"] .large_font {text-align:center;}
html[dir="rtl"] .question li {float: right;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.question li:nth-child(even) { margin-left: 30px; }
	#animate { left: 0; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Checking what you know... about how diseases destroy"); ?></h1>
					<p class="alignment"><?php echo _("Read the two statements below and click on TRUE or FALSE next to each one."); ?></p>
					<figure id="img1">
						<img src="images/3/kid1.png"/>
					</figure>
					<div class="question">
						<p class="t-align"><?php echo _("There is no difference between a cold and flu."); ?></p>
						<ul>
							<li id="bg1"><p class="large_font" id="true1"><?php echo _("TRUE"); ?></p></li>
							<li id="bg2"><p class="large_font" id="false1"><?php echo _("FALSE"); ?></p></li>
						</ul>					
					</div>					
					<div class="clear"></div>
				
					<figure id="img1">
						<img src="images/3/kid2.png"/>
					</figure>
					<div class="question">
						<p class="t-align"><?php echo _("You only need to take antibiotics for as long as you feel sick; once you feel better you can stop taking them."); ?></p>
						<ul>
							<li id="bg3"><p class="large_font" id="true2"><?php echo _("TRUE"); ?></p></li>
							<li id="bg4"><p class="large_font" id="false2"><?php echo _("FALSE"); ?></p></li>
						</ul>					
					</div>
					<div class="clear"></div>
				</section>							
			</div>
			<div id="screen2" class="screens">
				<section>
					<div id="ans">
						<p><?php echo _("Colds and the flu are both caused by viruses, but the flu (influenza) makes you feel much worse. The symptoms associated with the flu are more severe and come on suddenly. Antibiotics kill bacteria by stopping them from growing. For them to be effective, you must always take the correct dose for the length of time that your doctor prescribes. If you stop taking your antibiotics early, you run the risk of getting sick again."); ?></p>
						<p>
						<?php echo _("Click NEXT to learn more about diseases."); ?>
						</p>
						<figure id="animate">							
							<img src="images/3/animate1.png" class="active"/>
							<img src="images/3/animate2.png">
						</figure>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Cold and flu"); ?></strong></section></section>
<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var selected;
$(document).ready(function() {
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	
		var screen = hash[hash.length -1];
			if(screen < screenCount) {
			$('a.back-toggle').delay(300).fadeIn();
			$('a.check-toggle').parent().attr('href','#screen' + screen);
		
		} else {
			$('a.back-toggle').delay(300).fadeIn();
			$('a.check-toggle').fadeOut(function(){
				$('a.next-toggle').fadeIn();
				});
			}
		});
	}
	
	 /* Back Transition */
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "2.php";			
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });					
				$('a.back-toggle').attr('src','images/buttons/nextb.png');				
			});
		}
	});

	$('a.check-toggle').click(function(){
		if($('#screen1').is(':visible')) { 				
			$('#screen1').fadeOut( function(){				
				$('a.check-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('a.back-toggle').attr('src','images/buttons/back2.png');
				$('#screen2').fadeIn();
				}); 
			});
		}
	});	
	
    $('#true1').click(function(){
       $('#bg1').addClass('selected'); 
	   $('#bg2').removeClass('selected'); 
    });
	
	 $('#false1').click(function(){      
      $('#bg2').addClass('selected');
	  $('#bg1').removeClass('selected'); 
    });
	
	 $('#true2').click(function(){
       $('#bg3').addClass('selected');
	   $('#bg4').removeClass('selected'); 
    });
	
	 $('#false2').click(function(){      
      $('#bg4').addClass('selected');
	  $('#bg3').removeClass('selected'); 
    });	
	setInterval('swapImages()', 500);
});

function swapImages(){
	var active = $('#animate .active');
	var next = ($('#animate .active').next().length > 0) ? $('#animate .active').next() : $('#animate img:first');  

	active.removeClass('active');
	next.addClass('active');
}				
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
