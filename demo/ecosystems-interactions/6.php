<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/bookblock.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
@font-face {
	font-family: 'arrows';
	src:url('fonts/arrows/arrows.eot');
	src:url('fonts/arrows/arrows.eot?#iefix') format('embedded-opentype'),
		url('fonts/arrows/arrows.woff') format('woff'),
		url('fonts/arrows/arrows.ttf') format('truetype'),
		url('fonts/arrows/arrows.svg#arrows') format('svg');
	font-weight: normal;
	font-style: normal;
}

h1 { color: #d25b00; }
.wrap { border-left: 1px dashed #78cde1; border-right: 1px dashed #78cde1; }
.bg { background: url('images/6/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

#screen1 div { padding-top: 20px; }
#screen1 div p { float: left; width: 400px; }
#screen1 img { float: right; }
#screen2 { display: none; padding-top: 20px; }
#screen2 img { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
#screen2 div p { float: left; width: 420px; padding-top: 30px; }

.bb-custom-wrapper { width: 420px; position: relative; margin: 0 auto 40px; text-align: center; z-index: 4; }
.bb-custom-wrapper .bb-bookblock { box-shadow: 0 12px 20px -10px rgba(81,64,49,0.6); }
.bb-custom-wrapper h3 { font-size: 1.4em; font-weight: 300; margin: 0.4em 0 1em; }
.bb-custom-wrapper nav { width: 100%; height: 30px; margin: 1em auto 0; position: relative; z-index: 0; text-align: center; }
.bb-custom-wrapper nav a { display: inline-block; width: 30px; height: 30px; text-align: center; border-radius: 2px; background: #72b890; color: #fff; font-size: 0; margin: 2px; }
.bb-custom-wrapper nav a:hover { opacity: 0.6; } 
.bb-custom-icon:before { font-family: 'arrows'; speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; line-height: 1; font-size: 20px; line-height: 30px; display: block; -webkit-font-smoothing: antialiased; }
.bb-custom-icon-first:before, .bb-custom-icon-last:before { content: "\e002"; }
.bb-custom-icon-arrow-left:before, .bb-custom-icon-arrow-right:before { content: "\e003"; }
.bb-custom-icon-arrow-left:before, .bb-custom-icon-first:before { -webkit-transform: rotate(180deg); -moz-transform: rotate(180deg); -ms-transform: rotate(180deg); transform: rotate(180deg); }
.bb-custom-wrapper { float: right; margin-bottom: 20px; }
.bb-custom-wrapper nav a { background: #22b2d8; } 

#buttons .next { display: none; }
html[dir="rtl"]  .bb-custom-icon-arrow-left { float: left; margin-left: 175px; }
html[dir="rtl"]  .bb-custom-icon-arrow-right { float: right; margin-right: 175px; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 32px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 div p, #screen2 div p { width: 300px; }
	.bb-custom-wrapper { margin: 35px 0 0; }
	html[dir="es"] #screen1 div p, html[dir="es"] #screen1 img { width: 350px }
}
@media only screen and (max-width: 1250px){
	div#screen1 {
	    padding-top: 33px;
	}
	.bb-custom-wrapper {
	    padding-top: 33px;
	}
}
@media only screen and (max-width: 960px){
	#screen1 img {
	    width: 45%;
	}
	#screen2 div p {
	    width: 40%;
	}
}

@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about ecosystems interactions"); ?></h1>
				<p><?php echo _("People can change or affect ecosystems in many different ways. In fact, almost everything humans have done throughout history has somehow changed different ecosystems. People cut down trees to make space in a forest.  They plant trees to create shade in a grassland.  They plant crops and make space for the animals we need for food."); ?></p>
				<div>
					<p><?php echo _("One example of how people changed an ecosystem is the case of Yellowstone National Park, a preserved area. Around it, people built roads, fought forest fires, and built campgrounds and lodges.  As more people began to visit this park, a decision was made to eliminate large predators, like mountain lions and wolves, by hunting them to extinction within the park."); ?></p>
					<img src="images/6/6.jpg">
				</div>
			</div>
			<div id="screen2" class="screens">
				<div class="clearfix">
					<p><?php echo _("Over many years, the park changed; going from a forest filled with large trees and open spaces to one filled with shrubs and dead wood. The elk herd grew so rapidly that animals began to die due to a lack of food. Park managers eventually decided to make an attempt to return the park to its natural state."); ?></p>
					<div class="bb-custom-wrapper">
						<div id="bb-bookblock" class="bb-bookblock">
							<div class="bb-item">
								<a href="#"><img src="images/6/1.jpg"></a>
							</div>
							<div class="bb-item">
								<a href="#"><img src="images/6/2.jpg"></a>
							</div>
							<div class="bb-item">
								<a href="#"><img src="images/6/3.jpg"></a>
							</div>
							<div class="bb-item">
								<a href="#"><img src="images/6/4.jpg"></a>
							</div>
						</div>
						<nav>
							<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left"><?php echo _("Previous"); ?></a>
							<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right"><?php echo _("Next"); ?></a>
						</nav>
					</div>
				</div>
				<p><?php echo _("People can also make indirect effects on ecosystems by burning fossil fuels like coal and oil, which can cause air and water pollution. This affects species that depend on these natural resources (air, soil, and water) and that can lead to a change in an ecosystem as well."); ?></p>
			</div>
			<div id="screen3" class="screens">
			
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Burning fossil fuels..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/jquery.bookblock.js"></script>
	<script>
	var Page = (function() {
		var config = {
				$bookBlock : $( '#bb-bookblock' ),
				$navNext : $( '#bb-nav-next' ),
				$navPrev : $( '#bb-nav-prev' ),
				$navFirst : $( '#bb-nav-first' ),
				$navLast : $( '#bb-nav-last' )
			},
			init = function() {
				config.$bookBlock.bookblock( {
					speed : 800,
					shadowSides : 0.8,
					shadowFlip : 0.7
				} );
				initEvents();
			},
			initEvents = function() {
				
				var $slides = config.$bookBlock.children();

				// add navigation events
				config.$navNext.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'next' );
					return false;
				} );

				config.$navPrev.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'prev' );
					return false;
				} );

				config.$navFirst.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'first' );
					return false;
				} );

				config.$navLast.on( 'click touchstart', function() {
					config.$bookBlock.bookblock( 'last' );
					return false;
				} );
				
				// add swipe events
				$slides.on( {
					'swipeleft' : function( event ) {
						config.$bookBlock.bookblock( 'next' );
						return false;
					},
					'swiperight' : function( event ) {
						config.$bookBlock.bookblock( 'prev' );
						return false;
					}
				} );

				// add keyboard events
				$( document ).keydown( function(e) {
					var keyCode = e.keyCode || e.which,
						arrow = {
							left : 37,
							up : 38,
							right : 39,
							down : 40
						};

					switch (keyCode) {
						case arrow.left:
							config.$bookBlock.bookblock( 'prev' );
							break;
						case arrow.right:
							config.$bookBlock.bookblock( 'next' );
							break;
					}
				} );
			};

			return { init : init };

		})();
	</script>
	<script>Page.init();</script>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 2; // set number of screens here
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
				document.location.href = "5.php";
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
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
