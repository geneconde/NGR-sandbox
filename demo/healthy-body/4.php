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
h1 { color: #ff4261; }
.wrap { border-left: 1px dashed #fde0a1; border-right: 1px dashed #fde0a1; }
.bg { background: url('images/4/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#screen1 { overflow: hidden; }

#screen2 { display: none; text-align: center; }
#screen2 img { margin-top: 10px; background: rgba(0, 0, 0, .1); padding: 6px; display: inline-block; }
#screen2 p { padding-top: 10px; font-size: 22px; text-align: left; }
#slide { background: #64849c; padding: 10px; width: 500px; height: 300px; margin: 25px auto 0; border-radius: 10px; }
#slide .arrows { position: relative; }
#slide .arrows a { position: absolute; width: 71px; text-indent: -9999px; height: 53px; margin-top: 120px; }
#slide .arrows a.left { background: url(images/4/left.png) no-repeat; left: -75px; }
#slide .arrows a.right { background: url(images/4/right.png) no-repeat; right: -75px; }
#slide .data { text-align: center; }
#slide .data img { text-align: center; }
#slide .data p { font-size: 24px; padding: 6px 15px 6px 15px; width: 681px !important; }
#slide #s1 p { font-size: 18px !important; }
#slide #s2 p { font-size: 20px !important; }
#buttons .next { display: none; }
html[dir="rtl"] #screen2 p {text-align: right;}
</style>
</head>
<body>
<div class="wrap" >
		<div class="bg">
			<div>
				<div id="screen1" class="screens">
					<h1><?php echo _("Reviewing big ideas... about a healthy body"); ?></h1>
					<p><?php echo _("The human body is made up of trillions of independent <span class='key'>cells</span>. Each cell is alive; it requires resources, and produces waste. We have hundreds of different types of cell, each specialized for its own functions. When many copies of the same cell type are gathered together, they are known as <span class='key'>tissue</span>. The body also contains many types of tissue. Some examples of cell and tissue types include muscle, bone, nervous, and skin."); ?></p>

					<div id="slide">
						<div class="arrows">
							<a href="#" class="left" id="left">&laquo;</a>
							<a href="#" class="right" id="right">&raquo;</a>
						</div>

						<div id="s1" class="data"><img src="images/4/s1.jpg"></div>
						<div id="s2" class="data"><img src="images/4/s2.jpg"></div>
						<div id="s3" class="data"><img src="images/4/s3.jpg"></div>
						<div id="s4" class="data"><img src="images/4/s4.jpg"></div>
					</div>

				</div>
				<div id="screen2" class="screens">
					<p><?php echo _("<span class='key'>Organs</span> are groups of tissues combined together to perform the body's major functions. When we talk about such systems as the circulatory or digestive system, we are actually talking about groups of organs working together."); ?></p>

					<p><?php echo _("Organs work together to make up a <span class='key'>body system</span>. Our skeleton supports us. Our muscles move us. Our skin and hair protect us. Our digestive system takes nutrients from our food. Our nervous system transmits information around our bodies. Our respiratory system brings in the oxygen we need to survive. Our circulatory system pumps blood. Our immune system fights disease. And our reproductive system produces the babies that keep our families going from generation to generation."); ?></p>

					<img src="images/4/organs.png">
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
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
				document.location.href = "3.php";
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
