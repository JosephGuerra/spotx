function navigation(){
	// jQuery easing plugin
	$('a.page-scroll').click(function(e){
        var a = $(this).attr('href');
        //if ((a=='#support')||(a=='#buy-now')){$(a).slideDown('slow');}
        $('html, body').stop().animate({scrollTop:$(a).offset().top}, 1500, 'easeInOutExpo');
        e.preventDefault();
    });
    // Offset for Main Navigation
    $('.navbar').affix({offset: {top: 300}});
    // Close navbar-collapse on nav or logo click 
    $('a.navbar-brand').click(function(){ 
    	if($('.navbar-collapse').is(':visible')){
    		$('.navbar-toggle:visible').click();
    	}
    });
    $('.navbar-collapse ul li a').click(function(){$('.navbar-toggle:visible').click();});	
}
    navigation();