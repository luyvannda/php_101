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
          'title' => 'Do Androids Dream of Electric Sheep',
          'releasedYear' => 1968,
          'author' => 'Philips K. Dick',
          'purchaseUrl' => 'www.example1.com',
        ],
        [
          'title' => 'The Langoliers',
          'releasedYear' => 1990,
          'author' => 'Stephen King',
          'purchaseUrl' => 'www.example2.com',
        ],
        [
          'title' => 'Project Hail Mary',
          'releasedYear' => 2021,
          'author' => 'Andy Weir',
          'purchaseUrl' => 'www.example3.com',
        ],
        [
          'title' => 'The Martian',
          'releasedYear' => 2011,
          'author' => 'Andy Weir',
          'purchaseUrl' => 'www.example4.com',
        ],
      ];

      function filterByAuthor($books, $author)
      {
        $filteredBooks = [];

        foreach ($books as $book) {
          if ($book['author'] === $author) {
            $filteredBooks[] = $book;
          }
        }
        return $filteredBooks;
      }

    ?>
    <h1>Recommended Books</h1>
    <ul>
      <?php foreach (filterByAuthor($books, 'Stephen King') as $book): ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>"><?= "{$book['title']}&trade;" ?></a>(<?= $book['releasedYear'] ?>) by
          <?= $book['author'] ?>.
        </li>
      <?php endforeach; ?>
    </ul>

  </body>

</html>