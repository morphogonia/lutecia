$(document).ready(function(){


	$('a[rel=iplantas], a[rel=lplantas]').fancybox({
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'titlePosition' 	: 'outside',
		'cyclic' 			: 'true',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
		return '<span id="fancybox-title-over">' + (title.length ? '' + title : '') + '</span>';}
	});
	

	
	
});




















