<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/modalcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
html { overflow: hidden; }
.bg { background-image: url('images/12/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #C1D5D4; border-right: 1px dashed #C1D5D4;}
h3 { margin:0; padding: 0 10px; font-size:24px !important; font-family: 'PlaytimeRegular'; }
h1 { color: #01A0E1; padding-left: 15px;}
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
	outline: 0;
	font-family: 'PlaytimeRegular';
	font-size: 15px;
	letter-spacing: 1px;
	text-transform: uppercase;
	cursor: pointer;
	display: inline-block;
	margin: 1% 0;
	border-radius: 10px;
}

.md-content  { background: #A9D8D2; }
.md-content h3 { background: #01A0E1; }
.md-content img { width: 80%; -webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
.resize {height:220px;} 
.md-content p { text-align: center; }

html[dir="rtl"] h1 {padding: 21px 30px 0 0 !important;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	h1 { padding: 35px 0 0 30px !important; }
}
/*@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding: 35px 0 0 30px !important; }
	html[dir="rtl"] h1 { padding: 35px 30px 0 0 !important; }
}	*/
</style>
</head>
<body> 
	<div class="wrap" >
		<div class="bg">		
			<div>
				<h1><?php echo _("Reviewing key vocabulary... related to doing science");?></h1>
				<div class="md-modal md-effect" id="modal-1">
					<div class="md-content">
						<h3><?php echo _("Scientific method");?></h3>
						<div>
							<img src="images/12/scientific_method.jpg" class="resize"/>
							<p><?php echo _("The scientific method is a systematic way of testing physical things to form conclusions and make predictions. Using the scientific method means having a careful plan for doing an investigation or solving a problem. It usually starts with observations and a question. The scientific method also involves doing experiments to gather information that can help answer questions. When scientists want to answer questions or solve a problem, they always use the scientific method. They ask questions, make observations, conduct experiments, gather information, and explain the results.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-2">
					<div class="md-content">
						<h3><?php echo _("Observation");?></h3>
						<div>
							<img src="images/12/observation.png"/>
							<p><?php echo _("An observation is the use of your five senses to gather information about something being studied. After making observations and asking questions, it's time to think about what the answer or explanation might be. For example, suppose you were heating water to make some hot chocolate and as you watched, the water began to bubble and boil. Then you thought, \"I wonder how I could heat water for hot chocolate faster?\" You've made an observation and posed a question.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-3">
					<div class="md-content">
						<h3><?php echo _("Hypothesis");?></h3>
						<div>
							<img src="images/12/hypothesis.jpg"/>
							<p><?php echo _("The hypothesis is your proposed explanation of how you think the phenomenon in question (what you have observed) works. Once you have a question, a hypothesis and prediction, you are ready to do some science and the fun begins. Scientists check their hypothesis through studies that involve systematic observations and data collection.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-4">
					<div class="md-content">
						<h3><?php echo _("Prediction");?></h3>
						<div>
							<img src="images/12/prediction.jpg"/>
							<p><?php echo _("A prediction is an educated guess about what may happen if certain events occur or if you do certain things. Once you have a question, a hypothesis and a prediction, you are ready to do some science and the fun begins. An experiment is what is done to test predictions. Scientists who study weather make predictions about what they think the weather will be like. For example, they know that the sun heats Earth. So if they think it is going to be a sunny day, they can predict that it will probably be warm outside.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>

				<div class="md-modal md-effect" id="modal-6">
					<div class="md-content">
						<h3><?php echo _("Experiment");?></h3>
						<div>
							<img src="images/12/experiment.jpg"/>
							<p><?php echo _("An experiment is an activity designed to answer questions about things that are unknown. From an experiment, you might learn how something works or how things are related to each other. For example, you may do an experiment to see how different amounts of water help or hurt the growth of a plant. Experiments are a very important part of science. Scientists use experiments to test their ideas, solve problems, answer questions, and learn new things. In science, it is important to provide accurate information when you do an experiment.");?>			
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-7">
					<div class="md-content">
						<h3><?php echo _("Data");?></h3>
						<div>
							<img src="images/12/data.jpg"/>
							<p><?php echo _("Data are bits of factual information that can be used to draw conclusions or make decisions. Factual information means that the information is true or based on something that really happened. The way that people gather data is by observing something and writing down exactly what they see. There are many different jobs in which people collect data. Scientists collect data about the world around us. Teachers collect data about the grades their students earn. Even policemen collect data about the criminals they catch.");?>
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<!-- <div class="md-modal md-effect" id="modal-8">
					<div class="md-content">
						<h3>Data analysis</h3>
						<div>
							<img src="images/12/data_analysis.jpg"/>
							<p>
							
							</p>
							<button class="md-close">Close me!</button>
						</div>
					</div>
				</div> -->
				<div class="md-modal md-effect" id="modal-9">
					<div class="md-content">
						<h3><?php echo _("Claim");?></h3>
						<div>
							<img src="images/12/claim.jpg"/>
							<p><?php echo _("A scientific claim is a conclusion drawn after repeated physical observations and testing using the scientific method. After evidence has been collected supporting the claim, and it has been fairly verified through repeated observations, properly interpreted according to the realm and boundaries of science, the claim may be thought of as firmly established. This does not mean, however, that the claim may never be modified or overturned, which may happen as a result of additional testing or evidence.");?>		
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-10">
					<div class="md-content">
						<h3><?php echo _("Systematic");?></h3>
						<div>
							<img src="images/12/systematic.jpg"/>
							<p><?php echo _("Being systematic is making careful plans and following them than about following directions. Being scientific is more about being systematic. Scientists check their hypothesis through studies that involve systematic observations and data collection. For safety, a pilot does a systematic check of his airplane before taking off.");?> 				
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				<div class="md-modal md-effect" id="modal-11">
					<div class="md-content">
						<h3><?php echo _("Fair test");?></h3>
						<div>
							<img src="images/12/fair_test.jpg"/>
							<p><?php echo _("A fair test is one that is done properly, without bias, skewing of procedures or altering of results. The important thing in doing science is to be systematic. That means making and following plans for observing, gathering data from fair tests and drawing conclusions.");?>	
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-12">
					<div class="md-content">
						<h3><?php echo _("Evidence");?></h3>
						<div>
							<img src="images/12/evidence.jpg"/>
							<p><?php echo _("Evidence is support for a claim that can be verified using the scientific method of testing using the five senses. Evidence is collected, interpreted, and then used to support or deny a claim.");?>	
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-13">
					<div class="md-content">
						<h3><?php echo _("Investigate");?></h3>
						<div>
							<img src="images/12/investigate.jpg"/>
							<p><?php echo _("To physically investigate a matter, we use our five physical senses to observe, perform tests using the scientific method, and make conclusions. The process of investigation is expected to be thorough, detailed, and fair.");?>	
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="md-modal md-effect" id="modal-14">
					<div class="md-content">
						<h3><?php echo _("Scientific Practices");?></h3>
						<div>
							<img src="images/12/practices.jpg"/>
							<p><?php echo _("The process of hypothesis formation and testing that allows us to build our understanding of the universe around us.  A testable hypothesis is formed, experiments are carried out and the results recorded and interpreted.  If the results do not support the hypothesis, the hypothesis is revised and tested again.  Once the results do support the hypothesis, it can be called a \"theory\" until a time when other test results refute its claims.");?>	
							</p>
							<button class="md-close"><?php echo _("Close me!");?></button>
						</div>
					</div>
				</div>
				
				<div class="container">
					<!-- Top Navigation -->
					<div class="main clearfix">
						<div class="column">
							<!-- special modal that will add a perspective class to the html element -->
							<button class="md-trigger md-setperspective" data-modal="modal-1"><?php echo _("Scientific method");?> </button>
							<button class="md-trigger md-setperspective" data-modal="modal-2"><?php echo _("Observation");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-3"><?php echo _("Hypothesis");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-4"><?php echo _("Prediction");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-6"><?php echo _("Experiment");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-7"><?php echo _("Data");?></button>
							<!-- <button class="md-trigger md-setperspective" data-modal="modal-8">Data analysis</button> -->
							<button class="md-trigger md-setperspective" data-modal="modal-9"><?php echo _("Claim");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-10"><?php echo _("Systematic");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-11"><?php echo _("Fair test");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-12"><?php echo _("Evidence");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-13"><?php echo _("Investigate");?></button>
							<button class="md-trigger md-setperspective" data-modal="modal-14"><?php echo _("Scientific Practices");?> </button>
							
						</div>
					</div>
				</div><!-- /container -->			
				<div class="clear"></div>
				<div class="md-overlay"></div><!-- the overlay element -->
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="11.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>


	<script src="scripts/classie.js"></script>
	<script src="scripts/modalEffects.js"></script>
	<script>
		// this is important for IEs
		var polyfilter_scriptpath = '/scripts/';
	</script>
	<script src="scripts/cssParser.js"></script>
	<script src="scripts/css-filters-polyfill.js"></script>
<section id="preloader"><section class="selected"><strong><?php echo _("Words and explanations");?></strong></section></section>
<?php require("setlocale.php"); ?>
</body>
</html>
