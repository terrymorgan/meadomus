$(document).ready(function() {
    // remove the existing node
    $('.main .core').remove();
    //create a node
    var slides = $('\
    <div class="rslides">\
      <div class="slide">\
        <img\
        sizes="(min-width:550px) 500px, calc(100vw-2em)"\
        srcset="images/homeslide_repairs.288.jpg 289w,\      images/homeslide_repairs.368.jpg 369w,\
        images/homeslide_repairs.500.jpg 500w"\
        src="images/homeslide_repairs.500.jpg"\
        alt="Major rehab worksite, showing back of house, exposed wall studs, tools nearby">\
      </div>\
      <div class="slide">\
        <img\
        sizes="(min-width:550px) 500px, calc(100vw-2em)"\
        srcset="images/homeslide_decks.288.jpg 289w,\      images/homeslide_decks.368.jpg 369w,\    images/homeslide_decks.500.jpg 500w"\
        src="images/homeslide_decks.500.jpg"\
        alt="Spacious multi-level redwood deck with flower planters">\
      </div>\
      <div class="slide">\
        <img\
        sizes="(min-width:550px) 500px, calc(100vw-2em)"\
        srcset="images/homeslide_tile.288.jpg 289w,\   images/homeslide_tile.368.jpg 369w,\
        images/homeslide_tile.500.jpg 500w"\
        src="images/homeslide_tile.500.jpg"\
        alt="Tub shower with custom white & green tile">\
      </div>\
    </div> <!-- end rslides -->\
    <p>This slideshow is only a few photos of our work. <br/>\
    Visit <a href="projects.php">Our Projects</a> to see more photos.</p>\
    ');
    // add node to DOM relative to the selected class 
    slides.appendTo($('.main')); 
});

//images cut from slideshow
        //<div class="slide"><img src="images/homeslide_greenhouse_500x330.jpg" alt="Greenhouse constructed from reclaimed sliding glass doors"></div>\
        //<div class="slide"><img src="images/homeslide_bathrooms_500x330.jpg" alt="Stall shower with full height glass doors and color coordinated fixtures"></div>\
        //<div class="slide"><img src="images/homeslide_cabinets_500x330.jpg" alt="Multi-level oak kitchen cabinets, with natural finish"></div>\
        //<div class="slide"><img src="images/homeslide_construction_500x330.jpg" alt="House under construction, shortly after rough framing was completed"></div>\
        //<div class="slide"><img src="images/homeslide_fences_500x330.jpg" alt="Fence and gate with artistic inset and graceful wrought iron hardware"></div>\
        //<div class="slide"><img src="images/homeslide_floors_500x330.jpg" alt="Natural finish hardwood floor with black oak trim"></div>\
        
// options for the slideshow
$(function() {
  $(".rslides").responsiveSlides({
    auto: true,             // Boolean: Animate automatically, true or false
    speed: 1000,            // Integer: Speed of the transition, in milliseconds
    timeout: 5000,          // Integer: Time between slide transitions, in milliseconds
    pager: false,           // Boolean: Show pager, true or false
    nav: false,             // Boolean: Show navigation, true or false
    random: false,          // Boolean: Randomize the order of the slides, true or false
    pause: false,           // Boolean: Pause on hover, true or false
    pauseControls: true,    // Boolean: Pause when hovering controls, true or false
    prevText: "Previous",   // String: Text for the "previous" button
    nextText: "Next",       // String: Text for the "next" button
    maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
    navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
    manualControls: "",     // Selector: Declare custom pager navigation
    namespace: "rslides",   // String: Change the default namespace used
    before: function(){},   // Function: Before callback
    after: function(){}     // Function: After callback
  });
});

// code from the bbb site for the dynamic bbb logo
var bbbprotocol = ( ("https:" == document.location.protocol) ? "https://" : "http://" );

document.write(unescape(
  "%3Cscript src='" + bbbprotocol + 'seal-goldengate.bbb.org' + unescape('%2Flogo%2Fme-a-domus-449105.js') + "' type='text/javascript'%3E%3C/script%3E")); 