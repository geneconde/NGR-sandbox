<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

	<link rel="stylesheet" href="css/captionHoverEffects.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #9F45ED; }
		
		.wrap { border-color: #6CBEF8; }
		.bg { background-image: url(assets/4/bg.jpg); }
		
		#screen2 { display: none; }

		#buttons .next { display: none; }
		
		#screen1 div ul { float: right; }
		
		#screen2 > div { margin-top: 20px; }
		#screen2 .rslides { float: right; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... energy and chemical changes"); ?></h1>
						
						<div class="grid_12">
							
							<ul class="rslides grid_5">
								<li><img src="assets/4/a.jpg"></li>
								<li><img src="assets/4/b.jpg"></li>
								<li><img src="assets/4/c.jpg"></li>
							</ul>
						
							<?php echo _("Look all around you. Energy is everywhere. You might not be able to see it directly because it's not a thing. But you can see what it does. Wherever you look, something is happening: your friends are moving around, playing ball, riding a bike, or just talking; cars are driving by; a pencil just rolled across your desk and fell on the floor. Even in things you can't see, something is happening: the air in your room is moving to make sounds; the invisible molecules of oxygen and nitrogen that make air are even bouncing around to create the temperature you feel in the air; and you – you are breathing and your heart is beating and even if you can't see it, the cells that make up your body are growing and making more cells to make you bigger and stronger every day. And all of this activity – everything that's happening – all the activity in the universe happens because of energy."); ?>
						</div>
						
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Scientists define <span class='key'>energy</span> as \"the ability to do <span class='key'>work</span>\". That's one of the most important ideas in all of science! And when they say \"work\", they don't just mean it like doing your school-\"work\" or your home-\"work\", or when someone goes to \"work\" to make money and earn a living. What scientists mean by \"work\" is anything that causes matter to change or move. So everything that happens to matter in the universe, any movement or change to matter, is considered work and requires energy."); ?></p>
						
						<div class="grid_6"><img src="assets/4/1.jpg"></div>
						<div class="grid_6"><img src="assets/4/2.jpg"></div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking around..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "3.php";
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
	</script>

    <script type="text/javascript">
		$(".rslides").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false, /* Set to true if the next/previous controls are needed */
		    speed: 400
		});

    </script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
