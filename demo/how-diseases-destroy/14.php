<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
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
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/14/bg.jpg'); 
	background-repeat: no-repeat;
	background-size: 100% 100%; 
	width:100% !important; 
	height:100%;
	position:relative;
	}
.wrap {border-left: 1px dashed #C1D5D4; border-right: 1px dashed #C1D5D4;}
.bg > div { width: 100%; }
h3 { margin:0; padding: 0 10px; font-size:24px !important; font-family: 'PlaytimeRegular'; }
h1 {padding: 30px 0 0 33px !important; color: #0A3480; font-size:32px;}
.bold { font-weight: bold; }
.column { width:100%; text-align: center; margin: 10% auto;}
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
	background: rgb(29, 68, 138); /* change bg color of buttons */
	color: rgb(255, 255, 255);
	font-family: 'PlaytimeRegular';
	font-size: 15px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
.md-modal { width: 50% !important; }
.md-content  { background: #7CFCFC; text-align:center;} /* change bg color of popup*/
.md-content h3 { background: #0A3480; color: #fff;} /* change bg color of pop up header */
.md-content img { width: 80%;  height:216px; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}

html[dir="rtl"] .bg > div { width: 95%; }
html[dir="rtl"] h1 {padding: 30px 33px 0 0 !important;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.bg > div { width: 95%; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<h1><?php echo _("Reviewing key vocabulary... related to how diseases destroy"); ?></h1>		
			<div>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Disease"); ?></h3>
						<div>
							<img src="images/14/disease.png"/>
							<p><?php echo _("When you have a disease, your body is not working the way it is supposed to. This causes you to feel ill. Germs can spread some diseases from one person to another. But there are also other diseases that people are born with. Doctors do not always know what causes a person to get a disease."); ?>	</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Immune system"); ?></h3>
						<div>
							<img src="images/14/immune_system.jpg"/>
							<p><?php echo _("Our bodies have a system called the immune system, which is the body's defense against infectious organisms and other invaders. Sometimes, however, the invasion is more than what our body can resist, and the immune system cannot overcome the invader."); ?>

							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Symptoms"); ?></h3>
						<div>
							<img src="images/14/symptoms.jpg"/>
							<p><?php echo _("A disease may then develop and symptoms of disease will appear. Symptoms are a series of changes in the body that are signs of an invading organism. Symptoms brought on by a virus might be a fever, nausea (the feeling you need to vomit), headache, and a lot of sweating."); ?>		
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Microbes"); ?></h3>
						<div>
							<img src="images/14/microbes.jpg"/>
							<p><?php echo _("Many diseases today are from invading microbes, which are life forms unable to be seen with the unaided eye. An example of a microbe is a bacterium."); ?> 
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Bacteria"); ?></h3>
						<div>
							<img src="images/14/bacteria.jpg"/>
							<p><?php echo _("Bacteria are very small, single-celled organisms that can only be seen with a microscope. Bacteria are around us all of the time. They perform various functions and can be found almost anywhere on Earth. Most bacteria do not hurt us. Some bacteria are even helpful because they eat other, bad bacteria and prevent them from entering our bodies. When bad bacteria do enter our bodies, they can grow and become an infection. Doctors can treat bacterial infections with drugs called antibiotics, which kill bacteria."); ?>
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Cell membrane"); ?></h3>
						<div>
							<img src="images/14/cell_membrane.jpg"/>
							<p><?php echo _("All cells have a cell membrane. The cell membrane controls the passing of materials in and out of the cell."); ?>
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Cell wall"); ?></h3>
						<div>
							<img src="images/14/cell_wall.jpg"/>
							<p><?php echo _("The cell wall forms the outer boundary of the cell, and helps it maintain its shape. Inside the cell wall and cell membrane are the cytoplasm (which contains ribosomes) and the nucleoid or nucleus."); ?>
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Capsule"); ?></h3>
						<div>
							<img src="images/14/capsule.jpg"/>
							<p><?php echo _("There are some bacteria that actually have a third layer that consists of a capsule and pili, which help the bacteria stick to each other and to surfaces."); ?>
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Pili"); ?></h3>
						<div>
							<img src="images/14/pili.jpg"/>
							<p><?php echo _("Some bacteria have pili, which are hair-like projections on the exterior of the cell that help them attach to other bacteria or surfaces."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Nucleoid"); ?></h3>
						<div>
							<img src="images/14/nucleoid.jpg"/>
							<p><?php echo _("The nucleoid is a group of fibers containing a bacterium's DNA."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Flagella"); ?></h3>
						<div>
							<img src="images/14/flagella.jpg"/>
							<p><?php echo _("Some bacteria have tentacle-like structures called flagella (singular, flagellum) that help them move."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Virus"); ?></h3>
						<div>
							<img src="images/14/virus.jpg"/>
							<p><?php echo _("The smallest microbes are viruses. The structure of a virus is much simpler than that of bacteria. They usually just have a shell made of protein and lipids (fat) that protects their genetic information. Most scientists don't consider them \"true life-forms\". This is because viruses cannot produce their own proteins to build their own bodies and they cannot reproduce. Instead, viruses infect cells and make them create new viruses."); ?>
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Pathogen"); ?></h3>
						<div>
							<img src="images/14/pathogen.jpg"/>
							<p><?php echo _("An organism, such as bacteria or a virus, that can cause disease in other organisms is called a pathogen."); ?>
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Contagious"); ?></h3>
						<div>
							<img src="images/14/contagious.jpg"/>
							<p><?php echo _("A contagious disease is one that spreads from one organism to another. To avoid contagious diseases, practicing proper hygiene is very important."); ?>
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Carrier"); ?></h3>
						<div>
							<img src="images/14/carrier.jpg"/>
							<p><?php echo _("A carrier is an organism that carries or spreads disease-causing microbes but may or may not have the symptoms of the disease itself. For example, ticks are carriers that can transfer the Lyme disease bacteria to humans."); ?> 
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3><?php echo _("Antimicrobial agents"); ?></h3>
						<div>
							<img src="images/14/anti-microbial_agents.jpg"/>
							<p><?php echo _("Chemicals, such as bleach and iodine, that can stop microbial growth or destroy microbes are called antimicrobial agents."); ?> 
							</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-17">
					<div class="md-content">
						<h3><?php echo _("Antibiotics"); ?></h3>
						<div>
							<img src="images/14/antibiotics.jpg"/>
							<p><?php echo _("Antibiotics are substances that are used to kill bacteria or prevent their growth. The discovery of antibiotics completely changed the way doctors treat diseases. Before antibiotics, some mild infections would have been life threatening, but today most only require a quick trip to the doctor and a prescription of an antibiotic. Penicillin is one of the oldest and most widely used antibiotics."); ?> 	</p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-18">
					<div class="md-content">
						<h3><?php echo _("Antibiotic resistance"); ?></h3>
						<div>
							<img src="images/14/antibiotic_resistance.jpg"/>
							<p><?php echo _("The problem of antibiotic resistance, in which a microorganism becomes resistant to an antibiotic, is caused by both overuse and misuse of antibiotics. A pathogen can be very difficult to kill once it develops antibiotic resistance."); ?> 
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
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Disease"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Immune system"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Symptoms"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Microbes"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Bacteria"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Cell membrane"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Cell wall"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Capsule"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Pili"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Nucleoid"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Flagella"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Virus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Pathogen"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Contagious"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Carrier"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("Antimicrobial agents"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("Antibiotics"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-18"><?php echo _("Antibiotic resistance"); ?></button>
						</div>
					</div>
				</div><!-- /container -->				
				<div class="md-overlay"></div><!-- the overlay element -->
			</div>
		</div> <!--END BG-->
	</div> <!--END WRAP-->
	<div id="buttons">
		<a href="13.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
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
	<?php require("setlocale.php"); ?>
</body>
</html>
