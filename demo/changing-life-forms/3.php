<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { z-index: 1 !important; }
h2 { margin-bottom:0; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/3/bg.jpg); }

.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #cc6633; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #cc6633; }
.ac-custom svg path { stroke: #cc6633; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
.ac-custom li { padding:10px 0; }
#question { overflow: hidden; }
/* #answer ul , #question ul { width: 100%; margin: 0 auto; overflow: hidden; padding-left: 0; list-style: none; }
#answer li, #question li { font-size: 24px; text-align: center; float: left; margin: 10px 180px 20px 20px; }
#question li:nth-child(3), #question li:nth-child(4) { margin-bottom: 0; }
#question img { display: inline-block; width: 300px; border-radius: 10px; }
#question label { cursor: pointer; }
#question li:nth-child(2), #question li:nth-child(4) { margin-right: 0; }
#question li:nth-child(3), #question li:nth-child(3) { margin-bottom: 0; }
#question span { display: block; text-align: center; width: 300px; }
#question span.blink { display: inline !important; }
#question input[type=radio] { display: none; } */

#answer { display: none; }
#answer p:first-child { padding-top: 15px; }
#buttons .next { display: none; }
img.next-toggle { display: none; }
/* span.checked { color: #17a761; -webkit-transition: all .3s ease; }
span.unchecked { color: #000; -webkit-transition: all .3s ease; }
img.grayscale { border: 4px solid transparent; -webkit-transition: all .3s ease; Fade to color for Chrome and Safari -webkit-backface-visibility: hidden; Fix for transition flickering }
img.grayscale-off { border: 4px solid #17a761; -webkit-transition: all .3s ease; Fade to color for Chrome and Safari } */
    <?php if ($language == 'es_ES') : ?>
    <?php endif; ?>        
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 50px; }
		#answer p:first-child {
		    padding-top: 50px;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
    @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
    	h1, #screen2, #screen3, #screen4 { padding-top: 60px !important; }	
   	}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _('Checking what you know... about changing life forms'); ?></h1>
				<h2><?php echo _("Which of the following statements <span class='blink'>best</span> describes an adaptation?"); ?></h2>
				<section>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li>
								<input id="a" name="q" type="checkbox">
								<label for="a"><span>A. <?php echo _("Adaptations are learned behaviors that help animals survive and reproduce."); ?></span></label>
							</li>
							<li>
								<input id="b" name="q" type="checkbox">
								<label for="b"><span>B. <?php echo _("Adaptations are inherited characteristics that make organisms more likely to survive and reproduce."); ?></span></label>
							</li>
							<li>
								<input id="c" name="q" type="checkbox">
								<label for="c"><span>C. <?php echo _("Adaptations result from animal mutations that occur in response to rapidly changing environments."); ?></span></label>
							</li>
							<li>
								<input id="d" name="q" type="checkbox">
								<label for="d"><span>D. <?php echo _("Adaptations are rare and only occur in animals found in tropical rain forests."); ?></span></label>
							</li>
						<ol>
					</form>
				</section>
				<!-- <ul>
					<li><label for="a"><img class="grayscale" src="images/3/a.jpg"></label><input type="radio" id="a" name="q"><span>Parrots learn to say phrases by imitating people.</span></li>
					<li><label for="b"><img class="grayscale" src="images/3/b.jpg"></label><input type="radio" id="b" name="q"><span>Polar bears have hollow fur to keep them warm.</span></li>
					<li><label for="c"><img class="grayscale" src="images/3/c.jpg"></label><input type="radio" id="c" name="q"><span>A tropical rainforest is cleared by fire.</span></li>
					<li><label for="d"><img class="grayscale" src="images/3/d.jpg"></label><input type="radio" id="d" name="q"><span>Rice fields are harvested at the end of a growing season.</span></li>
				</ul> -->
			</div>

			<div id="answer">
				<!-- <p>Parrots learning to say phrases is not an adaptation because the learning isn’t inherited. Polar bears’ fur is an important adaptation. The rainforest clearing is only temporary.  The harvest of rice fields happen every year. Continue to read on about adaptations and natural selection.</p> -->
				<p><?php echo _("Adaptations are inherited characteristics that help all organisms survive and reproduce. They are the result of random mutations to DNA. A mutation may cause no change; or be harmful, neutral, or beneficial. If it ever becomes important for survival, the change is called an adaptation."); ?></p>
				<!-- <ul>
					<li><label for="a"><img class="grayscale" src="images/3/a.jpg"></label></li>
					<li><label for="b"><img class="grayscale" src="images/3/b.jpg"></label></li>
					<li><label for="c"><img class="grayscale" src="images/3/c.jpg"></label></li>
					<li><label for="d"><img class="grayscale" src="images/3/d.jpg"></label></li>
				</ul> -->
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Cuddling bears..."); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2;
	var a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	a.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');
	});

	b.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');
	});

	c.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');

		d.parent().find('img').removeClass().addClass('grayscale');
		d.parent().find('span').removeClass().addClass('unchecked');
	});

	d.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');

		b.parent().find('img').removeClass().addClass('grayscale');
		b.parent().find('span').removeClass().addClass('unchecked');

		c.parent().find('img').removeClass().addClass('grayscale');
		c.parent().find('span').removeClass().addClass('unchecked');

		a.parent().find('img').removeClass().addClass('grayscale');
		a.parent().find('span').removeClass().addClass('unchecked');
	});

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				//$('.wrap').css('border-color', '#4291d3');
				$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });
				$('a.check-toggle').fadeOut( function(){ $('a.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
				$('#question').fadeIn();
				$('a.back-toggle').fadeIn();
				$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
			}
		});
	}

	$('a.check-toggle').click(function(){
		var checkAnswer = $('input:checkbox:checked').length;

		if(checkAnswer == '')
		{
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('#question').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				//$('.wrap').css('border-color', '#4291d3');
				$('#answer').fadeIn();
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				window.location.hash = '#answer';
			});
		}
	});

	$('a.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
				$('#question').fadeIn();
				$('a.back-toggle').fadeIn();
				$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
				window.location.hash = '';
			});
		} else {
			$('a.back-toggle').attr('href','2.php');
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
