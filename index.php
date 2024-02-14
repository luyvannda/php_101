
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

$filterByAuthor = array_filter($books, function ($book) {
  return $book['releasedYear'] >= 1950 && $book['releasedYear'] <= 2020;
});

require 'index.view.php';
