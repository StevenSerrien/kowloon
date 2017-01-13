$( function() {
  $('#contactFormy').on('submit', validateContactForm);
  function validateContactForm(e){
    console.log('hallo');
    e.preventDefault();
  }
});
