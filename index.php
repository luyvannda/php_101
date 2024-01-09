<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Demo</title>

  </head>

  <body>
    <?php

    $books = [
      [
        "title" => "Do Androids Dream of Electric Sheep",
        "author" => "Joe Joe",
        "purchaseUrl" => "www.example1.com",
      ],

      [
        "title" => "The Langoliers",
        "author" => "Mary Jane",
        "purchaseUrl" => "www.example2.com",
      ],

      [
        "title" => "Hail Mary",
        "author" => "Peter Parker",
        "purchaseUrl" => "www.example3.com",
      ]
    ]

      ?>

    <h1>Recommended Books</h1>

    <ul>

      <?php foreach ($books as $book): ?>

        <li>
          <a href="<?= $book["purchaseUrl"] ?>">
            <?= "{$book["title"]}&trade;" ?>
          </a>
          by
          <?= $book["author"] ?>
        </li>

      <?php endforeach; ?>

    </ul>

  </body>

</html>