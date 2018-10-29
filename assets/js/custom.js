// jQuery(function(){
//     jQuery('.menu_icon').hover(function(){
//         jQuery('.menu_icon').mouseenter(function(){
//             jQuery('.menu_txt').css("display","block");
//         });
//         jQuery('.menu_icon').mouseleave(function(){
//             jQuery('.menu_txt').css("display","none");
//         });
//     });
  
// });

// jQuery("menu_icon").on("mouseover", function(){
//     jQuery('.menu_icon').mouseleave(function(){
//         jQuery('.menu_txt').css("display","block");
//     });
// });



// jQuery("document").on({
//     mouseenter: function () {
//         jQuery('.menu_txt').css("display","block");
//     },
//     mouseleave: function () {
//         jQuery('.menu_txt').css("display","none");
//     },
// },".menu_icon");



// jQuery(".nav-item a").click(function() {
//     jQuery('html,body').animate({
//         scrollTop: jQuery(".second").offset().top},
//         'slow');
// });


jQuery(function(){
    jQuery('.menu-item-wrapper').on('mouseenter',function(){
        jQuery(this).find('.menu_txt').css("visibility","visible");
    });

    jQuery('.menu-item-wrapper').on('mouseleave',function(){
        jQuery(this).find('.menu_txt').css("visibility","hidden");
    });   


    jQuery('.menu-item-wrapper').on('mouseenter',function(){
        jQuery(this).find('.menu_txt').css("visibility","visible");
    });

    jQuery('.adipoli-wrapper').on('mouseenter',function(){
        jQuery(this).parents('.afp-single-item').find('.portfolio-project-name').css("visibility","visible");
    });
    
    jQuery('.adipoli-wrapper').on('mouseleave',function(){
        jQuery(this).parents('.afp-single-item').find('.portfolio-project-name').css("visibility","hidden");
    });
    jQuery('.adipoli-wrapper').on('mouseenter',function(){
        jQuery(this).parents('.afp-single-item').find('.portfolio-project-name').css("visibility","visible");
    });
    
    jQuery('.menu-item-wrapper a').click(function(){
        jQuery('#navbarNavDropdown').removeClass('show');
    }); 

});


var scroll = new SmoothScroll('nav a[href*="#"]');


new WOW().init();
