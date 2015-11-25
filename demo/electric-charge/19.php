<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'electric-charge-qq4-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/nlform_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/nlform.css">
	<?php endif; ?>

	<style>
		h1 {
		    margin-left: 1%;
		    margin-right: 1%;
		}
		<?php if ($language == 'ar_EG') : ?>
			div#sortable-container {
			    position: relative !important;
			    top: -337px !important;
			}
			#nl-form p {
			    font-size: 19px !important;
			    line-height: 12px !important;
			    margin: 3px !important;
			    padding: 0px !important;
			    float: right !important;
			}
			#nl-form {
			    left: -26px !important;
			}
		<?php endif; ?>

		h1 { color: #8200d4; }
		h2 { color: #0090ff; }
		#md_question {color:#000;}
		.wrap { border-color: #94E081; }
		.bg { background-image: url(assets/19/bg.jpg); }

		#buttons .next { display: none; }
		
		#nl-form 
		{
			position: absolute;
			top: 19px;
			left: 50px;
			/* float: right; */
		}
		#md_imgScrn {height:520px;}
		#nl-form a { border-bottom: 0; background-color: #0090FF; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #0090FF; }
		.nl-field li { color: #fff; font-size: 18px; }
		.nl-dd ul li.nl-dd-checked { background-color: #0090FF; color: #8200D4; }	

		#nl-form p{font-size: 19px; line-height: 12px; margin:3px; padding: 0px;}
		#nl-form .nl-field-toggle{font-size: 18px;}
		.ml_25{margin-left: -24px !important;}
		.select-bg p{text-align:left !important;}
		.mt43{margin-top: 30px;}

		#md_borders { /* border:2px solid; */ height: 20px; background-color:#0090ff;} 
		td, th {border-radius:5px;}
		#sortable { width: 100%; padding: 10px 0; }
		#sortable li { background-color: #0090ff; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; cursor: move; 
			border:3px solid;
			border-color: #76E0F0;
			border-style: dashed;}
		#sortable li:last-child { margin-bottom: 0; }

		#nl-formL {position:relative;float: right; margin: 0px;}
		#answer .answer { margin: 10px 0; }
		#answer #nl-form {margin-top: 10px;}

		#answer .answer li { background-color: #0090ff; list-style: none; text-align: center; color: #fff; margin-bottom: 4px; border-radius: 5px; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
		table p {
		    font-size: 20px !important;
		    padding-top: 2px !important;
		}
		#md_imgScrn { height: 550px; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#nl-form { left: 33px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?></h1>
						
						

						<div class="grid_8">
							<h2 id = "md_question"><?php echo _("While experimenting with different materials, you notice that after rubbing a square of fabric on a rod made out of material A and a rod made out of material B, that the two rods repel each other, indicating that they have ‘like’ electric charges. "); ?></h2>
							<h2><?php echo _("Drag the fabric, material A and material B up or down into their possible positions within the triboelectric series that would explain this outcome."); ?></h2>
						</div>
						

						<div class="grid_4 select-bg" id = "nl-formL">
							<img id = "md_imgScrn" src="assets/19/19-bg.jpg">
							<form id="nl-form" class="nl-form">
								<table>
									<tr>
										<td><p class="ml_25"><?php echo _("+ POSITIVE CHARGE"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Air"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Human body"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Glass"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Human hair") ?></p></td>
									</tr>
									<tr>
										<td id = "md_borders"></td>
									</tr>
									<tr>
										<td><p><?php echo _("Wool"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Silk") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Aluminum"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Paper") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Cotton"); ?></p></td>
									</tr>
									<tr>
										<td id = "md_borders"></td>
									</tr>
									<tr>
										<td><p><?php echo _("Wood") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Hard rubber"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Nickel copper"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Brass silver"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Gold platinum"); ?></p></td>
									</tr>
									<tr>
										<td id = "md_borders"></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polystyrene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyester"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyurethane"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyethylene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polypropylene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("PVC(vinyl)"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Silicon"); ?></p></td>
									</tr>
									<tr>
										<td><p class="ml_25"><?php echo _("- NEGATIVE CHARGE"); ?></p></td>
									</tr>
								</table>
								<div class="nl-overlay"></div>
							</form>
						</div>

						<div id="sortable-container" class="grid_4 prefix_2">
							<ul id="sortable">
								<li id="1"><?php echo _("The Square of Fabric"); ?></li>
								<li id="2"><?php echo _("The Rod of Material A"); ?></li>
								<li id="3"><?php echo _("The Rod of Material B"); ?></li>
							</ul>
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
						<div class="grid_4 select-bg">
							<img id = "md_imgScrn" src="assets/19/19-bg.jpg">
							<form id="nl-form" class="nl-form mt43">
								<table>
									<tr>
										<td><p class="ml_25"><?php echo _("+ POSITIVE CHARGE"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Air"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Human body"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Glass"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Human hair") ?></p></td>
									</tr>
									<tr>
										<td id = "md_borders"></td>
									</tr>
									<tr>
										<td><p><?php echo _("Wool"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Silk") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Aluminum"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Paper") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Cotton"); ?></p></td>
									</tr>
									<tr>
										<td id = "md_borders"></td>
									</tr>
									<tr>
										<td><p><?php echo _("Wood") ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Hard rubber"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Nickel copper"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Brass silver"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Gold platinum"); ?></p></td>
									</tr>
									<tr>
										<td id = "md_borders"></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polystyrene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyester"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyurethane"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polyethylene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Polypropylene"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("PVC(vinyl)"); ?></p></td>
									</tr>
									<tr>
										<td><p><?php echo _("Silicon"); ?></p></td>
									</tr>
									<tr>
										<td><p class="ml_25"><?php echo _("- NEGATIVE CHARGE"); ?></p></td>
									</tr>
								</table>
								<div class="nl-overlay"></div>
							</form>
						</div>
						<p class="grid_8">
							<p><?php echo _("You answered..."); ?></p>
							<!-- 
							<p class="answer"></p>
							<p class="answer2"></p>
							<p class="answer3"></p>
							-->
							
						</p>
						<div class="answer grid_4 prefix_2 suffix_2"></div>

						<div class="feedback"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Rubbing a fabric..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/nlform.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.answer').html($('#sortable').html());

			answer = $('#1').index().toString() + $('#2').index().toString() + $('#3').index().toString();

			if (answer == '012' || answer == '021' || answer == '210' || answer == '201') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct!  Materials A and B both gained like charges because they both are located closer to the same end of the triboelectric series."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  Materials A and B are repelling each other because they both have the same charge.  That means they both must be closer to the same end of the chart, and the fabric square is closer to the other end of the chart."); ?></p>");
			} 

			console.log(answer);

			if (answered == 0) {
				saveAnswer('electric-charge-qq4-a', answer);
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			var choice1 = $('select.choice1').val(),
				choice2 = $('select.choice2').val(),
				choice3 = $('select.choice3').val()
		
			if (choice1 == "" || choice2 == "" || choice3 == "") {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

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

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});
		
		$("#sortable").sortable({ scroll: false, containment: "#sortable-container" });
		var nlform = new NLForm(document.getElementById('nl-form'));
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
