<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(10, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/cycle.js"></script>
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
.wrap { border-left: 1px dashed #9fe0fa; border-right: 1px dashed #9fe0fa; }
.bg { background: url('images/10/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

#screen1 p { float: left; width: 400px; }
#screen1 p:last-child { clear: both; width: 100%; }
#screen1 img { float: right; -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;  }

.bb-custom-wrapper { width: 420px; position: relative; margin: 0 auto 40px; text-align: center; }
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
.bb-custom-wrapper { padding-top: 16px; float: right; }
.bb-custom-wrapper nav a { background: #22b2d8; } 
.bb-bookblock { margin: 0; padding: 0; width: 400px; height: 238px; }
.bb-custom-wrapper nav { width: 80%; }
.bb-custom-wrapper nav a { background: #97642e; }

#screen2 { display: none; padding-top: 10px; }
#screen2 > div { overflow: hidden; background: rgba(255, 255, 255, .4); border-radius: 5px; padding: 10px; }
#screen2 > div p { width: 570px; float: left; padding-top: 0; }
#screen2 .fruit { float: right; margin-top: 8px !important; }
#screen2 p { padding-top: 20px; }
#screen2 div:last-child { margin-top: 20px; }
#screen2 div:last-child p { float: none; width: 100%; }

#buttons .next { display: none; }
html[dir="rtl"]  .bb-custom-icon-arrow-left { float: left; margin-left: 130px; }
html[dir="rtl"]  .bb-custom-icon-arrow-right { float: right; margin-right: 130px; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 33px; }
	p { font-size: 21px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p, .bb-bookblock, #screen1 img { width: 350px; }
	.bb-custom-wrapper { width: 360px; padding-top: 45px; z-index: 4; }
	.bb-bookblock { height: 208px; }
	#screen2 { padding-top: 35px; }
	#screen2 > div p { width: 440px; }
	html[dir="rtl"] .bb-custom-wrapper nav { width: 90%; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about ecosystems interactions"); ?></h1>
				<p><?php echo _("Ecosystems come in different sizes. They can be as small as a puddle or as large as the Earth itself. Any group of living and nonliving things interacting with each other can be considered as an ecosystem. An ecosystem is made up of a habitat, where things live; and a community, the animals and plants who live there. A habitat is the natural home or environment of an animal, plant, or other organism."); ?></p>
				<div class="bb-custom-wrapper">
					<div id="bb-bookblock" class="bb-bookblock">
						<div class="bb-item">
							<a href="#"><img src="images/10/1.jpg"></a>
						</div>
						<div class="bb-item">
							<a href="#"><img src="images/10/2.jpg"></a>
						</div>
						<div class="bb-item">
							<a href="#"><img src="images/10/3.jpg"></a>
						</div>
						<div class="bb-item">
							<a href="#"><img src="images/10/4.jpg"></a>
						</div>
						<div class="bb-item">
							<a href="#"><img src="images/10/5.jpg"></a>
						</div>
					</div>
					<nav>
						<a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left"><?php echo _("Previous"); ?></a>
						<a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right"><?php echo _("Next"); ?></a>
					</nav>
				</div>
				<p><?php echo _("In a habitat, plants and animals interact and rely on each other. In Africa, one of the largest trees and one of the tiniest insects rely completely on each other for survival. The sycamore fig tree supports an entire ecosystem, consisting of birds, snakes, insects, monkeys and elephants."); ?></p>
			</div>
			<div id="screen2" class="screens">
				<div>
					<p><?php echo _("The picture at the right that looks like fruits is actually a set of flowers. They can only be pollinated by a tiny wasp that brings along pollen from another fig tree. Over a period of weeks, the wasp eggs hatch and begin to develop through a series of life stages, using the inside of the developing fruit as food."); ?></p>

					<div class="fruit">
						<img src="images/10/fruit.jpg">
					</div>
				</div>

				<div>
					<p><?php echo _("The sycamore fig is also the center of a larger system involving many other creatures.  When the fruit ripens a wide variety of animals come to feed. Monkeys harvest and eat the fruits, as do elephants and bats. Some birds even use the tree for shelter, grey hornbills building nests in hollow spaces in the trunk. Hollow spaces are also used by bees as a shelter for hives. The sycamore fig further supports its ecosystem by forming fruits several times each year. If there are a few trees in an area, nourishing food will always be available. This entire complex system depends upon the interaction between a tree and a wasp. If either is lost, the whole system collapses."); ?></p>
				</div>
			</div>
			<div id="screen3" class="screens">
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Setting up turtle habitat..."); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/jquery.bookblock.js"></script>
	<script>

	$('.cycle').cycle({ fx: 'fade' });

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
				if(screen < screenCount) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('.bg').css('background-image', 'url(images/10/bg2.jpg)');
					$('.wrap').css('border-left', '1px dashed #2877c2');
					$('.wrap').css('border-right', '1px dashed #2877c2');
					$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "9.php";
			} else if($('#screen2').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
				$('#screen2').fadeOut(function (){
					$('.bg').css('background-image', 'url(images/10/bg.jpg)');
					$('.wrap').css('border-left', '1px dashed #9fe0fa');
					$('.wrap').css('border-right', '1px dashed #9fe0fa');
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			}
		});

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('.bg').css('background-image', 'url(images/10/bg2.jpg)');
				$('.wrap').css('border-left', '1px dashed #2877c2');
				$('.wrap').css('border-right', '1px dashed #2877c2');
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		});
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
