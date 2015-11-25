<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/modalcomponent.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		html { overflow: hidden; }
		img.next { display: block; }
		.bg { background: url(images/14/bg.jpg); background-size: 100% 100% !important}
		.bg > div { width: 95%; -moz-perspective: 600px; }

		h1 { text-align: left; font-size: 34px; }
		
		.bold { font-weight: bold; }
		.column { width: 95%; text-align: center; margin: 10% auto;}

		button:hover { background: #2ab8d8; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 1em;
			outline: 0;
			background: #12a5c6;
			color: rgb(255, 255, 255);
			font-family: 'PlaytimeRegular';
			font-size: 17px;
			text-transform: uppercase;
			cursor: pointer;
			display: inline-block;
			margin: 1% 0;
			border-radius: 10px;
		}				

		.md-content { background: #e7f6f9; }
		.md-content p { font-size: 16px; text-align: left; }
		.md-content h3 { background: #12a5c6; color: #fff; }
	
		html[dir="rtl"] h1, html[dir="rtl"] p, html[dir="rtl"] .md-content p { text-align: right; }
		<?php if($language == "es_ES") { ?>
			h1 { font-size:25px; }
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary... related to how animals respond"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Central nervous system"); ?></h3>
						<div>
							<img src="images/14/cns.jpg">
							<p><?php echo _("The central nervous system is the brain and spinal cord. The central nervous system is responsible for interpreting and responding to stimuli."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Chemical stimulus"); ?></h3>
						<div>
							<img src="images/14/cs.jpg"/>
							<p><?php echo _("Chemical stimuli are molecules in our environment that make us sense taste or smell."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Cone"); ?></h3>
						<div>
							<img src="images/14/cone.jpg"/>
							<p><?php echo _("There are three types of cells in the eye called cones. Each cone is sensitive to one of three colors: blue, red, and green."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Electromagnetic stimulus"); ?></h3>
						<div>
							<img src="images/14/ems.jpg"/>
							<p><?php echo _("Beside mechanical and chemical stimuli, the third type of stimuli our nervous system is sensitive to is electromagnetic stimulus, which includes visible light."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Mechanical Stimulus"); ?></h3>
						<div>
							<img src="images/14/ms.jpg"/>
							<p><?php echo _("Mechanical stimuli include anything that causes a sensation of touch, pain, sound, or temperature."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
					<h3><?php echo _("Memory"); ?></h3>
						<div>
							<img src="images/14/cd.jpg"/>
							<p><?php echo _("A useful way to think of a memory is to think of a pattern. The words printed on a page are a pattern that we recognize as information. A video image is actually a pattern of tiny dots on a screen that we recognize as a picture. A compact disc (CD) or digital video disc (DVD) stores information as a series of tiny pits that cause light to reflect in a pattern computers can recognize. In our brains, memories are patterns of connections between neurons."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Motor neurons"); ?></h3>
						<div>
							<img src="images/14/mn.jpg"/>
							<p><?php echo _("The neurons that take information from the brain and stimulate responses throughout the body are called motor neurons."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Neurons"); ?></h3>
						<div>
							<img src="images/14/neuron.jpg"/>
							<p><?php echo _("Neurons are nerve cells. Neurons respond to a stimulus, send a tiny electrical signal to the brain, and the signal is interpreted by the brain as a response is generated."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Receptor"); ?></h3>
						<div>
							<img src="images/14/receptor.jpg"/>
							<p><?php echo _("Sensory receptors are located all over our bodies. Different sense receptors are specialized for particular kinds of information, which may be then processed and integrated by the brain, with some information stored as memories. Each sense receptor responds to different inputs (electromagnetic, mechanical, chemical), transmitting them as signals that travel along nerve cells to the brain."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Retina"); ?></h3>
						<div>
							<img src="images/14/retina.jpg"/>
							<p><?php echo _("Located in the retina (inner surface at the rear of the eye), they respond to different types of light."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Rods"); ?></h3>
						<div>
							<img src="images/14/rod.jpg"/>
							<p><?php echo _("Rods are neurons that sense brightness."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Sensory neurons"); ?></h3>
						<div>
							<img src="images/14/sn.jpg"/>
							<p><?php echo _("Those cells that interact with the environment to sense taste, touch, smell, vision, and sound are called sensory neurons."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Stimulus"); ?></h3>
						<div>
							<img src="images/14/stimulus.jpg"/>
							<p><?php echo _("A stimulus is something that produces a reaction or a change. Light is a stimulus that can cause the size of the pupil in your eye to change. Sometimes rewards are used as a stimulus to cause a desired action or response. For example, your school may reward students for the numbers of books read during the school year. This reward can act as a stimulus to get students to read more books."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Synapse"); ?></h3>
						<div>
							<img src="images/14/synapse.jpg"/>
							<p><?php echo _("One nerve cell sends a message to another by releasing chemicals into the space between.  This space is called the synapse."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Response"); ?></h3>
						<div>
							<img src="images/14/response.jpg"/>
							<p><?php echo _("A response is generated in the brain after it receives a tiny electrical signal from the neurons. The response works like the stimulus, only in reverse."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3><?php echo _("Peripheral nervous system"); ?></h3>
						<div>
							<img src="images/14/pns2.jpg"/>
							<p><?php echo _("The peripheral nervous system is all of the many nerve cells throughout the body that connect to the spinal cord. The peripheral nervous system is responsible for sensing our environment and stimulating muscles to act when called upon."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-17">
					<div class="md-content">
						<h3><?php echo _("Visible light"); ?></h3>
						<div>
							<img src="images/14/spectrum.jpg"/>
							<p><?php echo _("Our eyes are able to perceive part of the electromagnetic spectrum, that portion we call visible light."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main clearfix">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Central nervous system"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Chemical stimulus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Cone"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Electromagnetic stimulus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Mechanical Stimulus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Memory"); ?></button><br>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Motor neurons"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Neurons"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Receptor"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Retina"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Rods"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Sensory neurons"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Stimulus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Synapse"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Response"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("Peripheral nervous system"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-17"><?php echo _("Visible light"); ?></button>
						</div>
					</div>
				</div>

				<div class="clear"></div>
				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="13.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
</body>
</html>

