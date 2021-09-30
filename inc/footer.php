<div id="footer_container">
  <div id="footer" class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 column footer_column services">
        <h3>Cleaning Services</h3>
        <div class="cleaning_services_links">
          <a href="coronavirus-cleaning.ph">Residential Cleaning</a>
          <a href="commercial-cleaning.ph">Commercial Cleaning</a>
          <a href="office-cleaning.ph">Carpet Cleaning</a>
          <a href="retail-cleaning.ph">Upholstery Cleaning</a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 column footer_column about_us">
        <h3>Useful Links</h3>
        <div class="about_us_links">
          <ul style="columns:2">
            <li><a href="#" >About Us</a></li>
            <li><a href="#">Our System</a></li>
            <li><a href="#">FAQS</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#" >Contact Us</a></li> 
            <li><a href="#" >Login</a></li>           
          </ul>
        </div> 
      </div>


      <div class="col-lg-6 col-md-6 col-sm-6 column footer_column contact_us">
        <div class="row">
          <div class="col-xl-6 col-sm-6">
            <div class="get-touch-sec">
              <h3>Get in Touch!</h3>
              <a class="call-sec" href="tel:5708217006" >(570) 821-7006</a>
              <a class="email-sec" href="mailto:rugman08@hotmail.com">rugman08@hotmail.com</a>
              <a class="address-sec" href="#">Exeter, PA 18643</a>
            </div>
          </div>
          <div class="col-xl-6 col-sm-6">
            <div class="timing">
              <h3>Business Hours</h3>
              <p>Monday - Friday : 09 AM TO 05 PM</p>
              <p>Saturday : Closed</p>
              <p>Sunday : Closed</p>
            </div>
          </div>
        </div> 
      </div>

       <div class="col-xl-6 col-sm-6  p-all">
        <div class="social-icon-new p-top">
          <h3>Get Socials :</h3>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
      <div class="col-xl-6 col-sm-6 p-all">
        <div class="payment p-top">
          <h3>We Accept :</h3>
          <img src="images/payment/ax-pay.png" class="img-fluid">
          <img src="images/payment/dis-pay.png" class="img-fluid">
          <img src="images/payment/mae-pay.png" class="img-fluid">
          <img src="images/payment/pp-pay.png" class="img-fluid">
          <img src="images/payment/visa-pay.png" class="img-fluid">
        </div>
      </div>

      <div class="clearfix"></div>  
    </div> <!-- #footer -->
  </div>
</div>
<div class="copy-r">© Copyright 2021 Accu-Brite. All Rights Reserved.</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script> 



<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script> --> 

<script src="js/jquery-ui.js" type="text/javascript"></script> 

<script src="js/modernizr.js" type="text/javascript"></script> 

<script src="js/script.js" type="text/javascript"></script> 

<script src="js/wow.min.js" type="text/javascript"></script> 

<script src="js/slick.min.js" type="text/javascript"></script> 

<script src="js/parallax.js" type="text/javascript"></script> 

<script src="js/select-chosen.js" type="text/javascript"></script> 
<script src="js/iziModal.js" type="text/javascript"></script> 
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>



<script src="js/modelo.js"></script>
  <script src="js/modelo2.js"></script>
  <script>
      $('#modal-1').modelo();
      $('#modal-2').modelo2();
  </script>



<script type="text/javascript">



	jQuery(document).ready(function($) {



  // Scroll to the desired section on click



  // Make sure to add the `data-scroll` attribute to your `<a>` tag.



  // Example: 



  // `<a data-scroll href="#my-section">My Section</a>` will scroll to an element with the id of 'my-section'.



  function scrollToSection(event) {



    event.preventDefault();



    var $section = $($(this).attr('href')); 



    $('html, body').animate({



      scrollTop: $section.offset().top



    }, 500);



  }



  $('[data-scroll]').on('click', scrollToSection);



}(jQuery));



</script>

<script type="text/javascript">
  (function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);
</script>
<script type="text/javascript">
  $(".clear-cookie").on("click", function() {
  Cookies.remove('colorboxShown');
  $(this).replaceWith("<p><em>Cookie cleared. Re-run demo</em></p>");
});

$(".order-cheezburger").on("click", function() {
  $.colorbox.close();
});

function onPopupOpen() {
  $("#modal-content").show();
  $("#yurEmail").focus();
}

function onPopupClose() {
  $("#modal-content").hide();
  Cookies.set('colorboxShown', 'yes', {
    expires: 1
  });
  $(".clear-cookie").fadeIn();
  lastFocus.focus();
}

function displayPopup() {
  $.colorbox({
    inline: true,
    href: "#modal-content",
    className: "cta",
    width: 600,
    height: 350,
    onComplete: onPopupOpen,
    onClosed: onPopupClose
  });
}

var lastFocus;
var popupShown = Cookies.get('colorboxShown');

if (popupShown) {
  console.log("Cookie found. No action necessary");
  $(".clear-cookie").show();
} else {
  console.log("No cookie found. Opening popup in 3 seconds");
  $(".clear-cookie").hide();
  setTimeout(function() {
    lastFocus = document.activeElement;
    displayPopup();
  }, 3000);
}
</script>



</body></html>