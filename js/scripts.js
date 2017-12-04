$(function() {
  // Get the form
  var form = $('#contact-form');

  //Get the alerts div
  var alerts = $('#alerts');

  // Event listener to stop form submission
  $(form).submit(function(event) {
    // Stop the browser from submitting form
    event.preventDefault();

    // Serialize form data
    var formData = $(form).serialize();

    // Submit the form via AJAX
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the alerts div has the 'success' class
      $(alerts).removeClass('error red-text');
      $(alerts).addClass('success green-text');

      // Set the alert text
      $(alerts).text(response);

      // Clear the form
      $('#name').val('');
      $('#email').val('');
      $('#message').val('');
    })
    .fail(function(data) {
      // Make sure that the alerts div has the error class
      $(alerts).removeClass('success green-text');
      $(alerts).addClass('error red-text');

      // Set the alert text
      if (data.responseText !== '') {
        $(alerts).text(data.responseText);
      } else {
        $(alerts).text('Oops! An error has occured and your message could not be sent.');
      }
    });
  });


});
