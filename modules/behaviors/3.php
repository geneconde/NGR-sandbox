<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behaviors'); ?></title>
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
h1 { color: #1F7FB1; }
.wrap { border-color: #1980a7; }
.bg { background-image: url(images/3/bg.jpg); }

#question { overflow: hidden; }
#question ul { width: 100%; margin: 0 auto; overflow: hidden; padding-left: 0; list-style: none; }
#question ul:nth-child(2) { width:85%; margin:10px auto 0 auto; }
#question ul:nth-child(2) li { margin-right:25px; }
#question ul:nth-child(1) li:nth-child(3) { margin-right:0; }
#question ul:nth-child(2) li:nth-child(3) { margin-right:0; }
#question ul:nth-child(2) li img { width:220px; }
#question li { font-size: 24px;display: inline-block;margin-right:15px; }
#question li:nth-child(4) { margin-right:0; }
#question img { display: inline-block; width: 195px; border-radius: 10px; }
#question label { cursor: pointer; }
#question span { display: block; text-align: center; }
#question span.blink { display: inline !important; }
#question input[type=checkbox] { display: none; }

#question input[type="checkbox"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; border-radius: 10px !important;  }
#question input[type="checkbox"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #0C68B1; -webkit-backface-visibility: hidden; }
#question input[type="checkbox"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question input[type="checkbox"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #0C68B1; -webkit-backface-visibility: hidden;  ;}

#answer { display: none; }
#answer p:first-child { padding-top: 15px; }

img.next-toggle { display: none; }
<?php if($language == "es_ES") { ?>
	#question li { float:left; }
	#question span { font-size: 20px; }
<?php } ?>
html[dir="rtl"] #question ul {padding-right: 0;} 
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about behaviors"); ?></h1>
				<h2><?php echo _("Look at the behaviors listed below. Click on the ones you think you were able to do when you were born."); ?></h2>
				<section>
					<ul class="clear">
						<li>
							<input type="checkbox" id="a" name="q">
							<label for="a"><img class="grayscale" src="images/3/3a.jpg">
								<span><?php echo _("Ride a bicycle"); ?></span>
							</label>
							
						</li>
						<li>
							<input type="checkbox" id="b" name="q">
							<label for="b"><img class="grayscale" src="images/3/3b.jpg">
								<span><?php echo _("Breathe"); ?></span>
							</label>
							
						</li>
						<li>
							<input type="checkbox" id="c" name="q">
							<label for="c"><img class="grayscale" src="images/3/3c.jpg">
								<span><?php echo _("Read"); ?></span>
							</label>
							
						</li>
						<li>
							<input type="checkbox" id="d" name="q">
							<label for="d"><img class="grayscale" src="images/3/3d.jpg">
								<span><?php echo _("Tie your shoes"); ?></span>
							</label>
							
						</li>
					</ul>
					<ul>
						<li>
							<input type="checkbox" id="e" name="q">
							<label for="e"><img class="grayscale" src="images/3/3e.jpg">
								<span><?php echo _("Blink your eyes"); ?></span>
							</label>
							
						</li>
						<li>
							<input type="checkbox" id="f" name="q">
							<label for="f"><img class="grayscale" src="images/3/3f.jpg">
								<span><?php echo _("Remember"); ?></span>
							</label>
							
						</li>
						<li>
							<input type="checkbox" id="g" name="q">
							<label for="g"><img class="grayscale" src="images/3/3g.jpg">
								<span><?php echo _("Throw a ball"); ?></span>
							</label>
							
						</li>
					</ul>
				</section>
			</div>

			<div id="answer">
				<p><?php echo _("You were able to breathe, blink your eyes, and remember when you were born. No one actually taught you how to do those things. On the other hand, you had to learn how to tie your shoes, ride a bicycle, and throw a ball. How are these activities different? Continue with the module to find out."); ?></p>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _("Check Answer"); ?>"></a>
		<a href="4.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Breathing air..."); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2;
	var a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d'),
	e = $('#e'),
	f = $('#f'),
	g = $('#g');



	/*a.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');
	});

	b.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');
	});

	c.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');
	});

	d.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');
	});
	e.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');
	});	
	f.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');
	});	
	g.on('click', function() {
		$(this).parent().find('img').removeClass().addClass('grayscale-off');
		$(this).parent().find('span').removeClass().addClass('checked');
	});	*/	

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				$('.wrap').css('border-color', '#c7b8b3');
				$('#question').hide(100, function() { $('#answer').fadeIn(); });
				$('img.check-toggle').fadeOut( function(){ $('img.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#1980a7');
				$('#question').fadeIn();
				$('img.back-toggle').fadeIn();
				$('img.next-toggle').fadeOut(function(){$('img.check-toggle').fadeIn();});
			}
		});
	}

	$('img.check-toggle').click(function(){
		$('#question').fadeOut(function(){
			$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			$('.wrap').css('border-color', '#c7b8b3');
			$('#answer').fadeIn();
			$('img.check-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); });
			window.location.hash = '#answer';
		});
	});

	$('img.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#1980a7');
				$('#question').fadeIn();
				$('img.back-toggle').fadeIn();
				$('img.next-toggle').fadeOut(function(){$('img.check-toggle').fadeIn();});
				window.location.hash = '';
			});
		} else {
			$('img.back-toggle').parent().attr('href','2.php');
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
