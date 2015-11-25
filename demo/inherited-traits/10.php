
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
		h1 { color: #adaf00; }
		span.key { color: #249ab8;}		
		.wrap { border-color: #EFFDE4; 
			border-left: 1px dashed #1B4A16;
			border-right: 1px dashed #1B4A16;
		}
		.bg { background-image: url(assets/10/bg.jpg); }
		#screen2, #screen3 { display: none; }

		#buttons .next { display: none; }


		.next1, .prev { position: absolute; top: 36% }

		.cycle-slideshow {
			width: 81%;
			margin: 20px auto 0;
			height: 300px;
			border: 1px solid rgb(219, 219, 219);
			-webkit-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			-moz-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			background-color: #eff4d1;

		}

		.next1 { right: 43px; cursor: pointer;}
		.prev { left: 43px;  cursor: pointer;}
		.center { text-align: center;}

		.legends { width: 5%; min-height: 50px;}
		.legend_red { background: red; }
		#slider-bg { background: #f8e1bd; }
		#slider-bg p { font-size: 22px; }
		.mtop {margin-top: 20px;}
		
		.yellow-bg { background: #f8e1bd; text-align: center; padding: 0 20px;}



		/* SCREEN 3 style */

		table { margin: 20px auto; }

		table td { border: 4px solid #accff3; border-radius: 2px; }
		table th { font-weight: normal; }
		table th:nth-child(2), table th:nth-child(3), table th:nth-child(4), tr td {
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			border: 4px solid #accff3;;
		}

		table td { width: 10%; text-align: center;}

		table {
		    border-collapse: separate;
		    border-spacing: 5px;
		}

		.circleBase { border-radius: 50%; }
		.type1 {
		    width: 30px;
		/*  height: 50px; */
		    background: #ffaac2;
		    border: 3px solid #accff3;
		    float: left;
		    text-align: center; 
		    padding: 10px;
		}
		
		/* END */
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
 			#slider-bg p {
			    font-size: 20px;
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
						<h1 class="grid_12"><?php echo _("More big ideas about... inherited traits"); ?></h1>
						
						<p class="grid_12"><?php echo _("It's even possible to make predictions about how likely it is for given sets of parents to produce particular offspring. What’s more, we can even determine the genotypes of parents if we know the phenotypes of their offspring."); ?></p>

						<div class="grid_10 prefix_1 suffix_1">
						
							<div id="slider-bg" class="clearfix">
								<div class="grid_8">
									<p class="grid_12"><?php echo _("Here’s another problem"); ?></p>

									<p class="grid_10 prefix_1" style="margin-left:-10px;"><?php echo _("A brown mouse mated with a black mouse. Their offspring were all brown. Two of the offspring were then allowed to mate. What colors of offspring could they have? If the litter was eight baby mice, how many would likely be black?"); ?></p>

								</div>

								<div class="grid_4">
									<ul class="rslides">
										<li><img src="assets/10/slide1.jpg"><span class="caption"></span></li>
										<li><img src="assets/10/slide2.jpg"><span class="caption"></span></li>
									</ul>
								</div>
							</div>
							
						</div>

						<p class="grid_12"><?php echo _("This one is tricky. Using the same rules of dominance we saw above, we would predict that the offspring were both Bb.  Two Bb parents should be able to have both brown and black offspring. The problem comes up when we’re asked to predict how many of either color are likely."); ?></p>
						
						
					</div>


					<div id="screen2" class="screen">
						<div class="grid_12">							
								
							<p class="grid_12"><?php echo _("That's when a useful tool comes in handy. <span class='key'>Punnett squares</span> allow us to make such predictions, by showing which genotype combinations are possible in the next generation."); ?></p>
							<p class="grid_12"><?php echo _("Here's how it works:"); ?></p>

							<div class="grid_3 yellow-bg mtop">
								<p class="grid_12"><?php echo _("Original Parents"); ?></p>
							</div>

							<div class="grid_7 suffix_1 clearfix mtop">
								<div class="circleBase type1"><?php echo _("BB"); ?></div>
								<p class="grid_2 prefix_1"><?php echo _("or"); ?></p>
								<div class="circleBase type1"><?php echo _("Bb"); ?></div>
								<p class="grid_2 prefix_1"><?php echo _("X"); ?></p>
								<div class="circleBase type1"><?php echo _("bb"); ?></div>
								<!-- <p class="grid_12">test Parents</p> -->
							</div>

							<div class="mtop grid_3 yellow-bg">
								<p class="grid_12"><?php echo _("First set of Parents"); ?></p>
							</div>

							<div class="grid_7 suffix_1 mtop">
								<div class="circleBase type1"><?php echo _("Bb"); ?></div>
								<p class="grid_2 prefix_1"><?php echo _("X"); ?></p>
								<div class="circleBase type1"><?php echo _("Bb"); ?></div>
							</div>

							<p class="grid_12 mtop"><?php echo _("The original parents were the brown and black mice. Since all of their offspring mice were brown, brown had to be dominant.  The black parent, then, was bb. The brown parent could have been either genotype, but any brown offspring had to be Bb since they received b from the other parent."); ?></p>

						</div>	
						
					</div>

					<div id="screen3" class="screen">
						<p class="grid_12"><?php echo _("A Punnett square is a way of organizing which genes may be transmitted into a new generation.  Since each parent passes along only half of its gene combination, the Punnett square is organized like this:") ?></p>
						
						<div class="grid_12">

							<table>

								<tr>

									<th></th>
									<th><?php echo _("B"); ?></th>
									<th><?php echo _("b"); ?></th>

								</tr>

								<tr>

									<td><?php echo _("B"); ?></td>
									<td><?php echo _("BB"); ?></td>
									<td><?php echo _("Bb"); ?></td>
									
								</tr>

								<tr>

									<td><?php echo _("b"); ?></td>
									<td><?php echo _("Bb"); ?></td>
									<td><?php echo _("bb"); ?></td>
								
								</tr>			
								
							</table>

						</div>

						<p class="grid_12"><?php echo _("The single letters in the top row and left column show that each parent passes along half of its genes.  The combinations in the table are the only possible gene combinations possible in the next generation. Three of the genotypes have B, resulting in brown mice. Only one has bb, leading to black mice. So, each individual has a 3/4  chance of being brown, and 1/4 chance of being black. Another way to say this is that in any litter, 3/4 are expected to be brown and 1/4 are expected to be black."); ?></p>

						<p class="grid_12"><?php echo _("So... If there are eight baby mice in the litter, we expect 1/4, or 2, to be black."); ?></p>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Predicting colors..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>

		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});

		$( '.cycle-slideshow' ).cycle({
   				 next: '.next1',
   				 prev: '.prev'
				});

	</script>
	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 3;

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

		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});

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
				$('.next').fadeOut(function() { 
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
					$('.next').fadeIn(); 
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
