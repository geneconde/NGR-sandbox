<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<style>
.bg { background-image: url('images/12/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #3993AA; margin-left: 20px; }
h3 { margin:0; padding: 0 10px; }

.md-content  { background: #96CAC6; }
.md-content h3 { background: #C4E1DD; }
.column { width: 80%; text-align: center; margin: 10% auto;}
button:hover { background: rgb(19, 49, 145); }
p { font-size: 16px; }

button {
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	outline: none;
	padding: 1em 2em;
	background: rgb(47, 101, 197);
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

html[dir="rtl"] h1 { margin: 0 20px 0 0; }

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 30px; }
<?php endif; ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("Reviewing key vocabulary related to... natural hazards"); ?></h1>
			<div>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Natural hazard"); ?></h3>
						<div>
							<img src="images/12/natural-hazard.jpg"/>
							<p><?php echo _("Natural hazards are dangers that come from nature; threatening life, health, property, and the environment. There are many different kinds of natural hazards. Some natural hazards are related to the weather, like lightning, hurricanes, and tornadoes.  Some are related to just geology; like earthquakes and volcanoes. Many natural hazards and disasters are the result of combinations of weather and landscapes in certain areas."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Landscape"); ?></h3>
						<div>
							<img src="images/12/landscape.jpg"/>
							<p><?php echo _("A landscape is the shape and features of the land."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Geologist"); ?></h3>
						<div>
							<img src="images/12/geologist.jpg"/>
							<p><?php echo _("Geologists are scientists that study the science of the solid parts of the earth made out of rocks and soil but also study the water in rivers and lakes too. Climatologists and meteorologists are scientists that study the atmosphere to understand climate and weather."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Meteorologist"); ?></h3>
						<div>
							<img src="images/12/meteorologist.jpg"/>
							<p><?php echo _("Climatologists and meteorologists are scientists that study the atmosphere to understand climate and weather."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Climatologist"); ?></h3>
						<div>
							<img src="images/12/climatologist.jpg"/>
							<p><?php echo _("Climatologists and meteorologists are scientists that study the atmosphere to understand climate and weather."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Forecasting"); ?></h3>
						<div>
							<img src="images/12/forecast.jpg"/>
							<p><?php echo _("Forecasting is, in meteorology, predicting the weather using scientific instruments."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Volcano"); ?></h3>
						<div>
							<img src="images/12/volcano.jpg"/>
							<p><?php echo _("A volcano is a place on the surface of Earth where hot, liquid rock comes up from deep inside Earth. Some volcanoes have hot, liquid rock flowing out of them all the time. Other volcanoes are quiet for many years, but they are still volcanoes. Not all volcanoes look the same. Some volcanoes look like mountains. Others are flat or look like shallow holes."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Drought"); ?></h3>
						<div>
							<img src="images/12/drought.jpg"/>
							<p><?php echo _("A drought is a lack of rainfall that lasts a long time. A drought is really bad for farmers. People must use less water when there is a drought. They are supposed to use it only for drinking, cooking, and cleaning. They are not supposed to water their lawns or wash their cars during a drought. Some places, such as deserts, are always in a drought because they never get much rain."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Evacuate"); ?></h3>
						<div>
							<img src="images/12/evac.jpg"/>
							<p><?php echo _("In the case of a natural disaster, you may be warned to evacuate your home – which means to leave it - because of any of the natural hazards: pay attention and act quickly."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Natural disaster"); ?></h3>
						<div>
							<img src="images/12/natural-disaster.jpg"/>
							<p><?php echo _("Natural disasters are drastic weather phenomena that can potentially cause lots of damages and hurt or kill lots of people. Examples of natural disasters are hurricanes, tornadoes, avalanches, earthquakes, volcanoes, and tsunamis."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Hurricane"); ?></h3>
						<div>
							<img src="images/12/hurricane.jpg"/>
							<p><?php echo _("A hurricane is a very large storm with constant winds of more than 74 miles per hour. Hurricanes usually also come with heavy rain. A hurricane spins as it moves. The center of a hurricane is called its eye. Some hurricanes can easily pull trees out of the ground and tear roofs off houses."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Tornado"); ?></h3>
						<div>
							<img src="images/12/tornado.jpg"/>
							<p><?php echo _("A tornado is a very dangerous funnel of air from the ground to the sky. Tornadoes  are capable of causing much destruction and death."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Earthquake"); ?></h3>
						<div>
							<img src="images/12/earthquake.jpg"/>
							<p><?php echo _("An earthquake is a natural disaster in which a sudden movement within the Earth’s crust generates seismic waves. The seismic waves of earthquakes are capable of causing devastation to land and to life."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Tsunami"); ?></h3>
						<div>
							<img src="images/12/tsunami.jpg"/>
							<p><?php echo _("A tsunami is a huge wave. When an earthquake occurs or volcano erupts under water, it can trigger a tsunami. These massive waves travel very fast. When they hit land, they slow down but increase in height. The waves hit and flood everything, destroying homes and other buildings."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Avalanche"); ?></h3>
						<div>
							<img src="images/12/avalanche.jpg"/>
							<p><?php echo _("An avalanche is a mass movement of snow, in which it quickly travels down a hill or mountain. Avalanches can be extremely dangerous, as their force and sheer size can be capable of burying everything in its path."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3><?php echo _("Lightning"); ?></h3>
						<div>
							<img src="images/12/lightning.jpg"/>
							<p><?php echo _("A build up of static electricity in a cloud that is suddenly discharged. This discharge can be from the cloud to itself, to another cloud, or to the ground. Lightning is always accompanied by the sound of thunder, always observed after the flash due to sound traveling more slowly than light."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-17">
					<div class="md-content">
						<h3><?php echo _("Wildfire"); ?></h3>
						<div>
							<img src="images/12/wildfire.jpg"/>
							<p><?php echo _("A fire burning vegetation in some sort of wilderness area. It is usually characterized by the fire being very large and spreading very quickly. Wildfires are unusual in their ability to jump across barriers such as roads, rivers, and fire breaks."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Natural hazard"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Landscape"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Geologist"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Meteorologist"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Climatologist"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Forecasting"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Volcano"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Drought"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Evacuate"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Natural disaster"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Hurricane"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Tornado"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Earthquake"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Tsunami"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Avalanche"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("Lightning"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("Wildfire"); ?></button>
						</div>
					</div>
				</div><!-- /container -->
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<div class="clear"></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/global.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
