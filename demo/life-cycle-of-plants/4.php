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
<link rel="stylesheet" type="text/css" href="styles/timeline.css" />
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>

<script src="scripts/modernizr.custom.63321.js"></script>
<script>
var hash = window.location.hash.slice(1);
var screenCount = 3;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

/* ==================screen transitions============= */

var native_width = 0;
var native_height = 0;
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				$('h1').fadeOut();
				var screen = hash[hash.length -1];			
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
				document.location.href= "3.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();	
					$('#instruction').fadeIn();
					$('#screen1').fadeIn();					
					$('a.back-toggle').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					$('a.back-toggle').parent().attr('href','3.php#');
					window.location.hash = '';
				});
				$('a.back-toggle-screen').fadeOut();
			} else if($('#screen3').is(':visible')) {
				window.location.hash = '#screen2';
				$('#screen3').fadeOut( function(){
				$('#screen2').fadeIn(function(){
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
					$('a.readmore-toggle').parent().attr('href','#screen3');
					$('a.back-toggle').parent().attr('href','#screen1');					
					$('#screen2').fadeIn();
				});
			} else if ( $('#screen2').is(':visible') ) {
			$('#screen2').fadeOut(function(){													
					$('a.back-toggle').parent().attr('href','#screen2');
					$('#screen3').fadeIn();
				});				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});
/* ===================END========================== */	
	
});

</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #FFFFFF; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px;  }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #F355CD; border-right: 1px dashed #F355CD; padding: 0 2px; }
ul.lang-menu a, ul.lang-menu ul li a { border: 2px dashed orange; }
.bg { background: url("images/4/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
h1, h2, h3, p {font-family: 'PlaytimeRegular';}
ul.lang-menu a { border: 2px dashed #F355CD !important; }

#screen1 { text-align: center;  max-width: 100%; margin: 0 auto; margin-top:60px;}
#screen2{
display: none; text-align: center;  max-width: 95%;  margin-top: 0%;
padding:0px 10px 0px 10px;
}
#screen3 { display: none; text-align: center; max-width: 100%; margin: 0 auto; }
#screen3 { padding-top: 0%; font-size: 28px; }


.key{color: rgb(42, 111, 165);}
.clear { clear:both;}
/* .buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; } */
img.next-toggle {  display:none; }
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.bold { font-weight: bold; }
.black { color:black !important; }

@-webkit-keyframes infinite-spinning {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes infinite-spinning {
  from {
	-moz-transform:  rotate(0deg);
  }
  to {
	-moz-transform:  rotate(360deg);
  }
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
	 z-index: 5 !important;
}
h3{ font-size:20px; }
.allignment{margin-top:21px; padding-left:22px; font-size:35px; color:#7E4800;}
#question-container{width:100%;padding:10px 0px 0px 15px !important;margin-top:70px;}

#question-container h2{
font-size:24px;
text-align:left;
color:black !important;
font-weight: normal;
margin-bottom: 20px;

}

.p-left{padding-left:8px;}
.choice-container{
width:100%;
border:1px solid red;
padding-top:20px;
}
.f-size:{font-size:20px;}
.content-inner h3 { font-size:24px !important; text-align:left;}

.event input[type="radio"]:checked ~ .content-perspective .content-inner h3 {
	color: #000000;
}
.content-inner p { font-size: 22px; color:black !important;}
#screen1 h2 {font-size: 24px; color: black;}
.timeline {margin-top: 70px !important;}

html[dir="rtl"] h1 { padding-right: 20px; }
html[dir="rtl"] h2 { text-align: right !important; padding-right: 20px; }
html[dir="rtl"] .content-inner h3, html[dir="rtl"] .content-inner p { text-align: right !important; }

<?php if($language == "es_ES") { ?>
	h1 { font-size: 31px !important; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		ul.lang-menu a { border: 0 !important; }
	}

#buttons .next { display: none; }	
</style>
</head>
<body>
	<div class="wrap" >		
		<div class="bg">
				<h1 class="allignment"><?php echo _("Reviewing big ideas... about the life cycle of plants");?></h1>			
				<div id="screen1" class="screens">
					<div id="question-container">
						<h2 class="p-left"><?php echo _("Click on the checkboxes to view more information on each item.");?></h2>
					</div>
					<ul>
						<li class="event">
							<input type="radio" name="tl-group1" checked/>
							<label></label>
							<img class="thumb" src="images/4/seed.jpg">								
							<div class="content-perspective">
						
								<div class="content">
									<div class="content-inner f-size">
										<h3><?php echo _("All plants go through a life cycle");?></h3>
										<p class='black'><?php echo _("Many plants start out as a small <span class='key'>seed</span>.");?> </p>
									</div>
								</div>
							</div>
						</li>
						<li class="event">
							<input type="radio" name="tl-group1"/>
							<label></label>
							<img class="thumb" src="images/4/1b.jpg">
							<div class="content-perspective">
								<div class="content">
									<div class="content-inner f-size">
										<h3><?php echo _("When the seed is planted in the ground");?></h3>
										<p class='black'><?php echo _("it <span class='key'>sprouts</span> into a young <span class='key'>seedling</span> through the process of <span class='key'>germination</span>.");?> </p></p>
									</div>
								</div>
							</div>
						</li>					
					</ul>
				</div>
				<div id="screen2" class="screens">
					<ul class="timeline">
						<li class="event">
							<input type="radio" name="tl-group2" checked/>
							<label></label>
							<img class="thumb" src="images/4/2a.jpg">
							<div class="content-perspective">
								<div class="content">
									<div class="content-inner f-size">
										<h3><?php echo _("Seedlings");?></h3>
										<p><?php echo _("have a small <span class='key'>root</span> that is used to suck up water from the ground.");?> </p>
									</div>
								</div>
							</div>
						</li>
						<li class="event">
							<input type="radio" name="tl-group2"/>
							<label></label>
							<img class="thumb" src="images/4/stem.jpg">
							<div class="content-perspective">
								<div class="content">
									<div class="content-inner f-size">
										<h3><?php echo _("<span class='key'>Stem</span>");?></h3>
										<p><?php echo _("is the body of the plant.");?></p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
							
				<div id="screen3" class="screens">
					<ul class="timeline">
						<li class="event">
							<input type="radio" name="tl-group3" checked/>
							<label></label>
							<img class="thumb" src="images/4/3a.jpg">
							<div class="content-perspective">
								<div class="content">
									<div class="content-inner f-size">
										<h3><?php echo _("Seedlings also have small <span class='key'>leaves</span>");?></h3>
										<p class='black'><?php echo _("that are used to get energy from the sun. The seedling continues to grow until it becomes a mature plant.");?> </p>
									</div>
								</div>
							</div>
						</li>
						<li class="event">
							<input type="radio" name="tl-group3"/>
							<label></label>
							<img class="thumb" src="images/4/flower.jpg">
							<div class="content-perspective">
								<div class="content">
									<div class="content-inner f-size">
										<h3><?php echo _("Some fully grown plants make flowers.");?></h3>
										<p class='black'><?php echo _("Flowers are used by plants to produce more seeds to continue the life cycle.");?> </p>
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
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Planting seeds...");?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
