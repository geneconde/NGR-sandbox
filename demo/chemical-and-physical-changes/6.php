<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = chemical-and-physical-changes';
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

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #EB6966; font-size: 31px; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #AEF4FC; }
		.bg { background-image: url(assets/6/bg.jpg); overflow: hidden;}

		#screen2 div { float: right; }
		#screen2 > div { margin-top: 15px; }
		
		#ice div { width: 120px; float: left; }
		#ice div img { margin-bottom: 0; }

		<?php if ($language == 'es_ES') { ?>
			.grid_12 p { font-size: 23px !important; }
		<?php } ?>

		#ice div p { text-align: center; line-height: 24px; font-size: 22px; }
		
		@media screen and (max-width: 1250px){
			#ice div {
				width: 14%;
			}
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			
		}
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... chemical and physical changes"); ?></h1>
				
						<p class="grid_12"><?php echo _("Now that we have some tasty lemonade for our party, let's make some ice cubes to keep it cold."); ?></p>
						
						<div id="ice" class="grid_12">
							<div>
								<img src="assets/6/a.jpg" />
								<p><?php echo _("Water");?></p>
							</div>
							<div>
								<img src="assets/6/plus.png" />
								<p><?php echo _("Plus");?></p>
							</div>
							<div>
								<img src="assets/6/b.jpg" />
								<p><?php echo _("Ice Cube Tray");?></p>
							</div>
							<div>
								<img src="assets/6/plus.png" />
								<p><?php echo _("Plus");?></p>
							</div>
							<div>
								<img src="assets/6/c.jpg" />
								<p><?php echo _("Freezer");?></p>
							</div>
							<div>
								<img src="assets/6/equals.png" />
								<p><?php echo _("Equals");?></p>
							</div>
							<div>
								<img src="assets/6/d.jpg" />
								<p><?php echo _("Ice");?></p>
							</div>
						</div>
						
						<p class="grid_12"><?php echo _("Making ice cubes is even easier than making lemonade! All you have to do is add some liquid water to an ice cube tray, put it in the freezer, and wait a couple of hours until it freezes into solid water – called ice. It's called changing states of matter - in this case from liquid to solid. Changing states of matter of substances occur because of changes in temperature. This is another example of a physical change that can happen to a substance. Most substances like water can commonly exist in three different states of matter – solids, liquids, and gas. But what makes water unusual is that it can exist in all three states of matter at temperatures that commonly occur in everyday life on earth."); ?>
						
					</div>
					
					<div id="screen2" class="screen">
						<div class="grid_12">
							<div class="grid_5 ">
								<img src="assets/6/physical.gif">
							</div>
								
							<?php echo _("<span class='key'>Changing states of matter</span> just means changing a substance – like water - from a solid to a liquid or a liquid to a gas – or going the other way - from a gas to a liquid or a liquid to a solid, simply by changing the temperature. In making ice cubes, the water changed its properties from being liquid at room temperature to being cold and solid when it freezes. But it's still water. It didn't change what it is - just some of its properties changed. And - if you just leave the ice alone at room temperature for an hour or so, the ice will melt back to liquid water again– or change from a solid state – ice - into the liquid state - liquid water – all by itself. That means the process of changing states of matter is <span class='key'>reversible</span>. It can go either way."); ?>
						</div>
						
						<p class="grid_12"><?php echo _("Most matter can exist in a solid state, liquid state, or gaseous state, depending on the temperature. But sometimes, for some substances like iron, the temperature has to be really hot – like in a really hot furnace to get it to become liquid."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting ice cubes..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
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
				document.location.href = "5.php";
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
		
	<script src="js/responsiveslides.js"></script>
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 600
		});
	</script>
</body>
</html>
