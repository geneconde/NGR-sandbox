<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Forces of all Kinds"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
		<link rel="stylesheet" href="css/hexaflip2.css" />
	<?php } else { ?>
		<link rel="stylesheet" href="css/hexaflip.css" />
	<?php } ?>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #df3e3e; }
		h2 {color:#00739f;}

		.wrap { border-color: #000; }
		.bg { background-image: url(assets/17/qq.jpg); }

		#hexaflip { margin: 20px auto auto auto; margin-top: ;}
	
		#adjustIns {margin-left: ; margin-top: 230px; width: ; text-align: center; font-size: 20px;}
		#quesAdj {padding:;}
		#imgside{float: left; margin-top: -130px; margin-left: 400px; height: 200px;}
		#answers #imgside {margin-left:300px;margin-top:0px;  height: 170px;}

		#answers #ansP { margin-left:37%; }
		#buttons .next { display: none; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		img#imgside {
		    position: fixed;
		    top: 43%;
		    width: 300px;
		    right: 10%;
		}
		#adjustIns {		   
		 	margin-top: 195px;
		    text-align: center;
		    font-size: 20px;
		}
    }
	@media only screen and (max-width: 1250px){
		img#imgside {
		    position: fixed;
		    top: 43%;
		    width: 250px;
		    right: 10%;
		    height: 165px !important;
		}
		#adjustIns {
		    margin-top: 160px;
		    text-align: center;
		    font-size: 20px;
		}
	}
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quiz Question #2"); ?></h1>

					<!--	<div id="question1">
							<h2 class="grid_12"><?php echo _("A large crate is placed on the back of a flatbed truck. As the truck accelerates from rest, the crate stays on the truck because of"); ?></h2>
						</div>

					-->

						<div id="question2">
							<h2 class="grid_12"><?php echo _("A large crate is placed on the back of a flatbed truck. As the truck accelerates from rest, the crate stays on the truck because of"); ?></h2>

							<div class="grid_12">
						

								<div class="grid_12" id  = "quesAdj">
									<ul id = "quesAdj">						
										<li>A. <?php echo _("A gravitational force"); ?></li>
										<li>B. <?php echo _("A friction force"); ?></li>
										<li>C. <?php echo _("A force from the truck's engine"); ?></li>
										<li>D. <?php echo _("Strong nuclear force"); ?></li>
									</ul>

								</div>

							<div class = "grid_5">
							<img src = "assets/17/truc.jpg" id = "imgside">
							</div>
						<div>
							<p id = "adjustIns"><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>
							<div id="hexaflip"></div>
						</div>
							</div>
						</div>



					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
<!--
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. "); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
-->
						<div id="answer2">

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<!-- 
							<div class = "grid_4">
							<img src = "assets/17/truc.jpg" id = "imgside">
							</div>
							-->
							<p class="answer grid_3" id = "ansP"></p>

							<div class="feedback grid_12"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Driving a truck..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<script src="js/hexaflip2.js"></script>
	<?php } else { ?>
	<script src="js/hexaflip.js"></script>
	<?php } ?>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _("A gravitational force"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Gravitational force is acting in the downward direction, and the truck is moving in a sideways direction."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _("A friction force"); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! Friction is the force responsible for preventing the crate from sliding off the truck."); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _('A force from the truck\'s engine'); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No. The truck\'s engine is helping the truck to accelerate, but friction is necessary to keep the crate from sliding off the truck.'); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _("Strong nuclear force"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. The strong nuclear force acts on particles inside the atom. The crate is much bigger than that, so it must be a different force keeping it on the truck."); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('forces-of-all-kinds-qq2-a', answer); // Correct answer: B
				answered = 1;
			}
		}
		$('.checkanswer').click(function() {

			$('.back').fadeOut();

			$('.checkanswer').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});

			$('#questions').fadeOut(function(){ 

				save();

				$('#answers').fadeIn();

				window.location.hash = '#answer';
			}); 
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "16.php";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});

		var hexa, images = [
			'./assets/a.png',
			'./assets/b.png',
			'./assets/c.png',
			'./assets/d.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
