<?php 
	require_once("../tempsession.php");
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behavior'); ?></title>
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
<script src="scripts/jquery.jplayer.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #A79C65; }
.wrap { border-color: #e9db7a; }
.bg { background-image: url(images/8/bg.jpg); }

#screen1 > p:nth-child(2) { width:510px;float:left;}
#screen1 p { font-size: 24px; }
#screen1 video { border-radius: 5px; }
/* #screen1 .rslides1 { float:left;width:420px;height:300px;margin-top:20px; } */
#screen1 p:nth-child(4) { clear:both; }
.sc1-cont { float:right; width: 320px; }
.sc1-cont img { display:block; margin:0; }
.sc1-cont p { text-align: center;color:#997C49;font-size:20px !important; }
#screen1 .rslides { width:300px;float:left;clear:both;margin-right:20px;margin-top:0px;overflow:hidden;height:363px;border-radius: 5px; }
#screen1 .rslides img { height: 223px; }
#screen1 p:nth-child(5) { float:left; font-size: 22px; width: 400px;margin-top:0px; }

#screen2 .rslides { margin:20px auto; width: 460px; }
#screen2 .rslides img { margin-bottom: 10px; height: 309px; }
#screen2 .rslides li p { text-align: center; font-size: 20px; color:#997C49; }
#screen2, #screen3, #screen4 { display: none; }
#screen2 p:first-child, #screen3 p:first-child, #screen4 p:first-child { padding-top: 15px; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	#screen1 p { font-size: 22px; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 > p:nth-child(2) {width: 403px;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about behaviors"); ?></h1>
				<p><?php echo _("Learned behavior is often dependent on both inherited traits and the characteristics of the environment the animal lives in. For example, every bird has a number of specific songs which characterize the type of bird it is. A robin's song is different from a catbird's song, which is different from a cardinal's song. Each bird is born able to sing, but each bird has to be taught to sing their song. They have to hear it and learn it."); ?></p>
				<section class="sc1-cont">
					<div id="jplayer"></div>
					<p><?php echo _("A robin sings while perched on the roof."); ?></p>
				</section>
				<ul class="rslides slider">
					<li>
						<img src="images/8/8s1.jpg">
					</li>
					<li>
						<img src="images/8/8s2.jpg">
					</li>
				</ul>
				<p><?php echo _("In the wild savanna environment, a lion must learn how to hunt in order to survive. While a cub is helpless at first, by three months, its mother has introduced it to eating meat. Over the next seven months, it will watch its mother hunt and gradually learn hunting small animals itself. These skills will not be perfected for another one or two years because hunting is a complex behavior to master."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Most learned behavior is related to survival needs such as finding food, avoiding predators or other dangers, reproduction, or social interaction. But if learned behaviors are not inherited by an animal's offspring, what is the advantage to learning new behaviors? The answer is that it is likely that learning new behaviors allows a population of animals to survive in a wider variety of environments and situations. If an animal survives longer, it can increase its chances for reproduction."); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/8/8bs1.jpg">
						<p><?php echo _("Bears learning how to catch fish"); ?></p>
					</li>
					<li>
						<img src="images/8/8bs2.jpg">
						<p><?php echo _("Cow playing with her child"); ?></p>
					</li>
					<li>
						<img src="images/8/8bs3.jpg">
						<p><?php echo _("Cat licking his feet"); ?></p>
					</li>
					<!-- <li>
						<img src="images/8/8bs4.jpg">
						<p>Some Caption here!</p>
					</li> -->
				</ul>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Learning new behavior..."); ?></strong></section></section>
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	$("#jplayer").jPlayer({
		ready: function () { $(this).jPlayer("setMedia", { ogv: "videos/8/robin.ogv" }).jPlayer("play"); },
		ended: function() { $(this).jPlayer("play"); },
		swfPath: "scripts",
		supplied: "ogv",
		size: { width: "320px", height: "240px" },
		solutions: "flash, html",
		nativeVideoControls: { all: /./ }
	});

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show(function(){
			$.jPlayer.pause();
		});
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
		} else if ($('#screen2').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn(function(){
					$("#jplayer").jPlayer("play");
				});
				window.location.hash = '';
			});
		}
	});

	$('.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn(function(){
					$.jPlayer.pause();
				});
				window.location.hash = '#screen2';
			});
		}
	});


	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
