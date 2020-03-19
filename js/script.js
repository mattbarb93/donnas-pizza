jQuery(document).ready(function() {
    
    /*Display either Desktop version or Mobile Version when first visiting the site */
    
    function triggerNav() {
        if($(window).width() <=751){
            $('nav').addClass("sticky");
        } 
        else $('nav').removeClass("sticky");
    }

    $( window ).width(triggerNav),

    /* For the sticky navigation to appear whenever the media query hits */

    /*PS: I have no idea why it only applies 17px below the resolution I set to. Go back to check that out later */
    
    $( window ).resize(function() {
        if($(window).width() <=751){
            $('nav').addClass("sticky");
        } 
        else $('nav').removeClass("sticky");
      }),


    /* On Click of Menu button, display the menu options */
      $(".js--nav-icon").click(function() {
        var nav = $("#Main-nav");
        var nav2 = $('#Mobile-nav');  
        var icon = $(".js--nav-icon i");

        nav.toggle(300);
        nav2.toggle(300);
        
        /* On Mobile nav, X button appears after clicking on the Menu button  */ 
        if (icon.hasClass('fa-bars')) {
            icon.addClass('fa-times');
            icon.removeClass('fa-bars');
        } else {
            icon.addClass('fa-bars');
            icon.removeClass('fa-times');
        }        
      }),


    /* On Pizza Popup, carrosel with fade effect to switch slides */
    $('.popup-carousel').slick({
    });
    
    /* TEST JQUERY ON WORDPRESS 
    WORKS ON HTML, DOESNT ON JS ATM*/

   
   
});