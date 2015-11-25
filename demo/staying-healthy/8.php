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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/jquery.jplayer.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background: url('images/8/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; overflow: hidden; }

#buttons .next { display: none; }
.wrap {border-left: 1px dashed #2C3346; border-right: 1px dashed #2C3346;}
#screen1 .col1 { width:30%;	min-height:206px; }
#screen1 .col2 { width:48%; }
.col1 {
	background-image: url('images/8/container.png');
	width:38%; 
	min-height:230px;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	float:left;
 }
.col2 {	
	width:41%;	
	margin:0 auto; 
	float:left;
	margin-left:20px;
 }
 
 p{color:white; line-height: 25px;}
 #screen1 .text_container { width: 60% !important; }
 .text_container{
	width:68% !important;
	float:left;
	margin-top:10px;
 }
 #screen1 .bottom_container{ width: 38% !important; margin: 3% 0 0 2%; }
 .bottom_container{
	background-image: url('images/8/container.png');
	min-height:200px;
	background-repeat: no-repeat;
	background-size: 100% 100%;
	float:left;
	width:32% !important;
	margin-top:20px;
 }
 .no-mtop{margin-top:0;}
 .mtop{margin-top:25px;}
 .mtop2 {margin-top:35px;}
 #screen1 .col1 img { height: 180px; }
 .col1 img {width: 95%; margin-top: 14px;  height:204px;}
 #screen1 .bottom_container img { height: auto;}
 #screen2 { width: 855px; }
 #screen2 .col1 { width: 325px; margin-bottom: 2%; } 
 #screen2 .col1 img { width: 305px; } 
 #screen2 .col2 { width: 355px; }
 .bottom_container img {width: 95%; margin-top: 14px;  height:173px;}
 #jquery_jplayer_1 { width: 250px !important; height: 244px !important; }
 #jp_video_0 { width: 250px !important; height: 231px !important; margin: 0 0 0 12px;}
 p {text-align:left;}
 #screen1 p { margin-bottom: 1%; }
 
html[dir="es"] #screen1 p { font-size: 22px; }
html[dir="rtl"] p { text-align: right; }
html[dir="rtl"] #jp_video_0 { margin-right: 12px;}
html[dir="rtl"] .col2 { margin-left: 5px; }


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
#screen2 .col1 img {width: 260px; }
#screen2 .col1 {width: 280px;}
#screen2 .col2 {width: 300px;margin-bottom: 20px;}
.mtop2 {margin-top: 35px;}
.text_container {width: 60% !important;}
.bottom_container{width: 39% !important;}
}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
				<div id="screen1" class="screens">
					<h1><?php echo _("More big ideas... about staying healthy"); ?></h1>
					<div class="col1">
						<img src="images/8/bacteria.gif" />
					</div>
					
					<div class="col2 mtop">			
						<p>
						<?php echo _("What's going on when you are sick? You have been invaded.  Some tiny disease agent has found a way into your body, and is reproducing, using your body as a shelter, food source, and a way of passing its offspring on to others."); ?>
						</p>				
					</div>
					<div class="clear"></div>
						<p>
							<?php echo _("Most infections are caused by one of two agents. The first are simple living cells called <span class='key'>bacteria</span>. Bacteria are among the simplest of all living things, and are found everywhere on the planet. Most bacteria are safe and usually beneficial to people. A few types, though, are dangerous. When they get inside our bodies, they form colonies where they make many millions of copies of themselves and cause damage to the tissues around them."); ?>
						</p>
					<div class="text_container">
						<p>
							<?php echo _("Most of the time, our <span class='key'>immune system</span> is able to identify and destroy the bacteria infecting us. Sometimes, however, the bacteria reproduce out of control and we need antibiotic medication. Antibiotics kill bacteria and are not harmful to people. After two or three days taking the medication, many people feel much better, but it is very important to take all of the antibiotic prescribed according to the directions. This make sure all of the bacteria are killed and a new infections doesn't occur."); ?>
						</p>
					</div>
					
					<div class="bottom_container">
						<img src="images/8/antibiotic.jpg" />
					</div>			
					<div class="clear"></div>
				</div>
				
				<div id="screen2" class="screens">			
					<div class="col1 mtop">
						<img src="images/8/virus.jpg" />
					</div>
					
					<div class="col2 mtop">			
						<p>
						<?php echo _("Other infections are caused by extremely small particles called <span class='key'>viruses</span>. Viruses aren't completely alive. They are inactive unless they are inside living cells. Once there, they cause the cell to make huge numbers of viruses,and then break open, releasing the viruses to infect other cells."); ?>
						</p>				
					</div>
					<div class="clear"></div>					
						<p>
							<?php echo _("Our immune system can nearly always find ways to destroy viruses. Every time you have had a cold or the flu, you have suffered from a viral infection, and your immune system has cleared it from your body in one or two weeks. Once you have survived any virus, your immune system is able to remember it for a very long time, and is then able to identify and destroy it whenever you are exposed again."); ?>  
						</p>
					<div class="text_container mtop2">
						<p>
							<?php echo _("Some viruses, though, are so dangerous they can cause permanent damage or death before our immune systems can clear them out. For these diseases we rely on vaccinations to protect us from danger. <span class='key'>Vaccinations</span> use very weak varieties of virus or even broken up viral particles to teach our immune systems to identify and destroy these dangerous agents. Some vaccines are taken by mouth; others are given as shots."); ?> 
						</p>
					</div>
					
					<div class="bottom_container">
						<div id="jquery_jplayer_1"></div>
						<div id="jp_container_1"></div>
					</div>		

					<div class="clear"></div>
						
				</div>		
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Vitamins for energy boost"); ?></strong></section></section>
	
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
				$('img.next-toggle').fadeIn();
				});
			}
		});
	}	
	 /* Back Transition */
$('.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "7.php";		
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){							
				$('.next-toggle').fadeOut(function(){
				$('.readmore-toggle').fadeIn();
					$('.bottom_container').css({
						width:'32%',
						'min-height':'200px'
					});
				$('.text_container').css('width','68%');
				$('#screen1').fadeIn();	
				});				
				$('h1').fadeIn();
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
			
			$('.bottom_container').css({
				width:'38%',
				'min-height':'230px'
				});
			$('.text_container').css('width','62%');
			$('#screen2').fadeIn();
			}); 
		});
		}
	});
});

$("#jquery_jplayer_1").jPlayer({
	ready: function () {
		$(this).jPlayer("setMedia", {
			webmv: "images/8/vaccination.webm",
			m4v: "images/8/vaccination.m4v"		 
		});//.jPlayer("play");
	},
	
	ended: function() { // The $.jPlayer.event.ended event
		$(this).jPlayer("play"); // Repeat the media
	},

	swfPath: "scripts",
	supplied: "webmv, m4v",
	size: {
		 width: "340px",
		 height: "250px"
	},
	solutions: "flash, html",
	nativeVideoControls: {
		all: /./
	}
});
</script>
<?php include("setlocale.php"); ?>
</body>
</html>
