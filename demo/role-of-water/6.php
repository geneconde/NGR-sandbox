<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
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
<style>
h1 { color: #A78C52; }
.wrap { border-color: #c3788f; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 .clear { width: 704px; margin: 65px auto 0; padding-left: 0; }
#screen1 .clear li { float: left; margin-right: 40px; color: #000; text-align: center; font-size: 22px; }
#screen1 .clear li:last-child { margin-right: 0; }
#screen1 .clear li img { display: block; margin-bottom: 10px; }

#screen2 { display: none; text-align: center; }
#screen2 p:first-child { padding-top: 15px; }
#screen2 img { display: inline-block; margin-top: 160px; }

#buttons .next { display: none; }
<?php if ($language == 'zh_CN'): ?>
	#screen1 { padding-top: 10px; }
	#screen1 .clear  { margin-top: 180px; }
	#screen2 img { margin-top: 205px; }
<?php endif; ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about the role of water"); ?></h1>
				<p><?php echo _("Of all the substances that make up the earth, water has properties that make it very unusual in many ways. One of the most important properties that make water different than almost any other substance on earth is that water can be a solid, or a liquid, or a gas at normal temperatures that humans commonly experience. For instance, when it's really cold outside, below 32 degrees Fahrenheit (that's the freezing point of water), water can be found in its solid form as snow or ice. If it stays cold all year long for a very long time, like at the north or south poles, the frozen water gradually builds up into huge mounds of snow and ice like <span class='key'>glaciers</span> in Antarctica at the South Pole or the frozen sea <span class='key'>ice cap</span> at the North Pole."); ?></p>

				<ul class="clear">
					<li><img src="images/6/solid.jpg"><?php echo _("Solid"); ?></li>
					<li><img src="images/6/liquid.jpg"><?php echo _("Liquid"); ?></li>
					<li><img src="images/6/gas.jpg"><?php echo _("Gas"); ?></li>
				</ul>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Water can also be a gas at normal temperatures that humans typically experience. When water is a gas you can't see it because it's mixed in with the air. You can feel it though – it's called <span class='key'>humidity</span>! Sometimes on a hot summer day, no matter what you do - you sweat. That's because the air is <span class='key'>humid</span> – which means there's a lot of water in the air. And usually, the hotter it is, the more humid it is - especially if you live in certain parts of the country like Florida, or Louisiana, or even Chicago. But if you live near a desert, there's very little humidity because the air is very dry."); ?></p>

				<img src="images/6/s2.jpg">
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Researching different state of water..."); ?></strong></section></section>

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

	
	<?php include("setlocale.php"); ?>
</body>
</html>
