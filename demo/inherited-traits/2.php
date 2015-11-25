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
		.bg { background: url("assets/2/bg.jpg"); }

		.container_12 { height: 100%; }
		
		.pic { height: 326px; }

		#screen2 { display: none; }

		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
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
						<h1 class="grid_12"><?php echo _("Thinking about... inherited traits"); ?></h1>

						<p class="grid_12"><?php echo _("Ever get called by the wrong name?  It's pretty common. Sometimes a teacher will use your older sister's or brother's name to call on you.  Sometimes your grandparent will call you by your uncle, aunt or parent's name. Seems weird, but it happens all the time. Why? Because you're related!"); ?></p>
						<p class="grid_12"><?php echo _("Have a look at these two pictures:"); ?></p>
					
						<div class="grid_4 prefix_2">
							<img class="pic" id="spark" src="assets/2/img1.jpg"/>
						</div>

						<div class="grid_4 suffix_1">
							<img class="pic" id="spark" src="assets/2/img2.jpg"/>
						</div>

					</div>
					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("These two men aren't the same person - they're father and son. It's true; they do look remarkably similar, and there's a reason for it. They share a great deal: the same chromosomes; the same genes."); ?> </p>
						
						<p class="grid_12"><?php echo _("You have similar relationships with your own parents and siblings.  You even share characteristics with your grandparents and cousins. It’s because you have inherited your characteristics from your mother and father."); ?> </p>
						
						<p class="grid_12"><?php echo _("For thousands of years, people have understood a few basic rules about inheritance in plants and animals.  In the past hundred years, we have learned how to use this knowledge to make more accurate predictions about all living things."); ?></p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="3.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Are you ready"); ?>, <?php echo $user->getFirstName(); ?>?</strong></section></section>

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
				document.location.href = "1.php";
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
