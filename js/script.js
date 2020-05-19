const slideName = document.querySelector('.slide-name')
const slideImage = document.querySelector('.slide-image')
const slideDescription = document.querySelector('.slide-description')
const slides = document.getElementsByClassName('popup-slide')

let slidesCounter = 1;




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

//Increment or decrement the counter on slides, depending on whether the user clicked on the left or right slide
function changeSlide(n) {
  currentSlide(slidesCounter += n)
}

function currentSlide(n) {
  
  console.log("length: " + slides.length)
  //If last slide is reached, go back to the first
  if(slidesCounter > slides.length){
    slidesCounter = 1;
    console.log(slidesCounter)
  }
  //If you try to go back on the first slide, go to the last one
  if (slidesCounter < 1) {
    slidesCounter = slides.length
  }

  if(slidesCounter === 1){
    slides[0].style.display = "block"
    slides[1].style.display = "none"
    slides[2].style.display = "none"
    slides[3].style.display = "none"
  }
  if(slidesCounter === 2){
    slides[0].style.display = "none"
    slides[1].style.display = "block"
    slides[2].style.display = "none"
    slides[3].style.display = "none"
  }
  if(slidesCounter === 3){
    slides[0].style.display = "none"
    slides[1].style.display = "none"
    slides[2].style.display = "block"
    slides[3].style.display = "none"
  }
  if(slidesCounter === 4){
    slides[0].style.display = "none"
    slides[1].style.display = "none"
    slides[2].style.display = "none"
    slides[3].style.display = "block"
  }
}


