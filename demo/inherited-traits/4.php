<?php
	require_once '../tempsession.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Inherited Traits"); ?></title>

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
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #917DD1; }
		#buttons .next { display: none; }

		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		
		.wrap { border-color: #B3446E; }
		.bg { background: url("assets/4/bg.jpg"); }

		.container_12 { height: 100%; }
		
		.pic { height: 326px; }

		#screen2 { display: none; }
		<?php if ($language == 'es_ES') : ?>
			p.grid_12 {
			    font-size: 23px !important;
			}
			@media only screen and (max-width: 1250px){
				p.grid_12 {
				    font-size: 20px !important;
				}
				div#image_container img {
				    height: 300px !important;
				}
			}
		<?php endif; ?>


		#image_container img{ height: 360px; }
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
			#image_container img {
			    height: 300px !important;
			}
		}
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... inherited traits"); ?></h1>
		
						<div class="grid_6">
							<p class="grid_12"><?php echo _("Ever wonder why you have two parents? We all do, you know. It's one of the few things that's true for all people. Even though some families may have only one parent in the home, or other families have two same-sex parents, every living person has both a female biological parent and a male biological parent. Parents of opposite sexes are the reason our form of reproduction is called <span class='key'>sexual reproduction</span>."); ?></p>
						</div>

						<div class="grid_6" id="image_container">
							<img src="assets/4/people.jpg" alt="img1">
						</div>
					
						<p class="grid_12"><?php echo _("The simplest form of reproduction in nature is called <span class='key'>asexual reproduction</span>. This occurs when new organisms break away in some fashion from a parent organism. Asexual reproduction is common in single-cell organisms, plants and a few animals. It produces clones or exact copies of the parent. While this process is very efficient, the sameness of the individuals it produces is a disadvantage in many types of living things."); ?></p>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("When the environment changes in some way, it’s important that all members of a living population not be the same. Diversity helps to ensure that new combinations of inherited traits make the survival of at least some members of a population possible when conditions become difficult."); ?> </p>
						
						<p class="grid_12"><?php echo _("Sexual reproduction works because every individual has two copies of each chromosome, the cell structures that carry information. Each plant or animal receives one copy of each chromosome from each parent. They then are able to pass only one of each chromosome on to their own offspring. Since it is equally likely that either of each chromosome may be passed on to any offspring, all combinations of chromosomes are possible.  This allows for new combinations of chromosomes and the traits they carry every generation."); ?> </p>
						
						<div class="grid_4 prefix_2">
							<img src="assets/4/dna1.jpg"/>
						</div>

						<div class="grid_4 suffix_1">
							<img src="assets/4/dna2.jpg"/>
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

	<!--<section id="preloader"><section class="selected"><strong><?php //echo _("Are you ready"); ?>, <?php //echo $user->getFirstName(); ?>?</strong></section></section>-->
	<section id="preloader"><section class="selected"><strong><?php echo _("Ensuring new combinations​...​​"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
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
				document.location.href = "3.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '#';
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
