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

	<title><?php echo _("Human Environmental Impact"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #0060A1; font-size: 31px; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #AEF4FC; }
		.bg { background-image: url(assets/6/bg.jpg); }

		#screen2 div { float: right; }
		#screen2 ul { width: 94%; }

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 27px; }
			p { font-size: 23px; }
			#screen2 p { font-size: 21px; }

			@media screen and (max-width: 1250px){
				#screen1 p {line-height: 29px; font-size: 22px; }
				#screen2 p {line-height: 25px; font-size: 21px; }
			}

			@media screen and (max-width: 855px){
				p {line-height: 22.5px !important; font-size: 19px !important; }
				h1 { font-size: 23px; }
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
						<h1 class="grid_12"><?php echo _("More big ideas about... human environmental impact"); ?></h1>
				
						<p class="grid_12"><?php echo _("Humans are part of the environment too. We're animals like the deer, the birds, and the fish. But we're different from most animals. Animals in the wild only take what they need from the environment to survive, but humans take more than what they need just to survive. They often take as much as they can get, not only to survive, but also to exploit the environment to be comfortable and make money. Whatever resources we use from the environment to make us more comfortable and make our lives better can also have negative impacts on the environment – which then can have negative impacts on us as well – because we're part of the environment.  "); ?></p>
						<div class="grid_5 prefix_1">
							<ul class="rslides">
								<li><img src="assets/6/a.jpg"></li>
								<li><img src="assets/6/b.jpg"></li>
							</ul>
						</div>
						
						<div class="grid_5 ">
							<ul class="rslides ">
								<li><img src="assets/6/c.jpg"></li>
								<li><img src="assets/6/d.jpg"></li>
							</ul>
						</div>
					</div>
					
					<div id="screen2" class="screen">
						<div class="grid_12">
							<div class="grid_5 ">
								<ul class="rslides ">
									<li><img src="assets/6/1.jpg"></li>
									<li><img src="assets/6/2.jpg"></li>
									<li><img src="assets/6/3.jpg"></li>
									<li><img src="assets/6/4.jpg"></li>
								</ul>
							</div>
								
							<p><?php echo _("Water is just one example of how humans impact the environment. Almost all living things need water to survive. But most animals in the wild just take small sips of water from streams and lakes every day to meet their needs. But what are some things humans do beyond their simple daily requirements of satisfying their thirst? First of all, we put big dams across rivers to generate electricity. We also put dams up to create reservoirs to supply water for big cities and to make lakes for boating, swimming, and fishing. People also use water for more than just drinking. We use it to take showers, wash our clothes, and water our lawns. And, many big farms and ranches that produce all the food we eat use lots and lots of water to irrigate (water) their crops and livestock (animals). All of these human activities greatly impact the environment. The dams turn the rivers into lakes, which affects the survival of plants and animals in the river. And the clothes washing, lawn watering, and farm irrigation use extra water and sometimes pollute local water sources with detergents and fertilizers, changing the quantity and quality of the available water."); ?></p>
						</div>
						
						<p class="grid_12"><?php echo _("But here's the good news. Humans are intelligent. We can make choices on how we live and what we do to the environment to minimize our impact on it."); ?></p>
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
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying impacts on environments..."); ?></strong></section></section>

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
