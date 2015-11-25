<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
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

	<title><?php echo _("Our Solar System"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/stackSlider.css"> -->

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #007a28; margin-left: 1%; }
		#screen1 p { font-size: 22px; }
		.wrap { border-color: #D12DD1; }
		.bg { background-image: url(assets/10/bg.jpg); overflow: hidden;}

		.orbit { 
			background-image: url(assets/10/10a.png); height: 285px; float: right;
			background-repeat: no-repeat; background-size: contain;
		}
		/*.orbit span:first-of-type { color: #00FF2A; margin-left: -196px; font-size: 16px;}*/
		/*.orbit span:nth-of-type(2) { color: #F00; float: left; margin-top: 68px; margin-left: 19px; font-size: 16px; }*/
		/*.orbit span:nth-of-type(3) { color: #FFF; float: left; margin-top: 99px; margin-left: 158px; font-size: 16px; }*/
		/*.orbit span:nth-of-type(4) { color: #F00; float: left; margin-top: 185px;margin-left: -284px; font-size: 16px; }*/
		/*.orbit span:nth-of-type(5) { color: #FFF; float: left; margin-top: 171px; margin-left: -123px; font-size: 16px; }*/
		/*.orbit span:last-of-type { color: #00FF2A; float: right; margin-right: 217px; margin-top: 48px; font-size: 16px; }*/

		#screen1 img { width: 100%; }
		#screen1 .images { text-align: center; }
		#screen2 { display: none; }
		#screen2 img { display: block; width: 100%; }

		#buttons .next { display: none; }

		.rslides { float: right; }
		.orbit span:first-of-type {
		    position: absolute;
		    color: #00FF2A;
		    top: 5px;
		    font-size: 16px;
		    left: 100px;
		}
		.orbit span:nth-of-type(2) {
		    color: #F00;
		    position: absolute;
		    top: 70px;
		    left: 50px;
		    font-size: 16px;
		}
		.orbit span:nth-of-type(3) {
		    color: #FFF;
		    position: absolute;
		    top: 100px;
		    left: 220px;
		    font-size: 16px;
		}
		.orbit span:last-of-type {
		    color: #00FF2A;
		    position: absolute;
		    left: 25px;
		    font-size: 16px;
		    top: 260px;
		    width: 200px;
		}
		.orbit span:nth-of-type(5) {
		    color: #FFF;
		    position: absolute;
		    top: 150px;
		    left: 200px;
		    font-size: 16px;
		}
		.orbit span:nth-of-type(4) {
		    color: #F00;
		    float: left;
		    top: 185px;
		    left: 20px;
		    font-size: 16px;
		    position: absolute;
		}
		
		@media only screen and (max-width: 960px){
			.orbit span:nth-of-type(4) {
			    color: #F00;
			    float: left;
			    top: 160px;
			    left: 20px;
			    font-size: 16px;
			    position: absolute;
			}
			.orbit span:last-of-type {
			    color: #00FF2A;
			    position: absolute;
			    left: 25px;
			    font-size: 16px;
			    top: 224px;
			    width: 200px;
			}
			.orbit span:nth-of-type(5) {
			    color: #FFF;
			    position: absolute;
			    top: 132px;
			    left: 200px;
			    font-size: 16px;
			}
			.grid_12 {
			    line-height: 25px;
			}
			<?php if ($language == 'es_ES') : ?>
			.orbit span:nth-of-type(3) {
			    color: #FFF;
			    position: absolute;
			    top: 88px;
			    left: 185px;
			    font-size: 16px;
			    width: 200px;
			}
			<?php endif; ?>
		}
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("More big ideas about... our solar system"); ?></h1>
						
						<div class="grid_12">

							<!-- <ul class="rslides grid_5">
								<li><img src="assets/10/s1.png"></li>
								<li><img src="assets/10/s2.png"></li>
							</ul> -->

							<div class="grid_5 orbit">
								<span><?php echo _("Polaris"); ?></span>
								<span><?php echo _("N Axis"); ?></span>
								<span><?php echo _("Earth Orbit"); ?></span>
								<span><?php echo _("S Axis"); ?></span>
								<span><?php echo _("Sun"); ?></span>
								<span><?php echo _("Sigma Octantis"); ?></span>
							</div>
							
							<?php echo _("The Earth constantly orbits the Sun. But at the same time, the Earth is constantly spinning around its center (also called the <span class='key'>axis</span>). The ends of the axis around which the Earth spins are called the North and South Poles. Unlike a twirling ballerina spinning straight up and down on her toes, the Earth spins on an axis (<span class='key'>rotation</span>) that is tilted about 23 degrees off the perpendicular to the orbital plane of the Earth. If an imaginary line could be drawn to extend the North Pole far out into space, it would lead very close to a star named Polaris (the North Star). As the Earth spins on its axis, the axis constantly points to the North Star (therefore the North Star, or Polaris, remains at the center of the nighttime sky). All the other stars appear to move in a great circles or arcs. No matter where the Earth is located along its orbit around the Sun, the North Pole points constantly at Polaris (which is approximately 430 million light years away from Earth.)"); ?>
							
						</div>
						<!-- <ul id="st-stack" class="st-stack-raw">
						    <li>
						        <div class="st-item">
						            <a href="#">
						                <img src="assets/10/s1.png" />
						            </a>
						        </div>
						        <div class="st-title">
						           <h2>Graverobber</h2><h3>by Isaac Montemayor</h3>
						        </div>
						    </li>
						    <li>
						    	<div class="st-item">
						            <a href="#">
						                <img src="assets/10/s2.png" />
						            </a>
						        </div>
						       <div class="st-title">
						          <h2>Graverobber</h2><h3>by Isaac Montemayor</h3>
						       </div>
						    </li>
						</ul> -->
					</div>

					<div id="screen2" class="screen">
						<p><?php echo _("The constant tilt of the Earth throughout the journey around the Sun results in the phenomena on Earth known as the change in seasons.  During summer in the northern hemisphere, the northern pole is tilted toward the Sun. As a consequence, the sun's light rays hit Earth's surface with more intensity than during the winter when the northern pole is tilting away from the Sun."); ?></p>
						<div class="grid_12">
							<img src="assets/10/10b.png" />
						</div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Spinning around..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
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
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>
<!--	<script src="js/modernizr.custom.63321.js"></script>
	<script src="js/jquery.stackslider.js"></script>

	<script>
		$( function() {
				
				$( '#st-stack' ).stackslider();
				$( '#st-stack2' ).stackslider();

			});
	</script> -->

	<?php include 'setlocale.php'; ?>
</body>
</html>
