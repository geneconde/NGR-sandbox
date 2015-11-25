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

	<title><?php echo _("Forces of all kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

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
		h1 { color: #df3e3e; text-align: left;padding: 0px; }
		h2 { color: #00739f;font-size: 24px; }
		.arrows {margin-left: 150px;}
		.click_btn { text-align: center; }
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/7/qq.jpg); overflow: hidden; }


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
		
		#graphDiv{ display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv table th{ color: #000;}
		#graphDiv table tr td{ color: #000;}
		#graphDiv .grid_4 div { margin: 30px auto; width: 80%; padding: 30px; background-color: #fff;}


		#answer { margin:   0px 2%; display: none; }

		#answer table p { font-size: 22px; }
		#answer table p img { vertical-align: middle;}
		#check {width:25px; height: 25px;}
		.answer span { display: ; }

		/*select { padding: 2px; font-size: 18px; font-family: 'PlaytimeRegular'; cursor: pointer; }*/

		table { background-color:; border-collapse: separate; border-spacing: 2px; width: auto; margin-left: auto; margin-right: auto; font-size: 20px;}
		table tr div { margin-top: 20px; width: 120px; height: 95px; margin: 0 auto;}
		#answer table tr div { margin-top: 20px; width: 120px; height: 75px; margin: 0 auto; width:40%;}
		#question table td, #answer table td{ padding: 4px; font-size: 22px; border: 2px solid #ffffba; margin: 5px; border-radius: 10px; box-sizing: border-box; }
		#question table th, #answer table th { padding: 4px; font-size: 22px; border: 3px solid #e65c4f; margin: 5px; border-radius: 10px; box-sizing: border-box;  }
		table tr td { text-align: center; }
		table tr td img { border-radius: 10px; display: block; margin: 0 auto; }
		table th { font-weight: normal; color: #000; padding: 0 5px; }
		table tr td:first-child { height: auto;}
		#answer table tr td img { border-radius: 10px; display: block; margin: 0 auto; margin-top: ;}
	
		.answer table { margin-top: 10px; }
		
		.feedback { font-size: 24px; text-align: center; width: 90%; margin: 10px auto;}
		.feedback img { vertical-align: middle; }
		.answer div img { width: 80%; }
		.you-answered { margin: 10px auto !important; }

		.grab {cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }


		.qtip-wrapper { font-size: 15px; }

		img.next-toggle { display: none; }
		img.drag {  border: 2px dashed #FF6A6B; background-color: ; height: 95px; width: 120px;}
		#question .placeholder, #answer .placeholder { padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
		h1 { margin-bottom:0; }
		<?php if($language == "es_ES") { ?>
			table tr:nth-child(3) td:first-child { font-size: 17px; }
		<?php } ?> 

		#buttons .next { display: none; }

		@media (max-width: 1250px) {
			#question h1 {
				padding-top: 40px !important;
		    	font-size: 30px;
			}
			.placeholder { padding: 0; margin-top: 0px; }
		}
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		div#question h2 {
		    font-size: 20px;
		    line-height: 25px;
		    margin-top: 0;
		}
		p#pAns1 {
		    font-size: 20px !important;
		    line-height: 20px !important;
		}
		.feedback {
		    font-size: 19px;
		    line-height: 20px;
		}
		p.you-answered {
		    padding: 2px;
		    margin: 2px !important;
		}
		#question table th, #answer table th {
		    line-height: 20px;
		    padding: 0px; 
		    font-size: 22px; 
		    border: 3px solid #e65c4f;
		    margin: 0px;
		    border-radius: 10px;
		    box-sizing: border-box;
		}
    }
div#question h2 {
    font-size: 20px;
    line-height: 20px;
    margin-top: 0;
}
	@media only screen and (max-width: 960px){
		div#answer {
		    padding-top: 33px;
		}
		.placeholder {
		    padding: 0px !important;
		    padding-top: 5px;
		    -webkit-border-radius: 10px;
		    -moz-border-radius: 10px;
		    border-radius: 10px;
		}
	}
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="question" class="grid_12">
						<h1><?php echo _("Quick Check #2"); ?></h1>

						<h2><?php echo _("Drag the images below into the correct column to indicate whether they are experiencing balanced or unbalanced forces. Hover your mouse over the images to see the details."); ?></h2>
						<!-- <h2 class="click_btn"><?php echo _("Click to view table"); ?></h2> -->
						<div class='placeholder'>
								<table >
									<tr>
										<th><?php echo _('Items'); ?></th>
										<th><?php echo _('Forces are balanced'); ?></th>
										<th><?php echo _('Forces are unbalanced'); ?></th>
									</tr>

									<tr>
										<td name: "first-column" id="a1"><img src="assets/7/teasel.jpg" class="drag" id = "appear1" ></td>
										<td><div id="a2"></div></td>
										<td><div id="a3"></div></td>
									</tr>

									<tr>
										<td name: "first-column" id="a5"><img src="assets/7/tower.jpg" class="drag" id = "appear2"></td>
										<td><div id="a6"></div></td>
										<td><div id="a7"></div></td>
									</tr>

									<tr>
										<td name: "first-column" id="a9"><img src="assets/7/marker.jpg" class="drag" id = "appear3"></td>
										<td><div id="a10"></div></td>
										<td><div id="a11"></div></td>
									</tr>
								</table>
						</div>
			</div>
					</div>
					<div class="clear"></div>

					<div id="answer">
				<h1><?php echo _('Quick Check #2'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div class='placeholder'>
				<p id = "pAns1"><?php echo _("Drag the images below into the correct column to indicate whether they are experiencing balanced or unbalanced forces. Hover your mouse over the images to see the details."); ?></p>
					<p class="you-answered"><?php echo _('You answered...'); ?></p>
					<div class="answer">
						<table >
							<tr>
								<th><?php echo _('Answer'); ?></th>
								<th><?php echo _('Forces are balanced'); ?></th>
								<th><?php echo _('Forces are unbalanced'); ?></th>
							</tr>
							<tr>
								<td class="1" ><img src="assets/7/teasel.jpg" class="drag" id = "appear1" ></td>
								<td><div class="2"></div></td>
								<td><div class="3"></div></td>
							</tr>

							<tr>
								<td class="5"><img src="assets/7/tower.jpg" class="drag" id = "appear2" ></td>
								<td><div class="6"></div></td>
								<td><div class="7"></div></td>
							</tr>

							<tr>
								<td class="9"><img src="assets/7/marker.jpg" class="drag" id = "appear3" ></td>
								<td><div class="10"></div></td>
								<td><div class="11"></div></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="feedback"></div>
			</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Creating human tower..."); ?></strong></section></section>

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

		ans6 = '', ans7 = '', ans8 = '',
		ive = 0,
		ren = 0,
		joa = 0,
		checkAnswer = 0,
		answered = 1;
		var nullAnswer=true;

		$(document).ready(function() {
			$('#appear1').qtip({ content: "<?php echo _("A teapot rests on a shelf"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
			$('#appear2').qtip({ content: "<?php echo _("A person stands atop a human tower"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
			$('#appear3').qtip({ content: "<?php echo _("A puck slides at constant speed across a frictionless air hockey table"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
			position: { corner: { target: 'center', tooltip: 'topLeft' } } });
		});	


		$('#question img').draggable({ revert: 'invalid' });
			
		$('#question img').each(function() {
			var image = $(this);
			var drop1 = $(this).parent().parent().children(':nth-child(2)').find('div');
			var drop2 = $(this).parent().parent().children(':nth-child(3)').find('div');
			var drop3 = $(this).parent().parent().children(':nth-child(4)').find('div');
			
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
		});
			
		function save() {
			ive = ren = joa = 0;
			if ($('#2').html() != '') {
				answer.find('.1').html('<img src="assets/correct.png">');
				answer.find('.2').html('<img src="assets/7/teasel.jpg">').qtip({ content: "<?php echo _("A teapot rests on a shelf"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
				position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				answer.find('.3').html('');
				ans6 = '1st Image (Forces are balanced)';
				ive = 1;

		
			}else {
				answer.find('.1').html('<img src="assets/wrong.png">');
				answer.find('.2').html('');
				answer.find('.3').html('<img src="assets/7/teasel.jpg">').qtip({ content: "<?php echo _("A teapot rests on a shelf"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				ans6 = '1st Image (Forces are unbalanced)';
			}

			if ($('#6').html() != '') {
				answer.find('.5').html('<img src="assets/correct.png">');
				answer.find('.6').html('<img src="assets/7/tower.jpg">');
				answer.find('.7').html('');
				ans7 = '2nd Image (Forces are balanced)';
				ren = 1;
				if (ren == 1){
					$('.answer .6').qtip({ content: "<?php echo _("A person stands atop a human tower"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				}

			} else {
				answer.find('.5').html('<img src="assets/wrong.png">');
				answer.find('.6').html('');
				answer.find('.7').html('<img src="assets/7/tower.jpg">');
				ans7 = '2nd Image (Forces are unbalanced)';
				if (ren == 0){
					$('.answer .7').qtip({ content: "<?php echo _("A person stands atop a human tower"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				}
			}

			if ($('#10').html() != '') {
				answer.find('.9').html('<img src="assets/correct.png">');
				answer.find('.10').html('<img src="assets/7/marker.jpg">').qtip({ content: "<?php echo _("A puck slides at constant speed across a frictionless air hockey table"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				answer.find('.11').html('');;
				ans8 = '3rd Image (Forces are balanced)';
				joa = 1;

			} else {
				answer.find('.9').html('<img src="assets/wrong.png">');
				answer.find('.10').html('');
				answer.find('.11').html('<img src="assets/7/marker.jpg">').qtip({ content: "<?php echo _("A puck slides at constant speed across a frictionless air hockey table"); ?>", style: { name: 'cream', tip: true, border: { radius: 5 } }, 
					position: { corner: { target: 'center', tooltip: 'topLeft' } } });
				ans8 = '3rd Image (Forces are unbalanced)';
			}

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qc2-a', ans6);
				saveAnswer('forces-of-all-kinds-qc2-b', ans7);
				saveAnswer('forces-of-all-kinds-qc2-c', ans8);
				answered = 1;
			}


		if (ive == 1 && ren == 1 && joa == 1) {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! Objects at rest and objects in motion at a constant speed are all experiencing balanced forces."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The tea pot and person standing atop the human tower are at rest, and the puck is sliding at a constant speed across a frictionless table. These are all examples of objects experiencing balanced forces."); ?></p>");
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

		function myFunction() {
    	location.reload();
		}

		$('.back').click(function(){
			if ($('#question').is(':visible')) {
				document.location.href = "6.php#screen3";
			} else if ($('#answer').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#answer').fadeOut(function () {
					
				myFunction()
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
