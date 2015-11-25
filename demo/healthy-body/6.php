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
<link rel="stylesheet" type="text/css" href="styles/bookblock.css" />
<link rel="stylesheet" type="text/css" href="styles/demo1.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<style>
.wrap { border-left: 1px dashed #afdbfd; border-right: 1px dashed #afdbfd; }
.bg { background: url('images/6/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#screen1 ul { list-style: none; padding: 0; }
#screen1 li { margin: 0 auto; padding: 5px 0; position: relative; }
#screen1 label { display: inline-block; position: relative; font-size: 20px; padding: 0 0 0 40px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#screen1 input[type="radio"], #screen1 label::before{ width: 30px; height: 30px; top: 50%; left: 0; margin-top: -15px; position: absolute; cursor: pointer; }
#screen1 input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; } 
#screen1 label::before { content: ''; background: url(images/6/buttons.png) left top no-repeat; width: 30px; height: 30px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#screen1 input[type="radio"]:checked + label { color: #000; } 
#screen1 input[type="radio"]:checked + label::before { background-position: left bottom; }
#screen1 .placeholder { overflow: hidden; margin-bottom: 20px; margin: 20px auto 0; width: 640px; }
#screen1 .placeholder:last-child { margin-bottom: 0; }
#screen1 .placeholder ul { float: left; }
#screen1 .placeholder li { padding: 8px 0; }
#screen1 .placeholder .image { width: 300px; float: right; margin-right: 40px; }
#screen1 .placeholder .image img { background: rgba(0, 0, 0, .1); padding: 6px; }
#screen1 { overflow: hidden; }
#screen2 { display: none; text-align: center; padding-top: 10px; }
#screen2 .placeholder { width: 400px; background: rgba(0, 0, 0, .1); padding: 6px; margin-left: 220px; margin-top: 20px; border-radius: 5px; }
img.next-toggle { display: none; }
#nutrition { width: 100%; }

<?php if($language == "es_ES") { ?>
	p { font-size: 21px; }
<?php } ?>
html[dir="rtl"] #screen1 label::before {right:0;} 
html[dir="rtl"] #screen1 label {padding: 0 40px 0 0 ;}
html[dir="rtl"] #screen2 .placeholder { margin: 20px auto; }

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about a healthy body"); ?></h1>
				<p><?php echo _("Human beings are living things, made of cells. They use energy to move, grow, and respond to stimuli. They must be able to breathe, circulate blood, and reproduce. That's a lot for one body to do. It all works because the body's cells all work together. Each cell type has special jobs and chores. Similar cells are organized into tissues. Cells with the same function combine to form organs. If one of them stops working, the body can't run smoothly. Let's take a closer look at a few organs."); ?></p>

				<div class="placeholder">
					<ul>						
						<li><input id="a" name="q1" type="radio" checked><label for="a"><?php echo _("Move"); ?></label></li>
						<li><input id="b" name="q2" type="radio"><label for="b"><?php echo _("Respire (Exchange of gases)"); ?></label></li>
						<li><input id="c" name="q3" type="radio"><label for="c"><?php echo _("Sense and respond to change"); ?></label></li>
						<li><input id="d" name="q4" type="radio"><label for="d"><?php echo _("Nutrition for energy"); ?></label></li>
						<li><input id="e" name="q5" type="radio"><label for="e"><?php echo _("Excrete waste"); ?></label></li>
						<li><input id="f" name="q6" type="radio"><label for="f"><?php echo _("Reproduce"); ?></label></li>
						<!-- <li><input id="g" name="q7" type="radio"><label for="g"><?php echo _("Grow and develop"); ?></label></li> -->
					</ul>
					<div class="image">
						<img src="images/6/move.png" id="move">
						<img src="images/6/respire.png" id="respire" class="hidden">
						<img src="images/6/sense.png" id="sense" class="hidden">
						<img src="images/6/nutrition.png" id="nutrition" class="hidden">
						<img src="images/6/excrete.png" id="excrete" class="hidden">
						<img src="images/6/reproduce.png" id="reproduce" class="hidden">
						<img src="images/6/grow.png" id="grow" class="hidden">
					</div>
				</div>

			</div>
			<div id="screen2" class="screens">
				<p><?php echo _("Your heart, lungs, kidneys, and intestines are all important organs. But they are not the only organs that help keep our body healthy. Skin is the human body's largest organ. It protects the bones and organs inside our bodies, as well as protecting our bodies from outside diseases. Skin allows you to feel and react to heat and cold and regulates your body heat. Your nose is an organ that helps you breathe. Even the hairs in your nose have important functions. They add moisture, adjust air temperature, and filter out germs, dust, and even insects. The nervous system receives information from other body systems. That information is processed in the brain, which sometimes sends action signals back to other organ systems."); ?></p>

				<div class="placeholder">
					<ul class="rslides">
					  <li><img src="images/6/s1.jpg"></li>
					  <li><img src="images/6/s2.jpg"></li>
					</ul>
				</div>
			</div>
			<div id="screen3" class="screens">
			
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="7.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Cells working together"); ?></strong></section></section>
	<script>

	$(".rslides").responsiveSlides();

	var a = $('#a'),
		b = $('#b'),
		c = $('#c'),
		d = $('#d'),
		e = $('#e'),
		f = $('#f'),
		g = $('#g')
		move = $('#move'),
		respire = $('#respire'),
		sense = $('#sense'),
		nutrition = $('#nutrition'),
		excrete = $('#excrete'),
		reproduce = $('#reproduce'),
		grow = $('#grow');

	$('#screen1').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a') {
			move.removeClass(function() { 
				respire.addClass('hidden'); 
				sense.addClass('hidden'); 
				nutrition.addClass('hidden'); 
				excrete.addClass('hidden'); 
				reproduce.addClass('hidden'); 
				grow.addClass('hidden'); 
			});

			b.prop('checked', false);
			c.prop('checked', false);
			d.prop('checked', false);
			e.prop('checked', false);
			f.prop('checked', false);
			g.prop('checked', false);
		}

		if (me == 'b') {
			respire.removeClass(function() { 
				move.addClass('hidden'); 
				sense.addClass('hidden'); 
				nutrition.addClass('hidden'); 
				excrete.addClass('hidden'); 
				reproduce.addClass('hidden'); 
				grow.addClass('hidden'); 
			});

			a.prop('checked', false);
			c.prop('checked', false);
			d.prop('checked', false);
			e.prop('checked', false);
			f.prop('checked', false);
			g.prop('checked', false);
		}

		if (me == 'c') {
			sense.removeClass(function() { 
				move.addClass('hidden'); 
				respire.addClass('hidden'); 
				nutrition.addClass('hidden'); 
				excrete.addClass('hidden'); 
				reproduce.addClass('hidden'); 
				grow.addClass('hidden'); 
			});

			a.prop('checked', false);
			b.prop('checked', false);
			d.prop('checked', false);
			e.prop('checked', false);
			f.prop('checked', false);
			g.prop('checked', false);
		}

		if (me == 'd') {
			nutrition.removeClass(function() { 
				move.addClass('hidden'); 
				respire.addClass('hidden'); 
				sense.addClass('hidden'); 
				excrete.addClass('hidden'); 
				reproduce.addClass('hidden'); 
				grow.addClass('hidden'); 
			});

			a.prop('checked', false);
			b.prop('checked', false);
			c.prop('checked', false);
			e.prop('checked', false);
			f.prop('checked', false);
			g.prop('checked', false);
		}

		if (me == 'e') {
			excrete.removeClass(function() { 
				move.addClass('hidden'); 
				respire.addClass('hidden'); 
				sense.addClass('hidden'); 
				nutrition.addClass('hidden'); 
				reproduce.addClass('hidden'); 
				grow.addClass('hidden'); 
			});

			a.prop('checked', false);
			b.prop('checked', false);
			c.prop('checked', false);
			d.prop('checked', false);
			f.prop('checked', false);
			g.prop('checked', false);
		}

		if (me == 'f') {
			reproduce.removeClass(function() { 
				move.addClass('hidden'); 
				respire.addClass('hidden'); 
				sense.addClass('hidden'); 
				nutrition.addClass('hidden'); 
				excrete.addClass('hidden'); 
				grow.addClass('hidden'); 
			});

			a.prop('checked', false);
			b.prop('checked', false);
			c.prop('checked', false);
			d.prop('checked', false);
			e.prop('checked', false);
			g.prop('checked', false);
		}

		if (me == 'g') {
			grow.removeClass(function() { 
				move.addClass('hidden'); 
				respire.addClass('hidden'); 
				sense.addClass('hidden'); 
				nutrition.addClass('hidden'); 
				excrete.addClass('hidden'); 
				reproduce.addClass('hidden'); 
			});

			a.prop('checked', false);
			b.prop('checked', false);
			c.prop('checked', false);
			d.prop('checked', false);
			e.prop('checked', false);
			f.prop('checked', false);
		}
	});

	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 2; // set number of screens here
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				$('h1').fadeOut();
				if(screen < screenCount) {
					$('img.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('img.readmore-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		/* Back Transition - change to the corresponding number of screens */
		$('img.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if($('#screen2').is(':visible')) {
				$('img.next-toggle').fadeOut(function() { $('img.readmore-toggle').fadeIn(); });
				$('#screen2').fadeOut(function (){
					$('h1').fadeIn();
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			}
		});

		/* Read More Screen Transition */
		$('img.readmore-toggle').click(function(){
			$('img.readmore-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('h1').fadeOut();
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		});
	});

    $(".rslides").responsiveSlides();
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
