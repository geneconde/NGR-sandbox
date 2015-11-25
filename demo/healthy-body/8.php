<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Healthy Body"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/cycle.js"></script>
<script src="scripts/global.js"></script>
<style>
.wrap { border-left: 1px dashed #fbe065; border-right: 1px dashed #fbe065; }
.bg { background: url('images/8/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }

#screen1 { overflow: hidden; text-align: center; }
#screen1 p { text-align: left; }
#screen1 img { display: inline-block; margin-top: 20px; background: rgba(0, 0, 0, .1); padding: 6px; }

#screen2 { display: none; text-align: center; }
#screen2 p { text-align: left; padding-top: 10px; }
#screen2 img { text-align: center; margin-top: 20px; background: rgba(0, 0, 0, .1); padding: 6px; }
#buttons .next { display: none; }

html[dir="rtl"] #screen1 p {text-align: right;}
html[dir="rtl"] #screen2 p {text-align: right;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about a healthy body"); ?></h1>
				<p><?php echo _("Your brain is in charge of most everything that you do. It doesn't work alone though. The brain is part of a system, the <span class='key'>nervous system</span>, one that works with the spinal cord and lots of nerves. Different kinds of nerves have different functions. <span class='key'>Sensory nerves</span> help us gather information about the world around us. When we see, hear, taste, touch, or smell, our sensory nerves carry that information to the brain. After the brain processes the information, <span class='key'>motor nerves</span> have the responsibility of passing on the messages the brain sends to the muscles all over the body."); ?></p>
				<img src="images/8/brain.png">
			</div>
			
			<div id="screen2" class="screens">
				<p><?php echo _("That might have been a lot of information for your brain to process. Let's say it in another way. We receive different types of information through our senses, then process them in our brain, and then our bodies respond to the information in different ways. For example, while we are walking and we see something in front of us, we move over so we do not bump into it. Let's look at that in slow motion. First, our eyes receive the information that an object may be in our way. Our brain processes this information and tells the body how to react and what to do about this possible danger. In this case it orders our legs to continue moving, but on a different path."); ?></p>
				<img src="images/8/b.gif">
			</div>
			<div id="screen3" class="screens">
			
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Passing on the messages..."); ?></strong></section></section>
	<script src="scripts/jquery.bookblock.js"></script>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here

	var left = $('#left'),
	right = $('#right'),
	slides = $('.data'),
	currentSlide = 1;

	slides.hide();

	$('#s' + currentSlide).show();

	right.on('click', function() {
			$('#s' + currentSlide).fadeOut();

			if (currentSlide != 5) currentSlide += 1;
			else currentSlide = 1; 

			$('#s' + currentSlide).delay(500).fadeIn();
		});

	left.on('click', function() {
		$('#s' + currentSlide).fadeOut();

		if (currentSlide != 1) currentSlide -= 1;
		else currentSlide = 5;

		$('#s' + currentSlide).delay(500).fadeIn();
	});

	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				$('h1').fadeOut();
				if(screen < screenCount) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "7.php";
			} else if($('#screen2').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
				$('#screen2').fadeOut(function (){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			}
		});

		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('h1').fadeOut();
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		});
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
