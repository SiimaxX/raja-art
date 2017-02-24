jQuery(document).ready(function(){
	
	// $(window).on('load', function() { // makes sure the whole site is loaded 
	//     $('.loading-page').delay(1000).fadeOut(); // will first fade out the loading animation 
	//     $('body').delay(350).css({'overflow':'visible'});
	//     $('.anim-in').textillate()
	// })


	jQuery('.filter a').click(function(event){
		event.preventDefault();
		jQuery('.filter a').removeClass('active');
		jQuery(this).addClass('active');
		value = jQuery(this).data('link');
		cat = '.article-' + value; 
		jQuery('.grille-oeuvres').isotope({ filter: cat });
	});


	$('.burger-btn').click(function(){
	  jQuery('.active-menu').slideToggle();
	  $(this).toggleClass('active');
	  return false;
	});


	// $('.burger-btn').click(function(){
	//   jQuery('header').fadeToggle();
	//   $(this).toggleClass('active');
	//   return false;
	// });

	$('.read-more').click(function(){
	  jQuery('.text-full').slideDown();
	  jQuery('.read-less').delay( 400 ).fadeIn();
	  $(this).fadeOut();
	  return false;
	});

	$('.read-less').click(function(){
	  jQuery('.text-full').slideUp();
	  jQuery('.read-more').delay( 400 ).fadeIn();
	  $(this).fadeOut();
	  return false;
	});

	$('.btn-add1-display').click(function(){
	  $('.add1-display').removeClass( "hidden" );
	  $('.main-display').addClass( "hidden" );
	  $('.add2-display').addClass( "hidden" );
	  return false;
	});

	$('.btn-add2-display').click(function(){
	  $('.add2-display').removeClass( "hidden" );
	  $('.main-display').addClass( "hidden" );
	  $('.add1-display').addClass( "hidden" );
	  return false;
	});

	$('.btn-main-display').click(function(){
	  $('.main-display').removeClass( "hidden" );
	  $('.add1-display').addClass( "hidden" );
	  $('.add2-display').addClass( "hidden" );
	  return false;
	});


	/* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.fadein').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });

});