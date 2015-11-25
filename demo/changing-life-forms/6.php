<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { z-index: 1 !important; }
/* h1 { color: #000; } */
.wrap { border-color: #afa583; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 p:nth-child(3) { float: left;width: 450px;margin-right: 10px; }

#screen1 > div { width: 374px; float: right; height: 369px; }
#screen1 > div p { text-align: center; font-size: 22px; }
//#screen1 > div p { position: absolute; top: 518px; width: 354px; padding: 10px; font-size: 21px; text-align: center; }

#screen2, #screen3 { display: none; }
#screen2 p:last-of-type { float: right; width: 42%; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }
img.next-toggle { display: none; }
.rslides { width:49%;margin:20px 30px; float: left; }
#buttons .next { display: none; }
html[dir="rtl_es"] #screen2 p { font-size: 22px; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p:nth-child(3) {
		float: none;
		width: 100%;
		margin-right: 10px;
	}
	#screen1 > div {
		width: 374px;
		 float: none !important; 
		height: 369px;
		margin: 0 auto;
	}	
}    
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, #answer  {
		    padding-top: 50px;
		}
		p {
		    font-size: 22px;
		    text-align: left;
		    /* padding: 5px 0px; */
		    margin: 0;
		    line-height: 22px;
		}
    }
    <?php if ($language == 'es_ES') : ?>
    @media only screen and (max-width: 1250px){
    	#screen1 > div p {
		    text-align: center;
		    font-size: 20px;
		}
	}
    <?php endif; ?>  


	@media only screen and (max-width: 960px){
		#screen1 p:nth-child(3) {
		    float: left;
		    width: 48%;
		    margin-right: 10px;
		}
	}


    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4 {
		    padding-top: 60px !important;
		}
   	}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about changing life forms"); ?></h1>
				<p><?php echo _("All living things in an environment are trying to survive. They will try their best to find food and shelter, and reproduce to create more offspring. But not every environment is cut out for every living thing. Think of a cactus on an iceberg- how long do you think it would survive? Think of a penguin in a desert- do you think it would be able to reproduce? So in a particular habitat, some organisms can survive better than others. Some may not survive at all."); ?></p>
				<p><?php echo _("Looking at beaks again, you can see how important beak size and shape is to these woodpeckers when it comes to finding food. The bird on the right has a long, thin beak that can easily access worms inside a tree. Whereas the bird on the left is similar to the other bird in many ways, but it does not have the long beak."); ?></p>

				<div>
					<img src="images/6/6a.jpg">
					<p><?php echo _("Animals born with advantageous traits are more likely to live long enough to reach that goal."); ?></p>
				</div>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Sometimes the differences in characteristics between individuals of the same species provide advantages in finding food and surviving. The species that survives well can reproduce and produce more of its kind that will continue to survive well."); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/6/6b1.jpg">
					</li>
					<li>
						<img src="images/6/6b2.jpg">
					</li>
				</ul>
				<p><?php echo _("Sometimes characteristic differences help certain species stay alive. Consider a type of fish that is usually green. Because of a random DNA change, called <span class='key'>genetic mutation</span>, the color of two fish changes in one generation; one to a bright color, and one to a dark color. When a larger predator swims by, hungry for food, which is more likely to be seen and eaten? The brighter fish is more easily seen, and less likely to survive the encounter.  The darker fish is more likely to live long enough to mate and reproduce. Darwin called this <span class='key'>natural selection</span>."); ?></p>
			</div>

			<!-- <div id="screen3" class="screen">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div> -->
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _('Woodpeckers burrowing for food...'); ?></strong></section></section>
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	</script>
	<script>
	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "5.php";
		} else if ($('#screen2').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
