/*
        $(window).load(function(){
            setTimeout('delay()',3500);
        });
    
        function delay(){
            $('#preloader').fadeOut("slow");
            $('body').css({'overflow':'visible'});          
        }

var query = Modernizr.mq('(max-width: 576px)');
 if (query) {
   // the browser window is larger than px
    //alert("Esto es un celular");
       
     
 }else{
    //alert("Esto No es un celular");
   
 }
 */

// Funcion del escritorio
 function toggleNav() {
        if ($('.team1').hasClass('show-Info')) {
          // Al abrir Services
            $('.team1').removeClass('show-Info');
            $('.card1').animate({left:"0%",opacity:0},0.35);

        } else {
          // Al cerrar Services
            $('.team1').addClass('show-Info');
            $('.card1').animate({left:"-100%",opacity:1},0.35);

        }
    }

    function toggleNav2() {
        if ($('.team2').hasClass('show-Info2')) {
          // Do things on Nav Close
            $('.team2').removeClass('show-Info2');
            $('.card2').animate({left:"0%",opacity:0},0.35);


        } else {
          // Do things on Nav Open
            $('.team2').addClass('show-Info2');
            $('.card2').animate({left:"-100%",opacity:1},0.35);
        }
    }
     
// Funcion del Celular
 function toggleNav3() {
        if ($('.team3').hasClass('show-Info3')) {
          // Al abrir Services
            $('.team3').removeClass('show-Info3');
            $('.card3').animate({top:"0%",opacity:0},0.35);

        } else {
          // Al cerrar Services
            $('.team3').addClass('show-Info3');
            $('.card3').animate({top:"100%",opacity:1},0.35);

        }
    }

    function toggleNav4() {
        if ($('.team4').hasClass('show-Info4')) {
          // Do things on Nav Close
            $('.team4').removeClass('show-Info4');
            $('.card4').animate({top:"0%",opacity:0},0.35);

        } else {
          // Do things on Nav Open
            $('.team4').addClass('show-Info4');
            $('.card4').animate({top:"100%",opacity:1},0.35);
        }
    }



$('.team1').click(function() {
    // Calling a function in case you want to expand upon this.
    toggleNav();
  });
    $('.team2').click(function() {
    // Calling a function in case you want to expand upon this.
    toggleNav2();
  });

$('.team3').click(function() {
    // Calling a function in case you want to expand upon this.
    toggleNav3();
  });
    $('.team4').click(function() {
    // Calling a function in case you want to expand upon this.
    toggleNav4();
  });






// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  

//  Tabs animation function

(function() {

    [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
        new CBPFWTabs( el );
    });

})();

/// Scroll Nav

 $(window).scroll(function(){
    if($(this).scrollTop()>65){
        $('nav#moveNav').addClass('fixed-top ');
    }else{
        $('nav#moveNav').removeClass('fixed-top ');
    }
});

/// Wow
 new WOW().init();

