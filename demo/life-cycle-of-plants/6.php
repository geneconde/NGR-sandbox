<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/timeline.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
$(document).ready(function() {
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });

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
		document.location.href= "5.php";		
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut();
				$('a.readmore-toggle').fadeIn();
				$('h1').fadeIn();
		});
	}
});

/* Read More Screen Transition */
	$('a.readmore-toggle').click(function(){
		if($('#screen1').is(':visible')) { 
		$('h1').fadeOut();
		
		$('#screen1').fadeOut( function(){			
			$('#screen2').fadeIn();
			$('a.readmore-toggle').fadeOut(function (){
			$('a.next-toggle').fadeIn();
			}); 
		});
		}
	});
});
</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; background-color: #FFFFFF;}
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/6/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative;overflow:hidden;}
.allignment{margin-top:21px; padding-left:17px; font-size:35px; color: #9B5B02;}
.clear { clear:both;}
/* .buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; } 
img.next-toggle {  display:none; }*/

.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }
.i-red { color: indianred; }
.pistil { color: #bccf2f; }
.key{color: rgb(42, 111, 165);}

@-webkit-keyframes infinite-spinning {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes infinite-spinning {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
}
@-webkit-keyframes infinite-spinning {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
}

.image-container{width:90%;height:170px;float:left;margin-left:50px;margin-bottom:13px;}
.image-container img{width:23%;height:95%;}
.mtop{margin-top:50px;}
.text-container{width:75%;height:170px;float:right;padding-top:22px;}
.text-container p{font-size:20px;}
.pad-top{padding-top:51px;}
#screen1{ max-width: 100%; margin: 0 auto; margin-top:60px;}
#screen2{display: none; text-align: center;  max-width: 95%;  margin-top: 0%;padding:0px 10px 0px 10px;}
#screen2 ul { list-style: none; }
.title{height:100px;width:100%;}
.title h2{text-align:center;padding-top:70px;font-weight:normal !important;font-size:20px !important;}
.screen2_main-image-container{width:90%;height:200px;margin-top:20px !important;text-align:center;margin:0 auto;margin-bottom:10px;}
.screen2_image1-container{width:27%;height:100%;float:left;margin-left:60px;}
.screen2_image1-container img{width:100%;height:100%;}
.screen2_image2-container{width:20%;height:100%;float:left;margin-left:60px;}
.screen2_image2-container img{width:100%;height:100%;}
.screen2_image3-container{width:27%;height:100%;float:left;margin-left:60px;}
.screen2_image3-container img{width:100%;height:100%;}
.screen2_image4-container{width:30%;height:100%;margin:0 auto !important;}
.screen2_image4-container img{width:100%;height:100%;}

#sun {
	height: 33%;
	position: absolute;
	margin-left: 78%;
	margin-top: -7%;
	width: 35%;
	background:url("images/misc/sun.png") no-repeat center;
    -webkit-animation: infinite-spinning 5s infinite;
     -moz-animation: infinite-spinning 5s infinite;
     -o-animation: infinite-spinning 5s infinite;
}

#title-container{width:85%;text-align:left;margin: 17px 0 0 0;padding:10px 0 0 13px;}
#title-container h1{font-size:28px;color: #41838E;}

#question-container{width:100%;padding:10px 0px 0px 15px !important;margin-top:70px;margin-bottom:20px;}
#question-container h2{font-size:20px;text-align:left !important;}
.content-inner h3 { font-size:20px !important; text-align:left;}
.content-inner p{ font-size: 22px; color:black !important; }
.f-size{font-size:20px !important; font-weight:normal !important;}

.event input[type="radio"]:checked ~ .content-perspective .content-inner h3 {
	color: #000000;
}
h1{font-size:35px;}
p{font-size:24px;}

html[dir="rtl"] h1 { padding-right: 20px; }
html[dir="rtl"] h2 { text-align: right !important; padding-right: 20px; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] .content-inner h3, html[dir="rtl"] .content-inner p { text-align: right !important; }

<?php if($language == "es_ES") { ?>
	h1 { position: relative; z-index: 9 !important; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	.bg ul, .allignment { position: relative; z-index: 5 !important; }
	#sun { z-index: 1; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	.event { margin-bottom: 30px; clear: both; }
}	
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		
		<div class="bg">
				<div id="sun"></div>
				<h1 class="allignment"><?php echo _("More big ideas... about the life cycle of plants");?></h1>		
		<div id="screen1" class="screens">		
			<ul>
				<li class="event">
					<input type="radio" name="tl-group1" checked/>
					<label></label>
					<img class="thumb" src="images/6/pink_rose.jpg">								
					<div class="content-perspective">
			
						<div class="content">
							<div class="content-inner">
								<h3><?php echo _("Flowers have many parts needed to make more seeds.");?></h3>
									<p> <?php echo _("The outer parts of a flower are the petals. We notice the <span class='key'>petals</span> because they are usually colorful.");?> </p>									 
							</div>
						</div>
					</div>
				</li>
				<li class="event">
					<input type="radio" name="tl-group1"/>
					<label></label>
					<img class="thumb" src="images/6/flower2.jpg">
					<div class="content-perspective">
						<div class="content">
							<div class="content-inner">
								<h3><?php echo _("Inside the petal are");?></h3>
								<p><?php echo _("several things that look like little sticks with a yellow top. These are called <span class='key'>stamen</span> and they contain pollen.<span class='key'> Pollen</span> is used to make more seeds.");?>				                
								</p>
							</div>
						</div>
					</div>
				</li>
				<li class="event">
					<input type="radio" name="tl-group1"/>
					<label></label>
					<img class="thumb" src="images/6/screenb1_flower1.jpg">
					<div class="content-perspective">
						<div class="content">
							<div class="content-inner">
								<h3><?php echo _("In the center of the flower");?></h3>
								<p><?php echo _("is the <span class='key'>pistil</span>.");?></p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div id="screen2" class="screens">
			<div class="title" style="margin-bottom:12px;">
	
			</div>
			<ul>
				<li class="event">
					<input type="radio" name="tl-group2" checked/>
					<label></label>
					<img class="thumb" src="images/6/screenb1_flower2.jpg">								
					<div class="content-perspective">				
						<div class="content">
							<div class="content-inner">
								<h3><?php echo _("The top part of the stamen");?></h3>
									<p><?php echo _("is the anther. It makes<span class='key'> pollen</span>.");?></p>									 
							</div>
						</div>
					</div>
				</li>
				<li class="event">
					<input type="radio" name="tl-group2"/>
					<label></label>
					<img class="thumb" src="images/6/screenb1_flower4.jpg">
					<div class="content-perspective">
						<div class="content">
							<div class="content-inner">
								<h3><?php echo _("To make a seed");?></h3>
								<p><?php echo _("<span class='key'> pollen</span> has to find its way to a pistil and travel down to reach the egg. This is called <span class='key'>pollination</span>.");?>		                
								</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Flowers are blooming");?></strong></section></section>
	<script src="scripts/video.min.js"></script>
<?php include("setlocale.php"); ?>
</body>
</html>
