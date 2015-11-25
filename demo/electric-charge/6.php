<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/captionHoverEffects.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
		h1 { color: #00bcd8; }

		<?php if ($language == 'ar_EG'): ?>
			#nl-form p { float: right !important; }
			table tr td p { margin-right: 50px !important; }
			table tr:first-child td p, table tr:last-child td p { margin-right: 10px !important }
		<?php endif; ?>
				
		.wrap { border-color: #C862CC; }
		.bg { background-image: url(assets/6/bg.jpg); }

		.sc1-images { text-align: center; clear: both; }
		.sc1-images img { width: auto; padding: 0 15px; }

		#screen3 img { margin-top: 0px; float: none; }
		#screen2, #screen3 { display: none; }
		#buttons .next { display: none; }
		
		#nl-form {
			position: absolute;
			top: 30px;
			left: 75px;
		}
		#nl-form a { border-bottom: 0; background-color: #0090FF; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #0090FF; }
		.nl-field li { color: #fff; font-size: 18px; }
		.nl-dd ul li.nl-dd-checked { background-color: #0090FF; color: #8200D4; }	

		#nl-form p{font-size: 19px; line-height: 15px; margin:3px; padding: 0px;}
		#nl-form .nl-field-toggle{font-size: 18px;}
		.ml_25{margin-left: -24px !important;}
		.select-bg p{text-align:left !important;}
		.mt43{margin-top: 30px;}

		#lng_img {height: 350px; width: 200px;  }
		#shrt_img {height: 350px; width: 300px; }

		.caption { position: absolute; 
			bottom: -45px; z-index: 2; 
			width:281px;
			font-size: 20px;
			margin-left: 128px; 
			color: #000;
		}
		.grid { width: 850px; height: auto; margin-top: 20px !important; padding: 0; clear: both;}
		.grid li { float: left; width: 250px; padding: 25px; margin-top: -25px; }
		.grid a { display: none !important; }
		.grid figcaption { padding: 10px; background-color: #7A6362; height: auto; color: #fff; margin-left:146px;
			margin-top: 50px;}
		.grid figcaption span { font-size: 18px;}
		.caption { font-size: 18px; background-color: #000 .6; }
		
		@media only screen and (max-width: 1250px){
			img.bimage {
			    width: 24% !important;
			}
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			.select-bg img { width: 300px; }
			#screen2 p.grid_8 { width: 57%; }
		}
		.image-container { text-align: center; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... electric charge"); ?></h1>
						<p class="grid_12"><?php echo _("Neutral objects can gain or lose electrons in a variety of ways. One of the most common is through contact with other materials. Depending on the material an object is made out of, it may either take electrons from other objects, or it might tend to give electrons to other objects. For example, when a balloon is rubbed on human hair, the balloon tends to take electrons from the hair. This leaves the balloon with a negative charge and the hair with a positive charge. This is similar to the way in which you can charge up by shuffling your feet across a carpeted floor, or charge a comb by rubbing it with a silk cloth."); ?></p>
						<div class="sc1-images">
							<img class="bimage" src="assets/6/6a.png" alt="Baby Images">
							<img class="bimage" src="assets/6/6b.png" alt="Baby Images">
						</div>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_8"><?php echo _("The type of charge an object will take can be determined by consulting a chart called the <span class = 'key'>triboelectric series</span>.  This chart identifies materials by their tendency to either lose electrons or gain electrons, in comparison to other materials.  An object listed near the top of the chart at right tends to lose electrons and become positively charged.  A material listed near the bottom of the chart is more likely to gain electrons and become negatively charged.  For example, if you rubbed a nylon rod with a polyester cloth, the nylon would lose electrons to the polyester resulting in a positive charge for the nylon rod and a negative charge for the polyester.  However, if a neutral piece of polyester was rubbed on a vinyl rod, the polyester would become positively charged, and the vinyl would be negatively charged.  This is because vinyl is located closer to the negative end of the chart and polyester is relatively closer to the positive end."); ?></p>
						<div class="grid_4 select-bg">
							<img src="assets/6/charge-bg.jpg">
							<form id="nl-form" class="nl-form">
								<table>
									<tr>
										<td><p class="ml_25"><?php echo _("+ POSITIVE CHARGE"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Air"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Human body"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Glass"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Human hair") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Nylon") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Wool"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Aluminum"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Paper") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Cotton"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Iron") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Wood") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Hard rubber"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Nickel copper"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Brass silver"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Gold platinum"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Artificial silk") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polystyrene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyester"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyurethane"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyethylene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polypropylene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("PVC(vinyl)"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Silicon"); ?></p></td>
									</tr>
									<tr>
										<td><p class="ml_25"><?php echo _("- NEGATIVE CHARGE"); ?></p></td>
									</tr>
								</table>
								<div class="nl-overlay"></div>
							</form>
						</div>
					</div>
					
					<div id="screen3" class="screen">
						<p class="grid_12"><?php echo _("Neutral objects can also gain or lose electrons by coming into contact with a charged object. A Van de Graaff generator can be used for this type of charging. Upon turning on the Van de Graaff generator, electrons tend to flow off of the large metal dome, leaving it positively charged. By touching other objects to the metal dome, they too can become positively charged. You may have seen images like the one below of a person's hair standing on end. By touching a Van de Graaff generator, the person, and every hair on their head, becomes positively charged, too! This type of charging by coming into contact with a charged object is called <span class='key'>conduction</span>."); ?></p>
						<div class="image-container">
							<img id = "lng_img" src="assets/6/6c1.jpg" alt="Generator" class="grid_5">
							<img id = "shrt_img" src="assets/6/6c2.JPG" alt="Touch Generator" class="grid_5">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Checking Van de Graaff generator..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>

		$(document).ready(function() {
		
			$('img.thumb').click(function() {
				$('#popup').fadeIn();
			});
			$('#close').click(function() {
				$('#popup').fadeOut();
			});
		});

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
				document.location.href = "5.php";
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

	<script src="js/jpreloader.js"></script>

	<script src="js/jquery.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
