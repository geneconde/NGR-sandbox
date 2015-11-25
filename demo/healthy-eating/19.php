<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
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

	<!-- When using the grid and animated checkbox, use this condition for rtl support -->
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #8a0085; }
		h2 { color: #ff9a23;}
		
		.wrap { border-color: #F593FF; 
				border-left: 1px dashed #F593FF;
				border-right: 1px dashed #F593FF; 
		}
		.bg { background-image: url(assets/19/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #31b573; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		.ac-custom label::before { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		.ac-custom svg path { stroke: #31b573; } /* Change stroke-color */
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; /* for Safari */ }

		#buttons .next { display: none; }

		/*custom*/
		table.facts {
			border:1px solid black;
			font-size: 16px;
			font-family: arial;
			text-align: left;
			border-collapse: collapse; 
		}
		table.facts td {
			padding: 0px 2px;
		}

		.border-btm {
			border-bottom: 1px solid gray;
		}
		.no-border {
			border-bottom: none !important;
		}
		.dblock {
			display: block;
		}
		.title-facts {
			font-size: 50px;
			margin-bottom: -17px;
		}
		.boldtext {
			font-weight: bolder;
		}
		.smalltext {
			font-size: 14px;
		}
		.righttext {
			text-align: right;
		}
		.w10 {
			width: 10%;
		}

		.clear-b {
			clear:both;
		}

		<?php if ($language == 'ar_EG') : ?>
			.facts span { float: right; text-align: right; }
			.facts tr > td:nth-child(2) > span, .facts tr > td:nth-child(3) > span { float: left;}
			.float-r-content span {
				float:right !important;
			}

		<?php endif; ?>



		<?php if($language == 'es_ES') : ?>
			.title-facts {font-size: 33px; margin-bottom: 0;}
		<?php endif; ?>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #6"); ?></h1>
						<h2 class="grid_12"><?php echo _("The nutritional label and ingredients of a food are shown below. Based on this information, how many calories does 1.5 cups of this cereal have?"); ?></h2>

						<div class="grid_6">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" name="q" type="radio"><label for="a" class="float-r-content"><span>A</span><span>.</span><span>&nbsp;</span><span> <?php echo _("110"); ?></span></label></li>
									<li><input id="b" name="q" type="radio"><label for="b" class="float-r-content"><span>B</span><span>.</span><span>&nbsp;</span><span> <?php echo _("220"); ?></span></label></li>
									<li><input id="c" name="q" type="radio"><label for="c" class="float-r-content"><span>C</span><span>.</span><span>&nbsp;</span><span> <?php echo _("165"); ?></span></label></li>
									<li><input id="d" name="q" type="radio"><label for="d" class="float-r-content"><span>D</span><span>.</span><span>&nbsp;</span><span> <?php echo _("None of the above"); ?></span></label></li>
								<ol>
							</form>
						</div>
						<div class="grid_6">
							<table class="facts" >
								<tr style="border-bottom: 6px solid black">	
									<td colspan="3">
										<span class="dblock title-facts"><?php echo _("Nutrition Facts"); ?></span>
										<span class="dblock clear-b"><?php echo _("Serving Size 0.75 cup (28g)"); ?></span>
										<span class="dblock clear-b"><?php echo _("Serving Per Container 12"); ?></span>
									</td>
								</tr>
								<tr>
									<td colspan="3" class="border-btm">
										<span class="smalltext boldtext"><?php echo _("Amount per serving"); ?></span>
									</td>
								</tr>
								<tr style="border-bottom: 2px solid black;">
									<td colspan="2" class="border-btm">
										<span class="boldtext"><?php echo _("Calories"); ?></span><span> 110</span>
									</td>
									<td>
										<span><?php echo _("Calories from Fat 15"); ?></span>
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
										<span class="boldtext"><?php echo _("Total Fat"); ?></span><span> 1.5g</span>
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
										<span><?php echo _("Saturated Fat");?></span><span> 0g</span>
									</td>
									<td class="righttext border-btm">
										<span>2%</span>
									</td>
								</tr>
								<tr>
									<td class="w10">
										<span>&nbsp;</span>
									</td>
									<td class="border-btm">
										<span><?php echo _("Trans Fat"); ?></span><span> 0g</span>
									</td>
									<td class="righttext border-btm">
										<span>2%</span>
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
										<span class="boldtext"><?php echo _("Potassium"); ?></span><span> 0mg</span>
									</td>
									<td class="righttext border-btm">
										<span>0%</span>
									</td>
								</tr>	
								<tr>
									<td colspan="2" class="border-btm">
										<span class="boldtext"><?php echo _("Sodium");?></span><span> 0mg</span>
									</td>
									<td class="righttext border-btm">
										<span>0%</span>
									</td>
								</tr>	
								<tr>
									<td colspan="2" class="border-btm">
										<span class="boldtext"><?php echo _("Total Carbohydrate");?></span><span> 22g</span>
									</td>
									<td class="righttext border-btm">
										<span>0%</span>
									</td>
								</tr>	
								<tr>
									<td>
										<span>&nbsp;</span>
									</td>
									<td class="border-btm float-r-content">
										<span><?php echo _("Dietary Fiber");?></span><span> 2g</span>
									</td>
									<td class="righttext border-btm">
										<span>8%</span>
									</td>
								</tr>	
								<tr>
									<td>
										<span>&nbsp;</span>
									</td>
									<td class="border-btm float-r-content">
										<span><?php echo _("Sugars");?></span><span> 9g</span>
									</td>
									<td class="righttext border-btm">
										<span>0%</span>
									</td>
								</tr>	
								<tr>
									<td colspan="2" class="border-btm">
										<span class="boldtext"><?php echo _("Protein");?></span><span> 2g</span>
									</td>
									<td class="righttext border-btm">
										<span>4%</span>
									</td>
								</tr>

							</table>
						</div>
						<div class="clear"></div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<p class="grid_12 answer"></p>

						<div class="grid_12 feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

			if (id == 'a') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, one serving size has 110 calories. The question asks for 1 and a half cups (two servings), so you should double the amount of calories, 220.'); ?></p>");

				answer = 'A';
			}

			if (id == 'b') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Correct. Two serving sizes has double the amount of calories in the table: 2 X 110 = 220 calories for one and a half cups.'); ?></p>");

				answer = 'B';
			}

			if (id == 'c') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, two serving sizes has double the amount of calories in the table: 2 X 110 = 220 calories for one and a half cups.'); ?></p>");

				answer = 'C';
			}

			if (id == 'd') {
				$('#answer').find('.answer').html(text);
				$('#answer').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No, the correct answer is 220. Two serving sizes has double the amount of calories listed in the table.'); ?></p>");

				answer = 'D';
			}
		});

		function save() {
			if (answered == 0) {
				saveAnswer('module-qq#-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

				$('#question').fadeOut(function(){ 

					save();

					$('#answer').fadeIn();
					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "18.php";
			} else if ($('#answer').is(':visible')) {
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
