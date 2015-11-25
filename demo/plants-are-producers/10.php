<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
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
<script>
var sliderun = 0;

$(document).ready(function() { sliderun = setInterval( "slideSwitch()", 400 ); });

function slideSwitch() {
	var $active = $('#foodweb img.active');
	var $next = $active.next();    
	
	var $active = $('#foodweb img.active');

	if ( $active.length == 0 ) $active = $('#foodweb img:last');
	
	if ($active.next().length) {
		$next = $active.next();
		$active.addClass('last-active');
		$next.addClass('active');
		$active.removeClass('active');
	} else {
		clearInterval(sliderun);
		$next = $('#foodweb img:last');
		$next.addClass('active');
	}
}
</script>
<style>
h1 { color: #618B49; }
.wrap { border-color: #cfdd80; }
.bg { background-image: url(images/10/bg.jpg); }

.slider { width: 340px; height: 245px; border-radius: 5px; }
.slider img { width: 344px; height: 248px; -moz-border-radius: 0; }

@media screen and (-webkit-min-device-pixel-ratio:0) { .slider img { width: 340px; height: 245px; } }

#screen1 .slider { float: right; margin-top: 20px; }
#screen1 .clear { }
#screen1 .clear p { float: left; width: 490px; }

#screen2 p { float: left; width: 420px; padding-top: 15px; }

#foodweb { float: right; width: 420px; }
#foodweb img { z-index:8; display: none; margin: 0 auto; max-width:100%;eight: auto;}
#foodweb img.active { z-index:10; display: block; }
#foodweb img.last-active { z-index:9; }
#foodweb p { text-align: center; margin-bottom: 20px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .clear p {
		float: left;
		width: 50% !important;
	}
	#screen2 p {
		float: left;
		width: 100%;
		padding-top: 15px;
	}
	#foodweb {
	 float: none; 
	width: 420px;
	margin: 0 auto;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about plants are producers"); ?></h1>
				<p><?php echo _("All <span class='key'>food webs</span> are built upon producers, the green plants that convert solar energy into the fuel for all types of life on Earth. Any system may have one or more producers providing food and oxygen for any possible number of <span class='key'>consumers</span>. The consumers can be any combination of <span class='key'>first-order</span> and higher-order and, of course, the decomposers complete the process."); ?></p>

				<div class="clear">
					<p><?php echo _("Plants absorb carbon dioxide from the air and combine it with water to store the sun's energy in the chemical bonds of sugar.  The leftover oxygen produced is released.  That's photosynthesis, and it's the basis for nearly all life on earth. The food we eat is built on carbon that was once in the air.  The clothing we wear is built on carbon that was once in the air.  The wood in our houses is built on carbon that was once in the air. The fuel in our cars is built on carbon that was once in the air."); ?></p>

					<ul class="rslides slider">
						<li><img src="images/10/s1a.jpg"></li>
						<li><img src="images/10/s1b.jpg"></li>
						<li><img src="images/10/s1c.jpg"></li>
						<li><img src="images/10/s1d.jpg"></li>
					</ul>
				</div>
			</div>

			<div id="screen2" class="screen clear">
				<p><?php echo _("Photosynthesis drives this entire process. However simple or complex a local food web is, the energy that supports it is trapped by plants and stored in carbohydrates. At every level of the process, a small amount of the stored energy is transmitted into the next higher level.  As complicated as this may appear, it's useful to always remember that food webs are a type of puzzle. They can be organized in more than one way,  analyzed from different perspectives, and seem to need updates every time we take a close look at an ecosystem and find something new. But it's still a puzzle; beautiful, frustrating, and fascinating all at the same time."); ?></p>

				<div id="foodweb">
					<p><?php echo _("Example of a Food Web"); ?></p>

					<img src="images/10/1.png" class="active">
					<img src="images/10/2.png">
					<img src="images/10/3.png">
					<img src="images/10/4.png">
					<img src="images/10/5.png">
					<img src="images/10/6.png">
					<img src="images/10/7.png">
					<img src="images/10/8.png">
					<img src="images/10/9.png">
					<img src="images/10/10.png">
					<img src="images/10/11.png">
					<img src="images/10/12.png">
					<img src="images/10/13.png">
					<img src="images/10/14.png">
					<img src="images/10/15.png">
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Analyzing food chain..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "9.php";
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
