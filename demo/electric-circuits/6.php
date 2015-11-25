<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
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

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/responsiveslides.css">

	

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>	
	
	<style>
		#question .slides {
		    margin-top: 0px !important;
		}
		h1 { color: #065D70; }
		
		#question h1 { margin-left: 0px; margin-top: 10px;}
		.wrap { border-color: #8faa41; }
		.bg { background-image: url(assets/6/6.jpg); overflow: hidden;}


		#question span {
			cursor: pointer;
			transition: all .3s ease;
			backface-visibility: hidden;
		}

		#question .slides { margin-top: -10px; }

		ul.rslides{ width: 90%; margin-left: auto; margin-right: auto; }

		.slides > div > div { background: url(assets/6/slide-bg.png) 0 0/100% 100% no-repeat; text-align: center; color: #fff; }
		.caption {color: #fff;}

		#screen2 { display: none; }
		#screen2 p { text-align: left; margin-left: 10px;  margin-top: 20px;}
		#screen2 .prefix_5 p { margin-top: -30px; }
		#screen2 .rslides { width: 400px; height: 380px;}

		html[dir=rtl] #screen2 p { text-align: right; }

		#buttons .next { display: none; }
		.img{float: right;}
		@media screen and (max-width: 1250px) {	#question .slides { margin-top: -20px; } #screen2 .prefix_3 label img { margin-top: -5px;} .bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
		@media screen and (max-width: 861px) {
			#screen2 .rslides img { height: 240px; }
		}
	</style>
<style type="text/css"></style></head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div id="question">
						<div class="grid_12">

							<h1 class="grid_12"><?php echo _("More big ideas about... electric circuits");?></h1>
							
							<p><?php echo _("Electric currents are able to move through metals but not through nonmetals such as glass, plastic, rubber and wood. Metals are considered <span class='key'>conductors</span> while nonmetals are considered <span class='key'>insulators</span>. But not all metals conduct electric currents equally well. Electric currents move more easily through gold, silver and copper, but not as easily through iron or steel.  Iron and steel have a higher <span class='key'>resistance</span> than the gold, silver and copper. It takes more force to push the electric current through iron and steel than it does to push through gold, silver and copper. The force to push an electric current is measured in <span class='key'>Volts</span>.  Resistance is measured in <span class='key'>Ohms</span>.");?></p>
							<div class="slides">
								<div class="grid_4 prefix_1 suffix_1">
									<div>
										<p class=""><?php echo _("Insulators (nonmetal)")?></p>
										<ul class="rslides">
											<li><img src="assets/6/6a1.jpg"><span class="caption"><?php echo _("Plastic")?></span></li>
											<li><img src="assets/6/6a2.jpg"><span class="caption"><?php echo _("Bottle")?></span></li>
											<li><img src="assets/6/6a3.jpg"><span class="caption"><?php echo _("Wood")?></span></li>
										</ul>
									</div>
								</div>
								<div class="grid_4 prefix_1 suffix_1">
									<div>
										<p class=""><?php echo _("Conductors (metal)")?></p>
										<ul class="rslides">
											<li><img src="assets/6/6a5.jpg"><span class="caption"><?php echo _("Silver")?></span></li>
											<li><img src="assets/6/6a6.jpg"><span class="caption"><?php echo _("Gold")?></span></li>
											<li><img src="assets/6/6a4.jpg"><span class="caption"><?php echo _("Copper")?></span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div id="screen2">
						<p class="grid_12"><?php echo _("Scientists use the symbol I for electric current, V for volts or voltage and R for resistance. The relationship among I, V and R describe how an electric current moves in a wire and is given by the formula:");?></p><br>
						<div class="prefix_5"><p><?php echo _("I = V/R");?></p></div><br>
						<p><?php echo _("According to this formula, 100 Volts acting across a 20 Ohm resistor would produce a 5 Ampere current.");?></p>


						<div class="grid_8 prefix_2 suffix_2">
							<ul class="rslides">
								<li><img src="assets/6/6b1.jpg"></li>
								<li><img src="assets/6/6b2.jpg"></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	
	<section id="preloader"><section class="selected"><strong><?php echo _("Conductors or insulators?"); ?></strong></section></section>


	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {

					$('#question').fadeOut(100, function() { $('#screen2').fadeIn(); });

					$('.back').fadeOut();

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				} else {

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.readmore').click(function() {
			$('#question').fadeOut(function() {

				$('#screen2').fadeIn();

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				window.location.hash = '#screen2';
			});
		});

		$('.back').click(function() {
			if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function() {

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn(); 
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '5.php'); }
		});
	</script>

	<script src="js/jpreloader.js"></script>

	
<ul class="lang-menu">
	<li><a href="../../teacher.php#">Go Back to Dashboard</a></li>
	<li>
		<a href="#">Language: English</a>

		<ul>
			<li><a href="/ngr/demo/electric-circuits/6.php?lang=en_US">English</a></li>
			<li><a href="/ngr/demo/electric-circuits/6.php?lang=ar_EG">Arabic</a></li>
			<li><a href="/ngr/demo/electric-circuits/6.php?lang=es_ES">Spanish</a></li>
			<li><a href="/ngr/demo/electric-circuits/6.php?lang=zh_CN">Chinese</a></li>
		</ul>
	</li>		
</ul>

<script>
	function addHash(tag) {
		$("ul.lang-menu ul a").each(function() {
			this.href = this.href + tag;
		});
	}

	function removeHash() {
		$("ul.lang-menu ul a").each(function() {
			var str = this.href;
			if (str.indexOf("#") != -1) 
				this.href = str.substring(0, str.indexOf("#"));
		});
	}
</script>


	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>

	<?php include 'setlocale.php'; ?>
	</body>

</html>