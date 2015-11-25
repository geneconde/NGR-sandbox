<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
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

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/captionHoverEffects.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #F16D2D; font-size: 30px; }
		p {  margin: 0px 0;}
		.wrap { border-color: #CEFAFD; }
		.bg { background-image: url(assets/6/bg.jpg); }
		#screen1 .rslides { float: right; }
		
		#screen2 { display: none; }
		#buttons .next { display: none; }
		#screen2 > div img { height: 230px; }
		
		.grid li { float: left; padding: 7px; }
		.grid a { display: none !important; }
		.grid figcaption { padding: 10px; background-color: #FFEBB5; height: auto; color: black; }
		.grid figcaption span { font-size: 20px; }
		.cs-style-1 figcaption { width: 90%; }

		@media (max-width: 1250px) {
			img, video {
			  width: 87% !important;
			}
			p{
				font-size: 22.5px !important;
			}
		}

		@media only screen and (max-width: 1250px){
			#not-sortable img {
			  width: 71px !important;
			  left: 20px !important;
			}
		}
		.upper { text-transform: uppercase; }
		<?php if ($language == 'es_ES') : ?>
			@media only screen and (max-width: 1250px){
				p { font-size: 22px !important; }
			}
		<?php endif; ?>
		@media only screen and (max-width: 960px){
			div#screen1 p {
			    font-size: 20px !important;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... energy and chemical changes"); ?></h1>
						
						<p class="grid_7"><?php echo _("Energy is everywhere and it's necessary when any kind of changes occur in the universe. What kind of changes? Here are some examples. When an object speeds up, slows down, starts or stops, these are changes in motion that require energy. When something heats up or cools down, energy is involved. When it's dark and you turn on the light, it requires energy. When you're sitting and you get up and walk, energy is needed. Anything that happens requires energy!!"); ?></p>
						
						<div class="grid_5">
							<ul class="rslides">
								<li><img src="assets/6/a.jpg"></li>
								<li><img src="assets/6/b.jpg"></li>
							</ul>
						</div>
						<p class="grid_12"><?php echo _("And here's another very important idea from science about energy: \"Energy cannot be created or destroyed - it just changes forms\". This is called the \"<span class = 'key upper'>Law of Conservation of Energy</span>\". It just means that whenever any of those changes we were talking about happens, energy is never gained or lost in the universe - it just changes forms. That's why energy is never actually \"produced\" by a battery, or a windmill, or any other device. These devices just take one form of energy that already exists and changes it into a different form."); ?>
					</div>
					
					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("So what are these different forms or kinds of energy? Here the names scientists use for just a few kinds of energy you might encounter everyday."); ?></p>
						<p class="grid_12"><?php echo _("Hover on the different kinds of energy to see the details."); ?></p>
						
						<ul class="grid cs-style-1">
							<li class="grid_3">
								<figure>
									<img src="assets/6/7.jpg">
									<figcaption>
										<span><?php echo _("Biological energy is the energy used by your body to do all the things that make us alive."); ?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li class="grid_3">
								<figure>
									<img src="assets/6/6.jpg">
									<figcaption>
										<span><?php echo _("Heat energy is what keeps everything warm."); ?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li class="grid_3">
								<figure>
									<img src="assets/6/5.jpg">
									<figcaption>
										<span><?php echo _("Light energy is what helps us to see."); ?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li class="grid_3">
								<figure>
									<img src="assets/6/4.jpg">
									<figcaption>
										<span><?php echo _("Sound energy is the vibration of air or other molecules that helps us to hear."); ?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li class="grid_3 prefix_1">
								<figure>
									<img src="assets/6/3.jpg">
									<figcaption>
										<span><?php echo _("Electrical energy is the energy of electrons going through wires to make so many things work."); ?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li class="grid_3">
								<figure>
									<img src="assets/6/2.jpg">
									<figcaption>
										<span><?php echo _("Chemical energy is stored energy in chemical compounds such as found in food."); ?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li class="grid_3">
								<figure>
									<img src="assets/6/1.jpg">
									<figcaption>
										<span><?php echo _("Kinetic energy is the energy of motion."); ?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
						</ul>
						
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Changes in motion..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>

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
				document.location.href = "5.php";
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
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>
	
	<?php include 'setlocale.php'; ?>
	
</body>
</html>
