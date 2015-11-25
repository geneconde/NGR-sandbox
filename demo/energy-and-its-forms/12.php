<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/modalcomponent.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		.wrap { border-left: 1px dashed #848894; border-right: 1px dashed #848894; }
		.bg { background-image: url(images/12/bg.jpg); }
		.bg > div.md-overlay { width: 100%; -moz-perspective: 600px; }

		h1 { color: #feda44; font-size: 34px; }
		
		.bold { font-weight: bold; }
		.column { width: 95%; text-align: center; margin: 5% auto;}

		button:hover { background: #dc5c3c; }

		button { border: none; outline: 0; border-image-source: initial; border-image-slice: initial;
			border-image-width: initial; border-image-outset: initial; border-image-repeat: initial;
			padding: 1em 2em; background: #c9411f; color: rgb(255, 255, 255); font-family: 'PlaytimeRegular'; font-size: 17px; text-transform: uppercase; cursor: pointer; display: inline-block; margin: 1% 0; border-radius: 10px; }				

		.md-content { background: #a0a5b3; }
		.md-content p { font-size: 15px; line-height: 18px; }
		.md-content h3 { background: #c9411f; color: #fff; }
		.bg > div {width: 100%;margin: 0px auto; perspective:600px;}
		div.title{width:95%;}

		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 28px !important; }
		<?php endif; ?>
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1 { padding-top: 40px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
				<div class="title">
					<h1><?php echo _("Reviewing key vocabulary... related to energy and its forms"); ?></h1>
				</div>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Energy"); ?></h3>
						<div>
							<img src="images/12/energy.jpg">
							<p><?php echo _("Energy is the ability to do work. Energy is required to make anything stop or move. There are many different forms of energy. Two forms of energy are heat and light. All living things depend on energy."); ?></p>
							<p><?php echo _("People get their energy from the food they eat. Most plants get their energy from the sun. Cars get their energy from the fuel they burn or the electricity they keep in their batteries. Some energy that is used to run big machines comes from nuclear power plants such as the one shown above."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Work"); ?></h3>
						<div>
							<img src="images/12/work.jpg">
							<p><?php echo _("When most people talk about work, they mean something that they do to make money or to get a good grade. But scientists have a different definition of work."); ?></p>
							<p><?php echo _("In science, work means to use force over a distance. The greater the force or the further the distance, the more work is being done. So, taking out the trash or mowing the lawn is a lot of work. But writing a report does not take very much work. That's because it does not take much force to push a pen or to press keys on a computer."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Kinetic Energy"); ?></h3>
						<div>
							<img src="images/12/kinetic.jpg">
							<p><?php echo _("Kinetic energy is the energy of a moving object. An object's kinetic energy depends on its mass and how fast it is moving."); ?></p>
							<p><?php echo _("If two objects are moving at the same speed, but one object has twice the amount of mass as the other, the object with more mass will have more kinetic energy. And if two objects have the same mass, but one is moving faster than the other one, the one that is moving faster will have more kinetic energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Potential Energy"); ?></h3>
						<div>
							<img src="images/12/potential.jpg">
							<p><?php echo _("Potential energy is energy that is stored by an object based on its position. For example, if you have a bow and arrow and you pull the string on the bow, you are creating potential energy. The further back you pull the bowstring, the more potential energy is being stored. When you let go of the bowstring, this energy is released. Even a book sitting on a shelf has potential energy because gravity is pulling down on it."); ?></p>
							<p><?php echo _("Look around your house and you will see many things with potential energy. A slinky has potential energy before it is released down the stairs. A yo-yo has potential energy before it is dropped. The greater the force it takes to keep an object in a place or position, the greater its potential energy will be."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-5">
					<div class="md-content">
						<h3><?php echo _("Law Of Conservation Of Energy"); ?></h3>
						<div>
							<img src="images/12/lawofconservationofenergy.jpg">
							<p><?php echo _("The law of conservation of energy states that the total amount of energy in an isolated system remains constant, or the same over time, regardless of how many changes in form the energy undergoes. For example, potential energy can be converted into kinetic energy and still remain constant."); ?></p>
							<p><?php echo _("Another way of looking at the law of conservation of energy is that energy is not created or destroyed but only transferred into a different form."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Mechanical Energy"); ?></h3>
						<div>
							<img src="images/12/mechanical.jpg">
							<p><?php echo _("Mechanical energy is the energy resulting from the position and motion of an object; it is the sum of potential and kinetic energy."); ?></p>
							<p><?php echo _("Mechanical energy is needed to push or pull objects. Hammering a nail, lifting a book, throwing a ball, and riding a bicycle or skateboard all involve mechanical energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Thermal (Heat) Energy"); ?></h3>
						<div>
							<img src="images/12/thermal.jpg">
							<p><?php echo _("Thermal energy is the energy of all the movement (kinetic energy) in the atoms and molecules that make up matter. It is the same as heat."); ?></p>
							<p><?php echo _("To heat something up is to increase its thermal energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3><?php echo _("Electrical Energy"); ?></h3>
						<div>
							<img src="images/12/electrical.jpg">
							<p><?php echo _("Electrical energy also involves things moving, but this time its electrons moving from place to place, not atoms and molecules."); ?></p>
							<p><?php echo _("Electrical energy is needed to make our radios, televisions, cell phones and computers work."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Chemical Energy"); ?></h3>
						<div>
							<img src="images/12/chemical.jpg">
							<p><?php echo _("Chemical energy is the energy change when substance(s) undergoes a chemical reaction and turn into different chemical substance(s). The heat and light from a campfire come from the chemical energy of the wood. The energy releases when the molecules that make up the wood break apart and recombine with molecules of other substance(s) as it burns."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Radiant (Light) Energy"); ?></h3>
						<div>
							<img src="images/12/radiant.jpg">
							<p><?php echo _("Radiant energy, also called light energy, is a type of wave energy that includes visible colors of the rainbow and other wave energies such as X-rays and radio waves that we can't see. The Sun is our main source of radiant energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Solar Energy"); ?></h3>
						<div>
							<img src="images/12/solar.jpg">
							<p><?php echo _("Solar energy is the term used to describe the radiant energy that comes from the Sun."); ?></p>
							<p><?php echo _("Solar energy may be collected using solar panels."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Sound Energy"); ?></h3>
						<div>
							<img src="images/12/sound.jpg">
							<p><?php echo _("Sound energy is the energy of vibrating matter, usually air. The vibrating matter carries energy from one molecule to the next."); ?></p>
							<p><?php echo _("Sound energy results when a guitar player plucks a guitar string."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Nuclear Energy"); ?></h3>
						<div>
							<img src="images/12/nuclear.jpg">
							<p><?php echo _("Nuclear energy is yet another form of energy. It involves splitting apart or atoms combining together to become a new element. Nuclear energy, like other energies, is used to make electricity to heat and light our homes and businesses"); ?></p>
							<p><?php echo _("Nuclear energy is most often used to make electricity. About 20% of the electricity used in the United States is produced from nuclear energy. Nuclear energy is also the source of energy for nuclear weapons. Because nuclear energy is so powerful, these weapons are capable of great destruction."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Renewable Energy"); ?></h3>
						<div>
							<img src="images/12/renewable.jpg">
							<p><?php echo _("Renewable energy is a source of energy that will not run out."); ?></p>
							<p><?php echo _("Solar energy is a renewable energy, as is geothermal energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-15">
					<div class="md-content">
						<h3><?php echo _("Nonrenewable Energy"); ?></h3>
						<div>
							<img src="images/12/nonrenewable.jpg">
							<p><?php echo _("Nonrenewable energy is a source of energy that will run out before being replenished. Thus, the supply of nonrenewable energy is limited."); ?></p>
							<p><?php echo _("Coal is an example of a nonrenewable energy."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-16">
					<div class="md-content">
						<h3><?php echo _("Pollute (Pollution)"); ?></h3>
						<div>
							<img src="images/12/pollution.jpg">
							<p><?php echo _("Pollution refers to anything that people dump into water, onto the land, or into the air that can harm or poison the water, land, or air."); ?></p>
							<p><?php echo _("Things that are found in nature are not pollution because nature can recycle its own materials."); ?></p>
							<button class="md-close"><?php echo _("Close me!"); ?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<div class="main clearfix">
						<div class="column">
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Work"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Kinetic Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Potential Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-5"><?php echo _("Law Of Conservation Of Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Mechanical Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Thermal (Heat) Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-8"><?php echo _("Electrical Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Chemical Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Radiant (Light) Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Solar Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Sound Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Nuclear Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Renewable Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-15"><?php echo _("Nonrenewable Energy"); ?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-16"><?php echo _("Pollute (Pollution)"); ?></button>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="md-overlay"></div>
		</div>
	</div>

	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
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
