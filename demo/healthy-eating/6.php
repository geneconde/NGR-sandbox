<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Healthy Eating"); ?></title>

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
		h1 { color: #ff890b; }
		
		.wrap { border-color: #FFFBEF; 
			border-left: 1px dashed #E8629F;
			border-right: 1px dashed #E8629F;
		}
		.bg { background-image: url(assets/6/bg.jpg); overflow: hidden;}
		.key { color: #249ab8;}
		.colored-red{color: #ff0000;}
		#screen2, #screen3 { display: none; }


		#buttons .next { display: none; }
		.image{width: 70%; height: 70%; margin: -8px; padding: 0;}
		.ta-center{text-align:center;}
		.p-fix{margin:0;}

		@media only screen and (max-width: 1250px) {
			.image{ width: 67%; }
		}

		<?php if ($language == 'es_ES') : ?>
			
			.chocolate {font-size: 20px; }

			p { line-height: 30px; }
			.image { width: 62%; }

			@media only screen and (max-width: 890px) {
				.chocolate {font-size: 17px; }
			}

			@media only screen and (max-width: 800px) {
				p { line-height: 28px; }
				.chocolate {font-size: 17px; }
			}

		<?php endif; ?>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... healthy eating"); ?></h1>
						<div class="grid_8">
							<p class="grid_12"><?php echo _("MyPyramid suggests that we make half our grains whole, vary our veggies, focus on fruits, get our calcium-rich foods, and go lean with protein.  This is easy to follow, but every person needs their own plan (or diet) for what to eat every day."); ?></p>
							<p class="grid_12"><?php echo _("One way to analyze your diet is in terms of the <span class='key'>calories</span> or energy contained in each food. Different foods contain different amounts of calories, or potential energy. Each of the items to the right contains about 100 calories. Cheese has a lot of fat compared to cherry tomatoes; a small piece of cheese has the same amount of calories as a bowl of tomatoes. The type of food (fat, protein, or carbohydrate) is what determines the number of calories, and the amount we eat determines how fattening it can be."); ?></p>
						</div>
						<div class="grid_4">
							<div class="grid_12">
								<p class="grid_6 ta-center"><img class="image" src="assets/6/tomatoes.jpg" /></p>
								<p class="grid_6 p-fix"><?php echo _("50 Cherry tomatoes")?></p>
							</div>
							<div class="grid_12">
								<p class="grid_6 ta-center"><img class="image" src="assets/6/sugar.jpg" /></p>
								<p class="grid_6 p-fix"><?php echo _("1 Chocolate shortbread cookie")?></p>
							</div>
							<div class="grid_12">
								<p class="grid_6 ta-center"><img class="image" src="assets/6/juice.jpg" /></p>
								<p class="grid_6 p-fix"><?php echo _("1 Glass of juice orange")?></p>
							</div>
							<div class="grid_12">
								<p class="grid_6 ta-center"><img class="image" src="assets/6/chocolate.jpg" /></p>
								<p class="grid_6 p-fix chocolate"><?php echo _("About 4 squares of chocolate")?></p>
							</div>
							<div class="grid_12">
								<p class="grid_6 ta-center"><img class="image" src="assets/6/cheese2.jpg" /></p>
								<p class="grid_6 p-fix"><?php echo _("1 Cube of cheese, 3/4 inch across")?></p>
							</div>
							<div class="grid_12">
								<p class="grid_6 ta-center"><img class="image" src="assets/6/egg.jpg" /></p>
								<p class="grid_6 p-fix"><?php echo _("1 Large chicken egg")?></p>
							</div>
						</div>
						
						<!--<p class="grid_7"><?php echo _("One way to analyze your diet is in terms of the calories or energy contained in each food. Different foods contain different amounts of <span class='key'>calories</span>, or potential energy. Each of the items to the right contains about 100 calories. "); ?></p>
						<div class="grid_5 image"><img src="assets/6/grape.jpg" /></div>
						<div class="clear"></div>
						<div class="grid_5 image"><img src="assets/6/cheese.jpg" /></div>
						<p class="grid_7"><?php echo _("Cheese has a lot of fat compared to cherry tomatoes; a small piece of cheese has the same amount of calories as a bowl of tomatoes. The type of food (fat, protein, or carbohydrate) is what determines the number of calories, and the amount we eat determines how fattening it can be."); ?></p>-->
						
						
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Exactly how many calories every person needs a day depends on the height, weight, age, gender, and activity level of that person. Usually, children need less than 2000 calories a day and should be physically active for an hour a day."); ?></p>
						<div class="grid_6 image-large"><img src="assets/6/dumbell.jpg" /></div>
						<div class="grid_6 image-large"><img src="assets/6/boxing.jpg" /></div>
						<div class="clear"></div>
						<p class="grid_12"><?php echo _("Being physically active is a key element in living a longer, healthier, happier life and goes hand in hand with healthy eating. It can help relieve stress and can provide an overall feeling of well-being. Physical activity can also help you achieve and maintain a healthy weight. The body maintains a balance between the food you eat (calories in) and the exercise you do (calories out). The calories you do not burn are stored in the body in the form of fat."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Reading nutrition facts..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<script>
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

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
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
			$('.back').fadeOut();
			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
			
			$('#screen1').fadeOut(function() {
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
			});
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
