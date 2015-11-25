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
	<link rel="stylesheet" href="css/captionHoverEffects.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
			
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>
	
	<style>
		.grid_4.img {
		    top: 11px;
		}
		div#screen2 ul.grid.cs-style-1.grid_12 {
		    padding-bottom: 30px !important;
		}
		div#img1 {
		    top: 34px;
		}
		div#screen2 {
		    padding-top: 20px !important;
		}
		ul.grid.cs-style-1.grid_12 {
		    padding-bottom: 13px !important;
		}
		.key {
		    color: #DAF233 !important;
		}
		h1 { color: #FEFC8B; margin-top: 10px;}
		
		.wrap { border-color: #8b4414; }
		.bg { background-image: url(assets/8/8.jpg); overflow: hidden;}


		#screen2 { display: none; }
		#screen2 .grid_7 p, .grid_4 img{ margin-top: -5px;}
		#screen2 .img { margin-top: 10px; }
		#screen2 img { width: 95%;}

		.grid li { float: left; width: 283px; padding: 0 10px; }
		.grid a { display: none !important; }
		.grid figcaption { padding: 10px; background-color: #FFEBB5; height: auto; color: black; }
		.grid figcaption span { font-size: 20px; }

		html[dir=rtl] #screen2 p { text-align: right; }

		#buttons .next { display: none; }

		#img1{
			height: 230px;
			border-radius: 5px;
			background: 0px 0px/100% 100% url(assets/8/light-on.png);
			-webkit-animation: light 2s linear 0s infinite;
			animation: light 2s linear 0s infinite;
		}

		@-webkit-keyframes light {
			0% { background: 0px 0px/100% 100% url(assets/8/light-on.png); }
			49%{ background: 0px 0px/100% 100% url(assets/8/light-on.png); }
			50% { background: 0px 0px/100% 100% url(assets/8/light-off.png);}
			100% { background: 0px 0px/100% 100% url(assets/8/light-off.png); }
		}

		@-moz-keyframes light {
			0% { background-image: 0px 0px/100% 100% url(assets/8/light-on.png); }
			49%{ background: 0px 0px/100% 100% url(assets/8/light-on.png); }
			50% { background: 0px 0px/100% 100% url(assets/8/light-off.png); }
			100% { background: 0px 0px/100% 100% url(assets/8/light-off.png); }
		}

		@keyframes light {
			0% { background-image: 0px 0px/100% 100% url(assets/8/light-on.png); }
			49%{ background: 0px 0px/100% 100% url(assets/8/light-on.png); }
			50% { background: 0px 0px/100% 100% url(assets/8/light-off.png); }
			100% { background: 0px 0px/100% 100% url(assets/8/light-off.png); }
		}

		.grid figcaption {
			position: absolute;
			top: 20%;
			left: 10%;
			z-index: 10;
			width: 70%;
			height: 120px;
		}

		#screen2 p {
			line-height: 30px;
		}

		#screen2 p:nth-child(2){
			margin: 0 1%;
		}
		
		@media screen and (max-width: 1250px) { 
			#screen2 .grid_4 p { margin-top: -5px;} 
			#screen2 .grid_4 img { width: 80%;} 
			.grid figure img { max-width: 80%; } 
			#screen2 .grid_8 { margin-top: -20px; } 
			.bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
		figure p { text-align: center; }
		.grid { padding-bottom: 10px; }

		.prev {
		    position: absolute !important;
		    top: 20% !important;
		    left: 3% !important;
		    width: 70px !important;
		    z-index: 999 !important;
		    cursor: pointer !important;
		}
		.next1 {
		    position: absolute !important;
		    top: 20% !important;
		    right: 3% !important;
		    width: 70px !important;
		    z-index: 999 !important;
		    cursor: pointer !important;
		}
		.container_12 .grid_12 {
		    width: 96% !important;
		}
		.cycle-slideshow {
		    width: 81%;
		    margin: -5px auto 0;
		    height: 181px;
		    -webkit-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
		    -moz-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
		    box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
		    background-color: #FFE2B2;
		    border-radius: 5px;
		}
		img.image_align {
		    margin-top: 15px !important;
		    margin-left: 25px !important;
		}
		p.cType {
		    margin-top: 30px;
		}
		@media only screen and (max-width: 1250px){
			div#screen2 .grid_12:first-child {
			    margin-top: 37px;
			}
		}
	</style>

<style type="text/css"></style></head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<div >
							<h1 class="grid_12"><?php echo _("More big ideas about... electric circuits");?></h1>

							<p class="grid_12"><?php echo _("The electric currents from power plants reach our homes and businesses by wires strung on poles above ground and buried in tubes underground.  Batteries that make our flashlights light and our cars start also generate electric currents.  In both cases, wires are connected to and from either the batteries or the power plant in a loop called a <span class='key'>circuit</span> as shown below.");?></p>
							
							<div class="grid_6 prefix_3">
								<div class="grid_12" id="img1"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>

					<div id="screen2">
						<p class="grid_12 "><?php echo _("There are two kinds of electric circuits: a <span class='key'>series circuit</span> and a <span class='key'>parallel circuit</span>.The diagrams below show a series circuit and a parallel circuit that both contain three light bulbs.");?></p>
						<p class="grid_12 "><?php echo _("Browse through the slides below by clicking the left and right arrows.")?></p>
						<ul class="grid cs-style-1 grid_12">
<!-- 							<li class="prefix_1 grid_4 suffix_1">
								<figure>
									<p ><?php echo _("Series Circuit")?></p><img src="assets/8/Series.jpg">

									<figcaption>
										<span><?php echo _("In a series circuit, the electric current flows in one single loop.")?></span>
										<a href="#"></a>
									</figcaption>
								</figure>
							</li>
							<li class="prefix_1 grid_4 suffix_1">
								<figure>
									<p ><?php echo _("Parallel Circuit")?></p><img src="assets/8/Parallel.jpg">
									<div>
										<figcaption>
											<span><?php echo _("In a parallel circuit, the electric current can flow in more than one loop.")?></span>
											<a href="#"></a>
										</figcaption>
									</div>

								</figure>
							</li> -->
						<div class="grid_12 slide">
								<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="> div" data-cycle-timeout=6000 data-cycle-prev=".prev" data-cycle-next=".next">
									<div>
										<div class="grid_4">
											<img id="img2" class="image_align" src="assets/8/Series.jpg" />
										</div>
										<div class="grid_8">
											<p class="cType"><?php echo _("Series Circuit"); ?> </p>
											<p class="size22"><?php echo _("In a series circuit, the electric current flows in one single loop.")?></p>	
										</div>
									</div>
									<div>              
										<div class="grid_4">
											<img id="img2" class="image_align" src="assets/8/Parallel.jpg" />
										</div>
										<div class="grid_8">
											<p class="cType"><?php echo _("Parallel Circuit"); ?> </p>
											<p class="size22"><?php echo _("In a parallel circuit, the electric current can flow in more than one loop.")?></p>	
										</div>
									</div>
								</div>
								<div class="prev"><img src="assets/8/back.png"></div>
								<div class="next1"><img src="assets/8/next.png"></div>
						</div>

						</ul>
						<div class="grid_8">
							<p><?php echo _("Electric current will move in a series circuit only if the loop is <span class='key'>closed</span> or not broken.  In the diagram of the series circuit, that means if one of the light bulbs is burned out or removed, the circuit will be broken or <span class='key'>open</span>. The electric current will stop moving and the other light bulb will not light.");?></p>
						</div>

						<div class="grid_4 img">
							<label for="a"><img src="assets/8/8c.jpg"></label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the diagram..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		$(".rslides2").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		$( '.cycle-slideshow' ).cycle({
   				 next: '.next1',
   				 prev: '.prev',
   				 timeout: 0,
				});
		$('.cycle-slideshow').cycle('stop');

		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/8/8.jpg)');
					$('.wrap').css('border-color', '#8b4414');

					$('#question').fadeOut(100, function() { $('#screen2').fadeIn(); });

					$('.back').fadeOut();

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				} else {
					$('.bg').css('background-image', 'url(assets/8/8.jpg)');
					$('.wrap').css('border-color', '#8b4414');

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
				$('.bg').css('background-image', 'url(assets/8/8.jpg)');
				$('.wrap').css('border-color', '#8b4414');

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
					$('.bg').css('background-image', 'url(assets/8/8.jpg)');
					$('.wrap').css('border-color', '#8b4414');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn(); 
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '7.php'); }
		});
	</script>
<ul class="lang-menu">
	<li><a href="../../teacher.php#">Go Back to Dashboard</a></li>
	<li>
		<a href="#">Language: English</a>

		<ul>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=en_US">English</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=ar_EG">Arabic</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=es_ES">Spanish</a></li>
			<li><a href="/shymansky/sandbox/demo/templates/electric-circuits.php?lang=zh_CN">Chinese</a></li>
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

	<script src="js/jpreloader.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>
<?php include 'setlocale.php'; ?>
</body>
</html>