<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #f04871; }
.bg { background: url('images/6/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #efe08a; border-right: 1px dashed #efe08a; }
.caption { font-size: 20px; text-align: center; }
#screen1 .placeholder { float: left; background: #a3def8; width: 267px; margin: 20px 20px 0 0; padding: 10px 10px 5px 10px; border-radius: 5px; }
#screen1 img { width: 267px; margin-bottom: 10px; }
#screen2 .placeholder { width: 364px; border-radius: 5px; position: relative; margin: 20px 0 0 236px; padding: 10px; background: #a3def8; }
#screen2 .placeholder img { width: 100%; margin-bottom: 10px; }
#screen2 .placeholder .caption { text-align: center; font-size: 20px !important; }
#screen2 .placeholder .next { transition: .2s ease-in all; position: absolute; right: -17px; width: 36px; height: 37px; display: block; text-indent: -9999px; background: url(images/6/arrows.png) no-repeat right top; top: 110px; }
#screen2 .placeholder .prev { transition: .2s ease-in all; position: absolute; left: -17px; width: 36px; height: 37px; display: block; text-indent: -9999px; background: url(images/6/arrows.png) no-repeat left top; top: 110px; }
#screen2 .placeholder .prev:hover { transition: .2s ease-out all; left: -25px; }
#screen2 .placeholder .next:hover { transition: .2s ease-out all; right: -25px; }
#screen3 .placeholder { background: #a2def8; border-radius: 5px; width: 500px; padding: 10px; margin: 20px 0 0 160px; }
#screen2, #screen3 { display: none; }
#screen2 p, #screen3 p { padding-top: 15px; }
img.next-toggle { display:none; }
<?php if($language == "es_ES") { ?>
	p { font-size: 23px; }
	#screen2 p { font-size: 22px; }
	#screen2 .placeholder .caption { font-size: 20px !important; } 
<?php } ?>
html[dir="rtl"] #screen2 .placeholder { margin:0 auto; }
html[dir="rtl"] #screen3 .placeholder { margin:10px auto; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens clearfix">
				<h1><?php echo _("More big ideas... about biodiversity"); ?></h1>
				<p><?php echo _("<span class='key'>Biodiversity</span> is the term used to refer to the collection of different plant and animal communities within their natural environments. Biodiversity describes the variety of species found in Earth's <span class='key'>ecosystems</span>. These plant and animal communities are the result of natural factors such as temperature and precipitation as well as the actions of people. Some plants and animals only survive well in certain habitats with the temperature and rainfall conditions that suit them. Think of a polar bear on the beach, how long do you think it would survive? Some animals migrate or move to a <span class='key'>habitat</span> that suits them; sometimes permanently, sometimes temporarily."); ?></p>
				<div id="s1a" class="placeholder">
					<ul class="rslides slider">
						<li>
							<img src="images/6/s1aa.jpg">
							<p class="caption"><?php echo _("Polar bear in cold climate"); ?></p>
						</li>
						<li>
							<img src="images/6/s1ab.jpg">
							<p class="caption"><?php echo _("Camel in a desert"); ?></p>
						</li>
						<li>
							<img src="images/6/s1ac.jpg">
							<p class="caption"><?php echo _("Penguins in cold climate"); ?></p>
						</li>
						<li>
							<img src="images/6/s1ad.jpg">
							<p class="caption"><?php echo _("Meerkats in warm climate"); ?></p>
						</li>
					</ul>
				</div>					
				<div id="s1b" class="placeholder">
					<ul class="rslides slider">
						<li>
							<img src="images/6/s2aa.jpg">
							<p class="caption"><?php echo _("Sheep migrating to new pasture"); ?></p>
						</li>
						<li>
							<img src="images/6/s2ab.jpg">
							<p class="caption"><?php echo _("Migrating snow geese"); ?></p>
						</li>
					</ul>
				</div>					
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("Other animals are able to create their own habitats. Ants, bees, and termites are examples of insects that build complex hives and hills. These insects live in highly ordered societies that include members who specialize in such tasks as food gathering, defense, and reproduction."); ?></p>
				<p><?php echo _("Most bees construct hives inside other enclosed structures, such as hollow trees, old buildings, or even boxes placed by humans for the bees to use. A single hive may house as many as 1500 bees. Ants and termites burrow into the ground to construct vast mazes to house and protect their colonies. The hills consist of a great many rooms and chambers connected by tunnels. Ant and termite colonies may be home to anywhere from a few hundred to more than a million insects each."); ?></p>
				<div class="placeholder">
					<ul id="slider" class="rslides">
						<li>
							<img src="images/6/s2a.jpg">
							<p class="caption"><?php echo _("Ant nest on a tree in a tropical rainforest"); ?></p>
						</li>
						<li>
							<img src="images/6/s2b.jpg">
							<p class="caption"><?php echo _("Bees in honeycomb box placed by a human"); ?></p>
						</li>
						<li>
							<img src="images/6/s2c.jpg">
							<p class="caption"><?php echo _("Termites in an old house"); ?></p>
						</li>
						<li>
							<img src="images/6/s2d.jpg">
							<p class="caption"><?php echo _("Sand anthill in a desert"); ?></p>
						</li>
					</ul>
				</div>					
			</div>
			<div id="screen3" class="screens">
				<p><?php echo _('Some animals not only construct homes for themselves, they build homes for others. <span class="key">Coral</span> are small ocean creatures that make hard shells for themselves. Unlike many other shellfish, coral attach themselves to hard surfaces in warm seawater. Over a period of many years, large colonies of coral grow enough to form <span class="key">reefs</span>, large underwater structures that are the home to many kinds of sea life.'); ?></p>
				<div class="placeholder">
					<ul class="rslides slider">
						<li><img src="images/6/s3a.jpg"></li>
						<li><img src="images/6/s3b.jpg"></li>
						<li><img src="images/6/s3c.jpg"></li>
						<li><img src="images/6/s3d.jpg"></li>
					</ul>
				</div>					
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="7.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Monarch butterfly migrating..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen == screenCount) { //refresh on #answer
					$('.bg').css('background-image', 'url(images/6/bg2.png)');
					$('.wrap').css('border-left', '1px dashed #008fca');
					$('.wrap').css('border-right', '1px dashed #008fca');
					$('img.readmore-toggle').fadeOut( function(){ $('img.next-toggle').fadeIn(); });
				} else {
					$('.bg').css('background-image', 'url(images/6/bg.png)');
					$('.wrap').css('border-left', '1px dashed #efe08a');
					$('.wrap').css('border-right', '1px dashed #efe08a');
					$('img.next-toggle').fadeOut(function(){$('img.readmore-toggle').fadeIn();});
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('img.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "5.php#answer";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){
					$('.bg').css('background-image', 'url(images/6/bg.png)');
					$('.wrap').css('border-left', '1px dashed #efe08a');
					$('.wrap').css('border-right', '1px dashed #efe08a');
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('img.next-toggle').fadeOut(function() { $('img.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut(function (){
					$('.bg').css('background-image', 'url(images/6/bg.png)');
					$('.wrap').css('border-left', '1px dashed #efe08a');
					$('.wrap').css('border-right', '1px dashed #efe08a');
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			}
		});

		/* Read More Screen Transition */
		$('img.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				$('#screen1').fadeOut( function(){
					$('.wrap').css('border-left', '1px dashed #efe08a');
					$('.wrap').css('border-right', '1px dashed #efe08a');
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {
				$('img.readmore-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
				$('#screen2').fadeOut( function(){
					$('.bg').css('background-image', 'url(images/6/bg2.png)');
					$('.wrap').css('border-left', '1px dashed #008fca');
					$('.wrap').css('border-right', '1px dashed #008fca');
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			}
		});
	});
	</script>
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	$("#slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 400
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
