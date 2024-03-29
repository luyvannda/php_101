<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
  </head>

  <body>

  <?php

    $movies = [
      [
        'title' => 'The Art of War',
        'releaseDate' => 1990
      ],
      [
        'title' => 'Star Wars: Return of The Jedi',
        'releaseDate' => 2010
      ],
      [
        'title' => 'Battle Royale',
        'releaseDate' => 1999
      ],
      [
        'title' => 'The Avengers: End Game',
        'releaseDate' => 2019
      ],
      [
        'title' => 'Gone in 60 Seconds',
        'releaseDate' => 2000
      ],
      [
        'title' => 'The Last of Us',
        'releaseDate' => 2023
      ]
    ];

    function getMoviesByReleasedDate($movies)
    {
      $filteredMovies = [];

      foreach ($movies as $movie) {
        if ($movie['releaseDate'] >= 2000) {
          $filteredMovies[] = $movie;
        }
      }
      return $filteredMovies;
    }

  ?>

 <h1>Recommended Action Movies</h1>

 <ul>
  <?php foreach (getMoviesByReleasedDate($movies) as $movie): ?>

      <li><?= $movie['title'] ?> (<?= $movie['releaseDate'] ?>)</li>
    
  <?php endforeach ?>

  </ul>

  </body>

</html>