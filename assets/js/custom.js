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

jQuery("document").on({
    mouseenter: function () {
        jQuery('.menu_txt').css("display","block");
    },
    mouseleave: function () {
        jQuery('.menu_txt').css("display","none");
    },
},".menu_icon");

