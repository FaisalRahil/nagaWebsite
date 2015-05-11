$(document).ready(function() {
  $("#contactFormArabic").validate({
    rules:{
      contactNameArabic:{
        required: true,
      },
      contactEmailArabic:{
        required: true,
        email: true,
      },
      contactSubjectArabic:{
        required: true,
      },
      contactMessageArabic:{
        required: true,
      },
    },
    messages:{
      contactNameArabic:{
        required: "من فضلك ادخل الاسم !",
      },
      contactEmailArabic:{
        required: "من فضلك ادخل بريدك الالكتروني !",
        email: "من فضلك ادخل بريدك الالكتروني صحيح !",
      },
      contactSubjectArabic:{
        required: "من فضلك ادخل اسم الموضوع !",
      },
      contactMessageArabic:{
        required: "من فضلك ادخل الرسالة !",
      },
    },
    showErrors: function(errorMap, errorList) {
      if (errorList.length) {
        $('#error').html(errorList[0].message);
      }
    },
  });
});
