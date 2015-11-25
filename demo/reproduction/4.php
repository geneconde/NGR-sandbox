<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
.bg { background-image: url('images/4/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #CCE099; border-right: 1px dashed #CCE099; }

img.next-toggle, img.back-toggle-screen { display:none; }
p { padding-top: 3%; }
#screen1 .col1 { width: 43%; float: left; }
#screen1 .col2 { width: 55%; float: right; 
margin-top: 2%;}
#screen1 .col2 img:nth-child(2) { width: 100%; margin: 0 auto; display: block; margin-top: 4%; }

#screen2 { display: none; }
#screen2 .col1 { width: 40%; float: left; }
#screen2 .col2 { width: 60%; float: right; }

#man, #woman { height: 220px; width: 450px; margin:0 auto; display: block; }
#man img, #woman img {
  display:none;
  position:absolute;
}
#man img.active, #woman img.active {
  display:block;
  margin:0 auto;
}
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	p { font-size: 22px; }
<?php } ?> 
@media only screen and (min-device-width : 768px) {
	#screen2 .col1 {
	width: 36%;
	float: left;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .col1 {
	width: 38%;
	float: left;
	}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("Reviewing big ideas... about reproduction"); ?></h1>
				<div class="col1">
					<p><?php echo _("Life begins... somehow. Plants sprout. Eggs hatch. Microbes divide. Mammals are born. All living things go through a life cycle, a pattern of development that includes growth, adult development, <span class=\"key\">reproduction</span>, aging, and death."); ?></p>
					<p><?php echo _("All living things start out small, usually too small to survive in a hostile world. Plants grow and mature. They develop <span class=\"key\">flowers</span> which turn into fruits, and contain the seeds for the next generation."); ?></p>
				</div>
				<div class="col2">
					<div class="placeholder">
						<ul class="rslides">
						  <li><img src="images/4/s1.jpg" /></li>
						  <li><img src="images/4/s2.jpg"></li>
						  <li><img src="images/4/s3.jpg"></li>
						  <li><img src="images/4/s4.jpg"></li>
						</ul>
					</div>
					
					<img src="images/4/plant.jpg" />
				</div>
			</div>
			
			<div class="screens" id="screen2">
				<p><?php echo _("Animals have life cycles as well. Once animals are born, some are taken care of by their parents, and some never even know their parents, and live on their own immediately. They become able to reproduce when they reach their full size. Animals reproduce in different ways. In species having parents of different sexes, the mating process may be as simple as spreading eggs and sperm in a trench at the bottom of a stream to a life-long partnership, lasting many years."); ?></p>
				<div class="col1">
					<p><?php echo _("After an animal's reproductive and parenting years are completed, most begin a process of decline. Illnesses are more frequent and last longer. Wounds take longer to heal. Finding food and resources becomes more difficult. Eventually all animals die, completing their cycle of life."); ?></p>
				</div>
				<div class="col2">
					<div id="man">
						<img src="images/4/1.jpg" class="active"/>
						<img src="images/4/2.jpg" />
						<img src="images/4/3.jpg" />
						<img src="images/4/4.jpg" />
						<img src="images/4/5.jpg" />
						<img src="images/4/6.jpg" />
						<img src="images/4/7.jpg" />
						<img src="images/4/8.jpg" />
					</div>
					<div id="woman">
						<img src="images/4/a.jpg" class="active"/>
						<img src="images/4/b.jpg" />
						<img src="images/4/c.jpg" />
						<img src="images/4/d.jpg" />
						<img src="images/4/e.jpg" />
						<img src="images/4/f.jpg" />
						<img src="images/4/g.jpg" />
						<img src="images/4/h.jpg" />
						<img src="images/4/i.jpg" />
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Taking care of offspring..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on screen2
					$('#screen2').fadeIn();
					
					setInterval('swapImages()', 1000);
					setInterval('swapImages2()', 1000);
					$('a.readmore-toggle').fadeOut( function(){
						$('a.next-toggle').fadeIn();
					});
				} else {
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
				}
			});
		}

		$('a.readmore-toggle').click(function(){
			$('#screen1').fadeOut(function(){
				
				setInterval('swapImages()', 1000);
				setInterval('swapImages2()', 1000);
				
				$('#screen2').fadeIn();
				$('a.readmore-toggle').fadeOut( function(){
					$('a.next-toggle').fadeIn();
				});
				
			});
		});

		$('a.back-toggle').click(function(){
			if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.readmore-toggle').fadeIn();});
				});
			}else{
				$('a.back-toggle').attr('href','3.php');
			}
		});
		//slides
		$(".rslides").responsiveSlides();
	});
	
	function swapImages(){
		var active = $('#man .active');
		var next = ($('#man .active').next().length > 0) ? $('#man .active').next() : $('#man img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	function swapImages2(){
		var active = $('#woman .active');
		var next = ($('#woman .active').next().length > 0) ? $('#woman .active').next() : $('#woman img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
