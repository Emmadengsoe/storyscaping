/*dette er til at man kan lukke pop-uppen ned*/
jQuery(document).ready(function( $ ) {
  $('.popupCloseButton').on('click', function() {
    $('.login-form').hide();
  })
});

/*dette er til send knappen*/
jQuery(document).ready(function( $ ) {
  $('#submitBtn').on('click', function() {
    $('.login-form').hide();
  })
});