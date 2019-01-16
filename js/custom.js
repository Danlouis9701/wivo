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


/// Scroll Nav

 $(window).scroll(function(){
    if($(this).scrollTop()>200){
        $('#moveNav').addClass('fixed-top');
        $('#moveNav').fadeIn();
    }else{
        $('#moveNav').removeClass('fixed-top');
        $('#moveNav').fadeOut();
    }
});

/// Wow
 new WOW().init();

