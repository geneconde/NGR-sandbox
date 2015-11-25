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

	<title><?php echo _("Motion"); ?></title>

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
		img#football {
		    height: 250px !important;
		}
		h1 { color: #eb7100; }
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/4/bg.jpg); }

		#screen2, #screen3, #screen4 { display: none; }

		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... motion"); ?></h1>
						<p class="grid_12">
							<?php echo _("Since all motion is relative, an important part of the description of any object's motion is the frame of reference. Usually, the <span class=key>frame of reference</span> is based on the immediate surroundings. For a football game, the frame of reference might be the lines on the field. They mark the <span class=key>position</span> of the players and the ball as they move from one end to the other. They provide specific information on the location of the objects. Without the markings on the field, it would be difficult to know when a team has made a first down or scored a touchdown.  The lines of the field help the referees and players to know where they are and where they are going."); ?>
						</p>
						<div class="grid_6">
							<img id="football" src="assets/4/a.jpg" alt="soccer1">
						</div>
						<div class="grid_6">
							<img id="football" src="assets/4/b.jpg" alt="soccer2">
						</div>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12">
							<?php echo _("Another frame of reference might be your neighborhood. Giving directions to a new neighbor might include references to specific landmarks, like a bank, or the post office, or your school! Similarly, compass directions allow us to be specific when giving directions to someone else. Saying that the new store is two miles East of the school is more helpful than just saying that it is two miles away. Street signs can provide helpful reference points along the way!"); ?>
						</p>
						<div class="grid_6">
							<img src="assets/4/c.jpg" alt="soccer1">
						</div>
						<div class="grid_6">
							<img src="assets/4/d.jpg" alt="soccer2">
						</div>
					</div>

					<div id="screen3" class="screen">
						<p class="grid_12">
							<?php echo _("A helpful diagram for representing motion can be a <span class=key>motion map</span>. A motion map simply records where an object is located within the frame of reference. Consider the image below showing the location of the team on the field at the beginning of each play. Mapping the motion this way can allow you to see which team is faster at getting the ball from one end of the field to the other. In this image, the blue helmets are moving the ball by 15 yards each play, and the gold helmets are moving the ball by 25 yards each play. The bigger spaces between the images of the gold helmets means that they are moving the ball down the field faster."); ?>
						</p>
						<div class="prefix_2 grid_8">
							<img src="assets/4/e.jpg" alt="soccer1">
						</div>
					</div>

					<div id="screen4" class="screen">
						<p class="grid_12">
							<?php echo _("Stroboscopic photos show multiple images of a moving object in one picture, and can provide information about the motion of the object, just like a motion map. In this image, the ball is moving slowest at the top of the photo, and that’s why the images are so close together. The ball isn’t moving as far between images."); ?>
						</p>
						<div class="prefix_2 grid_8">
							<img src="assets/4/f.jpg" alt="soccer1">
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Playing football..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 4;

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
				document.location.href = "3.php";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if ($('#screen3').is(':visible')) {
				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else if($('#screen4').is(':visible')) {
				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen4').fadeOut(function () {
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
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
				$('#screen2').fadeOut(function() {
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
				});
			} else if ($('#screen3').is(':visible')) {
				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen3').fadeOut(function() {
					$('#screen4').fadeIn();

					window.location.hash = '#screen4';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
