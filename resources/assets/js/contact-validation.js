$( function() {
  $('#contactFormy').on('submit', validateContactForm);
  function validateContactForm(e){
    var emailInput = $('input#email');
    var messageInput = $('#message');

    var emailError = $('#email-error');
    var messageError = $('#message-error');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var emailValid = false;
    var messageValid = false;


    // Clearing error messages
    emailError.removeClass('has-errors');
    messageError.removeClass('has-errors');

    if (!emailInput.val()) {
      emailError.addClass('has-errors');
    }
    else {
      if (!filter.test(emailInput.val())) {
        emailError.addClass('has-errors');
      }
      else {
        emailError.removeClass('has-errors');
        emailValid = true;
      }
    }

    if (!messageInput.val()) {
      messageError.addClass('has-errors');
    }
    else {

      if (!(messageInput.val().length >= 3)) {
        messageError.html('Dit bericht is te kort!');
        messageError.addClass('has-errors');

      }
      else {
        messageError.removeClass('has-errors');
        messageValid = true;
      }
    }

    if (messageValid && emailValid) {
      $('button#sendMessage').addClass('success').html('Bericht verstuurd.');
      alert('Form is valid');
    }
    e.preventDefault();
  }
});
