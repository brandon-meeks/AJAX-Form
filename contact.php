<?php

// Only process POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form fields and remove whitespace
  $name = strip_tags(trim($_POST['name']));
  $name = str_replace(array("\r", "\n"),array(" ", " "),$name);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $message = trim($_POST['message']);

  // Check that data was sent to the mailer
  if (empty($name) or empty($message) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Set a 400 (bad request) response code and exit
    http_response_code(400);
    echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    exit;
  }

  // Set the recipient email address
  // FIXME: update this to your desired email address
  $recipient = "hello@example.com";

  // Set the email subject
  $subject = "New website contact from $name";

  //Build the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message: \n$message\n";

  //Build the email headers
  $headers = "From: $name <$email>\n";
  $headers .= "Reply-To: $name <$email>";

  // Sent the email
  if (mail($recipient, $subject, $message, $headers)) {
    // Set a 200 (okay) response code
    http_response_code(200);
    echo "Thank You! Your message has been sent.";
  } else {
    // Set a 500 (Internal Server Error) response code
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message";
  }
} else {
  // Not a POST request, set a 403 (forbidden) response code
  http_response_code(403);
  echo "There was a problem with your submission, please try again";
}

?>
