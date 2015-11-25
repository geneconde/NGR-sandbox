<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/captionHoverEffects.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #1A6B0D; }
.bg { background-image: url('images/8/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #5f9900; border-right: 1px dashed #5f9900; }
p { padding-top: 1%; }
img { border-radius: 0 !important; }
img.next-toggle, img.back-toggle-screen { display:none; }
.grid { width: 850px; height: auto; margin-top: 20px !important; padding: 0; }
.grid li { float: left; width: 283px; padding: 10px; }
.grid figcaption { padding: 10px; background-color: #FFEBB5; height: auto; color: black; }
.grid figcaption span { font-size: 20px; }
#sickled-cells { color: #aa322c; position: absolute; right: 250px; }
#blood-cells { color: #aa322c; position: absolute; bottom: 150px; right: 50px; }
#screen2 { display: none; }
#screen2 .col1 { width: 55%; margin-top: 1%; }

<?php if($language == "es_ES") { ?>
		#sickled-cells { right: 202px; }
<?php } ?>

<?php if($language == "zh_CN") { ?>
		#sickled-cells { right: 202px; }
<?php } ?>
#screen2 .col1 {float:left;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("More big ideas... about changing to survive"); ?></h1>
				<p><?php echo _("We mentioned <span class='key'>mutations</span> are small changes that occur in the DNA carrying the information that makes living things what they are. Mutations are rare, but over time they have an effect. An inherited mutation can go three ways: it can either have no effect on a living thing, or have a harmful effect on it, or in the best case, it can give it a competitive advantage. Through natural selection a living thing will either go on to reproduce and pass on its mutation to the next generation, or die and the mutation disappears."); ?></p>
				<p><?php echo _("Let's look at three mutations: neutral, helpful, and harmful. Hover your mouse over each image to view more information."); ?></p>
				<ul class="grid cs-style-1">
					<li>
						<figure>
							<img src="images/8/1.jpg" alt="img01">
							<figcaption>
								<span><?php echo _("The mutated gene in Siamese cats causes the kittens to be white when born, and to develop patches of color on their face, paws, and tail later on."); ?></span>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/8/2.jpg" alt="img01">
							<figcaption>
								<span><?php echo _("The mutated gene in tigers causes them to have stripes. A long time ago, the tigers with this gene were able to blend in with the habitat and be more successful at hunting for food. This mutated gene was passed on to their offspring."); ?></span>
							</figcaption>
						</figure>
					</li>
					<li>
						<figure>
							<img src="images/8/3.jpg" alt="img01">
							<figcaption>
								<span><?php echo _("The mutated gene in Manx cats causes many kittens to die within their first year if the gene is inherited from both parents. If they get the gene from only one parent, then the kittens survive, but many have stumpy tails or no tails."); ?></span>
							</figcaption>
						</figure>
					</li>
					<div class="clear"></div>
				</ul>
			</div>
			
			<div class="screens" id="screen2">
				<p><?php echo _("In the right circumstances, any kind of variation can be an important factor in the survival of a population of organisms. The key to survival can be something obvious, or something much harder to see at first. Sometimes, what seems like a disadvantage in normal times turns out to be an advantage in difficult situations."); ?></p>	
				<div class="col1">
					<p id="sickled-cells"><?php echo _("Sickled Cells"); ?></p>
					<p id="blood-cells"><?php echo _("Normal Red Blood Cells"); ?></p>
					<p><?php echo _("In the 1940s, doctors discovered that people who carried sickle cell trait, a condition that could lead to a disorder in their children, were much more likely to survive malaria than other people. Malaria, a disease carried by mosquitoes, kills more than a million people each year. Sickle cell patients have inherited a slightly different form of the blood protein hemoglobin from their parents. The different form is caused by a tiny change in the DNA carrying the hemoglobin code. In this case, potentially life-threatening condition can also be the key to survival."); ?></p>
				</div>
				<div class="col2">
				</div>
			</div>
		</div>
	</div>
	
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#screen2" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="9.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying inherited mutation..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 2; // Set number of screens for this page
	
	$(document).ready(function() {
		
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen = screenCount) { //refresh on screen2
					$('.bg').css('background', 'url(images/8/bg2.png)');
					$('.wrap').css('border-left', '1px dashed #d6d480');
					$('.wrap').css('border-right', '1px dashed #d6d480');
					$('#screen2').fadeIn();
					$('img.readmore-toggle').fadeOut( function(){
						$('img.next-toggle').fadeIn();
					});
				} else {
					$('.bg').css('background', 'url(images/8/bg.png)');
					$('.wrap').css('border-left', '1px dashed #5f9900');
					$('.wrap').css('border-right', '1px dashed #5f9900');
					$('#screen1').fadeIn();
					$('img.back-toggle').fadeIn();
					$('img.next-toggle').fadeOut(function(){$('img.readmore-toggle').fadeIn();});
				}
			});
		}

		/* Back Transition - change to the corresponding number of screens */
		$('img.back-toggle').click(function(){
			if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('.bg').css('background', 'url(images/8/bg.png)');
					$('.wrap').css('border-left', '1px dashed #5f9900');
					$('.wrap').css('border-right', '1px dashed #5f9900');
					$('#screen1').fadeIn();
					$('img.back-toggle').fadeIn();
					$('img.next-toggle').fadeOut(function(){$('img.readmore-toggle').fadeIn();});
				});
			}else{
				$('img.back-toggle').parent().attr('href','7.php');
			}
		});

		/* Read More Screen Transition */
		$('img.readmore-toggle').click(function(){
			$('#screen1').fadeOut(function(){
				$('.bg').css('background', 'url(images/8/bg2.png)');
				$('.wrap').css('border-left', '1px dashed #d6d480');
				$('.wrap').css('border-right', '1px dashed #d6d480');
				$('#screen2').fadeIn();
				$('img.readmore-toggle').fadeOut( function(){
					$('img.next-toggle').fadeIn();
				});
			});
		});
	});

	</script>
	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
