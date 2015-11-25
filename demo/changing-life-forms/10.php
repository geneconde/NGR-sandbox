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
/* h1 { color: #000; } */
.bg { z-index: 1 !important; }
.wrap { border-color: #e3a700; }
.bg { background-image: url(images/10/bg.jpg); }

#screen2, #screen3, #screen4 { display: none; }
#screen2 p:first-child, #screen3 p:first-child, #screen4 p:first-child { padding-top: 15px; }
img.next-toggle { display: none; }

#screen1 p:nth-child(3) { float:left;width: 450px; }
#screen1 .rslides { width:385px;float:right;margin-top:50px; }
#screen2 .rslides { width:385px;display: inline-block;margin:20px 0; }
.sc2-slides { text-align: center; }
.sc2-slides ul:first-child { margin-right:20px !important; }
.rslides img { height:265px; }
#buttons .next { display: none; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p:nth-child(3) {
		float: none;
		width: 100%;
	}	
	#screen1 .rslides {
		width: 385px;
		float:none;
		margin: 0 auto;
	}
}
    <?php if ($language == 'es_ES') : ?>
    <?php endif; ?>        
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, #answer  {
		    padding-top: 50px;
		}
		p {
		    font-size: 22px;
		    text-align: left;
		    padding: 5px 0px;
		    margin: 0;
		    line-height: 24px;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4, #answer {
		    padding-top: 60px !important;
		}
   	}
	#screen1 .rslides {
	   margin-top: 0px;
	}
	@media only screen and (max-width: 960px){
		#screen1 p:nth-child(3) {
		    float: left;
		    width: 47%;
		}
		p { font-size: 21px; }
		#screen1 p:nth-child(3) {
		    float: left;
		    width: 47%;
		    font-size: 20px;
		    line-height: 23px;
		}
		#screen2 .rslides { width: 320px; }
		.rslides img {  height: 240px; }
	}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about changing life forms"); ?></h1>
				<p><?php echo _("Change happens. Things change all the time. As time passes, changes accumulate. When living things change, it's called evolution. Over the course of more than 4 billion years of earth history, living things have changed enough to account for all of the diversity of the life we see on our planet now."); ?></p>
				<p><?php echo _("A well-known example of natural selection involves insects called peppered moths. As forests in central England became polluted with soot from factories, a type of common moth changed colors from gray to black. Pollution had changed the environment: the light trees covered by lichens turned dark and bare. This had an impact on the moths because the light moths' camouflage no longer worked in the dark forest. Meanwhile, the DNA of a single moth changed and the moth's color was dark. This moth reproduced and created more dark moths with better camouflage and a better chance of survival in the dark forest."); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/10/10a1.jpg">
					</li>
					<li>
						<img src="images/10/10a2.jpg">
					</li>
				</ul>
				
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Natural selection caused the population of moths to have a darker color due to the changes in pollution. All living things have small differences between the individuals in the species. Not all finches look alike, nor do all St. Bernard dogs look alike. If one of those differences allows the individuals to live longer, they will have more offspring. As that trait is passed on, the entire species changes."); ?></p>
				<div class="sc2-slides">
					<ul class="rslides slider">
						<li>
							<img src="images/10/10b1.jpg">
						</li>
						<li>
							<img src="images/10/10b2.jpg">
						</li>
						<li>
							<img src="images/10/10b3.jpg">
						</li>
					</ul>
					<ul class="rslides slider">
						<li>
							<img src="images/10/10b4.jpg">
						</li>
						<li>
							<img src="images/10/10b5.jpg">
						</li>
						<li>
							<img src="images/10/10b6.jpg">
						</li>
					</ul>
				</div>
				<p><?php echo _("In the last fifty years, much effort has been put in to decrease the amount of pollution. With less pollution, the forests are becoming cleaner. Yes, the environment is changing again, and the number of dark moths are dropping."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Flying dark moth..."); ?></strong></section></section>
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
	var screenCount = 2;

	if (hash != "") {
		$('.screen').hide();
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen < screenCount) {
				$('a.readmore-toggle').parent().attr('href','#screen' + screen);
			} else {
				$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			}
		});
	}

	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "9.php";
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('a.next-toggle').fadeOut();
				$('#screen1').fadeIn(function (){
					$('a.readmore-toggle').fadeIn();
				});
				window.location.hash = '';
			});
		} 
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('#screen1').fadeOut( function(){
				$('a.readmore-toggle').fadeOut();
				$('#screen2').fadeIn(function(){
					$('a.next-toggle').fadeIn();
				});
				
				window.location.hash = '#screen2';
			});
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut( function(){

			});
		} 
	});
	</script>
	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
