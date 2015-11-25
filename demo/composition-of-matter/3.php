<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
table { display: inline-block; }
h1 { font-size: 33px; }
.wrap { border-left: 1px dashed #9781BE; border-right: 1px dashed #9781BE; }
th { background-color: #f89fa2; color: #894657; padding: 5px 10px; font-size: 24px; border-radius: 8px; font-weight: normal; }
td { position: relative; background-color: #c1d0e5; padding: 13px 10px; font-size: 24px; text-align: left; border-radius: 8px; }
.bg { padding-top: 10px; background: url('images/3/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 98.5%; position: relative; }
#question ul, #answer ul { width: 800px; margin: 0 auto; overflow: hidden; padding-left: 0; list-style: none; }
#question li, #answer li { font-size: 20px; text-align: center; float: left; margin: 10px 15px 10px 0; }
#question li:nth-child(5), #question li:nth-child(10), #answer li:nth-child(5), #answer li:nth-child(10) { margin-right: 0; }
#question input[type="checkbox"] { display: none; }
#question img { display: inline-block; }
#question ul span, #answer ul span { display: block; text-align: center; width: 140px; color: #A55692; }
#question h2 span { display: inline; }
#question label { cursor: pointer; }
img.grayscale { border: 4px solid #EBD9D9; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { border: 4px solid #EBD9D9; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
#answer { display: none; }
#answer ul { width: 49%; }
#answer ul span { width: 180px; }
#answer ul li { margin-right: 40px; }
#answer ul li:nth-child(2) { margin-right: 0; }
#answer ul li:nth-child(4) { margin-right: 0; }
#answer p { padding-top: 10px; }
#buttons .next { display: none; }
.transparent {
	background: rgba(255, 255, 255, .7);
	padding: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 31px; }
<?php } ?> 

html[dir="rtl"] #question li, html[dir="rtl"] #answer li { margin: 10px 10px 10px 0; float: right; }
html[dir="rtl"] #question ul, html[dir="rtl"] #answer ul { padding-right: 0; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 35px; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question ul { width: 100%; }
	#answer ul { width: 400px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question"> 
				<h1><?php echo _('Checking what you know... about the composition of matter'); ?></h1>
				<div class="transparent">
				<h2><?php echo _('Look at the list of things below. Choose <span class="blink">all</span> that are naturally occurring materials—can be found in nature.'); ?></h2>
					<ul>
						<li><label for="a"><img class="grayscale" src="images/3/brass.jpg" title="Brass"></label><input type="checkbox" id="a"><span><?php echo _('Brass'); ?></span></li>
						<li><label for="b"><img class="grayscale" src="images/3/iron.jpg" title="Iron"></label><input type="checkbox" id="b"><span><?php echo _('Iron'); ?></span></li>
						<li><label for="c"><img class="grayscale" src="images/3/steel.jpg" title="Steel"></label><input type="checkbox" id="c"><span><?php echo _('Steel'); ?></span></li>
						<li><label for="d"><img class="grayscale" src="images/3/gold.jpg" title="Gold"></label><input type="checkbox" id="d"><span><?php echo _('Gold'); ?></span></li>
						<li><label for="e"><img class="grayscale" src="images/3/plywood.jpg" title="Plywood"></label><input type="checkbox" id="e"><span><?php echo _('Plywood'); ?></span></li>
						<li><label for="f"><img class="grayscale" src="images/3/plastics.jpg" title="Plastics"></label><input type="checkbox" id="f"><span><?php echo _('Plastics'); ?></span></li>
						<li><label for="g"><img class="grayscale" src="images/3/rubber.jpg" title="Rubber"></label><input type="checkbox" id="g"><span><?php echo _('Rubber'); ?></span></li>
						<li><label for="h"><img class="grayscale" src="images/3/water.jpg" title="Water"></label><input type="checkbox" id="h"><span><?php echo _('Water'); ?></span></li>
						<li><label for="i"><img class="grayscale" src="images/3/orange-juice.jpg" title="Orange juice"></label><input type="checkbox" id="i"><span><?php echo _('Orange juice'); ?></span></li>
						<li><label for="j"><img class="grayscale" src="images/3/peanut-butter.jpg" title="Peanut butter"></label><input type="checkbox" id="j"><span><?php echo _('Peanut butter'); ?></span></li>
					</ul>
				</div>
			</div>

			<div id="answer">
				<div class="transparent">
					<ul>
						<li><img src="images/3/blacksmith.jpg" title="Blacksmith"></li>
						<li><img src="images/3/mining.jpg" title="Mining"></li>
						<li><img src="images/3/harvesting.jpg" title="Harvesting"></li>
						<li><img src="images/3/peanut-making.jpg" title="Making peanut butter"></li>
					</ul>

					<p><?php echo _('Materials such as water, iron and gold are naturally occurring materials. They can be used just as they are found in nature. But naturally occurring materials can be made into other things that we use and even eat. For example, peanuts can be eaten as found or processed into peanut butter. Using naturally occurring materials and changing them into other things requires that we know about their composition—what they are made of. Continue with this module to learn more about the composition of matter.'); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('What are natural resources?'); ?></strong></section></section>
	<script src="scripts/svgcheckbx.js"></script>
	<script>
	$(document).ready(function() {
		var question = $('#question'),
			answer = $('#answer');

		question.find('input[type=checkbox]').on('click', function() {
			var me = $(this);

			if (me.is(':checked')) {
				me.parent().find('img').removeClass().addClass('grayscale-off');
				me.parent().find('span').removeClass().addClass('checked');
			} else {
				me.parent().find('img').removeClass().addClass('grayscale');
				me.parent().find('span').removeClass().addClass('unchecked');
			}
		});

		$('a.back-toggle').click(function() {
			if(question.is(':visible')) {
				document.location.href = "2.php";
			} else if (answer.is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				answer.fadeOut(function() {
					//$('.bg').css('background-image', 'url(images/3/bg.jpg)');
					question.fadeIn();
				});
			}
		});
		
		$('a.check-toggle').click(function(){ 
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			question.fadeOut(function(){ 
				//$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				answer.fadeIn();
			}); 
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
			question.fadeOut(function() { 
				answer.fadeIn(); 
				//$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			});

			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			addHash('#answer');
		}
	});
	</script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
