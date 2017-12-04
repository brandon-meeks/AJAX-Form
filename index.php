<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>AJAX Test</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- Google's Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet" />

  </head>
  <body>

    <div>
      <form id="contact-form" action="contact.php" method="post">
        <div class="row">
          <div class="col s6 offset-s3">
            <h1 class="center">AJAX Form</h1>
            <div id="alerts"></div>
            <div>
              <input type="text" name="name" id="name" required/>
              <label for="name">Name</label>
            </div>
            <div>
              <input type="email" name="email" id="email" required/>
              <label for="email">Email</label>
            </div>
            <div>
              <textarea class="materialize-textarea" name="message" id="message" required></textarea>
              <label for="message">Message</label>
            </div>
            <div class="center">
              <button class="btn waves-effect waves-light" type="submit">
                Submit
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </div>

      </form>
    </div>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>

  </body>
</html>
