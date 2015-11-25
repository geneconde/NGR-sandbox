
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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<style>
.header-text { background-color: #fff; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; width: 80% !important; }
.bg { background-image: url('images/1/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
.wrap {border-left: 1px dashed #7D7157; border-right: 1px dashed #7D7157;}
h1 { text-align: center; color: #F73346; }
h2 { color: #f73346; text-align:center !important; font-size:80px; padding: 0; line-height:60px !important; margin: 0;}
#title {width:100%; border:1px solid red;}
#start{height: 237px; width:268px; text-align:center; bottom: -191px;left:-7px; position: relative; padding-top:10px; background-image:url('images/1/bubble.png');'background-size':'contain';background-repeat: no-repeat; background-size: 100% 100%; padding-top:25px; }
.bg section {font-size:30px;}
#start ul {list-style:none; width:150px; padding:0; margin: 0 auto; margin-top:10px;}
#start ul li {background-color:#7d7157; font-size:30px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#start ul li a:hover {background-color:#f4b757; cursor:pointer; color: #7d7157; text-decoration:none;}
#start ul li a {text-decoration:none; color: #FFFFFF; display:block; width:100%; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px;  }

<?php if ($language == 'zh_CN'): ?>
	h2 { padding: 35px 0 0 0; }
<?php endif; ?>
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<br>
			<div class="header-text">
				<h1><?php echo _("Welcome to the Doing Science module").", "; echo $user->getFirstName() . '!'; ?></h1>	
			</div>		
			<div id="start">				
				<h2><?php echo _("Doing Science");?></h2>	
				<ul>
					<li><a href="2.php"><?php echo _("Start");?></a></li>
				</ul>							
			</div>			
		</div>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin") . ', ' . $user->getFirstName();?>?</strong></section></section>	

<?php include("setlocale.php"); ?>
</body>
</html>
