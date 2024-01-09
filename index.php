<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
  </head>

  <body>
    <?php

    $books = [
      [
        "title" => "Do Androids Dream of Electric Sheep",
        "releasedYear" => 1998,
        "author" => "Joe Joe",
        "purchaseUrl" => "www.example1.com",
      ],

      [
        "title" => "The Langoliers",
        "releasedYear" => 2008,
        "author" => "Mary Jane",
        "purchaseUrl" => "www.example2.com",
      ],

      [
        "title" => "Hail Mary",
        "releasedYear" => 2020,
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
          (<?= $book["releasedYear"] ?>)
          by <?= $book["author"] ?>.
        </li>
      <?php endforeach; ?>
    </ul>
  </body>

</html>