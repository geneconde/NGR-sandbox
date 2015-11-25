<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(12, $_SESSION['smid']);
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
	<link rel="stylesheet" href="css/modalcomponent.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		.wrap > .bg {
			overflow: hidden;
		}
		h1 { color: #a6a739; margin-left: 3%; margin-right: 3%; }
		h2 { text-align: center; color: #4b74d4; margin-bottom: 0; }
		p { color: #000; }
		p.grid_12 { padding: 0 30px; }

		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/12/bg.jpg); }
		.textarea { max-height: 250px; min-height: 250px; }
		.slider img { height: 340px; }

		.column { width: 95%; text-align: center; margin: 10% auto; }
		.md-content { background-color: #eee; }
		.md-content p { font-size: 16px; }
		.md-content img { width: 270px; height: 200px; }
		.md-content h3 { background-color: #000; color: #fff; }

		.rslides li img{ width: 500px; height:300px; }
		ul.rslides.rslides1 { text-align: center; }
		ul.rslides.rslides1 li { float: none !important; }

		textarea { width: 60%; border: 1px solid #8781bd; margin-top: 20px; max-height: 300px; min-height: 300px; padding: 12px; }

		#task { display: none; }
		#task p{width:850px;}
		#task .grid_7 { text-align: center; }

		@media all and (max-width: 960px) {
			h1 { font-size: 28px; }
			#task h2 { margin-top: 45px; }
		}
		@media all and (min-device-width: 768px) and (max-device-width: 1024px) {
			h1 { font-size: 28px; }
			#task h2 { margin-top: 45px; }
		}
		#buttons .next { display: none; }
	    @media screen and (max-width: 1250px) {
	    	.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
	    	h1 { padding-top: 33px; }
	    }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="scenario">
						<h1 class="grid_12"><?php echo _("Using what you know about... motion... to solve a problem"); ?></h1>
						<h2 class="grid_12"><?php echo _("The Problem"); ?></h2>

						<p class="grid_12"><?php echo _("Some of the teachers at your school are growing concerned about cars driving too fast on a road near your school, but they’d like to have some evidence before contacting local law enforcement."); ?><br /><br /></p>
						<div class="grid_12">
							<ul class="rslides">
							    <li><img src="assets/12/traffic.jpg"></li>
							    <!--<li><img src="assets/10/b.jpg"></li>-->
							</ul>
						</div>
					</div>
					<div id="task">
						<h2 class="grid_12"><?php echo _("The Task"); ?></h2>
						<p class="grid_12"><?php echo _("Come up with a method to determine whether or not the cars are driving over the speed limit.  Make a list of materials and describe how you will use them to safely make the necessary measurements to establish the velocity patterns for cars driving on this road.  Enter your answer in the text box below."); ?></p>

						<div class="grid_7 prefix_2">
							<textarea class="textarea" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Driving a car..."); ?></strong></section></section>
	
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
					saveMeta('#', $('textarea').val());
					answered = 1;
				}

				document.location.href = "13.php";
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

		$(".rslides").responsiveSlides({
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
