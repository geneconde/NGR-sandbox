<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/global.js" /></script>
<style>
.wrap { border-color: #0abfec; }

.bg { background-image: url('images/1/bg.jpg');  
	background-repeat: no-repeat;
	background-size: 100% 100%;
	width:100% !important; 
	height:100%; position:relative;
}

h1 { 
	color: #4999CE; 
	font-size:32px; 
	padding-top: 50px !important; 
}

#start{
	position: absolute;
	text-align: center;
	width: 100%;
	top: 0;
	margin: 0 auto;
}

#bg2 {
	width:100%;
	 background-repeat: no-repeat;
	 background-size: 100% 100%; 
	 height:100%;
	 position:relative;
}

#btn_start{
	position: absolute;
	width:15%; 
	-webkit-border-radius:10px; 
	-moz-border-radius:10px; 
	border-radius:10px;
	margin:0;
	margin:0 auto;
	background: #0099d9;
	height: 40px;
	padding:3px;
	bottom: 5%;
	left: 41%;
	text-align:center;
}
	
#btn_start a{
	font-size:24px; 
	color:#fff252; 
	text-decoration:none; 
	/*display:block;*/
	line-height: 40px;
}

#btn_start:hover{ background: #f138ad; }

<?php if ($language == 'es_ES'): ?>
	h1 { width: 95% !important; }
<?php endif; ?>

html[dir="rtl"] h1 { text-align: center; }

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="bg2">
				
				<div id="btn_start">
					<a href="2.php"><?php echo _("Start"); ?></a>
				</div>	
			</div>

			<div id="start">
				<h1 class="centered"><?php echo _("Welcome to the How Diseases Destroy module"); ?>, <?php echo $user->getFirstName() . "!" ?></h1>					
											
			</div>
		</div>
	</div>	
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's begin!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
