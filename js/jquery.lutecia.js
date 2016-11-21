
$(document).ready(function(){



/*----------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------*/

$('a#top').hide();

$(window).scroll(function(){
	currentScrollTop = $(this).scrollTop();		
	if (currentScrollTop>=100) {
		$('a#top').fadeIn(300);
	} else {
		$('a#top').hide();
	}
});

$('a#top').click(function() {
	var targetOffset = $('body').offset().top;
	$('html, body').animate({scrollTop: targetOffset}, 500);
	return false;
});	












/*----------------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/* SLIDER */

var images = ['slider/Lutecia_sld_1.jpg', 'slider/Lutecia_sld_2.jpg', 'slider/Lutecia_sld_3.jpg', 'slider/Lutecia_sld_4.jpg'];
var count = 0;
var limit = 0;

function slider (){
	count++;
	if(count>=images.length) { count=0; }
	limit++;
	if (limit<5) {
		$('div.preloader').fadeIn(600);	
		var loadImg = 'images/' + images[count];
		var img = new Image();
		$(img).load(function () {	
			$('div.preloader').fadeOut();
			$('div.images').append(this);	
			var ancho = $(window).width();	
			$('div.images img').css({'width': ancho});
			var alto = $('div.images img').css('height');
			$('div.slider').css({'height': alto});
			var ubi = '-' + (100*count) + '%';
			$('div.images').animate({'left': ubi}, 800);
		}).attr('src', loadImg);
		
	} else {
		clearInterval(timer);	
	}
}

var loadImg = 'images/' + images[count];
var img = new Image();
$(img).load(function () {	
	$('div.preloader').fadeOut();
	$('div.images').append(this);	
	var ancho = $(window).width();	
	$('div.images img').css({'width': ancho});
	var alto = $('div.images img').css('height');
	$('div.slider').css({'height': alto});
	timer = setInterval(slider, 6000);
}).attr('src', loadImg);















}); /* / document ready */



