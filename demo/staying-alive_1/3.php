<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
h1 { color: #006171; }
h2 { margin-bottom: 0; }
.wrap { border-color: #E6ABFF; }
.bg { background-image: url(images/3/bg.jpg); }

table { margin-top: 20px; }
td { background-color: #f4da70; width: 300px; border-radius: 10px; }
td:last-child { background-color: #dcedcf; }
td p { padding: 5px 10px; }
.slider { width: 70%; margin: 0 auto; }

.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #780046; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #780046; }
.ac-custom svg path { stroke: #780046; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question ol { width: 530px; margin: 0 0 0 10px !important; }
#question li { padding: 10px 0; }

table td p { text-align: center; }

#answer { display: none; padding-top: 15px; }
#answer p:first-child { background: rgba(255, 255, 255, .5); padding: 10px; border-radius: 5px; }

#buttons .next { display: none; }

html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom label::before { right: 5px; }
html[dir="rtl"] .ac-custom svg { right: 8px; }
html[dir="rtl"] .ac-custom label { padding-right: 50px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 45px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 45px; }
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about staying alive"); ?></h1>
				<h2><?php echo _("Click in the right column the most likely result of actions or changes in the left column."); ?></h2>
				<table cellspacing="20">
					<tr>
						<td>
							<p><?php echo _("Warming climate"); ?></p>	
							<ul class="rslides slider">
								<li> <img src="images/3/s1a.jpg"> </li>
								<li> <img src="images/3/s1b.jpg"> </li>
								<li> <img src="images/3/s1c.jpg"> </li>
							</ul>						
						</td>
						<td>
							<section>
								<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="checkbox"><label for="a"><span><?php echo _("Migration of many species toward colder regions"); ?></span></label></li>
										<li><input id="b" name="q" type="checkbox"><label for="b"><span><?php echo _("Changes in temperature and rainfall patterns"); ?></span></label></li>
										<li><input id="c" name="q" type="checkbox"><label for="c"><span><?php echo _("Lowering of worldwide sea levels"); ?></span></label></li>
									<ol>
								</form>
							</section>
						</td>
					</tr>
					
					<tr>
						<td>
							<p><?php echo _("Preservation of natural areas"); ?></p>
							<ul class="rslides slider">
								<li> <img src="images/3/s2a.jpg"> </li>
								<li> <img src="images/3/s2b.jpg"> </li>
								<li> <img src="images/3/s2c.jpg"> </li>
							</ul>							
						</td>
						<td>
							<section>
								<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="checkbox"><label for="a2"><span><?php echo _("Decreasing animal habitat"); ?></span></label></li>
										<li><input id="b2" name="q2" type="checkbox"><label for="b2"><span><?php echo _("Increasing animal habitat"); ?></span></label></li>
										<li><input id="c2" name="q2" type="checkbox"><label for="c2"><span><?php echo _("Increasing rates of extinction"); ?></span></label></li>
									<ol>
								</form>
							</section>
						</td>
					</tr>
				</table>
			</div>

			<div id="answer">
				<p><?php echo _("As climate changes, so do the homes of many types of plants and animals. Changes in the climate affect temperature and rainfall patterns around the world. For example, climate changes can cause worldwide sea levels to increase. Preserving natural areas maintains the habitat of many types of plants and animals since extinction is related to habitat loss."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Observing rainfall patterns..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	var hash = window.location.hash.slice(1);
	var screenCount = 2;

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				//$('.wrap').css('border-color', '#4291d3');
				$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });
				$('.check-toggle').fadeOut( function(){ $('.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
				$('#question').fadeIn();
				$('.back-toggle').fadeIn();
				$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
			}
		});
	}

	$('.check-toggle').click(function(){
		$('#question').fadeOut(function(){
			$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			//$('.wrap').css('border-color', '#4291d3');
			$('#answer').fadeIn();
			$('.check-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
			window.location.hash = '#answer';
		});
	});

	$('.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
				$('#question').fadeIn();
				$('.back-toggle').fadeIn();
				$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
				window.location.hash = '';
			});
		} else {
			$('.back-toggle').parent().attr('href','2.php');
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
