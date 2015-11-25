<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #725001; }
.wrap { border-left: 1px dashed #e7d7a1; border-right: 1px dashed #e7d7a1; }
.bg { background: url('images/8/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#screen1 .placeholder { margin: 20px 0 20px 70px; width: 750px; }
#screen1 .placeholder ul { float: left; margin-right: 20px; width: 350px; }
#screen1 .placeholder ul:last-child { margin-right: 0; }
#screen2 { display: none; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }
#screen2 .placeholder { margin: 10px 0; }
#screen2 .placeholder p { float: left; width: 430px; padding-top: 0; margin-right: 20px; font-size: 23px; }
#screen2 .placeholder ul { float: right; width: 400px; }
#buttons .next { display: none; }
p {padding: 0;}
<?php if ($language == 'zh_CN'): ?>
	#screen2 .placeholder ul { width: 310px; margin: -10px 60px 0 0; }
<?php endif; ?>
<?php if($language == "es_ES") { ?>
	p { font-size: 21px; }
<?php } ?> 
html[dir="rtl"] h1 { font-size: 34px;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .placeholder { margin: 0; }
	#screen2 .placeholder p {width: 303px;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about energy for life"); ?></h1>
				<p><?php echo _('Coal and petroleum are considered to be <span class="key">fossil fuels</span>, because they are the remains of living organisms, millions of years old. <span class="key">Coal</span> was the fuel for the industrial revolution, providing the vast amounts of energy required to power the steel mills and steam engines.  Steady wages, new products, and higher concentrations of people led to dramatic upward shifts in the standards of living of people all over the world.'); ?></p>
				<div class="placeholder clearfix">
					<ul class="rslides slider">
						<li><img src="images/8/s1a.jpg"></li>
						<li><img src="images/8/s1b.jpg"></li>
					</ul>
					<ul class="rslides slider">
						<li><img src="images/8/s1c.jpg"></li>
						<li><img src="images/8/s1d.jpg"></li>
					</ul>
				</div>
				<p><?php echo _("<span class='key'>Petroleum</span> was the fuel for another industrial revolution at the beginning of the Twentieth Century. Automobiles and airplanes required the concentration of a lot of energy in a small package to speed up travel and make it available to common people; petroleum was just the ticket."); ?></p>
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("We still use huge amounts of coal and petroleum around the world, but we are beginning to understand the long-term costs of using these resources. Fossil fuels take a very long time to form, much longer than they take to use up. Even though new supplies of coal and oil are still being found, the time required for them to form makes it inevitable that we will eventually run out. Here's how the system works."); ?></p>
				<div class="placeholder clearfix">
					<p><?php echo _("Burning fossil fuels releases vast amounts of carbon dioxide into the atmosphere. This carbon dioxide was originally trapped by photosynthesis millions of years ago and stored as living material. When that material was converted into coal and petroleum, it was stored indefinitely below ground. Now, this stored carbon is being returned to the atmosphere at rates far faster than when it was removed. This has led to changes in climate patterns because carbon dioxide absorbs solar energy, heating the atmosphere."); ?></p>
					<ul class="rslides slider">
						<li><img src="images/8/s2a.jpg"></li>
						<li><img src="images/8/s2b.jpg"></li>
						<li><img src="images/8/s2c.jpg"></li>
					</ul>
				</div>
				<p><?php echo _("One possible solution to the problem of using up fossil fuels is to make fuels using solar energy to remove carbon and produce new fuels. That's what photosynthesis does. It uses the sun's energy to remove carbon dioxide from the air and make molecules of sugar."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Burning fossil fuels..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2;

	if (hash != "") {
		$('.screens').hide();
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen < screenCount) {
				$('.readmore-toggle').parent().attr('href','#screen' + screen);
			} else {
				$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
			}
		});
	}

	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
		} else if ($('#screen2').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} /*else if($('#screen3').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen3').fadeOut(function (){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}*/
	});

	$('.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		} /*else if ($('#screen2').is(':visible')) {
			$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#screen2').fadeOut( function(){
				$('#screen3').fadeIn();
				window.location.hash = '#screen3';
			});
		}*/
	});
	</script>
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
