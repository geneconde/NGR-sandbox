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

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/captionHoverEffects.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #F16D2D; font-size: 32px; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #DCF4F6; }
		.bg { background-image: url(assets/8/bg.jpg); overflow: hidden; }
		
		.grid { padding: 0; }
		.grid li { float: left; width: 30.5%; padding: 10px; }
		.grid a { display: none !important; }
		.grid figcaption { padding: 10px; background-color: #EFB8F1; height: auto; color: black; width: 95%; }
		.grid figcaption span { font-size: 20px; }
		.grid figure img { border: solid #00BFD6 5px; max-width: 90%; margin: 0 5%; }
		#screen1 > p:nth-of-type(2) { margin: 0 3px; }
		#screen2 > div { margin-top: 30px; }
		<?php if ($language == 'es_ES') : ?>
			p, h2 { line-height: 28px;}
			span { line-height: 25px;}
		<?php endif; ?>
		.container_12 .grid_12 {
		  width: 100% !important;
		}
		.grid_1, .grid_2, .grid_3, .grid_4, .grid_5, .grid_6, .grid_7, .grid_8, .grid_9, .grid_10, .grid_11, .grid_12 {
		  display: inline !important;
		  float: left !important;
		  position: relative !important;
		  margin-left: 0% !important;
		  margin-right: 0% !important;
		}

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 26px;}
		<?php endif; ?>

		@media all and (max-width: 880px) {
			h1 {font-size: 28px;}
		}

		<?php if ($language == 'es_ES') : ?>
			@media all and (max-width: 880px) {
				h1 { font-size: 24px !important; }
			}
		<?php endif; ?>
		.grid_4.img { margin: 1% !important; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... the structure and properties of matter"); ?></h1>
						<p class="grid_12"><?php echo _("All matter is made up of millions of little particles that are too small to see with the naked eye... even too small to see with ordinary microscopes. These particles are called <span class='key'>atoms</span>. You can think of them as the building blocks of matter – kind of like Legos. Each Lego block is like an individual atom. And just like Legos, there are many, many different sizes and kinds of atoms that can be combined to build many different kinds of matter with different properties. If you build an object with just one kind of Lego block, that's like nature building matter with just one kind of atom – so you get a kind of matter called an  <span class='key'>element</span> - like oxygen, or carbon, or iron. But if you start combining different kinds of Lego blocks - different sizes or shaped blocks - that's like nature combining different kinds of atoms together to form <span class='key'>compounds</span> - which are matter made of two or more different kinds of atoms."); ?></p>
					
						<p class="grid_12"><?php echo _("Hover your mouse on the images to see the details."); ?>
						
						<ul class="grid cs-style-1">
						    <li>
						        <figure>
							    <img src="assets/8/a.jpg">
						
							    <figcaption>
						                <span><?php echo _("There are different kinds of Lego building blocks just like there are many different kinds of atoms - the building blocks of matter.");?></span>
								<a href="#"></a>
							    </figcaption>
							</figure>
						    </li>
						    
						    <li>
						        <figure>
							    <img src="assets/8/b.jpg">
						
							    <figcaption>
						                <span><?php echo _("Building matter from just one kind of atom makes an element.");?></span>
								<a href="#"></a>
							    </figcaption>
							</figure>
						    </li>
						    
						    <li>
						        <figure>
							    <img src="assets/8/c.jpg">
						
							    <figcaption>
						                <span><?php echo _("Building matter from two or more different kinds of atom makes a compound.");?></span>
								<a href="#"></a>
							    </figcaption>
							</figure>
						    </li>
						</ul>
						
					</div>
					
					<div id="screen2" class="screen">
						
						<p class="grid_12"><?php echo _("Most of the matter we see or touch or even eat is made of compounds. Some examples of compounds are water - H<sub>2</sub>O - which means it has two atoms of the element hydrogen for every atom of oxygen; or salt – NaCl – which has one atom of sodium for every one atom of chlorine; or sugar - C<sub>6</sub>H<sub>12</sub>O<sub>6</sub> – which is made of the elements carbon, hydrogen, and oxygen. It's important to know that when you look at one grain of sugar or one drop of water, they are made up of millions of invisible building blocks called atoms.");?></p>
						
						<div class="grid_4 img">
							<img src="assets/8/1.jpg" />
						</div>
						<div class="grid_4 img">
							<img src="assets/8/2.jpg" />
						</div>
						<div class="grid_4 img">
							<img src="assets/8/3.jpg" />
						</div>
					
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Building blocks..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	

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
				document.location.href = "7.php";
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
	
	<script>
		$(".rslides").responsiveSlides({
			auto: false,
			pager: false,
			nav: true,
			speed: 400
		});
	</script>
	
</body>
</html>
