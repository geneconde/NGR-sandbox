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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /><!--For accordion-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script><!--For accordion-->
<script src="jPlayer/jquery.jplayer.min.js"></script>

<script>
var hash = window.location.hash.slice(1);
var screenCount = 3;
$(document).ready(function() {
$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

/* ==================screen transitions============= */

var native_width = 0;
var native_height = 0;


$("#jquery_jplayer_1").jPlayer({
   ready: function () {
	$(this).jPlayer("setMedia", {
	 webmv: "images/8/video1.webm",
	 m4v: "images/8/video1.m4v"		 
	}).jPlayer("play");
   },
   ended: function(){
   	$(this).jPlayer("play");
   },
   swfPath: "scripts",
   supplied: "webmv, m4v",
   solutions: "flash, html",
	nativeVideoControls: {
		all: /./
	}
  });	
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];
				$('.bg').css('background-image','url(images/8/bg.jpg)');				
				if(screen < screenCount) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);					
				} else {
					$('a.readmore-toggle').fadeOut(function(){
						$('#sun').fadeOut();
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
					$('.bg').css('background-image','url(images/8/bg.jpg)');
					$('#screen1').fadeIn();
					$('#sun').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					$('a.back-toggle').parent().attr('href','8.php#');
					window.location.hash = '';
				});
				$('a.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				$('#sun').fadeOut();
				$('#screen3').fadeOut( function(){
					$('.bg').css('background-image','url(images/8/Dandelion.gif)');
					$('#screen2').fadeIn( function(){
						window.location.hash = '#screen2';
					});
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
					$('.bg').css('background-image','url(images/8/Dandelion.gif)');
					$('#sun').fadeOut();
					$('a.readmore-toggle').parent().attr('href','#screen3');
					$('a.back-toggle').parent().attr('href','#screen1');
					$('#screen2').fadeIn();
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){
					$('.bg').css('background-image','url(images/8/bg.jpg)');
					$('#screen3').fadeIn();
					$('a.back-toggle').parent().attr('href','#screen2');
				});
				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});

});
/* ===================END========================== */

</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background-image: url('images/8/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%;  position:relative; overflow:hidden; }

#screen1 { text-align: center;  max-width: 95%; margin: 0 auto; }
#screen2 { margin:0 auto; display: none; text-align: center;  max-width: 95%;  margin-top: 0%;}
#screen3 { margin:0 auto; display: none; text-align: center;  max-width: 95%;  margin-top: 0%;}

.clear { clear:both;}
.center{margin:0 auto;}
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.key { color: #2A6FA5; }
.gray { color:gray; }
.pink { color: #F14970;}
.violet { color: #4222BA;}
.darkorange { color: #FF6600;}
.darkgreen { color: #3B770E;}
.darkyellow { color: #928832;}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }

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

.question-container{margin-top:70px;}
.question-container p{font-size:24px;text-align:left !important;}

.img-container{
width:31.5%;
height:270px;
min-height:50%;
float:left;
margin-left:12px;
}

.img-container img{
            -moz-border-radius: 30px;
            -khtml-border-radius: 30px;
            -webkit-border-radius: 30px;
			height:100%;
			width:100%;
}

.acc-container{width:93%;margin:0 auto;min-height:300px;}
#accordion h3{background:#8AC90C; font-family: 'PlaytimeRegular';}
#accordion{height:100%;width:100%;}
#accordion p{font-family: 'PlaytimeRegular';}
#accordion h2{font-family: 'PlaytimeRegular';}

.ui-accordion .ui-accordion-content {overflow:hidden !important; }

.acc-img-container{width:20%;float:left;height:150px;}

.acc-img-container img{width:100%;height:100%;}

.f-size{font-size:20px;}

.f-weight{font-weight:normal !important;}
.allignment{margin-top:21px; padding-left:17px; font-size:35px; color:#41838E;}
h2, p {font-size:24px; font-weight:normal;}
.no-mbottom {margin-bottom:3px;}
.new-mtop{margin-top:3px;}
.no-pleft{padding-left:0px !important;}
.mtop1 {margin-top:25px;}

#video-container{width:95%;margin: 0 auto; min-height:150px;}
iframe {width:56%; margin-top:10px; height:250px; margin:0 auto;}

#accordion p { margin-left: 23%; }
#screen3 p, h2{ text-align: left; }
#jquery_jplayer_1 {margin: 0 auto;}

html[dir="rtl"] h1 { padding-right: 20px; }
html[dir="rtl"] h2 { text-align: right; }
html[dir="rtl"] #screen3 p { text-align: right; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] .question-container { position: relative; z-index: 999; }
html[dir="rtl"] .question-container p { text-align: right !important; }

<?php if($language == "es_ES") { ?>
	h1 { position: relative; z-index: 99; }
	.question-container { position: relative; z-index: 9; }
<?php } ?>

<?php if($language == "zh_CN") { ?>
	#screen1 { z-index: 20; position: relative; }
	#sun { z-index: 10; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1, .allignment { position: relative; z-index: 5; }
	#sun { z-index: 1; }
	#screen2 , #screen3 { padding-top: 15px; }
	.question-container { margin-top: 20px; }
}	
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<div id="sun"></div>							
					<h1 class="allignment"><?php echo _("More big ideas... about the life cycle of plants");?></h1>					
						<div id="screen1" class="screens">
							<div class="question-container">
								<p class="no-mbottom" ><?php echo _("Plants have different ways to attract their pollinators. For example, many flowers have brightly-colored petals and give off attractive aromas, while others produce <span class='key'>nectar</span>, a food for some insects.");?> </p>
							</div>	

								<div id="jquery_jplayer_1"></div>
								<div id="jp_container_1"></div>						
										
							<div class="question-container" style="margin-top:0px !important; padding-top:0px !important;">
								<p class="new-mtop" ><?php echo _("<span class='key'>Pollinators</span> love to drink the sweet nectar at the base of the pistil and go from flower to flower to get more. This way, the insect gets something to eat and the plant is able to make seeds.");?></p>
							</div>
						</div>								
		
				<!--SCREEN 2-->
				<div id="screen2" class="screens">															
					<div class="question-container no-pleft mtop1">
						<h2><?php echo _("Some plants use the wind to spread their pollen. Think of a dandelion being blown by the wind.");?>
						</h2>				
					</div>						
				</div>			
				
			<div id="screen3" class="screens">
				<h2 class="mtop1 no-mbottom"><?php echo _("Plants differ on how they produce their offspring. Having seeds is one of the five ways plants reproduce.");?><br/>							
					<?php echo _("Some plants have fruit with tiny little hooks that catch on passing animals. The fruit with seeds inside it gets carried to a distant place the animal goes.");?><br/>								
				    <?php echo _("However the seeds get dispersed (spread over different places), they will begin to grow and continue the cycle of life.");?>
				</h2>
				<p class="no-mbottom new-mtop brown"><?php echo _("Click on each item below to view examples of flowering plants.");?></p>
				
				<div class="acc-container">				
					<div id="accordion">
					  <h3><?php echo _("Pine and Spruce Trees");?></h3>
						  <div>								
								<div class="acc-img-container">
									<img src="images/8/pine.jpg" />
								</div>
								<p>
								<?php echo _("The pine and spruce trees are examples of flowering plants that reproduce using seeds. The cones harbor the tree's seeds.");?>
								</p>
								<div class="clear"></div>
						  </div>

						  <h3><?php echo _("Coconuts");?></h3>
						  <div>
								<div class="acc-img-container">
									<img src="images/8/coconut.jpg" />
								</div>
								<p>
								<?php echo _("The large seeds of palm trees are perhaps the ultimate example of a durable seed, as they can reach locations miles away by floating in water, even through the ocean.");?>
								</p>
								<div class="clear"></div>
						  </div>
							
							 <h3><?php echo _("Acorns and Walnuts");?></h3>
						  <div>
								<div class="acc-img-container">
									<img src="images/8/walcorn.png" />
								</div>
								<p>
								<?php echo _("Acorns and walnuts are large seeds that are able to endure harsh conditions and be planted far away from their parent tree.");?>
								</p>
								<div class="clear"></div>
						  </div>							
							 <h3><?php echo _("Pollen");?></h3>
						  <div>
								<div class="acc-img-container">
									<img src="images/8/pollination1.jpg" />
								</div>
								<p>
								<?php echo _("Pollen is also considered a seed, which is transferred by a pollinator to the same (<span class='key'>self-pollination</span>) or a different plant (<span class='key'>cross-pollination</span>) in order to reproduce.");?> 
								</p>
						  </div>									
					</div>
				</div>
			</div> <!---Screen3-->		
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>		
	<section id="preloader"><section class="selected"><strong><?php echo _("Attracting pollinators...");?></strong></section></section>
	
<script>
  $(function() {
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  });
 </script>
  <?php include("setlocale.php"); ?>

</body>
</html>
