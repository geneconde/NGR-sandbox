<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'electric-charge-qc2-a');
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
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
		h1 { color: #8200d4; }
		h2 { color: #0090ff; margin: 0 1%; }
		<?php if ($language == 'ar_EG') : ?>
		@media only screen and (max-width: 1250px){

		}
			#nl-form p {
 	   			float: right !important;
			}
			p {
			    float: right !important;
			}
		<?php endif; ?>
		@media only screen and (max-width: 1250px){
			td img {
			    width: 85px !important;
			    height: 80px !important;
			    margin: 0 !important;
			    position: relative !important;
			}
			.box {
			    height: 80px !important;
			    border-radius: 10px !important;
			    background: #9de4ff !important;
			    position: relative !important;
			}
			td:first-child {
			    height: 25px !important;
			}
			#nl-form p {
			    font-size: 17px !important;
			    line-height: 10px !important;
			    margin: 3px !important;
			    padding: 0px !important;
			}
			.select-bg img {
			    height: 423px !important; 
			}
			h2.grid_12 {
			    font-size: 20px !important;
			}

		}
		.wrap { border-color: #94E081; }
		.bg { background-image: url(assets/7/bg.jpg); }

		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }

		#q2 { margin-top: 20px; }

		tr:nth-child(4) { margin-bottom: 5px; }
		tr.text td { height: auto; }
		td img { width: 99px; height: 102px; margin: 0; position: relative; z-index: 9999999999999999999; border: 2px dashed #00aeef; }
		td { text-align: center; }
		td:first-child { height: 100px; }
		
		.box { height: 100px; border-radius: 10px; background: #9de4ff; position: relative; }

		#answer .answer-icon { width: auto; height: auto; }
		#answer .text { display: none; }
		#answer p { text-align: left; }
		#ans2 { clear: both; }

		#answer table th:first-child, #answer table td:first-child { display: none; }
		#answer table td, #answer table th { width: 48.0%; }
		#answer table tr:last-child { margin-top: 10px; }
		#answer table { width: 48.0%; margin-top: -10px; }

		.feedback1 img, .feedback2 img { width: auto; }

		#buttons .next { display: none; }
		
		#nl-form 
		{
			position: absolute;
			top: 25px;
			left: 75px;
		}
		#nl-form td {height: auto !important;}
		#nl-form a { border-bottom: 0; background-color: #0090FF; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #0090FF; }
		.nl-field li { color: #fff; font-size: 18px; }
		.nl-dd ul li.nl-dd-checked { background-color: #0090FF; color: #8200D4; }	

		#nl-form p{font-size: 19px; line-height: 13px; margin:3px; padding: 0px;}
		#nl-form .nl-field-toggle{font-size: 18px;}
		.ml_25{margin-left: -24px !important;}
		.select-bg p{text-align:left !important;}
		.mt43{margin-top: 30px;}
		.select-bg img{height: 505px;}
		h2#aaa { margin: 0!important; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			.select-bg img { height: 444px !important; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>
						<h2 class="grid_12"><?php echo _("Try to determine the charge for an object based on its location on the triboelectric series. Drag the material to the correct column."); ?></h2>
						<div id="tables" class="grid_12">
							<div class="grid_4 select-bg">
								<img src="assets/6/charge-bg.jpg">
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
											<td><p><?php echo _("Nylon") ?></p></td>
										</tr>
										<tr>
											<td><p><?php echo _("Wool"); ?></p></td>
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
											<td><p><?php echo _("Iron") ?></p></td>
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
											<td><p><?php echo _("Artificial silk") ?></p></td>
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
							<table id="q1" class="grid_8">
								<tbody class="grid_12">
									<tr id="first" class="grid_12">
										<th class="grid_4"><?php echo _("Object"); ?></th>
										<th class="grid_4"><?php echo _("Positive Charge"); ?></th>
										<th class="grid_4"><?php echo _("Negative Charge"); ?></th>
									</tr>
									<tr class="grid_12">
										<td class="grid_4" data-name="none"><img src="assets/7/7a.png" class="grab" id="pic1"></td>
										<td class="grid_4 box" data-name="positive"></td>
										<td class="grid_4 box" data-name="negative"></td>
									</tr>
									<tr class="grid_12 text"><td><span><?php echo _("Rubbed Against"); ?></span></td></tr>
									<tr class="grid_12">
										<td class="grid_4" data-name="none"><img src="assets/7/7b.png" class="grab" id="pic2"></td>
										<td class="grid_4 box" data-name="positive"></td>
										<td class="grid_4 box" data-name="negative"></td>
									</tr>
								</tbody>
							</table>
							<table id="q2" class="grid_8">
								<tbody class="grid_12">
									<tr class="grid_12">
										<td class="grid_4" data-name="none"><img src="assets/7/7c.png" class="grab" id="pic3"></td>
										<td class="grid_4 box" data-name="positive"></td>
										<td class="grid_4 box" data-name="negative"></td>
									</tr>
									<tr class="grid_12 text"><td><span><?php echo _("Rubbed Against"); ?></span></td></tr>
									<tr class="grid_12">
										<td class="grid_4" data-name="none"><img src="assets/7/7d.png" class="grab" id="pic4"></td>
										<td class="grid_4 box" data-name="positive"></td>
										<td class="grid_4 box" data-name="negative"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
						<h2 id="aaa" class="grid_12"><?php echo _("Try to determine the charge for an object based on its location on the triboelectric series. Drag the material to the correct column."); ?></h2>

						<div id="ans1">
							<p><?php echo _("You answered..."); ?></p>
							<div id="tab1"></div>
							<div class="feedback1"></div>
						</div>
						<div id="ans2">
							<p><?php echo _("You answered..."); ?></p>
							<div id="tab2"></div>
							<div class="feedback2"></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying triboelectric series..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.qtip.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		$(document).ready(function() {
			$('#pic1').qtip({ content: "<?php echo _("Wool Mittens"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
			$('#pic2').qtip({ content: "<?php echo _("Glass Tube"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
			$('#pic3').qtip({ content: "<?php echo _("PVC Pipe"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
			$('#pic4').qtip({ content: "<?php echo _("Cotton Shirt"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } });
		});	

		function save() {

		

			$('#q1 img').draggable('disable');
			$('#q2 img').draggable('disable');

				$('#q1').appendTo('#tab1');
				$('#q2').appendTo('#tab2');
					


				var answers = ['negative','positive'];
				for(var i = 1; i < 3; i++) {
					window["answer" + i] = $('#pic' + i).parent().data('name');
						
					if(window["answer" + 1] == 'negative' && window["answer" + 2] == 'positive' ){
						$('.feedback1').html("<p class='green'><img src='assets/correct.png'><?php echo _('You\'ve got it! The glass is located towards the top of the triboelectric series, so it would lose electrons to the wool, resulting in a negative charge for the mittens.'); ?></p>");	
						
					}else {
						$('.feedback1').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. Glass is closer to the top of the list, and wool is closer to the bottom. This means the glass would become positively charged, and the wool would become negatively charged."); ?></p>");
					}
				}

				var answers2 = ['negative','positive'];
				for(var i = 3; i < 5; i++) {
					window["answer" + i] = $('#pic' + i).parent().data('name');
						
					if(window["answer" + 3] == 'negative' && window["answer" + 4] == 'positive'){
						$('.feedback2').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! The cotton is closer to the top of the list, and the vinyl is down towards the bottom end of the list. The relative positions of the items on the list determine the charge they will take."); ?></p>");	
					}else {
						$('.feedback2').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! Vinyl is down towards the bottom, or negative end of the list. Cotton is much closer to the top. This means the cotton would take on a positive charge, and the vinyl would be negatively charged."); ?></p>");
					}
				}
				
					
			console.log(answer);
	
			if (answered == 0) {
				saveAnswer('electric-charge-qq2-a', answer); // Correct answer: Dropped...
			}


		}

		$('.checkanswer').click(function() {
			checkAnswer = $('.box:has(img)').length;
			
			if (checkAnswer < 4) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';

				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "6.php#screen3";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('#q1').appendTo('#tables');;
					$('#q2').appendTo('#tables');;
					$('#q1 img').draggable('enable');
					$('#q2 img').draggable('enable');
					window.location.hash = '';
				});
			}
		});

		$('#q1 img').draggable({ revert: 'invalid', containment: "#q1", scroll: false });
		$('#q2 img').draggable({ revert: 'invalid', containment: "#q2", scroll: false });
		
			$('#q1 img').each(function() {
				var image = $(this);
				image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
				image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
				
				var p = $(this).parent().parent().children(':not(:first-child)');
				var drop1, drop2;
				
				for(var i = 1; i < 3; i++) {
					window['drop' + i] = image.parent().parent().children(':nth-child(' + (i + 1) +')');
					window['drop' + i].droppable ({
						accept: image,
						drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo($(this)); }
					});
				}
			});
			$('#q2 img').each(function() {
				var image = $(this);
				image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
				image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
				
				var p = $(this).parent().parent().children(':not(:first-child)');
				var drop1, drop2;
				
				for(var i = 1; i < 3; i++) {
					window['drop' + i] = image.parent().parent().children(':nth-child(' + (i + 1) +')');
					window['drop' + i].droppable ({
						accept: image,
						drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo($(this)); }
					});
				}
			});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
