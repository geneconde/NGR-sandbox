<?php 
	require_once "../tempsession.php";
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once "locale.php";
	include_once "setlocale.php";
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
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
.wrap { border-color: #7899d3; }
.bg { background-image: url(images/4/bg.jpg); }
#screen1 p:last-child { clear:both; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }
#screen2, #screen3 { display: none; }
img.next-toggle { display:none; }
p.left { float:left;width:310px; }
.sc1-img ul { list-style-type: none;float:left;width:100%;padding:0;text-align: center;margin-top:20px; }
.sc1-img li { display:inline-block; margin-right: 20px; margin-bottom: 20px; width:195px; }
.sc1-img li:nth-child(4) { margin-right: 0; }
//.sc1-img li:nth-child(1), .sc1-img li:nth-child(3) { margin-right:20px; }
.sc1-img { margin-top: 15px; }
.sc1-img img { width:270px; }
.sc1-img li figure { margin:0; }
.cs-style-3 figure {
overflow: hidden;
}
.grid figure {
margin: 0;
position: relative;
}
.cs-style-3 figure:hover img, .cs-style-3 figure.cs-hover img {
-webkit-transform: translateY(-50px);
-moz-transform: translateY(-50px);
-ms-transform: translateY(-50px);
transform: translateY(-50px);
}
.cs-style-3 figure img {
-webkit-transition: -webkit-transform 0.4s;
-moz-transition: -moz-transform 0.4s;
transition: transform 0.4s;
}
.cs-style-3 figcaption {
height: auto;
width: 100%;
top: auto;
bottom: 0;
opacity: 0;
-webkit-transform: translateY(100%);
-moz-transform: translateY(100%);
-ms-transform: translateY(100%);
transform: translateY(100%);
-webkit-backface-visibility: hidden;
-moz-backface-visibility: hidden;
backface-visibility: hidden;
-webkit-transition: -webkit-transform 0.4s, opacity 0.1s 0.3s;
-moz-transition: -moz-transform 0.4s, opacity 0.1s 0.3s;
transition: transform 0.4s, opacity 0.1s 0.3s;
}
.grid figure img {
	max-width: 100%;
display: block;
position: relative;
}
.grid figcaption {
position: absolute;
bottom: 0;
left: 0;
background: #2c3f52;
color: #ed4e6e;
}
figcaption p {
	color: white;
	padding:10px;
	font-size: 22px;
}
.cs-style-3 figure:hover figcaption, .cs-style-3 figure.cs-hover figcaption {
opacity: 1;
-webkit-transform: translateY(0px);
-moz-transform: translateY(0px);
-ms-transform: translateY(0px);
transform: translateY(0px);
-webkit-transition: -webkit-transform 0.4s, opacity 0.1s;
-moz-transition: -moz-transform 0.4s, opacity 0.1s;
transition: transform 0.4s, opacity 0.1s;
}
p.sc2-p {
	width:430px;
	float:left;
}
.rslides {
	width:400px;
	float:left;
	margin-left:25px;
}

#screen2 .rslides { width: 380px; margin: 20px auto; float: none; }
#screen2 .rslides img { margin-bottom: 10px; }
#screen2 .rslides .caption { font-size: 20px; }
#screen2 p:last-of-type { padding-top: 0; }
#screen2 .clear p { padding-top: 5px; padding-bottom: 0; }
#buttons .next { display: none;  }
.rslides p {
	text-align:center;
	color:#00709f;
}
.sc1-img span.instruc { font-size:20px; text-align: left; color:#00709e; }

//#screen2, #screen3 { padding-top: 15px; }
div.sc3-img { width: 100%; margin: 0 auto; display: block; text-align: center; padding-top: 20px; }
.sc3-img img { margin-right: 20px; }
.sc3-img img:last-child { margin-right: 0; }
<?php if($language == "es_ES") { ?>
	figcaption p { font-size: 18px; }
	#screen2 p { font-size: 22px; }
	h1 { font-size: 34px; }
<?php } ?>

html[dir="rtl"] .rslides p { text-align: center; }       
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		div#screen2, div#screen3, #answer  {
		    padding-top: 50px;
		}
    }
    <?php if ($language == 'es_ES' || $language == 'en_US' ) : ?>
    	p { font-size: 24px; }
    	@media screen and (max-width: 1250px){
    		p { font-size: 22px; }
			#screen2 p:first-child, #screen3 p:first-child {
			    padding-top: 0px;
			    font-size: 20px;
			}

			#screen2 p {
			    font-size: 22px;
			    line-height: 25px;
			}
			#screen2 .rslides {
			    width: 282px;
			    margin: 20px auto;
			    float: none;
			}
    	}
    <?php endif; ?> 
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		h1, #screen2, #screen3, #screen4 {
		    padding-top: 60px !important;
		}
   	}
   	@media only screen and (max-width: 960px){
   		.sc1-img li {
		    display: inline-block;
		    margin-right: 0px;
		    margin-bottom: 20px;
		    width: 198px;
		}
   	}
	i.fa.fa-arrow-left, i.fa.fa-arrow-right, i.fa.fa-comment, i.fa.fa-question {
	    position: relative;
	    top: 6px;
	}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about changing life forms"); ?></h1>
				<p><?php echo _("There are many different kinds of living things in any area, and they exist in different places on land and in water. Look at the variety of plants and animals in the picture. Each habitat has certain conditions that life forms in it have to get used to and survive. So if it is really cold or hot, plants and animals still have to find a way to get nourished and reproduce. The variety of adaptations is as diverse as all the differences we see in nature. An <span class='key'>adaptation</span> is an inherited characteristic that gives the adapting organisms an improved chance for survival and reproduction."); ?></p>
				<div class="sc1-img">
				<span class="instruc"><?php echo _("Hover your mouse on the images below to see the different kinds of animal adaptations."); ?></span>
					<ul class="grid cs-style-3">
						<li>
							<figure>
								<img src="images/4/sc1a.jpg" alt="img03">
								<figcaption>
									<p><?php echo _("Color patterns can protect animals from predators."); ?></p>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/4/sc1b.jpg" alt="img03">
								<figcaption>
									<p><?php echo _("Downy feathers can help birds survive cold weather"); ?></p>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/4/sc1c.jpg" alt="img03">
								<figcaption>
									<p><?php echo _("Nostrils on the tops of heads allow whales to breathe efficiently."); ?></p>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="images/4/sc1d.jpg" alt="img03">
								<figcaption>
									<p><?php echo _("Single-toed hooves let horses run faster."); ?></p>
								</figcaption>
							</figure>
						</li>
					</ul>
					<!--<p> They adapt. Color patterns can protect animals from predators; downy feathers can help birds survive cold weather. Nostrils on the tops of heads allow whales to breathe efficiently; and single-toed hooves let horses run faster.  The variety of adaptations is as diverse as all the differences we see in nature. An <span class='key'>adaptation</span> is an inherited characteristic that gives the adapting organisms an improved chance for survival and reproduction.</p>-->
				</div>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Adaptation leads to all the different plants and animals across the world. Each of the many unique and diverse places on earth has its own kinds of plants and animals."); ?></p>
				<p><?php echo _("Around 200 years ago, a scientist named Charles Darwin explored one of those places called the Galapagos Islands. He observed and collected the different plants and animals that lived in that habitat. The Galapagos Islands are a series of volcanic islands, rising from the Pacific Ocean more than 600 miles west of South America.  Each island has a diverse set of ecosystems. An <span class='key'>ecosystem</span> is the unique set of living and non-living factors that combine to determine the types of plants and animals that can live in a certain location. Galapagos ecosystems range from desert to grassland to rainforest."); ?></p>

				<ul class="rslides slider">
					<li>
						<img src="images/4/sc2a.jpg">
						<p class="caption"><?php echo _("Small Ground-Finch"); ?></p>
					</li>
					<li>
					<img src="images/4/sc2b.jpg">
					<p class="caption"><?php echo _("Medium Ground-Finch"); ?></p>
					</li>
					<li>
						<img src="images/4/sc2c.jpg">
						<p class="caption"><?php echo _("Large Ground-Finch"); ?></p>
					</li>
				</ul>
			</div>

			<div id="screen3" class="screen">
				<p><?php echo _("He noticed that on each island, a unique species of finch existed. They were all finches and very similar to one another, but their beaks were very different in shape and size. The beaks seemed to be related to the available resources on the island. Where there was fruit, the finches had beaks that were useful for eating fruit. On islands with insects, the finches had narrow beaks that could pick up insects one at a time. So Darwin thought the finches might have changed to become more specialized to suit their environment."); ?></p>
				<p><?php echo _("Living things adapt to different living conditions when they move into new locations.  They must also change when <span class='key'>environmental changes</span> occur in places they already live. Over the years, climate changes, rivers change their courses, fires rage, and predators prowl.  Life has the ability to adapt to whatever changes occur."); ?></p>
				<div class="sc3-img">
					<img src="images/4/sc31.jpg" />
					<img src="images/4/sc32.jpg" />
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Adapting to environment..."); ?></strong></section></section>

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
	var screenCount = 3;

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
			document.location.href = "3.php#answer";
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} else if($('#screen3').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#screen3').fadeOut(function (){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		} else if ($('#screen2').is(':visible')) {
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen2').fadeOut( function(){
				$('#screen3').fadeIn();
				window.location.hash = '#screen3';
			});
		}
	});
	</script>
	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include("setlocale.php"); ?>
</body>
</html>
