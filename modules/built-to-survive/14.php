<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(14, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
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
html { overflow: hidden; }
.bg { background-image: url('images/14/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
.bg > div { width: 95%; -moz-perspective: 600px; }
h1 { color: #DB903B; font-size: 33px; margin: 0 3%;}
.md-modal { width: 50% !important; }
h3 { margin:0; padding: 0 10px; font-size:24px !important; font-family: 'PlaytimeRegular'; color: #fff !important; background-color: #469AAF !important; }
.bold { font-weight: bold; }
.md-content { text-align: center;}
.md-content img { width: 50%;  -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px; }
.md-content img { width: 90%; }
.column { width: 100%; text-align: center; margin: 10% auto;}
p { font-size: 16px; }
button:hover { background: #7094B7; }

button {
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	outline: 0;
	background: #469AAF;
	color: #D9E3DB;
	font-family: 'PlaytimeRegular';
	font-size: 15px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
div.md-overlay {
	width: 100%;
}
<?php if($language == "es_ES") { ?>
		h1 { font-size:26px; }
		p { font-size:15px; }
	<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... being built to survive"); ?></h1>
				<!-- <div> -->
					<div class="md-modal md-effect" id="modal-1">
						<div class="md-content">
							<h3><?php echo _("Adaptation"); ?></h3>
							<div>
								<img src="images/14/adaptation.jpg"/>
								<p><?php echo _("To say that living things have adaptations means that they have features that help them to stay alive. Both plants and animals have special adaptations. For example, a polar bear has heavy layers of fat to keep it warm in the cold winter, and a cactus is able to survive in a desert, where it is very hot and dry, because it can store a large amount of water in its very thick stem. These are both examples of adaptations that help these living things survive. Humans also have special adaptations. One of our most important adaptations is our ability to think. Humans have large brains that make it possible for us to think and reason in ways that no other animals can. This allows us to solve problems and make tools that help us to survive."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-2">
						<div class="md-content">
							<h3><?php echo _("Anatomical"); ?></h3>
							<div>
								<img src="images/14/anatomical.jpg"/>
								<p><?php echo _("A living thing's anatomy, or anatomical features, are its physical characteristics. In general, a bird's anatomy also includes beaks, thin legs, and small heads and brains for their body size."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-3">
						<div class="md-content">
							<h3><?php echo _("Bacteria"); ?></h3>
							<div>
								<img src="images/14/bacteria.jpg"/>
								<p><?php echo _("Bacteria are very small, single-celled organisms that can only be seen with a microscope. Bacteria are around us all of the time. They perform various functions and can be found almost anywhere on Earth. Most bacteria do not hurt us. Some bacteria are even helpful because they eat other bad bacteria and prevent them from entering our bodies. When bad bacteria do enter our bodies, they can grow and become an infection. Doctors can treat bacterial infections with drugs called antibiotics, which kill bacteria."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-4">
						<div class="md-content">
							<h3><?php echo _("Cell"); ?></h3>
							<div>
								<img src="images/14/cell.jpg"/>
								<p><?php echo _("A cell is the simple building block of life. Cells make up all living things, which can be made up of just one cell or large groups of many cells. Humans are made up of trillions of cells. Cells are the smallest unit of life. Cells can take in food and change that food into energy. Cells do many different things in our bodies. Here is a paramecium—a simple cell you will likely study in science."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-5">
						<div class="md-content">
							<h3><?php echo _("DNA"); ?></h3>
							<div>
								<img src="images/14/dna.jpg"/>
								<p><?php echo _("The letters DNA are an abbreviation for the molecule DeoxyriboNucleic Acid. DNA is a molecule that carries inherited information from parents to offspring. All living things have DNA in their cells. The information in DNA is what makes rats become rats, roses become roses, and humans become humans. DNA contains all the information that defines a living thing. Your DNA is a combination of both your parents' DNA. The reason why you look different from your parents is that your physical characteristics are determined by the sequence of DNA that you have. The particular sequence of DNA that you have makes you different from everyone else."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-6">
						<div class="md-content">
							<h3><?php echo _("Nucleoid"); ?></h3>
							<div>
								<img src="images/14/nucleoid.jpg"/>
								<p><?php echo _("The nucleoid is the centrally located region inside a cell. DNA, the chemical codes that define the organism, is contained in the nucleoid of cells."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-7">
						<div class="md-content">
							<h3><?php echo _("Pili"); ?></h3>
							<div>
								<img src="images/14/pili.jpg"/>
								<p><?php echo _("On the outside of the bacteria, small hair-looking structures called pili, plural for pilus, enable the cell to attach to other cells."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-8">
						<div class="md-content">
							<h3><?php echo _("Flagella"); ?></h3>
							<div>
								<img src="images/14/flagella.jpg"/>
								<p><?php echo _("The long tail-looking structures at the end of the bacteria are the flagella (plural for flagellum). The flagella are a special adaptation that help the bacteria get from place to place."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-9">
						<div class="md-content">
							<h3><?php echo _("Gills"); ?></h3>
							<div>
								<img src="images/14/gills.jpg"/>
								<p><?php echo _("The gills of a fish enable them to breathe underwater."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-10">
						<div class="md-content">
							<h3><?php echo _("Blowhole"); ?></h3>
							<div>
								<img src="images/14/blowhole.jpg"/>
								<p><?php echo _("Other sea creatures, such as whales, porpoises, manatees, and dolphins, are classified as mammals because they do not possess gills; they breathe in air to get their oxygen through a special adaptation called a blowhole."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-11">
						<div class="md-content">
							<h3><?php echo _("Fins"); ?></h3>
							<div>
								<img src="images/14/fins.jpg"/>
								<p><?php echo _("Fins are an anatomical feature of most fish that allow them to swim efficiently."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-12">
						<div class="md-content">
							<h3><?php echo _("Cold-blooded"); ?></h3>
							<div>
								<img src="images/14/cold-blooded.jpg"/>
								<p><?php echo _("Reptiles also are cold-blooded. That means their body temperature varies with the temperature around them."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-13">
						<div class="md-content">
							<h3><?php echo _("Reptiles"); ?></h3>
							<div>
								<img src="images/14/respiration.jpg"/>
								<p><?php echo _("Reptiles also lay eggs on land, their young are hatched in adult form, and they obtain their oxygen using lungs through the process of respiration, or breathing."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-14">
						<div class="md-content">
							<h3><?php echo _("Vertebrates"); ?></h3>
							<div>
								<img src="images/14/vertebrates.jpg"/>
								<p><?php echo _("Vertebrates are creatures that possess a backbone in their skeletal structure."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-15">
						<div class="md-content">
							<h3><?php echo _("Root structures"); ?></h3>
							<div>
								<img src="images/14/roots.jpg"/>
								<p><?php echo _("A root is the part of a plant that helps it get water and food from the ground. Roots have no leaves or flowers on them. Roots that are underground help hold a plant in the ground. Your teeth also have roots. They hold your teeth in your gums. Roots are usually underground, but not always. You can see in the photograph that this mangrove tree's roots are visible above ground."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-16">
						<div class="md-content">
							<h3><?php echo _("Chloroplasts"); ?></h3>
							<div>
								<img src="images/14/chloroplast.jpg"/>
								<p><?php echo _("Inside the cells of algae and green plants there are tiny structures called chloroplasts. These chloroplasts are small flat discs that produce food and provide each cell with energy. Chloroplasts trap light energy from the sun. They are able to convert this energy and water into sugar for the plant to use. Chloroplasts can be identified by their green color that is caused by the presence of a green substance called chlorophyll."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-17">
						<div class="md-content">
							<h3><?php echo _("Chlorophyll"); ?></h3>
							<div>
								<img src="images/14/chlorophyll.jpg"/>
								<p><?php echo _("Chlorophyll is something found in plants that gives plants their green color. Chlorophyll is very important to plants because it absorbs sunlight. This helps plants to survive and grow. Chlorophyll is not only found in plants. It is also found in some types of bacteria."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-18">
						<div class="md-content">
							<h3><?php echo _("Photosynthesis"); ?></h3>
							<div>
								<img src="images/14/photosynthesis.jpg"/>
								<p><?php echo _("Photosynthesis is a process that green plants use to change energy from sunlight into food that plants need to live. Green plants are special because they are one of the few types of living things that can make food by photosynthesis. People eat many different green plants. That means people are eating things made with sunshine!"); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-19">
						<div class="md-content">
							<h3><?php echo _("Carbon dioxide"); ?></h3>
							<div>
								<img src="images/14/co2.jpg"/>
								<p><?php echo _("Plants are capable of utilizing the energy of sunlight in the complex process of photosynthesis in which they take in carbon dioxide and release oxygen, an essential element for many other living things."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-20">
						<div class="md-content">
							<h3><?php echo _("Stoma"); ?></h3>
							<div>
								<img src="images/14/chlorophyll.jpg"/>
								<p><?php echo _("Stoma are openings on plant leaves that allow gases such as carbon dioxide and oxygen to travel in and out of the plant. In photosynthesis, plants take in carbon dioxide through their stoma from the atmosphere, and release oxygen back out into the atmosphere through the same stoma."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="md-modal md-effect" id="modal-21">
						<div class="md-content">
							<h3><?php echo _("Oxygen"); ?></h3>
							<div>
								<img src="images/14/oxygen.jpg"/>
								<p><?php echo _("Oxygen is something that exists as a gas in the air. Oxygen has no color, taste, or odor. Oxygen is needed by most living things and is also needed for fire to burn. Oxygen is the third most plentiful element in the universe and is an important part of the earth's atmosphere. Water also contains oxygen. Liquid oxygen is used in rocket fuel. Pilots flying at really high altitudes also use oxygen masks to be sure they have enough oxygen to breathe."); ?></p>
								<button class="md-close"><?php echo _("Close me!"); ?></button>
							</div>
						</div>
					</div>
					<div class="container">
						<!-- Top Navigation -->
						<div class="main clearfix">
							<div class="column">
								<!-- special modal that will add a perspective class to the html element -->
								<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Adaptation"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Anatomical"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Bacteria"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Cell"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("DNA"); ?></button><br>
								<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Nucleoid"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Pili"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Flagella"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Gills"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Blowhole"); ?></button><br>
								<!-- <button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Fins"); ?></button> -->
								<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Cold-blooded"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Reptiles"); ?></button>
								<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Vertebrates"); ?></button><br>
								<!--<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Root structures"); ?></button>-->
								<!--<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("Chloroplasts"); ?></button>-->
								<!--<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("Chlorophyll"); ?></button><br>-->
								<button class="md-trigger md-setperspective" data-modal="modal-18"><?php echo _("Photosynthesis"); ?></button>
								<!--<button class="md-trigger md-setperspective" data-modal="modal-19"><?php echo _("Carbon dioxide"); ?></button>-->
								<!--<button class="md-trigger md-setperspective" data-modal="modal-20"><?php echo _("Stoma"); ?></button>-->
								<button class="md-trigger md-setperspective" data-modal="modal-21"><?php echo _("Oxygen"); ?></button>
							</div>
						</div>
					</div><!-- /container -->
					<div class="clear"></div>
					<div class="md-overlay"></div><!-- the overlay element -->
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
	<div id="buttons">
		<a href="13.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<div class="clear"></div>
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
