<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Demo</title>

    <style>
      body {
        display: grid;
        place-items: center;
        font-family: sans-serif;
        height: 100vh;
        margin: 0;
      }
    </style>


  </head>

  <body>

    <?php

    $name = "Dark Matter";
    $read = false;
    $message = "";

    if ($read) {
      $message = "You read '$name'";
    } else {
      $message = "You have Not read '$name'";
    }

    ?>

    <h1>

      <?= $message ?>

    </h1>

  </body>

</html>