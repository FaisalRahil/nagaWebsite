/* ----------------------------- 
Pre Loader
----------------------------- */
$(window).load(function() {
  'use strict';
  $('.loading-icon').delay(500).fadeOut();
  $('#preloader').delay(800).fadeOut('slow');
});
/* ----------------------------- 
Scroll into viewPort Animation
----------------------------- */
$(document).ready(function() {  
  'use strict';
  $('.animated').appear(function() {
    var element = $(this),
      animation = element.data('animation'),
      animationDelay = element.data('animation-delay');
      if ( animationDelay ) {

        setTimeout(function(){
          element.addClass( animation + " visible");
        }, animationDelay);

      } else {
        element.addClass( animation + " visible");
      }
  });
});
/* ----------------------------- 
IE 9 Placeholder fix
----------------------------- */
$('[placeholder]').focus(function() {
  var input = $(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = $(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur();
/* ----------------------------- 
Contact form
----------------------------- */      
$(document).ready(function() {
  'use strict';
  $('form.contact-form').on('submit', function(e) {
    $.post('contact/contact.php', $(this).serialize(), function(response) {
      if ($('.confirmation p').html() != "") {
        $('.confirmation p').replaceWith('<p><span class="fa fa-check"></span></p>');
      }
      $('.confirmation p').append(response).parent('.confirmation').show();
      $('html, body').animate({
        scrollTop: $('#section-contact').offset().top
        },{duration:800,queue:true});
      $('.form-item').val('');
      setTimeout(function() {
        $('.confirmation').hide();
      }, 8000);
    });
    // disable default action
    e.preventDefault();
  });
});
      