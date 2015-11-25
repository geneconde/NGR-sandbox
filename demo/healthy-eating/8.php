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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #22a0af; }
		
		.wrap { border-color: #E5FDFD; 
			border-left: 1px dashed #038B87;
			border-right: 1px dashed #038B87;}
		.bg { background-image: url(assets/8/bg.jpg); overflow: hidden; }

		#screen2, #screen3 { display: none; }

		#buttons .next { display: none; }
		.image { width: 100%; height: 200px;}
		.image-large { width: 100%; height: 330px;}
		.bg-color{background: #bfffca; }
		
		.rslides img { 
		   width: 100%;
		   height: auto;}
		  .rslides { width: 100%; }
		.rslides2 img { 
		   width: 100%;
		   height: auto;}
		  .rslides { width: 100%; }
		  .potato {
		  	float: right; 
		  	width: 40%;
		  	margin: 10px;
		  }

		<?php if ($language == 'es_ES') : ?>

			p { line-height: 28px; }

			@media only screen and (max-width: 862px) {
				
				#screen1 p { line-height: 28px;}
				#screen2 p { line-height: 26px;}

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
						
						<div class="grid_12">
							<img class="potato"src="assets/8/potato.jpg" />
							<p><?php echo _("The food we eat has changed in the past century. We are eating more processed foods instead of meals made from fresh ingredients. Factories use farm-grown foods to make processed foods. For example, tomatoes are used to make spaghetti sauce, and potatoes are used to make french fries. When foods are processed, certain ingredients are added to them for taste and to make them last longer. Not all of these ingredients are healthy. Also, processed foods don't have as many vitamins and minerals as fresh foods do."); ?></p>						
						</div>
						
						<div class="clear"></div>
						<div class="grid_4"><img src="assets/8/pills.jpg" /></div>
						<p class="grid_8"><?php echo _("Vitamins are important to stay healthy. We need vitamins A, C, D, E, K, and eight types of vitamin B. Each vitamin has a special job to do in our body. For the most part, we get vitamins from our food, but taking multivitamins is good for people who might not be eating a variety of food."); ?></p>
						
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Vitamin A helps with our vision. It is found in salmon and egg yolks. Our body can also make this vitamin when we eat orange and green vegetables like carrots and kale. Vitamin B helps make energy and set it free when your body needs it. The body also needs them to make red blood cells to carry oxygen throughout our body. Whole grain breads and fish and meat are full of vitamin B."); ?></p>
						<div class="grid_12 ta-center">
							<div class="grid_4 prefix_1 suffix_1 ">
								<div class="grid_10 prefix_2 suffix_2 bg-color">
									<ul class="grid_12 rslides">
										<li><img src="assets/8/vitamin-b3.jpg" /><span class="caption"></span></li>
										<li><img src="assets/8/vitamin-b2.jpg" /><span class="caption"></span></li>
										<li><img src="assets/8/vitamin-b1.jpg" /><span class="caption"></span></li>
										<li><img src="assets/8/vitamin-a.jpg" /><span class="caption"></span></li>
									</ul>
								</div>
							</div>
							<div class="grid_4 suffix_1 ">
								<div class="grid_10 prefix_2 suffix_2 bg-color">
									<ul class="grid_12 rslides2">
										<li><img src="assets/8/vitamin-k.jpg" /><span class="caption"></span></li>
										<li><img src="assets/8/vitamin-d.jpg" /><span class="caption"></span></li>
										<li><img src="assets/8/vitamin-e.jpg" /><span class="caption"></span></li>
										<li><img src="assets/8/vitamin-c.jpg" /><span class="caption"></span></li>
									</ul>
								</div>
							</div>
						</div>
						<!--<div class="grid_6 "><img src="assets/8/orange.jpg" /></div>-->
						<!--<div class="clear"></div>-->
						<p class="grid_12"><?php echo _("Vitamin C helps heal wounds and burns. It also helps keep gums and muscles in good shape. This vitamin that is found in citrus fruit also helps your body resist infection so you can put off getting sick a little longer. Vitamin D is needed for your bones and teeth. There are two kinds of this vitamin: one that the body makes when we are in the sun, and one that we can get from fortified milk and cereal, and oily fish. We can get vitamin E from vegetable oil and nuts, and vitamin K from vegetables like spinach and broccoli."); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="7.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Taking vitamins..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		$(".rslides2").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>
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
