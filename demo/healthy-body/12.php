<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'healthy-body';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title<?php echo _(">Healthy Body"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #56522c; }
.bg { background: url('images/12/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #eae0ad; border-right: 1px dashed #eae0ad; }
.bg > div { -moz-perspective: 600px; }
.column { width: 100%; text-align: center; margin: 10% auto;}
.md-content  { background: #eae0ad; }
.md-content img { height: 200px; }
.md-content p { font-size: 16px; }
.md-content h3 { background: #422a1d; color: #fff; }
button:hover { background: #56522c; }
button {
	font-family: 'PlaytimeRegular';
	outline: none;
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #422a1d;
	color: rgb(255, 255, 255);
	font-size: 15px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 33px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... a healthy body"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Tissue"); ?></h3>
						<div>
							<img src="images/12/tissue.jpg"/>
							<p><?php echo _("When many copies of the same cell type are gathered together, they are known as tissue. The body also contains many types of tissue. Some examples of cell and tissue types include muscle, nervous, bone, and skin."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Organ"); ?></h3>
						<div>
							<img src="images/12/organ.jpg"/>
							<p><?php echo _("Organs are groups of tissues combined together to perform the body's major functions. When we talk about such systems as the circulatory or digestive system, we are actually talking about groups of organs working together."); ?></p>
							<!-- <p>For angiosperms, the flower is the reproductive organ.</p> -->
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Body system"); ?></h3>
						<div>
							<img src="images/12/body.jpg"/>
							<p><?php echo _("Organs work together to make up a body system. Our skeleton supports us. Our muscles move us. Our skin and hair protect us. Our digestive system takes nutrients from our food. Our nervous system transmits information around our bodies. Our respiratory system brings in the oxygen we need to survive. Our circulatory system pumps blood. Our immune system fights disease. And our reproductive system produces the babies that keep our families going from generation to generation. All these are body systems."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Nervous system"); ?></h3>
						<div>
							<img src="images/12/nervous.jpg"/>
							<p><?php echo _("Our nervous system transmits information around our bodies. The brain and spinal cords are the two primary parts of the nervous system, working with lots of nerves."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Sensory nerves"); ?></h3>
						<div>
							<img src="images/12/sensory.jpg"/>
							<p><?php echo _("Sensory nerves help us gather information about the world around us. When we use our senses to see, hear, taste, touch, and smell; our sensory nerves have the job to take that information to the brain."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Motor nerves"); ?></h3>
						<div>
							<img src="images/12/motor.jpg"/>
							<p><?php echo _("After the brain processes information received through sensory nerves, motor nerves have the responsibility of passing on the messages the brain sends to the muscles all over the body."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main clearfix">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Tissue"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Organ"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Body system"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Nervous system"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Sensory nerves"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Motor nerves"); ?></button>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="md-overlay"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<div class="clear"></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
