$(document).ready(function(){
  $('.hoveri').adipoli({
    'starEffect': 'grayuscale', 
    'hoverEffect': 'boxRandom'
  });
  
  $('#da-slider').cslider({
		autoplay: true,
	});

});






function repair_slider(width){
	calculate = width * 0.10;
	if(width <= 768){
		$('head').append('<style>.da-slide-current>h2{margin-left: -'+calculate+'px !important;}</style>');
		setTimeout(function(){
			$('#slide0>h2').removeAttr('style');
		}, 5000);
	}
	
}

repair_slider(width);