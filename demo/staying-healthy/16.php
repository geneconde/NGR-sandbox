<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") {?> dir="es"  <?php } ?>>
<head><title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg {
	background-image: url('images/15/bg.jpg'); 
	background-repeat: no-repeat; 
	background-size: 100% 100%; 
	width:100% !important;
	height:100%;
	overflow: hidden;
	position:relative;
}
	
h1 {color:#f22f41; padding:5px 0 0 0; margin-left:22px; }
.wrap {border-left: 1px dashed #C1D5D4; border-right: 1px dashed #C1D5D4;}
.bg > div { width: 100%; -moz-perspective: 600px; }
h3 { margin:0; padding: 0 10px; font-size:24px !important; font-family: 'PlaytimeRegular'; }
.bold { font-weight: bold; }
.column { width:80%; text-align: center; margin: 10% auto;}
button:hover { background: rgb(10, 52, 128); }
p {font-size:16px;}
button {
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: rgb(29, 68, 138);
	color: rgb(255, 255, 255);
	font-family: 'PlaytimeRegular';
	font-size: 15px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	outline: 0;
	border-radius: 10px;
}

.md-content { background: #eff5f6; }
.md-content p { text-align: left; }
.md-content h3 { background: rgb(29, 68, 138); color: white; }
.md-content img { height: 200px; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
.resize {height:300px;} 

html[dir="es"] h1 { font-size: 32px; }
html[dir="rtl"] .md-content > div p { text-align: right; }
html[dir="rtl"] h1 { margin-right: 2.5%; }

@media only screen and (-webkit-min-device-pixel-ratio: 1) and (max-device-width: 1024px) and (min-device-width: 768px) {
h1 {
padding-top: 35px !important;
}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">		
			<h1><?php echo _("Reviewing key vocabulary... related to staying healthy"); ?></h1>
			<div class="md-modal md-effect" id="modal-1">
				<div class="md-content">
					<h3><?php echo _("Calorie"); ?></h3>
					<div>
						<img src="images/16/calorie.jpg" class="resize"/>
						<p>
							<?php echo _("A unit of heat energy used to compare foods."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-2">
				<div class="md-content">
					<h3><?php echo _("Carbohydrates"); ?></h3>
					<div>
						<img src="images/16/carbohydrates.jpg" class="resize"/>
						<p>
							<?php echo _("Quick energy food made of simple and complex sugars and starches."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-3">
				<div class="md-content">
					<h3><?php echo _("Cells"); ?></h3>
					<div>
						<img src="images/16/cell.jpg" class="resize"/>
						<p>
							<?php echo _("The smallest units of living things."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-4">
				<div class="md-content">
					<h3><?php echo _("Circulatory system"); ?></h3>
					<div>
						<img src="images/16/circulatory.jpg" class="resize"/>
						<p>
							<?php echo _("Heart, blood, and vessels responsible for the movement of nutrients and gasses throughout the body."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-5">
				<div class="md-content">
					<h3><?php echo _("Digestive system"); ?></h3>
					<div>
						<img src="images/16/digestive_system.jpg" class="resize"/>
						<p>
							<?php echo _("Stomach, liver, intestines, and other organs responsible for the breakdown and processing of food prior to absorption."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-6">
				<div class="md-content">
					<h3><?php echo _("Excretory system"); ?></h3>
					<div>
						<img src="images/16/excretory.jpg" class="resize"/>
						<p>
							<?php echo _("Kidneys and other organs responsible for the removal of chemical waste."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-7">
				<div class="md-content">
					<h3><?php echo _("Fats"); ?></h3>
					<div>
						<img src="images/16/fats.jpg" class="resize"/>
						<p>
							<?php echo _("Energy storage food made of fatty acids and glycerol."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-8">
				<div class="md-content">
					<h3><?php echo _("Immune system"); ?></h3>
					<div>
						<img src="images/16/immune_system.jpg" class="resize"/>
						<p>
							<?php echo _("White blood cells, bone marrow, thymus, and spleen responsible for fighting infection."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-11">
				<div class="md-content">
					<h3><?php echo _("Nervous system"); ?></h3>
					<div>
						<img src="images/16/nervous.jpg" class="resize"/>
						<p>
							<?php echo _("Nerves, spinal cord, and brain responsible for responses to the environment."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-12">
				<div class="md-content">
					<h3><?php echo _("Organs"); ?></h3>
					<div>
						<img src="images/16/organs.jpg" class="resize"/>
						<p>
							<?php echo _("Collections of tissues working together to perform functions."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-13">
				<div class="md-content">
					<h3><?php echo _("Proteins"); ?></h3>
					<div>
						<img src="images/16/protein.jpg" class="resize"/>
						<p>
							<?php echo _("Structural substances made from amino acids."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-14">
				<div class="md-content">
					<h3><?php echo _("Reproductive system"); ?></h3>
					<div>
						<img src="images/16/reproductive_system.jpg" class="resize"/>
						<p>
							<?php echo _("Ovaries, testes, and other organs responsible for the production of offspring."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-15">
				<div class="md-content">
					<h3><?php echo _("Respiratory system"); ?></h3>
					<div>
						<img src="images/16/respiratory.jpg" class="resize"/>
						<p>
							<?php echo _("Lungs and other structures responsible for taking in oxygen and removing carbon dioxide."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>		
						
			<div class="md-modal md-effect" id="modal-16">
				<div class="md-content">
					<h3><?php echo _("Skeletal system"); ?></h3>
					<div>
						<img src="images/16/skeletal.png" class="resize"/>
						<p>
							<?php echo _("Rigid framework of bones and connective tissues responsible for supporting and protecting the body."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-17">
				<div class="md-content">
					<h3><?php echo _("Systems"); ?></h3>
					<div>
						<img src="images/16/systems.jpg" class="resize"/>
						<p>
							<?php echo _("Collections of organs working together to perform related tasks."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-18">
				<div class="md-content">
					<h3><?php echo _("Tissues"); ?></h3>
					<div>
						<img src="images/16/tissue.jpg" class="resize"/>
						<p>
							<?php echo _("Groups of similar cells working together to perform similar functions."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="md-modal md-effect" id="modal-19">
				<div class="md-content">
					<h3><?php echo _("Vitamins"); ?></h3>
					<div>
						<img src="images/16/vitamins.jpg" class="resize"/>
						<p>
							<?php echo _("Nutrients needed in very small amounts to support normal growth and activity."); ?>
						</p>
						<button class="md-close"><?php echo _("Close me!"); ?></button>
					</div>
				</div>
			</div>
			
			<div class="container">
				<!-- Top Navigation -->
				<div class="main clearfix">
					<div class="column">
						<!-- special modal that will add a perspective class to the html element -->
						<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Calorie"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Carbohydrates"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Cells"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Circulatory system"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Digestive system"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Excretory system"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Fats"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Immune system"); ?></button> 
						<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Nervous system"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Organs"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Proteins"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Reproductive system"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Respiratory system"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("Skeletal system"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("Systems"); ?></button>
						<button class="md-trigger md-setperspective" data-modal="modal-18"><?php echo _("Tissues"); ?></button> 
						<button class="md-trigger md-setperspective" data-modal="modal-19"><?php echo _("Vitamins"); ?></button>
												
					</div>
				</div>
			</div><!-- /container -->			
			<div class="md-overlay"></div><!-- the overlay element -->
		</div>
	</div>

	<div id="buttons">
		<a href="15.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>	
	
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
