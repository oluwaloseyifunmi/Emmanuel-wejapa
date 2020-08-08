<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <title>Success Page</title>
    <style>
      <?php
        $favc = $_GET['favcolor'];
      ?>
      body {
        background-color: <?=$favc?>;
        font-family: 'Open Sans', Helvetica, sans-serif;
      }

      h2 {
        color: green;
      }
    
    </style>
  </head>
  <body class="success">
    <h2>Registration Successful</h2>
      <?php
        $fname = $_GET['firstname'];
        print "<h4>Hello, $fname!</h4>";
        print "<p>You have successfully registered your profile. Thank you!"
      ?>
  </body>
</html>