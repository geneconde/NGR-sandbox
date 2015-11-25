<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/ball.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/4/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#screen2 { display: none; }
h1 { color: #d4c08b; }
p { color: #fff; text-align: left; }
#buttons .next, img.back-toggle-screen { display:none; }
.pic { height: 250px; margin: 0 auto; width: 45%; }
.pic img { height: 100%;  }
#img-container { width: 84%; height: 270px; margin: 0 auto; }
#img-container p { text-align: center; }
#img-holder1 { width: 251px; height: 100%; background: url(images/4/paper1.png) no-repeat; background-size: 100%; float: left; }
#img-holder2 { width: 222px; height: 100%; background: url(images/4/paper2.png) no-repeat; background-size: 100%; float: left; }
#img-holder3 { width: 243px; height: 100%; background: url(images/4/paper3.png) no-repeat; background-size: 100%; float: left; }
#img-holder1 img { width: 70%; position: relative; left: 40px; top: 80px; opacity: 4;}
#img-holder2 img { width: 75%; position: relative; left: 40px; top: 80px; }
#img-holder3 img { width: 70%; position: relative; left: 40px; top: 80px; }
#ball-desc { float: left; height: 270px; width: 300px; margin-left: 120px; padding-top: 30px; }
#ball-desc p { text-align: left; }
img.check { display:inline-block; height: 25px; margin-right: 5px; }
#img-container p { color: #000; position: relative; top: 75px; }
#t1 { left: 5px; }
#t2 { left: 15px; }
#t3 { left: 10px; }

<?php if($language == 'es_ES') { ?>
	h1 { font-size:30px; }
<?php } ?>

<?php if($language == 'zh_CN') { ?>
	#ballWrapper { top: 16% !important; }
<?php } ?>

html[dir="rtl"] p { text-align: right; }
html[dir="rtl"] #ballWrapper { left:45%; }
html[dir="rtl"] #ball-desc { float:right;padding-right:200px; }
html[dir="rtl"] #img-holder1 img { left:-37px; }
html[dir="rtl"] #img-holder2 img { left:-18px; }
html[dir="rtl"] #img-holder3 img { left:-37px; }
html[dir="rtl"] img.check { float:right;padding-left:20px; }
html[dir="rtl"] #ball-desc p { text-align:right; }
html[dir="rtl"] #ball-desc p:nth-child(1) { padding-right:50px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#ballWrapper { left: 60%; }
	html[dir="rtl"] #ballWrapper { left: 30%; }
	#img-container { width: 100%; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("Reviewing big ideas... about the properties of matter"); ?></h1>
				<p><?php echo _("All physical substances are examples of <span class='key'>matter</span> -- anything that takes up space and has mass. All substances have properties that make them unique. In this review we will look at different properties of matter and changes that happen to those properties."); ?></p>
				<div id="ballWrapper">
					<div id="ball"></div>
					<div id="ballShadow"></div>		
				</div>
				<div id="ball-desc">
					<p><?php echo _("Properties of a ball:"); ?></p>
					<p><img src="images/others/check.png" class="check"><?php echo _("Round"); ?></p>
					<p><img src="images/others/check.png" class="check"><?php echo _("Smells like rubber"); ?></p>
					<p><img src="images/others/check.png" class="check"><?php echo _("Solid"); ?></p>
					<p><img src="images/others/check.png" class="check"><?php echo _("Bouncy"); ?></p>
				</div>
				<div class="clear"></div>
				<p><?php echo _("Determining the properties of a substance and how its properties make it useful are important."); ?></p>
			</div>
			<div id="screen2" class="screens">
				<br>
				<p><?php echo _("Some properties of matter can be determined from the use of our five senses of sight, hearing, taste, touch, and smell. For example, properties such as taste (sweet, sour), temperature (hot, cold), or color (red, yellow) can be determined with our senses."); ?></p>
				<div id="img-container">
					<div id="img-holder1">
						<img src="images/4/image1.jpg">
						<p id="t1"><?php echo _("melting chocolate"); ?></p>
					</div>
					<div id="img-holder2">
						<img src="images/4/image2.jpg">
						<p id="t2"><?php echo _("boiling water"); ?></p>
					</div>
					<div id="img-holder3">
						<img src="images/4/image3.jpg">
						<p id="t3"><?php echo _("frozen lake"); ?></p>
					</div>
				</div>
				<p><?php echo _("Other properties of matter can be determined through the use of tools or scientific instruments, for example, a <span class='key'>thermometer</span> can be used to determine <span class='key'>melting point</span> (when a substance changes from a solid to a liquid), <span class='key'>boiling point</span> (when a substance changes from a liquid to a gas) or <span class='key'>freezing point</span> (when a substance changes from a liquid to a solid)."); ?></p>
			
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2;
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen == screenCount) {
					$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();
					});
				}
			});
		}
		
		/* Back Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if ($('#screen2').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
				$('#screen2').fadeOut(function (){
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			}
			
		});

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				window.location.hash = '#screen2';
			});
		});
	});
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Hmm... what is matter?"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
