<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 15) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(10, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('module');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'], $problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Module"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #eb7100; font-size: 34px; }
		
		h2 { text-align: center; margin-bottom: 0; }
		.bg { background-image: url(assets/10/bg.jpg); }

		p { font-size: 23px; }

		#screen2 { display: none; }
		.grid_3 {  width:30% !important; }
		.grid_8 { width: 60% !important;}
		.side_image img {
			margin-left: 16px !important;
		    width: 238px !important;
		}

		#graphDiv1 table, #graphDiv2 table {  text-align: center; width: 100%; margin: auto; background-color: #fff; font-size: 18px; }
		#graphDiv1  div:first-child { width: 350px; margin: 10px auto; margin-top:10%; background-color: #fff; padding: 30px; }
		#graphDiv1 table th:first-child { width: 20%; }
		#graphDiv1 table th:nth-child { width: 35%;}
		#graphDiv2  div:first-child { width: 200px; margin: 10px auto; margin-top:10%; background-color: #fff; padding: 30px; }
		table th {font-weight: normal;}
		td, th { border: 1px solid black;  padding: 5px;}

		#screen2 table { text-align: center; width: 400px; margin: 10px auto; padding: 10px; font-size: 23px; }
		#screen2 table th:first-child { width: 20%; }
		#screen2 table th:nth-child(2), table th:nth-child(3) { width: 35%; }
		#screen2 table th {font-weight: normal;}
		#screen2 p{width:520px;}
		.wrap { border-color: #858248; }
		.side_image {margin-top: 57px; padding: 0 10%;}
		.side_image img {height:320px; width: 100%; margin: 10px auto;  }
		.side_image_2 img {height:350px; width: 200px; margin: 10px auto; width: 100%;}
		.side_image_2 {margin-left: 15px; margin-top:10px; padding: 0 5%;}
		.text-justify { text-align: justify; }

		.rslides img { border: 5px solid #f9cffd; }

		#buttons .next { display: none; }
		.button { background-color: #e0e67c; border-radius: 5px; padding: 5px; margin: 10px auto; text-align: center; }
		.button:hover { cursor: pointer; }
		#close, #close2 {width: 150px; }
		#graphDiv1, #graphDiv2{  position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#btn_view2, #btn_view { width: 180px;}
	    @media only screen and (max-width: 1250px){
	        h1 { padding-top: 33px; }
	        p.grid_12.text-justify {
			    font-size: 22px !important;
			}
	    }
	    @media screen and (max-width: 1250px) {
	    	.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }	
		    #screen2 p { width: initial; }
	    }
		<?php if ($language == 'zh_CN') : ?>
			td:first-child {
			    width: 50px;
			}
		<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv2" class="overlay">
				<div>
					<table>
						<thead>
							<th><?php echo _("Time"); ?></th>
							<th><?php echo _("Sarah's"); ?><br/><?php echo _("Position"); ?></th>
						</thead>
						<tbody>
							<tr>
								<td>0 <?php echo _("seconds"); ?></td>
								<td>0 <?php echo _("meter"); ?></td>
							</tr>
							<tr>
								<td>10 <?php echo _("seconds"); ?></td>
								<td>1 <?php echo _("meter"); ?></td>
							</tr>							
							<tr>
								<td>20 <?php echo _("seconds"); ?></td>
								<td>3 <?php echo _("meters"); ?></td>
							</tr>
							<tr>
								<td>30 <?php echo _("seconds"); ?></td>
								<td>6 <?php echo _("meters"); ?></td>
							</tr>
							<tr>
								<td>40 <?php echo _("seconds"); ?></td>
								<td>10 <?php echo _("meters"); ?></td>
							</tr>
							<tr>
								<td>50 <?php echo _("seconds"); ?></td>
								<td>15 <?php echo _("meters"); ?></td>
							</tr>
							<tr>
								<td>60 <?php echo _("seconds"); ?></td>
								<td>21 <?php echo _("meters"); ?></td>
							</tr>
							<tr>
								<td>70 <?php echo _("seconds"); ?></td>
								<td>? <?php echo _("meters"); ?></td>
							</tr>							
						</tbody>
					</table>
				</div>
				<div id="close2" class="button" >
					<span ><?php echo _('Close me!'); ?></span>
				</div>
			</div>
			<div id="graphDiv1" class="overlay">
				<div>
					<table>
						<thead>
							<th><?php echo _("Time"); ?></th>
							<th><?php echo _("Terry's"); ?><br/><?php echo _("Position"); ?></th>
							<th><?php echo _("Justin's"); ?><br/><?php echo _("Position"); ?></th>
						</thead>
						<tbody>
							<tr>
								<td>0 </td>
								<td>0 <?php echo _("miles East"); ?></td>
								<td>0 <?php echo _("miles East"); ?></td>
							</tr>
							<tr>
								<td>1 <?php echo _("hr"); ?></td>
								<td>3 <?php echo _("miles East"); ?></td>
								<td>7 <?php echo _("miles East"); ?></td>
							</tr>
							<tr>
								<td>2 <?php echo _("hr"); ?></td>
								<td>6 <?php echo _("miles East"); ?></td>
								<td>14 <?php echo _("miles East"); ?></td>
							</tr>
							<tr>
								<td>3 <?php echo _("hr"); ?></td>
								<td>9 <?php echo _("miles East"); ?></td>
								<td>21 <?php echo _("miles East"); ?></td>
							</tr>
							<tr>
								<td>4 <?php echo _("hr"); ?></td>
								<td>12 <?php echo _("miles East"); ?></td>
								<td>28 <?php echo _("miles East"); ?></td>
							</tr>									
						</tbody>
					</table>
				</div>
				<div id="close" class="button" >
					<span ><?php echo _('Close me!'); ?></span>
				</div>
			</div>
			<div class="container_12 clearfix">
				<div id="screen1" class="screen">
					<div class="grid_7">

						<h1 class="grid_12"><?php echo _("More big ideas about... motion"); ?></h1>

						<p class="grid_12 text-justify"><?php echo _("Different patterns to an object's motion can tell us a lot about how the object is moving.  For example, in a data table like the one to the right, you can see how Terry is changing position by 7 miles every hour, similar to a slow walking pace.  Justin, however, is changing position by 7 miles every hour, similar to a fast jog.  In both examples, the pattern expressed in miles every hour is known as the <span class='key'>speed or velocity</span>.  That pattern can be used to predict the person’s position at a later time.  For example, with a velocity pattern of 3 miles every hour, Terry will have traveled 30 miles after 10 hours at that pace.  If you know that Justin’s total trip took 6 hours, you can use his velocity pattern to see that he likely travelled 42 miles.  Motion where the pattern is constant is referred to as motion with constant velocity."); ?></p>

						<div class="clear"></div>

					</div>
					
					<div class="grid_5">
						<div class="side_image">
							<img src="assets/10/a.jpg" alt="">
							<div id="btn_view" class="button" ><span ><?php echo _('Click to view the Data table'); ?></span></div>
						</div>

						<div class="clear"></div>
						
					</div>

					
				</div><!--screen 1-->

				<div id="screen2" class="screen">
					<div class="grid_4">
						<div class="side_image_2">
							<img src="assets/10/b.jpg" alt="">
							<div id="btn_view2" class="button" ><?php echo _('Click to view the Data table'); ?></div>				
						</div>

						<div class="clear"></div>
						
					</div>
					
					<div class="grid_8">

						<p class="grid_12 text-justify"><?php echo _("There are other types of motion that don’t display a constant velocity pattern.  Can you see a pattern to Sara’s motion in the table to the left?  In the first ten seconds, she changed position by 1 meter. In the next ten seconds, she changed position by 2 meters. In the ten seconds after that, she changed position by 3 meters.  Sara is getting faster!  If she continues at this pattern, can you see how she’ll be located at 28 meters at 70 seconds and at 36 meters at 80 seconds?  Where will she be at 90 seconds?  To find the answer, you have to look at what happens to the velocity pattern.  It seems that she’s increasing her velocity pattern by 1 meter every 10 seconds for every 10 seconds she’s in motion. So initially, she moves 1 meter in the first 10 seconds, then she moves 2 meters in the next 10 seconds, and then she changes her position by 3 more meters the 10 seconds after that.  This pattern that describes the way the velocity pattern is changing is known as <span class='key'>acceleration</span>. "); ?></p>

						<div class="clear"></div>
						

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Calculating miles..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});

		$(document).ready(function(){
			$('#graphDiv1, #graphDiv2').css('display','none');
		});

		$('#btn_view').click(function() {
			$('#graphDiv1').fadeIn();
		});

		$('#close').click(function() {
			$('#graphDiv1').fadeOut();
		});

		$('#btn_view2').click(function() {
			$('#graphDiv2').fadeIn();
		});

		$('#close2').click(function() {
			$('#graphDiv2').fadeOut();
		});

		$('.overlay').click(function(event) {
			if($('#' + event.target.id).hasClass("overlay"))
				$(this).fadeOut();
		});

		var hash = window.location.hash.slice(1);

		if (hash != "") {
			$('.screen').hide();
			$('#screen2').show();

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
		}
		
		$('.next').click( function(){
			if(!overlayIsVisible()){
				document.location.href = "11.php";
			}
		});

		$('.back').click(function() {
			if(!overlayIsVisible()){
				if ($('#screen1').is(':visible')) {
					document.location.href = "9.php";
				} else if ($('#screen2').is(':visible')) {

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn();
					});

					$('#screen2').fadeOut(function () {
						$('#screen1').fadeIn();

						window.location.hash = '';
					});
				}
			}
		});

		$('.readmore').click(function(){
			if(!overlayIsVisible()){
				if ($('#screen1').is(':visible')) {

					$('.back').fadeOut();

					$('.readmore').fadeOut(function() {
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});

					$('#screen1').fadeOut(function() {
						$('#screen2').fadeIn();

						window.location.hash = '#screen2';
					});
				}
			}
		});

		function overlayIsVisible(){
			if($('#graphDiv1').css('display') == 'block' || $('#graphDiv2').css('display') == 'block'){
				return true;
			}else{
				return false;
			}
			/*$('.overlay').each( function(){
				alert($('this').id);
				if($('this').is(':visible'))
					result = true;
			});
			return result;*/
		}
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
