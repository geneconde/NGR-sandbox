<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/snap.svg-min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #BEA659; }
.wrap { border-color: #f1ec9e; }
.bg { background-image: url(images/8/bg.jpg); }

.grid { margin: 20px auto; width: 100%; }
.grid a { float: left; }
.grid img { border-radius: 0; }
.grid figure { position: relative; cursor: default; overflow: hidden; margin: 0 10px 0 0; background: #333; width: 278px; height: 237px; }
.grid a:last-child figure { margin-right: 0; }
.grid figure img { position: relative; display: block; width: 100%; opacity: 0.7; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
.grid figcaption { position: absolute; top: 0; z-index: 11; padding: 0; width: 100%; height: 100%; text-align: center; }
.grid figcaption h2 { color: #7E7A28; margin: -40px 0 5px 0; font-size: 24px; text-align: center; -webkit-transition: -webkit-transform 0.3s; transition: transform 0.3s; }
.grid figcaption p { padding: 0 20px; color: #000; text-align: center; font-size: 22px; -webkit-transition: opacity 0.3s, -webkit-transform 0.3s; transition: opacity 0.3s, transform 0.3s; } 
.grid figcaption h2, .grid figcaption p { -webkit-transform: translateY(50px); transform: translateY(50px); }
.grid figcaption, .grid figcaption h2, .grid figcaption p, .grid figure button { -webkit-backface-visibility: hidden; backface-visibility: hidden; }
.grid svg { position: absolute; top: -1px; /* fixes rendering issue in FF */ z-index: 10; width: 100%; height: 100%; }
.grid svg path { fill: #f1ec9e; }
.grid a:hover figure img { opacity: 1; }
.grid a:hover figcaption h2, .grid a:hover figcaption p { -webkit-transform: translateY(0); transform: translateY(0); }
.grid a:hover figcaption h2 { margin-top: 0; }
.grid a:hover figcaption p { opacity: 0; }

.slider { width: 360px; }

.top .slider { float: right; margin: 20px 0 0 20px; }
.top p { float: left; width: 475px; padding-top: 20px; font-size: 24px; }

.bottom { margin-top: 10px; }
.bottom .slider { float: left; margin: 20px 20px 0 0; }
.bottom p { float: right; width: 475px; padding-top: 20px; font-size: 22px; }

#screen2 { text-align: center; }
#screen2 p:first-child { padding-top: 15px; }
#screen2 .placeholder { margin-top: 20px; display: inline-block; }
#screen2 .placeholder img { border-radius: 0; height: 240px; width: 320px; }
#screen2 .placeholder ul { float: left; margin-right: 40px; width: 320px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	.grid figure {
		position: relative;
		cursor: default;
		overflow: hidden;
		margin: 0 10px 0 0;
		background: #333;
		width: 234px;
		height: 237px;
	}
	.top p {
		float: left;
		width: 338px;
		padding-top: 20px;
		font-size: 24px;
	}
	.bottom p {
		float: right;
		width: 340px;
		padding-top: 20px;
		font-size: 22px;
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
				<h1><?php echo _("More big ideas... about natural resources"); ?></h1>
				<p><?php echo _("Natural resources can be classified into two groups: renewable and non-renewable. <span class='key'>Renewable resources</span> are those automatically replenished by nature. Examples are:"); ?></p>

				<div id="grid" class="grid clear">
					<a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
						<figure>
							<img src="images/8/a.jpg" />
							
							<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>

							<figcaption>
								<h2><?php echo _("Water"); ?></h2>
								<p><?php echo _("It usually rains to add more water back to the environment."); ?></p>
							</figcaption>
						</figure>
					</a>

					<a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
						<figure>
							<img src="images/8/b.jpg" />
							
							<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>

							<figcaption>
								<h2><?php echo _("Trees and other plants"); ?></h2>
								<p><?php echo _("They grow back and reproduce."); ?></p>
							</figcaption>
						</figure>
					</a>

					<a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
						<figure>
							<img src="images/8/c.jpg" />
							
							<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>

							<figcaption>
								<h2><?php echo _("Fish and other animals"); ?></h2>
								<p><?php echo _("They also reproduce"); ?></p>
							</figcaption>
						</figure>
					</a>
				</div>

				<p><?php echo _("Humans play a very important role in replenishing (filling up again) renewable resources. Without humans affecting natural cycles, natural resources would replenish themselves. But when humans use and deplete these natural resources, they also need to be responsible in making sure there will be more of these resources for the future. Humans can take positive action to preserve renewable natural resources like planting more trees before cutting old ones down and making sure there are enough animals for reproduction."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<div class="top clear">
					<p><?php echo _("The other classification of resources is <span class='key'>non-renewable resources</span>. These are resources not automatically replenished by nature. Examples are coal, minerals, metals, and petroleum. Once humans mine all of the coal or pump out all the oil from the ground, there will not be anything left because it takes millions of years for nature to replenish these types of natural resources."); ?></p>

					<ul class="rslides slider">
						<li><img src="images/8/s2a.jpg"></li>
						<li><img src="images/8/s2b.jpg"></li>
					</ul>
				</div>

				<div class="bottom clear">
					<p><?php echo _("One kind of non-renewable resources is called fossil fuels. They are the result of fossilized plants that grew on earth millions of years ago, and have turned into coal or petroleum inside the earth over a long period of time. Humans need to <span class='key'>conserve</span> these resources and use them wisely so they do not run out. Through research and experiment, humans need to find alternative energy sources so they do not always have to rely on non-renewable resources for energy."); ?></p>

					<ul class="rslides slider">
						<li><img src="images/8/s2c.jpg"></li>
						<li><img src="images/8/s2d.jpg"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Collecting fossil fuels..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	function init() {
		var speed = 330,
			easing = mina.backout;

		[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
			var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
				pathConfig = {
					from : path.attr( 'd' ),
					to : el.getAttribute( 'data-path-hover' )
				};

			el.addEventListener( 'mouseenter', function() {
				path.animate( { 'path' : pathConfig.to }, speed, easing );
			} );

			el.addEventListener( 'mouseleave', function() {
				path.animate( { 'path' : pathConfig.from }, speed, easing );
			} );
		} );
	}

	init();

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
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
