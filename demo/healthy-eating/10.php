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
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #004c99; font-size: 33px; }
		h2 { text-align: center; color: #8560a8; margin-bottom: 0; }
		.key { color: #249ab8;}
		.wrap { border-color: #BFEE92; }
		.bg { background-image: url(assets/10/bg.jpg); overflow: hidden;}

		#screen2, #screen3 { display: none; }
		#buttons .next { display: none; }
		.image { margin-top: -10px;}
		.align-center {
			text-align: center;
		}

		.small { display: block; width:400px; }
		#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv img { width: 79%; margin-top: 7px; }
		.pet:hover {cursor: pointer;}
		.pet {width: 100%;padding: 0;display: block;margin: 20px auto 0;}
		.click {text-align: center;font-size:22px;}
		#close {background: white; color: #406468; display: block; margin: 40px auto 0; width: 98px; padding:10px; border-radius: 5px; text-align:center;}
		#close:hover{ cursor: pointer; }
		.margin0 { margin: 0px;}
		.pretzel {color: white; margin-left: 36px;}
		.potato { color: white; margin-left: -36px; }
		.margin_20 { margin-top: -15px;}
		.ta-left{text-align:left;}
		.table-cont{ background: #fff; margin-bottom: 2px;}
		
		/*custom*/
		table.facts {
			border:1px solid black;
			font-size: 12px;
			font-family: arial;
			text-align: left;
			border-collapse: collapse; 
			width: 100%;
		}
		table.facts td {padding: 4px	}
		.border-btm {border-bottom: 1px solid gray;	}
		.no-border {border-bottom: none !important;	}
		.dblock {display: block;}
		table.facts .title-facts {font-size: 43px;margin-bottom: -17px;	}
		.boldtext {	font-weight: bolder;}
		table.facts .smalltext {font-size: 14px;}
		.righttext {text-align: right;}
		.w10 {width: 10%;}
		.w50{width: 50%;}
		
		table.facts2 {
			border:1px solid black;
			font-size: 8px;
			font-family: arial;
			text-align: left;
			border-collapse: collapse; 
			width: 100%;
		}
		table.facts2 td {padding: 1px 2px;	} 
		table.facts2 .title-facts {font-size: 20px;	}
		table.facts2 .smalltext{font-size: 10px;}
		.ta-center{text-align: center;}
		.ta-center img{width: 39.667%;}
		
		#open { background: #FEF1BC; color: #406468; display: block; margin: 0 auto; width: 76%; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
		#open:hover{ cursor: pointer; }
		
		textarea { width: 100%; border: 1px solid #8781bd; margin: 10px 0; max-height: 300px; min-height: 240px; padding: 12px; }

		<?php if($language == 'es_ES') : ?>
			table.facts td {padding: 3px;}
			.title-facts { font-size: 34px !important; margin-bottom: 0 !important; }
			#open { margin-top: 0; }
			.pet { margin-top: 0; }
			#close {width: 98px;}

			@media only screen and (max-width: 862px) {
				
				textarea {min-height: 220px;}

			}

		<?php endif; ?>

		<?php if ($language == 'ar_EG') : ?>
			.facts span { float: right; text-align: right; }
			.facts tr > td:nth-child(2) > span, .facts tr > td:nth-child(3) > span { float: left;}
			.float-r-content span {
				float:right !important;
			}

		<?php endif; ?>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
				<span id="close"><?php echo _('Close me!'); ?></span>
				<div class="container_12 clearfix">
					<div class="grid_6">
						<p class="grid_12 align-center pretzel"><?php echo _("Pretzels"); ?></p>
					</div>
					<div class="grid_6">
						<p class="grid_12 align-center potato"><?php echo _("Potato Chips"); ?></p>
					</div>
					<div class="clear"></div>
					<!--<img class="small" src="assets/10/nutrition-facts.jpg" width="200"/>-->
					<div class="grid_6 table-cont">
						<table class="facts" >
							<tr style="border-bottom: 6px solid black">	
								<td colspan="3">
									<span class="dblock title-facts"><?php echo _("Nutrition Facts"); ?></span>
									<span class="dblock"><?php echo _("Serving Size: 60g"); ?></span>
								</td>
							</tr>
							<tr>
								<td colspan="3" class="border-btm">
									<span class="smalltext boldtext"><?php echo _("Amount per serving"); ?></span>
								</td>
							</tr>
							<tr style="border-bottom: 2px solid black;">
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Calories"); ?></span><span> 229</span>
								</td>
								<td class="righttext">
									<span><?php echo _("Calories from Fat 18"); ?></span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span></span>
								</td>
								<td class="righttext border-btm">
									<span><?php echo _("% Daily Values"); ?></span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm float-r-content">
									<span class="boldtext"><?php echo _("Total Fat"); ?></span><span> 2g</span>
								</td> 
								<td class="righttext border-btm">
									<span>3%</span>
								</td>
							</tr>
							<tr>
								<td class="w10">
									<span>&nbsp;</span>
								</td>
								<td class="border-btm float-r-content">
									<span><?php echo _("Saturated Fat"); ?></span><span> 0g</span>
								</td>
								<td class="righttext border-btm">
									<span>2%</span>
								</td>
							</tr>
							<tr>
								<td class="w10">
									<span>&nbsp;</span>
								</td>
								<td class="border-btm float-r-content">
									<span><?php echo _("Trans Fat"); ?></span><span> 0g</span>
								</td>
								<td class="righttext border-btm">
									<span>&nbsp;</span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Cholesterol"); ?></span><span> 0mg</span>
								</td>
								<td class="righttext border-btm">
									<span>0%</span>
								</td>
							</tr>		
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Sodium"); ?></span><span> 173mg</span>
								</td>
								<td class="righttext border-btm">
									<span>7%</span>
								</td>
							</tr>	
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Total Carbohydrate"); ?></span><span> 48g</span>
								</td>
								<td class="righttext border-btm">
									<span>16%</span>
								</td>
							</tr>	
							<tr>
								<td>
									<span>&nbsp;</span>
								</td>
								<td class="border-btm float-r-content">
									<span><?php echo _("Dietary Fiber"); ?></span><span> 2g</span>
								</td>
								<td class="righttext border-btm">
									<span>7%</span>
								</td>
							</tr>	
							<tr>
								<td>
									<span>&nbsp;</span>
								</td>
								<td class="border-btm float-r-content">
									<span><?php echo _("Sugars"); ?></span><span> 1g</span>
								</td>
								<td class="righttext border-btm">
									<span>0%</span>
								</td>
							</tr>	
							<tr style="border-bottom: 6px solid black">
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Protein"); ?></span><span> 5g</span>
								</td>
								<td class="righttext border-btm">
									<span>&nbsp;</span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Vitamin A"); ?></span><span>: </span><span>0%</span>
								</td>
								<td class="border-btm w50 float-r-content">
									<span class="boldtext"><?php echo _("Vitamin C"); ?></span><span>: </span><span>0%</span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Calcium"); ?></span><span>: </span><span>2%</span>
								</td>
								<td class="border-btm w50 float-r-content">
									<span class="boldtext"><?php echo _("Iron"); ?></span><span>: </span><span>14%</span>
								</td>
							</tr>
							<tr>
								<td colspan="3" class="border-btm">
									<span><?php echo _("*Percent Daily Values are based on a 2,000 calorie diet. Your daily Values may be higher or lower depending on your calories needs."); ?></span>
								</td>
							</tr>

						</table>
					</div>
					<div class="grid_6 table-cont">
						<table class="facts" >
							<tr style="border-bottom: 6px solid black">	
								<td colspan="3">
									<span class="dblock title-facts"><?php echo _("Nutrition Facts"); ?></span>
									<span class="dblock"><?php echo _("Serving Size: 227g"); ?></span>
								</td>
							</tr>
							<tr>
								<td colspan="3" class="border-btm">
									<span class="smalltext boldtext"><?php echo _("Amount per serving"); ?></span>
								</td>
							</tr>
							<tr style="border-bottom: 2px solid black;">
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Calories"); ?></span><span> 1217</span>
								</td>
								<td class="righttext">
									<span><?php echo _("Calories from Fat 691"); ?></span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span></span>
								</td>
								<td class="righttext border-btm">
									<span><?php echo _("% Daily Values"); ?></span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Total Fat"); ?></span><span> 79g</span>
								</td> 
								<td class="righttext border-btm">
									<span>121%</span>
								</td>
							</tr>
							<tr>
								<td class="w10">
									<span>&nbsp;</span>
								</td>
								<td class="border-btm float-r-content">
									<span><?php echo _("Saturated Fat"); ?></span><span> 12g</span>
								</td>
								<td class="righttext border-btm">
									<span>62%</span>
								</td>
							</tr>
							<tr>
								<td class="w10">
									<span>&nbsp;</span>
								</td>
								<td class="border-btm float-r-content">
									<span><?php echo _("Trans Fat"); ?></span>
								</td>
								<td class="righttext border-btm">
									<span>&nbsp;</span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Cholesterol"); ?></span><span> 0mg</span>
								</td>
								<td class="righttext border-btm">
									<span>0%</span>
								</td>
							</tr>		
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Sodium"); ?></span><span> 18mg</span>
								</td>
								<td class="righttext border-btm">
									<span>1%</span>
								</td>
							</tr>	
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Total Carbohydrate"); ?></span><span> 120g</span>
								</td>
								<td class="righttext border-btm">
									<span>40%</span>
								</td>
							</tr>	
							<tr>
								<td>
									<span>&nbsp;</span>
								</td>
								<td class="border-btm float-r-content">
									<span><?php echo _("Dietary Fiber"); ?></span><span> 11g</span>
								</td>
								<td class="righttext border-btm">
									<span>44%</span>
								</td>
							</tr>	
							<tr>
								<td>
									<span>&nbsp;</span>
								</td>
								<td colspan="2" class="border-btm float-r-content">
									<span><?php echo _("Sugars"); ?></span>
								</td>
							</tr>	
							<tr style="border-bottom: 6px solid black">
								<td colspan="3" class="border-btm">
									<span class="boldtext"><?php echo _("Protein"); ?></span><span> 16g</span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Vitamin A"); ?></span><span>: </span><span>0%</span>
								</td>
								<td class="border-btm w50 float-r-content">
									<span class="boldtext"><?php echo _("Vitamin C"); ?></span><span>: </span><span>118%</span>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="border-btm">
									<span class="boldtext"><?php echo _("Calcium"); ?></span><span>: </span><span>5%</span>
								</td>
								<td class="border-btm w50 float-r-content">
									<span class="boldtext"><?php echo _("Iron"); ?></span><span>: </span><span>21%</span>
								</td>
							</tr>
							<tr>
								<td colspan="3" class="border-btm">
									<span><?php echo _("*Percent Daily Values are based on a 2,000 calorie diet. Your daily Values may be higher or lower depending on your calories needs."); ?></span>
								</td>
							</tr>

						</table>
					</div>
				</div>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Using what you know about... healthy eating... to solve a problem"); ?></h1>
						<h2 class="grid_12"><?php echo _("The Scenario"); ?></h2>
						<p class="grid_12"><?php echo _("You are a <span class='key'>nutritionist</span> (a person who advises people on matters of healthy eating). You have a client who does not want to lose weight. He simply wants to learn to eat healthy foods that fit his lifestyle. So you go over calories and a basic meal plan with him on the first session."); ?></p>
						
						<div class="grid_8 prefix_2">
							<ul class="rslides slider">
								<li><img src="assets/10/fruit1.jpg"></li>
								<li><img src="assets/10/fruit2.jpg"></li>
								<li><img src="assets/10/fruit3.jpg"></li>
							</ul>
						</div>

					</div>

					<div id="screen2" class="screen">
					
						<h2 class="grid_12"><?php echo _("The Problem"); ?></h2>
						<p class="grid_12"><?php echo _("Using what your client now knows about healthy eating, which snack would you suggest he has: pretzels or potato chips? Below are the nutrition labels, discuss the nutritional values of both snacks and compare them. Which snack would you advise he should eat based on calories? Remember to take the fat, salt, and sugar content of each food into consideration. You can also add in any suggestions you have for a healthier snack."); ?></p>
						<!-- <h2 class="grid_12 align-center margin_20" style="color: black;"><?php echo _("Click to enlarge"); ?></h2> -->
						
						<div class="grid_6 prefix_3 suffix_3 pet">						
								
							<span id="open"><?php echo _("Click here to view nutrition labels"); ?></span>					
							
							<div class="clear"></div>
						</div>
						<div class="grid_8 prefix_2">
							<textarea placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="#" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Planning for diet..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
			$('.pet').click(function() {
				$('#graphDiv').fadeIn();
			});
			$('#close').click(function() {
				$('#graphDiv').fadeOut();
			});


		var hash = window.location.hash.slice(1);
		var screenCount = 2;
		var answered = 1; /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */

		$('.next').click(function() {
			if ($('textarea').val() == '') {
				alert("<?php echo _("Please type your answer."); ?>");
				return false;
			} else {
				if (answered == 0) {
					saveMeta('gravity-in-action', $('textarea').val());
					answered = 1;
				}

				document.location.href = "11.php";
			}
		});

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href= "9.php";
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function() { $('#screen1').fadeIn(); });
			}
		});

		$('.readmore').click(function() {

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
		
		$(".slider").responsiveSlides({
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
