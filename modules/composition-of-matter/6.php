<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
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
h1 { color: #f7ffb9; }
.wrap { border-left: 1px dashed #3aa18a; border-right: 1px dashed #3aa18a; }
.bg { background: url('images/6/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

#screen1 { overflow: hidden; }
#screen1 .bottom { min-height: 210px; float: left; margin: 20px 0; }
#screen1 .bottom div { position: relative; float: left; margin-right: 45px; }
#screen1 .bottom div:nth-child(3) { margin-right: 0; }
#screen1 .bottom div img { border: 10px solid #1ca5ff; margin-left: 10px; }
#screen1 .bottom div p { padding: 6px 5px 0 5px; line-height: 1.2; width: 261px; height: 43px; text-align: center; position: absolute; bottom: -16px; }
#screen1 .bottom div:nth-child(1) p { background: url(images/6/orange.png) no-repeat; }
#screen1 .bottom div:nth-child(2) p { background: url(images/6/green.png) no-repeat; }
#screen1 .bottom div:nth-child(3) p { background: url(images/6/red.png) no-repeat; }

#screen2, #screen3 { display: none; text-align: center; padding-top: 20px; }
#screen2 .placeholder { margin: 40px 0 20px; background: url(images/6/placeholder.png) no-repeat; display: inline-block; width: 855px; height: 408px; }
#screen2 { -webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; }
#screen2 .images { overflow: hidden; margin: 25px auto 0; width: 835px; }
#screen2 .images p { padding: 5px 0; text-align: center; margin: 0; }
#screen2 .images div { float: left; width: 200px; margin-right: 10px; margin-bottom: 10px; }
#screen2 .images div:first-child p { color: #7EF0FF; }
#screen2 .images div:nth-child(2) p { color: #A2FCED; }
#screen2 .images div:nth-child(3) p { color: #FFB6B6; }
#screen2 .images div:last-child { margin-right: 0; }
#screen2 .images div:last-child p { color: #D3D3D3; }
#screen2 img { width: 180px !important; height: 160px !important; }

#screen3 img { width: 490px; border-radius: 10px; margin-top: 10px; }

.caption { width: 840px !important; padding: 5px 0 !important; position: absolute; display: block; bottom: 10px; left: 7px; right: 0; text-align: center; background: #000; background: rgba(0,0,0, .4); color: #fff; }

#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	#screen2 p { font-size: 22px; }
<?php } ?> 
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2, #screen3 { padding-top: 35px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .bottom div { margin-right: 10px; }
	#screen1 .bottom div img { width: 200px; }
	#screen1 .bottom div p { width: 230px; }
	#screen1 .bottom div:nth-child(1) p, #screen1 .bottom div:nth-child(2) p, #screen1 .bottom div:nth-child(3) p { background-size: 225px; left: 5px; }
	#screen2 .images { width: 100%; }
	#screen2 .images div { width: 170px; }
	#screen2 img { width: 170px !important; height: 145px !important; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _('More big ideas... about the composition of matter'); ?></h1>
				<p><?php echo _("Matter usually exists as a <span class=\"key\">solid</span>, <span class=\"key\">liquid</span>, or <span class=\"key\">gas</span> form. These forms of matter are referred to as the <span class=\"key\">states of matter</span>. The elements or compounds in the solid state are bound tightly together in a fixed, rigid arrangement. So solids have a definite shape and volume. The elements or compounds in the liquid state are not fixed as in a solid. The elements and compounds of a liquid can slide around. So liquids do have a fixed volume but do not maintain a fixed shape. In the gas state of matter, the elements and compounds are free to move around without even touching. So a gas has no fixed shape or volume."); ?></p>

				<div class="bottom">
					<div>
						<img src="images/6/ice.jpg">
						<p><?php echo _('solid (ice)'); ?></p>
					</div>

					<div>
						<img src="images/6/water.jpg">
						<p><?php echo _('liquid (liquid water)'); ?></p>
					</div>

					<div>
						<img src="images/6/gas.jpg">
						<p><?php echo _('gas (water vapor)'); ?></p>
					</div>
				</div>

				<p><?php echo _("The three main states of matter, are shown for water: solid (ice), liquid (liquid water), and gas (water vapor). A fourth, called plasma does not exist in natural conditions, so let's focus on just solid, liquid and gas."); ?></p>
			</div>
			<div id="screen2" class="screens">
				<!--<div class="placeholder">
					<ul class="rslides">
						<li><img src="images/6/melting.jpg"><p class="caption">Melting point</p></li>
						<li><img src="images/6/boiling.jpg"><p class="caption">Boiling point</p></li>
						<li><img src="images/6/freezing.jpg"><p class="caption">Freezing point</p></li>
						<li><img src="images/6/condensation.jpg"><p class="caption">Condensation point</p></li>
					</ul>
				</div>-->

				<p><?php echo _('Solids, liquids, and gases have properties that can be identified through observation and measurement. Each substance has a unique mass that can be measured, and many have unique properties such as color and texture.'); ?></p>

				<div class="images">
					<div>
						<img src="images/6/freezing.gif">
						<p><?php echo _('Freezing point'); ?></p>
					</div>
					<div>
						<img src="images/6/melting.gif">
						<p><?php echo _('Melting point'); ?></p>
					</div>						
					<div>
						<img src="images/6/boiling.gif">
						<p><?php echo _('Boiling point'); ?></p>
					</div>						
					<div>
						<img src="images/6/condensation.gif">
						<p><?php echo _('Condensation point'); ?></p>
					</div>
				</div>

				<p><?php echo _('A substance\'s <span class="key">melting point</span> is the temperature at which the substance changes from a solid to a liquid. A substance\'s <span class="key">boiling point</span> is the temperature at which a substance changes from a liquid to a gas. A substance\'s <span class="key">freezing point</span> is the temperature at which a liquid changes from a liquid to a solid and is the same temperature as its melting point. Similarly, a substance\'s <span class="key">condensation point</span> is the temperature at which a gas changes to a liquid and is the same temperature as its boiling point. Substances can often be identified by the temperatures at which they change between the solid, liquid and gas states. For example, the normal melting and freezing point of water is 32°F (0°C) and its normal boiling and condensation point is 212°F (100°C).'); ?></p>
			</div>
			<div id="screen3" class="screens">
				<p><?php echo _('When certain elements are joined together during a <span class="key">chemical reaction</span> into compounds, their states of matter and properties can change radically. For example, water is a liquid that is made from two gases, oxygen and hydrogen.  Table salt is a solid that is composed of sodium, a solid, with chlorine, a gas. Ordinary table sugar is composed of hydrogen, oxygen and carbon--two gases and a solid.'); ?></p>
				
				<img src="images/6/chemical.gif">
				<p><?php echo _('In the video clip you can see a chemical reaction between a super absorbent polymer called sodium polyacrylate and water. The substance absorbs the water and turns into a gel-like matter some magicians like to call snow.'); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Changing of matter activities...'); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
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

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
				if($('#screen1').is(':visible')) {
					$('#screen1').fadeOut(function(){
						$('#screen2').fadeIn();
						window.location.hash = '#screen2';
						//playSlider();
					});
				} else if ($('#screen2').is(':visible')) {
					$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
					$('#screen2').fadeOut(function(){
						$('#screen3').fadeIn();
						window.location.hash = '#screen3';
					});
				}
			});
	});

    $(".rslides").responsiveSlides();
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
