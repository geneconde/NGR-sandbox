<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
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

	<title><?php echo _("Human Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #0060A1; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #FFF58B; }
		.bg { background-image: url(assets/8/bg.jpg); }

		#screen1 div { float: right; }
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing more core ideas... about human impact"); ?></h1>
				
						<p class="grid_12">
							<div class="grid_5 ">
								<ul class="rslides">
									<li><img src="assets/8/a.jpg"></li>
									<li><img src="assets/8/b.jpg"></li>
								</ul>
							</div>
							<?php echo _("Another example of how resources we use from the environment to make us more comfortable and make our lives better can also have negative impacts on the environment - which then can have negative impacts on us as well - is the burning of fossil fuels. For instance, we burn coal to make electricity and gasoline to run our cars. Coal and gasoline are examples of \"<span class='key'>fossil fuels</span>\" because they're formed in the ground from the remains of dead plants from thousands or millions of years ago. Electricity and cars are hugely important in making our lives more comfortable. Can you imagine living in the dark and walking everywhere you had to go? But burning these fossil fuels can also have a very negative impact on the environment - and on you! Most scientists that study climates have strong evidence to believe that one of the by-products of burning fossil fuels is an powerful pollutant - <span class='key'>carbon dioxide</span> (CO2) - which is causing the earth to heat up producing heat waves of record high temperatures, wildfires, and more powerful storms. <span class='key'>Pollutants</span> are any substances, or extra abnormal amounts of naturally occurring substances, that are introduced by human activities into the air, water, or earth. So even though there are benefits for you from electricity and transportation there may also be some very harmful impacts as well."); ?>
							</p>
						
					</div>
					
					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("But humans are smart! Both individually and as a society there are things we can do to minimize the harmful impact we have on the environment by changing our behavior. It's a matter of being knowledgeable about the impact of humans on the environment and then making informed decisions on how to deal with the impact."); ?></p>
						<div class="grid_5 prefix_1"><img src="assets/8/1.jpg" /></div>
						<div class="grid_5"><img src="assets/8/2.jpg" /></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	

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
				document.location.href = "7.php";
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
		
	<script src="js/responsiveslides.js"></script>
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>
</body>
</html>
