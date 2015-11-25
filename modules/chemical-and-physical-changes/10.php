<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'chemical-and-physical-changes';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(10, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

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
		h1 { color: #EB6966; }
		p{font-size: 24px;}
		
		.wrap { border-color: #C3FFFF; }
		.bg { background-image: url(assets/10/bg.jpg); overflow: hidden; background-size: 100% 100% !important; }

		.slider-container { float: right; }
		
		#buttons .next, #screen2 { display: none; }
		<?php if ($language == 'es_ES') : ?>
			#screen2 div{ font-size: 22px;}
		<?php else : ?>
			#screen2 div{ font-size: 24px;}
		<?php endif; ?>
		#screen2{ font-size: 24px;}
		#screen2 div { float:right; margin: 25px 25px;}
		table { margin: 15px auto; clear:both;}
		table td { font-size: 20px; text-align: center; padding: 3px 9px; background: #fff; border: solid #7844D7 1px;}
		@media screen and (max-width: 1250px){
			#screen1 p{font-size: 22px;}
			#screen2 div{font-size: 20px;}
			#screen1 img{ height: 200px;}
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			#screen2 div { float:right; margin: 5px 25px;}
			
		}
		@media	screen and (max-width: 960px){
			p{font-size: 19px;}
			#screen2{ font-size: 19px;}
			.screen2_table td{ font-size: 18px;}
		}
		@media screen and (max-width: 720px){
			p{font-size: 16px;}
			#screen2{ font-size: 17px;}
			.screen2_table td{ font-size: 18px;}
			#screen2 img{ width:84%; margin: 5px 0;}

		}
		@media screen and (max-width:  650px){
			table {font-size: 16px}
			.screen2_table td{ font-size: 12px;}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... chemical and physical changes"); ?></h1>
						<p class="grid_12"><?php echo _("How about burning the candles on the cake – is that a chemical or a physical change? Well, it turns out it's both!!"); ?></p>
						<p class="grid_7"><?php echo _("The candles are made of wax – which is a chemical compound made of the <span class='key'>elements</span> carbon and hydrogen. A <span class='key'>chemical compound</span> is when two or more different elements – like carbon and hydrogen - combine to form a compound like wax, or when hydrogen and oxygen combine to form a different compound called water."); ?></p>
						<div class="grid_5">
							<img src="assets/10/candle.gif" />
						</div>
						<p class="grid_12"><?php echo _("When you light the candles, the heat from the burning candlewick – the string - melts some of the solid wax and turns it into liquid wax. That's a physical change because the change is reversible – which means, if you just let the melted wax cool - it will turn right back into solid wax again. But here's something that's not so obvious – the heat also turns some liquid wax into a gas. That's also a physical change because if you could quickly cool the gas again, it would turn back into liquid and then solid wax."); ?>
					</div>

					<div id="screen2" class="screen">
						<div>
							<div class="grid_5">
								<img src="assets/10/fire.gif" />
							</div>
							<?php echo _("But here's the interesting thing – the gas formed by heating the wax immediately has a <span class='key'>chemical reaction</span> with the oxygen in the air to make the flame which generates light and heat. This chemical reaction is what we commonly call “burning” but scientists call combustion. Not only does the chemical reaction create energy in the form of heat and light, but it also changes the methane gas from the wax into carbon dioxide and water vapor gases, which mix with the air around the candle. So the chemical compound from the melted wax, the methane gas, reacts with oxygen from the air and creates heat, light, water vapor and carbon dioxide gas. This is an example of a chemical reaction and <span class='key'>chemical change</span>, which is not <span class='key'>reversible</span>, because if you let the water and carbon dioxide cool or do almost anything else to them, they will not turn back into wax. <br>This is the chemical reaction for the burning (also called combustion) process:"); ?>
							
						</div>
						
			        	<table class="screen2_table">
			        		<tr>
			        			<td>CH<sub>4</sub></td>
			        			<td>+</td>
			        			<td>O<sub>2</sub></td>

								<?php if ($language == 'ar_EG') { ?>
				        			<td><img src="assets/8/arrow-r.png" /></td>
				        		<?php } else { ?>
				        			<td><img src="assets/8/arrow.png" /></td>
				        		<?php } ?>
				        		
			        			<td>CO<sub>2</sub></td>
			        			<td>+</td>
			        			<td>H<sub>2</sub>O</td>
			        			<td>+</td>
			        			<td><?php echo _("Heat and Light"); ?></td>
			        		</tr>
			        		
			        		<tr>
			        			<td><?php echo _("Methane gas"); ?></td>
			        			<td><?php echo _("Plus"); ?></td>
			        			<td><?php echo _("Oxygen"); ?></td>
			        			<td><?php echo _("Becomes"); ?></td>
			        			<td><?php echo _("Carbon dioxide"); ?></td>
			        			<td><?php echo _("Plus"); ?></td>
			        			<td><?php echo _("Water"); ?></td>
			        			<td><?php echo _("Plus"); ?></td>
			        			<td><?php echo _("Energy"); ?></td>
			        		</tr>
			        	</table>
			        	
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Lighting a candle..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

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
				document.location.href = "9.php";
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
	
	<script>
			
		$(".rslides1").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false,
		    speed: 400
		});
		
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
