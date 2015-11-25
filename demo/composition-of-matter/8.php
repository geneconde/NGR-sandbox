<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #fbac33; clear: both; }
h2 { color : #ABE1E9; }
.wrap { border-left: 1px dashed #878787; border-right: 1px dashed #878787; }
.bg { background: url('images/8/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

#screen1 { overflow: hidden; }
#screen1 img { -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; border: 6px solid #eee; }
#screen1 p { float: left; width: 500px; }

#slide { background: url(images/8/placeholder.png) no-repeat; width: 711px; height: 526px; margin: 25px auto 0; }
#slide .arrows { position: relative; }
#slide .arrows a { position: absolute; width: 121px; text-indent: -9999px; height: 61px; margin-top: 120px; }
#slide .arrows a.left { background: url(images/8/left.png) no-repeat; left: -60px; }
#slide .arrows a.right { background: url(images/8/right.png) no-repeat; right: -60px; }
#slide .data { text-align: center; }
#slide .data img { text-align: center; margin-top: 40px; margin-bottom: 10px; }
#slide .data p { font-size: 24px; padding: 6px 15px 6px 15px; width: 681px !important; }
#slide #s1 p { font-size: 18px !important; }
#slide #s2 p { font-size: 20px !important; }
#slide #s5 p { font-size: 22px !important; }
#screen1 .rslides { width: 414px; margin-left: 148px; position: relative; }
#screen1 .rslides img { width: 402px; height: 240px; display: block; }

#screen2 { display: none; text-align: center; }
#screen2 p { text-align: left; padding-top: 20px; }
#screen2 img { text-align: center; margin-top: 40px; width: 400px; }

#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	h2 { font-size: 22px; }
	#slide #s1 p { font-size: 17px !important; padding: 0 15px; }
	#slide .data p { font-size: 22px; }
	#slide #s5 p { font-size: 20px !important; }
<?php } ?> 

html[dir="rtl"] #s3 .rslides1, html[dir="rtl"] #s4 .rslides { margin: 0 auto; }

<?php if($language == "zh_CN") { ?>
	#slide #s3 p { font-size: 20px !important;}
	#slide #s4 p { font-size: 22px !important;}
<?php } ?> 
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#slide .data img { margin-bottom: 0; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _('More big ideas... about the composition of matter'); ?></h1>
				<h2><?php echo _('Browse through the slides below by clicking the left and right arrows.'); ?></h2>

				<div id="slide">
					<div class="arrows">
						<a href="#" class="left" id="left">&laquo;</a>
						<a href="#" class="right" id="right">&raquo;</a>
					</div>

					<div id="s1" class="data">
						<img src="images/8/gravel.jpg">
						<p><?php echo _('Another category of matter is called a <span class="key">mixture</span>. A mixture is two or more substances that appear together, but are not chemically bonded together. Some examples of mixtures are gravel (shown above), trail mix, salt water, and pond water. The individual substances of these mixtures can be separated from each other by physical means such as a filter or sieve.'); ?></p>
						<p><?php echo _('Mixtures are further classified according to the nature of their composition. Mixtures with substances that you can tell apart easily without being completely blended together, are called <span class="key">heterogeneous mixtures</span>. Gravel, trail mix, and pond water are examples of heterogeneous mixtures.'); ?></p>
					</div>

					<div id="s2" class="data">
						<img src="images/8/melting-brass.jpg">
						<p><?php echo _("<span class=\"key\">Homogeneous mixtures</span>, on the other hand, are mixtures with substances that are blended together well. By simply looking at them, you can't tell them apart, they are not visibly distinguishable from each other. Examples of homogeneous mixtures are brass (a mixture of copper and zinc), blood plasma (a mixture of water and various proteins contained in the blood), and air (a mixture of oxygen, nitrogen, and other gases)."); ?></p>
						<p><?php echo _('Brass is a homogeneous mixture. The elements copper and zinc substances are being casted as a liquid into a mold, where it will cool and turn to a solid state.'); ?></p>
					</div>

					<div id="s3" class="data">
						<!--<img src="images/8/solution.jpg">-->
						<ul class="rslides">
							<li><img src="images/8/pour.jpg"></li>
							<li><img src="images/8/stir.jpg"></li>
							<li><img src="images/8/coffee.jpg"></li>
						</ul>
						<p><?php echo _('A <span class="key">solution</span> is a homogeneous mixture with substances that have very small particles that are blended together extremely well. Solutions remain uniformly mixed and their components cannot be distinguished from one another even under a microscope. Examples of solutions are lemonade, tea, vinegar and salt water. Substances that are in solution cannot be separated by filters or sieves.'); ?></p>
					</div>

					<div id="s4" class="data">
						<!--<img src="images/8/fog.jpg">-->
						<ul class="rslides">
							<li><img src="images/8/fog.jpg"></li>
							<li><img src="images/8/smoke.jpg"></li>
						</ul>
						<p><?php echo _('Now that we have looked at homogenous mixtures, heterogeneous mixtures, and solutions... we are going to review <span class="key">colloids</span> and <span class="key">suspensions</span>. A colloid is a type of mixture in which the particles making up the colloid are larger than those of a solution, but small enough to not settle or separate. Fog and smoke are examples of colloids.'); ?></p>
					</div>

					<div id="s5" class="data">
						<img src="images/8/seashore.jpg">
						<p><?php echo _('A colloid is different from a <span class="key">suspension</span>. A suspension is a heterogeneous mixture containing particles that are large enough to settle out and separate from each other. For example, sand in water is a suspension. Though sand may be placed in water and stirred, eventually the sand will settle on the bottom of the water. Oil and water is another example of a suspension. When you mix oil and water in a jar and then shake it, a cloudy suspension is formed. If you let the mixture rest, the oil and water will separate.'); ?></p>
					</div>
				</div>
			</div>

			<div id="screen2" class="screens">
				<p><?php echo _('The parrots in the picture you see show animals living in a new ecosystem without adapting. Parrots were brought to the Hawaiian Islands as pets and were either released or escaped. Hawaii turns out to be excellent habitat for parrots and they have reproduced in the wild. Unfortunately, many native Hawaiian birds have difficulty competing with parrots for food and are nearing extinction. Plants or animals living in wild spaces outside their native ranges, such as these parrots now found in Hawaii, are known as <span class="key">invasive species</span>. Invasive species create problems for native species either by preying upon the natives for food, or by out-competing them for food and other resources.'); ?></p>
				<img src="images/8/parrots.jpg">
			</div>
			<div id="screen3" class="screens">
			
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Adding solution to mixtures...'); ?></strong></section></section>
	<script src="scripts/jquery.bookblock.js"></script>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here

	var left = $('#left'),
	right = $('#right'),
	slides = $('.data'),
	currentSlide = 1;

	slides.hide();

	$('#s' + currentSlide).show();

	right.on('click', function() {
			$('#s' + currentSlide).fadeOut();

			if (currentSlide != 5) currentSlide += 1;
			else currentSlide = 1; 

			$('#s' + currentSlide).delay(500).fadeIn();
		});

	left.on('click', function() {
		$('#s' + currentSlide).fadeOut();

		if (currentSlide != 1) currentSlide -= 1;
		else currentSlide = 5;

		$('#s' + currentSlide).delay(500).fadeIn();
	});

	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				$('h1').fadeOut();
				if(screen < screenCount) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if($('#screen2').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
				$('#screen2').fadeOut(function (){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			}
		});

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('h1').fadeOut();
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		});
	});

    $(".rslides").responsiveSlides();
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
