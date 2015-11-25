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
.wrap { border-color: #72dfff; }
.bg { background-image: url(images/8/bg.jpg); }
#screen1 p:nth-child(2) { width:97%; }
#screen1 p { font-size:21px; }
#screen1 img { height:230px;margin-left:20px;margin-top:10px;padding-right:35px; }
#screen2, #screen3, #screen4 { display: none; }
#screen2 p:first-child, #screen3 p:first-child, #screen4 p:first-child { padding-top: 15px; }
img.next-toggle { display: none; }
.rslides { width:45%;float: left;margin: 20px; }

#screen1 .clear { margin-bottom: 10px; }

#screen1 p:nth-child(4) { float: right;width: 480px; }
#buttons .next { display: none; }
#screen2 ul.grid { list-style-type: none;padding:0;height: 205px; margin-top: 5px;margin-bottom: 5px;}
#screen2 .grid2 { text-align: center;margin-top:0; }
#screen2 ul.grid li { display: inline-block;height:205px; }
#screen2 ul.grid li:nth-child(2) { margin:0 10px; }
#screen2 figure { margin:0; }
#screen2 .grid figcaption p { color:white;font-size:19px;padding-top:5px; line-height:21px; }
.fleft{float:left;}
.grid figure {
margin: 0;
position: relative;
}
.cs-style-4 figure {
-webkit-transform-style: preserve-3d;
-moz-transform-style: preserve-3d;
transform-style: preserve-3d;
}
.cs-style-4 figure > div {
overflow: hidden;
}
.cs-style-4 figure img {
-webkit-transition: -webkit-transform 0.4s;
-moz-transition: -moz-transform 0.4s;
transition: transform 0.4s;
}
.cs-style-4 figcaption {
height: 194px;
width: 50%;
opacity: 0;
-webkit-backface-visibility: hidden;
-moz-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transform-origin: 0 0;
-moz-transform-origin: 0 0;
transform-origin: 0 0;
-webkit-transform: rotateY(-90deg);
-moz-transform: rotateY(-90deg);
transform: rotateY(-90deg);
-webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
-moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
transition: transform 0.4s, opacity 0.1s 0.3s;
}
.grid figcaption {
position: absolute;
top: 0;
left: 0;
padding: 5px;
background: #2c3f52;
color: #ed4e6e;
}
.cs-style-4 figure:hover img, .cs-style-4 figure.cs-hover img {
-webkit-transform: translateX(25%);
-moz-transform: translateX(25%);
-ms-transform: translateX(25%);
transform: translateX(25%);
}
.cs-style-4 figure:hover figcaption, .cs-style-4 figure.cs-hover figcaption {
opacity: 1;
-webkit-transform: rotateY(0deg);
-moz-transform: rotateY(0deg);
transform: rotateY(0deg);
-webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
-moz-transition: -moz-transform 0.4s, opacity 0.1s;
transition: transform 0.4s, opacity 0.1s;
}
span.caption { margin-left: -407px; position: absolute; left: 50%; width: 293px; top: 434px; line-height: 1; color: white; padding: 8px; background: rgba(0, 0, 0, .8); font-size: 16px; text-align: center; }
<?php if($language == "es_ES") { ?>
	#screen2 p { font-size: 22px; }
<?php } ?>
<?php if($language == "zh_CN") { ?>
	#screen1 p:nth-child(4) { width: 490px; float: right; margin-top: -80px; }
	#screen2 p { font-size: 20px; }
<?php } ?>

html[dir="rtl"] #screen1 > p { margin-top: 25px; }

@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 ul.grid li {
		display: inline-block;
		height: 205px;
		width: 30%;
	}	
	#screen2 ul.grid {
		list-style-type: none;
		padding: 0;
		 height: auto; 
	}
}      
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, #answer  {
		    padding-top: 50px;
		}

    }
    <?php if ($language == 'es_ES' || $language == 'en_US' ) : ?>
	     @media only screen and (max-width: 1250px){
			#screen1 p:nth-child(2) {
			    width: 97%;
			    line-height: 23px;
			    font-size: 20px;
			}
			#screen1 p {
			    font-size: 20px;
			    line-height: 23px;
			}
			ul.grid.cs-style-4 img {
			    height: 160px;
			}
			#screen2 .grid figcaption p {
			    color: white;
			    font-size: 14px;
			    padding-top: 5px;
			    line-height: 21px;
			}
			.cs-style-4 figcaption { height: 150px; }
			ul.grid.cs-style-4 { text-align: center; }
			#screen2 ul.grid { height: 165px; }
			p#p1 {
			    margin-top: 59px !important;
			}
		}
    <?php endif; ?>  
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4 {
		    padding-top: 60px !important;
		}
   	}
	span.caption {
	    top: 492px;
	}
	p#p1 {
	    margin-top: 35px;
	}
	<?php if ($language == 'es_ES') : ?>
		span.caption {
		    top: 467px !important;
		}
		p#p1 {
		    margin-top: 55px !important;
		}
		#screen1 p {
		    font-size: 20px !important;
		}
	<?php endif; ?>
	@media only screen and (max-width: 960px){
		#screen1 p:nth-child(2) {
		    width: 97%;
		    line-height: 23px;
		    font-size: 19px;
		}
		span.caption {
		    top: 445px;
		}
		span.caption {
		    margin-left: -383px;
		    position: absolute;
		    left: 426px;
		    width: 238px;
		    top: 434px !important;
		    line-height: 1;
		    color: white;
		    padding: 8px;
		    background: rgba(0, 0, 0, .8);
		    font-size: 16px;
		    text-align: center;
		}
		#screen1 img {
		    height: 189px;
		    margin-left: 20px;
		    margin-top: 1px;
		    padding-right: 35px;
		}
		p#p1 {
		    margin-top: 15px !important;
		}
	}  
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about changing life forms"); ?></h1>
				<p><?php echo _("The environment and resources change all the time. Some changes affect plants and animals and cause them to change over time as well. Let's look at the woodpecker example again. What if something happened to the trees, and there were no more worms for the long beaked birds to eat? The resources in the environment changed, and the characteristic that was once an advantage is no longer useful. Now the woodpecker on the left has the advantage because its beak can crack open nuts to survive. It will reproduce and create more of the species with that beak to survive the new conditions."); ?></p>

				<div class="clear"></div>
				<div class="cap-fix">
					<div class="caption-cont fleft">
						<img src="images/6/6a.jpg">
						<span class="caption"><?php echo _("Animals born with advantageous traits are more likely to live long enough to reach that goal."); ?></span>	
					</div>
					<p><?php echo _("So, not everything in the environment stays the same. The variety that animals and plants have help them to survive changing conditions. The environment changes in different ways: the temperature may change, there may be less resources, there may be pollution caused by humans. Every living thing reacts differently to these changes. Some may survive and reproduce, others may not do so well and die. Some living things may move to new locations, and others might move into this new transformed environment."); ?></p>
				</div>
				<div class="clear"></div>
				<p id='p1'><?php echo _("Sometimes, a species may not have enough variation to allow any of its members to survive environmental changes. A species is said to be <span class='key'>extinct</span> when its last members die. Most of the species that have existed in earth's history are now extinct."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("The game is changing, but the rule of the game is still survival. Based on a few observations and a bit of logic, Darwin proposed the idea of <span class='key'>natural selection</span>."); ?></p>
				<ul class="grid cs-style-4">
				<li>
					<figure>
						<div><img src="images/8/8b1.jpg" alt="img04"></div>
						<figcaption>
							<p><?php echo _("Species produce large numbers of offspring."); ?></p>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/8/8b2.jpg" alt="img06"></div>
						<figcaption>
							<p><?php echo _("Resources available to organisms are limited."); ?></p>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/8/8b3.jpg" alt="img02"></div>
						<figcaption>
							<p><?php echo _("Limited resources create a competition for survival and reproduction."); ?></p>
						</figcaption>
					</figure>
				</li>
			</ul>
			<ul class="grid cs-style-4 grid2">
				<li>
					<figure>
						<div><img src="images/8/8b4.jpg" alt="img03"></div>
						<figcaption>
							<p><?php echo _("All species have inherited variations for nearly every characteristic."); ?></p>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<div><img src="images/8/8b5.jpg" alt="img01"></div>
						<figcaption>
							<p><?php echo _("The members of a population who survive and reproduce send their genetic information into future generations."); ?></p>
						</figcaption>
					</figure>
				</li>
			</ul>
			<p><?php echo _("That's about it. Change happens because some traits get passed along and some don't. When changes add up to the point where some populations can no longer interbreed with others, new species result. When living things are from different species, they cannot breed with one another."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing environment..."); ?></strong></section></section>
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
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/8/bg.jpg)');
				$('a.readmore-toggle').parent().attr('href','#screen' + screen);
			} else {
				$('.bg').css('background-image', 'url(images/8/bg.jpg)');
				$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			}
		});
	}

	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('.bg').css('background-image', 'url(images/8/bg.jpg)');
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
				$('.bg').css('background-image', 'url(images/8/bg.jpg)');
				$('a.readmore-toggle').fadeOut();
				$('#screen2').fadeIn(function(){
					$('a.next-toggle').fadeIn();
				});
				window.location.hash = '#screen2';
			});
		} else {
		} 
	});
	</script>
	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
