// $(function(){
//     $('.menu_icon').hover(function(){
//         $('.menu_icon').mouseenter(function(){
//             $('.menu_txt').css("display","block");
//         });
//         $('.menu_icon').mouseleave(function(){
//             $('.menu_txt').css("display","none");
//         });
//     });
  
// });

// $("menu_icon").on("mouseover", function(){
//     $('.menu_icon').mouseleave(function(){
//         $('.menu_txt').css("display","block");
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



// $(".nav-item a").click(function() {
//     $('html,body').animate({
//         scrollTop: $(".second").offset().top},
//         'slow');
// });


jQuery(function(){
    jQuery('.menu-item-wrapper').on('mouseenter',function(){
        jQuery(this).find('.menu_txt').css("visibility","visible");
    });

    jQuery('.menu-item-wrapper').on('mouseleave',function(){
        jQuery(this).find('.menu_txt').css("visibility","hidden");
    });   
});


var scroll = new SmoothScroll('nav a[href*="#"]');