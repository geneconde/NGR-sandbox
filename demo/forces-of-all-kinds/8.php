<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Forces of all Kinds"); ?></title>

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
		h1 { color: #34678a; margin-left: 0px}
		p { color: #000; font-size: 24px; }
			
		.wrap { border-color: #5cb7da; }
		.bg { background-image: url('assets/8/bg8.jpg'); background-size: cover !important; }


		#screen1 p img { float: right; margin-left: 20px; width: 50%;}
		#screen1 p {clear:both; float: none; margin-left: 0%;}

		.rslides { width: 350px; height: 280px; float:right; border-radius: 5px; margin-bottom: 70px;margin-left:10px;}
		html[dir=rtl] #screen1 p img { float: left; margin-right: 20px; }
		#screen2, #screen3 { display: none; }
		#screen3 p{ width: 100%; }

		#buttons a.next { display: none; }
		
		.sc1-pic { text-align: center; }
		#sc1-pic { width:300px; height:250px; float: right; }
		.sc2-pic { text-align: center; }
		.sc2-pic img { width: 45%; }
		.sc3-pic img {width: 105%; margin-left: -10px;margin-top:30px;}
		#imagel { height: 340px; width: 290px; float: left; margin: 10px;margin-top:20px; }
		#scrn_3, #scrn_1{font-size: 24px}
		#screen2 p { line-height: 30px; }

		#imagel {
		    height: 240px !important;
		    width: 420px !important;
		    float: none !important;
		    margin: 10px !important;
		    margin-top: 20px !important;
		    margin-right: auto !important;
		    margin-left: auto !important;
		    display: block !important;
		}
		#screen2 p {
		    line-height: 25px;
		}
		#screen3 p {
		    line-height: 25px;
		}
		@media only screen and (max-width: 1250px){
			#imagel {
			    height: 200px !important;
			    width: 320px !important;
			    float: none !important;
			    margin: 10px !important;
			    margin-top: 20px !important;
			    margin-right: auto !important;
			    margin-left: auto !important;
			    display: block !important;
			}
			#scrn_3, #scrn_1 {
			    font-size: 21px;
			}
		}
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		#screen2 p {
		    line-height: 20px;
		    font-size: 19px;
		}
		#screen3 p {
		    width: 100%;
		    font-size: 20px;
		    line-height: 20px;
		}
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
						<h1><?php echo _("More big ideas about... forces"); ?></h1>

						<div style="position:relative">
						<ul class="rslides">
							<li><img src="assets/8/first.jpg"><span class="caption"></span></li>
							<li><img src="assets/8/second.jpg"><span class="caption"></span></li>
							<li><img src="assets/8/third.jpg"><span class="caption"></span></li>
						</ul>
						<p class="grid_12" id = "scrn_1"><!--<img src="assets/8/s1a.jpg">--><?php echo _("What if the floor suddenly started pushing up on you with more force than the earth pulled down? Or what if the earth was pulling down on you harder than the floor was pushing up? Those situations might sound farfetched, but that’s what happens every time you step into an elevator. If you’ve ever ridden in an elevator, you know that there are times in the ride where you feel a bit heavier and times where you feel a bit lighter. These sensations occur because the forces on you are not balanced, and your motion is changing. Changes is motion occur when <span class = 'key'> forces are unbalanced </span>. This means the push or pull is greater in one direction than it is in the opposite direction."); ?></p>	
						</div> 
						<!-- <div class="clear"></div> -->
					</div>

					<div id="screen2" class="screen grid_12">
						<p><?php echo _("Unbalanced forces can also help to explain a car that speeds up or slows down. Think about how your body feels in those situations. The greater the difference amongst the forces acting on you, the stronger those sensations associated with speeding up and slowing down. Acceleration is a term used to describe how quickly an object speeds up or slows down. Both a school bus and a race car are capable of speeding up from 0 to 60 mph. The race car can do it in a shorter amount of time, which means that it is capable of a greater acceleration. In order to safely travel through tight corners on the track, the driver needs to be able to slow the car back down in a hurry. The car uses large carbon-fiber brakes in order to rapidly slow back down to a safe speed. In terms of winning or losing a race, slowing down quickly can be just as important as reaching top speed quickly!"); ?></p>
						<div class="sc2-pic">	
							<img src="assets/8/racecar.jpg" alt="">
						</div>
					</div>


					<div id="screen3" class="screen grid_12">
						<img src="assets/8/rollercoaster.gif" alt="" id = "imagel">
						<div class="sc3-pic">	
							<!-- <img src="assets/8/rollercoaster.gif" alt="" id = "imagel"> -->
						</div> 

					<p id = "scrn_3"><!--<img src="assets/8/s1a.jpg">--><?php echo _("Another point where you're aware of motion on a car ride is when you're going around a tight corner. You might feel your seat belt strain to hold you to the seat or the door pressing against you. You are experiencing unbalanced forces again. According to Newton's First Law of Motion, the car (and you, the passenger) has a tendency to move in a straight line at a constant speed as long as forces are balanced. In order for motion to take a circular path, an unbalanced force pointing towards the center of the turn is required. For the roller coaster to complete a loop de loop, there must be an unbalanced force directed towards the center of the loop. In this picture, the feet of the riders dangle but you can clearly see a seat underneath each rider. That seat pushes the rider towards the center of the turn, providing the necessary unbalanced force."); ?></p>
						
					<!--	<div class="clear"></div> -->
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Pressing elevator button..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>

		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
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
				document.location.href = "7.php";
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
