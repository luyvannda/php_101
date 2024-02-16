<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
  </head>

  <body>
    
    <h1>Recommended Books</h1>
    <ul>
      <?php foreach ($filterByAuthor as $book): ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>"><?= "{$book['title']}&trade;" ?></a>(<?= $book['releasedYear'] ?>) by
          <?= $book['author'] ?>.
        </li>
      <?php endforeach; ?>
    </ul>

   

  </body>

</html>