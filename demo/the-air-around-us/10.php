<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'air-around-us';
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

	<title><?php echo _("The Air Around Us"); ?></title>

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
		h1 { color: #7ba207; }
		.wrap > .bg { overflow: hidden !important; }
		.wrap { border-color: #E1D8F4; }
		.bg { background-image: url(assets/10/bg.jpg); }

		#screen2, #screen3 { display: none; }

		#buttons .next { display: none; }
		
		.rslides { width: 90%;}
		.rslides_nav { position: absolute; width: 15%; }
		.slider-container .prev { left: 0; top: 120px; content: url(assets/10/prev.png); }
		.slider-container .next { right: 0; top: 120px; content: url(assets/10/next.png); display: block; }
		#screen3 .slider-container .next { right: 70px; }
		#screen3 .slider-container .prev { left: 70px; }
		.caption { color: #FB5F21; }
		#screen3 p:first-of-type {margin-top: 45px;}

		@media all and (max-width: 1250px) {
			#screen3 p:first-of-type {margin-top: 0px;}
			#screen3 .grid_5 img { padding: 0 10%;}
			.rslides img, .rslides1 img { padding: 0 5%;}
		}
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
		@media only screen and (max-width: 1250px){
			p.grid_12, p.grid_7 {
			    line-height: 25px;
			}
		}
		<?php if ($language == 'es_ES') : ?>
			p.grid_12 {
			    line-height: 29px;
			}
			@media only screen and (max-width: 1250px){
				p.grid_12 {
				    line-height: 25px;
				}
				.container_12 .grid_5 {
				    width: 34.667%;
				}
			}
		<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... the air around us"); ?></h1>
						
						<p class="grid_12"><?php echo _("You should now know that the air close to Earth’s surface contains gases such as nitrogen, oxygen, carbon dioxide and argon as well as water vapor.  The amount of water that the atmosphere holds is influenced by its temperature. Warmer air, for example, can hold more water than cooler air. On warm days when there is a lot of moisture in the air, the air can feel very humid. As the air cools down as it rises to a higher altitude near mountains, or following a dramatic drop in temperature as the sun begins to set, the air can no longer hold as much water. Under such conditions, the water in the air condenses and it begins to precipitate as rain, snow, or sleet."); ?></p>
						<div class="slider-container grid_8 prefix_2 suffix_2">
							<ul class="rslides1">
								<li><img src="assets/10/1.jpg" /></li>
    							<li><img src="assets/10/2.jpg" /></li>
    							<li><img src="assets/10/3.jpg" /></li>
    							<li><img src="assets/10/4.jpg" /></li>
							</ul>
							
						</div>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("In addition to holding water, the atmosphere also absorbs <span class='key'>pollutants</span> - gases and small particles emitted by natural hazards such as volcanic eruptions and natural forest fires or human activity such as burning debris or industrial activities associated with generating electricity or manufacturing goods. Pollutants in the air can have a negative impact on human health as well as the environment. For example, asthma is a chronic and very often debilitating disease of the lungs caused by air pollution from cars, power plants and industrial manufacturing.");?> </p>
						<p class="grid_7"><?php echo _("People suffering from asthma have trouble breathing and engaging in even simple activities such as walking. Another example is found in lead. Lead is a metal that can enter the atmosphere as a result of burning fossil fuels. Once in the atmosphere, lead can be transported by wind and rain to places far away from the source of pollution. When humans ingest (eat) plants and animals that have been contaminated by lead pollution they can suffer from diseases that affect the brain and nervous system."); ?></p>
						<img class="grid_5" src="assets/10/boy.jpg" />
					</div>

					<div id="screen3" class="screen">
						<p class="grid_7"><?php echo _("Sometimes, the air above urban areas can be filled with a dense mixture of smoke, atmospheric pollutants and water vapor. The thick, cloud-like formation that hangs over a city is known as <span class='key'>smog</span>."); ?> </p>

						<div class="grid_5">
							<img src="assets/10/smog.jpg" />
						</div>
						
						<p class="grid_12"><?php echo _("According to the Environmental Protection Agency (EPA), examples of common pollutants found in Earth’s atmosphere includes:"); ?> </p>

						<div class="slider-container grid_6 prefix_3 suffix_3">
							<ul class="rslides">
    							<li><img src="assets/10/carbon.jpg" /><span class="caption"><?php echo _("Carbon Monoxide"); ?></span></li>
    							<li><img src="assets/10/lead.jpg" /><span class="caption"><?php echo _("Lead"); ?></span></li>
    							<li><img src="assets/10/nitrogen.jpg" /><span class="caption"><?php echo _("Nitrogen Oxide"); ?></span></li>
    							<li><img src="assets/10/particulate.jpg" /><span class="caption"><?php echo _("Particulate Matter"); ?></span></li>
    							<li><img src="assets/10/sulfur.jpg" /><span class="caption"><?php echo _("Sulfur Dioxide"); ?></span></li>
    							<li><img src="assets/10/ozone.jpg" /><span class="caption"><?php echo _("Ozone"); ?></span></li>
    							
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
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Cleaning air..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
			
		$(".rslides1").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false,
		    speed: 400
		});
		$(".rslides").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false,
		    speed: 400
		});
		
		var hash = window.location.hash.slice(1);
		var screenCount = 4;

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('#buttons .next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "9.php";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {

				$('.back').fadeOut(); 

				$('#buttons .next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('#buttons .next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function() {
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
				});
			}
		});

	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
