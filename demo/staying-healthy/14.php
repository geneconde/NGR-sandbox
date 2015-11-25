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
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<style>
.bg {
	background-image: url('images/14/bg.jpg'); 
	background-repeat: no-repeat; 
	background-size: 100% 100%; 
	width:100% !important;
	height:100%;
	position:relative;
	}
#buttons .next { display: none; }
h1 {color: #ffdf4e; font-size:30px; }
h2 { color:#0cc4f7; text-align:center; }
p {text-align:left; color: white;}
figure { text-align: center; margin:0; margin-top: 5px;}
figure img { border:2px solid #fcd49a; width:40%; height:240px;}

#screen2 h2 {margin:0; padding-top:30px;}

#text-area {width:60%; height:380px; max-height:95%; margin:0 auto;}
textarea{ 
	resize: none; 
	font-size:24px; 
	width:100%; height:80%; 
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;  
	border-radius: 10px;	
	padding-left:10px;
	margin-top:10px; 
	outline: none;
	border: none !important; 
	font-family:'PlaytimeRegular';
	}

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 26px; }
<?php endif; ?>

html[dir="rtl"] h2 { text-align: center; }
html[dir="rtl"] p { text-align: right; }
</style>

</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("Using what you know... about staying healthy... to solve a problem"); ?></h1>
				<h2><?php echo _("The Scenario"); ?></h2>
				<p><?php echo _("You are a nutritionist working in a school. After taking some surveys you have realized that the majority of the fourth and fifth grade students are eating either a pastry that is put in the toaster, or sugar-coated cereal for breakfast 90% of the time. By solving this breakfast nutrition problem, you can help the students learn more in class."); ?></p>
				<figure>
					<img src="images/14/pastry.jpg" alt="placeholder" />
					<img src="images/14/cereals.jpg" alt="placeholder" />
				</figure>
			</div>
			
			<div id="screen2" class="screens">
				<h2><?php echo _("Your Task"); ?></h2>	
				<p>
					<?php echo _("Explain to them why this breakfast is incomplete, and offer them healthier breakfast ideas. (Hint: you can inform them about the food groups their breakfast is not including, or about the harm in having too much of certain substances.)"); ?>
				</p>
				
				<div id="text-area">
					<textarea id="metaAnswer" rows="4" cols="50" placeholder="<?php echo _("Click here to start typing your answer...");?>" ></textarea>								
				</div>
			
			</div>
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("A healthy nutrition diet"); ?></strong></section></section>
<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
var metaAnswer = '';
var nullAnswer = false;	
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
				});
			}
		});
	}	
	 /* Back Transition */
$('.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "13.php";		
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){							
				$('.next-toggle').fadeOut(function(){
				$('.readmore-toggle').fadeIn();
				$('h1').fadeIn();
				$('#screen1').fadeIn();
				});				
				
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
			$('#screen2').fadeIn();
			}); 
		});
		}
	});
	
	$('.next-toggle').click(function(e){ 
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert('<?php echo _("Please type your answer."); ?>');
			nullAnswer = false;					
		} else {		
			save();
		}
	});
});
function checkNull() {
	metaAnswer = $("textarea#metaAnswer").val();
	if(metaAnswer == '' ) {
		nullAnswer = true;
	}
}
</script>
<?php include("setlocale.php"); ?>
</body>
</html>
