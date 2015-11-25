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

	<title><?php echo _("Newton's Third Law"); ?></title>

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
		h1 { color: #313bff; }
		#ph1 {font-size: 24px;}
		.wrap { border-color: #C9C117; }
		.bg { background-image: url(assets/4/bg.jpg); }
		<?php if($language  == 'es_ES'){ ?> 
			#screen1 h1{font-size: 32px;}
			#screen1 p{ margin: 5px 0 ; font-size: 22px;}
		<?php } ?>
		img.auto { width: auto; height: 300px; margin-top: -5px;}
		#screen2 { display: none; }
		#secImg { width: auto; height: 350px; margin-top: -5px;}
		#buttons .next { display: none; }
		.ta-center{text-align:center;}
		<?php if($language  == 'es_ES'){ ?>
		@media screen and (max-width: 1250px){
			#screen1 p{ margin: 5px 0 ; font-size: 22px;}
			#screen1 h1{ font-size: 30px;}
			#screen1 img { width: 40%; height: auto; }
			#screen2 img { width: 40%; height: auto; }

		}
		
		<?php }else{ ?>
		@media screen and (max-width: 1250px){
			#screen1 p{ margin: 5px 0 ;}
			#screen1 img { width: 40%; height: auto; }
			#screen2 img { width: 40%; height: auto; }
		}
		<?php } ?>

		@media screen and (max-width: 1250px){
			#ph1 {
			  left: 9px !important;
			}
		}

		<?php if($language  == 'ar_EG'){ ?>
			#ph1 {
			  	right: 9px !important;
			}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">


					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... Newton's Third Law"); ?></h1>
						<p id = "ph1" class="grid_12"><?php echo _("<span class='key'>Forces</span> are most easily thought of as a push or a pull, but objects don’t need to be in motion in order to be experiencing forces. Even when objects are sitting perfectly still, they are likely to be experiencing forces from any other objects that they are in contact with. Contact between objects is one of the clearest indicators that forces are present. Look at the interaction between the boys and the trampoline in the image below. Not only are the boys experiencing a force from the trampoline, keeping them from falling to the ground, but the trampoline is experiencing a force from the boys, causing it to stretch underneath them."); ?></p>
						<div class="grid_12 ta-center">
							<img src="assets/4/4b.jpg" class="auto"/>	
						</div>							
					</div>

					<div id="screen2" class="screen">
						<p id = "ph1" class="grid_12"><?php echo _("Although we don't notice it quite so easily, a similar interaction is occurring between this flower pot and table. The table is preventing the flower pot from crashing into the ground below, and the flower pot is causing the boards in the table to bend ever so slightly underneath it."); ?></p>
						<div class="grid_12 ta-center" >
							<img src="assets/4/4a.jpg" class="auto" id = "secImg"/>
						</div>
						<div class="clear"></div>
						<p id = "ph1" class="grid_12"><?php echo _("This idea that any time objects are interacting with each other, they exert paired forces on one another is known as <span class='key'>Newton's Third Law</span> of motion. The discovery of this law is credited to Sir Isaac Newton, a well-known physicist from 17th century England."); ?></p>			
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Jumping on trampoline..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
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
