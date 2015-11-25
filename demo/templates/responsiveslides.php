<html>
<head>
	<title>Responsive Slides</title>

	<link rel="stylesheet" href="css/responsiveslides.css">

	<style>
		.rslides { width: 300px; height: 280px; }
	</style>
</head>

<body>
	<ul class="rslides">
		<li><img src="http://420placehold.it/tech/600-600-pixelated"><span class="caption">Pixelated</span></li>
		<li><img src="http://420placehold.it/tech/600-600-random"><span class="caption">Random</span></li>
		<li><img src="http://420placehold.it/tech/600-600-normal"><span class="caption">Normal</span></li>
	</ul>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>
</body>
</html>
