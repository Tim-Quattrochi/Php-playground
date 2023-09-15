   <?php

    $books = [
        [
            'name' => 'Man on Fire',
            'author' => 'Philip Nicholson',
            'year' => 2010,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Last of Us',
            'author' => 'Neil Druckmann',
            'year' => 2013,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Last of Us Part II',
            'author' => 'Neil Druckmann',
            'year' => 2020,
            'purchaseUrl' => 'http://example.com'
        ]
    ];


    //arrow function in php
    // $filteredBooks = array_filter($books, fn ($book) => $book['author'] === 'Neil Druckmann');

    $filteredBooks = array_filter($books, function ($book) {
        return $book['author'] === 'Neil Druckmann';
    });

    require("./views/index.view.php");
