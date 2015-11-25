<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'chemical-and-physical-changes';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

	<link rel="stylesheet" href="css/responsiveslides.css">
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
		h1 { color: #EB6966; font-size: 33px; }
		/*p { font-size: 22px; }*/
		.wrap { border-color: #DAE980; }
		.bg { background-image: url(assets/4/bg.jpg); overflow: hidden; }
		.rslides { float: right; margin-top: 20px; }
		
		#buttons .next, #screen2 { display: none; }
		#lemonade div { width: 120px; float: left; }
		#lemonade div img { margin-bottom: 0; }
		#lemonade div p { text-align: center; line-height: 24px; font-size: 22px; }
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			#lemonade div{
				width: 14%;	
			}
			#lemonade div p { font-size: 18px;}	
			p{ font-size: 21px;}
			h1{ font-size: 30px;}	
		}
		@media screen and (max-width: 960px){
			p{ font-size: 19px;}
			h1{ font-size: 28px;}

		}
		@media screen and (max-width: 700px){
			#screen1 p{ font-size: 17px;}
			#screen1 h1{ font-size: 25px}
		}

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... chemical and physical changes"); ?></h1>
						
						<p class="grid_12"><?php echo _("Let's start by making lemonade!! There's nothing like a nice big glass of cold lemonade to wash down that delicious birthday cake. Making lemonade for your birthday party is a good example of mixing two or more different substances and getting a new substance that has different <span class='key'>properties</span>. That's what scientists call a <span class='key'>physical change</span>. Let's make some lemonade and see what that means."); ?></p>	
						
						<div id="lemonade" class="grid_12">
							<div>
								<img  src="assets/4/a.jpg" />
								<p><?php echo _("Water");?></p>
							</div>
							<div>
								<img src="assets/4/plus.png" />
								<p><?php echo _("Plus");?></p>
							</div>
							<div>
								<img src="assets/4/b.jpg" />
								<p><?php echo _("Powdered Lemonade Mix");?></p>
							</div>
							<div>
								<img src="assets/4/plus.png" />
								<p><?php echo _("Plus");?></p>
							</div>
							<div>
								<img src="assets/4/c.jpg" />
								<p><?php echo _("Sugar");?></p>
							</div>
							<div>
								<img src="assets/4/equals.png" />
								<p><?php echo _("Equals");?></p>
							</div>
							<div>
								<img src="assets/4/d.jpg" />
								<p><?php echo _("Lemonade");?></p>
							</div>
						</div>
						
						<p class="grid_12"><?php echo _("When you mix the lemonade mix with water and sugar, you get a new substance with new properties - lemonade. The lemonade mix by itself is dry and \"lemony\" tasting but bitter. The water by itself is wet but tasteless. And the sugar is dry but sweet. Mix them all together and you get lemonade, which has the properties of all three ingredients combined – wet, lemony-tasting, and sweet – but are different from each of the ingredients by themselves. Lemonade is a good example of a <span class='key'>mixture</span>."); ?>
					
					</div>

					<div id="screen2" class="screen">
						<div class="grid_12">
							<ul class="rslides grid_4">
								<li><img src="assets/4/1a.jpg"></li>
								<li><img src="assets/4/2a.jpg"></li>
								<li><img src="assets/4/3a.jpg"></li>
							</ul>
							<?php echo _("A mixture is an example of a physical change because the original ingredients, like the sugar, the water, and the lemonade mix, don't turn into new chemicals – they just mix together. If you simply let the lemonade stand on your table long enough – and it may take a couple of days – the water part of the mixture will eventually <span class='key'>evaporate</span> – which means it goes up into the air and becomes part of the air. Then, if you look in the bottom of the pitcher, you'll see the sugar and the lemonade mix are still there!  It came back!! Well, it was always there, but it was just mixed in with the water. The sugar always stayed sugar, and the lemonade mix stayed lemonade mix. They never changed into anything else. And the water <span class='key'>evaporating</span> – going from liquid to gas – is another example of a <span class='key'>physical change</span>. We'll talk more about that later."); ?>
							<p><?php echo _("And here's something else that's important about mixing <span class='key'>substances</span> together that causes physical changes. Even though the mixture might have new properties compared to the ingredients, the weight (or mass) of the mixture is always exactly the same as the weight of all the ingredients combined. No new matter is created or none of the matter is destroyed. This idea is called <span class='key'>Conservation of Matter</span> and is one of the most important ideas in all of science.");?></p>
						</div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Extracting lemonade..."); ?></strong></section></section>

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
