<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
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
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>

		@media only screen and (max-width: 1250px){
			h1 {
			    padding-top: 38px !important;
			    font-size: 32px !important;
			    right: 11px !important;
			}
			#screen1 p, #screen2 p {
			    font-size: 22px !important;
			}
			#popup img {
			    width: 80% !important;
			    display: block !important;
			    height: 85% !important;
			    padding-top: 32px !important;
			}
			#close {
			    width: 12% !important;
			}
			#close {
			    padding: 3px !important;
			    margin-top: -5px !important;
			}
			p {
			    margin: 0px 0 !important;
			}
		}
		<?php if ($language == 'ar_EG') : ?>
		#close {
		    width: 110px !important;
		}
		#screen1 img { margin-left: 5px; }
		<?php endif; ?>
		h1 { color: #adaf00; }
		.wrap { border-color: #D8B21D; }
		.bg { background-image: url(assets/4/bg.jpg); }

		#screen1 p { font-size: 23px; }
		#screen1 img { width: auto; float :right; }

		#screen2 { display: none; }

		#popup { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#popup img { width: 77%; display: block; }
		.thumb:hover {cursor: pointer;}
		.click { text-align: center; font-size:22px; }
		#close { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
		#close:hover { cursor: pointer; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="popup" >
				<img src="assets/4/periodic.jpg" alt="Periodic Table"/>
				<span id="close"><?php echo _('Close me!'); ?></span>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... electric charge"); ?></h1>

						<p class="grid_12"><img src="assets/4/4a.png" alt="Image Illustration" /><?php echo _("All of the objects that we encounter in everyday life are made up of matter. Matter consists of really small particles called atoms, and those atoms are made up of even smaller particles called <span class='key'>protons</span>, <span class='key'>neutrons</span> and <span class='key'>electrons</span>. Protons carry a positive charge, and electrons carry a negative charge while neutrons carry no charge. There are more protons in the fingernail on your pinky than there are people on the Earth. However high that number may be, there are most likely the exact same number of electrons in that fingernail. Most objects have an equal number of protons and electrons. In other words, most objects are <span class='key'>electrically neutral</span>. Scientists have been studying electricity for far longer than they have known about the atomic particles. That's why they first came up with the terms positive charge and negative charge to describe what we now know as protons and electrons. If an object contains more electrons than protons, the object is said to be negatively charged. If an object contains more protons than electrons, it is said to be positively charged."); ?></p>
					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("It turns out that it is relatively easy to change the number of electrons in an object, but extremely difficult to change the number of protons. For this reason, objects typically become charged because they've either gained electrons from some other object, or they've lost electrons to some other object. Scientists refer to a gain of electrons as becoming <span class='key'>negatively charged</span>, and a loss of electrons as becoming <span class='key'>positively charged</span>.  Gaining or losing protons is a much more involved process, and would mean that the material had actually changed to a different element, like turning Oxygen into Carbon."); ?></p>
						<div class="grid_4 prefix_4 suffix_4">
							<img src="assets/4/thumb.jpg" alt="Periodic Table" class="thumb"/>
							<p class="click"><?php echo _('Click the image to view.'); ?></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Carrying positive charge..."); ?></strong></section></section>

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

		if (hash != "") {
			$('.screen').hide();
			$('#screen2').show();

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
		}
		
		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} 
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() {
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
