$(document).ready(function () {

  /*Display either Desktop version or Mobile Version when first visiting the site */

  // $( window ).width(function() {
  //     if($(window).width() <=751){
  //         $('nav').addClass("sticky");
  //     } 
  //     else $('nav').removeClass("sticky");
  //   }),

  // /* For the sticky navigation to appear whenever the media query hits */

  // /*PS: I have no idea why it only applies 17px below the resolution I set to. Go back to check that out later */

  // $( window ).resize(function() {
  //     if($(window).width() <=751){
  //         $('nav').addClass("sticky");
  //     } 
  //     else $('nav').removeClass("sticky");
  //   }),


  /* On Click of Menu button, display the menu options */


  $(".icon-right").click(function () {

    const hamburgerMenu = document.querySelector('ion-icon');

    const hiddenMenu = document.querySelector('.hidden-menu')


    //Change ion icon based on the user's click. If menu is open, the icon will be an X, so the user can close it.

    if (hamburgerMenu.name === "menu-outline") {
      hamburgerMenu.name = "close-outline",
        hiddenMenu.style.display = 'inherit';



    }

    else {
      hamburgerMenu.name = "menu-outline";

      hiddenMenu.style.display = 'none';

    }
    // let nav = $("#Main-Nav");  
    // let icon = $(".js--nav-icon i");

    // nav.toggle(300);

    // /* On Mobile nav, X button appears after clicking on the Menu button  */ 
    // if (icon.hasClass('md hydrated')) {
    //     icon.addClass('ion-close-round');
    //     icon.removeClass('md hydrated');
    // } else {
    //     icon.addClass('ion-navicon-round');
    //     icon.removeClass('ion-close-round');
    // }        
  }),

    /* On Pizza Popup, carrosel with fade effect to switch slides */
    $('.popup-carousel').slick({
    });
  /* Navigation scroll */


  /* Animations on scroll */


  /* Mobile navigation */

});
