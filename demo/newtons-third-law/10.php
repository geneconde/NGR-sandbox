<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
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
		h1 { color: #2e9ac7; }
		
		.wrap { border-color: #24A8C2; }
		.bg { background-image: url(assets/10/bg.jpg); }

		#screen2 { display: none; }

		#buttons .next { display: none; }
		
		<?php if($language == 'es_ES'){ ?>
			#screen1 p { font-size: 23px ; }
		<?php }else{ ?>
			#screen1 p { font-size: 24px ; }
		<?php } ?> 
		#screen2 img {float: left; width: 31%; height: 210px;}
		@media screen and (max-width: 1250px){
			#screen1 p { font-size: 22px; }
		}
		<?php if($language == 'es_ES'){ ?>
			@media screen and (max-width: 880px ){
				#screen1 p{ margin-top: 5px; margin-bottom: 5px; font-size: 20px;}
			}
		<?php } ?>
		<?php if($language == 'zh_CN'){ ?>
			@media screen and (max-width: 880px ){
				#screen1 p{ margin-top: 5px; margin-bottom: 5px; font-size: 20px;}
				#screen1 h1 {font-size: 28px;}
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
					<h1 class="grid_12"><?php echo _("More big ideas about... Newton's Third Law"); ?></h1>
						<p class="grid_7"><?php echo _("Forces are paired for moving objects, too! In order for you to be able to walk down the hallway at school, your feet push backwards on the floor while the floor pushes forward on you. When a bicyclist skids to a stop, the road puts a force on the bike, but the bike also puts a force on the road. In an elevator, the floor pushes upwards on you while you push downwards on it."); ?></p>
						<img src="assets/10/10a.jpg" alt="Images" class="grid_5" />
						<p class="grid_7"><?php echo _("It can be difficult to get a car moving on a snowy road. The slippery snow can make it difficult for the car to push against the road with enough force to start moving without spinning the tires. It's also difficult to get a moving car to stop suddenly in those conditions!"); ?></p>
						<img src="assets/10/10b.jpg" alt="Images" class="grid_5" />	
					</div>

					<div id="screen2" class="screen">
						<p class="grid_8"><?php echo _("For a helicopter to move, the blades on the helicopter push down on the air, and the air pushes up on the helicopter. By changing the amount of force, the helicopter can move up, down, or just hover in place. In this picture, you can see how the air pushed down by the blades on the helicopter ends up making waves in the water."); ?></p>
						<img src="assets/10/10c.jpg" alt="Images" class="grid_5" />
						<p class="grid_8"><?php echo _("Did you know that people used to be skeptical about the ability to launch rockets into space beyond the earth's atmosphere? They were concerned that the lack of air would make it impossible for the rockets to exert forces in order to control their orbital paths. It turns out that rockets take advantage of Newton's Third Law force pairs by pushing the burning rocket fuel backwards. The other part of that force pair is the force of the burning rocket fuel pushing forward on the rocket, allowing the rocket to change its motion."); ?></p>
						<img src="assets/10/10d.jpg" alt="Images" class="grid_5" />	
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Pushing forward..."); ?></strong></section></section>

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
				document.location.href = "9.php";
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
