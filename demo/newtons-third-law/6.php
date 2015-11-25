<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Newton's Third Law"); ?></title>

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
		h1 { color: #00bcd8; }
		
		.wrap { border-color: #35BB13; }
		.bg { background-image: url(assets/6/bg.jpg); }

		#screen2 { display: none; text-align: center; }
		#screen2 p { text-align: left; }
		#screen2 img { width: auto; }

		#buttons .next { display: none; }

		@media screen and (max-width: 720px){		
			#screen1 h1 { font-size: 26px;}
			#screen2 img {height: 300px !important;}
		}
		#screen2 img { width: 30%; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... Newton's Third Law"); ?></h1>
						<p class="grid_8"><?php echo _("<span class='key'>Newton's Third Law</span> is commonly stated as \"For every action, there is an equal and opposite reaction.\" Another way to think of it is \"If object A puts a force on object B, then object B puts a force on object A.\" This is to say that there are no isolated forces in nature, forces always occur in pairs. When the baseball player strikes a ball with a bat, there is a force on the ball by the bat as well as a force on the bat due to the ball. This interaction can cause the ball to go flying over the fence for a home run, and a stinging feeling in the hands of the batter."); ?></p>
						<img src="assets/6/6b.jpg" class="grid_4" />
						<p class="grid_8"><?php echo _("Sometimes it can be a bit difficult to identify both of the forces involved in an interaction. It’s pretty obvious that a hammer is exerting force on a nail, pounding it into a board, but the nail is also putting a force on the hammer, causing it to stop moving. If the nail didn’t stop the hammer, you’d have to stop it all by yourself. Your arm would get tired much more quickly!"); ?></p>
						<img src="assets/6/6a.jpg" class="grid_4" />
						<div class="clear"></div>
					</div>

					<div id="screen2" class="screen">
						<div class="clear"></div>
						<p><?php echo _("When the soccer player heads the ball, the soccer player puts a force on the ball, and the ball also puts a force back on the soccer player. You can see in the photo how much the ball gets squished in this interaction. According to Newton’s Third Law, not only does the ball put a force on the player’s head, but that force is just as big as the force the head puts on the ball."); ?></p>
						<img src="assets/6/6c.jpg" alt="Image Illustration"/>
						<img src="assets/6/6d.jpg" alt="Image Illustration"/>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Striking a ball..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
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
		
		$('.back').click(function() {
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php";
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
		});

		$('.readmore').click(function(){
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
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
