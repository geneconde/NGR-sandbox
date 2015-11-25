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
		h1 { color: #34678a; }
		p { color: #000; font-size: 24px; }
			
		.wrap { border-color: #5cb7da; }
		.bg { background-image: url('assets/6/bg6.jpg'); background-size: cover !important; }


		#screen1 p img { float: right; margin-left: 20px; width: 50%;}
		#screen1 p {clear:both; float: none;}

		.rslides { width: 350px; height: 280px; float:right; border-radius: 5px; margin-bottom: 70px;margin-left:10px;}
		html[dir=rtl] #screen1 p img { float: left; margin-right: 20px; }
		#screen2, #screen3 { display: none; }
		#screen3 p{ width:100%; }

		#buttons a.next { display: none; }
		
		.sc1-pic { text-align: center; }
		#sc1-pic { width:300px; height:250px; float: right;}
		.sc2-pic img {width: 45%; margin-left: 200px; }
		.sc3-pic img {width: 105%; margin-left: -10px;margin-top:30px;}

		#scrn_3, #scrn_1{font-size: 24px}
		#imager { height: 340px; width: 340px; float: right; margin: 10px; }
		#imagel { height: 340px; width: 340px; float: left; margin: 10px; }


    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		p#scrn_1 {
		    line-height: 25px;
		    font-size: 20px;
		}
		p.scrn2_pb {
		    line-height: 30px;
		    font-size: 22px;
		}
		#screen3 p {
		    width: 100%;
		    font-size: 21px;
		    line-height: 25px;
		}
		img, video {
		    width: 80%;
		}
		img#img1 {
		    float: right;
		}
		#imager {
		    height: 100%;
		    width: 30%;
		    float: right;
		    margin: 10px;
		}
		div#screen3 img {
		    width: 30%;
		    height: 30%;
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
						<h1 class="grid_12"><?php echo _("More big ideas about... forces"); ?></h1>

						<div style="position:relative">

						<p class="grid_12" id = "scrn_1"><!--<img src="assets/8/s1a.jpg">--><?php echo _("Now that you've given some thought to the variety of forces around you, it's time to examine how those interactions can affect the motion of objects. Even if you're not in motion at this moment, you're likely experiencing at least two forces. The Earth is pulling down on you gravitationally, but the surface that you're sitting or standing on is pushing up on you with the same amount of force. You're not floating off into space, and you're not sinking into the surface because these forces are balanced. Another term to describe these <span class = 'key'> balanced forces </span> is equilibrium. An object is in <span class = 'key'> equilibrium </span>if all of the forces acting upon it are balanced."); ?></p>	
						</div> 

						<div class = 'grid_12' style="margin-left: 70px;">
							<div class="grid_5">
								<img id="img1" src = 'assets/6/pic1.jpg'>
							</div>
							<div class = "grid_5">
								<img id="img2" src = 'assets/6/pic2.jpg'>
							</div>
						</div>
						<!-- <div class="clear"></div> -->
					</div>

					<div id="screen2" class="screen grid_12">
						<div>
							<img src = 'assets/6/bowling.jpg' id="imager">				
							<p class="scrn2_pb"><?php echo _("Just because the forces on an object are balanced, that doesn't mean the object isn't moving. Take the bowling ball in this picture, for example. It's difficult to tell whether the ball is moving or not. That's because, at this moment, the ball is only interacting with Earth gravitationally, and with the floor based on direct contact. Those forces are balanced, so a picture of a ball rolling along the surface looks exactly like a picture of a ball at rest on the surface. Those same interactions are occurring whether the ball is at rest, or is moving. The man is no longer pushing on the ball, so he is no longer interacting with it. He can no longer affect the motion of the ball. The speed of the ball is constant because the forces acting on the ball are balanced. When the ball hits another object, the forces will no longer be balanced, and the speed will no longer be constant."); ?>
							</p>
						</div>
					</div>


					<div id="screen3" class="screen grid_12">

						<div>
							<img src = 'assets/6/pic4.jpg' id="imagel">
							<p class="scrn2_p3"><?php echo _("In the Olympic sport of curling, an athlete gives a push to a massive stone, causing it to slide towards the other end of the icy surface. Teammates sweep against the ice with special brooms to limit the amount of friction. The lack of friction means the stone experiences balanced forces, and it moves along the ice at a constant speed. The downward force of gravity and upward force from the surface don't affect the motion of the stone along the ice. The stone doesn't change its speed until it smacks into another stone, or the teammates stop sweeping and allow friction to slow the stone to a stop. The bowling ball and the curling stone do not need a constant push from a person in order to stay in motion on a frictionless surface. They do that naturally because the forces on them are balanced. This tendency for objects experiencing balanced forces to either remain at rest, or to continue moving at a constant speed in a straight line is known as <span class = 'key'>Newton's First Law of Motion.</span>"); ?></p>
						</div>
					<!--	<div class="clear"></div> -->
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Floating into space..."); ?></strong></section></section>

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

	<?php include 'setlocale.php'; ?>
</body>
</html>
