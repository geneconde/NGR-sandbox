<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Forces of all kinds"); ?></title>

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
		p { font-size: 23px; color: #000;}
		.wrap { border-color: #009014; }
		.bg { background-image: url(assets/10/bg10.jpg); }
		.side_image {margin-top: 57px;}
		.text-justify { text-align: justify; }
		#screen2 { display: none; }
		#screen2 p{ width: 100%; }
		.rslides { width: 450px; height: 290px; float:left; border-radius: 5px; margin-bottom: 30px; margin-right: 20px;}
		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		p.grid_8.text-justify {
		    font-size: 20px;
		}
		#screen2 p {
		    width: 100%;
		    font-size: 20px;
		    line-height: 25px;
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

						<p class="grid_8 text-justify"><?php echo _("These ideas about force and motion come together based on something called <span class = 'key'> Newton's Second Law of Motion</span>. This law explains that the acceleration of an object depends on how far the forces are from being balanced, and how much mass the object has. If the forces on an object are just slightly unbalanced, then the acceleration will be relatively small, and the object will take more time to have much of a change in speed. However, that acceleration can be increased by making the object less massive. If the mass of the object is increased, the acceleration will decrease. This type of relationship where increasing the amount of one thing decreases the amount of another thing is called an <span class = 'key'>inverse relationship. </span>"); ?></p>
					
						<div class="grid_4">
							<img src="assets/10/rocket.jpg">
						</div>
					</div>
				</div>

				<div id="screen2" class="screen grid_12">

						<div>
						<ul class="rslides">
							<li><img src="assets/10/kid1.jpg"><span class="caption"></span></li>
							<li><img src="assets/10/kid2.jpg"><span class="caption"></span></li>
						</ul>
						<p><?php echo _("Force is measured in Newtons (N). One Newton of force is equal to roughly one quarter of a pound. <span class = 'key'>Mass</span> is the other important quantity to consider when determining the acceleration of an object. The metric unit for mass is the kilogram (kg). Consider two children pulling a wagon across a yard. The children and the wagon each have a mass of 40 kg. Each child is capable of pulling on the wagon with a force of 50 N. If the children pull on the wagon in opposite directions, the forces on the wagon will be balanced, and it will remain at rest. If one child pulls the wagon with the 50 N force while the other child watches, the wagon will speed up or accelerate. If one child pulls with 50 N while the other child sits in the wagon, the acceleration will be half as much because the same unbalanced force is acting on the combined 80 kg of mass. If both children pull the empty wagon with 50 N each, in the same direction, the acceleration of the wagon will be twice as much as it was with just one child pulling the empty wagon because the unbalanced force will now be 100 N."); ?></p>
						</div>
				<div class="clear"></div>
				</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Pulling a wagon..."); ?></strong></section></section>

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
		var screenCount = 2;

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

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
