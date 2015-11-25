<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $uf->updateStudentLastscreen(12, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behavior'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #1F7FB1; margin: 0 3%; }
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/12/bg.jpg); }
.column { width: 95%; text-align: center; margin: 10% auto; }
.md-content { background: #eee; }
.md-content p { font-size: 16px; }
.md-content > div p { color:#000; }
.md-content img { height: 200px; }
.md-content h3 { background: #aee8fa; color: #000; }
.md-content > div { background: #5fbff1; }
button:hover { background: #fffc9b; }
button {
	font-family: 'PlaytimeRegular';
	border: none;
	border-image-source: initial;
	border-image-slice: initial;
	border-image-width: initial;
	border-image-outset: initial;
	border-image-repeat: initial;
	padding: 1em 2em;
	background: #aee8fa;
	color: #000;
	font-size: 16px;
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
	h1 { font-size: 32px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<!-- <div> -->
				<h1><?php echo _("Reviewing key vocabulary related to... behaviors"); ?></h1>

				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Behavior"); ?></h3>
						<div>
							<img src="images/12/behavior.jpg"/>
							<p><?php echo _("The way that an animal responds to its environment is called behavior. An animal's behavior or action, often changes in response to changes in its environment."); ?></p>
							<p><?php echo _("Behavior is not limited to just one individual. Animals can change their behavior as a group, too. For example, a flock of birds may not fly south for the winter as early as they normally would if an area is experiencing unusually warm temperatures. Or, a group of deer that normally travels on one path to find food may change their behavior and find another route if the path is flooded or blocked."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Stimulus"); ?></h3>
						<div>
							<img src="images/12/stimulus.jpg"/>
							<p><?php echo _("A stimulus is something that produces a reaction or a change. Light is a stimulus that can cause the size of the pupil in your eye to change."); ?></p>
							<p><?php echo _("Sometimes a reward is used as a stimulus to cause a desired action or response. For example, your school may reward students for the number of books read during the school year. This reward can act as a stimulus to get the students to read more books."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Response"); ?></h3>
						<div>
							<img src="images/12/response.jpg"/>
							<p><?php echo _("A response is generated in the brain after it receives a tiny electrical signal from the neurons. Response works like stimulus, only in reverse."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Innate behavior"); ?></h3>
						<div>
							<img src="images/12/innate.jpg"/>
							<p><?php echo _("Innate behaviors are behaviors present at birth. Innate behaviors include reflexes and instincts. An example of an innate behavior is stretching."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Instinct"); ?></h3>
						<div>
							<img src="images/12/instinct.jpg"/>
							<p><?php echo _("An instinct is a behavior that a creature is born with and is thus unlearned. It helps the creature to survive. The communication of wolves through howling is an example of an instinct."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Inherited behavior"); ?></h3>
						<div>
							<img src="images/12/inherited.jpg"/>
							<p><?php echo _("Inherited behaviors are behaviors which are physically passed on from generation to generation through the DNA. Not all behavior is inherited behavior, although some are. An example of inherited behavior is a lion's behavior of roaring."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Learned behavior"); ?></h3>
						<div>
							<img src="images/12/learned.jpg"/>
							<p><?php echo _("Unlike inherited behavior which is passed on through the DNA in reproduction, learned behaviors are behaviors which are developed through experience - by living and interacting with other organisms and with the environment. Examples of learned behaviors in humans include reading, sharing, helping others, playing music, and riding a bicycle."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Reflex"); ?></h3>
						<div>
							<img src="images/12/reflex.jpg"/>
							<p><?php echo _("A reflex is a genetically-inherited behavior that is involuntarily triggered by a stimulus. Reflexes are not learned. They are present from birth. For example, babies possess the grasp reflex, by which they hold onto objects."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Genetically-inherited"); ?></h3>
						<div>
							<img src="images/12/genetically.jpg"/>
							<p><?php echo _("Something that is genetically-inherited is passed on through reproduction, through the DNA. Innate behaviors such as reflexes and instincts are genetically-inherited by offspring from their parents. Physical characteristics are also genetically-inherited, such as the horns of the rhinoceros."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="main">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Behavior"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Stimulus"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Response"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Innate behavior"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Instinct"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Inherited behavior"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Learned behavior"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Reflex"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Genetically-inherited"); ?></button>
						</div>
					</div>
				</div>

				<div class="md-overlay"></div>
			<!-- </div> -->
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="11.php" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons" title="<?php echo _("Next"); ?>">
		<a href="13.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations"); ?></strong></section></section>

	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = '/scripts/';</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
