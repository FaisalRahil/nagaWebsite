$(document).ready(function() {
  $("#contactForm").validate({
    rules:{
      contactName:{
        required: true,
      },
      contactEmail:{
        required: true,
        email: true,
      },
      contactSubject:{
        required: true,
      },
      contactMessage:{
        required: true,
      },
    },
    messages:{
      contactName:{
        required: "Please enter your name !",
      },
      contactEmail:{
        required: "Please enter your email address !",
      },
      contactSubject:{
        required: "Please enter your Subject !",
      },
      contactMessage:{
        required: "Please enter your messages !",
      },
    },
    showErrors: function(errorMap, errorList) {
      if (errorList.length) {
        $('#error').html(errorList[0].message);
      }
    },
  });
});
