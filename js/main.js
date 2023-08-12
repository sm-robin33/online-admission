jQuery(document).ready(function(){
    $('#nav').slicknav();
    $("#header_area").sticky({topSpacing:0});
    $.scrollUp();
    $(function(){
      $('.bxslider').bxSlider({
        mode: 'fade',
      });
    });

    
    
$('.service_area').owlCarousel({
    loop:true,
    margin:10,
    pagination:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

    
    
$('.cource_area').owlCarousel({
    loop:true,
    margin:10,
    pagination:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})

    
    
$('.testimonial_area').owlCarousel({
    loop:true,
    margin:10,
    pagination:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

    
    
$('.clients_area').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
})


    
    
});