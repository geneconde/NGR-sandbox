<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(11, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

<!--
	<link rel="stylesheet" type="text/css" href="styles/locale.css" />
	<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
	<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
	<link rel="stylesheet" type="text/css" href="styles/global.css" />
-->

	<script src="js/modernizr.min.js"></script>
<!--	<script src="js/jquery.wiggle.min.js"></script> 
	<script src="js/jquery.blink.min.js"></script> 
	<script src="js/global.js"></script> -->
	<script src="js/save-answer.js"></script>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		#answer #pAns1 {
		    padding-top: 20px !important;
		}
		#answer p {
		    text-align: center;
		    padding-top: 15px !important;
		    padding-bottom: 10px !important;
		}
		h1{ color: #D27A00; margin-top: 10px;}
		p{ color: #00424B; }
		.arrows {margin-left: 150px;}
		.click_btn { text-align: center; }
		.wrap { border-color: #FF00FF; }
		.bg { background-image: url(assets/19/QQ.jpg); overflow: hidden;}


		#question { text-align: ; overflow: hidden; }
		#answer { display: none; }
		#answer #pAns1 {text-align: left; color:#00739f;}
		#answer p { text-align:; margin:-10px 0;}
		#answer table p { font-size: 24px; }
		#answer table p img { vertical-align: middle; }
		.answer span { display: block; }
		<!-- temporary -->	
		<!-- table { color: #000; text-align: left; width: 680px; margin-top: 10px; margin-left: 0px; font-size: 18px; } -->		
		table td {width:32%;}
		table th {width: 25%; text-align: center;}
		.answer table td:first-child img { width: 30px; height:25px; }
		
		img{height: 100%;}
		.feedback img{height: auto;}

		#graphDiv{ display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv table th{ color: #000;}
		#graphDiv table tr td{ color: #000;}
		#graphDiv .grid_4 div { margin: 30px auto; width: 80%; padding: 30px; background-color: #fff;}


		#answer { display: none; }

		#answer table p { font-size: 22px; }
		#answer table p img { vertical-align: middle;}
		#check {width:25px; height: 25px;}
		.answer span { display: ; }

		/*select { padding: 2px; font-size: 18px; font-family: 'PlaytimeRegular'; cursor: pointer; }*/

		table { border-collapse: separate; border-spacing: 2px; width: 50%; margin-left: auto; margin-right: auto; font-size: 20px;}
		table tr div { margin-top: 20px; width: 120px; height: 80px; margin: 0 auto;}
		#answer table tr div { margin-top: 20px; width: 120px; height: 50px; margin: 0 auto; width:40%;}
		#question table td, #answer table td{ padding: 4px; font-size: 22px; border: 2px solid #FF9966; margin: 5px; border-radius: 10px; box-sizing: border-box; }
		#question table th, #answer table th { padding: 0px; font-size: 22px; border: 3px solid #e65c4f; margin: 5px; border-radius: 10px; box-sizing: border-box;  }
		table tr td { text-align: center; }
		table tr td img { border-radius: 10px; display: block; margin: 0 auto; }
		table th { font-weight: normal; color: #000; padding: 0 5px; }
		table tr td:first-child { height: auto;}
		#answer table tr td img { border-radius: 10px; display: block; margin: 0 auto; margin-top: 10px;}
	
		.answer table { margin-top: 10px; height: 20%; }
		
		.feedback { font-size: 24px; text-align: center; width: 90%; margin: 10px auto;}
		.feedback img { vertical-align: middle; }

		.grab {cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }


		.qtip-wrapper { font-size: 15px; }

		img.next-toggle { display: none; }
		img.drag {  border: 2px dashed #FF9966; background-color: ; height: 80px; width: 85px;}
		#question .placeholder, #answer .placeholder { -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
		<?php if($language == "es_ES") { ?>
			table tr:nth-child(3) td:first-child { font-size: 17px; }
		<?php } ?> 

		#buttons .next { display: none; } 
		@media screen and (max-width: 1250px) { img.drag {height: 65px; width: 75px; } table tr div {width: 105px; height: 75px;} .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		@media screen and (max-width: 881px) {
			.feedback {font-size: 20px;}
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
						<h2><?php echo _("Drag these items into the correct column  to indicate whether they are a good insulator or a good conductor of electricity."); ?></h2>
						<!-- <h2 class="click_btn"><?php echo _("Click to view table"); ?></h2> -->
						<div class='placeholder'>
								<table >
									<tr>
										<th><?php echo _('Items'); ?></th>
										<th><?php echo _('Insulator'); ?></th>
										<th><?php echo _('Conductor'); ?></th>
									</tr>

									<tr>
										<td name: "first-column" id="1"><img src="assets/19/19a1.jpg" class="drag" id = "appear1" ></td>
										<td><div id="2"></div></td>
										<td><div id="3"></div></td>
									</tr>

									<tr>
										<td name: "first-column" id="5"><img src="assets/19/19a2.jpg" class="drag" id = "appear2"></td>
										<td><div id="6"></div></td>
										<td><div id="7"></div></td>
									</tr>

									<tr>
										<td name: "first-column" id="9"><img src="assets/19/19a3.jpg" class="drag" id = "appear3"></td>
										<td><div id="10"></div></td>
										<td><div id="11"></div></td>
									</tr>

									<tr>
										<td name: "first-column" id="13"><img src="assets/19/19a4.jpg" class="drag" id = "appear4"></td>
										<td><div id="14"></div></td>
										<td><div id="15"></div></td>
									</tr>
								</table>
							</div>
						</div>

					<div id="answer">
						<div class="grid_12">
							<h1><?php echo _('Quiz Question #4'); ?> - <?php echo _('How did I do?'); ?></h1>
							<div class='placeholder'>
								<p id = "pAns1"><?php echo _("Drag the images below into the correct column to indicate whether they are experiencing balanced or unbalanced forces. Hover your mouse in the images to see the details."); ?></p>

								<p><?php echo _('You answered...'); ?></p>

								<div class="answer">
									<table >
										<tr>
											<th><?php echo _('Answer'); ?></th>
											<th><?php echo _('Insulator'); ?></th>
											<th><?php echo _('Conductor'); ?></th>
										</tr>
										<tr>
											<td class="1" ><img src="assets/19/19a1.jpg" class="drag" id = "appear1" ></td>
											<td><div class="2"></div></td>
											<td><div class="3"></div></td>
										</tr>

										<tr>
											<td class="5"><img src="assets/19/19a2.jpg" class="drag" id = "appear2" ></td>
											<td><div class="6"></div></td>
											<td><div class="7"></div></td>
										</tr>

										<tr>
											<td class="9"><img src="assets/19/19a3.jpg" class="drag" id = "appear3" ></td>
											<td><div class="10"></div></td>
											<td><div class="11"></div></td>
										</tr>
										<tr>
											<td class="13"><img src="assets/19/19a4.jpg" class="drag" id = "appear4" ></td>
											<td><div class="14"></div></td>
											<td><div class="15"></div></td>
										</tr>
									</table>
								</div>
							</div>

							<div class="feedback"></div>
						</div>
					</div>
					</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>

    <div id="buttons">
        <a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
        <a href="20.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
        <a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
    </div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying items..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.qtip.min.js"></script>

	<script>
		var back = $('img.back-toggle'),
		next = $('img.next-toggle'),
		check = $('img.check-toggle'),
		question = $('#question'),
		answer = $('#answer'),

		ans6 = '', ans7 = '', ans8 = '', ans9 = '',
		ive = 0,
		ren = 0,
		joa = 0,
		jan = 0,
		checkAnswer = 0,
		answered = 1;
		var nullAnswer=true;

		$(document).ready(function() {
			$('#appear1').qtip({ content: "<?php echo _("A Pop Can"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
			$('#appear2').qtip({ content: "<?php echo _("A Wooden Spoon"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
			$('#appear3').qtip({ content: "<?php echo _("A Plastic Bag"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
			$('#appear4').qtip({ content: "<?php echo _("Glass Bottle"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
		});	


		$('#question img').draggable({ revert: 'invalid' });
			
		$('#question img').each(function() {
			var image = $(this);
			var drop1 = $(this).parent().parent().children(':nth-child(2)').find('div');
			var drop2 = $(this).parent().parent().children(':nth-child(3)').find('div');
			var drop3 = $(this).parent().parent().children(':nth-child(4)').find('div');
			var drop4 = $(this).parent().parent().children(':nth-child(5)').find('div');
			
			image.mousedown(function() { image.removeClass('grab'); image.addClass('grabbing'); image.css('opacity', '0.7'); });
			image.mouseup(function() { image.removeClass('grabbing'); image.addClass('grab'); image.css('opacity', '1'); });
			
			drop1.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop1); }
			});
			
			drop2.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop2); }
			});

			drop3.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop3); }
			});

			drop4.droppable ({
				accept: image,
				drop: function (event, ui) { image.detach().css({top: 0,left: 0}).appendTo(drop4); }
			});
		});
			
		function save() {
			ive = ren = joa = jan = 0;
			if ($('#3').html() != '') {
				answer.find('.1').html('<img src="assets/correct.png">');
				answer.find('.2').html('');
				answer.find('.3').html('<img src="assets/19/19a1.jpg">');
				ans7 = '2nd Image (Forces are balanced)';
				ive = 1;
				if (ive == 1){
					$('.answer .2').qtip({ content: "<?php echo _("A Pop Can"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				}

			} else {
				answer.find('.1').html('<img src="assets/wrong.png">');
				answer.find('.2').html('<img src="assets/19/19a1.jpg">');
				answer.find('.3').html('');
				ans7 = '2nd Image (Forces are unbalanced)';
				if (ren == 0){
					$('.answer .3').qtip({ content: "<?php echo _("A Pop Can"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				}
			}

			if ($('#6').html() != '') {
				answer.find('.5').html('<img src="assets/correct.png">');
				answer.find('.6').html('<img src="assets/19/19a2.jpg">');
				answer.find('.7').html('');
				ans7 = '2nd Image (Forces are balanced)';
				ren = 1;

			} else {
				answer.find('.5').html('<img src="assets/wrong.png">');
				answer.find('.6').html('');
				answer.find('.7').html('<img src="assets/19/19a2.jpg">');
				ans7 = '2nd Image (Forces are unbalanced)';
			}

			if ($('#10').html() != '') {
				answer.find('.9').html('<img src="assets/correct.png">');
				answer.find('.10').html('<img src="assets/19/19a3.jpg">').qtip({ content: "<?php echo _("A puck slides at constant speed across a frictionless air hockey table"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				answer.find('.11').html('');;
				ans8 = '3rd Image (Forces are balanced)';
				joa = 1;

			} else {
				answer.find('.9').html('<img src="assets/wrong.png">');
				answer.find('.10').html('');
				answer.find('.11').html('<img src="assets/19/19a3.jpg">').qtip({ content: "<?php echo _("A puck slides at constant speed across a frictionless air hockey table"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				ans8 = '3rd Image (Forces are unbalanced)';
			}

			if ($('#14').html() != '') {
				answer.find('.13').html('<img src="assets/correct.png">');
				answer.find('.14').html('<img src="assets/19/19a4.jpg">').qtip({ content: "<?php echo _("A puck slides at constant speed across a frictionless air hockey table"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				answer.find('.15').html('');;
				ans9 = '3rd Image (Forces are balanced)';
				jan = 1;

			} else {
				answer.find('.13').html('<img src="assets/wrong.png">');
				answer.find('.14').html('');
				answer.find('.15').html('<img src="assets/19/19a4.jpg">').qtip({ content: "<?php echo _("A puck slides at constant speed across a frictionless air hockey table"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				ans9 = '3rd Image (Forces are unbalanced)';
			}

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qc2-a', ans6);
				saveAnswer('forces-of-all-kinds-qc2-b', ans7);
				saveAnswer('forces-of-all-kinds-qc2-c', ans8);
				saveAnswer('forces-of-all-kinds-qc2-d', ans9);
				answered = 1;
			}


		if (ive == 1 && ren == 1 && joa == 1 && jan == 1) {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You’ve got it! Metals conduct electricity while wood, plastic bags and glass act as insulators."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. The can is made out of aluminum, which is a good conductor. The spoon, bottle and plastic bags are all made out of materials, which are good insulators."); ?></p>");
			} 


		}


			$('.checkanswer').click(function() {
			checkNull();
			if(nullAnswer){
				alert('Please select your answer.');
			} else{
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

		$('.back').click(function(){
			if ($('#question').is(':visible')) {
				document.location.href = "18.php";
			} else if ($('#answer').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#answer').fadeOut(function () {
					
				$('#question').fadeIn();
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



	function checkNull() {
		nullAnswer=false;
		var parentID;
		$('#question img').each(function() {
			parentID = $(this).parent().attr('id');
			if(parentID % 4 ==1) {
				nullAnswer = true;
			}
		});
	}

	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
