<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
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

	<title><?php echo _("How Light Behaves"); ?></title>

	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #EB6966; }
		
		.wrap { border-color: #DAE980; }
		.bg { background-image: url(assets/4/bg.jpg); overflow: hidden; }
		.rslides { float: right; margin-top: 20px; }
		
		#buttons .next, #screen2 { display: none; }

		ul {margin-bottom: 30px;}
		
		.a p { text-align: center; bottom: 0; position: absolute; text-align: center; width: 100%; bottom: 28px; font-size: 20px; }
		
		.a { height: 243px; }
		.a span {font-size: 20px;}
		.a:first-of-type { background: url("assets/4/a.png"); background-size: 100% 100%; }
		.a:nth-of-type(2) { background: url("assets/4/b.png"); background-size: 100% 100%; }
		.a:nth-of-type(3) { background: url("assets/4/c.png"); background-size: 100% 100%; }
		.a span:first-of-type { float: left; margin: 1px 0 0 18px; }
		.a span:last-of-type { width: 85px; float: right; margin: 48px 13px 0 0; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... how light behaves"); ?></h1>
											
						<p class="grid_12"><?php echo _("All light travels in straight lines from a source, such as a lamp, a candle or the Sun. Unlike sound waves that need a material to carry the wave, light waves can travel through empty space. But when light reaches or shines on an object, any or all three of the following things can happen:"); ?></p>
						<ul class="grid_11 prefix_1">
							<li><?php echo _("a. The object or material <span class='key'>absorbs</span> some or most of the light,"); ?></li>
							<li><?php echo _("b. Some of the light can bounce off or be <span class='key'>reflected</span>, or"); ?></li>
							<li><?php echo _("c. Some of the light can pass through or be <span class='key'>transmitted</span>"); ?></li>
						</ul>
						
						<div class="grid_4 a">
							<span><?php echo _("White light");?></span>
							<span><?php echo _("White light Reflected");?></span>
							<p><?php echo _("White surface");?></p>
						</div>
						<div class="grid_4 a">
							<span><?php echo _("White light");?></span>
							<span><?php echo _("No light Reflected");?></span>
							<p><?php echo _("Black surface");?></p>
						</div>
						<div class="grid_4 a">
							<span><?php echo _("White light");?></span>
							<span><?php echo _("Red light Reflected");?></span>
							<p><?php echo _("Red surface");?></p>
						</div>
						
						<div class="clear"></div>
						
						
					</div>

					<div id="screen2" class="screen">

						<p class="grid_12"><?php echo _("A material or object that absorbs or reflects all of the light that shines on it is called <span class='key'>opaque</span>. When light shines on an opaque object, a <span class='key'>shadow</span> is formed on the other side of the object. But not all the light has to be absorbed or reflected to create a shadow. So shadows aren't all necessarily black. For example, a clear glass of water can also cast a shadow. Try it!"); ?></p>	
						<div class="grid_5 prefix_1"><img src="assets/4/1.jpg" /></div>
						<div class="grid_5"><img src="assets/4/2.jpg" /></div>
						
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Travelling in straight lines..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>


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
				document.location.href = "3.php#answer";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
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
