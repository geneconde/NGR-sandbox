<html>
<head>
	<title>Responsive Slides</title>

	<link rel="stylesheet" href="css/responsiveslides.css">

	<style>
		.slider-container { position: relative; margin: 0 auto; width: 300px; height: 280px; }

		.rslides { width: 100%; height: 100%; }

		.rslides_nav { position: absolute; }
		.slider-container .prev { left: -70px; top: 100px; }
		.slider-container .next { right: -50px; top: 100px; }
	</style>
</head>

<body>
	<div class="slider-container">
		<ul class="rslides">
			<li><img src="http://420placehold.it/tech/600-600-pixelated"><span class="caption">Pixelated</span></li>
			<li><img src="http://420placehold.it/tech/600-600-random"><span class="caption">Random</span></li>
			<li><img src="http://420placehold.it/tech/600-600-normal"><span class="caption">Normal</span></li>
		</ul>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 400
		});
	</script>
</body>
</html>
