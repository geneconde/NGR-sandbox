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

	<title><?php echo _("Human Environmental Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/4/bg.jpg); }

		#screen2 { display: none; }

		/*#buttons .next { display: none; }*/
		#imageB {
		    width: 38% !important;
		    float: right;
		}
		.fp {
		    font-size: 22px;
		    width: 60%;
		    display: inline-block;
		    margin: 0;
		}
		.sp {
		    font-size: 22px;
		    margin: 0;
		}
		h1.grid_12 {
		    color: #b77f4e;
		    left: -10px;
		    position: relative;
		}
		<?php if($language == 'ar_EG'){ ?>
			#imageB { margin-left: 10px; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big core ideas about... human environmental impact"); ?></h1>
						<section class="parag1">
						<p class="fp">
							<?php echo _("People in modern society like to live comfortably. We like to eat well; have a car to drive to where ever we need to go; have a comfortable house or apartment that's warm and dry; have a nice clothes to wear that keeps us cool in the summer and warm in the winter. And we like electricity that allows us to power our lights and our TV's. But where does all of that stuff come from to keep us comfortable?"); ?>
						</p>
						<img src="assets/4/b.jpg" id="imageB">
						</section>
						<section class="parag2">
							<p class="sp">
								<?php echo _("It comes from from the earth's environment - that's where. The food we eat comes from farms and ranches that used to be natural fields and woods. The electricity comes from burning coal or from damming rivers. The gasoline that powers our cars comes from oil wells we drill deep down into the earth. And most of our houses are made from wood that comes from cutting trees in the forest. All of these things that make us comfortable comes from human activity impacts the natural environment. The <span class='key'>environment</span> is just another name for earth's systems all working together - the air, water, and all the living things. When we change or take something from the environment, we have an environmental <span class='key'>impact</span> - which means we change something in one or all of the earth's systems. Usually this change is bad. And sometimes the impact human activity has on the environment is not good for the environment or for us."); ?>
							</p>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="3.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing for the better..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
	// 	var hash = window.location.hash.slice(1);

	// 	if (hash != "") {
	// 		$('.screen').hide();
	// 		$('#screen2').show();

	// 		$('.back').fadeOut();

	// 		$('.readmore').fadeOut(function() { 
	// 			$('.next').fadeIn(); 
	// 			$('.back').fadeIn();
	// 		});
	// 	}
		
	// 	$('.back').click(function() {
	// 		if ($('#screen1').is(':visible')) {
	// 			document.location.href = "3.php#answer";
	// 		} else if ($('#screen2').is(':visible')) {

	// 			$('.back').fadeOut();

	// 			$('.next').fadeOut(function() { 
	// 				$('.readmore').fadeIn(); 
	// 				$('.back').fadeIn(); 
	// 			});

	// 			$('#screen2').fadeOut(function () {
	// 				$('#screen1').fadeIn();

	// 				window.location.hash = '';
	// 			});
	// 		} 
	// 	});

	// 	$('.readmore').click(function(){
	// 		if ($('#screen1').is(':visible')) {

	// 			$('.back').fadeOut();

	// 			$('.readmore').fadeOut(function() {
	// 				$('.next').fadeIn(); 
	// 				$('.back').fadeIn(); 
	// 			});

	// 			$('#screen1').fadeOut(function() {
	// 				$('#screen2').fadeIn();

	// 				window.location.hash = '#screen2';
	// 			});
	// 		}
	// 	});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
