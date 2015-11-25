<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
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
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #fe8a17; }
		h2 { color: #00a49d; margin: 5px 0; }
		
		.wrap { border-color: #78DFFE; }
		.bg { background-image: url(assets/5/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #31b573; }
		.ac-custom label { color: #000; padding-left: 49px; font-size: 21px; }
		.ac-custom svg path { stroke: #31b573; }
		.ac-custom li {padding: .2em 0;}
		
		#question1 input[type="checkbox"] + label { width: 100%; }
		#question1 input[type="checkbox"] + label img { width: auto; display: block; padding: 2px;}
		#question1 input[type="checkbox"] { display: none; }
		#question1 input[type="checkbox"] + label img {
			margin: 2px auto;
		    border: 4px solid transparent;
		    border-radius: 10px;
		    cursor: pointer;
		
		    -webkit-transition: all .3s ease;
		    transition: all .3s ease;
		}

		#question1 input[type="checkbox"]:checked + label img {
		    border: 4px solid #31B573;
		    border-radius: 50%;
		
		    -webkit-transition: all .3s ease;
		    transition: all .3s ease;
		
		    backface-visibility: hidden;
		}

		#question1 div span {
		    color: #000;
		    display: block;
		    text-align: center;
		    transition: all .3s ease;
		    backface-visibility: hidden;
		    cursor: pointer;
		}

		#question input[type="checkbox"]:checked + label span { color: #777; }

		#answer .answer { text-align: center; }
		#answer .answer p { width: 23.0%; display: inline-block; margin: auto 1%; }
		#answer .answer span { display: block; } 

		#question2 .ac-custom label::before { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #31b573; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }

		#answers p { margin: 5px 0; }

		#answers .answer { text-align: center; }
		#answers .answer p { width: 14%; display: inline-block; margin: auto 1%; }
		#answers .answer span { display: block; } 

		.answer img { width: auto; }
		
		.show_table span { background: #F2EA3F; padding: 2px 10px; text-align: center; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; cursor: pointer; }
		
		#grey { position: absolute; background: rgba(0, 0, 0, .8); width: 100%; height: 100%; margin: 0; z-index: 1000; display: none; }
		#grey > div { margin-top: 20%; }
		#grey .close { z-index: 1001; text-align: center; cursor: pointer; margin-top: 10px;}
		#grey span { background: #7FAAFF; color: white; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; padding: 5px; }
		table th { background: #7FAAFF; color: white; border: 1px solid #004562; padding: 0 17px; }
		table td { background: white; border: 1px solid #004562; padding: 0 8px; }
		table * { text-align: center;}
		table { margin: 0 auto; font-size: 20px; }
		.wrap > .bg { overflow: hidden !important; }
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
		<?php if ($language == 'en_US' || $language == 'es_ES') : ?>
			@media only screen and (max-width: 1250px){
				h2 {
				    line-height: 25px;
				    font-size: 20px;
				}
				span {
				    font-size: 19px;
				}
			}
		<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			
			<div class="container_12" id="grey"></div>
			
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>

						<h2 class="grid_12" ><?php echo _("The concentrations of Nitrogen, Oxygen, Water Vapor and Argon were measured at various places around the world. Use the data of the chemical components of air at four different locations around the world in the table below to answer the following question."); ?></h2>
						<div id="table" class="grid_12">
								<table>
									<tbody>
										<tr>
											<td colspan=7><?php echo _("% of Gas in the Atmosphere at Different Locations"); ?></td>
										</tr>
										<tr>	
											<th><?php echo _("Gas"); ?></td>
											<th><?php echo _("Symbol"); ?></td>
											<th><?php echo _("Location"); ?> 1</td>
											<th><?php echo _("Location"); ?> 2</td>
											<th><?php echo _("Location"); ?> 3</td>
											<th><?php echo _("Location"); ?> 4</td>
											<th><?php echo _("Location"); ?> 5</td>
										</tr>
										<tr>
											<td><?php echo _("Nitrogen"); ?></td>
											<td>N<sub>2</sub></td>
											<td>78.1%</td>
											<td>77.3%</td>
											<td>76.5%</td>
											<td>75.7%</td>
											<td>74.9%</td>
										</tr>
										<tr>
											<td><?php echo _("Oxygen"); ?></td>
											<td>O<sub>2</sub></td>
											<td>20.9%</td>
											<td>20.7%</td>
											<td>20.5%</td>
											<td>20.3%</td>
											<td>20.1%</td>
										</tr>
										<tr>
											<td><?php echo _("Water Vapor"); ?></td>
											<td>H<sub>2</sub>O</td>
											<td>0%</td>
											<td>1%</td>
											<td>2%</td>
											<td>3%</td>
											<td>4%</td>
										</tr>
										<tr>
											<td><?php echo _("Argon"); ?></td>
											<td>Ar</td>
											<td>0.94%</td>
											<td>0.92%</td>
											<td>0.91%</td>
											<td>0.90%</td>
											<td>0.89%</td>
										</tr>
									</tbody>
								</table>
							</div>	

						<div id="question2" class="grid_12">
							<h2><?php echo _("As the amount of water in the atmosphere <span class='blink'>increases</span> from location to location, which of the following statements are true?"); ?></h2>
							<div class="clear"></div>			
							
							<div>
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Only the amount of nitrogen in the atmosphere decreases."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("The amount of nitrogen in the atmosphere increases."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Only the amount of oxygen in the atmosphere increases."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("The amounts of Nitrogen, Oxygen and Argon in the atmosphere decreases."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
												
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
						<!-- <h2><?php echo _("The concentrations of Nitrogen, Oxygen, Water Vapor and Argon were measured at various places around the world. Use the data of the chemical components of air at four different locations around the world in the table below to answer the following question."); ?></h2>
						<div id="table2" class="grid_10 prefix_1 suffix_1"></div> -->
					
						<div id="answer2">
							<h2 class="grid_12"><?php echo _("As the amount of water in the atmosphere <span class='blink'>increases</span> from location to location, which of the following statements are true?"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		$('input.q1').on('change', function(evt) {
		   if($('input.q1:checked').length == 3) {
		       this.checked = false;
		   }
		});

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = ''

		function save() {
		
			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());
			//$('#answers #table2').html($('#table').html());

			answer2 = $('#question2 input:radio:checked').val();

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! As the amount of water in the atmosphere increases, the % of all other gases decreases."); ?></p>");

			else
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! Look at the table more closely.  As the amount of water in the atmosphere increases, the % of all other gases decreases."); ?></p>");

					
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('air-around-us-qc1-a', answer2); // Correct answer: C

				answered = 1;
			}
		}

		function clear() {
			$('#answer .answer').html('');
			$('#answer .feedback').html('');

			answer1 = '';
		}
		
		$('.checkanswer').click(function() {
			checkAnswer2 = $('input:radio:checked').length;
			
			if (checkAnswer2 < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "4.php#screen2";
			} else if ($('#answers').is(':visible')) {
				
				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					clear();
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
