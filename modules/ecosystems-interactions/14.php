<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(14, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title> <!-- Change module title here -->
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
h1 { color: #688A10; font-size: 32px; height:60px }
.bg { background: url('images/14/bg.jpg') no-repeat; background-size: 100% 100%; width: 100% !important; height:100%; position: relative; }
.bg > div { -moz-perspective: 600px; }
.wrap { border-left: 1px dashed #7de2fc; border-right: 1px dashed #7de2fc; }
.column { width: 50%; text-align: center; margin: 10% auto;}
.md-content  { background: #97e9fe; }
.md-content img { height: 200px; }
.md-content p { font-size: 16px; }
.md-content h3 { background: #6a9317; color: #fff; }
button:hover { background: #86aa1e; }
button {
	font-family: 'PlaytimeRegular';
	border: none;

	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #6a9317;
	color: rgb(255, 255, 255);
	font-size: 16px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
	outline: none;
}
<?php if($language == "es_ES") { ?>
	h1 { font-size: 26px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div>
				<h1><?php echo _("Reviewing key vocabulary related to... ecosystems interactions"); ?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Ecosystem"); ?></h3>
						<div>
							<img src="images/14/ecosystem.jpg"/>
							<p><?php echo _("An ecosystem is all the living and non-living things in a given place. An ecosystem can be as large as a forest or as small as a rotting log. There are both land and water ecosystems."); ?></p>
							<p><?php echo _("Ponds, rivers, lakes, and oceans are all examples of water ecosystems. A pond ecosystem contains not only water, but living organisms such as fish, plants, insects, frogs, and turtles. Common land ecosystems include forests, deserts, and grassy meadows."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Adapt"); ?></h3>
						<div>
							<img src="images/14/adapt.jpg"/>
							<p><?php echo _("To say that something has adapted means that it fits in with its surroundings. Some living things change slowly over time in order to adapt to their surroundings. Adapting helps living things to stay alive. If living things didn't have the ability to adapt, they would disappear forever."); ?></p>
							<p><?php echo _("A thick coat of fur is an example of how some animals, such as polar bears, have become adapted to the cold. A polar bear's white color is another way in which polar bears are adapted to their surroundings. The color of a polar bear allows it to blend in with the snow. This makes it easy for them to sneak up on the animals that they hunt for food."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Healthy ecosystem"); ?></h3>
						<div>
							<img src="images/14/health-ecosystem.jpg"/>
							<p><?php echo _("A healthy ecosystem is an ecosystem in which many species are able to meet their needs for life over a long period of time."); ?></p>
							<p><?php echo _("A 400-year old deciduous forest that has remained relatively stable is an example of a healthy ecosystem."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Predator"); ?></h3>
						<div>
							<img src="images/14/predator.jpg"/>
							<p><?php echo _("Animals that hunt, attack, and eat other animals are called predators. Predators include lions, tigers, and sharks. Dogs and cats are also predators, but people give them food so they don't have to hunt. Predators that live in the wild have to be good hunters, or they will not have food to eat."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Prey"); ?></h3>
						<div>
							<img src="images/14/prey.jpg"/>
							<p><?php echo _("Animals that are hunted and eaten by other animals are called prey. Prey animals often have special markings that help them blend in with their surroundings so that they are more difficult to find. Animals that are weak or sick make easier prey for the animals that hunt them."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Invasive species"); ?></h3>
						<div>
							<img src="images/14/invasive-species.jpg"/>
							<p><?php echo _("Invasive species are plants or animals living in wild spaces outside their native ranges."); ?></p>
							<p><?php echo _("Invasive species create problems for native species either by preying upon the natives for food, or by out-competing them for food and other resources."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Ecosystem"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Adapt"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Healthy ecosystem"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Predator"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Prey"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Invasive species"); ?></button>
						</div>
					</div>
				</div><!-- /container -->
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="13.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<div class="clear"></div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
