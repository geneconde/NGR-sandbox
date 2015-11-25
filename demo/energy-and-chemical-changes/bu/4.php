<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
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

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

	<link rel="stylesheet" href="css/captionHoverEffects.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #EDB80A; font-size: 31px; }
		
		.wrap { border-color: #E14769; }
		.bg { background-image: url(assets/4/bg.jpg); }
		
		#screen2 { display: none; }

		#buttons .next { display: none; }
		
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
						<h1 class="grid_12"><?php echo _("Reviewing core ideas... about structures and properties of matter"); ?></h1>
						<p class="grid_12"><?php echo _("All the \"stuff\" that you see or feel or use in your daily life is matter. The wood that makes up your house is matter. The food and water you eat and drink is matter. The metal that makes up your car is matter. But there's also a lot of matter you don't feel or see or smell or use. The air that you breathe is matter even if you can't see it! Matter is all the \"stuff\" that makes up the earth and the entire universe. The way scientists define matter is that matter is anything that has mass and takes up space."); ?></p>
						
						<ul class="rslides grid_6 prefix_3">
							<li><img src="assets/4/a.jpg"></li>
							<li><img src="assets/4/b.jpg"></li>
							<li><img src="assets/4/c.jpg"></li>
						</ul>
					
					</div>

					<div id="screen2" class="screen">
						<div class="grid_12">
							
							<ul class="rslides grid_6">
								<li><img src="assets/4/1.jpg"></li>
								<li><img src="assets/4/2.jpg"></li>
							</ul>
							
							<?php echo _("There are different kinds of matter based on their properties. Properties are something about matter that you can observe to describe the matter and identify it. And it's these properties that make different kinds of matter useful to us for different purposes. For instance, most matter that we call metal has the property of being hard and strong and is useful to make structures like tall buildings and bridges and cars and trucks. Wood is a kind of matter that has the property of being hard and strong but soft enough to hammer a nail through. So, because of these properties, it is useful to build houses. Other matter, such as water, has the property of being either a solid, liquid, or gas at different temperatures. That's an important property of matter that scientists call a \"state\" of matter. There are many kinds of matter with many different properties and many different uses."); ?>
							
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

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
