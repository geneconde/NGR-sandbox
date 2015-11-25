<?php 
	require_once("../tempsession.php");
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behaviors'); ?></title>
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
<script src="scripts/global.js"></script>
<style>
h1 { color: #A79C65; }

.wrap { border-color: #d1c36a; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 p:nth-child(3){ width:400px;float: left;margin-right:20px; }
#screen1 .rslides { width:430px;float:left;margin:20px 0; }
//#screen1 .rslides img { -moz-border-radius: 5px; border-radius: 5px !important; }

#screen2, #screen3 { display: none; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }
#screen2 .rslides { width:480px;margin:10px auto; }

#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	#screen1 p { font-size: 22px; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 p:nth-child(3) {width: 272px;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about behaviors"); ?></h1>
				<p><?php echo _("Unlike innate behavior, <span class='key'>learned behaviors</span> are behaviors which are developed through experience - by living and interacting with the environment. For example, when you cross a street, you look in all directions to make sure that there are no moving vehicles coming. A family member most likely explained to you how to check for oncoming traffic, or perhaps you watched and imitated them as they showed you. You were not born knowing how to cross a street safely, but you learned the behavior. Once you learned this behavior in crossing streets, you were able to show or teach a younger sister or brother the behavior as well."); ?></p>
				<p><?php echo _("Other examples of learned behaviors in humans include reading, helping someone, playing music, and riding a bicycle. These are all behaviors which require you to learn through being taught by others, either directly or indirectly through observing them, by doing them yourself, or a combination of these. Once you learn a new behavior, it is not usually forgotten. You now possess a memory of how to do it."); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/6/6a1.jpg">
					</li>
					<li>
						<img src="images/6/6a2.jpg">
					</li>
					<li>
						<img src="images/6/6a3.jpg">
					</li>
					<li>
						<img src="images/6/6a4.jpg">
					</li><li>
						<img src="images/6/6a5.jpg">
					</li>
				</ul>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("An important feature of learned behaviors is that they are not passed onto the next generation through physical means. In other words, they are not <span class='key'>genetically-inherited</span>. This means that although you have learned to cross a road safely, your children will not be born with that knowledge or ability. They will have to learn the behavior, just as you had to learn it. This differs from innate reflexes and instincts, which are passed on from one generation to the next through the genetic means of inheritance."); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/6/6b1.jpg">
					</li>
					<li>
						<img src="images/6/6b2.jpg">
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Interacting with environment..."); ?></strong></section></section>
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

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "5.php";
		} else if ($('#screen2').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
