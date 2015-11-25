<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(10, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #d4137e; }
		p { font-size: 23px; }
		.wrap { border-color: #643D40;}
		.bg { background-image: url(assets/10/bg.jpg); }
		img {width: 100%; }

		#screen1 img {border:2px solid #c16202;}
		#screen1 .grid_6 { float: right; }
		#screen1 h1 {margin: 0;}
		#screen2, #screen3, #buttons .next { display: none; }
		#screen2 > div > div> p {text-align: center;}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id = "screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... electric circuits"); ?></h1>

						<div class="grid_6 ">
							<img src="assets/10/10a.png"/>
						</div>
						
						<p class="text-justify"><?php echo _("The ultimate objective of an electric circuit is to power some electrical device – like a light, or a motor, or a buzzer. Let’s just look at a light bulb for now. The usual light bulb most people have in their houses is called an <span class='key'>incandescent bulb</span> – incandescent means it lights up from getting hot.  As we discussed in the beginning of this review, the electrons, or electric current, comes out of one end of the battery, flows through the wire to the side of the bulb, then through the bulb making the bulb light up, then out the bottom of the bulb and through the wire back to the battery. When we say \"through the bulb\", we mean that the electric current flows through the thin, curly little wire in the bulb, called the <span class='key'>filament</span>."); ?></p>

					</div>
					<div  id = "screen2" class="screen">
						<p><?php echo _("It’s hard to see how the connections are made from the circuit to the filament in most light bulbs because part of the filament wire is \"hidden\" in the metal base of the bulb – the \"screw-in\" part (Figure 1). But if you could see through the metal, you'd see that one part of the filament wire is connected to the bump on the bottom of the bulb and the other to the metal side of the screw-in part of the bulb (Figure 2)."); ?></p>
						<div class="grid_6 prefix_3 suffix_3">
							<div class="grid_6">
								<p><?php echo _("Figure 1"); ?></p>
							</div>
							<div class="grid_6">
								<p><?php echo _("Figure 2"); ?></p>
							</div>
							<img class="grid_12" src="assets/10/10b.png"/>
						</div>
					</div> 
					<div  id = "screen3" class="screen">
						<p class="grid_8">
							<?php echo _("When the circuit is complete and the current runs through the filament, the <span class='key'>friction</span> or rubbing together of the electrons passing through the skinny wire of the filament causes so much friction in the wire that the wire heats up and it starts to glow and give off light. That's how a light bulb works. Try rubbing your hands together really hard and fast. Do you feel them heat up? That heat is caused by the friction of rubbing your hands together. Do you think you could rub them together hard enough to get them to glow?"); ?>
						</p>
						<img class="grid_4" src="assets/10/10c.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Flowing electric current..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 3;

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "9.php";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {

				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function() {
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
				});
			}
		});
	</script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
