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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #a66406; }
		
		.wrap { border-color: #CEA112; }
		.bg { background-image: url(assets/8/bg.jpg); }
		<?php if($language == 'es_ES'){ ?>
		#screen1 p { font-size: 20px; line-height: 1.3; }
		#screen2 p { font-size: 22px; }
		<?php }else{ ?>
		#screen1 p { font-size: 21px; line-height: 1.3;}
		#screen2 p { font-size: 23px; }
		<?php } ?>
		.sc1-image { text-align: center; }
		.sc1-image img { width: auto; }

		#screen2 { display: none; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px){
			#screen1 p{ margin: 0px 0 ; font-size: 20px; line-height: 1.3;}
			#screen1 img { width: 35%; height: auto; }
			#answer .auto { width: 40%; height: auto; }
			#screen2 img {width: 90%;}
			#screen2 p{ font-size: 21px; }
		}
		@media screen and (max-width: 900px){
			#screen1 p{ font-size: 19px;}
			#screen2 p{ font-size: 19px; }
		}

		@media screen and (max-width: 1250px){
			#screen1 p{
				left: 10px !important;
			}
		}
		.sc1-image img {
		    width: 40%;
		}


		<?php if($language == 'ar_EG'){ ?>
			#screen1 p {
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
						<h1 class="grid_12"><?php echo _("More big ideas about... Newton's Third Law"); ?></h1>
						<p class="grid_12"><?php echo _("Not only do forces always come in pairs, but the sizes of the two forces will always be equal. This can be tough to see because force is not the only thing that affects how much an object’s motion will change. The <span class='key'>mass</span> of the object determines how much the motion will change for a particular amount of force.  Mass is measured in kilograms (kg) and is simply a measure of how much matter makes up an object. It’s easy to push the empty shopping cart when you first get to the grocery store, but as the cart fills up with groceries, it becomes more massive.  When the cart is full, it becomes harder to change the cart’s motion. It’s harder to get the cart to start moving, harder to stop it once it's in motion, and harder to get it to go around corners. <span class='key'>Acceleration</span> is a term used to describe how quickly an object’s motion changes. For a certain amount of force, an object with more mass will have less acceleration, and an object with less mass will have a greater acceleration."); ?></p>
						<div class="grid_12 sc1-image">
							<img src="assets/8/8a.jpg" />
							<img src="assets/8/8b.jpg" />
						</div>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_7"><?php echo _("When two objects interact, they put equal forces on each other, but their accelerations will also depend upon their masses. If one of the objects is two times more massive than the other, the more massive object will experience half as much acceleration as the lighter object. This can make it difficult to understand that the forces they put on each other are always equal in size. Did you know that when you jump off the ground, you push down on the earth with the same amount of force that it pushes up on you?  This might be hard to believe because we don’t see the earth move. The reason for that is not a difference in forces but a huge difference between your mass and the mass of the earth. If the two objects involved in an interaction have the same amount of mass, it’s easy to see that the forces they exert on each other are equal size because the accelerations will be the same size, too!"); ?></p>
						<div class="grid_5">
							<ul class="rslides rslides1">
								<li><img src="assets/8/8s1.jpg"></li>
								<li><img src="assets/8/8s2.jpg"></li>
							</ul>
							<ul class="rslides rslides2">
								<li><img src="assets/8/8s3.jpg"></li>
								<li><img src="assets/8/8s4.jpg"></li>
							</ul>
						</div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Calculating mass..."); ?></strong></section></section>

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
				document.location.href = "7.php";
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
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
