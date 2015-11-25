$(document).ready(function() {
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

	/* Next Hover 
	$('img.next-toggle').hover( function () { 
		this.src = 'images/buttons/next-m-on.png';
	}, function () { 
		this.src = 'images/buttons/next-m.png';
	});*/

	/* Back Hover 
	$('img.back-toggle').hover(function () {
		this.src = 'images/buttons/back-m-on.png';
	}, function () {
		this.src = 'images/buttons/back-m.png';
	});*/
	
	/* Read More Hover 
	$('img.readmore-toggle').hover( function () {
		this.src = 'images/buttons/readmore-m-on.png'; 
	}, function () { 
		this.src = 'images/buttons/readmore-m.png';
	});*/
	
	/* Check Answer Hover 
	$('img.check-toggle').hover( function () {
		this.src = 'images/buttons/checkanswer-m-on.png'; 
	}, function () { 
		this.src = 'images/buttons/checkanswer-m.png';
	});*/
});