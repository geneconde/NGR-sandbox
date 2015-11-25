<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Motion"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		div#screen2 {
		    font-size: 20px;
		}
		img#motionPic {
		    width: 40%;
		    display: block;
		    margin-left: auto;
		    margin-right: auto;
		    top: -63px;
		    position: relative;
		}
		h1 { color: #eb7100; }
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/6/bg.jpg); }

		#screen2, #screen3 { display: none; }
		#A{
			position: relative;
		}
		table { text-align: center; width: 80%; margin: 0 auto; }
		table th:first-child { width: 30%; }
		table th:nth-child(2), table th:nth-child(3) { width: 35%; }
		td, th { border: 1px solid #000;}

		.rslides img { border: 5px solid #f9cffd; }

		#buttons .next { display: none; }
		@-moz-document url-prefix() {
			table {
			    width: 80%;
			    margin: 0px auto;
			    position: relative;
			    left: -89%;
			    text-align: center;
			    bottom: -83px;
			    display: table;
			}
			img#motionPic {
			    width: 40%;
			    display: block;
			    margin-left: auto;
			    margin-right: auto;
			    top: -10px;
			    position: relative;
			}
			p#a {
    top: 14px !important;
}
		} 
			p#a { top: -40px; }
    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
	    div#screen2 { font-size: 19px; }
		p#a { top: -60px; }
		@-moz-document url-prefix() {
			table {
			    width: 80%;
			    margin: 1px auto;
			    position: relative;
			    left: 10px;
			    text-align: center;
			    bottom: -83px;
			    display: table;
			    top: 2px;
			}
			img#motionPic {
			    width: 40%;
			    display: block;
			    margin-left: auto;
			    margin-right: auto;
			    top: -70px;
			    position: relative;
			}
			p#a {
			    top: -60px !important;
			}
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
	img#motionPic {
	    width: 40%;
	    display: block;
	    margin-left: auto;
	    margin-right: auto;
	    top: -25px;
	    position: relative;
	}

    </style>

</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... motion"); ?></h1>
						<p class="grid_12">
							<?php echo _("Often, a convenient frame of reference for motion is a number line. With Zero in the center, the numbers are increasingly positive as you go to the right, and increasingly negative as you go to the left. Identifying the position of the object on the number line allows you to be more specific about the location. Saying the object is at -3 is more specific than saying the object is 3 spaces from 0."); ?>
						</p>
						<div class="prefix_1 grid_10">
							<img src="assets/6/screen1-a.png" alt="motion">
						</div>

					</div>

					<div id="screen2" class="screen">
						<p class="grid_12">
							<?php echo _("Information about the location of an object at different points in time can be recorded in a data table like the one shown below."); ?>
						</p>
						<table>
							<thead>
								<th><?php echo _("Time"); ?></th>
								<th><?php echo _("Location of Object A"); ?></th>
								<th><?php echo _("Location of Object B"); ?></th>
							</thead>
							<tbody>
								<tr>
									<td>0 <?php echo _("seconds"); ?></td>
									<td>-5</td>
									<td>0</td>
								</tr>
								<tr>
									<td>10 <?php echo _("seconds"); ?></td>
									<td>-3</td>
									<td>1</td>
								</tr>
								<tr>
									<td>20 <?php echo _("seconds"); ?></td>
									<td>-1</td>
									<td>2</td>
								</tr>
								<tr>
									<td>30 <?php echo _("seconds"); ?></td>
									<td>1</td>
									<td>3</td>
								</tr>
								<tr>
									<td>40 <?php echo _("seconds"); ?></td>
									<td>3</td>
									<td>4</td>
								</tr>
								<tr>
									<td>50 <?php echo _("seconds"); ?></td>
									<td>5</td>
									<td>5</td>
								</tr>
								<tr>
									<td>60 <?php echo _("seconds"); ?></td>
									<td>?</td>
									<td>? </td>
								</tr>
								
							</tbody>
						</table>
						<br><br>
						<p class="grid_12" id="a">
							<?php echo _("We can use the information from the data table to see that Object A is moving faster than object B.  Object A is moving two positions towards the right every 10 seconds, while Object B only moves one position to the right every 10 seconds.  We can also see that Object A catches up to Object B after 50 seconds because the data table shows both objects are at the same position at that time.  We can also use patterns in the numbers to predict where the objects will be at a later point in time.  If the motion continues with the same pattern shown in the data table, Object A will be at position 7 and Object B will be at position 6 after 60 seconds."); ?>
						</p>
						<img id="motionPic" src="assets/6/screen1-a.png" alt="motion">
					</div>

					<div id="screen3" class="screen">
						<p class="grid_12">
							<?php echo _("A <span class=key>unit of measure</span> allows the data table to be even more specific. Often, distances are measured in terms of feet, yards, or miles in the United States. In countries that use the metric system, those same measurements might be in centimeters, meters or kilometers. Including a unit of measure in your data table allows you to communicate more specifically about your measurements."); ?>
						</p>
						<div class="grid_12">
							<div class="grid_6">
								<ul class="rslides">
									<li><img src="assets/6/a.jpg"><span class="caption"></span></li>
									<li><img src="assets/6/b.jpg"><span class="caption"></span></li>
									<li><img src="assets/6/c.jpg"><span class="caption"></span></li>
								</ul>
							</div>
							<div class="grid_6">
								<ul class="rslides">
									<li><img src="assets/6/d.jpg"><span class="caption"></span></li>
									<li><img src="assets/6/e.jpg"><span class="caption"></span></li>
									<li><img src="assets/6/f.jpg"><span class="caption"></span></li>
								</ul>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Drawing arrows..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 3;

		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {

				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function() {
					$('#screen3').fadeIn();

					window.location.hash = '#screen3';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
