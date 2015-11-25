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

	<title><?php echo _("Electric Charge"); ?></title>

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
		h1 { color: #ff5bda; font-size: 29px !important;  }
		h2 { text-align: center; margin-bottom: 0; color: #8560a8; }

		.wrap { border-color: #96D89C; }
		.bg { background-image: url(assets/12/bg.jpg); }

		.slider img { height: 340px; }
		textarea { width: 85%; border: 1px solid #ccc;
			max-height: 300px; min-height: 300px; padding: 12px; 
			margin-top:-389px;
			margin-right:-155px;
			position: absolute;
			margin-left:89px ;}

		#task { display: none; }

		@media all and (max-width: 1250px) {
			h1 { font-size: 30px; }
			#task h2 { margin-top: 45px; }
		}

		@media all and (max-width: 960px) {
			h1 { font-size: 28px; }
			#task h2 { margin-top: 45px; }
		}

		@media all and (min-device-width: 768px) and (max-device-width: 1024px) {
			h1 { font-size: 28px; }
			#task h2 { margin-top: 45px; }
		}
		.caption { color: #A11EC5; }

		#nl-form {
			position: absolute;
			top: 30px;
			left: 75px;
		}

		#nl-form a { border-bottom: 0; background-color: #0090FF; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #0090FF; }
		.nl-field li { color: #fff; font-size: 18px; }
		.nl-dd ul li.nl-dd-checked { background-color: #0090FF; color: #8200D4; }	

		#nl-form p{font-size: 15px; line-height: 10px; margin:3px -35px; padding: 0px; padding-left: 40px;}
		#nl-form .nl-field-toggle{font-size: 18px;}
		#table_md {margin-top: -32px;margin-left:95px;}
		.ml_25{margin-left: -85px !important;}
		.select-bg p{text-align:left !important;}
		#m1_img {height: 410px; width: 220px;margin-top:-8px;margin-left:95px;}

		#task #m1_img {height: 410px; width: 220px;margin-top:15px;margin-left:5px; margin-right: 624px;}
		#task #nl-form p{font-size: 15px; line-height: 10px; margin:3px -35px; padding: 0px; padding-left: 40px;}
		#task #table_md {margin-top: -7px;margin-left:12px; }
		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
		  .select-bg { width: 15% !important; float: left !important; margin: 0 !important; padding: 0 !important }
		  textarea {
		    width: 75% !important;
		    margin: 0 !important;
		    margin-top: 15px !important;
		    float: right;
		  }
		}
		#task #nl-form p {
			padding-left: 30px;
		    width: 150px;
		}
		<?php if($language == 'ar_EG') { ?>
			.select-bg { float: right !important }
			#task #m1_img {
			  margin: 0 !important;
			  float: right !important;
			}
			#nl-form { left: initial; margin-top: -15px !important; }
			#nl-form p{
			  margin-right: 50px !important;
			  text-align: right !important;
			}
			#nl-form table tr:first-child p, #nl-form table tr:last-child p { margin-right: 10px !important; }
			@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
				div.grid_8.prefix_2 { float: left !important; margin-left: -75px; }
			}
		<?php }?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="scenario">
						<h1 class="grid_12"><?php echo _("Using what you now know about... electric charge... to solve a problem"); ?></h1>

						<h2 class="grid_12"><?php echo _("The Scenario"); ?></h2>

						<p class="grid_12"><?php echo _("The local children's museum is planning on conducting a \"hands on\" science show, where school children will be able to conduct their own science investigations to learn about nature. As part of this program, the students will use common materials to investigate electric charge."); ?></p>

						<div class="grid_6">


					
							<ul class="rslides slider">
								<li><img src="assets/12/hair.png"><span class="caption"><?php echo _("Human Hair"); ?></span></li>
								<li><img src="assets/12/silk.png"><span class="caption"><?php echo _("Silk"); ?></span></li>
								<li><img src="assets/12/glass.png"><span class="caption"><?php echo _("Glass"); ?></span></li>
								<li><img src="assets/12/wool.png"><span class="caption"><?php echo _("Wool"); ?></span></li>
							</ul>
			

						</div>
						<div class="grid_6">
							<ul class="rslides slider">
								<li><img src="assets/12/wood.png"><span class="caption"><?php echo _("Wood"); ?></span></li>
								<li><img src="assets/12/gold.png"><span class="caption"><?php echo _("Gold"); ?></span></li>
								<li><img src="assets/12/polyester.png"><span class="caption"><?php echo _("Polyester"); ?></span></li>
								<li><img src="assets/12/polystyerene.png"><span class="caption"><?php echo _("Polystyrene"); ?></span></li>
								
							</ul>
						</div>
					</div>

					<div id="task">
						<h2 class="grid_12"><?php echo _("The Task"); ?></h2>

						<p class="grid_12"><?php echo _("The program director has asked you to use your understanding of the triboelectric series to create a list of combinations of materials that can be used to produce positive charged objects and to produce negatively charged objects."); ?></p>

						

						<div class="grid_12 select-bg">
							<img id = "m1_img" src="assets/6/charge-bg.jpg">
							<form id="nl-form" class="nl-form">
								<table id = "table_md">
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
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Writing a report..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		var answered = 1; /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */

		$('.next').click(function() {
			if ($('textarea').val() == '') {
				alert("<?php echo _("Please type your answer."); ?>");
				return false;
			} else {
				if (answered == 0) {
					saveMeta('module', $('textarea').val());
					answered = 1;
				}

				document.location.href = "11.php";
			}
		});

		$('.back').click(function(){
			if ($('#scenario').is(':visible')) {
				document.location.href= "11.php";
			} else if ($('#task').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#task').fadeOut(function() { $('#scenario').fadeIn(); });
			}
		});

		$('.readmore').click(function() {

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});

			$('#scenario').fadeOut(function() {
				$('#task').fadeIn();

				window.location.hash = '#task';
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
